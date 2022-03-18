<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	SYSGrpMenu

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar USERGROUP" of type [nvarchar]
	"public nvarchar MODCODE" of type [nvarchar]
	"public int MENUKEY" of type [int]
	"public nvarchar OPTIONS" of type [nvarchar]
	"public nvarchar CO" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysgrpmenu {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $usergroup ;	
	public $modcode ;	
	public $menukey ;	
	public $options ;	
	public $co ;	
	
	
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
			$query = " SELECT RECID, [USERGROUP], [MODCODE], [MENUKEY], [OPTIONS], [CO] FROM [SYSGrpMenu]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->usergroup = $records["USERGROUP"];
				$instance->modcode = $records["MODCODE"];
				$instance->menukey = $records["MENUKEY"];
				$instance->options = $records["OPTIONS"];
				$instance->co = $records["CO"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using MODCODE
	*/
	public static function ini_MODCODE($modcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [USERGROUP], [MODCODE], [MENUKEY], [OPTIONS], [CO] FROM [SYSGrpMenu]  WHERE [MODCODE]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->usergroup = $records["USERGROUP"];
				$instance->modcode = $records["MODCODE"];
				$instance->menukey = $records["MENUKEY"];
				$instance->options = $records["OPTIONS"];
				$instance->co = $records["CO"];
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