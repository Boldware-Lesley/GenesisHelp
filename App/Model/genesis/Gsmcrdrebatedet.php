<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	GSMCRDRebateDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar Account" of type [nvarchar]
	"public int RebateNo" of type [int]
	"public int SeqNo" of type [int]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public nvarchar RebateCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public float RebatePerc" of type [float]
	"public float RebateValue" of type [float]
	"public nvarchar ValueType" of type [nvarchar]
	"public nvarchar RebateType" of type [nvarchar]
	"public nvarchar Costed" of type [nvarchar]
	"public nvarchar CostedToRebate" of type [nvarchar]
	"public nvarchar ClaimMethod" of type [nvarchar]
	"public nvarchar ClaimFreq" of type [nvarchar]
	"public nvarchar ApplyDiscount" of type [nvarchar]
	"public nvarchar Settlement" of type [nvarchar]
	"public nvarchar ProfitCalc" of type [nvarchar]
	"public nvarchar Product" of type [nvarchar]
	"public nvarchar Department" of type [nvarchar]
	"public nvarchar BuyGroupAcc" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmcrdrebatedet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $account ;	
	public $rebateno ;	
	public $seqno ;	
	public $fromdate ;	
	public $todate ;	
	public $rebatecode ;	
	public $description ;	
	public $rebateperc ;	
	public $rebatevalue ;	
	public $valuetype ;	
	public $rebatetype ;	
	public $costed ;	
	public $costedtorebate ;	
	public $claimmethod ;	
	public $claimfreq ;	
	public $applydiscount ;	
	public $settlement ;	
	public $profitcalc ;	
	public $product ;	
	public $department ;	
	public $buygroupacc ;	
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
			$query = " SELECT RecID, [Account], [RebateNo], [SeqNo], [FromDate], [ToDate], [RebateCode], [Description], [RebatePerc], [RebateValue], [ValueType], [RebateType], [Costed], [CostedToRebate], [ClaimMethod], [ClaimFreq], [ApplyDiscount], [Settlement], [ProfitCalc], [Product], [Department], [BuyGroupAcc], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMCRDRebateDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->account = $records["Account"];
				$instance->rebateno = $records["RebateNo"];
				$instance->seqno = $records["SeqNo"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->rebatecode = $records["RebateCode"];
				$instance->description = $records["Description"];
				$instance->rebateperc = $records["RebatePerc"];
				$instance->rebatevalue = $records["RebateValue"];
				$instance->valuetype = $records["ValueType"];
				$instance->rebatetype = $records["RebateType"];
				$instance->costed = $records["Costed"];
				$instance->costedtorebate = $records["CostedToRebate"];
				$instance->claimmethod = $records["ClaimMethod"];
				$instance->claimfreq = $records["ClaimFreq"];
				$instance->applydiscount = $records["ApplyDiscount"];
				$instance->settlement = $records["Settlement"];
				$instance->profitcalc = $records["ProfitCalc"];
				$instance->product = $records["Product"];
				$instance->department = $records["Department"];
				$instance->buygroupacc = $records["BuyGroupAcc"];
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
	Main Constructor For Declearing Using RebateCode
	*/
	public static function ini_RebateCode($rebatecode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [Account], [RebateNo], [SeqNo], [FromDate], [ToDate], [RebateCode], [Description], [RebatePerc], [RebateValue], [ValueType], [RebateType], [Costed], [CostedToRebate], [ClaimMethod], [ClaimFreq], [ApplyDiscount], [Settlement], [ProfitCalc], [Product], [Department], [BuyGroupAcc], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMCRDRebateDet]  WHERE [RebateCode]=:rebatecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":rebatecode", $rebatecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->account = $records["Account"];
				$instance->rebateno = $records["RebateNo"];
				$instance->seqno = $records["SeqNo"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->rebatecode = $records["RebateCode"];
				$instance->description = $records["Description"];
				$instance->rebateperc = $records["RebatePerc"];
				$instance->rebatevalue = $records["RebateValue"];
				$instance->valuetype = $records["ValueType"];
				$instance->rebatetype = $records["RebateType"];
				$instance->costed = $records["Costed"];
				$instance->costedtorebate = $records["CostedToRebate"];
				$instance->claimmethod = $records["ClaimMethod"];
				$instance->claimfreq = $records["ClaimFreq"];
				$instance->applydiscount = $records["ApplyDiscount"];
				$instance->settlement = $records["Settlement"];
				$instance->profitcalc = $records["ProfitCalc"];
				$instance->product = $records["Product"];
				$instance->department = $records["Department"];
				$instance->buygroupacc = $records["BuyGroupAcc"];
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