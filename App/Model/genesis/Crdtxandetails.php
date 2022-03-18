<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	CRDTxanDetails

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar SubAccount" of type [nvarchar]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public nvarchar SourceTxTp" of type [nvarchar]
	"public nvarchar SourceDocNo" of type [nvarchar]
	"public int SourceTxNo" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public int TxNo" of type [int]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public float Amount" of type [float]
	"public float VATAmount" of type [float]
	"public float Discount" of type [float]
	"public float DiscVATAmount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar PayType" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public int GLTrace" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar DocDate" of type [nvarchar]
	"public nvarchar SuppDocNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdtxandetails {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $sourcebranch ;	
	public $sourcetxtp ;	
	public $sourcedocno ;	
	public $sourcetxno ;	
	public $trandate ;	
	public $txno ;	
	public $txtp ;	
	public $docno ;	
	public $reference ;	
	public $details ;	
	public $amount ;	
	public $vatamount ;	
	public $discount ;	
	public $discvatamount ;	
	public $drcr ;	
	public $paytype ;	
	public $status ;	
	public $gltrace ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $docdate ;	
	public $suppdocno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [SubAccount], [SourceBranch], [SourceTxTp], [SourceDocNo], [SourceTxNo], [TranDate], [TxNo], [TxTp], [DocNo], [Reference], [Details], [Amount], [VATAmount], [Discount], [DiscVATAmount], [DrCr], [PayType], [Status], [GLTrace], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [DocDate], [SuppDocNo] FROM [CRDTxanDetails]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->subaccount = $records["SubAccount"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->sourcetxtp = $records["SourceTxTp"];
				$instance->sourcedocno = $records["SourceDocNo"];
				$instance->sourcetxno = $records["SourceTxNo"];
				$instance->trandate = $records["TranDate"];
				$instance->txno = $records["TxNo"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->reference = $records["Reference"];
				$instance->details = $records["Details"];
				$instance->amount = $records["Amount"];
				$instance->vatamount = $records["VATAmount"];
				$instance->discount = $records["Discount"];
				$instance->discvatamount = $records["DiscVATAmount"];
				$instance->drcr = $records["DrCr"];
				$instance->paytype = $records["PayType"];
				$instance->status = $records["Status"];
				$instance->gltrace = $records["GLTrace"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->docdate = $records["DocDate"];
				$instance->suppdocno = $records["SuppDocNo"];
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