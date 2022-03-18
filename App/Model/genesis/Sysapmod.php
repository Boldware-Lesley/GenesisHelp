<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	SYSAPMod

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar MODCODE" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar APACTIVE" of type [nvarchar]
	"public nvarchar APOPEN" of type [nvarchar]
	"public nvarchar MONTHEND" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysapmod {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $ap ;	
	public $modcode ;	
	public $status ;	
	public $apactive ;	
	public $apopen ;	
	public $monthend ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [AP], [MODCODE], [STATUS], [APACTIVE], [APOPEN], [MONTHEND] FROM [SYSAPMod]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->ap = $records["AP"];
				$instance->modcode = $records["MODCODE"];
				$instance->status = $records["STATUS"];
				$instance->apactive = $records["APACTIVE"];
				$instance->apopen = $records["APOPEN"];
				$instance->monthend = $records["MONTHEND"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [AP], [MODCODE], [STATUS], [APACTIVE], [APOPEN], [MONTHEND] FROM [SYSAPMod]  WHERE [MODCODE]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->ap = $records["AP"];
				$instance->modcode = $records["MODCODE"];
				$instance->status = $records["STATUS"];
				$instance->apactive = $records["APACTIVE"];
				$instance->apopen = $records["APOPEN"];
				$instance->monthend = $records["MONTHEND"];
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