<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	GSMSeason

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar SEASONCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar SEASONSTART" of type [nvarchar]
	"public nvarchar SEASONEND" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmseason {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $seasoncode ;	
	public $description ;	
	public $seasonstart ;	
	public $seasonend ;	
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
			$query = " SELECT RECID, [SEASONCODE], [DESCRIPTION], [SEASONSTART], [SEASONEND], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [GSMSeason]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->seasoncode = $records["SEASONCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->seasonstart = $records["SEASONSTART"];
				$instance->seasonend = $records["SEASONEND"];
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
	Main Constructor For Declearing Using SEASONCODE
	*/
	public static function ini_SEASONCODE($seasoncode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [SEASONCODE], [DESCRIPTION], [SEASONSTART], [SEASONEND], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [GSMSeason]  WHERE [SEASONCODE]=:seasoncode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":seasoncode", $seasoncode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->seasoncode = $records["SEASONCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->seasonstart = $records["SEASONSTART"];
				$instance->seasonend = $records["SEASONEND"];
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