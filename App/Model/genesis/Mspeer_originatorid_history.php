<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	MSpeer_originatorid_history

[@Descriptions]
Class is using the following global variables:
	"public nvarchar originator_publication" of type [nvarchar]
	"public int originator_id" of type [int]
	"public nvarchar originator_node" of type [nvarchar]
	"public nvarchar originator_db" of type [nvarchar]
	"public int originator_db_version" of type [int]
	"public int originator_version" of type [int]
	"public string inserted_date" of type [string]
*/
namespace genesis;


use PDO;

class Mspeer_originatorid_history {
	
	/*BEGIN <<Private Variables>> */
	
	public $originator_publication ;	
	public $originator_id ;	
	public $originator_node ;	
	public $originator_db ;	
	public $originator_db_version ;	
	public $originator_version ;	
	public $inserted_date ;	
	
	
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
			$query = " SELECT originator_publication, [originator_id], [originator_node], [originator_db], [originator_db_version], [originator_version], [inserted_date] FROM [MSpeer_originatorid_history]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->originator_publication = $records["originator_publication"];
				$instance->originator_id = $records["originator_id"];
				$instance->originator_node = $records["originator_node"];
				$instance->originator_db = $records["originator_db"];
				$instance->originator_db_version = $records["originator_db_version"];
				$instance->originator_version = $records["originator_version"];
				$instance->inserted_date = $records["inserted_date"];
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