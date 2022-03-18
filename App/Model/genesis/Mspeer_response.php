<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	MSpeer_response

[@Descriptions]
Class is using the following global variables:
	"public int request_id" of type [int]
	"public nvarchar peer" of type [nvarchar]
	"public nvarchar peer_db" of type [nvarchar]
	"public string received_date" of type [string]
*/
namespace genesis;


use PDO;

class Mspeer_response {
	
	/*BEGIN <<Private Variables>> */
	
	public $request_id ;	
	public $peer ;	
	public $peer_db ;	
	public $received_date ;	
	
	
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
			$query = " SELECT request_id, [peer], [peer_db], [received_date] FROM [MSpeer_response]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->request_id = $records["request_id"];
				$instance->peer = $records["peer"];
				$instance->peer_db = $records["peer_db"];
				$instance->received_date = $records["received_date"];
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