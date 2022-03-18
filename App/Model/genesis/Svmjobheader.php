<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	SVMJobHeader

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int JobNo" of type [int]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar DateLogged" of type [nvarchar]
	"public nvarchar TimeLogged" of type [nvarchar]
	"public nvarchar LogMethod" of type [nvarchar]
	"public nvarchar TechCode" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public int Priority" of type [int]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar Contact" of type [nvarchar]
	"public nvarchar ContactPhone" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar DateStarted" of type [nvarchar]
	"public nvarchar TimeStarted" of type [nvarchar]
	"public nvarchar ScheduleStart" of type [nvarchar]
	"public nvarchar ScheduleEnd" of type [nvarchar]
	"public nvarchar DateComplete" of type [nvarchar]
	"public nvarchar TimeComplete" of type [nvarchar]
	"public nvarchar TimeBillable" of type [nvarchar]
	"public nvarchar TimeNonBillable" of type [nvarchar]
	"public nvarchar TimeTotal" of type [nvarchar]
	"public nvarchar TravelTime" of type [nvarchar]
	"public int TravelKM" of type [int]
	"public nvarchar TravelBillable" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Svmjobheader {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $jobno ;	
	public $description ;	
	public $datelogged ;	
	public $timelogged ;	
	public $logmethod ;	
	public $techcode ;	
	public $status ;	
	public $priority ;	
	public $account ;	
	public $name ;	
	public $contact ;	
	public $contactphone ;	
	public $reference ;	
	public $datestarted ;	
	public $timestarted ;	
	public $schedulestart ;	
	public $scheduleend ;	
	public $datecomplete ;	
	public $timecomplete ;	
	public $timebillable ;	
	public $timenonbillable ;	
	public $timetotal ;	
	public $traveltime ;	
	public $travelkm ;	
	public $travelbillable ;	
	public $txtp ;	
	public $docno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;
	public $notes;


	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RecID($conn,$recid) {
		$instance = new self();
		try {
			$query = " SELECT RecID,[CO], [Branch], [JobNo], [Description], [Notes], [DateLogged], [TimeLogged], [JobType], [LOB], [LogMethod], [TechCode], [Status], [Priority], [Account], [Name], [Contact], [ContactPhone], [ScheduleDate], [ScheduleTime], [DateComplete], [TimeComplete], [TimeBillable], [TimeNonBillable], [TimeTotal], [TxTp], [DocNo], [Reference], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [SVMJobHeader]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
                $instance->notes = $records["Notes"];
				$instance->jobno = $records["JobNo"];
				$instance->description = $records["Description"];
				$instance->datelogged = $records["DateLogged"];
				$instance->timelogged = $records["TimeLogged"];
				$instance->logmethod = $records["LogMethod"];
				$instance->techcode = $records["TechCode"];
				$instance->status = $records["Status"];
				$instance->priority = $records["Priority"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->contact = $records["Contact"];
				$instance->contactphone = $records["ContactPhone"];
				$instance->reference = $records["Reference"];
				$instance->datestarted = $records["DateStarted"];
				$instance->timestarted = $records["TimeStarted"];
				$instance->schedulestart = $records["ScheduleStart"];
				$instance->scheduleend = $records["ScheduleEnd"];
				$instance->datecomplete = $records["DateComplete"];
				$instance->timecomplete = $records["TimeComplete"];
				$instance->timebillable = $records["TimeBillable"];
				$instance->timenonbillable = $records["TimeNonBillable"];
				$instance->timetotal = $records["TimeTotal"];
				$instance->traveltime = $records["TravelTime"];
				$instance->travelkm = $records["TravelKM"];
				$instance->travelbillable = $records["TravelBillable"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
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

    public static function ini_Code($conn,$co,$branch,$JobNo) {
        $instance = new self();
        try {

            $query = "SELECT RecID,[CO], [Branch], [JobNo], [Description], [Notes], [DateLogged], [TimeLogged], [JobType], [LOB], [LogMethod], [TechCode], [Status], [Priority], [Account], [Name], [Contact], [ContactPhone], [ScheduleDate], [ScheduleTime], [DateComplete], [TimeComplete], [TimeBillable], [TimeNonBillable], [TimeTotal], [TxTp], [DocNo], [Reference], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [SVMJobHeader]    ".
                " WHERE [CO]=:CO AND [Branch]=:Branch AND [JobNo]=:JobNo  ";
            $stmt = $conn->getStatement($query);
            $stmt->bindParam(":CO", $co);
            $stmt->bindParam(":Branch", $branch);
            $stmt->bindParam(":JobNo", $JobNo);
            $stmt->execute();
            while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
                $instance->recid = $records["RecID"];
                $instance->notes = $records["Notes"];
                $instance->co = $records["CO"];
                $instance->branch = $records["Branch"];
                $instance->jobno = $records["JobNo"];
                $instance->description = $records["Description"];
                $instance->datelogged = $records["DateLogged"];
                $instance->timelogged = $records["TimeLogged"];
                $instance->logmethod = $records["LogMethod"];
                $instance->techcode = $records["TechCode"];
                $instance->status = $records["Status"];
                $instance->priority = $records["Priority"];
                $instance->account = $records["Account"];
                $instance->name = $records["Name"];
                $instance->contact = $records["Contact"];
                $instance->contactphone = $records["ContactPhone"];
                $instance->reference = $records["Reference"];
                $instance->datestarted = $records["DateStarted"];
                $instance->timestarted = $records["TimeStarted"];
                $instance->schedulestart = $records["ScheduleStart"];
                $instance->scheduleend = $records["ScheduleEnd"];
                $instance->datecomplete = $records["DateComplete"];
                $instance->timecomplete = $records["TimeComplete"];
                $instance->timebillable = $records["TimeBillable"];
                $instance->timenonbillable = $records["TimeNonBillable"];
                $instance->timetotal = $records["TimeTotal"];
                $instance->traveltime = $records["TravelTime"];
                $instance->travelkm = $records["TravelKM"];
                $instance->travelbillable = $records["TravelBillable"];
                $instance->txtp = $records["TxTp"];
                $instance->docno = $records["DocNo"];
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
	Main Constructor For Declearing Using TechCode
	*/
	
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