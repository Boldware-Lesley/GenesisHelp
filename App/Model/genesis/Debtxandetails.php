<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	DEBTxanDetails

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar DebtorType" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar SourceDocNo" of type [nvarchar]
	"public nvarchar SourceTxTp" of type [nvarchar]
	"public int SourceTxNo" of type [int]
	"public int AP" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public int TxNo" of type [int]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar DocDate" of type [nvarchar]
	"public float DocAmount" of type [float]
	"public float DocVATAmount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public float AllocAmount" of type [float]
	"public float Balance" of type [float]
	"public float DCurr" of type [float]
	"public float D030" of type [float]
	"public float D060" of type [float]
	"public float D090" of type [float]
	"public float D120" of type [float]
	"public float D150" of type [float]
	"public float D180" of type [float]
	"public float DOver" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar PostingDate" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debtxandetails {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $debtortype ;	
	public $account ;	
	public $sourcedocno ;	
	public $sourcetxtp ;	
	public $sourcetxno ;	
	public $ap ;	
	public $trandate ;	
	public $txtp ;	
	public $txno ;	
	public $docno ;	
	public $docdate ;	
	public $docamount ;	
	public $docvatamount ;	
	public $drcr ;	
	public $reference ;	
	public $details ;	
	public $allocamount ;	
	public $balance ;	
	public $dcurr ;	
	public $d030 ;	
	public $d060 ;	
	public $d090 ;	
	public $d120 ;	
	public $d150 ;	
	public $d180 ;	
	public $dover ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $postingdate ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [DebtorType], [Account], [SourceDocNo], [SourceTxTp], [SourceTxNo], [AP], [TranDate], [TxTp], [TxNo], [DocNo], [DocDate], [DocAmount], [DocVATAmount], [DrCr], [Reference], [Details], [AllocAmount], [Balance], [DCurr], [D030], [D060], [D090], [D120], [D150], [D180], [DOver], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [PostingDate] FROM [DEBTxanDetails]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->debtortype = $records["DebtorType"];
				$instance->account = $records["Account"];
				$instance->sourcedocno = $records["SourceDocNo"];
				$instance->sourcetxtp = $records["SourceTxTp"];
				$instance->sourcetxno = $records["SourceTxNo"];
				$instance->ap = $records["AP"];
				$instance->trandate = $records["TranDate"];
				$instance->txtp = $records["TxTp"];
				$instance->txno = $records["TxNo"];
				$instance->docno = $records["DocNo"];
				$instance->docdate = $records["DocDate"];
				$instance->docamount = $records["DocAmount"];
				$instance->docvatamount = $records["DocVATAmount"];
				$instance->drcr = $records["DrCr"];
				$instance->reference = $records["Reference"];
				$instance->details = $records["Details"];
				$instance->allocamount = $records["AllocAmount"];
				$instance->balance = $records["Balance"];
				$instance->dcurr = $records["DCurr"];
				$instance->d030 = $records["D030"];
				$instance->d060 = $records["D060"];
				$instance->d090 = $records["D090"];
				$instance->d120 = $records["D120"];
				$instance->d150 = $records["D150"];
				$instance->d180 = $records["D180"];
				$instance->dover = $records["DOver"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->postingdate = $records["PostingDate"];
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