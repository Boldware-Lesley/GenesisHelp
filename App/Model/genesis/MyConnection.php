<?php

namespace genesis;

use Exception;
use PDO;

class MyConnection
{

    /*BEGIN <<My Code>> */

    public $db_type = "sqlsrv";
    public $db_host = "";
    public $db_name = "";
    public $db_port = "";
    public $db_user = "";
    public $db_pass = '';
    public $db_pdo;

    public function __construct()
    {
        if ( file_exists( __DIR__ . "/../System.ini" ) ) {
            $config = parse_ini_file( __DIR__ . "/../System.ini", true );
            $this->db_host = $config[ "Database" ][ "Host" ];
            $this->db_name = $config[ "Database" ][ "Database" ];
            $this->db_port = $config[ "Database" ][ "Port" ];
            $this->db_user = $config[ "Database" ][ "User" ];
            $this->db_pass = $config[ "Database" ][ "Password" ];
        } else {
            header( 'Location: ' . pathUrl() . '../Setup/index.php' );
        }

    }


    public function Close()
    {
        try {
            if (!isset($this->db_pdo)) {
                $this->Open();
            }
            $this->db_pdo = null;
            return true;
        } catch (Exception $ex) {

            return false;
        }
    }

    public function Open()
    {
        try {

            if (extension_loaded('sqlsrv')) {
                $con_string=$this->db_type . ":server=" . $this->db_host . "," . $this->db_port . ";Database=" . $this->db_name . ";LoginTimeout=5;TrustServerCertificate=0;Encrypt=1;";
                $this->db_pdo = new PDO($con_string, $this->db_user, $this->db_pass);
                if (isset($this->db_pdo)) {

                    $this->db_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    return true;
                }

                return false;
            }
        } catch (Exception $ex) {
            $jsonObj = array(
                "TYPE" => "ERROR",
                "SQL_CODE" => "113",
                "SQL_MESSAGE" => $ex->getMessage(),
                "PHP_VERSION" => PHP_VERSION,
                "PHP_OS" => PHP_OS
            );
            echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
            return false;
        }
    }

    public function Execute($sql)
    {
        $stmt = 0;
        try {
            if (!isset($this->db_pdo)) {
                $this->Open();
            }
            if (isset($this->db_pdo)) {
                $stmt = $this->db_pdo->exec($sql);
            }
        } catch (Exception $ex) {
            $jsonObj = array(
                "TYPE" => "ERROR",
                "SQL_CODE" => "113",
                "SQL_MESSAGE" => $ex->getMessage(),
                "PHP_VERSION" => PHP_VERSION,
                "PHP_OS" => PHP_OS
            );
            echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
        }
        return $stmt;
    }

    public function getStatement($sql)
    {
        $stmt = null;
        try {

            if (!isset($this->db_pdo)) {
                $this->Open();
            }
            if (isset($this->db_pdo)) {
                $stmt = $this->db_pdo->prepare($sql);
            }
        } catch (Exception $ex) {
            $jsonObj = array(
                "TYPE" => "ERROR",
                "SQL_CODE" => "113",
                "SQL_MESSAGE" => $ex->getMessage(),
                "PHP_VERSION" => PHP_VERSION,
                "PHP_OS" => PHP_OS
            );
            echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);

        }
        return $stmt;
    }

    public function getQuery($sql)
    {
        $stmt = null;
        try {
            if (!isset($this->db_pdo)) {
                $this->Open();
            }
            if (isset($this->db_pdo)) {
                $stmt = $this->db_pdo->query($sql);
            }
        } catch (Exception $ex) {
            $jsonObj = array(
                "TYPE" => "ERROR",
                "SQL_CODE" => "113",
                "SQL_MESSAGE" => $ex->getMessage(),
                "PHP_VERSION" => PHP_VERSION,
                "PHP_OS" => PHP_OS
            );
            echo json_encode($jsonObj, JSON_INVALID_UTF8_SUBSTITUTE);
        }
        return $stmt;
    }

    public function getCommand()
    {
        if (!isset($this->db_pdo)) {
            $this->Open();
        }
        return $this->db_pdo;
    }
    /*END <<My Code>> */


}
