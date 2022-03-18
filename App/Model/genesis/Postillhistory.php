<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	POSTillHistory

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TILLNO" of type [nvarchar]
	"public nvarchar CASHUPDATE" of type [nvarchar]
	"public int CASHUPNO" of type [int]
	"public nvarchar NAME" of type [nvarchar]
	"public float OPENFLOAT" of type [float]
	"public float CLOSEFLOAT" of type [float]
	"public float CASH" of type [float]
	"public float CHEQUES" of type [float]
	"public float CREDITCARDS" of type [float]
	"public float VOUCHERS" of type [float]
	"public float TRANSFERS" of type [float]
	"public float TENDERAMOUNT1" of type [float]
	"public float TENDERAMOUNT2" of type [float]
	"public float TENDERAMOUNT3" of type [float]
	"public float TENDERAMOUNT4" of type [float]
	"public float CASHCOUNT" of type [float]
	"public float CHEQUESCOUNT" of type [float]
	"public float CREDITCARDSCOUNT" of type [float]
	"public float VOUCHERSCOUNT" of type [float]
	"public float TRANSFERSCOUNT" of type [float]
	"public float TENDER1COUNT" of type [float]
	"public float TENDER2COUNT" of type [float]
	"public float TENDER3COUNT" of type [float]
	"public float TENDER4COUNT" of type [float]
	"public nvarchar TENDERCODE1" of type [nvarchar]
	"public nvarchar TENDERCODE2" of type [nvarchar]
	"public nvarchar TENDERCODE3" of type [nvarchar]
	"public nvarchar TENDERCODE4" of type [nvarchar]
	"public float PICKUPS" of type [float]
	"public float PAYOUTS" of type [float]
	"public float OVERUNDER" of type [float]
	"public nvarchar LASTCASHUPDATE" of type [nvarchar]
	"public nvarchar LASTCASHUPTIME" of type [nvarchar]
	"public nvarchar LASTTXTP" of type [nvarchar]
	"public nvarchar LASTDOCNO" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar TILLMESSAGE" of type [nvarchar]
	"public nvarchar SEALNO" of type [nvarchar]
	"public nvarchar SEALSECURITY" of type [nvarchar]
	"public float DEFAULTFLOAT" of type [float]
	"public int VOIDCOUNT" of type [int]
	"public float ROUNDINGUP" of type [float]
	"public float ROUNDINGDOWN" of type [float]
	"public float CASHCOUNTGROSS" of type [float]
	"public nvarchar TENDERFORM1" of type [nvarchar]
	"public nvarchar TENDERFORM2" of type [nvarchar]
	"public nvarchar TENDERFORM3" of type [nvarchar]
	"public nvarchar TENDERFORM4" of type [nvarchar]
	"public float MANDISCOUNT" of type [float]
	"public float MANTOTAL" of type [float]
	"public nvarchar RETURNTILL" of type [nvarchar]
	"public nvarchar RETURNVOUCHERS" of type [nvarchar]
	"public nvarchar DEPOSITSLIPNO" of type [nvarchar]
	"public nvarchar DEPOSITDATE" of type [nvarchar]
	"public nvarchar DEPOSITTIME" of type [nvarchar]
	"public nvarchar ReliefTill" of type [nvarchar]
	"public nvarchar AdminTill" of type [nvarchar]
	"public nvarchar SysLock" of type [nvarchar]
	"public nvarchar DefaultName" of type [nvarchar]
	"public nvarchar ExpressTill" of type [nvarchar]
	"public nvarchar ExpressStatus" of type [nvarchar]
	"public int ExpressCallTime" of type [int]
	"public nvarchar ExpressCallTill" of type [nvarchar]
	"public nvarchar TellerTill" of type [nvarchar]
	"public float Wallets" of type [float]
	"public float WalletsCount" of type [float]
	"public nvarchar COFTillNo" of type [nvarchar]
	"public nvarchar OffLineTill" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Postillhistory {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $tillno ;	
	public $cashupdate ;	
	public $cashupno ;	
	public $name ;	
	public $openfloat ;	
	public $closefloat ;	
	public $cash ;	
	public $cheques ;	
	public $creditcards ;	
	public $vouchers ;	
	public $transfers ;	
	public $tenderamount1 ;	
	public $tenderamount2 ;	
	public $tenderamount3 ;	
	public $tenderamount4 ;	
	public $cashcount ;	
	public $chequescount ;	
	public $creditcardscount ;	
	public $voucherscount ;	
	public $transferscount ;	
	public $tender1count ;	
	public $tender2count ;	
	public $tender3count ;	
	public $tender4count ;	
	public $tendercode1 ;	
	public $tendercode2 ;	
	public $tendercode3 ;	
	public $tendercode4 ;	
	public $pickups ;	
	public $payouts ;	
	public $overunder ;	
	public $lastcashupdate ;	
	public $lastcashuptime ;	
	public $lasttxtp ;	
	public $lastdocno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $tillmessage ;	
	public $sealno ;	
	public $sealsecurity ;	
	public $defaultfloat ;	
	public $voidcount ;	
	public $roundingup ;	
	public $roundingdown ;	
	public $cashcountgross ;	
	public $tenderform1 ;	
	public $tenderform2 ;	
	public $tenderform3 ;	
	public $tenderform4 ;	
	public $mandiscount ;	
	public $mantotal ;	
	public $returntill ;	
	public $returnvouchers ;	
	public $depositslipno ;	
	public $depositdate ;	
	public $deposittime ;	
	public $relieftill ;	
	public $admintill ;	
	public $syslock ;	
	public $defaultname ;	
	public $expresstill ;	
	public $expressstatus ;	
	public $expresscalltime ;	
	public $expresscalltill ;	
	public $tellertill ;	
	public $wallets ;	
	public $walletscount ;	
	public $coftillno ;	
	public $offlinetill ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [CASHUPDATE], [CASHUPNO], [NAME], [OPENFLOAT], [CLOSEFLOAT], [CASH], [CHEQUES], [CREDITCARDS], [VOUCHERS], [TRANSFERS], [TENDERAMOUNT1], [TENDERAMOUNT2], [TENDERAMOUNT3], [TENDERAMOUNT4], [CASHCOUNT], [CHEQUESCOUNT], [CREDITCARDSCOUNT], [VOUCHERSCOUNT], [TRANSFERSCOUNT], [TENDER1COUNT], [TENDER2COUNT], [TENDER3COUNT], [TENDER4COUNT], [TENDERCODE1], [TENDERCODE2], [TENDERCODE3], [TENDERCODE4], [PICKUPS], [PAYOUTS], [OVERUNDER], [LASTCASHUPDATE], [LASTCASHUPTIME], [LASTTXTP], [LASTDOCNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [TILLMESSAGE], [SEALNO], [SEALSECURITY], [DEFAULTFLOAT], [VOIDCOUNT], [ROUNDINGUP], [ROUNDINGDOWN], [CASHCOUNTGROSS], [TENDERFORM1], [TENDERFORM2], [TENDERFORM3], [TENDERFORM4], [MANDISCOUNT], [MANTOTAL], [RETURNTILL], [RETURNVOUCHERS], [DEPOSITSLIPNO], [DEPOSITDATE], [DEPOSITTIME], [ReliefTill], [AdminTill], [SysLock], [DefaultName], [ExpressTill], [ExpressStatus], [ExpressCallTime], [ExpressCallTill], [TellerTill], [Wallets], [WalletsCount], [COFTillNo], [OffLineTill] FROM [POSTillHistory]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->tillno = $records["TILLNO"];
				$instance->cashupdate = $records["CASHUPDATE"];
				$instance->cashupno = $records["CASHUPNO"];
				$instance->name = $records["NAME"];
				$instance->openfloat = $records["OPENFLOAT"];
				$instance->closefloat = $records["CLOSEFLOAT"];
				$instance->cash = $records["CASH"];
				$instance->cheques = $records["CHEQUES"];
				$instance->creditcards = $records["CREDITCARDS"];
				$instance->vouchers = $records["VOUCHERS"];
				$instance->transfers = $records["TRANSFERS"];
				$instance->tenderamount1 = $records["TENDERAMOUNT1"];
				$instance->tenderamount2 = $records["TENDERAMOUNT2"];
				$instance->tenderamount3 = $records["TENDERAMOUNT3"];
				$instance->tenderamount4 = $records["TENDERAMOUNT4"];
				$instance->cashcount = $records["CASHCOUNT"];
				$instance->chequescount = $records["CHEQUESCOUNT"];
				$instance->creditcardscount = $records["CREDITCARDSCOUNT"];
				$instance->voucherscount = $records["VOUCHERSCOUNT"];
				$instance->transferscount = $records["TRANSFERSCOUNT"];
				$instance->tender1count = $records["TENDER1COUNT"];
				$instance->tender2count = $records["TENDER2COUNT"];
				$instance->tender3count = $records["TENDER3COUNT"];
				$instance->tender4count = $records["TENDER4COUNT"];
				$instance->tendercode1 = $records["TENDERCODE1"];
				$instance->tendercode2 = $records["TENDERCODE2"];
				$instance->tendercode3 = $records["TENDERCODE3"];
				$instance->tendercode4 = $records["TENDERCODE4"];
				$instance->pickups = $records["PICKUPS"];
				$instance->payouts = $records["PAYOUTS"];
				$instance->overunder = $records["OVERUNDER"];
				$instance->lastcashupdate = $records["LASTCASHUPDATE"];
				$instance->lastcashuptime = $records["LASTCASHUPTIME"];
				$instance->lasttxtp = $records["LASTTXTP"];
				$instance->lastdocno = $records["LASTDOCNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->tillmessage = $records["TILLMESSAGE"];
				$instance->sealno = $records["SEALNO"];
				$instance->sealsecurity = $records["SEALSECURITY"];
				$instance->defaultfloat = $records["DEFAULTFLOAT"];
				$instance->voidcount = $records["VOIDCOUNT"];
				$instance->roundingup = $records["ROUNDINGUP"];
				$instance->roundingdown = $records["ROUNDINGDOWN"];
				$instance->cashcountgross = $records["CASHCOUNTGROSS"];
				$instance->tenderform1 = $records["TENDERFORM1"];
				$instance->tenderform2 = $records["TENDERFORM2"];
				$instance->tenderform3 = $records["TENDERFORM3"];
				$instance->tenderform4 = $records["TENDERFORM4"];
				$instance->mandiscount = $records["MANDISCOUNT"];
				$instance->mantotal = $records["MANTOTAL"];
				$instance->returntill = $records["RETURNTILL"];
				$instance->returnvouchers = $records["RETURNVOUCHERS"];
				$instance->depositslipno = $records["DEPOSITSLIPNO"];
				$instance->depositdate = $records["DEPOSITDATE"];
				$instance->deposittime = $records["DEPOSITTIME"];
				$instance->relieftill = $records["ReliefTill"];
				$instance->admintill = $records["AdminTill"];
				$instance->syslock = $records["SysLock"];
				$instance->defaultname = $records["DefaultName"];
				$instance->expresstill = $records["ExpressTill"];
				$instance->expressstatus = $records["ExpressStatus"];
				$instance->expresscalltime = $records["ExpressCallTime"];
				$instance->expresscalltill = $records["ExpressCallTill"];
				$instance->tellertill = $records["TellerTill"];
				$instance->wallets = $records["Wallets"];
				$instance->walletscount = $records["WalletsCount"];
				$instance->coftillno = $records["COFTillNo"];
				$instance->offlinetill = $records["OffLineTill"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using TENDERCODE1
	*/
	public static function ini_TENDERCODE1($tendercode1) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [CASHUPDATE], [CASHUPNO], [NAME], [OPENFLOAT], [CLOSEFLOAT], [CASH], [CHEQUES], [CREDITCARDS], [VOUCHERS], [TRANSFERS], [TENDERAMOUNT1], [TENDERAMOUNT2], [TENDERAMOUNT3], [TENDERAMOUNT4], [CASHCOUNT], [CHEQUESCOUNT], [CREDITCARDSCOUNT], [VOUCHERSCOUNT], [TRANSFERSCOUNT], [TENDER1COUNT], [TENDER2COUNT], [TENDER3COUNT], [TENDER4COUNT], [TENDERCODE1], [TENDERCODE2], [TENDERCODE3], [TENDERCODE4], [PICKUPS], [PAYOUTS], [OVERUNDER], [LASTCASHUPDATE], [LASTCASHUPTIME], [LASTTXTP], [LASTDOCNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [TILLMESSAGE], [SEALNO], [SEALSECURITY], [DEFAULTFLOAT], [VOIDCOUNT], [ROUNDINGUP], [ROUNDINGDOWN], [CASHCOUNTGROSS], [TENDERFORM1], [TENDERFORM2], [TENDERFORM3], [TENDERFORM4], [MANDISCOUNT], [MANTOTAL], [RETURNTILL], [RETURNVOUCHERS], [DEPOSITSLIPNO], [DEPOSITDATE], [DEPOSITTIME], [ReliefTill], [AdminTill], [SysLock], [DefaultName], [ExpressTill], [ExpressStatus], [ExpressCallTime], [ExpressCallTill], [TellerTill], [Wallets], [WalletsCount], [COFTillNo], [OffLineTill] FROM [POSTillHistory]  WHERE [TENDERCODE1]=:tendercode1  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":tendercode1", $tendercode1);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->tillno = $records["TILLNO"];
				$instance->cashupdate = $records["CASHUPDATE"];
				$instance->cashupno = $records["CASHUPNO"];
				$instance->name = $records["NAME"];
				$instance->openfloat = $records["OPENFLOAT"];
				$instance->closefloat = $records["CLOSEFLOAT"];
				$instance->cash = $records["CASH"];
				$instance->cheques = $records["CHEQUES"];
				$instance->creditcards = $records["CREDITCARDS"];
				$instance->vouchers = $records["VOUCHERS"];
				$instance->transfers = $records["TRANSFERS"];
				$instance->tenderamount1 = $records["TENDERAMOUNT1"];
				$instance->tenderamount2 = $records["TENDERAMOUNT2"];
				$instance->tenderamount3 = $records["TENDERAMOUNT3"];
				$instance->tenderamount4 = $records["TENDERAMOUNT4"];
				$instance->cashcount = $records["CASHCOUNT"];
				$instance->chequescount = $records["CHEQUESCOUNT"];
				$instance->creditcardscount = $records["CREDITCARDSCOUNT"];
				$instance->voucherscount = $records["VOUCHERSCOUNT"];
				$instance->transferscount = $records["TRANSFERSCOUNT"];
				$instance->tender1count = $records["TENDER1COUNT"];
				$instance->tender2count = $records["TENDER2COUNT"];
				$instance->tender3count = $records["TENDER3COUNT"];
				$instance->tender4count = $records["TENDER4COUNT"];
				$instance->tendercode1 = $records["TENDERCODE1"];
				$instance->tendercode2 = $records["TENDERCODE2"];
				$instance->tendercode3 = $records["TENDERCODE3"];
				$instance->tendercode4 = $records["TENDERCODE4"];
				$instance->pickups = $records["PICKUPS"];
				$instance->payouts = $records["PAYOUTS"];
				$instance->overunder = $records["OVERUNDER"];
				$instance->lastcashupdate = $records["LASTCASHUPDATE"];
				$instance->lastcashuptime = $records["LASTCASHUPTIME"];
				$instance->lasttxtp = $records["LASTTXTP"];
				$instance->lastdocno = $records["LASTDOCNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->tillmessage = $records["TILLMESSAGE"];
				$instance->sealno = $records["SEALNO"];
				$instance->sealsecurity = $records["SEALSECURITY"];
				$instance->defaultfloat = $records["DEFAULTFLOAT"];
				$instance->voidcount = $records["VOIDCOUNT"];
				$instance->roundingup = $records["ROUNDINGUP"];
				$instance->roundingdown = $records["ROUNDINGDOWN"];
				$instance->cashcountgross = $records["CASHCOUNTGROSS"];
				$instance->tenderform1 = $records["TENDERFORM1"];
				$instance->tenderform2 = $records["TENDERFORM2"];
				$instance->tenderform3 = $records["TENDERFORM3"];
				$instance->tenderform4 = $records["TENDERFORM4"];
				$instance->mandiscount = $records["MANDISCOUNT"];
				$instance->mantotal = $records["MANTOTAL"];
				$instance->returntill = $records["RETURNTILL"];
				$instance->returnvouchers = $records["RETURNVOUCHERS"];
				$instance->depositslipno = $records["DEPOSITSLIPNO"];
				$instance->depositdate = $records["DEPOSITDATE"];
				$instance->deposittime = $records["DEPOSITTIME"];
				$instance->relieftill = $records["ReliefTill"];
				$instance->admintill = $records["AdminTill"];
				$instance->syslock = $records["SysLock"];
				$instance->defaultname = $records["DefaultName"];
				$instance->expresstill = $records["ExpressTill"];
				$instance->expressstatus = $records["ExpressStatus"];
				$instance->expresscalltime = $records["ExpressCallTime"];
				$instance->expresscalltill = $records["ExpressCallTill"];
				$instance->tellertill = $records["TellerTill"];
				$instance->wallets = $records["Wallets"];
				$instance->walletscount = $records["WalletsCount"];
				$instance->coftillno = $records["COFTillNo"];
				$instance->offlinetill = $records["OffLineTill"];
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