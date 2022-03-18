<?php
/**
@Author			:	Lesley
@Date			:	2020/10/24 12:28:17
@Database			:	MRJ
@Table			:	STKMaster

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
"public nvarchar Binlocation" of type [nvarchar]
"public nvarchar Descriptions" of type [nvarchar]
"public nvarchar Food" of type [nvarchar]
"public nvarchar KVI" of type [nvarchar]
"public nvarchar DivertCode" of type [nvarchar]
"public nvarchar ScaleType" of type [nvarchar]
"public nvarchar Status" of type [nvarchar]
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
"public nvarchar SerialTrack" of type [nvarchar]
"public nvarchar LinkedSerial" of type [nvarchar]
"public nvarchar KitFunction" of type [nvarchar]
"public nvarchar NegativeQty" of type [nvarchar]
"public nvarchar PurchaseItem" of type [nvarchar]
"public nvarchar SaleItem" of type [nvarchar]
"public nvarchar InventoryItem" of type [nvarchar]
"public nvarchar PrintLabel" of type [nvarchar]
"public nvarchar TileSize" of type [nvarchar]
"public nvarchar TileGrade" of type [nvarchar]
"public nvarchar SCTemplate" of type [nvarchar]
"public nvarchar PromPerm" of type [nvarchar]
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
"public nvarchar DefaultWH" of type [nvarchar]
"public nvarchar ForeignCCY" of type [nvarchar]
"public nvarchar Manufacturer" of type [nvarchar]
"public nvarchar LastCountedDate" of type [nvarchar]
"public nvarchar LastSaleDate" of type [nvarchar]
"public float BinlocMax" of type [float]
"public float BinlocRate" of type [float]
"public nvarchar ReportingItem" of type [nvarchar]
"public nvarchar SaleGroup" of type [nvarchar]
"public nvarchar LastRecvSupp" of type [nvarchar]
"public float AvgSalesQty" of type [float]
"public nvarchar ScalePrice" of type [nvarchar]
"public float KitWeightTol" of type [float]
"public nvarchar GLPostGroup" of type [nvarchar]
"public nvarchar OnlineRange" of type [nvarchar]
"public nvarchar FabricItem" of type [nvarchar]
"public nvarchar TileItem" of type [nvarchar]
"public nvarchar WeightedItem" of type [nvarchar]
"public nvarchar BestBeforeCode" of type [nvarchar]
"public nvarchar PalletItem" of type [nvarchar]
"public nvarchar SplitCodeItem" of type [nvarchar]
"public float TareWeight" of type [float]
"public int LoyaltyPnts" of type [int]
"public float KitCostFactor" of type [float]
"public int SellByDays" of type [int]
"public nvarchar UNIPin" of type [nvarchar]
"public nvarchar DispatchItem" of type [nvarchar]
"public nvarchar DispatchWH" of type [nvarchar]
"public int ShelfLifeDays" of type [int]
"public float ListCostExcl" of type [float]
"public float ListCostIncl" of type [float]
"public float CustomVATRate" of type [float]
"public nvarchar DCItem" of type [nvarchar]
"public nvarchar TDSS" of type [nvarchar]
"public nvarchar SeasonCode" of type [nvarchar]
"public nvarchar ChangeSelling" of type [nvarchar]
"public nvarchar PurCardRule" of type [nvarchar]
"public nvarchar KitPrint" of type [nvarchar]
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
"public nvarchar GLSalesAcc" of type [nvarchar]
"public nvarchar GLExpenseAcc" of type [nvarchar]
"public nvarchar PackSize" of type [nvarchar]
"public nvarchar BCAdjFrom" of type [nvarchar]
"public nvarchar BCAdjTo" of type [nvarchar]
"public nvarchar BCPriceIncr" of type [nvarchar]
"public nvarchar AllowReturns" of type [nvarchar]
"public nvarchar VirtualCard" of type [nvarchar]
"public nvarchar KitCostDesc1" of type [nvarchar]
"public nvarchar KitCostDesc2" of type [nvarchar]
"public nvarchar KitCostDesc3" of type [nvarchar]
"public nvarchar Description3" of type [nvarchar]
"public nvarchar OutSesnOrd" of type [nvarchar]
"public int Units" of type [int]
"public int Singles" of type [int]
"public int PackCase" of type [int]
"public int CasePall" of type [int]
"public float Weight" of type [float]
"public float ItemLength" of type [float]
"public float ItemBreadth" of type [float]
"public float ItemHeight" of type [float]
"public float MiscGP" of type [float]
"public int QtyDecimal" of type [int]
"public int CostDecimal" of type [int]
"public int SellDecimal" of type [int]
"public float SqmBox" of type [float]
"public int LengthColor" of type [int]
"public int LengthSize" of type [int]
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
"public float PromMaxQty" of type [float]
"public float PromQtySold" of type [float]
"public float PromMCust" of type [float]
"public float SugSell" of type [float]
"public float MinQty" of type [float]
"public float MaxQty" of type [float]
"public float CustomsRate" of type [float]
"public float ForeignBuyCost" of type [float]
"public int LeadTimeDays" of type [int]
"public int PurCardPrty" of type [int]
"public int AverageSTK" of type [int]
"public float CostPlusExcl" of type [float]
"public float CostPlusIncl" of type [float]
"public int KitBuildPer" of type [int]
"public int ItemID" of type [int]
"public float BCAdjFactor" of type [float]
"public float BaseCostExcl" of type [float]
"public float BaseCostIncl" of type [float]
"public float BCAdjFactorPerc" of type [float]
"public float BCAdjFactorVal" of type [float]
"public float DefaultGP" of type [float]
"public float KitCost1" of type [float]
"public float KitCost2" of type [float]
"public float KitCost3" of type [float]
"public float KitWastePerc" of type [float]
 */
namespace genesis;


use PDO;

class Stkmaster {

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
    public $binlocation ;
    public $descriptions ;
    public $food ;
    public $kvi ;
    public $divertcode ;
    public $scaletype ;
    public $status ;
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
    public $serialtrack ;
    public $linkedserial ;
    public $kitfunction ;
    public $negativeqty ;
    public $purchaseitem ;
    public $saleitem ;
    public $inventoryitem ;
    public $printlabel ;
    public $tilesize ;
    public $tilegrade ;
    public $sctemplate ;
    public $promperm ;
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
    public $defaultwh ;
    public $foreignccy ;
    public $manufacturer ;
    public $lastcounteddate ;
    public $lastsaledate ;
    public $binlocmax ;
    public $binlocrate ;
    public $reportingitem ;
    public $salegroup ;
    public $lastrecvsupp ;
    public $avgsalesqty ;
    public $scaleprice ;
    public $kitweighttol ;
    public $glpostgroup ;
    public $onlinerange ;
    public $fabricitem ;
    public $tileitem ;
    public $weighteditem ;
    public $bestbeforecode ;
    public $palletitem ;
    public $splitcodeitem ;
    public $tareweight ;
    public $loyaltypnts ;
    public $kitcostfactor ;
    public $sellbydays ;
    public $unipin ;
    public $dispatchitem ;
    public $dispatchwh ;
    public $shelflifedays ;
    public $listcostexcl ;
    public $listcostincl ;
    public $customvatrate ;
    public $dcitem ;
    public $tdss ;
    public $seasoncode ;
    public $changeselling ;
    public $purcardrule ;
    public $kitprint ;
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
    public $glsalesacc ;
    public $glexpenseacc ;
    public $packsize ;
    public $bcadjfrom ;
    public $bcadjto ;
    public $bcpriceincr ;
    public $allowreturns ;
    public $virtualcard ;
    public $kitcostdesc1 ;
    public $kitcostdesc2 ;
    public $kitcostdesc3 ;
    public $description3 ;
    public $outsesnord ;
    public $units ;
    public $singles ;
    public $packcase ;
    public $casepall ;
    public $weight ;
    public $itemlength ;
    public $itembreadth ;
    public $itemheight ;
    public $miscgp ;
    public $qtydecimal ;
    public $costdecimal ;
    public $selldecimal ;
    public $sqmbox ;
    public $lengthcolor ;
    public $lengthsize ;
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
    public $prommaxqty ;
    public $promqtysold ;
    public $prommcust ;
    public $sugsell ;
    public $minqty ;
    public $maxqty ;
    public $customsrate ;
    public $foreignbuycost ;
    public $leadtimedays ;
    public $purcardprty ;
    public $averagestk ;
    public $costplusexcl ;
    public $costplusincl ;
    public $kitbuildper ;
    public $itemid ;
    public $bcadjfactor ;
    public $basecostexcl ;
    public $basecostincl ;
    public $bcadjfactorperc ;
    public $bcadjfactorval ;
    public $defaultgp ;
    public $kitcost1 ;
    public $kitcost2 ;
    public $kitcost3 ;
    public $kitwasteperc ;


    /*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RecID($conn,$recid) {
		$instance = new self();
		try {

			$query = " SELECT RecID, [CO], [Branch], [StockType], [StockCode], [LinkCode], [Description1], [Description2], [VATCode], [DeptCode], [SubDept], [Category1], [Category2], [Category3], [Category4], [Supplier], [SuppCode], [BarCode], [Variant], [Binlocation], [Descriptions], [Food], [KVI], [DivertCode], [ScaleType], [Status], [CostCode], [Property01], [Property02], [Property03], [Property04], [Property05], [Property06], [Property07], [Property08], [Property09], [Property10], [PromFDate], [PromTDate], [PromFTime], [PromTTime], [SerialTrack], [LinkedSerial], [KitFunction], [NegativeQty], [PurchaseItem], [SaleItem], [InventoryItem], [PrintLabel], [TileSize], [TileGrade], [SCTemplate], [PromPerm], [ReOrderType], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [CustomsGroup], [DefaultWH], [ForeignCCY], [Manufacturer], [LastCountedDate], [LastSaleDate], [BinlocMax], [BinlocRate], [ReportingItem], [SaleGroup], [LastRecvSupp], [AvgSalesQty], [ScalePrice], [KitWeightTol], [GLPostGroup], [OnlineRange], [FabricItem], [TileItem], [WeightedItem], [BestBeforeCode], [PalletItem], [SplitCodeItem], [TareWeight], [LoyaltyPnts], [KitCostFactor], [SellByDays], [UNIPin], [DispatchItem], [DispatchWH], [ShelfLifeDays], [ListCostExcl], [ListCostIncl], [CustomVATRate], [DCItem], [TDSS], [SeasonCode], [ChangeSelling], [PurCardRule], [KitPrint], [Frequency], [StockTakeDate], [OrdCase], [Express], [IgnorePallet], [Template], [SellBelowCost], [ExclGRVDisc], [Version], [ExpressItem], [ScaleItem], [GLSalesAcc], [GLExpenseAcc], [PackSize], [BCAdjFrom], [BCAdjTo], [BCPriceIncr], [AllowReturns], [VirtualCard], [KitCostDesc1], [KitCostDesc2], [KitCostDesc3], [Description3], [OutSesnOrd], [Units], [Singles], [PackCase], [CasePall], [Weight], [ItemLength], [ItemBreadth], [ItemHeight], [MiscGP], [QtyDecimal], [CostDecimal], [SellDecimal], [SqmBox], [LengthColor], [LengthSize], [WTCaseStart], [WTCaseLength], [WTCaseFactor], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [RebateAvgExcl], [RebateLastExcl], [PromMaxQty], [PromQtySold], [PromMCust], [SugSell], [MinQty], [MaxQty], [CustomsRate], [ForeignBuyCost], [LeadTimeDays], [PurCardPrty], [AverageSTK], [CostPlusExcl], [CostPlusIncl], [KitBuildPer], [ItemID], [BCAdjFactor], [BaseCostExcl], [BaseCostIncl], [BCAdjFactorPerc], [BCAdjFactorVal], [DefaultGP], [KitCost1], [KitCost2], [KitCost3], [KitWastePerc] FROM [STKMaster]  WHERE [RecID]=:recid  ";
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
                $instance->binlocation = $records["Binlocation"];
                $instance->descriptions = $records["Descriptions"];
                $instance->food = $records["Food"];
                $instance->kvi = $records["KVI"];
                $instance->divertcode = $records["DivertCode"];
                $instance->scaletype = $records["ScaleType"];
                $instance->status = $records["Status"];
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
                $instance->serialtrack = $records["SerialTrack"];
                $instance->linkedserial = $records["LinkedSerial"];
                $instance->kitfunction = $records["KitFunction"];
                $instance->negativeqty = $records["NegativeQty"];
                $instance->purchaseitem = $records["PurchaseItem"];
                $instance->saleitem = $records["SaleItem"];
                $instance->inventoryitem = $records["InventoryItem"];
                $instance->printlabel = $records["PrintLabel"];
                $instance->tilesize = $records["TileSize"];
                $instance->tilegrade = $records["TileGrade"];
                $instance->sctemplate = $records["SCTemplate"];
                $instance->promperm = $records["PromPerm"];
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
                $instance->defaultwh = $records["DefaultWH"];
                $instance->foreignccy = $records["ForeignCCY"];
                $instance->manufacturer = $records["Manufacturer"];
                $instance->lastcounteddate = $records["LastCountedDate"];
                $instance->lastsaledate = $records["LastSaleDate"];
                $instance->binlocmax = $records["BinlocMax"];
                $instance->binlocrate = $records["BinlocRate"];
                $instance->reportingitem = $records["ReportingItem"];
                $instance->salegroup = $records["SaleGroup"];
                $instance->lastrecvsupp = $records["LastRecvSupp"];
                $instance->avgsalesqty = $records["AvgSalesQty"];
                $instance->scaleprice = $records["ScalePrice"];
                $instance->kitweighttol = $records["KitWeightTol"];
                $instance->glpostgroup = $records["GLPostGroup"];
                $instance->onlinerange = $records["OnlineRange"];
                $instance->fabricitem = $records["FabricItem"];
                $instance->tileitem = $records["TileItem"];
                $instance->weighteditem = $records["WeightedItem"];
                $instance->bestbeforecode = $records["BestBeforeCode"];
                $instance->palletitem = $records["PalletItem"];
                $instance->splitcodeitem = $records["SplitCodeItem"];
                $instance->tareweight = $records["TareWeight"];
                $instance->loyaltypnts = $records["LoyaltyPnts"];
                $instance->kitcostfactor = $records["KitCostFactor"];
                $instance->sellbydays = $records["SellByDays"];
                $instance->unipin = $records["UNIPin"];
                $instance->dispatchitem = $records["DispatchItem"];
                $instance->dispatchwh = $records["DispatchWH"];
                $instance->shelflifedays = $records["ShelfLifeDays"];
                $instance->listcostexcl = $records["ListCostExcl"];
                $instance->listcostincl = $records["ListCostIncl"];
                $instance->customvatrate = $records["CustomVATRate"];
                $instance->dcitem = $records["DCItem"];
                $instance->tdss = $records["TDSS"];
                $instance->seasoncode = $records["SeasonCode"];
                $instance->changeselling = $records["ChangeSelling"];
                $instance->purcardrule = $records["PurCardRule"];
                $instance->kitprint = $records["KitPrint"];
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
                $instance->glsalesacc = $records["GLSalesAcc"];
                $instance->glexpenseacc = $records["GLExpenseAcc"];
                $instance->packsize = $records["PackSize"];
                $instance->bcadjfrom = $records["BCAdjFrom"];
                $instance->bcadjto = $records["BCAdjTo"];
                $instance->bcpriceincr = $records["BCPriceIncr"];
                $instance->allowreturns = $records["AllowReturns"];
                $instance->virtualcard = $records["VirtualCard"];
                $instance->kitcostdesc1 = $records["KitCostDesc1"];
                $instance->kitcostdesc2 = $records["KitCostDesc2"];
                $instance->kitcostdesc3 = $records["KitCostDesc3"];
                $instance->description3 = $records["Description3"];
                $instance->outsesnord = $records["OutSesnOrd"];
                $instance->units = $records["Units"];
                $instance->singles = $records["Singles"];
                $instance->packcase = $records["PackCase"];
                $instance->casepall = $records["CasePall"];
                $instance->weight = $records["Weight"];
                $instance->itemlength = $records["ItemLength"];
                $instance->itembreadth = $records["ItemBreadth"];
                $instance->itemheight = $records["ItemHeight"];
                $instance->miscgp = $records["MiscGP"];
                $instance->qtydecimal = $records["QtyDecimal"];
                $instance->costdecimal = $records["CostDecimal"];
                $instance->selldecimal = $records["SellDecimal"];
                $instance->sqmbox = $records["SqmBox"];
                $instance->lengthcolor = $records["LengthColor"];
                $instance->lengthsize = $records["LengthSize"];
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
                $instance->prommaxqty = $records["PromMaxQty"];
                $instance->promqtysold = $records["PromQtySold"];
                $instance->prommcust = $records["PromMCust"];
                $instance->sugsell = $records["SugSell"];
                $instance->minqty = $records["MinQty"];
                $instance->maxqty = $records["MaxQty"];
                $instance->customsrate = $records["CustomsRate"];
                $instance->foreignbuycost = $records["ForeignBuyCost"];
                $instance->leadtimedays = $records["LeadTimeDays"];
                $instance->purcardprty = $records["PurCardPrty"];
                $instance->averagestk = $records["AverageSTK"];
                $instance->costplusexcl = $records["CostPlusExcl"];
                $instance->costplusincl = $records["CostPlusIncl"];
                $instance->kitbuildper = $records["KitBuildPer"];
                $instance->itemid = $records["ItemID"];
                $instance->bcadjfactor = $records["BCAdjFactor"];
                $instance->basecostexcl = $records["BaseCostExcl"];
                $instance->basecostincl = $records["BaseCostIncl"];
                $instance->bcadjfactorperc = $records["BCAdjFactorPerc"];
                $instance->bcadjfactorval = $records["BCAdjFactorVal"];
                $instance->defaultgp = $records["DefaultGP"];
                $instance->kitcost1 = $records["KitCost1"];
                $instance->kitcost2 = $records["KitCost2"];
                $instance->kitcost3 = $records["KitCost3"];
                $instance->kitwasteperc = $records["KitWastePerc"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using StockCode
	*/
	public static function ini_Code($conn,$CLIENT_CO,$CLIENT_BRANCH,$StockCode,$LinkCode) {
		$instance = new self();
		try {

			$query = " SELECT RecID, [CO], [Branch], [StockType], [StockCode], [LinkCode], [Description1], [Description2], [VATCode], [DeptCode], [SubDept], [Category1], [Category2], [Category3], [Category4], [Supplier], [SuppCode], [BarCode], [Variant], [Binlocation], [Descriptions], [Food], [KVI], [DivertCode], [ScaleType], [Status], [CostCode], [Property01], [Property02], [Property03], [Property04], [Property05], [Property06], [Property07], [Property08], [Property09], [Property10], [PromFDate], [PromTDate], [PromFTime], [PromTTime], [SerialTrack], [LinkedSerial], [KitFunction], [NegativeQty], [PurchaseItem], [SaleItem], [InventoryItem], [PrintLabel], [TileSize], [TileGrade], [SCTemplate], [PromPerm], [ReOrderType], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [CustomsGroup], [DefaultWH], [ForeignCCY], [Manufacturer], [LastCountedDate], [LastSaleDate], [BinlocMax], [BinlocRate], [ReportingItem], [SaleGroup], [LastRecvSupp], [AvgSalesQty], [ScalePrice], [KitWeightTol], [GLPostGroup], [OnlineRange], [FabricItem], [TileItem], [WeightedItem], [BestBeforeCode], [PalletItem], [SplitCodeItem], [TareWeight], [LoyaltyPnts], [KitCostFactor], [SellByDays], [UNIPin], [DispatchItem], [DispatchWH], [ShelfLifeDays], [ListCostExcl], [ListCostIncl], [CustomVATRate], [DCItem], [TDSS], [SeasonCode], [ChangeSelling], [PurCardRule], [KitPrint], [Frequency], [StockTakeDate], [OrdCase], [Express], [IgnorePallet], [Template], [SellBelowCost], [ExclGRVDisc], [Version], [ExpressItem], [ScaleItem], [GLSalesAcc], [GLExpenseAcc], [PackSize], [BCAdjFrom], [BCAdjTo], [BCPriceIncr], [AllowReturns], [VirtualCard], [KitCostDesc1], [KitCostDesc2], [KitCostDesc3], [Description3], [OutSesnOrd], [Units], [Singles], [PackCase], [CasePall], [Weight], [ItemLength], [ItemBreadth], [ItemHeight], [MiscGP], [QtyDecimal], [CostDecimal], [SellDecimal], [SqmBox], [LengthColor], [LengthSize], [WTCaseStart], [WTCaseLength], [WTCaseFactor], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [RebateAvgExcl], [RebateLastExcl], [PromMaxQty], [PromQtySold], [PromMCust], [SugSell], [MinQty], [MaxQty], [CustomsRate], [ForeignBuyCost], [LeadTimeDays], [PurCardPrty], [AverageSTK], [CostPlusExcl], [CostPlusIncl], [KitBuildPer], [ItemID], [BCAdjFactor], [BaseCostExcl], [BaseCostIncl], [BCAdjFactorPerc], [BCAdjFactorVal], [DefaultGP], [KitCost1], [KitCost2], [KitCost3], [KitWastePerc] FROM [STKMaster] ".
                " WHERE [CO]=:co AND [Branch]=:branch AND [StockCode]=:stockcode AND [LinkCode]=:linkcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":co", $CLIENT_CO);
            $stmt->bindParam(":branch", $CLIENT_BRANCH);
            $stmt->bindParam(":stockcode", $StockCode);
            $stmt->bindParam(":linkcode", $LinkCode);
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
                $instance->binlocation = $records["Binlocation"];
                $instance->descriptions = $records["Descriptions"];
                $instance->food = $records["Food"];
                $instance->kvi = $records["KVI"];
                $instance->divertcode = $records["DivertCode"];
                $instance->scaletype = $records["ScaleType"];
                $instance->status = $records["Status"];
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
                $instance->serialtrack = $records["SerialTrack"];
                $instance->linkedserial = $records["LinkedSerial"];
                $instance->kitfunction = $records["KitFunction"];
                $instance->negativeqty = $records["NegativeQty"];
                $instance->purchaseitem = $records["PurchaseItem"];
                $instance->saleitem = $records["SaleItem"];
                $instance->inventoryitem = $records["InventoryItem"];
                $instance->printlabel = $records["PrintLabel"];
                $instance->tilesize = $records["TileSize"];
                $instance->tilegrade = $records["TileGrade"];
                $instance->sctemplate = $records["SCTemplate"];
                $instance->promperm = $records["PromPerm"];
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
                $instance->defaultwh = $records["DefaultWH"];
                $instance->foreignccy = $records["ForeignCCY"];
                $instance->manufacturer = $records["Manufacturer"];
                $instance->lastcounteddate = $records["LastCountedDate"];
                $instance->lastsaledate = $records["LastSaleDate"];
                $instance->binlocmax = $records["BinlocMax"];
                $instance->binlocrate = $records["BinlocRate"];
                $instance->reportingitem = $records["ReportingItem"];
                $instance->salegroup = $records["SaleGroup"];
                $instance->lastrecvsupp = $records["LastRecvSupp"];
                $instance->avgsalesqty = $records["AvgSalesQty"];
                $instance->scaleprice = $records["ScalePrice"];
                $instance->kitweighttol = $records["KitWeightTol"];
                $instance->glpostgroup = $records["GLPostGroup"];
                $instance->onlinerange = $records["OnlineRange"];
                $instance->fabricitem = $records["FabricItem"];
                $instance->tileitem = $records["TileItem"];
                $instance->weighteditem = $records["WeightedItem"];
                $instance->bestbeforecode = $records["BestBeforeCode"];
                $instance->palletitem = $records["PalletItem"];
                $instance->splitcodeitem = $records["SplitCodeItem"];
                $instance->tareweight = $records["TareWeight"];
                $instance->loyaltypnts = $records["LoyaltyPnts"];
                $instance->kitcostfactor = $records["KitCostFactor"];
                $instance->sellbydays = $records["SellByDays"];
                $instance->unipin = $records["UNIPin"];
                $instance->dispatchitem = $records["DispatchItem"];
                $instance->dispatchwh = $records["DispatchWH"];
                $instance->shelflifedays = $records["ShelfLifeDays"];
                $instance->listcostexcl = $records["ListCostExcl"];
                $instance->listcostincl = $records["ListCostIncl"];
                $instance->customvatrate = $records["CustomVATRate"];
                $instance->dcitem = $records["DCItem"];
                $instance->tdss = $records["TDSS"];
                $instance->seasoncode = $records["SeasonCode"];
                $instance->changeselling = $records["ChangeSelling"];
                $instance->purcardrule = $records["PurCardRule"];
                $instance->kitprint = $records["KitPrint"];
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
                $instance->glsalesacc = $records["GLSalesAcc"];
                $instance->glexpenseacc = $records["GLExpenseAcc"];
                $instance->packsize = $records["PackSize"];
                $instance->bcadjfrom = $records["BCAdjFrom"];
                $instance->bcadjto = $records["BCAdjTo"];
                $instance->bcpriceincr = $records["BCPriceIncr"];
                $instance->allowreturns = $records["AllowReturns"];
                $instance->virtualcard = $records["VirtualCard"];
                $instance->kitcostdesc1 = $records["KitCostDesc1"];
                $instance->kitcostdesc2 = $records["KitCostDesc2"];
                $instance->kitcostdesc3 = $records["KitCostDesc3"];
                $instance->description3 = $records["Description3"];
                $instance->outsesnord = $records["OutSesnOrd"];
                $instance->units = $records["Units"];
                $instance->singles = $records["Singles"];
                $instance->packcase = $records["PackCase"];
                $instance->casepall = $records["CasePall"];
                $instance->weight = $records["Weight"];
                $instance->itemlength = $records["ItemLength"];
                $instance->itembreadth = $records["ItemBreadth"];
                $instance->itemheight = $records["ItemHeight"];
                $instance->miscgp = $records["MiscGP"];
                $instance->qtydecimal = $records["QtyDecimal"];
                $instance->costdecimal = $records["CostDecimal"];
                $instance->selldecimal = $records["SellDecimal"];
                $instance->sqmbox = $records["SqmBox"];
                $instance->lengthcolor = $records["LengthColor"];
                $instance->lengthsize = $records["LengthSize"];
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
                $instance->prommaxqty = $records["PromMaxQty"];
                $instance->promqtysold = $records["PromQtySold"];
                $instance->prommcust = $records["PromMCust"];
                $instance->sugsell = $records["SugSell"];
                $instance->minqty = $records["MinQty"];
                $instance->maxqty = $records["MaxQty"];
                $instance->customsrate = $records["CustomsRate"];
                $instance->foreignbuycost = $records["ForeignBuyCost"];
                $instance->leadtimedays = $records["LeadTimeDays"];
                $instance->purcardprty = $records["PurCardPrty"];
                $instance->averagestk = $records["AverageSTK"];
                $instance->costplusexcl = $records["CostPlusExcl"];
                $instance->costplusincl = $records["CostPlusIncl"];
                $instance->kitbuildper = $records["KitBuildPer"];
                $instance->itemid = $records["ItemID"];
                $instance->bcadjfactor = $records["BCAdjFactor"];
                $instance->basecostexcl = $records["BaseCostExcl"];
                $instance->basecostincl = $records["BaseCostIncl"];
                $instance->bcadjfactorperc = $records["BCAdjFactorPerc"];
                $instance->bcadjfactorval = $records["BCAdjFactorVal"];
                $instance->defaultgp = $records["DefaultGP"];
                $instance->kitcost1 = $records["KitCost1"];
                $instance->kitcost2 = $records["KitCost2"];
                $instance->kitcost3 = $records["KitCost3"];
                $instance->kitwasteperc = $records["KitWastePerc"];
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