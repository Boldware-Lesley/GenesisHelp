<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	STKGrvDSer

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public int LINENO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar SERIALNO" of type [nvarchar]
	"public nvarchar RECVDATE" of type [nvarchar]
	"public int PERIOD" of type [int]
	"public nvarchar EXPIREDATE" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkgrvdser {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $grvno ;	
	public $lineno ;	
	public $stockcode ;	
	public $serialno ;	
	public $recvdate ;	
	public $period ;	
	public $expiredate ;	
	public $linkcode ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [SERIALNO], [RECVDATE], [PERIOD], [EXPIREDATE], [LinkCode] FROM [STKGrvDSer]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->serialno = $records["SERIALNO"];
				$instance->recvdate = $records["RECVDATE"];
				$instance->period = $records["PERIOD"];
				$instance->expiredate = $records["EXPIREDATE"];
				$instance->linkcode = $records["LinkCode"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [SERIALNO], [RECVDATE], [PERIOD], [EXPIREDATE], [LinkCode] FROM [STKGrvDSer]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->serialno = $records["SERIALNO"];
				$instance->recvdate = $records["RECVDATE"];
				$instance->period = $records["PERIOD"];
				$instance->expiredate = $records["EXPIREDATE"];
				$instance->linkcode = $records["LinkCode"];
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