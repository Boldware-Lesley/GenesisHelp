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
            if (isset($_REQUEST["JOB"],$_REQUEST["LINE"])) {
                $JOB = trim($_REQUEST["JOB"]);
                $LINE = (int)($_REQUEST["LINE"]);
                $myQ = "";
                if (isset($_REQUEST["Q"])) {
                    $myQ = trim($_REQUEST["Q"]);
                }



                //region Tables FROM
                $sqlTables = " FROM [SVMJobImages] T0  ";
               //endregion

                //region WHERE

                $sqlWhere = " WHERE T0.[CO]=".sql_cover_value(escapeSql($database_server->CO) )." AND T0.[BRANCH]=".sql_cover_value(escapeSql($database_server->Branch) )." AND T0.[JOBNO]=".sql_cover_value(escapeSql($JOB) )." AND T0.[LineNumber]=".sql_cover_value(escapeSql($LINE) )."  ";

                if (!empty($myQ)) {
                    $sqlWhere .= " AND (T0.[ImageDesc] LIKE '%" . escapeSql($myQ) . "%' ) ";
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
                $sql .= " T0.[RECID],T0.[CO],T0.[BRANCH],T0.[JOBNO],T0.[LINENUMBER],T0.[IMAGEDESC] , T0.[IMAGETYPE],T0.[IMAGESIZE],T0.[DTOUSER] ";
                $sql .= $sqlTables . $sqlWhere . " ";

                $sql .= " ORDER BY T0.[RECID] DESC OFFSET ($page_number-1)*$wItem_per_page ROWS FETCH NEXT $wItem_per_page ROWS ONLY";


                $stmt = $conn->getStatement($sql);

                $stmt->execute();
                $variables = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //endregion
                if (isset($variables) & count($variables) > 0) {
                    foreach ($variables as $row) {

                        $RECID = $row['RECID'];
                        $code = $row['LINENUMBER'];

                        $photoUrl = MAIN_URL . 'file/TicketImage/' . $RECID."?h=200&preview=YES";


                        echo '<div class="col-3">';
                        //region Card
                        echo '<div class="card">';
                        echo '<img class="card-img-top lazy card-img-4"  src="'.MAIN_URL.'public/img/ajax-loader1.gif"  data-src="' . $photoUrl . '" alt="'.$row['IMAGEDESC'].'" style="object-fit: scale-down;height: 200px"/>';
                        //region Card Body
                        echo '<div class="card-body">';
                        if(!empty($row['IMAGEDESC'])){
                            echo '  <h5 class="card-title">'.$row['IMAGEDESC'].'</h5>';
                        }else{
                            echo '  <h5 class="card-title">Untitled</h5>';
                        }

                        echo '   <p class="card-text"></p>';

                        echo '</div>';
                        //endregion
                        //region Card Footer
                        echo '<div class="card-footer">';
                        if($row['DTOUSER']==="SYSTEM") {
                            echo '<button class="btn btn-outline-danger mydel" opt="' . $RECID . '" ><i class="fa fa-ban"></i> Delete</button>';
                        }
                        echo '<a class="btn btn-outline-secondary " target="_blank" href="' . MAIN_URL . 'file/TicketImage/' . $RECID. '" ><i class="fa fa-folder-open"></i> Open</a>';
                        echo '</div>';
                        //endregion
                        echo '</div>';
                        //endregion
                        echo '</div>';

                    }
                } else {
                    echo '<div class="col-12">';
                    echo '<div class="mrg-05em alert alert-danger">';
                    echo "<h4>&#9940; Sorry!!</h4><p>No Ticket Line's Files Found!</p>";
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
                        You Want To Delete File, <b><span id="MyDisplay"></span></b>!!
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
            $('#message_Delete').html("");
            $('#MyDisplay').html("<b>ID: " + myID+"</b>");
            $('#myIdD').val(myID);
            $('#modalDelete').modal('show');
        });


        $("#deleteform").submit(function () {

            const formData = new FormData($(this)[0]);
            const url = "<?php echo MAIN_URL;?>App/Extras/Public/Actions/delete_ticket_line_file.php"; // the script where you handle the form input.

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

<?php } ?>