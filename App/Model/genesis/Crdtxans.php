<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	CRDTxans

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public nvarchar SOURCEBRANCH" of type [nvarchar]
	"public int TXNO" of type [int]
	"public nvarchar TRANDATE" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public nvarchar BASEDOCTYPE" of type [nvarchar]
	"public nvarchar BASEDOCNO" of type [nvarchar]
	"public nvarchar BASEDOCDATE" of type [nvarchar]
	"public int AP" of type [int]
	"public int GRVNO" of type [int]
	"public nvarchar GRVDATE" of type [nvarchar]
	"public nvarchar REFERENCE" of type [nvarchar]
	"public nvarchar DETAILS" of type [nvarchar]
	"public float AMOUNT" of type [float]
	"public nvarchar DRCR" of type [nvarchar]
	"public float VATAMOUNT" of type [float]
	"public nvarchar VATCODE" of type [nvarchar]
	"public float VATRATE" of type [float]
	"public float DISCOUNT" of type [float]
	"public float DISCVATRATE" of type [float]
	"public float DISCVATAMOUNT" of type [float]
	"public nvarchar TERMCODE" of type [nvarchar]
	"public nvarchar PAYMENTDUE" of type [nvarchar]
	"public nvarchar PAYMENTMETHOD" of type [nvarchar]
	"public nvarchar PAYMENTREF" of type [nvarchar]
	"public float DCURR" of type [float]
	"public float D030" of type [float]
	"public float D060" of type [float]
	"public float D090" of type [float]
	"public float D120" of type [float]
	"public float D150" of type [float]
	"public float D180" of type [float]
	"public float DOVER" of type [float]
	"public float BALANCE" of type [float]
	"public float PAIDAMOUNT" of type [float]
	"public nvarchar PAYMENTSTATUS" of type [nvarchar]
	"public nvarchar PREVIOUSPOST" of type [nvarchar]
	"public int GLTRACE" of type [int]
	"public nvarchar TARGETDOCTYPE" of type [nvarchar]
	"public nvarchar TARGETDOCNO" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public ntext NOTEPAD" of type [ntext]
	"public nvarchar RebateCode" of type [nvarchar]
	"public float RebatePerc" of type [float]
	"public nvarchar ClaimCode" of type [nvarchar]
	"public nvarchar OtherIncome" of type [nvarchar]
	"public nvarchar OrigPayDate" of type [nvarchar]
	"public int ReconNo" of type [int]
	"public int RebateNo" of type [int]
	"public nvarchar TallyClaim" of type [nvarchar]
	"public nvarchar PaymentBank" of type [nvarchar]
	"public nvarchar PostingDate" of type [nvarchar]
	"public nvarchar LinkAccount" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdtxans {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $sourcebranch ;	
	public $txno ;	
	public $trandate ;	
	public $txtp ;	
	public $docno ;	
	public $basedoctype ;	
	public $basedocno ;	
	public $basedocdate ;	
	public $ap ;	
	public $grvno ;	
	public $grvdate ;	
	public $reference ;	
	public $details ;	
	public $amount ;	
	public $drcr ;	
	public $vatamount ;	
	public $vatcode ;	
	public $vatrate ;	
	public $discount ;	
	public $discvatrate ;	
	public $discvatamount ;	
	public $termcode ;	
	public $paymentdue ;	
	public $paymentmethod ;	
	public $paymentref ;	
	public $dcurr ;	
	public $d030 ;	
	public $d060 ;	
	public $d090 ;	
	public $d120 ;	
	public $d150 ;	
	public $d180 ;	
	public $dover ;	
	public $balance ;	
	public $paidamount ;	
	public $paymentstatus ;	
	public $previouspost ;	
	public $gltrace ;	
	public $targetdoctype ;	
	public $targetdocno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $notepad ;	
	public $rebatecode ;	
	public $rebateperc ;	
	public $claimcode ;	
	public $otherincome ;	
	public $origpaydate ;	
	public $reconno ;	
	public $rebateno ;	
	public $tallyclaim ;	
	public $paymentbank ;	
	public $postingdate ;	
	public $linkaccount ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [SOURCEBRANCH], [TXNO], [TRANDATE], [TXTP], [DOCNO], [BASEDOCTYPE], [BASEDOCNO], [BASEDOCDATE], [AP], [GRVNO], [GRVDATE], [REFERENCE], [DETAILS], [AMOUNT], [DRCR], [VATAMOUNT], [VATCODE], [VATRATE], [DISCOUNT], [DISCVATRATE], [DISCVATAMOUNT], [TERMCODE], [PAYMENTDUE], [PAYMENTMETHOD], [PAYMENTREF], [DCURR], [D030], [D060], [D090], [D120], [D150], [D180], [DOVER], [BALANCE], [PAIDAMOUNT], [PAYMENTSTATUS], [PREVIOUSPOST], [GLTRACE], [TARGETDOCTYPE], [TARGETDOCNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [NOTEPAD], [RebateCode], [RebatePerc], [ClaimCode], [OtherIncome], [OrigPayDate], [ReconNo], [RebateNo], [TallyClaim], [PaymentBank], [PostingDate], [LinkAccount] FROM [CRDTxans]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->sourcebranch = $records["SOURCEBRANCH"];
				$instance->txno = $records["TXNO"];
				$instance->trandate = $records["TRANDATE"];
				$instance->txtp = $records["TXTP"];
				$instance->docno = $records["DOCNO"];
				$instance->basedoctype = $records["BASEDOCTYPE"];
				$instance->basedocno = $records["BASEDOCNO"];
				$instance->basedocdate = $records["BASEDOCDATE"];
				$instance->ap = $records["AP"];
				$instance->grvno = $records["GRVNO"];
				$instance->grvdate = $records["GRVDATE"];
				$instance->reference = $records["REFERENCE"];
				$instance->details = $records["DETAILS"];
				$instance->amount = $records["AMOUNT"];
				$instance->drcr = $records["DRCR"];
				$instance->vatamount = $records["VATAMOUNT"];
				$instance->vatcode = $records["VATCODE"];
				$instance->vatrate = $records["VATRATE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->discvatrate = $records["DISCVATRATE"];
				$instance->discvatamount = $records["DISCVATAMOUNT"];
				$instance->termcode = $records["TERMCODE"];
				$instance->paymentdue = $records["PAYMENTDUE"];
				$instance->paymentmethod = $records["PAYMENTMETHOD"];
				$instance->paymentref = $records["PAYMENTREF"];
				$instance->dcurr = $records["DCURR"];
				$instance->d030 = $records["D030"];
				$instance->d060 = $records["D060"];
				$instance->d090 = $records["D090"];
				$instance->d120 = $records["D120"];
				$instance->d150 = $records["D150"];
				$instance->d180 = $records["D180"];
				$instance->dover = $records["DOVER"];
				$instance->balance = $records["BALANCE"];
				$instance->paidamount = $records["PAIDAMOUNT"];
				$instance->paymentstatus = $records["PAYMENTSTATUS"];
				$instance->previouspost = $records["PREVIOUSPOST"];
				$instance->gltrace = $records["GLTRACE"];
				$instance->targetdoctype = $records["TARGETDOCTYPE"];
				$instance->targetdocno = $records["TARGETDOCNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->notepad = $records["NOTEPAD"];
				$instance->rebatecode = $records["RebateCode"];
				$instance->rebateperc = $records["RebatePerc"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->otherincome = $records["OtherIncome"];
				$instance->origpaydate = $records["OrigPayDate"];
				$instance->reconno = $records["ReconNo"];
				$instance->rebateno = $records["RebateNo"];
				$instance->tallyclaim = $records["TallyClaim"];
				$instance->paymentbank = $records["PaymentBank"];
				$instance->postingdate = $records["PostingDate"];
				$instance->linkaccount = $records["LinkAccount"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using VATCODE
	*/
	public static function ini_VATCODE($vatcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [SOURCEBRANCH], [TXNO], [TRANDATE], [TXTP], [DOCNO], [BASEDOCTYPE], [BASEDOCNO], [BASEDOCDATE], [AP], [GRVNO], [GRVDATE], [REFERENCE], [DETAILS], [AMOUNT], [DRCR], [VATAMOUNT], [VATCODE], [VATRATE], [DISCOUNT], [DISCVATRATE], [DISCVATAMOUNT], [TERMCODE], [PAYMENTDUE], [PAYMENTMETHOD], [PAYMENTREF], [DCURR], [D030], [D060], [D090], [D120], [D150], [D180], [DOVER], [BALANCE], [PAIDAMOUNT], [PAYMENTSTATUS], [PREVIOUSPOST], [GLTRACE], [TARGETDOCTYPE], [TARGETDOCNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [NOTEPAD], [RebateCode], [RebatePerc], [ClaimCode], [OtherIncome], [OrigPayDate], [ReconNo], [RebateNo], [TallyClaim], [PaymentBank], [PostingDate], [LinkAccount] FROM [CRDTxans]  WHERE [VATCODE]=:vatcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":vatcode", $vatcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->sourcebranch = $records["SOURCEBRANCH"];
				$instance->txno = $records["TXNO"];
				$instance->trandate = $records["TRANDATE"];
				$instance->txtp = $records["TXTP"];
				$instance->docno = $records["DOCNO"];
				$instance->basedoctype = $records["BASEDOCTYPE"];
				$instance->basedocno = $records["BASEDOCNO"];
				$instance->basedocdate = $records["BASEDOCDATE"];
				$instance->ap = $records["AP"];
				$instance->grvno = $records["GRVNO"];
				$instance->grvdate = $records["GRVDATE"];
				$instance->reference = $records["REFERENCE"];
				$instance->details = $records["DETAILS"];
				$instance->amount = $records["AMOUNT"];
				$instance->drcr = $records["DRCR"];
				$instance->vatamount = $records["VATAMOUNT"];
				$instance->vatcode = $records["VATCODE"];
				$instance->vatrate = $records["VATRATE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->discvatrate = $records["DISCVATRATE"];
				$instance->discvatamount = $records["DISCVATAMOUNT"];
				$instance->termcode = $records["TERMCODE"];
				$instance->paymentdue = $records["PAYMENTDUE"];
				$instance->paymentmethod = $records["PAYMENTMETHOD"];
				$instance->paymentref = $records["PAYMENTREF"];
				$instance->dcurr = $records["DCURR"];
				$instance->d030 = $records["D030"];
				$instance->d060 = $records["D060"];
				$instance->d090 = $records["D090"];
				$instance->d120 = $records["D120"];
				$instance->d150 = $records["D150"];
				$instance->d180 = $records["D180"];
				$instance->dover = $records["DOVER"];
				$instance->balance = $records["BALANCE"];
				$instance->paidamount = $records["PAIDAMOUNT"];
				$instance->paymentstatus = $records["PAYMENTSTATUS"];
				$instance->previouspost = $records["PREVIOUSPOST"];
				$instance->gltrace = $records["GLTRACE"];
				$instance->targetdoctype = $records["TARGETDOCTYPE"];
				$instance->targetdocno = $records["TARGETDOCNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->notepad = $records["NOTEPAD"];
				$instance->rebatecode = $records["RebateCode"];
				$instance->rebateperc = $records["RebatePerc"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->otherincome = $records["OtherIncome"];
				$instance->origpaydate = $records["OrigPayDate"];
				$instance->reconno = $records["ReconNo"];
				$instance->rebateno = $records["RebateNo"];
				$instance->tallyclaim = $records["TallyClaim"];
				$instance->paymentbank = $records["PaymentBank"];
				$instance->postingdate = $records["PostingDate"];
				$instance->linkaccount = $records["LinkAccount"];
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