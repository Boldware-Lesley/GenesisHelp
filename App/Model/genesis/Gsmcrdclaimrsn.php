<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	GSMCRDClaimRsn

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar ClaimCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar ShortName" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public int GLSubAccNo" of type [int]
	"public nvarchar UpdateStockValue" of type [nvarchar]
	"public nvarchar UpdateRebate" of type [nvarchar]
	"public nvarchar PriceDifference" of type [nvarchar]
	"public nvarchar OtherIncome" of type [nvarchar]
	"public nvarchar SettlementDisc" of type [nvarchar]
	"public nvarchar TallyClaim" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmcrdclaimrsn {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $claimcode ;	
	public $description ;	
	public $shortname ;	
	public $glaccno ;	
	public $glsubaccno ;	
	public $updatestockvalue ;	
	public $updaterebate ;	
	public $pricedifference ;	
	public $otherincome ;	
	public $settlementdisc ;	
	public $tallyclaim ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RecID, [ClaimCode], [Description], [ShortName], [GLAccNo], [GLSubAccNo], [UpdateStockValue], [UpdateRebate], [PriceDifference], [OtherIncome], [SettlementDisc], [TallyClaim], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMCRDClaimRsn]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->description = $records["Description"];
				$instance->shortname = $records["ShortName"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->updatestockvalue = $records["UpdateStockValue"];
				$instance->updaterebate = $records["UpdateRebate"];
				$instance->pricedifference = $records["PriceDifference"];
				$instance->otherincome = $records["OtherIncome"];
				$instance->settlementdisc = $records["SettlementDisc"];
				$instance->tallyclaim = $records["TallyClaim"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using ClaimCode
	*/
	public static function ini_ClaimCode($claimcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [ClaimCode], [Description], [ShortName], [GLAccNo], [GLSubAccNo], [UpdateStockValue], [UpdateRebate], [PriceDifference], [OtherIncome], [SettlementDisc], [TallyClaim], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMCRDClaimRsn]  WHERE [ClaimCode]=:claimcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":claimcode", $claimcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->description = $records["Description"];
				$instance->shortname = $records["ShortName"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->updatestockvalue = $records["UpdateStockValue"];
				$instance->updaterebate = $records["UpdateRebate"];
				$instance->pricedifference = $records["PriceDifference"];
				$instance->otherincome = $records["OtherIncome"];
				$instance->settlementdisc = $records["SettlementDisc"];
				$instance->tallyclaim = $records["TallyClaim"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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