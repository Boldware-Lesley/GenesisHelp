<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	STKBalHist

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar WH" of type [nvarchar]
	"public float Onhand" of type [float]
	"public float SalesOrder" of type [float]
	"public float PurOrder" of type [float]
	"public float Laybye" of type [float]
	"public float Dispatch" of type [float]
	"public float Consignment" of type [float]
	"public float Damaged" of type [float]
	"public float Unpacked" of type [float]
	"public float Intransit" of type [float]
	"public nvarchar LastSupplier" of type [nvarchar]
	"public float LastQuantity" of type [float]
	"public float LastCostExcl" of type [float]
	"public nvarchar LastInvoiceNo" of type [nvarchar]
	"public int LastGRVNo" of type [int]
	"public nvarchar BinLoc1" of type [nvarchar]
	"public nvarchar BinLoc2" of type [nvarchar]
	"public nvarchar BinLoc3" of type [nvarchar]
	"public nvarchar BinLoc4" of type [nvarchar]
	"public nvarchar BinLoc5" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public float Onhand01" of type [float]
	"public float Onhand02" of type [float]
	"public float Onhand03" of type [float]
	"public float Onhand04" of type [float]
	"public float Onhand05" of type [float]
	"public float Onhand06" of type [float]
	"public float Onhand07" of type [float]
	"public float Onhand08" of type [float]
	"public float Onhand09" of type [float]
	"public float Onhand10" of type [float]
	"public float Onhand11" of type [float]
	"public float Onhand12" of type [float]
	"public float Onhand13" of type [float]
	"public float Onhand14" of type [float]
	"public float Onhand15" of type [float]
	"public float Onhand16" of type [float]
	"public float Onhand17" of type [float]
	"public float Onhand18" of type [float]
	"public float Onhand19" of type [float]
	"public float Onhand20" of type [float]
	"public float Onhand21" of type [float]
	"public float Onhand22" of type [float]
	"public float Onhand23" of type [float]
	"public float Onhand24" of type [float]
	"public float Onhand25" of type [float]
	"public float Onhand26" of type [float]
	"public float Onhand27" of type [float]
	"public float Onhand28" of type [float]
	"public float Onhand29" of type [float]
	"public float Onhand30" of type [float]
	"public float Onhand31" of type [float]
	"public int Cases" of type [int]
	"public float Weight" of type [float]
	"public int SplitQty" of type [int]
*/
namespace genesis;


use PDO;

class Stkbalhist {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $ap ;	
	public $wh ;	
	public $onhand ;	
	public $salesorder ;	
	public $purorder ;	
	public $laybye ;	
	public $dispatch ;	
	public $consignment ;	
	public $damaged ;	
	public $unpacked ;	
	public $intransit ;	
	public $lastsupplier ;	
	public $lastquantity ;	
	public $lastcostexcl ;	
	public $lastinvoiceno ;	
	public $lastgrvno ;	
	public $binloc1 ;	
	public $binloc2 ;	
	public $binloc3 ;	
	public $binloc4 ;	
	public $binloc5 ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $onhand01 ;	
	public $onhand02 ;	
	public $onhand03 ;	
	public $onhand04 ;	
	public $onhand05 ;	
	public $onhand06 ;	
	public $onhand07 ;	
	public $onhand08 ;	
	public $onhand09 ;	
	public $onhand10 ;	
	public $onhand11 ;	
	public $onhand12 ;	
	public $onhand13 ;	
	public $onhand14 ;	
	public $onhand15 ;	
	public $onhand16 ;	
	public $onhand17 ;	
	public $onhand18 ;	
	public $onhand19 ;	
	public $onhand20 ;	
	public $onhand21 ;	
	public $onhand22 ;	
	public $onhand23 ;	
	public $onhand24 ;	
	public $onhand25 ;	
	public $onhand26 ;	
	public $onhand27 ;	
	public $onhand28 ;	
	public $onhand29 ;	
	public $onhand30 ;	
	public $onhand31 ;	
	public $cases ;	
	public $weight ;	
	public $splitqty ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [AP], [WH], [Onhand], [SalesOrder], [PurOrder], [Laybye], [Dispatch], [Consignment], [Damaged], [Unpacked], [Intransit], [LastSupplier], [LastQuantity], [LastCostExcl], [LastInvoiceNo], [LastGRVNo], [BinLoc1], [BinLoc2], [BinLoc3], [BinLoc4], [BinLoc5], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Onhand01], [Onhand02], [Onhand03], [Onhand04], [Onhand05], [Onhand06], [Onhand07], [Onhand08], [Onhand09], [Onhand10], [Onhand11], [Onhand12], [Onhand13], [Onhand14], [Onhand15], [Onhand16], [Onhand17], [Onhand18], [Onhand19], [Onhand20], [Onhand21], [Onhand22], [Onhand23], [Onhand24], [Onhand25], [Onhand26], [Onhand27], [Onhand28], [Onhand29], [Onhand30], [Onhand31], [Cases], [Weight], [SplitQty] FROM [STKBalHist]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->ap = $records["AP"];
				$instance->wh = $records["WH"];
				$instance->onhand = $records["Onhand"];
				$instance->salesorder = $records["SalesOrder"];
				$instance->purorder = $records["PurOrder"];
				$instance->laybye = $records["Laybye"];
				$instance->dispatch = $records["Dispatch"];
				$instance->consignment = $records["Consignment"];
				$instance->damaged = $records["Damaged"];
				$instance->unpacked = $records["Unpacked"];
				$instance->intransit = $records["Intransit"];
				$instance->lastsupplier = $records["LastSupplier"];
				$instance->lastquantity = $records["LastQuantity"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastinvoiceno = $records["LastInvoiceNo"];
				$instance->lastgrvno = $records["LastGRVNo"];
				$instance->binloc1 = $records["BinLoc1"];
				$instance->binloc2 = $records["BinLoc2"];
				$instance->binloc3 = $records["BinLoc3"];
				$instance->binloc4 = $records["BinLoc4"];
				$instance->binloc5 = $records["BinLoc5"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->onhand01 = $records["Onhand01"];
				$instance->onhand02 = $records["Onhand02"];
				$instance->onhand03 = $records["Onhand03"];
				$instance->onhand04 = $records["Onhand04"];
				$instance->onhand05 = $records["Onhand05"];
				$instance->onhand06 = $records["Onhand06"];
				$instance->onhand07 = $records["Onhand07"];
				$instance->onhand08 = $records["Onhand08"];
				$instance->onhand09 = $records["Onhand09"];
				$instance->onhand10 = $records["Onhand10"];
				$instance->onhand11 = $records["Onhand11"];
				$instance->onhand12 = $records["Onhand12"];
				$instance->onhand13 = $records["Onhand13"];
				$instance->onhand14 = $records["Onhand14"];
				$instance->onhand15 = $records["Onhand15"];
				$instance->onhand16 = $records["Onhand16"];
				$instance->onhand17 = $records["Onhand17"];
				$instance->onhand18 = $records["Onhand18"];
				$instance->onhand19 = $records["Onhand19"];
				$instance->onhand20 = $records["Onhand20"];
				$instance->onhand21 = $records["Onhand21"];
				$instance->onhand22 = $records["Onhand22"];
				$instance->onhand23 = $records["Onhand23"];
				$instance->onhand24 = $records["Onhand24"];
				$instance->onhand25 = $records["Onhand25"];
				$instance->onhand26 = $records["Onhand26"];
				$instance->onhand27 = $records["Onhand27"];
				$instance->onhand28 = $records["Onhand28"];
				$instance->onhand29 = $records["Onhand29"];
				$instance->onhand30 = $records["Onhand30"];
				$instance->onhand31 = $records["Onhand31"];
				$instance->cases = $records["Cases"];
				$instance->weight = $records["Weight"];
				$instance->splitqty = $records["SplitQty"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [AP], [WH], [Onhand], [SalesOrder], [PurOrder], [Laybye], [Dispatch], [Consignment], [Damaged], [Unpacked], [Intransit], [LastSupplier], [LastQuantity], [LastCostExcl], [LastInvoiceNo], [LastGRVNo], [BinLoc1], [BinLoc2], [BinLoc3], [BinLoc4], [BinLoc5], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Onhand01], [Onhand02], [Onhand03], [Onhand04], [Onhand05], [Onhand06], [Onhand07], [Onhand08], [Onhand09], [Onhand10], [Onhand11], [Onhand12], [Onhand13], [Onhand14], [Onhand15], [Onhand16], [Onhand17], [Onhand18], [Onhand19], [Onhand20], [Onhand21], [Onhand22], [Onhand23], [Onhand24], [Onhand25], [Onhand26], [Onhand27], [Onhand28], [Onhand29], [Onhand30], [Onhand31], [Cases], [Weight], [SplitQty] FROM [STKBalHist]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->ap = $records["AP"];
				$instance->wh = $records["WH"];
				$instance->onhand = $records["Onhand"];
				$instance->salesorder = $records["SalesOrder"];
				$instance->purorder = $records["PurOrder"];
				$instance->laybye = $records["Laybye"];
				$instance->dispatch = $records["Dispatch"];
				$instance->consignment = $records["Consignment"];
				$instance->damaged = $records["Damaged"];
				$instance->unpacked = $records["Unpacked"];
				$instance->intransit = $records["Intransit"];
				$instance->lastsupplier = $records["LastSupplier"];
				$instance->lastquantity = $records["LastQuantity"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastinvoiceno = $records["LastInvoiceNo"];
				$instance->lastgrvno = $records["LastGRVNo"];
				$instance->binloc1 = $records["BinLoc1"];
				$instance->binloc2 = $records["BinLoc2"];
				$instance->binloc3 = $records["BinLoc3"];
				$instance->binloc4 = $records["BinLoc4"];
				$instance->binloc5 = $records["BinLoc5"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->onhand01 = $records["Onhand01"];
				$instance->onhand02 = $records["Onhand02"];
				$instance->onhand03 = $records["Onhand03"];
				$instance->onhand04 = $records["Onhand04"];
				$instance->onhand05 = $records["Onhand05"];
				$instance->onhand06 = $records["Onhand06"];
				$instance->onhand07 = $records["Onhand07"];
				$instance->onhand08 = $records["Onhand08"];
				$instance->onhand09 = $records["Onhand09"];
				$instance->onhand10 = $records["Onhand10"];
				$instance->onhand11 = $records["Onhand11"];
				$instance->onhand12 = $records["Onhand12"];
				$instance->onhand13 = $records["Onhand13"];
				$instance->onhand14 = $records["Onhand14"];
				$instance->onhand15 = $records["Onhand15"];
				$instance->onhand16 = $records["Onhand16"];
				$instance->onhand17 = $records["Onhand17"];
				$instance->onhand18 = $records["Onhand18"];
				$instance->onhand19 = $records["Onhand19"];
				$instance->onhand20 = $records["Onhand20"];
				$instance->onhand21 = $records["Onhand21"];
				$instance->onhand22 = $records["Onhand22"];
				$instance->onhand23 = $records["Onhand23"];
				$instance->onhand24 = $records["Onhand24"];
				$instance->onhand25 = $records["Onhand25"];
				$instance->onhand26 = $records["Onhand26"];
				$instance->onhand27 = $records["Onhand27"];
				$instance->onhand28 = $records["Onhand28"];
				$instance->onhand29 = $records["Onhand29"];
				$instance->onhand30 = $records["Onhand30"];
				$instance->onhand31 = $records["Onhand31"];
				$instance->cases = $records["Cases"];
				$instance->weight = $records["Weight"];
				$instance->splitqty = $records["SplitQty"];
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