<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	GSMMstGLPostGroup

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar GroupCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public int SalesTaxable" of type [int]
	"public int SalesExempt" of type [int]
	"public int TradingStock" of type [int]
	"public int CostOfSales" of type [int]
	"public int StockAdjustment" of type [int]
	"public int GoodRecvNotInvoiced" of type [int]
*/
namespace genesis;


use PDO;

class Gsmmstglpostgroup {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $groupcode ;	
	public $description ;	
	public $salestaxable ;	
	public $salesexempt ;	
	public $tradingstock ;	
	public $costofsales ;	
	public $stockadjustment ;	
	public $goodrecvnotinvoiced ;	
	
	
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
			$query = " SELECT RecID, [GroupCode], [Description], [SalesTaxable], [SalesExempt], [TradingStock], [CostOfSales], [StockAdjustment], [GoodRecvNotInvoiced] FROM [GSMMstGLPostGroup]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->groupcode = $records["GroupCode"];
				$instance->description = $records["Description"];
				$instance->salestaxable = $records["SalesTaxable"];
				$instance->salesexempt = $records["SalesExempt"];
				$instance->tradingstock = $records["TradingStock"];
				$instance->costofsales = $records["CostOfSales"];
				$instance->stockadjustment = $records["StockAdjustment"];
				$instance->goodrecvnotinvoiced = $records["GoodRecvNotInvoiced"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using GroupCode
	*/
	public static function ini_GroupCode($groupcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [GroupCode], [Description], [SalesTaxable], [SalesExempt], [TradingStock], [CostOfSales], [StockAdjustment], [GoodRecvNotInvoiced] FROM [GSMMstGLPostGroup]  WHERE [GroupCode]=:groupcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":groupcode", $groupcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->groupcode = $records["GroupCode"];
				$instance->description = $records["Description"];
				$instance->salestaxable = $records["SalesTaxable"];
				$instance->salesexempt = $records["SalesExempt"];
				$instance->tradingstock = $records["TradingStock"];
				$instance->costofsales = $records["CostOfSales"];
				$instance->stockadjustment = $records["StockAdjustment"];
				$instance->goodrecvnotinvoiced = $records["GoodRecvNotInvoiced"];
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
			$res = $this->description;
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