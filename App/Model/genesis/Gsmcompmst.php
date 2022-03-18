<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	GSMCompMst

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar ComNo" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar Address1" of type [nvarchar]
	"public nvarchar Address2" of type [nvarchar]
	"public nvarchar Address3" of type [nvarchar]
	"public nvarchar Address4" of type [nvarchar]
	"public nvarchar TelePhone" of type [nvarchar]
	"public nvarchar Fax" of type [nvarchar]
	"public nvarchar Email" of type [nvarchar]
	"public nvarchar Contact" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmcompmst {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
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
	public static function ini_RecID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [ComNo], [Name], [Address1], [Address2], [Address3], [Address4], [TelePhone], [Fax], [Email], [Contact], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMCompMst]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->comno = $records["ComNo"];
				$instance->name = $records["Name"];
				$instance->address1 = $records["Address1"];
				$instance->address2 = $records["Address2"];
				$instance->address3 = $records["Address3"];
				$instance->address4 = $records["Address4"];
				$instance->telephone = $records["TelePhone"];
				$instance->fax = $records["Fax"];
				$instance->email = $records["Email"];
				$instance->contact = $records["Contact"];
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