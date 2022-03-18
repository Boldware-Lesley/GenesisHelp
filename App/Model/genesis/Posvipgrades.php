<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	POSVIPGrades

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar VIPGradeCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public float FromValue" of type [float]
	"public float ToValue" of type [float]
	"public int StdPoints" of type [int]
	"public int HousePoints" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posvipgrades {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $vipgradecode ;	
	public $description ;	
	public $fromvalue ;	
	public $tovalue ;	
	public $stdpoints ;	
	public $housepoints ;	
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
			$query = " SELECT RecID, [CO], [VIPGradeCode], [Description], [FromValue], [ToValue], [StdPoints], [HousePoints], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSVIPGrades]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->vipgradecode = $records["VIPGradeCode"];
				$instance->description = $records["Description"];
				$instance->fromvalue = $records["FromValue"];
				$instance->tovalue = $records["ToValue"];
				$instance->stdpoints = $records["StdPoints"];
				$instance->housepoints = $records["HousePoints"];
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
	Main Constructor For Declearing Using VIPGradeCode
	*/
	public static function ini_VIPGradeCode($vipgradecode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [VIPGradeCode], [Description], [FromValue], [ToValue], [StdPoints], [HousePoints], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSVIPGrades]  WHERE [VIPGradeCode]=:vipgradecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":vipgradecode", $vipgradecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->vipgradecode = $records["VIPGradeCode"];
				$instance->description = $records["Description"];
				$instance->fromvalue = $records["FromValue"];
				$instance->tovalue = $records["ToValue"];
				$instance->stdpoints = $records["StdPoints"];
				$instance->housepoints = $records["HousePoints"];
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