<?php
require_once (__DIR__ . "/../../Extras/public_properties.php");
if (isset ($_SESSION ["RETURN_URL"] )) {
    $ref = trim ( $_SESSION [RETURN_URL] );
} else {
    $ref = MAIN_URL;
}
if (!isset($MEMBER->recid)) {
    redirect (MAIN_URL.'Auth');
}


//Variables
$breadcrumb="";
$breadcrumb.="<li class='breadcrumb-item'><a href='".MAIN_URL."'>Dashboard</a></li>";//Dashboard
include_once(__DIR__ . '/../../Extras/Public/Widgets/page_menu.php');
include_once(__DIR__ . '/../../Extras/Public/Widgets/page_settings.php');

if (isset($MainTheme)) {
    $breadcrumb.="<li class='breadcrumb-item active'><a href='#'>Profile</a></li>";//Dashboard
    $MainTheme->assign('title', 'Profile');
    $MainTheme->assign('breadcrumb',$breadcrumb); //??
    $MainTheme->assign('DASHSELECT', 'active');

    $MainTheme->renderPartial( 'CONTENTS_BODY', ROOT_URL . 'App/Extras/Public/Pages/profile.html' );
    //Widgets
    $MainTheme->show();
}else{
    exit();
}
