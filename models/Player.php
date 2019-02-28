<?php

function getPositions($pdo) {
    $sql = "SELECT * FROM `positions`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(empty($result)) {
        return array();
    }

    return $result;
}

function getPlayersByPosition($pdo, $pos) {
    $sql = "
            SELECT * 
            FROM `players` 
            WHERE pos = :pos
            ORDER BY nr ASC
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':pos', $pos, PDO::PARAM_STR);
    $stmt->execute();
    $results =  $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(empty($results)) {
        return array();
    }

    foreach ($results as $i => $result) {
        $results[$i]['birth_date'] =  getAge($result['birth_date']);
    }

    return $results;
}

function getSinglePlayer($pdo, $id) {
    $sql = "SELECT * FROM `players` WHERE id = :id LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result =  $stmt->fetch();

    if(empty($result)) {
        return array();
    }
    return $result;
}


function searchPlayers($pdo, $keyword) {
    $sql="SELECT * FROM `players` WHERE CONCAT(`name_first`, \" \", `name_last`) LIKE :keyword";
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':keyword','%'.$keyword.'%');
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(empty($results)) {
        return array();
    }

    foreach ($results as $i => $result) {
        $results[$i]['birth_date'] =  getAge($result['birth_date']);
    }

    return $results;
}