<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	PUROrdDetDis

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public int ORDERNO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public int SEQUENCENO" of type [int]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar DISCOUNTMETHOD" of type [nvarchar]
	"public nvarchar DISCOUNTTYPE" of type [nvarchar]
	"public float DISCOUNT" of type [float]
	"public nvarchar COSTED" of type [nvarchar]
	"public nvarchar DISCOUNTCODE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public float DISCVALUE" of type [float]
	"public int LINENO" of type [int]
	"public float DiscountExcl" of type [float]
	"public float DiscountIncl" of type [float]
	"public nvarchar FreeStockCode" of type [nvarchar]
	"public nvarchar FreeLinkCode" of type [nvarchar]
	"public nvarchar FreeDescription1" of type [nvarchar]
	"public nvarchar FreeDescription2" of type [nvarchar]
	"public float FreeQuantity" of type [float]
	"public float FreePerQty" of type [float]
*/
namespace genesis;


use PDO;

class Purorddetdis {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $orderno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $sequenceno ;	
	public $description ;	
	public $discountmethod ;	
	public $discounttype ;	
	public $discount ;	
	public $costed ;	
	public $discountcode ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $discvalue ;	
	public $lineno ;	
	public $discountexcl ;	
	public $discountincl ;	
	public $freestockcode ;	
	public $freelinkcode ;	
	public $freedescription1 ;	
	public $freedescription2 ;	
	public $freequantity ;	
	public $freeperqty ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [STOCKCODE], [LINKCODE], [SEQUENCENO], [DESCRIPTION], [DISCOUNTMETHOD], [DISCOUNTTYPE], [DISCOUNT], [COSTED], [DISCOUNTCODE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [DISCVALUE], [LINENO], [DiscountExcl], [DiscountIncl], [FreeStockCode], [FreeLinkCode], [FreeDescription1], [FreeDescription2], [FreeQuantity], [FreePerQty] FROM [PUROrdDetDis]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->orderno = $records["ORDERNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->sequenceno = $records["SEQUENCENO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->discountmethod = $records["DISCOUNTMETHOD"];
				$instance->discounttype = $records["DISCOUNTTYPE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->costed = $records["COSTED"];
				$instance->discountcode = $records["DISCOUNTCODE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->discvalue = $records["DISCVALUE"];
				$instance->lineno = $records["LINENO"];
				$instance->discountexcl = $records["DiscountExcl"];
				$instance->discountincl = $records["DiscountIncl"];
				$instance->freestockcode = $records["FreeStockCode"];
				$instance->freelinkcode = $records["FreeLinkCode"];
				$instance->freedescription1 = $records["FreeDescription1"];
				$instance->freedescription2 = $records["FreeDescription2"];
				$instance->freequantity = $records["FreeQuantity"];
				$instance->freeperqty = $records["FreePerQty"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [STOCKCODE], [LINKCODE], [SEQUENCENO], [DESCRIPTION], [DISCOUNTMETHOD], [DISCOUNTTYPE], [DISCOUNT], [COSTED], [DISCOUNTCODE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [DISCVALUE], [LINENO], [DiscountExcl], [DiscountIncl], [FreeStockCode], [FreeLinkCode], [FreeDescription1], [FreeDescription2], [FreeQuantity], [FreePerQty] FROM [PUROrdDetDis]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->orderno = $records["ORDERNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->sequenceno = $records["SEQUENCENO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->discountmethod = $records["DISCOUNTMETHOD"];
				$instance->discounttype = $records["DISCOUNTTYPE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->costed = $records["COSTED"];
				$instance->discountcode = $records["DISCOUNTCODE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->discvalue = $records["DISCVALUE"];
				$instance->lineno = $records["LINENO"];
				$instance->discountexcl = $records["DiscountExcl"];
				$instance->discountincl = $records["DiscountIncl"];
				$instance->freestockcode = $records["FreeStockCode"];
				$instance->freelinkcode = $records["FreeLinkCode"];
				$instance->freedescription1 = $records["FreeDescription1"];
				$instance->freedescription2 = $records["FreeDescription2"];
				$instance->freequantity = $records["FreeQuantity"];
				$instance->freeperqty = $records["FreePerQty"];
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