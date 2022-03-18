<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	SYNC_STKGrvDetl_1__132

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar STOCKTYPE" of type [nvarchar]
	"public float RECVQTY" of type [float]
	"public float RECVFREEQTY" of type [float]
	"public float RECVPRICE" of type [float]
	"public float RECVDISCOUNT" of type [float]
	"public float RECVTOTAL" of type [float]
	"public float RECVTAX" of type [float]
	"public float RECVNETUNIT" of type [float]
	"public float RECVNNET" of type [float]
	"public float UNITS" of type [float]
	"public nvarchar RECVTAXCODE" of type [nvarchar]
	"public float RECVTOTALINCL" of type [float]
	"public float RECVDOCCHARGES" of type [float]
	"public float RECVDOCDISC" of type [float]
	"public int AP" of type [int]
*/
namespace genesis;


use PDO;

class Sync_stkgrvdetl_1__132 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $grvno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $stocktype ;	
	public $recvqty ;	
	public $recvfreeqty ;	
	public $recvprice ;	
	public $recvdiscount ;	
	public $recvtotal ;	
	public $recvtax ;	
	public $recvnetunit ;	
	public $recvnnet ;	
	public $units ;	
	public $recvtaxcode ;	
	public $recvtotalincl ;	
	public $recvdoccharges ;	
	public $recvdocdisc ;	
	public $ap ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [STOCKCODE], [LINKCODE], [STOCKTYPE], [RECVQTY], [RECVFREEQTY], [RECVPRICE], [RECVDISCOUNT], [RECVTOTAL], [RECVTAX], [RECVNETUNIT], [RECVNNET], [UNITS], [RECVTAXCODE], [RECVTOTALINCL], [RECVDOCCHARGES], [RECVDOCDISC], [AP] FROM [SYNC_STKGrvDetl_1__132]  WHERE [RECID]=:recid  ";
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
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->stocktype = $records["STOCKTYPE"];
				$instance->recvqty = $records["RECVQTY"];
				$instance->recvfreeqty = $records["RECVFREEQTY"];
				$instance->recvprice = $records["RECVPRICE"];
				$instance->recvdiscount = $records["RECVDISCOUNT"];
				$instance->recvtotal = $records["RECVTOTAL"];
				$instance->recvtax = $records["RECVTAX"];
				$instance->recvnetunit = $records["RECVNETUNIT"];
				$instance->recvnnet = $records["RECVNNET"];
				$instance->units = $records["UNITS"];
				$instance->recvtaxcode = $records["RECVTAXCODE"];
				$instance->recvtotalincl = $records["RECVTOTALINCL"];
				$instance->recvdoccharges = $records["RECVDOCCHARGES"];
				$instance->recvdocdisc = $records["RECVDOCDISC"];
				$instance->ap = $records["AP"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [STOCKCODE], [LINKCODE], [STOCKTYPE], [RECVQTY], [RECVFREEQTY], [RECVPRICE], [RECVDISCOUNT], [RECVTOTAL], [RECVTAX], [RECVNETUNIT], [RECVNNET], [UNITS], [RECVTAXCODE], [RECVTOTALINCL], [RECVDOCCHARGES], [RECVDOCDISC], [AP] FROM [SYNC_STKGrvDetl_1__132]  WHERE [STOCKCODE]=:stockcode  ";
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
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->stocktype = $records["STOCKTYPE"];
				$instance->recvqty = $records["RECVQTY"];
				$instance->recvfreeqty = $records["RECVFREEQTY"];
				$instance->recvprice = $records["RECVPRICE"];
				$instance->recvdiscount = $records["RECVDISCOUNT"];
				$instance->recvtotal = $records["RECVTOTAL"];
				$instance->recvtax = $records["RECVTAX"];
				$instance->recvnetunit = $records["RECVNETUNIT"];
				$instance->recvnnet = $records["RECVNNET"];
				$instance->units = $records["UNITS"];
				$instance->recvtaxcode = $records["RECVTAXCODE"];
				$instance->recvtotalincl = $records["RECVTOTALINCL"];
				$instance->recvdoccharges = $records["RECVDOCCHARGES"];
				$instance->recvdocdisc = $records["RECVDOCDISC"];
				$instance->ap = $records["AP"];
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