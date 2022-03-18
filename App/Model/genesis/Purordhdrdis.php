<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	PUROrdHdrDis

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public int ORDERNO" of type [int]
	"public int SEQUENCENO" of type [int]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar DISCMETHOD" of type [nvarchar]
	"public nvarchar DISCTYPE" of type [nvarchar]
	"public float DISCOUNT" of type [float]
	"public nvarchar COSTED" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar DiscountCode" of type [nvarchar]
	"public float DiscountExcl" of type [float]
	"public float DiscountIncl" of type [float]
*/
namespace genesis;


use PDO;

class Purordhdrdis {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $orderno ;	
	public $sequenceno ;	
	public $description ;	
	public $discmethod ;	
	public $disctype ;	
	public $discount ;	
	public $costed ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $discountcode ;	
	public $discountexcl ;	
	public $discountincl ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [SEQUENCENO], [DESCRIPTION], [DISCMETHOD], [DISCTYPE], [DISCOUNT], [COSTED], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [DiscountCode], [DiscountExcl], [DiscountIncl] FROM [PUROrdHdrDis]  WHERE [RECID]=:recid  ";
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
				$instance->sequenceno = $records["SEQUENCENO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->discmethod = $records["DISCMETHOD"];
				$instance->disctype = $records["DISCTYPE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->costed = $records["COSTED"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->discountcode = $records["DiscountCode"];
				$instance->discountexcl = $records["DiscountExcl"];
				$instance->discountincl = $records["DiscountIncl"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using DiscountCode
	*/
	public static function ini_DiscountCode($discountcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [SEQUENCENO], [DESCRIPTION], [DISCMETHOD], [DISCTYPE], [DISCOUNT], [COSTED], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [DiscountCode], [DiscountExcl], [DiscountIncl] FROM [PUROrdHdrDis]  WHERE [DiscountCode]=:discountcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":discountcode", $discountcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->orderno = $records["ORDERNO"];
				$instance->sequenceno = $records["SEQUENCENO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->discmethod = $records["DISCMETHOD"];
				$instance->disctype = $records["DISCTYPE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->costed = $records["COSTED"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->discountcode = $records["DiscountCode"];
				$instance->discountexcl = $records["DiscountExcl"];
				$instance->discountincl = $records["DiscountIncl"];
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