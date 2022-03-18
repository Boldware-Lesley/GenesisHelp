<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	SYSBudgetPeriods

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar ModCode" of type [nvarchar]
	"public nvarchar BudYear" of type [nvarchar]
	"public nvarchar FromAP" of type [nvarchar]
	"public nvarchar ToAP" of type [nvarchar]
	"public nvarchar PYFromAP" of type [nvarchar]
	"public nvarchar PYTpAP" of type [nvarchar]
	"public nvarchar PYToAP" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysbudgetperiods {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $modcode ;	
	public $budyear ;	
	public $fromap ;	
	public $toap ;	
	public $pyfromap ;	
	public $pytpap ;	
	public $pytoap ;	
	
	
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
			$query = " SELECT RECID, [CO], [ModCode], [BudYear], [FromAP], [ToAP], [PYFromAP], [PYTpAP], [PYToAP] FROM [SYSBudgetPeriods]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->modcode = $records["ModCode"];
				$instance->budyear = $records["BudYear"];
				$instance->fromap = $records["FromAP"];
				$instance->toap = $records["ToAP"];
				$instance->pyfromap = $records["PYFromAP"];
				$instance->pytpap = $records["PYTpAP"];
				$instance->pytoap = $records["PYToAP"];
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
			$query = " SELECT RECID, [CO], [ModCode], [BudYear], [FromAP], [ToAP], [PYFromAP], [PYTpAP], [PYToAP] FROM [SYSBudgetPeriods]  WHERE [ModCode]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->modcode = $records["ModCode"];
				$instance->budyear = $records["BudYear"];
				$instance->fromap = $records["FromAP"];
				$instance->toap = $records["ToAP"];
				$instance->pyfromap = $records["PYFromAP"];
				$instance->pytpap = $records["PYTpAP"];
				$instance->pytoap = $records["PYToAP"];
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