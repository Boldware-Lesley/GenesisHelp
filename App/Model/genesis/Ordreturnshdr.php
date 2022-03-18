<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	ORDReturnsHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int ReturnNo" of type [int]
	"public nvarchar PageNo" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TranTime" of type [nvarchar]
	"public nvarchar SheetNo" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar ReasonCode" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar CRNoteNo" of type [nvarchar]
	"public nvarchar QCInspected" of type [nvarchar]
	"public nvarchar QCSupervisor" of type [nvarchar]
	"public nvarchar QCCompliance" of type [nvarchar]
	"public nvarchar QCManager" of type [nvarchar]
	"public nvarchar QCFinance" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar AuthDate" of type [nvarchar]
	"public nvarchar AuthTime" of type [nvarchar]
	"public nvarchar AuthUser" of type [nvarchar]
	"public nvarchar AuthMacID" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Ordreturnshdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $returnno ;	
	public $pageno ;	
	public $trandate ;	
	public $trantime ;	
	public $sheetno ;	
	public $account ;	
	public $reasoncode ;	
	public $details ;	
	public $crnoteno ;	
	public $qcinspected ;	
	public $qcsupervisor ;	
	public $qccompliance ;	
	public $qcmanager ;	
	public $qcfinance ;	
	public $status ;	
	public $authdate ;	
	public $authtime ;	
	public $authuser ;	
	public $authmacid ;	
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
			$query = " SELECT RecID, [CO], [Branch], [ReturnNo], [PageNo], [TranDate], [TranTime], [SheetNo], [Account], [ReasonCode], [Details], [CRNoteNo], [QCInspected], [QCSupervisor], [QCCompliance], [QCManager], [QCFinance], [Status], [AuthDate], [AuthTime], [AuthUser], [AuthMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [ORDReturnsHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->returnno = $records["ReturnNo"];
				$instance->pageno = $records["PageNo"];
				$instance->trandate = $records["TranDate"];
				$instance->trantime = $records["TranTime"];
				$instance->sheetno = $records["SheetNo"];
				$instance->account = $records["Account"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->details = $records["Details"];
				$instance->crnoteno = $records["CRNoteNo"];
				$instance->qcinspected = $records["QCInspected"];
				$instance->qcsupervisor = $records["QCSupervisor"];
				$instance->qccompliance = $records["QCCompliance"];
				$instance->qcmanager = $records["QCManager"];
				$instance->qcfinance = $records["QCFinance"];
				$instance->status = $records["Status"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["AuthTime"];
				$instance->authuser = $records["AuthUser"];
				$instance->authmacid = $records["AuthMacID"];
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
			$query = " SELECT RecID, [CO], [Branch], [ReturnNo], [PageNo], [TranDate], [TranTime], [SheetNo], [Account], [ReasonCode], [Details], [CRNoteNo], [QCInspected], [QCSupervisor], [QCCompliance], [QCManager], [QCFinance], [Status], [AuthDate], [AuthTime], [AuthUser], [AuthMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [ORDReturnsHdr]  WHERE [ReasonCode]=:reasoncode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":reasoncode", $reasoncode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->returnno = $records["ReturnNo"];
				$instance->pageno = $records["PageNo"];
				$instance->trandate = $records["TranDate"];
				$instance->trantime = $records["TranTime"];
				$instance->sheetno = $records["SheetNo"];
				$instance->account = $records["Account"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->details = $records["Details"];
				$instance->crnoteno = $records["CRNoteNo"];
				$instance->qcinspected = $records["QCInspected"];
				$instance->qcsupervisor = $records["QCSupervisor"];
				$instance->qccompliance = $records["QCCompliance"];
				$instance->qcmanager = $records["QCManager"];
				$instance->qcfinance = $records["QCFinance"];
				$instance->status = $records["Status"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["AuthTime"];
				$instance->authuser = $records["AuthUser"];
				$instance->authmacid = $records["AuthMacID"];
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