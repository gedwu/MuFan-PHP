<?php
$list = getCommentsForArticle($pdo, $_GET['article_id']);

foreach($list as &$item) {
    /**
     * add getRatingsUpForComment
     * add getRatingsDownForComment
     */
    $comment_id = $item['id'];
    $totalUp = getRatingsUpForComment($pdo, $comment_id);
    $item['up'] = $totalUp;
$totalDown = getRatingsDownForComment($pdo, $comment_id);
    $item['down'] = $totalDown;
}

echo json_encode(array('list' => $list));
exit;
