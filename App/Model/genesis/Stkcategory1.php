<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	STKCategory1

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar CATEGORY1" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar FOODLINK" of type [nvarchar]
	"public nvarchar DEPTCODE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkcategory1 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $category1 ;	
	public $description ;	
	public $foodlink ;	
	public $deptcode ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RECID, [CO], [CATEGORY1], [DESCRIPTION], [FOODLINK], [DEPTCODE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [STKCategory1]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->category1 = $records["CATEGORY1"];
				$instance->description = $records["DESCRIPTION"];
				$instance->foodlink = $records["FOODLINK"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using DEPTCODE
	*/
	public static function ini_DEPTCODE($deptcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [CATEGORY1], [DESCRIPTION], [FOODLINK], [DEPTCODE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [STKCategory1]  WHERE [DEPTCODE]=:deptcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":deptcode", $deptcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->category1 = $records["CATEGORY1"];
				$instance->description = $records["DESCRIPTION"];
				$instance->foodlink = $records["FOODLINK"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
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