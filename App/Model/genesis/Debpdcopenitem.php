<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	DEBPDCOpenItem

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar PDCNO" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public float ALLOCAMNT" of type [float]
	"public float BALANCEAMNT" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debpdcopenitem {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $account ;	
	public $pdcno ;	
	public $docno ;	
	public $allocamnt ;	
	public $balanceamnt ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RECID, [ACCOUNT], [PDCNO], [DOCNO], [ALLOCAMNT], [BALANCEAMNT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [DEBPDCOpenItem]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->account = $records["ACCOUNT"];
				$instance->pdcno = $records["PDCNO"];
				$instance->docno = $records["DOCNO"];
				$instance->allocamnt = $records["ALLOCAMNT"];
				$instance->balanceamnt = $records["BALANCEAMNT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
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