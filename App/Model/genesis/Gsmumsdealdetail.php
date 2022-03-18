<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	GSMUmsDealDetail

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar DealCode" of type [nvarchar]
	"public nvarchar SupplierID" of type [nvarchar]
	"public nvarchar ProductID" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar PackSize" of type [nvarchar]
	"public nvarchar DealPackBarcode" of type [nvarchar]
	"public float DealPriceExcl" of type [float]
	"public float CashDiscount" of type [float]
	"public float InvPriceExcl" of type [float]
	"public float InvPriceIncl" of type [float]
	"public nvarchar Account" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmumsdealdetail {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $dealcode ;	
	public $supplierid ;	
	public $productid ;	
	public $description ;	
	public $packsize ;	
	public $dealpackbarcode ;	
	public $dealpriceexcl ;	
	public $cashdiscount ;	
	public $invpriceexcl ;	
	public $invpriceincl ;	
	public $account ;	
	
	
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
			$query = " SELECT RecID, [DealCode], [SupplierID], [ProductID], [Description], [PackSize], [DealPackBarcode], [DealPriceExcl], [CashDiscount], [InvPriceExcl], [InvPriceIncl], [Account] FROM [GSMUmsDealDetail]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->dealcode = $records["DealCode"];
				$instance->supplierid = $records["SupplierID"];
				$instance->productid = $records["ProductID"];
				$instance->description = $records["Description"];
				$instance->packsize = $records["PackSize"];
				$instance->dealpackbarcode = $records["DealPackBarcode"];
				$instance->dealpriceexcl = $records["DealPriceExcl"];
				$instance->cashdiscount = $records["CashDiscount"];
				$instance->invpriceexcl = $records["InvPriceExcl"];
				$instance->invpriceincl = $records["InvPriceIncl"];
				$instance->account = $records["Account"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using DealCode
	*/
	public static function ini_DealCode($dealcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [DealCode], [SupplierID], [ProductID], [Description], [PackSize], [DealPackBarcode], [DealPriceExcl], [CashDiscount], [InvPriceExcl], [InvPriceIncl], [Account] FROM [GSMUmsDealDetail]  WHERE [DealCode]=:dealcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":dealcode", $dealcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->dealcode = $records["DealCode"];
				$instance->supplierid = $records["SupplierID"];
				$instance->productid = $records["ProductID"];
				$instance->description = $records["Description"];
				$instance->packsize = $records["PackSize"];
				$instance->dealpackbarcode = $records["DealPackBarcode"];
				$instance->dealpriceexcl = $records["DealPriceExcl"];
				$instance->cashdiscount = $records["CashDiscount"];
				$instance->invpriceexcl = $records["InvPriceExcl"];
				$instance->invpriceincl = $records["InvPriceIncl"];
				$instance->account = $records["Account"];
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