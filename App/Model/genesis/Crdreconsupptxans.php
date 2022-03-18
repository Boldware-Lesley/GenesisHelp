<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	CRDReconSuppTxans

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int ReconNo" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Ref01" of type [nvarchar]
	"public nvarchar Ref02" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar Reason" of type [nvarchar]
	"public float StmtAmount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public nvarchar Checked" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdreconsupptxans {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $account ;	
	public $reconno ;	
	public $trandate ;	
	public $docno ;	
	public $ref01 ;	
	public $ref02 ;	
	public $details ;	
	public $reason ;	
	public $stmtamount ;	
	public $drcr ;	
	public $checked ;	
	
	
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
			$query = " SELECT RecID, [CO], [Account], [ReconNo], [TranDate], [DocNo], [Ref01], [Ref02], [Details], [Reason], [StmtAmount], [DrCr], [Checked] FROM [CRDReconSuppTxans]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->account = $records["Account"];
				$instance->reconno = $records["ReconNo"];
				$instance->trandate = $records["TranDate"];
				$instance->docno = $records["DocNo"];
				$instance->ref01 = $records["Ref01"];
				$instance->ref02 = $records["Ref02"];
				$instance->details = $records["Details"];
				$instance->reason = $records["Reason"];
				$instance->stmtamount = $records["StmtAmount"];
				$instance->drcr = $records["DrCr"];
				$instance->checked = $records["Checked"];
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