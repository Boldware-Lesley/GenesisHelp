<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	MSpeer_conflictdetectionconfigresponse

[@Descriptions]
Class is using the following global variables:
	"public int request_id" of type [int]
	"public nvarchar peer_node" of type [nvarchar]
	"public nvarchar peer_db" of type [nvarchar]
	"public int peer_version" of type [int]
	"public int peer_db_version" of type [int]
	"public boolean is_peer" of type [boolean]
	"public boolean conflictdetection_enabled" of type [boolean]
	"public int originator_id" of type [int]
	"public int peer_conflict_retention" of type [int]
	"public boolean peer_continue_onconflict" of type [boolean]
	"public xml peer_subscriptions" of type [xml]
	"public nvarchar progress_phase" of type [nvarchar]
	"public string modified_date" of type [string]
*/
namespace genesis;


use PDO;

class Mspeer_conflictdetectionconfigresponse {
	
	/*BEGIN <<Private Variables>> */
	
	public $request_id ;	
	public $peer_node ;	
	public $peer_db ;	
	public $peer_version ;	
	public $peer_db_version ;	
	public $is_peer ;	
	public $conflictdetection_enabled ;	
	public $originator_id ;	
	public $peer_conflict_retention ;	
	public $peer_continue_onconflict ;	
	public $peer_subscriptions ;	
	public $progress_phase ;	
	public $modified_date ;	
	
	
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
			$query = " SELECT request_id, [peer_node], [peer_db], [peer_version], [peer_db_version], [is_peer], [conflictdetection_enabled], [originator_id], [peer_conflict_retention], [peer_continue_onconflict], [peer_subscriptions], [progress_phase], [modified_date] FROM [MSpeer_conflictdetectionconfigresponse]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->request_id = $records["request_id"];
				$instance->peer_node = $records["peer_node"];
				$instance->peer_db = $records["peer_db"];
				$instance->peer_version = $records["peer_version"];
				$instance->peer_db_version = $records["peer_db_version"];
				$instance->is_peer = $records["is_peer"];
				$instance->conflictdetection_enabled = $records["conflictdetection_enabled"];
				$instance->originator_id = $records["originator_id"];
				$instance->peer_conflict_retention = $records["peer_conflict_retention"];
				$instance->peer_continue_onconflict = $records["peer_continue_onconflict"];
				$instance->peer_subscriptions = $records["peer_subscriptions"];
				$instance->progress_phase = $records["progress_phase"];
				$instance->modified_date = $records["modified_date"];
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