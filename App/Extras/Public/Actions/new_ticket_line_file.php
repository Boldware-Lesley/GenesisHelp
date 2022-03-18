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

        if (isset($database_server, $_REQUEST['line'],$_REQUEST['jobno'],$_FILES['images'])) {
            $p_lineno=(int)($_REQUEST["line"]);
            $p_jobno = trim($_REQUEST["jobno"]);

            $OBJ=genesis\Svmjobheader::ini_Code($conn,$database_server->CO,$database_server->Branch,$p_jobno);
            if(isset($OBJ->jobno)) {


                //region Files
                $count = 0;
                $msg_err="";
                if(count($_FILES['images']['name'])>0) {
                    foreach ($_FILES['images']['name'] as $filename) {
                        try {
                            $path=$_FILES['images']['tmp_name'][$count];
                            if(!empty($path)) {
                                $req_data = file_get_contents($path);
                                $req_datamime = trim($_FILES['images']['type'][$count]);
                                $req_size = $_FILES['images']['size'][$count];
                                $array = explode('.', $_FILES['images']['name'][$count]);
                                $req_ext = end($array);
                                $count = $count + 1;
                                if (strlen($filename) > 50) {
                                    $filename = substr($filename, 0, 50);
                                }
                                $query = "BEGIN TRANSACTION;";
                                $query .= (" INSERT INTO [SVMJobImages]([CO], [Branch], [JobNo], [LineNumber], [ImageDesc], [ImageData], [ImageType], [ImageSize], [DTODate], [DTOTime], [DTOUser], [DTOMacID]) ");
                                $query .= (" VALUES(" . QuotedStr($database_server->CO) . ", " . QuotedStr($database_server->Branch) . ", " . QuotedStr($p_jobno) . ", " . QuotedStr($p_lineno) . ", " . QuotedStr($filename) . ",:DATA,  " . QuotedStr($req_ext) . "," . QuotedStr($req_size) . ", " . QuotedStr($todayDate) . ", " . QuotedStr($todayTime) . ", " . QuotedStr($USERCODE) . ", " . QuotedStr($DeviceID) . ") ;");
                                $query .= "COMMIT TRANSACTION;";
                                $stmt = $conn->getStatement($query);
                                $stmt->bindParam(":DATA", $req_data);
                                $stmt->execute();
                                $affected_rows = $stmt->rowCount();
                                if ($affected_rows <= 0) {
                                    $msg_err .= "Failed To Save file[$filename].<br/>";
                                }
                            }else{
                                $msg_err .= "Invalid Path[$filename].<br/>";
                            }
                        }catch (Exception $ex){
                            $msg_err .= "Failed To Save file[$filename].".$ex->getMessage()."<br/>";
                        }
                    }
                }
                //endregion


                if(empty($msg_err)){
                    $jsonObj = array(
                        "CODE" => "0",
                        "MESSAGE" => "file Saved"
                    );

                }else{
                    $jsonObj = array(
                        "CODE" => "1",
                        "MESSAGE" => $msg_err
                    );
                }


            } else {
                $jsonObj = array(
                    "CODE" => "11",
                    "MESSAGE" => "Invalid Ticket"
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