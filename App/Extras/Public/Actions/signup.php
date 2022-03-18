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
$App_Version = "";
try {

    $USERCODE = "SYSTEM";
    $DeviceID = IP_ADD;

    if (isset($_REQUEST['name'], $_REQUEST['cell'], $_REQUEST['email'], $_REQUEST['gaccount'],
        $_REQUEST['floor'], $_REQUEST['street_number'], $_REQUEST['route'],
        $_REQUEST['street_address'], $_REQUEST['suburb_address'], $_REQUEST['town_address'],
        $_REQUEST['province_address'], $_REQUEST['postal_code_address'], $_REQUEST['pwd'], $_REQUEST['cpwd'])) {
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
        $pwd = trim($_REQUEST["pwd"]);
        $cpwd = trim($_REQUEST["cpwd"]);
        $p_dob = "";
        $p_title = "";
        $p_telephone = "";
        $p_fax = "";
        $p_route = "";
        $p_status = "O";
        if (isset($_REQUEST['dob'])) {
            $p_dob = trim($_REQUEST["dob"]);
        }
        $p_idnum = "";
        if (isset($_REQUEST['idnum'])) {
            $p_idnum = trim($_REQUEST["idnum"]);
        }
        $p_gender = "";
        if (isset($_REQUEST['gender'])) {
            $p_gender = trim($_REQUEST["gender"]);
        }

        $line_address = "";
        if (!empty($street_address)) {
            if (!empty($line_address)) {
                $line_address .= ", ";
            }
            $line_address .= $street_address;
        }
        if (!empty($suburb_address)) {
            if (!empty($line_address)) {
                $line_address .= ", ";
            }
            $line_address .= $suburb_address;
        }
        if (!empty($town_address)) {
            if (!empty($line_address)) {
                $line_address .= ", ";
            }
            $line_address .= $town_address;
        }
        if (!empty($province_address)) {
            if (!empty($line_address)) {
                $line_address .= ", ";
            }
            $line_address .= $province_address;
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
        if (isset($database_server->CO, $database_server->Branch)) {
            $system->LoadParameters($database_server->CO, $database_server->Branch, "VIP", "");

            //region Validate Cellphone & Emails
            //region Validate Cellphone
            if (!empty($p_cellphone)) {
                $check_query = "";
                $check_query = "SELECT [RecID] FROM [DEBOnlineCustMst] WHERE  [CellPhone]=:CELLNO ";
                $stmtCheck = $conn->getStatement($check_query);
                if ($stmtCheck !== null) {
                    $stmtCheck->bindParam(":CELLNO", $p_cellphone);
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
                } else {
                    $jsonObj = array(
                        "CODE" => "11",
                        "MESSAGE" => "Database Connection Failed!"
                    );
                    echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                    exit();
                }
            }
            //endregion
            //region Validate Email
            if (!empty($p_email)) {
                $check_query = "";

                $check_query = "SELECT [RecID] FROM [DEBOnlineCustMst] WHERE [Email]=:EMail ";

                $stmtCheck = $conn->getStatement($check_query);
                if ($stmtCheck !== null) {
                    $stmtCheck->bindParam(":EMail", $p_email);
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
                } else {
                    $jsonObj = array(
                        "CODE" => "11",
                        "MESSAGE" => "Database Connection Failed!"
                    );
                    echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                    exit();
                }
            }
            //endregion
            //endregion


            $p_account = $system->GetDocNo($database_server->CO, $database_server->Branch, "DEBONL", "DEB");

            //region Validate Number
            if (empty($p_account) || $p_account === "0") {
                //region Error
                $msgErr = "Failed To Generate Account Number!!";
                $jsonObj = array(
                    "CODE" => "12",
                    "MESSAGE" => $msgErr
                );
                echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                //endregion
                exit();
            }

            $check_query = "";
            $check_query = "SELECT RecID FROM [DEBOnlineCustMst] WHERE [CO] =:CO AND [BRANCH] =:BRANCH AND [Account] =:Account";

            $stmtCheck = $conn->getStatement($check_query);
            if ($stmtCheck !== null) {
                $stmtCheck->bindParam(":CO", $database_server->CO);
                $stmtCheck->bindParam(":BRANCH", $database_server->Branch);
                $stmtCheck->bindParam(":Account", $p_account);
                $stmtCheck->execute();
                $result_arr = $stmtCheck->fetchAll(PDO::FETCH_ASSOC);
                while (!empty($result_arr)) {
                    $p_account = $system->GetDocNo($database_server->CO, $database_server->Branch, "DEBONL", "DEB");

                    if (empty($p_account) || $p_account === "0") {
                        //region Error
                        $msgErr = "Failed To Generate Account Number!!";
                        $jsonObj = array(
                            "CODE" => "12",
                            "MESSAGE" => $msgErr
                        );
                        echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                        //endregion
                        exit();
                    }
                    $stmtCheck = $conn->getStatement($check_query);
                    $stmtCheck->bindParam(":CO", $database_server->CO);
                    $stmtCheck->bindParam(":BRANCH", $database_server->Branch);
                    $stmtCheck->bindParam(":Account", $p_account);
                    $stmtCheck->execute();
                    $result_arr = $stmtCheck->fetchAll(PDO::FETCH_ASSOC);
                }
            } else {
                $jsonObj = array(
                    "CODE" => "11",
                    "MESSAGE" => "Database Connection Failed!"
                );
                echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                exit();
            }
            //endregion


            $query = "BEGIN TRANSACTION;";


            //region Member Save
            $query .= "IF EXISTS ( SELECT [DEBOnlineCustMst].* FROM [DEBOnlineCustMst] WHERE [CO]=" . QuotedStr($database_server->CO) . " AND [Branch]=" . QuotedStr($database_server->Branch) . " AND [Account]=" . QuotedStr($p_account) . ")";
            $query .= " UPDATE [DEBOnlineCustMst] SET ";
            $query .= (" [Name] =" . QuotedStr($p_name) . ", ");
            $query .= (" [DelAddress1] =" . QuotedStr($street_address) . ", ");
            $query .= (" [DelAddress2] =" . QuotedStr($suburb_address) . ", ");
            $query .= (" [DelAddress3] =" . QuotedStr($town_address) . ", ");
            $query .= (" [DelAddress4] =" . QuotedStr($province_address) . ", ");
            $query .= (" [DelPostCode] =" . QuotedStr($postal_code_address) . ", ");
            $query .= (" [Email] =" . QuotedStr($p_email) . ", ");
            $query .= (" [CellPhone] =" . QuotedStr($p_cellphone) . ", ");
            if (!empty($p_genesisaccount)) {
                $query .= (" [GenesisAccount] =" . QuotedStr($p_genesisaccount) . ", ");
            }
            $query .= (" [DTODate] =" . QuotedStr($todayDate) . ", ");
            $query .= (" [DTOTime] =" . QuotedStr($todayTime) . ", ");
            $query .= (" [DTOUser] =" . QuotedStr($USERCODE) . ", ");
            $query .= (" [DTOMacID] =" . QuotedStr($DeviceID) . ", ");
            $query .= (" [Version] =" . QuotedStr($App_Version) . " ");
            $query .= (" WHERE  [CO]=" . QuotedStr($database_server->CO) . " AND [Branch]=" . QuotedStr($database_server->Branch) . " AND [Account]=" . QuotedStr($p_account) . " ");
            $query .= (" ELSE ");
            $query .= (" INSERT INTO [DEBOnlineCustMst]([CO], [Branch], [Account], [Title], [Name], [DelAddress1], [DelAddress2], [DelAddress3], [DelAddress4], [DelPostCode], [Telephone], [Fax], [Email], [CellPhone], [IDNo], [DateJoined], [BirthDate], [Gender], [Status], [Area], [Region], [Route], [Suburb], [MemberPswd], [GenesisAccount], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Version]) ");
            $query .= (" VALUES(" . QuotedStr($database_server->CO) . ", " . QuotedStr($database_server->Branch) . " , " . QuotedStr($p_account) . ", " . QuotedStr($p_title) . ", " . QuotedStr($p_name) . ", " . QuotedStr($street_address) . ", " . QuotedStr($suburb_address) . "," . QuotedStr($town_address) . ", " . QuotedStr($province_address) . ", " . QuotedStr($postal_code_address) . ", " . QuotedStr($p_telephone) . ", " . QuotedStr($p_fax) . ", " . QuotedStr($p_email) . ", " . QuotedStr($p_cellphone) . ", " . QuotedStr($p_idnum) . "," . QuotedStr($todayDate) . ", " . QuotedStr($p_dob) . ", " . QuotedStr($p_gender) . ", " . QuotedStr($p_status) . ", " . QuotedStr("") . ", " . QuotedStr("") . "," . QuotedStr($p_route) . ", " . QuotedStr("") . ", " . QuotedStr($pwd) . ", " . QuotedStr($p_genesisaccount) . ", " . QuotedStr($todayDate) . ", " . QuotedStr($todayTime) . ", " . QuotedStr($USERCODE) . ", " . QuotedStr($DeviceID) . "," . QuotedStr($todayDate) . ", " . QuotedStr($todayTime) . ", " . QuotedStr($USERCODE) . ", " . QuotedStr($DeviceID) . ", " . QuotedStr($App_Version) . ") ;");

            //endregion


            $query .= "COMMIT TRANSACTION;";


            $stmt = $conn->getStatement($query);
            if ($stmt !== null) {
                $stmt->execute();
                $affected_rows = $stmt->rowCount();
                if ($affected_rows > 0) {
                    $_SESSION["ACCOUNT"] = $p_account;

                    if (isset($system->MODparam[12], $system->MODparam[13]) && $system->MODparam[12] === "Y") {
                        $msg = $system->MODparam[13];
                        if (!empty($msg)) {
                            $system->SendMessage($msg, $p_cellphone);
                        }
                    }
                    $jsonObj = array(
                        "CODE" => "0",
                        "MESSAGE" => "Member's Details Are Saved"
                    );
                } else {

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
                    "MESSAGE" => $msgErr
                );
                //endregion

            }

        } else {

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