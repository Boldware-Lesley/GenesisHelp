<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	SYSSaveGrids

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar UserCode" of type [nvarchar]
	"public nvarchar ScreenID" of type [nvarchar]
	"public ntext GridSettings" of type [ntext]
*/
namespace genesis;


use PDO;

class Syssavegrids {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $usercode ;	
	public $screenid ;	
	public $gridsettings ;	
	
	
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
			$query = " SELECT RecID, [CO], [UserCode], [ScreenID], [GridSettings] FROM [SYSSaveGrids]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->usercode = $records["UserCode"];
				$instance->screenid = $records["ScreenID"];
				$instance->gridsettings = $records["GridSettings"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using UserCode
	*/
	public static function ini_UserCode($usercode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [UserCode], [ScreenID], [GridSettings] FROM [SYSSaveGrids]  WHERE [UserCode]=:usercode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":usercode", $usercode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->usercode = $records["UserCode"];
				$instance->screenid = $records["ScreenID"];
				$instance->gridsettings = $records["GridSettings"];
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