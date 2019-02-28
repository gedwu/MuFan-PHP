<?php
$showForm = true;
$errors = [];

if(!empty($user)) {
    $showForm = false;
}

if(isset($_POST['processRegister'])) {
    $error = false;

    if(empty($_POST['user'])) {
        array_push($errors, 'Vartotojo vardas neįvestas');
        $error = true;
    }

    if(empty($_POST['pass'])) {
        array_push($errors, 'Slaptazodis neįvestas');
        $error = true;
    }
    if(empty($_POST['email'])) {
        array_push($errors, 'El. paštas neįvestas');
        $error = true;
    }
    if($_POST['pass'] != $_POST['pass2']) {
        array_push($errors, 'Slaptažodžiai nesutampa');
        $error = true;
    }

    if (!preg_match("/^[a-zA-Z0-9]*$/",$_POST['user'])) {
        array_push($errors, 'Vartotojo vardas gali būti sudarytas tik iš raidzių ir skaičių.');
        $error = true;
    } else {
        // Patikriname ar toks vartotojas egzistuoja
        $findUser = getUserByUsername($pdo, $_POST['user']);
        if(!empty($findUser)) {
            array_push($errors, 'Toks vartotojas jau egzistuoja');
            $error = true;
        }
    }

    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST['email'])) {
        array_push($errors, 'Blogas el. pašto adresas');
        $error = true;
    }

    //Registration and confirmation msg
    if($error === false) {
        insertUser($pdo, $_POST['user'], $_POST['pass'], $_POST['email']);
            require_once(CONFIRMATIONS_ROOT.'registerSucces.php');
        $showForm = false;
    }
}

if (!empty($errors)) {
    require(ERRORS_ROOT.'registerFailled.php');
}

if($showForm) {
    require USER_PAGES.'registrationForm.php';
}




