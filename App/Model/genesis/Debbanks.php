<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	DEBBanks

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public string CO" of type [string]
	"public string BRANCH" of type [string]
	"public string ACCOUNT" of type [string]
	"public string NAME" of type [string]
	"public string BANKCODE" of type [string]
	"public string BANKNAME" of type [string]
	"public string BRANCHCODE" of type [string]
	"public string BRANCHNAME" of type [string]
	"public string ACCOUNTTYPE" of type [string]
	"public string ACCOUNTNO" of type [string]
	"public string ACCOUNTNAME" of type [string]
	"public float CREDITLIMIT" of type [float]
	"public string DATECLEARED" of type [string]
	"public string COMMENT" of type [string]
*/
namespace genesis;


use PDO;

class Debbanks {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $name ;	
	public $bankcode ;	
	public $bankname ;	
	public $branchcode ;	
	public $branchname ;	
	public $accounttype ;	
	public $accountno ;	
	public $accountname ;	
	public $creditlimit ;	
	public $datecleared ;	
	public $comment ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [NAME], [BANKCODE], [BANKNAME], [BRANCHCODE], [BRANCHNAME], [ACCOUNTTYPE], [ACCOUNTNO], [ACCOUNTNAME], [CREDITLIMIT], [DATECLEARED], [COMMENT] FROM [DEBBanks]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->bankcode = $records["BANKCODE"];
				$instance->bankname = $records["BANKNAME"];
				$instance->branchcode = $records["BRANCHCODE"];
				$instance->branchname = $records["BRANCHNAME"];
				$instance->accounttype = $records["ACCOUNTTYPE"];
				$instance->accountno = $records["ACCOUNTNO"];
				$instance->accountname = $records["ACCOUNTNAME"];
				$instance->creditlimit = $records["CREDITLIMIT"];
				$instance->datecleared = $records["DATECLEARED"];
				$instance->comment = $records["COMMENT"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using BANKCODE
	*/
	public static function ini_BANKCODE($bankcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [NAME], [BANKCODE], [BANKNAME], [BRANCHCODE], [BRANCHNAME], [ACCOUNTTYPE], [ACCOUNTNO], [ACCOUNTNAME], [CREDITLIMIT], [DATECLEARED], [COMMENT] FROM [DEBBanks]  WHERE [BANKCODE]=:bankcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":bankcode", $bankcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->bankcode = $records["BANKCODE"];
				$instance->bankname = $records["BANKNAME"];
				$instance->branchcode = $records["BRANCHCODE"];
				$instance->branchname = $records["BRANCHNAME"];
				$instance->accounttype = $records["ACCOUNTTYPE"];
				$instance->accountno = $records["ACCOUNTNO"];
				$instance->accountname = $records["ACCOUNTNAME"];
				$instance->creditlimit = $records["CREDITLIMIT"];
				$instance->datecleared = $records["DATECLEARED"];
				$instance->comment = $records["COMMENT"];
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