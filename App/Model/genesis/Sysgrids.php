<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	SYSGrids

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar USERCODE" of type [nvarchar]
	"public nvarchar SCREENID" of type [nvarchar]
	"public ntext GRIDSETTINGS" of type [ntext]
*/
namespace genesis;


use PDO;

class Sysgrids {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $usercode ;	
	public $screenid ;	
	public $gridsettings ;	
	
	
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
			$query = " SELECT RECID, [USERCODE], [SCREENID], [GRIDSETTINGS] FROM [SYSGrids]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->usercode = $records["USERCODE"];
				$instance->screenid = $records["SCREENID"];
				$instance->gridsettings = $records["GRIDSETTINGS"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using USERCODE
	*/
	public static function ini_USERCODE($usercode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [USERCODE], [SCREENID], [GRIDSETTINGS] FROM [SYSGrids]  WHERE [USERCODE]=:usercode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":usercode", $usercode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->usercode = $records["USERCODE"];
				$instance->screenid = $records["SCREENID"];
				$instance->gridsettings = $records["GRIDSETTINGS"];
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