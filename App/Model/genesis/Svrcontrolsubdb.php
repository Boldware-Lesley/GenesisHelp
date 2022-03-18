<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	SVRControlSubDB

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public int MainRecID" of type [int]
	"public nvarchar ModCode" of type [nvarchar]
	"public nvarchar DisplayName" of type [nvarchar]
	"public nvarchar Dbhost" of type [nvarchar]
	"public nvarchar Dbdbase" of type [nvarchar]
	"public nvarchar Dbuser" of type [nvarchar]
	"public nvarchar Dbpswd" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Svrcontrolsubdb {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $mainrecid ;	
	public $modcode ;	
	public $displayname ;	
	public $dbhost ;	
	public $dbdbase ;	
	public $dbuser ;	
	public $dbpswd ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RecID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [MainRecID], [ModCode], [DisplayName], [Dbhost], [Dbdbase], [Dbuser], [Dbpswd] FROM [SVRControlSubDB]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->mainrecid = $records["MainRecID"];
				$instance->modcode = $records["ModCode"];
				$instance->displayname = $records["DisplayName"];
				$instance->dbhost = $records["Dbhost"];
				$instance->dbdbase = $records["Dbdbase"];
				$instance->dbuser = $records["Dbuser"];
				$instance->dbpswd = $records["Dbpswd"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using ModCode
	*/
	public static function ini_ModCode($modcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [MainRecID], [ModCode], [DisplayName], [Dbhost], [Dbdbase], [Dbuser], [Dbpswd] FROM [SVRControlSubDB]  WHERE [ModCode]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->mainrecid = $records["MainRecID"];
				$instance->modcode = $records["ModCode"];
				$instance->displayname = $records["DisplayName"];
				$instance->dbhost = $records["Dbhost"];
				$instance->dbdbase = $records["Dbdbase"];
				$instance->dbuser = $records["Dbuser"];
				$instance->dbpswd = $records["Dbpswd"];
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
			$res = $this->displayname;
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