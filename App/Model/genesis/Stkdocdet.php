<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	STKDocDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public int DocNo" of type [int]
	"public int LineNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar StockType" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public float Quantity" of type [float]
	"public float Price" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalVAT" of type [float]
	"public nvarchar VATCode" of type [nvarchar]
	"public float VATRate" of type [float]
	"public float CaptureQty" of type [float]
	"public nvarchar AdjustType" of type [nvarchar]
	"public nvarchar SuppCode" of type [nvarchar]
	"public nvarchar BarCode" of type [nvarchar]
	"public float LastCostExcl" of type [float]
	"public float LastCostIncl" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public float SellIncl" of type [float]
	"public float SellExcl" of type [float]
	"public float Onhand" of type [float]
	"public float RebAmnt" of type [float]
	"public float Sqmbox" of type [float]
	"public float Cases" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public float LinkQty" of type [float]
	"public int AP" of type [int]
	"public float LineibtRebate" of type [float]
	"public float Rebavgamnt" of type [float]
	"public int Units" of type [int]
	"public float Onhand2" of type [float]
	"public nvarchar Virtualcard" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar CaptureType" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkdocdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $docno ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $stocktype ;	
	public $description1 ;	
	public $description2 ;	
	public $quantity ;	
	public $price ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totalvat ;	
	public $vatcode ;	
	public $vatrate ;	
	public $captureqty ;	
	public $adjusttype ;	
	public $suppcode ;	
	public $barcode ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $sellincl ;	
	public $sellexcl ;	
	public $onhand ;	
	public $rebamnt ;	
	public $sqmbox ;	
	public $cases ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $trandate ;	
	public $linkqty ;	
	public $ap ;	
	public $lineibtrebate ;	
	public $rebavgamnt ;	
	public $units ;	
	public $onhand2 ;	
	public $virtualcard ;	
	public $status ;	
	public $capturetype ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [DocNo], [LineNo], [StockCode], [LinkCode], [StockType], [Description1], [Description2], [Quantity], [Price], [TotalExcl], [TotalIncl], [TotalVAT], [VATCode], [VATRate], [CaptureQty], [AdjustType], [SuppCode], [BarCode], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [SellIncl], [SellExcl], [Onhand], [RebAmnt], [Sqmbox], [Cases], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [TranDate], [LinkQty], [AP], [LineibtRebate], [Rebavgamnt], [Units], [Onhand2], [Virtualcard], [Status], [CaptureType] FROM [STKDocDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->stocktype = $records["StockType"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->quantity = $records["Quantity"];
				$instance->price = $records["Price"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->captureqty = $records["CaptureQty"];
				$instance->adjusttype = $records["AdjustType"];
				$instance->suppcode = $records["SuppCode"];
				$instance->barcode = $records["BarCode"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->sellincl = $records["SellIncl"];
				$instance->sellexcl = $records["SellExcl"];
				$instance->onhand = $records["Onhand"];
				$instance->rebamnt = $records["RebAmnt"];
				$instance->sqmbox = $records["Sqmbox"];
				$instance->cases = $records["Cases"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->trandate = $records["TranDate"];
				$instance->linkqty = $records["LinkQty"];
				$instance->ap = $records["AP"];
				$instance->lineibtrebate = $records["LineibtRebate"];
				$instance->rebavgamnt = $records["Rebavgamnt"];
				$instance->units = $records["Units"];
				$instance->onhand2 = $records["Onhand2"];
				$instance->virtualcard = $records["Virtualcard"];
				$instance->status = $records["Status"];
				$instance->capturetype = $records["CaptureType"];
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [DocNo], [LineNo], [StockCode], [LinkCode], [StockType], [Description1], [Description2], [Quantity], [Price], [TotalExcl], [TotalIncl], [TotalVAT], [VATCode], [VATRate], [CaptureQty], [AdjustType], [SuppCode], [BarCode], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [SellIncl], [SellExcl], [Onhand], [RebAmnt], [Sqmbox], [Cases], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [TranDate], [LinkQty], [AP], [LineibtRebate], [Rebavgamnt], [Units], [Onhand2], [Virtualcard], [Status], [CaptureType] FROM [STKDocDet]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->stocktype = $records["StockType"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->quantity = $records["Quantity"];
				$instance->price = $records["Price"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->captureqty = $records["CaptureQty"];
				$instance->adjusttype = $records["AdjustType"];
				$instance->suppcode = $records["SuppCode"];
				$instance->barcode = $records["BarCode"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->sellincl = $records["SellIncl"];
				$instance->sellexcl = $records["SellExcl"];
				$instance->onhand = $records["Onhand"];
				$instance->rebamnt = $records["RebAmnt"];
				$instance->sqmbox = $records["Sqmbox"];
				$instance->cases = $records["Cases"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->trandate = $records["TranDate"];
				$instance->linkqty = $records["LinkQty"];
				$instance->ap = $records["AP"];
				$instance->lineibtrebate = $records["LineibtRebate"];
				$instance->rebavgamnt = $records["Rebavgamnt"];
				$instance->units = $records["Units"];
				$instance->onhand2 = $records["Onhand2"];
				$instance->virtualcard = $records["Virtualcard"];
				$instance->status = $records["Status"];
				$instance->capturetype = $records["CaptureType"];
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