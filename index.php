<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
require_once('autoload/load.php');

$page = isset($_GET['page']) ? $_GET['page'] : '';
$user = isset($_SESSION['user_id']) ? getUserById($pdo, $_SESSION['user_id']) : null;
$idNew = isset($_GET['id_new']) ? $_GET['id_new'] : '0';
$idPlayer = isset($_GET['id_player']) ? $_GET['id_player'] : '0';
$idMatch = isset($_GET['id_match']) ? $_GET['id_match'] : '0';

require_once('routes.php');
