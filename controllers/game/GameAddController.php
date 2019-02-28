<?php
$show = true;

if(empty($user)) {
    $show = false;
} elseif($user['admin'] != 1) {
    $show = false;
}

if(isset($_GET['success']) && $_GET['success'] == 1) {
    $confKey = 'Mačas';
    require_once(CONFIRMATIONS_ROOT.'addSucces.php');
}

if(isset($_GET['error']) && $_GET['error'] == 1) {
    $errorKey = 'Mačo';
    require_once(ERRORS_ROOT.'addFailled.php');
}

if($show === true) {
    require_once(GAME_PAGES.'addForm.php');
} else {
    $userType = 'administratoriams';
    require_once(ERRORS_ROOT.'accesDenied.php');
}


