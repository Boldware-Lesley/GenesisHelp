<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	MSpeer_request

[@Descriptions]
Class is using the following global variables:
	"public int id" of type [int]
	"public nvarchar publication" of type [nvarchar]
	"public string sent_date" of type [string]
	"public nvarchar description" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Mspeer_request {
	
	/*BEGIN <<Private Variables>> */
	
	public $id ;	
	public $publication ;	
	public $sent_date ;	
	public $description ;	
	
	
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
			$query = " SELECT id, [publication], [sent_date], [description] FROM [MSpeer_request]  WHERE [id]=:id  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->id = $records["id"];
				$instance->publication = $records["publication"];
				$instance->sent_date = $records["sent_date"];
				$instance->description = $records["description"];
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
			if($this->id == $obj->id) {
				$res = true;
			}
		}catch(Exception $ex){}
		return $res;
	}
	/*END <<Override Methods>> */
	

}
?>