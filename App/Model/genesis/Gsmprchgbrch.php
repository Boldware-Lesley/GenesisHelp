<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	GSMPrChgBrch

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar PrChgNo" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public float OldCostExcl" of type [float]
	"public float NewCostExcl" of type [float]
	"public float OldSellExcl" of type [float]
	"public float NewSellExcl" of type [float]
	"public float OldDealExcl" of type [float]
	"public float NewDealExcl" of type [float]
	"public nvarchar PRCode" of type [nvarchar]
	"public nvarchar DealPRCode" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public float OldCostIncl" of type [float]
	"public float NewCostIncl" of type [float]
	"public float OldSellIncl" of type [float]
	"public float NewSellIncl" of type [float]
	"public float OldDealIncl" of type [float]
	"public float NewDealIncl" of type [float]
	"public int Units" of type [int]
	"public nvarchar PurchaseItem" of type [nvarchar]
	"public float OldExpExcl" of type [float]
	"public float OldExpIncl" of type [float]
	"public float NewExpExcl" of type [float]
	"public float NewExpIncl" of type [float]
	"public nvarchar ExpPRCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmprchgbrch {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $prchgno ;	
	public $account ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $oldcostexcl ;	
	public $newcostexcl ;	
	public $oldsellexcl ;	
	public $newsellexcl ;	
	public $olddealexcl ;	
	public $newdealexcl ;	
	public $prcode ;	
	public $dealprcode ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $oldcostincl ;	
	public $newcostincl ;	
	public $oldsellincl ;	
	public $newsellincl ;	
	public $olddealincl ;	
	public $newdealincl ;	
	public $units ;	
	public $purchaseitem ;	
	public $oldexpexcl ;	
	public $oldexpincl ;	
	public $newexpexcl ;	
	public $newexpincl ;	
	public $expprcode ;	
	
	
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
			$query = " SELECT RecID, [PrChgNo], [Account], [Branch], [StockCode], [LinkCode], [Description1], [OldCostExcl], [NewCostExcl], [OldSellExcl], [NewSellExcl], [OldDealExcl], [NewDealExcl], [PRCode], [DealPRCode], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [OldCostIncl], [NewCostIncl], [OldSellIncl], [NewSellIncl], [OldDealIncl], [NewDealIncl], [Units], [PurchaseItem], [OldExpExcl], [OldExpIncl], [NewExpExcl], [NewExpIncl], [ExpPRCode] FROM [GSMPrChgBrch]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->prchgno = $records["PrChgNo"];
				$instance->account = $records["Account"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->oldcostexcl = $records["OldCostExcl"];
				$instance->newcostexcl = $records["NewCostExcl"];
				$instance->oldsellexcl = $records["OldSellExcl"];
				$instance->newsellexcl = $records["NewSellExcl"];
				$instance->olddealexcl = $records["OldDealExcl"];
				$instance->newdealexcl = $records["NewDealExcl"];
				$instance->prcode = $records["PRCode"];
				$instance->dealprcode = $records["DealPRCode"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->oldcostincl = $records["OldCostIncl"];
				$instance->newcostincl = $records["NewCostIncl"];
				$instance->oldsellincl = $records["OldSellIncl"];
				$instance->newsellincl = $records["NewSellIncl"];
				$instance->olddealincl = $records["OldDealIncl"];
				$instance->newdealincl = $records["NewDealIncl"];
				$instance->units = $records["Units"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->oldexpexcl = $records["OldExpExcl"];
				$instance->oldexpincl = $records["OldExpIncl"];
				$instance->newexpexcl = $records["NewExpExcl"];
				$instance->newexpincl = $records["NewExpIncl"];
				$instance->expprcode = $records["ExpPRCode"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using StockCode
	*/
	public static function ini_StockCode($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [PrChgNo], [Account], [Branch], [StockCode], [LinkCode], [Description1], [OldCostExcl], [NewCostExcl], [OldSellExcl], [NewSellExcl], [OldDealExcl], [NewDealExcl], [PRCode], [DealPRCode], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [OldCostIncl], [NewCostIncl], [OldSellIncl], [NewSellIncl], [OldDealIncl], [NewDealIncl], [Units], [PurchaseItem], [OldExpExcl], [OldExpIncl], [NewExpExcl], [NewExpIncl], [ExpPRCode] FROM [GSMPrChgBrch]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->prchgno = $records["PrChgNo"];
				$instance->account = $records["Account"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->oldcostexcl = $records["OldCostExcl"];
				$instance->newcostexcl = $records["NewCostExcl"];
				$instance->oldsellexcl = $records["OldSellExcl"];
				$instance->newsellexcl = $records["NewSellExcl"];
				$instance->olddealexcl = $records["OldDealExcl"];
				$instance->newdealexcl = $records["NewDealExcl"];
				$instance->prcode = $records["PRCode"];
				$instance->dealprcode = $records["DealPRCode"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->oldcostincl = $records["OldCostIncl"];
				$instance->newcostincl = $records["NewCostIncl"];
				$instance->oldsellincl = $records["OldSellIncl"];
				$instance->newsellincl = $records["NewSellIncl"];
				$instance->olddealincl = $records["OldDealIncl"];
				$instance->newdealincl = $records["NewDealIncl"];
				$instance->units = $records["Units"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->oldexpexcl = $records["OldExpExcl"];
				$instance->oldexpincl = $records["OldExpIncl"];
				$instance->newexpexcl = $records["NewExpExcl"];
				$instance->newexpincl = $records["NewExpIncl"];
				$instance->expprcode = $records["ExpPRCode"];
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
			$res = $this->description1;
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