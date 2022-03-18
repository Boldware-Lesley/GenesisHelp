<?php

use genesis\MyConnection;

require_once(__DIR__ . "/../../Extras/public_properties.php");
require_once(__DIR__ . "/../../../vendor/autoload.php");

$type = "";
$recID = "";
$subaction = "";
$imagefile = true;
if (isset($data[0])) {

    $type = trim(urldecode($data[0]));
    if (isset($data[1])) {
        $recID = trim(urldecode($data[1]));
    }
    if (isset($data[2])) {
        $subaction = trim(urldecode($data[2]));
    }
}

if (!isset($conn)) {
    $conn = new MyConnection();
    $GLOBALS['conn'] = $conn;
}

$path = '.cache';
if (!file_exists($path) && !mkdir($path) && !is_dir($path)) {
    throw new RuntimeException(sprintf('Directory "%s" was not created', $path));
}
$file_data = '';
$data_type = 'image/jpg';
$newwidth = 0;
$newheight = 0;
$newQuality = 100;
$newZoom = 0;
$newAlign = "";
$gmdate_expires = gmdate('D, d M Y H:i:s', strtotime('now +1 minutes')) . ' GMT';
$gmdate_modified = gmdate('D, d M Y H:i:s') . ' GMT';
$filename = "no_image";
$preview=false;
if (isset($_REQUEST['preview'])) {
    $preview = strtoupper(trim($_REQUEST['preview']))==="YES";
}
if (isset($_REQUEST['url'])) {
    $filename = trim(str_replace("image_", "", strtolower(sanitize_file($_REQUEST['url']))));
}
if (isset($_REQUEST['w'])) {
    $newwidth = trim(urldecode($_REQUEST['w']));
}
if (isset($_REQUEST['h'])) {
    $newheight = trim(urldecode($_REQUEST['h']));
}
if (isset($_REQUEST['quality'])) {
    $newQuality = trim(urldecode($_REQUEST['quality']));
}
if (isset($_REQUEST['zoomcrop'])) {
    $newZoom = trim(urldecode($_REQUEST['zoomcrop']));
}
if (isset($_REQUEST['align'])) {
    $newAlign = trim(urldecode($_REQUEST['align']));
}
$filename = $path . '/' . $filename . '.' . $newwidth . 'x' . $newheight;

$current_time = time();
$expire_time = 1;
$file_time = 0;
if (file_exists($filename)) {
    $file_time = filemtime($filename);
}
header('Cache-Control: max-age=84600');
header('Pragma: max-age=84600');
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + ((60 * 60 * 24) * $expire_time)));

if (!empty($filename) && file_exists($filename)) {
    unlink($filename);
}
if (isset($data[0])) {

    $type = trim(urldecode($data[0]));
    if (isset($data[1])) {
        $recID = trim(urldecode($data[1]));
    }

    switch (strtolower($type)) {

        case "ticketimage":{
            //region SVM Images


                $query = " SELECT TOP 1 ";
                $query .= "  T0.[ImageData],T0.[ImageDesc],T0.[ImageType] ";
                $query .= " FROM [SVMJobImages] T0  ";
                $query .= " WHERE T0.[RECID]=:RECID";
                $stmt = $conn->getStatement($query);
                if ($stmt !== null) {
                    $stmt->bindParam(":RECID", $recID);
                    $stmt->execute();
                    while ($records = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $filename = $records["ImageDesc"];
                        $file_data = $records["ImageData"];
                        $data_type=FileMIME($records["ImageType"]);
                        $imagefile=FileIsImage($records["ImageType"]);

                    }
                }

            if (empty($file_data)) {
                $imagefile=true;
                $hasImage = false;
                $file_data = grab_file(__DIR__ . '/../../../public/img/no_image.jpg');
            }
            //endregion
        }break;

        case 'app':
            {
                //region App
                $imagefile = true;
                try {
                    $finfo = finfo_open(FILEINFO_MIME_TYPE);
                    $app_logo= __DIR__ . '/../../../public/img/logo.png';
                    if (file_exists(__DIR__ . '/../../../public/img/logo.png')) {
                        $app_icon = __DIR__ . '/../../../public/img/logo.png';
                        $file_data = grab_file($app_icon);
                        $data_type = finfo_file($finfo, $app_icon);
                    } elseif (file_exists(__DIR__ . '/../../../public/img/logo.jpg')) {
                        $app_icon = __DIR__ . '/../../../public/img/logo.jpg';
                        $file_data = grab_file($app_icon);
                        $data_type = finfo_file($finfo, $app_icon);
                    } elseif (file_exists(__DIR__ . '/../../../public/img/logo.jpeg')) {
                        $app_icon = __DIR__ . '/../../../public/img/logo.jpeg';
                        $file_data = grab_file($app_icon);
                        $data_type = finfo_file($finfo, $app_icon);
                    }elseif (file_exists(__DIR__ . '/../../../public/img/logo.ico')) {
                        $app_icon =__DIR__ . '/../../../public/img/logo.ico';
                        $file_data = grab_file($app_icon);
                        $data_type = finfo_file($finfo, $app_icon);
                    } elseif (file_exists(__DIR__ . '/../../../public/img/logo.svg')) {
                        $app_icon =__DIR__ . '/../../../public/img/logo.svg';
                        $file_data = grab_file($app_icon);
                        $data_type = finfo_file($finfo, $app_icon);
                    }else{

                    }

                } catch (Exception $Ex) {
                    echo $Ex->getMessage();
                }

                //endregion
            }
            break;
        case 'appcover':
            {
                //region App Cover
                $imagefile = true;
                try {

                    $file_ = __DIR__ . '/../../../public/img/app_cover.png';
                    $finfo = finfo_open(FILEINFO_MIME_TYPE);
                    if (file_exists($file_)) {
                        $file_data = grab_file($file_);
                        $data_type = finfo_file($finfo, $file_);
                    }

                } catch (Exception $Ex) {
                    echo $Ex->getMessage();
                }
                //endregion
            }
            break;
    }
}
if (!$imagefile) {
    if ($preview) {
        $imagefile = true;
        $hasImage = true;
        $file_data = "";

        //region get Thumbs
        switch (strtolower($data_type)) {
            case "application/pdf":
                {
                    $file_data = grab_file(__DIR__ . '/../../../public/img/files/pdf.png');
                    $file_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
                }
                break;
            case "text/csv":
                {
                    $file_data = grab_file(__DIR__ . '/../../../public/img/files/csv.png');
                    $file_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
                }
                break;
            case "application/zip":
                {
                    $file_data = grab_file(__DIR__ . '/../../../public/img/files/zip.png');
                    $file_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
                }
                break;
            case "application/x-7z-compressed":
                {
                    $file_data = grab_file(__DIR__ . '/../../../public/img/files/7zip.png');
                    $file_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
                }
                break;
            case "application/vnd.rar":
                {
                    $file_data = grab_file(__DIR__ . '/../../../public/img/files/rar.png');
                    $file_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
                }
                break;
            case "application/vnd.openxmlformats-officedocument.presentationml.presentation":
            case "application/vnd.ms-powerpoint":
                {
                    $file_data = grab_file(__DIR__ . '/../../../public/img/files/microsoft_powerpoint.png');
                    $file_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
                }
                break;
            case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
            case "application/msword":
                {
                    $file_data = grab_file(__DIR__ . '/../../../public/img/files/microsoft_word.png');
                    $file_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
                }
                break;
            case "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet":
            case "application/vnd.ms-excel":
                {
                    $file_data = grab_file(__DIR__ . '/../../../public/img/files/microsoft_excel.png');
                    $file_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
                }
                break;
            default:
                {
                    $file_data = grab_file(__DIR__ . '/../../../public/img/files/document.png');
                    $file_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
                }
                break;
        }
        $data_type = "image/png";
        //endregion
    }
}


if ($imagefile) {
    $hasImage = true;
    if (empty($file_data)) {
        $hasImage = false;
        $file_data = grab_file(__DIR__ . '/../../../public/img/no_image.jpg');
        $file_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
    }
    if ($hasImage) {
        if (!empty($file_data)) {
            $final_data = tumbmaker($file_data, $data_type, $newwidth, $newheight, $newQuality, $newZoom, $newAlign);
        }
    } else {
        $final_data = $file_data;
    }

    if ($hasImage) {
        //grab_file($final_data,$filename);
        //file_put_contents($filename, $final_data);
    }


   header("Content-Type: $data_type");
} else {
    $final_data = $file_data;

    header("Content-Type: $data_type");
}

echo $final_data;

if (isset($conn)) {
    $conn->Close();
}
exit;