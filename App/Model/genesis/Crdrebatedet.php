<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	CRDRebateDet

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public int REBATENO" of type [int]
	"public int SEQNO" of type [int]
	"public nvarchar FROMDATE" of type [nvarchar]
	"public nvarchar TODATE" of type [nvarchar]
	"public nvarchar REBATECODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public float REBATEPERC" of type [float]
	"public float REBATEVALUE" of type [float]
	"public nvarchar VALUETYPE" of type [nvarchar]
	"public nvarchar REBATETYPE" of type [nvarchar]
	"public nvarchar COSTED" of type [nvarchar]
	"public nvarchar CLAIMMETHOD" of type [nvarchar]
	"public nvarchar CLAIMFREQ" of type [nvarchar]
	"public nvarchar APPLYDISCOUNT" of type [nvarchar]
	"public nvarchar SETTLEMENT" of type [nvarchar]
	"public nvarchar PROFITCALC" of type [nvarchar]
	"public nvarchar PRODUCT" of type [nvarchar]
	"public nvarchar DEPARTMENT" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar INTERCOMPEX" of type [nvarchar]
	"public nvarchar RANGED" of type [nvarchar]
	"public nvarchar BCUse" of type [nvarchar]
	"public nvarchar CostedToRebate" of type [nvarchar]
	"public nvarchar BuyGroupAcc" of type [nvarchar]
	"public nvarchar Variant" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdrebatedet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $account ;	
	public $subaccount ;	
	public $rebateno ;	
	public $seqno ;	
	public $fromdate ;	
	public $todate ;	
	public $rebatecode ;	
	public $description ;	
	public $rebateperc ;	
	public $rebatevalue ;	
	public $valuetype ;	
	public $rebatetype ;	
	public $costed ;	
	public $claimmethod ;	
	public $claimfreq ;	
	public $applydiscount ;	
	public $settlement ;	
	public $profitcalc ;	
	public $product ;	
	public $department ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $intercompex ;	
	public $ranged ;	
	public $bcuse ;	
	public $costedtorebate ;	
	public $buygroupacc ;	
	public $variant ;	
	
	
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
			$query = " SELECT RECID, [CO], [ACCOUNT], [SUBACCOUNT], [REBATENO], [SEQNO], [FROMDATE], [TODATE], [REBATECODE], [DESCRIPTION], [REBATEPERC], [REBATEVALUE], [VALUETYPE], [REBATETYPE], [COSTED], [CLAIMMETHOD], [CLAIMFREQ], [APPLYDISCOUNT], [SETTLEMENT], [PROFITCALC], [PRODUCT], [DEPARTMENT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [INTERCOMPEX], [RANGED], [BCUse], [CostedToRebate], [BuyGroupAcc], [Variant] FROM [CRDRebateDet]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->rebateno = $records["REBATENO"];
				$instance->seqno = $records["SEQNO"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->rebatecode = $records["REBATECODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->rebateperc = $records["REBATEPERC"];
				$instance->rebatevalue = $records["REBATEVALUE"];
				$instance->valuetype = $records["VALUETYPE"];
				$instance->rebatetype = $records["REBATETYPE"];
				$instance->costed = $records["COSTED"];
				$instance->claimmethod = $records["CLAIMMETHOD"];
				$instance->claimfreq = $records["CLAIMFREQ"];
				$instance->applydiscount = $records["APPLYDISCOUNT"];
				$instance->settlement = $records["SETTLEMENT"];
				$instance->profitcalc = $records["PROFITCALC"];
				$instance->product = $records["PRODUCT"];
				$instance->department = $records["DEPARTMENT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->intercompex = $records["INTERCOMPEX"];
				$instance->ranged = $records["RANGED"];
				$instance->bcuse = $records["BCUse"];
				$instance->costedtorebate = $records["CostedToRebate"];
				$instance->buygroupacc = $records["BuyGroupAcc"];
				$instance->variant = $records["Variant"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using REBATECODE
	*/
	public static function ini_REBATECODE($rebatecode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [ACCOUNT], [SUBACCOUNT], [REBATENO], [SEQNO], [FROMDATE], [TODATE], [REBATECODE], [DESCRIPTION], [REBATEPERC], [REBATEVALUE], [VALUETYPE], [REBATETYPE], [COSTED], [CLAIMMETHOD], [CLAIMFREQ], [APPLYDISCOUNT], [SETTLEMENT], [PROFITCALC], [PRODUCT], [DEPARTMENT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [INTERCOMPEX], [RANGED], [BCUse], [CostedToRebate], [BuyGroupAcc], [Variant] FROM [CRDRebateDet]  WHERE [REBATECODE]=:rebatecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":rebatecode", $rebatecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->rebateno = $records["REBATENO"];
				$instance->seqno = $records["SEQNO"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->rebatecode = $records["REBATECODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->rebateperc = $records["REBATEPERC"];
				$instance->rebatevalue = $records["REBATEVALUE"];
				$instance->valuetype = $records["VALUETYPE"];
				$instance->rebatetype = $records["REBATETYPE"];
				$instance->costed = $records["COSTED"];
				$instance->claimmethod = $records["CLAIMMETHOD"];
				$instance->claimfreq = $records["CLAIMFREQ"];
				$instance->applydiscount = $records["APPLYDISCOUNT"];
				$instance->settlement = $records["SETTLEMENT"];
				$instance->profitcalc = $records["PROFITCALC"];
				$instance->product = $records["PRODUCT"];
				$instance->department = $records["DEPARTMENT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->intercompex = $records["INTERCOMPEX"];
				$instance->ranged = $records["RANGED"];
				$instance->bcuse = $records["BCUse"];
				$instance->costedtorebate = $records["CostedToRebate"];
				$instance->buygroupacc = $records["BuyGroupAcc"];
				$instance->variant = $records["Variant"];
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