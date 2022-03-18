<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	SVRControl

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar DBSERVER" of type [nvarchar]
	"public nvarchar DBUSER" of type [nvarchar]
	"public nvarchar DBNAME" of type [nvarchar]
	"public nvarchar DBPASS" of type [nvarchar]
	"public nvarchar DBSName" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar DBConnector" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Svrcontrol {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $dbserver ;	
	public $dbuser ;	
	public $dbname ;	
	public $dbpass ;	
	public $dbsname ;	
	public $status ;	
	public $dbconnector ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [DBSERVER], [DBUSER], [DBNAME], [DBPASS], [DBSName], [Status], [DBConnector] FROM [SVRControl]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->dbserver = $records["DBSERVER"];
				$instance->dbuser = $records["DBUSER"];
				$instance->dbname = $records["DBNAME"];
				$instance->dbpass = $records["DBPASS"];
				$instance->dbsname = $records["DBSName"];
				$instance->status = $records["Status"];
				$instance->dbconnector = $records["DBConnector"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	
	 public function __construct() {
	}
	/*END <<Constructors>> */
	
	/*BEGIN <<Get/Set Methods>> */
	
	
	
	/*END <<Get/Set Methods>> */
	
	/*BEGIN <<Override Methods>> */
	
	
	
	public function __toString() {	
		$res = '' ;
		try{
			$res = $this->dbname;
		}catch(Exception $ex){}
		return $res;
	}
	public function __equals($obj) {	
		$res = false ;
		try{
			if($this->recid == $obj->recid) {
				$res = true;
			}
		}catch(Exception $ex){}
		return $res;
	}
	/*END <<Override Methods>> */
	

}
?>