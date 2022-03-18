<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	GSMCRDContacts

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar ContactName" of type [nvarchar]
	"public nvarchar Designation" of type [nvarchar]
	"public nvarchar Telephone" of type [nvarchar]
	"public nvarchar Cellphone" of type [nvarchar]
	"public nvarchar Fax" of type [nvarchar]
	"public nvarchar Email" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmcrdcontacts {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $account ;	
	public $contactname ;	
	public $designation ;	
	public $telephone ;	
	public $cellphone ;	
	public $fax ;	
	public $email ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RecID, [Account], [ContactName], [Designation], [Telephone], [Cellphone], [Fax], [Email], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMCRDContacts]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->account = $records["Account"];
				$instance->contactname = $records["ContactName"];
				$instance->designation = $records["Designation"];
				$instance->telephone = $records["Telephone"];
				$instance->cellphone = $records["Cellphone"];
				$instance->fax = $records["Fax"];
				$instance->email = $records["Email"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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
			$res = $this->contactname;
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