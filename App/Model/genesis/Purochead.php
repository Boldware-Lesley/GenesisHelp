<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	PUROCHead

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int CardNo" of type [int]
	"public nvarchar CardType" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Buyer" of type [nvarchar]
	"public nvarchar HeadBuyer" of type [nvarchar]
	"public nvarchar SeasonCode" of type [nvarchar]
	"public int AvgStkBulk" of type [int]
	"public int AvgStkReplenish" of type [int]
	"public int AvgStkSpecial" of type [int]
	"public int LeadTime" of type [int]
	"public nvarchar RuleCode" of type [nvarchar]
	"public nvarchar DeliveryDate" of type [nvarchar]
	"public nvarchar PaymentDate" of type [nvarchar]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalVAT" of type [float]
	"public float TotalExempt" of type [float]
	"public int OrderNo" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar AuthDate" of type [nvarchar]
	"public nvarchar AuthTime" of type [nvarchar]
	"public nvarchar AuthUser" of type [nvarchar]
	"public nvarchar AuthMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Purochead {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $cardno ;	
	public $cardtype ;	
	public $trandate ;	
	public $status ;	
	public $buyer ;	
	public $headbuyer ;	
	public $seasoncode ;	
	public $avgstkbulk ;	
	public $avgstkreplenish ;	
	public $avgstkspecial ;	
	public $leadtime ;	
	public $rulecode ;	
	public $deliverydate ;	
	public $paymentdate ;	
	public $fromdate ;	
	public $todate ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totalvat ;	
	public $totalexempt ;	
	public $orderno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $authdate ;	
	public $authtime ;	
	public $authuser ;	
	public $authmacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [CardNo], [CardType], [TranDate], [Status], [Buyer], [HeadBuyer], [SeasonCode], [AvgStkBulk], [AvgStkReplenish], [AvgStkSpecial], [LeadTime], [RuleCode], [DeliveryDate], [PaymentDate], [FromDate], [ToDate], [TotalExcl], [TotalIncl], [TotalVAT], [TotalExempt], [OrderNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [AuthDate], [AuthTime], [AuthUser], [AuthMacID] FROM [PUROCHead]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->cardno = $records["CardNo"];
				$instance->cardtype = $records["CardType"];
				$instance->trandate = $records["TranDate"];
				$instance->status = $records["Status"];
				$instance->buyer = $records["Buyer"];
				$instance->headbuyer = $records["HeadBuyer"];
				$instance->seasoncode = $records["SeasonCode"];
				$instance->avgstkbulk = $records["AvgStkBulk"];
				$instance->avgstkreplenish = $records["AvgStkReplenish"];
				$instance->avgstkspecial = $records["AvgStkSpecial"];
				$instance->leadtime = $records["LeadTime"];
				$instance->rulecode = $records["RuleCode"];
				$instance->deliverydate = $records["DeliveryDate"];
				$instance->paymentdate = $records["PaymentDate"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->orderno = $records["OrderNo"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["AuthTime"];
				$instance->authuser = $records["AuthUser"];
				$instance->authmacid = $records["AuthMacID"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using SeasonCode
	*/
	public static function ini_SeasonCode($seasoncode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [CardNo], [CardType], [TranDate], [Status], [Buyer], [HeadBuyer], [SeasonCode], [AvgStkBulk], [AvgStkReplenish], [AvgStkSpecial], [LeadTime], [RuleCode], [DeliveryDate], [PaymentDate], [FromDate], [ToDate], [TotalExcl], [TotalIncl], [TotalVAT], [TotalExempt], [OrderNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [AuthDate], [AuthTime], [AuthUser], [AuthMacID] FROM [PUROCHead]  WHERE [SeasonCode]=:seasoncode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":seasoncode", $seasoncode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->cardno = $records["CardNo"];
				$instance->cardtype = $records["CardType"];
				$instance->trandate = $records["TranDate"];
				$instance->status = $records["Status"];
				$instance->buyer = $records["Buyer"];
				$instance->headbuyer = $records["HeadBuyer"];
				$instance->seasoncode = $records["SeasonCode"];
				$instance->avgstkbulk = $records["AvgStkBulk"];
				$instance->avgstkreplenish = $records["AvgStkReplenish"];
				$instance->avgstkspecial = $records["AvgStkSpecial"];
				$instance->leadtime = $records["LeadTime"];
				$instance->rulecode = $records["RuleCode"];
				$instance->deliverydate = $records["DeliveryDate"];
				$instance->paymentdate = $records["PaymentDate"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->orderno = $records["OrderNo"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["AuthTime"];
				$instance->authuser = $records["AuthUser"];
				$instance->authmacid = $records["AuthMacID"];
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