<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	GSMOCBranch

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int CardNo" of type [int]
	"public int AvgStkBulk" of type [int]
	"public int AvgStkReplenish" of type [int]
	"public int AvgStkSpecial" of type [int]
	"public int LeadTime" of type [int]
	"public nvarchar RuleCode" of type [nvarchar]
	"public nvarchar DeliveryDate" of type [nvarchar]
	"public nvarchar PaymentDate" of type [nvarchar]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalVAT" of type [float]
	"public float TotalExempt" of type [float]
	"public int OrderNo" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmocbranch {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $cardno ;	
	public $avgstkbulk ;	
	public $avgstkreplenish ;	
	public $avgstkspecial ;	
	public $leadtime ;	
	public $rulecode ;	
	public $deliverydate ;	
	public $paymentdate ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totalvat ;	
	public $totalexempt ;	
	public $orderno ;	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [CardNo], [AvgStkBulk], [AvgStkReplenish], [AvgStkSpecial], [LeadTime], [RuleCode], [DeliveryDate], [PaymentDate], [TotalExcl], [TotalIncl], [TotalVAT], [TotalExempt], [OrderNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMOCBranch]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->cardno = $records["CardNo"];
				$instance->avgstkbulk = $records["AvgStkBulk"];
				$instance->avgstkreplenish = $records["AvgStkReplenish"];
				$instance->avgstkspecial = $records["AvgStkSpecial"];
				$instance->leadtime = $records["LeadTime"];
				$instance->rulecode = $records["RuleCode"];
				$instance->deliverydate = $records["DeliveryDate"];
				$instance->paymentdate = $records["PaymentDate"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->orderno = $records["OrderNo"];
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
	Main Constructor For Declearing Using RuleCode
	*/
	public static function ini_RuleCode($rulecode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [CardNo], [AvgStkBulk], [AvgStkReplenish], [AvgStkSpecial], [LeadTime], [RuleCode], [DeliveryDate], [PaymentDate], [TotalExcl], [TotalIncl], [TotalVAT], [TotalExempt], [OrderNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMOCBranch]  WHERE [RuleCode]=:rulecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":rulecode", $rulecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->cardno = $records["CardNo"];
				$instance->avgstkbulk = $records["AvgStkBulk"];
				$instance->avgstkreplenish = $records["AvgStkReplenish"];
				$instance->avgstkspecial = $records["AvgStkSpecial"];
				$instance->leadtime = $records["LeadTime"];
				$instance->rulecode = $records["RuleCode"];
				$instance->deliverydate = $records["DeliveryDate"];
				$instance->paymentdate = $records["PaymentDate"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->orderno = $records["OrderNo"];
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