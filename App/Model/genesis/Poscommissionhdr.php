<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:40
@Database			:	GENESIS-DEMO
@Table			:	POSCommissionHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int ComNo" of type [int]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public float BaseLimit" of type [float]
	"public float TargetComm" of type [float]
	"public float BelowTargetComm" of type [float]
	"public float BaseGP" of type [float]
	"public float SalesExcl" of type [float]
	"public float CostExcl" of type [float]
	"public float Profit" of type [float]
	"public float NetSales" of type [float]
	"public float CommPaid" of type [float]
	"public float NetCommPaid" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Poscommissionhdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $comno ;	
	public $fromdate ;	
	public $todate ;	
	public $baselimit ;	
	public $targetcomm ;	
	public $belowtargetcomm ;	
	public $basegp ;	
	public $salesexcl ;	
	public $costexcl ;	
	public $profit ;	
	public $netsales ;	
	public $commpaid ;	
	public $netcommpaid ;	
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
			$query = " SELECT RecID, [CO], [Branch], [ComNo], [FromDate], [ToDate], [BaseLimit], [TargetComm], [BelowTargetComm], [BaseGP], [SalesExcl], [CostExcl], [Profit], [NetSales], [CommPaid], [NetCommPaid], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSCommissionHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->comno = $records["ComNo"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->baselimit = $records["BaseLimit"];
				$instance->targetcomm = $records["TargetComm"];
				$instance->belowtargetcomm = $records["BelowTargetComm"];
				$instance->basegp = $records["BaseGP"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->costexcl = $records["CostExcl"];
				$instance->profit = $records["Profit"];
				$instance->netsales = $records["NetSales"];
				$instance->commpaid = $records["CommPaid"];
				$instance->netcommpaid = $records["NetCommPaid"];
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