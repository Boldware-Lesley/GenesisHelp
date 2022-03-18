<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	STKGrvDTally

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public int GRVNo" of type [int]
	"public int LineNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar ClaimCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar ValueType" of type [nvarchar]
	"public float Value" of type [float]
	"public float ClaimAmountExcl" of type [float]
	"public float ClaimAmountIncl" of type [float]
	"public int ClaimNo" of type [int]
*/
namespace genesis;


use PDO;

class Stkgrvdtally {
	
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
	public $claimcode ;	
	public $description ;	
	public $valuetype ;	
	public $value ;	
	public $claimamountexcl ;	
	public $claimamountincl ;	
	public $claimno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [TxTp], [GRVNo], [LineNo], [StockCode], [LinkCode], [ClaimCode], [Description], [ValueType], [Value], [ClaimAmountExcl], [ClaimAmountIncl], [ClaimNo] FROM [STKGrvDTally]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->txtp = $records["TxTp"];
				$instance->grvno = $records["GRVNo"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->description = $records["Description"];
				$instance->valuetype = $records["ValueType"];
				$instance->value = $records["Value"];
				$instance->claimamountexcl = $records["ClaimAmountExcl"];
				$instance->claimamountincl = $records["ClaimAmountIncl"];
				$instance->claimno = $records["ClaimNo"];
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [TxTp], [GRVNo], [LineNo], [StockCode], [LinkCode], [ClaimCode], [Description], [ValueType], [Value], [ClaimAmountExcl], [ClaimAmountIncl], [ClaimNo] FROM [STKGrvDTally]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->txtp = $records["TxTp"];
				$instance->grvno = $records["GRVNo"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->description = $records["Description"];
				$instance->valuetype = $records["ValueType"];
				$instance->value = $records["Value"];
				$instance->claimamountexcl = $records["ClaimAmountExcl"];
				$instance->claimamountincl = $records["ClaimAmountIncl"];
				$instance->claimno = $records["ClaimNo"];
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