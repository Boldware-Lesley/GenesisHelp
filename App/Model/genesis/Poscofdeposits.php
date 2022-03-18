<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	POSCOFDeposits

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar COFTILLNO" of type [nvarchar]
	"public nvarchar DEPOSITDATE" of type [nvarchar]
	"public nvarchar DEPOSITTIME" of type [nvarchar]
	"public nvarchar DEPOSITSLIPNO" of type [nvarchar]
	"public nvarchar REFERENCE" of type [nvarchar]
	"public float CASH" of type [float]
	"public float CHEQUES" of type [float]
	"public float TENDER1AMOUNT" of type [float]
	"public float TENDER2AMOUNT" of type [float]
	"public float TENDER3AMOUNT" of type [float]
	"public float TENDER4AMOUNT" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar CBDepDate" of type [nvarchar]
	"public int CBTxRef" of type [int]
	"public int GLTrace" of type [int]
*/
namespace genesis;


use PDO;

class Poscofdeposits {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $coftillno ;	
	public $depositdate ;	
	public $deposittime ;	
	public $depositslipno ;	
	public $reference ;	
	public $cash ;	
	public $cheques ;	
	public $tender1amount ;	
	public $tender2amount ;	
	public $tender3amount ;	
	public $tender4amount ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $cbdepdate ;	
	public $cbtxref ;	
	public $gltrace ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [COFTILLNO], [DEPOSITDATE], [DEPOSITTIME], [DEPOSITSLIPNO], [REFERENCE], [CASH], [CHEQUES], [TENDER1AMOUNT], [TENDER2AMOUNT], [TENDER3AMOUNT], [TENDER4AMOUNT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [CBDepDate], [CBTxRef], [GLTrace] FROM [POSCOFDeposits]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->coftillno = $records["COFTILLNO"];
				$instance->depositdate = $records["DEPOSITDATE"];
				$instance->deposittime = $records["DEPOSITTIME"];
				$instance->depositslipno = $records["DEPOSITSLIPNO"];
				$instance->reference = $records["REFERENCE"];
				$instance->cash = $records["CASH"];
				$instance->cheques = $records["CHEQUES"];
				$instance->tender1amount = $records["TENDER1AMOUNT"];
				$instance->tender2amount = $records["TENDER2AMOUNT"];
				$instance->tender3amount = $records["TENDER3AMOUNT"];
				$instance->tender4amount = $records["TENDER4AMOUNT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->cbdepdate = $records["CBDepDate"];
				$instance->cbtxref = $records["CBTxRef"];
				$instance->gltrace = $records["GLTrace"];
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