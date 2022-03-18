<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	T_DocDetails

[@Descriptions]
Class is using the following global variables:
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar GroupCode" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar StockType" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public int Units" of type [int]
	"public float QTY" of type [float]
	"public float LinkQTY" of type [float]
	"public float CostExcl" of type [float]
	"public float CostIncl" of type [float]
	"public float SalesExcl" of type [float]
	"public float SalesIncl" of type [float]
	"public float ProfitExcl" of type [float]
	"public float RebateExcl" of type [float]
	"public float NettProfitExcl" of type [float]
*/
namespace genesis;


use PDO;

class T_docdetails {
	
	/*BEGIN <<Private Variables>> */
	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $name ;	
	public $groupcode ;	
	public $ap ;	
	public $trandate ;	
	public $txtp ;	
	public $docno ;	
	public $stocktype ;	
	public $stockcode ;	
	public $linkcode ;	
	public $units ;	
	public $qty ;	
	public $linkqty ;	
	public $costexcl ;	
	public $costincl ;	
	public $salesexcl ;	
	public $salesincl ;	
	public $profitexcl ;	
	public $rebateexcl ;	
	public $nettprofitexcl ;	
	
	
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
			$query = " SELECT CO, [Branch], [Account], [Name], [GroupCode], [AP], [TranDate], [TxTp], [DocNo], [StockType], [StockCode], [LinkCode], [Units], [QTY], [LinkQTY], [CostExcl], [CostIncl], [SalesExcl], [SalesIncl], [ProfitExcl], [RebateExcl], [NettProfitExcl] FROM [T_DocDetails]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->groupcode = $records["GroupCode"];
				$instance->ap = $records["AP"];
				$instance->trandate = $records["TranDate"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->stocktype = $records["StockType"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->units = $records["Units"];
				$instance->qty = $records["QTY"];
				$instance->linkqty = $records["LinkQTY"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->salesincl = $records["SalesIncl"];
				$instance->profitexcl = $records["ProfitExcl"];
				$instance->rebateexcl = $records["RebateExcl"];
				$instance->nettprofitexcl = $records["NettProfitExcl"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using GroupCode
	*/
	public static function ini_GroupCode($groupcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT CO, [Branch], [Account], [Name], [GroupCode], [AP], [TranDate], [TxTp], [DocNo], [StockType], [StockCode], [LinkCode], [Units], [QTY], [LinkQTY], [CostExcl], [CostIncl], [SalesExcl], [SalesIncl], [ProfitExcl], [RebateExcl], [NettProfitExcl] FROM [T_DocDetails]  WHERE [GroupCode]=:groupcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":groupcode", $groupcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->groupcode = $records["GroupCode"];
				$instance->ap = $records["AP"];
				$instance->trandate = $records["TranDate"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->stocktype = $records["StockType"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->units = $records["Units"];
				$instance->qty = $records["QTY"];
				$instance->linkqty = $records["LinkQTY"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->salesincl = $records["SalesIncl"];
				$instance->profitexcl = $records["ProfitExcl"];
				$instance->rebateexcl = $records["RebateExcl"];
				$instance->nettprofitexcl = $records["NettProfitExcl"];
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
			$res = $this->name;
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