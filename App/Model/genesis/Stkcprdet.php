<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	STKCprDet

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar CPRNO" of type [nvarchar]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public float FROMQTY" of type [float]
	"public float TOQTY" of type [float]
	"public nvarchar PRCODE" of type [nvarchar]
	"public float DISCOUNTPERC" of type [float]
	"public float PRICEEXCL" of type [float]
	"public float PRICEINCL" of type [float]
	"public float MAXQTY" of type [float]
	"public nvarchar FREESTOCKCODE" of type [nvarchar]
	"public nvarchar FREELINKCODE" of type [nvarchar]
	"public nvarchar FREEDESCRIPTION1" of type [nvarchar]
	"public float FREEQTY" of type [float]
	"public float FREEPER" of type [float]
	"public float LASTCOSTEXCL" of type [float]
	"public float AVGCOSTEXCL" of type [float]
	"public float BUYCOSTEXCL" of type [float]
	"public float REBAMNT" of type [float]
	"public float SALESQTY" of type [float]
	"public float SALESEXCL" of type [float]
	"public int PAGENO" of type [int]
	"public nvarchar SCALERANGE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public float MINBUY" of type [float]
	"public nvarchar SPOTNO" of type [nvarchar]
	"public int Units" of type [int]
	"public nvarchar VATCode" of type [nvarchar]
	"public float LastCostIncl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public float BuyCostIncl" of type [float]
	"public float SalesCostExcl" of type [float]
	"public float SalesVAT" of type [float]
	"public float SalesIncl" of type [float]
	"public float SalesProfit" of type [float]
	"public float SalesRebate" of type [float]
	"public nvarchar ProductionDate" of type [nvarchar]
	"public int DealRangeDays" of type [int]
	"public int LoyaltyPnts" of type [int]
	"public float PriceDiscount" of type [float]
	"public float VoucherDiscount" of type [float]
	"public nvarchar SellBelowCost" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkcprdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $cprno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $fromqty ;	
	public $toqty ;	
	public $prcode ;	
	public $discountperc ;	
	public $priceexcl ;	
	public $priceincl ;	
	public $maxqty ;	
	public $freestockcode ;	
	public $freelinkcode ;	
	public $freedescription1 ;	
	public $freeqty ;	
	public $freeper ;	
	public $lastcostexcl ;	
	public $avgcostexcl ;	
	public $buycostexcl ;	
	public $rebamnt ;	
	public $salesqty ;	
	public $salesexcl ;	
	public $pageno ;	
	public $scalerange ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $minbuy ;	
	public $spotno ;	
	public $units ;	
	public $vatcode ;	
	public $lastcostincl ;	
	public $avgcostincl ;	
	public $buycostincl ;	
	public $salescostexcl ;	
	public $salesvat ;	
	public $salesincl ;	
	public $salesprofit ;	
	public $salesrebate ;	
	public $productiondate ;	
	public $dealrangedays ;	
	public $loyaltypnts ;	
	public $pricediscount ;	
	public $voucherdiscount ;	
	public $sellbelowcost ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [CPRNO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [FROMQTY], [TOQTY], [PRCODE], [DISCOUNTPERC], [PRICEEXCL], [PRICEINCL], [MAXQTY], [FREESTOCKCODE], [FREELINKCODE], [FREEDESCRIPTION1], [FREEQTY], [FREEPER], [LASTCOSTEXCL], [AVGCOSTEXCL], [BUYCOSTEXCL], [REBAMNT], [SALESQTY], [SALESEXCL], [PAGENO], [SCALERANGE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [MINBUY], [SPOTNO], [Units], [VATCode], [LastCostIncl], [AvgCostIncl], [BuyCostIncl], [SalesCostExcl], [SalesVAT], [SalesIncl], [SalesProfit], [SalesRebate], [ProductionDate], [DealRangeDays], [LoyaltyPnts], [PriceDiscount], [VoucherDiscount], [SellBelowCost] FROM [STKCprDet]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->cprno = $records["CPRNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->fromqty = $records["FROMQTY"];
				$instance->toqty = $records["TOQTY"];
				$instance->prcode = $records["PRCODE"];
				$instance->discountperc = $records["DISCOUNTPERC"];
				$instance->priceexcl = $records["PRICEEXCL"];
				$instance->priceincl = $records["PRICEINCL"];
				$instance->maxqty = $records["MAXQTY"];
				$instance->freestockcode = $records["FREESTOCKCODE"];
				$instance->freelinkcode = $records["FREELINKCODE"];
				$instance->freedescription1 = $records["FREEDESCRIPTION1"];
				$instance->freeqty = $records["FREEQTY"];
				$instance->freeper = $records["FREEPER"];
				$instance->lastcostexcl = $records["LASTCOSTEXCL"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->buycostexcl = $records["BUYCOSTEXCL"];
				$instance->rebamnt = $records["REBAMNT"];
				$instance->salesqty = $records["SALESQTY"];
				$instance->salesexcl = $records["SALESEXCL"];
				$instance->pageno = $records["PAGENO"];
				$instance->scalerange = $records["SCALERANGE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->minbuy = $records["MINBUY"];
				$instance->spotno = $records["SPOTNO"];
				$instance->units = $records["Units"];
				$instance->vatcode = $records["VATCode"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->salescostexcl = $records["SalesCostExcl"];
				$instance->salesvat = $records["SalesVAT"];
				$instance->salesincl = $records["SalesIncl"];
				$instance->salesprofit = $records["SalesProfit"];
				$instance->salesrebate = $records["SalesRebate"];
				$instance->productiondate = $records["ProductionDate"];
				$instance->dealrangedays = $records["DealRangeDays"];
				$instance->loyaltypnts = $records["LoyaltyPnts"];
				$instance->pricediscount = $records["PriceDiscount"];
				$instance->voucherdiscount = $records["VoucherDiscount"];
				$instance->sellbelowcost = $records["SellBelowCost"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [CPRNO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [FROMQTY], [TOQTY], [PRCODE], [DISCOUNTPERC], [PRICEEXCL], [PRICEINCL], [MAXQTY], [FREESTOCKCODE], [FREELINKCODE], [FREEDESCRIPTION1], [FREEQTY], [FREEPER], [LASTCOSTEXCL], [AVGCOSTEXCL], [BUYCOSTEXCL], [REBAMNT], [SALESQTY], [SALESEXCL], [PAGENO], [SCALERANGE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [MINBUY], [SPOTNO], [Units], [VATCode], [LastCostIncl], [AvgCostIncl], [BuyCostIncl], [SalesCostExcl], [SalesVAT], [SalesIncl], [SalesProfit], [SalesRebate], [ProductionDate], [DealRangeDays], [LoyaltyPnts], [PriceDiscount], [VoucherDiscount], [SellBelowCost] FROM [STKCprDet]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->cprno = $records["CPRNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->fromqty = $records["FROMQTY"];
				$instance->toqty = $records["TOQTY"];
				$instance->prcode = $records["PRCODE"];
				$instance->discountperc = $records["DISCOUNTPERC"];
				$instance->priceexcl = $records["PRICEEXCL"];
				$instance->priceincl = $records["PRICEINCL"];
				$instance->maxqty = $records["MAXQTY"];
				$instance->freestockcode = $records["FREESTOCKCODE"];
				$instance->freelinkcode = $records["FREELINKCODE"];
				$instance->freedescription1 = $records["FREEDESCRIPTION1"];
				$instance->freeqty = $records["FREEQTY"];
				$instance->freeper = $records["FREEPER"];
				$instance->lastcostexcl = $records["LASTCOSTEXCL"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->buycostexcl = $records["BUYCOSTEXCL"];
				$instance->rebamnt = $records["REBAMNT"];
				$instance->salesqty = $records["SALESQTY"];
				$instance->salesexcl = $records["SALESEXCL"];
				$instance->pageno = $records["PAGENO"];
				$instance->scalerange = $records["SCALERANGE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->minbuy = $records["MINBUY"];
				$instance->spotno = $records["SPOTNO"];
				$instance->units = $records["Units"];
				$instance->vatcode = $records["VATCode"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->salescostexcl = $records["SalesCostExcl"];
				$instance->salesvat = $records["SalesVAT"];
				$instance->salesincl = $records["SalesIncl"];
				$instance->salesprofit = $records["SalesProfit"];
				$instance->salesrebate = $records["SalesRebate"];
				$instance->productiondate = $records["ProductionDate"];
				$instance->dealrangedays = $records["DealRangeDays"];
				$instance->loyaltypnts = $records["LoyaltyPnts"];
				$instance->pricediscount = $records["PriceDiscount"];
				$instance->voucherdiscount = $records["VoucherDiscount"];
				$instance->sellbelowcost = $records["SellBelowCost"];
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