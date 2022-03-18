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

try {
    if (isset($_REQUEST['u'], $_REQUEST['p'], $_REQUEST['t'])) {
        $email_ = trim($_REQUEST["u"]);
        $pwd_ = trim($_REQUEST["p"]);
        $usertype = trim($_REQUEST["t"]);

        switch ($usertype) {
            case "member":
                {
                    $stmt = $conn->getStatement("SELECT TOP 1 [ACCOUNT],[MemberPswd],[STATUS] FROM [DEBOnlineCustMst] WHERE [ACCOUNT]=:ACCOUNT OR [CELLPHONE]=:CELLPHONE OR [EMAIL]=:EMAIL ");
                    if (isset($stmt)) {
                        $stmt->bindParam(":ACCOUNT", $email_);
                        $stmt->bindParam(":CELLPHONE", $email_);
                        $stmt->bindParam(":EMAIL", $email_);
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        if (!empty($result)) {
                            foreach ($result as $value) {
                                $DBpwd = $value["MemberPswd"];
                                $ACCOUNT = $value["ACCOUNT"];
                                $status = $value["STATUS"];
                                if (strtolower($status) === "o") {
                                    if ($DBpwd === $pwd_) {
                                        $_SESSION["ACCOUNT"] = $ACCOUNT;
                                        $jsonObj = array(
                                            "CODE" => "0",
                                            "MESSAGE" => "You Are Authenticated!"
                                        );
                                    } else {
                                        $jsonObj = array(
                                            "CODE" => "11",
                                            "MESSAGE" => "Failed To Authenticate!"
                                        );
                                    }
                                } else {
                                    switch (strtoupper($status)) {
                                        case "X":
                                            {
                                                $jsonObj = array(
                                                    "CODE" => "11",
                                                    "MESSAGE" => "Sorry, Your Profile Is Suspended!"
                                                );
                                            }
                                            break;
                                        case "H":
                                            {
                                                $jsonObj = array(
                                                    "CODE" => "11",
                                                    "MESSAGE" => "Sorry, Your Profile Is On Hold!"
                                                );
                                            }
                                            break;
                                        default:
                                            {
                                                $jsonObj = array(
                                                    "CODE" => "11",
                                                    "MESSAGE" => "Sorry, Your Profile Is Not Activate!"
                                                );
                                            }
                                            break;
                                    }
                                }
                            }
                        } else {
                            $jsonObj = array(
                                "CODE" => "11",
                                "MESSAGE" => "Member Not Found!"
                            );
                        }
                    } else {
                        $jsonObj = array(
                            "CODE" => "11",
                            "MESSAGE" => "Database Connection Failed!"
                        );
                    }
                }
                break;
            case "tech":
                {

                    $stmt = $conn->getStatement("SELECT TOP 1 [USERCODE],[USERNAME],[USERPSWD],[STATUS] FROM [SYSUSER] WHERE [USERCODE]=:USERCODE");
                    if (isset($stmt)) {
                        $stmt->bindParam(":USERCODE", $email_);
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        if (!empty($result)) {
                            foreach ($result as $value) {
                                $DBpwd = $value["USERPSWD"];
                                $USERNAME = $value["USERNAME"];
                                $USERCODE = $value["USERCODE"];
                                $status = $value["STATUS"];
                                if (strtolower($status) === "a") {
                                    if ($DBpwd === $pwd_) {
                                        $_SESSION["USER"] = $USERCODE;
                                        $jsonObj = array(
                                            "CODE" => "0",
                                            "MESSAGE" => "You Are Authenticated!"
                                        );
                                    } else {
                                        $jsonObj = array(
                                            "CODE" => "11",
                                            "MESSAGE" => "Failed To Authenticate!"
                                        );
                                    }
                                } else {
                                    switch (strtoupper($status)) {
                                        case "X":
                                            {
                                                $jsonObj = array(
                                                    "CODE" => "11",
                                                    "MESSAGE" => "Sorry, Your Profile Is Suspended!"
                                                );
                                            }
                                            break;
                                        case "H":
                                            {
                                                $jsonObj = array(
                                                    "CODE" => "11",
                                                    "MESSAGE" => "Sorry, Your Profile Is On Hold!"
                                                );
                                            }
                                            break;
                                        default:
                                            {
                                                $jsonObj = array(
                                                    "CODE" => "11",
                                                    "MESSAGE" => "Sorry, Your Profile Is Not Activate!"
                                                );
                                            }
                                            break;
                                    }
                                }
                            }
                        } else {
                            $jsonObj = array(
                                "CODE" => "11",
                                "MESSAGE" => "User Not Found!"
                            );
                        }
                    } else {
                        $jsonObj = array(
                            "CODE" => "11",
                            "MESSAGE" => "Database Connection Failed!"
                        );
                    }
                }
                break;
            default:
                {
                    $jsonObj = array(
                        "CODE" => "11",
                        "MESSAGE" => "Sorry, User Type Not Supported!"
                    );
                }
                break;
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