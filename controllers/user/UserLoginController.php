<?php

if(isset($_SESSION['user_id'])) {
    $user = getUserById($pdo, $_SESSION['user_id']);
} else {
    $user = null;
}


if(isset($_POST['processLogin'])) {
    $errors = [];
    $error = false;
    if(empty($_POST['user'])) {
        echo 'Vartotojo vardas neivestas<br />';
        $error = true;
    }

    if(empty($_POST['pass'])) {
        echo 'Slaptazodis neivestas<br />';
        $error = true;
    }

    if (!preg_match("/^[a-zA-Z]*$/",$_POST['user'])) {
        echo 'Vartotojo vardas gali buti sudarytas tik is raidziu<br />';
        $error = true;
    }

    else {
        // Patikriname ar toks vartotojas egzistuoja
        $user = loginUser($pdo, $_POST['user'], $_POST['pass']);
        if(!empty($user)) {
            // prisijungta
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php");
        } elseif($error === false) {
            echo 'Vartotojo vardas ir/arba slaptazodis neteisingas<br />';
            $error = true;
        }
    }
}

