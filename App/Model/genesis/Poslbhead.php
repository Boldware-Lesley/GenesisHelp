<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	POSLBHead

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar LBCUSTNO" of type [nvarchar]
	"public nvarchar LBNO" of type [nvarchar]
	"public nvarchar LBDATE" of type [nvarchar]
	"public nvarchar LBEXPDATE" of type [nvarchar]
	"public float OPENBALANCE" of type [float]
	"public float PAID" of type [float]
	"public float BALANCE" of type [float]
	"public nvarchar STATUS" of type [nvarchar]
	"public float COSTEXCL" of type [float]
	"public float COSTINCL" of type [float]
	"public float PROFIT" of type [float]
	"public float TOTALVAT" of type [float]
	"public nvarchar REPCODE" of type [nvarchar]
	"public float DISCOUNT" of type [float]
	"public float LEVY" of type [float]
	"public nvarchar TILLNO" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public float DEPOSIT" of type [float]
	"public int DETAILLINES" of type [int]
	"public nvarchar DateOrdered" of type [nvarchar]
	"public nvarchar DateReceived" of type [nvarchar]
	"public nvarchar DateCollected" of type [nvarchar]
	"public nvarchar ManualSlipNo" of type [nvarchar]
	"public nvarchar BackDated" of type [nvarchar]
	"public nvarchar PrevLaybyeName" of type [nvarchar]
	"public float Adjustments" of type [float]
	"public nvarchar DeliveryDate" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Poslbhead {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $lbcustno ;	
	public $lbno ;	
	public $lbdate ;	
	public $lbexpdate ;	
	public $openbalance ;	
	public $paid ;	
	public $balance ;	
	public $status ;	
	public $costexcl ;	
	public $costincl ;	
	public $profit ;	
	public $totalvat ;	
	public $repcode ;	
	public $discount ;	
	public $levy ;	
	public $tillno ;	
	public $docno ;	
	public $ap ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $deposit ;	
	public $detaillines ;	
	public $dateordered ;	
	public $datereceived ;	
	public $datecollected ;	
	public $manualslipno ;	
	public $backdated ;	
	public $prevlaybyename ;	
	public $adjustments ;	
	public $deliverydate ;	
	public $notes ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [LBCUSTNO], [LBNO], [LBDATE], [LBEXPDATE], [OPENBALANCE], [PAID], [BALANCE], [STATUS], [COSTEXCL], [COSTINCL], [PROFIT], [TOTALVAT], [REPCODE], [DISCOUNT], [LEVY], [TILLNO], [DOCNO], [AP], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [DEPOSIT], [DETAILLINES], [DateOrdered], [DateReceived], [DateCollected], [ManualSlipNo], [BackDated], [PrevLaybyeName], [Adjustments], [DeliveryDate], [Notes] FROM [POSLBHead]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->lbcustno = $records["LBCUSTNO"];
				$instance->lbno = $records["LBNO"];
				$instance->lbdate = $records["LBDATE"];
				$instance->lbexpdate = $records["LBEXPDATE"];
				$instance->openbalance = $records["OPENBALANCE"];
				$instance->paid = $records["PAID"];
				$instance->balance = $records["BALANCE"];
				$instance->status = $records["STATUS"];
				$instance->costexcl = $records["COSTEXCL"];
				$instance->costincl = $records["COSTINCL"];
				$instance->profit = $records["PROFIT"];
				$instance->totalvat = $records["TOTALVAT"];
				$instance->repcode = $records["REPCODE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->levy = $records["LEVY"];
				$instance->tillno = $records["TILLNO"];
				$instance->docno = $records["DOCNO"];
				$instance->ap = $records["AP"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->deposit = $records["DEPOSIT"];
				$instance->detaillines = $records["DETAILLINES"];
				$instance->dateordered = $records["DateOrdered"];
				$instance->datereceived = $records["DateReceived"];
				$instance->datecollected = $records["DateCollected"];
				$instance->manualslipno = $records["ManualSlipNo"];
				$instance->backdated = $records["BackDated"];
				$instance->prevlaybyename = $records["PrevLaybyeName"];
				$instance->adjustments = $records["Adjustments"];
				$instance->deliverydate = $records["DeliveryDate"];
				$instance->notes = $records["Notes"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using REPCODE
	*/
	public static function ini_REPCODE($repcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [LBCUSTNO], [LBNO], [LBDATE], [LBEXPDATE], [OPENBALANCE], [PAID], [BALANCE], [STATUS], [COSTEXCL], [COSTINCL], [PROFIT], [TOTALVAT], [REPCODE], [DISCOUNT], [LEVY], [TILLNO], [DOCNO], [AP], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [DEPOSIT], [DETAILLINES], [DateOrdered], [DateReceived], [DateCollected], [ManualSlipNo], [BackDated], [PrevLaybyeName], [Adjustments], [DeliveryDate], [Notes] FROM [POSLBHead]  WHERE [REPCODE]=:repcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":repcode", $repcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->lbcustno = $records["LBCUSTNO"];
				$instance->lbno = $records["LBNO"];
				$instance->lbdate = $records["LBDATE"];
				$instance->lbexpdate = $records["LBEXPDATE"];
				$instance->openbalance = $records["OPENBALANCE"];
				$instance->paid = $records["PAID"];
				$instance->balance = $records["BALANCE"];
				$instance->status = $records["STATUS"];
				$instance->costexcl = $records["COSTEXCL"];
				$instance->costincl = $records["COSTINCL"];
				$instance->profit = $records["PROFIT"];
				$instance->totalvat = $records["TOTALVAT"];
				$instance->repcode = $records["REPCODE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->levy = $records["LEVY"];
				$instance->tillno = $records["TILLNO"];
				$instance->docno = $records["DOCNO"];
				$instance->ap = $records["AP"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->deposit = $records["DEPOSIT"];
				$instance->detaillines = $records["DETAILLINES"];
				$instance->dateordered = $records["DateOrdered"];
				$instance->datereceived = $records["DateReceived"];
				$instance->datecollected = $records["DateCollected"];
				$instance->manualslipno = $records["ManualSlipNo"];
				$instance->backdated = $records["BackDated"];
				$instance->prevlaybyename = $records["PrevLaybyeName"];
				$instance->adjustments = $records["Adjustments"];
				$instance->deliverydate = $records["DeliveryDate"];
				$instance->notes = $records["Notes"];
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
			$res = $this->prevlaybyename;
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