<?php

use genesis\MyConnection;

session_start();

require_once(__DIR__ . "/../../../Model/Config.php");
require_once(__DIR__ . "/../../../Extras/actions.php");
require_once(__DIR__ . "/../../../Extras/settings.php");
require_once(__DIR__ . "/../../../Extras/Public/Actions/System.php");
require_once(__DIR__ . "/../../../Extras/user_set.php");
$jsonObj = array();
//Ini Headers
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
$system = new System();
$today_DAY = date("d");
$todayAP = date("Ym");
$todayDate = date("Y/m/d");
$todayTime = date("H:i:s");
$today = date("Y/m/d H:i:s");
$App_Version="";


try {

    $USERCODE = "SYSTEM";
    $DeviceID = IP_ADD;
    if (isset($MEMBER->account)) {

        if (isset($database_server, $_REQUEST['myIdD'])) {

            $p_ID = trim($_REQUEST["myIdD"]);
            $OBJ=genesis\Svmjobdetails::ini_RecID($conn,$p_ID);
            if(isset($OBJ->jobno)) {
                $query = "BEGIN TRANSACTION;";
                $query .= ("DELETE FROM [SVMJobDetails] WHERE [RECID]=" . QuotedStr($p_ID) . "; ");
                $query .= ("DELETE FROM [SVMJobImages] WHERE [CO]=" . QuotedStr($OBJ->co) . " AND [Branch]=" . QuotedStr($OBJ->branch) . " AND [JobNo]=" . QuotedStr($OBJ->jobno) . "  AND [LineNumber]=" . QuotedStr($OBJ->linenumber) . "; ");
                $query .= "COMMIT TRANSACTION;";
                $stmt = $conn->getStatement($query);
                $stmt->execute();
                $affected_rows = $stmt->rowCount();
                if ($affected_rows > 0) {
                    $jsonObj = array(
                        "CODE" => "0",
                        "MESSAGE" => "Job Line Deleted!!"
                    );
                } else {
                    $jsonObj = array(
                        "CODE" => "11",
                        "MESSAGE" => "Failed To delete job line!!"
                    );
                }
            }else{
                $jsonObj = array(
                    "CODE" => "11",
                    "MESSAGE" => "Invalid Line!!"
                );
            }

        } else {
            $jsonObj = array(
                "CODE" => "11",
                "MESSAGE" => "Missing Parameters"
            );
        }
        $conn->Close();
    } else {
        $jsonObj = array(
            "CODE" => "11",
            "MESSAGE" => "Please Login"
        );
    }
} catch (Exception $e) {
    $jsonObj = array(
        "CODE" => "13",
        "MESSAGE" => $e->getMessage()
    );
}
if (isset($jsonObj)) {
    echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
}