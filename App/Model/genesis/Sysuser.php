<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	SYSUser

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar USERCODE" of type [nvarchar]
	"public nvarchar USERPSWD" of type [nvarchar]
	"public nvarchar USERNAME" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar DEFCO" of type [nvarchar]
	"public nvarchar PSWDDATE" of type [nvarchar]
	"public nvarchar DEFBRANCH" of type [nvarchar]
	"public nvarchar DEFSALESREP" of type [nvarchar]
	"public nvarchar DEFACCOUNT" of type [nvarchar]
	"public nvarchar DEFTILLNO" of type [nvarchar]
	"public nvarchar INUSE" of type [nvarchar]
	"public nvarchar USERGROUP" of type [nvarchar]
	"public nvarchar SUPERVISOR" of type [nvarchar]
	"public nvarchar SUPERCARDNO" of type [nvarchar]
	"public nvarchar ALLOWCASH" of type [nvarchar]
	"public nvarchar ALLOWCHEQUES" of type [nvarchar]
	"public nvarchar ALLOWCREDITCARDS" of type [nvarchar]
	"public nvarchar ALLOWVOUCHERS" of type [nvarchar]
	"public nvarchar ALLOWTRANSFERS" of type [nvarchar]
	"public nvarchar ALLOWTENDERTYPE1" of type [nvarchar]
	"public nvarchar ALLOWTENDERTYPE2" of type [nvarchar]
	"public nvarchar ALLOWTENDERTYPE3" of type [nvarchar]
	"public nvarchar ALLOWTENDERTYPE4" of type [nvarchar]
	"public nvarchar TENDERTYPE1" of type [nvarchar]
	"public nvarchar TENDERTYPE2" of type [nvarchar]
	"public nvarchar TENDERTYPE3" of type [nvarchar]
	"public nvarchar TENDERTYPE4" of type [nvarchar]
	"public float LIMITCASH" of type [float]
	"public float LIMITCHEQUES" of type [float]
	"public float LIMITCREDITCARDS" of type [float]
	"public float LIMITVOUCHERS" of type [float]
	"public float LIMITTRANSFERS" of type [float]
	"public float LIMITTENDERTYPE1" of type [float]
	"public float LIMITTENDERTYPE2" of type [float]
	"public float LIMITTENDERTYPE3" of type [float]
	"public float LIMITTENDERTYPE4" of type [float]
	"public nvarchar DEFWH" of type [nvarchar]
	"public nvarchar TENDERFORM1" of type [nvarchar]
	"public nvarchar TENDERFORM2" of type [nvarchar]
	"public nvarchar TENDERFORM3" of type [nvarchar]
	"public nvarchar TENDERFORM4" of type [nvarchar]
	"public nvarchar LICENSE" of type [nvarchar]
	"public nvarchar DefaultPrinter" of type [nvarchar]
	"public nvarchar AllowViewCost" of type [nvarchar]
	"public nvarchar AllowViewProfit" of type [nvarchar]
	"public nvarchar LastLogDate" of type [nvarchar]
	"public nvarchar LastLogTime" of type [nvarchar]
	"public nvarchar LastLogMacID" of type [nvarchar]
	"public nvarchar LastLogEXE" of type [nvarchar]
	"public nvarchar UseSession" of type [nvarchar]
	"public nvarchar EMail" of type [nvarchar]
	"public nvarchar CellNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysuser {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $usercode ;	
	public $userpswd ;	
	public $username ;	
	public $status ;	
	public $defco ;	
	public $pswddate ;	
	public $defbranch ;	
	public $defsalesrep ;	
	public $defaccount ;	
	public $deftillno ;	
	public $inuse ;	
	public $usergroup ;	
	public $supervisor ;	
	public $supercardno ;	
	public $allowcash ;	
	public $allowcheques ;	
	public $allowcreditcards ;	
	public $allowvouchers ;	
	public $allowtransfers ;	
	public $allowtendertype1 ;	
	public $allowtendertype2 ;	
	public $allowtendertype3 ;	
	public $allowtendertype4 ;	
	public $tendertype1 ;	
	public $tendertype2 ;	
	public $tendertype3 ;	
	public $tendertype4 ;	
	public $limitcash ;	
	public $limitcheques ;	
	public $limitcreditcards ;	
	public $limitvouchers ;	
	public $limittransfers ;	
	public $limittendertype1 ;	
	public $limittendertype2 ;	
	public $limittendertype3 ;	
	public $limittendertype4 ;	
	public $defwh ;	
	public $tenderform1 ;	
	public $tenderform2 ;	
	public $tenderform3 ;	
	public $tenderform4 ;	
	public $license ;	
	public $defaultprinter ;	
	public $allowviewcost ;	
	public $allowviewprofit ;	
	public $lastlogdate ;	
	public $lastlogtime ;	
	public $lastlogmacid ;	
	public $lastlogexe ;	
	public $usesession ;	
	public $email ;	
	public $cellno ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
			$query = " SELECT RECID, [USERCODE], [USERPSWD], [USERNAME], [STATUS], [DEFCO], [PSWDDATE], [DEFBRANCH], [DEFSALESREP], [DEFACCOUNT], [DEFTILLNO], [INUSE], [USERGROUP], [SUPERVISOR], [SUPERCARDNO], [ALLOWCASH], [ALLOWCHEQUES], [ALLOWCREDITCARDS], [ALLOWVOUCHERS], [ALLOWTRANSFERS], [ALLOWTENDERTYPE1], [ALLOWTENDERTYPE2], [ALLOWTENDERTYPE3], [ALLOWTENDERTYPE4], [TENDERTYPE1], [TENDERTYPE2], [TENDERTYPE3], [TENDERTYPE4], [LIMITCASH], [LIMITCHEQUES], [LIMITCREDITCARDS], [LIMITVOUCHERS], [LIMITTRANSFERS], [LIMITTENDERTYPE1], [LIMITTENDERTYPE2], [LIMITTENDERTYPE3], [LIMITTENDERTYPE4], [DEFWH], [TENDERFORM1], [TENDERFORM2], [TENDERFORM3], [TENDERFORM4], [LICENSE], [DefaultPrinter], [AllowViewCost], [AllowViewProfit], [LastLogDate], [LastLogTime], [LastLogMacID], [LastLogEXE], [UseSession], [EMail], [CellNo] FROM [SYSUser]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->usercode = $records["USERCODE"];
				$instance->userpswd = $records["USERPSWD"];
				$instance->username = $records["USERNAME"];
				$instance->status = $records["STATUS"];
				$instance->defco = $records["DEFCO"];
				$instance->pswddate = $records["PSWDDATE"];
				$instance->defbranch = $records["DEFBRANCH"];
				$instance->defsalesrep = $records["DEFSALESREP"];
				$instance->defaccount = $records["DEFACCOUNT"];
				$instance->deftillno = $records["DEFTILLNO"];
				$instance->inuse = $records["INUSE"];
				$instance->usergroup = $records["USERGROUP"];
				$instance->supervisor = $records["SUPERVISOR"];
				$instance->supercardno = $records["SUPERCARDNO"];
				$instance->allowcash = $records["ALLOWCASH"];
				$instance->allowcheques = $records["ALLOWCHEQUES"];
				$instance->allowcreditcards = $records["ALLOWCREDITCARDS"];
				$instance->allowvouchers = $records["ALLOWVOUCHERS"];
				$instance->allowtransfers = $records["ALLOWTRANSFERS"];
				$instance->allowtendertype1 = $records["ALLOWTENDERTYPE1"];
				$instance->allowtendertype2 = $records["ALLOWTENDERTYPE2"];
				$instance->allowtendertype3 = $records["ALLOWTENDERTYPE3"];
				$instance->allowtendertype4 = $records["ALLOWTENDERTYPE4"];
				$instance->tendertype1 = $records["TENDERTYPE1"];
				$instance->tendertype2 = $records["TENDERTYPE2"];
				$instance->tendertype3 = $records["TENDERTYPE3"];
				$instance->tendertype4 = $records["TENDERTYPE4"];
				$instance->limitcash = $records["LIMITCASH"];
				$instance->limitcheques = $records["LIMITCHEQUES"];
				$instance->limitcreditcards = $records["LIMITCREDITCARDS"];
				$instance->limitvouchers = $records["LIMITVOUCHERS"];
				$instance->limittransfers = $records["LIMITTRANSFERS"];
				$instance->limittendertype1 = $records["LIMITTENDERTYPE1"];
				$instance->limittendertype2 = $records["LIMITTENDERTYPE2"];
				$instance->limittendertype3 = $records["LIMITTENDERTYPE3"];
				$instance->limittendertype4 = $records["LIMITTENDERTYPE4"];
				$instance->defwh = $records["DEFWH"];
				$instance->tenderform1 = $records["TENDERFORM1"];
				$instance->tenderform2 = $records["TENDERFORM2"];
				$instance->tenderform3 = $records["TENDERFORM3"];
				$instance->tenderform4 = $records["TENDERFORM4"];
				$instance->license = $records["LICENSE"];
				$instance->defaultprinter = $records["DefaultPrinter"];
				$instance->allowviewcost = $records["AllowViewCost"];
				$instance->allowviewprofit = $records["AllowViewProfit"];
				$instance->lastlogdate = $records["LastLogDate"];
				$instance->lastlogtime = $records["LastLogTime"];
				$instance->lastlogmacid = $records["LastLogMacID"];
				$instance->lastlogexe = $records["LastLogEXE"];
				$instance->usesession = $records["UseSession"];
				$instance->email = $records["EMail"];
				$instance->cellno = $records["CellNo"];
			}
            $conn->Close();
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using USERCODE
	*/
	public static function ini_code($usercode) {
		$instance = new self();
		try {
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
			$query = " SELECT RECID, [USERCODE], [USERPSWD], [USERNAME], [STATUS], [DEFCO], [PSWDDATE], [DEFBRANCH], [DEFSALESREP], [DEFACCOUNT], [DEFTILLNO], [INUSE], [USERGROUP], [SUPERVISOR], [SUPERCARDNO], [ALLOWCASH], [ALLOWCHEQUES], [ALLOWCREDITCARDS], [ALLOWVOUCHERS], [ALLOWTRANSFERS], [ALLOWTENDERTYPE1], [ALLOWTENDERTYPE2], [ALLOWTENDERTYPE3], [ALLOWTENDERTYPE4], [TENDERTYPE1], [TENDERTYPE2], [TENDERTYPE3], [TENDERTYPE4], [LIMITCASH], [LIMITCHEQUES], [LIMITCREDITCARDS], [LIMITVOUCHERS], [LIMITTRANSFERS], [LIMITTENDERTYPE1], [LIMITTENDERTYPE2], [LIMITTENDERTYPE3], [LIMITTENDERTYPE4], [DEFWH], [TENDERFORM1], [TENDERFORM2], [TENDERFORM3], [TENDERFORM4], [LICENSE], [DefaultPrinter], [AllowViewCost], [AllowViewProfit], [LastLogDate], [LastLogTime], [LastLogMacID], [LastLogEXE], [UseSession], [EMail], [CellNo] FROM [SYSUser]  WHERE [USERCODE]=:usercode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":usercode", $usercode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->usercode = $records["USERCODE"];
				$instance->userpswd = $records["USERPSWD"];
				$instance->username = $records["USERNAME"];
				$instance->status = $records["STATUS"];
				$instance->defco = $records["DEFCO"];
				$instance->pswddate = $records["PSWDDATE"];
				$instance->defbranch = $records["DEFBRANCH"];
				$instance->defsalesrep = $records["DEFSALESREP"];
				$instance->defaccount = $records["DEFACCOUNT"];
				$instance->deftillno = $records["DEFTILLNO"];
				$instance->inuse = $records["INUSE"];
				$instance->usergroup = $records["USERGROUP"];
				$instance->supervisor = $records["SUPERVISOR"];
				$instance->supercardno = $records["SUPERCARDNO"];
				$instance->allowcash = $records["ALLOWCASH"];
				$instance->allowcheques = $records["ALLOWCHEQUES"];
				$instance->allowcreditcards = $records["ALLOWCREDITCARDS"];
				$instance->allowvouchers = $records["ALLOWVOUCHERS"];
				$instance->allowtransfers = $records["ALLOWTRANSFERS"];
				$instance->allowtendertype1 = $records["ALLOWTENDERTYPE1"];
				$instance->allowtendertype2 = $records["ALLOWTENDERTYPE2"];
				$instance->allowtendertype3 = $records["ALLOWTENDERTYPE3"];
				$instance->allowtendertype4 = $records["ALLOWTENDERTYPE4"];
				$instance->tendertype1 = $records["TENDERTYPE1"];
				$instance->tendertype2 = $records["TENDERTYPE2"];
				$instance->tendertype3 = $records["TENDERTYPE3"];
				$instance->tendertype4 = $records["TENDERTYPE4"];
				$instance->limitcash = $records["LIMITCASH"];
				$instance->limitcheques = $records["LIMITCHEQUES"];
				$instance->limitcreditcards = $records["LIMITCREDITCARDS"];
				$instance->limitvouchers = $records["LIMITVOUCHERS"];
				$instance->limittransfers = $records["LIMITTRANSFERS"];
				$instance->limittendertype1 = $records["LIMITTENDERTYPE1"];
				$instance->limittendertype2 = $records["LIMITTENDERTYPE2"];
				$instance->limittendertype3 = $records["LIMITTENDERTYPE3"];
				$instance->limittendertype4 = $records["LIMITTENDERTYPE4"];
				$instance->defwh = $records["DEFWH"];
				$instance->tenderform1 = $records["TENDERFORM1"];
				$instance->tenderform2 = $records["TENDERFORM2"];
				$instance->tenderform3 = $records["TENDERFORM3"];
				$instance->tenderform4 = $records["TENDERFORM4"];
				$instance->license = $records["LICENSE"];
				$instance->defaultprinter = $records["DefaultPrinter"];
				$instance->allowviewcost = $records["AllowViewCost"];
				$instance->allowviewprofit = $records["AllowViewProfit"];
				$instance->lastlogdate = $records["LastLogDate"];
				$instance->lastlogtime = $records["LastLogTime"];
				$instance->lastlogmacid = $records["LastLogMacID"];
				$instance->lastlogexe = $records["LastLogEXE"];
				$instance->usesession = $records["UseSession"];
				$instance->email = $records["EMail"];
				$instance->cellno = $records["CellNo"];
			}
            $conn->Close();
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
			$res = $this->username;
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