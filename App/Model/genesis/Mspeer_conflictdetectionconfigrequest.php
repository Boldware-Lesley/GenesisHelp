<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	MSpeer_conflictdetectionconfigrequest

[@Descriptions]
Class is using the following global variables:
	"public int id" of type [int]
	"public nvarchar publication" of type [nvarchar]
	"public string sent_date" of type [string]
	"public int timeout" of type [int]
	"public string modified_date" of type [string]
	"public nvarchar progress_phase" of type [nvarchar]
	"public boolean phase_timed_out" of type [boolean]
*/
namespace genesis;


use PDO;

class Mspeer_conflictdetectionconfigrequest {
	
	/*BEGIN <<Private Variables>> */
	
	public $id ;	
	public $publication ;	
	public $sent_date ;	
	public $timeout ;	
	public $modified_date ;	
	public $progress_phase ;	
	public $phase_timed_out ;	
	
	
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
			$query = " SELECT id, [publication], [sent_date], [timeout], [modified_date], [progress_phase], [phase_timed_out] FROM [MSpeer_conflictdetectionconfigrequest]  WHERE [id]=:id  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->id = $records["id"];
				$instance->publication = $records["publication"];
				$instance->sent_date = $records["sent_date"];
				$instance->timeout = $records["timeout"];
				$instance->modified_date = $records["modified_date"];
				$instance->progress_phase = $records["progress_phase"];
				$instance->phase_timed_out = $records["phase_timed_out"];
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