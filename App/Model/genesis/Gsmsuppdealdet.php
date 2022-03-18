<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	GSMSuppDealDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar Account" of type [nvarchar]
	"public int DealNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
	"public int Units" of type [int]
	"public nvarchar PackSize" of type [nvarchar]
	"public nvarchar BarCode" of type [nvarchar]
	"public nvarchar SuppCode" of type [nvarchar]
	"public float CostExcl" of type [float]
	"public float CostIncl" of type [float]
	"public nvarchar FreeStockCode" of type [nvarchar]
	"public nvarchar FreeLinkCode" of type [nvarchar]
	"public nvarchar FreeDescription1" of type [nvarchar]
	"public nvarchar FreeDescription2" of type [nvarchar]
	"public float FreeQuantity" of type [float]
	"public float FreePerQty" of type [float]
	"public float MinBuy" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmsuppdealdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $account ;	
	public $dealno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $vatcode ;	
	public $units ;	
	public $packsize ;	
	public $barcode ;	
	public $suppcode ;	
	public $costexcl ;	
	public $costincl ;	
	public $freestockcode ;	
	public $freelinkcode ;	
	public $freedescription1 ;	
	public $freedescription2 ;	
	public $freequantity ;	
	public $freeperqty ;	
	public $minbuy ;	
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
			$query = " SELECT RecID, [Account], [DealNo], [StockCode], [LinkCode], [Description1], [Description2], [VATCode], [Units], [PackSize], [BarCode], [SuppCode], [CostExcl], [CostIncl], [FreeStockCode], [FreeLinkCode], [FreeDescription1], [FreeDescription2], [FreeQuantity], [FreePerQty], [MinBuy], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMSuppDealDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->account = $records["Account"];
				$instance->dealno = $records["DealNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->vatcode = $records["VATCode"];
				$instance->units = $records["Units"];
				$instance->packsize = $records["PackSize"];
				$instance->barcode = $records["BarCode"];
				$instance->suppcode = $records["SuppCode"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->freestockcode = $records["FreeStockCode"];
				$instance->freelinkcode = $records["FreeLinkCode"];
				$instance->freedescription1 = $records["FreeDescription1"];
				$instance->freedescription2 = $records["FreeDescription2"];
				$instance->freequantity = $records["FreeQuantity"];
				$instance->freeperqty = $records["FreePerQty"];
				$instance->minbuy = $records["MinBuy"];
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
			$query = " SELECT RecID, [Account], [DealNo], [StockCode], [LinkCode], [Description1], [Description2], [VATCode], [Units], [PackSize], [BarCode], [SuppCode], [CostExcl], [CostIncl], [FreeStockCode], [FreeLinkCode], [FreeDescription1], [FreeDescription2], [FreeQuantity], [FreePerQty], [MinBuy], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMSuppDealDet]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->account = $records["Account"];
				$instance->dealno = $records["DealNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->vatcode = $records["VATCode"];
				$instance->units = $records["Units"];
				$instance->packsize = $records["PackSize"];
				$instance->barcode = $records["BarCode"];
				$instance->suppcode = $records["SuppCode"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->freestockcode = $records["FreeStockCode"];
				$instance->freelinkcode = $records["FreeLinkCode"];
				$instance->freedescription1 = $records["FreeDescription1"];
				$instance->freedescription2 = $records["FreeDescription2"];
				$instance->freequantity = $records["FreeQuantity"];
				$instance->freeperqty = $records["FreePerQty"];
				$instance->minbuy = $records["MinBuy"];
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