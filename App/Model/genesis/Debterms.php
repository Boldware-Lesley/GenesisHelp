<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	DEBTerms

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar DEBTORTYPE" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TERMCODE" of type [nvarchar]
	"public nvarchar CALCSTART" of type [nvarchar]
	"public float TERMFROMVALUE" of type [float]
	"public nvarchar TERMFROMTYPE" of type [nvarchar]
	"public nvarchar TERMFROM" of type [nvarchar]
	"public float TERMDISCOUNT" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public int SAPCODE" of type [int]
*/
namespace genesis;


use PDO;

class Debterms {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $debtortype ;	
	public $account ;	
	public $termcode ;	
	public $calcstart ;	
	public $termfromvalue ;	
	public $termfromtype ;	
	public $termfrom ;	
	public $termdiscount ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $sapcode ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [DEBTORTYPE], [ACCOUNT], [TERMCODE], [CALCSTART], [TERMFROMVALUE], [TERMFROMTYPE], [TERMFROM], [TERMDISCOUNT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [SAPCODE] FROM [DEBTerms]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->debtortype = $records["DEBTORTYPE"];
				$instance->account = $records["ACCOUNT"];
				$instance->termcode = $records["TERMCODE"];
				$instance->calcstart = $records["CALCSTART"];
				$instance->termfromvalue = $records["TERMFROMVALUE"];
				$instance->termfromtype = $records["TERMFROMTYPE"];
				$instance->termfrom = $records["TERMFROM"];
				$instance->termdiscount = $records["TERMDISCOUNT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->sapcode = $records["SAPCODE"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using TERMCODE
	*/
	public static function ini_TERMCODE($termcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [DEBTORTYPE], [ACCOUNT], [TERMCODE], [CALCSTART], [TERMFROMVALUE], [TERMFROMTYPE], [TERMFROM], [TERMDISCOUNT], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [SAPCODE] FROM [DEBTerms]  WHERE [TERMCODE]=:termcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":termcode", $termcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->debtortype = $records["DEBTORTYPE"];
				$instance->account = $records["ACCOUNT"];
				$instance->termcode = $records["TERMCODE"];
				$instance->calcstart = $records["CALCSTART"];
				$instance->termfromvalue = $records["TERMFROMVALUE"];
				$instance->termfromtype = $records["TERMFROMTYPE"];
				$instance->termfrom = $records["TERMFROM"];
				$instance->termdiscount = $records["TERMDISCOUNT"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->sapcode = $records["SAPCODE"];
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