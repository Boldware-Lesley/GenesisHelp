<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	View_DocHeader

[@Descriptions]
Class is using the following global variables:
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar GROUPCODE" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public float CostExcl" of type [float]
	"public float CostIncl" of type [float]
	"public float SalesExcl" of type [float]
	"public float SalesIncl" of type [float]
	"public float ProfitExcl" of type [float]
	"public float RebAvgAmnt" of type [float]
	"public float NettProfit" of type [float]
*/
namespace genesis;


use PDO;

class View_docheader {
	
	/*BEGIN <<Private Variables>> */
	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $drcr ;	
	public $account ;	
	public $name ;	
	public $groupcode ;	
	public $ap ;	
	public $trandate ;	
	public $costexcl ;	
	public $costincl ;	
	public $salesexcl ;	
	public $salesincl ;	
	public $profitexcl ;	
	public $rebavgamnt ;	
	public $nettprofit ;	
	
	
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
			$query = " SELECT CO, [Branch], [TxTp], [DrCr], [Account], [NAME], [GROUPCODE], [AP], [TranDate], [CostExcl], [CostIncl], [SalesExcl], [SalesIncl], [ProfitExcl], [RebAvgAmnt], [NettProfit] FROM [View_DocHeader]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->drcr = $records["DrCr"];
				$instance->account = $records["Account"];
				$instance->name = $records["NAME"];
				$instance->groupcode = $records["GROUPCODE"];
				$instance->ap = $records["AP"];
				$instance->trandate = $records["TranDate"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->salesincl = $records["SalesIncl"];
				$instance->profitexcl = $records["ProfitExcl"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->nettprofit = $records["NettProfit"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using GROUPCODE
	*/
	public static function ini_GROUPCODE($groupcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT CO, [Branch], [TxTp], [DrCr], [Account], [NAME], [GROUPCODE], [AP], [TranDate], [CostExcl], [CostIncl], [SalesExcl], [SalesIncl], [ProfitExcl], [RebAvgAmnt], [NettProfit] FROM [View_DocHeader]  WHERE [GROUPCODE]=:groupcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":groupcode", $groupcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->drcr = $records["DrCr"];
				$instance->account = $records["Account"];
				$instance->name = $records["NAME"];
				$instance->groupcode = $records["GROUPCODE"];
				$instance->ap = $records["AP"];
				$instance->trandate = $records["TranDate"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->salesincl = $records["SalesIncl"];
				$instance->profitexcl = $records["ProfitExcl"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->nettprofit = $records["NettProfit"];
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