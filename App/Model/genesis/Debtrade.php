<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	DEBTrade

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public int DocCnt" of type [int]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalVAT" of type [float]
	"public float TotalCostExcl" of type [float]
	"public float TotalCostIncl" of type [float]
	"public float Profit" of type [float]
	"public float GP" of type [float]
	"public float ManDiscount" of type [float]
	"public float ManGP" of type [float]
	"public float ManActual" of type [float]
	"public float ManActualGP" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar SAPDate" of type [nvarchar]
	"public nvarchar SAPTime" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debtrade {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $trandate ;	
	public $status ;	
	public $doccnt ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totalvat ;	
	public $totalcostexcl ;	
	public $totalcostincl ;	
	public $profit ;	
	public $gp ;	
	public $mandiscount ;	
	public $mangp ;	
	public $manactual ;	
	public $manactualgp ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $sapdate ;	
	public $saptime ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TranDate], [Status], [DocCnt], [TotalExcl], [TotalIncl], [TotalVAT], [TotalCostExcl], [TotalCostIncl], [Profit], [GP], [ManDiscount], [ManGP], [ManActual], [ManActualGP], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [SAPDate], [SAPTime] FROM [DEBTrade]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->trandate = $records["TranDate"];
				$instance->status = $records["Status"];
				$instance->doccnt = $records["DocCnt"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->totalcostincl = $records["TotalCostIncl"];
				$instance->profit = $records["Profit"];
				$instance->gp = $records["GP"];
				$instance->mandiscount = $records["ManDiscount"];
				$instance->mangp = $records["ManGP"];
				$instance->manactual = $records["ManActual"];
				$instance->manactualgp = $records["ManActualGP"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->sapdate = $records["SAPDate"];
				$instance->saptime = $records["SAPTime"];
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