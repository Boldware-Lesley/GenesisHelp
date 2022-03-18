<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	PURDealDet

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
	"public nvarchar Product" of type [nvarchar]
	"public nvarchar Department" of type [nvarchar]
	"public nvarchar Variant" of type [nvarchar]
	"public nvarchar Category0" of type [nvarchar]
	"public nvarchar Category1" of type [nvarchar]
	"public nvarchar Category2" of type [nvarchar]
	"public nvarchar Category3" of type [nvarchar]
	"public nvarchar Category4" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar RebateType" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Purdealdet {
	
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
	public $product ;	
	public $department ;	
	public $variant ;	
	public $category0 ;	
	public $category1 ;	
	public $category2 ;	
	public $category3 ;	
	public $category4 ;	
	public $notes ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $rebatetype ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [DealNo], [SeqNo], [FromDate], [ToDate], [RebateCode], [Description], [RebatePerc], [RebateValue], [ApplyToCost], [FactorToSell], [Product], [Department], [Variant], [Category0], [Category1], [Category2], [Category3], [Category4], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [RebateType] FROM [PURDealDet]  WHERE [RecID]=:recid  ";
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
				$instance->product = $records["Product"];
				$instance->department = $records["Department"];
				$instance->variant = $records["Variant"];
				$instance->category0 = $records["Category0"];
				$instance->category1 = $records["Category1"];
				$instance->category2 = $records["Category2"];
				$instance->category3 = $records["Category3"];
				$instance->category4 = $records["Category4"];
				$instance->notes = $records["Notes"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->rebatetype = $records["RebateType"];
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [DealNo], [SeqNo], [FromDate], [ToDate], [RebateCode], [Description], [RebatePerc], [RebateValue], [ApplyToCost], [FactorToSell], [Product], [Department], [Variant], [Category0], [Category1], [Category2], [Category3], [Category4], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [RebateType] FROM [PURDealDet]  WHERE [RebateCode]=:rebatecode  ";
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
				$instance->product = $records["Product"];
				$instance->department = $records["Department"];
				$instance->variant = $records["Variant"];
				$instance->category0 = $records["Category0"];
				$instance->category1 = $records["Category1"];
				$instance->category2 = $records["Category2"];
				$instance->category3 = $records["Category3"];
				$instance->category4 = $records["Category4"];
				$instance->notes = $records["Notes"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->rebatetype = $records["RebateType"];
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