<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	STKSubMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar SubCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public nvarchar SuppCode" of type [nvarchar]
	"public nvarchar BarCode" of type [nvarchar]
	"public nvarchar Variant" of type [nvarchar]
	"public int Units" of type [int]
	"public int Singles" of type [int]
	"public int PackCase" of type [int]
	"public int CasePall" of type [int]
	"public nvarchar PackSize" of type [nvarchar]
	"public nvarchar Binlocation" of type [nvarchar]
	"public float Weight" of type [float]
	"public float ItemLength" of type [float]
	"public float ItemBreadth" of type [float]
	"public float ItemHeight" of type [float]
	"public nvarchar PurchaseItem" of type [nvarchar]
	"public nvarchar SaleItem" of type [nvarchar]
	"public nvarchar InventoryItem" of type [nvarchar]
	"public nvarchar PrintLabel" of type [nvarchar]
	"public float MiscGP" of type [float]
	"public nvarchar Status" of type [nvarchar]
	"public float LastCostExcl" of type [float]
	"public float LastCostIncl" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public float BuyCostExcl" of type [float]
	"public float BuyCostIncl" of type [float]
	"public float BaseCostExcl" of type [float]
	"public float BaseCostIncl" of type [float]
	"public float RebateAvgExcl" of type [float]
	"public float RebateLastExcl" of type [float]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar Version" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stksubmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $subcode ;	
	public $description1 ;	
	public $description2 ;	
	public $suppcode ;	
	public $barcode ;	
	public $variant ;	
	public $units ;	
	public $singles ;	
	public $packcase ;	
	public $casepall ;	
	public $packsize ;	
	public $binlocation ;	
	public $weight ;	
	public $itemlength ;	
	public $itembreadth ;	
	public $itemheight ;	
	public $purchaseitem ;	
	public $saleitem ;	
	public $inventoryitem ;	
	public $printlabel ;	
	public $miscgp ;	
	public $status ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $buycostexcl ;	
	public $buycostincl ;	
	public $basecostexcl ;	
	public $basecostincl ;	
	public $rebateavgexcl ;	
	public $rebatelastexcl ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $version ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [SubCode], [Description1], [Description2], [SuppCode], [BarCode], [Variant], [Units], [Singles], [PackCase], [CasePall], [PackSize], [Binlocation], [Weight], [ItemLength], [ItemBreadth], [ItemHeight], [PurchaseItem], [SaleItem], [InventoryItem], [PrintLabel], [MiscGP], [Status], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [BaseCostExcl], [BaseCostIncl], [RebateAvgExcl], [RebateLastExcl], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Version] FROM [STKSubMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->subcode = $records["SubCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->suppcode = $records["SuppCode"];
				$instance->barcode = $records["BarCode"];
				$instance->variant = $records["Variant"];
				$instance->units = $records["Units"];
				$instance->singles = $records["Singles"];
				$instance->packcase = $records["PackCase"];
				$instance->casepall = $records["CasePall"];
				$instance->packsize = $records["PackSize"];
				$instance->binlocation = $records["Binlocation"];
				$instance->weight = $records["Weight"];
				$instance->itemlength = $records["ItemLength"];
				$instance->itembreadth = $records["ItemBreadth"];
				$instance->itemheight = $records["ItemHeight"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->saleitem = $records["SaleItem"];
				$instance->inventoryitem = $records["InventoryItem"];
				$instance->printlabel = $records["PrintLabel"];
				$instance->miscgp = $records["MiscGP"];
				$instance->status = $records["Status"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->basecostexcl = $records["BaseCostExcl"];
				$instance->basecostincl = $records["BaseCostIncl"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
				$instance->rebatelastexcl = $records["RebateLastExcl"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->version = $records["Version"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [SubCode], [Description1], [Description2], [SuppCode], [BarCode], [Variant], [Units], [Singles], [PackCase], [CasePall], [PackSize], [Binlocation], [Weight], [ItemLength], [ItemBreadth], [ItemHeight], [PurchaseItem], [SaleItem], [InventoryItem], [PrintLabel], [MiscGP], [Status], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [BaseCostExcl], [BaseCostIncl], [RebateAvgExcl], [RebateLastExcl], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Version] FROM [STKSubMaster]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->subcode = $records["SubCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->suppcode = $records["SuppCode"];
				$instance->barcode = $records["BarCode"];
				$instance->variant = $records["Variant"];
				$instance->units = $records["Units"];
				$instance->singles = $records["Singles"];
				$instance->packcase = $records["PackCase"];
				$instance->casepall = $records["CasePall"];
				$instance->packsize = $records["PackSize"];
				$instance->binlocation = $records["Binlocation"];
				$instance->weight = $records["Weight"];
				$instance->itemlength = $records["ItemLength"];
				$instance->itembreadth = $records["ItemBreadth"];
				$instance->itemheight = $records["ItemHeight"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->saleitem = $records["SaleItem"];
				$instance->inventoryitem = $records["InventoryItem"];
				$instance->printlabel = $records["PrintLabel"];
				$instance->miscgp = $records["MiscGP"];
				$instance->status = $records["Status"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->basecostexcl = $records["BaseCostExcl"];
				$instance->basecostincl = $records["BaseCostIncl"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
				$instance->rebatelastexcl = $records["RebateLastExcl"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->version = $records["Version"];
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