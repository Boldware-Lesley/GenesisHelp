<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	STKDocSizes

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int DocNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Size" of type [nvarchar]
	"public float Qty" of type [float]
	"public float OnHand" of type [float]
	"public float Cost" of type [float]
	"public float Rebate" of type [float]
	"public int LineNo" of type [int]
	"public float RecvQty" of type [float]
	"public float SaleQty" of type [float]
	"public nvarchar RecvDate" of type [nvarchar]
	"public nvarchar LastDate" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkdocsizes {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $docno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $size ;	
	public $qty ;	
	public $onhand ;	
	public $cost ;	
	public $rebate ;	
	public $lineno ;	
	public $recvqty ;	
	public $saleqty ;	
	public $recvdate ;	
	public $lastdate ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [DocNo], [StockCode], [LinkCode], [Size], [Qty], [OnHand], [Cost], [Rebate], [LineNo], [RecvQty], [SaleQty], [RecvDate], [LastDate] FROM [STKDocSizes]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->docno = $records["DocNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->size = $records["Size"];
				$instance->qty = $records["Qty"];
				$instance->onhand = $records["OnHand"];
				$instance->cost = $records["Cost"];
				$instance->rebate = $records["Rebate"];
				$instance->lineno = $records["LineNo"];
				$instance->recvqty = $records["RecvQty"];
				$instance->saleqty = $records["SaleQty"];
				$instance->recvdate = $records["RecvDate"];
				$instance->lastdate = $records["LastDate"];
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
			$query = " SELECT RecID, [CO], [Branch], [DocNo], [StockCode], [LinkCode], [Size], [Qty], [OnHand], [Cost], [Rebate], [LineNo], [RecvQty], [SaleQty], [RecvDate], [LastDate] FROM [STKDocSizes]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->docno = $records["DocNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->size = $records["Size"];
				$instance->qty = $records["Qty"];
				$instance->onhand = $records["OnHand"];
				$instance->cost = $records["Cost"];
				$instance->rebate = $records["Rebate"];
				$instance->lineno = $records["LineNo"];
				$instance->recvqty = $records["RecvQty"];
				$instance->saleqty = $records["SaleQty"];
				$instance->recvdate = $records["RecvDate"];
				$instance->lastdate = $records["LastDate"];
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