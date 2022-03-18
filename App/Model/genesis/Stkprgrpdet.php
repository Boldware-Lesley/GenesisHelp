<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	STKPrGrpDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int PGNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar StockType" of type [nvarchar]
	"public int Units" of type [int]
	"public nvarchar PurchaseItem" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
	"public float VATRate" of type [float]
	"public float BuyExcl" of type [float]
	"public float BuyIncl" of type [float]
	"public float Excl" of type [float]
	"public float Incl" of type [float]
	"public float MUP" of type [float]
	"public float GP" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar Variant" of type [nvarchar]
	"public float LastCostExcl" of type [float]
	"public float LastCostIncl" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
*/
namespace genesis;


use PDO;

class Stkprgrpdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $pgno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $stocktype ;	
	public $units ;	
	public $purchaseitem ;	
	public $vatcode ;	
	public $vatrate ;	
	public $buyexcl ;	
	public $buyincl ;	
	public $excl ;	
	public $incl ;	
	public $mup ;	
	public $gp ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $variant ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [PGNo], [StockCode], [LinkCode], [Description1], [StockType], [Units], [PurchaseItem], [VATCode], [VATRate], [BuyExcl], [BuyIncl], [Excl], [Incl], [MUP], [GP], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Variant], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl] FROM [STKPrGrpDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->pgno = $records["PGNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->stocktype = $records["StockType"];
				$instance->units = $records["Units"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->buyexcl = $records["BuyExcl"];
				$instance->buyincl = $records["BuyIncl"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
				$instance->mup = $records["MUP"];
				$instance->gp = $records["GP"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->variant = $records["Variant"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
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
			$query = " SELECT RecID, [CO], [Branch], [PGNo], [StockCode], [LinkCode], [Description1], [StockType], [Units], [PurchaseItem], [VATCode], [VATRate], [BuyExcl], [BuyIncl], [Excl], [Incl], [MUP], [GP], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Variant], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl] FROM [STKPrGrpDet]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->pgno = $records["PGNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->stocktype = $records["StockType"];
				$instance->units = $records["Units"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->buyexcl = $records["BuyExcl"];
				$instance->buyincl = $records["BuyIncl"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
				$instance->mup = $records["MUP"];
				$instance->gp = $records["GP"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->variant = $records["Variant"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
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