<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	STKPalletMst

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int PalletNo" of type [int]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public int OrderNo" of type [int]
	"public nvarchar PickDate" of type [nvarchar]
	"public nvarchar PickTime" of type [nvarchar]
	"public nvarchar PickUser" of type [nvarchar]
	"public nvarchar PickSlipNo" of type [nvarchar]
	"public nvarchar SaleDate" of type [nvarchar]
	"public nvarchar SaleTime" of type [nvarchar]
	"public nvarchar SaleDocNo" of type [nvarchar]
	"public nvarchar SaleAccount" of type [nvarchar]
	"public nvarchar PackLocation" of type [nvarchar]
	"public float TotalMass" of type [float]
	"public float TotalTare" of type [float]
*/
namespace genesis;


use PDO;

class Stkpalletmst {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $palletno ;	
	public $createdate ;	
	public $status ;	
	public $orderno ;	
	public $pickdate ;	
	public $picktime ;	
	public $pickuser ;	
	public $pickslipno ;	
	public $saledate ;	
	public $saletime ;	
	public $saledocno ;	
	public $saleaccount ;	
	public $packlocation ;	
	public $totalmass ;	
	public $totaltare ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [PalletNo], [CreateDate], [Status], [OrderNo], [PickDate], [PickTime], [PickUser], [PickSlipNo], [SaleDate], [SaleTime], [SaleDocNo], [SaleAccount], [PackLocation], [TotalMass], [TotalTare] FROM [STKPalletMst]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->palletno = $records["PalletNo"];
				$instance->createdate = $records["CreateDate"];
				$instance->status = $records["Status"];
				$instance->orderno = $records["OrderNo"];
				$instance->pickdate = $records["PickDate"];
				$instance->picktime = $records["PickTime"];
				$instance->pickuser = $records["PickUser"];
				$instance->pickslipno = $records["PickSlipNo"];
				$instance->saledate = $records["SaleDate"];
				$instance->saletime = $records["SaleTime"];
				$instance->saledocno = $records["SaleDocNo"];
				$instance->saleaccount = $records["SaleAccount"];
				$instance->packlocation = $records["PackLocation"];
				$instance->totalmass = $records["TotalMass"];
				$instance->totaltare = $records["TotalTare"];
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