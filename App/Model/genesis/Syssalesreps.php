<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	SYSSalesReps

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar REPCODE" of type [nvarchar]
	"public nvarchar REPNAME" of type [nvarchar]
	"public nvarchar EarnComm" of type [nvarchar]
	"public nvarchar SALESCATEGORY" of type [nvarchar]
	"public nvarchar CommissionType" of type [nvarchar]
	"public float CommPerWeight" of type [float]
*/
namespace genesis;


use PDO;

class Syssalesreps {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $repcode ;	
	public $repname ;	
	public $earncomm ;	
	public $salescategory ;	
	public $commissiontype ;	
	public $commperweight ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [REPCODE], [REPNAME], [EarnComm], [SALESCATEGORY], [CommissionType], [CommPerWeight] FROM [SYSSalesReps]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->repcode = $records["REPCODE"];
				$instance->repname = $records["REPNAME"];
				$instance->earncomm = $records["EarnComm"];
				$instance->salescategory = $records["SALESCATEGORY"];
				$instance->commissiontype = $records["CommissionType"];
				$instance->commperweight = $records["CommPerWeight"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using REPCODE
	*/
	public static function ini_REPCODE($repcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [REPCODE], [REPNAME], [EarnComm], [SALESCATEGORY], [CommissionType], [CommPerWeight] FROM [SYSSalesReps]  WHERE [REPCODE]=:repcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":repcode", $repcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->repcode = $records["REPCODE"];
				$instance->repname = $records["REPNAME"];
				$instance->earncomm = $records["EarnComm"];
				$instance->salescategory = $records["SALESCATEGORY"];
				$instance->commissiontype = $records["CommissionType"];
				$instance->commperweight = $records["CommPerWeight"];
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
			$res = $this->repname;
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