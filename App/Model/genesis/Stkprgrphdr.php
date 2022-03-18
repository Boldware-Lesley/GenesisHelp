<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	STKPrGrpHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int PGNo" of type [int]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public nvarchar PriceCode" of type [nvarchar]
	"public nvarchar Ripple" of type [nvarchar]
	"public nvarchar PriceRounding" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar UpdSellPrice" of type [nvarchar]
	"public nvarchar UpdLastCost" of type [nvarchar]
	"public nvarchar UpdAvgCost" of type [nvarchar]
	"public nvarchar UpdBuyCost" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkprgrphdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $pgno ;	
	public $description ;	
	public $fromdate ;	
	public $todate ;	
	public $pricecode ;	
	public $ripple ;	
	public $pricerounding ;	
	public $status ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $updsellprice ;	
	public $updlastcost ;	
	public $updavgcost ;	
	public $updbuycost ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [PGNo], [Description], [FromDate], [ToDate], [PriceCode], [Ripple], [PriceRounding], [Status], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [UpdSellPrice], [UpdLastCost], [UpdAvgCost], [UpdBuyCost] FROM [STKPrGrpHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->pgno = $records["PGNo"];
				$instance->description = $records["Description"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->pricecode = $records["PriceCode"];
				$instance->ripple = $records["Ripple"];
				$instance->pricerounding = $records["PriceRounding"];
				$instance->status = $records["Status"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->updsellprice = $records["UpdSellPrice"];
				$instance->updlastcost = $records["UpdLastCost"];
				$instance->updavgcost = $records["UpdAvgCost"];
				$instance->updbuycost = $records["UpdBuyCost"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using PriceCode
	*/
	public static function ini_PriceCode($pricecode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [PGNo], [Description], [FromDate], [ToDate], [PriceCode], [Ripple], [PriceRounding], [Status], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [UpdSellPrice], [UpdLastCost], [UpdAvgCost], [UpdBuyCost] FROM [STKPrGrpHdr]  WHERE [PriceCode]=:pricecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":pricecode", $pricecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->pgno = $records["PGNo"];
				$instance->description = $records["Description"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->pricecode = $records["PriceCode"];
				$instance->ripple = $records["Ripple"];
				$instance->pricerounding = $records["PriceRounding"];
				$instance->status = $records["Status"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->updsellprice = $records["UpdSellPrice"];
				$instance->updlastcost = $records["UpdLastCost"];
				$instance->updavgcost = $records["UpdAvgCost"];
				$instance->updbuycost = $records["UpdBuyCost"];
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