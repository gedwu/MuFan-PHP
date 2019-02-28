<?php

$blogs =  getBlogs($pdo);
if (!empty($blogs)) {
    require(BLOG_PAGES.'list.php');
//    foreach ($blogs as $blog) {
//        $user = getUserById($pdo, $blog['user_id']);
//        require(BLOG_PAGES.'list.php');
//    }
} else {
    $errorKey = 'Blogų';
    require_once(ERRORS_ROOT.'notFound.php');
}
exit;
