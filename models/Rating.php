<?php

function getRatingsUpForComment($pdo, $comment_id)
{
    $sql = "
            SELECT count(id) 
            FROM `ratings` 
            WHERE `comment_id` = :comment_id AND 
              `up` = 1
            LIMIT 1
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':comment_id', $comment_id, PDO::PARAM_INT);

    $stmt->execute();
    $result =  $stmt->fetchColumn();

    return $result;
}

function getRatingsDownForComment($pdo, $comment_id)
{
    $sql = "
            SELECT count(id) 
            FROM `ratings` 
            WHERE `comment_id` = :comment_id AND 
              `down` = 1
            LIMIT 1
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':comment_id', $comment_id, PDO::PARAM_INT);

    $stmt->execute();
    $result =  $stmt->fetchColumn();

    return $result;
}




function getRatingsUpForBlog($pdo, $blog_id)
{
    $sql = "
            SELECT count(id) 
            FROM `blogs_ratings` 
            WHERE `blog_id` = :blog_id AND 
              `up` = 1
            LIMIT 1
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':blog_id', $blog_id, PDO::PARAM_INT);

    $stmt->execute();
    $result =  $stmt->fetchColumn();

    return $result;
}

function getRatingsDownForBlog($pdo, $blog_id)
{
    $sql = "
            SELECT count(id) 
            FROM `blogs_ratings` 
            WHERE `blog_id` = :blog_id AND 
              `down` = 1
            LIMIT 1
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':blog_id', $blog_id, PDO::PARAM_INT);

    $stmt->execute();
    $result =  $stmt->fetchColumn();

    return $result;
}








function getRatingByCustomerAndComment($pdo, $comment_id, $user_id)
{
    $sql = "
            SELECT count(id) 
            FROM `ratings` 
            WHERE `comment_id` = :comment_id AND 
              `user_id` = :user_id
            LIMIT 1
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':comment_id', $comment_id, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);

    $stmt->execute();
    $result =  $stmt->fetchColumn();

    return $result;
}

function getRatingByCustomerAndCommentForBlog($pdo, $blog_id, $user_id)
{
    $sql = "
            SELECT count(id) 
            FROM `blogs_ratings` 
            WHERE `blog_id` = :blog_id AND 
              `user_id` = :user_id
            LIMIT 1
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':blog_id', $blog_id, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);

    $stmt->execute();
    $result =  $stmt->fetchColumn();

    return $result;
}


function insertRatingUpForComment($pdo, $comment_id, $user_id)
{
    if(empty($user_id)) {
        return false;
    }
    $sql = "
      INSERT INTO `ratings`
      (user_id, comment_id, up)
      VALUES
      (:user_id, :comment_id, 1)
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':comment_id', $comment_id, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $pdo->lastInsertId();
}

function insertRatingDownForComment($pdo, $comment_id, $user_id)
{
    $sql = "
      INSERT INTO `ratings`
      (user_id, comment_id, down)
      VALUES
      (:user_id, :comment_id, 1)
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':comment_id', $comment_id, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $pdo->lastInsertId();
}

function insertRatingUpForBlog($pdo, $blog_id, $user_id)
{
    $sql = "
      INSERT INTO `blogs_ratings`
      (user_id, blog_id, up)
      VALUES
      (:user_id, :blog_id, 1)
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':blog_id', $blog_id, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $pdo->lastInsertId();
}

function insertRatingDownForBlog($pdo, $blog_id, $user_id)
{
    $sql = "
      INSERT INTO `blogs_ratings`
      (user_id, blog_id, down)
      VALUES
      (:user_id, :blog_id, 1)
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':blog_id', $blog_id, PDO::PARAM_INT);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    return $pdo->lastInsertId();
}