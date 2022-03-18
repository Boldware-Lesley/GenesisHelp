<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	SYSRepImages

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar ImageCode" of type [nvarchar]
	"public nvarchar ImageName" of type [nvarchar]
	"public image ImageData" of type [image]
*/
namespace genesis;


use PDO;

class Sysrepimages {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $imagecode ;	
	public $imagename ;	
	public $imagedata ;	
	
	
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
			$query = " SELECT RecID, [CO], [ImageCode], [ImageName], [ImageData] FROM [SYSRepImages]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->imagecode = $records["ImageCode"];
				$instance->imagename = $records["ImageName"];
				$instance->imagedata = $records["ImageData"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using ImageCode
	*/
	public static function ini_ImageCode($imagecode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [ImageCode], [ImageName], [ImageData] FROM [SYSRepImages]  WHERE [ImageCode]=:imagecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":imagecode", $imagecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->imagecode = $records["ImageCode"];
				$instance->imagename = $records["ImageName"];
				$instance->imagedata = $records["ImageData"];
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
			$res = $this->imagename;
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