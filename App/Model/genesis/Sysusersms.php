<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:40
@Database			:	GENESIS-DEMO
@Table			:	SysUserSMS

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar UserCode" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar SMS" of type [nvarchar]
	"public nvarchar EMail" of type [nvarchar]
	"public nvarchar TxtHeader" of type [nvarchar]
	"public nvarchar TxtTrailer" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysusersms {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $usercode ;	
	public $txtp ;	
	public $sms ;	
	public $email ;	
	public $txtheader ;	
	public $txttrailer ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [UserCode], [TxTp], [SMS], [EMail], [TxtHeader], [TxtTrailer] FROM [SysUserSMS]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->usercode = $records["UserCode"];
				$instance->txtp = $records["TxTp"];
				$instance->sms = $records["SMS"];
				$instance->email = $records["EMail"];
				$instance->txtheader = $records["TxtHeader"];
				$instance->txttrailer = $records["TxtTrailer"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using UserCode
	*/
	public static function ini_UserCode($usercode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [UserCode], [TxTp], [SMS], [EMail], [TxtHeader], [TxtTrailer] FROM [SysUserSMS]  WHERE [UserCode]=:usercode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":usercode", $usercode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->usercode = $records["UserCode"];
				$instance->txtp = $records["TxTp"];
				$instance->sms = $records["SMS"];
				$instance->email = $records["EMail"];
				$instance->txtheader = $records["TxtHeader"];
				$instance->txttrailer = $records["TxtTrailer"];
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