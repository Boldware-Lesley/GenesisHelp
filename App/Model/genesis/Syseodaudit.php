<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	SYSEODAudit

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar RunDate" of type [nvarchar]
	"public nvarchar FormCode" of type [nvarchar]
	"public nvarchar FormDesc" of type [nvarchar]
	"public nvarchar StartDate" of type [nvarchar]
	"public nvarchar StartTime" of type [nvarchar]
	"public nvarchar EndDate" of type [nvarchar]
	"public nvarchar EndTime" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar ReturnMsg" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Syseodaudit {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $rundate ;	
	public $formcode ;	
	public $formdesc ;	
	public $startdate ;	
	public $starttime ;	
	public $enddate ;	
	public $endtime ;	
	public $status ;	
	public $returnmsg ;	
	public $notes ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [RunDate], [FormCode], [FormDesc], [StartDate], [StartTime], [EndDate], [EndTime], [Status], [ReturnMsg], [Notes] FROM [SYSEODAudit]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->rundate = $records["RunDate"];
				$instance->formcode = $records["FormCode"];
				$instance->formdesc = $records["FormDesc"];
				$instance->startdate = $records["StartDate"];
				$instance->starttime = $records["StartTime"];
				$instance->enddate = $records["EndDate"];
				$instance->endtime = $records["EndTime"];
				$instance->status = $records["Status"];
				$instance->returnmsg = $records["ReturnMsg"];
				$instance->notes = $records["Notes"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using FormCode
	*/
	public static function ini_FormCode($formcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [RunDate], [FormCode], [FormDesc], [StartDate], [StartTime], [EndDate], [EndTime], [Status], [ReturnMsg], [Notes] FROM [SYSEODAudit]  WHERE [FormCode]=:formcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":formcode", $formcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->rundate = $records["RunDate"];
				$instance->formcode = $records["FormCode"];
				$instance->formdesc = $records["FormDesc"];
				$instance->startdate = $records["StartDate"];
				$instance->starttime = $records["StartTime"];
				$instance->enddate = $records["EndDate"];
				$instance->endtime = $records["EndTime"];
				$instance->status = $records["Status"];
				$instance->returnmsg = $records["ReturnMsg"];
				$instance->notes = $records["Notes"];
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