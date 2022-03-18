<?php

namespace genesis;


use Exception;
use PDO;

class SQLConnection
{

    /*BEGIN <<My Code>> */

    public $db_type = "sqlsrv";
    public $db_host = "cloudapp.mrj.co.za";//weavind.mrj.co.za
    public $db_name = "GenesisControl";
    public $db_port = "14330";//10433
    public $db_user = "sa";
    public $db_pass = 'Pa$$w0rD';
    public $db_pdo;

    public function __construct()
    {
        try {
            if (file_exists(__DIR__ . "/../System.ini")) {
                $config = parse_ini_file(__DIR__ . "/../System.ini", true);
                $this->db_host = $config["Database"]["Host"];
                $this->db_name = $config["Database"]["Database"];
                $this->db_port = $config["Database"]["Port"];
                $this->db_user = $config["Database"]["User"];
                $this->db_pass = $config["Database"]["Password"];

            }
        } catch (Exception $ex) {
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

                $sql_con = $this->db_type . ":Server=" . $this->db_host . ", " . $this->db_port . ";Database=" . $this->db_name . ";LoginTimeout=5";
                $this->db_pdo = new PDO($sql_con, $this->db_user, $this->db_pass);
                if (isset($this->db_pdo)) {
                    $this->db_pdo->setAttribute(PDO::SQLSRV_ATTR_QUERY_TIMEOUT, 5);
                    $this->db_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->db_pdo->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_SYSTEM);

                    return true;
                }

                return false;
            }
        } catch (Exception $ex) {
            $jsonObj = array(
                "TYPE" => "ERROR",
                "SQL_CODE" => "13",
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
            echo $ex->getMessage();
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
