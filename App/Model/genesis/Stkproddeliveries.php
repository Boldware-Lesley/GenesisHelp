<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	STKProdDeliveries

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int SheetNo" of type [int]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar DepartDate" of type [nvarchar]
	"public nvarchar DepartTime" of type [nvarchar]
	"public nvarchar RegNo" of type [nvarchar]
	"public nvarchar DriverCode" of type [nvarchar]
	"public float FirstMass" of type [float]
	"public nvarchar ArrivalDate" of type [nvarchar]
	"public nvarchar ArrivalTime" of type [nvarchar]
	"public nvarchar DeliveryNo" of type [nvarchar]
	"public nvarchar WBCertNo" of type [nvarchar]
	"public nvarchar FarmSite" of type [nvarchar]
	"public float SecondMass" of type [float]
	"public int CrateCnt" of type [int]
	"public int CrateUnits" of type [int]
	"public int TotalUnits" of type [int]
	"public float GrossMass" of type [float]
	"public float AvgUnitMass" of type [float]
	"public int DOACnt" of type [int]
	"public float DOAMass" of type [float]
	"public int FarmCondCnt" of type [int]
	"public float FarmCondMass" of type [float]
	"public int PlantCondCnt" of type [int]
	"public float PlantCondMass" of type [float]
	"public int NettUnits" of type [int]
	"public float NettMass" of type [float]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Supplier" of type [nvarchar]
	"public int GRVNo" of type [int]
	"public nvarchar Shift" of type [nvarchar]
	"public nvarchar DayNight" of type [nvarchar]
	"public nvarchar ProdStartTime" of type [nvarchar]
	"public nvarchar ProdEndTime" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkproddeliveries {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $sheetno ;	
	public $status ;	
	public $departdate ;	
	public $departtime ;	
	public $regno ;	
	public $drivercode ;	
	public $firstmass ;	
	public $arrivaldate ;	
	public $arrivaltime ;	
	public $deliveryno ;	
	public $wbcertno ;	
	public $farmsite ;	
	public $secondmass ;	
	public $cratecnt ;	
	public $crateunits ;	
	public $totalunits ;	
	public $grossmass ;	
	public $avgunitmass ;	
	public $doacnt ;	
	public $doamass ;	
	public $farmcondcnt ;	
	public $farmcondmass ;	
	public $plantcondcnt ;	
	public $plantcondmass ;	
	public $nettunits ;	
	public $nettmass ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $supplier ;	
	public $grvno ;	
	public $shift ;	
	public $daynight ;	
	public $prodstarttime ;	
	public $prodendtime ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [SheetNo], [Status], [DepartDate], [DepartTime], [RegNo], [DriverCode], [FirstMass], [ArrivalDate], [ArrivalTime], [DeliveryNo], [WBCertNo], [FarmSite], [SecondMass], [CrateCnt], [CrateUnits], [TotalUnits], [GrossMass], [AvgUnitMass], [DOACnt], [DOAMass], [FarmCondCnt], [FarmCondMass], [PlantCondCnt], [PlantCondMass], [NettUnits], [NettMass], [StockCode], [LinkCode], [Description1], [Supplier], [GRVNo], [Shift], [DayNight], [ProdStartTime], [ProdEndTime] FROM [STKProdDeliveries]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->sheetno = $records["SheetNo"];
				$instance->status = $records["Status"];
				$instance->departdate = $records["DepartDate"];
				$instance->departtime = $records["DepartTime"];
				$instance->regno = $records["RegNo"];
				$instance->drivercode = $records["DriverCode"];
				$instance->firstmass = $records["FirstMass"];
				$instance->arrivaldate = $records["ArrivalDate"];
				$instance->arrivaltime = $records["ArrivalTime"];
				$instance->deliveryno = $records["DeliveryNo"];
				$instance->wbcertno = $records["WBCertNo"];
				$instance->farmsite = $records["FarmSite"];
				$instance->secondmass = $records["SecondMass"];
				$instance->cratecnt = $records["CrateCnt"];
				$instance->crateunits = $records["CrateUnits"];
				$instance->totalunits = $records["TotalUnits"];
				$instance->grossmass = $records["GrossMass"];
				$instance->avgunitmass = $records["AvgUnitMass"];
				$instance->doacnt = $records["DOACnt"];
				$instance->doamass = $records["DOAMass"];
				$instance->farmcondcnt = $records["FarmCondCnt"];
				$instance->farmcondmass = $records["FarmCondMass"];
				$instance->plantcondcnt = $records["PlantCondCnt"];
				$instance->plantcondmass = $records["PlantCondMass"];
				$instance->nettunits = $records["NettUnits"];
				$instance->nettmass = $records["NettMass"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->supplier = $records["Supplier"];
				$instance->grvno = $records["GRVNo"];
				$instance->shift = $records["Shift"];
				$instance->daynight = $records["DayNight"];
				$instance->prodstarttime = $records["ProdStartTime"];
				$instance->prodendtime = $records["ProdEndTime"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using DriverCode
	*/
	public static function ini_DriverCode($drivercode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [SheetNo], [Status], [DepartDate], [DepartTime], [RegNo], [DriverCode], [FirstMass], [ArrivalDate], [ArrivalTime], [DeliveryNo], [WBCertNo], [FarmSite], [SecondMass], [CrateCnt], [CrateUnits], [TotalUnits], [GrossMass], [AvgUnitMass], [DOACnt], [DOAMass], [FarmCondCnt], [FarmCondMass], [PlantCondCnt], [PlantCondMass], [NettUnits], [NettMass], [StockCode], [LinkCode], [Description1], [Supplier], [GRVNo], [Shift], [DayNight], [ProdStartTime], [ProdEndTime] FROM [STKProdDeliveries]  WHERE [DriverCode]=:drivercode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":drivercode", $drivercode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->sheetno = $records["SheetNo"];
				$instance->status = $records["Status"];
				$instance->departdate = $records["DepartDate"];
				$instance->departtime = $records["DepartTime"];
				$instance->regno = $records["RegNo"];
				$instance->drivercode = $records["DriverCode"];
				$instance->firstmass = $records["FirstMass"];
				$instance->arrivaldate = $records["ArrivalDate"];
				$instance->arrivaltime = $records["ArrivalTime"];
				$instance->deliveryno = $records["DeliveryNo"];
				$instance->wbcertno = $records["WBCertNo"];
				$instance->farmsite = $records["FarmSite"];
				$instance->secondmass = $records["SecondMass"];
				$instance->cratecnt = $records["CrateCnt"];
				$instance->crateunits = $records["CrateUnits"];
				$instance->totalunits = $records["TotalUnits"];
				$instance->grossmass = $records["GrossMass"];
				$instance->avgunitmass = $records["AvgUnitMass"];
				$instance->doacnt = $records["DOACnt"];
				$instance->doamass = $records["DOAMass"];
				$instance->farmcondcnt = $records["FarmCondCnt"];
				$instance->farmcondmass = $records["FarmCondMass"];
				$instance->plantcondcnt = $records["PlantCondCnt"];
				$instance->plantcondmass = $records["PlantCondMass"];
				$instance->nettunits = $records["NettUnits"];
				$instance->nettmass = $records["NettMass"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->supplier = $records["Supplier"];
				$instance->grvno = $records["GRVNo"];
				$instance->shift = $records["Shift"];
				$instance->daynight = $records["DayNight"];
				$instance->prodstarttime = $records["ProdStartTime"];
				$instance->prodendtime = $records["ProdEndTime"];
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