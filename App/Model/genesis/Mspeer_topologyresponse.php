<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	MSpeer_topologyresponse

[@Descriptions]
Class is using the following global variables:
	"public int request_id" of type [int]
	"public nvarchar peer" of type [nvarchar]
	"public int peer_version" of type [int]
	"public nvarchar peer_db" of type [nvarchar]
	"public int originator_id" of type [int]
	"public int peer_conflict_retention" of type [int]
	"public string received_date" of type [string]
	"public xml connection_info" of type [xml]
*/
namespace genesis;


use PDO;

class Mspeer_topologyresponse {
	
	/*BEGIN <<Private Variables>> */
	
	public $request_id ;	
	public $peer ;	
	public $peer_version ;	
	public $peer_db ;	
	public $originator_id ;	
	public $peer_conflict_retention ;	
	public $received_date ;	
	public $connection_info ;	
	
	
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
			$query = " SELECT request_id, [peer], [peer_version], [peer_db], [originator_id], [peer_conflict_retention], [received_date], [connection_info] FROM [MSpeer_topologyresponse]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->request_id = $records["request_id"];
				$instance->peer = $records["peer"];
				$instance->peer_version = $records["peer_version"];
				$instance->peer_db = $records["peer_db"];
				$instance->originator_id = $records["originator_id"];
				$instance->peer_conflict_retention = $records["peer_conflict_retention"];
				$instance->received_date = $records["received_date"];
				$instance->connection_info = $records["connection_info"];
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