<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	BROKEN_STKMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockType" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
	"public nvarchar DeptCode" of type [nvarchar]
	"public nvarchar SubDept" of type [nvarchar]
	"public nvarchar Category1" of type [nvarchar]
	"public nvarchar Category2" of type [nvarchar]
	"public nvarchar Category3" of type [nvarchar]
	"public nvarchar Category4" of type [nvarchar]
	"public nvarchar Supplier" of type [nvarchar]
	"public nvarchar SuppCode" of type [nvarchar]
	"public nvarchar BarCode" of type [nvarchar]
	"public nvarchar Variant" of type [nvarchar]
	"public int Units" of type [int]
	"public int Singles" of type [int]
	"public int PackCase" of type [int]
	"public int CasePall" of type [int]
	"public float Weight" of type [float]
	"public nvarchar Binlocation" of type [nvarchar]
	"public float ItemLength" of type [float]
	"public float ItemBreadth" of type [float]
	"public float ItemHeight" of type [float]
	"public nvarchar SerialTrack" of type [nvarchar]
	"public nvarchar LinkedSerial" of type [nvarchar]
	"public nvarchar KitFunction" of type [nvarchar]
	"public nvarchar NegativeQty" of type [nvarchar]
	"public nvarchar PurchaseItem" of type [nvarchar]
	"public nvarchar SaleItem" of type [nvarchar]
	"public nvarchar InventoryItem" of type [nvarchar]
	"public nvarchar PrintLabel" of type [nvarchar]
	"public float MiscGP" of type [float]
	"public int QtyDecimal" of type [int]
	"public int CostDecimal" of type [int]
	"public int SellDecimal" of type [int]
	"public float SqmBox" of type [float]
	"public nvarchar TileSize" of type [nvarchar]
	"public nvarchar TileGrade" of type [nvarchar]
	"public nvarchar SCTemplate" of type [nvarchar]
	"public int LengthColor" of type [int]
	"public int LengthSize" of type [int]
	"public nvarchar Descriptions" of type [nvarchar]
	"public nvarchar Food" of type [nvarchar]
	"public nvarchar KVI" of type [nvarchar]
	"public nvarchar DivertCode" of type [nvarchar]
	"public nvarchar ScaleType" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public int WTCaseStart" of type [int]
	"public int WTCaseLength" of type [int]
	"public int WTCaseFactor" of type [int]
	"public float LastCostExcl" of type [float]
	"public float LastCostIncl" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public float BuyCostExcl" of type [float]
	"public float BuyCostIncl" of type [float]
	"public float RebateAvgExcl" of type [float]
	"public float RebateLastExcl" of type [float]
	"public nvarchar CostCode" of type [nvarchar]
	"public nvarchar Property01" of type [nvarchar]
	"public nvarchar Property02" of type [nvarchar]
	"public nvarchar Property03" of type [nvarchar]
	"public nvarchar Property04" of type [nvarchar]
	"public nvarchar Property05" of type [nvarchar]
	"public nvarchar Property06" of type [nvarchar]
	"public nvarchar Property07" of type [nvarchar]
	"public nvarchar Property08" of type [nvarchar]
	"public nvarchar Property09" of type [nvarchar]
	"public nvarchar Property10" of type [nvarchar]
	"public nvarchar PromFDate" of type [nvarchar]
	"public nvarchar PromTDate" of type [nvarchar]
	"public nvarchar PromFTime" of type [nvarchar]
	"public nvarchar PromTTime" of type [nvarchar]
	"public float PromMaxQty" of type [float]
	"public float PromQtySold" of type [float]
	"public float PromMCust" of type [float]
	"public nvarchar PromPerm" of type [nvarchar]
	"public float SugSell" of type [float]
	"public float MinQty" of type [float]
	"public float MaxQty" of type [float]
	"public nvarchar ReOrderType" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar CustomsGroup" of type [nvarchar]
	"public float CustomsRate" of type [float]
	"public nvarchar DefaultWH" of type [nvarchar]
	"public float ForeignBuyCost" of type [float]
	"public nvarchar ForeignCCY" of type [nvarchar]
	"public nvarchar Manufacturer" of type [nvarchar]
	"public nvarchar LastCountedDate" of type [nvarchar]
	"public nvarchar LastSaleDate" of type [nvarchar]
	"public int LeadTimeDays" of type [int]
	"public nvarchar GLSalesAcc" of type [nvarchar]
	"public nvarchar GLExpenseAcc" of type [nvarchar]
	"public nvarchar PackSize" of type [nvarchar]
	"public int PurCardPrty" of type [int]
	"public int AverageSTK" of type [int]
	"public float CostPlusExcl" of type [float]
	"public float CostPlusIncl" of type [float]
	"public nvarchar DCItem" of type [nvarchar]
	"public nvarchar TDSS" of type [nvarchar]
	"public nvarchar SeasonCode" of type [nvarchar]
	"public nvarchar ChangeSelling" of type [nvarchar]
	"public nvarchar PurCardRule" of type [nvarchar]
	"public nvarchar KitPrint" of type [nvarchar]
	"public int KitBuildPer" of type [int]
	"public int ItemID" of type [int]
	"public nvarchar Frequency" of type [nvarchar]
	"public nvarchar StockTakeDate" of type [nvarchar]
	"public char OrdCase" of type [char]
	"public nvarchar Express" of type [nvarchar]
	"public nvarchar IgnorePallet" of type [nvarchar]
	"public nvarchar Template" of type [nvarchar]
	"public nvarchar SellBelowCost" of type [nvarchar]
	"public nvarchar ExclGRVDisc" of type [nvarchar]
	"public nvarchar Version" of type [nvarchar]
	"public nvarchar ExpressItem" of type [nvarchar]
	"public nvarchar ScaleItem" of type [nvarchar]
	"public float BCAdjFactor" of type [float]
	"public nvarchar BCAdjFrom" of type [nvarchar]
	"public nvarchar BCAdjTo" of type [nvarchar]
	"public nvarchar BCPriceIncr" of type [nvarchar]
	"public float BaseCostExcl" of type [float]
	"public float BaseCostIncl" of type [float]
	"public float BCAdjFactorPerc" of type [float]
	"public float BCAdjFactorVal" of type [float]
	"public nvarchar Description3" of type [nvarchar]
	"public nvarchar OutSesnOrd" of type [nvarchar]
	"public float DefaultGP" of type [float]
	"public nvarchar AllowReturns" of type [nvarchar]
	"public nvarchar VirtualCard" of type [nvarchar]
	"public nvarchar KitCostDesc1" of type [nvarchar]
	"public nvarchar KitCostDesc2" of type [nvarchar]
	"public nvarchar KitCostDesc3" of type [nvarchar]
	"public float KitCost1" of type [float]
	"public float KitCost2" of type [float]
	"public float KitCost3" of type [float]
	"public float KitWastePerc" of type [float]
	"public float BinlocMax" of type [float]
	"public float BinlocRate" of type [float]
	"public nvarchar ReportingItem" of type [nvarchar]
	"public nvarchar SaleGroup" of type [nvarchar]
	"public float RebateLastIncl" of type [float]
	"public nvarchar LastRecvSupp" of type [nvarchar]
	"public float AvgSalesQty" of type [float]
	"public nvarchar ScalePrice" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Broken_stkmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stocktype ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $vatcode ;	
	public $deptcode ;	
	public $subdept ;	
	public $category1 ;	
	public $category2 ;	
	public $category3 ;	
	public $category4 ;	
	public $supplier ;	
	public $suppcode ;	
	public $barcode ;	
	public $variant ;	
	public $units ;	
	public $singles ;	
	public $packcase ;	
	public $casepall ;	
	public $weight ;	
	public $binlocation ;	
	public $itemlength ;	
	public $itembreadth ;	
	public $itemheight ;	
	public $serialtrack ;	
	public $linkedserial ;	
	public $kitfunction ;	
	public $negativeqty ;	
	public $purchaseitem ;	
	public $saleitem ;	
	public $inventoryitem ;	
	public $printlabel ;	
	public $miscgp ;	
	public $qtydecimal ;	
	public $costdecimal ;	
	public $selldecimal ;	
	public $sqmbox ;	
	public $tilesize ;	
	public $tilegrade ;	
	public $sctemplate ;	
	public $lengthcolor ;	
	public $lengthsize ;	
	public $descriptions ;	
	public $food ;	
	public $kvi ;	
	public $divertcode ;	
	public $scaletype ;	
	public $status ;	
	public $wtcasestart ;	
	public $wtcaselength ;	
	public $wtcasefactor ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $buycostexcl ;	
	public $buycostincl ;	
	public $rebateavgexcl ;	
	public $rebatelastexcl ;	
	public $costcode ;	
	public $property01 ;	
	public $property02 ;	
	public $property03 ;	
	public $property04 ;	
	public $property05 ;	
	public $property06 ;	
	public $property07 ;	
	public $property08 ;	
	public $property09 ;	
	public $property10 ;	
	public $promfdate ;	
	public $promtdate ;	
	public $promftime ;	
	public $promttime ;	
	public $prommaxqty ;	
	public $promqtysold ;	
	public $prommcust ;	
	public $promperm ;	
	public $sugsell ;	
	public $minqty ;	
	public $maxqty ;	
	public $reordertype ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $customsgroup ;	
	public $customsrate ;	
	public $defaultwh ;	
	public $foreignbuycost ;	
	public $foreignccy ;	
	public $manufacturer ;	
	public $lastcounteddate ;	
	public $lastsaledate ;	
	public $leadtimedays ;	
	public $glsalesacc ;	
	public $glexpenseacc ;	
	public $packsize ;	
	public $purcardprty ;	
	public $averagestk ;	
	public $costplusexcl ;	
	public $costplusincl ;	
	public $dcitem ;	
	public $tdss ;	
	public $seasoncode ;	
	public $changeselling ;	
	public $purcardrule ;	
	public $kitprint ;	
	public $kitbuildper ;	
	public $itemid ;	
	public $frequency ;	
	public $stocktakedate ;	
	public $ordcase ;	
	public $express ;	
	public $ignorepallet ;	
	public $template ;	
	public $sellbelowcost ;	
	public $exclgrvdisc ;	
	public $version ;	
	public $expressitem ;	
	public $scaleitem ;	
	public $bcadjfactor ;	
	public $bcadjfrom ;	
	public $bcadjto ;	
	public $bcpriceincr ;	
	public $basecostexcl ;	
	public $basecostincl ;	
	public $bcadjfactorperc ;	
	public $bcadjfactorval ;	
	public $description3 ;	
	public $outsesnord ;	
	public $defaultgp ;	
	public $allowreturns ;	
	public $virtualcard ;	
	public $kitcostdesc1 ;	
	public $kitcostdesc2 ;	
	public $kitcostdesc3 ;	
	public $kitcost1 ;	
	public $kitcost2 ;	
	public $kitcost3 ;	
	public $kitwasteperc ;	
	public $binlocmax ;	
	public $binlocrate ;	
	public $reportingitem ;	
	public $salegroup ;	
	public $rebatelastincl ;	
	public $lastrecvsupp ;	
	public $avgsalesqty ;	
	public $scaleprice ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockType], [StockCode], [LinkCode], [Description1], [Description2], [VATCode], [DeptCode], [SubDept], [Category1], [Category2], [Category3], [Category4], [Supplier], [SuppCode], [BarCode], [Variant], [Units], [Singles], [PackCase], [CasePall], [Weight], [Binlocation], [ItemLength], [ItemBreadth], [ItemHeight], [SerialTrack], [LinkedSerial], [KitFunction], [NegativeQty], [PurchaseItem], [SaleItem], [InventoryItem], [PrintLabel], [MiscGP], [QtyDecimal], [CostDecimal], [SellDecimal], [SqmBox], [TileSize], [TileGrade], [SCTemplate], [LengthColor], [LengthSize], [Descriptions], [Food], [KVI], [DivertCode], [ScaleType], [Status], [WTCaseStart], [WTCaseLength], [WTCaseFactor], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [RebateAvgExcl], [RebateLastExcl], [CostCode], [Property01], [Property02], [Property03], [Property04], [Property05], [Property06], [Property07], [Property08], [Property09], [Property10], [PromFDate], [PromTDate], [PromFTime], [PromTTime], [PromMaxQty], [PromQtySold], [PromMCust], [PromPerm], [SugSell], [MinQty], [MaxQty], [ReOrderType], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [CustomsGroup], [CustomsRate], [DefaultWH], [ForeignBuyCost], [ForeignCCY], [Manufacturer], [LastCountedDate], [LastSaleDate], [LeadTimeDays], [GLSalesAcc], [GLExpenseAcc], [PackSize], [PurCardPrty], [AverageSTK], [CostPlusExcl], [CostPlusIncl], [DCItem], [TDSS], [SeasonCode], [ChangeSelling], [PurCardRule], [KitPrint], [KitBuildPer], [ItemID], [Frequency], [StockTakeDate], [OrdCase], [Express], [IgnorePallet], [Template], [SellBelowCost], [ExclGRVDisc], [Version], [ExpressItem], [ScaleItem], [BCAdjFactor], [BCAdjFrom], [BCAdjTo], [BCPriceIncr], [BaseCostExcl], [BaseCostIncl], [BCAdjFactorPerc], [BCAdjFactorVal], [Description3], [OutSesnOrd], [DefaultGP], [AllowReturns], [VirtualCard], [KitCostDesc1], [KitCostDesc2], [KitCostDesc3], [KitCost1], [KitCost2], [KitCost3], [KitWastePerc], [BinlocMax], [BinlocRate], [ReportingItem], [SaleGroup], [RebateLastIncl], [LastRecvSupp], [AvgSalesQty], [ScalePrice] FROM [BROKEN_STKMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stocktype = $records["StockType"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->vatcode = $records["VATCode"];
				$instance->deptcode = $records["DeptCode"];
				$instance->subdept = $records["SubDept"];
				$instance->category1 = $records["Category1"];
				$instance->category2 = $records["Category2"];
				$instance->category3 = $records["Category3"];
				$instance->category4 = $records["Category4"];
				$instance->supplier = $records["Supplier"];
				$instance->suppcode = $records["SuppCode"];
				$instance->barcode = $records["BarCode"];
				$instance->variant = $records["Variant"];
				$instance->units = $records["Units"];
				$instance->singles = $records["Singles"];
				$instance->packcase = $records["PackCase"];
				$instance->casepall = $records["CasePall"];
				$instance->weight = $records["Weight"];
				$instance->binlocation = $records["Binlocation"];
				$instance->itemlength = $records["ItemLength"];
				$instance->itembreadth = $records["ItemBreadth"];
				$instance->itemheight = $records["ItemHeight"];
				$instance->serialtrack = $records["SerialTrack"];
				$instance->linkedserial = $records["LinkedSerial"];
				$instance->kitfunction = $records["KitFunction"];
				$instance->negativeqty = $records["NegativeQty"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->saleitem = $records["SaleItem"];
				$instance->inventoryitem = $records["InventoryItem"];
				$instance->printlabel = $records["PrintLabel"];
				$instance->miscgp = $records["MiscGP"];
				$instance->qtydecimal = $records["QtyDecimal"];
				$instance->costdecimal = $records["CostDecimal"];
				$instance->selldecimal = $records["SellDecimal"];
				$instance->sqmbox = $records["SqmBox"];
				$instance->tilesize = $records["TileSize"];
				$instance->tilegrade = $records["TileGrade"];
				$instance->sctemplate = $records["SCTemplate"];
				$instance->lengthcolor = $records["LengthColor"];
				$instance->lengthsize = $records["LengthSize"];
				$instance->descriptions = $records["Descriptions"];
				$instance->food = $records["Food"];
				$instance->kvi = $records["KVI"];
				$instance->divertcode = $records["DivertCode"];
				$instance->scaletype = $records["ScaleType"];
				$instance->status = $records["Status"];
				$instance->wtcasestart = $records["WTCaseStart"];
				$instance->wtcaselength = $records["WTCaseLength"];
				$instance->wtcasefactor = $records["WTCaseFactor"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
				$instance->rebatelastexcl = $records["RebateLastExcl"];
				$instance->costcode = $records["CostCode"];
				$instance->property01 = $records["Property01"];
				$instance->property02 = $records["Property02"];
				$instance->property03 = $records["Property03"];
				$instance->property04 = $records["Property04"];
				$instance->property05 = $records["Property05"];
				$instance->property06 = $records["Property06"];
				$instance->property07 = $records["Property07"];
				$instance->property08 = $records["Property08"];
				$instance->property09 = $records["Property09"];
				$instance->property10 = $records["Property10"];
				$instance->promfdate = $records["PromFDate"];
				$instance->promtdate = $records["PromTDate"];
				$instance->promftime = $records["PromFTime"];
				$instance->promttime = $records["PromTTime"];
				$instance->prommaxqty = $records["PromMaxQty"];
				$instance->promqtysold = $records["PromQtySold"];
				$instance->prommcust = $records["PromMCust"];
				$instance->promperm = $records["PromPerm"];
				$instance->sugsell = $records["SugSell"];
				$instance->minqty = $records["MinQty"];
				$instance->maxqty = $records["MaxQty"];
				$instance->reordertype = $records["ReOrderType"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->customsgroup = $records["CustomsGroup"];
				$instance->customsrate = $records["CustomsRate"];
				$instance->defaultwh = $records["DefaultWH"];
				$instance->foreignbuycost = $records["ForeignBuyCost"];
				$instance->foreignccy = $records["ForeignCCY"];
				$instance->manufacturer = $records["Manufacturer"];
				$instance->lastcounteddate = $records["LastCountedDate"];
				$instance->lastsaledate = $records["LastSaleDate"];
				$instance->leadtimedays = $records["LeadTimeDays"];
				$instance->glsalesacc = $records["GLSalesAcc"];
				$instance->glexpenseacc = $records["GLExpenseAcc"];
				$instance->packsize = $records["PackSize"];
				$instance->purcardprty = $records["PurCardPrty"];
				$instance->averagestk = $records["AverageSTK"];
				$instance->costplusexcl = $records["CostPlusExcl"];
				$instance->costplusincl = $records["CostPlusIncl"];
				$instance->dcitem = $records["DCItem"];
				$instance->tdss = $records["TDSS"];
				$instance->seasoncode = $records["SeasonCode"];
				$instance->changeselling = $records["ChangeSelling"];
				$instance->purcardrule = $records["PurCardRule"];
				$instance->kitprint = $records["KitPrint"];
				$instance->kitbuildper = $records["KitBuildPer"];
				$instance->itemid = $records["ItemID"];
				$instance->frequency = $records["Frequency"];
				$instance->stocktakedate = $records["StockTakeDate"];
				$instance->ordcase = $records["OrdCase"];
				$instance->express = $records["Express"];
				$instance->ignorepallet = $records["IgnorePallet"];
				$instance->template = $records["Template"];
				$instance->sellbelowcost = $records["SellBelowCost"];
				$instance->exclgrvdisc = $records["ExclGRVDisc"];
				$instance->version = $records["Version"];
				$instance->expressitem = $records["ExpressItem"];
				$instance->scaleitem = $records["ScaleItem"];
				$instance->bcadjfactor = $records["BCAdjFactor"];
				$instance->bcadjfrom = $records["BCAdjFrom"];
				$instance->bcadjto = $records["BCAdjTo"];
				$instance->bcpriceincr = $records["BCPriceIncr"];
				$instance->basecostexcl = $records["BaseCostExcl"];
				$instance->basecostincl = $records["BaseCostIncl"];
				$instance->bcadjfactorperc = $records["BCAdjFactorPerc"];
				$instance->bcadjfactorval = $records["BCAdjFactorVal"];
				$instance->description3 = $records["Description3"];
				$instance->outsesnord = $records["OutSesnOrd"];
				$instance->defaultgp = $records["DefaultGP"];
				$instance->allowreturns = $records["AllowReturns"];
				$instance->virtualcard = $records["VirtualCard"];
				$instance->kitcostdesc1 = $records["KitCostDesc1"];
				$instance->kitcostdesc2 = $records["KitCostDesc2"];
				$instance->kitcostdesc3 = $records["KitCostDesc3"];
				$instance->kitcost1 = $records["KitCost1"];
				$instance->kitcost2 = $records["KitCost2"];
				$instance->kitcost3 = $records["KitCost3"];
				$instance->kitwasteperc = $records["KitWastePerc"];
				$instance->binlocmax = $records["BinlocMax"];
				$instance->binlocrate = $records["BinlocRate"];
				$instance->reportingitem = $records["ReportingItem"];
				$instance->salegroup = $records["SaleGroup"];
				$instance->rebatelastincl = $records["RebateLastIncl"];
				$instance->lastrecvsupp = $records["LastRecvSupp"];
				$instance->avgsalesqty = $records["AvgSalesQty"];
				$instance->scaleprice = $records["ScalePrice"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockType], [StockCode], [LinkCode], [Description1], [Description2], [VATCode], [DeptCode], [SubDept], [Category1], [Category2], [Category3], [Category4], [Supplier], [SuppCode], [BarCode], [Variant], [Units], [Singles], [PackCase], [CasePall], [Weight], [Binlocation], [ItemLength], [ItemBreadth], [ItemHeight], [SerialTrack], [LinkedSerial], [KitFunction], [NegativeQty], [PurchaseItem], [SaleItem], [InventoryItem], [PrintLabel], [MiscGP], [QtyDecimal], [CostDecimal], [SellDecimal], [SqmBox], [TileSize], [TileGrade], [SCTemplate], [LengthColor], [LengthSize], [Descriptions], [Food], [KVI], [DivertCode], [ScaleType], [Status], [WTCaseStart], [WTCaseLength], [WTCaseFactor], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [RebateAvgExcl], [RebateLastExcl], [CostCode], [Property01], [Property02], [Property03], [Property04], [Property05], [Property06], [Property07], [Property08], [Property09], [Property10], [PromFDate], [PromTDate], [PromFTime], [PromTTime], [PromMaxQty], [PromQtySold], [PromMCust], [PromPerm], [SugSell], [MinQty], [MaxQty], [ReOrderType], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [CustomsGroup], [CustomsRate], [DefaultWH], [ForeignBuyCost], [ForeignCCY], [Manufacturer], [LastCountedDate], [LastSaleDate], [LeadTimeDays], [GLSalesAcc], [GLExpenseAcc], [PackSize], [PurCardPrty], [AverageSTK], [CostPlusExcl], [CostPlusIncl], [DCItem], [TDSS], [SeasonCode], [ChangeSelling], [PurCardRule], [KitPrint], [KitBuildPer], [ItemID], [Frequency], [StockTakeDate], [OrdCase], [Express], [IgnorePallet], [Template], [SellBelowCost], [ExclGRVDisc], [Version], [ExpressItem], [ScaleItem], [BCAdjFactor], [BCAdjFrom], [BCAdjTo], [BCPriceIncr], [BaseCostExcl], [BaseCostIncl], [BCAdjFactorPerc], [BCAdjFactorVal], [Description3], [OutSesnOrd], [DefaultGP], [AllowReturns], [VirtualCard], [KitCostDesc1], [KitCostDesc2], [KitCostDesc3], [KitCost1], [KitCost2], [KitCost3], [KitWastePerc], [BinlocMax], [BinlocRate], [ReportingItem], [SaleGroup], [RebateLastIncl], [LastRecvSupp], [AvgSalesQty], [ScalePrice] FROM [BROKEN_STKMaster]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stocktype = $records["StockType"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->vatcode = $records["VATCode"];
				$instance->deptcode = $records["DeptCode"];
				$instance->subdept = $records["SubDept"];
				$instance->category1 = $records["Category1"];
				$instance->category2 = $records["Category2"];
				$instance->category3 = $records["Category3"];
				$instance->category4 = $records["Category4"];
				$instance->supplier = $records["Supplier"];
				$instance->suppcode = $records["SuppCode"];
				$instance->barcode = $records["BarCode"];
				$instance->variant = $records["Variant"];
				$instance->units = $records["Units"];
				$instance->singles = $records["Singles"];
				$instance->packcase = $records["PackCase"];
				$instance->casepall = $records["CasePall"];
				$instance->weight = $records["Weight"];
				$instance->binlocation = $records["Binlocation"];
				$instance->itemlength = $records["ItemLength"];
				$instance->itembreadth = $records["ItemBreadth"];
				$instance->itemheight = $records["ItemHeight"];
				$instance->serialtrack = $records["SerialTrack"];
				$instance->linkedserial = $records["LinkedSerial"];
				$instance->kitfunction = $records["KitFunction"];
				$instance->negativeqty = $records["NegativeQty"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->saleitem = $records["SaleItem"];
				$instance->inventoryitem = $records["InventoryItem"];
				$instance->printlabel = $records["PrintLabel"];
				$instance->miscgp = $records["MiscGP"];
				$instance->qtydecimal = $records["QtyDecimal"];
				$instance->costdecimal = $records["CostDecimal"];
				$instance->selldecimal = $records["SellDecimal"];
				$instance->sqmbox = $records["SqmBox"];
				$instance->tilesize = $records["TileSize"];
				$instance->tilegrade = $records["TileGrade"];
				$instance->sctemplate = $records["SCTemplate"];
				$instance->lengthcolor = $records["LengthColor"];
				$instance->lengthsize = $records["LengthSize"];
				$instance->descriptions = $records["Descriptions"];
				$instance->food = $records["Food"];
				$instance->kvi = $records["KVI"];
				$instance->divertcode = $records["DivertCode"];
				$instance->scaletype = $records["ScaleType"];
				$instance->status = $records["Status"];
				$instance->wtcasestart = $records["WTCaseStart"];
				$instance->wtcaselength = $records["WTCaseLength"];
				$instance->wtcasefactor = $records["WTCaseFactor"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
				$instance->rebatelastexcl = $records["RebateLastExcl"];
				$instance->costcode = $records["CostCode"];
				$instance->property01 = $records["Property01"];
				$instance->property02 = $records["Property02"];
				$instance->property03 = $records["Property03"];
				$instance->property04 = $records["Property04"];
				$instance->property05 = $records["Property05"];
				$instance->property06 = $records["Property06"];
				$instance->property07 = $records["Property07"];
				$instance->property08 = $records["Property08"];
				$instance->property09 = $records["Property09"];
				$instance->property10 = $records["Property10"];
				$instance->promfdate = $records["PromFDate"];
				$instance->promtdate = $records["PromTDate"];
				$instance->promftime = $records["PromFTime"];
				$instance->promttime = $records["PromTTime"];
				$instance->prommaxqty = $records["PromMaxQty"];
				$instance->promqtysold = $records["PromQtySold"];
				$instance->prommcust = $records["PromMCust"];
				$instance->promperm = $records["PromPerm"];
				$instance->sugsell = $records["SugSell"];
				$instance->minqty = $records["MinQty"];
				$instance->maxqty = $records["MaxQty"];
				$instance->reordertype = $records["ReOrderType"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->customsgroup = $records["CustomsGroup"];
				$instance->customsrate = $records["CustomsRate"];
				$instance->defaultwh = $records["DefaultWH"];
				$instance->foreignbuycost = $records["ForeignBuyCost"];
				$instance->foreignccy = $records["ForeignCCY"];
				$instance->manufacturer = $records["Manufacturer"];
				$instance->lastcounteddate = $records["LastCountedDate"];
				$instance->lastsaledate = $records["LastSaleDate"];
				$instance->leadtimedays = $records["LeadTimeDays"];
				$instance->glsalesacc = $records["GLSalesAcc"];
				$instance->glexpenseacc = $records["GLExpenseAcc"];
				$instance->packsize = $records["PackSize"];
				$instance->purcardprty = $records["PurCardPrty"];
				$instance->averagestk = $records["AverageSTK"];
				$instance->costplusexcl = $records["CostPlusExcl"];
				$instance->costplusincl = $records["CostPlusIncl"];
				$instance->dcitem = $records["DCItem"];
				$instance->tdss = $records["TDSS"];
				$instance->seasoncode = $records["SeasonCode"];
				$instance->changeselling = $records["ChangeSelling"];
				$instance->purcardrule = $records["PurCardRule"];
				$instance->kitprint = $records["KitPrint"];
				$instance->kitbuildper = $records["KitBuildPer"];
				$instance->itemid = $records["ItemID"];
				$instance->frequency = $records["Frequency"];
				$instance->stocktakedate = $records["StockTakeDate"];
				$instance->ordcase = $records["OrdCase"];
				$instance->express = $records["Express"];
				$instance->ignorepallet = $records["IgnorePallet"];
				$instance->template = $records["Template"];
				$instance->sellbelowcost = $records["SellBelowCost"];
				$instance->exclgrvdisc = $records["ExclGRVDisc"];
				$instance->version = $records["Version"];
				$instance->expressitem = $records["ExpressItem"];
				$instance->scaleitem = $records["ScaleItem"];
				$instance->bcadjfactor = $records["BCAdjFactor"];
				$instance->bcadjfrom = $records["BCAdjFrom"];
				$instance->bcadjto = $records["BCAdjTo"];
				$instance->bcpriceincr = $records["BCPriceIncr"];
				$instance->basecostexcl = $records["BaseCostExcl"];
				$instance->basecostincl = $records["BaseCostIncl"];
				$instance->bcadjfactorperc = $records["BCAdjFactorPerc"];
				$instance->bcadjfactorval = $records["BCAdjFactorVal"];
				$instance->description3 = $records["Description3"];
				$instance->outsesnord = $records["OutSesnOrd"];
				$instance->defaultgp = $records["DefaultGP"];
				$instance->allowreturns = $records["AllowReturns"];
				$instance->virtualcard = $records["VirtualCard"];
				$instance->kitcostdesc1 = $records["KitCostDesc1"];
				$instance->kitcostdesc2 = $records["KitCostDesc2"];
				$instance->kitcostdesc3 = $records["KitCostDesc3"];
				$instance->kitcost1 = $records["KitCost1"];
				$instance->kitcost2 = $records["KitCost2"];
				$instance->kitcost3 = $records["KitCost3"];
				$instance->kitwasteperc = $records["KitWastePerc"];
				$instance->binlocmax = $records["BinlocMax"];
				$instance->binlocrate = $records["BinlocRate"];
				$instance->reportingitem = $records["ReportingItem"];
				$instance->salegroup = $records["SaleGroup"];
				$instance->rebatelastincl = $records["RebateLastIncl"];
				$instance->lastrecvsupp = $records["LastRecvSupp"];
				$instance->avgsalesqty = $records["AvgSalesQty"];
				$instance->scaleprice = $records["ScalePrice"];
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