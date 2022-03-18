<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	CRDJnlBatchDetl

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int BatchNo" of type [int]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public float Debit" of type [float]
	"public float Credit" of type [float]
	"public float VAT" of type [float]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar SuppDocNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdjnlbatchdetl {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $batchno ;	
	public $account ;	
	public $name ;	
	public $debit ;	
	public $credit ;	
	public $vat ;	
	public $reference ;	
	public $details ;	
	public $glaccno ;	
	public $sourcebranch ;	
	public $status ;	
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
			$query = " SELECT RecID, [CO], [Branch], [BatchNo], [Account], [Name], [Debit], [Credit], [VAT], [Reference], [Details], [GLAccNo], [SourceBranch], [Status], [SuppDocNo] FROM [CRDJnlBatchDetl]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->batchno = $records["BatchNo"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->debit = $records["Debit"];
				$instance->credit = $records["Credit"];
				$instance->vat = $records["VAT"];
				$instance->reference = $records["Reference"];
				$instance->details = $records["Details"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->status = $records["Status"];
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