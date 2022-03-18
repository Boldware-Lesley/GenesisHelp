<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	POSDailySummary

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public string CO" of type [string]
	"public string Branch" of type [string]
	"public string TranDate" of type [string]
	"public string TranTime" of type [string]
	"public float CashSaleExcl" of type [float]
	"public float CashSaleIncl" of type [float]
	"public float CashSaleVAT" of type [float]
	"public float CashSaleCostExcl" of type [float]
	"public float CashSaleCostIncl" of type [float]
	"public float CashSalePrft" of type [float]
	"public float CashSaleGP" of type [float]
	"public float CashSaleRebates" of type [float]
	"public float CashSaleNetGP" of type [float]
	"public float CashRetnExcl" of type [float]
	"public float CashRetnIncl" of type [float]
	"public float CashRetnVAT" of type [float]
	"public float CashRetnCostExcl" of type [float]
	"public float CashRetnCostIncl" of type [float]
	"public float CashRetnPrft" of type [float]
	"public float CashRetnGP" of type [float]
	"public float CashRetnRebates" of type [float]
	"public float CashRetnNetGP" of type [float]
	"public float AccSaleExcl" of type [float]
	"public float AccSaleIncl" of type [float]
	"public float AccSaleVAT" of type [float]
	"public float AccSaleCostExcl" of type [float]
	"public float AccSaleCostIncl" of type [float]
	"public float AccSalePrft" of type [float]
	"public float AccSaleGP" of type [float]
	"public float AccSaleRebates" of type [float]
	"public float AccSaleNetGP" of type [float]
	"public float AccRetnExcl" of type [float]
	"public float AccRetnIncl" of type [float]
	"public float AccRetnVAT" of type [float]
	"public float AccRetnCostExcl" of type [float]
	"public float AccRetnCostIncl" of type [float]
	"public float AccRetnPrft" of type [float]
	"public float AccRetnGP" of type [float]
	"public float AccRetnRebates" of type [float]
	"public float AccRetnNetGP" of type [float]
	"public float AccPayments" of type [float]
	"public float SalesExempt" of type [float]
	"public float SalesTaxable" of type [float]
	"public float Discount" of type [float]
	"public int SlipCnt" of type [int]
	"public int SlipLines" of type [int]
	"public int SlipItemCnt" of type [int]
	"public float SlipAvgValue" of type [float]
	"public float SlipAvgProfit" of type [float]
	"public int LBCustCnt" of type [int]
	"public int LBNew" of type [int]
	"public int LBInvCnt" of type [int]
	"public float LBInvValue" of type [float]
	"public float LBPayments" of type [float]
	"public float RoundingUp" of type [float]
	"public float RoundingDown" of type [float]
	"public float Charity" of type [float]
	"public float STKReceipts" of type [float]
	"public float STKReturns" of type [float]
	"public float STKAdjust" of type [float]
	"public float DEBPayments" of type [float]
	"public float DEBBalGroup1" of type [float]
	"public float DEBBalGroup2" of type [float]
	"public float DEBBalGroup3" of type [float]
	"public float CRDPayments" of type [float]
	"public float CRDBalGroup1" of type [float]
	"public float CRDBalGroup2" of type [float]
	"public float CRDBalGroup3" of type [float]
	"public float CashOnHand" of type [float]
	"public float GLGBankTotal" of type [float]
	"public float GLGCashClearing" of type [float]
	"public float GLGCheqClearing" of type [float]
	"public float GLGCardClearing" of type [float]
	"public float GLGVouchClearing" of type [float]
	"public float GLGTender1Clearing" of type [float]
	"public float GLGTender2Clearing" of type [float]
	"public float GLGTender3Clearing" of type [float]
	"public float GLGTender4Clearing" of type [float]
*/
namespace genesis;


use PDO;

class Posdailysummary {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $trandate ;	
	public $trantime ;	
	public $cashsaleexcl ;	
	public $cashsaleincl ;	
	public $cashsalevat ;	
	public $cashsalecostexcl ;	
	public $cashsalecostincl ;	
	public $cashsaleprft ;	
	public $cashsalegp ;	
	public $cashsalerebates ;	
	public $cashsalenetgp ;	
	public $cashretnexcl ;	
	public $cashretnincl ;	
	public $cashretnvat ;	
	public $cashretncostexcl ;	
	public $cashretncostincl ;	
	public $cashretnprft ;	
	public $cashretngp ;	
	public $cashretnrebates ;	
	public $cashretnnetgp ;	
	public $accsaleexcl ;	
	public $accsaleincl ;	
	public $accsalevat ;	
	public $accsalecostexcl ;	
	public $accsalecostincl ;	
	public $accsaleprft ;	
	public $accsalegp ;	
	public $accsalerebates ;	
	public $accsalenetgp ;	
	public $accretnexcl ;	
	public $accretnincl ;	
	public $accretnvat ;	
	public $accretncostexcl ;	
	public $accretncostincl ;	
	public $accretnprft ;	
	public $accretngp ;	
	public $accretnrebates ;	
	public $accretnnetgp ;	
	public $accpayments ;	
	public $salesexempt ;	
	public $salestaxable ;	
	public $discount ;	
	public $slipcnt ;	
	public $sliplines ;	
	public $slipitemcnt ;	
	public $slipavgvalue ;	
	public $slipavgprofit ;	
	public $lbcustcnt ;	
	public $lbnew ;	
	public $lbinvcnt ;	
	public $lbinvvalue ;	
	public $lbpayments ;	
	public $roundingup ;	
	public $roundingdown ;	
	public $charity ;	
	public $stkreceipts ;	
	public $stkreturns ;	
	public $stkadjust ;	
	public $debpayments ;	
	public $debbalgroup1 ;	
	public $debbalgroup2 ;	
	public $debbalgroup3 ;	
	public $crdpayments ;	
	public $crdbalgroup1 ;	
	public $crdbalgroup2 ;	
	public $crdbalgroup3 ;	
	public $cashonhand ;	
	public $glgbanktotal ;	
	public $glgcashclearing ;	
	public $glgcheqclearing ;	
	public $glgcardclearing ;	
	public $glgvouchclearing ;	
	public $glgtender1clearing ;	
	public $glgtender2clearing ;	
	public $glgtender3clearing ;	
	public $glgtender4clearing ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TranDate], [TranTime], [CashSaleExcl], [CashSaleIncl], [CashSaleVAT], [CashSaleCostExcl], [CashSaleCostIncl], [CashSalePrft], [CashSaleGP], [CashSaleRebates], [CashSaleNetGP], [CashRetnExcl], [CashRetnIncl], [CashRetnVAT], [CashRetnCostExcl], [CashRetnCostIncl], [CashRetnPrft], [CashRetnGP], [CashRetnRebates], [CashRetnNetGP], [AccSaleExcl], [AccSaleIncl], [AccSaleVAT], [AccSaleCostExcl], [AccSaleCostIncl], [AccSalePrft], [AccSaleGP], [AccSaleRebates], [AccSaleNetGP], [AccRetnExcl], [AccRetnIncl], [AccRetnVAT], [AccRetnCostExcl], [AccRetnCostIncl], [AccRetnPrft], [AccRetnGP], [AccRetnRebates], [AccRetnNetGP], [AccPayments], [SalesExempt], [SalesTaxable], [Discount], [SlipCnt], [SlipLines], [SlipItemCnt], [SlipAvgValue], [SlipAvgProfit], [LBCustCnt], [LBNew], [LBInvCnt], [LBInvValue], [LBPayments], [RoundingUp], [RoundingDown], [Charity], [STKReceipts], [STKReturns], [STKAdjust], [DEBPayments], [DEBBalGroup1], [DEBBalGroup2], [DEBBalGroup3], [CRDPayments], [CRDBalGroup1], [CRDBalGroup2], [CRDBalGroup3], [CashOnHand], [GLGBankTotal], [GLGCashClearing], [GLGCheqClearing], [GLGCardClearing], [GLGVouchClearing], [GLGTender1Clearing], [GLGTender2Clearing], [GLGTender3Clearing], [GLGTender4Clearing] FROM [POSDailySummary]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->trandate = $records["TranDate"];
				$instance->trantime = $records["TranTime"];
				$instance->cashsaleexcl = $records["CashSaleExcl"];
				$instance->cashsaleincl = $records["CashSaleIncl"];
				$instance->cashsalevat = $records["CashSaleVAT"];
				$instance->cashsalecostexcl = $records["CashSaleCostExcl"];
				$instance->cashsalecostincl = $records["CashSaleCostIncl"];
				$instance->cashsaleprft = $records["CashSalePrft"];
				$instance->cashsalegp = $records["CashSaleGP"];
				$instance->cashsalerebates = $records["CashSaleRebates"];
				$instance->cashsalenetgp = $records["CashSaleNetGP"];
				$instance->cashretnexcl = $records["CashRetnExcl"];
				$instance->cashretnincl = $records["CashRetnIncl"];
				$instance->cashretnvat = $records["CashRetnVAT"];
				$instance->cashretncostexcl = $records["CashRetnCostExcl"];
				$instance->cashretncostincl = $records["CashRetnCostIncl"];
				$instance->cashretnprft = $records["CashRetnPrft"];
				$instance->cashretngp = $records["CashRetnGP"];
				$instance->cashretnrebates = $records["CashRetnRebates"];
				$instance->cashretnnetgp = $records["CashRetnNetGP"];
				$instance->accsaleexcl = $records["AccSaleExcl"];
				$instance->accsaleincl = $records["AccSaleIncl"];
				$instance->accsalevat = $records["AccSaleVAT"];
				$instance->accsalecostexcl = $records["AccSaleCostExcl"];
				$instance->accsalecostincl = $records["AccSaleCostIncl"];
				$instance->accsaleprft = $records["AccSalePrft"];
				$instance->accsalegp = $records["AccSaleGP"];
				$instance->accsalerebates = $records["AccSaleRebates"];
				$instance->accsalenetgp = $records["AccSaleNetGP"];
				$instance->accretnexcl = $records["AccRetnExcl"];
				$instance->accretnincl = $records["AccRetnIncl"];
				$instance->accretnvat = $records["AccRetnVAT"];
				$instance->accretncostexcl = $records["AccRetnCostExcl"];
				$instance->accretncostincl = $records["AccRetnCostIncl"];
				$instance->accretnprft = $records["AccRetnPrft"];
				$instance->accretngp = $records["AccRetnGP"];
				$instance->accretnrebates = $records["AccRetnRebates"];
				$instance->accretnnetgp = $records["AccRetnNetGP"];
				$instance->accpayments = $records["AccPayments"];
				$instance->salesexempt = $records["SalesExempt"];
				$instance->salestaxable = $records["SalesTaxable"];
				$instance->discount = $records["Discount"];
				$instance->slipcnt = $records["SlipCnt"];
				$instance->sliplines = $records["SlipLines"];
				$instance->slipitemcnt = $records["SlipItemCnt"];
				$instance->slipavgvalue = $records["SlipAvgValue"];
				$instance->slipavgprofit = $records["SlipAvgProfit"];
				$instance->lbcustcnt = $records["LBCustCnt"];
				$instance->lbnew = $records["LBNew"];
				$instance->lbinvcnt = $records["LBInvCnt"];
				$instance->lbinvvalue = $records["LBInvValue"];
				$instance->lbpayments = $records["LBPayments"];
				$instance->roundingup = $records["RoundingUp"];
				$instance->roundingdown = $records["RoundingDown"];
				$instance->charity = $records["Charity"];
				$instance->stkreceipts = $records["STKReceipts"];
				$instance->stkreturns = $records["STKReturns"];
				$instance->stkadjust = $records["STKAdjust"];
				$instance->debpayments = $records["DEBPayments"];
				$instance->debbalgroup1 = $records["DEBBalGroup1"];
				$instance->debbalgroup2 = $records["DEBBalGroup2"];
				$instance->debbalgroup3 = $records["DEBBalGroup3"];
				$instance->crdpayments = $records["CRDPayments"];
				$instance->crdbalgroup1 = $records["CRDBalGroup1"];
				$instance->crdbalgroup2 = $records["CRDBalGroup2"];
				$instance->crdbalgroup3 = $records["CRDBalGroup3"];
				$instance->cashonhand = $records["CashOnHand"];
				$instance->glgbanktotal = $records["GLGBankTotal"];
				$instance->glgcashclearing = $records["GLGCashClearing"];
				$instance->glgcheqclearing = $records["GLGCheqClearing"];
				$instance->glgcardclearing = $records["GLGCardClearing"];
				$instance->glgvouchclearing = $records["GLGVouchClearing"];
				$instance->glgtender1clearing = $records["GLGTender1Clearing"];
				$instance->glgtender2clearing = $records["GLGTender2Clearing"];
				$instance->glgtender3clearing = $records["GLGTender3Clearing"];
				$instance->glgtender4clearing = $records["GLGTender4Clearing"];
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
			$res = $this->recid;
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