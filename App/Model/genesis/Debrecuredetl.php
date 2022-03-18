<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	DEBRecureDetl

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int LineNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar StockType" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public float Quantity" of type [float]
	"public float LinkQty" of type [float]
	"public float Price" of type [float]
	"public float PriceExcl" of type [float]
	"public float PriceIncl" of type [float]
	"public float LineVAT" of type [float]
	"public float LineTotal" of type [float]
	"public float LineTotalExcl" of type [float]
	"public float LineTotalIncl" of type [float]
	"public nvarchar VATCode" of type [nvarchar]
	"public float VATRate" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar SAPDocNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debrecuredetl {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $docno ;	
	public $account ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $stocktype ;	
	public $description1 ;	
	public $description2 ;	
	public $quantity ;	
	public $linkqty ;	
	public $price ;	
	public $priceexcl ;	
	public $priceincl ;	
	public $linevat ;	
	public $linetotal ;	
	public $linetotalexcl ;	
	public $linetotalincl ;	
	public $vatcode ;	
	public $vatrate ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $sapdocno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [DocNo], [Account], [LineNo], [StockCode], [LinkCode], [StockType], [Description1], [Description2], [Quantity], [LinkQty], [Price], [PriceExcl], [PriceIncl], [LineVAT], [LineTotal], [LineTotalExcl], [LineTotalIncl], [VATCode], [VATRate], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [SAPDocNo] FROM [DEBRecureDetl]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->stocktype = $records["StockType"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->quantity = $records["Quantity"];
				$instance->linkqty = $records["LinkQty"];
				$instance->price = $records["Price"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->linevat = $records["LineVAT"];
				$instance->linetotal = $records["LineTotal"];
				$instance->linetotalexcl = $records["LineTotalExcl"];
				$instance->linetotalincl = $records["LineTotalIncl"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->sapdocno = $records["SAPDocNo"];
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
			$query = " SELECT RecID, [CO], [Branch], [DocNo], [Account], [LineNo], [StockCode], [LinkCode], [StockType], [Description1], [Description2], [Quantity], [LinkQty], [Price], [PriceExcl], [PriceIncl], [LineVAT], [LineTotal], [LineTotalExcl], [LineTotalIncl], [VATCode], [VATRate], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [SAPDocNo] FROM [DEBRecureDetl]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->stocktype = $records["StockType"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->quantity = $records["Quantity"];
				$instance->linkqty = $records["LinkQty"];
				$instance->price = $records["Price"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->linevat = $records["LineVAT"];
				$instance->linetotal = $records["LineTotal"];
				$instance->linetotalexcl = $records["LineTotalExcl"];
				$instance->linetotalincl = $records["LineTotalIncl"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->sapdocno = $records["SAPDocNo"];
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