<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	SYSUserForms

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar USERCODE" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar FORMCODE" of type [nvarchar]
	"public nvarchar FORMNAME" of type [nvarchar]
	"public nvarchar PRINTERNAME" of type [nvarchar]
	"public int PRTCOPIES" of type [int]
	"public nvarchar PRTMSGMODCODE" of type [nvarchar]
	"public nvarchar PRTMSGCODE" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysuserforms {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $usercode ;	
	public $txtp ;	
	public $formcode ;	
	public $formname ;	
	public $printername ;	
	public $prtcopies ;	
	public $prtmsgmodcode ;	
	public $prtmsgcode ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [USERCODE], [TXTP], [FORMCODE], [FORMNAME], [PRINTERNAME], [PRTCOPIES], [PRTMSGMODCODE], [PRTMSGCODE] FROM [SYSUserForms]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->usercode = $records["USERCODE"];
				$instance->txtp = $records["TXTP"];
				$instance->formcode = $records["FORMCODE"];
				$instance->formname = $records["FORMNAME"];
				$instance->printername = $records["PRINTERNAME"];
				$instance->prtcopies = $records["PRTCOPIES"];
				$instance->prtmsgmodcode = $records["PRTMSGMODCODE"];
				$instance->prtmsgcode = $records["PRTMSGCODE"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using USERCODE
	*/
	public static function ini_USERCODE($usercode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [USERCODE], [TXTP], [FORMCODE], [FORMNAME], [PRINTERNAME], [PRTCOPIES], [PRTMSGMODCODE], [PRTMSGCODE] FROM [SYSUserForms]  WHERE [USERCODE]=:usercode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":usercode", $usercode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->usercode = $records["USERCODE"];
				$instance->txtp = $records["TXTP"];
				$instance->formcode = $records["FORMCODE"];
				$instance->formname = $records["FORMNAME"];
				$instance->printername = $records["PRINTERNAME"];
				$instance->prtcopies = $records["PRTCOPIES"];
				$instance->prtmsgmodcode = $records["PRTMSGMODCODE"];
				$instance->prtmsgcode = $records["PRTMSGCODE"];
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
			$res = $this->formname;
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