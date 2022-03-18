<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	SYNC_DEBMaster_1__91

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public float CreditLimit" of type [float]
	"public nvarchar GroupCode" of type [nvarchar]
	"public int TermFromValue" of type [int]
	"public nvarchar CRMAccNo" of type [nvarchar]
	"public nvarchar StmtFreq" of type [nvarchar]
	"public int StmtFreqDOW" of type [int]
	"public nvarchar PreAuthInd" of type [nvarchar]
	"public nvarchar LicenseExpAction" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sync_debmaster_1__91 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $name ;	
	public $status ;	
	public $creditlimit ;	
	public $groupcode ;	
	public $termfromvalue ;	
	public $crmaccno ;	
	public $stmtfreq ;	
	public $stmtfreqdow ;	
	public $preauthind ;	
	public $licenseexpaction ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [Name], [Status], [CreditLimit], [GroupCode], [TermFromValue], [CRMAccNo], [StmtFreq], [StmtFreqDOW], [PreAuthInd], [LicenseExpAction] FROM [SYNC_DEBMaster_1__91]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->status = $records["Status"];
				$instance->creditlimit = $records["CreditLimit"];
				$instance->groupcode = $records["GroupCode"];
				$instance->termfromvalue = $records["TermFromValue"];
				$instance->crmaccno = $records["CRMAccNo"];
				$instance->stmtfreq = $records["StmtFreq"];
				$instance->stmtfreqdow = $records["StmtFreqDOW"];
				$instance->preauthind = $records["PreAuthInd"];
				$instance->licenseexpaction = $records["LicenseExpAction"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using GroupCode
	*/
	public static function ini_GroupCode($groupcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [Name], [Status], [CreditLimit], [GroupCode], [TermFromValue], [CRMAccNo], [StmtFreq], [StmtFreqDOW], [PreAuthInd], [LicenseExpAction] FROM [SYNC_DEBMaster_1__91]  WHERE [GroupCode]=:groupcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":groupcode", $groupcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->status = $records["Status"];
				$instance->creditlimit = $records["CreditLimit"];
				$instance->groupcode = $records["GroupCode"];
				$instance->termfromvalue = $records["TermFromValue"];
				$instance->crmaccno = $records["CRMAccNo"];
				$instance->stmtfreq = $records["StmtFreq"];
				$instance->stmtfreqdow = $records["StmtFreqDOW"];
				$instance->preauthind = $records["PreAuthInd"];
				$instance->licenseexpaction = $records["LicenseExpAction"];
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