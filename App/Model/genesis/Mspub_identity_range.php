<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	MSpub_identity_range

[@Descriptions]
Class is using the following global variables:
	"public int objid" of type [int]
	"public long range" of type [long]
	"public long pub_range" of type [long]
	"public long current_pub_range" of type [long]
	"public int threshold" of type [int]
	"public long last_seed" of type [long]
*/
namespace genesis;


use PDO;

class Mspub_identity_range {
	
	/*BEGIN <<Private Variables>> */
	
	public $objid ;	
	public $range ;	
	public $pub_range ;	
	public $current_pub_range ;	
	public $threshold ;	
	public $last_seed ;	
	
	
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
			$query = " SELECT objid, [range], [pub_range], [current_pub_range], [threshold], [last_seed] FROM [MSpub_identity_range]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->objid = $records["objid"];
				$instance->range = $records["range"];
				$instance->pub_range = $records["pub_range"];
				$instance->current_pub_range = $records["current_pub_range"];
				$instance->threshold = $records["threshold"];
				$instance->last_seed = $records["last_seed"];
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