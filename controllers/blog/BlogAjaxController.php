<?php
$list =  getBlogs($pdo);
foreach($list as &$item) {
    $blog_id = $item['id'];
    $totalUp = getRatingsUpForBlog($pdo, $blog_id);
    $item['up'] = $totalUp;
    $totalDown = getRatingsDownForBlog($pdo, $blog_id);
    $item['down'] = $totalDown;
}
echo json_encode(array('list' => $list));
exit;
