<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	STKCategory0

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Category0" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public int GLSubAccNo" of type [int]
	"public nvarchar GLPostGroupCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkcategory0 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $category0 ;	
	public $description ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $glaccno ;	
	public $glsubaccno ;	
	public $glpostgroupcode ;	
	
	
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
			$query = " SELECT RecID, [CO], [Category0], [Description], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [GLAccNo], [GLSubAccNo], [GLPostGroupCode] FROM [STKCategory0]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->category0 = $records["Category0"];
				$instance->description = $records["Description"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->glpostgroupcode = $records["GLPostGroupCode"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using GLPostGroupCode
	*/
	public static function ini_GLPostGroupCode($glpostgroupcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Category0], [Description], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [GLAccNo], [GLSubAccNo], [GLPostGroupCode] FROM [STKCategory0]  WHERE [GLPostGroupCode]=:glpostgroupcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":glpostgroupcode", $glpostgroupcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->category0 = $records["Category0"];
				$instance->description = $records["Description"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->glpostgroupcode = $records["GLPostGroupCode"];
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