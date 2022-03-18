<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	CRDReconHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int ReconNo" of type [int]
	"public nvarchar ReconDate" of type [nvarchar]
	"public nvarchar StmtDate" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public float StmtBalance" of type [float]
	"public float AccBalance" of type [float]
	"public nvarchar QryDate" of type [nvarchar]
	"public nvarchar QryNotes" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdreconhdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $account ;	
	public $reconno ;	
	public $recondate ;	
	public $stmtdate ;	
	public $reference ;	
	public $status ;	
	public $stmtbalance ;	
	public $accbalance ;	
	public $qrydate ;	
	public $qrynotes ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	
	
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
			$query = " SELECT RecID, [CO], [Account], [ReconNo], [ReconDate], [StmtDate], [Reference], [Status], [StmtBalance], [AccBalance], [QryDate], [QryNotes], [DTODate], [DTOTime], [DTOUser] FROM [CRDReconHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->account = $records["Account"];
				$instance->reconno = $records["ReconNo"];
				$instance->recondate = $records["ReconDate"];
				$instance->stmtdate = $records["StmtDate"];
				$instance->reference = $records["Reference"];
				$instance->status = $records["Status"];
				$instance->stmtbalance = $records["StmtBalance"];
				$instance->accbalance = $records["AccBalance"];
				$instance->qrydate = $records["QryDate"];
				$instance->qrynotes = $records["QryNotes"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
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