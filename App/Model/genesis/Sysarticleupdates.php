<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	sysarticleupdates

[@Descriptions]
Class is using the following global variables:
	"public int artid" of type [int]
	"public int pubid" of type [int]
	"public int sync_ins_proc" of type [int]
	"public int sync_upd_proc" of type [int]
	"public int sync_del_proc" of type [int]
	"public boolean autogen" of type [boolean]
	"public int sync_upd_trig" of type [int]
	"public int conflict_tableid" of type [int]
	"public int ins_conflict_proc" of type [int]
	"public boolean identity_support" of type [boolean]
*/
namespace genesis;


use PDO;

class Sysarticleupdates {
	
	/*BEGIN <<Private Variables>> */
	
	public $artid ;	
	public $pubid ;	
	public $sync_ins_proc ;	
	public $sync_upd_proc ;	
	public $sync_del_proc ;	
	public $autogen ;	
	public $sync_upd_trig ;	
	public $conflict_tableid ;	
	public $ins_conflict_proc ;	
	public $identity_support ;	
	
	
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
			$query = " SELECT artid, [pubid], [sync_ins_proc], [sync_upd_proc], [sync_del_proc], [autogen], [sync_upd_trig], [conflict_tableid], [ins_conflict_proc], [identity_support] FROM [sysarticleupdates]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->artid = $records["artid"];
				$instance->pubid = $records["pubid"];
				$instance->sync_ins_proc = $records["sync_ins_proc"];
				$instance->sync_upd_proc = $records["sync_upd_proc"];
				$instance->sync_del_proc = $records["sync_del_proc"];
				$instance->autogen = $records["autogen"];
				$instance->sync_upd_trig = $records["sync_upd_trig"];
				$instance->conflict_tableid = $records["conflict_tableid"];
				$instance->ins_conflict_proc = $records["ins_conflict_proc"];
				$instance->identity_support = $records["identity_support"];
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