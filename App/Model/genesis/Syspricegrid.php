<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	SYSPriceGrid

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar Code" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar Color" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Syspricegrid {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $code ;	
	public $description ;	
	public $color ;	
	
	
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
			$query = " SELECT RecID, [Code], [Description], [Color] FROM [SYSPriceGrid]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->code = $records["Code"];
				$instance->description = $records["Description"];
				$instance->color = $records["Color"];
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
			$query = " SELECT RecID, [Code], [Description], [Color] FROM [SYSPriceGrid]  WHERE [Code]=:code  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":code", $code);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->code = $records["Code"];
				$instance->description = $records["Description"];
				$instance->color = $records["Color"];
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