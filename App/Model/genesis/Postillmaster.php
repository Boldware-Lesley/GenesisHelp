<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	POSTillMaster

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TILLNO" of type [nvarchar]
	"public int CASHUPNO" of type [int]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar DOCPREFIX" of type [nvarchar]
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
	"public nvarchar UNLOCKKEY" of type [nvarchar]
	"public nvarchar RELIEFTILL" of type [nvarchar]
	"public nvarchar TENDERFORM1" of type [nvarchar]
	"public nvarchar TENDERFORM2" of type [nvarchar]
	"public nvarchar TENDERFORM3" of type [nvarchar]
	"public nvarchar TENDERFORM4" of type [nvarchar]
	"public float MANDISCOUNT" of type [float]
	"public float MANTOTAL" of type [float]
	"public nvarchar RETURNTILL" of type [nvarchar]
	"public nvarchar RETURNVOUCHERS" of type [nvarchar]
	"public nvarchar AdminTill" of type [nvarchar]
	"public float UnderOver" of type [float]
	"public nvarchar DefaultName" of type [nvarchar]
	"public nvarchar SysLock" of type [nvarchar]
	"public nvarchar ParkSalesOnly" of type [nvarchar]
	"public nvarchar ExpressTill" of type [nvarchar]
	"public nvarchar ExpressStatus" of type [nvarchar]
	"public nvarchar TellerTill" of type [nvarchar]
	"public int ExpressCallTime" of type [int]
	"public nvarchar ExpressCallTill" of type [nvarchar]
	"public float Wallets" of type [float]
	"public float WalletsCount" of type [float]
	"public nvarchar WalletKey" of type [nvarchar]
	"public nvarchar WalletPin" of type [nvarchar]
	"public nvarchar COFTillNo" of type [nvarchar]
	"public nvarchar OffLineTill" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Postillmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ="";
	public $branch ="";
	public $tillno ="";
	public $cashupno ="";
	public $name ="";
	public $status ="";
	public $docprefix ="";
	public $openfloat =0;
	public $closefloat =0;
	public $cash =0;
	public $cheques =0;
	public $creditcards =0;
	public $vouchers =0;
	public $transfers =0;
	public $tenderamount1 =0;
	public $tenderamount2 =0;
	public $tenderamount3 =0;
	public $tenderamount4 =0;
	public $cashcount =0;
	public $chequescount =0;
	public $creditcardscount =0;
	public $voucherscount =0;
	public $transferscount =0;
	public $tender1count =0;
	public $tender2count =0;
	public $tender3count =0;
	public $tender4count =0;
	public $tendercode1 =0;
	public $tendercode2 =0;
	public $tendercode3 =0;
	public $tendercode4 =0;
	public $pickups =0;
	public $payouts =0;
	public $lastcashupdate ="";
	public $lastcashuptime ="";
	public $lasttxtp ="";
	public $lastdocno ="";
	public $dtodate ="";
	public $dtotime ="";
	public $dtouser ="";
	public $dtomacid ="";
	public $tillmessage ="";
	public $sealno ="";
	public $sealsecurity ="";
	public $defaultfloat =0;
	public $voidcount =0;
	public $roundingup =0;
	public $roundingdown =0;
	public $cashcountgross =0;
	public $unlockkey ="";
	public $relieftill ="";
	public $tenderform1 ="";
	public $tenderform2 ="";
	public $tenderform3 ="";
	public $tenderform4 ="";
	public $mandiscount =0;
	public $mantotal =0;
	public $returntill ="";
	public $returnvouchers ="";
	public $admintill="";
	public $underover ="";
	public $defaultname ="";
	public $syslock ="";
	public $parksalesonly =0;
	public $expresstill =0;
	public $expressstatus =0;
	public $tellertill =0;
	public $expresscalltime =0;
	public $expresscalltill =0;
	public $wallets =0;
	public $walletscount =0;
	public $walletkey =0;
	public $walletpin =0;
	public $coftillno=0;
	public $offlinetill =0;
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($conn,$recid) {
		$instance = new self();
		try {
            if (isset($conn)) {
                $query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [CASHUPNO], [NAME], [STATUS], [DOCPREFIX], [OPENFLOAT], [CLOSEFLOAT], [CASH], [CHEQUES], [CREDITCARDS], [VOUCHERS], [TRANSFERS], [TENDERAMOUNT1], [TENDERAMOUNT2], [TENDERAMOUNT3], [TENDERAMOUNT4], [CASHCOUNT], [CHEQUESCOUNT], [CREDITCARDSCOUNT], [VOUCHERSCOUNT], [TRANSFERSCOUNT], [TENDER1COUNT], [TENDER2COUNT], [TENDER3COUNT], [TENDER4COUNT], [TENDERCODE1], [TENDERCODE2], [TENDERCODE3], [TENDERCODE4], [PICKUPS], [PAYOUTS], [LASTCASHUPDATE], [LASTCASHUPTIME], [LASTTXTP], [LASTDOCNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [TILLMESSAGE], [SEALNO], [SEALSECURITY], [DEFAULTFLOAT], [VOIDCOUNT], [ROUNDINGUP], [ROUNDINGDOWN], [CASHCOUNTGROSS], [UNLOCKKEY], [RELIEFTILL], [TENDERFORM1], [TENDERFORM2], [TENDERFORM3], [TENDERFORM4], [MANDISCOUNT], [MANTOTAL], [RETURNTILL], [RETURNVOUCHERS], [AdminTill], [UnderOver], [DefaultName], [SysLock], [ParkSalesOnly], [ExpressTill], [ExpressStatus], [TellerTill], [ExpressCallTime], [ExpressCallTill], [Wallets], [WalletsCount], [WalletKey], [WalletPin], [COFTillNo], [OffLineTill] FROM [POSTillMaster]  WHERE [RECID]=:recid  ";
                $stmt = $conn->getStatement($query);
                $stmt->bindParam(":recid", $recid);
                $stmt->execute();
                while ($records = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $instance->recid = $records["RECID"];
                    $instance->co = $records["CO"];
                    $instance->branch = $records["BRANCH"];
                    $instance->tillno = $records["TILLNO"];
                    $instance->cashupno = $records["CASHUPNO"];
                    $instance->name = $records["NAME"];
                    $instance->status = $records["STATUS"];
                    $instance->docprefix = $records["DOCPREFIX"];
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
                    $instance->unlockkey = $records["UNLOCKKEY"];
                    $instance->relieftill = $records["RELIEFTILL"];
                    $instance->tenderform1 = $records["TENDERFORM1"];
                    $instance->tenderform2 = $records["TENDERFORM2"];
                    $instance->tenderform3 = $records["TENDERFORM3"];
                    $instance->tenderform4 = $records["TENDERFORM4"];
                    $instance->mandiscount = $records["MANDISCOUNT"];
                    $instance->mantotal = $records["MANTOTAL"];
                    $instance->returntill = $records["RETURNTILL"];
                    $instance->returnvouchers = $records["RETURNVOUCHERS"];
                    $instance->admintill = $records["AdminTill"];
                    $instance->underover = $records["UnderOver"];
                    $instance->defaultname = $records["DefaultName"];
                    $instance->syslock = $records["SysLock"];
                    $instance->parksalesonly = $records["ParkSalesOnly"];
                    $instance->expresstill = $records["ExpressTill"];
                    $instance->expressstatus = $records["ExpressStatus"];
                    $instance->tellertill = $records["TellerTill"];
                    $instance->expresscalltime = $records["ExpressCallTime"];
                    $instance->expresscalltill = $records["ExpressCallTill"];
                    $instance->wallets = $records["Wallets"];
                    $instance->walletscount = $records["WalletsCount"];
                    $instance->walletkey = $records["WalletKey"];
                    $instance->walletpin = $records["WalletPin"];
                    $instance->coftillno = $records["COFTillNo"];
                    $instance->offlinetill = $records["OffLineTill"];
                }
            }
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using TENDERCODE1
	*/
	public static function ini_code($conn_client,$code,$co,$branch)
    {
        $instance = new self();
        try {

            if (isset($conn_client)) {
                $query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [CASHUPNO], [NAME], [STATUS], [DOCPREFIX], [OPENFLOAT], [CLOSEFLOAT], [CASH], [CHEQUES], [CREDITCARDS], [VOUCHERS], [TRANSFERS], [TENDERAMOUNT1], [TENDERAMOUNT2], [TENDERAMOUNT3], [TENDERAMOUNT4], [CASHCOUNT], [CHEQUESCOUNT], [CREDITCARDSCOUNT], [VOUCHERSCOUNT], [TRANSFERSCOUNT], [TENDER1COUNT], [TENDER2COUNT], [TENDER3COUNT], [TENDER4COUNT], [TENDERCODE1], [TENDERCODE2], [TENDERCODE3], [TENDERCODE4], [PICKUPS], [PAYOUTS], [LASTCASHUPDATE], [LASTCASHUPTIME], [LASTTXTP], [LASTDOCNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [TILLMESSAGE], [SEALNO], [SEALSECURITY], [DEFAULTFLOAT], [VOIDCOUNT], [ROUNDINGUP], [ROUNDINGDOWN], [CASHCOUNTGROSS], [UNLOCKKEY], [RELIEFTILL], [TENDERFORM1], [TENDERFORM2], [TENDERFORM3], [TENDERFORM4], [MANDISCOUNT], [MANTOTAL], [RETURNTILL], [RETURNVOUCHERS], [AdminTill], [UnderOver], [DefaultName], [SysLock], [ParkSalesOnly], [ExpressTill], [ExpressStatus], [TellerTill], [ExpressCallTime], [ExpressCallTill], [Wallets], [WalletsCount], [WalletKey], [WalletPin], [COFTillNo], [OffLineTill] FROM [POSTillMaster] " .
                    " WHERE [CO]=:CO AND [BRANCH]=:BRANCH AND [TILLNO]=:TILLNO  ";
                $stmt = $conn_client->getStatement($query);
                $stmt->bindParam(":TILLNO", $code);
                $stmt->bindParam(":CO", $co);
                $stmt->bindParam(":BRANCH", $branch);
                $stmt->execute();
                while ($records = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $instance->recid = $records["RECID"];
                    $instance->co = $records["CO"];
                    $instance->branch = $records["BRANCH"];
                    $instance->tillno = $records["TILLNO"];
                    $instance->cashupno = $records["CASHUPNO"];
                    $instance->name = $records["NAME"];
                    $instance->status = $records["STATUS"];
                    $instance->docprefix = $records["DOCPREFIX"];
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
                    $instance->unlockkey = $records["UNLOCKKEY"];
                    $instance->relieftill = $records["RELIEFTILL"];
                    $instance->tenderform1 = $records["TENDERFORM1"];
                    $instance->tenderform2 = $records["TENDERFORM2"];
                    $instance->tenderform3 = $records["TENDERFORM3"];
                    $instance->tenderform4 = $records["TENDERFORM4"];
                    $instance->mandiscount = $records["MANDISCOUNT"];
                    $instance->mantotal = $records["MANTOTAL"];
                    $instance->returntill = $records["RETURNTILL"];
                    $instance->returnvouchers = $records["RETURNVOUCHERS"];
                    $instance->admintill = $records["AdminTill"];
                    $instance->underover = $records["UnderOver"];
                    $instance->defaultname = $records["DefaultName"];
                    $instance->syslock = $records["SysLock"];
                    $instance->parksalesonly = $records["ParkSalesOnly"];
                    $instance->expresstill = $records["ExpressTill"];
                    $instance->expressstatus = $records["ExpressStatus"];
                    $instance->tellertill = $records["TellerTill"];
                    $instance->expresscalltime = $records["ExpressCallTime"];
                    $instance->expresscalltill = $records["ExpressCallTill"];
                    $instance->wallets = $records["Wallets"];
                    $instance->walletscount = $records["WalletsCount"];
                    $instance->walletkey = $records["WalletKey"];
                    $instance->walletpin = $records["WalletPin"];
                    $instance->coftillno = $records["COFTillNo"];
                    $instance->offlinetill = $records["OffLineTill"];
                }
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
