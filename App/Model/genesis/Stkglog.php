<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	STKGLog

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public nvarchar GRVDATE" of type [nvarchar]
	"public nvarchar DOCTYPE" of type [nvarchar]
	"public nvarchar RECVDATE" of type [nvarchar]
	"public nvarchar RECVTIME" of type [nvarchar]
	"public nvarchar RECVUSER" of type [nvarchar]
	"public nvarchar RECVMACID" of type [nvarchar]
	"public nvarchar PRINTDATE" of type [nvarchar]
	"public nvarchar PRINTTIME" of type [nvarchar]
	"public nvarchar PRINTUSER" of type [nvarchar]
	"public nvarchar PRINTMACID" of type [nvarchar]
	"public nvarchar RECONDATE" of type [nvarchar]
	"public nvarchar RECONTIME" of type [nvarchar]
	"public nvarchar RECONUSER" of type [nvarchar]
	"public nvarchar RECONMACID" of type [nvarchar]
	"public nvarchar AUTHDATE" of type [nvarchar]
	"public nvarchar AUTHTIME" of type [nvarchar]
	"public nvarchar AUTHUSER" of type [nvarchar]
	"public nvarchar AUTHMACID" of type [nvarchar]
	"public nvarchar POSTDATE" of type [nvarchar]
	"public nvarchar POSTTIME" of type [nvarchar]
	"public nvarchar POSTUSER" of type [nvarchar]
	"public nvarchar POSTMACID" of type [nvarchar]
	"public nvarchar GRVTYPE" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar ScanDate" of type [nvarchar]
	"public nvarchar ScanTime" of type [nvarchar]
	"public nvarchar ScanUser" of type [nvarchar]
	"public nvarchar ScanMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkglog {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $grvno ;	
	public $grvdate ;	
	public $doctype ;	
	public $recvdate ;	
	public $recvtime ;	
	public $recvuser ;	
	public $recvmacid ;	
	public $printdate ;	
	public $printtime ;	
	public $printuser ;	
	public $printmacid ;	
	public $recondate ;	
	public $recontime ;	
	public $reconuser ;	
	public $reconmacid ;	
	public $authdate ;	
	public $authtime ;	
	public $authuser ;	
	public $authmacid ;	
	public $postdate ;	
	public $posttime ;	
	public $postuser ;	
	public $postmacid ;	
	public $grvtype ;	
	public $txtp ;	
	public $scandate ;	
	public $scantime ;	
	public $scanuser ;	
	public $scanmacid ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [GRVNO], [GRVDATE], [DOCTYPE], [RECVDATE], [RECVTIME], [RECVUSER], [RECVMACID], [PRINTDATE], [PRINTTIME], [PRINTUSER], [PRINTMACID], [RECONDATE], [RECONTIME], [RECONUSER], [RECONMACID], [AUTHDATE], [AUTHTIME], [AUTHUSER], [AUTHMACID], [POSTDATE], [POSTTIME], [POSTUSER], [POSTMACID], [GRVTYPE], [TxTp], [ScanDate], [ScanTime], [ScanUser], [ScanMacID] FROM [STKGLog]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->grvno = $records["GRVNO"];
				$instance->grvdate = $records["GRVDATE"];
				$instance->doctype = $records["DOCTYPE"];
				$instance->recvdate = $records["RECVDATE"];
				$instance->recvtime = $records["RECVTIME"];
				$instance->recvuser = $records["RECVUSER"];
				$instance->recvmacid = $records["RECVMACID"];
				$instance->printdate = $records["PRINTDATE"];
				$instance->printtime = $records["PRINTTIME"];
				$instance->printuser = $records["PRINTUSER"];
				$instance->printmacid = $records["PRINTMACID"];
				$instance->recondate = $records["RECONDATE"];
				$instance->recontime = $records["RECONTIME"];
				$instance->reconuser = $records["RECONUSER"];
				$instance->reconmacid = $records["RECONMACID"];
				$instance->authdate = $records["AUTHDATE"];
				$instance->authtime = $records["AUTHTIME"];
				$instance->authuser = $records["AUTHUSER"];
				$instance->authmacid = $records["AUTHMACID"];
				$instance->postdate = $records["POSTDATE"];
				$instance->posttime = $records["POSTTIME"];
				$instance->postuser = $records["POSTUSER"];
				$instance->postmacid = $records["POSTMACID"];
				$instance->grvtype = $records["GRVTYPE"];
				$instance->txtp = $records["TxTp"];
				$instance->scandate = $records["ScanDate"];
				$instance->scantime = $records["ScanTime"];
				$instance->scanuser = $records["ScanUser"];
				$instance->scanmacid = $records["ScanMacID"];
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