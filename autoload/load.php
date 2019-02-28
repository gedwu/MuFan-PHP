<?php

//Displaying errors
ini_set('log_errors', true);
ini_set('error_log', 'errors.log');

require_once('config/configDb.php');
require_once('config/configPatches.php');
require_once('config/configSite.php');
require_once(FUNCTIONS_ROOT.'functions.php');

require_once(MODELS_ROOT.'Article.php');
require_once(MODELS_ROOT.'Blog.php');
require_once(MODELS_ROOT.'Game.php');
require_once(MODELS_ROOT.'Player.php');
require_once(MODELS_ROOT.'User.php');
require_once(MODELS_ROOT.'Comment.php');
require_once(MODELS_ROOT.'Rating.php');


//Connecting to database
$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, DB_USER, DB_PASS, $opt);
