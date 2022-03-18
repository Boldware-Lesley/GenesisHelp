<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	DEBDealBatchDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int DealNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public float PriceExcl" of type [float]
	"public float PriceIncl" of type [float]
	"public nvarchar ProductionDate" of type [nvarchar]
	"public nvarchar ReasonCode" of type [nvarchar]
	"public int DealRangeDays" of type [int]
	"public float MinimumBuy" of type [float]
	"public float LastCostExcl" of type [float]
	"public float LastCostIncl" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public float RebAmnt" of type [float]
	"public float RebAvgAmnt" of type [float]
*/
namespace genesis;


use PDO;

class Debdealbatchdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $dealno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $priceexcl ;	
	public $priceincl ;	
	public $productiondate ;	
	public $reasoncode ;	
	public $dealrangedays ;	
	public $minimumbuy ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $rebamnt ;	
	public $rebavgamnt ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [DealNo], [StockCode], [LinkCode], [Description1], [PriceExcl], [PriceIncl], [ProductionDate], [ReasonCode], [DealRangeDays], [MinimumBuy], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [RebAmnt], [RebAvgAmnt] FROM [DEBDealBatchDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->dealno = $records["DealNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->productiondate = $records["ProductionDate"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->dealrangedays = $records["DealRangeDays"];
				$instance->minimumbuy = $records["MinimumBuy"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->rebamnt = $records["RebAmnt"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
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
			$query = " SELECT RecID, [CO], [Branch], [DealNo], [StockCode], [LinkCode], [Description1], [PriceExcl], [PriceIncl], [ProductionDate], [ReasonCode], [DealRangeDays], [MinimumBuy], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [RebAmnt], [RebAvgAmnt] FROM [DEBDealBatchDet]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->dealno = $records["DealNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->productiondate = $records["ProductionDate"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->dealrangedays = $records["DealRangeDays"];
				$instance->minimumbuy = $records["MinimumBuy"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->rebamnt = $records["RebAmnt"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
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