<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	sysextendedarticlesview

[@Descriptions]
Class is using the following global variables:
	"public int artid" of type [int]
	"public nvarchar creation_script" of type [nvarchar]
	"public nvarchar del_cmd" of type [nvarchar]
	"public nvarchar description" of type [nvarchar]
	"public nvarchar dest_table" of type [nvarchar]
	"public int filter" of type [int]
	"public nvarchar filter_clause" of type [nvarchar]
	"public nvarchar ins_cmd" of type [nvarchar]
	"public nvarchar name" of type [nvarchar]
	"public int objid" of type [int]
	"public int pubid" of type [int]
	"public tinyint pre_creation_cmd" of type [tinyint]
	"public int status" of type [int]
	"public int sync_objid" of type [int]
	"public tinyint type" of type [tinyint]
	"public nvarchar upd_cmd" of type [nvarchar]
	"public binary schema_option" of type [binary]
	"public nvarchar dest_owner" of type [nvarchar]
	"public int ins_scripting_proc" of type [int]
	"public int del_scripting_proc" of type [int]
	"public int upd_scripting_proc" of type [int]
	"public nvarchar custom_script" of type [nvarchar]
	"public int fire_triggers_on_snapshot" of type [int]
*/
namespace genesis;


use PDO;

class Sysextendedarticlesview {
	
	/*BEGIN <<Private Variables>> */
	
	public $artid ;	
	public $creation_script ;	
	public $del_cmd ;	
	public $description ;	
	public $dest_table ;	
	public $filter ;	
	public $filter_clause ;	
	public $ins_cmd ;	
	public $name ;	
	public $objid ;	
	public $pubid ;	
	public $pre_creation_cmd ;	
	public $status ;	
	public $sync_objid ;	
	public $type ;	
	public $upd_cmd ;	
	public $schema_option ;	
	public $dest_owner ;	
	public $ins_scripting_proc ;	
	public $del_scripting_proc ;	
	public $upd_scripting_proc ;	
	public $custom_script ;	
	public $fire_triggers_on_snapshot ;	
	
	
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
			$query = " SELECT artid, [creation_script], [del_cmd], [description], [dest_table], [filter], [filter_clause], [ins_cmd], [name], [objid], [pubid], [pre_creation_cmd], [status], [sync_objid], [type], [upd_cmd], [schema_option], [dest_owner], [ins_scripting_proc], [del_scripting_proc], [upd_scripting_proc], [custom_script], [fire_triggers_on_snapshot] FROM [sysextendedarticlesview]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->artid = $records["artid"];
				$instance->creation_script = $records["creation_script"];
				$instance->del_cmd = $records["del_cmd"];
				$instance->description = $records["description"];
				$instance->dest_table = $records["dest_table"];
				$instance->filter = $records["filter"];
				$instance->filter_clause = $records["filter_clause"];
				$instance->ins_cmd = $records["ins_cmd"];
				$instance->name = $records["name"];
				$instance->objid = $records["objid"];
				$instance->pubid = $records["pubid"];
				$instance->pre_creation_cmd = $records["pre_creation_cmd"];
				$instance->status = $records["status"];
				$instance->sync_objid = $records["sync_objid"];
				$instance->type = $records["type"];
				$instance->upd_cmd = $records["upd_cmd"];
				$instance->schema_option = $records["schema_option"];
				$instance->dest_owner = $records["dest_owner"];
				$instance->ins_scripting_proc = $records["ins_scripting_proc"];
				$instance->del_scripting_proc = $records["del_scripting_proc"];
				$instance->upd_scripting_proc = $records["upd_scripting_proc"];
				$instance->custom_script = $records["custom_script"];
				$instance->fire_triggers_on_snapshot = $records["fire_triggers_on_snapshot"];
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
			$res = $this->description;
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