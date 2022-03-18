<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	POSReturnsDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int RetnNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public float Quantity" of type [float]
	"public float Price" of type [float]
	"public float PriceExcl" of type [float]
	"public float PriceIncl" of type [float]
	"public float VATAmount" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public nvarchar VATInd" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
	"public float VATRate" of type [float]
	"public float SlipQty" of type [float]
	"public nvarchar StockType" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Comment1" of type [nvarchar]
	"public nvarchar Comment2" of type [nvarchar]
	"public nvarchar Comment3" of type [nvarchar]
	"public nvarchar Comment4" of type [nvarchar]
	"public nvarchar Comment5" of type [nvarchar]
	"public float LinkQty" of type [float]
	"public int Units" of type [int]
	"public nvarchar VoucherDiscount" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posreturnsdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $retnno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $quantity ;	
	public $price ;	
	public $priceexcl ;	
	public $priceincl ;	
	public $vatamount ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $vatind ;	
	public $vatcode ;	
	public $vatrate ;	
	public $slipqty ;	
	public $stocktype ;	
	public $status ;	
	public $comment1 ;	
	public $comment2 ;	
	public $comment3 ;	
	public $comment4 ;	
	public $comment5 ;	
	public $linkqty ;	
	public $units ;	
	public $voucherdiscount ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [RetnNo], [StockCode], [LinkCode], [Description1], [Description2], [Quantity], [Price], [PriceExcl], [PriceIncl], [VATAmount], [TotalExcl], [TotalIncl], [VATInd], [VATCode], [VATRate], [SlipQty], [StockType], [Status], [Comment1], [Comment2], [Comment3], [Comment4], [Comment5], [LinkQty], [Units], [VoucherDiscount] FROM [POSReturnsDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->retnno = $records["RetnNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->quantity = $records["Quantity"];
				$instance->price = $records["Price"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->vatamount = $records["VATAmount"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->vatind = $records["VATInd"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->slipqty = $records["SlipQty"];
				$instance->stocktype = $records["StockType"];
				$instance->status = $records["Status"];
				$instance->comment1 = $records["Comment1"];
				$instance->comment2 = $records["Comment2"];
				$instance->comment3 = $records["Comment3"];
				$instance->comment4 = $records["Comment4"];
				$instance->comment5 = $records["Comment5"];
				$instance->linkqty = $records["LinkQty"];
				$instance->units = $records["Units"];
				$instance->voucherdiscount = $records["VoucherDiscount"];
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
			$query = " SELECT RecID, [CO], [Branch], [RetnNo], [StockCode], [LinkCode], [Description1], [Description2], [Quantity], [Price], [PriceExcl], [PriceIncl], [VATAmount], [TotalExcl], [TotalIncl], [VATInd], [VATCode], [VATRate], [SlipQty], [StockType], [Status], [Comment1], [Comment2], [Comment3], [Comment4], [Comment5], [LinkQty], [Units], [VoucherDiscount] FROM [POSReturnsDet]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->retnno = $records["RetnNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->quantity = $records["Quantity"];
				$instance->price = $records["Price"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->vatamount = $records["VATAmount"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->vatind = $records["VATInd"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->slipqty = $records["SlipQty"];
				$instance->stocktype = $records["StockType"];
				$instance->status = $records["Status"];
				$instance->comment1 = $records["Comment1"];
				$instance->comment2 = $records["Comment2"];
				$instance->comment3 = $records["Comment3"];
				$instance->comment4 = $records["Comment4"];
				$instance->comment5 = $records["Comment5"];
				$instance->linkqty = $records["LinkQty"];
				$instance->units = $records["Units"];
				$instance->voucherdiscount = $records["VoucherDiscount"];
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