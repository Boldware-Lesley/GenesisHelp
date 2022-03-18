<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	DEBPDC

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar DEBTORTYPE" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TRANDATE" of type [nvarchar]
	"public nvarchar DUEDATE" of type [nvarchar]
	"public nvarchar CHEQUENO" of type [nvarchar]
	"public float AMOUNT" of type [float]
	"public nvarchar BANKNAME" of type [nvarchar]
	"public nvarchar BRANCHNAME" of type [nvarchar]
	"public nvarchar BANKACCOUNT" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public nvarchar POSTDATE" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debpdc {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $debtortype ;	
	public $account ;	
	public $trandate ;	
	public $duedate ;	
	public $chequeno ;	
	public $amount ;	
	public $bankname ;	
	public $branchname ;	
	public $bankaccount ;	
	public $docno ;	
	public $postdate ;	
	public $status ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [DEBTORTYPE], [ACCOUNT], [TRANDATE], [DUEDATE], [CHEQUENO], [AMOUNT], [BANKNAME], [BRANCHNAME], [BANKACCOUNT], [DOCNO], [POSTDATE], [STATUS], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [DEBPDC]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->debtortype = $records["DEBTORTYPE"];
				$instance->account = $records["ACCOUNT"];
				$instance->trandate = $records["TRANDATE"];
				$instance->duedate = $records["DUEDATE"];
				$instance->chequeno = $records["CHEQUENO"];
				$instance->amount = $records["AMOUNT"];
				$instance->bankname = $records["BANKNAME"];
				$instance->branchname = $records["BRANCHNAME"];
				$instance->bankaccount = $records["BANKACCOUNT"];
				$instance->docno = $records["DOCNO"];
				$instance->postdate = $records["POSTDATE"];
				$instance->status = $records["STATUS"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
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
			$res = $this->bankname;
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