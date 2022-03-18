<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	MDocDetailsr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar TillNo" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public int LineNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public float Quantity" of type [float]
	"public float Price" of type [float]
	"public float PriceExcl" of type [float]
	"public float PriceIncl" of type [float]
	"public nvarchar DiscountType" of type [nvarchar]
	"public float DiscountValue" of type [float]
	"public float LineDiscount" of type [float]
	"public float LineVAT" of type [float]
	"public float LineTotal" of type [float]
	"public float LineTotalExcl" of type [float]
	"public float LineTotalIncl" of type [float]
	"public float LinkQty" of type [float]
	"public nvarchar VATCode" of type [nvarchar]
	"public float VATRate" of type [float]
	"public nvarchar VATIndicator" of type [nvarchar]
	"public float CostExcl" of type [float]
	"public float CostIncl" of type [float]
	"public float TotalCostExcl" of type [float]
	"public float TotalCostIncl" of type [float]
	"public float Profit" of type [float]
	"public nvarchar Wh" of type [nvarchar]
	"public nvarchar SalesRep" of type [nvarchar]
	"public nvarchar Dept" of type [nvarchar]
	"public nvarchar SubDept" of type [nvarchar]
	"public int Units" of type [int]
	"public float Weight" of type [float]
	"public nvarchar StockType" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar Text1" of type [nvarchar]
	"public nvarchar Text2" of type [nvarchar]
	"public nvarchar PriceCode" of type [nvarchar]
	"public nvarchar Promotion" of type [nvarchar]
	"public nvarchar PromotionType" of type [nvarchar]
	"public nvarchar PromotionCode" of type [nvarchar]
	"public nvarchar AuthoriseCode" of type [nvarchar]
	"public nvarchar PackSize" of type [nvarchar]
	"public nvarchar SerialTrack" of type [nvarchar]
	"public int SerialCount" of type [int]
	"public float OldPrice" of type [float]
	"public float SqmBox" of type [float]
	"public nvarchar TileSize" of type [nvarchar]
	"public nvarchar TileGrade" of type [nvarchar]
	"public int NoOfBox" of type [int]
	"public float Cases" of type [float]
	"public float Palettes" of type [float]
	"public float DispatchQty" of type [float]
	"public float DispatchReturns" of type [float]
	"public float DispatchBalance" of type [float]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar BaseType" of type [nvarchar]
	"public nvarchar BaseRef" of type [nvarchar]
	"public int BaseLine" of type [int]
	"public float RebAmnt" of type [float]
	"public nvarchar FreeLineInd" of type [nvarchar]
	"public nvarchar CreditNoteReason" of type [nvarchar]
	"public nvarchar BarCode" of type [nvarchar]
	"public nvarchar EODDate" of type [nvarchar]
	"public nvarchar Supervisor" of type [nvarchar]
	"public nvarchar SapDocNo" of type [nvarchar]
	"public float QtyInvoice" of type [float]
	"public float QtyReturned" of type [float]
	"public float QtyBalance" of type [float]
	"public float BaseDocAmnt" of type [float]
	"public float BaseDocBal" of type [float]
	"public float BasePayamnt" of type [float]
	"public float BasePayDisc" of type [float]
	"public float Dimensions" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public float TotalDiscount" of type [float]
	"public float FinalTotal" of type [float]
	"public float ManProfit" of type [float]
	"public float ManDiscount" of type [float]
	"public float ManVAT" of type [float]
	"public float ManTotal" of type [float]
	"public float Onhand" of type [float]
	"public float AvgWeekSale" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public nvarchar Supervisor2" of type [nvarchar]
	"public float RebAvgAmnt" of type [float]
	"public nvarchar Variant" of type [nvarchar]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public float BasePrice" of type [float]
	"public nvarchar BasePriceCode" of type [nvarchar]
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

class Mdocdetailsr {
	
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
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $supervisor2 ;	
	public $rebavgamnt ;	
	public $variant ;	
	public $sourcebranch ;	
	public $baseprice ;	
	public $basepricecode ;	
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
	public static function ini_RecID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [TillNo], [DocNo], [Account], [TranDate], [LineNo], [StockCode], [LinkCode], [Description1], [Description2], [Quantity], [Price], [PriceExcl], [PriceIncl], [DiscountType], [DiscountValue], [LineDiscount], [LineVAT], [LineTotal], [LineTotalExcl], [LineTotalIncl], [LinkQty], [VATCode], [VATRate], [VATIndicator], [CostExcl], [CostIncl], [TotalCostExcl], [TotalCostIncl], [Profit], [Wh], [SalesRep], [Dept], [SubDept], [Units], [Weight], [StockType], [AP], [Text1], [Text2], [PriceCode], [Promotion], [PromotionType], [PromotionCode], [AuthoriseCode], [PackSize], [SerialTrack], [SerialCount], [OldPrice], [SqmBox], [TileSize], [TileGrade], [NoOfBox], [Cases], [Palettes], [DispatchQty], [DispatchReturns], [DispatchBalance], [Status], [BaseType], [BaseRef], [BaseLine], [RebAmnt], [FreeLineInd], [CreditNoteReason], [BarCode], [EODDate], [Supervisor], [SapDocNo], [QtyInvoice], [QtyReturned], [QtyBalance], [BaseDocAmnt], [BaseDocBal], [BasePayamnt], [BasePayDisc], [Dimensions], [DrCr], [TotalDiscount], [FinalTotal], [ManProfit], [ManDiscount], [ManVAT], [ManTotal], [Onhand], [AvgWeekSale], [AvgCostExcl], [AvgCostIncl], [Supervisor2], [RebAvgAmnt], [Variant], [SourceBranch], [BasePrice], [BasePriceCode], [PriceChange], [SaleGroup], [ManQty], [ManPrice], [DispatchBranch], [DispatchBox], [SplitCode], [SplitQty], [SplitUnits], [SplitPriceExcl], [SplitPriceIncl], [LoyaltyPnts], [PickQty], [PickBox] FROM [MDocDetailsr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->tillno = $records["TillNo"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->trandate = $records["TranDate"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->quantity = $records["Quantity"];
				$instance->price = $records["Price"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->discounttype = $records["DiscountType"];
				$instance->discountvalue = $records["DiscountValue"];
				$instance->linediscount = $records["LineDiscount"];
				$instance->linevat = $records["LineVAT"];
				$instance->linetotal = $records["LineTotal"];
				$instance->linetotalexcl = $records["LineTotalExcl"];
				$instance->linetotalincl = $records["LineTotalIncl"];
				$instance->linkqty = $records["LinkQty"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->totalcostincl = $records["TotalCostIncl"];
				$instance->profit = $records["Profit"];
				$instance->wh = $records["Wh"];
				$instance->salesrep = $records["SalesRep"];
				$instance->dept = $records["Dept"];
				$instance->subdept = $records["SubDept"];
				$instance->units = $records["Units"];
				$instance->weight = $records["Weight"];
				$instance->stocktype = $records["StockType"];
				$instance->ap = $records["AP"];
				$instance->text1 = $records["Text1"];
				$instance->text2 = $records["Text2"];
				$instance->pricecode = $records["PriceCode"];
				$instance->promotion = $records["Promotion"];
				$instance->promotiontype = $records["PromotionType"];
				$instance->promotioncode = $records["PromotionCode"];
				$instance->authorisecode = $records["AuthoriseCode"];
				$instance->packsize = $records["PackSize"];
				$instance->serialtrack = $records["SerialTrack"];
				$instance->serialcount = $records["SerialCount"];
				$instance->oldprice = $records["OldPrice"];
				$instance->sqmbox = $records["SqmBox"];
				$instance->tilesize = $records["TileSize"];
				$instance->tilegrade = $records["TileGrade"];
				$instance->noofbox = $records["NoOfBox"];
				$instance->cases = $records["Cases"];
				$instance->palettes = $records["Palettes"];
				$instance->dispatchqty = $records["DispatchQty"];
				$instance->dispatchreturns = $records["DispatchReturns"];
				$instance->dispatchbalance = $records["DispatchBalance"];
				$instance->status = $records["Status"];
				$instance->basetype = $records["BaseType"];
				$instance->baseref = $records["BaseRef"];
				$instance->baseline = $records["BaseLine"];
				$instance->rebamnt = $records["RebAmnt"];
				$instance->freelineind = $records["FreeLineInd"];
				$instance->creditnotereason = $records["CreditNoteReason"];
				$instance->barcode = $records["BarCode"];
				$instance->eoddate = $records["EODDate"];
				$instance->supervisor = $records["Supervisor"];
				$instance->sapdocno = $records["SapDocNo"];
				$instance->qtyinvoice = $records["QtyInvoice"];
				$instance->qtyreturned = $records["QtyReturned"];
				$instance->qtybalance = $records["QtyBalance"];
				$instance->basedocamnt = $records["BaseDocAmnt"];
				$instance->basedocbal = $records["BaseDocBal"];
				$instance->basepayamnt = $records["BasePayamnt"];
				$instance->basepaydisc = $records["BasePayDisc"];
				$instance->dimensions = $records["Dimensions"];
				$instance->drcr = $records["DrCr"];
				$instance->totaldiscount = $records["TotalDiscount"];
				$instance->finaltotal = $records["FinalTotal"];
				$instance->manprofit = $records["ManProfit"];
				$instance->mandiscount = $records["ManDiscount"];
				$instance->manvat = $records["ManVAT"];
				$instance->mantotal = $records["ManTotal"];
				$instance->onhand = $records["Onhand"];
				$instance->avgweeksale = $records["AvgWeekSale"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->supervisor2 = $records["Supervisor2"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->variant = $records["Variant"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->baseprice = $records["BasePrice"];
				$instance->basepricecode = $records["BasePriceCode"];
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
	Main Constructor For Declearing Using StockCode
	*/
	public static function ini_StockCode($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [TillNo], [DocNo], [Account], [TranDate], [LineNo], [StockCode], [LinkCode], [Description1], [Description2], [Quantity], [Price], [PriceExcl], [PriceIncl], [DiscountType], [DiscountValue], [LineDiscount], [LineVAT], [LineTotal], [LineTotalExcl], [LineTotalIncl], [LinkQty], [VATCode], [VATRate], [VATIndicator], [CostExcl], [CostIncl], [TotalCostExcl], [TotalCostIncl], [Profit], [Wh], [SalesRep], [Dept], [SubDept], [Units], [Weight], [StockType], [AP], [Text1], [Text2], [PriceCode], [Promotion], [PromotionType], [PromotionCode], [AuthoriseCode], [PackSize], [SerialTrack], [SerialCount], [OldPrice], [SqmBox], [TileSize], [TileGrade], [NoOfBox], [Cases], [Palettes], [DispatchQty], [DispatchReturns], [DispatchBalance], [Status], [BaseType], [BaseRef], [BaseLine], [RebAmnt], [FreeLineInd], [CreditNoteReason], [BarCode], [EODDate], [Supervisor], [SapDocNo], [QtyInvoice], [QtyReturned], [QtyBalance], [BaseDocAmnt], [BaseDocBal], [BasePayamnt], [BasePayDisc], [Dimensions], [DrCr], [TotalDiscount], [FinalTotal], [ManProfit], [ManDiscount], [ManVAT], [ManTotal], [Onhand], [AvgWeekSale], [AvgCostExcl], [AvgCostIncl], [Supervisor2], [RebAvgAmnt], [Variant], [SourceBranch], [BasePrice], [BasePriceCode], [PriceChange], [SaleGroup], [ManQty], [ManPrice], [DispatchBranch], [DispatchBox], [SplitCode], [SplitQty], [SplitUnits], [SplitPriceExcl], [SplitPriceIncl], [LoyaltyPnts], [PickQty], [PickBox] FROM [MDocDetailsr]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->tillno = $records["TillNo"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->trandate = $records["TranDate"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->quantity = $records["Quantity"];
				$instance->price = $records["Price"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->discounttype = $records["DiscountType"];
				$instance->discountvalue = $records["DiscountValue"];
				$instance->linediscount = $records["LineDiscount"];
				$instance->linevat = $records["LineVAT"];
				$instance->linetotal = $records["LineTotal"];
				$instance->linetotalexcl = $records["LineTotalExcl"];
				$instance->linetotalincl = $records["LineTotalIncl"];
				$instance->linkqty = $records["LinkQty"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->totalcostincl = $records["TotalCostIncl"];
				$instance->profit = $records["Profit"];
				$instance->wh = $records["Wh"];
				$instance->salesrep = $records["SalesRep"];
				$instance->dept = $records["Dept"];
				$instance->subdept = $records["SubDept"];
				$instance->units = $records["Units"];
				$instance->weight = $records["Weight"];
				$instance->stocktype = $records["StockType"];
				$instance->ap = $records["AP"];
				$instance->text1 = $records["Text1"];
				$instance->text2 = $records["Text2"];
				$instance->pricecode = $records["PriceCode"];
				$instance->promotion = $records["Promotion"];
				$instance->promotiontype = $records["PromotionType"];
				$instance->promotioncode = $records["PromotionCode"];
				$instance->authorisecode = $records["AuthoriseCode"];
				$instance->packsize = $records["PackSize"];
				$instance->serialtrack = $records["SerialTrack"];
				$instance->serialcount = $records["SerialCount"];
				$instance->oldprice = $records["OldPrice"];
				$instance->sqmbox = $records["SqmBox"];
				$instance->tilesize = $records["TileSize"];
				$instance->tilegrade = $records["TileGrade"];
				$instance->noofbox = $records["NoOfBox"];
				$instance->cases = $records["Cases"];
				$instance->palettes = $records["Palettes"];
				$instance->dispatchqty = $records["DispatchQty"];
				$instance->dispatchreturns = $records["DispatchReturns"];
				$instance->dispatchbalance = $records["DispatchBalance"];
				$instance->status = $records["Status"];
				$instance->basetype = $records["BaseType"];
				$instance->baseref = $records["BaseRef"];
				$instance->baseline = $records["BaseLine"];
				$instance->rebamnt = $records["RebAmnt"];
				$instance->freelineind = $records["FreeLineInd"];
				$instance->creditnotereason = $records["CreditNoteReason"];
				$instance->barcode = $records["BarCode"];
				$instance->eoddate = $records["EODDate"];
				$instance->supervisor = $records["Supervisor"];
				$instance->sapdocno = $records["SapDocNo"];
				$instance->qtyinvoice = $records["QtyInvoice"];
				$instance->qtyreturned = $records["QtyReturned"];
				$instance->qtybalance = $records["QtyBalance"];
				$instance->basedocamnt = $records["BaseDocAmnt"];
				$instance->basedocbal = $records["BaseDocBal"];
				$instance->basepayamnt = $records["BasePayamnt"];
				$instance->basepaydisc = $records["BasePayDisc"];
				$instance->dimensions = $records["Dimensions"];
				$instance->drcr = $records["DrCr"];
				$instance->totaldiscount = $records["TotalDiscount"];
				$instance->finaltotal = $records["FinalTotal"];
				$instance->manprofit = $records["ManProfit"];
				$instance->mandiscount = $records["ManDiscount"];
				$instance->manvat = $records["ManVAT"];
				$instance->mantotal = $records["ManTotal"];
				$instance->onhand = $records["Onhand"];
				$instance->avgweeksale = $records["AvgWeekSale"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->supervisor2 = $records["Supervisor2"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->variant = $records["Variant"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->baseprice = $records["BasePrice"];
				$instance->basepricecode = $records["BasePriceCode"];
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