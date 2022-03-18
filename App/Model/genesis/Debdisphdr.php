<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	DEBDispHdr

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public int DISPATCHNO" of type [int]
	"public nvarchar DISPDATE" of type [nvarchar]
	"public int PRINTCOUNT" of type [int]
	"public nvarchar ADDRESS1" of type [nvarchar]
	"public nvarchar ADDRESS2" of type [nvarchar]
	"public nvarchar ADDRESS3" of type [nvarchar]
	"public nvarchar ADDRESS4" of type [nvarchar]
	"public nvarchar POSTCODE" of type [nvarchar]
	"public nvarchar NOTES" of type [nvarchar]
	"public nvarchar WH" of type [nvarchar]
	"public int IBTNO" of type [int]
	"public nvarchar FROMBRANCH" of type [nvarchar]
	"public nvarchar TOBRANCH" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public int DETAILLINES" of type [int]
	"public nvarchar AUTHUSER" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debdisphdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $name ;	
	public $txtp ;	
	public $docno ;	
	public $dispatchno ;	
	public $dispdate ;	
	public $printcount ;	
	public $address1 ;	
	public $address2 ;	
	public $address3 ;	
	public $address4 ;	
	public $postcode ;	
	public $notes ;	
	public $wh ;	
	public $ibtno ;	
	public $frombranch ;	
	public $tobranch ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $detaillines ;	
	public $authuser ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [NAME], [TXTP], [DOCNO], [DISPATCHNO], [DISPDATE], [PRINTCOUNT], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [POSTCODE], [NOTES], [WH], [IBTNO], [FROMBRANCH], [TOBRANCH], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [DETAILLINES], [AUTHUSER] FROM [DEBDispHdr]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->txtp = $records["TXTP"];
				$instance->docno = $records["DOCNO"];
				$instance->dispatchno = $records["DISPATCHNO"];
				$instance->dispdate = $records["DISPDATE"];
				$instance->printcount = $records["PRINTCOUNT"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->postcode = $records["POSTCODE"];
				$instance->notes = $records["NOTES"];
				$instance->wh = $records["WH"];
				$instance->ibtno = $records["IBTNO"];
				$instance->frombranch = $records["FROMBRANCH"];
				$instance->tobranch = $records["TOBRANCH"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->detaillines = $records["DETAILLINES"];
				$instance->authuser = $records["AUTHUSER"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using POSTCODE
	*/
	public static function ini_POSTCODE($postcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [NAME], [TXTP], [DOCNO], [DISPATCHNO], [DISPDATE], [PRINTCOUNT], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [POSTCODE], [NOTES], [WH], [IBTNO], [FROMBRANCH], [TOBRANCH], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [DETAILLINES], [AUTHUSER] FROM [DEBDispHdr]  WHERE [POSTCODE]=:postcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":postcode", $postcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->txtp = $records["TXTP"];
				$instance->docno = $records["DOCNO"];
				$instance->dispatchno = $records["DISPATCHNO"];
				$instance->dispdate = $records["DISPDATE"];
				$instance->printcount = $records["PRINTCOUNT"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->postcode = $records["POSTCODE"];
				$instance->notes = $records["NOTES"];
				$instance->wh = $records["WH"];
				$instance->ibtno = $records["IBTNO"];
				$instance->frombranch = $records["FROMBRANCH"];
				$instance->tobranch = $records["TOBRANCH"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->detaillines = $records["DETAILLINES"];
				$instance->authuser = $records["AUTHUSER"];
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