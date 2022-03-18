<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	POSVouchers

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar VOUCHERBRANCH" of type [nvarchar]
	"public nvarchar VOUCHERNO" of type [nvarchar]
	"public nvarchar VOUCHERTYPE" of type [nvarchar]
	"public nvarchar DATECREATED" of type [nvarchar]
	"public nvarchar VOUCHEREXPDATE" of type [nvarchar]
	"public float AMOUNT" of type [float]
	"public float VAT" of type [float]
	"public nvarchar VOUCHERTXTP" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar DOCTXTP" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public nvarchar TILLNO" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar ADDRESS1" of type [nvarchar]
	"public nvarchar ADDRESS2" of type [nvarchar]
	"public nvarchar ADDRESS3" of type [nvarchar]
	"public nvarchar ADDRESS4" of type [nvarchar]
	"public nvarchar PHONE" of type [nvarchar]
	"public nvarchar IDNO" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar PAIDDATE" of type [nvarchar]
	"public nvarchar PAIDTILLNO" of type [nvarchar]
	"public nvarchar PAIDTXTP" of type [nvarchar]
	"public nvarchar PAIDDOCNO" of type [nvarchar]
	"public nvarchar CASHED" of type [nvarchar]
	"public nvarchar BASEBRANCH" of type [nvarchar]
	"public nvarchar BASEVOUCHERNO" of type [nvarchar]
	"public float BASEVOUCHERAMNT" of type [float]
	"public nvarchar TARGETBRANCH" of type [nvarchar]
	"public nvarchar TARGETVOUCHERNO" of type [nvarchar]
	"public float TARGETVOUCHERAMNT" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar VOUCHERKEY" of type [nvarchar]
	"public nvarchar PENSIONNO" of type [nvarchar]
	"public nvarchar EXTERNALNO" of type [nvarchar]
	"public float HANDLINGFEE" of type [float]
	"public nvarchar RetnCounterNo" of type [nvarchar]
	"public nvarchar OrigInvoiceNo" of type [nvarchar]
	"public nvarchar PickupDate" of type [nvarchar]
	"public nvarchar PickupTime" of type [nvarchar]
	"public int CashUpNo" of type [int]
	"public nvarchar PickupTill" of type [nvarchar]
	"public nvarchar EmptiesVerified" of type [nvarchar]
	"public nvarchar ReferenceNo" of type [nvarchar]
	"public nvarchar EMail" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posvouchers {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $voucherbranch ;	
	public $voucherno ;	
	public $vouchertype ;	
	public $datecreated ;	
	public $voucherexpdate ;	
	public $amount ;	
	public $vat ;	
	public $vouchertxtp ;	
	public $status ;	
	public $doctxtp ;	
	public $docno ;	
	public $tillno ;	
	public $account ;	
	public $name ;	
	public $address1 ;	
	public $address2 ;	
	public $address3 ;	
	public $address4 ;	
	public $phone ;	
	public $idno ;	
	public $description ;	
	public $paiddate ;	
	public $paidtillno ;	
	public $paidtxtp ;	
	public $paiddocno ;	
	public $cashed ;	
	public $basebranch ;	
	public $basevoucherno ;	
	public $basevoucheramnt ;	
	public $targetbranch ;	
	public $targetvoucherno ;	
	public $targetvoucheramnt ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $voucherkey ;	
	public $pensionno ;	
	public $externalno ;	
	public $handlingfee ;	
	public $retncounterno ;	
	public $originvoiceno ;	
	public $pickupdate ;	
	public $pickuptime ;	
	public $cashupno ;	
	public $pickuptill ;	
	public $emptiesverified ;	
	public $referenceno ;	
	public $email ;	
	
	
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
			$query = " SELECT RECID, [CO], [VOUCHERBRANCH], [VOUCHERNO], [VOUCHERTYPE], [DATECREATED], [VOUCHEREXPDATE], [AMOUNT], [VAT], [VOUCHERTXTP], [STATUS], [DOCTXTP], [DOCNO], [TILLNO], [ACCOUNT], [NAME], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [PHONE], [IDNO], [DESCRIPTION], [PAIDDATE], [PAIDTILLNO], [PAIDTXTP], [PAIDDOCNO], [CASHED], [BASEBRANCH], [BASEVOUCHERNO], [BASEVOUCHERAMNT], [TARGETBRANCH], [TARGETVOUCHERNO], [TARGETVOUCHERAMNT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [VOUCHERKEY], [PENSIONNO], [EXTERNALNO], [HANDLINGFEE], [RetnCounterNo], [OrigInvoiceNo], [PickupDate], [PickupTime], [CashUpNo], [PickupTill], [EmptiesVerified], [ReferenceNo], [EMail] FROM [POSVouchers]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->voucherbranch = $records["VOUCHERBRANCH"];
				$instance->voucherno = $records["VOUCHERNO"];
				$instance->vouchertype = $records["VOUCHERTYPE"];
				$instance->datecreated = $records["DATECREATED"];
				$instance->voucherexpdate = $records["VOUCHEREXPDATE"];
				$instance->amount = $records["AMOUNT"];
				$instance->vat = $records["VAT"];
				$instance->vouchertxtp = $records["VOUCHERTXTP"];
				$instance->status = $records["STATUS"];
				$instance->doctxtp = $records["DOCTXTP"];
				$instance->docno = $records["DOCNO"];
				$instance->tillno = $records["TILLNO"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->phone = $records["PHONE"];
				$instance->idno = $records["IDNO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->paiddate = $records["PAIDDATE"];
				$instance->paidtillno = $records["PAIDTILLNO"];
				$instance->paidtxtp = $records["PAIDTXTP"];
				$instance->paiddocno = $records["PAIDDOCNO"];
				$instance->cashed = $records["CASHED"];
				$instance->basebranch = $records["BASEBRANCH"];
				$instance->basevoucherno = $records["BASEVOUCHERNO"];
				$instance->basevoucheramnt = $records["BASEVOUCHERAMNT"];
				$instance->targetbranch = $records["TARGETBRANCH"];
				$instance->targetvoucherno = $records["TARGETVOUCHERNO"];
				$instance->targetvoucheramnt = $records["TARGETVOUCHERAMNT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->voucherkey = $records["VOUCHERKEY"];
				$instance->pensionno = $records["PENSIONNO"];
				$instance->externalno = $records["EXTERNALNO"];
				$instance->handlingfee = $records["HANDLINGFEE"];
				$instance->retncounterno = $records["RetnCounterNo"];
				$instance->originvoiceno = $records["OrigInvoiceNo"];
				$instance->pickupdate = $records["PickupDate"];
				$instance->pickuptime = $records["PickupTime"];
				$instance->cashupno = $records["CashUpNo"];
				$instance->pickuptill = $records["PickupTill"];
				$instance->emptiesverified = $records["EmptiesVerified"];
				$instance->referenceno = $records["ReferenceNo"];
				$instance->email = $records["EMail"];
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