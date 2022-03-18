<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	POSAirtimeMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Manufacturer" of type [nvarchar]
	"public nvarchar CatCode" of type [nvarchar]
	"public nvarchar CatDescription" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
	"public nvarchar DiscType" of type [nvarchar]
	"public float DiscValue" of type [float]
*/
namespace genesis;


use PDO;

class Posairtimemaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $manufacturer ;	
	public $catcode ;	
	public $catdescription ;	
	public $vatcode ;	
	public $disctype ;	
	public $discvalue ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Manufacturer], [CatCode], [CatDescription], [VATCode], [DiscType], [DiscValue] FROM [POSAirtimeMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->manufacturer = $records["Manufacturer"];
				$instance->catcode = $records["CatCode"];
				$instance->catdescription = $records["CatDescription"];
				$instance->vatcode = $records["VATCode"];
				$instance->disctype = $records["DiscType"];
				$instance->discvalue = $records["DiscValue"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CatCode
	*/
	public static function ini_CatCode($catcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Manufacturer], [CatCode], [CatDescription], [VATCode], [DiscType], [DiscValue] FROM [POSAirtimeMaster]  WHERE [CatCode]=:catcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":catcode", $catcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->manufacturer = $records["Manufacturer"];
				$instance->catcode = $records["CatCode"];
				$instance->catdescription = $records["CatDescription"];
				$instance->vatcode = $records["VATCode"];
				$instance->disctype = $records["DiscType"];
				$instance->discvalue = $records["DiscValue"];
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
			$res = $this->catdescription;
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