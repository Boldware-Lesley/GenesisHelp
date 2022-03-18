<?php
require_once (__DIR__ . "/../../Extras/public_properties.php");
if (isset ($_SESSION ["RETURN_URL"] )) {
    $ref = trim ( $_SESSION [RETURN_URL] );
} else {
    $ref = MAIN_URL;
}
if (isset($MEMBER->recid,$USER->recid)) {

    redirect ($ref);
}


//Variables
$app_icon=MAIN_URL.'file/App?w=32&h=32';
$app_logo=MAIN_URL.'file/App?w=128&h=80';
if (isset($LoginTheme)) {
    $LoginTheme->assign('appname', AppName);
    $LoginTheme->assign('app_icon', $app_icon);
    $LoginTheme->assign('app_logo', $app_logo);
    $LoginTheme->assign('title', 'Technician Login');
    $LoginTheme->assign('REF',$ref);//??
    $LoginTheme->assign('USER_TYPE','tech');//??
    $LoginTheme->assign('LOGIN_STYLE','background:#464444;color:#ffffff;');//??
    $LoginTheme->assign('SIGN_UP_STYLE','display:none');//??
    $LoginTheme->assign('OTHER_LOGIN_URL',MAIN_URL.'Auth');//??
    $LoginTheme->assign('OTHER_LOGIN_TITLE','Member Login');//??
//Widgets
    $LoginTheme->show();
}else{
    exit();
}
