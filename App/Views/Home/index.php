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

if (isset($MainTheme,$database_server,$Accounts)) {
    if (!isset($conn) && isset($GLOBALS['conn'])) {
        $conn = $GLOBALS['conn'];
    }
    if (!isset($conn)) {
        $conn = new MyConnection();
        $GLOBALS['conn'] = $conn;
    }
    $MainTheme->assign('title', 'Dashboard');
    $MainTheme->assign('breadcrumb',$breadcrumb); //??
    $MainTheme->assign('DASHSELECT', 'active');


    //region Get LOB
    $query = " SELECT ";
    $query .= "  T0.[RECID],T0.[BUSLINECODE],T0.[DESCRIPTION] ";
    $query .= " FROM [SVMLineOfBusMst] T0  ";
    $query .= " WHERE T0.[CO]=:CO  ";
    $query .= " ORDER BY T0.[BusLineCode] ASC;";
    $stmt = $conn->getStatement($query);
    $stmt->bindParam(":CO", $database_server->CO);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $LOBOptions = array();
    if (count($result) > 0) {
        foreach ($result as $value) {
            if (!empty($value['DESCRIPTION'])) {
                $LOBOptions[$value['BUSLINECODE']] = $value['DESCRIPTION'];

            }
        }
    }
    $LOB_OPTIONS_AVAILABLE = "";
    foreach ($LOBOptions as $code => $name) {
        if (!empty($name)) {
            $LOB_OPTIONS_AVAILABLE .= '<option value="' . $code . '">' . $name . '</option>\n';
        }
    }
    $MainTheme->assign('LOB_OPTIONS', $LOB_OPTIONS_AVAILABLE); //??
    //endregion

    if(count($Accounts)>0){
        $MainTheme->renderPartial('CONTENTS_BODY', ROOT_URL . 'App/Extras/Public/Pages/dash.html');
    }else{
        $MainTheme->renderPartial('CONTENTS_BODY', ROOT_URL . 'App/Extras/Public/Pages/account_error.html');
    }

    //Widgets
    $MainTheme->show();
}else{
    exit();
}
