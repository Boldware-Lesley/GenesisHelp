<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	SVMLeaveAPP

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TechCode" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar FirstDate" of type [nvarchar]
	"public nvarchar LastDate" of type [nvarchar]
	"public nvarchar LeaveType" of type [nvarchar]
	"public float Days" of type [float]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Comment" of type [nvarchar]
	"public nvarchar DTOApplied" of type [nvarchar]
	"public nvarchar DTOReply" of type [nvarchar]
	"public image Signature" of type [image]
*/
namespace genesis;


use PDO;

class Svmleaveapp {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $techcode ;	
	public $name ;	
	public $firstdate ;	
	public $lastdate ;	
	public $leavetype ;	
	public $days ;	
	public $status ;	
	public $comment ;	
	public $dtoapplied ;	
	public $dtoreply ;	
	public $signature ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TechCode], [Name], [FirstDate], [LastDate], [LeaveType], [Days], [Status], [Comment], [DTOApplied], [DTOReply], [Signature] FROM [SVMLeaveAPP]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->techcode = $records["TechCode"];
				$instance->name = $records["Name"];
				$instance->firstdate = $records["FirstDate"];
				$instance->lastdate = $records["LastDate"];
				$instance->leavetype = $records["LeaveType"];
				$instance->days = $records["Days"];
				$instance->status = $records["Status"];
				$instance->comment = $records["Comment"];
				$instance->dtoapplied = $records["DTOApplied"];
				$instance->dtoreply = $records["DTOReply"];
				$instance->signature = $records["Signature"];
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
			$query = " SELECT RecID, [CO], [Branch], [TechCode], [Name], [FirstDate], [LastDate], [LeaveType], [Days], [Status], [Comment], [DTOApplied], [DTOReply], [Signature] FROM [SVMLeaveAPP]  WHERE [TechCode]=:techcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":techcode", $techcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->techcode = $records["TechCode"];
				$instance->name = $records["Name"];
				$instance->firstdate = $records["FirstDate"];
				$instance->lastdate = $records["LastDate"];
				$instance->leavetype = $records["LeaveType"];
				$instance->days = $records["Days"];
				$instance->status = $records["Status"];
				$instance->comment = $records["Comment"];
				$instance->dtoapplied = $records["DTOApplied"];
				$instance->dtoreply = $records["DTOReply"];
				$instance->signature = $records["Signature"];
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