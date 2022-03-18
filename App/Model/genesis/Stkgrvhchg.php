<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	STKGrvHChg

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public nvarchar CHGDESC" of type [nvarchar]
	"public nvarchar CHGTYPE" of type [nvarchar]
	"public float CHGVALUE" of type [float]
	"public float CHGTOTAL" of type [float]
	"public nvarchar COSTED" of type [nvarchar]
	"public nvarchar GLACNO" of type [nvarchar]
	"public float CHGINCL" of type [float]
	"public nvarchar SUPPLIER" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public float CHGVAT" of type [float]
	"public int GLAccNo" of type [int]
	"public int GLSubAccNo" of type [int]
	"public nvarchar ChgCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkgrvhchg {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $grvno ;	
	public $chgdesc ;	
	public $chgtype ;	
	public $chgvalue ;	
	public $chgtotal ;	
	public $costed ;	
	public $glacno ;	
	public $chgincl ;	
	public $supplier ;	
	public $subaccount ;	
	public $chgvat ;	
	public $glaccno ;	
	public $glsubaccno ;	
	public $chgcode ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [CHGDESC], [CHGTYPE], [CHGVALUE], [CHGTOTAL], [COSTED], [GLACNO], [CHGINCL], [SUPPLIER], [SUBACCOUNT], [CHGVAT], [GLAccNo], [GLSubAccNo], [ChgCode] FROM [STKGrvHChg]  WHERE [RECID]=:recid  ";
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
				$instance->chgdesc = $records["CHGDESC"];
				$instance->chgtype = $records["CHGTYPE"];
				$instance->chgvalue = $records["CHGVALUE"];
				$instance->chgtotal = $records["CHGTOTAL"];
				$instance->costed = $records["COSTED"];
				$instance->glacno = $records["GLACNO"];
				$instance->chgincl = $records["CHGINCL"];
				$instance->supplier = $records["SUPPLIER"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->chgvat = $records["CHGVAT"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->chgcode = $records["ChgCode"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using ChgCode
	*/
	public static function ini_ChgCode($chgcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [CHGDESC], [CHGTYPE], [CHGVALUE], [CHGTOTAL], [COSTED], [GLACNO], [CHGINCL], [SUPPLIER], [SUBACCOUNT], [CHGVAT], [GLAccNo], [GLSubAccNo], [ChgCode] FROM [STKGrvHChg]  WHERE [ChgCode]=:chgcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":chgcode", $chgcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->chgdesc = $records["CHGDESC"];
				$instance->chgtype = $records["CHGTYPE"];
				$instance->chgvalue = $records["CHGVALUE"];
				$instance->chgtotal = $records["CHGTOTAL"];
				$instance->costed = $records["COSTED"];
				$instance->glacno = $records["GLACNO"];
				$instance->chgincl = $records["CHGINCL"];
				$instance->supplier = $records["SUPPLIER"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->chgvat = $records["CHGVAT"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->chgcode = $records["ChgCode"];
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