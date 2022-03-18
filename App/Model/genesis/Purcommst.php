<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	PURComMst

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar COMNO" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar ADDRESS1" of type [nvarchar]
	"public nvarchar ADDRESS2" of type [nvarchar]
	"public nvarchar ADDRESS3" of type [nvarchar]
	"public nvarchar ADDRESS4" of type [nvarchar]
	"public nvarchar TELEPHONE" of type [nvarchar]
	"public nvarchar FAX" of type [nvarchar]
	"public nvarchar EMAIL" of type [nvarchar]
	"public nvarchar CONTACT" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Purcommst {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $comno ;	
	public $name ;	
	public $address1 ;	
	public $address2 ;	
	public $address3 ;	
	public $address4 ;	
	public $telephone ;	
	public $fax ;	
	public $email ;	
	public $contact ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RECID, [CO], [COMNO], [NAME], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [TELEPHONE], [FAX], [EMAIL], [CONTACT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [PURComMst]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->comno = $records["COMNO"];
				$instance->name = $records["NAME"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->telephone = $records["TELEPHONE"];
				$instance->fax = $records["FAX"];
				$instance->email = $records["EMAIL"];
				$instance->contact = $records["CONTACT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
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