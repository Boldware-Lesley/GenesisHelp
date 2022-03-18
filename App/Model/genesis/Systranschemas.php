<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	systranschemas

[@Descriptions]
Class is using the following global variables:
	"public int tabid" of type [int]
	"public binary startlsn" of type [binary]
	"public binary endlsn" of type [binary]
	"public int typeid" of type [int]
*/
namespace genesis;


use PDO;

class Systranschemas {
	
	/*BEGIN <<Private Variables>> */
	
	public $tabid ;	
	public $startlsn ;	
	public $endlsn ;	
	public $typeid ;	
	
	
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
			$query = " SELECT tabid, [startlsn], [endlsn], [typeid] FROM [systranschemas]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->tabid = $records["tabid"];
				$instance->startlsn = $records["startlsn"];
				$instance->endlsn = $records["endlsn"];
				$instance->typeid = $records["typeid"];
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