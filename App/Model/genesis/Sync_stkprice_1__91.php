<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	SYNC_STKPrice_1__91

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar PriceCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public float Excl" of type [float]
	"public float Incl" of type [float]
*/
namespace genesis;


use PDO;

class Sync_stkprice_1__91 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $pricecode ;	
	public $description ;	
	public $fromdate ;	
	public $todate ;	
	public $excl ;	
	public $incl ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [PriceCode], [Description], [FromDate], [ToDate], [Excl], [Incl] FROM [SYNC_STKPrice_1__91]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->pricecode = $records["PriceCode"];
				$instance->description = $records["Description"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [PriceCode], [Description], [FromDate], [ToDate], [Excl], [Incl] FROM [SYNC_STKPrice_1__91]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->pricecode = $records["PriceCode"];
				$instance->description = $records["Description"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
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