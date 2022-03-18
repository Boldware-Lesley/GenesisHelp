<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	SYSCrdPayMthd

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar PAYMTHD" of type [nvarchar]
	"public nvarchar BANKCODE" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Syscrdpaymthd {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $paymthd ;	
	public $bankcode ;	
	
	
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
			$query = " SELECT RECID, [PAYMTHD], [BANKCODE] FROM [SYSCrdPayMthd]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->paymthd = $records["PAYMTHD"];
				$instance->bankcode = $records["BANKCODE"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using BANKCODE
	*/
	public static function ini_BANKCODE($bankcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [PAYMTHD], [BANKCODE] FROM [SYSCrdPayMthd]  WHERE [BANKCODE]=:bankcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":bankcode", $bankcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->paymthd = $records["PAYMTHD"];
				$instance->bankcode = $records["BANKCODE"];
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