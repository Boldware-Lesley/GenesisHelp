<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	GSMAltSuppliers

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar SUPPCODE" of type [nvarchar]
	"public float UNITS" of type [float]
	"public nvarchar PACKSIZE" of type [nvarchar]
	"public float PACKCASE" of type [float]
	"public float CASEPALL" of type [float]
	"public nvarchar REORDERTYPE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmaltsuppliers {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $stockcode ;	
	public $linkcode ;	
	public $account ;	
	public $name ;	
	public $suppcode ;	
	public $units ;	
	public $packsize ;	
	public $packcase ;	
	public $casepall ;	
	public $reordertype ;	
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
			$query = " SELECT RECID, [STOCKCODE], [LINKCODE], [ACCOUNT], [NAME], [SUPPCODE], [UNITS], [PACKSIZE], [PACKCASE], [CASEPALL], [REORDERTYPE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [GSMAltSuppliers]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->units = $records["UNITS"];
				$instance->packsize = $records["PACKSIZE"];
				$instance->packcase = $records["PACKCASE"];
				$instance->casepall = $records["CASEPALL"];
				$instance->reordertype = $records["REORDERTYPE"];
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
	/**
	Main Constructor For Declearing Using STOCKCODE
	*/
	public static function ini_STOCKCODE($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [STOCKCODE], [LINKCODE], [ACCOUNT], [NAME], [SUPPCODE], [UNITS], [PACKSIZE], [PACKCASE], [CASEPALL], [REORDERTYPE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [GSMAltSuppliers]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->units = $records["UNITS"];
				$instance->packsize = $records["PACKSIZE"];
				$instance->packcase = $records["PACKCASE"];
				$instance->casepall = $records["CASEPALL"];
				$instance->reordertype = $records["REORDERTYPE"];
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
			$res = $this->name;
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