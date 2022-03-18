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
$wItem_per_page=8;
if (isset($MEMBER->recid,$database_server, $Accounts)) {
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
            if (isset($_REQUEST["JOB"])) {
                $JOB = trim($_REQUEST["JOB"]);
                $myQ = "";
                if (isset($_REQUEST["Q"])) {
                    $myQ = trim($_REQUEST["Q"]);
                }



                //region Tables FROM
                $sqlTables = " FROM [SVMJobDetails] T0  ";
                $sqlTables .= " LEFT JOIN [SVMTechMaster] T1 ON T1.[CO]=T0.[CO] AND T0.[TechCode]=T1.[TechCode] AND T1.[Branch]=T0.[Branch]  ";
                $sqlTables .= " LEFT JOIN [STKMaster] T2 ON T2.[CO]=T0.[CO] AND T2.[Branch]=T0.[Branch] AND T2.[StockCode]=T0.[StockCode] AND T2.[LinkCode]=T0.[LinkCode]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T4 ON T4.[CO]=T0.[CO] AND T4.[CodeType]='SVMBIL' AND T4.[Code]=T0.[BILLCODE]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T5 ON T5.[CO]=T0.[CO] AND T5.[CodeType]='SVMBLG' AND T5.[Code]=T4.[USERFLD2]  ";
                $sqlTables .= " LEFT JOIN [SYSTAX] T6 ON T6.[TAXCODE]=T2.[VATCode]";
                $sqlTables .= " LEFT JOIN [SVMTechBillCodes] T7 ON T7.[CO]=T0.[CO] AND T7.[Branch]=T0.[Branch] AND T7.[BILLCODE]=T0.[BILLCODE] AND T7.[TechCode]=T0.[TechCode]  ";
                $sqlTables .= " LEFT JOIN [SysCodeMaster] T8 ON T8.[CO]=T0.[CO] AND T8.[CodeType]='SVMLOB' AND T8.[Code]=T0.[LOB]  ";
                //endregion

                //region WHERE

                $sqlWhere = " WHERE T0.[CO]=".sql_cover_value(escapeSql($database_server->CO) )." AND T0.[BRANCH]=".sql_cover_value(escapeSql($database_server->Branch) )." AND T0.[JOBNO]=".sql_cover_value(escapeSql($JOB) )."  ";

                if (!empty($myQ)) {
                    $sqlWhere .= " AND (T0.[Description1] LIKE '%" . escapeSql($myQ) . "%' OR T0.[Notes] LIKE '%" . escapeSql($myQ) . "%' OR T0.[StockCode] LIKE '%" . escapeSql($myQ) . "%' OR T0.[SerialNo] LIKE '%" . escapeSql($myQ) . "%' ) ";
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
                $sql .= "  T0.[RECID], T0.[CO],T0.[BRANCH],T0.[JOBNO],T0.[TRANDATE],T0.[LINENUMBER] , T0.[STOCKCODE],T0.[LINKCODE], T0.[NOTES] ";
                $sql .= "  ,T0.[DESCRIPTION1] , T0.[DESCRIPTION2] , T0.[QUANTITY],T0.[PRICEEXCL],T0.[PRICEINCL] ";
                $sql .= "  ,T0.[SERIALNO] , T0.[TECHCODE] , T0.[BILLCODE],T0.[TIMEBILLABLE] ";
                $sql .= "  ,T0.[TIMENONBILLABLE] , T0.[TIMETOTAL] , T0.[TRAVELBILLABLE],T4.[USERFLD2] AS 'BILLCODEGROUP' ";
                $sql .= "  ,T1.[TechName] as 'TECHNAME',T2.[StockType] as 'STOCKTYPE',T4.[Description] AS 'BILLCODENAME',T5.[Description] AS 'BILLCODEGROUPNAME' ";
                $sql .= "  ,T6.[TAXRATE], T6.[TAXDESC], T6.[TAXCODE],T7.[RATE] AS BILLCODERATE,T0.[LOB] AS 'LOBCODE',T8.[Description] AS 'LOBNAME' ";
                $sql .= "  ,(SELECT COUNT(S0.[RecID]) FROM [SVMJobImages] S0 WHERE S0.[CO]=T0.[CO] AND T0.[JOBNO]=S0.[JOBNO] AND S0.[Branch]=T0.[Branch] AND S0.[LineNumber]=T0.[LineNumber] ) AS LINES  ";
                $sql .= $sqlTables . $sqlWhere . " ";

                $sql .= " ORDER BY T0.[LINENUMBER] DESC OFFSET ($page_number-1)*$wItem_per_page ROWS FETCH NEXT $wItem_per_page ROWS ONLY";


                $stmt = $conn->getStatement($sql);

                $stmt->execute();
                $variables = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //endregion

                if (isset($variables) & count($variables) > 0) {
                    foreach ($variables as $row) {


                        $code = $row['LINENUMBER'];
                        $status = $row['STATUS'];


                        echo '<div class="col-12">';
                        //region Card
                        echo '<div class="card">';
                        //region Card Body
                        echo '<div class="card-body">';
                        //region Rows
                        echo '<div class="row">';
                        //region Top Row
                        echo '<div class="col-12">';
                        echo '<h5 class="card-title">#' . $code . '</h5>';
                        echo '</div>';
                        //endregion
                        //region Mid Row
                        echo '<div class="col-md-6">';
                        echo '<p class="card-text">';
                        if (!empty($row['DESCRIPTION1'])) {
                            echo '<strong>Desc #1:</strong> ' . $row['DESCRIPTION1'] . '<br/>';
                        }
                        if (!empty($row['DESCRIPTION2'])) {
                            echo '<strong>Desc #2:</strong> ' . $row['DESCRIPTION2'] . '<br/>';
                        }
                        if (!empty($row['SERIALNO'])) {
                            echo '<strong>Serial #:</strong> ' . $row['SERIALNO'] . '<br/>';
                        }
                        if (!empty($row['NOTES'])) {
                            echo '<strong>Notes:</strong> ' . $row['NOTES'] . '<br/>';
                        }

                        if (!empty($row['LOBCODE'])) {
                            echo '<strong>Line Of Business:</strong> ' . $row['LOBCODE'] . ' - ' . $row['LOBNAME'] . '<br/>';
                        }
                        if (!empty($row['BILLCODE'])) {
                            echo '<strong>Bill Code:</strong> ' . $row['BILLCODE'] . ' - ' . $row['BILLCODENAME'] . '<br/>';
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
                        echo '<div class="col-md-6">';
                        if (!empty($row['TRANDATE'])) {
                            echo '<strong>Date:</strong> ' . $row['TRANDATE'] . '<br/>';
                        }
                        echo '<div class="pull-right" >';
                        if (empty($row['TECHCODE'])) {
       echo '<button class="btn btn-outline-danger mydel" opt="' . $row['RECID'] . '" optCode="' . $code . '"><i class="fa fa-ban"></i> Delete</button>';
   }
                        echo '<a class="btn btn-outline-secondary " href="' . MAIN_URL . 'Tickets/'.$row['JOBNO'].'/'. $code . '" ><i class="fa fa-link"></i> Attachments <span class="badge btn-primary">'.((int)$row['LINES']).'</span></a>';
                        echo '<button class="btn btn-outline-primary myPhoto" opt="' . $code . '"><i class="fa fa-upload"></i> Add Photos</button>';


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
                    echo '<h4>&#9940; Sorry!!</h4><p>No Ticket Lines Found!</p>';
                    echo '</div>';
                    echo '</div>';
                }
                $conn->Close();

                echo paginate_function($wItem_per_page, $page_number, $totalRec, $total_pages);
            } else {
                echo '<div class="col-12">';
                echo '<div class="mrg-05em alert alert-danger">';
                echo '<h4>&#9940; Sorry!!</h4><p>Invalid Ticket Number!</p>';
                echo '</div>';
                echo '</div>';
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
    <div id="modalDelete" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Are You Sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-bs-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        You Want To Delete This Line, <b><span id="MyDisplay"></span></b>!!
                    </p>
                    <div class="clear clearfix"></div>
                    <div id="message_Delete"></div>
                </div>
                <div class="modal-footer">
                    <form id="deleteform" role="form" method="post">
                        <input type="hidden" name="myIdD" id="myIdD"/>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!--region Actions-->
    <script type='text/javascript'>

        $(".mydel").click(function () {
            const myID = $(this).attr('opt');
            const optCode = $(this).attr('optCode');
            $('#message_Delete').html("");
            $('#MyDisplay').html(optCode);
            $('#myIdD').val(myID);
            $('#modalDelete').modal('show');
        });

        $(".myPhoto").click(function () {
            const myID = $(this).attr('opt');
            $('#msgBox_Photo').html("");
            $('#newLinePhotoLabel').html("New Photos For <b>Line #" + myID+"</b");
            $('#frmNewLinePhoto input[name="line"]').val(myID);
            $('#newLinePhoto').modal('show');
        });




        $("#deleteform").submit(function () {

            const formData = new FormData($(this)[0]);
            const url = "<?php echo MAIN_URL;?>App/Extras/Public/Actions/delete_ticket_line.php"; // the script where you handle the form input.

            $.ajax({
                type: "POST",
                url: url,
                cache: false,
                contentType: false,
                processData: false,
                data: formData, //$("#SaveForm").serialize(), // serializes the form's elements.
                beforeSend: function () {


                    $('#message_Delete').html("<div class='loader'><i class='fa fa-cog fa-spin'></i> Deleting...</div>");

                    return true;

                },


                success: function (data) {
                    $('#message_Delete').html('');
                    if (typeof data !== 'undefined' && data !== null) {
                        if (IsJsonString(data)) {
                            const result = JSON.parse(data);
                            if (result.CODE === "0") {
                                toastr.success(result.MESSAGE, 'Success!');
                                $("#actform").trigger("reset");
                                $('#modalDelete').modal('hide');
                                $("#searchForm").submit();

                            } else if (result.CODE === "101") {
                                $('#message_Delete').html('<div class="alert alert-danger" role="alert"> <strong>Oh snap!</strong> ' + result.MESSAGE + ' </div>');

                            } else {
                                toastr.error(result.MESSAGE, 'Oh snap!');
                            }
                        } else {
                            $('#message_Delete').html('<div class="alert alert-danger" role="alert"> <strong>Oh snap!</strong> ' + data + ' </div>');

                        }
                    } else {
                        toastr.error(data, 'Null Result');
                    }
                },
                error: function (request, status, error) {
                    toastr.error('[' + status + '/' + error + ']', 'Script Error');
                }

            });
            return false; // avoid to execute the actual submit of the form.
        });
    </script>
    <!--endregion-->
    <!--region Pop Up -->
    <script type="application/javascript">
        function openPopUpFiles(CO,TRANSTYPE,TRANSNO) {
            const win = window.open('<?php echo MAIN_URL;?>CMS/Windows/POSFILES/'+CO+'/'+TRANSTYPE+'/'+TRANSNO+'/?Q=', '_blank', 'toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, copyhistory=no, width=' + pop_w + ', height=' + pop_h + ', top=' + pop_top + ', left=' + pop_left);
            // pass the targetField to the pop up window
            win.focus();
        }
        function openPopUpLogs(CO,TRANSTYPE,TRANSNO) {
            const win = window.open('<?php echo MAIN_URL;?>CMS/Windows/POSLOGS/'+CO+'/'+TRANSTYPE+'/'+TRANSNO+'/?Q=', '_blank', 'toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, copyhistory=no, width=' + pop_w + ', height=' + pop_h + ', top=' + pop_top + ', left=' + pop_left);
            // pass the targetField to the pop up window
            win.focus();
        }


        function setPopResultPanel(MethodType, PanelType, returnValue) {

            switch (MethodType.toUpperCase()) {
                case "STOCK": {
                    switch (PanelType.toUpperCase()) {

                        default: {
                            //region Normal
                            $('#searchForm input[name="search"]').val(returnValue);
                            $("#searchForm").submit();
                            //endregion
                        }
                            break;

                    }

                }
                    break;

            }


            window.focus();

        }
    </script>
    <!--endregion-->
<?php } ?>