<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	DEBDispDet

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public int DISPATCHNO" of type [int]
	"public int LINENO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public nvarchar DESCRIPTION2" of type [nvarchar]
	"public nvarchar TILEITEM" of type [nvarchar]
	"public float SQMBOX" of type [float]
	"public float QUANTITY" of type [float]
	"public float UNITS" of type [float]
	"public nvarchar WH" of type [nvarchar]
	"public float INVQTY" of type [float]
	"public float DISPATCHQTY" of type [float]
	"public float DISPATCHBALANCE" of type [float]
*/
namespace genesis;


use PDO;

class Debdispdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $docno ;	
	public $dispatchno ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $tileitem ;	
	public $sqmbox ;	
	public $quantity ;	
	public $units ;	
	public $wh ;	
	public $invqty ;	
	public $dispatchqty ;	
	public $dispatchbalance ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [DOCNO], [DISPATCHNO], [LINENO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [TILEITEM], [SQMBOX], [QUANTITY], [UNITS], [WH], [INVQTY], [DISPATCHQTY], [DISPATCHBALANCE] FROM [DEBDispDet]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->docno = $records["DOCNO"];
				$instance->dispatchno = $records["DISPATCHNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->tileitem = $records["TILEITEM"];
				$instance->sqmbox = $records["SQMBOX"];
				$instance->quantity = $records["QUANTITY"];
				$instance->units = $records["UNITS"];
				$instance->wh = $records["WH"];
				$instance->invqty = $records["INVQTY"];
				$instance->dispatchqty = $records["DISPATCHQTY"];
				$instance->dispatchbalance = $records["DISPATCHBALANCE"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [DOCNO], [DISPATCHNO], [LINENO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [TILEITEM], [SQMBOX], [QUANTITY], [UNITS], [WH], [INVQTY], [DISPATCHQTY], [DISPATCHBALANCE] FROM [DEBDispDet]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->docno = $records["DOCNO"];
				$instance->dispatchno = $records["DISPATCHNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->tileitem = $records["TILEITEM"];
				$instance->sqmbox = $records["SQMBOX"];
				$instance->quantity = $records["QUANTITY"];
				$instance->units = $records["UNITS"];
				$instance->wh = $records["WH"];
				$instance->invqty = $records["INVQTY"];
				$instance->dispatchqty = $records["DISPATCHQTY"];
				$instance->dispatchbalance = $records["DISPATCHBALANCE"];
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
			$res = $this->description1;
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