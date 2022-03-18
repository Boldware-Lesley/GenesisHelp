<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	CRDRebateDept

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int REBATENO" of type [int]
	"public int SEQNO" of type [int]
	"public nvarchar DEPTCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public float REBATEPERC" of type [float]
	"public float REBATEVALUE" of type [float]
	"public nvarchar VALUETYPE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdrebatedept {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $rebateno ;	
	public $seqno ;	
	public $deptcode ;	
	public $description ;	
	public $rebateperc ;	
	public $rebatevalue ;	
	public $valuetype ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $account ;	
	
	
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
			$query = " SELECT RECID, [CO], [REBATENO], [SEQNO], [DEPTCODE], [DESCRIPTION], [REBATEPERC], [REBATEVALUE], [VALUETYPE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Account] FROM [CRDRebateDept]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->rebateno = $records["REBATENO"];
				$instance->seqno = $records["SEQNO"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->rebateperc = $records["REBATEPERC"];
				$instance->rebatevalue = $records["REBATEVALUE"];
				$instance->valuetype = $records["VALUETYPE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->account = $records["Account"];
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
			$query = " SELECT RECID, [CO], [REBATENO], [SEQNO], [DEPTCODE], [DESCRIPTION], [REBATEPERC], [REBATEVALUE], [VALUETYPE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Account] FROM [CRDRebateDept]  WHERE [DEPTCODE]=:deptcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":deptcode", $deptcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->rebateno = $records["REBATENO"];
				$instance->seqno = $records["SEQNO"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->rebateperc = $records["REBATEPERC"];
				$instance->rebatevalue = $records["REBATEVALUE"];
				$instance->valuetype = $records["VALUETYPE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->account = $records["Account"];
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