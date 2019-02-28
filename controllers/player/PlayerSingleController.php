<?php

$item = getSinglePlayer($pdo, $idPlayer);
if(!empty($item)) {
    require_once(PLAYER_PAGES.'single.php');
} else {
    require_once(ERRORS_ROOT.'notFound.php');
}


