<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	ORDTripSheetHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int SheetNo" of type [int]
	"public nvarchar RegNo" of type [nvarchar]
	"public nvarchar Driver" of type [nvarchar]
	"public nvarchar Assistant1" of type [nvarchar]
	"public nvarchar Assistant2" of type [nvarchar]
	"public nvarchar Route" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TranTime" of type [nvarchar]
	"public int StartKM" of type [int]
	"public int EndKM" of type [int]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar AuthDate" of type [nvarchar]
	"public nvarchar AuthTime" of type [nvarchar]
	"public nvarchar AuthUser" of type [nvarchar]
	"public nvarchar AuthMacID" of type [nvarchar]
	"public float WBMass" of type [float]
	"public nvarchar SealNo" of type [nvarchar]
	"public nvarchar DepartDate" of type [nvarchar]
	"public nvarchar DepartTime" of type [nvarchar]
	"public nvarchar ChkTemp" of type [nvarchar]
	"public nvarchar ChkPODAttached" of type [nvarchar]
	"public nvarchar ChkPODSigned" of type [nvarchar]
	"public nvarchar ChkWBCert" of type [nvarchar]
	"public nvarchar ChkPCNDone" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar SealNo1" of type [nvarchar]
	"public nvarchar SealNo2" of type [nvarchar]
	"public nvarchar LossControl" of type [nvarchar]
	"public nvarchar Loader" of type [nvarchar]
	"public nvarchar DispatchSupervisor" of type [nvarchar]
	"public nvarchar AccountsRecv" of type [nvarchar]
	"public float TotalPallets" of type [float]
*/
namespace genesis;


use PDO;

class Ordtripsheethdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $sheetno ;	
	public $regno ;	
	public $driver ;	
	public $assistant1 ;	
	public $assistant2 ;	
	public $route ;	
	public $trandate ;	
	public $trantime ;	
	public $startkm ;	
	public $endkm ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $authdate ;	
	public $authtime ;	
	public $authuser ;	
	public $authmacid ;	
	public $wbmass ;	
	public $sealno ;	
	public $departdate ;	
	public $departtime ;	
	public $chktemp ;	
	public $chkpodattached ;	
	public $chkpodsigned ;	
	public $chkwbcert ;	
	public $chkpcndone ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $sealno1 ;	
	public $sealno2 ;	
	public $losscontrol ;	
	public $loader ;	
	public $dispatchsupervisor ;	
	public $accountsrecv ;	
	public $totalpallets ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [SheetNo], [RegNo], [Driver], [Assistant1], [Assistant2], [Route], [TranDate], [TranTime], [StartKM], [EndKM], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [AuthDate], [AuthTime], [AuthUser], [AuthMacID], [WBMass], [SealNo], [DepartDate], [DepartTime], [ChkTemp], [ChkPODAttached], [ChkPODSigned], [ChkWBCert], [ChkPCNDone], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [SealNo1], [SealNo2], [LossControl], [Loader], [DispatchSupervisor], [AccountsRecv], [TotalPallets] FROM [ORDTripSheetHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->sheetno = $records["SheetNo"];
				$instance->regno = $records["RegNo"];
				$instance->driver = $records["Driver"];
				$instance->assistant1 = $records["Assistant1"];
				$instance->assistant2 = $records["Assistant2"];
				$instance->route = $records["Route"];
				$instance->trandate = $records["TranDate"];
				$instance->trantime = $records["TranTime"];
				$instance->startkm = $records["StartKM"];
				$instance->endkm = $records["EndKM"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["AuthTime"];
				$instance->authuser = $records["AuthUser"];
				$instance->authmacid = $records["AuthMacID"];
				$instance->wbmass = $records["WBMass"];
				$instance->sealno = $records["SealNo"];
				$instance->departdate = $records["DepartDate"];
				$instance->departtime = $records["DepartTime"];
				$instance->chktemp = $records["ChkTemp"];
				$instance->chkpodattached = $records["ChkPODAttached"];
				$instance->chkpodsigned = $records["ChkPODSigned"];
				$instance->chkwbcert = $records["ChkWBCert"];
				$instance->chkpcndone = $records["ChkPCNDone"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->sealno1 = $records["SealNo1"];
				$instance->sealno2 = $records["SealNo2"];
				$instance->losscontrol = $records["LossControl"];
				$instance->loader = $records["Loader"];
				$instance->dispatchsupervisor = $records["DispatchSupervisor"];
				$instance->accountsrecv = $records["AccountsRecv"];
				$instance->totalpallets = $records["TotalPallets"];
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