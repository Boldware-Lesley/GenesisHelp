<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	GSMCategory0

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar Category0" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar ExtDate" of type [nvarchar]
	"public nvarchar ExtTime" of type [nvarchar]
	"public int ItemCount" of type [int]
	"public float TotCostExcl" of type [float]
	"public float TotSalesExcl" of type [float]
	"public float TotRebates" of type [float]
	"public nvarchar GLPostGroupCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmcategory0 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $category0 ;	
	public $description ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $extdate ;	
	public $exttime ;	
	public $itemcount ;	
	public $totcostexcl ;	
	public $totsalesexcl ;	
	public $totrebates ;	
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
			$query = " SELECT RecID, [Category0], [Description], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [ExtDate], [ExtTime], [ItemCount], [TotCostExcl], [TotSalesExcl], [TotRebates], [GLPostGroupCode] FROM [GSMCategory0]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->category0 = $records["Category0"];
				$instance->description = $records["Description"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->extdate = $records["ExtDate"];
				$instance->exttime = $records["ExtTime"];
				$instance->itemcount = $records["ItemCount"];
				$instance->totcostexcl = $records["TotCostExcl"];
				$instance->totsalesexcl = $records["TotSalesExcl"];
				$instance->totrebates = $records["TotRebates"];
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
			$query = " SELECT RecID, [Category0], [Description], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [ExtDate], [ExtTime], [ItemCount], [TotCostExcl], [TotSalesExcl], [TotRebates], [GLPostGroupCode] FROM [GSMCategory0]  WHERE [GLPostGroupCode]=:glpostgroupcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":glpostgroupcode", $glpostgroupcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->category0 = $records["Category0"];
				$instance->description = $records["Description"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->extdate = $records["ExtDate"];
				$instance->exttime = $records["ExtTime"];
				$instance->itemcount = $records["ItemCount"];
				$instance->totcostexcl = $records["TotCostExcl"];
				$instance->totsalesexcl = $records["TotSalesExcl"];
				$instance->totrebates = $records["TotRebates"];
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