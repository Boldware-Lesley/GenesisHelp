<?php
/**
@Author			:	Lesley
@Date			:	2020/10/24 12:28:10
@Database			:	MRJ
@Table			:	DOCUpliftDet

[@Descriptions]
Class is using the following global variables:
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public nvarchar StockType" of type [nvarchar]
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar VATIndicator" of type [nvarchar]
	"public nvarchar SuppCode" of type [nvarchar]
	"public nvarchar BarCode" of type [nvarchar]
	"public int LineNo" of type [int]
	"public int AP" of type [int]
	"public float Quantity" of type [float]
	"public float LinkQty" of type [float]
	"public float Price" of type [float]
	"public float PriceExcl" of type [float]
	"public float PriceIncl" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalVAT" of type [float]
	"public float Units" of type [float]
	"public float VATRate" of type [float]
	"public float Weight" of type [float]
*/
namespace genesis;


use PDO;

class Docupliftdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $stocktype ;	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $docno ;	
	public $trandate ;	
	public $vatcode ;	
	public $status ;	
	public $notes ;	
	public $vatindicator ;	
	public $suppcode ;	
	public $barcode ;	
	public $lineno ;	
	public $ap ;	
	public $quantity ;	
	public $linkqty ;	
	public $price ;	
	public $priceexcl ;	
	public $priceincl ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totalvat ;	
	public $units ;	
	public $vatrate ;	
	public $weight ;	
	
	
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
			$query = " SELECT StockCode, [LinkCode], [Description1], [Description2], [StockType], [RecID], [CO], [Branch], [Account], [DocNo], [TranDate], [VATCode], [Status], [Notes], [VATIndicator], [SuppCode], [BarCode], [LineNo], [AP], [Quantity], [LinkQty], [Price], [PriceExcl], [PriceIncl], [TotalExcl], [TotalIncl], [TotalVAT], [Units], [VATRate], [Weight] FROM [DOCUpliftDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->stocktype = $records["StockType"];
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->docno = $records["DocNo"];
				$instance->trandate = $records["TranDate"];
				$instance->vatcode = $records["VATCode"];
				$instance->status = $records["Status"];
				$instance->notes = $records["Notes"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->suppcode = $records["SuppCode"];
				$instance->barcode = $records["BarCode"];
				$instance->lineno = $records["LineNo"];
				$instance->ap = $records["AP"];
				$instance->quantity = $records["Quantity"];
				$instance->linkqty = $records["LinkQty"];
				$instance->price = $records["Price"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->units = $records["Units"];
				$instance->vatrate = $records["VATRate"];
				$instance->weight = $records["Weight"];
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
			$query = " SELECT StockCode, [LinkCode], [Description1], [Description2], [StockType], [RecID], [CO], [Branch], [Account], [DocNo], [TranDate], [VATCode], [Status], [Notes], [VATIndicator], [SuppCode], [BarCode], [LineNo], [AP], [Quantity], [LinkQty], [Price], [PriceExcl], [PriceIncl], [TotalExcl], [TotalIncl], [TotalVAT], [Units], [VATRate], [Weight] FROM [DOCUpliftDet]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->stocktype = $records["StockType"];
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->docno = $records["DocNo"];
				$instance->trandate = $records["TranDate"];
				$instance->vatcode = $records["VATCode"];
				$instance->status = $records["Status"];
				$instance->notes = $records["Notes"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->suppcode = $records["SuppCode"];
				$instance->barcode = $records["BarCode"];
				$instance->lineno = $records["LineNo"];
				$instance->ap = $records["AP"];
				$instance->quantity = $records["Quantity"];
				$instance->linkqty = $records["LinkQty"];
				$instance->price = $records["Price"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->units = $records["Units"];
				$instance->vatrate = $records["VATRate"];
				$instance->weight = $records["Weight"];
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