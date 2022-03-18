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
    if(isset($data[0],$data[1])) {
        //region Ticket Detail
        $OBJ = genesis\Svmjobdetails::ini_Code($conn, $database_server->CO, $database_server->Branch, trim((string)$data[0]), trim((string)$data[1]));
        if (isset($OBJ->jobno)) {
            $breadcrumb .= "<li class='breadcrumb-item' ><a href='" . MAIN_URL . "Tickets'>Tickets</a></li>";//Tickets
            $breadcrumb .= "<li class='breadcrumb-item' ><a href='".MAIN_URL . 'Tickets/'.(string)$data[0]."'>Ticket :#".$OBJ->jobno."</a></li>";
            $breadcrumb .= "<li class='breadcrumb-item' ><a href='#'>Line #".$OBJ->linenumber."</a></li>";
            $MainTheme->assign('title', 'Ticket :#' . $OBJ->jobno."Line #".$OBJ->linenumber."");
            $MainTheme->assign('breadcrumb', $breadcrumb); //??
            $MainTheme->assign('OBJ_NO', $OBJ->jobno); //??
            $MainTheme->assign('OBJ_LINE', $OBJ->linenumber); //??
            $MainTheme->assign('OBJ_NOTES', $OBJ->notes); //??
            $MainTheme->assign('HELPSELECT', 'active');
            $MainTheme->assign('HELPTICKETSELECT', 'active');
            $MainTheme->renderPartial('CONTENTS_BODY', ROOT_URL . 'App/Extras/Public/Pages/ticket_photos.html');
        } else {
            redirect(MAIN_URL . 'Tickets/'.(string)$data[0]);
        }
        //endregion
    }else  if(isset($data[0])){
        //region One Ticket
        $OBJ=genesis\Svmjobheader::ini_Code($conn,$database_server->CO,$database_server->Branch,trim((string)$data[0]));
        if(isset($OBJ->jobno)){
            $breadcrumb .= "<li class='breadcrumb-item' ><a href='".MAIN_URL."Tickets'>Tickets</a></li>";//Tickets
            $breadcrumb .= "<li class='breadcrumb-item' ><a href='#'>Ticket :#".$OBJ->jobno."</a></li>";
            $MainTheme->assign('title', 'Ticket :#'.$OBJ->jobno);
            $MainTheme->assign('breadcrumb', $breadcrumb); //??
            $MainTheme->assign('OBJ_NO', $OBJ->jobno); //??
            $MainTheme->assign('OBJ_SUBJECT', $OBJ->description); //??
            $MainTheme->assign('OBJ_NOTES', $OBJ->notes); //??
            $MainTheme->assign('HELPSELECT', 'active');
            $MainTheme->assign('HELPTICKETSELECT', 'active');
            $MainTheme->renderPartial('CONTENTS_BODY', ROOT_URL . 'App/Extras/Public/Pages/ticket.html');
        }else{
            redirect (MAIN_URL.'Tickets');
        }
        //endregion
    }else {
        //region All Tickets
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

        //region Get Status
        if(isset($_REQUEST['status'])){
            $MainTheme->assign('DEF_STATUS', trim($_REQUEST['status'])); //??
        }else{
            $MainTheme->assign('DEF_STATUS'); //??
        }


        $query = " SELECT ";
        $query .= "  T0.[RECID],T0.[CODE],T0.[DESCRIPTION] ";
        $query .= " FROM [SysCodeMaster] T0  ";
        $query .= " WHERE T0.[CO]=:CO  AND T0.[CodeType]='SVMSTS' ";
        $query .= " ORDER BY T0.[CODE] ASC;";
        $stmt = $conn->getStatement($query);
        $stmt->bindParam(":CO", $database_server->CO);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $STATUS_OPTIONS = array();
        if (count($result) > 0) {
            foreach ($result as $value) {
                if (!empty($value['DESCRIPTION'])) {
                    $STATUS_OPTIONS[$value['CODE']] = $value['DESCRIPTION'];

                }
            }
        }
        $STATUS_OPTIONS_AVAILABLE = "";
        foreach ($STATUS_OPTIONS as $code => $name) {
            if (!empty($name)) {
                $STATUS_OPTIONS_AVAILABLE .= '<option value="' . $code . '">' . $name . '</option>\n';
            }
        }
        $MainTheme->assign('TICKET_STATUS_OPTIONS', $STATUS_OPTIONS_AVAILABLE); //??
        //endregion



        $breadcrumb .= "<li class='breadcrumb-item' ><a href='#'>Tickets</a></li>";//Tickets
        $MainTheme->assign('title', 'Tickets');
        $MainTheme->assign('breadcrumb', $breadcrumb); //??
        $MainTheme->assign('HELPSELECT', 'active');
        $MainTheme->assign('HELPTICKETSELECT', 'active');
        if(count($Accounts)>0){
            $MainTheme->renderPartial('CONTENTS_BODY', ROOT_URL . 'App/Extras/Public/Pages/tickets.html');
        }else{
            $MainTheme->renderPartial('CONTENTS_BODY', ROOT_URL . 'App/Extras/Public/Pages/account_error.html');
        }
        //endregion
    }
    $MainTheme->show();
}else{
    exit();
}
