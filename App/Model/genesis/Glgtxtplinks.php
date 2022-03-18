<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	GLGTxTpLinks

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar ModCode" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar AmountType" of type [nvarchar]
	"public int GLSubAccNo" of type [int]
*/
namespace genesis;


use PDO;

class Glgtxtplinks {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ="";
    public $modcode ="";
    public $txtp ="";
    public $glaccno ="";
    public $drcr ="";
    public $amounttype ="";
    public $glsubaccno ="";
    public $itemgroup = "DEFAULT";
    public $paramno = "";
	
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
			$query = " SELECT RecID, [CO], [ModCode], [TxTp], [GLAccNo], [DrCr], [AmountType], [GLSubAccNo] FROM [GLGTxTpLinks]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->modcode = $records["ModCode"];
				$instance->txtp = $records["TxTp"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->drcr = $records["DrCr"];
				$instance->amounttype = $records["AmountType"];
				$instance->glsubaccno = $records["GLSubAccNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using ModCode
	*/
	public static function ini_ModCode($modcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [ModCode], [TxTp], [GLAccNo], [DrCr], [AmountType], [GLSubAccNo] FROM [GLGTxTpLinks]  WHERE [ModCode]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->modcode = $records["ModCode"];
				$instance->txtp = $records["TxTp"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->drcr = $records["DrCr"];
				$instance->amounttype = $records["AmountType"];
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