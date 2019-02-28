<?php
    $articles = getArticles($pdo);

    if (!empty($articles)) {
        echo '<div class="row">';
        $counter = 0;
        foreach ($articles as $article) {
            $counter++;
            require(ARTICLE_PAGES.'list.php');
            if($counter % 3 == 0) {
                echo '</div>';
                echo '<div class="row">';
            }
        }
        echo '</div>';
    } else {
        $errorKey = 'Naujienų';
        require_once(ERRORS_ROOT.'notFound.php');
    }
