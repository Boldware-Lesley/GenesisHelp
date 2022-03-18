<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	SYSGrpParam

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar USERGROUP" of type [nvarchar]
	"public nvarchar MODCODE" of type [nvarchar]
	"public int PARAMNO" of type [int]
	"public nvarchar PARAMVALUE" of type [nvarchar]
	"public nvarchar CO" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysgrpparam {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $usergroup ;	
	public $modcode ;	
	public $paramno ;	
	public $paramvalue ;	
	public $co ;	
	
	
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
			$query = " SELECT RECID, [USERGROUP], [MODCODE], [PARAMNO], [PARAMVALUE], [CO] FROM [SYSGrpParam]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->usergroup = $records["USERGROUP"];
				$instance->modcode = $records["MODCODE"];
				$instance->paramno = $records["PARAMNO"];
				$instance->paramvalue = $records["PARAMVALUE"];
				$instance->co = $records["CO"];
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
			$query = " SELECT RECID, [USERGROUP], [MODCODE], [PARAMNO], [PARAMVALUE], [CO] FROM [SYSGrpParam]  WHERE [MODCODE]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->usergroup = $records["USERGROUP"];
				$instance->modcode = $records["MODCODE"];
				$instance->paramno = $records["PARAMNO"];
				$instance->paramvalue = $records["PARAMVALUE"];
				$instance->co = $records["CO"];
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