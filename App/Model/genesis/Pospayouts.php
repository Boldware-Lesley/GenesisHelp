<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	POSPayOuts

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TILLNO" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar PAYOUTCODE" of type [nvarchar]
	"public nvarchar PAYDATE" of type [nvarchar]
	"public nvarchar PAYTIME" of type [nvarchar]
	"public nvarchar PAYEE" of type [nvarchar]
	"public nvarchar DETAILS" of type [nvarchar]
	"public nvarchar REFERENCE" of type [nvarchar]
	"public nvarchar SUPERVISOR" of type [nvarchar]
	"public float AMOUNT" of type [float]
	"public float VATAMOUNT" of type [float]
	"public nvarchar GLACNO" of type [nvarchar]
	"public nvarchar SAPGLACNO" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Pospayouts {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $tillno ;	
	public $docno ;	
	public $txtp ;	
	public $payoutcode ;	
	public $paydate ;	
	public $paytime ;	
	public $payee ;	
	public $details ;	
	public $reference ;	
	public $supervisor ;	
	public $amount ;	
	public $vatamount ;	
	public $glacno ;	
	public $sapglacno ;	
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
			$query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [DOCNO], [TXTP], [PAYOUTCODE], [PAYDATE], [PAYTIME], [PAYEE], [DETAILS], [REFERENCE], [SUPERVISOR], [AMOUNT], [VATAMOUNT], [GLACNO], [SAPGLACNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [POSPayOuts]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->tillno = $records["TILLNO"];
				$instance->docno = $records["DOCNO"];
				$instance->txtp = $records["TXTP"];
				$instance->payoutcode = $records["PAYOUTCODE"];
				$instance->paydate = $records["PAYDATE"];
				$instance->paytime = $records["PAYTIME"];
				$instance->payee = $records["PAYEE"];
				$instance->details = $records["DETAILS"];
				$instance->reference = $records["REFERENCE"];
				$instance->supervisor = $records["SUPERVISOR"];
				$instance->amount = $records["AMOUNT"];
				$instance->vatamount = $records["VATAMOUNT"];
				$instance->glacno = $records["GLACNO"];
				$instance->sapglacno = $records["SAPGLACNO"];
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
	/**
	Main Constructor For Declearing Using PAYOUTCODE
	*/
	public static function ini_PAYOUTCODE($payoutcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [DOCNO], [TXTP], [PAYOUTCODE], [PAYDATE], [PAYTIME], [PAYEE], [DETAILS], [REFERENCE], [SUPERVISOR], [AMOUNT], [VATAMOUNT], [GLACNO], [SAPGLACNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [POSPayOuts]  WHERE [PAYOUTCODE]=:payoutcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":payoutcode", $payoutcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->tillno = $records["TILLNO"];
				$instance->docno = $records["DOCNO"];
				$instance->txtp = $records["TXTP"];
				$instance->payoutcode = $records["PAYOUTCODE"];
				$instance->paydate = $records["PAYDATE"];
				$instance->paytime = $records["PAYTIME"];
				$instance->payee = $records["PAYEE"];
				$instance->details = $records["DETAILS"];
				$instance->reference = $records["REFERENCE"];
				$instance->supervisor = $records["SUPERVISOR"];
				$instance->amount = $records["AMOUNT"];
				$instance->vatamount = $records["VATAMOUNT"];
				$instance->glacno = $records["GLACNO"];
				$instance->sapglacno = $records["SAPGLACNO"];
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