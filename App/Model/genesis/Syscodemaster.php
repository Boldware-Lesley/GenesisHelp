<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	SYSCodeMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar CodeType" of type [nvarchar]
	"public nvarchar Code" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public nvarchar UserFld1" of type [nvarchar]
	"public nvarchar UserFld2" of type [nvarchar]
	"public nvarchar UserFld3" of type [nvarchar]
	"public nvarchar AllowVAT" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar SystemField" of type [nvarchar]
	"public int GLSubAccNo" of type [int]
*/
namespace genesis;


use PDO;

class Syscodemaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $codetype ;	
	public $code ;	
	public $description ;	
	public $glaccno ;	
	public $userfld1 ;	
	public $userfld2 ;	
	public $userfld3 ;	
	public $allowvat ;	
	public $txtp ;	
	public $systemfield ;	
	public $glsubaccno ;	
	
	
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
			$query = " SELECT RecID, [CO], [CodeType], [Code], [Description], [GLAccNo], [UserFld1], [UserFld2], [UserFld3], [AllowVAT], [TxTp], [SystemField], [GLSubAccNo] FROM [SYSCodeMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->codetype = $records["CodeType"];
				$instance->code = $records["Code"];
				$instance->description = $records["Description"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->userfld1 = $records["UserFld1"];
				$instance->userfld2 = $records["UserFld2"];
				$instance->userfld3 = $records["UserFld3"];
				$instance->allowvat = $records["AllowVAT"];
				$instance->txtp = $records["TxTp"];
				$instance->systemfield = $records["SystemField"];
				$instance->glsubaccno = $records["GLSubAccNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CodeType
	*/
	public static function ini_CodeType($codetype) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [CodeType], [Code], [Description], [GLAccNo], [UserFld1], [UserFld2], [UserFld3], [AllowVAT], [TxTp], [SystemField], [GLSubAccNo] FROM [SYSCodeMaster]  WHERE [CodeType]=:codetype  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":codetype", $codetype);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->codetype = $records["CodeType"];
				$instance->code = $records["Code"];
				$instance->description = $records["Description"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->userfld1 = $records["UserFld1"];
				$instance->userfld2 = $records["UserFld2"];
				$instance->userfld3 = $records["UserFld3"];
				$instance->allowvat = $records["AllowVAT"];
				$instance->txtp = $records["TxTp"];
				$instance->systemfield = $records["SystemField"];
				$instance->glsubaccno = $records["GLSubAccNo"];
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