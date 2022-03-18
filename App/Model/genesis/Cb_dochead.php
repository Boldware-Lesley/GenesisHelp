<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	cb_DOCHEAD

[@Descriptions]
Class is using the following global variables:
	"public nvarchar RecIdent" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar GroupCode" of type [nvarchar]
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

class Cb_dochead {
	
	/*BEGIN <<Private Variables>> */
	
	public $recident ;	
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
			$query = " SELECT RecIdent, [Branch], [TxTp], [DrCr], [Account], [Name], [GroupCode], [AP], [TranDate], [CostExcl], [CostIncl], [SalesExcl], [SalesIncl], [ProfitExcl], [RebAvgAmnt], [NettProfit] FROM [cb_DOCHEAD]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recident = $records["RecIdent"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->drcr = $records["DrCr"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->groupcode = $records["GroupCode"];
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
	Main Constructor For Declearing Using GroupCode
	*/
	public static function ini_GroupCode($groupcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecIdent, [Branch], [TxTp], [DrCr], [Account], [Name], [GroupCode], [AP], [TranDate], [CostExcl], [CostIncl], [SalesExcl], [SalesIncl], [ProfitExcl], [RebAvgAmnt], [NettProfit] FROM [cb_DOCHEAD]  WHERE [GroupCode]=:groupcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":groupcode", $groupcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recident = $records["RecIdent"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->drcr = $records["DrCr"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->groupcode = $records["GroupCode"];
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