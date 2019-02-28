<?php

if(isset($_POST['processAddBlog'])) {
    if(
        !empty($user)
        && !empty($_POST['pavadinimas'])
        && !empty($_POST['turinys'])
    ) {
        insertBlog(
            $pdo,
            $_SESSION['user_id'],
            $_POST['pavadinimas'],
            $_POST['turinys']
        );
        header("Location: index.php?page=blog_add&success=1");
        exit;
    }
}
header("Location: index.php?page=blog_add&error=1");
exit;