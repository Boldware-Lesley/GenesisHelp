<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	SVMTimeSheet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar DateLogged" of type [nvarchar]
	"public nvarchar TimeLogged" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar TechCode" of type [nvarchar]
	"public nvarchar BillCode" of type [nvarchar]
	"public nvarchar Category" of type [nvarchar]
	"public int JobNo" of type [int]
	"public nvarchar DateStarted" of type [nvarchar]
	"public nvarchar TimeStarted" of type [nvarchar]
	"public float Hours" of type [float]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar Contact" of type [nvarchar]
	"public nvarchar CellPhone" of type [nvarchar]
	"public nvarchar DateComplete" of type [nvarchar]
	"public nvarchar TimeComplete" of type [nvarchar]
	"public float TotalHours" of type [float]
*/
namespace genesis;


use PDO;

class Svmtimesheet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $datelogged ;	
	public $timelogged ;	
	public $account ;	
	public $name ;	
	public $techcode ;	
	public $billcode ;	
	public $category ;	
	public $jobno ;	
	public $datestarted ;	
	public $timestarted ;	
	public $hours ;	
	public $notes ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $contact ;	
	public $cellphone ;	
	public $datecomplete ;	
	public $timecomplete ;	
	public $totalhours ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [DateLogged], [TimeLogged], [Account], [Name], [TechCode], [BillCode], [Category], [JobNo], [DateStarted], [TimeStarted], [Hours], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Contact], [CellPhone], [DateComplete], [TimeComplete], [TotalHours] FROM [SVMTimeSheet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->datelogged = $records["DateLogged"];
				$instance->timelogged = $records["TimeLogged"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->techcode = $records["TechCode"];
				$instance->billcode = $records["BillCode"];
				$instance->category = $records["Category"];
				$instance->jobno = $records["JobNo"];
				$instance->datestarted = $records["DateStarted"];
				$instance->timestarted = $records["TimeStarted"];
				$instance->hours = $records["Hours"];
				$instance->notes = $records["Notes"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->contact = $records["Contact"];
				$instance->cellphone = $records["CellPhone"];
				$instance->datecomplete = $records["DateComplete"];
				$instance->timecomplete = $records["TimeComplete"];
				$instance->totalhours = $records["TotalHours"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using TechCode
	*/
	public static function ini_TechCode($techcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [DateLogged], [TimeLogged], [Account], [Name], [TechCode], [BillCode], [Category], [JobNo], [DateStarted], [TimeStarted], [Hours], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Contact], [CellPhone], [DateComplete], [TimeComplete], [TotalHours] FROM [SVMTimeSheet]  WHERE [TechCode]=:techcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":techcode", $techcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->datelogged = $records["DateLogged"];
				$instance->timelogged = $records["TimeLogged"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->techcode = $records["TechCode"];
				$instance->billcode = $records["BillCode"];
				$instance->category = $records["Category"];
				$instance->jobno = $records["JobNo"];
				$instance->datestarted = $records["DateStarted"];
				$instance->timestarted = $records["TimeStarted"];
				$instance->hours = $records["Hours"];
				$instance->notes = $records["Notes"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->contact = $records["Contact"];
				$instance->cellphone = $records["CellPhone"];
				$instance->datecomplete = $records["DateComplete"];
				$instance->timecomplete = $records["TimeComplete"];
				$instance->totalhours = $records["TotalHours"];
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