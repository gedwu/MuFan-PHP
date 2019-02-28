<?php
deleteComment($pdo, $_POST['comment_id']);
echo json_encode(array('success' => 1));
exit;
