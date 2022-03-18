<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	SYSParameter

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar MODCODE" of type [nvarchar]
	"public nvarchar USERCODE" of type [nvarchar]
	"public int PARAMNO" of type [int]
	"public nvarchar PARAMNAME" of type [nvarchar]
	"public nvarchar PARAMVALUE" of type [nvarchar]
	"public nvarchar ParamType" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysparameter {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $modcode ;	
	public $usercode ;	
	public $paramno ;	
	public $paramname ;	
	public $paramvalue ;	
	public $paramtype ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [MODCODE], [USERCODE], [PARAMNO], [PARAMNAME], [PARAMVALUE], [ParamType] FROM [SYSParameter]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->modcode = $records["MODCODE"];
				$instance->usercode = $records["USERCODE"];
				$instance->paramno = $records["PARAMNO"];
				$instance->paramname = $records["PARAMNAME"];
				$instance->paramvalue = $records["PARAMVALUE"];
				$instance->paramtype = $records["ParamType"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [MODCODE], [USERCODE], [PARAMNO], [PARAMNAME], [PARAMVALUE], [ParamType] FROM [SYSParameter]  WHERE [MODCODE]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->modcode = $records["MODCODE"];
				$instance->usercode = $records["USERCODE"];
				$instance->paramno = $records["PARAMNO"];
				$instance->paramname = $records["PARAMNAME"];
				$instance->paramvalue = $records["PARAMVALUE"];
				$instance->paramtype = $records["ParamType"];
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
			$res = $this->paramname;
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