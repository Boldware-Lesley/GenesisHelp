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
$App_Version = "";
$wItem_per_page = 8;
if (isset($MEMBER->recid, $database_server, $Accounts)) {
    //region Get page number from Ajax POST
    if (isset($_POST["page"])) {
        $page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); // filter number
        if (!is_numeric($page_number)) {
            die('Invalid page number!');
        } // incase of invalid page number
    } else {
        $page_number = 1; // if there's no page number, set it to 1
    }
    //endregion
    ?>
    <div class="row">
        <?php
        try {

            $myQ = "";
            if (isset($_REQUEST["Q"])) {
                $myQ = trim($_REQUEST["Q"]);
            }

            $my_acc = "";

            foreach ($Accounts as $acc) {
                if (!empty($my_acc)) {
                    $my_acc .= ",";
                }
                $my_acc .= sql_cover_value(escapeSql($acc));
            }

            if (!empty($my_acc)) {

                //region Tables FROM
                $sqlTables = " FROM [SVMTimeSheet] T0  ";
                $sqlTables .= " LEFT JOIN [SVMTechMaster] T1 ON T1.[CO]=T0.[CO] AND T0.[TechCode]=T1.[TechCode] AND T1.[Branch]=T0.[Branch]  ";
                $sqlTables .= " LEFT JOIN [SVMTimeSheetCats] T2 ON T2.[CO]=T0.[CO] AND T2.[CatCode]=T0.[Category]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T4 ON T4.[CO]=T0.[CO] AND T4.[CodeType]='SVMBIL' AND T4.[Code]=T0.[BILLCODE]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T5 ON T5.[CO]=T0.[CO] AND T5.[CodeType]='SVMBLG' AND T5.[Code]=T4.[USERFLD2]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T6 ON T6.[CO]=T0.[CO] AND T6.[CodeType]='SVMTYP' AND T6.[Code]=T0.[JOBTYPE]  ";
                $sqlTables .= " LEFT JOIN [SVMTechBillCodes] T7 ON T7.[CO]=T0.[CO] AND T7.[Branch]=T0.[Branch] AND T7.[BILLCODE]=T0.[BILLCODE] AND T7.[TechCode]=T0.[TechCode]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T8 ON T8.[CO]=T0.[CO] AND T8.[CodeType]='SVMLOB' AND T8.[Code]=T0.[LOB]  ";
                //endregion

                //region WHERE

                $sqlWhere = " WHERE T0.[CO]=" . sql_cover_value(escapeSql($database_server->CO)) . " AND T0.[BRANCH]=" . sql_cover_value(escapeSql($database_server->Branch)) . "    ";
                if (!empty($my_acc)) {
                    $sqlWhere .= " AND T0.[Account] IN (" . $my_acc . ") ";
                }

                if (!empty($myQ)) {
                    $sqlWhere .= " AND (T0.[Name] LIKE '%" . escapeSql($myQ) . "%' OR T0.[Notes] LIKE '%" . escapeSql($myQ) . "%' OR T0.[JobNo] LIKE '%" . escapeSql($myQ) . "%' OR T0.[Description] LIKE '%" . escapeSql($myQ) . "%' ) ";
                }
                //endregion

                //region Result Total
                $sql = "SELECT COUNT(T0.[RecID]) AS 'TOT' ";
                $sql .= $sqlTables . $sqlWhere;

                $stmt = $conn->getStatement($sql);

                $stmt->execute();
                $varCheck = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $stmt->closeCursor();
                $totalRec = 0;
                if (isset($varCheck) && count($varCheck) > 0) {
                    foreach ($varCheck as $rowCheck) {
                        if (isset($rowCheck['TOT'])) {
                            $totalRec = (int)$rowCheck['TOT'];
                        }
                    }
                }
                //endregion
                //region Calculate Pages
                // break records into pages
                $total_pages = ceil($totalRec / $wItem_per_page);
                // get starting position to fetch the records
                $page_position = (($page_number - 1) * $wItem_per_page);
                if ($page_position < 0) {
                    $page_number = 1;
                    $page_position = 0;
                }
                //endregion
                //region Page Contents
                $sql = "SELECT   ";
                $sql .= "  T0.[RECID], T0.[CO], T0.[BRANCH], T0.[NOTES], T0.[DATELOGGED], T0.[TIMELOGGED], T0.[TECHCODE], T0.[BILLCODE], T0.[CATEGORY], T0.[ACCOUNT], T0.[NAME], T0.[CONTACT], T0.[CELLPHONE], T0.[DATESTARTED], T0.[TIMESTARTED], T0.[DATECOMPLETE], T0.[TIMECOMPLETE], T0.[TOTALHOURS], T0.[HOURS], T0.[JOBNO],  T0.[JOBTYPE],T0.[DTODATE], T0.[DTOTIME], T0.[DTOUSER], T0.[DTOMACID] ";
                $sql .= "  ,T4.[USERFLD2] AS 'BILLCODEGROUP',T2.[Description] AS 'CATEGORYNAME',T1.[CellPhone] AS 'TECHPHONE',T1.[EMailAddy] AS 'TECHEMAIL' ";
                $sql .= "  ,T1.[TechName] as 'TECHNAME',T4.[Description] AS 'BILLCODENAME',T5.[Description] AS 'BILLCODEGROUPNAME',T6.[Description] AS 'JOBTYPENAME' ";
                $sql .= "  ,T7.[RATE] AS BILLCODERATE,T0.[LOB] AS 'LOBCODE',T8.[Description] AS 'LOBNAME' ";

                $sql .= $sqlTables . $sqlWhere . " ";

                $sql .= " ORDER BY T0.[RecID] DESC OFFSET ($page_number-1)*$wItem_per_page ROWS FETCH NEXT $wItem_per_page ROWS ONLY";
                $stmt = $conn->getStatement($sql);

                $stmt->execute();
                $variables = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //endregion
                if (isset($variables) & count($variables) > 0) {
                    foreach ($variables as $row) {



                        echo '<div class="col-12">';
                        //region Card
                        echo '<div class="card">';
                        //region Card Body
                        echo '<div class="card-body">';
                        //region Rows
                        echo '<div class="row">';
                        //region Top Row
                        echo '<div class="col-12">';
                        echo '<h5 class="card-title">' .  $row['ACCOUNT'] . ' - ' . $row['NAME']  . '</h5>';
                        echo '</div>';
                        //endregion
                        //region Mid Row
                        echo '<div class="col-6">';
                        if (!empty($row['NOTES'])) {
                            echo '<p class="card-text">';
                            echo '' . $row['NOTES'] . '<br/>';
                            echo '</p>';
                        }


                        if (!empty($row['JOBTYPENAME'])) {
                            echo '<strong>Job:</strong> ' . $row['JOBTYPENAME'] . '<br/>';
                        }
                        if (!empty($row['CATEGORYNAME'])) {
                            echo '<strong>Category:</strong> ' . $row['CATEGORYNAME'] . '<br/>';
                        }
                        if (!empty($row['LOBCODE'])) {
                            echo '<strong>Line Of Business:</strong> ' . $row['LOBCODE'] . ' - ' . $row['LOBNAME'] . '<br/>';
                        }
                        if (!empty($row['TECHCODE'])) {
                            echo '<strong>Technician:</strong> ' . $row['TECHCODE'] . ' - ' . $row['TECHNAME'] . '<br/>';
                        }
                        if (!empty($row['TOTALHOURS'])) {
                            echo '<strong>Total Hours:</strong> ' . $row['TOTALHOURS'] . '<br/>';
                        }
                        if (!empty($row['JOBNO'])) {
                            echo '<strong>Ticket:</strong> <a class="btn btn-outline-primary" href="' . MAIN_URL . 'Tickets/' .  $row['JOBNO'] . '" >#' . $row['JOBNO'] . '</a><br/>';
                        }


                        echo '</div>';
                        echo '<div class="col-6">';
                        if (!empty($row['DATELOGGED'])) {
                            echo '<strong>Logged Time:</strong> ' . $row['DATELOGGED'] . ' ' . $row['TIMELOGGED'] . '<br/>';
                        }

                        if (!empty($row['TIMECOMPLETE'])) {
                            echo '<strong class="badge badge-soft-green badge-lg">Status:&nbsp;&nbsp; COMPLETED</strong> <br/>';
                        }else{
                            echo '<strong class="badge badge-soft-info badge-lg">Status:&nbsp;&nbsp; IN-PROGRESS</strong> <br/>';
                        }


                        echo '</div>';
                        //endregion

                        echo '</div>';
                        //endregion
                        echo '</div>';
                        //endregion
                        echo '</div>';
                        //endregion
                        echo '</div>';

                    }
                } else {
                    echo '<div class="col-12">';
                    echo '<div class="mrg-05em alert alert-danger">';
                    echo '<h4>&#9940; Sorry!!</h4><p>No Tasks Found!</p>';
                    echo '</div>';
                    echo '</div>';
                }
                $conn->Close();

                echo paginate_function($wItem_per_page, $page_number, $totalRec, $total_pages);
            }

        } catch (PDOException $ex) {
            echo '<div class="col-12">';
            echo '<div class="mrg-05em alert alert-danger">';
            echo '<h4>&#9940; ' . $ex->getMessage() . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>


    </div>


<?php } ?>