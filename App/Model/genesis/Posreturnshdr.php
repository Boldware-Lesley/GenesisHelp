<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	POSReturnsHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int RetnNo" of type [int]
	"public nvarchar RetnDate" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar DocDate" of type [nvarchar]
	"public nvarchar VATInd" of type [nvarchar]
	"public float VATAmount" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public nvarchar Comment1" of type [nvarchar]
	"public nvarchar Comment2" of type [nvarchar]
	"public nvarchar Comment3" of type [nvarchar]
	"public nvarchar Comment4" of type [nvarchar]
	"public nvarchar Comment5" of type [nvarchar]
	"public nvarchar RetnVouchNo" of type [nvarchar]
	"public nvarchar RetnTxTp" of type [nvarchar]
	"public nvarchar RetnDocNo" of type [nvarchar]
	"public nvarchar RetnDocDate" of type [nvarchar]
	"public nvarchar UnAlloc" of type [nvarchar]
	"public nvarchar Swop" of type [nvarchar]
	"public nvarchar Repair" of type [nvarchar]
	"public nvarchar Empty" of type [nvarchar]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar AuthDate" of type [nvarchar]
	"public nvarchar AuthTime" of type [nvarchar]
	"public nvarchar AuthUser" of type [nvarchar]
	"public nvarchar AuthMacID" of type [nvarchar]
	"public nvarchar ScanDate" of type [nvarchar]
	"public nvarchar ScanTime" of type [nvarchar]
	"public nvarchar ScanUser" of type [nvarchar]
	"public nvarchar ScanMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posreturnshdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $retnno ;	
	public $retndate ;	
	public $status ;	
	public $account ;	
	public $name ;	
	public $txtp ;	
	public $docno ;	
	public $docdate ;	
	public $vatind ;	
	public $vatamount ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $comment1 ;	
	public $comment2 ;	
	public $comment3 ;	
	public $comment4 ;	
	public $comment5 ;	
	public $retnvouchno ;	
	public $retntxtp ;	
	public $retndocno ;	
	public $retndocdate ;	
	public $unalloc ;	
	public $swop ;	
	public $repair ;	
	public $empty ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $authdate ;	
	public $authtime ;	
	public $authuser ;	
	public $authmacid ;	
	public $scandate ;	
	public $scantime ;	
	public $scanuser ;	
	public $scanmacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [RetnNo], [RetnDate], [Status], [Account], [Name], [TxTp], [DocNo], [DocDate], [VATInd], [VATAmount], [TotalExcl], [TotalIncl], [Comment1], [Comment2], [Comment3], [Comment4], [Comment5], [RetnVouchNo], [RetnTxTp], [RetnDocNo], [RetnDocDate], [UnAlloc], [Swop], [Repair], [Empty], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [AuthDate], [AuthTime], [AuthUser], [AuthMacID], [ScanDate], [ScanTime], [ScanUser], [ScanMacID] FROM [POSReturnsHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->retnno = $records["RetnNo"];
				$instance->retndate = $records["RetnDate"];
				$instance->status = $records["Status"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->docdate = $records["DocDate"];
				$instance->vatind = $records["VATInd"];
				$instance->vatamount = $records["VATAmount"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->comment1 = $records["Comment1"];
				$instance->comment2 = $records["Comment2"];
				$instance->comment3 = $records["Comment3"];
				$instance->comment4 = $records["Comment4"];
				$instance->comment5 = $records["Comment5"];
				$instance->retnvouchno = $records["RetnVouchNo"];
				$instance->retntxtp = $records["RetnTxTp"];
				$instance->retndocno = $records["RetnDocNo"];
				$instance->retndocdate = $records["RetnDocDate"];
				$instance->unalloc = $records["UnAlloc"];
				$instance->swop = $records["Swop"];
				$instance->repair = $records["Repair"];
				$instance->empty = $records["Empty"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["AuthTime"];
				$instance->authuser = $records["AuthUser"];
				$instance->authmacid = $records["AuthMacID"];
				$instance->scandate = $records["ScanDate"];
				$instance->scantime = $records["ScanTime"];
				$instance->scanuser = $records["ScanUser"];
				$instance->scanmacid = $records["ScanMacID"];
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
			$res = $this->name;
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