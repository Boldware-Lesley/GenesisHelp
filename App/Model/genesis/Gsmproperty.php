<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	GSMProperty

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public int PROPNO" of type [int]
	"public nvarchar PROPCODE" of type [nvarchar]
	"public nvarchar PROPDESCRIPTION" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmproperty {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $propno ;	
	public $propcode ;	
	public $propdescription ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [PROPNO], [PROPCODE], [PROPDESCRIPTION] FROM [GSMProperty]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->propno = $records["PROPNO"];
				$instance->propcode = $records["PROPCODE"];
				$instance->propdescription = $records["PROPDESCRIPTION"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using PROPCODE
	*/
	public static function ini_PROPCODE($propcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [PROPNO], [PROPCODE], [PROPDESCRIPTION] FROM [GSMProperty]  WHERE [PROPCODE]=:propcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":propcode", $propcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->propno = $records["PROPNO"];
				$instance->propcode = $records["PROPCODE"];
				$instance->propdescription = $records["PROPDESCRIPTION"];
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
			$res = $this->propdescription;
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