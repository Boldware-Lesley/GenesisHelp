<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:40
@Database			:	GENESIS-DEMO
@Table			:	SVMJobAudit

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int JobNo" of type [int]
	"public int LineNumber" of type [int]
	"public nvarchar TechCode" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TranTime" of type [nvarchar]
	"public nvarchar ReasonCode" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Svmjobaudit {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $jobno ;	
	public $linenumber ;	
	public $techcode ;	
	public $trandate ;	
	public $trantime ;	
	public $reasoncode ;	
	public $details ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [JobNo], [LineNumber], [TechCode], [TranDate], [TranTime], [ReasonCode], [Details] FROM [SVMJobAudit]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->jobno = $records["JobNo"];
				$instance->linenumber = $records["LineNumber"];
				$instance->techcode = $records["TechCode"];
				$instance->trandate = $records["TranDate"];
				$instance->trantime = $records["TranTime"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->details = $records["Details"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using LineNumber
	*/
	public static function ini_LineNumber($linenumber) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [JobNo], [LineNumber], [TechCode], [TranDate], [TranTime], [ReasonCode], [Details] FROM [SVMJobAudit]  WHERE [LineNumber]=:linenumber  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":linenumber", $linenumber);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->jobno = $records["JobNo"];
				$instance->linenumber = $records["LineNumber"];
				$instance->techcode = $records["TechCode"];
				$instance->trandate = $records["TranDate"];
				$instance->trantime = $records["TranTime"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->details = $records["Details"];
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