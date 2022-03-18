<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	STKGrvHDisc

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public int SEQNO" of type [int]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar DISCMETHOD" of type [nvarchar]
	"public nvarchar DISCTYPE" of type [nvarchar]
	"public float DISCVALUE" of type [float]
	"public float DISCOUNT" of type [float]
	"public nvarchar COSTED" of type [nvarchar]
	"public nvarchar GLACNO" of type [nvarchar]
	"public float DiscountVAT" of type [float]
	"public float DiscountIncl" of type [float]
	"public nvarchar Code" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public int GLSubAccNo" of type [int]
*/
namespace genesis;


use PDO;

class Stkgrvhdisc {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $grvno ;	
	public $seqno ;	
	public $description ;	
	public $discmethod ;	
	public $disctype ;	
	public $discvalue ;	
	public $discount ;	
	public $costed ;	
	public $glacno ;	
	public $discountvat ;	
	public $discountincl ;	
	public $code ;	
	public $glaccno ;	
	public $glsubaccno ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [SEQNO], [DESCRIPTION], [DISCMETHOD], [DISCTYPE], [DISCVALUE], [DISCOUNT], [COSTED], [GLACNO], [DiscountVAT], [DiscountIncl], [Code], [GLAccNo], [GLSubAccNo] FROM [STKGrvHDisc]  WHERE [RECID]=:recid  ";
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
				$instance->seqno = $records["SEQNO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->discmethod = $records["DISCMETHOD"];
				$instance->disctype = $records["DISCTYPE"];
				$instance->discvalue = $records["DISCVALUE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->costed = $records["COSTED"];
				$instance->glacno = $records["GLACNO"];
				$instance->discountvat = $records["DiscountVAT"];
				$instance->discountincl = $records["DiscountIncl"];
				$instance->code = $records["Code"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using Code
	*/
	public static function ini_Code($code) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [SEQNO], [DESCRIPTION], [DISCMETHOD], [DISCTYPE], [DISCVALUE], [DISCOUNT], [COSTED], [GLACNO], [DiscountVAT], [DiscountIncl], [Code], [GLAccNo], [GLSubAccNo] FROM [STKGrvHDisc]  WHERE [Code]=:code  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":code", $code);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->seqno = $records["SEQNO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->discmethod = $records["DISCMETHOD"];
				$instance->disctype = $records["DISCTYPE"];
				$instance->discvalue = $records["DISCVALUE"];
				$instance->discount = $records["DISCOUNT"];
				$instance->costed = $records["COSTED"];
				$instance->glacno = $records["GLACNO"];
				$instance->discountvat = $records["DiscountVAT"];
				$instance->discountincl = $records["DiscountIncl"];
				$instance->code = $records["Code"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
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