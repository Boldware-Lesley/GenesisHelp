<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	GSMUmsDealHeader

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar DealCode" of type [nvarchar]
	"public nvarchar SupplierID" of type [nvarchar]
	"public nvarchar Title" of type [nvarchar]
	"public nvarchar StartDate" of type [nvarchar]
	"public nvarchar EndDate" of type [nvarchar]
	"public nvarchar DealType" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmumsdealheader {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $dealcode ;	
	public $supplierid ;	
	public $title ;	
	public $startdate ;	
	public $enddate ;	
	public $dealtype ;	
	public $account ;	
	
	
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
			$query = " SELECT RecID, [DealCode], [SupplierID], [Title], [StartDate], [EndDate], [DealType], [Account] FROM [GSMUmsDealHeader]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->dealcode = $records["DealCode"];
				$instance->supplierid = $records["SupplierID"];
				$instance->title = $records["Title"];
				$instance->startdate = $records["StartDate"];
				$instance->enddate = $records["EndDate"];
				$instance->dealtype = $records["DealType"];
				$instance->account = $records["Account"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using DealCode
	*/
	public static function ini_DealCode($dealcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [DealCode], [SupplierID], [Title], [StartDate], [EndDate], [DealType], [Account] FROM [GSMUmsDealHeader]  WHERE [DealCode]=:dealcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":dealcode", $dealcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->dealcode = $records["DealCode"];
				$instance->supplierid = $records["SupplierID"];
				$instance->title = $records["Title"];
				$instance->startdate = $records["StartDate"];
				$instance->enddate = $records["EndDate"];
				$instance->dealtype = $records["DealType"];
				$instance->account = $records["Account"];
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
			$res = $this->title;
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