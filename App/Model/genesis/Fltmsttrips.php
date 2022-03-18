<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	FLTMstTrips

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar RegisterNo" of type [nvarchar]
	"public nvarchar RegNo" of type [nvarchar]
	"public nvarchar StartDate" of type [nvarchar]
	"public nvarchar StartTime" of type [nvarchar]
	"public nvarchar EndDate" of type [nvarchar]
	"public nvarchar EndTime" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Driver" of type [nvarchar]
	"public nvarchar Assistant" of type [nvarchar]
	"public nvarchar Trailer" of type [nvarchar]
	"public float PrevReading" of type [float]
	"public float CurrReading" of type [float]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar TripSheetNo" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Fltmsttrips {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $registerno ;	
	public $regno ;	
	public $startdate ;	
	public $starttime ;	
	public $enddate ;	
	public $endtime ;	
	public $status ;	
	public $driver ;	
	public $assistant ;	
	public $trailer ;	
	public $prevreading ;	
	public $currreading ;	
	public $details ;	
	public $tripsheetno ;	
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
			$query = " SELECT RecID, [CO], [RegisterNo], [RegNo], [StartDate], [StartTime], [EndDate], [EndTime], [Status], [Driver], [Assistant], [Trailer], [PrevReading], [CurrReading], [Details], [TripSheetNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [FLTMstTrips]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->registerno = $records["RegisterNo"];
				$instance->regno = $records["RegNo"];
				$instance->startdate = $records["StartDate"];
				$instance->starttime = $records["StartTime"];
				$instance->enddate = $records["EndDate"];
				$instance->endtime = $records["EndTime"];
				$instance->status = $records["Status"];
				$instance->driver = $records["Driver"];
				$instance->assistant = $records["Assistant"];
				$instance->trailer = $records["Trailer"];
				$instance->prevreading = $records["PrevReading"];
				$instance->currreading = $records["CurrReading"];
				$instance->details = $records["Details"];
				$instance->tripsheetno = $records["TripSheetNo"];
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