<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	DEBDeals

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public int DEALNO" of type [int]
	"public nvarchar DEBTORTYPE" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public float PRICEEXCL" of type [float]
	"public float PRICEINCL" of type [float]
	"public nvarchar FROMDATE" of type [nvarchar]
	"public nvarchar TODATE" of type [nvarchar]
	"public float MINIMUMBUY" of type [float]
	"public float LASTCOSTEXCL" of type [float]
	"public float LASTCOSTINCL" of type [float]
	"public float AVGCOSTEXCL" of type [float]
	"public float AVGCOSTINCL" of type [float]
	"public nvarchar CREATEDDATE" of type [nvarchar]
	"public nvarchar CREATEDTIME" of type [nvarchar]
	"public nvarchar CREATEDUSER" of type [nvarchar]
	"public nvarchar CREATEDMACID" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public float REBAMNT" of type [float]
	"public float RebAvgAmnt" of type [float]
	"public nvarchar ReasonCode" of type [nvarchar]
	"public nvarchar ProductionDate" of type [nvarchar]
	"public int DealRangeDays" of type [int]
*/
namespace genesis;


use PDO;

class Debdeals {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $dealno ;	
	public $debtortype ;	
	public $account ;	
	public $name ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $priceexcl ;	
	public $priceincl ;	
	public $fromdate ;	
	public $todate ;	
	public $minimumbuy ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $createddate ;	
	public $createdtime ;	
	public $createduser ;	
	public $createdmacid ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $rebamnt ;	
	public $rebavgamnt ;	
	public $reasoncode ;	
	public $productiondate ;	
	public $dealrangedays ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [DEALNO], [DEBTORTYPE], [ACCOUNT], [NAME], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [PRICEEXCL], [PRICEINCL], [FROMDATE], [TODATE], [MINIMUMBUY], [LASTCOSTEXCL], [LASTCOSTINCL], [AVGCOSTEXCL], [AVGCOSTINCL], [CREATEDDATE], [CREATEDTIME], [CREATEDUSER], [CREATEDMACID], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [REBAMNT], [RebAvgAmnt], [ReasonCode], [ProductionDate], [DealRangeDays] FROM [DEBDeals]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->dealno = $records["DEALNO"];
				$instance->debtortype = $records["DEBTORTYPE"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->priceexcl = $records["PRICEEXCL"];
				$instance->priceincl = $records["PRICEINCL"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->minimumbuy = $records["MINIMUMBUY"];
				$instance->lastcostexcl = $records["LASTCOSTEXCL"];
				$instance->lastcostincl = $records["LASTCOSTINCL"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->avgcostincl = $records["AVGCOSTINCL"];
				$instance->createddate = $records["CREATEDDATE"];
				$instance->createdtime = $records["CREATEDTIME"];
				$instance->createduser = $records["CREATEDUSER"];
				$instance->createdmacid = $records["CREATEDMACID"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->rebamnt = $records["REBAMNT"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->productiondate = $records["ProductionDate"];
				$instance->dealrangedays = $records["DealRangeDays"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [DEALNO], [DEBTORTYPE], [ACCOUNT], [NAME], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [PRICEEXCL], [PRICEINCL], [FROMDATE], [TODATE], [MINIMUMBUY], [LASTCOSTEXCL], [LASTCOSTINCL], [AVGCOSTEXCL], [AVGCOSTINCL], [CREATEDDATE], [CREATEDTIME], [CREATEDUSER], [CREATEDMACID], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [REBAMNT], [RebAvgAmnt], [ReasonCode], [ProductionDate], [DealRangeDays] FROM [DEBDeals]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->dealno = $records["DEALNO"];
				$instance->debtortype = $records["DEBTORTYPE"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->priceexcl = $records["PRICEEXCL"];
				$instance->priceincl = $records["PRICEINCL"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->minimumbuy = $records["MINIMUMBUY"];
				$instance->lastcostexcl = $records["LASTCOSTEXCL"];
				$instance->lastcostincl = $records["LASTCOSTINCL"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->avgcostincl = $records["AVGCOSTINCL"];
				$instance->createddate = $records["CREATEDDATE"];
				$instance->createdtime = $records["CREATEDTIME"];
				$instance->createduser = $records["CREATEDUSER"];
				$instance->createdmacid = $records["CREATEDMACID"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->rebamnt = $records["REBAMNT"];
				$instance->rebavgamnt = $records["RebAvgAmnt"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->productiondate = $records["ProductionDate"];
				$instance->dealrangedays = $records["DealRangeDays"];
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