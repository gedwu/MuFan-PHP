<?php

//ASSETS
define("CSS_ROOT", "assets/css/");
define("JS_ROOT", "assets/js/");
define("IMG_ROOT", "assets/img/");
    define("IMG_ARTICLES", IMG_ROOT."articles/");
    define("IMG_CLUBS", IMG_ROOT."clubs/");
    define("IMG_FLAGS", IMG_ROOT."flags/");
    define("IMG_LEAGUES", IMG_ROOT."leagues/");
    define("IMG_PLAYERS", IMG_ROOT."players500x333/");
    define("IMG_LOGO", IMG_ROOT);

//AUTOLOAD
define("AUTOLOAD_ROOT", "autoload/");
define("INCLUDES_ROOT", AUTOLOAD_ROOT."includes/");
    define("FUNCTIONS_ROOT", INCLUDES_ROOT);
    define("LIBRARIES_ROOT", INCLUDES_ROOT);

//MODELS
define("MODELS_ROOT", "models/");

//CONTROLLERS
define("CONTROLLERS_ROOT", "controllers/");
    define("ARTICLE_CONTROLLERS", CONTROLLERS_ROOT."article/");
    define("BLOG_CONTROLLERS", CONTROLLERS_ROOT."blog/");
    define("GAME_CONTROLLERS", CONTROLLERS_ROOT."game/");
    define("PLAYER_CONTROLLERS", CONTROLLERS_ROOT."player/");
    define("USER_CONTROLLERS", CONTROLLERS_ROOT."user/");

//VIEWS
define("VIEWS_ROOT", "views/");
    define("PAGES_ROOT", VIEWS_ROOT."pages/");
        define("ARTICLE_PAGES", PAGES_ROOT."article/");
        define("BLOG_PAGES", PAGES_ROOT."blog/");
        define("GAME_PAGES", PAGES_ROOT."game/");
        define("PLAYER_PAGES", PAGES_ROOT."player/");
        define("USER_PAGES", PAGES_ROOT."user/");
    define("PARTIALS_ROOT", VIEWS_ROOT."partials/");
        define("CONFIRMATIONS_ROOT", PARTIALS_ROOT."confirmations/");
        define("ERRORS_ROOT", PARTIALS_ROOT."errors/");
        define("INFOS_ROOT", PARTIALS_ROOT."infos/");
        define("LAYOUTS_ROOT", PARTIALS_ROOT."layouts/");
        define("TABLES_ROOT", PARTIALS_ROOT."tables/");
