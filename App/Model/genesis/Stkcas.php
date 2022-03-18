<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	STKCAS

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar COMNO" of type [nvarchar]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public float SELLEXCL" of type [float]
	"public float SELLINCL" of type [float]
	"public float FROMQTY" of type [float]
	"public float TOQTY" of type [float]
*/
namespace genesis;


use PDO;

class Stkcas {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $comno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description ;	
	public $sellexcl ;	
	public $sellincl ;	
	public $fromqty ;	
	public $toqty ;	
	
	
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
			$query = " SELECT RecID, [CO], [COMNO], [STOCKCODE], [LINKCODE], [DESCRIPTION], [SELLEXCL], [SELLINCL], [FROMQTY], [TOQTY] FROM [STKCAS]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->comno = $records["COMNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->sellexcl = $records["SELLEXCL"];
				$instance->sellincl = $records["SELLINCL"];
				$instance->fromqty = $records["FROMQTY"];
				$instance->toqty = $records["TOQTY"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using STOCKCODE
	*/
	public static function ini_STOCKCODE($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [COMNO], [STOCKCODE], [LINKCODE], [DESCRIPTION], [SELLEXCL], [SELLINCL], [FROMQTY], [TOQTY] FROM [STKCAS]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->comno = $records["COMNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->sellexcl = $records["SELLEXCL"];
				$instance->sellincl = $records["SELLINCL"];
				$instance->fromqty = $records["FROMQTY"];
				$instance->toqty = $records["TOQTY"];
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