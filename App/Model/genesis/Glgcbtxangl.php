<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	GLGCBTxanGL

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BankCode" of type [nvarchar]
	"public int TxRef" of type [int]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public int AP" of type [int]
	"public int GLAccNo" of type [int]
	"public nvarchar Details" of type [nvarchar]
	"public float Amount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public float VATAmount" of type [float]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar CostCenter" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
	"public int GLSubAccNo" of type [int]
*/
namespace genesis;


use PDO;

class Glgcbtxangl {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $bankcode ;	
	public $txref ;	
	public $txtp ;	
	public $trandate ;	
	public $ap ;	
	public $glaccno ;	
	public $details ;	
	public $amount ;	
	public $drcr ;	
	public $vatamount ;	
	public $branch ;	
	public $costcenter ;	
	public $vatcode ;	
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
			$query = " SELECT RecID, [CO], [BankCode], [TxRef], [TxTp], [TranDate], [AP], [GLAccNo], [Details], [Amount], [DrCr], [VATAmount], [Branch], [CostCenter], [VATCode], [GLSubAccNo] FROM [GLGCBTxanGL]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->bankcode = $records["BankCode"];
				$instance->txref = $records["TxRef"];
				$instance->txtp = $records["TxTp"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->details = $records["Details"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->vatamount = $records["VATAmount"];
				$instance->branch = $records["Branch"];
				$instance->costcenter = $records["CostCenter"];
				$instance->vatcode = $records["VATCode"];
				$instance->glsubaccno = $records["GLSubAccNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using BankCode
	*/
	public static function ini_BankCode($bankcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [BankCode], [TxRef], [TxTp], [TranDate], [AP], [GLAccNo], [Details], [Amount], [DrCr], [VATAmount], [Branch], [CostCenter], [VATCode], [GLSubAccNo] FROM [GLGCBTxanGL]  WHERE [BankCode]=:bankcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":bankcode", $bankcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->bankcode = $records["BankCode"];
				$instance->txref = $records["TxRef"];
				$instance->txtp = $records["TxTp"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->details = $records["Details"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->vatamount = $records["VATAmount"];
				$instance->branch = $records["Branch"];
				$instance->costcenter = $records["CostCenter"];
				$instance->vatcode = $records["VATCode"];
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