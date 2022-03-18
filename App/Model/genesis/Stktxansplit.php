<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	STKTxanSplit

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public int Singles" of type [int]
	"public int QtySold" of type [int]
	"public int QtyBalance" of type [int]
	"public nvarchar LastTxTp" of type [nvarchar]
	"public nvarchar LastDocNo" of type [nvarchar]
	"public nvarchar LastDocDate" of type [nvarchar]
	"public int LastSoldQty" of type [int]
	"public float LastPriceExcl" of type [float]
	"public float LastPriceIncl" of type [float]
	"public nvarchar STKTxanDate" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Version" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stktxansplit {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $singles ;	
	public $qtysold ;	
	public $qtybalance ;	
	public $lasttxtp ;	
	public $lastdocno ;	
	public $lastdocdate ;	
	public $lastsoldqty ;	
	public $lastpriceexcl ;	
	public $lastpriceincl ;	
	public $stktxandate ;	
	public $status ;	
	public $version ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RecID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [Singles], [QtySold], [QtyBalance], [LastTxTp], [LastDocNo], [LastDocDate], [LastSoldQty], [LastPriceExcl], [LastPriceIncl], [STKTxanDate], [Status], [Version], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [STKTxanSplit]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->singles = $records["Singles"];
				$instance->qtysold = $records["QtySold"];
				$instance->qtybalance = $records["QtyBalance"];
				$instance->lasttxtp = $records["LastTxTp"];
				$instance->lastdocno = $records["LastDocNo"];
				$instance->lastdocdate = $records["LastDocDate"];
				$instance->lastsoldqty = $records["LastSoldQty"];
				$instance->lastpriceexcl = $records["LastPriceExcl"];
				$instance->lastpriceincl = $records["LastPriceIncl"];
				$instance->stktxandate = $records["STKTxanDate"];
				$instance->status = $records["Status"];
				$instance->version = $records["Version"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using StockCode
	*/
	public static function ini_StockCode($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [Singles], [QtySold], [QtyBalance], [LastTxTp], [LastDocNo], [LastDocDate], [LastSoldQty], [LastPriceExcl], [LastPriceIncl], [STKTxanDate], [Status], [Version], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [STKTxanSplit]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->singles = $records["Singles"];
				$instance->qtysold = $records["QtySold"];
				$instance->qtybalance = $records["QtyBalance"];
				$instance->lasttxtp = $records["LastTxTp"];
				$instance->lastdocno = $records["LastDocNo"];
				$instance->lastdocdate = $records["LastDocDate"];
				$instance->lastsoldqty = $records["LastSoldQty"];
				$instance->lastpriceexcl = $records["LastPriceExcl"];
				$instance->lastpriceincl = $records["LastPriceIncl"];
				$instance->stktxandate = $records["STKTxanDate"];
				$instance->status = $records["Status"];
				$instance->version = $records["Version"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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