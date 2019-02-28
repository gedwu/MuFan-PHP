<?php
deleteBlog($pdo, $_POST['blog_id']);
echo json_encode(array('success' => 1));
exit;