<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	POSCashierComHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int ComNo" of type [int]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public float BasePrice" of type [float]
	"public float SalesExcl" of type [float]
	"public float CostExcl" of type [float]
	"public float Profit" of type [float]
	"public float Quantity" of type [float]
	"public float Commission" of type [float]
	"public float TotalCashiers" of type [float]
	"public float TotalCommission" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Poscashiercomhdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $comno ;	
	public $description1 ;	
	public $fromdate ;	
	public $todate ;	
	public $baseprice ;	
	public $salesexcl ;	
	public $costexcl ;	
	public $profit ;	
	public $quantity ;	
	public $commission ;	
	public $totalcashiers ;	
	public $totalcommission ;	
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
			$query = " SELECT RecID, [CO], [Branch], [ComNo], [Description1], [FromDate], [ToDate], [BasePrice], [SalesExcl], [CostExcl], [Profit], [Quantity], [Commission], [TotalCashiers], [TotalCommission], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSCashierComHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->comno = $records["ComNo"];
				$instance->description1 = $records["Description1"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->baseprice = $records["BasePrice"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->costexcl = $records["CostExcl"];
				$instance->profit = $records["Profit"];
				$instance->quantity = $records["Quantity"];
				$instance->commission = $records["Commission"];
				$instance->totalcashiers = $records["TotalCashiers"];
				$instance->totalcommission = $records["TotalCommission"];
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