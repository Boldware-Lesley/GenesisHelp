<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	STKGrvDDisc

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public int LINENO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public int SEQNO" of type [int]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar DISCMETHOD" of type [nvarchar]
	"public nvarchar DISCTYPE" of type [nvarchar]
	"public float DISCVALUE" of type [float]
	"public float DISCOUNT" of type [float]
	"public float RECVPRICE" of type [float]
	"public nvarchar COSTED" of type [nvarchar]
	"public nvarchar GLACNO" of type [nvarchar]
	"public nvarchar Code" of type [nvarchar]
	"public float DiscountVAT" of type [float]
	"public float DiscountIncl" of type [float]
	"public int GLAccNo" of type [int]
	"public int GLSubAccNo" of type [int]
	"public float DiscountExcl" of type [float]
*/
namespace genesis;


use PDO;

class Stkgrvddisc {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $grvno ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $seqno ;	
	public $description ;	
	public $discmethod ;	
	public $disctype ;	
	public $discvalue ;	
	public $discount ;	
	public $recvprice ;	
	public $costed ;	
	public $glacno ;	
	public $code ;	
	public $discountvat ;	
	public $discountincl ;	
	public $glaccno ;	
	public $glsubaccno ;	
	public $discountexcl ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [LINKCODE], [SEQNO], [DESCRIPTION], [DISCMETHOD], [DISCTYPE], [DISCVALUE], [DISCOUNT], [RECVPRICE], [COSTED], [GLACNO], [Code], [DiscountVAT], [DiscountIncl], [GLAccNo], [GLSubAccNo], [DiscountExcl] FROM [STKGrvDDisc]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->seqno = $records["SEQNO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->discmethod = $records["DISCMETHOD"];
				$instance->disctype = $records["DISCTYPE"];
				$instance->discvalue = $records["DISCVALUE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->recvprice = $records["RECVPRICE"];
				$instance->costed = $records["COSTED"];
				$instance->glacno = $records["GLACNO"];
				$instance->code = $records["Code"];
				$instance->discountvat = $records["DiscountVAT"];
				$instance->discountincl = $records["DiscountIncl"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->discountexcl = $records["DiscountExcl"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [LINKCODE], [SEQNO], [DESCRIPTION], [DISCMETHOD], [DISCTYPE], [DISCVALUE], [DISCOUNT], [RECVPRICE], [COSTED], [GLACNO], [Code], [DiscountVAT], [DiscountIncl], [GLAccNo], [GLSubAccNo], [DiscountExcl] FROM [STKGrvDDisc]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->seqno = $records["SEQNO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->discmethod = $records["DISCMETHOD"];
				$instance->disctype = $records["DISCTYPE"];
				$instance->discvalue = $records["DISCVALUE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->recvprice = $records["RECVPRICE"];
				$instance->costed = $records["COSTED"];
				$instance->glacno = $records["GLACNO"];
				$instance->code = $records["Code"];
				$instance->discountvat = $records["DiscountVAT"];
				$instance->discountincl = $records["DiscountIncl"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->discountexcl = $records["DiscountExcl"];
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