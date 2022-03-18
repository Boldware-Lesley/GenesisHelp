<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	ORDTripSheetDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int SheetNo" of type [int]
	"public int DropNo" of type [int]
	"public nvarchar OrderNo" of type [nvarchar]
	"public nvarchar InvNo" of type [nvarchar]
	"public nvarchar ChepRefNo" of type [nvarchar]
	"public int Boxes" of type [int]
	"public int ChepCrates" of type [int]
	"public int ChepPallets" of type [int]
	"public float ChepPalletWeight" of type [float]
	"public int SangCrates" of type [int]
	"public int SangPallets" of type [int]
	"public float SangPalletWeight" of type [float]
	"public float TotalWeight" of type [float]
	"public nvarchar Returns" of type [nvarchar]
	"public nvarchar PODCheck" of type [nvarchar]
	"public nvarchar Destination" of type [nvarchar]
	"public float TareWeight" of type [float]
	"public float ProdWeight" of type [float]
	"public int TotalPallets" of type [int]
	"public nvarchar ArriveDate" of type [nvarchar]
	"public nvarchar ArriveTime" of type [nvarchar]
	"public int ArriveKMS" of type [int]
	"public nvarchar DepartDate" of type [nvarchar]
	"public nvarchar DepartTime" of type [nvarchar]
	"public nvarchar POSImageType" of type [nvarchar]
	"public image POSImage" of type [image]
*/
namespace genesis;


use PDO;

class Ordtripsheetdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $sheetno ;	
	public $dropno ;	
	public $orderno ;	
	public $invno ;	
	public $cheprefno ;	
	public $boxes ;	
	public $chepcrates ;	
	public $cheppallets ;	
	public $cheppalletweight ;	
	public $sangcrates ;	
	public $sangpallets ;	
	public $sangpalletweight ;	
	public $totalweight ;	
	public $returns ;	
	public $podcheck ;	
	public $destination ;	
	public $tareweight ;	
	public $prodweight ;	
	public $totalpallets ;	
	public $arrivedate ;	
	public $arrivetime ;	
	public $arrivekms ;	
	public $departdate ;	
	public $departtime ;	
	public $posimagetype ;	
	public $posimage ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [SheetNo], [DropNo], [OrderNo], [InvNo], [ChepRefNo], [Boxes], [ChepCrates], [ChepPallets], [ChepPalletWeight], [SangCrates], [SangPallets], [SangPalletWeight], [TotalWeight], [Returns], [PODCheck], [Destination], [TareWeight], [ProdWeight], [TotalPallets], [ArriveDate], [ArriveTime], [ArriveKMS], [DepartDate], [DepartTime], [POSImageType], [POSImage] FROM [ORDTripSheetDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->sheetno = $records["SheetNo"];
				$instance->dropno = $records["DropNo"];
				$instance->orderno = $records["OrderNo"];
				$instance->invno = $records["InvNo"];
				$instance->cheprefno = $records["ChepRefNo"];
				$instance->boxes = $records["Boxes"];
				$instance->chepcrates = $records["ChepCrates"];
				$instance->cheppallets = $records["ChepPallets"];
				$instance->cheppalletweight = $records["ChepPalletWeight"];
				$instance->sangcrates = $records["SangCrates"];
				$instance->sangpallets = $records["SangPallets"];
				$instance->sangpalletweight = $records["SangPalletWeight"];
				$instance->totalweight = $records["TotalWeight"];
				$instance->returns = $records["Returns"];
				$instance->podcheck = $records["PODCheck"];
				$instance->destination = $records["Destination"];
				$instance->tareweight = $records["TareWeight"];
				$instance->prodweight = $records["ProdWeight"];
				$instance->totalpallets = $records["TotalPallets"];
				$instance->arrivedate = $records["ArriveDate"];
				$instance->arrivetime = $records["ArriveTime"];
				$instance->arrivekms = $records["ArriveKMS"];
				$instance->departdate = $records["DepartDate"];
				$instance->departtime = $records["DepartTime"];
				$instance->posimagetype = $records["POSImageType"];
				$instance->posimage = $records["POSImage"];
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