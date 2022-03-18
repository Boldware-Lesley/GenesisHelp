<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	CDB_QlikSTOCK

[@Descriptions]
Class is using the following global variables:
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockType" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar DeptCode" of type [nvarchar]
	"public nvarchar SubDept" of type [nvarchar]
	"public nvarchar Category1" of type [nvarchar]
	"public nvarchar Category2" of type [nvarchar]
	"public nvarchar Category3" of type [nvarchar]
	"public nvarchar Category4" of type [nvarchar]
	"public nvarchar Supplier" of type [nvarchar]
	"public nvarchar SuppCode" of type [nvarchar]
	"public nvarchar BarCode" of type [nvarchar]
	"public nvarchar Variant" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public int Units" of type [int]
	"public int Singles" of type [int]
	"public int PackCase" of type [int]
	"public int CasePall" of type [int]
	"public float Weight" of type [float]
	"public nvarchar PurchaseItem" of type [nvarchar]
	"public float LastCostExcl" of type [float]
	"public float LastCostIncl" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public float BuyCostExcl" of type [float]
	"public float BuyCostIncl" of type [float]
	"public float RebateAvgExcl" of type [float]
	"public float RebateLastExcl" of type [float]
	"public nvarchar PriceCode" of type [nvarchar]
	"public nvarchar PriceDescription" of type [nvarchar]
	"public float Incl" of type [float]
	"public float Excl" of type [float]
	"public float GP" of type [float]
	"public float DiscP" of type [float]
	"public float DiscV" of type [float]
	"public float MaxDiscP" of type [float]
	"public float MaxDiscV" of type [float]
	"public float MinGP" of type [float]
	"public float Onhand" of type [float]
	"public float SalesOrder" of type [float]
	"public float PurOrder" of type [float]
	"public float Laybye" of type [float]
	"public float Dispatch" of type [float]
	"public float Consignment" of type [float]
	"public float Unpacked" of type [float]
	"public float Intransit" of type [float]
	"public nvarchar LastSupplier" of type [nvarchar]
	"public float LastQuantity" of type [float]
	"public float BalLastCostExcl" of type [float]
	"public nvarchar LastInvoiceNo" of type [nvarchar]
	"public int LastGRVNo" of type [int]
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
*/
namespace genesis;


use PDO;

class Cdb_qlikstock {
	
	/*BEGIN <<Private Variables>> */
	
	public $co ;	
	public $branch ;	
	public $stocktype ;	
	public $stockcode ;	
	public $description1 ;	
	public $vatcode ;	
	public $linkcode ;	
	public $deptcode ;	
	public $subdept ;	
	public $category1 ;	
	public $category2 ;	
	public $category3 ;	
	public $category4 ;	
	public $supplier ;	
	public $suppcode ;	
	public $barcode ;	
	public $variant ;	
	public $description2 ;	
	public $units ;	
	public $singles ;	
	public $packcase ;	
	public $casepall ;	
	public $weight ;	
	public $purchaseitem ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $buycostexcl ;	
	public $buycostincl ;	
	public $rebateavgexcl ;	
	public $rebatelastexcl ;	
	public $pricecode ;	
	public $pricedescription ;	
	public $incl ;	
	public $excl ;	
	public $gp ;	
	public $discp ;	
	public $discv ;	
	public $maxdiscp ;	
	public $maxdiscv ;	
	public $mingp ;	
	public $onhand ;	
	public $salesorder ;	
	public $purorder ;	
	public $laybye ;	
	public $dispatch ;	
	public $consignment ;	
	public $unpacked ;	
	public $intransit ;	
	public $lastsupplier ;	
	public $lastquantity ;	
	public $ballastcostexcl ;	
	public $lastinvoiceno ;	
	public $lastgrvno ;	
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
			$query = " SELECT CO, [Branch], [StockType], [StockCode], [Description1], [VATCode], [LinkCode], [DeptCode], [SubDept], [Category1], [Category2], [Category3], [Category4], [Supplier], [SuppCode], [BarCode], [Variant], [Description2], [Units], [Singles], [PackCase], [CasePall], [Weight], [PurchaseItem], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [RebateAvgExcl], [RebateLastExcl], [PriceCode], [PriceDescription], [Incl], [Excl], [GP], [DiscP], [DiscV], [MaxDiscP], [MaxDiscV], [MinGP], [Onhand], [SalesOrder], [PurOrder], [Laybye], [Dispatch], [Consignment], [Unpacked], [Intransit], [LastSupplier], [LastQuantity], [BalLastCostExcl], [LastInvoiceNo], [LastGRVNo], [Onhand01], [Onhand02], [Onhand03], [Onhand04], [Onhand05], [Onhand06], [Onhand07], [Onhand08], [Onhand09], [Onhand10], [Onhand11], [Onhand12], [Onhand13], [Onhand14], [Onhand15], [Onhand16], [Onhand17], [Onhand18], [Onhand19], [Onhand20], [Onhand21], [Onhand22], [Onhand23], [Onhand24], [Onhand25], [Onhand26], [Onhand27], [Onhand28], [Onhand29], [Onhand30], [Onhand31] FROM [CDB_QlikSTOCK]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stocktype = $records["StockType"];
				$instance->stockcode = $records["StockCode"];
				$instance->description1 = $records["Description1"];
				$instance->vatcode = $records["VATCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->deptcode = $records["DeptCode"];
				$instance->subdept = $records["SubDept"];
				$instance->category1 = $records["Category1"];
				$instance->category2 = $records["Category2"];
				$instance->category3 = $records["Category3"];
				$instance->category4 = $records["Category4"];
				$instance->supplier = $records["Supplier"];
				$instance->suppcode = $records["SuppCode"];
				$instance->barcode = $records["BarCode"];
				$instance->variant = $records["Variant"];
				$instance->description2 = $records["Description2"];
				$instance->units = $records["Units"];
				$instance->singles = $records["Singles"];
				$instance->packcase = $records["PackCase"];
				$instance->casepall = $records["CasePall"];
				$instance->weight = $records["Weight"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
				$instance->rebatelastexcl = $records["RebateLastExcl"];
				$instance->pricecode = $records["PriceCode"];
				$instance->pricedescription = $records["PriceDescription"];
				$instance->incl = $records["Incl"];
				$instance->excl = $records["Excl"];
				$instance->gp = $records["GP"];
				$instance->discp = $records["DiscP"];
				$instance->discv = $records["DiscV"];
				$instance->maxdiscp = $records["MaxDiscP"];
				$instance->maxdiscv = $records["MaxDiscV"];
				$instance->mingp = $records["MinGP"];
				$instance->onhand = $records["Onhand"];
				$instance->salesorder = $records["SalesOrder"];
				$instance->purorder = $records["PurOrder"];
				$instance->laybye = $records["Laybye"];
				$instance->dispatch = $records["Dispatch"];
				$instance->consignment = $records["Consignment"];
				$instance->unpacked = $records["Unpacked"];
				$instance->intransit = $records["Intransit"];
				$instance->lastsupplier = $records["LastSupplier"];
				$instance->lastquantity = $records["LastQuantity"];
				$instance->ballastcostexcl = $records["BalLastCostExcl"];
				$instance->lastinvoiceno = $records["LastInvoiceNo"];
				$instance->lastgrvno = $records["LastGRVNo"];
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
			$query = " SELECT CO, [Branch], [StockType], [StockCode], [Description1], [VATCode], [LinkCode], [DeptCode], [SubDept], [Category1], [Category2], [Category3], [Category4], [Supplier], [SuppCode], [BarCode], [Variant], [Description2], [Units], [Singles], [PackCase], [CasePall], [Weight], [PurchaseItem], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [RebateAvgExcl], [RebateLastExcl], [PriceCode], [PriceDescription], [Incl], [Excl], [GP], [DiscP], [DiscV], [MaxDiscP], [MaxDiscV], [MinGP], [Onhand], [SalesOrder], [PurOrder], [Laybye], [Dispatch], [Consignment], [Unpacked], [Intransit], [LastSupplier], [LastQuantity], [BalLastCostExcl], [LastInvoiceNo], [LastGRVNo], [Onhand01], [Onhand02], [Onhand03], [Onhand04], [Onhand05], [Onhand06], [Onhand07], [Onhand08], [Onhand09], [Onhand10], [Onhand11], [Onhand12], [Onhand13], [Onhand14], [Onhand15], [Onhand16], [Onhand17], [Onhand18], [Onhand19], [Onhand20], [Onhand21], [Onhand22], [Onhand23], [Onhand24], [Onhand25], [Onhand26], [Onhand27], [Onhand28], [Onhand29], [Onhand30], [Onhand31] FROM [CDB_QlikSTOCK]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stocktype = $records["StockType"];
				$instance->stockcode = $records["StockCode"];
				$instance->description1 = $records["Description1"];
				$instance->vatcode = $records["VATCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->deptcode = $records["DeptCode"];
				$instance->subdept = $records["SubDept"];
				$instance->category1 = $records["Category1"];
				$instance->category2 = $records["Category2"];
				$instance->category3 = $records["Category3"];
				$instance->category4 = $records["Category4"];
				$instance->supplier = $records["Supplier"];
				$instance->suppcode = $records["SuppCode"];
				$instance->barcode = $records["BarCode"];
				$instance->variant = $records["Variant"];
				$instance->description2 = $records["Description2"];
				$instance->units = $records["Units"];
				$instance->singles = $records["Singles"];
				$instance->packcase = $records["PackCase"];
				$instance->casepall = $records["CasePall"];
				$instance->weight = $records["Weight"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
				$instance->rebatelastexcl = $records["RebateLastExcl"];
				$instance->pricecode = $records["PriceCode"];
				$instance->pricedescription = $records["PriceDescription"];
				$instance->incl = $records["Incl"];
				$instance->excl = $records["Excl"];
				$instance->gp = $records["GP"];
				$instance->discp = $records["DiscP"];
				$instance->discv = $records["DiscV"];
				$instance->maxdiscp = $records["MaxDiscP"];
				$instance->maxdiscv = $records["MaxDiscV"];
				$instance->mingp = $records["MinGP"];
				$instance->onhand = $records["Onhand"];
				$instance->salesorder = $records["SalesOrder"];
				$instance->purorder = $records["PurOrder"];
				$instance->laybye = $records["Laybye"];
				$instance->dispatch = $records["Dispatch"];
				$instance->consignment = $records["Consignment"];
				$instance->unpacked = $records["Unpacked"];
				$instance->intransit = $records["Intransit"];
				$instance->lastsupplier = $records["LastSupplier"];
				$instance->lastquantity = $records["LastQuantity"];
				$instance->ballastcostexcl = $records["BalLastCostExcl"];
				$instance->lastinvoiceno = $records["LastInvoiceNo"];
				$instance->lastgrvno = $records["LastGRVNo"];
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