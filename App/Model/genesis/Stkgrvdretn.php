<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:40
@Database			:	GENESIS-DEMO
@Table			:	STKGrvDRetn

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar SubAccount" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public int GRVNo" of type [int]
	"public nvarchar GrvDate" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public nvarchar Wh" of type [nvarchar]
	"public float Qty" of type [float]
	"public float LinkQty" of type [float]
	"public float PriceExcl" of type [float]
	"public float PriceIncl" of type [float]
	"public float TotalVAT" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float Units" of type [float]
	"public float RebAmnt" of type [float]
	"public float DocCharges" of type [float]
	"public float DocDiscounts" of type [float]
	"public float TaxRate" of type [float]
	"public nvarchar TaxCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkgrvdretn {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $txtp ;	
	public $grvno ;	
	public $grvdate ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $wh ;	
	public $qty ;	
	public $linkqty ;	
	public $priceexcl ;	
	public $priceincl ;	
	public $totalvat ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $units ;	
	public $rebamnt ;	
	public $doccharges ;	
	public $docdiscounts ;	
	public $taxrate ;	
	public $taxcode ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [SubAccount], [TxTp], [GRVNo], [GrvDate], [StockCode], [LinkCode], [Description1], [Description2], [Wh], [Qty], [LinkQty], [PriceExcl], [PriceIncl], [TotalVAT], [TotalExcl], [TotalIncl], [Units], [RebAmnt], [DocCharges], [DocDiscounts], [TaxRate], [TaxCode] FROM [STKGrvDRetn]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->subaccount = $records["SubAccount"];
				$instance->txtp = $records["TxTp"];
				$instance->grvno = $records["GRVNo"];
				$instance->grvdate = $records["GrvDate"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->wh = $records["Wh"];
				$instance->qty = $records["Qty"];
				$instance->linkqty = $records["LinkQty"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->units = $records["Units"];
				$instance->rebamnt = $records["RebAmnt"];
				$instance->doccharges = $records["DocCharges"];
				$instance->docdiscounts = $records["DocDiscounts"];
				$instance->taxrate = $records["TaxRate"];
				$instance->taxcode = $records["TaxCode"];
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [SubAccount], [TxTp], [GRVNo], [GrvDate], [StockCode], [LinkCode], [Description1], [Description2], [Wh], [Qty], [LinkQty], [PriceExcl], [PriceIncl], [TotalVAT], [TotalExcl], [TotalIncl], [Units], [RebAmnt], [DocCharges], [DocDiscounts], [TaxRate], [TaxCode] FROM [STKGrvDRetn]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->subaccount = $records["SubAccount"];
				$instance->txtp = $records["TxTp"];
				$instance->grvno = $records["GRVNo"];
				$instance->grvdate = $records["GrvDate"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->wh = $records["Wh"];
				$instance->qty = $records["Qty"];
				$instance->linkqty = $records["LinkQty"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->units = $records["Units"];
				$instance->rebamnt = $records["RebAmnt"];
				$instance->doccharges = $records["DocCharges"];
				$instance->docdiscounts = $records["DocDiscounts"];
				$instance->taxrate = $records["TaxRate"];
				$instance->taxcode = $records["TaxCode"];
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