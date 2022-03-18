<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	CROSuppRepair

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar CRONo" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar ReturnDate" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar SerialNo" of type [nvarchar]
	"public nvarchar SwopSerial" of type [nvarchar]
	"public nvarchar WorkDone" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crosupprepair {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $crono ;	
	public $docno ;	
	public $account ;	
	public $name ;	
	public $trandate ;	
	public $returndate ;	
	public $status ;	
	public $serialno ;	
	public $swopserial ;	
	public $workdone ;	
	public $notes ;	
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
			$query = " SELECT RecID, [CO], [Branch], [CRONo], [DocNo], [Account], [Name], [TranDate], [ReturnDate], [Status], [SerialNo], [SwopSerial], [WorkDone], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [CROSuppRepair]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->crono = $records["CRONo"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->trandate = $records["TranDate"];
				$instance->returndate = $records["ReturnDate"];
				$instance->status = $records["Status"];
				$instance->serialno = $records["SerialNo"];
				$instance->swopserial = $records["SwopSerial"];
				$instance->workdone = $records["WorkDone"];
				$instance->notes = $records["Notes"];
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