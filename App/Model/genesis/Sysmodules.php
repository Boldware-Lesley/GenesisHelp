<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	SYSModules

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar MODCODE" of type [nvarchar]
	"public nvarchar MODNAME" of type [nvarchar]
	"public int ACCESSNO" of type [int]
	"public nvarchar MONTHEND" of type [nvarchar]
	"public nvarchar Display" of type [nvarchar]
	"public nvarchar Swop" of type [nvarchar]
	"public int ParamNo" of type [int]
	"public nvarchar ExeName" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysmodules {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $modcode ;	
	public $modname ;	
	public $accessno ;	
	public $monthend ;	
	public $display ;	
	public $swop ;	
	public $paramno ;	
	public $exename ;	
	
	
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
			$query = " SELECT RECID, [MODCODE], [MODNAME], [ACCESSNO], [MONTHEND], [Display], [Swop], [ParamNo], [ExeName] FROM [SYSModules]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->modcode = $records["MODCODE"];
				$instance->modname = $records["MODNAME"];
				$instance->accessno = $records["ACCESSNO"];
				$instance->monthend = $records["MONTHEND"];
				$instance->display = $records["Display"];
				$instance->swop = $records["Swop"];
				$instance->paramno = $records["ParamNo"];
				$instance->exename = $records["ExeName"];
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
			$query = " SELECT RECID, [MODCODE], [MODNAME], [ACCESSNO], [MONTHEND], [Display], [Swop], [ParamNo], [ExeName] FROM [SYSModules]  WHERE [MODCODE]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->modcode = $records["MODCODE"];
				$instance->modname = $records["MODNAME"];
				$instance->accessno = $records["ACCESSNO"];
				$instance->monthend = $records["MONTHEND"];
				$instance->display = $records["Display"];
				$instance->swop = $records["Swop"];
				$instance->paramno = $records["ParamNo"];
				$instance->exename = $records["ExeName"];
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
			$res = $this->modname;
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