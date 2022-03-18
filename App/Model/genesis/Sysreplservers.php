<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	sysreplservers

[@Descriptions]
Class is using the following global variables:
	"public nvarchar srvname" of type [nvarchar]
	"public int srvid" of type [int]
*/
namespace genesis;


use PDO;

class Sysreplservers {
	
	/*BEGIN <<Private Variables>> */
	
	public $srvname ;	
	public $srvid ;	
	
	
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
			$query = " SELECT srvname, [srvid] FROM [sysreplservers]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->srvname = $records["srvname"];
				$instance->srvid = $records["srvid"];
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
			$res = $this->srvname;
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