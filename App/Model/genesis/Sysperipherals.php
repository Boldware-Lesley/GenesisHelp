<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	SYSPeripherals

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Code" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar MacID" of type [nvarchar]
	"public nvarchar IPAddr" of type [nvarchar]
	"public nvarchar Port" of type [nvarchar]
	"public int BaudRate" of type [int]
	"public nvarchar Parity" of type [nvarchar]
	"public int DataBits" of type [int]
	"public float StopBits" of type [float]
	"public int WeightLen" of type [int]
	"public float Divider" of type [float]
	"public int ReadInterval" of type [int]
	"public nvarchar Identifier" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysperipherals {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $code ;	
	public $description ;	
	public $macid ;	
	public $ipaddr ;	
	public $port ;	
	public $baudrate ;	
	public $parity ;	
	public $databits ;	
	public $stopbits ;	
	public $weightlen ;	
	public $divider ;	
	public $readinterval ;	
	public $identifier ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Code], [Description], [MacID], [IPAddr], [Port], [BaudRate], [Parity], [DataBits], [StopBits], [WeightLen], [Divider], [ReadInterval], [Identifier] FROM [SYSPeripherals]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->code = $records["Code"];
				$instance->description = $records["Description"];
				$instance->macid = $records["MacID"];
				$instance->ipaddr = $records["IPAddr"];
				$instance->port = $records["Port"];
				$instance->baudrate = $records["BaudRate"];
				$instance->parity = $records["Parity"];
				$instance->databits = $records["DataBits"];
				$instance->stopbits = $records["StopBits"];
				$instance->weightlen = $records["WeightLen"];
				$instance->divider = $records["Divider"];
				$instance->readinterval = $records["ReadInterval"];
				$instance->identifier = $records["Identifier"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using Code
	*/
	public static function ini_Code($code) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Code], [Description], [MacID], [IPAddr], [Port], [BaudRate], [Parity], [DataBits], [StopBits], [WeightLen], [Divider], [ReadInterval], [Identifier] FROM [SYSPeripherals]  WHERE [Code]=:code  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":code", $code);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->code = $records["Code"];
				$instance->description = $records["Description"];
				$instance->macid = $records["MacID"];
				$instance->ipaddr = $records["IPAddr"];
				$instance->port = $records["Port"];
				$instance->baudrate = $records["BaudRate"];
				$instance->parity = $records["Parity"];
				$instance->databits = $records["DataBits"];
				$instance->stopbits = $records["StopBits"];
				$instance->weightlen = $records["WeightLen"];
				$instance->divider = $records["Divider"];
				$instance->readinterval = $records["ReadInterval"];
				$instance->identifier = $records["Identifier"];
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
			$res = $this->description;
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