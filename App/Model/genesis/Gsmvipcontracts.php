<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	GSMVIPContracts

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar VIPContCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar DeviceName" of type [nvarchar]
	"public float ContractRate" of type [float]
	"public int ContractTerm" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmvipcontracts {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $vipcontcode ;	
	public $description ;	
	public $devicename ;	
	public $contractrate ;	
	public $contractterm ;	
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
			$query = " SELECT RecID, [VIPContCode], [Description], [DeviceName], [ContractRate], [ContractTerm], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMVIPContracts]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->vipcontcode = $records["VIPContCode"];
				$instance->description = $records["Description"];
				$instance->devicename = $records["DeviceName"];
				$instance->contractrate = $records["ContractRate"];
				$instance->contractterm = $records["ContractTerm"];
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
	Main Constructor For Declearing Using VIPContCode
	*/
	public static function ini_VIPContCode($vipcontcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [VIPContCode], [Description], [DeviceName], [ContractRate], [ContractTerm], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMVIPContracts]  WHERE [VIPContCode]=:vipcontcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":vipcontcode", $vipcontcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->vipcontcode = $records["VIPContCode"];
				$instance->description = $records["Description"];
				$instance->devicename = $records["DeviceName"];
				$instance->contractrate = $records["ContractRate"];
				$instance->contractterm = $records["ContractTerm"];
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
			$res = $this->description;
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