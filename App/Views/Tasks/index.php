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
$breadcrumb.="<li class='breadcrumb-item' ><a href='".MAIN_URL."'>Dashboard</a></li>";//Dashboard
include_once(__DIR__ . '/../../Extras/Public/Widgets/page_menu.php');
include_once(__DIR__ . '/../../Extras/Public/Widgets/page_settings.php');

if (isset($MainTheme,$conn,$database_server,$Accounts)) {

        //region All Tickets

        $breadcrumb .= "<li class='breadcrumb-item' ><a href='#'>Tasks</a></li>";//Tickets
        $MainTheme->assign('title', 'Tasks');
        $MainTheme->assign('breadcrumb', $breadcrumb); //??
        $MainTheme->assign('TASKSELECT', 'active');
        if(count($Accounts)>0){
            $MainTheme->renderPartial('CONTENTS_BODY', ROOT_URL . 'App/Extras/Public/Pages/tasks.html');
        }else{
            $MainTheme->renderPartial('CONTENTS_BODY', ROOT_URL . 'App/Extras/Public/Pages/account_error.html');
        }
        //endregion

    $MainTheme->show();
}else{
    exit();
}
