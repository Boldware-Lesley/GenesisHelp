<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	PURCompDet

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar COMNO" of type [nvarchar]
	"public nvarchar PMCODE" of type [nvarchar]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public nvarchar DESCRIPTION2" of type [nvarchar]
	"public float SELLEXCL" of type [float]
	"public float SELLINCL" of type [float]
	"public float FROMQTY" of type [float]
	"public float TOQTY" of type [float]
	"public float AVGCOSTEXCL" of type [float]
	"public float AVGCOSTINCL" of type [float]
	"public float LASTCOSTEXCL" of type [float]
	"public float LASTCOSTINCL" of type [float]
	"public float BUYCOSTEXCL" of type [float]
	"public float BUYCOSTINCL" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public int Units" of type [int]
	"public float DocClaimExcl" of type [float]
	"public float DocClaimIncl" of type [float]
	"public float LineClaimExcl" of type [float]
	"public float LineClaimIncl" of type [float]
*/
namespace genesis;


use PDO;

class Purcompdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $comno ;	
	public $pmcode ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $sellexcl ;	
	public $sellincl ;	
	public $fromqty ;	
	public $toqty ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $buycostexcl ;	
	public $buycostincl ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $units ;	
	public $docclaimexcl ;	
	public $docclaimincl ;	
	public $lineclaimexcl ;	
	public $lineclaimincl ;	
	
	
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
			$query = " SELECT RECID, [CO], [COMNO], [PMCODE], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [SELLEXCL], [SELLINCL], [FROMQTY], [TOQTY], [AVGCOSTEXCL], [AVGCOSTINCL], [LASTCOSTEXCL], [LASTCOSTINCL], [BUYCOSTEXCL], [BUYCOSTINCL], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Units], [DocClaimExcl], [DocClaimIncl], [LineClaimExcl], [LineClaimIncl] FROM [PURCompDet]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->comno = $records["COMNO"];
				$instance->pmcode = $records["PMCODE"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->sellexcl = $records["SELLEXCL"];
				$instance->sellincl = $records["SELLINCL"];
				$instance->fromqty = $records["FROMQTY"];
				$instance->toqty = $records["TOQTY"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->avgcostincl = $records["AVGCOSTINCL"];
				$instance->lastcostexcl = $records["LASTCOSTEXCL"];
				$instance->lastcostincl = $records["LASTCOSTINCL"];
				$instance->buycostexcl = $records["BUYCOSTEXCL"];
				$instance->buycostincl = $records["BUYCOSTINCL"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->units = $records["Units"];
				$instance->docclaimexcl = $records["DocClaimExcl"];
				$instance->docclaimincl = $records["DocClaimIncl"];
				$instance->lineclaimexcl = $records["LineClaimExcl"];
				$instance->lineclaimincl = $records["LineClaimIncl"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using PMCODE
	*/
	public static function ini_PMCODE($pmcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [COMNO], [PMCODE], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [SELLEXCL], [SELLINCL], [FROMQTY], [TOQTY], [AVGCOSTEXCL], [AVGCOSTINCL], [LASTCOSTEXCL], [LASTCOSTINCL], [BUYCOSTEXCL], [BUYCOSTINCL], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Units], [DocClaimExcl], [DocClaimIncl], [LineClaimExcl], [LineClaimIncl] FROM [PURCompDet]  WHERE [PMCODE]=:pmcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":pmcode", $pmcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->comno = $records["COMNO"];
				$instance->pmcode = $records["PMCODE"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->sellexcl = $records["SELLEXCL"];
				$instance->sellincl = $records["SELLINCL"];
				$instance->fromqty = $records["FROMQTY"];
				$instance->toqty = $records["TOQTY"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->avgcostincl = $records["AVGCOSTINCL"];
				$instance->lastcostexcl = $records["LASTCOSTEXCL"];
				$instance->lastcostincl = $records["LASTCOSTINCL"];
				$instance->buycostexcl = $records["BUYCOSTEXCL"];
				$instance->buycostincl = $records["BUYCOSTINCL"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->units = $records["Units"];
				$instance->docclaimexcl = $records["DocClaimExcl"];
				$instance->docclaimincl = $records["DocClaimIncl"];
				$instance->lineclaimexcl = $records["LineClaimExcl"];
				$instance->lineclaimincl = $records["LineClaimIncl"];
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