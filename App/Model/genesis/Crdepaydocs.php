<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	CRDEPayDocs

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BATCHNO" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public nvarchar DOCDATE" of type [nvarchar]
	"public nvarchar DOCDUEDATE" of type [nvarchar]
	"public nvarchar DOCTYPE" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar DRCR" of type [nvarchar]
	"public nvarchar REFNO" of type [nvarchar]
	"public float DOCAMOUNT" of type [float]
	"public float DOCBALANCE" of type [float]
	"public float PAYAMOUNT" of type [float]
	"public float PAYDISCOUNT" of type [float]
	"public float REBAMNT" of type [float]
	"public nvarchar UNALLOC" of type [nvarchar]
	"public nvarchar ADVANCEPMNT" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public int TxNo" of type [int]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar SuppDocNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdepaydocs {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $batchno ;	
	public $account ;	
	public $docno ;	
	public $docdate ;	
	public $docduedate ;	
	public $doctype ;	
	public $txtp ;	
	public $drcr ;	
	public $refno ;	
	public $docamount ;	
	public $docbalance ;	
	public $payamount ;	
	public $paydiscount ;	
	public $rebamnt ;	
	public $unalloc ;	
	public $advancepmnt ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $txno ;	
	public $details ;	
	public $suppdocno ;	
	
	
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
			$query = " SELECT RECID, [CO], [BATCHNO], [ACCOUNT], [DOCNO], [DOCDATE], [DOCDUEDATE], [DOCTYPE], [TXTP], [DRCR], [REFNO], [DOCAMOUNT], [DOCBALANCE], [PAYAMOUNT], [PAYDISCOUNT], [REBAMNT], [UNALLOC], [ADVANCEPMNT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [TxNo], [Details], [SuppDocNo] FROM [CRDEPayDocs]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->batchno = $records["BATCHNO"];
				$instance->account = $records["ACCOUNT"];
				$instance->docno = $records["DOCNO"];
				$instance->docdate = $records["DOCDATE"];
				$instance->docduedate = $records["DOCDUEDATE"];
				$instance->doctype = $records["DOCTYPE"];
				$instance->txtp = $records["TXTP"];
				$instance->drcr = $records["DRCR"];
				$instance->refno = $records["REFNO"];
				$instance->docamount = $records["DOCAMOUNT"];
				$instance->docbalance = $records["DOCBALANCE"];
				$instance->payamount = $records["PAYAMOUNT"];
				$instance->paydiscount = $records["PAYDISCOUNT"];
				$instance->rebamnt = $records["REBAMNT"];
				$instance->unalloc = $records["UNALLOC"];
				$instance->advancepmnt = $records["ADVANCEPMNT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->txno = $records["TxNo"];
				$instance->details = $records["Details"];
				$instance->suppdocno = $records["SuppDocNo"];
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