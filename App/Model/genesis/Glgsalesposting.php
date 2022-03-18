<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	GLGSalesPosting

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar CostCenter" of type [nvarchar]
	"public int AP" of type [int]
	"public int ContraGL" of type [int]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalVAT" of type [float]
	"public float TotalCost" of type [float]
	"public float TotalExempt" of type [float]
	"public float Cash" of type [float]
	"public float Cheques" of type [float]
	"public float CreditCards" of type [float]
	"public float Vouchers" of type [float]
	"public float Transfers" of type [float]
	"public float TenderAmount1" of type [float]
	"public float TenderAmount2" of type [float]
	"public float TenderAmount3" of type [float]
	"public float TenderAmount4" of type [float]
	"public float RoundingUp" of type [float]
	"public float RoundingDown" of type [float]
	"public nvarchar Posted" of type [nvarchar]
	"public nvarchar PostDate" of type [nvarchar]
	"public int GLTrace" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public float FloatVariance" of type [float]
	"public float TillShortage" of type [float]
	"public float VouchersCommission" of type [float]
	"public nvarchar RefNo1" of type [nvarchar]
	"public nvarchar RefNo2" of type [nvarchar]
	"public nvarchar RefNo3" of type [nvarchar]
	"public float ContraGLSubAcc" of type [float]
	"public float Wallets" of type [float]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public float DocDiscount" of type [float]
	"public float DocDiscVAT" of type [float]
	"public nvarchar RefNo4" of type [nvarchar]
	"public nvarchar RefNo5" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Glgsalesposting {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $trandate ;	
	public $txtp ;	
	public $details ;	
	public $reference ;	
	public $costcenter ;	
	public $ap ;	
	public $contragl ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totalvat ;	
	public $totalcost ;	
	public $totalexempt ;	
	public $cash ;	
	public $cheques ;	
	public $creditcards ;	
	public $vouchers ;	
	public $transfers ;	
	public $tenderamount1 ;	
	public $tenderamount2 ;	
	public $tenderamount3 ;	
	public $tenderamount4 ;	
	public $roundingup ;	
	public $roundingdown ;	
	public $posted ;	
	public $postdate ;	
	public $gltrace ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $floatvariance ;	
	public $tillshortage ;	
	public $voucherscommission ;	
	public $refno1 ;	
	public $refno2 ;	
	public $refno3 ;	
	public $contraglsubacc ;	
	public $wallets ;	
	public $sourcebranch ;	
	public $docdiscount ;	
	public $docdiscvat ;	
	public $refno4 ;	
	public $refno5 ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TranDate], [TxTp], [Details], [Reference], [CostCenter], [AP], [ContraGL], [TotalExcl], [TotalIncl], [TotalVAT], [TotalCost], [TotalExempt], [Cash], [Cheques], [CreditCards], [Vouchers], [Transfers], [TenderAmount1], [TenderAmount2], [TenderAmount3], [TenderAmount4], [RoundingUp], [RoundingDown], [Posted], [PostDate], [GLTrace], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [FloatVariance], [TillShortage], [VouchersCommission], [RefNo1], [RefNo2], [RefNo3], [ContraGLSubAcc], [Wallets], [SourceBranch], [DocDiscount], [DocDiscVAT], [RefNo4], [RefNo5] FROM [GLGSalesPosting]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->trandate = $records["TranDate"];
				$instance->txtp = $records["TxTp"];
				$instance->details = $records["Details"];
				$instance->reference = $records["Reference"];
				$instance->costcenter = $records["CostCenter"];
				$instance->ap = $records["AP"];
				$instance->contragl = $records["ContraGL"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalcost = $records["TotalCost"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->cash = $records["Cash"];
				$instance->cheques = $records["Cheques"];
				$instance->creditcards = $records["CreditCards"];
				$instance->vouchers = $records["Vouchers"];
				$instance->transfers = $records["Transfers"];
				$instance->tenderamount1 = $records["TenderAmount1"];
				$instance->tenderamount2 = $records["TenderAmount2"];
				$instance->tenderamount3 = $records["TenderAmount3"];
				$instance->tenderamount4 = $records["TenderAmount4"];
				$instance->roundingup = $records["RoundingUp"];
				$instance->roundingdown = $records["RoundingDown"];
				$instance->posted = $records["Posted"];
				$instance->postdate = $records["PostDate"];
				$instance->gltrace = $records["GLTrace"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->floatvariance = $records["FloatVariance"];
				$instance->tillshortage = $records["TillShortage"];
				$instance->voucherscommission = $records["VouchersCommission"];
				$instance->refno1 = $records["RefNo1"];
				$instance->refno2 = $records["RefNo2"];
				$instance->refno3 = $records["RefNo3"];
				$instance->contraglsubacc = $records["ContraGLSubAcc"];
				$instance->wallets = $records["Wallets"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->docdiscount = $records["DocDiscount"];
				$instance->docdiscvat = $records["DocDiscVAT"];
				$instance->refno4 = $records["RefNo4"];
				$instance->refno5 = $records["RefNo5"];
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