<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	GLGCBTxans

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BankCode" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public int AP" of type [int]
	"public int TxRef" of type [int]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public float Amount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar Reversal" of type [nvarchar]
	"public nvarchar Recon" of type [nvarchar]
	"public nvarchar ReconDate" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Glgcbtxans {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $bankcode ;	
	public $trandate ;	
	public $ap ;	
	public $txref ;	
	public $txtp ;	
	public $reference ;	
	public $description ;	
	public $amount ;	
	public $drcr ;	
	public $reversal ;	
	public $recon ;	
	public $recondate ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $vatcode ;	
	
	
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
			$query = " SELECT RecID, [CO], [BankCode], [TranDate], [AP], [TxRef], [TxTp], [Reference], [Description], [Amount], [DrCr], [Reversal], [Recon], [ReconDate], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [VATCode] FROM [GLGCBTxans]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->bankcode = $records["BankCode"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->txref = $records["TxRef"];
				$instance->txtp = $records["TxTp"];
				$instance->reference = $records["Reference"];
				$instance->description = $records["Description"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->reversal = $records["Reversal"];
				$instance->recon = $records["Recon"];
				$instance->recondate = $records["ReconDate"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->vatcode = $records["VATCode"];
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
			$query = " SELECT RecID, [CO], [BankCode], [TranDate], [AP], [TxRef], [TxTp], [Reference], [Description], [Amount], [DrCr], [Reversal], [Recon], [ReconDate], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [VATCode] FROM [GLGCBTxans]  WHERE [BankCode]=:bankcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":bankcode", $bankcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->bankcode = $records["BankCode"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->txref = $records["TxRef"];
				$instance->txtp = $records["TxTp"];
				$instance->reference = $records["Reference"];
				$instance->description = $records["Description"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->reversal = $records["Reversal"];
				$instance->recon = $records["Recon"];
				$instance->recondate = $records["ReconDate"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->vatcode = $records["VATCode"];
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