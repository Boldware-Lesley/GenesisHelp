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
            $myStatus = "";
            if (isset($_REQUEST["STATUS"])) {
                $myStatus = trim($_REQUEST["STATUS"]);
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
                $sqlTables = " FROM [SVMJobHeader] T0 ";
                $sqlTables .= " LEFT JOIN [SVMJobTeam] TT ON TT.[CO] = T0.[CO] AND T0.[JobNo] = TT.[JobNo] AND TT.[Branch] = T0.[Branch] ";
                $sqlTables .= " LEFT JOIN [SVMTechMaster] T1 ON T1.[CO]=T0.[CO] AND T0.[TechCode]=T1.[TechCode] AND T1.[Branch]=T0.[Branch]  ";
                $sqlTables .= " LEFT JOIN [DEBCONTACTS] T2 ON T2.[CO]=T0.[CO] AND T0.[Branch]=T2.[Branch]  AND T0.[Account]=T2.[ACCOUNT] AND T0.[ContactPhone]=T2.[CELLPHONE]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T3 ON T3.[CO]=T0.[CO] AND T3.[CodeType]='SVMSTS' AND T3.[Code]=T0.[STATUS]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T4 ON T4.[CO]=T0.[CO] AND T4.[CodeType]='SVMLOG' AND T4.[Code]=T0.[LogMethod]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T5 ON T5.[CO]=T0.[CO] AND T5.[CodeType]='SVMTYP' AND T5.[Code]=T0.[JOBTYPE]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T6 ON T6.[CO]=T0.[CO] AND T6.[CodeType]='SVMLOB' AND T6.[Code]=T0.[LOB]  ";
                //endregion

                //region WHERE

                $sqlWhere = " WHERE T0.[CO]=" . sql_cover_value(escapeSql($database_server->CO)) . " AND T0.[BRANCH]=" . sql_cover_value(escapeSql($database_server->Branch)) . "    ";
                if (!empty($my_acc)) {
                    $sqlWhere .= " AND T0.[Account] IN (" . $my_acc . ") ";
                }
                if (!empty($myStatus)) {
                    $sqlWhere .= " AND T0.[Status]= " . sql_cover_value(escapeSql($myStatus)) . " ";
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
                $sql .= "  T0.[CO],T0.[BRANCH],T0.[JOBNO],T0.[JOBTYPE],T0.[PRIORITY] , T0.[DATELOGGED],T0.[TIMELOGGED], T0.[LOGMETHOD],T0.[STATUS] ";
                $sql .= "  ,T0.[DESCRIPTION] , T0.[ACCOUNT] , T0.[NAME],T0.[CONTACT],T0.[CONTACTPHONE] ";
                $sql .= "  ,T0.[REFERENCE] , T0.[SCHEDULEDATE],T0.[SCHEDULETIME],T0.[NOTES] ";
                $sql .= "  ,T0.[DATECOMPLETE] , T0.[TIMECOMPLETE] , T0.[TIMEBILLABLE],T0.[TIMENONBILLABLE],T0.[TIMETOTAL] ";
                $sql .= "  ,T0.[LOB] AS 'LOBCODE',MAX(T6.[Description]) AS 'LOBNAME' , T0.[TXTP],T0.[DOCNO] ";
                $sql .= "  ,MAX(T1.[TECHNAME]) AS 'TECHNAME',MAX(T1.[CellPhone]) AS 'TECHPHONE',MAX(T1.[EMailAddy]) AS 'TECHEMAIL',MAX(T2.[EMAIL]) AS 'CONTACTEMAIL',T0.[TECHCODE] ";
                $sql .= "  ,MAX(T3.[Description]) AS 'STATUSNAME',MAX(T4.[Description]) AS 'LOGMETHODNAME',MAX(T5.[Description]) AS 'JOBTYPENAME' ";
                $sql .= "  ,(SELECT COUNT(S0.[RecID]) FROM [SVMJobDetails] S0 WHERE S0.[CO]=T0.[CO] AND T0.[JOBNO]=S0.[JOBNO] AND S0.[Branch]=T0.[Branch] ) AS LINES  ";
                $sql .= $sqlTables . $sqlWhere . " ";
                $sql .= " GROUP BY T0.[RecID],T0.[CO],T0.[Branch],T0.[TECHCODE],";
                $sql .= "  T0.[JOBNO],T0.[JOBTYPE],T0.[PRIORITY] , T0.[DATELOGGED],T0.[TIMELOGGED], T0.[LOGMETHOD],T0.[STATUS] ";
                $sql .= "  ,T0.[DESCRIPTION] , T0.[ACCOUNT] , T0.[NAME],T0.[CONTACT],T0.[CONTACTPHONE] ";
                $sql .= "  ,T0.[REFERENCE] , T0.[SCHEDULEDATE],T0.[SCHEDULETIME],T0.[NOTES] ";
                $sql .= "  ,T0.[DATECOMPLETE] , T0.[TIMECOMPLETE] , T0.[TIMEBILLABLE],T0.[TIMENONBILLABLE],T0.[TIMETOTAL] ";
                $sql .= "  ,T0.[LOB] , T0.[TXTP],T0.[DOCNO] ";
                $sql .= " ORDER BY T0.[RecID] DESC OFFSET ($page_number-1)*$wItem_per_page ROWS FETCH NEXT $wItem_per_page ROWS ONLY";
                $stmt = $conn->getStatement($sql);

                $stmt->execute();
                $variables = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //endregion
                if (isset($variables) & count($variables) > 0) {
                    foreach ($variables as $row) {


                        $code = $row['JOBNO'];
                        $status = $row['STATUS'];
                        $PRIORITY = $row['PRIORITY'];
                        //region Priority
                        $PRIORITY_msg = '<span class="badge badge-soft-info">Normal</span>';
                        switch ($PRIORITY) {
                            case "0":
                                {
                                    $PRIORITY_msg = '<span class="badge badge-soft-info">Low</span>';
                                }
                                break;
                            case "1":
                                {
                                    $PRIORITY_msg = '<span class="badge badge-info">Normal</span>';
                                }
                                break;
                            case "5":
                                {
                                    $PRIORITY_msg = '<span class="badge badge-warning">High</span>';
                                }
                                break;
                            case "9":
                                {
                                    $PRIORITY_msg = '<span class="badge badge-danger">Critical</span>';
                                }
                                break;
                        }


                        //endregion

                        $status_msg = $row['STATUSNAME'];
                        if (empty($status_msg)) {
                            $status_msg = "Status[$status]";
                        }


                        echo '<div class="col-12">';
                        //region Card
                        echo '<div class="card">';
                        //region Card Body
                        echo '<div class="card-body">';
                        //region Rows
                        echo '<div class="row">';
                        //region Top Row
                        echo '<div class="col-12">';
                        echo '<h5 class="card-title">' . $PRIORITY_msg . ' #' . $code . '</h5>';
                        echo '</div>';
                        //endregion
                        //region Mid Row
                        echo '<div class="col-6">';
                        echo '<p class="card-text">';
                        if (!empty($row['NAME'])) {
                            echo '<strong>Account:</strong> ' . $row['NAME'] . '<br/>';
                        }
                        if (!empty($row['REFERENCE'])) {
                            echo '<strong>Reference:</strong> ' . $row['REFERENCE'] . '<br/>';
                        }
                        if (!empty($row['DESCRIPTION'])) {
                            echo '<strong>Subject:</strong> ' . $row['DESCRIPTION'] . '<br/>';
                        }
                        if (!empty($row['NOTES'])) {
                            echo '<strong>Notes:</strong> ' . $row['NOTES'] . '<br/>';
                        }

                        if (!empty($row['LOBCODE'])) {
                            echo '<strong>Line Of Business:</strong> ' . $row['LOBCODE'] . ' - ' . $row['LOBNAME'] . '<br/>';
                        }
                        if (!empty($row['JOBTYPE'])) {
                            echo '<strong>Job Type:</strong> ' . $row['JOBTYPE'] . ' - ' . $row['JOBTYPENAME'] . '<br/>';
                        }
                        if (!empty($row['TECHCODE'])) {
                            echo '<strong>Technician:</strong> ' . $row['TECHCODE'] . ' - ' . $row['TECHNAME'] . '<br/>';
                        }
                        if (!empty($row['TIMETOTAL'])) {
                            echo '<strong>Total Time:</strong> ' . $row['TIMETOTAL'] . '<br/>';
                        }
                        if (!empty($row['TIMENONBILLABLE'])) {
                            echo '<strong>None Billable Time:</strong> ' . $row['TIMENONBILLABLE'] . '<br/>';
                        }
                        if (!empty($row['TIMEBILLABLE'])) {
                            echo '<strong>Time Billable:</strong> ' . $row['TIMEBILLABLE'] . '<br/>';
                        }


                        echo '</p>';
                        echo '</div>';
                        echo '<div class="col-6">';

                        if (!empty($row['LOGMETHOD'])) {
                            echo '<strong>Log Method:</strong> ' . $row['LOGMETHOD'] . ' - ' . $row['LOGMETHODNAME'] . '<br/>';
                        }
                        if (!empty($row['DATELOGGED'])) {
                            echo '<strong>Logged Time:</strong> ' . $row['DATELOGGED'] . ' ' . $row['TIMELOGGED'] . '<br/>';
                        }
                        echo '<strong class="badge badge-soft-info badge-lg">Status:&nbsp;&nbsp; ' . $status_msg . '</strong> <br/>';
                        echo '<div class="btn-group pull-right" >';

                        echo '<a class="btn btn-outline-primary" href="' . MAIN_URL . 'Tickets/' . $code . '" ><i class="fa fa-eye"></i> View</a>';

                        echo '</div>';
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
                    echo '<h4>&#9940; Sorry!!</h4><p>No Tickets Found!</p>';
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