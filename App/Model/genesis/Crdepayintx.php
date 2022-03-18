<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	CRDEPayIntx

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BATCHNO" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public nvarchar REFNO" of type [nvarchar]
	"public nvarchar TRANDATE" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar DETAILS" of type [nvarchar]
	"public float AMOUNTINCL" of type [float]
	"public float AMOUNTEXCL" of type [float]
	"public float VATAMOUNT" of type [float]
	"public float DISCOUNT" of type [float]
	"public float REBAMNT" of type [float]
	"public nvarchar DRCR" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdepayintx {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $batchno ;	
	public $account ;	
	public $docno ;	
	public $refno ;	
	public $trandate ;	
	public $txtp ;	
	public $details ;	
	public $amountincl ;	
	public $amountexcl ;	
	public $vatamount ;	
	public $discount ;	
	public $rebamnt ;	
	public $drcr ;	
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
			$query = " SELECT RECID, [CO], [BATCHNO], [ACCOUNT], [DOCNO], [REFNO], [TRANDATE], [TXTP], [DETAILS], [AMOUNTINCL], [AMOUNTEXCL], [VATAMOUNT], [DISCOUNT], [REBAMNT], [DRCR], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [CRDEPayIntx]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->batchno = $records["BATCHNO"];
				$instance->account = $records["ACCOUNT"];
				$instance->docno = $records["DOCNO"];
				$instance->refno = $records["REFNO"];
				$instance->trandate = $records["TRANDATE"];
				$instance->txtp = $records["TXTP"];
				$instance->details = $records["DETAILS"];
				$instance->amountincl = $records["AMOUNTINCL"];
				$instance->amountexcl = $records["AMOUNTEXCL"];
				$instance->vatamount = $records["VATAMOUNT"];
				$instance->discount = $records["DISCOUNT"];
				$instance->rebamnt = $records["REBAMNT"];
				$instance->drcr = $records["DRCR"];
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