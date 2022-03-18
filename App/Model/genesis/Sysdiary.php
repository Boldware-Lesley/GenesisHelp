<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	SYSDiary

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar MODCODE" of type [nvarchar]
	"public nvarchar USERCODE" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TITLE" of type [nvarchar]
	"public nvarchar ENTRYDATE" of type [nvarchar]
	"public nvarchar DUEDATE" of type [nvarchar]
	"public nvarchar COMPLETEDATE" of type [nvarchar]
	"public nvarchar PRIVATE" of type [nvarchar]
	"public ntext NOTEPAD" of type [ntext]
*/
namespace genesis;


use PDO;

class Sysdiary {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $modcode ;	
	public $usercode ;	
	public $account ;	
	public $title ;	
	public $entrydate ;	
	public $duedate ;	
	public $completedate ;	
	public $private ;	
	public $notepad ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [MODCODE], [USERCODE], [ACCOUNT], [TITLE], [ENTRYDATE], [DUEDATE], [COMPLETEDATE], [PRIVATE], [NOTEPAD] FROM [SYSDiary]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->modcode = $records["MODCODE"];
				$instance->usercode = $records["USERCODE"];
				$instance->account = $records["ACCOUNT"];
				$instance->title = $records["TITLE"];
				$instance->entrydate = $records["ENTRYDATE"];
				$instance->duedate = $records["DUEDATE"];
				$instance->completedate = $records["COMPLETEDATE"];
				$instance->private = $records["PRIVATE"];
				$instance->notepad = $records["NOTEPAD"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using MODCODE
	*/
	public static function ini_MODCODE($modcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [MODCODE], [USERCODE], [ACCOUNT], [TITLE], [ENTRYDATE], [DUEDATE], [COMPLETEDATE], [PRIVATE], [NOTEPAD] FROM [SYSDiary]  WHERE [MODCODE]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->modcode = $records["MODCODE"];
				$instance->usercode = $records["USERCODE"];
				$instance->account = $records["ACCOUNT"];
				$instance->title = $records["TITLE"];
				$instance->entrydate = $records["ENTRYDATE"];
				$instance->duedate = $records["DUEDATE"];
				$instance->completedate = $records["COMPLETEDATE"];
				$instance->private = $records["PRIVATE"];
				$instance->notepad = $records["NOTEPAD"];
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
			$res = $this->title;
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