<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	PUROrdHdr

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public int ORDERNO" of type [int]
	"public nvarchar ORDERDATE" of type [nvarchar]
	"public nvarchar DELIVERYDATE" of type [nvarchar]
	"public nvarchar DELIVERYTIME" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar ADDRESS1" of type [nvarchar]
	"public nvarchar ADDRESS2" of type [nvarchar]
	"public nvarchar ADDRESS3" of type [nvarchar]
	"public nvarchar ADDRESS4" of type [nvarchar]
	"public nvarchar POSTALCODE" of type [nvarchar]
	"public nvarchar TELEPHONE" of type [nvarchar]
	"public nvarchar FAX" of type [nvarchar]
	"public nvarchar EMAIL" of type [nvarchar]
	"public nvarchar CONTACT" of type [nvarchar]
	"public nvarchar BUYER" of type [nvarchar]
	"public nvarchar TERMCODE" of type [nvarchar]
	"public nvarchar REFERENCE" of type [nvarchar]
	"public int ORDCARDNO" of type [int]
	"public int GRVNO" of type [int]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar VATINDICATOR" of type [nvarchar]
	"public float TOTALCASES" of type [float]
	"public float TOTALPALLETTES" of type [float]
	"public float TOTALWEIGHT" of type [float]
	"public float TOTALDISCOUNT" of type [float]
	"public float TOTALDIMENSION" of type [float]
	"public float TOTALVAT" of type [float]
	"public float TOTALEXCL" of type [float]
	"public float TOTALINCL" of type [float]
	"public ntext NOTES" of type [ntext]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public float SUGGORDEXCL" of type [float]
	"public float SUGGORDINCL" of type [float]
	"public nvarchar WH" of type [nvarchar]
	"public nvarchar COMMMETHOD" of type [nvarchar]
	"public nvarchar APPROVED" of type [nvarchar]
	"public nvarchar APPROVEDATE" of type [nvarchar]
	"public nvarchar APPROCEDUSER" of type [nvarchar]
	"public nvarchar PAYMENTDATE" of type [nvarchar]
	"public nvarchar DUEOVERRIDE" of type [nvarchar]
	"public int DETAILLINES" of type [int]
	"public nvarchar EXTENDEDTERMS" of type [nvarchar]
	"public int EXTENDEDDAYS" of type [int]
	"public nvarchar EXTENDEDDATE" of type [nvarchar]
	"public nvarchar DESTCO" of type [nvarchar]
	"public nvarchar DESTBRANCH" of type [nvarchar]
	"public nvarchar DEBACCOUNT" of type [nvarchar]
	"public nvarchar INDICATORS" of type [nvarchar]
	"public nvarchar BASETYPE" of type [nvarchar]
	"public nvarchar BASEREF" of type [nvarchar]
	"public nvarchar SUPPACC" of type [nvarchar]
	"public nvarchar VERSION" of type [nvarchar]
	"public nvarchar InUse" of type [nvarchar]
	"public nvarchar ApprovedUser" of type [nvarchar]
	"public float DocTallyExcl" of type [float]
	"public float DocTallyIncl" of type [float]
	"public nvarchar DEBRefAccount" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Purordhdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $orderno ;	
	public $orderdate ;	
	public $deliverydate ;	
	public $deliverytime ;	
	public $name ;	
	public $address1 ;	
	public $address2 ;	
	public $address3 ;	
	public $address4 ;	
	public $postalcode ;	
	public $telephone ;	
	public $fax ;	
	public $email ;	
	public $contact ;	
	public $buyer ;	
	public $termcode ;	
	public $reference ;	
	public $ordcardno ;	
	public $grvno ;	
	public $status ;	
	public $vatindicator ;	
	public $totalcases ;	
	public $totalpallettes ;	
	public $totalweight ;	
	public $totaldiscount ;	
	public $totaldimension ;	
	public $totalvat ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $notes ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $suggordexcl ;	
	public $suggordincl ;	
	public $wh ;	
	public $commmethod ;	
	public $approved ;	
	public $approvedate ;	
	public $approceduser ;	
	public $paymentdate ;	
	public $dueoverride ;	
	public $detaillines ;	
	public $extendedterms ;	
	public $extendeddays ;	
	public $extendeddate ;	
	public $destco ;	
	public $destbranch ;	
	public $debaccount ;	
	public $indicators ;	
	public $basetype ;	
	public $baseref ;	
	public $suppacc ;	
	public $version ;	
	public $inuse ;	
	public $approveduser ;	
	public $doctallyexcl ;	
	public $doctallyincl ;	
	public $debrefaccount ;
    public $items=array() ;


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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [ORDERDATE], [DELIVERYDATE], [DELIVERYTIME], [NAME], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [POSTALCODE], [TELEPHONE], [FAX], [EMAIL], [CONTACT], [BUYER], [TERMCODE], [REFERENCE], [ORDCARDNO], [GRVNO], [STATUS], [VATINDICATOR], [TOTALCASES], [TOTALPALLETTES], [TOTALWEIGHT], [TOTALDISCOUNT], [TOTALDIMENSION], [TOTALVAT], [TOTALEXCL], [TOTALINCL], [NOTES], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [SUGGORDEXCL], [SUGGORDINCL], [WH], [COMMMETHOD], [APPROVED], [APPROVEDATE], [APPROCEDUSER], [PAYMENTDATE], [DUEOVERRIDE], [DETAILLINES], [EXTENDEDTERMS], [EXTENDEDDAYS], [EXTENDEDDATE], [DESTCO], [DESTBRANCH], [DEBACCOUNT], [INDICATORS], [BASETYPE], [BASEREF], [SUPPACC], [VERSION], [InUse], [ApprovedUser], [DocTallyExcl], [DocTallyIncl], [DEBRefAccount] FROM [PUROrdHdr]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->orderno = $records["ORDERNO"];
				$instance->orderdate = $records["ORDERDATE"];
				$instance->deliverydate = $records["DELIVERYDATE"];
				$instance->deliverytime = $records["DELIVERYTIME"];
				$instance->name = $records["NAME"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->postalcode = $records["POSTALCODE"];
				$instance->telephone = $records["TELEPHONE"];
				$instance->fax = $records["FAX"];
				$instance->email = $records["EMAIL"];
				$instance->contact = $records["CONTACT"];
				$instance->buyer = $records["BUYER"];
				$instance->termcode = $records["TERMCODE"];
				$instance->reference = $records["REFERENCE"];
				$instance->ordcardno = $records["ORDCARDNO"];
				$instance->grvno = $records["GRVNO"];
				$instance->status = $records["STATUS"];
				$instance->vatindicator = $records["VATINDICATOR"];
				$instance->totalcases = $records["TOTALCASES"];
				$instance->totalpallettes = $records["TOTALPALLETTES"];
				$instance->totalweight = $records["TOTALWEIGHT"];
				$instance->totaldiscount = $records["TOTALDISCOUNT"];
				$instance->totaldimension = $records["TOTALDIMENSION"];
				$instance->totalvat = $records["TOTALVAT"];
				$instance->totalexcl = $records["TOTALEXCL"];
				$instance->totalincl = $records["TOTALINCL"];
				$instance->notes = $records["NOTES"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->suggordexcl = $records["SUGGORDEXCL"];
				$instance->suggordincl = $records["SUGGORDINCL"];
				$instance->wh = $records["WH"];
				$instance->commmethod = $records["COMMMETHOD"];
				$instance->approved = $records["APPROVED"];
				$instance->approvedate = $records["APPROVEDATE"];
				$instance->approceduser = $records["APPROCEDUSER"];
				$instance->paymentdate = $records["PAYMENTDATE"];
				$instance->dueoverride = $records["DUEOVERRIDE"];
				$instance->detaillines = $records["DETAILLINES"];
				$instance->extendedterms = $records["EXTENDEDTERMS"];
				$instance->extendeddays = $records["EXTENDEDDAYS"];
				$instance->extendeddate = $records["EXTENDEDDATE"];
				$instance->destco = $records["DESTCO"];
				$instance->destbranch = $records["DESTBRANCH"];
				$instance->debaccount = $records["DEBACCOUNT"];
				$instance->indicators = $records["INDICATORS"];
				$instance->basetype = $records["BASETYPE"];
				$instance->baseref = $records["BASEREF"];
				$instance->suppacc = $records["SUPPACC"];
				$instance->version = $records["VERSION"];
				$instance->inuse = $records["InUse"];
				$instance->approveduser = $records["ApprovedUser"];
				$instance->doctallyexcl = $records["DocTallyExcl"];
				$instance->doctallyincl = $records["DocTallyIncl"];
				$instance->debrefaccount = $records["DEBRefAccount"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using POSTALCODE
	*/
	public static function ini_POSTALCODE($postalcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [ORDERDATE], [DELIVERYDATE], [DELIVERYTIME], [NAME], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [POSTALCODE], [TELEPHONE], [FAX], [EMAIL], [CONTACT], [BUYER], [TERMCODE], [REFERENCE], [ORDCARDNO], [GRVNO], [STATUS], [VATINDICATOR], [TOTALCASES], [TOTALPALLETTES], [TOTALWEIGHT], [TOTALDISCOUNT], [TOTALDIMENSION], [TOTALVAT], [TOTALEXCL], [TOTALINCL], [NOTES], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [SUGGORDEXCL], [SUGGORDINCL], [WH], [COMMMETHOD], [APPROVED], [APPROVEDATE], [APPROCEDUSER], [PAYMENTDATE], [DUEOVERRIDE], [DETAILLINES], [EXTENDEDTERMS], [EXTENDEDDAYS], [EXTENDEDDATE], [DESTCO], [DESTBRANCH], [DEBACCOUNT], [INDICATORS], [BASETYPE], [BASEREF], [SUPPACC], [VERSION], [InUse], [ApprovedUser], [DocTallyExcl], [DocTallyIncl], [DEBRefAccount] FROM [PUROrdHdr]  WHERE [POSTALCODE]=:postalcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":postalcode", $postalcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->orderno = $records["ORDERNO"];
				$instance->orderdate = $records["ORDERDATE"];
				$instance->deliverydate = $records["DELIVERYDATE"];
				$instance->deliverytime = $records["DELIVERYTIME"];
				$instance->name = $records["NAME"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->postalcode = $records["POSTALCODE"];
				$instance->telephone = $records["TELEPHONE"];
				$instance->fax = $records["FAX"];
				$instance->email = $records["EMAIL"];
				$instance->contact = $records["CONTACT"];
				$instance->buyer = $records["BUYER"];
				$instance->termcode = $records["TERMCODE"];
				$instance->reference = $records["REFERENCE"];
				$instance->ordcardno = $records["ORDCARDNO"];
				$instance->grvno = $records["GRVNO"];
				$instance->status = $records["STATUS"];
				$instance->vatindicator = $records["VATINDICATOR"];
				$instance->totalcases = $records["TOTALCASES"];
				$instance->totalpallettes = $records["TOTALPALLETTES"];
				$instance->totalweight = $records["TOTALWEIGHT"];
				$instance->totaldiscount = $records["TOTALDISCOUNT"];
				$instance->totaldimension = $records["TOTALDIMENSION"];
				$instance->totalvat = $records["TOTALVAT"];
				$instance->totalexcl = $records["TOTALEXCL"];
				$instance->totalincl = $records["TOTALINCL"];
				$instance->notes = $records["NOTES"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->suggordexcl = $records["SUGGORDEXCL"];
				$instance->suggordincl = $records["SUGGORDINCL"];
				$instance->wh = $records["WH"];
				$instance->commmethod = $records["COMMMETHOD"];
				$instance->approved = $records["APPROVED"];
				$instance->approvedate = $records["APPROVEDATE"];
				$instance->approceduser = $records["APPROCEDUSER"];
				$instance->paymentdate = $records["PAYMENTDATE"];
				$instance->dueoverride = $records["DUEOVERRIDE"];
				$instance->detaillines = $records["DETAILLINES"];
				$instance->extendedterms = $records["EXTENDEDTERMS"];
				$instance->extendeddays = $records["EXTENDEDDAYS"];
				$instance->extendeddate = $records["EXTENDEDDATE"];
				$instance->destco = $records["DESTCO"];
				$instance->destbranch = $records["DESTBRANCH"];
				$instance->debaccount = $records["DEBACCOUNT"];
				$instance->indicators = $records["INDICATORS"];
				$instance->basetype = $records["BASETYPE"];
				$instance->baseref = $records["BASEREF"];
				$instance->suppacc = $records["SUPPACC"];
				$instance->version = $records["VERSION"];
				$instance->inuse = $records["InUse"];
				$instance->approveduser = $records["ApprovedUser"];
				$instance->doctallyexcl = $records["DocTallyExcl"];
				$instance->doctallyincl = $records["DocTallyIncl"];
				$instance->debrefaccount = $records["DEBRefAccount"];
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