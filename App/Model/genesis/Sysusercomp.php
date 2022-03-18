<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	SYSUserComp

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar USERCODE" of type [nvarchar]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar MODCODE" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysusercomp {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $usercode ;	
	public $co ;	
	public $branch ;	
	public $modcode ;	
	
	
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
			$query = " SELECT RECID, [USERCODE], [CO], [BRANCH], [MODCODE] FROM [SYSUserComp]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->usercode = $records["USERCODE"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->modcode = $records["MODCODE"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using USERCODE
	*/
	public static function ini_USERCODE($usercode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [USERCODE], [CO], [BRANCH], [MODCODE] FROM [SYSUserComp]  WHERE [USERCODE]=:usercode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":usercode", $usercode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->usercode = $records["USERCODE"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->modcode = $records["MODCODE"];
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
			$res = $this->recid;
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