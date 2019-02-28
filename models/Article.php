<?php

function getSingleNew($pdo, $id) {
    $sql = "SELECT * FROM `articles` WHERE id = :id LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result =  $stmt->fetch();

    if(empty($result)) {
        return array();
    }
    return $result;
}

function insertNews($pdo, $title, $intro, $content, $photo_url, $video_url) {
    $sql = "
            INSERT INTO `articles` 
                    (title, intro, content, photo_url, video_url, created_at) 
            VALUES (:title, :intro, :content, :photo_url, :video_url, NOW())
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':title', $title, PDO::PARAM_STR);
    $stmt->bindValue(':intro', $intro, PDO::PARAM_STR);
    $stmt->bindValue(':content', $content, PDO::PARAM_STR);
    $stmt->bindValue(':photo_url', $photo_url, PDO::PARAM_STR);
    $stmt->bindValue(':video_url', $video_url, PDO::PARAM_STR);
    return $stmt->execute();
}

function searchArticles($pdo, $keyword) {
    $sql="SELECT * FROM `articles` WHERE `title` LIKE :keyword";
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':keyword','%'.$keyword.'%');
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(empty($result)) {
        return array();
    }
    return $result;
}

function getArticles($pdo) {
    $sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(empty($result)) {
        return array();
    }
    return $result;
}