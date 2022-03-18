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

        if (isset($database_server, $_REQUEST['line'],$_REQUEST['jobno'], $_REQUEST['notes'])) {
            $p_lineno=(int)($_REQUEST["line"]);
            $p_jobno = trim($_REQUEST["jobno"]);
            $p_lobcode = "";
            $p_notes = trim($_REQUEST["notes"]);
            $p_priority="";
            $p_jobtype="";
            $p_logmethod="";
            $p_techcode="";
            $p_priority="";
            $p_billcode="";
            $p_stockcode="";
            $p_linkcode="";
            $p_description1="From: ".$MEMBER->name."";
            $p_description2="";
            $p_quantity=0;
            $p_priceexcl=0;
            $p_priceincl=0;
            $p_serialno="";
            $p_timebillable="";
            $p_timenonbillable="";
            $p_timetotal="";
            $p_travelbillable="N";

            $OBJ=genesis\Svmjobheader::ini_Code($conn,$database_server->CO,$database_server->Branch,$p_jobno);
            if(isset($OBJ->jobno)){


                if($p_lineno==0) {
                    $check_query = "SELECT MAX([LineNumber]) FROM [SVMJobDetails] WHERE [CO] =:CO AND [Branch] =:Branch AND [JobNo] =:JobNo";
                    $stmtCheck = $conn->getStatement($check_query);
                    $stmtCheck->bindParam(":CO", $database_server->CO);
                    $stmtCheck->bindParam(":Branch", $database_server->Branch);
                    $stmtCheck->bindParam(":JobNo", $p_jobno);
                    $stmtCheck->execute();
                    $result_arr = $stmtCheck->fetchAll(PDO::FETCH_ASSOC);
                    if (isset($result_arr) & count($result_arr) > 0) {
                        foreach ($result_arr as $row) {
                            $p_lineno = (int)$row['LineNumber'];
                        }
                    }
                    $p_lineno++;
                }


                $query = "BEGIN TRANSACTION;";


                //region Ticket Details Save
                $query .= "IF EXISTS ( SELECT [SVMJobDetails].* FROM [SVMJobDetails] WHERE [CO]=" . QuotedStr($database_server->CO) . " AND [Branch]=" . QuotedStr($database_server->Branch) . " AND [JobNo]=" . QuotedStr($p_jobno) . " AND [LineNumber]=" . QuotedStr($p_lineno) . ")";
                $query .= " UPDATE [SVMJobDetails] SET ";
                $query .= (" [TranDate] =" . QuotedStr($todayDate) . ", ");
                $query .= (" [Notes] =" . QuotedStr($p_notes) . ", ");
                $query .= (" [BillCode] =" . QuotedStr($p_billcode) . ", ");
                $query .= (" [LOB] =" . QuotedStr($p_lobcode) . ", ");
                $query .= (" [TechCode] =" . QuotedStr($p_techcode) . ", ");
                $query .= (" [StockCode] =" . QuotedStr($p_stockcode) . ", ");
                $query .= (" [LinkCode] =" . QuotedStr($p_linkcode) . ", ");
                $query .= (" [Description1] =" . QuotedStr($p_description1) . ", ");
                $query .= (" [Description2] =" . QuotedStr($p_description2) . ", ");
                $query .= (" [Quantity] =" . QuotedStr($p_quantity) . ", ");
                $query .= (" [PriceExcl] =" . QuotedStr($p_priceexcl) . ", ");
                $query .= (" [PriceIncl] =" . QuotedStr($p_priceincl) . ", ");
                $query .= (" [SerialNo] =" . QuotedStr($p_serialno) . ", ");
                $query .= (" [TimeBillable] =" . QuotedStr($p_timebillable) . ", ");
                $query .= (" [TimeNonBillable] =" . QuotedStr($p_timenonbillable) . ", ");
                $query .= (" [TimeTotal] =" . QuotedStr($p_timetotal) . ", ");
                $query .= (" [TravelBillable] =" . QuotedStr($p_travelbillable) . " ");
                $query .= (" WHERE  [CO]=" . QuotedStr($database_server->CO) . " AND [Branch]=" . QuotedStr($database_server->Branch) . " AND [JobNo]=" . QuotedStr($p_jobno) . "  AND [LineNumber]=" . QuotedStr($p_lineno) . " ");
                $query .= (" ELSE ");
                $query .= (" INSERT INTO [SVMJobDetails]([CO], [Branch], [JobNo], [TranDate], [TechCode], [BillCode], [LOB], [LineNumber], [StockCode], [LinkCode], [Description1], [Description2], [Quantity], [PriceExcl], [PriceIncl], [SerialNo], [TimeBillable], [TimeNonBillable], [TimeTotal], [TravelBillable], [Notes]) ");
                $query .= (" VALUES(" . QuotedStr($database_server->CO) . ", " . QuotedStr($database_server->Branch) . ", " . QuotedStr($p_jobno) . ", " . QuotedStr($todayDate) . ", " . QuotedStr($p_techcode) . ", " . QuotedStr($p_billcode) . ", " . QuotedStr($p_lobcode) . ", " . QuotedStr($p_lineno) . ", " . QuotedStr($p_stockcode) . ", " . QuotedStr($p_linkcode) . ", " . QuotedStr($p_description1) . ", " . QuotedStr($p_description2) . ", " . QuotedStr($p_quantity) . ", " . QuotedStr($p_priceexcl) . ", " . QuotedStr($p_priceincl) . "," . QuotedStr($p_serialno) . ", " . QuotedStr($p_timebillable) . ", " . QuotedStr($p_timenonbillable) . ", " . QuotedStr($p_timetotal) . ", " . QuotedStr($p_travelbillable) . ", " . QuotedStr($p_notes) . ") ;");
                //endregion

                $query .= "COMMIT TRANSACTION;";

                $stmt = $conn->getStatement($query);
                if ($stmt !== null) {
                    $stmt->execute();
                    $affected_rows = $stmt->rowCount();
                    if ($affected_rows > 0) {


                        try {
                            $stmt_new = $conn->getStatement("EXEC [SVMMailUpdate]  @WCO=" . QuotedStr($database_server->CO) . ",@WBranch=" . QuotedStr($database_server->Branch) . ", @JobNo=" . QuotedStr($p_jobno) . ";");
                            $stmt_new->execute();
                        }catch (Exception $ex){}



                        //region Files
                        $count = 0;
                        if (isset($_FILES['images'])) {
                            foreach ($_FILES['images']['name'] as $filename) {
                                $req_data = file_get_contents($_FILES['images']['tmp_name'][$count]);
                                $req_datamime = trim($_FILES['images']['type'][$count]);
                                $req_size = $_FILES['images']['size'][$count];
                                $array = explode('.', $_FILES['images']['name'][$count]);
                                $req_ext = end($array);
                                $count = $count + 1;
                                $query = "BEGIN TRANSACTION;";
                                $query .= (" INSERT INTO [SVMJobImages]([CO], [Branch], [JobNo], [LineNumber], [ImageDesc], [ImageData], [ImageType], [ImageSize], [DTODate], [DTOTime], [DTOUser], [DTOMacID]) ");
                                $query .= (" VALUES(" . QuotedStr($database_server->CO) . ", " . QuotedStr($database_server->Branch) . ", " . QuotedStr($p_jobno) . ", " . QuotedStr($p_lineno) . ", " . QuotedStr($filename) . ",:DATA,  " . QuotedStr($req_ext) . "," . QuotedStr($req_size) . ", " . QuotedStr($todayDate) . ", " . QuotedStr($todayTime) . ", " . QuotedStr($USERCODE) . ", " . QuotedStr($DeviceID) . ") ;");
                                $query .= "COMMIT TRANSACTION;";

                                $stmt = $conn->getStatement($query);

                                $stmt->bindParam(":DATA", $req_data);
                                $stmt->execute();
                            }
                        }
                        //endregion



                        $jsonObj = array(
                            "CODE" => "0",
                            "MESSAGE" => "Comment Saved",
                            "JOBNO" => $p_jobno
                        );

                    }else {
                        //region Error
                        $msgErr = "Failed To Save Comment!";
                        $jsonObj = array(
                            "CODE" => "C-1",
                            "MESSAGE" => $msgErr
                        );
                        //endregion
                    }
                } else {
                    //region Client Connection Is Null
                    $msgErr = "Failed To Connect To Store's Database.<br/>";
                    $jsonObj = array(
                        "CODE" => "C-13.1",
                        "MESSAGE" => $msgErr
                    );
                    //endregion
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