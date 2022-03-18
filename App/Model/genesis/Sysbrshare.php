<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	SYSBRShare

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar SHSTK" of type [nvarchar]
	"public nvarchar SHCRD" of type [nvarchar]
	"public nvarchar SHDEB" of type [nvarchar]
	"public nvarchar SHGLG" of type [nvarchar]
	"public nvarchar SHPUR" of type [nvarchar]
	"public nvarchar SHVIP" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysbrshare {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $shstk ;	
	public $shcrd ;	
	public $shdeb ;	
	public $shglg ;	
	public $shpur ;	
	public $shvip ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [SHSTK], [SHCRD], [SHDEB], [SHGLG], [SHPUR], [SHVIP] FROM [SYSBRShare]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->shstk = $records["SHSTK"];
				$instance->shcrd = $records["SHCRD"];
				$instance->shdeb = $records["SHDEB"];
				$instance->shglg = $records["SHGLG"];
				$instance->shpur = $records["SHPUR"];
				$instance->shvip = $records["SHVIP"];
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