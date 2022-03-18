<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	GSMMaster

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar STOCKTYPE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public nvarchar DESCRIPTION2" of type [nvarchar]
	"public nvarchar VATCODE" of type [nvarchar]
	"public nvarchar DEPTCODE" of type [nvarchar]
	"public nvarchar SUBDEPT" of type [nvarchar]
	"public nvarchar CATEGORY1" of type [nvarchar]
	"public nvarchar CATEGORY2" of type [nvarchar]
	"public nvarchar CATEGORY3" of type [nvarchar]
	"public nvarchar CATEGORY4" of type [nvarchar]
	"public nvarchar SUPPLIER" of type [nvarchar]
	"public nvarchar SUPPCODE" of type [nvarchar]
	"public nvarchar BARCODE" of type [nvarchar]
	"public nvarchar VARIANT" of type [nvarchar]
	"public int UNITS" of type [int]
	"public int SINGLES" of type [int]
	"public int PACKCASE" of type [int]
	"public int CASEPALL" of type [int]
	"public nvarchar PACKSIZE" of type [nvarchar]
	"public float WEIGHT" of type [float]
	"public float ITEMLENGTH" of type [float]
	"public float ITEMBREADTH" of type [float]
	"public float ITEMHEIGHT" of type [float]
	"public nvarchar SERIALTRACK" of type [nvarchar]
	"public nvarchar LINKEDSERIAL" of type [nvarchar]
	"public nvarchar KITFUNCTION" of type [nvarchar]
	"public nvarchar NEGATIVEQTY" of type [nvarchar]
	"public nvarchar PURCHASEITEM" of type [nvarchar]
	"public nvarchar SALEITEM" of type [nvarchar]
	"public nvarchar INVENTORYITEM" of type [nvarchar]
	"public nvarchar PRINTLABEL" of type [nvarchar]
	"public float MISCGP" of type [float]
	"public int QTYDECIMAL" of type [int]
	"public int COSTDECIMAL" of type [int]
	"public int SELLDECIMAL" of type [int]
	"public float SQMBOX" of type [float]
	"public nvarchar TILESIZE" of type [nvarchar]
	"public nvarchar TILEGRADE" of type [nvarchar]
	"public nvarchar SCTEMPLATE" of type [nvarchar]
	"public int LENGTHCOLOR" of type [int]
	"public int LENGTHSIZE" of type [int]
	"public nvarchar DESCRIPTIONS" of type [nvarchar]
	"public nvarchar FOOD" of type [nvarchar]
	"public nvarchar KVI" of type [nvarchar]
	"public nvarchar DIVERTCODE" of type [nvarchar]
	"public nvarchar SCALETYPE" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public int WTCASESTART" of type [int]
	"public int WTCASELENGTH" of type [int]
	"public int WTCASEFACTOR" of type [int]
	"public float LASTCOSTEXCL" of type [float]
	"public float LASTCOSTINCL" of type [float]
	"public float AVGCOSTEXCL" of type [float]
	"public float AVGCOSTINCL" of type [float]
	"public float BUYCOSTEXCL" of type [float]
	"public float BUYCOSTINCL" of type [float]
	"public float COSTPLUSEXCL" of type [float]
	"public float COSTPLUSINCL" of type [float]
	"public nvarchar COSTCODE" of type [nvarchar]
	"public nvarchar PROPERTY01" of type [nvarchar]
	"public nvarchar PROPERTY02" of type [nvarchar]
	"public nvarchar PROPERTY03" of type [nvarchar]
	"public nvarchar PROPERTY04" of type [nvarchar]
	"public nvarchar PROPERTY05" of type [nvarchar]
	"public nvarchar PROPERTY06" of type [nvarchar]
	"public nvarchar PROPERTY07" of type [nvarchar]
	"public nvarchar PROPERTY08" of type [nvarchar]
	"public nvarchar PROPERTY09" of type [nvarchar]
	"public nvarchar PROPERTY10" of type [nvarchar]
	"public float SUGSELL" of type [float]
	"public nvarchar REORDERTYPE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar MANUFACTURER" of type [nvarchar]
	"public nvarchar GLSALESACC" of type [nvarchar]
	"public nvarchar GLEXPENSEACC" of type [nvarchar]
	"public nvarchar CUSTOMSGROUP" of type [nvarchar]
	"public float CUSTOMSRATE" of type [float]
	"public nvarchar PURCARDRULE" of type [nvarchar]
	"public int PURCARDPRTY" of type [int]
	"public int AVERAGESTK" of type [int]
	"public nvarchar DCITEM" of type [nvarchar]
	"public float FOREIGNBUYCOST" of type [float]
	"public nvarchar FOREIGNCCY" of type [nvarchar]
	"public nvarchar TDSS" of type [nvarchar]
	"public nvarchar SEASONCODE" of type [nvarchar]
	"public nvarchar CHANGESELLING" of type [nvarchar]
	"public nvarchar KITPRINT" of type [nvarchar]
	"public int KITBUILDPER" of type [int]
	"public int ITEMID" of type [int]
	"public nvarchar FREQUENCY" of type [nvarchar]
	"public char ORDCASE" of type [char]
	"public nvarchar EXPRESS" of type [nvarchar]
	"public nvarchar IGNOREPALLET" of type [nvarchar]
	"public nvarchar BINLOCATION" of type [nvarchar]
	"public float REBATEAVGEXCL" of type [float]
	"public float REBATELASTEXCL" of type [float]
	"public nvarchar PROMFDATE" of type [nvarchar]
	"public nvarchar PROMTDATE" of type [nvarchar]
	"public nvarchar PROMFTIME" of type [nvarchar]
	"public nvarchar PROMTTIME" of type [nvarchar]
	"public float PROMMAXQTY" of type [float]
	"public float PROMQTYSOLD" of type [float]
	"public float PROMMCUST" of type [float]
	"public nvarchar PROMPERM" of type [nvarchar]
	"public float MINQTY" of type [float]
	"public float MAXQTY" of type [float]
	"public nvarchar CREATEDATE" of type [nvarchar]
	"public nvarchar CREATETIME" of type [nvarchar]
	"public nvarchar CREATEUSER" of type [nvarchar]
	"public nvarchar CREATEMACID" of type [nvarchar]
	"public nvarchar DEFAULTWH" of type [nvarchar]
	"public nvarchar LASTCOUNTEDDATE" of type [nvarchar]
	"public nvarchar LASTSALEDATE" of type [nvarchar]
	"public int LEADTIMEDAYS" of type [int]
	"public nvarchar STOCKTAKEDATE" of type [nvarchar]
	"public nvarchar TEMPLATE" of type [nvarchar]
	"public nvarchar SELLBELOWCOST" of type [nvarchar]
	"public nvarchar EXCLGRVDISC" of type [nvarchar]
	"public nvarchar VERSION" of type [nvarchar]
	"public nvarchar SCALEITEM" of type [nvarchar]
	"public nvarchar Telplate" of type [nvarchar]
	"public float BCAdjFactor" of type [float]
	"public nvarchar BCAdjFrom" of type [nvarchar]
	"public nvarchar BCAdjTo" of type [nvarchar]
	"public nvarchar BCPriceIncr" of type [nvarchar]
	"public float BaseCostExcl" of type [float]
	"public float BaseCostIncl" of type [float]
	"public float BCAdjFactorPerc" of type [float]
	"public float BCAdjFactorVal" of type [float]
	"public nvarchar DESCRIPTION3" of type [nvarchar]
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
*/
namespace genesis;


use PDO;

class Gsmmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $stockcode ;	
	public $linkcode ;	
	public $stocktype ;	
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
	public $packsize ;	
	public $weight ;	
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
	public $costplusexcl ;	
	public $costplusincl ;	
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
	public $sugsell ;	
	public $reordertype ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $manufacturer ;	
	public $glsalesacc ;	
	public $glexpenseacc ;	
	public $customsgroup ;	
	public $customsrate ;	
	public $purcardrule ;	
	public $purcardprty ;	
	public $averagestk ;	
	public $dcitem ;	
	public $foreignbuycost ;	
	public $foreignccy ;	
	public $tdss ;	
	public $seasoncode ;	
	public $changeselling ;	
	public $kitprint ;	
	public $kitbuildper ;	
	public $itemid ;	
	public $frequency ;	
	public $ordcase ;	
	public $express ;	
	public $ignorepallet ;	
	public $binlocation ;	
	public $rebateavgexcl ;	
	public $rebatelastexcl ;	
	public $promfdate ;	
	public $promtdate ;	
	public $promftime ;	
	public $promttime ;	
	public $prommaxqty ;	
	public $promqtysold ;	
	public $prommcust ;	
	public $promperm ;	
	public $minqty ;	
	public $maxqty ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $defaultwh ;	
	public $lastcounteddate ;	
	public $lastsaledate ;	
	public $leadtimedays ;	
	public $stocktakedate ;	
	public $template ;	
	public $sellbelowcost ;	
	public $exclgrvdisc ;	
	public $version ;	
	public $scaleitem ;	
	public $telplate ;	
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
			$query = " SELECT RECID, [STOCKCODE], [LINKCODE], [STOCKTYPE], [DESCRIPTION1], [DESCRIPTION2], [VATCODE], [DEPTCODE], [SUBDEPT], [CATEGORY1], [CATEGORY2], [CATEGORY3], [CATEGORY4], [SUPPLIER], [SUPPCODE], [BARCODE], [VARIANT], [UNITS], [SINGLES], [PACKCASE], [CASEPALL], [PACKSIZE], [WEIGHT], [ITEMLENGTH], [ITEMBREADTH], [ITEMHEIGHT], [SERIALTRACK], [LINKEDSERIAL], [KITFUNCTION], [NEGATIVEQTY], [PURCHASEITEM], [SALEITEM], [INVENTORYITEM], [PRINTLABEL], [MISCGP], [QTYDECIMAL], [COSTDECIMAL], [SELLDECIMAL], [SQMBOX], [TILESIZE], [TILEGRADE], [SCTEMPLATE], [LENGTHCOLOR], [LENGTHSIZE], [DESCRIPTIONS], [FOOD], [KVI], [DIVERTCODE], [SCALETYPE], [STATUS], [WTCASESTART], [WTCASELENGTH], [WTCASEFACTOR], [LASTCOSTEXCL], [LASTCOSTINCL], [AVGCOSTEXCL], [AVGCOSTINCL], [BUYCOSTEXCL], [BUYCOSTINCL], [COSTPLUSEXCL], [COSTPLUSINCL], [COSTCODE], [PROPERTY01], [PROPERTY02], [PROPERTY03], [PROPERTY04], [PROPERTY05], [PROPERTY06], [PROPERTY07], [PROPERTY08], [PROPERTY09], [PROPERTY10], [SUGSELL], [REORDERTYPE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [MANUFACTURER], [GLSALESACC], [GLEXPENSEACC], [CUSTOMSGROUP], [CUSTOMSRATE], [PURCARDRULE], [PURCARDPRTY], [AVERAGESTK], [DCITEM], [FOREIGNBUYCOST], [FOREIGNCCY], [TDSS], [SEASONCODE], [CHANGESELLING], [KITPRINT], [KITBUILDPER], [ITEMID], [FREQUENCY], [ORDCASE], [EXPRESS], [IGNOREPALLET], [BINLOCATION], [REBATEAVGEXCL], [REBATELASTEXCL], [PROMFDATE], [PROMTDATE], [PROMFTIME], [PROMTTIME], [PROMMAXQTY], [PROMQTYSOLD], [PROMMCUST], [PROMPERM], [MINQTY], [MAXQTY], [CREATEDATE], [CREATETIME], [CREATEUSER], [CREATEMACID], [DEFAULTWH], [LASTCOUNTEDDATE], [LASTSALEDATE], [LEADTIMEDAYS], [STOCKTAKEDATE], [TEMPLATE], [SELLBELOWCOST], [EXCLGRVDISC], [VERSION], [SCALEITEM], [Telplate], [BCAdjFactor], [BCAdjFrom], [BCAdjTo], [BCPriceIncr], [BaseCostExcl], [BaseCostIncl], [BCAdjFactorPerc], [BCAdjFactorVal], [DESCRIPTION3], [OutSesnOrd], [DefaultGP], [AllowReturns], [VirtualCard], [KitCostDesc1], [KitCostDesc2], [KitCostDesc3], [KitCost1], [KitCost2], [KitCost3], [KitWastePerc], [ReportingItem], [SaleGroup], [LastRecvSupp], [AvgSalesQty], [ScalePrice], [KitWeightTol], [GLPostGroup], [OnlineRange], [FabricItem], [TileItem], [WeightedItem], [BestBeforeCode], [PalletItem], [SplitCodeItem], [TareWeight], [LoyaltyPnts], [KitCostFactor], [SellByDays], [UNIPin], [DispatchItem], [DispatchWH], [ShelfLifeDays], [ListCostExcl], [ListCostIncl], [CustomVATRate] FROM [GSMMaster]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->stocktype = $records["STOCKTYPE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->vatcode = $records["VATCODE"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->subdept = $records["SUBDEPT"];
				$instance->category1 = $records["CATEGORY1"];
				$instance->category2 = $records["CATEGORY2"];
				$instance->category3 = $records["CATEGORY3"];
				$instance->category4 = $records["CATEGORY4"];
				$instance->supplier = $records["SUPPLIER"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->barcode = $records["BARCODE"];
				$instance->variant = $records["VARIANT"];
				$instance->units = $records["UNITS"];
				$instance->singles = $records["SINGLES"];
				$instance->packcase = $records["PACKCASE"];
				$instance->casepall = $records["CASEPALL"];
				$instance->packsize = $records["PACKSIZE"];
				$instance->weight = $records["WEIGHT"];
				$instance->itemlength = $records["ITEMLENGTH"];
				$instance->itembreadth = $records["ITEMBREADTH"];
				$instance->itemheight = $records["ITEMHEIGHT"];
				$instance->serialtrack = $records["SERIALTRACK"];
				$instance->linkedserial = $records["LINKEDSERIAL"];
				$instance->kitfunction = $records["KITFUNCTION"];
				$instance->negativeqty = $records["NEGATIVEQTY"];
				$instance->purchaseitem = $records["PURCHASEITEM"];
				$instance->saleitem = $records["SALEITEM"];
				$instance->inventoryitem = $records["INVENTORYITEM"];
				$instance->printlabel = $records["PRINTLABEL"];
				$instance->miscgp = $records["MISCGP"];
				$instance->qtydecimal = $records["QTYDECIMAL"];
				$instance->costdecimal = $records["COSTDECIMAL"];
				$instance->selldecimal = $records["SELLDECIMAL"];
				$instance->sqmbox = $records["SQMBOX"];
				$instance->tilesize = $records["TILESIZE"];
				$instance->tilegrade = $records["TILEGRADE"];
				$instance->sctemplate = $records["SCTEMPLATE"];
				$instance->lengthcolor = $records["LENGTHCOLOR"];
				$instance->lengthsize = $records["LENGTHSIZE"];
				$instance->descriptions = $records["DESCRIPTIONS"];
				$instance->food = $records["FOOD"];
				$instance->kvi = $records["KVI"];
				$instance->divertcode = $records["DIVERTCODE"];
				$instance->scaletype = $records["SCALETYPE"];
				$instance->status = $records["STATUS"];
				$instance->wtcasestart = $records["WTCASESTART"];
				$instance->wtcaselength = $records["WTCASELENGTH"];
				$instance->wtcasefactor = $records["WTCASEFACTOR"];
				$instance->lastcostexcl = $records["LASTCOSTEXCL"];
				$instance->lastcostincl = $records["LASTCOSTINCL"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->avgcostincl = $records["AVGCOSTINCL"];
				$instance->buycostexcl = $records["BUYCOSTEXCL"];
				$instance->buycostincl = $records["BUYCOSTINCL"];
				$instance->costplusexcl = $records["COSTPLUSEXCL"];
				$instance->costplusincl = $records["COSTPLUSINCL"];
				$instance->costcode = $records["COSTCODE"];
				$instance->property01 = $records["PROPERTY01"];
				$instance->property02 = $records["PROPERTY02"];
				$instance->property03 = $records["PROPERTY03"];
				$instance->property04 = $records["PROPERTY04"];
				$instance->property05 = $records["PROPERTY05"];
				$instance->property06 = $records["PROPERTY06"];
				$instance->property07 = $records["PROPERTY07"];
				$instance->property08 = $records["PROPERTY08"];
				$instance->property09 = $records["PROPERTY09"];
				$instance->property10 = $records["PROPERTY10"];
				$instance->sugsell = $records["SUGSELL"];
				$instance->reordertype = $records["REORDERTYPE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->manufacturer = $records["MANUFACTURER"];
				$instance->glsalesacc = $records["GLSALESACC"];
				$instance->glexpenseacc = $records["GLEXPENSEACC"];
				$instance->customsgroup = $records["CUSTOMSGROUP"];
				$instance->customsrate = $records["CUSTOMSRATE"];
				$instance->purcardrule = $records["PURCARDRULE"];
				$instance->purcardprty = $records["PURCARDPRTY"];
				$instance->averagestk = $records["AVERAGESTK"];
				$instance->dcitem = $records["DCITEM"];
				$instance->foreignbuycost = $records["FOREIGNBUYCOST"];
				$instance->foreignccy = $records["FOREIGNCCY"];
				$instance->tdss = $records["TDSS"];
				$instance->seasoncode = $records["SEASONCODE"];
				$instance->changeselling = $records["CHANGESELLING"];
				$instance->kitprint = $records["KITPRINT"];
				$instance->kitbuildper = $records["KITBUILDPER"];
				$instance->itemid = $records["ITEMID"];
				$instance->frequency = $records["FREQUENCY"];
				$instance->ordcase = $records["ORDCASE"];
				$instance->express = $records["EXPRESS"];
				$instance->ignorepallet = $records["IGNOREPALLET"];
				$instance->binlocation = $records["BINLOCATION"];
				$instance->rebateavgexcl = $records["REBATEAVGEXCL"];
				$instance->rebatelastexcl = $records["REBATELASTEXCL"];
				$instance->promfdate = $records["PROMFDATE"];
				$instance->promtdate = $records["PROMTDATE"];
				$instance->promftime = $records["PROMFTIME"];
				$instance->promttime = $records["PROMTTIME"];
				$instance->prommaxqty = $records["PROMMAXQTY"];
				$instance->promqtysold = $records["PROMQTYSOLD"];
				$instance->prommcust = $records["PROMMCUST"];
				$instance->promperm = $records["PROMPERM"];
				$instance->minqty = $records["MINQTY"];
				$instance->maxqty = $records["MAXQTY"];
				$instance->createdate = $records["CREATEDATE"];
				$instance->createtime = $records["CREATETIME"];
				$instance->createuser = $records["CREATEUSER"];
				$instance->createmacid = $records["CREATEMACID"];
				$instance->defaultwh = $records["DEFAULTWH"];
				$instance->lastcounteddate = $records["LASTCOUNTEDDATE"];
				$instance->lastsaledate = $records["LASTSALEDATE"];
				$instance->leadtimedays = $records["LEADTIMEDAYS"];
				$instance->stocktakedate = $records["STOCKTAKEDATE"];
				$instance->template = $records["TEMPLATE"];
				$instance->sellbelowcost = $records["SELLBELOWCOST"];
				$instance->exclgrvdisc = $records["EXCLGRVDISC"];
				$instance->version = $records["VERSION"];
				$instance->scaleitem = $records["SCALEITEM"];
				$instance->telplate = $records["Telplate"];
				$instance->bcadjfactor = $records["BCAdjFactor"];
				$instance->bcadjfrom = $records["BCAdjFrom"];
				$instance->bcadjto = $records["BCAdjTo"];
				$instance->bcpriceincr = $records["BCPriceIncr"];
				$instance->basecostexcl = $records["BaseCostExcl"];
				$instance->basecostincl = $records["BaseCostIncl"];
				$instance->bcadjfactorperc = $records["BCAdjFactorPerc"];
				$instance->bcadjfactorval = $records["BCAdjFactorVal"];
				$instance->description3 = $records["DESCRIPTION3"];
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
			$query = " SELECT RECID, [STOCKCODE], [LINKCODE], [STOCKTYPE], [DESCRIPTION1], [DESCRIPTION2], [VATCODE], [DEPTCODE], [SUBDEPT], [CATEGORY1], [CATEGORY2], [CATEGORY3], [CATEGORY4], [SUPPLIER], [SUPPCODE], [BARCODE], [VARIANT], [UNITS], [SINGLES], [PACKCASE], [CASEPALL], [PACKSIZE], [WEIGHT], [ITEMLENGTH], [ITEMBREADTH], [ITEMHEIGHT], [SERIALTRACK], [LINKEDSERIAL], [KITFUNCTION], [NEGATIVEQTY], [PURCHASEITEM], [SALEITEM], [INVENTORYITEM], [PRINTLABEL], [MISCGP], [QTYDECIMAL], [COSTDECIMAL], [SELLDECIMAL], [SQMBOX], [TILESIZE], [TILEGRADE], [SCTEMPLATE], [LENGTHCOLOR], [LENGTHSIZE], [DESCRIPTIONS], [FOOD], [KVI], [DIVERTCODE], [SCALETYPE], [STATUS], [WTCASESTART], [WTCASELENGTH], [WTCASEFACTOR], [LASTCOSTEXCL], [LASTCOSTINCL], [AVGCOSTEXCL], [AVGCOSTINCL], [BUYCOSTEXCL], [BUYCOSTINCL], [COSTPLUSEXCL], [COSTPLUSINCL], [COSTCODE], [PROPERTY01], [PROPERTY02], [PROPERTY03], [PROPERTY04], [PROPERTY05], [PROPERTY06], [PROPERTY07], [PROPERTY08], [PROPERTY09], [PROPERTY10], [SUGSELL], [REORDERTYPE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [MANUFACTURER], [GLSALESACC], [GLEXPENSEACC], [CUSTOMSGROUP], [CUSTOMSRATE], [PURCARDRULE], [PURCARDPRTY], [AVERAGESTK], [DCITEM], [FOREIGNBUYCOST], [FOREIGNCCY], [TDSS], [SEASONCODE], [CHANGESELLING], [KITPRINT], [KITBUILDPER], [ITEMID], [FREQUENCY], [ORDCASE], [EXPRESS], [IGNOREPALLET], [BINLOCATION], [REBATEAVGEXCL], [REBATELASTEXCL], [PROMFDATE], [PROMTDATE], [PROMFTIME], [PROMTTIME], [PROMMAXQTY], [PROMQTYSOLD], [PROMMCUST], [PROMPERM], [MINQTY], [MAXQTY], [CREATEDATE], [CREATETIME], [CREATEUSER], [CREATEMACID], [DEFAULTWH], [LASTCOUNTEDDATE], [LASTSALEDATE], [LEADTIMEDAYS], [STOCKTAKEDATE], [TEMPLATE], [SELLBELOWCOST], [EXCLGRVDISC], [VERSION], [SCALEITEM], [Telplate], [BCAdjFactor], [BCAdjFrom], [BCAdjTo], [BCPriceIncr], [BaseCostExcl], [BaseCostIncl], [BCAdjFactorPerc], [BCAdjFactorVal], [DESCRIPTION3], [OutSesnOrd], [DefaultGP], [AllowReturns], [VirtualCard], [KitCostDesc1], [KitCostDesc2], [KitCostDesc3], [KitCost1], [KitCost2], [KitCost3], [KitWastePerc], [ReportingItem], [SaleGroup], [LastRecvSupp], [AvgSalesQty], [ScalePrice], [KitWeightTol], [GLPostGroup], [OnlineRange], [FabricItem], [TileItem], [WeightedItem], [BestBeforeCode], [PalletItem], [SplitCodeItem], [TareWeight], [LoyaltyPnts], [KitCostFactor], [SellByDays], [UNIPin], [DispatchItem], [DispatchWH], [ShelfLifeDays], [ListCostExcl], [ListCostIncl], [CustomVATRate] FROM [GSMMaster]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->stocktype = $records["STOCKTYPE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->vatcode = $records["VATCODE"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->subdept = $records["SUBDEPT"];
				$instance->category1 = $records["CATEGORY1"];
				$instance->category2 = $records["CATEGORY2"];
				$instance->category3 = $records["CATEGORY3"];
				$instance->category4 = $records["CATEGORY4"];
				$instance->supplier = $records["SUPPLIER"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->barcode = $records["BARCODE"];
				$instance->variant = $records["VARIANT"];
				$instance->units = $records["UNITS"];
				$instance->singles = $records["SINGLES"];
				$instance->packcase = $records["PACKCASE"];
				$instance->casepall = $records["CASEPALL"];
				$instance->packsize = $records["PACKSIZE"];
				$instance->weight = $records["WEIGHT"];
				$instance->itemlength = $records["ITEMLENGTH"];
				$instance->itembreadth = $records["ITEMBREADTH"];
				$instance->itemheight = $records["ITEMHEIGHT"];
				$instance->serialtrack = $records["SERIALTRACK"];
				$instance->linkedserial = $records["LINKEDSERIAL"];
				$instance->kitfunction = $records["KITFUNCTION"];
				$instance->negativeqty = $records["NEGATIVEQTY"];
				$instance->purchaseitem = $records["PURCHASEITEM"];
				$instance->saleitem = $records["SALEITEM"];
				$instance->inventoryitem = $records["INVENTORYITEM"];
				$instance->printlabel = $records["PRINTLABEL"];
				$instance->miscgp = $records["MISCGP"];
				$instance->qtydecimal = $records["QTYDECIMAL"];
				$instance->costdecimal = $records["COSTDECIMAL"];
				$instance->selldecimal = $records["SELLDECIMAL"];
				$instance->sqmbox = $records["SQMBOX"];
				$instance->tilesize = $records["TILESIZE"];
				$instance->tilegrade = $records["TILEGRADE"];
				$instance->sctemplate = $records["SCTEMPLATE"];
				$instance->lengthcolor = $records["LENGTHCOLOR"];
				$instance->lengthsize = $records["LENGTHSIZE"];
				$instance->descriptions = $records["DESCRIPTIONS"];
				$instance->food = $records["FOOD"];
				$instance->kvi = $records["KVI"];
				$instance->divertcode = $records["DIVERTCODE"];
				$instance->scaletype = $records["SCALETYPE"];
				$instance->status = $records["STATUS"];
				$instance->wtcasestart = $records["WTCASESTART"];
				$instance->wtcaselength = $records["WTCASELENGTH"];
				$instance->wtcasefactor = $records["WTCASEFACTOR"];
				$instance->lastcostexcl = $records["LASTCOSTEXCL"];
				$instance->lastcostincl = $records["LASTCOSTINCL"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->avgcostincl = $records["AVGCOSTINCL"];
				$instance->buycostexcl = $records["BUYCOSTEXCL"];
				$instance->buycostincl = $records["BUYCOSTINCL"];
				$instance->costplusexcl = $records["COSTPLUSEXCL"];
				$instance->costplusincl = $records["COSTPLUSINCL"];
				$instance->costcode = $records["COSTCODE"];
				$instance->property01 = $records["PROPERTY01"];
				$instance->property02 = $records["PROPERTY02"];
				$instance->property03 = $records["PROPERTY03"];
				$instance->property04 = $records["PROPERTY04"];
				$instance->property05 = $records["PROPERTY05"];
				$instance->property06 = $records["PROPERTY06"];
				$instance->property07 = $records["PROPERTY07"];
				$instance->property08 = $records["PROPERTY08"];
				$instance->property09 = $records["PROPERTY09"];
				$instance->property10 = $records["PROPERTY10"];
				$instance->sugsell = $records["SUGSELL"];
				$instance->reordertype = $records["REORDERTYPE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->manufacturer = $records["MANUFACTURER"];
				$instance->glsalesacc = $records["GLSALESACC"];
				$instance->glexpenseacc = $records["GLEXPENSEACC"];
				$instance->customsgroup = $records["CUSTOMSGROUP"];
				$instance->customsrate = $records["CUSTOMSRATE"];
				$instance->purcardrule = $records["PURCARDRULE"];
				$instance->purcardprty = $records["PURCARDPRTY"];
				$instance->averagestk = $records["AVERAGESTK"];
				$instance->dcitem = $records["DCITEM"];
				$instance->foreignbuycost = $records["FOREIGNBUYCOST"];
				$instance->foreignccy = $records["FOREIGNCCY"];
				$instance->tdss = $records["TDSS"];
				$instance->seasoncode = $records["SEASONCODE"];
				$instance->changeselling = $records["CHANGESELLING"];
				$instance->kitprint = $records["KITPRINT"];
				$instance->kitbuildper = $records["KITBUILDPER"];
				$instance->itemid = $records["ITEMID"];
				$instance->frequency = $records["FREQUENCY"];
				$instance->ordcase = $records["ORDCASE"];
				$instance->express = $records["EXPRESS"];
				$instance->ignorepallet = $records["IGNOREPALLET"];
				$instance->binlocation = $records["BINLOCATION"];
				$instance->rebateavgexcl = $records["REBATEAVGEXCL"];
				$instance->rebatelastexcl = $records["REBATELASTEXCL"];
				$instance->promfdate = $records["PROMFDATE"];
				$instance->promtdate = $records["PROMTDATE"];
				$instance->promftime = $records["PROMFTIME"];
				$instance->promttime = $records["PROMTTIME"];
				$instance->prommaxqty = $records["PROMMAXQTY"];
				$instance->promqtysold = $records["PROMQTYSOLD"];
				$instance->prommcust = $records["PROMMCUST"];
				$instance->promperm = $records["PROMPERM"];
				$instance->minqty = $records["MINQTY"];
				$instance->maxqty = $records["MAXQTY"];
				$instance->createdate = $records["CREATEDATE"];
				$instance->createtime = $records["CREATETIME"];
				$instance->createuser = $records["CREATEUSER"];
				$instance->createmacid = $records["CREATEMACID"];
				$instance->defaultwh = $records["DEFAULTWH"];
				$instance->lastcounteddate = $records["LASTCOUNTEDDATE"];
				$instance->lastsaledate = $records["LASTSALEDATE"];
				$instance->leadtimedays = $records["LEADTIMEDAYS"];
				$instance->stocktakedate = $records["STOCKTAKEDATE"];
				$instance->template = $records["TEMPLATE"];
				$instance->sellbelowcost = $records["SELLBELOWCOST"];
				$instance->exclgrvdisc = $records["EXCLGRVDISC"];
				$instance->version = $records["VERSION"];
				$instance->scaleitem = $records["SCALEITEM"];
				$instance->telplate = $records["Telplate"];
				$instance->bcadjfactor = $records["BCAdjFactor"];
				$instance->bcadjfrom = $records["BCAdjFrom"];
				$instance->bcadjto = $records["BCAdjTo"];
				$instance->bcpriceincr = $records["BCPriceIncr"];
				$instance->basecostexcl = $records["BaseCostExcl"];
				$instance->basecostincl = $records["BaseCostIncl"];
				$instance->bcadjfactorperc = $records["BCAdjFactorPerc"];
				$instance->bcadjfactorval = $records["BCAdjFactorVal"];
				$instance->description3 = $records["DESCRIPTION3"];
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