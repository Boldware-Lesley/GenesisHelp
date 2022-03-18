<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	GLGAccTxans

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public int GLSubAccNo" of type [int]
	"public int GLTrace" of type [int]
	"public int AP" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public float Debit" of type [float]
	"public float Credit" of type [float]
	"public float Amount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public nvarchar Remarks" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Ref1" of type [nvarchar]
	"public nvarchar Ref2" of type [nvarchar]
	"public nvarchar Ref3" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar DocTxTp" of type [nvarchar]
	"public nvarchar CostCenter" of type [nvarchar]
	"public nvarchar Reversal" of type [nvarchar]
	"public nvarchar Recon" of type [nvarchar]
	"public nvarchar ReconDate" of type [nvarchar]
	"public nvarchar PostingDate" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Glgacctxans {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ="";
    public $glaccno ="";
    public $glsubaccno ="";
    public $gltrace ="";
    public $ap ="";
    public $trandate ="";
    public $txtp ="";
    public $details ="";
    public $debit ="";
    public $credit ="";
    public $amount ="";
    public $drcr ="";
    public $sourcebranch ="";
    public $remarks ="";
    public $account ="";
    public $docno ="";
    public $ref1 ="";
    public $ref2 ="";
    public $ref3 ="";
    public $dtodate="";
    public $dtotime ="";
    public $dtouser ="";
    public $dtomacid ="";
    public $doctxtp ="";
    public $costcenter ="";
    public $reversal ="";
    public $recon ="";
    public $recondate ="";
    public $postingdate ="";
    public $vatcode ="";


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
			$query = " SELECT RecID, [CO], [GLAccNo], [GLSubAccNo], [GLTrace], [AP], [TranDate], [TxTp], [Details], [Debit], [Credit], [Amount], [DrCr], [SourceBranch], [Remarks], [Account], [DocNo], [Ref1], [Ref2], [Ref3], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [DocTxTp], [CostCenter], [Reversal], [Recon], [ReconDate], [PostingDate], [VATCode] FROM [GLGAccTxans]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->gltrace = $records["GLTrace"];
				$instance->ap = $records["AP"];
				$instance->trandate = $records["TranDate"];
				$instance->txtp = $records["TxTp"];
				$instance->details = $records["Details"];
				$instance->debit = $records["Debit"];
				$instance->credit = $records["Credit"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->remarks = $records["Remarks"];
				$instance->account = $records["Account"];
				$instance->docno = $records["DocNo"];
				$instance->ref1 = $records["Ref1"];
				$instance->ref2 = $records["Ref2"];
				$instance->ref3 = $records["Ref3"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->doctxtp = $records["DocTxTp"];
				$instance->costcenter = $records["CostCenter"];
				$instance->reversal = $records["Reversal"];
				$instance->recon = $records["Recon"];
				$instance->recondate = $records["ReconDate"];
				$instance->postingdate = $records["PostingDate"];
				$instance->vatcode = $records["VATCode"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using VATCode
	*/
	public static function ini_VATCode($vatcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [GLAccNo], [GLSubAccNo], [GLTrace], [AP], [TranDate], [TxTp], [Details], [Debit], [Credit], [Amount], [DrCr], [SourceBranch], [Remarks], [Account], [DocNo], [Ref1], [Ref2], [Ref3], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [DocTxTp], [CostCenter], [Reversal], [Recon], [ReconDate], [PostingDate], [VATCode] FROM [GLGAccTxans]  WHERE [VATCode]=:vatcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":vatcode", $vatcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->gltrace = $records["GLTrace"];
				$instance->ap = $records["AP"];
				$instance->trandate = $records["TranDate"];
				$instance->txtp = $records["TxTp"];
				$instance->details = $records["Details"];
				$instance->debit = $records["Debit"];
				$instance->credit = $records["Credit"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->remarks = $records["Remarks"];
				$instance->account = $records["Account"];
				$instance->docno = $records["DocNo"];
				$instance->ref1 = $records["Ref1"];
				$instance->ref2 = $records["Ref2"];
				$instance->ref3 = $records["Ref3"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->doctxtp = $records["DocTxTp"];
				$instance->costcenter = $records["CostCenter"];
				$instance->reversal = $records["Reversal"];
				$instance->recon = $records["Recon"];
				$instance->recondate = $records["ReconDate"];
				$instance->postingdate = $records["PostingDate"];
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