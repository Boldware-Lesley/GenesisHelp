<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	DEBPreAuth

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TRANDATE" of type [nvarchar]
	"public nvarchar AUTHNO" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public float CRLIMIT" of type [float]
	"public float BALANCE" of type [float]
	"public float OPENTOBUY" of type [float]
	"public float CHEQLIMIT" of type [float]
	"public float CHEQUES" of type [float]
	"public float PDC" of type [float]
	"public float TOTALUSED" of type [float]
	"public nvarchar HQAUTHNO" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar UnAlloc" of type [nvarchar]
	"public nvarchar RetnDocNo" of type [nvarchar]
	"public nvarchar OTP" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debpreauth {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $trandate ;	
	public $authno ;	
	public $account ;	
	public $name ;	
	public $crlimit ;	
	public $balance ;	
	public $opentobuy ;	
	public $cheqlimit ;	
	public $cheques ;	
	public $pdc ;	
	public $totalused ;	
	public $hqauthno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $status ;	
	public $txtp ;	
	public $unalloc ;	
	public $retndocno ;	
	public $otp ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [TRANDATE], [AUTHNO], [ACCOUNT], [NAME], [CRLIMIT], [BALANCE], [OPENTOBUY], [CHEQLIMIT], [CHEQUES], [PDC], [TOTALUSED], [HQAUTHNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Status], [TxTp], [UnAlloc], [RetnDocNo], [OTP] FROM [DEBPreAuth]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->trandate = $records["TRANDATE"];
				$instance->authno = $records["AUTHNO"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->crlimit = $records["CRLIMIT"];
				$instance->balance = $records["BALANCE"];
				$instance->opentobuy = $records["OPENTOBUY"];
				$instance->cheqlimit = $records["CHEQLIMIT"];
				$instance->cheques = $records["CHEQUES"];
				$instance->pdc = $records["PDC"];
				$instance->totalused = $records["TOTALUSED"];
				$instance->hqauthno = $records["HQAUTHNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->status = $records["Status"];
				$instance->txtp = $records["TxTp"];
				$instance->unalloc = $records["UnAlloc"];
				$instance->retndocno = $records["RetnDocNo"];
				$instance->otp = $records["OTP"];
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