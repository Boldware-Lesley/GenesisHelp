<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	GSMOCHead

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int CardNo" of type [int]
	"public nvarchar CardType" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar HeadBuyer" of type [nvarchar]
	"public nvarchar Buyer" of type [nvarchar]
	"public nvarchar SeasonCode" of type [nvarchar]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalVAT" of type [float]
	"public float TotalExempt" of type [float]
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

class Gsmochead {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $account ;	
	public $cardno ;	
	public $cardtype ;	
	public $trandate ;	
	public $status ;	
	public $headbuyer ;	
	public $buyer ;	
	public $seasoncode ;	
	public $fromdate ;	
	public $todate ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totalvat ;	
	public $totalexempt ;	
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
			$query = " SELECT RecID, [CO], [Account], [CardNo], [CardType], [TranDate], [Status], [HeadBuyer], [Buyer], [SeasonCode], [FromDate], [ToDate], [TotalExcl], [TotalIncl], [TotalVAT], [TotalExempt], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [AuthDate], [AuthTime], [AuthUser], [AuthMacID] FROM [GSMOCHead]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->account = $records["Account"];
				$instance->cardno = $records["CardNo"];
				$instance->cardtype = $records["CardType"];
				$instance->trandate = $records["TranDate"];
				$instance->status = $records["Status"];
				$instance->headbuyer = $records["HeadBuyer"];
				$instance->buyer = $records["Buyer"];
				$instance->seasoncode = $records["SeasonCode"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexempt = $records["TotalExempt"];
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
			$query = " SELECT RecID, [CO], [Account], [CardNo], [CardType], [TranDate], [Status], [HeadBuyer], [Buyer], [SeasonCode], [FromDate], [ToDate], [TotalExcl], [TotalIncl], [TotalVAT], [TotalExempt], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [AuthDate], [AuthTime], [AuthUser], [AuthMacID] FROM [GSMOCHead]  WHERE [SeasonCode]=:seasoncode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":seasoncode", $seasoncode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->account = $records["Account"];
				$instance->cardno = $records["CardNo"];
				$instance->cardtype = $records["CardType"];
				$instance->trandate = $records["TranDate"];
				$instance->status = $records["Status"];
				$instance->headbuyer = $records["HeadBuyer"];
				$instance->buyer = $records["Buyer"];
				$instance->seasoncode = $records["SeasonCode"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexempt = $records["TotalExempt"];
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