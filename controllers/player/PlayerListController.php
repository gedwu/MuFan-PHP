<?php
$positions = getPositions($pdo);
if (!empty($positions)) {
    foreach($positions as $position) {
        $players = getPlayersByPosition($pdo, $position['letter']);
        if (!empty($players)) {
            require(PLAYER_PAGES.'list.php');
        } else {
            $errorKey =  'POZICIJOS: '.$position['name'];
            require(ERRORS_ROOT.'notFound.php');
        }
    }
} else {
    $errorKey = 'Pozicijų';
    require(ERRORS_ROOT.'notFound.php');
}




