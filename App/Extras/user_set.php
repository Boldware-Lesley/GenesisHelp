<?php
if (empty(session_id())) {
    @session_start();
}
if (!isset($conn) && isset($GLOBALS['conn'])) {
    $conn = $GLOBALS['conn'];
}
if (!isset($conn)) {
    $conn = new genesis\MyConnection();
    $GLOBALS['conn'] = $conn;
}
$MEMBER = null;
$USER = null;
$Accounts=array();
$AccountOptions=array();
$ACCOUNT_OPTIONS_AVAILABLE="";
if (isset($_SESSION,$database_server)) {
    if (isset($_SESSION["ACCOUNT"])) {
        $MEMBER = genesis\Debonlinecust::ini_code($database_server->CO,$database_server->Branch,$_SESSION["ACCOUNT"]);
        if(isset($MEMBER->genesisaccount) && !empty($MEMBER->genesisaccount)){
            array_push($Accounts,$MEMBER->genesisaccount);
        }
    }else if (isset($_SESSION["USER"])) {
        $USER = genesis\Sysuser::ini_code($_SESSION["USER"]);
    }
}

//region Site Type


if(isset($MEMBER->recid)){

    //region Get Account Options
    $my_acc="";
    foreach ($Accounts as $acc) {
        if(!empty($my_acc)){
            $my_acc.=",";
        }
        $my_acc.=sql_cover_value(escapeSql($acc));
    }
    if (!empty($my_acc)) {
        $sql = "SELECT tbl0.[ACCOUNT],tbl0.[NAME] FROM [DEBMaster] tbl0 ";
        $sql .= " WHERE tbl0.[Status]<>'X'  ";
        if (!empty($my_acc)) {
            $sql .= " AND tbl0.[Account] IN (" . $my_acc . ") ";
        }

        $stmt = $conn->getStatement($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        if (count($result) > 0) {
            foreach ($result as $value) {
                if (!empty($value['NAME'])) {
                    $AccountOptions[$value['ACCOUNT']] = $value['NAME'];

                }
            }
        }
    }

    foreach ($AccountOptions as $code => $name) {
        if (!empty($name)) {
            $ACCOUNT_OPTIONS_AVAILABLE .= '<option value="' . $code . '">' . $name . '</option>\n';
        }
    }

    //endregion


    $MyTheme = new Template(TEMPLATES_PATH . 'index.html');
    $MyTheme->assign('theme_url', TEMPLATES_URL);
    $MyTheme->assign('appname', AppName);
    $MyTheme->assign('SITE_KEYWORDS', AppName);
    $MyTheme->assign('main_url', MAIN_URL);
    if (!empty($app_icon)) {
        $MyTheme->assign('app_icon', $app_icon);
    }else{
        $MyTheme->assign('app_icon', MAIN_URL . 'file/App?h=48');
    }
    $MyTheme->assign('app_logo', MAIN_URL . 'file/App?h=50');
}else if(isset($USER->recid)){

    $MyTheme = new Template(TEMPLATES_PATH . 'cms.html');

    $MyTheme->assign('theme_url', TEMPLATES_URL);
    $MyTheme->assign('appname', AppName);
    $MyTheme->assign('SITE_KEYWORDS', AppName);
    $MyTheme->assign('main_url', MAIN_URL);
    if (!empty($app_icon)) {
        $MyTheme->assign('app_icon', $app_icon);
    }else{
        $MyTheme->assign('app_icon', MAIN_URL . 'file/App?h=48');
    }
    $MyTheme->assign('app_logo', MAIN_URL . 'file/App?h=50');
}

//endregion


if (isset($MEMBER, $MEMBER->vipno) && !empty($MEMBER->vipno)) {
    $GLOBALS['MEMBER'] = $MEMBER;
}
if (isset($USER, $USER->usercode) && !empty($USER->usercode)) {
    $GLOBALS['USER'] = $USER;
}




