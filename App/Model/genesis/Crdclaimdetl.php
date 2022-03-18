<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	CRDClaimDetl

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public nvarchar SOURCEBRANCH" of type [nvarchar]
	"public int CLAIMNO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar GLACNO" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public nvarchar DESCRIPTION2" of type [nvarchar]
	"public nvarchar SUPPCODE" of type [nvarchar]
	"public nvarchar CLAIMCODE" of type [nvarchar]
	"public float QUANTITY" of type [float]
	"public float PRICE" of type [float]
	"public float PRICE1" of type [float]
	"public float PRICE2" of type [float]
	"public float DISCOUNT" of type [float]
	"public float TOTALINCL" of type [float]
	"public float TOTALEXCL" of type [float]
	"public float VATAMOUNT" of type [float]
	"public nvarchar VATCODE" of type [nvarchar]
	"public float VATRATE" of type [float]
	"public ntext REMARKS" of type [ntext]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public float LinkQty" of type [float]
	"public int Units" of type [int]
	"public int GLSubAccNo" of type [int]
*/
namespace genesis;


use PDO;

class Crdclaimdetl {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $sourcebranch ;	
	public $claimno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $glacno ;	
	public $description1 ;	
	public $description2 ;	
	public $suppcode ;	
	public $claimcode ;	
	public $quantity ;	
	public $price ;	
	public $price1 ;	
	public $price2 ;	
	public $discount ;	
	public $totalincl ;	
	public $totalexcl ;	
	public $vatamount ;	
	public $vatcode ;	
	public $vatrate ;	
	public $remarks ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $linkqty ;	
	public $units ;	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [SOURCEBRANCH], [CLAIMNO], [STOCKCODE], [LINKCODE], [GLACNO], [DESCRIPTION1], [DESCRIPTION2], [SUPPCODE], [CLAIMCODE], [QUANTITY], [PRICE], [PRICE1], [PRICE2], [DISCOUNT], [TOTALINCL], [TOTALEXCL], [VATAMOUNT], [VATCODE], [VATRATE], [REMARKS], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [LinkQty], [Units], [GLSubAccNo] FROM [CRDClaimDetl]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->sourcebranch = $records["SOURCEBRANCH"];
				$instance->claimno = $records["CLAIMNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->glacno = $records["GLACNO"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->quantity = $records["QUANTITY"];
				$instance->price = $records["PRICE"];
				$instance->price1 = $records["PRICE1"];
				$instance->price2 = $records["PRICE2"];
				$instance->discount = $records["DISCOUNT"];
				$instance->totalincl = $records["TOTALINCL"];
				$instance->totalexcl = $records["TOTALEXCL"];
				$instance->vatamount = $records["VATAMOUNT"];
				$instance->vatcode = $records["VATCODE"];
				$instance->vatrate = $records["VATRATE"];
				$instance->remarks = $records["REMARKS"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->linkqty = $records["LinkQty"];
				$instance->units = $records["Units"];
				$instance->glsubaccno = $records["GLSubAccNo"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [SOURCEBRANCH], [CLAIMNO], [STOCKCODE], [LINKCODE], [GLACNO], [DESCRIPTION1], [DESCRIPTION2], [SUPPCODE], [CLAIMCODE], [QUANTITY], [PRICE], [PRICE1], [PRICE2], [DISCOUNT], [TOTALINCL], [TOTALEXCL], [VATAMOUNT], [VATCODE], [VATRATE], [REMARKS], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [LinkQty], [Units], [GLSubAccNo] FROM [CRDClaimDetl]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->sourcebranch = $records["SOURCEBRANCH"];
				$instance->claimno = $records["CLAIMNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->glacno = $records["GLACNO"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->quantity = $records["QUANTITY"];
				$instance->price = $records["PRICE"];
				$instance->price1 = $records["PRICE1"];
				$instance->price2 = $records["PRICE2"];
				$instance->discount = $records["DISCOUNT"];
				$instance->totalincl = $records["TOTALINCL"];
				$instance->totalexcl = $records["TOTALEXCL"];
				$instance->vatamount = $records["VATAMOUNT"];
				$instance->vatcode = $records["VATCODE"];
				$instance->vatrate = $records["VATRATE"];
				$instance->remarks = $records["REMARKS"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->linkqty = $records["LinkQty"];
				$instance->units = $records["Units"];
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