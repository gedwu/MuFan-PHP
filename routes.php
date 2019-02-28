<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
// AJAX
if ($page == 'comments_list') {
    require_once(CONTROLLERS_ROOT . 'comment/CommentListController.php');
}
if ($page == 'comments_add') {
    require_once(CONTROLLERS_ROOT . 'comment/CommentAddController.php');
}
if ($page == 'comments_delete') {
    require_once(CONTROLLERS_ROOT . 'comment/CommentDeleteController.php');
}
if ($page == 'blogs_delete') {
    require_once(CONTROLLERS_ROOT . 'blog/BlogDelteController.php');
}

if ($page == 'article_validate') {
    require_once(ARTICLE_CONTROLLERS . 'ArticleAddValidator.php');
}

if ($page == 'blog_validate') {
    require_once(BLOG_CONTROLLERS.'BlogAddValidator.php');
}

if ($page == 'ratings_add') {
    require_once(CONTROLLERS_ROOT . 'rating/RatingAddController.php');
}

if ($page == 'user_login') {
    require_once(USER_CONTROLLERS . 'UserLoginController.php');
}

if ($page == 'blog_ajax') {
    require_once(BLOG_CONTROLLERS . 'BlogAjaxController.php');
}

if ($page == 'game_validate') {
    require_once(GAME_CONTROLLERS . 'GameAddValidator.php');
}

if ($page == 'game_upd_validate') {
    require_once(GAME_CONTROLLERS . 'GameUpdateVallidator.php');
}

require_once(LAYOUTS_ROOT . 'header.php');
require_once(LAYOUTS_ROOT . 'navigation.php');

//@todo: maby use switch
//ARTICLES
    if ($page == 'article_list') {
        require_once(ARTICLE_CONTROLLERS . 'ArticleListController.php');
    } elseif ($page == 'article_single') {
        require_once(ARTICLE_CONTROLLERS . 'ArticleSingleController.php');
    } elseif ($page == 'article_add') {
        require_once(ARTICLE_CONTROLLERS . 'ArticleAddController.php');
    }

//BLOGS
    elseif ($page == 'blog_list') {
        require_once(BLOG_CONTROLLERS.'BlogListController.php');
    }  elseif ($page == 'blog_add') {
    require_once(BLOG_CONTROLLERS.'BlogAddController.php');
    }


//GAMES
    elseif ($page == 'game_list') {
        require_once(GAME_CONTROLLERS . 'GameListController.php');
    } elseif ($page == 'game_single') {
    require_once(GAME_CONTROLLERS . 'GameSingleController.php');
    } elseif ($page == 'game_add') {
    require_once(GAME_CONTROLLERS . 'GameAddController.php');
    }


//PLAYERS
    elseif ($page == 'player_list') {
        require_once(PLAYER_CONTROLLERS . 'PlayerListController.php');
    } elseif ($page == 'player_single') {
        require_once(PLAYER_CONTROLLERS . 'PlayerSingleController.php');
    }

//USERS
    elseif ($page == 'user_register') {
        require_once(USER_CONTROLLERS . 'UserRegistrationController.php');
    }

//SEARCH
    elseif ($page == 'search') {
        require_once(CONTROLLERS_ROOT . 'SearchController.php');
    }

//TABLE
    elseif ($page == 'table') {
        require_once(CONTROLLERS_ROOT.'TableController.php');
    }
else {
    require_once(ARTICLE_CONTROLLERS . 'ArticleListController.php');
}

require_once(LAYOUTS_ROOT . 'footer.php');
