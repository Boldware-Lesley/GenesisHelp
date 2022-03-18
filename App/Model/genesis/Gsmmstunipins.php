<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	GSMMstUniPins

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar SupplierCode" of type [nvarchar]
	"public nvarchar Supplier" of type [nvarchar]
	"public float Denomination" of type [float]
	"public nvarchar UniCodeType" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public image ImageData" of type [image]
*/
namespace genesis;


use PDO;

class Gsmmstunipins {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $stockcode ;	
	public $suppliercode ;	
	public $supplier ;	
	public $denomination ;	
	public $unicodetype ;	
	public $status ;	
	public $imagedata ;	
	
	
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
			$query = " SELECT RecID, [StockCode], [SupplierCode], [Supplier], [Denomination], [UniCodeType], [Status], [ImageData] FROM [GSMMstUniPins]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->stockcode = $records["StockCode"];
				$instance->suppliercode = $records["SupplierCode"];
				$instance->supplier = $records["Supplier"];
				$instance->denomination = $records["Denomination"];
				$instance->unicodetype = $records["UniCodeType"];
				$instance->status = $records["Status"];
				$instance->imagedata = $records["ImageData"];
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
			$query = " SELECT RecID, [StockCode], [SupplierCode], [Supplier], [Denomination], [UniCodeType], [Status], [ImageData] FROM [GSMMstUniPins]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->stockcode = $records["StockCode"];
				$instance->suppliercode = $records["SupplierCode"];
				$instance->supplier = $records["Supplier"];
				$instance->denomination = $records["Denomination"];
				$instance->unicodetype = $records["UniCodeType"];
				$instance->status = $records["Status"];
				$instance->imagedata = $records["ImageData"];
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