<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	GSMComboDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public int ComboNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar VariantCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public float Quantity" of type [float]
	"public float CostExcl" of type [float]
	"public float CostIncl" of type [float]
	"public float TotCostExcl" of type [float]
	"public float TotCostIncl" of type [float]
	"public float PercOfTotal" of type [float]
	"public float SellExcl" of type [float]
	"public float SellIncl" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float DefSellExcl" of type [float]
	"public float DefSellIncl" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmcombodet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $combono ;	
	public $stockcode ;	
	public $linkcode ;	
	public $variantcode ;	
	public $description ;	
	public $quantity ;	
	public $costexcl ;	
	public $costincl ;	
	public $totcostexcl ;	
	public $totcostincl ;	
	public $percoftotal ;	
	public $sellexcl ;	
	public $sellincl ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $defsellexcl ;	
	public $defsellincl ;	
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
			$query = " SELECT RecID, [ComboNo], [StockCode], [LinkCode], [VariantCode], [Description], [Quantity], [CostExcl], [CostIncl], [TotCostExcl], [TotCostIncl], [PercOfTotal], [SellExcl], [SellIncl], [TotalExcl], [TotalIncl], [DefSellExcl], [DefSellIncl], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMComboDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->combono = $records["ComboNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->variantcode = $records["VariantCode"];
				$instance->description = $records["Description"];
				$instance->quantity = $records["Quantity"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->totcostexcl = $records["TotCostExcl"];
				$instance->totcostincl = $records["TotCostIncl"];
				$instance->percoftotal = $records["PercOfTotal"];
				$instance->sellexcl = $records["SellExcl"];
				$instance->sellincl = $records["SellIncl"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->defsellexcl = $records["DefSellExcl"];
				$instance->defsellincl = $records["DefSellIncl"];
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
			$query = " SELECT RecID, [ComboNo], [StockCode], [LinkCode], [VariantCode], [Description], [Quantity], [CostExcl], [CostIncl], [TotCostExcl], [TotCostIncl], [PercOfTotal], [SellExcl], [SellIncl], [TotalExcl], [TotalIncl], [DefSellExcl], [DefSellIncl], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMComboDet]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->combono = $records["ComboNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->variantcode = $records["VariantCode"];
				$instance->description = $records["Description"];
				$instance->quantity = $records["Quantity"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->totcostexcl = $records["TotCostExcl"];
				$instance->totcostincl = $records["TotCostIncl"];
				$instance->percoftotal = $records["PercOfTotal"];
				$instance->sellexcl = $records["SellExcl"];
				$instance->sellincl = $records["SellIncl"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->defsellexcl = $records["DefSellExcl"];
				$instance->defsellincl = $records["DefSellIncl"];
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