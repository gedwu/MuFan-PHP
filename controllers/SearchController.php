<?php
    if(isset($_POST['processSearch'])) {
    $showresult = true;
    if(empty($_POST['key'])) {
        echo 'Iveskite paieskos fraze<br />';
        $showresult = false;
    }

    if ($showresult) {
        $articles = searchArticles($pdo, $_POST['key']);
        $games = searchGames($pdo, $_POST['key']);
        $players = searchPlayers($pdo, $_POST['key']);
    } else {
        $articles = [];
    }

    if (!empty($articles)) {
        require(ARTICLE_PAGES.'searchResults.php');
    }

    if (!empty($games)) {
        require(GAME_PAGES.'searchResults.php');
    }

    if (!empty($players)) {
        require(PLAYER_PAGES.'searchResults.php');
    }

    if (empty($articles) && empty($games) && empty($players)) {
        require_once(INFOS_ROOT.'noSearchResults.php');
    }

}
