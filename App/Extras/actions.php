<?php

//region DB SQL
function UpdateDevice($task,$macid,$macname,$mactype,$user, $onesignal_id)
{
    try {
        if (isset($GLOBALS['conn'])) {
            $conn = $GLOBALS['conn'];
        } else {
            $conn = new  MyConnection();
            $GLOBALS['conn'] = $conn;
        }
        $status = "0";
        $status_msg = "Active Device";
        $todayDate = date("Y/m/d");
        $todayTime = date("H:i:s");
        $today = date("Y/m/d H:i:s");

        if($macname===null || strtolower($macname)==="null" || empty($macname)){
            $macname="Unknown";
        }
        if($mactype===null || strtolower($mactype)==="null" || empty($mactype)){
            $mactype="OTHER";
        }
        if($mactype==="OSX" || $mactype==="MAC OS X"){
            $mactype="IOS";
        }
        if($mactype!=="ANDROID" && $mactype!=="IOS"){
            $mactype="OTHER";
        }
        if($onesignal_id===null || strtolower($onesignal_id)==="null"){
            $onesignal_id="";
        }
        if($user===null || strtolower($user)==="null"){
            $user="";
        }
        if($macid===null || strtolower($macid)==="null" || strtolower($macid)==="app"){
            $macid="";
        }
        if(!empty($macid) && !empty($user)) {
            $sqlQ = "INSERT INTO `sys_devices`
							(`macid`,`type`,`name`,`task`,`first_user`, `last_user`,`onesignal_id`, `status_message`,`status`,`dtodate`,`dtotime`)
							VALUES (:macid, :type,:name,:task,:first_user, :last_user, :onesignal_id, :status_message, :status, :dtodate, :dtotime)";

            $sqlQ .= " ON DUPLICATE KEY UPDATE `task`=:task,`last_user`=:last_user,`type`=:type,`name`=:name, ";
            if (!empty($onesignal_id)) {
                $sqlQ .= " `onesignal_id`=:onesignal_id,";
            }
            $sqlQ .= " `dtodate`=:dtodate, `dtotime`=:dtotime;";
            $wStmt = $conn->getStatement($sqlQ);
            $wStmt->bindParam(":task", $task);
            $wStmt->bindParam(":name", $macname);
            $wStmt->bindParam(":type", $mactype);
            $wStmt->bindParam(":macid", $macid);
            $wStmt->bindParam(":first_user", $user);
            $wStmt->bindParam(":last_user", $user);
            $wStmt->bindParam(":onesignal_id", $onesignal_id);
            $wStmt->bindParam(":status_message", $status_msg);
            $wStmt->bindParam(":status", $status);
            $wStmt->bindParam(":dtodate", $todayDate);
            $wStmt->bindParam(":dtotime", $todayTime);

            $wStmt->execute();
            $wStmt->closeCursor();
            $conn->Close();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
//endregion

//region Other Functions
function FileMIME($ext)
{
    $ext=str_replace(".","",$ext);


    $mime="application/octet-stream";
    switch (strtolower($ext)){
        case "pdf":{
            $mime="application/pdf";
        }break;
        case "png":{
            $mime="image/png";
        }break;
        case "jpg":
        case "jpeg":{
            $mime="image/jpeg";
        }break;
        case "bmp":{
            $mime="image/bmp";
        }break;

    }
    return $mime;
}

function FileIsImage($ext)
{
    $ext=str_replace(".","",$ext);


    $mime=false;
    switch (strtolower($ext)) {
        case "png":
        case "bmp":
        case "jpg":
        case "jpeg":
            {
                $mime = true;
            }
            break;
    }
    return $mime;
}

function DisplayPrice($price)
{
    $Currency = "R";
    if (isset($GLOBALS['app_server'])) {
        $app_server = $GLOBALS['app_server'];
        if (empty($app_server->Currency)) {
            $Currency = $app_server->Currency;
        }
    }

    $full_amount = round($price, 2);
    $temp_arr = explode(".", $full_amount);

    if (isset($temp_arr[0],$temp_arr[1])) {
        $amount = $temp_arr[0];
        $decimals = $temp_arr[1];
        return $Currency . ' ' . number_format($amount) . '<span class="product-cents">' . $decimals . '</span>';
    }

    return $Currency . ' ' . number_format($full_amount);
}

function number2letter($cols)
{
    $c = "A";
    if ($cols === 0) {
        $c = "A";
    }
    if ($cols === 1) {
        $c = "B";
    }
    if ($cols === 2) {
        $c = "C";
    }
    if ($cols === 3) {
        $c = "D";
    }
    if ($cols === 4) {
        $c = "E";
    }
    if ($cols === 5) {
        $c = "F";
    }
    if ($cols === 6) {
        $c = "G";
    }
    if ($cols === 7) {
        $c = "H";
    }
    if ($cols === 8) {
        $c = "I";
    }
    if ($cols === 9) {
        $c = "J";
    }
    if ($cols === 10) {
        $c = "K";
    }
    if ($cols === 11) {
        $c = "L";
    }
    if ($cols === 12) {
        $c = "M";
    }
    return $c;
}

function is_special_css($key)
{

    return (strtolower(trim($key)) === 'view') |
        (strtolower(trim($key)) === 'title') |
        (strtolower(trim($key)) === 'type') |
        (strtolower(trim($key)) === 'flow') |
        (strtolower(trim($key)) === 'promotionbackground') |
        (strtolower(trim($key)) === 'promotiontextcolour') |
        (strtolower(trim($key)) === 'normalbackground') |
        (strtolower(trim($key)) === 'normaltextcolour') |
        (strtolower(trim($key)) === 'childheight') |
        (strtolower(trim($key)) === 'childbottom') |
        (strtolower(trim($key)) === 'childbackground') |
        (strtolower(trim($key)) === 'childbottomhover') |
        (strtolower(trim($key)) === 'childbackgroundover') |
        (strtolower(trim($key)) === 'imageheight') |
        (strtolower(trim($key)) === 'linkcolour') |
        (strtolower(trim($key)) === 'linkhovercolour') |
        (strtolower(trim($key)) === 'linkbackground') |
        (strtolower(trim($key)) === 'linkbackgroundhover');
}

function _is_installed($ext)
{
    if (in_array($ext, get_loaded_extensions(), true)) {
        return true;
    }

    return false;
}

function break_description($obj)
{
    $out = array();
    $arrChar = array("'", '"', '(', '`', ')', "&");

    foreach ($arrChar as $char) {
        $rows = explode(trim($char), $obj);
        foreach ($rows as $row) {
            if (!empty($row)) {
                $newText = $row;


                $pos = array();

                foreach ($arrChar as $value) {
                    if (strrpos($row, $value) > -1) {
                        $pos[] = strrpos($row, $value);
                    }
                }
                sort($pos);
                if (count($pos) > 0) {
                    $newText = substr($row, 0, $pos[0]);
                }
                if (!in_array($newText, $out, true)) {
                    $out[] = $newText;
                }

            }
        }

    }
    return $out;
}

function obj2array($obj)
{
    $out = array();
    foreach ($obj as $key => $val) {
        switch (true) {
            case is_array($val):
            case is_object($val):
                $out[$key] = obj2array($val);
                break;
            default:
                $out[$key] = $val;
        }
    }
    return $out;
}

/** @noinspection CurlSslServerSpoofingInspection */
function get_curl($url)
{
    try {
        if (function_exists('curl_init')) {

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $output = curl_exec($ch);

            curl_close($ch);
            return $output;

        }

        return file_get_contents($url);
    } catch (Exception $e) {
        return $e->getMessage();
    }


}

function grab_file($url)
{
    if (function_exists('file_get_contents')) {
        $url_get_contents_data = file_get_contents($url, FILE_USE_INCLUDE_PATH);
    } elseif (function_exists('curl_exec')) {
        $conn = curl_init($url);
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($conn, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $url_get_contents_data = (curl_exec($conn));
        curl_close($conn);
    } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
        $handle = fopen($url, 'rb');
        $url_get_contents_data = stream_get_contents($handle);
    } else {
        $url_get_contents_data = false;
    }
    return $url_get_contents_data;
}

function getRegionCountry($address)
{
    // We get the JSON results from this request
    $geo = get_curl('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyD1rbO5ijLDbQ1pbLLAAKs4cwwn7R5Bp6Y&address=' . urlencode($address) . '&sensor=true');
    $list = array();

    // We convert the JSON to an array
    if (isset($geo)) {
        try {
            $geo = json_decode($geo, true, 512, JSON_INVALID_UTF8_SUBSTITUTE);
        } catch (Exception $e) {
        }
        // If everything is cool
        // We set our values
        if (($geo['status'] = 'OK') && isset($geo['results'][0]['geometry']['location']['lat'])) {
            $total = count($geo['results'][0]['address_components']);
            $list['Region'] = $geo['results'][0]['address_components'][($total - 3)]['long_name'];
            $list['Country'] = $geo['results'][0]['address_components'][($total - 1)]['short_name'];
            //Lat
            $list['latitude'] = $geo['results'][0]['geometry']['location']['lat'];
            $list['longitude'] = $geo['results'][0]['geometry']['location']['lng'];

        }
    }

    return $list;
    //maps.googleapis.com/maps/api/geocode/json?address=23132+Mosegare+St%2C+Mamelodi%2C+Pretoria%2C+Gauteng&key=AIzaSyD1rbO5ijLDbQ1pbLLAAKs4cwwn7R5Bp6Yhttps://maps.googleapis.com/maps/api/geocode/json?address=23132+Mosegare+St%2C+Mamelodi%2C+Pretoria%2C+Gauteng&key=AIzaSyD1rbO5ijLDbQ1pbLLAAKs4cwwn7R5Bp6Y

}


function getDistance($from, $to)
{
    $list = array();

    if(fsockopen('maps.googleapis.com',80)) {
        $key = 'AIzaSyD1rbO5ijLDbQ1pbLLAAKs4cwwn7R5Bp6Y';

        //region Get Distance
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=" . urlencode($from) . "&destinations=" . urlencode($to) . "&key=$key";
        $data = @get_curl($url);
        if (isset($data)) {
            try {
                $geo = json_decode($data, true, 512, JSON_INVALID_UTF8_SUBSTITUTE);
            } catch (Exception $e) {
            }
            // If everything is cool
            if ($geo['status'] = 'OK') {
                // We set our values

                if (isset($geo['rows'][0]['elements'][0]['distance'])) {

                    $list['Meters'] = $geo['rows'][0]['elements'][0]['distance']['value'];
                    $list['LabelDistance'] = $geo['rows'][0]['elements'][0]['distance']['text'];

                }
                // We set our values
                if (isset($geo['rows'][0]['elements'][0]['duration'])) {

                    $list['Seconds'] = $geo['rows'][0]['elements'][0]['duration']['value'];
                    $list['LabelDuration'] = $geo['rows'][0]['elements'][0]['duration']['text'];

                }

            }
        }
        //endregion

        //region Get Postal Code
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($to) . "&key=$key";

        $data = @get_curl($url);
        if (isset($data)) {
            try {
                $geo = json_decode($data, true, 512, JSON_INVALID_UTF8_SUBSTITUTE);
            } catch (Exception $e) {
            }

            // If everything is cool

            // We set our values

            if (isset($geo['results'][0]['address_components'])) {


                foreach ($geo['results'][0]['address_components'] as $address_components) {
                    if (isset($address_components['types'][0]) && strtolower($address_components['types'][0]) === "postal_code") {
                        $list['PostalCode'] = $address_components['long_name'];
                    }
                }

            } else {
                $list['PostalCode'] = "";
            }

        } else {
            $list['PostalCode'] = "";
        }
        //endregion
    }
    return ($list);


}


function convertCurrency($amount, $from, $to)
{
    //$urlold = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
    /*$url = "http://free.currencyconverterapi.com/api/v4/convert?q={$from}_{$to}&compact=y";

    $data = @get_curl( $url );
    if ( isset( $data ) ) {
        $json = json_decode( $data, true );
        if ( isset( $json[ "{$from}_{$to}" ][ "val" ] ) ) {
            $rate_ = $json[ "{$from}_{$to}" ][ "val" ];
            $rate_ = ( float )$rate_;
            $amount = ( float )$amount;
            $converted = $amount * $rate_;
            return round( $converted, 2 );
        } else {
            return 0;
        }
    } else {
        return 0;
    }*/
    return (0);
}


function getIP_Info($ip)
{

    // request as jason
    $json = get_curl('http://freegeoip.net/json/' . $ip);

    if (isset($json)) {
        try {
            $json = json_decode($json, true, 512, JSON_INVALID_UTF8_SUBSTITUTE);
        } catch (Exception $e) {
        }
    }
    return $json;
}

function sql_cover_value($ext)
{
    return "'" . $ext . "'";
}
function QuotedStr($ext)
{
    if(isset($ext)) {
        return "'" . escapeSql($ext) . "'";
    }

    return "''";
}

function escapeSql($text)
{
    try {
        if (!is_numeric($text)) {
            $text = str_replace('\'', '\'\'', $text);
        }
    }catch (Exception $exception){}
    return $text;
}

function startsWith($haystack, $needle)
{
    // search backwards starting from haystack length characters from the end
    return $needle === '' || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

function endsWith($haystack, $needle)
{
    // search forward starting from end minus needle length characters
    return $needle === '' || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}

function getTotal_Products()
{
    $configFile = 'System.ini';
    $wRes = 0;
    if (file_exists(__DIR__ . '/../Model/' . $configFile)) {
        $config_set = parse_ini_file(__DIR__ . '/../Model/System.ini', true);

        $session = $config_set['Session']['CartName'];
        $Trolley_Count = $config_set['Application']['TrolleyCount'];
        $DonationCode = $config_set['Application']['DonationCode'];

        if (isset($_SESSION[$session])) {


            foreach ($_SESSION[$session] as $xVariantCode => $xVariantArray) {
                //region Variant Array
                if (isset($xVariantArray)) {
                    foreach ($xVariantArray as $xStockCode => $xStockArr) {
                        //region Stock Array
                        if (isset($xStockArr)) {
                            foreach ($xStockArr as $xLineMax => $xMaxArr) {
                                //region Line Max Quantity Array
                                if (isset($xMaxArr)) {
                                    foreach ($xMaxArr as $xLineCase => $xCaseArr) {
                                        //region Line Case Array
                                        if (isset($xCaseArr)) {
                                            foreach ($xCaseArr as $xLineSize => $xSizeArr) {
                                                //region Line Size Array
                                                if (isset($xSizeArr)) {
                                                    foreach ($xSizeArr as $xLineNo => $xLineArr) {
                                                        //region Line Array
                                                        if (isset($xLineArr)) {
                                                            foreach ($xLineArr as $xPromoQty => $xQty) {
                                                                if (($xStockCode !== $DonationCode) && strtolower($Trolley_Count) === 'quantity') {
                                                                    $wRes += $xQty;
                                                                } else {
                                                                    ++$wRes;
                                                                }
                                                            }
                                                        }
                                                        //endregion
                                                    }
                                                }
                                                //endregion
                                            }
                                        }
                                        //endregion
                                    }
                                }
                                //endregion
                            }
                        }
                        //endregion
                    }
                }
                //endregion
            }


        }
    }
    return $wRes;
}

function getProperty_Filter()
{
    $Property_Filter = '';
    if (isset($_SESSION['Property01'])) {
        $Property_Filter .= " `Property01`='" . $_SESSION['Property01'] . "'";
    }
    if (isset($_SESSION['Property02'])) {
        if (!empty($Property_Filter)) {
            $Property_Filter .= " AND `Property02`='" . $_SESSION['Property02'] . "'";
        } else {
            $Property_Filter .= " `Property02`='" . $_SESSION['Property02'] . "'";
        }
    }
    if (isset($_SESSION['Property03'])) {
        if (!empty($Property_Filter)) {
            $Property_Filter .= " AND `Property03`='" . $_SESSION['Property03'] . "'";
        } else {
            $Property_Filter .= " `Property03`='" . $_SESSION['Property03'] . "'";
        }
    }
    if (isset($_SESSION['Property04'])) {
        if (!empty($Property_Filter)) {
            $Property_Filter .= " AND `Property04`='" . $_SESSION['Property04'] . "'";
        } else {
            $Property_Filter .= " `Property04`='" . $_SESSION['Property04'] . "'";
        }
    }
    if (isset($_SESSION['Property05'])) {
        if (!empty($Property_Filter)) {
            $Property_Filter .= " AND `Property05`='" . $_SESSION['Property05'] . "'";
        } else {
            $Property_Filter .= " `Property05`='" . $_SESSION['Property05'] . "'";
        }
    }
    if (isset($_SESSION['Property06'])) {
        if (!empty($Property_Filter)) {
            $Property_Filter .= " AND `Property06`='" . $_SESSION['Property06'] . "'";
        } else {
            $Property_Filter .= " `Property06`='" . $_SESSION['Property06'] . "'";
        }
    }
    if (isset($_SESSION['Property07'])) {
        if (!empty($Property_Filter)) {
            $Property_Filter .= " AND `Property07`='" . $_SESSION['Property07'] . "'";
        } else {
            $Property_Filter .= " `Property07`='" . $_SESSION['Property07'] . "'";
        }
    }
    if (isset($_SESSION['Property08'])) {
        if (!empty($Property_Filter)) {
            $Property_Filter .= " AND `Property08`='" . $_SESSION['Property08'] . "'";
        } else {
            $Property_Filter .= " `Property08`='" . $_SESSION['Property08'] . "'";
        }
    }

    if (isset($_SESSION['Property09'])) {
        if (!empty($Property_Filter)) {
            $Property_Filter .= " AND `Property09`='" . $_SESSION['Property09'] . "'";
        } else {
            $Property_Filter .= " `Property09`='" . $_SESSION['Property09'] . "'";
        }
    }
    if (isset($_SESSION['Property10'])) {
        if (!empty($Property_Filter)) {
            $Property_Filter .= " AND `Property10`='" . $_SESSION['Property10'] . "'";
        } else {
            $Property_Filter .= " `Property10`='" . $_SESSION['Property10'] . "'";
        }
    }

    return $Property_Filter;
}

function write_php_ini($array, $file)
{
    $res = array();
    foreach ($array as $key => $val) {
        if ("type" !== strtolower($key) || "key" !== strtolower($key) || "value" !== strtolower($key) || "protype" !== strtolower($key)) {
            if (is_array($val)) {
                $res[] = '[' . $key . ']';
                foreach ($val as $skey => $sval) {
                    if ((strtolower($skey) !== "type") || (strtolower($skey) !== "key") || (strtolower($skey) !== "value") || (strtolower($skey) !== "protype")) {
                        $res[] = $skey . ' = "' . $sval . '"';
                    }
                }
            } else {
                $res[] = $key . ' = "' . $val . '"';
            }
        }
    }
    safefilerewrite($file, implode("\r\n", $res));
}

function safefilerewrite($fileName, $dataToSave)
{

    if ($fp = fopen($fileName, 'wb')) {
        $startTime = microtime(TRUE);
        do {
            $canWrite = flock($fp, LOCK_EX);
            // If lock not obtained sleep for 0 - 100 milliseconds, to avoid collision and CPU load
            if (!$canWrite) {
                try {
                    usleep(round(random_int(0, 100) * 1000));
                } catch (Exception $e) {
                }
            }
        } while ((!$canWrite) and ((microtime(TRUE) - $startTime) < 5));

        //file was locked so now we can store information
        if ($canWrite) {
            fwrite($fp, $dataToSave);
            flock($fp, LOCK_UN);
        }
        fclose($fp);
    }

}

function pathUrl($dir = __DIR__)
{
    $root = '';
    $dir = str_replace('\\', '/', realpath($dir));

    // HTTPS or HTTP
    $root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';

    // HOST
    $root .= '://' . $_SERVER['HTTP_HOST'];

    // ALIAS
    if (!empty($_SERVER['CONTEXT_PREFIX'])) {
        $root .= $_SERVER['CONTEXT_PREFIX'];
        $root .= substr($dir, strlen($_SERVER['CONTEXT_DOCUMENT_ROOT']));
    } else {
        $root .= substr($dir, strlen($_SERVER['DOCUMENT_ROOT']));
    }

    $root .= '/';

    return $root;
}

function reArrayFiles($file_post)
{
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i = 0; $i < $file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

function guidv4()
{
    if (function_exists('com_create_guid') === true) {
        return trim(com_create_guid(), '{}');
    }
}

function getIMAP_Data($imapStream, $messageId, $size, $type, $encoding, $st_parameters, $st_dparameters, $partIdentifier = null)
{
    $filename = '';


    $parameters = array();
    $attachments = array();
    if (isset($st_parameters)) {
        foreach ($st_parameters as $parameter) {
            echo($parameter->attribute . '<br>');
            $parameters[strtolower($parameter->attribute)] = $parameter->value;
        }
    }

    if (isset($st_dparameters)) {
        foreach ($st_dparameters as $parameter) {
            $parameters[strtolower($parameter->attribute)] = $parameter->value;
        }
    }


    if (isset($parameters['name']) || isset($parameters['filename'])) {

        //Get Filename
        if (isset($parameters['filename'])) {
            $filename = $parameters['filename'];
        } elseif (isset($parameters['name'])) {
            $filename = $parameters['name'];
        }


        $messageBody = isset($partIdentifier) ?
            imap_fetchbody($imapStream, $messageId, $partIdentifier, FT_UID) :
            imap_body($imapStream, $messageId, FT_UID);

        //Decode
        if (!is_numeric($encoding)) {
            $encoding = strtolower($encoding);
        }

        switch ($encoding) {
            case 'quoted-printable':
            case 4:
                $messageBody = quoted_printable_decode($messageBody);break;

            case 'base64':
            case 3:
                $messageBody = base64_decode($messageBody);break;
        }

        $attachment = $messageBody;


        $attachments[$filename] = $attachment;
    }


    return $attachments;
}

function sanitize($text)
{
    $text = htmlspecialchars($text, ENT_QUOTES);
    return $text;
}

function sanitize_text($text)
{
    $text = str_replace(array(PHP_EOL, '&#13;&#10;', '\n'), '<br/>', $text);
    return $text;
}

function sanitize_back($text)
{
    $text = str_replace(array(PHP_EOL, '&lt;', '&gt;', '&#60;', '&#62;', '&amp;'), array('\n', '<', '>', '<', '>', '&'), $text);

    return $text;
}

function sanitize2($text)
{

    //$text = str_replace('\n', '<br>', $text);
    $text = str_replace(array(PHP_EOL, '*', '`', '%', '(', ')', '<', '>', '&#13;&#10;', '&#13;'), array('\n', '&#42;', '&#44;', '&#37;', '&#40;', '&#41;', '&#60;', '&#62;', '\n', '\n'), $text);

    return $text;
}

function sanitize_code($text)
{

    $text = str_replace(array(PHP_EOL, ' ', '*', '`', '%', '(', ')', '&'), array('', '', '_', '_', '_', '_', '_', '_'), $text);

    return $text;
}

function sanitize_file($text)
{

    $text = str_replace(array('/', '\\'), '_', $text);

    return $text;
}

function sanitize_url($text)
{

    $text = str_replace('&', ':amp:', $text);

    return $text;
}

function sanitize_url_decode($text)
{

    $text = str_replace(':amp:', '&', $text);

    return $text;
}

function redirect2($filename)
{
    header('Location: ' . $filename);
    exit();
}

function redirect($filename)
{
    if (!headers_sent()) {
        header('Location: ' . $filename);
    } else {
        echo "<script type='text/javascript'>";
        echo "window.location.href='" . $filename . "';";
        echo "</script>";
        echo "<noscript>";
        echo "<meta http-equiv='refresh' content='0;url=' " . $filename . "' />";
        echo "</noscript>";
    }
    exit();
}
function Number_Generator($length)
{
    $alphabet = '0123456789';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $length; $i++) {
        try {
            $n = random_int(0, $alphaLength);
        } catch (Exception $e) {
        }
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

function Word_Generator($length)
{
    $alphabet = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789_^#@~:*+-';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $length; $i++) {
        try {
            $n = random_int(0, $alphaLength);
        } catch (Exception $e) {
        }
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}
function rand_color()
{
    try {
        return sprintf('#%06X', random_int(0, 0xFFFFFF));
    } catch (Exception $e) {
    }
}

function human_filesize($bytes, $decimals = 2)
{
    $sz = 'BKMGTP';
    $factor = floor((strlen($bytes) - 1) / 3);
    if (isset($sz[$factor])) {
        return sprintf("%.{$decimals}f", $bytes / (1024 ** $factor)) . $sz[$factor];
    }

    return  "";
}

function getMyBrowser($u_agent)
{
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version = '';
    $ub = '';
    // First get the platform?
    if (false !== stripos($u_agent, "linux")) {
        $platform = 'linux';
    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    } elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if (false !== stripos($u_agent, "MSIE") && false === stripos($u_agent, "Opera")) {
        $bname = 'Internet Explorer';
        $ub = 'MSIE';
    } elseif (false !== stripos($u_agent, "Firefox")) {
        $bname = 'Mozilla Firefox';
        $ub = 'Firefox';
    } elseif (false !== stripos($u_agent, "Chrome")) {
        $bname = 'Google Chrome';
        $ub = 'Chrome';
    } elseif (false !== stripos($u_agent, "Safari")) {
        $bname = 'Apple Safari';
        $ub = 'Safari';
    } elseif (false !== stripos($u_agent, "Opera")) {
        $bname = 'Opera';
        $ub = 'Opera';
    } elseif (false !== stripos($u_agent, "Netscape")) {
        $bname = 'Netscape';
        $ub = 'Netscape';
    }

    // finally get the correct version number
    $known = array(
        'Version',
        $ub,
        'other'
    );
    $pattern = '#(?<browser>' . implode('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
        return "";
    }

    // see how many we have
    $i = count($matches['browser']);
    if (isset($matches['version'])) {
        if ($i !== 1) {
            // we will have two since we are not using 'other' argument yet
            // see if version is before or after the name

            if (strripos($u_agent, 'Version') < strripos($u_agent, $ub)) {
                if (isset($matches['version'][0])) {
                    $version = $matches['version'][0];
                }
            } else if (isset($matches['version'][1])) {
                $version = $matches['version'][1];
            }
        } else if (isset($matches['version'][0])) {
            $version = $matches['version'][0];
        }
    }

    // check if we have a number
    if ($version === null || $version === '') {
        $version = '?';
    }

    return array(
        'userAgent' => $u_agent,
        'name' => $bname,
        'version' => $version,
        'platform' => $platform,
        'pattern' => $pattern
    );
}

function get_display_address($word)
{
    if (isset($GLOBALS['text_objects'])) {
        $text_objects = $GLOBALS['text_objects'];
    }
    $res = $word;
    switch (strtolower($word)) {
        case 'town':
            {
                if (isset($text_objects->Town) && !empty($text_objects->Town)) {
                    $res = $text_objects->Town;
                }
            }
            break;
        case 'suburb':
            {
                if (isset($text_objects->Suburb) && !empty($text_objects->Suburb)) {
                    $res = $text_objects->Suburb;
                }
            }
            break;
        case 'province':
            {
                if (isset($text_objects->Province) && !empty($text_objects->Province)) {
                    $res = $text_objects->Province;
                }
            }
            break;
        case 'address':
            {
                if (isset($text_objects->Address) && !empty($text_objects->Address)) {
                    $res = $text_objects->Address;
                }
            }
            break;
        case 'postcode':
            {
                if (isset($text_objects->PostCode) && !empty($text_objects->PostCode)) {
                    $res = $text_objects->PostCode;
                }
            }
            break;
    }
    return ucfirst(trim($res));


}

function get_display_name($word)
{

    switch ($word) {
        case 'Company':
        case 'CO':
            $res = 'Company Code';
            break;
        case 'Branch':
            $res = 'Branch Code';
            break;
        case 'in_house_area':
            $res = 'Area Calculation';
            break;
        case 'in_house_distance':
            $res = 'Distance Calculation';
            break;
        case 'Bus':
            $res = 'Business';
            break;
        case 'Br':
            $res = 'Branch';
            break;
        case 'App':
            $res = 'Application';
            break;
        default:
            {
                if (strpos($word, 'Bra')!== false) {
                    $word = str_replace('Br', 'Branch', $word);
                }
                $word = str_replace(array('Bus', 'COD', 'CO', '_'), array('Business', '[Cash On Delivery]', 'Company', ''), $word);
                $parts = preg_split('/(?=[A-Z])/', $word, -1, PREG_SPLIT_NO_EMPTY);
                $res = '';
                foreach ($parts as $char) {
                    $res .= $char . ' ';
                }
            }
            break;
    }
    return ucfirst(trim($res));
}

function data_uri($contents, $mime)
{
    $base64 = base64_encode($contents);
    return ('data:' . $mime . ';base64,' . $base64);
}

function tumbmaker($data, $mime, $newwidth = 0, $newheight = 0, $Quality = 80, $zoom_crop = 0,
                   $align = '')
{
    //$im = imagecreatefromstring( grab_file(   __DIR__ . '/../../../public/img/no_image.jpg' ) );


    try {
        if (!empty($data)) {
            $im = @imagecreatefromstring($data);
        }
        if (!empty($im)) {
            // Get original width and height
            $width = imagesx($im);
            $height = imagesy($im);
            $origin_x = 0;
            $origin_y = 0;

            if ($newwidth < 1 && $newheight < 1) {
                $newwidth = 1460;
                $newheight = (float)$newwidth / (float)$width * (float)$height;
            } else if (($newwidth < 1) && ($newheight > 1)) {
                $newwidth = (float)$newheight / (float)$height * (float)$width;
            } else if (($newwidth > 1) && ($newheight < 1)) {
                $newheight = (float)$newwidth / (float)$width * (float)$height;
            }

            $canvas = imagecreatetruecolor($newwidth, $newheight);
            imagealphablending($canvas, false);

            $canvas_color = 'ffffff'; // on error return default canvas color

            $canvas_color_R = hexdec(substr($canvas_color, 0, 2));
            $canvas_color_G = hexdec(substr($canvas_color, 2, 2));
            $canvas_color_B = hexdec(substr($canvas_color, 4, 2));

            if (preg_match('/^image\/png$/i', ($mime))) {
                $color = imagecolorallocatealpha($canvas, $canvas_color_R, $canvas_color_G, $canvas_color_B, 127);
            } else {
                $color = imagecolorallocatealpha($canvas, $canvas_color_R, $canvas_color_G, $canvas_color_B, 0);
            }

            imagefill($canvas, 0, 0, $color);

            imagesavealpha($canvas, true);

            if ($zoom_crop > 0) {

                $src_x = $src_y = 0;
                $src_w = $width;
                $src_h = $height;


                $cmp_x = $width / $newwidth;
                $cmp_y = $height / $newheight;

                // calculate x or y coordinate and width or height of source
                if ($cmp_x > $cmp_y) {

                    $src_w = round($width / $cmp_x * $cmp_y);
                    $src_x = round(($width - ($width / $cmp_x * $cmp_y)) / 2);
                } else if ($cmp_y > $cmp_x) {

                    $src_h = round($height / $cmp_y * $cmp_x);
                    $src_y = round(($height - ($height / $cmp_y * $cmp_x)) / 2);
                }

                // positional cropping!
                if ($align) {

                    if (strpos($align, 't')!== false) {
                        $src_y = 0;
                    }
                    if (strpos($align, 'b')!== false) {
                        $src_y = $height - $src_h;
                    }
                    if (strpos($align, 'l')!== false) {
                        $src_x = 0;
                    }
                    if (strpos($align, 'r')!== false) {
                        $src_x = $width - $src_w;
                    }
                }

                imagecopyresampled($canvas, $im, $origin_x, $origin_y, $src_x, $src_y, $newwidth, $newheight, $src_w, $src_h);
            } else {

                // copy and resize part of an image with resampling
                imagecopyresampled($canvas, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            }

            // $sharpen image
            $sharpenMatrix = array(
                array(-1, -1, -1),
                array(-1,
                    16, -1
                ),
                array(-1, -1, -1)
            );

            $divisor = 8;
            $offset = 0;

            imageconvolution($canvas, $sharpenMatrix, $divisor, $offset);
        }
    } catch (Exception $e) {
        $im = imagecreatefromstring(grab_file(__DIR__ . '/../../../public/img/no_image.jpg'));
        // Get original width and height
        $width = imagesx($im);
        $height = imagesy($im);
        $origin_x = 0;
        $origin_y = 0;
        if ($newwidth < 1 && $newheight < 1) {
            $newwidth = 1460;
            $newheight = ((float)$newwidth / (float)$width) * (float)$height;
        } else if (($newwidth < 1) && ($newheight > 1)) {
            $newwidth = ((float)$newheight / (float)$height) * (float)$width;
        } else if (($newwidth > 1) && ($newheight < 1)) {
            $newheight = ((float)$newwidth / (float)$width) * (float)$height;
        }
        $canvas = imagecreatetruecolor($newwidth, $newheight);
        imagealphablending($canvas, false);

        $canvas_color = 'ffffff'; // on error return default canvas color

        $canvas_color_R = hexdec(substr($canvas_color, 0, 2));
        $canvas_color_G = hexdec(substr($canvas_color, 2, 2));
        $canvas_color_B = hexdec(substr($canvas_color, 4, 2));

        // Create a new transparent color for image
        // If is a png and PNG_IS_TRANSPARENT is false then remove the alpha transparency
        // (and if is set a canvas color show it in the background)
        if (preg_match('/^image\/png$/i', ($mime))) {
            $color = imagecolorallocatealpha($canvas, $canvas_color_R, $canvas_color_G, $canvas_color_B, 127);
        } else {
            $color = imagecolorallocatealpha($canvas, $canvas_color_R, $canvas_color_G, $canvas_color_B, 0);
        }

        imagefill($canvas, 0, 0, $color);

        imagesavealpha($canvas, true);

        if ($zoom_crop > 0) {

            $src_x = $src_y = 0;
            $src_w = $width;
            $src_h = $height;

            $cmp_x = $width / $newwidth;
            $cmp_y = $height / $newheight;

            // calculate x or y coordinate and width or height of source
            if ($cmp_x > $cmp_y) {

                $src_w = round($width / $cmp_x * $cmp_y);
                $src_x = round(($width - ($width / $cmp_x * $cmp_y)) / 2);
            } else if ($cmp_y > $cmp_x) {

                $src_h = round($height / $cmp_y * $cmp_x);
                $src_y = round(($height - ($height / $cmp_y * $cmp_x)) / 2);
            }

            // positional cropping!
            if ($align) {

                if (strpos($align, 't')!== false) {
                    $src_y = 0;
                }
                if (strpos($align, 'b')!== false) {
                    $src_y = $height - $src_h;
                }
                if (strpos($align, 'l')!== false) {
                    $src_x = 0;
                }
                if (strpos($align, 'r')!== false) {
                    $src_x = $width - $src_w;
                }


            }

            imagecopyresampled($canvas, $im, $origin_x, $origin_y, $src_x, $src_y, $newwidth, $newheight, $src_w, $src_h);
        } else {

            // copy and resize part of an image with resampling
            imagecopyresampled($canvas, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
        }

        // $sharpen image
        $sharpenMatrix = array(
            array(-1, -1, -1),
            array(-1,
                16, -1
            ),
            array(-1, -1, -1)
        );

        $divisor = 8;
        $offset = 0;

        imageconvolution($canvas, $sharpenMatrix, $divisor, $offset);
    }

    if (!empty($canvas)) {
        ob_start();
        switch (strtolower($mime)) {
            case 'image/png':
                {
                    //imagepng ( $im );
                    $Quality = ($Quality / 100) * 9;
                    imagepng($canvas, null, $Quality);
                }
                break;
            case 'image/gif':
                {
                    // imagegif ( $im );
                    imagegif($canvas, null);
                }
                break;
            case 'image/jpeg':
            case 'image/jpg':
                {
                    // imagejpeg ( $im );
                    imagejpeg($canvas, null, $Quality);
                }
                break;
            default:
                {
                    // imagepng ( $im );
                    $Quality = ($Quality / 100) * 9;
                    imagepng($canvas, null, $Quality);
                }
                break;
        }

        $contents = ob_get_clean();
        imagedestroy($canvas);

        return $contents;
    }

    return 'An error occurred.';
}

function getUserIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//endregion

// ############### pagination function #########################################
function paginate_function($wItem_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '<div class="clearfix"></div>';
    $pagination .= '<div class="col-12"><nav class="Page navigation" style="padding: 1em;">';
    if ($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages) { // verify total pages and current page number
        $pagination .= '<ul class="pagination "  style="float: right;padding-right: 1em">';

        $right_links = $current_page + 3;
        $previous = $current_page - 3; // previous link
        $next = $current_page + 1; // next link
        $first_link = true; // boolean var to decide our first link

        if ($current_page > 1) {
            $previous_link = ($previous == 0) ? 1 : $previous;
            $pagination .= '<li class="page-item first"><a class="page-link" href="#" data-page="1" title="First">&laquo;</a></li>'; // first link
            //$pagination .= '<li><a href="#" data-page="' . $previous_link . '" title="Previous">&lt;</a></li>'; // previous link
            for ($i = ($current_page - 2); $i < $current_page; $i++) { // Create left-hand side links
                if ($i > 0) {
                    $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="' . $i . '" title="Page ' . $i . '">' . $i . '</a></li>';
                }
            }
            $first_link = false; // set first link to false
        }

        if ($first_link) { // if current active page is first link
            $pagination .= '<li class="page-item first active"><a class="page-link" href="#"> ' . $current_page . '</a></li>';
        } elseif ($current_page == $total_pages) { // if it's the last active link
            $pagination .= '<li class="page-item last active"><a class="page-link" href="#"> ' . $current_page . '</a></li>';
        } else { // regular current link
            $pagination .= '<li class="page-item active"><a class="page-link" href="#"> ' . $current_page . '</a></li>';
        }

        for ($i = $current_page + 1; $i < $right_links; $i++) { // create right-hand side links
            if ($i <= $total_pages) {
                $pagination .= '<li class="page-item"><a class="page-link"  href="#" data-page="' . $i . '" title="Page ' . $i . '">' . $i . '</a></li>';
            }
        }
        //region Next
        if ($current_page < $total_pages) {
            $next_link = ($i > $total_pages) ? $total_pages : $i;
            //$pagination .= '<li><a href="#" data-page="' . $next_link . '" title="Next">&gt;</a></li>'; // next link
            $pagination .= '<li class="page-item last"><a class="page-link" href="#" data-page="' . $total_pages . '" title="Last">&raquo;</a></li>'; // last link
        }
        //endregion
        $pagination .= '</ul>';

    }
    $pagination .= '</nav></div>';
    $pagination .= '<div class="clearfix"></div>';
    return $pagination; // return pagination links
}