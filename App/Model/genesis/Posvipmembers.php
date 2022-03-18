<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	POSVIPMembers

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int VIPNo" of type [int]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public nvarchar VIPCardNo" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar Title" of type [nvarchar]
	"public nvarchar Address1" of type [nvarchar]
	"public nvarchar Address2" of type [nvarchar]
	"public nvarchar Address3" of type [nvarchar]
	"public nvarchar Address4" of type [nvarchar]
	"public nvarchar PostCode" of type [nvarchar]
	"public nvarchar CellNo" of type [nvarchar]
	"public nvarchar Telephone" of type [nvarchar]
	"public nvarchar EMail" of type [nvarchar]
	"public nvarchar DateJoined" of type [nvarchar]
	"public nvarchar BirthDate" of type [nvarchar]
	"public nvarchar IDNo" of type [nvarchar]
	"public nvarchar Gender" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar VIPPackCode" of type [nvarchar]
	"public nvarchar VIPGradeCode" of type [nvarchar]
	"public nvarchar VendorCardNo" of type [nvarchar]
	"public nvarchar DEBAccount" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posvipmembers {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $vipno ;	
	public $sourcebranch ;	
	public $vipcardno ;	
	public $name ;	
	public $title ;	
	public $address1 ;	
	public $address2 ;	
	public $address3 ;	
	public $address4 ;	
	public $postcode ;	
	public $cellno ;	
	public $telephone ;	
	public $email ;	
	public $datejoined ;	
	public $birthdate ;	
	public $idno ;	
	public $gender ;	
	public $status ;	
	public $vippackcode ;	
	public $vipgradecode ;	
	public $vendorcardno ;	
	public $debaccount ;	
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
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
			$query = " SELECT RecID, [CO], [VIPNo], [SourceBranch], [VIPCardNo], [Name], [Title], [Address1], [Address2], [Address3], [Address4], [PostCode], [CellNo], [Telephone], [EMail], [DateJoined], [BirthDate], [IDNo], [Gender], [Status], [VIPPackCode], [VIPGradeCode], [VendorCardNo], [DEBAccount], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSVIPMembers]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->vipno = $records["VIPNo"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->vipcardno = $records["VIPCardNo"];
				$instance->name = $records["Name"];
				$instance->title = $records["Title"];
				$instance->address1 = $records["Address1"];
				$instance->address2 = $records["Address2"];
				$instance->address3 = $records["Address3"];
				$instance->address4 = $records["Address4"];
				$instance->postcode = $records["PostCode"];
				$instance->cellno = $records["CellNo"];
				$instance->telephone = $records["Telephone"];
				$instance->email = $records["EMail"];
				$instance->datejoined = $records["DateJoined"];
				$instance->birthdate = $records["BirthDate"];
				$instance->idno = $records["IDNo"];
				$instance->gender = $records["Gender"];
				$instance->status = $records["Status"];
				$instance->vippackcode = $records["VIPPackCode"];
				$instance->vipgradecode = $records["VIPGradeCode"];
				$instance->vendorcardno = $records["VendorCardNo"];
				$instance->debaccount = $records["DEBAccount"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
			}
            $conn->Close();
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using PostCode
	*/
	public static function ini_code($code) {
		$instance = new self();
		try {
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
			$query = " SELECT RecID, [CO], [VIPNo], [SourceBranch], [VIPCardNo], [Name], [Title], [Address1], [Address2], [Address3], [Address4], [PostCode], [CellNo], [Telephone], [EMail], [DateJoined], [BirthDate], [IDNo], [Gender], [Status], [VIPPackCode], [VIPGradeCode], [VendorCardNo], [DEBAccount], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSVIPMembers]  WHERE [VIPNo]=:VIPNo  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":VIPNo", $code);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->vipno = $records["VIPNo"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->vipcardno = $records["VIPCardNo"];
				$instance->name = $records["Name"];
				$instance->title = $records["Title"];
				$instance->address1 = $records["Address1"];
				$instance->address2 = $records["Address2"];
				$instance->address3 = $records["Address3"];
				$instance->address4 = $records["Address4"];
				$instance->postcode = $records["PostCode"];
				$instance->cellno = $records["CellNo"];
				$instance->telephone = $records["Telephone"];
				$instance->email = $records["EMail"];
				$instance->datejoined = $records["DateJoined"];
				$instance->birthdate = $records["BirthDate"];
				$instance->idno = $records["IDNo"];
				$instance->gender = $records["Gender"];
				$instance->status = $records["Status"];
				$instance->vippackcode = $records["VIPPackCode"];
				$instance->vipgradecode = $records["VIPGradeCode"];
				$instance->vendorcardno = $records["VendorCardNo"];
				$instance->debaccount = $records["DEBAccount"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
			}
            $conn->Close();
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