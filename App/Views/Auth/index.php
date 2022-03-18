<?php
require_once(__DIR__ . "/../../Extras/public_properties.php");
if (isset ($_SESSION ["RETURN_URL"])) {
    $ref = trim($_SESSION [RETURN_URL]);
} else {
    $ref = MAIN_URL;
}
if (isset($MEMBER->recid)) {
    redirect($ref);
}


//Variables
$app_icon = MAIN_URL . 'file/App?w=32&h=32';
$app_logo = MAIN_URL . 'file/App?w=128&h=80';
$LoginTheme = new Template(TEMPLATES_PATH . 'login.html');
$LoginTheme->assign('theme_url', TEMPLATES_URL);
$LoginTheme->assign('main_url', MAIN_URL);
$LoginTheme->assign('app_icon', $app_icon);
$LoginTheme->assign('app_logo', MAIN_URL . 'file/App?h=50');
if (isset($LoginTheme)) {
    $LoginTheme->assign('appname', AppName);
    $LoginTheme->assign('app_icon', $app_icon);
    $LoginTheme->assign('app_logo', $app_logo);
    $LoginTheme->assign('title', 'Member Sign In');

    $LoginTheme->assign('REF', $ref);//??
    $LoginTheme->assign('USER_TYPE', 'member');//??
    $LoginTheme->assign('LOGIN_STYLE');//??
    $LoginTheme->assign('SIGN_UP_STYLE', '');//??
    $LoginTheme->assign('OTHER_LOGIN_URL', MAIN_URL . 'Auth/Tech');//??
    $LoginTheme->assign('OTHER_LOGIN_TITLE', 'Technician Login');//??
//Widgets
    $LoginTheme->show();
} else {
    exit();
}
