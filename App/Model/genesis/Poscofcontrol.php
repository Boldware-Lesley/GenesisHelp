<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	POSCOFControl

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TRANDATE" of type [nvarchar]
	"public float OPENFLOAT" of type [float]
	"public float CLOSEFLOAT" of type [float]
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
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public float Wallets" of type [float]
*/
namespace genesis;


use PDO;

class Poscofcontrol {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $trandate ;	
	public $openfloat ;	
	public $closefloat ;	
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
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $wallets ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [TRANDATE], [OPENFLOAT], [CLOSEFLOAT], [CASH], [CHEQUES], [CREDITCARDS], [VOUCHERS], [TRANSFERS], [TENDER1AMOUNT], [TENDER2AMOUNT], [TENDER3AMOUNT], [TENDER4AMOUNT], [PAYOUTS], [DEPOSITS], [PDCHEQUES], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Wallets] FROM [POSCOFControl]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->trandate = $records["TRANDATE"];
				$instance->openfloat = $records["OPENFLOAT"];
				$instance->closefloat = $records["CLOSEFLOAT"];
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
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->wallets = $records["Wallets"];
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