<?php
$item = getSingleMatch($pdo, $idMatch);

 if(!empty($item)) {
     require_once(GAME_PAGES . 'single.php');
 } else {
     $errorKey = 'Mačo';
     require_once(ERRORS_ROOT.'notFound.php');
 }

