<?php
/**
 * @param PDO $pdo
 * @param int $id
 * @return array
 */
function getCommentsForArticle($pdo, $id) {
    $sql = "
      SELECT c.*, u.username
      FROM `comments` c
      LEFT JOIN users u
      ON c.user_id = u.id
      WHERE c.article_id = :id 
      ORDER BY c.`created_at` DESC
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (empty($result)) {
        return [];
    }
    return $result;
}

/**
 * @param PDO $pdo
 * @param int $id
 * @return array
 */
function getCommentsForBlog($pdo, $id) {
    $sql = "
      SELECT c.*, u.username
      FROM `comments` c
      LEFT JOIN users u
      ON c.user_id = u.id
      WHERE c.blog_id = :id ORDER BY c.`created_at` DESC
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function countArticleComments($pdo, $article_id) {
    $sql = "
      SELECT COUNT(*) 
      FROM `comments` 
      WHERE article_id = :id
     ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $article_id, PDO::PARAM_INT);

    $stmt->execute();
    $result =  $stmt->fetchColumn();

    return $result;
}

/**
 * @param PDO $pdo
 * @param int $article_id
 * @param int $user_id
 * @param string $comment
 * @return mixed
 */
function insertCommentForArticle($pdo, $article_id, $user_id, $content) {
    $sql = "
      INSERT INTO `comments`
      (user_id, article_id, content, created_at)
      VALUES
      (:user_id, :article_id, :content, :created_at)
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':article_id', $article_id, PDO::PARAM_INT);
    $stmt->bindValue(':content', $content, PDO::PARAM_STR);
    $stmt->bindValue(':created_at', date('Y-m-d H:i:s'), PDO::PARAM_STR);
    $stmt->execute();
    return $pdo->lastInsertId();
}

function deleteComment($pdo, $id)
{
    $sql = "
            DELETE FROM `comments` 
            WHERE `id` = :id
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

