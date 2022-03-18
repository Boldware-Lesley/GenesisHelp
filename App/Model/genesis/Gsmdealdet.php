<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	GSMDealDet

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar DEALNO" of type [nvarchar]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public nvarchar DESCRIPTION2" of type [nvarchar]
	"public nvarchar SUPPCODE" of type [nvarchar]
	"public nvarchar BARCODE" of type [nvarchar]
	"public int UNITS" of type [int]
	"public int PACKCASE" of type [int]
	"public float COSTEXCL" of type [float]
	"public float COSTINCL" of type [float]
	"public float MINBUY" of type [float]
	"public nvarchar FREESTOCKCODE" of type [nvarchar]
	"public nvarchar FREELINKCODE" of type [nvarchar]
	"public nvarchar FREEDESCRIPTION1" of type [nvarchar]
	"public nvarchar FREEDESCRIPTION2" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar PACKSIZE" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public float FREEPERQTY" of type [float]
	"public float FREEQUANTITY" of type [float]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmdealdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $dealno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $suppcode ;	
	public $barcode ;	
	public $units ;	
	public $packcase ;	
	public $costexcl ;	
	public $costincl ;	
	public $minbuy ;	
	public $freestockcode ;	
	public $freelinkcode ;	
	public $freedescription1 ;	
	public $freedescription2 ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $packsize ;	
	public $account ;	
	public $freeperqty ;	
	public $freequantity ;	
	public $subaccount ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [DEALNO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [SUPPCODE], [BARCODE], [UNITS], [PACKCASE], [COSTEXCL], [COSTINCL], [MINBUY], [FREESTOCKCODE], [FREELINKCODE], [FREEDESCRIPTION1], [FREEDESCRIPTION2], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [PACKSIZE], [ACCOUNT], [FREEPERQTY], [FREEQUANTITY], [SUBACCOUNT] FROM [GSMDealDet]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->dealno = $records["DEALNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->barcode = $records["BARCODE"];
				$instance->units = $records["UNITS"];
				$instance->packcase = $records["PACKCASE"];
				$instance->costexcl = $records["COSTEXCL"];
				$instance->costincl = $records["COSTINCL"];
				$instance->minbuy = $records["MINBUY"];
				$instance->freestockcode = $records["FREESTOCKCODE"];
				$instance->freelinkcode = $records["FREELINKCODE"];
				$instance->freedescription1 = $records["FREEDESCRIPTION1"];
				$instance->freedescription2 = $records["FREEDESCRIPTION2"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->packsize = $records["PACKSIZE"];
				$instance->account = $records["ACCOUNT"];
				$instance->freeperqty = $records["FREEPERQTY"];
				$instance->freequantity = $records["FREEQUANTITY"];
				$instance->subaccount = $records["SUBACCOUNT"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using STOCKCODE
	*/
	public static function ini_STOCKCODE($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [DEALNO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [SUPPCODE], [BARCODE], [UNITS], [PACKCASE], [COSTEXCL], [COSTINCL], [MINBUY], [FREESTOCKCODE], [FREELINKCODE], [FREEDESCRIPTION1], [FREEDESCRIPTION2], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [PACKSIZE], [ACCOUNT], [FREEPERQTY], [FREEQUANTITY], [SUBACCOUNT] FROM [GSMDealDet]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->dealno = $records["DEALNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->barcode = $records["BARCODE"];
				$instance->units = $records["UNITS"];
				$instance->packcase = $records["PACKCASE"];
				$instance->costexcl = $records["COSTEXCL"];
				$instance->costincl = $records["COSTINCL"];
				$instance->minbuy = $records["MINBUY"];
				$instance->freestockcode = $records["FREESTOCKCODE"];
				$instance->freelinkcode = $records["FREELINKCODE"];
				$instance->freedescription1 = $records["FREEDESCRIPTION1"];
				$instance->freedescription2 = $records["FREEDESCRIPTION2"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->packsize = $records["PACKSIZE"];
				$instance->account = $records["ACCOUNT"];
				$instance->freeperqty = $records["FREEPERQTY"];
				$instance->freequantity = $records["FREEQUANTITY"];
				$instance->subaccount = $records["SUBACCOUNT"];
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