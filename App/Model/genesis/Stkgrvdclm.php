<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	STKGrvDClm

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public int LINENO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public nvarchar DESCRIPTION2" of type [nvarchar]
	"public nvarchar SUPPCODE" of type [nvarchar]
	"public nvarchar BARCODE" of type [nvarchar]
	"public nvarchar CLAIMCODE" of type [nvarchar]
	"public nvarchar CLAIMDESC" of type [nvarchar]
	"public float QUANTITY" of type [float]
	"public float PRICE" of type [float]
	"public float PRICE1" of type [float]
	"public float PRICE2" of type [float]
	"public float NETPRICE" of type [float]
	"public float DISCOUNT" of type [float]
	"public float TOTAL" of type [float]
	"public float TAXAMOUNT" of type [float]
	"public float TAXRATE" of type [float]
	"public nvarchar GLACNO" of type [nvarchar]
	"public nvarchar VATCODE" of type [nvarchar]
	"public int Units" of type [int]
	"public float LinkQty" of type [float]
	"public int GLAccNo" of type [int]
	"public int GLSubAccNo" of type [int]
*/
namespace genesis;


use PDO;

class Stkgrvdclm {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $grvno ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $suppcode ;	
	public $barcode ;	
	public $claimcode ;	
	public $claimdesc ;	
	public $quantity ;	
	public $price ;	
	public $price1 ;	
	public $price2 ;	
	public $netprice ;	
	public $discount ;	
	public $total ;	
	public $taxamount ;	
	public $taxrate ;	
	public $glacno ;	
	public $vatcode ;	
	public $units ;	
	public $linkqty ;	
	public $glaccno ;	
	public $glsubaccno ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [SUPPCODE], [BARCODE], [CLAIMCODE], [CLAIMDESC], [QUANTITY], [PRICE], [PRICE1], [PRICE2], [NETPRICE], [DISCOUNT], [TOTAL], [TAXAMOUNT], [TAXRATE], [GLACNO], [VATCODE], [Units], [LinkQty], [GLAccNo], [GLSubAccNo] FROM [STKGrvDClm]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->barcode = $records["BARCODE"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->claimdesc = $records["CLAIMDESC"];
				$instance->quantity = $records["QUANTITY"];
				$instance->price = $records["PRICE"];
				$instance->price1 = $records["PRICE1"];
				$instance->price2 = $records["PRICE2"];
				$instance->netprice = $records["NETPRICE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->total = $records["TOTAL"];
				$instance->taxamount = $records["TAXAMOUNT"];
				$instance->taxrate = $records["TAXRATE"];
				$instance->glacno = $records["GLACNO"];
				$instance->vatcode = $records["VATCODE"];
				$instance->units = $records["Units"];
				$instance->linkqty = $records["LinkQty"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using STOCKCODE
	*/
	public static function ini_STOCKCODE($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [SUPPCODE], [BARCODE], [CLAIMCODE], [CLAIMDESC], [QUANTITY], [PRICE], [PRICE1], [PRICE2], [NETPRICE], [DISCOUNT], [TOTAL], [TAXAMOUNT], [TAXRATE], [GLACNO], [VATCODE], [Units], [LinkQty], [GLAccNo], [GLSubAccNo] FROM [STKGrvDClm]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->barcode = $records["BARCODE"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->claimdesc = $records["CLAIMDESC"];
				$instance->quantity = $records["QUANTITY"];
				$instance->price = $records["PRICE"];
				$instance->price1 = $records["PRICE1"];
				$instance->price2 = $records["PRICE2"];
				$instance->netprice = $records["NETPRICE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->total = $records["TOTAL"];
				$instance->taxamount = $records["TAXAMOUNT"];
				$instance->taxrate = $records["TAXRATE"];
				$instance->glacno = $records["GLACNO"];
				$instance->vatcode = $records["VATCODE"];
				$instance->units = $records["Units"];
				$instance->linkqty = $records["LinkQty"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
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