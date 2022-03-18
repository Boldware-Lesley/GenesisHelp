<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	MSpeer_lsns

[@Descriptions]
Class is using the following global variables:
	"public int id" of type [int]
	"public string last_updated" of type [string]
	"public nvarchar originator" of type [nvarchar]
	"public nvarchar originator_db" of type [nvarchar]
	"public nvarchar originator_publication" of type [nvarchar]
	"public int originator_publication_id" of type [int]
	"public int originator_db_version" of type [int]
	"public varbinary originator_lsn" of type [varbinary]
	"public int originator_version" of type [int]
	"public int originator_id" of type [int]
*/
namespace genesis;


use PDO;

class Mspeer_lsns {
	
	/*BEGIN <<Private Variables>> */
	
	public $id ;	
	public $last_updated ;	
	public $originator ;	
	public $originator_db ;	
	public $originator_publication ;	
	public $originator_publication_id ;	
	public $originator_db_version ;	
	public $originator_lsn ;	
	public $originator_version ;	
	public $originator_id ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_id($id) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT id, [last_updated], [originator], [originator_db], [originator_publication], [originator_publication_id], [originator_db_version], [originator_lsn], [originator_version], [originator_id] FROM [MSpeer_lsns]  WHERE [id]=:id  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->id = $records["id"];
				$instance->last_updated = $records["last_updated"];
				$instance->originator = $records["originator"];
				$instance->originator_db = $records["originator_db"];
				$instance->originator_publication = $records["originator_publication"];
				$instance->originator_publication_id = $records["originator_publication_id"];
				$instance->originator_db_version = $records["originator_db_version"];
				$instance->originator_lsn = $records["originator_lsn"];
				$instance->originator_version = $records["originator_version"];
				$instance->originator_id = $records["originator_id"];
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
			$res = $this->id;
		}catch(Exception $ex){}
		return $res;
	}
	public function __equals($obj) {	
		$res = false ;
		try{
			if($this->id == $obj->id) {
				$res = true;
			}
		}catch(Exception $ex){}
		return $res;
	}
	/*END <<Override Methods>> */
	

}
?>