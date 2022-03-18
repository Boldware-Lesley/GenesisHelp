<?php
require_once(__DIR__ . "/../../Extras/actions.php");
require_once(__DIR__ . "/../../Model/Config.php");
require_once(__DIR__ . "/../../Extras/settings.php");
require_once(__DIR__ . "/../../Extras/Public/Actions/System.php");

if (!isset($app_server) && isset($GLOBALS['app_server'])) {
    $app_server = $GLOBALS['app_server'];
}
if (!isset($database_server) && isset($GLOBALS['database_server'])) {
    $database_server = $GLOBALS['database_server'];
}
if (!isset($conn_global) && isset($GLOBALS['conn_global'])) {
    $conn_global = $GLOBALS['conn_global'];
}
if (!isset($conn_global)) {
    $conn_global = new genesis\SQLConnection();
    $GLOBALS['conn_global'] = $conn_global;
}
$system = new System();
$todayYear = date("Y");
$todayWeek = date("W");
$todayDate = date("Y/m/d");
$todayTime = date("H:i:s");
$today = date("Y/m/d H:i:s");

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $app_server->AppName;?> - Error Codes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- css -->
    <link href="<?php echo MAIN_URL;?>css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo MAIN_URL;?>css/style.css" rel="stylesheet">
    <!--[if lt IE 7]>
    <link href="<?php echo MAIN_URL;?>css/font-awesome-ie7.css" type="text/css" rel="stylesheet">
    <![endif]-->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo MAIN_URL;?>favicon.png">
</head>

<body>
<!-- navbar -->
<div class="navbar-wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <!-- Responsive navbar -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </a>
                <h1 class="brand"><a href="#"><?php echo $app_server->AppName;?></a></h1>
                <!-- navigation -->
                <nav class="pull-right nav-collapse collapse">
                    <ul id="menu-main" class="nav">
                        <li><a title="PHP Info" href="<?php echo MAIN_URL;?>Errors">Latest Errors</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- spacer section -->
<section class="spacer orange">
    <div class="container">
        <div class="row">
            <div class="span12 aligncenter flyUp">
                <h2 class="pagetitle"><strong>Error Codes</strong>, Week Number <strong><?php echo $todayWeek;?></strong></h2>
            </div>
        </div>
    </div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id="maincontent" class="inner">
    <div class="container">

        <table style="width: 100%">
            <thead>
            <tr>
                <th>
                    Code
                </th>
                <th>
                    Description
                </th>
                <th>
                    Possible Solutions
                </th>
            </tr>
            </thead>
            <tbody>

                <?php
                try {
                    $query = "SELECT * FROM [vcAppStoreErrorCodes] ORDER BY [ErrorCode] ASC; ";
                    $stmt = $conn_global->getStatement($query);
                    if(isset($stmt)) {
                        $stmt->execute();
                        $accVar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        if (isset($accVar)) {
                            foreach ($accVar as $row) {

                                echo "<tr>";
                                echo "<td  valign='top'>" . $row["ErrorCode"] . "</td>";
                                echo "<td valign='top'><strong>" . $row["ErrorTitle"] . "</strong></td>";
                                echo "<td valign='top'>" . $row["ErrorSolution"] . "</td>";
                                echo "</tr>";

                            }
                        }
                    }
                }catch (Exception $ex){
                    echo "<tr>";
                    echo "<td colspan='2'>Oops,".$ex->getMessage()."</td>";
                    echo "</tr>";
                }

                ?>


            </tbody>
        </table>
    </div>
    <!-- end container -->
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="span6 offset3">
                <p class="copyright">
                    &copy; <?php echo $todayYear;?> MRJ Consultants. All rights reserved.
                </p>
            </div>
        </div>
    </div>
    <!-- ./container -->
</footer>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
<!-- jQuery -->
<script src="<?php echo MAIN_URL;?>js/jquery.js"></script>
<!-- nav -->
<script src="<?php echo MAIN_URL;?>js/jquery.scrollTo.js"></script>
<script src="<?php echo MAIN_URL;?>js/jquery.nav.js"></script>
<!-- localScroll -->
<script src="<?php echo MAIN_URL;?>js/jquery.localscroll-1.2.7-min.js"></script>
<!-- bootstrap -->
<script src="<?php echo MAIN_URL;?>js/bootstrap.js"></script>
<!-- prettyPhoto -->
<script src="<?php echo MAIN_URL;?>js/jquery.prettyPhoto.js"></script>
<!-- Works scripts -->
<script src="<?php echo MAIN_URL;?>js/isotope.js"></script>
<!-- flexslider -->
<script src="<?php echo MAIN_URL;?>js/jquery.flexslider.js"></script>
<!-- inview -->
<script src="<?php echo MAIN_URL;?>js/inview.js"></script>
<!-- animation -->
<script src="<?php echo MAIN_URL;?>js/animate.js"></script>
<!-- twitter -->
<script src="<?php echo MAIN_URL;?>js/jquery.tweet.js"></script>
<!-- contact form -->
<script src="<?php echo MAIN_URL;?>js/validate.js"></script>
<!-- custom functions -->
<script src="<?php echo MAIN_URL;?>js/custom.js"></script>
</body>

</html>
