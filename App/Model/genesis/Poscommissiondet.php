<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	POSCommissionDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int ComNo" of type [int]
	"public nvarchar RepCode" of type [nvarchar]
	"public nvarchar RepName" of type [nvarchar]
	"public int Invoices" of type [int]
	"public int CRNotes" of type [int]
	"public int CashSaleCnt" of type [int]
	"public float CashSales" of type [float]
	"public int AccSaleCnt" of type [int]
	"public float AccountSales" of type [float]
	"public int CashRetnCnt" of type [int]
	"public float CashReturns" of type [float]
	"public int AccRetnCnt" of type [int]
	"public float AccReturns" of type [float]
	"public float SalesExcl" of type [float]
	"public float CostExcl" of type [float]
	"public float Profit" of type [float]
	"public float Commission" of type [float]
	"public float NetCommission" of type [float]
*/
namespace genesis;


use PDO;

class Poscommissiondet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $comno ;	
	public $repcode ;	
	public $repname ;	
	public $invoices ;	
	public $crnotes ;	
	public $cashsalecnt ;	
	public $cashsales ;	
	public $accsalecnt ;	
	public $accountsales ;	
	public $cashretncnt ;	
	public $cashreturns ;	
	public $accretncnt ;	
	public $accreturns ;	
	public $salesexcl ;	
	public $costexcl ;	
	public $profit ;	
	public $commission ;	
	public $netcommission ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [ComNo], [RepCode], [RepName], [Invoices], [CRNotes], [CashSaleCnt], [CashSales], [AccSaleCnt], [AccountSales], [CashRetnCnt], [CashReturns], [AccRetnCnt], [AccReturns], [SalesExcl], [CostExcl], [Profit], [Commission], [NetCommission] FROM [POSCommissionDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->comno = $records["ComNo"];
				$instance->repcode = $records["RepCode"];
				$instance->repname = $records["RepName"];
				$instance->invoices = $records["Invoices"];
				$instance->crnotes = $records["CRNotes"];
				$instance->cashsalecnt = $records["CashSaleCnt"];
				$instance->cashsales = $records["CashSales"];
				$instance->accsalecnt = $records["AccSaleCnt"];
				$instance->accountsales = $records["AccountSales"];
				$instance->cashretncnt = $records["CashRetnCnt"];
				$instance->cashreturns = $records["CashReturns"];
				$instance->accretncnt = $records["AccRetnCnt"];
				$instance->accreturns = $records["AccReturns"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->costexcl = $records["CostExcl"];
				$instance->profit = $records["Profit"];
				$instance->commission = $records["Commission"];
				$instance->netcommission = $records["NetCommission"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using RepCode
	*/
	public static function ini_RepCode($repcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [ComNo], [RepCode], [RepName], [Invoices], [CRNotes], [CashSaleCnt], [CashSales], [AccSaleCnt], [AccountSales], [CashRetnCnt], [CashReturns], [AccRetnCnt], [AccReturns], [SalesExcl], [CostExcl], [Profit], [Commission], [NetCommission] FROM [POSCommissionDet]  WHERE [RepCode]=:repcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":repcode", $repcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->comno = $records["ComNo"];
				$instance->repcode = $records["RepCode"];
				$instance->repname = $records["RepName"];
				$instance->invoices = $records["Invoices"];
				$instance->crnotes = $records["CRNotes"];
				$instance->cashsalecnt = $records["CashSaleCnt"];
				$instance->cashsales = $records["CashSales"];
				$instance->accsalecnt = $records["AccSaleCnt"];
				$instance->accountsales = $records["AccountSales"];
				$instance->cashretncnt = $records["CashRetnCnt"];
				$instance->cashreturns = $records["CashReturns"];
				$instance->accretncnt = $records["AccRetnCnt"];
				$instance->accreturns = $records["AccReturns"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->costexcl = $records["CostExcl"];
				$instance->profit = $records["Profit"];
				$instance->commission = $records["Commission"];
				$instance->netcommission = $records["NetCommission"];
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
			$res = $this->repname;
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