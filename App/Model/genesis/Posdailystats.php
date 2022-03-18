<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	POSDailyStats

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public string CO" of type [string]
	"public string Branch" of type [string]
	"public string TranDate" of type [string]
	"public string TranTime" of type [string]
	"public float SalesExcl" of type [float]
	"public float SalesIncl" of type [float]
	"public float TotalVAT" of type [float]
	"public float ExemptSales" of type [float]
	"public float TaxableSales" of type [float]
	"public float Discount" of type [float]
	"public float SlipCnt" of type [float]
	"public float SlipLines" of type [float]
	"public float AvgSlip" of type [float]
	"public float AvgSlipPrft" of type [float]
	"public float TotalCostExcl" of type [float]
	"public float Profit" of type [float]
	"public float GP" of type [float]
	"public float Rebates" of type [float]
	"public float NettCostExcl" of type [float]
	"public float NettProfit" of type [float]
	"public float NettGP" of type [float]
	"public float RoundingUp" of type [float]
	"public float RoundingDown" of type [float]
	"public float Charity" of type [float]
	"public float RetnExcl" of type [float]
	"public float RetnIncl" of type [float]
	"public float RetnVAT" of type [float]
	"public float RetnPrft" of type [float]
*/
namespace genesis;


use PDO;

class Posdailystats {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $trandate ;	
	public $trantime ;	
	public $salesexcl ;	
	public $salesincl ;	
	public $totalvat ;	
	public $exemptsales ;	
	public $taxablesales ;	
	public $discount ;	
	public $slipcnt ;	
	public $sliplines ;	
	public $avgslip ;	
	public $avgslipprft ;	
	public $totalcostexcl ;	
	public $profit ;	
	public $gp ;	
	public $rebates ;	
	public $nettcostexcl ;	
	public $nettprofit ;	
	public $nettgp ;	
	public $roundingup ;	
	public $roundingdown ;	
	public $charity ;	
	public $retnexcl ;	
	public $retnincl ;	
	public $retnvat ;	
	public $retnprft ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TranDate], [TranTime], [SalesExcl], [SalesIncl], [TotalVAT], [ExemptSales], [TaxableSales], [Discount], [SlipCnt], [SlipLines], [AvgSlip], [AvgSlipPrft], [TotalCostExcl], [Profit], [GP], [Rebates], [NettCostExcl], [NettProfit], [NettGP], [RoundingUp], [RoundingDown], [Charity], [RetnExcl], [RetnIncl], [RetnVAT], [RetnPrft] FROM [POSDailyStats]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->trandate = $records["TranDate"];
				$instance->trantime = $records["TranTime"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->salesincl = $records["SalesIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->exemptsales = $records["ExemptSales"];
				$instance->taxablesales = $records["TaxableSales"];
				$instance->discount = $records["Discount"];
				$instance->slipcnt = $records["SlipCnt"];
				$instance->sliplines = $records["SlipLines"];
				$instance->avgslip = $records["AvgSlip"];
				$instance->avgslipprft = $records["AvgSlipPrft"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->profit = $records["Profit"];
				$instance->gp = $records["GP"];
				$instance->rebates = $records["Rebates"];
				$instance->nettcostexcl = $records["NettCostExcl"];
				$instance->nettprofit = $records["NettProfit"];
				$instance->nettgp = $records["NettGP"];
				$instance->roundingup = $records["RoundingUp"];
				$instance->roundingdown = $records["RoundingDown"];
				$instance->charity = $records["Charity"];
				$instance->retnexcl = $records["RetnExcl"];
				$instance->retnincl = $records["RetnIncl"];
				$instance->retnvat = $records["RetnVAT"];
				$instance->retnprft = $records["RetnPrft"];
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