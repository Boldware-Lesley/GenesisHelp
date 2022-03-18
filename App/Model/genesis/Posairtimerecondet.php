<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	POSAirtimeReconDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int BatchNo" of type [int]
	"public nvarchar BatchDate" of type [nvarchar]
	"public nvarchar TerminalID" of type [nvarchar]
	"public nvarchar MerchantID" of type [nvarchar]
	"public nvarchar TxanNo" of type [nvarchar]
	"public nvarchar SysRefNo" of type [nvarchar]
	"public nvarchar DateTime" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar SysTxTp" of type [nvarchar]
	"public nvarchar VoucherNo" of type [nvarchar]
	"public nvarchar ProductID" of type [nvarchar]
	"public float Amount" of type [float]
	"public nvarchar Authoriser" of type [nvarchar]
	"public nvarchar ProducName" of type [nvarchar]
	"public nvarchar LineStatus" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posairtimerecondet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $batchno ;	
	public $batchdate ;	
	public $terminalid ;	
	public $merchantid ;	
	public $txanno ;	
	public $sysrefno ;	
	public $datetime ;	
	public $trandate ;	
	public $systxtp ;	
	public $voucherno ;	
	public $productid ;	
	public $amount ;	
	public $authoriser ;	
	public $producname ;	
	public $linestatus ;	
	public $txtp ;	
	public $docno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [BatchNo], [BatchDate], [TerminalID], [MerchantID], [TxanNo], [SysRefNo], [DateTime], [TranDate], [SysTxTp], [VoucherNo], [ProductID], [Amount], [Authoriser], [ProducName], [LineStatus], [TxTp], [DocNo] FROM [POSAirtimeReconDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->batchno = $records["BatchNo"];
				$instance->batchdate = $records["BatchDate"];
				$instance->terminalid = $records["TerminalID"];
				$instance->merchantid = $records["MerchantID"];
				$instance->txanno = $records["TxanNo"];
				$instance->sysrefno = $records["SysRefNo"];
				$instance->datetime = $records["DateTime"];
				$instance->trandate = $records["TranDate"];
				$instance->systxtp = $records["SysTxTp"];
				$instance->voucherno = $records["VoucherNo"];
				$instance->productid = $records["ProductID"];
				$instance->amount = $records["Amount"];
				$instance->authoriser = $records["Authoriser"];
				$instance->producname = $records["ProducName"];
				$instance->linestatus = $records["LineStatus"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
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
			$res = $this->producname;
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