<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	sysarticlecolumns

[@Descriptions]
Class is using the following global variables:
	"public int artid" of type [int]
	"public int colid" of type [int]
	"public boolean is_udt" of type [boolean]
	"public boolean is_xml" of type [boolean]
	"public boolean is_max" of type [boolean]
*/
namespace genesis;


use PDO;

class Sysarticlecolumns {
	
	/*BEGIN <<Private Variables>> */
	
	public $artid ;	
	public $colid ;	
	public $is_udt ;	
	public $is_xml ;	
	public $is_max ;	
	
	
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
			$query = " SELECT artid, [colid], [is_udt], [is_xml], [is_max] FROM [sysarticlecolumns]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->artid = $records["artid"];
				$instance->colid = $records["colid"];
				$instance->is_udt = $records["is_udt"];
				$instance->is_xml = $records["is_xml"];
				$instance->is_max = $records["is_max"];
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