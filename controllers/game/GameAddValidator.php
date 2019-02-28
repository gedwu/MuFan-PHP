<?php

if(isset($_POST['processAddMatch'])) {
    if(
        !empty($_POST['opp'])
        && !empty($_POST['match_date'])
        && !empty($_POST['match_time'])
        && !empty($_POST['league'])
        && $_POST['home'] <=1
        && $_POST['home'] >=0
    ) {
        insertMatch(
            $pdo,
            $_POST['opp'],
            $_POST['league'],
            $_POST['match_date'],
            $_POST['match_time'],
            $_POST['home']
        );
        header("Location: index.php?page=game_add&success=1");
        exit;
    }
}
header("Location: index.php?page=game_add&error=1");
exit;