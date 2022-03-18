<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	PURDealTallyDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int DealNo" of type [int]
	"public int SeqNo" of type [int]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public nvarchar RebateCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public float RebatePerc" of type [float]
	"public float RebateValue" of type [float]
	"public nvarchar ApplyToCost" of type [nvarchar]
	"public nvarchar FactorToSell" of type [nvarchar]
	"public nvarchar ByOrder" of type [nvarchar]
	"public nvarchar Product" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Purdealtallydet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $dealno ;	
	public $seqno ;	
	public $fromdate ;	
	public $todate ;	
	public $rebatecode ;	
	public $description ;	
	public $rebateperc ;	
	public $rebatevalue ;	
	public $applytocost ;	
	public $factortosell ;	
	public $byorder ;	
	public $product ;	
	public $notes ;	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [DealNo], [SeqNo], [FromDate], [ToDate], [RebateCode], [Description], [RebatePerc], [RebateValue], [ApplyToCost], [FactorToSell], [ByOrder], [Product], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [PURDealTallyDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->dealno = $records["DealNo"];
				$instance->seqno = $records["SeqNo"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->rebatecode = $records["RebateCode"];
				$instance->description = $records["Description"];
				$instance->rebateperc = $records["RebatePerc"];
				$instance->rebatevalue = $records["RebateValue"];
				$instance->applytocost = $records["ApplyToCost"];
				$instance->factortosell = $records["FactorToSell"];
				$instance->byorder = $records["ByOrder"];
				$instance->product = $records["Product"];
				$instance->notes = $records["Notes"];
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [DealNo], [SeqNo], [FromDate], [ToDate], [RebateCode], [Description], [RebatePerc], [RebateValue], [ApplyToCost], [FactorToSell], [ByOrder], [Product], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [PURDealTallyDet]  WHERE [RebateCode]=:rebatecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":rebatecode", $rebatecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->dealno = $records["DealNo"];
				$instance->seqno = $records["SeqNo"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->rebatecode = $records["RebateCode"];
				$instance->description = $records["Description"];
				$instance->rebateperc = $records["RebatePerc"];
				$instance->rebatevalue = $records["RebateValue"];
				$instance->applytocost = $records["ApplyToCost"];
				$instance->factortosell = $records["FactorToSell"];
				$instance->byorder = $records["ByOrder"];
				$instance->product = $records["Product"];
				$instance->notes = $records["Notes"];
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