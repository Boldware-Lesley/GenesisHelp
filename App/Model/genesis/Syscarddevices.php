<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	SysCardDevices

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar DeviceID" of type [nvarchar]
	"public nvarchar BankName" of type [nvarchar]
	"public nvarchar DeviceType" of type [nvarchar]
	"public nvarchar ReferenceID" of type [nvarchar]
	"public nvarchar DefaultMACID" of type [nvarchar]
	"public nvarchar DefaultTill" of type [nvarchar]
	"public nvarchar HostAddress" of type [nvarchar]
	"public nvarchar UniqueID" of type [nvarchar]
	"public nvarchar SerialNo" of type [nvarchar]
	"public nvarchar Issuer" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Syscarddevices {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $deviceid ;	
	public $bankname ;	
	public $devicetype ;	
	public $referenceid ;	
	public $defaultmacid ;	
	public $defaulttill ;	
	public $hostaddress ;	
	public $uniqueid ;	
	public $serialno ;	
	public $issuer ;	
	public $status ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [DeviceID], [BankName], [DeviceType], [ReferenceID], [DefaultMACID], [DefaultTill], [HostAddress], [UniqueID], [SerialNo], [Issuer], [Status] FROM [SysCardDevices]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->deviceid = $records["DeviceID"];
				$instance->bankname = $records["BankName"];
				$instance->devicetype = $records["DeviceType"];
				$instance->referenceid = $records["ReferenceID"];
				$instance->defaultmacid = $records["DefaultMACID"];
				$instance->defaulttill = $records["DefaultTill"];
				$instance->hostaddress = $records["HostAddress"];
				$instance->uniqueid = $records["UniqueID"];
				$instance->serialno = $records["SerialNo"];
				$instance->issuer = $records["Issuer"];
				$instance->status = $records["Status"];
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
			$res = $this->bankname;
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