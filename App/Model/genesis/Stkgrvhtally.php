<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	STKGrvHTally

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public int GRVNo" of type [int]
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

class Stkgrvhtally {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $grvno ;	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [TxTp], [GRVNo], [ClaimCode], [Description], [ValueType], [Value], [ClaimAmountExcl], [ClaimAmountIncl], [ClaimNo] FROM [STKGrvHTally]  WHERE [RecID]=:recid  ";
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
	Main Constructor For Declearing Using ClaimCode
	*/
	public static function ini_ClaimCode($claimcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [TxTp], [GRVNo], [ClaimCode], [Description], [ValueType], [Value], [ClaimAmountExcl], [ClaimAmountIncl], [ClaimNo] FROM [STKGrvHTally]  WHERE [ClaimCode]=:claimcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":claimcode", $claimcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->txtp = $records["TxTp"];
				$instance->grvno = $records["GRVNo"];
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