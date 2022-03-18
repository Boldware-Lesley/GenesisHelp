<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	STKGrvDReb

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public int LINENO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public int SEQUENCENO" of type [int]
	"public int REBATENO" of type [int]
	"public nvarchar REBATECODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public float REBATEPERC" of type [float]
	"public float REBATEVALUE" of type [float]
	"public float REBATE" of type [float]
	"public float QUANTITY" of type [float]
	"public float REBATETOTAL" of type [float]
	"public float REBATEVAT" of type [float]
	"public nvarchar CLAIMMETHOD" of type [nvarchar]
	"public nvarchar CLAIMFREQ" of type [nvarchar]
	"public nvarchar COSTED" of type [nvarchar]
	"public nvarchar SETTLEMENT" of type [nvarchar]
	"public nvarchar PROFITCALC" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public int Units" of type [int]
	"public float LinkQty" of type [float]
	"public nvarchar CostedToRebate" of type [nvarchar]
	"public nvarchar BuyGroupAcc" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkgrvdreb {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $txtp ;	
	public $grvno ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $sequenceno ;	
	public $rebateno ;	
	public $rebatecode ;	
	public $description ;	
	public $rebateperc ;	
	public $rebatevalue ;	
	public $rebate ;	
	public $quantity ;	
	public $rebatetotal ;	
	public $rebatevat ;	
	public $claimmethod ;	
	public $claimfreq ;	
	public $costed ;	
	public $settlement ;	
	public $profitcalc ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $units ;	
	public $linkqty ;	
	public $costedtorebate ;	
	public $buygroupacc ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [LINKCODE], [SEQUENCENO], [REBATENO], [REBATECODE], [DESCRIPTION], [REBATEPERC], [REBATEVALUE], [REBATE], [QUANTITY], [REBATETOTAL], [REBATEVAT], [CLAIMMETHOD], [CLAIMFREQ], [COSTED], [SETTLEMENT], [PROFITCALC], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Units], [LinkQty], [CostedToRebate], [BuyGroupAcc] FROM [STKGrvDReb]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->sequenceno = $records["SEQUENCENO"];
				$instance->rebateno = $records["REBATENO"];
				$instance->rebatecode = $records["REBATECODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->rebateperc = $records["REBATEPERC"];
				$instance->rebatevalue = $records["REBATEVALUE"];
				$instance->rebate = $records["REBATE"];
				$instance->quantity = $records["QUANTITY"];
				$instance->rebatetotal = $records["REBATETOTAL"];
				$instance->rebatevat = $records["REBATEVAT"];
				$instance->claimmethod = $records["CLAIMMETHOD"];
				$instance->claimfreq = $records["CLAIMFREQ"];
				$instance->costed = $records["COSTED"];
				$instance->settlement = $records["SETTLEMENT"];
				$instance->profitcalc = $records["PROFITCALC"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->units = $records["Units"];
				$instance->linkqty = $records["LinkQty"];
				$instance->costedtorebate = $records["CostedToRebate"];
				$instance->buygroupacc = $records["BuyGroupAcc"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [LINKCODE], [SEQUENCENO], [REBATENO], [REBATECODE], [DESCRIPTION], [REBATEPERC], [REBATEVALUE], [REBATE], [QUANTITY], [REBATETOTAL], [REBATEVAT], [CLAIMMETHOD], [CLAIMFREQ], [COSTED], [SETTLEMENT], [PROFITCALC], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Units], [LinkQty], [CostedToRebate], [BuyGroupAcc] FROM [STKGrvDReb]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->lineno = $records["LINENO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->sequenceno = $records["SEQUENCENO"];
				$instance->rebateno = $records["REBATENO"];
				$instance->rebatecode = $records["REBATECODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->rebateperc = $records["REBATEPERC"];
				$instance->rebatevalue = $records["REBATEVALUE"];
				$instance->rebate = $records["REBATE"];
				$instance->quantity = $records["QUANTITY"];
				$instance->rebatetotal = $records["REBATETOTAL"];
				$instance->rebatevat = $records["REBATEVAT"];
				$instance->claimmethod = $records["CLAIMMETHOD"];
				$instance->claimfreq = $records["CLAIMFREQ"];
				$instance->costed = $records["COSTED"];
				$instance->settlement = $records["SETTLEMENT"];
				$instance->profitcalc = $records["PROFITCALC"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->units = $records["Units"];
				$instance->linkqty = $records["LinkQty"];
				$instance->costedtorebate = $records["CostedToRebate"];
				$instance->buygroupacc = $records["BuyGroupAcc"];
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