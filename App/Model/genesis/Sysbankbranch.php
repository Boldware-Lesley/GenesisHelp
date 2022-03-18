<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	SYSBankBranch

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BANK" of type [nvarchar]
	"public nvarchar CODE" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar SERVICES" of type [nvarchar]
	"public nvarchar ADDRESS1" of type [nvarchar]
	"public nvarchar ADDRESS2" of type [nvarchar]
	"public nvarchar ADDRESS3" of type [nvarchar]
	"public nvarchar ADDRESS4" of type [nvarchar]
	"public nvarchar TELEPHONE" of type [nvarchar]
	"public nvarchar FAX" of type [nvarchar]
	"public nvarchar TELEX1" of type [nvarchar]
	"public nvarchar TELEX2" of type [nvarchar]
	"public nvarchar DATEMODIFIED" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysbankbranch {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $bank ;	
	public $code ;	
	public $name ;	
	public $services ;	
	public $address1 ;	
	public $address2 ;	
	public $address3 ;	
	public $address4 ;	
	public $telephone ;	
	public $fax ;	
	public $telex1 ;	
	public $telex2 ;	
	public $datemodified ;	
	
	
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
			$query = " SELECT RECID, [CO], [BANK], [CODE], [NAME], [SERVICES], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [TELEPHONE], [FAX], [TELEX1], [TELEX2], [DATEMODIFIED] FROM [SYSBankBranch]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->bank = $records["BANK"];
				$instance->code = $records["CODE"];
				$instance->name = $records["NAME"];
				$instance->services = $records["SERVICES"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->telephone = $records["TELEPHONE"];
				$instance->fax = $records["FAX"];
				$instance->telex1 = $records["TELEX1"];
				$instance->telex2 = $records["TELEX2"];
				$instance->datemodified = $records["DATEMODIFIED"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CODE
	*/
	public static function ini_CODE($code) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BANK], [CODE], [NAME], [SERVICES], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [TELEPHONE], [FAX], [TELEX1], [TELEX2], [DATEMODIFIED] FROM [SYSBankBranch]  WHERE [CODE]=:code  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":code", $code);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->bank = $records["BANK"];
				$instance->code = $records["CODE"];
				$instance->name = $records["NAME"];
				$instance->services = $records["SERVICES"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->telephone = $records["TELEPHONE"];
				$instance->fax = $records["FAX"];
				$instance->telex1 = $records["TELEX1"];
				$instance->telex2 = $records["TELEX2"];
				$instance->datemodified = $records["DATEMODIFIED"];
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