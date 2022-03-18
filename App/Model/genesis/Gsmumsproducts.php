<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	GSMUmsProducts

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar ProductID" of type [nvarchar]
	"public nvarchar SupplierID" of type [nvarchar]
	"public nvarchar Title" of type [nvarchar]
	"public int ShrinksPerCase" of type [int]
	"public int Pack" of type [int]
	"public float Size" of type [float]
	"public nvarchar SKUCase" of type [nvarchar]
	"public nvarchar SKUCaseBarcode" of type [nvarchar]
	"public nvarchar SKUShrink" of type [nvarchar]
	"public nvarchar SKUShrinkBarcode" of type [nvarchar]
	"public nvarchar SKUUnits" of type [nvarchar]
	"public nvarchar SKUUnitsBarcode" of type [nvarchar]
	"public nvarchar ApplyVAT" of type [nvarchar]
	"public nvarchar CaseStockCode" of type [nvarchar]
	"public nvarchar CaseLinkCode" of type [nvarchar]
	"public nvarchar ShrinkStockCode" of type [nvarchar]
	"public nvarchar ShrinkLinkCode" of type [nvarchar]
	"public nvarchar UnitsStockCode" of type [nvarchar]
	"public nvarchar UnitsLinkCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmumsproducts {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $productid ;	
	public $supplierid ;	
	public $title ;	
	public $shrinkspercase ;	
	public $pack ;	
	public $size ;	
	public $skucase ;	
	public $skucasebarcode ;	
	public $skushrink ;	
	public $skushrinkbarcode ;	
	public $skuunits ;	
	public $skuunitsbarcode ;	
	public $applyvat ;	
	public $casestockcode ;	
	public $caselinkcode ;	
	public $shrinkstockcode ;	
	public $shrinklinkcode ;	
	public $unitsstockcode ;	
	public $unitslinkcode ;	
	
	
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
			$query = " SELECT RecID, [ProductID], [SupplierID], [Title], [ShrinksPerCase], [Pack], [Size], [SKUCase], [SKUCaseBarcode], [SKUShrink], [SKUShrinkBarcode], [SKUUnits], [SKUUnitsBarcode], [ApplyVAT], [CaseStockCode], [CaseLinkCode], [ShrinkStockCode], [ShrinkLinkCode], [UnitsStockCode], [UnitsLinkCode] FROM [GSMUmsProducts]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->productid = $records["ProductID"];
				$instance->supplierid = $records["SupplierID"];
				$instance->title = $records["Title"];
				$instance->shrinkspercase = $records["ShrinksPerCase"];
				$instance->pack = $records["Pack"];
				$instance->size = $records["Size"];
				$instance->skucase = $records["SKUCase"];
				$instance->skucasebarcode = $records["SKUCaseBarcode"];
				$instance->skushrink = $records["SKUShrink"];
				$instance->skushrinkbarcode = $records["SKUShrinkBarcode"];
				$instance->skuunits = $records["SKUUnits"];
				$instance->skuunitsbarcode = $records["SKUUnitsBarcode"];
				$instance->applyvat = $records["ApplyVAT"];
				$instance->casestockcode = $records["CaseStockCode"];
				$instance->caselinkcode = $records["CaseLinkCode"];
				$instance->shrinkstockcode = $records["ShrinkStockCode"];
				$instance->shrinklinkcode = $records["ShrinkLinkCode"];
				$instance->unitsstockcode = $records["UnitsStockCode"];
				$instance->unitslinkcode = $records["UnitsLinkCode"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using SKUCaseBarcode
	*/
	public static function ini_SKUCaseBarcode($skucasebarcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [ProductID], [SupplierID], [Title], [ShrinksPerCase], [Pack], [Size], [SKUCase], [SKUCaseBarcode], [SKUShrink], [SKUShrinkBarcode], [SKUUnits], [SKUUnitsBarcode], [ApplyVAT], [CaseStockCode], [CaseLinkCode], [ShrinkStockCode], [ShrinkLinkCode], [UnitsStockCode], [UnitsLinkCode] FROM [GSMUmsProducts]  WHERE [SKUCaseBarcode]=:skucasebarcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":skucasebarcode", $skucasebarcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->productid = $records["ProductID"];
				$instance->supplierid = $records["SupplierID"];
				$instance->title = $records["Title"];
				$instance->shrinkspercase = $records["ShrinksPerCase"];
				$instance->pack = $records["Pack"];
				$instance->size = $records["Size"];
				$instance->skucase = $records["SKUCase"];
				$instance->skucasebarcode = $records["SKUCaseBarcode"];
				$instance->skushrink = $records["SKUShrink"];
				$instance->skushrinkbarcode = $records["SKUShrinkBarcode"];
				$instance->skuunits = $records["SKUUnits"];
				$instance->skuunitsbarcode = $records["SKUUnitsBarcode"];
				$instance->applyvat = $records["ApplyVAT"];
				$instance->casestockcode = $records["CaseStockCode"];
				$instance->caselinkcode = $records["CaseLinkCode"];
				$instance->shrinkstockcode = $records["ShrinkStockCode"];
				$instance->shrinklinkcode = $records["ShrinkLinkCode"];
				$instance->unitsstockcode = $records["UnitsStockCode"];
				$instance->unitslinkcode = $records["UnitsLinkCode"];
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
			$res = $this->title;
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