<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	PUROCFormula

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar FormulaCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public int SalesMonths" of type [int]
	"public int DaysInMonth" of type [int]
	"public nvarchar IgnoreHowLow" of type [nvarchar]
	"public nvarchar PickHighest" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Purocformula {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $formulacode ;	
	public $description ;	
	public $salesmonths ;	
	public $daysinmonth ;	
	public $ignorehowlow ;	
	public $pickhighest ;	
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
			$query = " SELECT RecID, [CO], [FormulaCode], [Description], [SalesMonths], [DaysInMonth], [IgnoreHowLow], [PickHighest], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [PUROCFormula]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->formulacode = $records["FormulaCode"];
				$instance->description = $records["Description"];
				$instance->salesmonths = $records["SalesMonths"];
				$instance->daysinmonth = $records["DaysInMonth"];
				$instance->ignorehowlow = $records["IgnoreHowLow"];
				$instance->pickhighest = $records["PickHighest"];
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
	Main Constructor For Declearing Using FormulaCode
	*/
	public static function ini_FormulaCode($formulacode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [FormulaCode], [Description], [SalesMonths], [DaysInMonth], [IgnoreHowLow], [PickHighest], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [PUROCFormula]  WHERE [FormulaCode]=:formulacode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":formulacode", $formulacode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->formulacode = $records["FormulaCode"];
				$instance->description = $records["Description"];
				$instance->salesmonths = $records["SalesMonths"];
				$instance->daysinmonth = $records["DaysInMonth"];
				$instance->ignorehowlow = $records["IgnoreHowLow"];
				$instance->pickhighest = $records["PickHighest"];
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