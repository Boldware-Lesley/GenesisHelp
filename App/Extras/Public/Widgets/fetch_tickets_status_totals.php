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
if (isset($MEMBER->recid, $database_server,$Accounts)) {
    $my_acc="";
    foreach ($Accounts as $acc) {
        if(!empty($my_acc)){
            $my_acc.=",";
        }
        $my_acc.=sql_cover_value(escapeSql($acc));
    }

    if(!empty($my_acc)) {

        //region Get Status
        $query = " SELECT ";
        $query .= "  T0.[RECID],T0.[CODE],T0.[DESCRIPTION] ";
        $query .= " FROM [SysCodeMaster] T0  ";
        $query .= " WHERE T0.[CO]=:CO  AND T0.[CodeType]='SVMSTS' ";
        $query .= " ORDER BY T0.[CODE] ASC;";
        $stmt = $conn->getStatement($query);
        $stmt->bindParam(":CO", $database_server->CO);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $STATUS_OPTIONS = array();
        if (count($result) > 0) {
            foreach ($result as $value) {
                if (!empty($value['DESCRIPTION'])) {
                    $STATUS_OPTIONS[$value['CODE']] = $value['DESCRIPTION'];

                }
            }
        }
        //endregion
        $sql = "(SELECT 'ALL' AS 'LINE','' AS 'CODE',COUNT([RecID]) AS 'TOT' FROM [SVMJobHeader] WHERE [CO]=" . sql_cover_value(escapeSql($database_server->CO)) . " AND [BRANCH]=" . sql_cover_value(escapeSql($database_server->Branch)) . "  AND [Account] IN (" . $my_acc . ")  )";

        foreach ($STATUS_OPTIONS as $status_code => $status_desc) {
            $sql .= " UNION ALL (SELECT '$status_desc' AS 'LINE','$status_code' AS 'CODE',COUNT([RecID]) AS 'TOT' FROM [SVMJobHeader] WHERE [CO]=" . sql_cover_value(escapeSql($database_server->CO)) . " AND [BRANCH]=" . sql_cover_value(escapeSql($database_server->Branch)) . "  AND [Account] IN (" . $my_acc . ") AND [Status]=" . sql_cover_value(escapeSql($status_code)) . "  )";
        }


        $stmt = $conn->getStatement($sql);

        $stmt->execute();
        $variables = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //endregion
        if (isset($variables) & count($variables) > 0) {
            foreach ($variables as $row) {
                $LINE = $row['LINE'];
                $CODE = $row['CODE'];
                $TOT = (int)$row['TOT'];
                echo '<div class="col-md-4">';
                echo '    <a href="' . MAIN_URL . 'Tickets/?status=' . $CODE . '" style="  text-decoration: none;">';
                echo '        <div class="card bg-info m-2">';
                echo '            <h3 class="card-title text-center">' . $LINE . ' TICKETS</h3>';
                echo '            <div class="inner text-center">';
                echo '                <h1>' . $TOT . '</h1>';
                echo '            </div>';
                echo '        </div>';
                echo '    </a>';
                echo '</div>';
            }
        }
    }

}
?>
