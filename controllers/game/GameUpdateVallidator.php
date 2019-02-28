<?php

if(isset($_POST['processUpdateGame'])) {
    if(
        isset($_POST['goals_in'])
        && isset($_POST['goals_out'])

        && is_numeric ($_POST['goals_in'])
        && is_numeric ($_POST['goals_out'])

        && $_POST['goals_in'] < 10
        && $_POST['goals_out'] < 10

        && $_POST['goals_in'] >= 0
        && $_POST['goals_out'] >= 0

    ) {
        updateGame(
            $pdo,
            $_POST['game_id'],
            $_POST['goals_in'],
            $_POST['goals_out']
        );
//        @todo: validacija, kad nebutu galima atnaujinti macu, kuriu data < now() + 2 val.
        header("Location: index.php?page=game_list&success=1");
        exit;
    }
}
header("Location: index.php?page=game_list&error=1");
exit;