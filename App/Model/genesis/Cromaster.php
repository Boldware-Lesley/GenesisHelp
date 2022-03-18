<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	CROMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar CRONo" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
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
	"public nvarchar LocCode" of type [nvarchar]
	"public nvarchar TechCode" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar DeliveryDate" of type [nvarchar]
	"public float TotalCharge" of type [float]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar AuthDate" of type [nvarchar]
	"public nvarchar AuthTime" of type [nvarchar]
	"public nvarchar AuthUser" of type [nvarchar]
	"public nvarchar AuthMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Cromaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $crono ;	
	public $trandate ;	
	public $account ;	
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
	public $loccode ;	
	public $techcode ;	
	public $status ;	
	public $deliverydate ;	
	public $totalcharge ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $authdate ;	
	public $authtime ;	
	public $authuser ;	
	public $authmacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [CRONo], [TranDate], [Account], [Name], [Address1], [Address2], [Address3], [Address4], [PostCode], [Telephone1], [Telephone2], [Cellphone], [Contact], [EMail], [Reference], [LocCode], [TechCode], [Status], [DeliveryDate], [TotalCharge], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [AuthDate], [AuthTime], [AuthUser], [AuthMacID] FROM [CROMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->crono = $records["CRONo"];
				$instance->trandate = $records["TranDate"];
				$instance->account = $records["Account"];
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
				$instance->loccode = $records["LocCode"];
				$instance->techcode = $records["TechCode"];
				$instance->status = $records["Status"];
				$instance->deliverydate = $records["DeliveryDate"];
				$instance->totalcharge = $records["TotalCharge"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["AuthTime"];
				$instance->authuser = $records["AuthUser"];
				$instance->authmacid = $records["AuthMacID"];
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
			$query = " SELECT RecID, [CO], [Branch], [CRONo], [TranDate], [Account], [Name], [Address1], [Address2], [Address3], [Address4], [PostCode], [Telephone1], [Telephone2], [Cellphone], [Contact], [EMail], [Reference], [LocCode], [TechCode], [Status], [DeliveryDate], [TotalCharge], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [AuthDate], [AuthTime], [AuthUser], [AuthMacID] FROM [CROMaster]  WHERE [PostCode]=:postcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":postcode", $postcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->crono = $records["CRONo"];
				$instance->trandate = $records["TranDate"];
				$instance->account = $records["Account"];
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
				$instance->loccode = $records["LocCode"];
				$instance->techcode = $records["TechCode"];
				$instance->status = $records["Status"];
				$instance->deliverydate = $records["DeliveryDate"];
				$instance->totalcharge = $records["TotalCharge"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["AuthTime"];
				$instance->authuser = $records["AuthUser"];
				$instance->authmacid = $records["AuthMacID"];
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