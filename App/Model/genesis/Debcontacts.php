<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	DEBContacts

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar DEBTORTYPE" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TITLE" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar SURNAME" of type [nvarchar]
	"public nvarchar BIRTHDAY" of type [nvarchar]
	"public nvarchar DESIGNATION" of type [nvarchar]
	"public nvarchar RESTELCODE1" of type [nvarchar]
	"public nvarchar RESTELPHONE1" of type [nvarchar]
	"public nvarchar RESTELCODE2" of type [nvarchar]
	"public nvarchar RESTELPHONE2" of type [nvarchar]
	"public nvarchar BIZTELCODE1" of type [nvarchar]
	"public nvarchar BIZTELPHONE1" of type [nvarchar]
	"public nvarchar CELLPHONE" of type [nvarchar]
	"public nvarchar BIZFAXCODE1" of type [nvarchar]
	"public nvarchar BIZFAX" of type [nvarchar]
	"public nvarchar DEPARTMENT" of type [nvarchar]
	"public nvarchar EMAIL" of type [nvarchar]
	"public nvarchar WEBSITE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar TELPHONE" of type [nvarchar]
	"public nvarchar FAX" of type [nvarchar]
	"public nvarchar MailStmt" of type [nvarchar]
	"public nvarchar MailInv" of type [nvarchar]
	"public nvarchar MailOTP" of type [nvarchar]
	"public nvarchar SMSOTP" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public int PrtySeq" of type [int]
	"public nvarchar SMSTxans" of type [nvarchar]
	"public nvarchar SMSMarketing" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debcontacts {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $debtortype ;	
	public $account ;	
	public $title ;	
	public $name ;	
	public $surname ;	
	public $birthday ;	
	public $designation ;	
	public $restelcode1 ;	
	public $restelphone1 ;	
	public $restelcode2 ;	
	public $restelphone2 ;	
	public $biztelcode1 ;	
	public $biztelphone1 ;	
	public $cellphone ;	
	public $bizfaxcode1 ;	
	public $bizfax ;	
	public $department ;	
	public $email ;	
	public $website ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $telphone ;	
	public $fax ;	
	public $mailstmt ;	
	public $mailinv ;	
	public $mailotp ;	
	public $smsotp ;	
	public $status ;	
	public $prtyseq ;	
	public $smstxans ;	
	public $smsmarketing ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [DEBTORTYPE], [ACCOUNT], [TITLE], [NAME], [SURNAME], [BIRTHDAY], [DESIGNATION], [RESTELCODE1], [RESTELPHONE1], [RESTELCODE2], [RESTELPHONE2], [BIZTELCODE1], [BIZTELPHONE1], [CELLPHONE], [BIZFAXCODE1], [BIZFAX], [DEPARTMENT], [EMAIL], [WEBSITE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [TELPHONE], [FAX], [MailStmt], [MailInv], [MailOTP], [SMSOTP], [Status], [PrtySeq], [SMSTxans], [SMSMarketing] FROM [DEBContacts]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->debtortype = $records["DEBTORTYPE"];
				$instance->account = $records["ACCOUNT"];
				$instance->title = $records["TITLE"];
				$instance->name = $records["NAME"];
				$instance->surname = $records["SURNAME"];
				$instance->birthday = $records["BIRTHDAY"];
				$instance->designation = $records["DESIGNATION"];
				$instance->restelcode1 = $records["RESTELCODE1"];
				$instance->restelphone1 = $records["RESTELPHONE1"];
				$instance->restelcode2 = $records["RESTELCODE2"];
				$instance->restelphone2 = $records["RESTELPHONE2"];
				$instance->biztelcode1 = $records["BIZTELCODE1"];
				$instance->biztelphone1 = $records["BIZTELPHONE1"];
				$instance->cellphone = $records["CELLPHONE"];
				$instance->bizfaxcode1 = $records["BIZFAXCODE1"];
				$instance->bizfax = $records["BIZFAX"];
				$instance->department = $records["DEPARTMENT"];
				$instance->email = $records["EMAIL"];
				$instance->website = $records["WEBSITE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->telphone = $records["TELPHONE"];
				$instance->fax = $records["FAX"];
				$instance->mailstmt = $records["MailStmt"];
				$instance->mailinv = $records["MailInv"];
				$instance->mailotp = $records["MailOTP"];
				$instance->smsotp = $records["SMSOTP"];
				$instance->status = $records["Status"];
				$instance->prtyseq = $records["PrtySeq"];
				$instance->smstxans = $records["SMSTxans"];
				$instance->smsmarketing = $records["SMSMarketing"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using RESTELCODE1
	*/
	public static function ini_RESTELCODE1($restelcode1) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [DEBTORTYPE], [ACCOUNT], [TITLE], [NAME], [SURNAME], [BIRTHDAY], [DESIGNATION], [RESTELCODE1], [RESTELPHONE1], [RESTELCODE2], [RESTELPHONE2], [BIZTELCODE1], [BIZTELPHONE1], [CELLPHONE], [BIZFAXCODE1], [BIZFAX], [DEPARTMENT], [EMAIL], [WEBSITE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [TELPHONE], [FAX], [MailStmt], [MailInv], [MailOTP], [SMSOTP], [Status], [PrtySeq], [SMSTxans], [SMSMarketing] FROM [DEBContacts]  WHERE [RESTELCODE1]=:restelcode1  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":restelcode1", $restelcode1);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->debtortype = $records["DEBTORTYPE"];
				$instance->account = $records["ACCOUNT"];
				$instance->title = $records["TITLE"];
				$instance->name = $records["NAME"];
				$instance->surname = $records["SURNAME"];
				$instance->birthday = $records["BIRTHDAY"];
				$instance->designation = $records["DESIGNATION"];
				$instance->restelcode1 = $records["RESTELCODE1"];
				$instance->restelphone1 = $records["RESTELPHONE1"];
				$instance->restelcode2 = $records["RESTELCODE2"];
				$instance->restelphone2 = $records["RESTELPHONE2"];
				$instance->biztelcode1 = $records["BIZTELCODE1"];
				$instance->biztelphone1 = $records["BIZTELPHONE1"];
				$instance->cellphone = $records["CELLPHONE"];
				$instance->bizfaxcode1 = $records["BIZFAXCODE1"];
				$instance->bizfax = $records["BIZFAX"];
				$instance->department = $records["DEPARTMENT"];
				$instance->email = $records["EMAIL"];
				$instance->website = $records["WEBSITE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->telphone = $records["TELPHONE"];
				$instance->fax = $records["FAX"];
				$instance->mailstmt = $records["MailStmt"];
				$instance->mailinv = $records["MailInv"];
				$instance->mailotp = $records["MailOTP"];
				$instance->smsotp = $records["SMSOTP"];
				$instance->status = $records["Status"];
				$instance->prtyseq = $records["PrtySeq"];
				$instance->smstxans = $records["SMSTxans"];
				$instance->smsmarketing = $records["SMSMarketing"];
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
			$res = $this->title;
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