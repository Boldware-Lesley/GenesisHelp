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

    if (isset($_REQUEST['name'], $_REQUEST['cell'], $_REQUEST['email'], $_REQUEST['gaccount'],
        $_REQUEST['floor'], $_REQUEST['street_number'],
        $_REQUEST['street_address'], $_REQUEST['suburb_address'], $_REQUEST['town_address'],
        $_REQUEST['province_address'], $_REQUEST['postal_code_address'], $_REQUEST['id'])) {
        $p_name = trim($_REQUEST["name"]);
        $p_genesisaccount = trim($_REQUEST["gaccount"]);
        $p_cellphone = trim($_REQUEST["cell"]);
        $p_email = trim($_REQUEST["email"]);
        $floor = trim($_REQUEST["floor"]);
        $street_number = trim($_REQUEST["street_number"]);
        $route = trim($_REQUEST["route"]);
        $street_address = trim($_REQUEST["street_address"]);
        $suburb_address = trim($_REQUEST["suburb_address"]);
        $town_address = trim($_REQUEST["town_address"]);
        $province_address = trim($_REQUEST["province_address"]);
        $postal_code_address = trim($_REQUEST["postal_code_address"]);
        $id = (int)($_REQUEST["id"]);
        $p_dob="";
        if(isset($_REQUEST['dob'])){
            $p_dob = trim($_REQUEST["dob"]);
        }
        $p_title="";
        if(isset($_REQUEST['title'])){
            $p_title = trim($_REQUEST["title"]);
        }
        $p_telephone="";
        if(isset($_REQUEST['telephone'])){
            $p_telephone = trim($_REQUEST["telephone"]);
        }
        $p_fax="";
        if(isset($_REQUEST['fax'])){
            $p_fax = trim($_REQUEST["fax"]);
        }
        $p_route="";
        if(isset($_REQUEST['route'])){
            $p_route = trim($_REQUEST["route"]);
        }
        $p_idnum="";
        if(isset($_REQUEST['idnum'])){
            $p_idnum = trim($_REQUEST["idnum"]);
        }
        $p_gender="";
        if(isset($_REQUEST['gender'])){
            $p_gender = trim($_REQUEST["gender"]);
        }

        $p_vipno="";
        if(isset($_REQUEST['vipno'])){
            $p_vipno = trim($_REQUEST["vipno"]);
        }

        $p_salerep="";
        if(isset($_REQUEST['salerep'])){
            $p_salerep = trim($_REQUEST["salerep"]);
        }

        $line_address="";
        if(!empty($street_address)){
            if(!empty($line_address)){
                $line_address.=", ";
            }
            $line_address.=$street_address;
        }
        if(!empty($suburb_address)){
            if(!empty($line_address)){
                $line_address.=", ";
            }
            $line_address.=$suburb_address;
        }
        if(!empty($town_address)){
            if(!empty($line_address)){
                $line_address.=", ";
            }
            $line_address.=$town_address;
        }
        if(!empty($province_address)){
            if(!empty($line_address)){
                $line_address.=", ";
            }
            $line_address.=$province_address;
        }
        $temp_address="";
        if (isset($_REQUEST['address'])){
            $temp_address = trim($_REQUEST["address"]);
        }
        if (empty($line_address)) {
            $line_address=$temp_address;
            $street_address=$temp_address;
        }
        //region Check Variables
        if (empty($p_name)) {
            $jsonObj = array(
                "CODE" => "12",
                "MESSAGE" => "Name Missing"
            );
            echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
            exit();
        }
        if (empty($p_cellphone)) {
            $jsonObj = array(
                "CODE" => "12",
                "MESSAGE" => "Cell Phone Missing"
            );
            echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
            exit();
        }
        if (empty($line_address)) {
            $jsonObj = array(
                "CODE" => "12",
                "MESSAGE" => "Address Missing"
            );
            echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
            exit();
        }

        //endregion
        if (isset($database_server->CO,$database_server->Branch)) {

            //region Validate Cellphone & Emails
            //region Validate Cellphone
            if (!empty($p_cellphone)) {
                $check_query = "";
                $check_query = "SELECT [RecID] FROM [DEBOnlineCustMst] WHERE  [RecID]<>:RECID AND [CellPhone]=:CELLNO ";
                $stmtCheck = $conn->getStatement($check_query);
                $stmtCheck->bindParam(":CELLNO", $p_cellphone);
                $stmtCheck->bindParam(":RECID", $id);
                $stmtCheck->execute();
                $result_arr = $stmtCheck->fetchAll(PDO::FETCH_ASSOC);
                if (count($result_arr) > 0) {
                    //region Already Exist
                    $msgErr = "Cellphone <b>$p_cellphone</b> Already Taken!!";
                    $jsonObj = array(
                        "CODE" => "12",
                        "MESSAGE" => $msgErr
                    );
                    echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                    exit();
                    //endregion
                }
            }
            //endregion
            //region Validate Email
            if (!empty($p_email)) {
                $check_query = "";

                $check_query = "SELECT [RecID] FROM [DEBOnlineCustMst] WHERE [RecID]<>:RECID AND  [Email]=:EMail ";

                $stmtCheck = $conn->getStatement($check_query);
                $stmtCheck->bindParam(":EMail", $p_email);
                $stmtCheck->bindParam(":RECID", $id);
                $stmtCheck->execute();
                $result_arr = $stmtCheck->fetchAll(PDO::FETCH_ASSOC);
                if (count($result_arr) > 0) {
                    //region Already Exist
                    $msgErr = "Email <b>$p_email</b> Already Taken!!";
                    $jsonObj = array(
                        "CODE" => "12",
                        "MESSAGE" => $msgErr
                    );
                    echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                    exit();
                    //endregion
                }
            }
            //endregion
            //endregion





            $query = "BEGIN TRANSACTION;";


            //region Member Save
           $query .= " UPDATE [DEBOnlineCustMst] SET ";
            $query .= (" [Name] =" . QuotedStr($p_name) . ", ");
            $query .= (" [DelAddress1] =" . QuotedStr($street_address) . ", ");
            $query .= (" [DelAddress2] =" . QuotedStr($suburb_address) . ", ");
            $query .= (" [DelAddress3] =" . QuotedStr($town_address) . ", ");
            $query .= (" [DelAddress4] =" . QuotedStr($province_address) . ", ");
            $query .= (" [DelPostCode] =" . QuotedStr($postal_code_address) . ", ");
            $query .= (" [Email] =" . QuotedStr($p_email) . ", ");
            $query .= (" [CellPhone] =" . QuotedStr($p_cellphone) . ", ");
            if (!empty($p_gender)) {
                $query .= (" [Gender] =" . QuotedStr($p_gender) . ", ");
            }
            if (!empty($p_dob)) {
                $query .= (" [BirthDate] =" . QuotedStr($p_dob) . ", ");
            }
            if (!empty($p_telephone)) {
                $query .= (" [Telephone] =" . QuotedStr($p_telephone) . ", ");
            }
            if (!empty($p_fax)) {
                $query .= (" [Fax] =" . QuotedStr($p_fax) . ", ");
            }
            if (!empty($p_idnum)) {
                $query .= (" [IDNo] =" . QuotedStr($p_idnum) . ", ");
            }
            if (!empty($p_title)) {
                $query .= (" [Title] =" . QuotedStr($p_title) . ", ");
            }
            if (!empty($p_genesisaccount)) {
                $query .= (" [GenesisAccount] =" . QuotedStr($p_genesisaccount) . ", ");
            }
            if (!empty($p_vipno)) {
                $query .= (" [VIPNo] =" . QuotedStr($p_vipno) . ", ");
            }
            if (!empty($p_salerep)) {
                $query .= (" [Salesrep] =" . QuotedStr($p_salerep) . ", ");
            }
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
                        "MESSAGE" =>"Member's Details Are Saved"
                    );
                }else {

                    //region Error
                    $msgErr = "Failed To Save Member's Details!";
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