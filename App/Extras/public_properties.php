<?php

use genesis\MyConnection;

if(empty(session_id())){
    @session_start();
}
require_once(__DIR__ . "/../Extras/actions.php");
require_once(__DIR__ . '/../Model/Config.php');
require_once(__DIR__ . '/../Extras/settings.php');

//region Setup
if (!isset($app_server) && isset($GLOBALS['app_server'])) {
    $app_server = $GLOBALS['app_server'];
}
if (!isset($database_server) && isset($GLOBALS['database_server'])) {
    $database_server = $GLOBALS['database_server'];
}

if (!isset($conn) && isset($GLOBALS['conn'])) {
    $conn = $GLOBALS['conn'];
}
if (!isset($conn)) {
    $conn = new MyConnection();
    $GLOBALS['conn'] = $conn;
}

require_once(__DIR__ . '/../Extras/user_set.php');
if (!isset($current) && isset($GLOBALS['current'])) {
    $current = $GLOBALS['current'];
}
//endregion

$app_icon = MAIN_URL . 'file/App?';
if (file_exists(ROOT_URL . 'favicon.png')) {
    $app_icon = MAIN_URL . 'favicon.png';
} elseif (file_exists(ROOT_URL . 'favicon.jpg')) {
    $app_icon = MAIN_URL . 'favicon.jpg';
} elseif (file_exists(ROOT_URL . 'favicon.ico')) {
    $app_icon = MAIN_URL . 'favicon.ico';
} elseif (file_exists(ROOT_URL . 'favicon.svg')) {
    $app_icon = MAIN_URL . 'favicon.svg';
}

$THEME_URL = TEMPLATES_URL . 'public/';
$LoginTheme = new Template(TEMPLATES_PATH . 'login.html');
$MainTheme = new Template(TEMPLATES_PATH . 'index.html');
$LoginTheme->assign('theme_url', TEMPLATES_URL);
$LoginTheme->assign('main_url', MAIN_URL);
$LoginTheme->assign('app_icon', $app_icon);
$LoginTheme->assign('app_logo', MAIN_URL . 'file/App?h=50');
$GLOBALS['THEME_URL'] = $THEME_URL;

