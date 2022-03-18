<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	GSMOCItems

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int CardNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Barcode" of type [nvarchar]
	"public nvarchar SuppCode" of type [nvarchar]
	"public nvarchar SeasonCode" of type [nvarchar]
	"public nvarchar RuleCode" of type [nvarchar]
	"public int Units" of type [int]
	"public int PackCase" of type [int]
	"public int CasePall" of type [int]
	"public float LastCostExcl" of type [float]
	"public float LastCostIncl" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public float BuyCostExcl" of type [float]
	"public float BuyCostIncl" of type [float]
	"public float DealCostExcl" of type [float]
	"public float DealCostIncl" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalVAT" of type [float]
	"public float TotalExempt" of type [float]
	"public float DealMinBuy" of type [float]
	"public nvarchar DealEndDate" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
	"public float VATRate" of type [float]
	"public float Onhand" of type [float]
	"public float OnhandDamage" of type [float]
	"public float YTDMthAvg" of type [float]
	"public float MTDAvg" of type [float]
	"public float OutOrder" of type [float]
	"public float PartOrder" of type [float]
	"public float SuggOrder" of type [float]
	"public float OrderQty" of type [float]
	"public nvarchar NoOrder" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmocitems {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $cardno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $barcode ;	
	public $suppcode ;	
	public $seasoncode ;	
	public $rulecode ;	
	public $units ;	
	public $packcase ;	
	public $casepall ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $buycostexcl ;	
	public $buycostincl ;	
	public $dealcostexcl ;	
	public $dealcostincl ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totalvat ;	
	public $totalexempt ;	
	public $dealminbuy ;	
	public $dealenddate ;	
	public $vatcode ;	
	public $vatrate ;	
	public $onhand ;	
	public $onhanddamage ;	
	public $ytdmthavg ;	
	public $mtdavg ;	
	public $outorder ;	
	public $partorder ;	
	public $suggorder ;	
	public $orderqty ;	
	public $noorder ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $status ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [CardNo], [StockCode], [LinkCode], [Description1], [Barcode], [SuppCode], [SeasonCode], [RuleCode], [Units], [PackCase], [CasePall], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [DealCostExcl], [DealCostIncl], [TotalExcl], [TotalIncl], [TotalVAT], [TotalExempt], [DealMinBuy], [DealEndDate], [VATCode], [VATRate], [Onhand], [OnhandDamage], [YTDMthAvg], [MTDAvg], [OutOrder], [PartOrder], [SuggOrder], [OrderQty], [NoOrder], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Status] FROM [GSMOCItems]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->cardno = $records["CardNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->barcode = $records["Barcode"];
				$instance->suppcode = $records["SuppCode"];
				$instance->seasoncode = $records["SeasonCode"];
				$instance->rulecode = $records["RuleCode"];
				$instance->units = $records["Units"];
				$instance->packcase = $records["PackCase"];
				$instance->casepall = $records["CasePall"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->dealcostexcl = $records["DealCostExcl"];
				$instance->dealcostincl = $records["DealCostIncl"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->dealminbuy = $records["DealMinBuy"];
				$instance->dealenddate = $records["DealEndDate"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->onhand = $records["Onhand"];
				$instance->onhanddamage = $records["OnhandDamage"];
				$instance->ytdmthavg = $records["YTDMthAvg"];
				$instance->mtdavg = $records["MTDAvg"];
				$instance->outorder = $records["OutOrder"];
				$instance->partorder = $records["PartOrder"];
				$instance->suggorder = $records["SuggOrder"];
				$instance->orderqty = $records["OrderQty"];
				$instance->noorder = $records["NoOrder"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->status = $records["Status"];
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [CardNo], [StockCode], [LinkCode], [Description1], [Barcode], [SuppCode], [SeasonCode], [RuleCode], [Units], [PackCase], [CasePall], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [DealCostExcl], [DealCostIncl], [TotalExcl], [TotalIncl], [TotalVAT], [TotalExempt], [DealMinBuy], [DealEndDate], [VATCode], [VATRate], [Onhand], [OnhandDamage], [YTDMthAvg], [MTDAvg], [OutOrder], [PartOrder], [SuggOrder], [OrderQty], [NoOrder], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Status] FROM [GSMOCItems]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->cardno = $records["CardNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->barcode = $records["Barcode"];
				$instance->suppcode = $records["SuppCode"];
				$instance->seasoncode = $records["SeasonCode"];
				$instance->rulecode = $records["RuleCode"];
				$instance->units = $records["Units"];
				$instance->packcase = $records["PackCase"];
				$instance->casepall = $records["CasePall"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->dealcostexcl = $records["DealCostExcl"];
				$instance->dealcostincl = $records["DealCostIncl"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->dealminbuy = $records["DealMinBuy"];
				$instance->dealenddate = $records["DealEndDate"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->onhand = $records["Onhand"];
				$instance->onhanddamage = $records["OnhandDamage"];
				$instance->ytdmthavg = $records["YTDMthAvg"];
				$instance->mtdavg = $records["MTDAvg"];
				$instance->outorder = $records["OutOrder"];
				$instance->partorder = $records["PartOrder"];
				$instance->suggorder = $records["SuggOrder"];
				$instance->orderqty = $records["OrderQty"];
				$instance->noorder = $records["NoOrder"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->status = $records["Status"];
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