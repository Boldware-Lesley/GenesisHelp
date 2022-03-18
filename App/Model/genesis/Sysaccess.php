<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	SYSAccess

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar MODCODE" of type [nvarchar]
	"public nvarchar SORTKEY" of type [nvarchar]
	"public int ACCESSNO" of type [int]
	"public nvarchar ACCESSNAME" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysaccess {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $modcode ;	
	public $sortkey ;	
	public $accessno ;	
	public $accessname ;	
	
	
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
			$query = " SELECT RECID, [MODCODE], [SORTKEY], [ACCESSNO], [ACCESSNAME] FROM [SYSAccess]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->modcode = $records["MODCODE"];
				$instance->sortkey = $records["SORTKEY"];
				$instance->accessno = $records["ACCESSNO"];
				$instance->accessname = $records["ACCESSNAME"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using MODCODE
	*/
	public static function ini_MODCODE($modcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [MODCODE], [SORTKEY], [ACCESSNO], [ACCESSNAME] FROM [SYSAccess]  WHERE [MODCODE]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->modcode = $records["MODCODE"];
				$instance->sortkey = $records["SORTKEY"];
				$instance->accessno = $records["ACCESSNO"];
				$instance->accessname = $records["ACCESSNAME"];
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
			$res = $this->accessname;
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