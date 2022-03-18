<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	CRDBudgetItems

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int BudYear" of type [int]
	"public int Period" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public float SalesQty" of type [float]
	"public float SalesCost" of type [float]
	"public float SalesExcl" of type [float]
	"public float SalesRebate" of type [float]
	"public float SalesPerc" of type [float]
	"public float OtherIncome" of type [float]
*/
namespace genesis;


use PDO;

class Crdbudgetitems {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $budyear ;	
	public $period ;	
	public $stockcode ;	
	public $salesqty ;	
	public $salescost ;	
	public $salesexcl ;	
	public $salesrebate ;	
	public $salesperc ;	
	public $otherincome ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [BudYear], [Period], [StockCode], [SalesQty], [SalesCost], [SalesExcl], [SalesRebate], [SalesPerc], [OtherIncome] FROM [CRDBudgetItems]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->budyear = $records["BudYear"];
				$instance->period = $records["Period"];
				$instance->stockcode = $records["StockCode"];
				$instance->salesqty = $records["SalesQty"];
				$instance->salescost = $records["SalesCost"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->salesrebate = $records["SalesRebate"];
				$instance->salesperc = $records["SalesPerc"];
				$instance->otherincome = $records["OtherIncome"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using StockCode
	*/
	public static function ini_StockCode($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [BudYear], [Period], [StockCode], [SalesQty], [SalesCost], [SalesExcl], [SalesRebate], [SalesPerc], [OtherIncome] FROM [CRDBudgetItems]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->budyear = $records["BudYear"];
				$instance->period = $records["Period"];
				$instance->stockcode = $records["StockCode"];
				$instance->salesqty = $records["SalesQty"];
				$instance->salescost = $records["SalesCost"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->salesrebate = $records["SalesRebate"];
				$instance->salesperc = $records["SalesPerc"];
				$instance->otherincome = $records["OtherIncome"];
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