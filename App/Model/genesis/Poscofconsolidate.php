<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	POSCOFConsolidate

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TRANDATE" of type [nvarchar]
	"public float OPENFLOAT" of type [float]
	"public float CASH" of type [float]
	"public float CHEQUES" of type [float]
	"public float CREDITCARDS" of type [float]
	"public float VOUCHERS" of type [float]
	"public float TRANSFERS" of type [float]
	"public float TENDER1AMOUNT" of type [float]
	"public float TENDER2AMOUNT" of type [float]
	"public float TENDER3AMOUNT" of type [float]
	"public float TENDER4AMOUNT" of type [float]
	"public float PAYOUTS" of type [float]
	"public float DEPOSITS" of type [float]
	"public float PDCHEQUES" of type [float]
	"public float VOUCHERSPAID" of type [float]
	"public float CLOSEFLOAT" of type [float]
	"public float OFFICIALVALUE" of type [float]
	"public float CASHSALEEXCL" of type [float]
	"public float CASHSALEINCL" of type [float]
	"public float CASHSALEVAT" of type [float]
	"public float CASHSALECOSTEX" of type [float]
	"public float CASHSALEPRFT" of type [float]
	"public float CASHSALEGP" of type [float]
	"public float ACCSALEEXCL" of type [float]
	"public float ACCSALEINCL" of type [float]
	"public float ACCSALEVAT" of type [float]
	"public float ACCSALECOSTEX" of type [float]
	"public float ACCSALEPRFT" of type [float]
	"public float ACCSALEGP" of type [float]
	"public float CASHRETNEXCL" of type [float]
	"public float CASHRETNINCL" of type [float]
	"public float CASHRETNVAT" of type [float]
	"public float CASHRETNCOSTEX" of type [float]
	"public float CASHRETNPRFT" of type [float]
	"public float CASHRETNGP" of type [float]
	"public float ACCRETNEXCL" of type [float]
	"public float ACCRETNINCL" of type [float]
	"public float ACCRETNVAT" of type [float]
	"public float ACCRETNCOSTEX" of type [float]
	"public float ACCRETNPRFT" of type [float]
	"public float ACCRETNGP" of type [float]
	"public float EXEMPTSALES" of type [float]
	"public float PAYMENTS" of type [float]
	"public float LBPAYMENTS" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public float CREDITCARDSCOUNT" of type [float]
	"public float VOUCHERSCOUNT" of type [float]
	"public float CLOSEFLOATCAPTURE" of type [float]
	"public float TRANSFERCOUNT" of type [float]
	"public float RoundingUp" of type [float]
	"public float RoundingDown" of type [float]
	"public float FloatVariance" of type [float]
	"public float TillsOverUnder" of type [float]
	"public float VouchersUnPaid" of type [float]
	"public float VouchersCommission" of type [float]
	"public float Wallets" of type [float]
	"public float TillOverUnder" of type [float]
*/
namespace genesis;


use PDO;

class Poscofconsolidate {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $trandate ;	
	public $openfloat ;	
	public $cash ;	
	public $cheques ;	
	public $creditcards ;	
	public $vouchers ;	
	public $transfers ;	
	public $tender1amount ;	
	public $tender2amount ;	
	public $tender3amount ;	
	public $tender4amount ;	
	public $payouts ;	
	public $deposits ;	
	public $pdcheques ;	
	public $voucherspaid ;	
	public $closefloat ;	
	public $officialvalue ;	
	public $cashsaleexcl ;	
	public $cashsaleincl ;	
	public $cashsalevat ;	
	public $cashsalecostex ;	
	public $cashsaleprft ;	
	public $cashsalegp ;	
	public $accsaleexcl ;	
	public $accsaleincl ;	
	public $accsalevat ;	
	public $accsalecostex ;	
	public $accsaleprft ;	
	public $accsalegp ;	
	public $cashretnexcl ;	
	public $cashretnincl ;	
	public $cashretnvat ;	
	public $cashretncostex ;	
	public $cashretnprft ;	
	public $cashretngp ;	
	public $accretnexcl ;	
	public $accretnincl ;	
	public $accretnvat ;	
	public $accretncostex ;	
	public $accretnprft ;	
	public $accretngp ;	
	public $exemptsales ;	
	public $payments ;	
	public $lbpayments ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $creditcardscount ;	
	public $voucherscount ;	
	public $closefloatcapture ;	
	public $transfercount ;	
	public $roundingup ;	
	public $roundingdown ;	
	public $floatvariance ;	
	public $tillsoverunder ;	
	public $vouchersunpaid ;	
	public $voucherscommission ;	
	public $wallets ;	
	public $tilloverunder ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [TRANDATE], [OPENFLOAT], [CASH], [CHEQUES], [CREDITCARDS], [VOUCHERS], [TRANSFERS], [TENDER1AMOUNT], [TENDER2AMOUNT], [TENDER3AMOUNT], [TENDER4AMOUNT], [PAYOUTS], [DEPOSITS], [PDCHEQUES], [VOUCHERSPAID], [CLOSEFLOAT], [OFFICIALVALUE], [CASHSALEEXCL], [CASHSALEINCL], [CASHSALEVAT], [CASHSALECOSTEX], [CASHSALEPRFT], [CASHSALEGP], [ACCSALEEXCL], [ACCSALEINCL], [ACCSALEVAT], [ACCSALECOSTEX], [ACCSALEPRFT], [ACCSALEGP], [CASHRETNEXCL], [CASHRETNINCL], [CASHRETNVAT], [CASHRETNCOSTEX], [CASHRETNPRFT], [CASHRETNGP], [ACCRETNEXCL], [ACCRETNINCL], [ACCRETNVAT], [ACCRETNCOSTEX], [ACCRETNPRFT], [ACCRETNGP], [EXEMPTSALES], [PAYMENTS], [LBPAYMENTS], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [CREDITCARDSCOUNT], [VOUCHERSCOUNT], [CLOSEFLOATCAPTURE], [TRANSFERCOUNT], [RoundingUp], [RoundingDown], [FloatVariance], [TillsOverUnder], [VouchersUnPaid], [VouchersCommission], [Wallets], [TillOverUnder] FROM [POSCOFConsolidate]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->trandate = $records["TRANDATE"];
				$instance->openfloat = $records["OPENFLOAT"];
				$instance->cash = $records["CASH"];
				$instance->cheques = $records["CHEQUES"];
				$instance->creditcards = $records["CREDITCARDS"];
				$instance->vouchers = $records["VOUCHERS"];
				$instance->transfers = $records["TRANSFERS"];
				$instance->tender1amount = $records["TENDER1AMOUNT"];
				$instance->tender2amount = $records["TENDER2AMOUNT"];
				$instance->tender3amount = $records["TENDER3AMOUNT"];
				$instance->tender4amount = $records["TENDER4AMOUNT"];
				$instance->payouts = $records["PAYOUTS"];
				$instance->deposits = $records["DEPOSITS"];
				$instance->pdcheques = $records["PDCHEQUES"];
				$instance->voucherspaid = $records["VOUCHERSPAID"];
				$instance->closefloat = $records["CLOSEFLOAT"];
				$instance->officialvalue = $records["OFFICIALVALUE"];
				$instance->cashsaleexcl = $records["CASHSALEEXCL"];
				$instance->cashsaleincl = $records["CASHSALEINCL"];
				$instance->cashsalevat = $records["CASHSALEVAT"];
				$instance->cashsalecostex = $records["CASHSALECOSTEX"];
				$instance->cashsaleprft = $records["CASHSALEPRFT"];
				$instance->cashsalegp = $records["CASHSALEGP"];
				$instance->accsaleexcl = $records["ACCSALEEXCL"];
				$instance->accsaleincl = $records["ACCSALEINCL"];
				$instance->accsalevat = $records["ACCSALEVAT"];
				$instance->accsalecostex = $records["ACCSALECOSTEX"];
				$instance->accsaleprft = $records["ACCSALEPRFT"];
				$instance->accsalegp = $records["ACCSALEGP"];
				$instance->cashretnexcl = $records["CASHRETNEXCL"];
				$instance->cashretnincl = $records["CASHRETNINCL"];
				$instance->cashretnvat = $records["CASHRETNVAT"];
				$instance->cashretncostex = $records["CASHRETNCOSTEX"];
				$instance->cashretnprft = $records["CASHRETNPRFT"];
				$instance->cashretngp = $records["CASHRETNGP"];
				$instance->accretnexcl = $records["ACCRETNEXCL"];
				$instance->accretnincl = $records["ACCRETNINCL"];
				$instance->accretnvat = $records["ACCRETNVAT"];
				$instance->accretncostex = $records["ACCRETNCOSTEX"];
				$instance->accretnprft = $records["ACCRETNPRFT"];
				$instance->accretngp = $records["ACCRETNGP"];
				$instance->exemptsales = $records["EXEMPTSALES"];
				$instance->payments = $records["PAYMENTS"];
				$instance->lbpayments = $records["LBPAYMENTS"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->creditcardscount = $records["CREDITCARDSCOUNT"];
				$instance->voucherscount = $records["VOUCHERSCOUNT"];
				$instance->closefloatcapture = $records["CLOSEFLOATCAPTURE"];
				$instance->transfercount = $records["TRANSFERCOUNT"];
				$instance->roundingup = $records["RoundingUp"];
				$instance->roundingdown = $records["RoundingDown"];
				$instance->floatvariance = $records["FloatVariance"];
				$instance->tillsoverunder = $records["TillsOverUnder"];
				$instance->vouchersunpaid = $records["VouchersUnPaid"];
				$instance->voucherscommission = $records["VouchersCommission"];
				$instance->wallets = $records["Wallets"];
				$instance->tilloverunder = $records["TillOverUnder"];
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
			$res = $this->recid;
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