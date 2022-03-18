<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	POSParkHeader

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
	"public nvarchar TranTime" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar Address1" of type [nvarchar]
	"public nvarchar Address2" of type [nvarchar]
	"public nvarchar Address3" of type [nvarchar]
	"public nvarchar Address4" of type [nvarchar]
	"public nvarchar Contact" of type [nvarchar]
	"public nvarchar Telephone" of type [nvarchar]
	"public nvarchar Fax" of type [nvarchar]
	"public nvarchar VATNumber" of type [nvarchar]
	"public nvarchar SalesRep" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar BaseType" of type [nvarchar]
	"public nvarchar BaseRef" of type [nvarchar]
	"public nvarchar VATIndicator" of type [nvarchar]
	"public float DocDiscount" of type [float]
	"public float TotalVAT" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalTaxable" of type [float]
	"public float TotalExempt" of type [float]
	"public float TotalCostExcl" of type [float]
	"public float TotalCostIncl" of type [float]
	"public float Profit" of type [float]
	"public int AP" of type [int]
	"public nvarchar WH" of type [nvarchar]
	"public nvarchar PaymentDate" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar DeliveryMethod" of type [nvarchar]
	"public nvarchar DeliveryDate" of type [nvarchar]
	"public nvarchar Dispatch" of type [nvarchar]
	"public float Cash" of type [float]
	"public float Cheques" of type [float]
	"public float CreditCards" of type [float]
	"public float Vouchers" of type [float]
	"public float Transfers" of type [float]
	"public float TenderAmount1" of type [float]
	"public float TenderAmount2" of type [float]
	"public float TenderAmount3" of type [float]
	"public float TenderAmount4" of type [float]
	"public float Tendered" of type [float]
	"public float TenderChange" of type [float]
	"public float RoundingDown" of type [float]
	"public float RoundingUp" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public int CashUpnumber" of type [int]
	"public nvarchar CashUpdate" of type [nvarchar]
	"public nvarchar CashUptime" of type [nvarchar]
	"public nvarchar UField1" of type [nvarchar]
	"public nvarchar UField2" of type [nvarchar]
	"public nvarchar UField3" of type [nvarchar]
	"public nvarchar UField4" of type [nvarchar]
	"public nvarchar UnAllocated" of type [nvarchar]
	"public nvarchar ReturnInvoice" of type [nvarchar]
	"public float Deposit" of type [float]
	"public float Paid" of type [float]
	"public float Balance" of type [float]
	"public nvarchar RefInv" of type [nvarchar]
	"public nvarchar OrderBy" of type [nvarchar]
	"public nvarchar PurchaseOrder" of type [nvarchar]
	"public int TermDays" of type [int]
	"public nvarchar Status" of type [nvarchar]
	"public int PrintCount" of type [int]
	"public nvarchar SBO_TimeStamp" of type [nvarchar]
	"public nvarchar DeliveryAddress1" of type [nvarchar]
	"public nvarchar DeliveryAddress2" of type [nvarchar]
	"public nvarchar DeliveryAddress3" of type [nvarchar]
	"public nvarchar DeliveryAddress4" of type [nvarchar]
	"public nvarchar EODDate" of type [nvarchar]
	"public nvarchar Supervisor" of type [nvarchar]
	"public nvarchar SAPDocNo" of type [nvarchar]
	"public nvarchar ServerStatus" of type [nvarchar]
	"public nvarchar ServerDate" of type [nvarchar]
	"public nvarchar ServerTime" of type [nvarchar]
	"public float DCurr" of type [float]
	"public float D030" of type [float]
	"public float D060" of type [float]
	"public float D090" of type [float]
	"public float D120" of type [float]
	"public float D150" of type [float]
	"public float D180" of type [float]
	"public float DOver" of type [float]
	"public float TotalLineDisc" of type [float]
	"public float TotalRebAmnt" of type [float]
	"public float Weight" of type [float]
	"public float Cases" of type [float]
	"public float Pallets" of type [float]
	"public float Dimensions" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public int DetailLines" of type [int]
	"public float TotalDiscount" of type [float]
	"public float FinalTotal" of type [float]
	"public float ManProfit" of type [float]
	"public float ManDiscount" of type [float]
	"public float ManVAT" of type [float]
	"public float ManTotal" of type [float]
	"public string Version" of type [string]
	"public nvarchar ScanUser" of type [nvarchar]
	"public nvarchar ScanDate" of type [nvarchar]
	"public nvarchar ScanTime" of type [nvarchar]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public nvarchar InUse" of type [nvarchar]
	"public nvarchar CellPhone" of type [nvarchar]
	"public float DocDiscVAT" of type [float]
	"public float DropSafe" of type [float]
	"public nvarchar DispatchBranch" of type [nvarchar]
	"public nvarchar OnlineAccount" of type [nvarchar]
	"public float Wallets" of type [float]
	"public int LoyaltyPnts" of type [int]
	"public nvarchar LicenseNo" of type [nvarchar]
	"public nvarchar LicenseExpDate" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posparkheader {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $tillno ;	
	public $docno ;	
	public $account ;	
	public $trandate ;	
	public $trantime ;	
	public $name ;	
	public $address1 ;	
	public $address2 ;	
	public $address3 ;	
	public $address4 ;	
	public $contact ;	
	public $telephone ;	
	public $fax ;	
	public $vatnumber ;	
	public $salesrep ;	
	public $reference ;	
	public $basetype ;	
	public $baseref ;	
	public $vatindicator ;	
	public $docdiscount ;	
	public $totalvat ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totaltaxable ;	
	public $totalexempt ;	
	public $totalcostexcl ;	
	public $totalcostincl ;	
	public $profit ;	
	public $ap ;	
	public $wh ;	
	public $paymentdate ;	
	public $details ;	
	public $notes ;	
	public $deliverymethod ;	
	public $deliverydate ;	
	public $dispatch ;	
	public $cash ;	
	public $cheques ;	
	public $creditcards ;	
	public $vouchers ;	
	public $transfers ;	
	public $tenderamount1 ;	
	public $tenderamount2 ;	
	public $tenderamount3 ;	
	public $tenderamount4 ;	
	public $tendered ;	
	public $tenderchange ;	
	public $roundingdown ;	
	public $roundingup ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $cashupnumber ;	
	public $cashupdate ;	
	public $cashuptime ;	
	public $ufield1 ;	
	public $ufield2 ;	
	public $ufield3 ;	
	public $ufield4 ;	
	public $unallocated ;	
	public $returninvoice ;	
	public $deposit ;	
	public $paid ;	
	public $balance ;	
	public $refinv ;	
	public $orderby ;	
	public $purchaseorder ;	
	public $termdays ;	
	public $status ;	
	public $printcount ;	
	public $sbo_timestamp ;	
	public $deliveryaddress1 ;	
	public $deliveryaddress2 ;	
	public $deliveryaddress3 ;	
	public $deliveryaddress4 ;	
	public $eoddate ;	
	public $supervisor ;	
	public $sapdocno ;	
	public $serverstatus ;	
	public $serverdate ;	
	public $servertime ;	
	public $dcurr ;	
	public $d030 ;	
	public $d060 ;	
	public $d090 ;	
	public $d120 ;	
	public $d150 ;	
	public $d180 ;	
	public $dover ;	
	public $totallinedisc ;	
	public $totalrebamnt ;	
	public $weight ;	
	public $cases ;	
	public $pallets ;	
	public $dimensions ;	
	public $drcr ;	
	public $detaillines ;	
	public $totaldiscount ;	
	public $finaltotal ;	
	public $manprofit ;	
	public $mandiscount ;	
	public $manvat ;	
	public $mantotal ;	
	public $version ;	
	public $scanuser ;	
	public $scandate ;	
	public $scantime ;	
	public $sourcebranch ;	
	public $inuse ;	
	public $cellphone ;	
	public $docdiscvat ;	
	public $dropsafe ;	
	public $dispatchbranch ;	
	public $onlineaccount ;	
	public $wallets ;	
	public $loyaltypnts ;	
	public $licenseno ;	
	public $licenseexpdate ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [TillNo], [DocNo], [Account], [TranDate], [TranTime], [Name], [Address1], [Address2], [Address3], [Address4], [Contact], [Telephone], [Fax], [VATNumber], [SalesRep], [Reference], [BaseType], [BaseRef], [VATIndicator], [DocDiscount], [TotalVAT], [TotalExcl], [TotalIncl], [TotalTaxable], [TotalExempt], [TotalCostExcl], [TotalCostIncl], [Profit], [AP], [WH], [PaymentDate], [Details], [Notes], [DeliveryMethod], [DeliveryDate], [Dispatch], [Cash], [Cheques], [CreditCards], [Vouchers], [Transfers], [TenderAmount1], [TenderAmount2], [TenderAmount3], [TenderAmount4], [Tendered], [TenderChange], [RoundingDown], [RoundingUp], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CashUpnumber], [CashUpdate], [CashUptime], [UField1], [UField2], [UField3], [UField4], [UnAllocated], [ReturnInvoice], [Deposit], [Paid], [Balance], [RefInv], [OrderBy], [PurchaseOrder], [TermDays], [Status], [PrintCount], [SBO_TimeStamp], [DeliveryAddress1], [DeliveryAddress2], [DeliveryAddress3], [DeliveryAddress4], [EODDate], [Supervisor], [SAPDocNo], [ServerStatus], [ServerDate], [ServerTime], [DCurr], [D030], [D060], [D090], [D120], [D150], [D180], [DOver], [TotalLineDisc], [TotalRebAmnt], [Weight], [Cases], [Pallets], [Dimensions], [DrCr], [DetailLines], [TotalDiscount], [FinalTotal], [ManProfit], [ManDiscount], [ManVAT], [ManTotal], [Version], [ScanUser], [ScanDate], [ScanTime], [SourceBranch], [InUse], [CellPhone], [DocDiscVAT], [DropSafe], [DispatchBranch], [OnlineAccount], [Wallets], [LoyaltyPnts], [LicenseNo], [LicenseExpDate] FROM [POSParkHeader]  WHERE [RecID]=:recid  ";
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
				$instance->trantime = $records["TranTime"];
				$instance->name = $records["Name"];
				$instance->address1 = $records["Address1"];
				$instance->address2 = $records["Address2"];
				$instance->address3 = $records["Address3"];
				$instance->address4 = $records["Address4"];
				$instance->contact = $records["Contact"];
				$instance->telephone = $records["Telephone"];
				$instance->fax = $records["Fax"];
				$instance->vatnumber = $records["VATNumber"];
				$instance->salesrep = $records["SalesRep"];
				$instance->reference = $records["Reference"];
				$instance->basetype = $records["BaseType"];
				$instance->baseref = $records["BaseRef"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->docdiscount = $records["DocDiscount"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totaltaxable = $records["TotalTaxable"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->totalcostincl = $records["TotalCostIncl"];
				$instance->profit = $records["Profit"];
				$instance->ap = $records["AP"];
				$instance->wh = $records["WH"];
				$instance->paymentdate = $records["PaymentDate"];
				$instance->details = $records["Details"];
				$instance->notes = $records["Notes"];
				$instance->deliverymethod = $records["DeliveryMethod"];
				$instance->deliverydate = $records["DeliveryDate"];
				$instance->dispatch = $records["Dispatch"];
				$instance->cash = $records["Cash"];
				$instance->cheques = $records["Cheques"];
				$instance->creditcards = $records["CreditCards"];
				$instance->vouchers = $records["Vouchers"];
				$instance->transfers = $records["Transfers"];
				$instance->tenderamount1 = $records["TenderAmount1"];
				$instance->tenderamount2 = $records["TenderAmount2"];
				$instance->tenderamount3 = $records["TenderAmount3"];
				$instance->tenderamount4 = $records["TenderAmount4"];
				$instance->tendered = $records["Tendered"];
				$instance->tenderchange = $records["TenderChange"];
				$instance->roundingdown = $records["RoundingDown"];
				$instance->roundingup = $records["RoundingUp"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->cashupnumber = $records["CashUpnumber"];
				$instance->cashupdate = $records["CashUpdate"];
				$instance->cashuptime = $records["CashUptime"];
				$instance->ufield1 = $records["UField1"];
				$instance->ufield2 = $records["UField2"];
				$instance->ufield3 = $records["UField3"];
				$instance->ufield4 = $records["UField4"];
				$instance->unallocated = $records["UnAllocated"];
				$instance->returninvoice = $records["ReturnInvoice"];
				$instance->deposit = $records["Deposit"];
				$instance->paid = $records["Paid"];
				$instance->balance = $records["Balance"];
				$instance->refinv = $records["RefInv"];
				$instance->orderby = $records["OrderBy"];
				$instance->purchaseorder = $records["PurchaseOrder"];
				$instance->termdays = $records["TermDays"];
				$instance->status = $records["Status"];
				$instance->printcount = $records["PrintCount"];
				$instance->sbo_timestamp = $records["SBO_TimeStamp"];
				$instance->deliveryaddress1 = $records["DeliveryAddress1"];
				$instance->deliveryaddress2 = $records["DeliveryAddress2"];
				$instance->deliveryaddress3 = $records["DeliveryAddress3"];
				$instance->deliveryaddress4 = $records["DeliveryAddress4"];
				$instance->eoddate = $records["EODDate"];
				$instance->supervisor = $records["Supervisor"];
				$instance->sapdocno = $records["SAPDocNo"];
				$instance->serverstatus = $records["ServerStatus"];
				$instance->serverdate = $records["ServerDate"];
				$instance->servertime = $records["ServerTime"];
				$instance->dcurr = $records["DCurr"];
				$instance->d030 = $records["D030"];
				$instance->d060 = $records["D060"];
				$instance->d090 = $records["D090"];
				$instance->d120 = $records["D120"];
				$instance->d150 = $records["D150"];
				$instance->d180 = $records["D180"];
				$instance->dover = $records["DOver"];
				$instance->totallinedisc = $records["TotalLineDisc"];
				$instance->totalrebamnt = $records["TotalRebAmnt"];
				$instance->weight = $records["Weight"];
				$instance->cases = $records["Cases"];
				$instance->pallets = $records["Pallets"];
				$instance->dimensions = $records["Dimensions"];
				$instance->drcr = $records["DrCr"];
				$instance->detaillines = $records["DetailLines"];
				$instance->totaldiscount = $records["TotalDiscount"];
				$instance->finaltotal = $records["FinalTotal"];
				$instance->manprofit = $records["ManProfit"];
				$instance->mandiscount = $records["ManDiscount"];
				$instance->manvat = $records["ManVAT"];
				$instance->mantotal = $records["ManTotal"];
				$instance->version = $records["Version"];
				$instance->scanuser = $records["ScanUser"];
				$instance->scandate = $records["ScanDate"];
				$instance->scantime = $records["ScanTime"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->inuse = $records["InUse"];
				$instance->cellphone = $records["CellPhone"];
				$instance->docdiscvat = $records["DocDiscVAT"];
				$instance->dropsafe = $records["DropSafe"];
				$instance->dispatchbranch = $records["DispatchBranch"];
				$instance->onlineaccount = $records["OnlineAccount"];
				$instance->wallets = $records["Wallets"];
				$instance->loyaltypnts = $records["LoyaltyPnts"];
				$instance->licenseno = $records["LicenseNo"];
				$instance->licenseexpdate = $records["LicenseExpDate"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using VATNumber
	*/
	public static function ini_VATNumber($vatnumber) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [TillNo], [DocNo], [Account], [TranDate], [TranTime], [Name], [Address1], [Address2], [Address3], [Address4], [Contact], [Telephone], [Fax], [VATNumber], [SalesRep], [Reference], [BaseType], [BaseRef], [VATIndicator], [DocDiscount], [TotalVAT], [TotalExcl], [TotalIncl], [TotalTaxable], [TotalExempt], [TotalCostExcl], [TotalCostIncl], [Profit], [AP], [WH], [PaymentDate], [Details], [Notes], [DeliveryMethod], [DeliveryDate], [Dispatch], [Cash], [Cheques], [CreditCards], [Vouchers], [Transfers], [TenderAmount1], [TenderAmount2], [TenderAmount3], [TenderAmount4], [Tendered], [TenderChange], [RoundingDown], [RoundingUp], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CashUpnumber], [CashUpdate], [CashUptime], [UField1], [UField2], [UField3], [UField4], [UnAllocated], [ReturnInvoice], [Deposit], [Paid], [Balance], [RefInv], [OrderBy], [PurchaseOrder], [TermDays], [Status], [PrintCount], [SBO_TimeStamp], [DeliveryAddress1], [DeliveryAddress2], [DeliveryAddress3], [DeliveryAddress4], [EODDate], [Supervisor], [SAPDocNo], [ServerStatus], [ServerDate], [ServerTime], [DCurr], [D030], [D060], [D090], [D120], [D150], [D180], [DOver], [TotalLineDisc], [TotalRebAmnt], [Weight], [Cases], [Pallets], [Dimensions], [DrCr], [DetailLines], [TotalDiscount], [FinalTotal], [ManProfit], [ManDiscount], [ManVAT], [ManTotal], [Version], [ScanUser], [ScanDate], [ScanTime], [SourceBranch], [InUse], [CellPhone], [DocDiscVAT], [DropSafe], [DispatchBranch], [OnlineAccount], [Wallets], [LoyaltyPnts], [LicenseNo], [LicenseExpDate] FROM [POSParkHeader]  WHERE [VATNumber]=:vatnumber  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":vatnumber", $vatnumber);
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
				$instance->trantime = $records["TranTime"];
				$instance->name = $records["Name"];
				$instance->address1 = $records["Address1"];
				$instance->address2 = $records["Address2"];
				$instance->address3 = $records["Address3"];
				$instance->address4 = $records["Address4"];
				$instance->contact = $records["Contact"];
				$instance->telephone = $records["Telephone"];
				$instance->fax = $records["Fax"];
				$instance->vatnumber = $records["VATNumber"];
				$instance->salesrep = $records["SalesRep"];
				$instance->reference = $records["Reference"];
				$instance->basetype = $records["BaseType"];
				$instance->baseref = $records["BaseRef"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->docdiscount = $records["DocDiscount"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totaltaxable = $records["TotalTaxable"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->totalcostincl = $records["TotalCostIncl"];
				$instance->profit = $records["Profit"];
				$instance->ap = $records["AP"];
				$instance->wh = $records["WH"];
				$instance->paymentdate = $records["PaymentDate"];
				$instance->details = $records["Details"];
				$instance->notes = $records["Notes"];
				$instance->deliverymethod = $records["DeliveryMethod"];
				$instance->deliverydate = $records["DeliveryDate"];
				$instance->dispatch = $records["Dispatch"];
				$instance->cash = $records["Cash"];
				$instance->cheques = $records["Cheques"];
				$instance->creditcards = $records["CreditCards"];
				$instance->vouchers = $records["Vouchers"];
				$instance->transfers = $records["Transfers"];
				$instance->tenderamount1 = $records["TenderAmount1"];
				$instance->tenderamount2 = $records["TenderAmount2"];
				$instance->tenderamount3 = $records["TenderAmount3"];
				$instance->tenderamount4 = $records["TenderAmount4"];
				$instance->tendered = $records["Tendered"];
				$instance->tenderchange = $records["TenderChange"];
				$instance->roundingdown = $records["RoundingDown"];
				$instance->roundingup = $records["RoundingUp"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->cashupnumber = $records["CashUpnumber"];
				$instance->cashupdate = $records["CashUpdate"];
				$instance->cashuptime = $records["CashUptime"];
				$instance->ufield1 = $records["UField1"];
				$instance->ufield2 = $records["UField2"];
				$instance->ufield3 = $records["UField3"];
				$instance->ufield4 = $records["UField4"];
				$instance->unallocated = $records["UnAllocated"];
				$instance->returninvoice = $records["ReturnInvoice"];
				$instance->deposit = $records["Deposit"];
				$instance->paid = $records["Paid"];
				$instance->balance = $records["Balance"];
				$instance->refinv = $records["RefInv"];
				$instance->orderby = $records["OrderBy"];
				$instance->purchaseorder = $records["PurchaseOrder"];
				$instance->termdays = $records["TermDays"];
				$instance->status = $records["Status"];
				$instance->printcount = $records["PrintCount"];
				$instance->sbo_timestamp = $records["SBO_TimeStamp"];
				$instance->deliveryaddress1 = $records["DeliveryAddress1"];
				$instance->deliveryaddress2 = $records["DeliveryAddress2"];
				$instance->deliveryaddress3 = $records["DeliveryAddress3"];
				$instance->deliveryaddress4 = $records["DeliveryAddress4"];
				$instance->eoddate = $records["EODDate"];
				$instance->supervisor = $records["Supervisor"];
				$instance->sapdocno = $records["SAPDocNo"];
				$instance->serverstatus = $records["ServerStatus"];
				$instance->serverdate = $records["ServerDate"];
				$instance->servertime = $records["ServerTime"];
				$instance->dcurr = $records["DCurr"];
				$instance->d030 = $records["D030"];
				$instance->d060 = $records["D060"];
				$instance->d090 = $records["D090"];
				$instance->d120 = $records["D120"];
				$instance->d150 = $records["D150"];
				$instance->d180 = $records["D180"];
				$instance->dover = $records["DOver"];
				$instance->totallinedisc = $records["TotalLineDisc"];
				$instance->totalrebamnt = $records["TotalRebAmnt"];
				$instance->weight = $records["Weight"];
				$instance->cases = $records["Cases"];
				$instance->pallets = $records["Pallets"];
				$instance->dimensions = $records["Dimensions"];
				$instance->drcr = $records["DrCr"];
				$instance->detaillines = $records["DetailLines"];
				$instance->totaldiscount = $records["TotalDiscount"];
				$instance->finaltotal = $records["FinalTotal"];
				$instance->manprofit = $records["ManProfit"];
				$instance->mandiscount = $records["ManDiscount"];
				$instance->manvat = $records["ManVAT"];
				$instance->mantotal = $records["ManTotal"];
				$instance->version = $records["Version"];
				$instance->scanuser = $records["ScanUser"];
				$instance->scandate = $records["ScanDate"];
				$instance->scantime = $records["ScanTime"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->inuse = $records["InUse"];
				$instance->cellphone = $records["CellPhone"];
				$instance->docdiscvat = $records["DocDiscVAT"];
				$instance->dropsafe = $records["DropSafe"];
				$instance->dispatchbranch = $records["DispatchBranch"];
				$instance->onlineaccount = $records["OnlineAccount"];
				$instance->wallets = $records["Wallets"];
				$instance->loyaltypnts = $records["LoyaltyPnts"];
				$instance->licenseno = $records["LicenseNo"];
				$instance->licenseexpdate = $records["LicenseExpDate"];
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
			$res = $this->name;
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