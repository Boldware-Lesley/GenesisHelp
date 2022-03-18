<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	CRDClaimRsn

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar CLAIMCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar SHORTNAME" of type [nvarchar]
	"public nvarchar UPDATESTOCKVALUE" of type [nvarchar]
	"public nvarchar UPDATEREBATE" of type [nvarchar]
	"public nvarchar GLACNO" of type [nvarchar]
	"public nvarchar PRICEDIFFERENCE" of type [nvarchar]
	"public nvarchar EXGLACNO" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar OTHERINCOME" of type [nvarchar]
	"public nvarchar SETTLEMENTDISC" of type [nvarchar]
	"public nvarchar TallyClaim" of type [nvarchar]
	"public int GLSubAccNo" of type [int]
*/
namespace genesis;


use PDO;

class Crdclaimrsn {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $claimcode ;	
	public $description ;	
	public $shortname ;	
	public $updatestockvalue ;	
	public $updaterebate ;	
	public $glacno ;	
	public $pricedifference ;	
	public $exglacno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $otherincome ;	
	public $settlementdisc ;	
	public $tallyclaim ;	
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
			$query = " SELECT RECID, [CO], [CLAIMCODE], [DESCRIPTION], [SHORTNAME], [UPDATESTOCKVALUE], [UPDATEREBATE], [GLACNO], [PRICEDIFFERENCE], [EXGLACNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [OTHERINCOME], [SETTLEMENTDISC], [TallyClaim], [GLSubAccNo] FROM [CRDClaimRsn]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->shortname = $records["SHORTNAME"];
				$instance->updatestockvalue = $records["UPDATESTOCKVALUE"];
				$instance->updaterebate = $records["UPDATEREBATE"];
				$instance->glacno = $records["GLACNO"];
				$instance->pricedifference = $records["PRICEDIFFERENCE"];
				$instance->exglacno = $records["EXGLACNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->otherincome = $records["OTHERINCOME"];
				$instance->settlementdisc = $records["SETTLEMENTDISC"];
				$instance->tallyclaim = $records["TallyClaim"];
				$instance->glsubaccno = $records["GLSubAccNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CLAIMCODE
	*/
	public static function ini_CLAIMCODE($claimcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [CLAIMCODE], [DESCRIPTION], [SHORTNAME], [UPDATESTOCKVALUE], [UPDATEREBATE], [GLACNO], [PRICEDIFFERENCE], [EXGLACNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [OTHERINCOME], [SETTLEMENTDISC], [TallyClaim], [GLSubAccNo] FROM [CRDClaimRsn]  WHERE [CLAIMCODE]=:claimcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":claimcode", $claimcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->shortname = $records["SHORTNAME"];
				$instance->updatestockvalue = $records["UPDATESTOCKVALUE"];
				$instance->updaterebate = $records["UPDATEREBATE"];
				$instance->glacno = $records["GLACNO"];
				$instance->pricedifference = $records["PRICEDIFFERENCE"];
				$instance->exglacno = $records["EXGLACNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->otherincome = $records["OTHERINCOME"];
				$instance->settlementdisc = $records["SETTLEMENTDISC"];
				$instance->tallyclaim = $records["TallyClaim"];
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