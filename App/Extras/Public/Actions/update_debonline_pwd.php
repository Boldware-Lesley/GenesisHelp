<?php

use genesis\MyConnection;

session_start();

require_once(__DIR__ . "/../../../Model/Config.php");
require_once(__DIR__ . "/../../../Extras/actions.php");
require_once(__DIR__ . "/../../../Extras/settings.php");
require_once(__DIR__ . "/../../../Extras/Public/Actions/System.php");
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

    $USERCODE="SYSTEM";
    $DeviceID=IP_ADD;

    if (isset($_REQUEST['oldpwd'], $_REQUEST['pwd'], $_REQUEST['cpwd'], $_REQUEST['id'])) {
        $oldpwd = trim($_REQUEST["oldpwd"]);
        $pwd = trim($_REQUEST["pwd"]);
        $cpwd = trim($_REQUEST["cpwd"]);
        $id = (int)($_REQUEST["id"]);


        //region Check Variables
        $stmt = $conn->getStatement("SELECT TOP 1 [MemberPswd] FROM [DEBOnlineCustMst] WHERE [RecID]=" . QuotedStr($id) . " ");
        $stmt->execute();
        $result = $stmt->fetchAll();
        if (!empty($result)) {
            foreach ($result as $value) {
                $DBpwd = $value["MemberPswd"];
                if ($DBpwd === $oldpwd) {

                } else {
                    $jsonObj = array(
                        "CODE" => "12",
                        "MESSAGE" => "Invalid Old Password"
                    );
                    echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                    exit();
                }
            }
        }else{
            $jsonObj = array(
                "CODE" => "12",
                "MESSAGE" => "Invalid Member"
            );
            echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
            exit();
        }

        if (empty($pwd)) {
            $jsonObj = array(
                "CODE" => "12",
                "MESSAGE" => "Password Missing"
            );
            echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
            exit();
        }
        if ($pwd !== $cpwd) {
            $jsonObj = array(
                "CODE" => "12",
                "MESSAGE" => "Password Do Not Match"
            );
            echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
            exit();
        }

        //endregion
        if (isset($database_server->CO,$database_server->Branch)) {




            $query = "BEGIN TRANSACTION;";


            //region Member Save
            $query .= " UPDATE [DEBOnlineCustMst] SET ";
            $query .= (" [MemberPswd] =" . QuotedStr($pwd) . ", ");

            $query .= (" [DTODate] =" . QuotedStr($todayDate) . ", ");
            $query .= (" [DTOTime] =" . QuotedStr($todayTime) . ", ");
            $query .= (" [DTOUser] =" . QuotedStr($USERCODE) . ", ");
            $query .= (" [DTOMacID] =" . QuotedStr($DeviceID) . ", ");
            $query .= (" [Version] =" . QuotedStr($App_Version) . " ");
            $query .= (" WHERE  [RecID]=" . QuotedStr($id) . " ; ");

            //endregion


            $query .= "COMMIT TRANSACTION;";


            $stmt = $conn->getStatement($query);
            if ($stmt !== null) {
                $stmt->execute();
                $affected_rows = $stmt->rowCount();
                if ($affected_rows > 0) {
                    $jsonObj = array(
                        "CODE" => "0",
                        "MESSAGE" =>"Member's Password Are Saved"
                    );
                }else {

                    //region Error
                    $msgErr = "Failed To Save Member's Password!";
                    $jsonObj = array(
                        "CODE" => "1",
                        "MESSAGE" => $msgErr
                    );
                    //endregion
                }


            } else {
                //region Client Connection Is Null
                $msgErr = "Failed To Get Client Connection Settings.<br/>";
                $jsonObj = array(
                    "CODE" => "12",
                    "MESSAGE" =>$msgErr
                );
                //endregion

            }

        }else{

            $jsonObj = array(
                "CODE" => "12",
                "MESSAGE" => "Missing Database Settings"
            );
        }

    } else {
        $jsonObj = array(
            "CODE" => "11",
            "MESSAGE" => "Missing Parameters"
        );
    }
    $conn->Close();
} catch (Exception $e) {
    $jsonObj = array(
        "CODE" => "13",
        "MESSAGE" => $e->getMessage()
    );
}
if (isset($jsonObj)) {
    echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
}