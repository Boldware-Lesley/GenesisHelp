<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	EMPTxans

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar EmplNo" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar DrCr" of type [nvarchar]
	"public float Amount" of type [float]
*/
namespace genesis;


use PDO;

class Emptxans {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $emplno ;	
	public $trandate ;	
	public $txtp ;	
	public $details ;	
	public $reference ;	
	public $drcr ;	
	public $amount ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [EmplNo], [TranDate], [TxTp], [Details], [Reference], [DrCr], [Amount] FROM [EMPTxans]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->emplno = $records["EmplNo"];
				$instance->trandate = $records["TranDate"];
				$instance->txtp = $records["TxTp"];
				$instance->details = $records["Details"];
				$instance->reference = $records["Reference"];
				$instance->drcr = $records["DrCr"];
				$instance->amount = $records["Amount"];
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