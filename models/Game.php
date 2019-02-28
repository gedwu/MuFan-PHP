<?php

function getLastMatches($pdo) {
    $sql = "SELECT * FROM `games` WHERE `match_date` < NOW() ORDER BY `match_date` ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results =  $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(empty($results)) {
        return array();
    }

    return $results;
}

function getNextMatches($pdo) {
    $sql = "SELECT * FROM `games` WHERE `match_date` > NOW() ORDER BY `match_date` ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results =  $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(empty($results)) {
        return array();
    }

    return $results;
}

function getSingleMatch($pdo, $id) {
    $sql = "SELECT * FROM `games` WHERE id = :id LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result =  $stmt->fetch();

    if(empty($result)) {
        return array();
    }
    return $result;
}

function searchGames($pdo, $keyword) {
    $sql="SELECT * FROM `games` WHERE `opp` LIKE :keyword ORDER BY `match_date` ASC";
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':keyword','%'.$keyword.'%');
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(empty($result)) {
        return array();
    }
    return $result;
}

function insertMatch($pdo, $opp, $league, $date, $time, $home) {
    $sql = "INSERT INTO `games` (opp, league, match_date, match_time, home) 
                          VALUES (:opp, :league, :match_date, :match_time, :home);";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':opp', $opp, PDO::PARAM_STR);
    $stmt->bindValue(':league', $league, PDO::PARAM_STR);
    $stmt->bindValue(':match_date', $date, PDO::PARAM_STR);
    $stmt->bindValue(':match_time', $time, PDO::PARAM_STR);
    $stmt->bindValue(':home', $home, PDO::PARAM_BOOL);
    return $stmt->execute();
}

function updateGame($pdo, $match_id, $team1_rez, $team2_rez) {
    $sql = "UPDATE `games` SET goals_in = :team1_rez, goals_out = :team2_rez WHERE id = :id";
    $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':team1_rez', $team1_rez, PDO::PARAM_INT);
    $stmt->bindValue(':team2_rez', $team2_rez, PDO::PARAM_INT);
    $stmt->bindValue(':id', $match_id, PDO::PARAM_INT);
    return $stmt->execute();
}
