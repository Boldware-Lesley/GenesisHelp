<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	sysschemaarticles

[@Descriptions]
Class is using the following global variables:
	"public int artid" of type [int]
	"public nvarchar creation_script" of type [nvarchar]
	"public nvarchar description" of type [nvarchar]
	"public nvarchar dest_object" of type [nvarchar]
	"public nvarchar name" of type [nvarchar]
	"public int objid" of type [int]
	"public int pubid" of type [int]
	"public tinyint pre_creation_cmd" of type [tinyint]
	"public int status" of type [int]
	"public tinyint type" of type [tinyint]
	"public binary schema_option" of type [binary]
	"public nvarchar dest_owner" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysschemaarticles {
	
	/*BEGIN <<Private Variables>> */
	
	public $artid ;	
	public $creation_script ;	
	public $description ;	
	public $dest_object ;	
	public $name ;	
	public $objid ;	
	public $pubid ;	
	public $pre_creation_cmd ;	
	public $status ;	
	public $type ;	
	public $schema_option ;	
	public $dest_owner ;	
	
	
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
			$query = " SELECT artid, [creation_script], [description], [dest_object], [name], [objid], [pubid], [pre_creation_cmd], [status], [type], [schema_option], [dest_owner] FROM [sysschemaarticles]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->artid = $records["artid"];
				$instance->creation_script = $records["creation_script"];
				$instance->description = $records["description"];
				$instance->dest_object = $records["dest_object"];
				$instance->name = $records["name"];
				$instance->objid = $records["objid"];
				$instance->pubid = $records["pubid"];
				$instance->pre_creation_cmd = $records["pre_creation_cmd"];
				$instance->status = $records["status"];
				$instance->type = $records["type"];
				$instance->schema_option = $records["schema_option"];
				$instance->dest_owner = $records["dest_owner"];
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