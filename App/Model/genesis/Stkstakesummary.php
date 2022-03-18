<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	STKSTakeSummary

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int BatchNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar StockType" of type [nvarchar]
	"public float Onhand" of type [float]
	"public float CostExcl" of type [float]
	"public float CostIncl" of type [float]
	"public float TotalCount" of type [float]
	"public float AdjustQty" of type [float]
	"public float VarTotalExcl" of type [float]
	"public float VarTotalIncl" of type [float]
	"public nvarchar CountUpdated" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkstakesummary {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $batchno ;	
	public $stockcode ;	
	public $description1 ;	
	public $stocktype ;	
	public $onhand ;	
	public $costexcl ;	
	public $costincl ;	
	public $totalcount ;	
	public $adjustqty ;	
	public $vartotalexcl ;	
	public $vartotalincl ;	
	public $countupdated ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [BatchNo], [StockCode], [Description1], [StockType], [Onhand], [CostExcl], [CostIncl], [TotalCount], [AdjustQty], [VarTotalExcl], [VarTotalIncl], [CountUpdated] FROM [STKSTakeSummary]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->batchno = $records["BatchNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->description1 = $records["Description1"];
				$instance->stocktype = $records["StockType"];
				$instance->onhand = $records["Onhand"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->totalcount = $records["TotalCount"];
				$instance->adjustqty = $records["AdjustQty"];
				$instance->vartotalexcl = $records["VarTotalExcl"];
				$instance->vartotalincl = $records["VarTotalIncl"];
				$instance->countupdated = $records["CountUpdated"];
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
			$query = " SELECT RecID, [CO], [Branch], [BatchNo], [StockCode], [Description1], [StockType], [Onhand], [CostExcl], [CostIncl], [TotalCount], [AdjustQty], [VarTotalExcl], [VarTotalIncl], [CountUpdated] FROM [STKSTakeSummary]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->batchno = $records["BatchNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->description1 = $records["Description1"];
				$instance->stocktype = $records["StockType"];
				$instance->onhand = $records["Onhand"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->totalcount = $records["TotalCount"];
				$instance->adjustqty = $records["AdjustQty"];
				$instance->vartotalexcl = $records["VarTotalExcl"];
				$instance->vartotalincl = $records["VarTotalIncl"];
				$instance->countupdated = $records["CountUpdated"];
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
			$res = $this->description1;
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