<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	DEBMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar DebtorType" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar TradeName" of type [nvarchar]
	"public nvarchar BusAddress1" of type [nvarchar]
	"public nvarchar BusAddress2" of type [nvarchar]
	"public nvarchar BusAddress3" of type [nvarchar]
	"public nvarchar BusAddress4" of type [nvarchar]
	"public nvarchar BusPostCode" of type [nvarchar]
	"public nvarchar PostAddress1" of type [nvarchar]
	"public nvarchar PostAddress2" of type [nvarchar]
	"public nvarchar PostAddress3" of type [nvarchar]
	"public nvarchar PostAddress4" of type [nvarchar]
	"public nvarchar PostCode" of type [nvarchar]
	"public nvarchar Telephone2" of type [nvarchar]
	"public nvarchar Fax" of type [nvarchar]
	"public nvarchar Email" of type [nvarchar]
	"public nvarchar CellPhone" of type [nvarchar]
	"public nvarchar IdNo" of type [nvarchar]
	"public nvarchar Contact" of type [nvarchar]
	"public nvarchar AccountType" of type [nvarchar]
	"public nvarchar SaleType" of type [nvarchar]
	"public nvarchar VATIndicator" of type [nvarchar]
	"public nvarchar Interest" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar MainAccount" of type [nvarchar]
	"public nvarchar Reason" of type [nvarchar]
	"public float CreditLimit" of type [float]
	"public nvarchar LimitChk" of type [nvarchar]
	"public nvarchar TermCode" of type [nvarchar]
	"public nvarchar Area" of type [nvarchar]
	"public nvarchar Region" of type [nvarchar]
	"public nvarchar Route" of type [nvarchar]
	"public nvarchar Salesrep" of type [nvarchar]
	"public nvarchar Category2" of type [nvarchar]
	"public float Balance" of type [float]
	"public nvarchar PriceCat" of type [nvarchar]
	"public float CostPlus" of type [float]
	"public float CostPlusF" of type [float]
	"public nvarchar AllowPromo" of type [nvarchar]
	"public float SellPlus" of type [float]
	"public nvarchar SellPlusPromo" of type [nvarchar]
	"public float SellMinus" of type [float]
	"public nvarchar SellMinusPromo" of type [nvarchar]
	"public nvarchar DeptPrice" of type [nvarchar]
	"public nvarchar LastPrice" of type [nvarchar]
	"public nvarchar AltCode" of type [nvarchar]
	"public float CgsLimit" of type [float]
	"public nvarchar CgsExpDT" of type [nvarchar]
	"public nvarchar CGSFile" of type [nvarchar]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public ntext Notepad" of type [ntext]
	"public nvarchar Telephone" of type [nvarchar]
	"public nvarchar VATNumber" of type [nvarchar]
	"public nvarchar GroupType" of type [nvarchar]
	"public nvarchar PayMthd" of type [nvarchar]
	"public nvarchar Currency" of type [nvarchar]
	"public nvarchar Category" of type [nvarchar]
	"public nvarchar GroupCode" of type [nvarchar]
	"public nvarchar PartialOrders" of type [nvarchar]
	"public nvarchar BankName" of type [nvarchar]
	"public nvarchar BankBranchName" of type [nvarchar]
	"public nvarchar BankBranchCode" of type [nvarchar]
	"public nvarchar BankAccNo" of type [nvarchar]
	"public nvarchar BankAccName" of type [nvarchar]
	"public nvarchar CommsMthd" of type [nvarchar]
	"public float BankCheqLimit" of type [float]
	"public nvarchar Inhouse" of type [nvarchar]
	"public nvarchar VIP" of type [nvarchar]
	"public int TermFromValue" of type [int]
	"public nvarchar TermFromType" of type [nvarchar]
	"public nvarchar TermFrom" of type [nvarchar]
	"public float TermDiscount" of type [float]
	"public int MonthEnd" of type [int]
	"public nvarchar DefBranch" of type [nvarchar]
	"public float PDCs" of type [float]
	"public float RentalIncl" of type [float]
	"public nvarchar Website" of type [nvarchar]
	"public nvarchar DestCO" of type [nvarchar]
	"public nvarchar DestBranch" of type [nvarchar]
	"public nvarchar CRDAccount" of type [nvarchar]
	"public nvarchar InterComp" of type [nvarchar]
	"public nvarchar Version" of type [nvarchar]
	"public string Consolidate" of type [string]
	"public nvarchar ItemPrice" of type [nvarchar]
	"public nvarchar CrmCode" of type [nvarchar]
	"public nvarchar MailInd" of type [nvarchar]
	"public nvarchar VendorNo" of type [nvarchar]
	"public nvarchar CGSLimGranted" of type [nvarchar]
	"public nvarchar CORegNo" of type [nvarchar]
	"public nvarchar DebDeal" of type [nvarchar]
	"public nvarchar SMSInd" of type [nvarchar]
	"public nvarchar BlockReturns" of type [nvarchar]
	"public nvarchar ECommInd" of type [nvarchar]
	"public nvarchar StokvelInd" of type [nvarchar]
	"public int StokvelPswd" of type [int]
	"public nvarchar Distribution" of type [nvarchar]
	"public nvarchar Longitude" of type [nvarchar]
	"public nvarchar Latitude" of type [nvarchar]
	"public nvarchar Grading" of type [nvarchar]
	"public float TempCRLimit" of type [float]
	"public nvarchar TempCRLimitDate" of type [nvarchar]
	"public nvarchar CRMAccNo" of type [nvarchar]
	"public nvarchar LicenseNo" of type [nvarchar]
	"public nvarchar LicenseExpDate" of type [nvarchar]
	"public float TravelDistance" of type [float]
	"public nvarchar ECommPswd" of type [nvarchar]
	"public nvarchar StmtFreq" of type [nvarchar]
	"public int StmtFreqDOW" of type [int]
	"public nvarchar PreAuthInd" of type [nvarchar]
	"public nvarchar LicenseExpAction" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $debtortype ;	
	public $name ;	
	public $tradename ;	
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
	public $telephone2 ;	
	public $fax ;	
	public $email ;	
	public $cellphone ;	
	public $idno ;	
	public $contact ;	
	public $accounttype ;	
	public $saletype ;	
	public $vatindicator ;	
	public $interest ;	
	public $status ;	
	public $mainaccount ;	
	public $reason ;	
	public $creditlimit ;	
	public $limitchk ;	
	public $termcode ;	
	public $area ;	
	public $region ;	
	public $route ;	
	public $salesrep ;	
	public $category2 ;	
	public $balance ;	
	public $pricecat ;	
	public $costplus ;	
	public $costplusf ;	
	public $allowpromo ;	
	public $sellplus ;	
	public $sellpluspromo ;	
	public $sellminus ;	
	public $sellminuspromo ;	
	public $deptprice ;	
	public $lastprice ;	
	public $altcode ;	
	public $cgslimit ;	
	public $cgsexpdt ;	
	public $cgsfile ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $notepad ;	
	public $telephone ;	
	public $vatnumber ;	
	public $grouptype ;	
	public $paymthd ;	
	public $currency ;	
	public $category ;	
	public $groupcode ;	
	public $partialorders ;	
	public $bankname ;	
	public $bankbranchname ;	
	public $bankbranchcode ;	
	public $bankaccno ;	
	public $bankaccname ;	
	public $commsmthd ;	
	public $bankcheqlimit ;	
	public $inhouse ;	
	public $vip ;	
	public $termfromvalue ;	
	public $termfromtype ;	
	public $termfrom ;	
	public $termdiscount ;	
	public $monthend ;	
	public $defbranch ;	
	public $pdcs ;	
	public $rentalincl ;	
	public $website ;	
	public $destco ;	
	public $destbranch ;	
	public $crdaccount ;	
	public $intercomp ;	
	public $version ;	
	public $consolidate ;	
	public $itemprice ;	
	public $crmcode ;	
	public $mailind ;	
	public $vendorno ;	
	public $cgslimgranted ;	
	public $coregno ;	
	public $debdeal ;	
	public $smsind ;	
	public $blockreturns ;	
	public $ecommind ;	
	public $stokvelind ;	
	public $stokvelpswd ;	
	public $distribution ;	
	public $longitude ;	
	public $latitude ;	
	public $grading ;	
	public $tempcrlimit ;	
	public $tempcrlimitdate ;	
	public $crmaccno ;	
	public $licenseno ;	
	public $licenseexpdate ;	
	public $traveldistance ;	
	public $ecommpswd ;	
	public $stmtfreq ;	
	public $stmtfreqdow ;	
	public $preauthind ;	
	public $licenseexpaction ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RecID($conn,$recid) {
		$instance = new self();
		try {

			$query = " SELECT RecID, [CO], [Branch], [Account], [DebtorType], [Name], [TradeName], [BusAddress1], [BusAddress2], [BusAddress3], [BusAddress4], [BusPostCode], [PostAddress1], [PostAddress2], [PostAddress3], [PostAddress4], [PostCode], [Telephone2], [Fax], [Email], [CellPhone], [IdNo], [Contact], [AccountType], [SaleType], [VATIndicator], [Interest], [Status], [MainAccount], [Reason], [CreditLimit], [LimitChk], [TermCode], [Area], [Region], [Route], [Salesrep], [Category2], [Balance], [PriceCat], [CostPlus], [CostPlusF], [AllowPromo], [SellPlus], [SellPlusPromo], [SellMinus], [SellMinusPromo], [DeptPrice], [LastPrice], [AltCode], [CgsLimit], [CgsExpDT], [CGSFile], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Notepad], [Telephone], [VATNumber], [GroupType], [PayMthd], [Currency], [Category], [GroupCode], [PartialOrders], [BankName], [BankBranchName], [BankBranchCode], [BankAccNo], [BankAccName], [CommsMthd], [BankCheqLimit], [Inhouse], [VIP], [TermFromValue], [TermFromType], [TermFrom], [TermDiscount], [MonthEnd], [DefBranch], [PDCs], [RentalIncl], [Website], [DestCO], [DestBranch], [CRDAccount], [InterComp], [Version], [Consolidate], [ItemPrice], [CrmCode], [MailInd], [VendorNo], [CGSLimGranted], [CORegNo], [DebDeal], [SMSInd], [BlockReturns], [ECommInd], [StokvelInd], [StokvelPswd], [Distribution], [Longitude], [Latitude], [Grading], [TempCRLimit], [TempCRLimitDate], [CRMAccNo], [LicenseNo], [LicenseExpDate], [TravelDistance], [ECommPswd], [StmtFreq], [StmtFreqDOW], [PreAuthInd], [LicenseExpAction] FROM [DEBMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->debtortype = $records["DebtorType"];
				$instance->name = $records["Name"];
				$instance->tradename = $records["TradeName"];
				$instance->busaddress1 = $records["BusAddress1"];
				$instance->busaddress2 = $records["BusAddress2"];
				$instance->busaddress3 = $records["BusAddress3"];
				$instance->busaddress4 = $records["BusAddress4"];
				$instance->buspostcode = $records["BusPostCode"];
				$instance->postaddress1 = $records["PostAddress1"];
				$instance->postaddress2 = $records["PostAddress2"];
				$instance->postaddress3 = $records["PostAddress3"];
				$instance->postaddress4 = $records["PostAddress4"];
				$instance->postcode = $records["PostCode"];
				$instance->telephone2 = $records["Telephone2"];
				$instance->fax = $records["Fax"];
				$instance->email = $records["Email"];
				$instance->cellphone = $records["CellPhone"];
				$instance->idno = $records["IdNo"];
				$instance->contact = $records["Contact"];
				$instance->accounttype = $records["AccountType"];
				$instance->saletype = $records["SaleType"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->interest = $records["Interest"];
				$instance->status = $records["Status"];
				$instance->mainaccount = $records["MainAccount"];
				$instance->reason = $records["Reason"];
				$instance->creditlimit = $records["CreditLimit"];
				$instance->limitchk = $records["LimitChk"];
				$instance->termcode = $records["TermCode"];
				$instance->area = $records["Area"];
				$instance->region = $records["Region"];
				$instance->route = $records["Route"];
				$instance->salesrep = $records["Salesrep"];
				$instance->category2 = $records["Category2"];
				$instance->balance = $records["Balance"];
				$instance->pricecat = $records["PriceCat"];
				$instance->costplus = $records["CostPlus"];
				$instance->costplusf = $records["CostPlusF"];
				$instance->allowpromo = $records["AllowPromo"];
				$instance->sellplus = $records["SellPlus"];
				$instance->sellpluspromo = $records["SellPlusPromo"];
				$instance->sellminus = $records["SellMinus"];
				$instance->sellminuspromo = $records["SellMinusPromo"];
				$instance->deptprice = $records["DeptPrice"];
				$instance->lastprice = $records["LastPrice"];
				$instance->altcode = $records["AltCode"];
				$instance->cgslimit = $records["CgsLimit"];
				$instance->cgsexpdt = $records["CgsExpDT"];
				$instance->cgsfile = $records["CGSFile"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->notepad = $records["Notepad"];
				$instance->telephone = $records["Telephone"];
				$instance->vatnumber = $records["VATNumber"];
				$instance->grouptype = $records["GroupType"];
				$instance->paymthd = $records["PayMthd"];
				$instance->currency = $records["Currency"];
				$instance->category = $records["Category"];
				$instance->groupcode = $records["GroupCode"];
				$instance->partialorders = $records["PartialOrders"];
				$instance->bankname = $records["BankName"];
				$instance->bankbranchname = $records["BankBranchName"];
				$instance->bankbranchcode = $records["BankBranchCode"];
				$instance->bankaccno = $records["BankAccNo"];
				$instance->bankaccname = $records["BankAccName"];
				$instance->commsmthd = $records["CommsMthd"];
				$instance->bankcheqlimit = $records["BankCheqLimit"];
				$instance->inhouse = $records["Inhouse"];
				$instance->vip = $records["VIP"];
				$instance->termfromvalue = $records["TermFromValue"];
				$instance->termfromtype = $records["TermFromType"];
				$instance->termfrom = $records["TermFrom"];
				$instance->termdiscount = $records["TermDiscount"];
				$instance->monthend = $records["MonthEnd"];
				$instance->defbranch = $records["DefBranch"];
				$instance->pdcs = $records["PDCs"];
				$instance->rentalincl = $records["RentalIncl"];
				$instance->website = $records["Website"];
				$instance->destco = $records["DestCO"];
				$instance->destbranch = $records["DestBranch"];
				$instance->crdaccount = $records["CRDAccount"];
				$instance->intercomp = $records["InterComp"];
				$instance->version = $records["Version"];
				$instance->consolidate = $records["Consolidate"];
				$instance->itemprice = $records["ItemPrice"];
				$instance->crmcode = $records["CrmCode"];
				$instance->mailind = $records["MailInd"];
				$instance->vendorno = $records["VendorNo"];
				$instance->cgslimgranted = $records["CGSLimGranted"];
				$instance->coregno = $records["CORegNo"];
				$instance->debdeal = $records["DebDeal"];
				$instance->smsind = $records["SMSInd"];
				$instance->blockreturns = $records["BlockReturns"];
				$instance->ecommind = $records["ECommInd"];
				$instance->stokvelind = $records["StokvelInd"];
				$instance->stokvelpswd = $records["StokvelPswd"];
				$instance->distribution = $records["Distribution"];
				$instance->longitude = $records["Longitude"];
				$instance->latitude = $records["Latitude"];
				$instance->grading = $records["Grading"];
				$instance->tempcrlimit = $records["TempCRLimit"];
				$instance->tempcrlimitdate = $records["TempCRLimitDate"];
				$instance->crmaccno = $records["CRMAccNo"];
				$instance->licenseno = $records["LicenseNo"];
				$instance->licenseexpdate = $records["LicenseExpDate"];
				$instance->traveldistance = $records["TravelDistance"];
				$instance->ecommpswd = $records["ECommPswd"];
				$instance->stmtfreq = $records["StmtFreq"];
				$instance->stmtfreqdow = $records["StmtFreqDOW"];
				$instance->preauthind = $records["PreAuthInd"];
				$instance->licenseexpaction = $records["LicenseExpAction"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using BusPostCode
	*/
	public static function ini_Code($conn,$co,$branch,$account) {
		$instance = new self();
		try {

			$query = " SELECT RecID, [CO], [Branch], [Account], [DebtorType], [Name], [TradeName], [BusAddress1], [BusAddress2], [BusAddress3], [BusAddress4], [BusPostCode], [PostAddress1], [PostAddress2], [PostAddress3], [PostAddress4], [PostCode], [Telephone2], [Fax], [Email], [CellPhone], [IdNo], [Contact], [AccountType], [SaleType], [VATIndicator], [Interest], [Status], [MainAccount], [Reason], [CreditLimit], [LimitChk], [TermCode], [Area], [Region], [Route], [Salesrep], [Category2], [Balance], [PriceCat], [CostPlus], [CostPlusF], [AllowPromo], [SellPlus], [SellPlusPromo], [SellMinus], [SellMinusPromo], [DeptPrice], [LastPrice], [AltCode], [CgsLimit], [CgsExpDT], [CGSFile], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Notepad], [Telephone], [VATNumber], [GroupType], [PayMthd], [Currency], [Category], [GroupCode], [PartialOrders], [BankName], [BankBranchName], [BankBranchCode], [BankAccNo], [BankAccName], [CommsMthd], [BankCheqLimit], [Inhouse], [VIP], [TermFromValue], [TermFromType], [TermFrom], [TermDiscount], [MonthEnd], [DefBranch], [PDCs], [RentalIncl], [Website], [DestCO], [DestBranch], [CRDAccount], [InterComp], [Version], [Consolidate], [ItemPrice], [CrmCode], [MailInd], [VendorNo], [CGSLimGranted], [CORegNo], [DebDeal], [SMSInd], [BlockReturns], [ECommInd], [StokvelInd], [StokvelPswd], [Distribution], [Longitude], [Latitude], [Grading], [TempCRLimit], [TempCRLimitDate], [CRMAccNo], [LicenseNo], [LicenseExpDate], [TravelDistance], [ECommPswd], [StmtFreq], [StmtFreqDOW], [PreAuthInd], [LicenseExpAction] FROM [DEBMaster]  ".
                " WHERE [CO]=:CO AND [Branch]=:Branch AND [Account]=:Account  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":CO", $co);
            $stmt->bindParam(":Branch", $branch);
            $stmt->bindParam(":Account", $account);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->debtortype = $records["DebtorType"];
				$instance->name = $records["Name"];
				$instance->tradename = $records["TradeName"];
				$instance->busaddress1 = $records["BusAddress1"];
				$instance->busaddress2 = $records["BusAddress2"];
				$instance->busaddress3 = $records["BusAddress3"];
				$instance->busaddress4 = $records["BusAddress4"];
				$instance->buspostcode = $records["BusPostCode"];
				$instance->postaddress1 = $records["PostAddress1"];
				$instance->postaddress2 = $records["PostAddress2"];
				$instance->postaddress3 = $records["PostAddress3"];
				$instance->postaddress4 = $records["PostAddress4"];
				$instance->postcode = $records["PostCode"];
				$instance->telephone2 = $records["Telephone2"];
				$instance->fax = $records["Fax"];
				$instance->email = $records["Email"];
				$instance->cellphone = $records["CellPhone"];
				$instance->idno = $records["IdNo"];
				$instance->contact = $records["Contact"];
				$instance->accounttype = $records["AccountType"];
				$instance->saletype = $records["SaleType"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->interest = $records["Interest"];
				$instance->status = $records["Status"];
				$instance->mainaccount = $records["MainAccount"];
				$instance->reason = $records["Reason"];
				$instance->creditlimit = $records["CreditLimit"];
				$instance->limitchk = $records["LimitChk"];
				$instance->termcode = $records["TermCode"];
				$instance->area = $records["Area"];
				$instance->region = $records["Region"];
				$instance->route = $records["Route"];
				$instance->salesrep = $records["Salesrep"];
				$instance->category2 = $records["Category2"];
				$instance->balance = $records["Balance"];
				$instance->pricecat = $records["PriceCat"];
				$instance->costplus = $records["CostPlus"];
				$instance->costplusf = $records["CostPlusF"];
				$instance->allowpromo = $records["AllowPromo"];
				$instance->sellplus = $records["SellPlus"];
				$instance->sellpluspromo = $records["SellPlusPromo"];
				$instance->sellminus = $records["SellMinus"];
				$instance->sellminuspromo = $records["SellMinusPromo"];
				$instance->deptprice = $records["DeptPrice"];
				$instance->lastprice = $records["LastPrice"];
				$instance->altcode = $records["AltCode"];
				$instance->cgslimit = $records["CgsLimit"];
				$instance->cgsexpdt = $records["CgsExpDT"];
				$instance->cgsfile = $records["CGSFile"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->notepad = $records["Notepad"];
				$instance->telephone = $records["Telephone"];
				$instance->vatnumber = $records["VATNumber"];
				$instance->grouptype = $records["GroupType"];
				$instance->paymthd = $records["PayMthd"];
				$instance->currency = $records["Currency"];
				$instance->category = $records["Category"];
				$instance->groupcode = $records["GroupCode"];
				$instance->partialorders = $records["PartialOrders"];
				$instance->bankname = $records["BankName"];
				$instance->bankbranchname = $records["BankBranchName"];
				$instance->bankbranchcode = $records["BankBranchCode"];
				$instance->bankaccno = $records["BankAccNo"];
				$instance->bankaccname = $records["BankAccName"];
				$instance->commsmthd = $records["CommsMthd"];
				$instance->bankcheqlimit = $records["BankCheqLimit"];
				$instance->inhouse = $records["Inhouse"];
				$instance->vip = $records["VIP"];
				$instance->termfromvalue = $records["TermFromValue"];
				$instance->termfromtype = $records["TermFromType"];
				$instance->termfrom = $records["TermFrom"];
				$instance->termdiscount = $records["TermDiscount"];
				$instance->monthend = $records["MonthEnd"];
				$instance->defbranch = $records["DefBranch"];
				$instance->pdcs = $records["PDCs"];
				$instance->rentalincl = $records["RentalIncl"];
				$instance->website = $records["Website"];
				$instance->destco = $records["DestCO"];
				$instance->destbranch = $records["DestBranch"];
				$instance->crdaccount = $records["CRDAccount"];
				$instance->intercomp = $records["InterComp"];
				$instance->version = $records["Version"];
				$instance->consolidate = $records["Consolidate"];
				$instance->itemprice = $records["ItemPrice"];
				$instance->crmcode = $records["CrmCode"];
				$instance->mailind = $records["MailInd"];
				$instance->vendorno = $records["VendorNo"];
				$instance->cgslimgranted = $records["CGSLimGranted"];
				$instance->coregno = $records["CORegNo"];
				$instance->debdeal = $records["DebDeal"];
				$instance->smsind = $records["SMSInd"];
				$instance->blockreturns = $records["BlockReturns"];
				$instance->ecommind = $records["ECommInd"];
				$instance->stokvelind = $records["StokvelInd"];
				$instance->stokvelpswd = $records["StokvelPswd"];
				$instance->distribution = $records["Distribution"];
				$instance->longitude = $records["Longitude"];
				$instance->latitude = $records["Latitude"];
				$instance->grading = $records["Grading"];
				$instance->tempcrlimit = $records["TempCRLimit"];
				$instance->tempcrlimitdate = $records["TempCRLimitDate"];
				$instance->crmaccno = $records["CRMAccNo"];
				$instance->licenseno = $records["LicenseNo"];
				$instance->licenseexpdate = $records["LicenseExpDate"];
				$instance->traveldistance = $records["TravelDistance"];
				$instance->ecommpswd = $records["ECommPswd"];
				$instance->stmtfreq = $records["StmtFreq"];
				$instance->stmtfreqdow = $records["StmtFreqDOW"];
				$instance->preauthind = $records["PreAuthInd"];
				$instance->licenseexpaction = $records["LicenseExpAction"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
    public static function ini_Code_Co($conn,$co,$account) {
        $instance = new self();
        try {

            $query = " SELECT RecID, [CO], [Branch], [Account], [DebtorType], [Name], [TradeName], [BusAddress1], [BusAddress2], [BusAddress3], [BusAddress4], [BusPostCode], [PostAddress1], [PostAddress2], [PostAddress3], [PostAddress4], [PostCode], [Telephone2], [Fax], [Email], [CellPhone], [IdNo], [Contact], [AccountType], [SaleType], [VATIndicator], [Interest], [Status], [MainAccount], [Reason], [CreditLimit], [LimitChk], [TermCode], [Area], [Region], [Route], [Salesrep], [Category2], [Balance], [PriceCat], [CostPlus], [CostPlusF], [AllowPromo], [SellPlus], [SellPlusPromo], [SellMinus], [SellMinusPromo], [DeptPrice], [LastPrice], [AltCode], [CgsLimit], [CgsExpDT], [CGSFile], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Notepad], [Telephone], [VATNumber], [GroupType], [PayMthd], [Currency], [Category], [GroupCode], [PartialOrders], [BankName], [BankBranchName], [BankBranchCode], [BankAccNo], [BankAccName], [CommsMthd], [BankCheqLimit], [Inhouse], [VIP], [TermFromValue], [TermFromType], [TermFrom], [TermDiscount], [MonthEnd], [DefBranch], [PDCs], [RentalIncl], [Website], [DestCO], [DestBranch], [CRDAccount], [InterComp], [Version], [Consolidate], [ItemPrice], [CrmCode], [MailInd], [VendorNo], [CGSLimGranted], [CORegNo], [DebDeal], [SMSInd], [BlockReturns], [ECommInd], [StokvelInd], [StokvelPswd], [Distribution], [Longitude], [Latitude], [Grading], [TempCRLimit], [TempCRLimitDate], [CRMAccNo], [LicenseNo], [LicenseExpDate], [TravelDistance], [ECommPswd], [StmtFreq], [StmtFreqDOW], [PreAuthInd], [LicenseExpAction] FROM [DEBMaster]  ".
                " WHERE [CO]=:CO  AND [Account]=:Account  ";
            $stmt = $conn->getStatement($query);
            $stmt->bindParam(":CO", $co);
            $stmt->bindParam(":Account", $account);
            $stmt->execute();
            while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
                $instance->recid = $records["RecID"];
                $instance->co = $records["CO"];
                $instance->branch = $records["Branch"];
                $instance->account = $records["Account"];
                $instance->debtortype = $records["DebtorType"];
                $instance->name = $records["Name"];
                $instance->tradename = $records["TradeName"];
                $instance->busaddress1 = $records["BusAddress1"];
                $instance->busaddress2 = $records["BusAddress2"];
                $instance->busaddress3 = $records["BusAddress3"];
                $instance->busaddress4 = $records["BusAddress4"];
                $instance->buspostcode = $records["BusPostCode"];
                $instance->postaddress1 = $records["PostAddress1"];
                $instance->postaddress2 = $records["PostAddress2"];
                $instance->postaddress3 = $records["PostAddress3"];
                $instance->postaddress4 = $records["PostAddress4"];
                $instance->postcode = $records["PostCode"];
                $instance->telephone2 = $records["Telephone2"];
                $instance->fax = $records["Fax"];
                $instance->email = $records["Email"];
                $instance->cellphone = $records["CellPhone"];
                $instance->idno = $records["IdNo"];
                $instance->contact = $records["Contact"];
                $instance->accounttype = $records["AccountType"];
                $instance->saletype = $records["SaleType"];
                $instance->vatindicator = $records["VATIndicator"];
                $instance->interest = $records["Interest"];
                $instance->status = $records["Status"];
                $instance->mainaccount = $records["MainAccount"];
                $instance->reason = $records["Reason"];
                $instance->creditlimit = $records["CreditLimit"];
                $instance->limitchk = $records["LimitChk"];
                $instance->termcode = $records["TermCode"];
                $instance->area = $records["Area"];
                $instance->region = $records["Region"];
                $instance->route = $records["Route"];
                $instance->salesrep = $records["Salesrep"];
                $instance->category2 = $records["Category2"];
                $instance->balance = $records["Balance"];
                $instance->pricecat = $records["PriceCat"];
                $instance->costplus = $records["CostPlus"];
                $instance->costplusf = $records["CostPlusF"];
                $instance->allowpromo = $records["AllowPromo"];
                $instance->sellplus = $records["SellPlus"];
                $instance->sellpluspromo = $records["SellPlusPromo"];
                $instance->sellminus = $records["SellMinus"];
                $instance->sellminuspromo = $records["SellMinusPromo"];
                $instance->deptprice = $records["DeptPrice"];
                $instance->lastprice = $records["LastPrice"];
                $instance->altcode = $records["AltCode"];
                $instance->cgslimit = $records["CgsLimit"];
                $instance->cgsexpdt = $records["CgsExpDT"];
                $instance->cgsfile = $records["CGSFile"];
                $instance->createdate = $records["CreateDate"];
                $instance->createtime = $records["CreateTime"];
                $instance->createuser = $records["CreateUser"];
                $instance->createmacid = $records["CreateMacID"];
                $instance->dtodate = $records["DTODate"];
                $instance->dtotime = $records["DTOTime"];
                $instance->dtouser = $records["DTOUser"];
                $instance->dtomacid = $records["DTOMacID"];
                $instance->notepad = $records["Notepad"];
                $instance->telephone = $records["Telephone"];
                $instance->vatnumber = $records["VATNumber"];
                $instance->grouptype = $records["GroupType"];
                $instance->paymthd = $records["PayMthd"];
                $instance->currency = $records["Currency"];
                $instance->category = $records["Category"];
                $instance->groupcode = $records["GroupCode"];
                $instance->partialorders = $records["PartialOrders"];
                $instance->bankname = $records["BankName"];
                $instance->bankbranchname = $records["BankBranchName"];
                $instance->bankbranchcode = $records["BankBranchCode"];
                $instance->bankaccno = $records["BankAccNo"];
                $instance->bankaccname = $records["BankAccName"];
                $instance->commsmthd = $records["CommsMthd"];
                $instance->bankcheqlimit = $records["BankCheqLimit"];
                $instance->inhouse = $records["Inhouse"];
                $instance->vip = $records["VIP"];
                $instance->termfromvalue = $records["TermFromValue"];
                $instance->termfromtype = $records["TermFromType"];
                $instance->termfrom = $records["TermFrom"];
                $instance->termdiscount = $records["TermDiscount"];
                $instance->monthend = $records["MonthEnd"];
                $instance->defbranch = $records["DefBranch"];
                $instance->pdcs = $records["PDCs"];
                $instance->rentalincl = $records["RentalIncl"];
                $instance->website = $records["Website"];
                $instance->destco = $records["DestCO"];
                $instance->destbranch = $records["DestBranch"];
                $instance->crdaccount = $records["CRDAccount"];
                $instance->intercomp = $records["InterComp"];
                $instance->version = $records["Version"];
                $instance->consolidate = $records["Consolidate"];
                $instance->itemprice = $records["ItemPrice"];
                $instance->crmcode = $records["CrmCode"];
                $instance->mailind = $records["MailInd"];
                $instance->vendorno = $records["VendorNo"];
                $instance->cgslimgranted = $records["CGSLimGranted"];
                $instance->coregno = $records["CORegNo"];
                $instance->debdeal = $records["DebDeal"];
                $instance->smsind = $records["SMSInd"];
                $instance->blockreturns = $records["BlockReturns"];
                $instance->ecommind = $records["ECommInd"];
                $instance->stokvelind = $records["StokvelInd"];
                $instance->stokvelpswd = $records["StokvelPswd"];
                $instance->distribution = $records["Distribution"];
                $instance->longitude = $records["Longitude"];
                $instance->latitude = $records["Latitude"];
                $instance->grading = $records["Grading"];
                $instance->tempcrlimit = $records["TempCRLimit"];
                $instance->tempcrlimitdate = $records["TempCRLimitDate"];
                $instance->crmaccno = $records["CRMAccNo"];
                $instance->licenseno = $records["LicenseNo"];
                $instance->licenseexpdate = $records["LicenseExpDate"];
                $instance->traveldistance = $records["TravelDistance"];
                $instance->ecommpswd = $records["ECommPswd"];
                $instance->stmtfreq = $records["StmtFreq"];
                $instance->stmtfreqdow = $records["StmtFreqDOW"];
                $instance->preauthind = $records["PreAuthInd"];
                $instance->licenseexpaction = $records["LicenseExpAction"];
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