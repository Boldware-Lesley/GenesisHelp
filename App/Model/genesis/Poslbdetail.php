<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	POSLBDetail

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar TILLNO" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TRANDATE" of type [nvarchar]
	"public int LINENO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public nvarchar DESCRIPTION2" of type [nvarchar]
	"public float QUANTITY" of type [float]
	"public float PRICE" of type [float]
	"public float PRICEEXCL" of type [float]
	"public float PRICEINCL" of type [float]
	"public nvarchar DISCOUNTTYPE" of type [nvarchar]
	"public float DISCOUNTVALUE" of type [float]
	"public float LINEDISCOUNT" of type [float]
	"public float LINEVAT" of type [float]
	"public float LINETOTAL" of type [float]
	"public float LINETOTALEXCL" of type [float]
	"public float LINETOTALINCL" of type [float]
	"public float LINKQTY" of type [float]
	"public nvarchar VATCODE" of type [nvarchar]
	"public float VATRATE" of type [float]
	"public nvarchar VATINDICATOR" of type [nvarchar]
	"public float COSTEXCL" of type [float]
	"public float COSTINCL" of type [float]
	"public float TOTALCOSTEXCL" of type [float]
	"public float TOTALCOSTINCL" of type [float]
	"public float PROFIT" of type [float]
	"public nvarchar WH" of type [nvarchar]
	"public nvarchar SALESREP" of type [nvarchar]
	"public nvarchar DEPT" of type [nvarchar]
	"public nvarchar SUBDEPT" of type [nvarchar]
	"public int UNITS" of type [int]
	"public float WEIGHT" of type [float]
	"public nvarchar STOCKTYPE" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar TEXT1" of type [nvarchar]
	"public nvarchar TEXT2" of type [nvarchar]
	"public nvarchar PRICECODE" of type [nvarchar]
	"public nvarchar PROMOTION" of type [nvarchar]
	"public nvarchar PROMOTIONTYPE" of type [nvarchar]
	"public nvarchar PROMOTIONCODE" of type [nvarchar]
	"public nvarchar AUTHORISECODE" of type [nvarchar]
	"public nvarchar PACKSIZE" of type [nvarchar]
	"public nvarchar SERIALTRACK" of type [nvarchar]
	"public int SERIALCOUNT" of type [int]
	"public float OLDPRICE" of type [float]
	"public float SQMBOX" of type [float]
	"public nvarchar TILESIZE" of type [nvarchar]
	"public nvarchar TILEGRADE" of type [nvarchar]
	"public int NOOFBOX" of type [int]
	"public float CASES" of type [float]
	"public float PALETTES" of type [float]
	"public float DISPATCHQTY" of type [float]
	"public float DISPATCHRETURNS" of type [float]
	"public float DISPATCHBALANCE" of type [float]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar BASETYPE" of type [nvarchar]
	"public nvarchar BASEREF" of type [nvarchar]
	"public int BASELINE" of type [int]
	"public float REBAMNT" of type [float]
	"public nvarchar FREELINEIND" of type [nvarchar]
	"public nvarchar CREDITNOTEREASON" of type [nvarchar]
	"public nvarchar BARCODE" of type [nvarchar]
	"public nvarchar EODDATE" of type [nvarchar]
	"public nvarchar SUPERVISOR" of type [nvarchar]
	"public nvarchar SAPDOCNO" of type [nvarchar]
	"public float QTYINVOICE" of type [float]
	"public float QTYRETURNED" of type [float]
	"public float QTYBALANCE" of type [float]
	"public float BASEDOCAMNT" of type [float]
	"public float BASEDOCBAL" of type [float]
	"public float BASEPAYAMNT" of type [float]
	"public float BASEPAYDISC" of type [float]
	"public float DIMENSIONS" of type [float]
	"public nvarchar DRCR" of type [nvarchar]
	"public float TOTALDISCOUNT" of type [float]
	"public float FINALTOTAL" of type [float]
	"public float MANPROFIT" of type [float]
	"public float MANDISCOUNT" of type [float]
	"public float MANVAT" of type [float]
	"public float MANTOTAL" of type [float]
	"public float ONHAND" of type [float]
	"public float AVGWEEKSALE" of type [float]
	"public float BasePrice" of type [float]
	"public nvarchar BasePriceCode" of type [nvarchar]
	"public float RebAvgAmnt" of type [float]
	"public nvarchar Supervisor2" of type [nvarchar]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public nvarchar Variant" of type [nvarchar]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public nvarchar PriceChange" of type [nvarchar]
	"public nvarchar SaleGroup" of type [nvarchar]
	"public float ManQty" of type [float]
	"public float ManPrice" of type [float]
	"public nvarchar DispatchBranch" of type [nvarchar]
	"public int DispatchBox" of type [int]
	"public int SplitCode" of type [int]
	"public int SplitQty" of type [int]
	"public int SplitUnits" of type [int]
	"public float SplitPriceExcl" of type [float]
	"public float SplitPriceIncl" of type [float]
	"public int LoyaltyPnts" of type [int]
	"public float PickQty" of type [float]
	"public int PickBox" of type [int]
*/
namespace genesis;


use PDO;

class Poslbdetail {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $tillno ;	
	public $docno ;	
	public $account ;	
	public $trandate ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $quantity ;	
	public $price ;	
	public $priceexcl ;	
	public $priceincl ;	
	public $discounttype ;	
	public $discountvalue ;	
	public $linediscount ;	
	public $linevat ;	
	public $linetotal ;	
	public $linetotalexcl ;	
	public $linetotalincl ;	
	public $linkqty ;	
	public $vatcode ;	
	public $vatrate ;	
	public $vatindicator ;	
	public $costexcl ;	
	public $costincl ;	
	public $totalcostexcl ;	
	public $totalcostincl ;	
	public $profit ;	
	public $wh ;	
	public $salesrep ;	
	public $dept ;	
	public $subdept ;	
	public $units ;	
	public $weight ;	
	public $stocktype ;	
	public $ap ;	
	public $text1 ;	
	public $text2 ;	
	public $pricecode ;	
	public $promotion ;	
	public $promotiontype ;	
	public $promotioncode ;	
	public $authorisecode ;	
	public $packsize ;	
	public $serialtrack ;	
	public $serialcount ;	
	public $oldprice ;	
	public $sqmbox ;	
	public $tilesize ;	
	public $tilegrade ;	
	public $noofbox ;	
	public $cases ;	
	public $palettes ;	
	public $dispatchqty ;	
	public $dispatchreturns ;	
	public $dispatchbalance ;	
	public $status ;	
	public $basetype ;	
	public $baseref ;	
	public $baseline ;	
	public $rebamnt ;	
	public $freelineind ;	
	public $creditnotereason ;	
	public $barcode ;	
	public $eoddate ;	
	public $supervisor ;	
	public $sapdocno ;	
	public $qtyinvoice ;	
	public $qtyreturned ;	
	public $qtybalance ;	
	public $basedocamnt ;	
	public $basedocbal ;	
	public $basepayamnt ;	
	public $basepaydisc ;	
	public $dimensions ;	
	public $drcr ;	
	public $totaldiscount ;	
	public $finaltotal ;	
	public $manprofit ;	
	public $mandiscount ;	
	public $manvat ;	
	public $mantotal ;	
	public $onhand ;	
	public $avgweeksale ;	
	public $baseprice ;	
	public $basepricecode ;	
	public $rebavgamnt ;	
	public $supervisor2 ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $variant ;	
	public $sourcebranch ;	
	public $pricechange ;	
	public $salegroup ;	
	public $manqty ;	
	public $manprice ;	
	public $dispatchbranch ;	
	public $dispatchbox ;	
	public $splitcode ;	
	public $splitqty ;	
	public $splitunits ;	
	public $splitpriceexcl ;	
	public $splitpriceincl ;	
	public $loyaltypnts ;	
	public $pickqty ;	
	public $pickbox ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [TXTP], [TILLNO], [DOCNO], [ACCOUNT], [TRANDATE], [LINENO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [QUANTITY], [PRICE], [PRICEEXCL], [PRICEINCL], [DISCOUNTTYPE], [DISCOUNTVALUE], [LINEDISCOUNT], [LINEVAT], [LINETOTAL], [LINETOTALEXCL], [LINETOTALINCL], [LINKQTY], [VATCODE], [VATRATE], [VATINDICATOR], [COSTEXCL], [COSTINCL], [TOTALCOSTEXCL], [TOTALCOSTINCL], [PROFIT], [WH], [SALESREP], [DEPT], [SUBDEPT], [UNITS], [WEIGHT], [STOCKTYPE], [AP], [TEXT1], [TEXT2], [PRICECODE], [PROMOTION], [PROMOTIONTYPE], [PROMOTIONCODE], [AUTHORISECODE], [PACKSIZE], [SERIALTRACK], [SERIALCOUNT], [OLDPRICE], [SQMBOX], [TILESIZE], [TILEGRADE], [NOOFBOX], [CASES], [PALETTES], [DISPATCHQTY], [DISPATCHRETURNS], [DISPATCHBALANCE], [STATUS], [BASETYPE], [BASEREF], [BASELINE], [REBAMNT], [FREELINEIND], [CREDITNOTEREASON], [BARCODE], [EODDATE], [SUPERVISOR], [SAPDOCNO], [QTYINVOICE], [QTYRETURNED], [QTYBALANCE], [BASEDOCAMNT], [BASEDOCBAL], [BASEPAYAMNT], [BASEPAYDISC], [DIMENSIONS], [DRCR], [TOTALDISCOUNT], [FINALTOTAL], [MANPROFIT], [MANDISCOUNT], [MANVAT], [MANTOTAL], [ONHAND], [AVGWEEKSALE], [BasePrice], [BasePriceCode], [RebAvgAmnt], [Supervisor2], [AvgCostExcl], [AvgCostIncl], [Variant], [SourceBranch], [PriceChange], [SaleGroup], [ManQty], [ManPrice], [DispatchBranch], [DispatchBox], [SplitCode], [SplitQty], [SplitUnits], [SplitPriceExcl], [SplitPriceIncl], [LoyaltyPnts], [PickQty], [PickBox] FROM [POSLBDetail]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->txtp = $records["TXTP"];
				$instance->tillno = $records["TILLNO"];
				$instance->docno = $records["DOCNO"];
				$instance->account = $records["ACCOUNT"];
				$instance->trandate = $records["TRANDATE"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->quantity = $records["QUANTITY"];
				$instance->price = $records["PRICE"];
				$instance->priceexcl = $records["PRICEEXCL"];
				$instance->priceincl = $records["PRICEINCL"];
				$instance->discounttype = $records["DISCOUNTTYPE"];
				$instance->discountvalue = $records["DISCOUNTVALUE"];
				$instance->linediscount = $records["LINEDISCOUNT"];
				$instance->linevat = $records["LINEVAT"];
				$instance->linetotal = $records["LINETOTAL"];
				$instance->linetotalexcl = $records["LINETOTALEXCL"];
				$instance->linetotalincl = $records["LINETOTALINCL"];
				$instance->linkqty = $records["LINKQTY"];
				$instance->vatcode = $records["VATCODE"];
				$instance->vatrate = $records["VATRATE"];
				$instance->vatindicator = $records["VATINDICATOR"];
				$instance->costexcl = $records["COSTEXCL"];
				$instance->costincl = $records["COSTINCL"];
				$instance->totalcostexcl = $records["TOTALCOSTEXCL"];
				$instance->totalcostincl = $records["TOTALCOSTINCL"];
				$instance->profit = $records["PROFIT"];
				$instance->wh = $records["WH"];
				$instance->salesrep = $records["SALESREP"];
				$instance->dept = $records["DEPT"];
				$instance->subdept = $records["SUBDEPT"];
				$instance->units = $records["UNITS"];
				$instance->weight = $records["WEIGHT"];
				$instance->stocktype = $records["STOCKTYPE"];
				$instance->ap = $records["AP"];
				$instance->text1 = $records["TEXT1"];
				$instance->text2 = $records["TEXT2"];
				$instance->pricecode = $records["PRICECODE"];
				$instance->promotion = $records["PROMOTION"];
				$instance->promotiontype = $records["PROMOTIONTYPE"];
				$instance->promotioncode = $records["PROMOTIONCODE"];
				$instance->authorisecode = $records["AUTHORISECODE"];
				$instance->packsize = $records["PACKSIZE"];
				$instance->serialtrack = $records["SERIALTRACK"];
				$instance->serialcount = $records["SERIALCOUNT"];
				$instance->oldprice = $records["OLDPRICE"];
				$instance->sqmbox = $records["SQMBOX"];
				$instance->tilesize = $records["TILESIZE"];
				$instance->tilegrade = $records["TILEGRADE"];
				$instance->noofbox = $records["NOOFBOX"];
				$instance->cases = $records["CASES"];
				$instance->palettes = $records["PALETTES"];
				$instance->dispatchqty = $records["DISPATCHQTY"];
				$instance->dispatchreturns = $records["DISPATCHRETURNS"];
				$instance->dispatchbalance = $records["DISPATCHBALANCE"];
				$instance->status = $records["STATUS"];
				$instance->basetype = $records["BASETYPE"];
				$instance->baseref = $records["BASEREF"];
				$instance->baseline = $records["BASELINE"];
				$instance->rebamnt = $records["REBAMNT"];
				$instance->freelineind = $records["FREELINEIND"];
				$instance->creditnotereason = $records["CREDITNOTEREASON"];
				$instance->barcode = $records["BARCODE"];
				$instance->eoddate = $records["EODDATE"];
				$instance->supervisor = $records["SUPERVISOR"];
				$instance->sapdocno = $records["SAPDOCNO"];
				$instance->qtyinvoice = $records["QTYINVOICE"];
				$instance->qtyreturned = $records["QTYRETURNED"];
				$instance->qtybalance = $records["QTYBALANCE"];
				$instance->basedocamnt = $records["BASEDOCAMNT"];
				$instance->basedocbal = $records["BASEDOCBAL"];
				$instance->basepayamnt = $records["BASEPAYAMNT"];
				$instance->basepaydisc = $records["BASEPAYDISC"];
				$instance->dimensions = $records["DIMENSIONS"];
				$instance->drcr = $records["DRCR"];
				$instance->totaldiscount = $records["TOTALDISCOUNT"];
				$instance->finaltotal = $records["FINALTOTAL"];
				$instance->manprofit = $records["MANPROFIT"];
				$instance->mandiscount = $records["MANDISCOUNT"];
				$instance->manvat = $records["MANVAT"];
				$instance->mantotal = $records["MANTOTAL"];
				$instance->onhand = $records["ONHAND"];
				$instance->avgweeksale = $records["AVGWEEKSALE"];
				$instance->baseprice = $records["BasePrice"];
				$instance->basepricecode = $records["BasePriceCode"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->supervisor2 = $records["Supervisor2"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->variant = $records["Variant"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->pricechange = $records["PriceChange"];
				$instance->salegroup = $records["SaleGroup"];
				$instance->manqty = $records["ManQty"];
				$instance->manprice = $records["ManPrice"];
				$instance->dispatchbranch = $records["DispatchBranch"];
				$instance->dispatchbox = $records["DispatchBox"];
				$instance->splitcode = $records["SplitCode"];
				$instance->splitqty = $records["SplitQty"];
				$instance->splitunits = $records["SplitUnits"];
				$instance->splitpriceexcl = $records["SplitPriceExcl"];
				$instance->splitpriceincl = $records["SplitPriceIncl"];
				$instance->loyaltypnts = $records["LoyaltyPnts"];
				$instance->pickqty = $records["PickQty"];
				$instance->pickbox = $records["PickBox"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [TXTP], [TILLNO], [DOCNO], [ACCOUNT], [TRANDATE], [LINENO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [QUANTITY], [PRICE], [PRICEEXCL], [PRICEINCL], [DISCOUNTTYPE], [DISCOUNTVALUE], [LINEDISCOUNT], [LINEVAT], [LINETOTAL], [LINETOTALEXCL], [LINETOTALINCL], [LINKQTY], [VATCODE], [VATRATE], [VATINDICATOR], [COSTEXCL], [COSTINCL], [TOTALCOSTEXCL], [TOTALCOSTINCL], [PROFIT], [WH], [SALESREP], [DEPT], [SUBDEPT], [UNITS], [WEIGHT], [STOCKTYPE], [AP], [TEXT1], [TEXT2], [PRICECODE], [PROMOTION], [PROMOTIONTYPE], [PROMOTIONCODE], [AUTHORISECODE], [PACKSIZE], [SERIALTRACK], [SERIALCOUNT], [OLDPRICE], [SQMBOX], [TILESIZE], [TILEGRADE], [NOOFBOX], [CASES], [PALETTES], [DISPATCHQTY], [DISPATCHRETURNS], [DISPATCHBALANCE], [STATUS], [BASETYPE], [BASEREF], [BASELINE], [REBAMNT], [FREELINEIND], [CREDITNOTEREASON], [BARCODE], [EODDATE], [SUPERVISOR], [SAPDOCNO], [QTYINVOICE], [QTYRETURNED], [QTYBALANCE], [BASEDOCAMNT], [BASEDOCBAL], [BASEPAYAMNT], [BASEPAYDISC], [DIMENSIONS], [DRCR], [TOTALDISCOUNT], [FINALTOTAL], [MANPROFIT], [MANDISCOUNT], [MANVAT], [MANTOTAL], [ONHAND], [AVGWEEKSALE], [BasePrice], [BasePriceCode], [RebAvgAmnt], [Supervisor2], [AvgCostExcl], [AvgCostIncl], [Variant], [SourceBranch], [PriceChange], [SaleGroup], [ManQty], [ManPrice], [DispatchBranch], [DispatchBox], [SplitCode], [SplitQty], [SplitUnits], [SplitPriceExcl], [SplitPriceIncl], [LoyaltyPnts], [PickQty], [PickBox] FROM [POSLBDetail]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->txtp = $records["TXTP"];
				$instance->tillno = $records["TILLNO"];
				$instance->docno = $records["DOCNO"];
				$instance->account = $records["ACCOUNT"];
				$instance->trandate = $records["TRANDATE"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->quantity = $records["QUANTITY"];
				$instance->price = $records["PRICE"];
				$instance->priceexcl = $records["PRICEEXCL"];
				$instance->priceincl = $records["PRICEINCL"];
				$instance->discounttype = $records["DISCOUNTTYPE"];
				$instance->discountvalue = $records["DISCOUNTVALUE"];
				$instance->linediscount = $records["LINEDISCOUNT"];
				$instance->linevat = $records["LINEVAT"];
				$instance->linetotal = $records["LINETOTAL"];
				$instance->linetotalexcl = $records["LINETOTALEXCL"];
				$instance->linetotalincl = $records["LINETOTALINCL"];
				$instance->linkqty = $records["LINKQTY"];
				$instance->vatcode = $records["VATCODE"];
				$instance->vatrate = $records["VATRATE"];
				$instance->vatindicator = $records["VATINDICATOR"];
				$instance->costexcl = $records["COSTEXCL"];
				$instance->costincl = $records["COSTINCL"];
				$instance->totalcostexcl = $records["TOTALCOSTEXCL"];
				$instance->totalcostincl = $records["TOTALCOSTINCL"];
				$instance->profit = $records["PROFIT"];
				$instance->wh = $records["WH"];
				$instance->salesrep = $records["SALESREP"];
				$instance->dept = $records["DEPT"];
				$instance->subdept = $records["SUBDEPT"];
				$instance->units = $records["UNITS"];
				$instance->weight = $records["WEIGHT"];
				$instance->stocktype = $records["STOCKTYPE"];
				$instance->ap = $records["AP"];
				$instance->text1 = $records["TEXT1"];
				$instance->text2 = $records["TEXT2"];
				$instance->pricecode = $records["PRICECODE"];
				$instance->promotion = $records["PROMOTION"];
				$instance->promotiontype = $records["PROMOTIONTYPE"];
				$instance->promotioncode = $records["PROMOTIONCODE"];
				$instance->authorisecode = $records["AUTHORISECODE"];
				$instance->packsize = $records["PACKSIZE"];
				$instance->serialtrack = $records["SERIALTRACK"];
				$instance->serialcount = $records["SERIALCOUNT"];
				$instance->oldprice = $records["OLDPRICE"];
				$instance->sqmbox = $records["SQMBOX"];
				$instance->tilesize = $records["TILESIZE"];
				$instance->tilegrade = $records["TILEGRADE"];
				$instance->noofbox = $records["NOOFBOX"];
				$instance->cases = $records["CASES"];
				$instance->palettes = $records["PALETTES"];
				$instance->dispatchqty = $records["DISPATCHQTY"];
				$instance->dispatchreturns = $records["DISPATCHRETURNS"];
				$instance->dispatchbalance = $records["DISPATCHBALANCE"];
				$instance->status = $records["STATUS"];
				$instance->basetype = $records["BASETYPE"];
				$instance->baseref = $records["BASEREF"];
				$instance->baseline = $records["BASELINE"];
				$instance->rebamnt = $records["REBAMNT"];
				$instance->freelineind = $records["FREELINEIND"];
				$instance->creditnotereason = $records["CREDITNOTEREASON"];
				$instance->barcode = $records["BARCODE"];
				$instance->eoddate = $records["EODDATE"];
				$instance->supervisor = $records["SUPERVISOR"];
				$instance->sapdocno = $records["SAPDOCNO"];
				$instance->qtyinvoice = $records["QTYINVOICE"];
				$instance->qtyreturned = $records["QTYRETURNED"];
				$instance->qtybalance = $records["QTYBALANCE"];
				$instance->basedocamnt = $records["BASEDOCAMNT"];
				$instance->basedocbal = $records["BASEDOCBAL"];
				$instance->basepayamnt = $records["BASEPAYAMNT"];
				$instance->basepaydisc = $records["BASEPAYDISC"];
				$instance->dimensions = $records["DIMENSIONS"];
				$instance->drcr = $records["DRCR"];
				$instance->totaldiscount = $records["TOTALDISCOUNT"];
				$instance->finaltotal = $records["FINALTOTAL"];
				$instance->manprofit = $records["MANPROFIT"];
				$instance->mandiscount = $records["MANDISCOUNT"];
				$instance->manvat = $records["MANVAT"];
				$instance->mantotal = $records["MANTOTAL"];
				$instance->onhand = $records["ONHAND"];
				$instance->avgweeksale = $records["AVGWEEKSALE"];
				$instance->baseprice = $records["BasePrice"];
				$instance->basepricecode = $records["BasePriceCode"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->supervisor2 = $records["Supervisor2"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->variant = $records["Variant"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->pricechange = $records["PriceChange"];
				$instance->salegroup = $records["SaleGroup"];
				$instance->manqty = $records["ManQty"];
				$instance->manprice = $records["ManPrice"];
				$instance->dispatchbranch = $records["DispatchBranch"];
				$instance->dispatchbox = $records["DispatchBox"];
				$instance->splitcode = $records["SplitCode"];
				$instance->splitqty = $records["SplitQty"];
				$instance->splitunits = $records["SplitUnits"];
				$instance->splitpriceexcl = $records["SplitPriceExcl"];
				$instance->splitpriceincl = $records["SplitPriceIncl"];
				$instance->loyaltypnts = $records["LoyaltyPnts"];
				$instance->pickqty = $records["PickQty"];
				$instance->pickbox = $records["PickBox"];
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