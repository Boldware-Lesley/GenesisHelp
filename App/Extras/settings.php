<?php
$today = date("d-m-Y H:i:s");
$configFile = 'System.ini';


//Application
if (file_exists(__DIR__ . '/../Model/' . $configFile)) {
    $config_set = parse_ini_file(__DIR__ . '/../Model/' . $configFile, true);

    if (isset($config_set['Database'])) {
        $database_json = json_encode($config_set['Database'], JSON_INVALID_UTF8_SUBSTITUTE);
        $database_server = json_decode($database_json, false, 512, JSON_INVALID_UTF8_SUBSTITUTE);
    }

    if (isset($config_set['Application'])) {
        $application_json = json_encode($config_set['Application'], JSON_INVALID_UTF8_SUBSTITUTE);
        $app_server = json_decode($application_json, false, 512, JSON_INVALID_UTF8_SUBSTITUTE);
    }

    if (isset($config_set['Version'])) {
        $version_json = json_encode($config_set['Version'], JSON_INVALID_UTF8_SUBSTITUTE);
        $version_server = json_decode($version_json, false, 512, JSON_INVALID_UTF8_SUBSTITUTE);
    }
    foreach ($config_set["Application"] as $key => $val) {
        define($key, $val);
    }
    $protocol = !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
    define('MAIN_URL', $protocol . $_SERVER['HTTP_HOST'] . AppHost);
    define('ROOT_URL', $_SERVER["DOCUMENT_ROOT"] . AppHost);
    define('TEMPLATES_PATH', ROOT_URL . "public/portal/");
    define('TEMPLATES_URL', MAIN_URL . "public/portal/");

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
        define('IP_ADD', $_SERVER['HTTP_CLIENT_IP']);
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        define('IP_ADD', $_SERVER['HTTP_X_FORWARDED_FOR']);
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
        define('IP_ADD', $_SERVER['REMOTE_ADDR']);
    }

}

define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);

$GLOBALS['database_server'] = $database_server;
$GLOBALS['app_server'] = $app_server;
$GLOBALS['version_server'] = $version_server;

