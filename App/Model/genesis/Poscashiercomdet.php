<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	POSCashierComDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int ComNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar CashierName" of type [nvarchar]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public float Quantity" of type [float]
	"public float BasePrice" of type [float]
	"public float SalesExcl" of type [float]
	"public float CostExcl" of type [float]
	"public float Profit" of type [float]
	"public float Rebate" of type [float]
	"public float Commission" of type [float]
	"public float TotalCommission" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Poscashiercomdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $comno ;	
	public $stockcode ;	
	public $description1 ;	
	public $cashiername ;	
	public $fromdate ;	
	public $todate ;	
	public $quantity ;	
	public $baseprice ;	
	public $salesexcl ;	
	public $costexcl ;	
	public $profit ;	
	public $rebate ;	
	public $commission ;	
	public $totalcommission ;	
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
			$query = " SELECT RecID, [CO], [Branch], [ComNo], [StockCode], [Description1], [CashierName], [FromDate], [ToDate], [Quantity], [BasePrice], [SalesExcl], [CostExcl], [Profit], [Rebate], [Commission], [TotalCommission], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSCashierComDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->comno = $records["ComNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->description1 = $records["Description1"];
				$instance->cashiername = $records["CashierName"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->quantity = $records["Quantity"];
				$instance->baseprice = $records["BasePrice"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->costexcl = $records["CostExcl"];
				$instance->profit = $records["Profit"];
				$instance->rebate = $records["Rebate"];
				$instance->commission = $records["Commission"];
				$instance->totalcommission = $records["TotalCommission"];
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
			$query = " SELECT RecID, [CO], [Branch], [ComNo], [StockCode], [Description1], [CashierName], [FromDate], [ToDate], [Quantity], [BasePrice], [SalesExcl], [CostExcl], [Profit], [Rebate], [Commission], [TotalCommission], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSCashierComDet]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->comno = $records["ComNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->description1 = $records["Description1"];
				$instance->cashiername = $records["CashierName"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->quantity = $records["Quantity"];
				$instance->baseprice = $records["BasePrice"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->costexcl = $records["CostExcl"];
				$instance->profit = $records["Profit"];
				$instance->rebate = $records["Rebate"];
				$instance->commission = $records["Commission"];
				$instance->totalcommission = $records["TotalCommission"];
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