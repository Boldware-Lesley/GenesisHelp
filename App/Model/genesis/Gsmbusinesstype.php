<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	GSMBusinessType

[@Descriptions]
Class is using the following global variables:
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar PROPCODE" of type [nvarchar]
	"public int PROPNO" of type [int]
	"public nvarchar SELECTED" of type [nvarchar]
	"public int RecID" of type [int]
*/
namespace genesis;


use PDO;

class Gsmbusinesstype {
	
	/*BEGIN <<Private Variables>> */
	
	public $co ;	
	public $stockcode ;	
	public $linkcode ;	
	public $propcode ;	
	public $propno ;	
	public $selected ;	
	public $recid ;	
	
	
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
			$query = " SELECT CO, [STOCKCODE], [LINKCODE], [PROPCODE], [PROPNO], [SELECTED], [RecID] FROM [GSMBusinessType]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->propcode = $records["PROPCODE"];
				$instance->propno = $records["PROPNO"];
				$instance->selected = $records["SELECTED"];
				$instance->recid = $records["RecID"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using STOCKCODE
	*/
	public static function ini_STOCKCODE($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT CO, [STOCKCODE], [LINKCODE], [PROPCODE], [PROPNO], [SELECTED], [RecID] FROM [GSMBusinessType]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->propcode = $records["PROPCODE"];
				$instance->propno = $records["PROPNO"];
				$instance->selected = $records["SELECTED"];
				$instance->recid = $records["RecID"];
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
			$res = $this->recid;
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