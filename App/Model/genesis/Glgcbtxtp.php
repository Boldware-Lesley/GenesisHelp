<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	GLGCBTxTp

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar VATInd" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public int GLSubAccNo" of type [int]
*/
namespace genesis;


use PDO;

class Glgcbtxtp {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $txtp ;	
	public $description ;	
	public $drcr ;	
	public $vatind ;	
	public $glaccno ;	
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
			$query = " SELECT RecID, [TxTp], [Description], [DrCr], [VATInd], [GLAccNo], [GLSubAccNo] FROM [GLGCBTxTp]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->txtp = $records["TxTp"];
				$instance->description = $records["Description"];
				$instance->drcr = $records["DrCr"];
				$instance->vatind = $records["VATInd"];
				$instance->glaccno = $records["GLAccNo"];
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