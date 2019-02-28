<?php

if ($_POST['rating'] == 'up') {
    $hasVoted = getRatingByCustomerAndComment($pdo,$_POST['comment_id'], $_SESSION['user_id']);
    if (!$hasVoted) {
        $list = insertRatingUpForComment($pdo, $_POST['comment_id'], $_SESSION['user_id']);
        echo json_encode(array('success' => 1));
    }
} elseif ($_POST['rating'] == 'down') {
    $hasVoted = getRatingByCustomerAndComment($pdo,$_POST['comment_id'], $_SESSION['user_id']);
    if (!$hasVoted) {
        $list = insertRatingDownForComment($pdo, $_POST['comment_id'], $_SESSION['user_id']);
        echo json_encode(array('success' => 1));
    }
} elseif ($_POST['rating'] == 'blog_up') {
    $hasVoted = getRatingsUpForBlog($pdo,$_POST['blog_id'], $_SESSION['user_id']);
    if (!$hasVoted) {
        $list = insertRatingUpForBlog($pdo, $_POST['blog_id'], $_SESSION['user_id']);
        echo json_encode(array('success' => 1));
    }
} elseif ($_POST['rating'] == 'blog_down') {
    $hasVoted = getRatingsDownForBlog($pdo,$_POST['blog_id'], $_SESSION['user_id']);
    if (!$hasVoted) {
        $list = insertRatingDownForBlog($pdo, $_POST['blog_id'], $_SESSION['user_id']);
        echo json_encode(array('success' => 1));
    }
}
exit;
