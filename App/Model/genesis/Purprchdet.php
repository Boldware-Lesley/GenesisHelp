<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	PURPrchDet

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public int PRCHGNO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public float OLDCOSTEXCL" of type [float]
	"public float NEWCOSTEXCL" of type [float]
	"public float PRICECODE" of type [float]
	"public float OLDSELLEXCL" of type [float]
	"public float NEWSELLINCL" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Purprchdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $prchgno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $oldcostexcl ;	
	public $newcostexcl ;	
	public $pricecode ;	
	public $oldsellexcl ;	
	public $newsellincl ;	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [PRCHGNO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [OLDCOSTEXCL], [NEWCOSTEXCL], [PRICECODE], [OLDSELLEXCL], [NEWSELLINCL], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [PURPrchDet]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->prchgno = $records["PRCHGNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->oldcostexcl = $records["OLDCOSTEXCL"];
				$instance->newcostexcl = $records["NEWCOSTEXCL"];
				$instance->pricecode = $records["PRICECODE"];
				$instance->oldsellexcl = $records["OLDSELLEXCL"];
				$instance->newsellincl = $records["NEWSELLINCL"];
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [PRCHGNO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [OLDCOSTEXCL], [NEWCOSTEXCL], [PRICECODE], [OLDSELLEXCL], [NEWSELLINCL], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [PURPrchDet]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->prchgno = $records["PRCHGNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->oldcostexcl = $records["OLDCOSTEXCL"];
				$instance->newcostexcl = $records["NEWCOSTEXCL"];
				$instance->pricecode = $records["PRICECODE"];
				$instance->oldsellexcl = $records["OLDSELLEXCL"];
				$instance->newsellincl = $records["NEWSELLINCL"];
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