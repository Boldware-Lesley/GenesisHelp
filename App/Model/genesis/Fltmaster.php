<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	FLTMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar RegNo" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar VehType" of type [nvarchar]
	"public nvarchar Make" of type [nvarchar]
	"public nvarchar Model" of type [nvarchar]
	"public nvarchar Year" of type [nvarchar]
	"public nvarchar VINNo" of type [nvarchar]
	"public nvarchar EnginNo" of type [nvarchar]
	"public nvarchar TrackingID" of type [nvarchar]
	"public nvarchar TollTagID" of type [nvarchar]
	"public nvarchar CostCenter" of type [nvarchar]
	"public int LastKM" of type [int]
	"public nvarchar RegisterNo" of type [nvarchar]
	"public nvarchar LicenseRenewal" of type [nvarchar]
	"public float AssetValue" of type [float]
	"public nvarchar AssetValueDate" of type [nvarchar]
	"public nvarchar InsuredBy" of type [nvarchar]
	"public nvarchar InsurePolNo" of type [nvarchar]
	"public nvarchar InsurePolRenewal" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Fltmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $regno ;	
	public $description ;	
	public $vehtype ;	
	public $make ;	
	public $model ;	
	public $year ;	
	public $vinno ;	
	public $enginno ;	
	public $trackingid ;	
	public $tolltagid ;	
	public $costcenter ;	
	public $lastkm ;	
	public $registerno ;	
	public $licenserenewal ;	
	public $assetvalue ;	
	public $assetvaluedate ;	
	public $insuredby ;	
	public $insurepolno ;	
	public $insurepolrenewal ;	
	public $status ;	
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
			$query = " SELECT RecID, [CO], [RegNo], [Description], [VehType], [Make], [Model], [Year], [VINNo], [EnginNo], [TrackingID], [TollTagID], [CostCenter], [LastKM], [RegisterNo], [LicenseRenewal], [AssetValue], [AssetValueDate], [InsuredBy], [InsurePolNo], [InsurePolRenewal], [Status], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [FLTMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->regno = $records["RegNo"];
				$instance->description = $records["Description"];
				$instance->vehtype = $records["VehType"];
				$instance->make = $records["Make"];
				$instance->model = $records["Model"];
				$instance->year = $records["Year"];
				$instance->vinno = $records["VINNo"];
				$instance->enginno = $records["EnginNo"];
				$instance->trackingid = $records["TrackingID"];
				$instance->tolltagid = $records["TollTagID"];
				$instance->costcenter = $records["CostCenter"];
				$instance->lastkm = $records["LastKM"];
				$instance->registerno = $records["RegisterNo"];
				$instance->licenserenewal = $records["LicenseRenewal"];
				$instance->assetvalue = $records["AssetValue"];
				$instance->assetvaluedate = $records["AssetValueDate"];
				$instance->insuredby = $records["InsuredBy"];
				$instance->insurepolno = $records["InsurePolNo"];
				$instance->insurepolrenewal = $records["InsurePolRenewal"];
				$instance->status = $records["Status"];
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
			$res = $this->description;
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