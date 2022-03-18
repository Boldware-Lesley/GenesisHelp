<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	GSMUmsSuppliers

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar SupplierID" of type [nvarchar]
	"public nvarchar Title" of type [nvarchar]
	"public nvarchar CompRegName" of type [nvarchar]
	"public nvarchar VATNumber" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar BusAddress" of type [nvarchar]
	"public nvarchar PostAddress" of type [nvarchar]
	"public nvarchar Telephone" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmumssuppliers {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $supplierid ;	
	public $title ;	
	public $compregname ;	
	public $vatnumber ;	
	public $status ;	
	public $busaddress ;	
	public $postaddress ;	
	public $telephone ;	
	public $account ;	
	
	
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
			$query = " SELECT RecID, [SupplierID], [Title], [CompRegName], [VATNumber], [Status], [BusAddress], [PostAddress], [Telephone], [Account] FROM [GSMUmsSuppliers]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->supplierid = $records["SupplierID"];
				$instance->title = $records["Title"];
				$instance->compregname = $records["CompRegName"];
				$instance->vatnumber = $records["VATNumber"];
				$instance->status = $records["Status"];
				$instance->busaddress = $records["BusAddress"];
				$instance->postaddress = $records["PostAddress"];
				$instance->telephone = $records["Telephone"];
				$instance->account = $records["Account"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using VATNumber
	*/
	public static function ini_VATNumber($vatnumber) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [SupplierID], [Title], [CompRegName], [VATNumber], [Status], [BusAddress], [PostAddress], [Telephone], [Account] FROM [GSMUmsSuppliers]  WHERE [VATNumber]=:vatnumber  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":vatnumber", $vatnumber);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->supplierid = $records["SupplierID"];
				$instance->title = $records["Title"];
				$instance->compregname = $records["CompRegName"];
				$instance->vatnumber = $records["VATNumber"];
				$instance->status = $records["Status"];
				$instance->busaddress = $records["BusAddress"];
				$instance->postaddress = $records["PostAddress"];
				$instance->telephone = $records["Telephone"];
				$instance->account = $records["Account"];
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
			$res = $this->title;
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