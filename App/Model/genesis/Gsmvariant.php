<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	GSMVariant

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar VARIANTCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar ExtDate" of type [nvarchar]
	"public nvarchar ExtTime" of type [nvarchar]
	"public int ItemCount" of type [int]
	"public float TotQty" of type [float]
	"public float TotCostExcl" of type [float]
	"public float TotNettCostExcl" of type [float]
	"public float AvgCost" of type [float]
	"public float NettAvgCost" of type [float]
*/
namespace genesis;


use PDO;

class Gsmvariant {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $variantcode ;	
	public $description ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $extdate ;	
	public $exttime ;	
	public $itemcount ;	
	public $totqty ;	
	public $totcostexcl ;	
	public $totnettcostexcl ;	
	public $avgcost ;	
	public $nettavgcost ;	
	
	
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
			$query = " SELECT RECID, [VARIANTCODE], [DESCRIPTION], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [ExtDate], [ExtTime], [ItemCount], [TotQty], [TotCostExcl], [TotNettCostExcl], [AvgCost], [NettAvgCost] FROM [GSMVariant]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->variantcode = $records["VARIANTCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->extdate = $records["ExtDate"];
				$instance->exttime = $records["ExtTime"];
				$instance->itemcount = $records["ItemCount"];
				$instance->totqty = $records["TotQty"];
				$instance->totcostexcl = $records["TotCostExcl"];
				$instance->totnettcostexcl = $records["TotNettCostExcl"];
				$instance->avgcost = $records["AvgCost"];
				$instance->nettavgcost = $records["NettAvgCost"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using VARIANTCODE
	*/
	public static function ini_VARIANTCODE($variantcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [VARIANTCODE], [DESCRIPTION], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [ExtDate], [ExtTime], [ItemCount], [TotQty], [TotCostExcl], [TotNettCostExcl], [AvgCost], [NettAvgCost] FROM [GSMVariant]  WHERE [VARIANTCODE]=:variantcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":variantcode", $variantcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->variantcode = $records["VARIANTCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->extdate = $records["ExtDate"];
				$instance->exttime = $records["ExtTime"];
				$instance->itemcount = $records["ItemCount"];
				$instance->totqty = $records["TotQty"];
				$instance->totcostexcl = $records["TotCostExcl"];
				$instance->totnettcostexcl = $records["TotNettCostExcl"];
				$instance->avgcost = $records["AvgCost"];
				$instance->nettavgcost = $records["NettAvgCost"];
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