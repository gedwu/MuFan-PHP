<?php
$list = insertCommentForArticle($pdo, $_POST['article_id'], $_SESSION['user_id'], $_POST['comment']);
echo json_encode(array('success' => 1));
exit;
