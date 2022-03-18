<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	POSTillPickups

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TILLNO" of type [nvarchar]
	"public int CASHUPNO" of type [int]
	"public nvarchar PICKUPDATE" of type [nvarchar]
	"public nvarchar PICKUPTIME" of type [nvarchar]
	"public float CASH" of type [float]
	"public float CHEQUES" of type [float]
	"public float CREDITCARDS" of type [float]
	"public float VOUCHERS" of type [float]
	"public float TRANSFERS" of type [float]
	"public float TENDERAMOUNT1" of type [float]
	"public float TENDERAMOUNT2" of type [float]
	"public float TENDERAMOUNT3" of type [float]
	"public float TENDERAMOUNT4" of type [float]
	"public nvarchar CASHOFFICETILL" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar COFTILLNO" of type [nvarchar]
	"public float PickUpNotes" of type [float]
	"public float PickUpCoins" of type [float]
	"public float Wallets" of type [float]
*/
namespace genesis;


use PDO;

class Postillpickups {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $tillno ;	
	public $cashupno ;	
	public $pickupdate ;	
	public $pickuptime ;	
	public $cash ;	
	public $cheques ;	
	public $creditcards ;	
	public $vouchers ;	
	public $transfers ;	
	public $tenderamount1 ;	
	public $tenderamount2 ;	
	public $tenderamount3 ;	
	public $tenderamount4 ;	
	public $cashofficetill ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $coftillno ;	
	public $pickupnotes ;	
	public $pickupcoins ;	
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
			$query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [CASHUPNO], [PICKUPDATE], [PICKUPTIME], [CASH], [CHEQUES], [CREDITCARDS], [VOUCHERS], [TRANSFERS], [TENDERAMOUNT1], [TENDERAMOUNT2], [TENDERAMOUNT3], [TENDERAMOUNT4], [CASHOFFICETILL], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [COFTILLNO], [PickUpNotes], [PickUpCoins], [Wallets] FROM [POSTillPickups]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->tillno = $records["TILLNO"];
				$instance->cashupno = $records["CASHUPNO"];
				$instance->pickupdate = $records["PICKUPDATE"];
				$instance->pickuptime = $records["PICKUPTIME"];
				$instance->cash = $records["CASH"];
				$instance->cheques = $records["CHEQUES"];
				$instance->creditcards = $records["CREDITCARDS"];
				$instance->vouchers = $records["VOUCHERS"];
				$instance->transfers = $records["TRANSFERS"];
				$instance->tenderamount1 = $records["TENDERAMOUNT1"];
				$instance->tenderamount2 = $records["TENDERAMOUNT2"];
				$instance->tenderamount3 = $records["TENDERAMOUNT3"];
				$instance->tenderamount4 = $records["TENDERAMOUNT4"];
				$instance->cashofficetill = $records["CASHOFFICETILL"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->coftillno = $records["COFTILLNO"];
				$instance->pickupnotes = $records["PickUpNotes"];
				$instance->pickupcoins = $records["PickUpCoins"];
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