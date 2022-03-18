<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	CROParties

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar CRONo" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar Address1" of type [nvarchar]
	"public nvarchar Address2" of type [nvarchar]
	"public nvarchar Address3" of type [nvarchar]
	"public nvarchar Address4" of type [nvarchar]
	"public nvarchar PostCode" of type [nvarchar]
	"public nvarchar Telephone1" of type [nvarchar]
	"public nvarchar Telephone2" of type [nvarchar]
	"public nvarchar Cellphone" of type [nvarchar]
	"public nvarchar Contact" of type [nvarchar]
	"public nvarchar EMail" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Croparties {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $crono ;	
	public $name ;	
	public $address1 ;	
	public $address2 ;	
	public $address3 ;	
	public $address4 ;	
	public $postcode ;	
	public $telephone1 ;	
	public $telephone2 ;	
	public $cellphone ;	
	public $contact ;	
	public $email ;	
	public $reference ;	
	public $notes ;	
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
			$query = " SELECT RecID, [CO], [Branch], [CRONo], [Name], [Address1], [Address2], [Address3], [Address4], [PostCode], [Telephone1], [Telephone2], [Cellphone], [Contact], [EMail], [Reference], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [CROParties]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->crono = $records["CRONo"];
				$instance->name = $records["Name"];
				$instance->address1 = $records["Address1"];
				$instance->address2 = $records["Address2"];
				$instance->address3 = $records["Address3"];
				$instance->address4 = $records["Address4"];
				$instance->postcode = $records["PostCode"];
				$instance->telephone1 = $records["Telephone1"];
				$instance->telephone2 = $records["Telephone2"];
				$instance->cellphone = $records["Cellphone"];
				$instance->contact = $records["Contact"];
				$instance->email = $records["EMail"];
				$instance->reference = $records["Reference"];
				$instance->notes = $records["Notes"];
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
	/**
	Main Constructor For Declearing Using PostCode
	*/
	public static function ini_PostCode($postcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [CRONo], [Name], [Address1], [Address2], [Address3], [Address4], [PostCode], [Telephone1], [Telephone2], [Cellphone], [Contact], [EMail], [Reference], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [CROParties]  WHERE [PostCode]=:postcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":postcode", $postcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->crono = $records["CRONo"];
				$instance->name = $records["Name"];
				$instance->address1 = $records["Address1"];
				$instance->address2 = $records["Address2"];
				$instance->address3 = $records["Address3"];
				$instance->address4 = $records["Address4"];
				$instance->postcode = $records["PostCode"];
				$instance->telephone1 = $records["Telephone1"];
				$instance->telephone2 = $records["Telephone2"];
				$instance->cellphone = $records["Cellphone"];
				$instance->contact = $records["Contact"];
				$instance->email = $records["EMail"];
				$instance->reference = $records["Reference"];
				$instance->notes = $records["Notes"];
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