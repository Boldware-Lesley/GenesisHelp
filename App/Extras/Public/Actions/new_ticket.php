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

        if (isset($database_server, $_REQUEST['account'], $_REQUEST['lob'], $_REQUEST['subject'], $_REQUEST['notes'])) {

            $p_account = trim($_REQUEST["account"]);
            $p_lobcode = trim($_REQUEST["lob"]);
            $p_description = trim($_REQUEST["subject"]);
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

            $DEB = genesis\Debmaster::ini_Code_Co($conn, $database_server->CO, $p_account);


            if (isset($DEB->account)) {
                $p_name=$DEB->name;
                $p_contact=$MEMBER->name;
                $p_contactphone=$MEMBER->cellphone;
                $p_scheduledate="";
                $p_scheduletime="";
                $p_reference="";
                //region Check Contacts
                $PrtySeq = 0;
                $query = " SELECT TOP 1 ";
                $query .= "  T0.[RECID],T0.[NAME] ";
                $query .= " FROM [DEBCONTACTS] T0  ";
                $query .= " WHERE T0.[CO]=:CO AND T0.[BRANCH]=:BRANCH AND T0.[ACCOUNT]=:ACCOUNT  AND (T0.[EMAIL]=:EMAIL OR T0.[CELLPHONE]=:CELLPHONE ) ";
                $query .= " ORDER BY T0.[RECID] ASC;";
                $stmt = $conn->getStatement($query);
                $stmt->bindParam(":CO", $DEB->co);
                $stmt->bindParam(":BRANCH", $DEB->branch);
                $stmt->bindParam(":ACCOUNT", $DEB->account);
                $stmt->bindParam(":EMAIL", $MEMBER->email);
                $stmt->bindParam(":CELLPHONE", $MEMBER->cellphone);

                $stmt->execute();
                $resultCheck = $stmt->fetchAll();
                if (empty($resultCheck)) {
                    $query = " SELECT TOP 1 ";
                    $query .= "  MAX(T0.[PrtySeq]) AS 'TOT' ";
                    $query .= " FROM [DEBCONTACTS] T0  ";
                    $query .= " WHERE T0.[CO]=:CO AND T0.[BRANCH]=:BRANCH AND T0.[ACCOUNT]=:ACCOUNT";
                    $query .= " ;";

                    $stmt = $conn->getStatement($query);
                    $stmt->bindParam(":CO", $DEB->co);
                    $stmt->bindParam(":BRANCH", $DEB->branch);
                    $stmt->bindParam(":ACCOUNT", $DEB->account);
                    $stmt->execute();
                    $resultCheck = $stmt->fetchAll();
                    if (isset($resultCheck) && count($resultCheck) > 0) {
                        foreach ($resultCheck as $rowCheck) {
                            if (isset($rowCheck['TOT'])) {
                                $PrtySeq = (int)$rowCheck['TOT'];
                            }
                        }
                    }
                    $PrtySeq++;
                    //region Create Contact
                    $query = "BEGIN TRANSACTION;";
                    $query .= (" INSERT INTO [DEBCONTACTS]([CO], [BRANCH], [DEBTORTYPE], [ACCOUNT], [TITLE], [NAME], [SURNAME], [BIRTHDAY], [DESIGNATION], [RESTELCODE1], [RESTELPHONE1], [RESTELCODE2], [RESTELPHONE2], [BIZTELCODE1], [BIZTELPHONE1], [CELLPHONE], [BIZFAXCODE1], [BIZFAX], [DEPARTMENT], [EMAIL], [WEBSITE],[TELPHONE], [FAX], [MailStmt], [MailInv], [MailOTP], [SMSOTP], [Status], [PrtySeq], [SMSTxans], [SMSMarketing], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID]) ");
                    $query .= (" VALUES( " . QuotedStr($DEB->co) . ",  " . QuotedStr($DEB->branch) . ",  " . QuotedStr($DEB->debtortype) . ",  " . QuotedStr($DEB->account) . ",  " . QuotedStr($MEMBER->title) . ",  " . QuotedStr($MEMBER->name) . ", '', '', '', '', '', '', '', '',  " . QuotedStr("") . ",  " . QuotedStr($MEMBER->cellphone) . ", '', '', '',  " . QuotedStr($MEMBER->email) . ",  " . QuotedStr("") . ", " . QuotedStr($MEMBER->telephone) . ", " . QuotedStr($MEMBER->fax) . ", 'N', 'N', 'N', 'N', 'A', " . QuotedStr($PrtySeq) . ",'N', 'N'," . QuotedStr($todayDate) . ", " . QuotedStr($todayTime) . ", " . QuotedStr($USERCODE) . ", " . QuotedStr($DeviceID) . ") ;");
                    $query .= "COMMIT TRANSACTION;";
                    $stmt = $conn->getStatement($query);
                    $stmt->execute();
                    //endregion
                }
                //endregion


                $p_status = "0";
                $p_jobno = $system->GetDocNo($database_server->CO, $database_server->Branch, "UTLSVM", "UTL");
                if (empty($p_jobno) || $p_jobno === "0") {
                    //region Error
                    $msgErr = "Failed To Generate Job Number[$p_jobno]!!";
                    $jsonObj = array(
                        "CODE" => "C-1",
                        "MESSAGE" => $msgErr
                    );
                    echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                    exit();
                    //endregion
                }
                $check_query = "SELECT RecID FROM [SVMJobHeader] WHERE [JobNo] =:JobNo";
                $stmtCheck = $conn->getStatement($check_query);
                $stmtCheck->bindParam(":JobNo", $p_jobno);
                $stmtCheck->execute();
                $result_arr = $stmtCheck->fetchAll(PDO::FETCH_ASSOC);
                while (!empty($result_arr)) {
                    $p_jobno = $system->GetDocNo($database_server->CO, $database_server->Branch, "UTLSVM", "UTL");
                    if (empty($p_jobno) || $p_jobno === "0") {
                        //region Error
                        $msgErr = "Failed To Generate Job Number[$p_jobno]!!";
                        echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                        exit();
                        //endregion

                    }
                    $stmtCheck = $conn->getStatement($check_query);
                    $stmtCheck->bindParam(":JobNo", $p_jobno);
                    $stmtCheck->execute();
                    $result_arr = $stmtCheck->fetchAll(PDO::FETCH_ASSOC);
                }

                if (empty($p_jobno) || $p_jobno === "0") {
                    //region Error
                    $msgErr = "Job Number[$p_jobno] Is Empty!!";
                    echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
                    exit();
                    //endregion
                }

                $p_lineno=1;
                $query = "BEGIN TRANSACTION;";

                //region Ticket Save
                $query .= "IF EXISTS ( SELECT [SVMJobHeader].* FROM [SVMJobHeader] WHERE [CO]=" . QuotedStr($database_server->CO) . " AND [Branch]=" . QuotedStr($database_server->Branch) . " AND [JobNo]=" . QuotedStr($p_jobno) . ")";
                $query .= " UPDATE [SVMJobHeader] SET ";
                $query .= (" [Description] =" . QuotedStr($p_description) . ", ");
                $query .= (" [Notes] =" . QuotedStr($p_notes) . ", ");
                $query .= (" [JobType] =" . QuotedStr($p_jobtype) . ", ");
                $query .= (" [LOB] =" . QuotedStr($p_lobcode) . ", ");
                $query .= (" [LogMethod] =" . QuotedStr($p_logmethod) . ", ");
                $query .= (" [TechCode] =" . QuotedStr($p_techcode) . ", ");
                $query .= (" [Status] =" . QuotedStr($p_status) . ", ");
                $query .= (" [Priority] =" . QuotedStr($p_priority) . ", ");
                $query .= (" [Account] =" . QuotedStr($p_account) . ", ");
                $query .= (" [Name] =" . QuotedStr($p_name) . ", ");
                $query .= (" [Contact] =" . QuotedStr($p_contact) . ", ");
                $query .= (" [ContactPhone] =" . QuotedStr($p_contactphone) . ", ");
                $query .= (" [ScheduleDate] =" . QuotedStr($p_scheduledate) . ", ");
                $query .= (" [ScheduleTime] =" . QuotedStr($p_scheduletime) . ", ");
                $query .= (" [Reference] =" . QuotedStr($p_reference) . ", ");
                $query .= (" [DTODate] =" . QuotedStr($todayDate) . ", ");
                $query .= (" [DTOTime] =" . QuotedStr($todayTime) . ", ");
                $query .= (" [DTOUser] =" . QuotedStr($USERCODE) . ", ");
                $query .= (" [DTOMacID] =" . QuotedStr($DeviceID) . " ");
                $query .= (" WHERE  [CO]=" . QuotedStr($database_server->CO) . " AND [Branch]=" . QuotedStr($database_server->Branch) . " AND [JobNo]=" . QuotedStr($p_jobno) . " ");
                $query .= (" ELSE ");
                $query .= (" INSERT INTO [SVMJobHeader]([CO], [Branch], [JobNo], [Description], [Notes], [DateLogged], [TimeLogged], [JobType], [LOB], [LogMethod], [TechCode], [Status], [Priority], [Account], [Name], [Contact], [ContactPhone], [ScheduleDate], [ScheduleTime], [DateComplete], [TimeComplete], [TimeBillable], [TimeNonBillable], [TimeTotal], [TxTp], [DocNo], [Reference], [DTODate], [DTOTime], [DTOUser], [DTOMacID]) ");
                $query .= (" VALUES(" . QuotedStr($database_server->CO) . ", " . QuotedStr($database_server->Branch) . " , " . QuotedStr($p_jobno) . ", " . QuotedStr($p_description) . ", " . QuotedStr($p_notes) . ", " . QuotedStr($todayDate) . ",  " . QuotedStr($todayTime) . ", " . QuotedStr($p_jobtype) . ", " . QuotedStr($p_lobcode) . "," . QuotedStr($p_logmethod) . ", " . QuotedStr($p_techcode) . ", " . QuotedStr($p_status) . ", " . QuotedStr($p_priority) . ", " . QuotedStr($p_account) . ", " . QuotedStr($p_name) . ", " . QuotedStr($p_contact) . ", " . QuotedStr($p_contactphone) . ", " . QuotedStr($p_scheduledate) . ", " . QuotedStr($p_scheduletime) . ", " . QuotedStr("") . ", " . QuotedStr("") . ", " . QuotedStr("") . ", " . QuotedStr("") . ", " . QuotedStr("") . ", " . QuotedStr("") . ", " . QuotedStr("") . ", " . QuotedStr($p_reference) . ", " . QuotedStr($todayDate) . ", " . QuotedStr($todayTime) . ", " . QuotedStr($USERCODE) . ", " . QuotedStr($DeviceID) . ") ;");
                //endregion

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
                            $stmt_new = $conn->getStatement("EXEC [SVMMailAdd]  @WCO=" . QuotedStr($database_server->CO) . ",@WBranch=" . QuotedStr($database_server->Branch) . ", @JobNo=" . QuotedStr($p_jobno) . ";");
                            $stmt_new->execute();
                        }catch (Exception $ex){}



                        //region Files
                        $count = 0;
                        if (isset($_FILES['images'])) {
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
                                            $query = "BEGIN TRANSACTION;";
                                            $query .= (" INSERT INTO [SVMJobImages]([CO], [Branch], [JobNo], [LineNumber], [ImageDesc], [ImageData], [ImageType], [ImageSize], [DTODate], [DTOTime], [DTOUser], [DTOMacID]) ");
                                            $query .= (" VALUES(" . QuotedStr($database_server->CO) . ", " . QuotedStr($database_server->Branch) . ", " . QuotedStr($p_jobno) . ", " . QuotedStr($p_lineno) . ", " . QuotedStr($filename) . ",:DATA,  " . QuotedStr($req_ext) . "," . QuotedStr($req_size) . ", " . QuotedStr($todayDate) . ", " . QuotedStr($todayTime) . ", " . QuotedStr($USERCODE) . ", " . QuotedStr($DeviceID) . ") ;");
                                            $query .= "COMMIT TRANSACTION;";

                                            $stmt = $conn->getStatement($query);

                                            $stmt->bindParam(":DATA", $req_data);
                                            $stmt->execute();
                                        }
                                    } catch (Exception $ex) {
                                    }
                                }
                            }
                        }
                        //endregion



                        $jsonObj = array(
                            "CODE" => "0",
                            "MESSAGE" => "Ticket Saved",
                            "JOBNO" => $p_jobno
                        );

                    }else {
                        //region Error
                        $msgErr = "Failed To Save Job Header!";
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
                    "MESSAGE" => "Invalid Debtor Account"
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