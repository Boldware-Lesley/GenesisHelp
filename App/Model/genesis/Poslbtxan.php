<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	POSLBTxan

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar LBCUSTNO" of type [nvarchar]
	"public nvarchar LBNO" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar TXANDATE" of type [nvarchar]
	"public nvarchar DETAILS" of type [nvarchar]
	"public nvarchar REFERENCE" of type [nvarchar]
	"public float AMOUNT" of type [float]
	"public nvarchar DRCR" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Poslbtxan {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $lbcustno ;	
	public $lbno ;	
	public $txtp ;	
	public $txandate ;	
	public $details ;	
	public $reference ;	
	public $amount ;	
	public $drcr ;	
	public $ap ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [LBCUSTNO], [LBNO], [TXTP], [TXANDATE], [DETAILS], [REFERENCE], [AMOUNT], [DRCR], [AP], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [POSLBTxan]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->lbcustno = $records["LBCUSTNO"];
				$instance->lbno = $records["LBNO"];
				$instance->txtp = $records["TXTP"];
				$instance->txandate = $records["TXANDATE"];
				$instance->details = $records["DETAILS"];
				$instance->reference = $records["REFERENCE"];
				$instance->amount = $records["AMOUNT"];
				$instance->drcr = $records["DRCR"];
				$instance->ap = $records["AP"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
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