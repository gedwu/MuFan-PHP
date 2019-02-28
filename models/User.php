<?php

function insertUser($pdo, $username, $password, $email) {
    $sql = "INSERT INTO `users` (`username`, `password`, `email`) VALUES (:username, :password, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':password', sha1($password), PDO::PARAM_STR); // uzhesuojam password
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    return $stmt->execute();
}

function getUserByUsername($pdo, $username) {
    $sql = "SELECT * FROM `users` WHERE `username` = :username LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $result =  $stmt->fetch();
    if(empty($result)) {
        return array();
    }
    return $result;
}

function getUserById($pdo, $id) {
    $sql = "SELECT * FROM `users` WHERE id = :id LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $result =  $stmt->fetch();
    if(empty($result)) {
        return [];
    }
    return $result;
}

function loginUser($pdo, $username, $password) {
    $sql = "SELECT * FROM `users` WHERE `username` = :username AND `password` = :password LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->bindValue(':password', sha1($password), PDO::PARAM_STR);
    $stmt->execute();
    $result =  $stmt->fetch();
    if(empty($result)) {
        return array();
    }
    return $result;
}