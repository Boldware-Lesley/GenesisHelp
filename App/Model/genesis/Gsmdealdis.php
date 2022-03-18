<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	GSMDealDis

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public int DEALNO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public int SEQNO" of type [int]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar DISCMETHOD" of type [nvarchar]
	"public nvarchar DISCTYPE" of type [nvarchar]
	"public float DISCOUNT" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public int SEQUENCE" of type [int]
*/
namespace genesis;


use PDO;

class Gsmdealdis {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $dealno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $seqno ;	
	public $description ;	
	public $discmethod ;	
	public $disctype ;	
	public $discount ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $account ;	
	public $subaccount ;	
	public $sequence ;	
	
	
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
			$query = " SELECT RECID, [DEALNO], [STOCKCODE], [LINKCODE], [SEQNO], [DESCRIPTION], [DISCMETHOD], [DISCTYPE], [DISCOUNT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [ACCOUNT], [SUBACCOUNT], [SEQUENCE] FROM [GSMDealDis]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->dealno = $records["DEALNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->seqno = $records["SEQNO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->discmethod = $records["DISCMETHOD"];
				$instance->disctype = $records["DISCTYPE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->sequence = $records["SEQUENCE"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using STOCKCODE
	*/
	public static function ini_STOCKCODE($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [DEALNO], [STOCKCODE], [LINKCODE], [SEQNO], [DESCRIPTION], [DISCMETHOD], [DISCTYPE], [DISCOUNT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [ACCOUNT], [SUBACCOUNT], [SEQUENCE] FROM [GSMDealDis]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->dealno = $records["DEALNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->seqno = $records["SEQNO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->discmethod = $records["DISCMETHOD"];
				$instance->disctype = $records["DISCTYPE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->sequence = $records["SEQUENCE"];
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
			$res = $this->description;
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