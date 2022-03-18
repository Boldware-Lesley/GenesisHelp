<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	MRJCodeChange

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar OldCode" of type [nvarchar]
	"public nvarchar NewCode" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Mrjcodechange {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $oldcode ;	
	public $newcode ;	
	public $dtodate ;	
	
	
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
			$query = " SELECT RecID, [OldCode], [NewCode], [DTODate] FROM [MRJCodeChange]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->oldcode = $records["OldCode"];
				$instance->newcode = $records["NewCode"];
				$instance->dtodate = $records["DTODate"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using OldCode
	*/
	public static function ini_OldCode($oldcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [OldCode], [NewCode], [DTODate] FROM [MRJCodeChange]  WHERE [OldCode]=:oldcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":oldcode", $oldcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->oldcode = $records["OldCode"];
				$instance->newcode = $records["NewCode"];
				$instance->dtodate = $records["DTODate"];
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