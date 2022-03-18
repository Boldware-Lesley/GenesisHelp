<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	STKSTakeCounts

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int BatchNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar StockType" of type [nvarchar]
	"public int Units" of type [int]
	"public float CountQty" of type [float]
	"public int CountLinkQty" of type [int]
	"public int PageNo" of type [int]
	"public int LineNo" of type [int]
	"public nvarchar CountName" of type [nvarchar]
	"public nvarchar ScannerFile" of type [nvarchar]
	"public nvarchar ScannerDTO" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar BarCode" of type [nvarchar]
	"public nvarchar PackSize" of type [nvarchar]
	"public float CostExcl" of type [float]
	"public float CostIncl" of type [float]
	"public float SecondCountQty" of type [float]
	"public float SecondCountLinkQty" of type [float]
*/
namespace genesis;


use PDO;

class Stkstakecounts {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $batchno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $stocktype ;	
	public $units ;	
	public $countqty ;	
	public $countlinkqty ;	
	public $pageno ;	
	public $lineno ;	
	public $countname ;	
	public $scannerfile ;	
	public $scannerdto ;	
	public $description1 ;	
	public $barcode ;	
	public $packsize ;	
	public $costexcl ;	
	public $costincl ;	
	public $secondcountqty ;	
	public $secondcountlinkqty ;	
	public $counterid;
	
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
			$query = " SELECT RecID,[CounterID], [CO], [Branch], [BatchNo], [StockCode], [LinkCode], [StockType], [Units], [CountQty], [CountLinkQty], [PageNo], [LineNo], [CountName], [ScannerFile], [ScannerDTO], [Description1], [BarCode], [PackSize], [CostExcl], [CostIncl], [SecondCountQty], [SecondCountLinkQty] FROM [STKSTakeCounts]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->batchno = $records["BatchNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->stocktype = $records["StockType"];
				$instance->units = $records["Units"];
				$instance->countqty = $records["CountQty"];
				$instance->countlinkqty = $records["CountLinkQty"];
				$instance->pageno = $records["PageNo"];
				$instance->lineno = $records["LineNo"];
				$instance->countname = $records["CountName"];
				$instance->scannerfile = $records["ScannerFile"];
				$instance->scannerdto = $records["ScannerDTO"];
				$instance->description1 = $records["Description1"];
				$instance->barcode = $records["BarCode"];
				$instance->packsize = $records["PackSize"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->secondcountqty = $records["SecondCountQty"];
				$instance->secondcountlinkqty = $records["SecondCountLinkQty"];
                $instance->counterid = $records["CounterID"];
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
			$query = " SELECT RecID,[CounterID], [CO], [Branch], [BatchNo], [StockCode], [LinkCode], [StockType], [Units], [CountQty], [CountLinkQty], [PageNo], [LineNo], [CountName], [ScannerFile], [ScannerDTO], [Description1], [BarCode], [PackSize], [CostExcl], [CostIncl], [SecondCountQty], [SecondCountLinkQty] FROM [STKSTakeCounts]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->batchno = $records["BatchNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->stocktype = $records["StockType"];
				$instance->units = $records["Units"];
				$instance->countqty = $records["CountQty"];
				$instance->countlinkqty = $records["CountLinkQty"];
				$instance->pageno = $records["PageNo"];
				$instance->lineno = $records["LineNo"];
				$instance->countname = $records["CountName"];
				$instance->scannerfile = $records["ScannerFile"];
				$instance->scannerdto = $records["ScannerDTO"];
				$instance->description1 = $records["Description1"];
				$instance->barcode = $records["BarCode"];
				$instance->packsize = $records["PackSize"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->secondcountqty = $records["SecondCountQty"];
				$instance->secondcountlinkqty = $records["SecondCountLinkQty"];
                $instance->counterid = $records["CounterID"];
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
			$res = $this->countname;
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