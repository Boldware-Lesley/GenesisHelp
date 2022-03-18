<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	ORDSubCodes

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar TILLNO" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public int LINENO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar STOCKTYPE" of type [nvarchar]
	"public nvarchar MAINCODE" of type [nvarchar]
	"public nvarchar SUBCODE" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Ordsubcodes {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $tillno ;	
	public $docno ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $stocktype ;	
	public $maincode ;	
	public $subcode ;	
	public $status ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [TXTP], [TILLNO], [DOCNO], [LINENO], [STOCKCODE], [LINKCODE], [STOCKTYPE], [MAINCODE], [SUBCODE], [STATUS] FROM [ORDSubCodes]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->txtp = $records["TXTP"];
				$instance->tillno = $records["TILLNO"];
				$instance->docno = $records["DOCNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->stocktype = $records["STOCKTYPE"];
				$instance->maincode = $records["MAINCODE"];
				$instance->subcode = $records["SUBCODE"];
				$instance->status = $records["STATUS"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [TXTP], [TILLNO], [DOCNO], [LINENO], [STOCKCODE], [LINKCODE], [STOCKTYPE], [MAINCODE], [SUBCODE], [STATUS] FROM [ORDSubCodes]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->txtp = $records["TXTP"];
				$instance->tillno = $records["TILLNO"];
				$instance->docno = $records["DOCNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->stocktype = $records["STOCKTYPE"];
				$instance->maincode = $records["MAINCODE"];
				$instance->subcode = $records["SUBCODE"];
				$instance->status = $records["STATUS"];
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