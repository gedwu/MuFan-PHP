<?php
$item = getSingleNew($pdo, $idNew);
$errorKey = 'Naujiena';

if(!empty($item)) {
    require_once(ARTICLE_PAGES.'single.php');
}
else {
    require_once(ERRORS_ROOT.'notFound.php');
}
