<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	CRDClaimHdr

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public nvarchar SOURCEBRANCH" of type [nvarchar]
	"public int CLAIMNO" of type [int]
	"public nvarchar CLAIMDATE" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar ADDRESS1" of type [nvarchar]
	"public nvarchar ADDRESS2" of type [nvarchar]
	"public nvarchar ADDRESS3" of type [nvarchar]
	"public nvarchar ADDRESS4" of type [nvarchar]
	"public nvarchar TELEPHONE" of type [nvarchar]
	"public nvarchar FAX" of type [nvarchar]
	"public nvarchar CONTACT" of type [nvarchar]
	"public nvarchar REFERENCE" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public nvarchar SUPPDOCNO" of type [nvarchar]
	"public nvarchar CLAIMTYPE" of type [nvarchar]
	"public nvarchar CLAIMCODE" of type [nvarchar]
	"public float GLTRACENO" of type [float]
	"public nvarchar GLACNO" of type [nvarchar]
	"public nvarchar UNALLOC" of type [nvarchar]
	"public float TOTALINCL" of type [float]
	"public float TOTALEXCL" of type [float]
	"public float VATAMOUNT" of type [float]
	"public nvarchar VATINDICATOR" of type [nvarchar]
	"public nvarchar EXGLACNO" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public char CLAIMDUEDATE" of type [char]
	"public nvarchar POSTDATE" of type [nvarchar]
	"public nvarchar Terms" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public int GLSubAccNo" of type [int]
	"public nvarchar LinkAccount" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdclaimhdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $sourcebranch ;	
	public $claimno ;	
	public $claimdate ;	
	public $name ;	
	public $address1 ;	
	public $address2 ;	
	public $address3 ;	
	public $address4 ;	
	public $telephone ;	
	public $fax ;	
	public $contact ;	
	public $reference ;	
	public $grvno ;	
	public $suppdocno ;	
	public $claimtype ;	
	public $claimcode ;	
	public $gltraceno ;	
	public $glacno ;	
	public $unalloc ;	
	public $totalincl ;	
	public $totalexcl ;	
	public $vatamount ;	
	public $vatindicator ;	
	public $exglacno ;	
	public $status ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $claimduedate ;	
	public $postdate ;	
	public $terms ;	
	public $notes ;	
	public $glsubaccno ;	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [SOURCEBRANCH], [CLAIMNO], [CLAIMDATE], [NAME], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [TELEPHONE], [FAX], [CONTACT], [REFERENCE], [GRVNO], [SUPPDOCNO], [CLAIMTYPE], [CLAIMCODE], [GLTRACENO], [GLACNO], [UNALLOC], [TOTALINCL], [TOTALEXCL], [VATAMOUNT], [VATINDICATOR], [EXGLACNO], [STATUS], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [CLAIMDUEDATE], [POSTDATE], [Terms], [Notes], [GLSubAccNo], [LinkAccount] FROM [CRDClaimHdr]  WHERE [RECID]=:recid  ";
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
				$instance->claimno = $records["CLAIMNO"];
				$instance->claimdate = $records["CLAIMDATE"];
				$instance->name = $records["NAME"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->telephone = $records["TELEPHONE"];
				$instance->fax = $records["FAX"];
				$instance->contact = $records["CONTACT"];
				$instance->reference = $records["REFERENCE"];
				$instance->grvno = $records["GRVNO"];
				$instance->suppdocno = $records["SUPPDOCNO"];
				$instance->claimtype = $records["CLAIMTYPE"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->gltraceno = $records["GLTRACENO"];
				$instance->glacno = $records["GLACNO"];
				$instance->unalloc = $records["UNALLOC"];
				$instance->totalincl = $records["TOTALINCL"];
				$instance->totalexcl = $records["TOTALEXCL"];
				$instance->vatamount = $records["VATAMOUNT"];
				$instance->vatindicator = $records["VATINDICATOR"];
				$instance->exglacno = $records["EXGLACNO"];
				$instance->status = $records["STATUS"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->claimduedate = $records["CLAIMDUEDATE"];
				$instance->postdate = $records["POSTDATE"];
				$instance->terms = $records["Terms"];
				$instance->notes = $records["Notes"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->linkaccount = $records["LinkAccount"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CLAIMCODE
	*/
	public static function ini_CLAIMCODE($claimcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [SOURCEBRANCH], [CLAIMNO], [CLAIMDATE], [NAME], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [TELEPHONE], [FAX], [CONTACT], [REFERENCE], [GRVNO], [SUPPDOCNO], [CLAIMTYPE], [CLAIMCODE], [GLTRACENO], [GLACNO], [UNALLOC], [TOTALINCL], [TOTALEXCL], [VATAMOUNT], [VATINDICATOR], [EXGLACNO], [STATUS], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [CLAIMDUEDATE], [POSTDATE], [Terms], [Notes], [GLSubAccNo], [LinkAccount] FROM [CRDClaimHdr]  WHERE [CLAIMCODE]=:claimcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":claimcode", $claimcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->sourcebranch = $records["SOURCEBRANCH"];
				$instance->claimno = $records["CLAIMNO"];
				$instance->claimdate = $records["CLAIMDATE"];
				$instance->name = $records["NAME"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->telephone = $records["TELEPHONE"];
				$instance->fax = $records["FAX"];
				$instance->contact = $records["CONTACT"];
				$instance->reference = $records["REFERENCE"];
				$instance->grvno = $records["GRVNO"];
				$instance->suppdocno = $records["SUPPDOCNO"];
				$instance->claimtype = $records["CLAIMTYPE"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->gltraceno = $records["GLTRACENO"];
				$instance->glacno = $records["GLACNO"];
				$instance->unalloc = $records["UNALLOC"];
				$instance->totalincl = $records["TOTALINCL"];
				$instance->totalexcl = $records["TOTALEXCL"];
				$instance->vatamount = $records["VATAMOUNT"];
				$instance->vatindicator = $records["VATINDICATOR"];
				$instance->exglacno = $records["EXGLACNO"];
				$instance->status = $records["STATUS"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->claimduedate = $records["CLAIMDUEDATE"];
				$instance->postdate = $records["POSTDATE"];
				$instance->terms = $records["Terms"];
				$instance->notes = $records["Notes"];
				$instance->glsubaccno = $records["GLSubAccNo"];
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