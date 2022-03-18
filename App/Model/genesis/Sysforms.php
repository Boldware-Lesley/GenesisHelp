<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	SYSForms

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar FORMCODE" of type [nvarchar]
	"public nvarchar FORMNAME" of type [nvarchar]
	"public nvarchar FORMTYPE" of type [nvarchar]
	"public nvarchar DEFAULTPRINTER" of type [nvarchar]
	"public nvarchar REPORTNAME" of type [nvarchar]
	"public nvarchar MsgModCode" of type [nvarchar]
	"public nvarchar MsgMod" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysforms {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $formcode ;	
	public $formname ;	
	public $formtype ;	
	public $defaultprinter ;	
	public $reportname ;	
	public $msgmodcode ;	
	public $msgmod ;	
	
	
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
			$query = " SELECT RECID, [FORMCODE], [FORMNAME], [FORMTYPE], [DEFAULTPRINTER], [REPORTNAME], [MsgModCode], [MsgMod] FROM [SYSForms]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->formcode = $records["FORMCODE"];
				$instance->formname = $records["FORMNAME"];
				$instance->formtype = $records["FORMTYPE"];
				$instance->defaultprinter = $records["DEFAULTPRINTER"];
				$instance->reportname = $records["REPORTNAME"];
				$instance->msgmodcode = $records["MsgModCode"];
				$instance->msgmod = $records["MsgMod"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using FORMCODE
	*/
	public static function ini_FORMCODE($formcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [FORMCODE], [FORMNAME], [FORMTYPE], [DEFAULTPRINTER], [REPORTNAME], [MsgModCode], [MsgMod] FROM [SYSForms]  WHERE [FORMCODE]=:formcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":formcode", $formcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->formcode = $records["FORMCODE"];
				$instance->formname = $records["FORMNAME"];
				$instance->formtype = $records["FORMTYPE"];
				$instance->defaultprinter = $records["DEFAULTPRINTER"];
				$instance->reportname = $records["REPORTNAME"];
				$instance->msgmodcode = $records["MsgModCode"];
				$instance->msgmod = $records["MsgMod"];
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