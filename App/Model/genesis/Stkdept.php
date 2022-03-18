<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	STKDept

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar DEPTCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public float DEFGP" of type [float]
	"public nvarchar PRICEROUNDING" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public int GLSubAccNo" of type [int]
	"public int StockCodeSeq" of type [int]
	"public nvarchar StockCodePrefix" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkdept {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $deptcode ;	
	public $description ;	
	public $defgp ;	
	public $pricerounding ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
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
			$query = " SELECT RECID, [CO], [DEPTCODE], [DESCRIPTION], [DEFGP], [PRICEROUNDING], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [GLSubAccNo], [StockCodeSeq], [StockCodePrefix] FROM [STKDept]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->defgp = $records["DEFGP"];
				$instance->pricerounding = $records["PRICEROUNDING"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
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
			$query = " SELECT RECID, [CO], [DEPTCODE], [DESCRIPTION], [DEFGP], [PRICEROUNDING], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [GLSubAccNo], [StockCodeSeq], [StockCodePrefix] FROM [STKDept]  WHERE [DEPTCODE]=:deptcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":deptcode", $deptcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->deptcode = $records["DEPTCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->defgp = $records["DEFGP"];
				$instance->pricerounding = $records["PRICEROUNDING"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
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