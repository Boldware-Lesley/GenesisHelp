<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	GSMCRDMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar BusAddress1" of type [nvarchar]
	"public nvarchar BusAddress2" of type [nvarchar]
	"public nvarchar BusAddress3" of type [nvarchar]
	"public nvarchar BusAddress4" of type [nvarchar]
	"public nvarchar BuspostCode" of type [nvarchar]
	"public nvarchar PostAddress1" of type [nvarchar]
	"public nvarchar PostAddress2" of type [nvarchar]
	"public nvarchar PostAddress3" of type [nvarchar]
	"public nvarchar PostAddress4" of type [nvarchar]
	"public nvarchar PostCode" of type [nvarchar]
	"public nvarchar TelePhone" of type [nvarchar]
	"public nvarchar TelePhone2" of type [nvarchar]
	"public nvarchar Fax" of type [nvarchar]
	"public nvarchar CellPhone" of type [nvarchar]
	"public nvarchar EMail" of type [nvarchar]
	"public nvarchar Contact" of type [nvarchar]
	"public nvarchar BillToAccount" of type [nvarchar]
	"public float CRLimit" of type [float]
	"public nvarchar SuppAcc" of type [nvarchar]
	"public nvarchar BuyGroupAccNo" of type [nvarchar]
	"public nvarchar Currency" of type [nvarchar]
	"public nvarchar Reason" of type [nvarchar]
	"public nvarchar AccountType" of type [nvarchar]
	"public nvarchar Category" of type [nvarchar]
	"public nvarchar GroupCode" of type [nvarchar]
	"public nvarchar PartialOrders" of type [nvarchar]
	"public float MonthEnd" of type [float]
	"public nvarchar Trade" of type [nvarchar]
	"public nvarchar GLNo" of type [nvarchar]
	"public nvarchar PayMthd" of type [nvarchar]
	"public float Balance" of type [float]
	"public nvarchar CommsMthd" of type [nvarchar]
	"public float DeliveryBalance" of type [float]
	"public nvarchar GRVCredPost" of type [nvarchar]
	"public nvarchar GRVDocType" of type [nvarchar]
	"public nvarchar GRVVATInd" of type [nvarchar]
	"public nvarchar GRVVATCalc" of type [nvarchar]
	"public nvarchar BankName" of type [nvarchar]
	"public nvarchar BankBranchName" of type [nvarchar]
	"public nvarchar BankBranchCode" of type [nvarchar]
	"public nvarchar BankAccNo" of type [nvarchar]
	"public nvarchar BankAccName" of type [nvarchar]
	"public ntext Notepad" of type [ntext]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar MainAccount" of type [nvarchar]
	"public nvarchar PurCardRule" of type [nvarchar]
	"public nvarchar VATNumber" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar VATIndicator" of type [nvarchar]
	"public nvarchar Category2" of type [nvarchar]
	"public nvarchar TermCode" of type [nvarchar]
	"public float TermFromValue" of type [float]
	"public nvarchar TermFromType" of type [nvarchar]
	"public nvarchar TermFrom" of type [nvarchar]
	"public float TermDiscount" of type [float]
	"public nvarchar StockTakeDate" of type [nvarchar]
	"public nvarchar Buyer" of type [nvarchar]
	"public nvarchar Admin" of type [nvarchar]
	"public nvarchar DestCo" of type [nvarchar]
	"public nvarchar DestBranch" of type [nvarchar]
	"public nvarchar DebAccount" of type [nvarchar]
	"public float BCAdjFactor" of type [float]
	"public nvarchar BCAdjFrom" of type [nvarchar]
	"public nvarchar BCAdjTo" of type [nvarchar]
	"public nvarchar BCPriceIncr" of type [nvarchar]
	"public nvarchar CalMonth" of type [nvarchar]
	"public nvarchar DCSupplier" of type [nvarchar]
	"public nvarchar CRDSelItems" of type [nvarchar]
	"public nvarchar AllowReturns" of type [nvarchar]
	"public nvarchar Simplifier" of type [nvarchar]
	"public nvarchar CrossOrder" of type [nvarchar]
	"public nvarchar OrderMandatory" of type [nvarchar]
	"public nvarchar GRVProcess" of type [nvarchar]
	"public int Exterm01" of type [int]
	"public int Exterm02" of type [int]
	"public int Exterm03" of type [int]
	"public int Exterm04" of type [int]
	"public int Exterm05" of type [int]
	"public int Exterm06" of type [int]
	"public int Exterm07" of type [int]
	"public int Exterm08" of type [int]
	"public int Exterm09" of type [int]
	"public int Exterm10" of type [int]
	"public int Exterm11" of type [int]
	"public int Exterm12" of type [int]
	"public nvarchar Version" of type [nvarchar]
	"public nvarchar VisionAccNo" of type [nvarchar]
	"public nvarchar GenesisAccNo" of type [nvarchar]
	"public float DefaultGP" of type [float]
	"public nvarchar BankAuth" of type [nvarchar]
	"public nvarchar BankUpdBy" of type [nvarchar]
	"public nvarchar BankAuthBy" of type [nvarchar]
	"public nvarchar BEE" of type [nvarchar]
	"public nvarchar BEEScore" of type [nvarchar]
	"public nvarchar BEEExpDate" of type [nvarchar]
	"public nvarchar GRVAutoGLog" of type [nvarchar]
	"public nvarchar CORegNo" of type [nvarchar]
	"public nvarchar SimplifierSign" of type [nvarchar]
	"public float SimplifierPerc" of type [float]
*/
namespace genesis;


use PDO;

class Gsmcrdmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $account ;	
	public $name ;	
	public $busaddress1 ;	
	public $busaddress2 ;	
	public $busaddress3 ;	
	public $busaddress4 ;	
	public $buspostcode ;	
	public $postaddress1 ;	
	public $postaddress2 ;	
	public $postaddress3 ;	
	public $postaddress4 ;	
	public $postcode ;	
	public $telephone ;	
	public $telephone2 ;	
	public $fax ;	
	public $cellphone ;	
	public $email ;	
	public $contact ;	
	public $billtoaccount ;	
	public $crlimit ;	
	public $suppacc ;	
	public $buygroupaccno ;	
	public $currency ;	
	public $reason ;	
	public $accounttype ;	
	public $category ;	
	public $groupcode ;	
	public $partialorders ;	
	public $monthend ;	
	public $trade ;	
	public $glno ;	
	public $paymthd ;	
	public $balance ;	
	public $commsmthd ;	
	public $deliverybalance ;	
	public $grvcredpost ;	
	public $grvdoctype ;	
	public $grvvatind ;	
	public $grvvatcalc ;	
	public $bankname ;	
	public $bankbranchname ;	
	public $bankbranchcode ;	
	public $bankaccno ;	
	public $bankaccname ;	
	public $notepad ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $mainaccount ;	
	public $purcardrule ;	
	public $vatnumber ;	
	public $status ;	
	public $vatindicator ;	
	public $category2 ;	
	public $termcode ;	
	public $termfromvalue ;	
	public $termfromtype ;	
	public $termfrom ;	
	public $termdiscount ;	
	public $stocktakedate ;	
	public $buyer ;	
	public $admin ;	
	public $destco ;	
	public $destbranch ;	
	public $debaccount ;	
	public $bcadjfactor ;	
	public $bcadjfrom ;	
	public $bcadjto ;	
	public $bcpriceincr ;	
	public $calmonth ;	
	public $dcsupplier ;	
	public $crdselitems ;	
	public $allowreturns ;	
	public $simplifier ;	
	public $crossorder ;	
	public $ordermandatory ;	
	public $grvprocess ;	
	public $exterm01 ;	
	public $exterm02 ;	
	public $exterm03 ;	
	public $exterm04 ;	
	public $exterm05 ;	
	public $exterm06 ;	
	public $exterm07 ;	
	public $exterm08 ;	
	public $exterm09 ;	
	public $exterm10 ;	
	public $exterm11 ;	
	public $exterm12 ;	
	public $version ;	
	public $visionaccno ;	
	public $genesisaccno ;	
	public $defaultgp ;	
	public $bankauth ;	
	public $bankupdby ;	
	public $bankauthby ;	
	public $bee ;	
	public $beescore ;	
	public $beeexpdate ;	
	public $grvautoglog ;	
	public $coregno ;	
	public $simplifiersign ;	
	public $simplifierperc ;	
	
	
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
			$query = " SELECT RecID, [Account], [Name], [BusAddress1], [BusAddress2], [BusAddress3], [BusAddress4], [BuspostCode], [PostAddress1], [PostAddress2], [PostAddress3], [PostAddress4], [PostCode], [TelePhone], [TelePhone2], [Fax], [CellPhone], [EMail], [Contact], [BillToAccount], [CRLimit], [SuppAcc], [BuyGroupAccNo], [Currency], [Reason], [AccountType], [Category], [GroupCode], [PartialOrders], [MonthEnd], [Trade], [GLNo], [PayMthd], [Balance], [CommsMthd], [DeliveryBalance], [GRVCredPost], [GRVDocType], [GRVVATInd], [GRVVATCalc], [BankName], [BankBranchName], [BankBranchCode], [BankAccNo], [BankAccName], [Notepad], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [MainAccount], [PurCardRule], [VATNumber], [Status], [VATIndicator], [Category2], [TermCode], [TermFromValue], [TermFromType], [TermFrom], [TermDiscount], [StockTakeDate], [Buyer], [Admin], [DestCo], [DestBranch], [DebAccount], [BCAdjFactor], [BCAdjFrom], [BCAdjTo], [BCPriceIncr], [CalMonth], [DCSupplier], [CRDSelItems], [AllowReturns], [Simplifier], [CrossOrder], [OrderMandatory], [GRVProcess], [Exterm01], [Exterm02], [Exterm03], [Exterm04], [Exterm05], [Exterm06], [Exterm07], [Exterm08], [Exterm09], [Exterm10], [Exterm11], [Exterm12], [Version], [VisionAccNo], [GenesisAccNo], [DefaultGP], [BankAuth], [BankUpdBy], [BankAuthBy], [BEE], [BEEScore], [BEEExpDate], [GRVAutoGLog], [CORegNo], [SimplifierSign], [SimplifierPerc] FROM [GSMCRDMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->busaddress1 = $records["BusAddress1"];
				$instance->busaddress2 = $records["BusAddress2"];
				$instance->busaddress3 = $records["BusAddress3"];
				$instance->busaddress4 = $records["BusAddress4"];
				$instance->buspostcode = $records["BuspostCode"];
				$instance->postaddress1 = $records["PostAddress1"];
				$instance->postaddress2 = $records["PostAddress2"];
				$instance->postaddress3 = $records["PostAddress3"];
				$instance->postaddress4 = $records["PostAddress4"];
				$instance->postcode = $records["PostCode"];
				$instance->telephone = $records["TelePhone"];
				$instance->telephone2 = $records["TelePhone2"];
				$instance->fax = $records["Fax"];
				$instance->cellphone = $records["CellPhone"];
				$instance->email = $records["EMail"];
				$instance->contact = $records["Contact"];
				$instance->billtoaccount = $records["BillToAccount"];
				$instance->crlimit = $records["CRLimit"];
				$instance->suppacc = $records["SuppAcc"];
				$instance->buygroupaccno = $records["BuyGroupAccNo"];
				$instance->currency = $records["Currency"];
				$instance->reason = $records["Reason"];
				$instance->accounttype = $records["AccountType"];
				$instance->category = $records["Category"];
				$instance->groupcode = $records["GroupCode"];
				$instance->partialorders = $records["PartialOrders"];
				$instance->monthend = $records["MonthEnd"];
				$instance->trade = $records["Trade"];
				$instance->glno = $records["GLNo"];
				$instance->paymthd = $records["PayMthd"];
				$instance->balance = $records["Balance"];
				$instance->commsmthd = $records["CommsMthd"];
				$instance->deliverybalance = $records["DeliveryBalance"];
				$instance->grvcredpost = $records["GRVCredPost"];
				$instance->grvdoctype = $records["GRVDocType"];
				$instance->grvvatind = $records["GRVVATInd"];
				$instance->grvvatcalc = $records["GRVVATCalc"];
				$instance->bankname = $records["BankName"];
				$instance->bankbranchname = $records["BankBranchName"];
				$instance->bankbranchcode = $records["BankBranchCode"];
				$instance->bankaccno = $records["BankAccNo"];
				$instance->bankaccname = $records["BankAccName"];
				$instance->notepad = $records["Notepad"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->mainaccount = $records["MainAccount"];
				$instance->purcardrule = $records["PurCardRule"];
				$instance->vatnumber = $records["VATNumber"];
				$instance->status = $records["Status"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->category2 = $records["Category2"];
				$instance->termcode = $records["TermCode"];
				$instance->termfromvalue = $records["TermFromValue"];
				$instance->termfromtype = $records["TermFromType"];
				$instance->termfrom = $records["TermFrom"];
				$instance->termdiscount = $records["TermDiscount"];
				$instance->stocktakedate = $records["StockTakeDate"];
				$instance->buyer = $records["Buyer"];
				$instance->admin = $records["Admin"];
				$instance->destco = $records["DestCo"];
				$instance->destbranch = $records["DestBranch"];
				$instance->debaccount = $records["DebAccount"];
				$instance->bcadjfactor = $records["BCAdjFactor"];
				$instance->bcadjfrom = $records["BCAdjFrom"];
				$instance->bcadjto = $records["BCAdjTo"];
				$instance->bcpriceincr = $records["BCPriceIncr"];
				$instance->calmonth = $records["CalMonth"];
				$instance->dcsupplier = $records["DCSupplier"];
				$instance->crdselitems = $records["CRDSelItems"];
				$instance->allowreturns = $records["AllowReturns"];
				$instance->simplifier = $records["Simplifier"];
				$instance->crossorder = $records["CrossOrder"];
				$instance->ordermandatory = $records["OrderMandatory"];
				$instance->grvprocess = $records["GRVProcess"];
				$instance->exterm01 = $records["Exterm01"];
				$instance->exterm02 = $records["Exterm02"];
				$instance->exterm03 = $records["Exterm03"];
				$instance->exterm04 = $records["Exterm04"];
				$instance->exterm05 = $records["Exterm05"];
				$instance->exterm06 = $records["Exterm06"];
				$instance->exterm07 = $records["Exterm07"];
				$instance->exterm08 = $records["Exterm08"];
				$instance->exterm09 = $records["Exterm09"];
				$instance->exterm10 = $records["Exterm10"];
				$instance->exterm11 = $records["Exterm11"];
				$instance->exterm12 = $records["Exterm12"];
				$instance->version = $records["Version"];
				$instance->visionaccno = $records["VisionAccNo"];
				$instance->genesisaccno = $records["GenesisAccNo"];
				$instance->defaultgp = $records["DefaultGP"];
				$instance->bankauth = $records["BankAuth"];
				$instance->bankupdby = $records["BankUpdBy"];
				$instance->bankauthby = $records["BankAuthBy"];
				$instance->bee = $records["BEE"];
				$instance->beescore = $records["BEEScore"];
				$instance->beeexpdate = $records["BEEExpDate"];
				$instance->grvautoglog = $records["GRVAutoGLog"];
				$instance->coregno = $records["CORegNo"];
				$instance->simplifiersign = $records["SimplifierSign"];
				$instance->simplifierperc = $records["SimplifierPerc"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using BuspostCode
	*/
	public static function ini_BuspostCode($buspostcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [Account], [Name], [BusAddress1], [BusAddress2], [BusAddress3], [BusAddress4], [BuspostCode], [PostAddress1], [PostAddress2], [PostAddress3], [PostAddress4], [PostCode], [TelePhone], [TelePhone2], [Fax], [CellPhone], [EMail], [Contact], [BillToAccount], [CRLimit], [SuppAcc], [BuyGroupAccNo], [Currency], [Reason], [AccountType], [Category], [GroupCode], [PartialOrders], [MonthEnd], [Trade], [GLNo], [PayMthd], [Balance], [CommsMthd], [DeliveryBalance], [GRVCredPost], [GRVDocType], [GRVVATInd], [GRVVATCalc], [BankName], [BankBranchName], [BankBranchCode], [BankAccNo], [BankAccName], [Notepad], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [MainAccount], [PurCardRule], [VATNumber], [Status], [VATIndicator], [Category2], [TermCode], [TermFromValue], [TermFromType], [TermFrom], [TermDiscount], [StockTakeDate], [Buyer], [Admin], [DestCo], [DestBranch], [DebAccount], [BCAdjFactor], [BCAdjFrom], [BCAdjTo], [BCPriceIncr], [CalMonth], [DCSupplier], [CRDSelItems], [AllowReturns], [Simplifier], [CrossOrder], [OrderMandatory], [GRVProcess], [Exterm01], [Exterm02], [Exterm03], [Exterm04], [Exterm05], [Exterm06], [Exterm07], [Exterm08], [Exterm09], [Exterm10], [Exterm11], [Exterm12], [Version], [VisionAccNo], [GenesisAccNo], [DefaultGP], [BankAuth], [BankUpdBy], [BankAuthBy], [BEE], [BEEScore], [BEEExpDate], [GRVAutoGLog], [CORegNo], [SimplifierSign], [SimplifierPerc] FROM [GSMCRDMaster]  WHERE [BuspostCode]=:buspostcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":buspostcode", $buspostcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->busaddress1 = $records["BusAddress1"];
				$instance->busaddress2 = $records["BusAddress2"];
				$instance->busaddress3 = $records["BusAddress3"];
				$instance->busaddress4 = $records["BusAddress4"];
				$instance->buspostcode = $records["BuspostCode"];
				$instance->postaddress1 = $records["PostAddress1"];
				$instance->postaddress2 = $records["PostAddress2"];
				$instance->postaddress3 = $records["PostAddress3"];
				$instance->postaddress4 = $records["PostAddress4"];
				$instance->postcode = $records["PostCode"];
				$instance->telephone = $records["TelePhone"];
				$instance->telephone2 = $records["TelePhone2"];
				$instance->fax = $records["Fax"];
				$instance->cellphone = $records["CellPhone"];
				$instance->email = $records["EMail"];
				$instance->contact = $records["Contact"];
				$instance->billtoaccount = $records["BillToAccount"];
				$instance->crlimit = $records["CRLimit"];
				$instance->suppacc = $records["SuppAcc"];
				$instance->buygroupaccno = $records["BuyGroupAccNo"];
				$instance->currency = $records["Currency"];
				$instance->reason = $records["Reason"];
				$instance->accounttype = $records["AccountType"];
				$instance->category = $records["Category"];
				$instance->groupcode = $records["GroupCode"];
				$instance->partialorders = $records["PartialOrders"];
				$instance->monthend = $records["MonthEnd"];
				$instance->trade = $records["Trade"];
				$instance->glno = $records["GLNo"];
				$instance->paymthd = $records["PayMthd"];
				$instance->balance = $records["Balance"];
				$instance->commsmthd = $records["CommsMthd"];
				$instance->deliverybalance = $records["DeliveryBalance"];
				$instance->grvcredpost = $records["GRVCredPost"];
				$instance->grvdoctype = $records["GRVDocType"];
				$instance->grvvatind = $records["GRVVATInd"];
				$instance->grvvatcalc = $records["GRVVATCalc"];
				$instance->bankname = $records["BankName"];
				$instance->bankbranchname = $records["BankBranchName"];
				$instance->bankbranchcode = $records["BankBranchCode"];
				$instance->bankaccno = $records["BankAccNo"];
				$instance->bankaccname = $records["BankAccName"];
				$instance->notepad = $records["Notepad"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->mainaccount = $records["MainAccount"];
				$instance->purcardrule = $records["PurCardRule"];
				$instance->vatnumber = $records["VATNumber"];
				$instance->status = $records["Status"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->category2 = $records["Category2"];
				$instance->termcode = $records["TermCode"];
				$instance->termfromvalue = $records["TermFromValue"];
				$instance->termfromtype = $records["TermFromType"];
				$instance->termfrom = $records["TermFrom"];
				$instance->termdiscount = $records["TermDiscount"];
				$instance->stocktakedate = $records["StockTakeDate"];
				$instance->buyer = $records["Buyer"];
				$instance->admin = $records["Admin"];
				$instance->destco = $records["DestCo"];
				$instance->destbranch = $records["DestBranch"];
				$instance->debaccount = $records["DebAccount"];
				$instance->bcadjfactor = $records["BCAdjFactor"];
				$instance->bcadjfrom = $records["BCAdjFrom"];
				$instance->bcadjto = $records["BCAdjTo"];
				$instance->bcpriceincr = $records["BCPriceIncr"];
				$instance->calmonth = $records["CalMonth"];
				$instance->dcsupplier = $records["DCSupplier"];
				$instance->crdselitems = $records["CRDSelItems"];
				$instance->allowreturns = $records["AllowReturns"];
				$instance->simplifier = $records["Simplifier"];
				$instance->crossorder = $records["CrossOrder"];
				$instance->ordermandatory = $records["OrderMandatory"];
				$instance->grvprocess = $records["GRVProcess"];
				$instance->exterm01 = $records["Exterm01"];
				$instance->exterm02 = $records["Exterm02"];
				$instance->exterm03 = $records["Exterm03"];
				$instance->exterm04 = $records["Exterm04"];
				$instance->exterm05 = $records["Exterm05"];
				$instance->exterm06 = $records["Exterm06"];
				$instance->exterm07 = $records["Exterm07"];
				$instance->exterm08 = $records["Exterm08"];
				$instance->exterm09 = $records["Exterm09"];
				$instance->exterm10 = $records["Exterm10"];
				$instance->exterm11 = $records["Exterm11"];
				$instance->exterm12 = $records["Exterm12"];
				$instance->version = $records["Version"];
				$instance->visionaccno = $records["VisionAccNo"];
				$instance->genesisaccno = $records["GenesisAccNo"];
				$instance->defaultgp = $records["DefaultGP"];
				$instance->bankauth = $records["BankAuth"];
				$instance->bankupdby = $records["BankUpdBy"];
				$instance->bankauthby = $records["BankAuthBy"];
				$instance->bee = $records["BEE"];
				$instance->beescore = $records["BEEScore"];
				$instance->beeexpdate = $records["BEEExpDate"];
				$instance->grvautoglog = $records["GRVAutoGLog"];
				$instance->coregno = $records["CORegNo"];
				$instance->simplifiersign = $records["SimplifierSign"];
				$instance->simplifierperc = $records["SimplifierPerc"];
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