<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	GSMBaseCost

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar CostDate" of type [nvarchar]
	"public nvarchar CostTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public float LastCostExcl" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float BuyCostExcl" of type [float]
	"public float BaseCostExcl" of type [float]
	"public nvarchar IncrDate" of type [nvarchar]
	"public nvarchar IncrApply" of type [nvarchar]
	"public float IncrExcl" of type [float]
	"public float DealExcl" of type [float]
	"public float DealDiff" of type [float]
	"public float AdjFactor" of type [float]
	"public float SuppExcl" of type [float]
	"public float BefRebate" of type [float]
	"public float TotRebate" of type [float]
	"public float NettAfterReb" of type [float]
	"public float NewBaseCostExcl" of type [float]
*/
namespace genesis;


use PDO;

class Gsmbasecost {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $stockcode ;	
	public $linkcode ;	
	public $costdate ;	
	public $costtime ;	
	public $dtouser ;	
	public $lastcostexcl ;	
	public $avgcostexcl ;	
	public $buycostexcl ;	
	public $basecostexcl ;	
	public $incrdate ;	
	public $incrapply ;	
	public $increxcl ;	
	public $dealexcl ;	
	public $dealdiff ;	
	public $adjfactor ;	
	public $suppexcl ;	
	public $befrebate ;	
	public $totrebate ;	
	public $nettafterreb ;	
	public $newbasecostexcl ;	
	
	
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
			$query = " SELECT RecID, [StockCode], [LinkCode], [CostDate], [CostTime], [DTOUser], [LastCostExcl], [AvgCostExcl], [BuyCostExcl], [BaseCostExcl], [IncrDate], [IncrApply], [IncrExcl], [DealExcl], [DealDiff], [AdjFactor], [SuppExcl], [BefRebate], [TotRebate], [NettAfterReb], [NewBaseCostExcl] FROM [GSMBaseCost]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->costdate = $records["CostDate"];
				$instance->costtime = $records["CostTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->basecostexcl = $records["BaseCostExcl"];
				$instance->incrdate = $records["IncrDate"];
				$instance->incrapply = $records["IncrApply"];
				$instance->increxcl = $records["IncrExcl"];
				$instance->dealexcl = $records["DealExcl"];
				$instance->dealdiff = $records["DealDiff"];
				$instance->adjfactor = $records["AdjFactor"];
				$instance->suppexcl = $records["SuppExcl"];
				$instance->befrebate = $records["BefRebate"];
				$instance->totrebate = $records["TotRebate"];
				$instance->nettafterreb = $records["NettAfterReb"];
				$instance->newbasecostexcl = $records["NewBaseCostExcl"];
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
			$query = " SELECT RecID, [StockCode], [LinkCode], [CostDate], [CostTime], [DTOUser], [LastCostExcl], [AvgCostExcl], [BuyCostExcl], [BaseCostExcl], [IncrDate], [IncrApply], [IncrExcl], [DealExcl], [DealDiff], [AdjFactor], [SuppExcl], [BefRebate], [TotRebate], [NettAfterReb], [NewBaseCostExcl] FROM [GSMBaseCost]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->costdate = $records["CostDate"];
				$instance->costtime = $records["CostTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->basecostexcl = $records["BaseCostExcl"];
				$instance->incrdate = $records["IncrDate"];
				$instance->incrapply = $records["IncrApply"];
				$instance->increxcl = $records["IncrExcl"];
				$instance->dealexcl = $records["DealExcl"];
				$instance->dealdiff = $records["DealDiff"];
				$instance->adjfactor = $records["AdjFactor"];
				$instance->suppexcl = $records["SuppExcl"];
				$instance->befrebate = $records["BefRebate"];
				$instance->totrebate = $records["TotRebate"];
				$instance->nettafterreb = $records["NettAfterReb"];
				$instance->newbasecostexcl = $records["NewBaseCostExcl"];
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