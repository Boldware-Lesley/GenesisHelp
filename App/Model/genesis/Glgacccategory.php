<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	GLGAccCategory

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar AccType" of type [nvarchar]
	"public nvarchar GLCategory" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public int DisplaySeq" of type [int]
	"public int FromAccount" of type [int]
	"public int ToAccount" of type [int]
*/
namespace genesis;


use PDO;

class Glgacccategory {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $acctype ;	
	public $glcategory ;	
	public $description ;	
	public $displayseq ;	
	public $fromaccount ;	
	public $toaccount ;	
	
	
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
			$query = " SELECT RecID, [CO], [AccType], [GLCategory], [Description], [DisplaySeq], [FromAccount], [ToAccount] FROM [GLGAccCategory]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->acctype = $records["AccType"];
				$instance->glcategory = $records["GLCategory"];
				$instance->description = $records["Description"];
				$instance->displayseq = $records["DisplaySeq"];
				$instance->fromaccount = $records["FromAccount"];
				$instance->toaccount = $records["ToAccount"];
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