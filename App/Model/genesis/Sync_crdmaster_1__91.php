<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	SYNC_CRDMaster_1__91

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar GROUPCODE" of type [nvarchar]
	"public nvarchar CORegNo" of type [nvarchar]
	"public nvarchar SimplifierSign" of type [nvarchar]
	"public float SimplifierPerc" of type [float]
*/
namespace genesis;


use PDO;

class Sync_crdmaster_1__91 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $name ;	
	public $groupcode ;	
	public $coregno ;	
	public $simplifiersign ;	
	public $simplifierperc ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [NAME], [GROUPCODE], [CORegNo], [SimplifierSign], [SimplifierPerc] FROM [SYNC_CRDMaster_1__91]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->groupcode = $records["GROUPCODE"];
				$instance->coregno = $records["CORegNo"];
				$instance->simplifiersign = $records["SimplifierSign"];
				$instance->simplifierperc = $records["SimplifierPerc"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using GROUPCODE
	*/
	public static function ini_GROUPCODE($groupcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [NAME], [GROUPCODE], [CORegNo], [SimplifierSign], [SimplifierPerc] FROM [SYNC_CRDMaster_1__91]  WHERE [GROUPCODE]=:groupcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":groupcode", $groupcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->groupcode = $records["GROUPCODE"];
				$instance->coregno = $records["CORegNo"];
				$instance->simplifiersign = $records["SimplifierSign"];
				$instance->simplifierperc = $records["SimplifierPerc"];
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
			$res = $this->name;
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