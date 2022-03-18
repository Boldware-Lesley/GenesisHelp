<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	DEBTempCRLimit

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public float CRLimit" of type [float]
	"public float Balance" of type [float]
	"public float OpenToBuy" of type [float]
	"public float CheqLimit" of type [float]
	"public float Cheques" of type [float]
	"public float PDC" of type [float]
	"public float TotalUsed" of type [float]
	"public nvarchar UnAlloc" of type [nvarchar]
	"public nvarchar RetnDocNo" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar ReasonCode" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debtempcrlimit {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $name ;	
	public $trandate ;	
	public $crlimit ;	
	public $balance ;	
	public $opentobuy ;	
	public $cheqlimit ;	
	public $cheques ;	
	public $pdc ;	
	public $totalused ;	
	public $unalloc ;	
	public $retndocno ;	
	public $status ;	
	public $reasoncode ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [Name], [TranDate], [CRLimit], [Balance], [OpenToBuy], [CheqLimit], [Cheques], [PDC], [TotalUsed], [UnAlloc], [RetnDocNo], [Status], [ReasonCode], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [DEBTempCRLimit]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->trandate = $records["TranDate"];
				$instance->crlimit = $records["CRLimit"];
				$instance->balance = $records["Balance"];
				$instance->opentobuy = $records["OpenToBuy"];
				$instance->cheqlimit = $records["CheqLimit"];
				$instance->cheques = $records["Cheques"];
				$instance->pdc = $records["PDC"];
				$instance->totalused = $records["TotalUsed"];
				$instance->unalloc = $records["UnAlloc"];
				$instance->retndocno = $records["RetnDocNo"];
				$instance->status = $records["Status"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using ReasonCode
	*/
	public static function ini_ReasonCode($reasoncode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [Name], [TranDate], [CRLimit], [Balance], [OpenToBuy], [CheqLimit], [Cheques], [PDC], [TotalUsed], [UnAlloc], [RetnDocNo], [Status], [ReasonCode], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [DEBTempCRLimit]  WHERE [ReasonCode]=:reasoncode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":reasoncode", $reasoncode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->trandate = $records["TranDate"];
				$instance->crlimit = $records["CRLimit"];
				$instance->balance = $records["Balance"];
				$instance->opentobuy = $records["OpenToBuy"];
				$instance->cheqlimit = $records["CheqLimit"];
				$instance->cheques = $records["Cheques"];
				$instance->pdc = $records["PDC"];
				$instance->totalused = $records["TotalUsed"];
				$instance->unalloc = $records["UnAlloc"];
				$instance->retndocno = $records["RetnDocNo"];
				$instance->status = $records["Status"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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