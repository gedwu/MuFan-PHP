<?php
    $show = true;

    if(empty($user)) {
        $show = false;
    }

    if(isset($_GET['success']) && $_GET['success'] == 1) {
        $confKey = 'Blogas';
        require_once(CONFIRMATIONS_ROOT.'addSucces.php');
    }

    if(isset($_GET['error']) && $_GET['error'] == 1) {
        $errorKey = 'Blogo';
        require_once(ERRORS_ROOT.'addFailled.php');
    }

    if($show === true) {
        require_once(BLOG_PAGES.'addForm.php');
    } else {
        $userType = 'registruotiems vartotojams';
        require_once(ERRORS_ROOT.'accesDenied.php');
    }

