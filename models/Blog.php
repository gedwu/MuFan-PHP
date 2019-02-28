<?php

function getBlogs($pdo) {
    $sql = "
            SELECT b.*, u.`username` 
            FROM `blogs` b
            INNER JOIN `users` u
              ON b.`user_id` = u.`id`
            ORDER BY `created_at` DESC
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(empty($result)) {
        return array();
    }
    return $result;
}

function insertBlog($pdo, $user_id, $title, $content) {
    $sql = "INSERT INTO `blogs` (user_id, title, content, created_at) VALUES (:user_id, :title, :content, NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindValue(':title', $title, PDO::PARAM_STR);
    $stmt->bindValue(':content', $content, PDO::PARAM_STR);
    return $stmt->execute();
}

function deleteBlog($pdo, $id)
{
    $sql = "
            DELETE FROM `blogs` 
            WHERE `id` = :id
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}
