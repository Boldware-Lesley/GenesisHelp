<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	SYSDefForms

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar FormCode" of type [nvarchar]
	"public nvarchar FormName" of type [nvarchar]
	"public int PrtCopies" of type [int]
	"public nvarchar PrtMsgModCode" of type [nvarchar]
	"public nvarchar PrtMsgCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysdefforms {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $formcode ;	
	public $formname ;	
	public $prtcopies ;	
	public $prtmsgmodcode ;	
	public $prtmsgcode ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [FormCode], [FormName], [PrtCopies], [PrtMsgModCode], [PrtMsgCode] FROM [SYSDefForms]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->formcode = $records["FormCode"];
				$instance->formname = $records["FormName"];
				$instance->prtcopies = $records["PrtCopies"];
				$instance->prtmsgmodcode = $records["PrtMsgModCode"];
				$instance->prtmsgcode = $records["PrtMsgCode"];
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [FormCode], [FormName], [PrtCopies], [PrtMsgModCode], [PrtMsgCode] FROM [SYSDefForms]  WHERE [FormCode]=:formcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":formcode", $formcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->formcode = $records["FormCode"];
				$instance->formname = $records["FormName"];
				$instance->prtcopies = $records["PrtCopies"];
				$instance->prtmsgmodcode = $records["PrtMsgModCode"];
				$instance->prtmsgcode = $records["PrtMsgCode"];
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