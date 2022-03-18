<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	GSMDept

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar DEPTCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public float DEFGP" of type [float]
	"public nvarchar PRICEROUNDING" of type [nvarchar]
	"public nvarchar CAT1LINK" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public float SUGSELLPERC" of type [float]
	"public int GLSubAccNo" of type [int]
	"public int StockCodeSeq" of type [int]
	"public nvarchar StockCodePrefix" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmdept {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $deptcode ;	
	public $description ;	
	public $defgp ;	
	public $pricerounding ;	
	public $cat1link ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $sugsellperc ;	
	public $glsubaccno ;	
	public $stockcodeseq ;	
	public $stockcodeprefix ;	
	
	
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
			$query = " SELECT RECID, [DEPTCODE], [DESCRIPTION], [DEFGP], [PRICEROUNDING], [CAT1LINK], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [SUGSELLPERC], [GLSubAccNo], [StockCodeSeq], [StockCodePrefix] FROM [GSMDept]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->defgp = $records["DEFGP"];
				$instance->pricerounding = $records["PRICEROUNDING"];
				$instance->cat1link = $records["CAT1LINK"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->sugsellperc = $records["SUGSELLPERC"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->stockcodeseq = $records["StockCodeSeq"];
				$instance->stockcodeprefix = $records["StockCodePrefix"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using DEPTCODE
	*/
	public static function ini_DEPTCODE($deptcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [DEPTCODE], [DESCRIPTION], [DEFGP], [PRICEROUNDING], [CAT1LINK], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [SUGSELLPERC], [GLSubAccNo], [StockCodeSeq], [StockCodePrefix] FROM [GSMDept]  WHERE [DEPTCODE]=:deptcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":deptcode", $deptcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->defgp = $records["DEFGP"];
				$instance->pricerounding = $records["PRICEROUNDING"];
				$instance->cat1link = $records["CAT1LINK"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->sugsellperc = $records["SUGSELLPERC"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->stockcodeseq = $records["StockCodeSeq"];
				$instance->stockcodeprefix = $records["StockCodePrefix"];
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