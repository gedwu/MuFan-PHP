<?php

if(isset($_POST['processAddNew'])) {
    if(
        !empty($_POST['pavadinimas']) &&
        !empty($_POST['intro']) &&
        !empty($_POST['turinys'])
    ) {
        $nuotrauka = null;

        $uploaddir = IMG_ARTICLES;
        $filename = time().'_'.basename($_FILES['nuotrauka']['name']); //mktime kad butu unikalus pavadinimas nuotraukos
        $uploadfile = $uploaddir . $filename;


        if (move_uploaded_file($_FILES['nuotrauka']['tmp_name'], $uploadfile)) {
            $nuotrauka = $filename;
        }

        insertNews(
            $pdo,
            $_POST['pavadinimas'],
            $_POST['intro'],
            $_POST['turinys'],
            $nuotrauka,
            $_POST['video']
        );
        header("Location: index.php?page=article_add&success=1");
        exit;
    }
}
header("Location: index.php?page=article_add&error=1");
exit;