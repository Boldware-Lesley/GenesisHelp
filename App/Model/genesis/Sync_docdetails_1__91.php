<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	SYNC_DOCDetails_1__91

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public float Quantity" of type [float]
	"public float LineTotalExcl" of type [float]
	"public float LineTotalIncl" of type [float]
	"public float LinkQty" of type [float]
	"public float TotalCostExcl" of type [float]
	"public float TotalCostIncl" of type [float]
	"public float Profit" of type [float]
	"public int Units" of type [int]
	"public nvarchar StockType" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar Promotion" of type [nvarchar]
	"public nvarchar DrCr" of type [nvarchar]
	"public float RebAvgAmnt" of type [float]
	"public int LoyaltyPnts" of type [int]
*/
namespace genesis;


use PDO;

class Sync_docdetails_1__91 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $docno ;	
	public $account ;	
	public $trandate ;	
	public $stockcode ;	
	public $linkcode ;	
	public $quantity ;	
	public $linetotalexcl ;	
	public $linetotalincl ;	
	public $linkqty ;	
	public $totalcostexcl ;	
	public $totalcostincl ;	
	public $profit ;	
	public $units ;	
	public $stocktype ;	
	public $ap ;	
	public $promotion ;	
	public $drcr ;	
	public $rebavgamnt ;	
	public $loyaltypnts ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [DocNo], [Account], [TranDate], [StockCode], [LinkCode], [Quantity], [LineTotalExcl], [LineTotalIncl], [LinkQty], [TotalCostExcl], [TotalCostIncl], [Profit], [Units], [StockType], [AP], [Promotion], [DrCr], [RebAvgAmnt], [LoyaltyPnts] FROM [SYNC_DOCDetails_1__91]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->trandate = $records["TranDate"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->quantity = $records["Quantity"];
				$instance->linetotalexcl = $records["LineTotalExcl"];
				$instance->linetotalincl = $records["LineTotalIncl"];
				$instance->linkqty = $records["LinkQty"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->totalcostincl = $records["TotalCostIncl"];
				$instance->profit = $records["Profit"];
				$instance->units = $records["Units"];
				$instance->stocktype = $records["StockType"];
				$instance->ap = $records["AP"];
				$instance->promotion = $records["Promotion"];
				$instance->drcr = $records["DrCr"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->loyaltypnts = $records["LoyaltyPnts"];
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [DocNo], [Account], [TranDate], [StockCode], [LinkCode], [Quantity], [LineTotalExcl], [LineTotalIncl], [LinkQty], [TotalCostExcl], [TotalCostIncl], [Profit], [Units], [StockType], [AP], [Promotion], [DrCr], [RebAvgAmnt], [LoyaltyPnts] FROM [SYNC_DOCDetails_1__91]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->trandate = $records["TranDate"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->quantity = $records["Quantity"];
				$instance->linetotalexcl = $records["LineTotalExcl"];
				$instance->linetotalincl = $records["LineTotalIncl"];
				$instance->linkqty = $records["LinkQty"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->totalcostincl = $records["TotalCostIncl"];
				$instance->profit = $records["Profit"];
				$instance->units = $records["Units"];
				$instance->stocktype = $records["StockType"];
				$instance->ap = $records["AP"];
				$instance->promotion = $records["Promotion"];
				$instance->drcr = $records["DrCr"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->loyaltypnts = $records["LoyaltyPnts"];
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