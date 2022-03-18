<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	PURCardRule

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar RuleCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar UseSeason" of type [nvarchar]
	"public int PeriodNumber" of type [int]
	"public nvarchar PeriodType" of type [nvarchar]
	"public nvarchar PeriodStart" of type [nvarchar]
	"public nvarchar PeriodYear" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Purcardrule {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $rulecode ;	
	public $description ;	
	public $useseason ;	
	public $periodnumber ;	
	public $periodtype ;	
	public $periodstart ;	
	public $periodyear ;	
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
			$query = " SELECT RecID, [CO], [RuleCode], [Description], [UseSeason], [PeriodNumber], [PeriodType], [PeriodStart], [PeriodYear], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [PURCardRule]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->rulecode = $records["RuleCode"];
				$instance->description = $records["Description"];
				$instance->useseason = $records["UseSeason"];
				$instance->periodnumber = $records["PeriodNumber"];
				$instance->periodtype = $records["PeriodType"];
				$instance->periodstart = $records["PeriodStart"];
				$instance->periodyear = $records["PeriodYear"];
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
	Main Constructor For Declearing Using RuleCode
	*/
	public static function ini_RuleCode($rulecode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [RuleCode], [Description], [UseSeason], [PeriodNumber], [PeriodType], [PeriodStart], [PeriodYear], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [PURCardRule]  WHERE [RuleCode]=:rulecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":rulecode", $rulecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->rulecode = $records["RuleCode"];
				$instance->description = $records["Description"];
				$instance->useseason = $records["UseSeason"];
				$instance->periodnumber = $records["PeriodNumber"];
				$instance->periodtype = $records["PeriodType"];
				$instance->periodstart = $records["PeriodStart"];
				$instance->periodyear = $records["PeriodYear"];
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