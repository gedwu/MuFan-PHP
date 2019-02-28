<?php
    $lMatches = getLastMatches($pdo);
    $nMatches = getNextMatches($pdo);

    if(isset($_GET['error']) && $_GET['error'] == 1) {
        $errorKey = 'Mačo';
        require(ERRORS_ROOT.'updateFailled.php');
    }

    if(isset($_GET['success']) && $_GET['success'] == 1) {
        $confKey = 'Mačas';
        require_once(CONFIRMATIONS_ROOT.'updatedSucces.php');
    }

    if (!empty($lMatches)) {
        require_once(GAME_PAGES.'listResults.php');
    } else {
        $infoKey = 'Rezultatų';
        require_once(INFOS_ROOT.'noAtTheMomment.php');

    }

    if (!empty($nMatches)) {
        require_once(GAME_PAGES.'listSchedule.php');
    } else {
        $infoKey = 'Tvarkaraščio';
        require_once(INFOS_ROOT.'noAtTheMomment.php');
    }