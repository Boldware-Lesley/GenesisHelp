<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	CRDReconDetl

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int ReconNo" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Ref01" of type [nvarchar]
	"public nvarchar Ref02" of type [nvarchar]
	"public nvarchar SupplRef" of type [nvarchar]
	"public nvarchar SubAccount" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar Reason" of type [nvarchar]
	"public float TxanAmount" of type [float]
	"public float StmtAmount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar Checked" of type [nvarchar]
	"public int TxNo" of type [int]
*/
namespace genesis;


use PDO;

class Crdrecondetl {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $account ;	
	public $reconno ;	
	public $trandate ;	
	public $txtp ;	
	public $docno ;	
	public $ref01 ;	
	public $ref02 ;	
	public $supplref ;	
	public $subaccount ;	
	public $details ;	
	public $reason ;	
	public $txanamount ;	
	public $stmtamount ;	
	public $drcr ;	
	public $checked ;	
	public $txno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Account], [ReconNo], [TranDate], [TxTp], [DocNo], [Ref01], [Ref02], [SupplRef], [SubAccount], [Details], [Reason], [TxanAmount], [StmtAmount], [DrCr], [Checked], [TxNo] FROM [CRDReconDetl]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->account = $records["Account"];
				$instance->reconno = $records["ReconNo"];
				$instance->trandate = $records["TranDate"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->ref01 = $records["Ref01"];
				$instance->ref02 = $records["Ref02"];
				$instance->supplref = $records["SupplRef"];
				$instance->subaccount = $records["SubAccount"];
				$instance->details = $records["Details"];
				$instance->reason = $records["Reason"];
				$instance->txanamount = $records["TxanAmount"];
				$instance->stmtamount = $records["StmtAmount"];
				$instance->drcr = $records["DrCr"];
				$instance->checked = $records["Checked"];
				$instance->txno = $records["TxNo"];
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