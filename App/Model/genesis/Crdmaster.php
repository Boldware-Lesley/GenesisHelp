<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	CRDMaster

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar BUSADDRESS1" of type [nvarchar]
	"public nvarchar BUSADDRESS2" of type [nvarchar]
	"public nvarchar BUSADDRESS3" of type [nvarchar]
	"public nvarchar BUSADDRESS4" of type [nvarchar]
	"public nvarchar BUSPOSTCODE" of type [nvarchar]
	"public nvarchar POSTADDRESS1" of type [nvarchar]
	"public nvarchar POSTADDRESS2" of type [nvarchar]
	"public nvarchar POSTADDRESS3" of type [nvarchar]
	"public nvarchar POSTADDRESS4" of type [nvarchar]
	"public nvarchar POSTCODE" of type [nvarchar]
	"public nvarchar TELEPHONE" of type [nvarchar]
	"public nvarchar TELEPHONE2" of type [nvarchar]
	"public nvarchar FAX" of type [nvarchar]
	"public nvarchar CELLPHONE" of type [nvarchar]
	"public nvarchar EMAIL" of type [nvarchar]
	"public nvarchar CONTACT" of type [nvarchar]
	"public nvarchar BILLTOACCOUNT" of type [nvarchar]
	"public float CRLIMIT" of type [float]
	"public nvarchar SUPPACC" of type [nvarchar]
	"public nvarchar CURRENCY" of type [nvarchar]
	"public nvarchar REASON" of type [nvarchar]
	"public nvarchar ACCOUNTTYPE" of type [nvarchar]
	"public nvarchar CATEGORY" of type [nvarchar]
	"public nvarchar GROUPCODE" of type [nvarchar]
	"public nvarchar PARTIALORDERS" of type [nvarchar]
	"public float MONTHEND" of type [float]
	"public nvarchar TRADE" of type [nvarchar]
	"public nvarchar GLNO" of type [nvarchar]
	"public nvarchar PAYMTHD" of type [nvarchar]
	"public float BALANCE" of type [float]
	"public nvarchar COMMSMTHD" of type [nvarchar]
	"public float DELIVERYBALANCE" of type [float]
	"public nvarchar GRVCREDPOST" of type [nvarchar]
	"public nvarchar GRVDOCTYPE" of type [nvarchar]
	"public nvarchar GRVVATIND" of type [nvarchar]
	"public nvarchar BANKNAME" of type [nvarchar]
	"public nvarchar BANKBRANCHNAME" of type [nvarchar]
	"public nvarchar BANKBRANCHCODE" of type [nvarchar]
	"public nvarchar BANKACCNO" of type [nvarchar]
	"public nvarchar BANKACCNAME" of type [nvarchar]
	"public ntext NOTEPAD" of type [ntext]
	"public nvarchar CREATEDATE" of type [nvarchar]
	"public nvarchar CREATETIME" of type [nvarchar]
	"public nvarchar CREATEUSER" of type [nvarchar]
	"public nvarchar CREATEMACID" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar MAINACCOUNT" of type [nvarchar]
	"public nvarchar PURCARDRULE" of type [nvarchar]
	"public nvarchar VATNUMBER" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar VATINDICATOR" of type [nvarchar]
	"public nvarchar CATEGORY2" of type [nvarchar]
	"public nvarchar TERMCODE" of type [nvarchar]
	"public float TERMFROMVALUE" of type [float]
	"public nvarchar TERMFROMTYPE" of type [nvarchar]
	"public nvarchar TERMFROM" of type [nvarchar]
	"public float TERMDISCOUNT" of type [float]
	"public nvarchar STOCKTAKEDATE" of type [nvarchar]
	"public nvarchar BUYER" of type [nvarchar]
	"public nvarchar CALMONTH" of type [nvarchar]
	"public nvarchar DCSUPPLIER" of type [nvarchar]
	"public nvarchar DESTCO" of type [nvarchar]
	"public nvarchar DESTBRANCH" of type [nvarchar]
	"public nvarchar DEBACCOUNT" of type [nvarchar]
	"public nvarchar CRDSELITEMS" of type [nvarchar]
	"public nvarchar ALLOWRETURNS" of type [nvarchar]
	"public nvarchar VERSION" of type [nvarchar]
	"public float BCAdjFactor" of type [float]
	"public nvarchar BCAdjFrom" of type [nvarchar]
	"public nvarchar BCAdjTo" of type [nvarchar]
	"public nvarchar BCPriceIncr" of type [nvarchar]
	"public nvarchar Simplifier" of type [nvarchar]
	"public nvarchar VISIONACCNO" of type [nvarchar]
	"public int ExTerm01" of type [int]
	"public int ExTerm02" of type [int]
	"public int ExTerm03" of type [int]
	"public int ExTerm04" of type [int]
	"public int ExTerm05" of type [int]
	"public int ExTerm06" of type [int]
	"public int ExTerm07" of type [int]
	"public int ExTerm08" of type [int]
	"public int ExTerm09" of type [int]
	"public int ExTerm10" of type [int]
	"public int ExTerm11" of type [int]
	"public int ExTerm12" of type [int]
	"public nvarchar GenesisAccNo" of type [nvarchar]
	"public float DefaultGP" of type [float]
	"public nvarchar BankAuth" of type [nvarchar]
	"public nvarchar BankUpdBy" of type [nvarchar]
	"public nvarchar BankAuthBy" of type [nvarchar]
	"public nvarchar Admin" of type [nvarchar]
	"public nvarchar CrossOrder" of type [nvarchar]
	"public nvarchar OrderMandatory" of type [nvarchar]
	"public nvarchar GRVProcess" of type [nvarchar]
	"public nvarchar GRVVATCalc" of type [nvarchar]
	"public nvarchar BuyGroupAccNo" of type [nvarchar]
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

class Crdmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
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
	public $calmonth ;	
	public $dcsupplier ;	
	public $destco ;	
	public $destbranch ;	
	public $debaccount ;	
	public $crdselitems ;	
	public $allowreturns ;	
	public $version ;	
	public $bcadjfactor ;	
	public $bcadjfrom ;	
	public $bcadjto ;	
	public $bcpriceincr ;	
	public $simplifier ;	
	public $visionaccno ;	
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
	public $genesisaccno ;	
	public $defaultgp ;	
	public $bankauth ;	
	public $bankupdby ;	
	public $bankauthby ;	
	public $admin ;	
	public $crossorder ;	
	public $ordermandatory ;	
	public $grvprocess ;	
	public $grvvatcalc ;	
	public $buygroupaccno ;	
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
	public static function ini_RECID($conn,$recid) {
		$instance = new self();
		try {

			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [NAME], [BUSADDRESS1], [BUSADDRESS2], [BUSADDRESS3], [BUSADDRESS4], [BUSPOSTCODE], [POSTADDRESS1], [POSTADDRESS2], [POSTADDRESS3], [POSTADDRESS4], [POSTCODE], [TELEPHONE], [TELEPHONE2], [FAX], [CELLPHONE], [EMAIL], [CONTACT], [BILLTOACCOUNT], [CRLIMIT], [SUPPACC], [CURRENCY], [REASON], [ACCOUNTTYPE], [CATEGORY], [GROUPCODE], [PARTIALORDERS], [MONTHEND], [TRADE], [GLNO], [PAYMTHD], [BALANCE], [COMMSMTHD], [DELIVERYBALANCE], [GRVCREDPOST], [GRVDOCTYPE], [GRVVATIND], [BANKNAME], [BANKBRANCHNAME], [BANKBRANCHCODE], [BANKACCNO], [BANKACCNAME], [NOTEPAD], [CREATEDATE], [CREATETIME], [CREATEUSER], [CREATEMACID], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [MAINACCOUNT], [PURCARDRULE], [VATNUMBER], [STATUS], [VATINDICATOR], [CATEGORY2], [TERMCODE], [TERMFROMVALUE], [TERMFROMTYPE], [TERMFROM], [TERMDISCOUNT], [STOCKTAKEDATE], [BUYER], [CALMONTH], [DCSUPPLIER], [DESTCO], [DESTBRANCH], [DEBACCOUNT], [CRDSELITEMS], [ALLOWRETURNS], [VERSION], [BCAdjFactor], [BCAdjFrom], [BCAdjTo], [BCPriceIncr], [Simplifier], [VISIONACCNO], [ExTerm01], [ExTerm02], [ExTerm03], [ExTerm04], [ExTerm05], [ExTerm06], [ExTerm07], [ExTerm08], [ExTerm09], [ExTerm10], [ExTerm11], [ExTerm12], [GenesisAccNo], [DefaultGP], [BankAuth], [BankUpdBy], [BankAuthBy], [Admin], [CrossOrder], [OrderMandatory], [GRVProcess], [GRVVATCalc], [BuyGroupAccNo], [BEE], [BEEScore], [BEEExpDate], [GRVAutoGLog], [CORegNo], [SimplifierSign], [SimplifierPerc] FROM [CRDMaster]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->busaddress1 = $records["BUSADDRESS1"];
				$instance->busaddress2 = $records["BUSADDRESS2"];
				$instance->busaddress3 = $records["BUSADDRESS3"];
				$instance->busaddress4 = $records["BUSADDRESS4"];
				$instance->buspostcode = $records["BUSPOSTCODE"];
				$instance->postaddress1 = $records["POSTADDRESS1"];
				$instance->postaddress2 = $records["POSTADDRESS2"];
				$instance->postaddress3 = $records["POSTADDRESS3"];
				$instance->postaddress4 = $records["POSTADDRESS4"];
				$instance->postcode = $records["POSTCODE"];
				$instance->telephone = $records["TELEPHONE"];
				$instance->telephone2 = $records["TELEPHONE2"];
				$instance->fax = $records["FAX"];
				$instance->cellphone = $records["CELLPHONE"];
				$instance->email = $records["EMAIL"];
				$instance->contact = $records["CONTACT"];
				$instance->billtoaccount = $records["BILLTOACCOUNT"];
				$instance->crlimit = $records["CRLIMIT"];
				$instance->suppacc = $records["SUPPACC"];
				$instance->currency = $records["CURRENCY"];
				$instance->reason = $records["REASON"];
				$instance->accounttype = $records["ACCOUNTTYPE"];
				$instance->category = $records["CATEGORY"];
				$instance->groupcode = $records["GROUPCODE"];
				$instance->partialorders = $records["PARTIALORDERS"];
				$instance->monthend = $records["MONTHEND"];
				$instance->trade = $records["TRADE"];
				$instance->glno = $records["GLNO"];
				$instance->paymthd = $records["PAYMTHD"];
				$instance->balance = $records["BALANCE"];
				$instance->commsmthd = $records["COMMSMTHD"];
				$instance->deliverybalance = $records["DELIVERYBALANCE"];
				$instance->grvcredpost = $records["GRVCREDPOST"];
				$instance->grvdoctype = $records["GRVDOCTYPE"];
				$instance->grvvatind = $records["GRVVATIND"];
				$instance->bankname = $records["BANKNAME"];
				$instance->bankbranchname = $records["BANKBRANCHNAME"];
				$instance->bankbranchcode = $records["BANKBRANCHCODE"];
				$instance->bankaccno = $records["BANKACCNO"];
				$instance->bankaccname = $records["BANKACCNAME"];
				$instance->notepad = $records["NOTEPAD"];
				$instance->createdate = $records["CREATEDATE"];
				$instance->createtime = $records["CREATETIME"];
				$instance->createuser = $records["CREATEUSER"];
				$instance->createmacid = $records["CREATEMACID"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->mainaccount = $records["MAINACCOUNT"];
				$instance->purcardrule = $records["PURCARDRULE"];
				$instance->vatnumber = $records["VATNUMBER"];
				$instance->status = $records["STATUS"];
				$instance->vatindicator = $records["VATINDICATOR"];
				$instance->category2 = $records["CATEGORY2"];
				$instance->termcode = $records["TERMCODE"];
				$instance->termfromvalue = $records["TERMFROMVALUE"];
				$instance->termfromtype = $records["TERMFROMTYPE"];
				$instance->termfrom = $records["TERMFROM"];
				$instance->termdiscount = $records["TERMDISCOUNT"];
				$instance->stocktakedate = $records["STOCKTAKEDATE"];
				$instance->buyer = $records["BUYER"];
				$instance->calmonth = $records["CALMONTH"];
				$instance->dcsupplier = $records["DCSUPPLIER"];
				$instance->destco = $records["DESTCO"];
				$instance->destbranch = $records["DESTBRANCH"];
				$instance->debaccount = $records["DEBACCOUNT"];
				$instance->crdselitems = $records["CRDSELITEMS"];
				$instance->allowreturns = $records["ALLOWRETURNS"];
				$instance->version = $records["VERSION"];
				$instance->bcadjfactor = $records["BCAdjFactor"];
				$instance->bcadjfrom = $records["BCAdjFrom"];
				$instance->bcadjto = $records["BCAdjTo"];
				$instance->bcpriceincr = $records["BCPriceIncr"];
				$instance->simplifier = $records["Simplifier"];
				$instance->visionaccno = $records["VISIONACCNO"];
				$instance->exterm01 = $records["ExTerm01"];
				$instance->exterm02 = $records["ExTerm02"];
				$instance->exterm03 = $records["ExTerm03"];
				$instance->exterm04 = $records["ExTerm04"];
				$instance->exterm05 = $records["ExTerm05"];
				$instance->exterm06 = $records["ExTerm06"];
				$instance->exterm07 = $records["ExTerm07"];
				$instance->exterm08 = $records["ExTerm08"];
				$instance->exterm09 = $records["ExTerm09"];
				$instance->exterm10 = $records["ExTerm10"];
				$instance->exterm11 = $records["ExTerm11"];
				$instance->exterm12 = $records["ExTerm12"];
				$instance->genesisaccno = $records["GenesisAccNo"];
				$instance->defaultgp = $records["DefaultGP"];
				$instance->bankauth = $records["BankAuth"];
				$instance->bankupdby = $records["BankUpdBy"];
				$instance->bankauthby = $records["BankAuthBy"];
				$instance->admin = $records["Admin"];
				$instance->crossorder = $records["CrossOrder"];
				$instance->ordermandatory = $records["OrderMandatory"];
				$instance->grvprocess = $records["GRVProcess"];
				$instance->grvvatcalc = $records["GRVVATCalc"];
				$instance->buygroupaccno = $records["BuyGroupAccNo"];
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
	Main Constructor For Declearing Using BUSPOSTCODE
	*/
	public static function ini_Code($conn,$CO,$BRANCH,$ACCOUNT) {
		$instance = new self();
		try {


			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [NAME], [BUSADDRESS1], [BUSADDRESS2], [BUSADDRESS3], [BUSADDRESS4], [BUSPOSTCODE], [POSTADDRESS1], [POSTADDRESS2], [POSTADDRESS3], [POSTADDRESS4], [POSTCODE], [TELEPHONE], [TELEPHONE2], [FAX], [CELLPHONE], [EMAIL], [CONTACT], [BILLTOACCOUNT], [CRLIMIT], [SUPPACC], [CURRENCY], [REASON], [ACCOUNTTYPE], [CATEGORY], [GROUPCODE], [PARTIALORDERS], [MONTHEND], [TRADE], [GLNO], [PAYMTHD], [BALANCE], [COMMSMTHD], [DELIVERYBALANCE], [GRVCREDPOST], [GRVDOCTYPE], [GRVVATIND], [BANKNAME], [BANKBRANCHNAME], [BANKBRANCHCODE], [BANKACCNO], [BANKACCNAME], [NOTEPAD], [CREATEDATE], [CREATETIME], [CREATEUSER], [CREATEMACID], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [MAINACCOUNT], [PURCARDRULE], [VATNUMBER], [STATUS], [VATINDICATOR], [CATEGORY2], [TERMCODE], [TERMFROMVALUE], [TERMFROMTYPE], [TERMFROM], [TERMDISCOUNT], [STOCKTAKEDATE], [BUYER], [CALMONTH], [DCSUPPLIER], [DESTCO], [DESTBRANCH], [DEBACCOUNT], [CRDSELITEMS], [ALLOWRETURNS], [VERSION], [BCAdjFactor], [BCAdjFrom], [BCAdjTo], [BCPriceIncr], [Simplifier], [VISIONACCNO], [ExTerm01], [ExTerm02], [ExTerm03], [ExTerm04], [ExTerm05], [ExTerm06], [ExTerm07], [ExTerm08], [ExTerm09], [ExTerm10], [ExTerm11], [ExTerm12], [GenesisAccNo], [DefaultGP], [BankAuth], [BankUpdBy], [BankAuthBy], [Admin], [CrossOrder], [OrderMandatory], [GRVProcess], [GRVVATCalc], [BuyGroupAccNo], [BEE], [BEEScore], [BEEExpDate], [GRVAutoGLog], [CORegNo], [SimplifierSign], [SimplifierPerc] FROM [CRDMaster] ".
                " WHERE [CO]=:CO AND [BRANCH]=:BRANCH AND [ACCOUNT]=:ACCOUNT  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":CO", $CO);
            $stmt->bindParam(":BRANCH", $BRANCH);
            $stmt->bindParam(":ACCOUNT", $ACCOUNT);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {

				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->busaddress1 = $records["BUSADDRESS1"];
				$instance->busaddress2 = $records["BUSADDRESS2"];
				$instance->busaddress3 = $records["BUSADDRESS3"];
				$instance->busaddress4 = $records["BUSADDRESS4"];
				$instance->buspostcode = $records["BUSPOSTCODE"];
				$instance->postaddress1 = $records["POSTADDRESS1"];
				$instance->postaddress2 = $records["POSTADDRESS2"];
				$instance->postaddress3 = $records["POSTADDRESS3"];
				$instance->postaddress4 = $records["POSTADDRESS4"];
				$instance->postcode = $records["POSTCODE"];
				$instance->telephone = $records["TELEPHONE"];
				$instance->telephone2 = $records["TELEPHONE2"];
				$instance->fax = $records["FAX"];
				$instance->cellphone = $records["CELLPHONE"];
				$instance->email = $records["EMAIL"];
				$instance->contact = $records["CONTACT"];
				$instance->billtoaccount = $records["BILLTOACCOUNT"];
				$instance->crlimit = $records["CRLIMIT"];
				$instance->suppacc = $records["SUPPACC"];
				$instance->currency = $records["CURRENCY"];
				$instance->reason = $records["REASON"];
				$instance->accounttype = $records["ACCOUNTTYPE"];
				$instance->category = $records["CATEGORY"];
				$instance->groupcode = $records["GROUPCODE"];
				$instance->partialorders = $records["PARTIALORDERS"];
				$instance->monthend = $records["MONTHEND"];
				$instance->trade = $records["TRADE"];
				$instance->glno = $records["GLNO"];
				$instance->paymthd = $records["PAYMTHD"];
				$instance->balance = $records["BALANCE"];
				$instance->commsmthd = $records["COMMSMTHD"];
				$instance->deliverybalance = $records["DELIVERYBALANCE"];
				$instance->grvcredpost = $records["GRVCREDPOST"];
				$instance->grvdoctype = $records["GRVDOCTYPE"];
				$instance->grvvatind = $records["GRVVATIND"];
				$instance->bankname = $records["BANKNAME"];
				$instance->bankbranchname = $records["BANKBRANCHNAME"];
				$instance->bankbranchcode = $records["BANKBRANCHCODE"];
				$instance->bankaccno = $records["BANKACCNO"];
				$instance->bankaccname = $records["BANKACCNAME"];
				$instance->notepad = $records["NOTEPAD"];
				$instance->createdate = $records["CREATEDATE"];
				$instance->createtime = $records["CREATETIME"];
				$instance->createuser = $records["CREATEUSER"];
				$instance->createmacid = $records["CREATEMACID"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->mainaccount = $records["MAINACCOUNT"];
				$instance->purcardrule = $records["PURCARDRULE"];
				$instance->vatnumber = $records["VATNUMBER"];
				$instance->status = $records["STATUS"];
				$instance->vatindicator = $records["VATINDICATOR"];
				$instance->category2 = $records["CATEGORY2"];
				$instance->termcode = $records["TERMCODE"];
				$instance->termfromvalue = $records["TERMFROMVALUE"];
				$instance->termfromtype = $records["TERMFROMTYPE"];
				$instance->termfrom = $records["TERMFROM"];
				$instance->termdiscount = $records["TERMDISCOUNT"];
				$instance->stocktakedate = $records["STOCKTAKEDATE"];
				$instance->buyer = $records["BUYER"];
				$instance->calmonth = $records["CALMONTH"];
				$instance->dcsupplier = $records["DCSUPPLIER"];
				$instance->destco = $records["DESTCO"];
				$instance->destbranch = $records["DESTBRANCH"];
				$instance->debaccount = $records["DEBACCOUNT"];
				$instance->crdselitems = $records["CRDSELITEMS"];
				$instance->allowreturns = $records["ALLOWRETURNS"];
				$instance->version = $records["VERSION"];
				$instance->bcadjfactor = $records["BCAdjFactor"];
				$instance->bcadjfrom = $records["BCAdjFrom"];
				$instance->bcadjto = $records["BCAdjTo"];
				$instance->bcpriceincr = $records["BCPriceIncr"];
				$instance->simplifier = $records["Simplifier"];
				$instance->visionaccno = $records["VISIONACCNO"];
				$instance->exterm01 = $records["ExTerm01"];
				$instance->exterm02 = $records["ExTerm02"];
				$instance->exterm03 = $records["ExTerm03"];
				$instance->exterm04 = $records["ExTerm04"];
				$instance->exterm05 = $records["ExTerm05"];
				$instance->exterm06 = $records["ExTerm06"];
				$instance->exterm07 = $records["ExTerm07"];
				$instance->exterm08 = $records["ExTerm08"];
				$instance->exterm09 = $records["ExTerm09"];
				$instance->exterm10 = $records["ExTerm10"];
				$instance->exterm11 = $records["ExTerm11"];
				$instance->exterm12 = $records["ExTerm12"];
				$instance->genesisaccno = $records["GenesisAccNo"];
				$instance->defaultgp = $records["DefaultGP"];
				$instance->bankauth = $records["BankAuth"];
				$instance->bankupdby = $records["BankUpdBy"];
				$instance->bankauthby = $records["BankAuthBy"];
				$instance->admin = $records["Admin"];
				$instance->crossorder = $records["CrossOrder"];
				$instance->ordermandatory = $records["OrderMandatory"];
				$instance->grvprocess = $records["GRVProcess"];
				$instance->grvvatcalc = $records["GRVVATCalc"];
				$instance->buygroupaccno = $records["BuyGroupAccNo"];
				$instance->bee = $records["BEE"];
				$instance->beescore = $records["BEEScore"];
				$instance->beeexpdate = $records["BEEExpDate"];
				$instance->grvautoglog = $records["GRVAutoGLog"];
				$instance->coregno = $records["CORegNo"];
				$instance->simplifiersign = $records["SimplifierSign"];
				$instance->simplifierperc = $records["SimplifierPerc"];
			}
		} catch (Exception $ex) {

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

	/*END <<Override Methods>> */
	

}
?>