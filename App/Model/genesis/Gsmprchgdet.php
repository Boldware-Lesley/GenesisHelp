<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	GSMPrChgDet

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar PRCHGNO" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public float OLDCOSTEXCL" of type [float]
	"public float NEWCOSTEXCL" of type [float]
	"public float OLDSELLEXCL" of type [float]
	"public float NEWSELLEXCL" of type [float]
	"public nvarchar PRCODE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public float OldDealExcl" of type [float]
	"public float NewDealExcl" of type [float]
	"public nvarchar DealPRCode" of type [nvarchar]
	"public nvarchar Variant" of type [nvarchar]
	"public float OldRebate" of type [float]
	"public float NewRebate" of type [float]
	"public float OldCostIncl" of type [float]
	"public float NewCostIncl" of type [float]
	"public float OldSellIncl" of type [float]
	"public float NewSellIncl" of type [float]
	"public float OldDealIncl" of type [float]
	"public float NewDealIncl" of type [float]
	"public nvarchar VATCode" of type [nvarchar]
	"public float VATRate" of type [float]
	"public int Units" of type [int]
	"public nvarchar PurchaseItem" of type [nvarchar]
	"public nvarchar ExpPRCode" of type [nvarchar]
	"public float OldExpExcl" of type [float]
	"public float OldExpIncl" of type [float]
	"public float NewExpExcl" of type [float]
	"public float NewExpIncl" of type [float]
*/
namespace genesis;


use PDO;

class Gsmprchgdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $prchgno ;	
	public $account ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $oldcostexcl ;	
	public $newcostexcl ;	
	public $oldsellexcl ;	
	public $newsellexcl ;	
	public $prcode ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $co ;	
	public $branch ;	
	public $olddealexcl ;	
	public $newdealexcl ;	
	public $dealprcode ;	
	public $variant ;	
	public $oldrebate ;	
	public $newrebate ;	
	public $oldcostincl ;	
	public $newcostincl ;	
	public $oldsellincl ;	
	public $newsellincl ;	
	public $olddealincl ;	
	public $newdealincl ;	
	public $vatcode ;	
	public $vatrate ;	
	public $units ;	
	public $purchaseitem ;	
	public $expprcode ;	
	public $oldexpexcl ;	
	public $oldexpincl ;	
	public $newexpexcl ;	
	public $newexpincl ;	
	
	
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
			$query = " SELECT RECID, [PRCHGNO], [ACCOUNT], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [OLDCOSTEXCL], [NEWCOSTEXCL], [OLDSELLEXCL], [NEWSELLEXCL], [PRCODE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [CO], [BRANCH], [OldDealExcl], [NewDealExcl], [DealPRCode], [Variant], [OldRebate], [NewRebate], [OldCostIncl], [NewCostIncl], [OldSellIncl], [NewSellIncl], [OldDealIncl], [NewDealIncl], [VATCode], [VATRate], [Units], [PurchaseItem], [ExpPRCode], [OldExpExcl], [OldExpIncl], [NewExpExcl], [NewExpIncl] FROM [GSMPrChgDet]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->prchgno = $records["PRCHGNO"];
				$instance->account = $records["ACCOUNT"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->oldcostexcl = $records["OLDCOSTEXCL"];
				$instance->newcostexcl = $records["NEWCOSTEXCL"];
				$instance->oldsellexcl = $records["OLDSELLEXCL"];
				$instance->newsellexcl = $records["NEWSELLEXCL"];
				$instance->prcode = $records["PRCODE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->olddealexcl = $records["OldDealExcl"];
				$instance->newdealexcl = $records["NewDealExcl"];
				$instance->dealprcode = $records["DealPRCode"];
				$instance->variant = $records["Variant"];
				$instance->oldrebate = $records["OldRebate"];
				$instance->newrebate = $records["NewRebate"];
				$instance->oldcostincl = $records["OldCostIncl"];
				$instance->newcostincl = $records["NewCostIncl"];
				$instance->oldsellincl = $records["OldSellIncl"];
				$instance->newsellincl = $records["NewSellIncl"];
				$instance->olddealincl = $records["OldDealIncl"];
				$instance->newdealincl = $records["NewDealIncl"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->units = $records["Units"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->expprcode = $records["ExpPRCode"];
				$instance->oldexpexcl = $records["OldExpExcl"];
				$instance->oldexpincl = $records["OldExpIncl"];
				$instance->newexpexcl = $records["NewExpExcl"];
				$instance->newexpincl = $records["NewExpIncl"];
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
			$query = " SELECT RECID, [PRCHGNO], [ACCOUNT], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [OLDCOSTEXCL], [NEWCOSTEXCL], [OLDSELLEXCL], [NEWSELLEXCL], [PRCODE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [CO], [BRANCH], [OldDealExcl], [NewDealExcl], [DealPRCode], [Variant], [OldRebate], [NewRebate], [OldCostIncl], [NewCostIncl], [OldSellIncl], [NewSellIncl], [OldDealIncl], [NewDealIncl], [VATCode], [VATRate], [Units], [PurchaseItem], [ExpPRCode], [OldExpExcl], [OldExpIncl], [NewExpExcl], [NewExpIncl] FROM [GSMPrChgDet]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->prchgno = $records["PRCHGNO"];
				$instance->account = $records["ACCOUNT"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->oldcostexcl = $records["OLDCOSTEXCL"];
				$instance->newcostexcl = $records["NEWCOSTEXCL"];
				$instance->oldsellexcl = $records["OLDSELLEXCL"];
				$instance->newsellexcl = $records["NEWSELLEXCL"];
				$instance->prcode = $records["PRCODE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->olddealexcl = $records["OldDealExcl"];
				$instance->newdealexcl = $records["NewDealExcl"];
				$instance->dealprcode = $records["DealPRCode"];
				$instance->variant = $records["Variant"];
				$instance->oldrebate = $records["OldRebate"];
				$instance->newrebate = $records["NewRebate"];
				$instance->oldcostincl = $records["OldCostIncl"];
				$instance->newcostincl = $records["NewCostIncl"];
				$instance->oldsellincl = $records["OldSellIncl"];
				$instance->newsellincl = $records["NewSellIncl"];
				$instance->olddealincl = $records["OldDealIncl"];
				$instance->newdealincl = $records["NewDealIncl"];
				$instance->vatcode = $records["VATCode"];
				$instance->vatrate = $records["VATRate"];
				$instance->units = $records["Units"];
				$instance->purchaseitem = $records["PurchaseItem"];
				$instance->expprcode = $records["ExpPRCode"];
				$instance->oldexpexcl = $records["OldExpExcl"];
				$instance->oldexpincl = $records["OldExpIncl"];
				$instance->newexpexcl = $records["NewExpExcl"];
				$instance->newexpincl = $records["NewExpIncl"];
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