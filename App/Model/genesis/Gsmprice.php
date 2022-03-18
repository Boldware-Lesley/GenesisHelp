<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	GSMPrice

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar PRICECODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar FROMDATE" of type [nvarchar]
	"public nvarchar TODATE" of type [nvarchar]
	"public float EXCL" of type [float]
	"public float INCL" of type [float]
	"public float MUP" of type [float]
	"public float GP" of type [float]
	"public float DISCP" of type [float]
	"public float DISCV" of type [float]
	"public float MAXDISCP" of type [float]
	"public float MAXDISCV" of type [float]
	"public float MINGP" of type [float]
	"public nvarchar PRICERULE" of type [nvarchar]
	"public nvarchar ROUNDING" of type [nvarchar]
	"public float DEFAULTMUP" of type [float]
	"public float DEFAULTGP" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmprice {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $stockcode ;	
	public $linkcode ;	
	public $pricecode ;	
	public $description ;	
	public $fromdate ;	
	public $todate ;	
	public $excl ;	
	public $incl ;	
	public $mup ;	
	public $gp ;	
	public $discp ;	
	public $discv ;	
	public $maxdiscp ;	
	public $maxdiscv ;	
	public $mingp ;	
	public $pricerule ;	
	public $rounding ;	
	public $defaultmup ;	
	public $defaultgp ;	
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
			$query = " SELECT RECID, [STOCKCODE], [LINKCODE], [PRICECODE], [DESCRIPTION], [FROMDATE], [TODATE], [EXCL], [INCL], [MUP], [GP], [DISCP], [DISCV], [MAXDISCP], [MAXDISCV], [MINGP], [PRICERULE], [ROUNDING], [DEFAULTMUP], [DEFAULTGP], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [GSMPrice]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->pricecode = $records["PRICECODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->excl = $records["EXCL"];
				$instance->incl = $records["INCL"];
				$instance->mup = $records["MUP"];
				$instance->gp = $records["GP"];
				$instance->discp = $records["DISCP"];
				$instance->discv = $records["DISCV"];
				$instance->maxdiscp = $records["MAXDISCP"];
				$instance->maxdiscv = $records["MAXDISCV"];
				$instance->mingp = $records["MINGP"];
				$instance->pricerule = $records["PRICERULE"];
				$instance->rounding = $records["ROUNDING"];
				$instance->defaultmup = $records["DEFAULTMUP"];
				$instance->defaultgp = $records["DEFAULTGP"];
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
			$query = " SELECT RECID, [STOCKCODE], [LINKCODE], [PRICECODE], [DESCRIPTION], [FROMDATE], [TODATE], [EXCL], [INCL], [MUP], [GP], [DISCP], [DISCV], [MAXDISCP], [MAXDISCV], [MINGP], [PRICERULE], [ROUNDING], [DEFAULTMUP], [DEFAULTGP], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [GSMPrice]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->pricecode = $records["PRICECODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->excl = $records["EXCL"];
				$instance->incl = $records["INCL"];
				$instance->mup = $records["MUP"];
				$instance->gp = $records["GP"];
				$instance->discp = $records["DISCP"];
				$instance->discv = $records["DISCV"];
				$instance->maxdiscp = $records["MAXDISCP"];
				$instance->maxdiscv = $records["MAXDISCV"];
				$instance->mingp = $records["MINGP"];
				$instance->pricerule = $records["PRICERULE"];
				$instance->rounding = $records["ROUNDING"];
				$instance->defaultmup = $records["DEFAULTMUP"];
				$instance->defaultgp = $records["DEFAULTGP"];
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