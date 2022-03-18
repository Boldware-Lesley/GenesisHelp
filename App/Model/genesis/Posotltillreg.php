<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	POSOTLTillReg

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TillNo" of type [nvarchar]
	"public nvarchar CashierName" of type [nvarchar]
	"public nvarchar MachineID" of type [nvarchar]
	"public nvarchar LocDBConnector" of type [nvarchar]
	"public nvarchar LocDBHost" of type [nvarchar]
	"public nvarchar LocDBUser" of type [nvarchar]
	"public nvarchar LocDBPswd" of type [nvarchar]
	"public nvarchar LocDBName" of type [nvarchar]
	"public nvarchar RemDBConnector" of type [nvarchar]
	"public nvarchar RemDBHost" of type [nvarchar]
	"public nvarchar RemDBUser" of type [nvarchar]
	"public nvarchar RemDBPswd" of type [nvarchar]
	"public nvarchar RemDBName" of type [nvarchar]
	"public nvarchar DefCO" of type [nvarchar]
	"public nvarchar DefBranch" of type [nvarchar]
	"public nvarchar DefHQBranch" of type [nvarchar]
	"public int RunInterval" of type [int]
	"public int SvrReConnect" of type [int]
	"public int OnlineCheck" of type [int]
	"public int RunSeconds" of type [int]
	"public nvarchar TillMode" of type [nvarchar]
	"public nvarchar PrinterType" of type [nvarchar]
	"public nvarchar PoleDisplay" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posotltillreg {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $tillno ;	
	public $cashiername ;	
	public $machineid ;	
	public $locdbconnector ;	
	public $locdbhost ;	
	public $locdbuser ;	
	public $locdbpswd ;	
	public $locdbname ;	
	public $remdbconnector ;	
	public $remdbhost ;	
	public $remdbuser ;	
	public $remdbpswd ;	
	public $remdbname ;	
	public $defco ;	
	public $defbranch ;	
	public $defhqbranch ;	
	public $runinterval ;	
	public $svrreconnect ;	
	public $onlinecheck ;	
	public $runseconds ;	
	public $tillmode ;	
	public $printertype ;	
	public $poledisplay ;	
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
			$query = " SELECT RecID, [CO], [Branch], [TillNo], [CashierName], [MachineID], [LocDBConnector], [LocDBHost], [LocDBUser], [LocDBPswd], [LocDBName], [RemDBConnector], [RemDBHost], [RemDBUser], [RemDBPswd], [RemDBName], [DefCO], [DefBranch], [DefHQBranch], [RunInterval], [SvrReConnect], [OnlineCheck], [RunSeconds], [TillMode], [PrinterType], [PoleDisplay], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSOTLTillReg]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->tillno = $records["TillNo"];
				$instance->cashiername = $records["CashierName"];
				$instance->machineid = $records["MachineID"];
				$instance->locdbconnector = $records["LocDBConnector"];
				$instance->locdbhost = $records["LocDBHost"];
				$instance->locdbuser = $records["LocDBUser"];
				$instance->locdbpswd = $records["LocDBPswd"];
				$instance->locdbname = $records["LocDBName"];
				$instance->remdbconnector = $records["RemDBConnector"];
				$instance->remdbhost = $records["RemDBHost"];
				$instance->remdbuser = $records["RemDBUser"];
				$instance->remdbpswd = $records["RemDBPswd"];
				$instance->remdbname = $records["RemDBName"];
				$instance->defco = $records["DefCO"];
				$instance->defbranch = $records["DefBranch"];
				$instance->defhqbranch = $records["DefHQBranch"];
				$instance->runinterval = $records["RunInterval"];
				$instance->svrreconnect = $records["SvrReConnect"];
				$instance->onlinecheck = $records["OnlineCheck"];
				$instance->runseconds = $records["RunSeconds"];
				$instance->tillmode = $records["TillMode"];
				$instance->printertype = $records["PrinterType"];
				$instance->poledisplay = $records["PoleDisplay"];
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
			$res = $this->cashiername;
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