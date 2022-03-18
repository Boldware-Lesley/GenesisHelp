<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	SYNC_DEBTxan_1__132

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar TxTp" of type [nvarchar]
	"public float Amount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public int Gltrace" of type [int]
*/
namespace genesis;


use PDO;

class Sync_debtxan_1__132 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $trandate ;	
	public $ap ;	
	public $txtp ;	
	public $amount ;	
	public $drcr ;	
	public $gltrace ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [TranDate], [AP], [TxTp], [Amount], [DrCr], [Gltrace] FROM [SYNC_DEBTxan_1__132]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->txtp = $records["TxTp"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->gltrace = $records["Gltrace"];
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