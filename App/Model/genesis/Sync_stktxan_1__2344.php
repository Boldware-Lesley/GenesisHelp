<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	SYNC_STKTxan_1__2344

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar DocNo" of type [nvarchar]
	"public float Qty" of type [float]
	"public float LinkQty" of type [float]
	"public float Price" of type [float]
	"public float Amount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public float TaxAmount" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public float RebateAmnt" of type [float]
	"public int Units" of type [int]
	"public float RebateAvgExcl" of type [float]
*/
namespace genesis;


use PDO;

class Sync_stktxan_1__2344 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $txtp ;	
	public $trandate ;	
	public $ap ;	
	public $docno ;	
	public $qty ;	
	public $linkqty ;	
	public $price ;	
	public $amount ;	
	public $drcr ;	
	public $taxamount ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $rebateamnt ;	
	public $units ;	
	public $rebateavgexcl ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [TxTp], [TranDate], [AP], [DocNo], [Qty], [LinkQty], [Price], [Amount], [DrCr], [TaxAmount], [AvgCostExcl], [AvgCostIncl], [RebateAmnt], [Units], [RebateAvgExcl] FROM [SYNC_STKTxan_1__2344]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->txtp = $records["TxTp"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->docno = $records["DocNo"];
				$instance->qty = $records["Qty"];
				$instance->linkqty = $records["LinkQty"];
				$instance->price = $records["Price"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->taxamount = $records["TaxAmount"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->rebateamnt = $records["RebateAmnt"];
				$instance->units = $records["Units"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [TxTp], [TranDate], [AP], [DocNo], [Qty], [LinkQty], [Price], [Amount], [DrCr], [TaxAmount], [AvgCostExcl], [AvgCostIncl], [RebateAmnt], [Units], [RebateAvgExcl] FROM [SYNC_STKTxan_1__2344]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->txtp = $records["TxTp"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->docno = $records["DocNo"];
				$instance->qty = $records["Qty"];
				$instance->linkqty = $records["LinkQty"];
				$instance->price = $records["Price"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->taxamount = $records["TaxAmount"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->rebateamnt = $records["RebateAmnt"];
				$instance->units = $records["Units"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
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