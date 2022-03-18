<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	SYSTax

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar TAXCODE" of type [nvarchar]
	"public nvarchar TAXDESC" of type [nvarchar]
	"public float TAXRATE" of type [float]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Systax {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $taxcode ;	
	public $taxdesc ;	
	public $taxrate ;	
	public $fromdate ;	
	public $todate ;	
	
	
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
			$query = " SELECT RECID, [TAXCODE], [TAXDESC], [TAXRATE], [FromDate], [ToDate] FROM [SYSTax]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->taxcode = $records["TAXCODE"];
				$instance->taxdesc = $records["TAXDESC"];
				$instance->taxrate = $records["TAXRATE"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using TAXCODE
	*/
	public static function ini_TAXCODE($taxcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [TAXCODE], [TAXDESC], [TAXRATE], [FromDate], [ToDate] FROM [SYSTax]  WHERE [TAXCODE]=:taxcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":taxcode", $taxcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->taxcode = $records["TAXCODE"];
				$instance->taxdesc = $records["TAXDESC"];
				$instance->taxrate = $records["TAXRATE"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
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