<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	CRDEPayHeader

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BATCHNO" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar PAYEE" of type [nvarchar]
	"public float PAYAMOUNT" of type [float]
	"public float DISCOUNT" of type [float]
	"public float REBAMNT" of type [float]
	"public nvarchar PAYDETAILS" of type [nvarchar]
	"public nvarchar BANKNAME" of type [nvarchar]
	"public nvarchar BANKBRANCHNAME" of type [nvarchar]
	"public nvarchar BANKBRANCHCODE" of type [nvarchar]
	"public nvarchar BANKACCNO" of type [nvarchar]
	"public nvarchar BANKACCNAME" of type [nvarchar]
	"public nvarchar ADVANCEPMNT" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar UnAlloc" of type [nvarchar]
	"public float AccBalance" of type [float]
*/
namespace genesis;


use PDO;

class Crdepayheader {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $batchno ;	
	public $account ;	
	public $name ;	
	public $payee ;	
	public $payamount ;	
	public $discount ;	
	public $rebamnt ;	
	public $paydetails ;	
	public $bankname ;	
	public $bankbranchname ;	
	public $bankbranchcode ;	
	public $bankaccno ;	
	public $bankaccname ;	
	public $advancepmnt ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $unalloc ;	
	public $accbalance ;	
	
	
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
			$query = " SELECT RECID, [CO], [BATCHNO], [ACCOUNT], [NAME], [PAYEE], [PAYAMOUNT], [DISCOUNT], [REBAMNT], [PAYDETAILS], [BANKNAME], [BANKBRANCHNAME], [BANKBRANCHCODE], [BANKACCNO], [BANKACCNAME], [ADVANCEPMNT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [UnAlloc], [AccBalance] FROM [CRDEPayHeader]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->batchno = $records["BATCHNO"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->payee = $records["PAYEE"];
				$instance->payamount = $records["PAYAMOUNT"];
				$instance->discount = $records["DISCOUNT"];
				$instance->rebamnt = $records["REBAMNT"];
				$instance->paydetails = $records["PAYDETAILS"];
				$instance->bankname = $records["BANKNAME"];
				$instance->bankbranchname = $records["BANKBRANCHNAME"];
				$instance->bankbranchcode = $records["BANKBRANCHCODE"];
				$instance->bankaccno = $records["BANKACCNO"];
				$instance->bankaccname = $records["BANKACCNAME"];
				$instance->advancepmnt = $records["ADVANCEPMNT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->unalloc = $records["UnAlloc"];
				$instance->accbalance = $records["AccBalance"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using BANKBRANCHCODE
	*/
	public static function ini_BANKBRANCHCODE($bankbranchcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BATCHNO], [ACCOUNT], [NAME], [PAYEE], [PAYAMOUNT], [DISCOUNT], [REBAMNT], [PAYDETAILS], [BANKNAME], [BANKBRANCHNAME], [BANKBRANCHCODE], [BANKACCNO], [BANKACCNAME], [ADVANCEPMNT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [UnAlloc], [AccBalance] FROM [CRDEPayHeader]  WHERE [BANKBRANCHCODE]=:bankbranchcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":bankbranchcode", $bankbranchcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->batchno = $records["BATCHNO"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->payee = $records["PAYEE"];
				$instance->payamount = $records["PAYAMOUNT"];
				$instance->discount = $records["DISCOUNT"];
				$instance->rebamnt = $records["REBAMNT"];
				$instance->paydetails = $records["PAYDETAILS"];
				$instance->bankname = $records["BANKNAME"];
				$instance->bankbranchname = $records["BANKBRANCHNAME"];
				$instance->bankbranchcode = $records["BANKBRANCHCODE"];
				$instance->bankaccno = $records["BANKACCNO"];
				$instance->bankaccname = $records["BANKACCNAME"];
				$instance->advancepmnt = $records["ADVANCEPMNT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->unalloc = $records["UnAlloc"];
				$instance->accbalance = $records["AccBalance"];
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
			$res = $this->name;
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