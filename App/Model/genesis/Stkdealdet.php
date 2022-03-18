<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	STKDealDet

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
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
	"public float DISCOUNT" of type [float]
	"public nvarchar DISCTYPE" of type [nvarchar]
	"public nvarchar FREESTOCKCODE" of type [nvarchar]
	"public nvarchar FREELINKCODE" of type [nvarchar]
	"public nvarchar FREEDESCRIPTION1" of type [nvarchar]
	"public nvarchar FREEDESCRIPTION2" of type [nvarchar]
	"public float FREEPER" of type [float]
	"public float FREEQTY" of type [float]
	"public float SELLEXCL" of type [float]
	"public float SELLINCL" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkdealdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
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
	public $discount ;	
	public $disctype ;	
	public $freestockcode ;	
	public $freelinkcode ;	
	public $freedescription1 ;	
	public $freedescription2 ;	
	public $freeper ;	
	public $freeqty ;	
	public $sellexcl ;	
	public $sellincl ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [DEALNO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [SUPPCODE], [BARCODE], [UNITS], [PACKCASE], [COSTEXCL], [COSTINCL], [MINBUY], [DISCOUNT], [DISCTYPE], [FREESTOCKCODE], [FREELINKCODE], [FREEDESCRIPTION1], [FREEDESCRIPTION2], [FREEPER], [FREEQTY], [SELLEXCL], [SELLINCL], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [STKDealDet]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
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
				$instance->discount = $records["DISCOUNT"];
				$instance->disctype = $records["DISCTYPE"];
				$instance->freestockcode = $records["FREESTOCKCODE"];
				$instance->freelinkcode = $records["FREELINKCODE"];
				$instance->freedescription1 = $records["FREEDESCRIPTION1"];
				$instance->freedescription2 = $records["FREEDESCRIPTION2"];
				$instance->freeper = $records["FREEPER"];
				$instance->freeqty = $records["FREEQTY"];
				$instance->sellexcl = $records["SELLEXCL"];
				$instance->sellincl = $records["SELLINCL"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [DEALNO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [SUPPCODE], [BARCODE], [UNITS], [PACKCASE], [COSTEXCL], [COSTINCL], [MINBUY], [DISCOUNT], [DISCTYPE], [FREESTOCKCODE], [FREELINKCODE], [FREEDESCRIPTION1], [FREEDESCRIPTION2], [FREEPER], [FREEQTY], [SELLEXCL], [SELLINCL], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [STKDealDet]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
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
				$instance->discount = $records["DISCOUNT"];
				$instance->disctype = $records["DISCTYPE"];
				$instance->freestockcode = $records["FREESTOCKCODE"];
				$instance->freelinkcode = $records["FREELINKCODE"];
				$instance->freedescription1 = $records["FREEDESCRIPTION1"];
				$instance->freedescription2 = $records["FREEDESCRIPTION2"];
				$instance->freeper = $records["FREEPER"];
				$instance->freeqty = $records["FREEQTY"];
				$instance->sellexcl = $records["SELLEXCL"];
				$instance->sellincl = $records["SELLINCL"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
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