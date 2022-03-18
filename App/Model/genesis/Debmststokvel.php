<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	DEBMstStokvel

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar SVMemberNo" of type [nvarchar]
	"public nvarchar MemberName" of type [nvarchar]
	"public nvarchar BusAddress1" of type [nvarchar]
	"public nvarchar BusAddress2" of type [nvarchar]
	"public nvarchar BusAddress3" of type [nvarchar]
	"public nvarchar BusAddress4" of type [nvarchar]
	"public nvarchar BusPostCode" of type [nvarchar]
	"public nvarchar PostAddress1" of type [nvarchar]
	"public nvarchar PostAddress2" of type [nvarchar]
	"public nvarchar PostAddress3" of type [nvarchar]
	"public nvarchar PostAddress4" of type [nvarchar]
	"public nvarchar PostCode" of type [nvarchar]
	"public nvarchar CellPhone" of type [nvarchar]
	"public nvarchar Telephone" of type [nvarchar]
	"public nvarchar Email" of type [nvarchar]
	"public nvarchar IDNo" of type [nvarchar]
	"public nvarchar DateJoined" of type [nvarchar]
	"public int MemberPswd" of type [int]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar MemberType" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debmststokvel {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $svmemberno ;	
	public $membername ;	
	public $busaddress1 ;	
	public $busaddress2 ;	
	public $busaddress3 ;	
	public $busaddress4 ;	
	public $buspostcode ;	
	public $postaddress1 ;	
	public $postaddress2 ;	
	public $postaddress3 ;	
	public $postaddress4 ;	
	public $postcode ;	
	public $cellphone ;	
	public $telephone ;	
	public $email ;	
	public $idno ;	
	public $datejoined ;	
	public $memberpswd ;	
	public $status ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $membertype ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [SVMemberNo], [MemberName], [BusAddress1], [BusAddress2], [BusAddress3], [BusAddress4], [BusPostCode], [PostAddress1], [PostAddress2], [PostAddress3], [PostAddress4], [PostCode], [CellPhone], [Telephone], [Email], [IDNo], [DateJoined], [MemberPswd], [Status], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [MemberType] FROM [DEBMstStokvel]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->svmemberno = $records["SVMemberNo"];
				$instance->membername = $records["MemberName"];
				$instance->busaddress1 = $records["BusAddress1"];
				$instance->busaddress2 = $records["BusAddress2"];
				$instance->busaddress3 = $records["BusAddress3"];
				$instance->busaddress4 = $records["BusAddress4"];
				$instance->buspostcode = $records["BusPostCode"];
				$instance->postaddress1 = $records["PostAddress1"];
				$instance->postaddress2 = $records["PostAddress2"];
				$instance->postaddress3 = $records["PostAddress3"];
				$instance->postaddress4 = $records["PostAddress4"];
				$instance->postcode = $records["PostCode"];
				$instance->cellphone = $records["CellPhone"];
				$instance->telephone = $records["Telephone"];
				$instance->email = $records["Email"];
				$instance->idno = $records["IDNo"];
				$instance->datejoined = $records["DateJoined"];
				$instance->memberpswd = $records["MemberPswd"];
				$instance->status = $records["Status"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->membertype = $records["MemberType"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using BusPostCode
	*/
	public static function ini_BusPostCode($buspostcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [SVMemberNo], [MemberName], [BusAddress1], [BusAddress2], [BusAddress3], [BusAddress4], [BusPostCode], [PostAddress1], [PostAddress2], [PostAddress3], [PostAddress4], [PostCode], [CellPhone], [Telephone], [Email], [IDNo], [DateJoined], [MemberPswd], [Status], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [MemberType] FROM [DEBMstStokvel]  WHERE [BusPostCode]=:buspostcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":buspostcode", $buspostcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->svmemberno = $records["SVMemberNo"];
				$instance->membername = $records["MemberName"];
				$instance->busaddress1 = $records["BusAddress1"];
				$instance->busaddress2 = $records["BusAddress2"];
				$instance->busaddress3 = $records["BusAddress3"];
				$instance->busaddress4 = $records["BusAddress4"];
				$instance->buspostcode = $records["BusPostCode"];
				$instance->postaddress1 = $records["PostAddress1"];
				$instance->postaddress2 = $records["PostAddress2"];
				$instance->postaddress3 = $records["PostAddress3"];
				$instance->postaddress4 = $records["PostAddress4"];
				$instance->postcode = $records["PostCode"];
				$instance->cellphone = $records["CellPhone"];
				$instance->telephone = $records["Telephone"];
				$instance->email = $records["Email"];
				$instance->idno = $records["IDNo"];
				$instance->datejoined = $records["DateJoined"];
				$instance->memberpswd = $records["MemberPswd"];
				$instance->status = $records["Status"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->membertype = $records["MemberType"];
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
			$res = $this->membername;
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