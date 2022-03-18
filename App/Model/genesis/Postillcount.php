<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	POSTillCount

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TILLNO" of type [nvarchar]
	"public nvarchar CASHUPDATE" of type [nvarchar]
	"public int CASHUPNO" of type [int]
	"public nvarchar COINCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public float COINCOUNT" of type [float]
*/
namespace genesis;


use PDO;

class Postillcount {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $tillno ;	
	public $cashupdate ;	
	public $cashupno ;	
	public $coincode ;	
	public $description ;	
	public $coincount ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [CASHUPDATE], [CASHUPNO], [COINCODE], [DESCRIPTION], [COINCOUNT] FROM [POSTillCount]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->tillno = $records["TILLNO"];
				$instance->cashupdate = $records["CASHUPDATE"];
				$instance->cashupno = $records["CASHUPNO"];
				$instance->coincode = $records["COINCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->coincount = $records["COINCOUNT"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using COINCODE
	*/
	public static function ini_COINCODE($coincode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [CASHUPDATE], [CASHUPNO], [COINCODE], [DESCRIPTION], [COINCOUNT] FROM [POSTillCount]  WHERE [COINCODE]=:coincode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":coincode", $coincode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->tillno = $records["TILLNO"];
				$instance->cashupdate = $records["CASHUPDATE"];
				$instance->cashupno = $records["CASHUPNO"];
				$instance->coincode = $records["COINCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->coincount = $records["COINCOUNT"];
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