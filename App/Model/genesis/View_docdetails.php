<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	View_DocDetails

[@Descriptions]
Class is using the following global variables:
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar StockType" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public int Units" of type [int]
	"public float QTY" of type [float]
	"public float TotalCostExcl" of type [float]
	"public float TotalCostIncl" of type [float]
	"public float TotalSalesExcl" of type [float]
	"public float TotalSalesIncl" of type [float]
	"public float TotalProfitExcl" of type [float]
	"public float RebAvgAmnt" of type [float]
	"public float NettProfit" of type [float]
*/
namespace genesis;


use PDO;

class View_docdetails {
	
	/*BEGIN <<Private Variables>> */
	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $drcr ;	
	public $account ;	
	public $ap ;	
	public $stocktype ;	
	public $stockcode ;	
	public $linkcode ;	
	public $units ;	
	public $qty ;	
	public $totalcostexcl ;	
	public $totalcostincl ;	
	public $totalsalesexcl ;	
	public $totalsalesincl ;	
	public $totalprofitexcl ;	
	public $rebavgamnt ;	
	public $nettprofit ;	
	
	
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
			$query = " SELECT CO, [Branch], [TxTp], [DrCr], [Account], [AP], [StockType], [StockCode], [LinkCode], [Units], [QTY], [TotalCostExcl], [TotalCostIncl], [TotalSalesExcl], [TotalSalesIncl], [TotalProfitExcl], [RebAvgAmnt], [NettProfit] FROM [View_DocDetails]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->drcr = $records["DrCr"];
				$instance->account = $records["Account"];
				$instance->ap = $records["AP"];
				$instance->stocktype = $records["StockType"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->units = $records["Units"];
				$instance->qty = $records["QTY"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->totalcostincl = $records["TotalCostIncl"];
				$instance->totalsalesexcl = $records["TotalSalesExcl"];
				$instance->totalsalesincl = $records["TotalSalesIncl"];
				$instance->totalprofitexcl = $records["TotalProfitExcl"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->nettprofit = $records["NettProfit"];
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
			$query = " SELECT CO, [Branch], [TxTp], [DrCr], [Account], [AP], [StockType], [StockCode], [LinkCode], [Units], [QTY], [TotalCostExcl], [TotalCostIncl], [TotalSalesExcl], [TotalSalesIncl], [TotalProfitExcl], [RebAvgAmnt], [NettProfit] FROM [View_DocDetails]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->drcr = $records["DrCr"];
				$instance->account = $records["Account"];
				$instance->ap = $records["AP"];
				$instance->stocktype = $records["StockType"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->units = $records["Units"];
				$instance->qty = $records["QTY"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->totalcostincl = $records["TotalCostIncl"];
				$instance->totalsalesexcl = $records["TotalSalesExcl"];
				$instance->totalsalesincl = $records["TotalSalesIncl"];
				$instance->totalprofitexcl = $records["TotalProfitExcl"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->nettprofit = $records["NettProfit"];
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