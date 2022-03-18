<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	STKKitSales

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public int Period" of type [int]
	"public int DayNo" of type [int]
	"public float SaleQty" of type [float]
	"public float SaleCostex" of type [float]
	"public float SaleExcl" of type [float]
	"public float RebateExcl" of type [float]
	"public float ReturnQty" of type [float]
	"public float ReturnCostex" of type [float]
	"public float ReturnExcl" of type [float]
	"public float ReturnRebate" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkkitsales {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $period ;	
	public $dayno ;	
	public $saleqty ;	
	public $salecostex ;	
	public $saleexcl ;	
	public $rebateexcl ;	
	public $returnqty ;	
	public $returncostex ;	
	public $returnexcl ;	
	public $returnrebate ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [Period], [DayNo], [SaleQty], [SaleCostex], [SaleExcl], [RebateExcl], [ReturnQty], [ReturnCostex], [ReturnExcl], [ReturnRebate], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [STKKitSales]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->period = $records["Period"];
				$instance->dayno = $records["DayNo"];
				$instance->saleqty = $records["SaleQty"];
				$instance->salecostex = $records["SaleCostex"];
				$instance->saleexcl = $records["SaleExcl"];
				$instance->rebateexcl = $records["RebateExcl"];
				$instance->returnqty = $records["ReturnQty"];
				$instance->returncostex = $records["ReturnCostex"];
				$instance->returnexcl = $records["ReturnExcl"];
				$instance->returnrebate = $records["ReturnRebate"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [Period], [DayNo], [SaleQty], [SaleCostex], [SaleExcl], [RebateExcl], [ReturnQty], [ReturnCostex], [ReturnExcl], [ReturnRebate], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [STKKitSales]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->period = $records["Period"];
				$instance->dayno = $records["DayNo"];
				$instance->saleqty = $records["SaleQty"];
				$instance->salecostex = $records["SaleCostex"];
				$instance->saleexcl = $records["SaleExcl"];
				$instance->rebateexcl = $records["RebateExcl"];
				$instance->returnqty = $records["ReturnQty"];
				$instance->returncostex = $records["ReturnCostex"];
				$instance->returnexcl = $records["ReturnExcl"];
				$instance->returnrebate = $records["ReturnRebate"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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