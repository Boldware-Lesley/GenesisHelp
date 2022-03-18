<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	PUROrdDiary

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public int ORDERNO" of type [int]
	"public nvarchar ENTRYDATE" of type [nvarchar]
	"public nvarchar ENTRYTIME" of type [nvarchar]
	"public nvarchar DETAILS" of type [nvarchar]
	"public nvarchar SALESREPNAME" of type [nvarchar]
	"public nvarchar SALESREPPHONE" of type [nvarchar]
	"public nvarchar FAXNUMBER" of type [nvarchar]
	"public nvarchar FAXDATE" of type [nvarchar]
	"public nvarchar FAXTIME" of type [nvarchar]
	"public ntext NOTES" of type [ntext]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Purorddiary {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $orderno ;	
	public $entrydate ;	
	public $entrytime ;	
	public $details ;	
	public $salesrepname ;	
	public $salesrepphone ;	
	public $faxnumber ;	
	public $faxdate ;	
	public $faxtime ;	
	public $notes ;	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [ENTRYDATE], [ENTRYTIME], [DETAILS], [SALESREPNAME], [SALESREPPHONE], [FAXNUMBER], [FAXDATE], [FAXTIME], [NOTES], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [PUROrdDiary]  WHERE [RECID]=:recid  ";
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
				$instance->entrydate = $records["ENTRYDATE"];
				$instance->entrytime = $records["ENTRYTIME"];
				$instance->details = $records["DETAILS"];
				$instance->salesrepname = $records["SALESREPNAME"];
				$instance->salesrepphone = $records["SALESREPPHONE"];
				$instance->faxnumber = $records["FAXNUMBER"];
				$instance->faxdate = $records["FAXDATE"];
				$instance->faxtime = $records["FAXTIME"];
				$instance->notes = $records["NOTES"];
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
	Main Constructor For Declearing Using FAXNUMBER
	*/
	public static function ini_FAXNUMBER($faxnumber) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [ENTRYDATE], [ENTRYTIME], [DETAILS], [SALESREPNAME], [SALESREPPHONE], [FAXNUMBER], [FAXDATE], [FAXTIME], [NOTES], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [PUROrdDiary]  WHERE [FAXNUMBER]=:faxnumber  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":faxnumber", $faxnumber);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->orderno = $records["ORDERNO"];
				$instance->entrydate = $records["ENTRYDATE"];
				$instance->entrytime = $records["ENTRYTIME"];
				$instance->details = $records["DETAILS"];
				$instance->salesrepname = $records["SALESREPNAME"];
				$instance->salesrepphone = $records["SALESREPPHONE"];
				$instance->faxnumber = $records["FAXNUMBER"];
				$instance->faxdate = $records["FAXDATE"];
				$instance->faxtime = $records["FAXTIME"];
				$instance->notes = $records["NOTES"];
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
			$res = $this->salesrepname;
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