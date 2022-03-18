<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	SYSCurrencyMst

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CCYCode" of type [nvarchar]
	"public nvarchar CCYName" of type [nvarchar]
	"public nvarchar CCYFactor" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Syscurrencymst {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $ccycode ;	
	public $ccyname ;	
	public $ccyfactor ;	
	
	
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
			$query = " SELECT RecID, [CCYCode], [CCYName], [CCYFactor] FROM [SYSCurrencyMst]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->ccycode = $records["CCYCode"];
				$instance->ccyname = $records["CCYName"];
				$instance->ccyfactor = $records["CCYFactor"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CCYCode
	*/
	public static function ini_CCYCode($ccycode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CCYCode], [CCYName], [CCYFactor] FROM [SYSCurrencyMst]  WHERE [CCYCode]=:ccycode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":ccycode", $ccycode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->ccycode = $records["CCYCode"];
				$instance->ccyname = $records["CCYName"];
				$instance->ccyfactor = $records["CCYFactor"];
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
			$res = $this->ccyname;
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