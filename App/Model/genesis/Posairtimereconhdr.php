<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	POSAirtimeReconHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int BatchNo" of type [int]
	"public nvarchar BatchDate" of type [nvarchar]
	"public float BatchValue" of type [float]
	"public int BatchLines" of type [int]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar DocDate" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar FileName" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar AuthDate" of type [nvarchar]
	"public nvarchar AuthTime" of type [nvarchar]
	"public nvarchar AuthUser" of type [nvarchar]
	"public nvarchar AuthMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posairtimereconhdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $batchno ;	
	public $batchdate ;	
	public $batchvalue ;	
	public $batchlines ;	
	public $account ;	
	public $docno ;	
	public $docdate ;	
	public $status ;	
	public $filename ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $authdate ;	
	public $authtime ;	
	public $authuser ;	
	public $authmacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [BatchNo], [BatchDate], [BatchValue], [BatchLines], [Account], [DocNo], [DocDate], [Status], [FileName], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [AuthDate], [AuthTime], [AuthUser], [AuthMacID] FROM [POSAirtimeReconHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->batchno = $records["BatchNo"];
				$instance->batchdate = $records["BatchDate"];
				$instance->batchvalue = $records["BatchValue"];
				$instance->batchlines = $records["BatchLines"];
				$instance->account = $records["Account"];
				$instance->docno = $records["DocNo"];
				$instance->docdate = $records["DocDate"];
				$instance->status = $records["Status"];
				$instance->filename = $records["FileName"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["AuthTime"];
				$instance->authuser = $records["AuthUser"];
				$instance->authmacid = $records["AuthMacID"];
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
			$res = $this->filename;
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