<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	GSMCategory1

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CATEGORY1" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar FOODLINK" of type [nvarchar]
	"public nvarchar DEPTCODE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar ExtDate" of type [nvarchar]
	"public nvarchar ExtTime" of type [nvarchar]
	"public int ItemCount" of type [int]
	"public float TotCostExcl" of type [float]
	"public float TotSalesExcl" of type [float]
	"public float TotRebates" of type [float]
*/
namespace genesis;


use PDO;

class Gsmcategory1 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $category1 ;	
	public $description ;	
	public $foodlink ;	
	public $deptcode ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $extdate ;	
	public $exttime ;	
	public $itemcount ;	
	public $totcostexcl ;	
	public $totsalesexcl ;	
	public $totrebates ;	
	
	
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
			$query = " SELECT RECID, [CATEGORY1], [DESCRIPTION], [FOODLINK], [DEPTCODE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [ExtDate], [ExtTime], [ItemCount], [TotCostExcl], [TotSalesExcl], [TotRebates] FROM [GSMCategory1]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->category1 = $records["CATEGORY1"];
				$instance->description = $records["DESCRIPTION"];
				$instance->foodlink = $records["FOODLINK"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->extdate = $records["ExtDate"];
				$instance->exttime = $records["ExtTime"];
				$instance->itemcount = $records["ItemCount"];
				$instance->totcostexcl = $records["TotCostExcl"];
				$instance->totsalesexcl = $records["TotSalesExcl"];
				$instance->totrebates = $records["TotRebates"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using DEPTCODE
	*/
	public static function ini_DEPTCODE($deptcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CATEGORY1], [DESCRIPTION], [FOODLINK], [DEPTCODE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [ExtDate], [ExtTime], [ItemCount], [TotCostExcl], [TotSalesExcl], [TotRebates] FROM [GSMCategory1]  WHERE [DEPTCODE]=:deptcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":deptcode", $deptcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->category1 = $records["CATEGORY1"];
				$instance->description = $records["DESCRIPTION"];
				$instance->foodlink = $records["FOODLINK"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->extdate = $records["ExtDate"];
				$instance->exttime = $records["ExtTime"];
				$instance->itemcount = $records["ItemCount"];
				$instance->totcostexcl = $records["TotCostExcl"];
				$instance->totsalesexcl = $records["TotSalesExcl"];
				$instance->totrebates = $records["TotRebates"];
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