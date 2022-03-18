<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	SYNC_STKGrvHead_1__2344

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public nvarchar GRVDATE" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public float DOCTOTALINCL" of type [float]
	"public float DOCTOTALEXCL" of type [float]
	"public float DOCTAX" of type [float]
	"public float GRVTOTALEXCL" of type [float]
	"public float GRVTOTALINCL" of type [float]
	"public float GRVTAX" of type [float]
	"public float GRVDISCOUNT" of type [float]
	"public nvarchar TAXINDICATOR" of type [nvarchar]
	"public int AP" of type [int]
*/
namespace genesis;


use PDO;

class Sync_stkgrvhead_1__2344 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $grvno ;	
	public $grvdate ;	
	public $docno ;	
	public $doctotalincl ;	
	public $doctotalexcl ;	
	public $doctax ;	
	public $grvtotalexcl ;	
	public $grvtotalincl ;	
	public $grvtax ;	
	public $grvdiscount ;	
	public $taxindicator ;	
	public $ap ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [GRVDATE], [DOCNO], [DOCTOTALINCL], [DOCTOTALEXCL], [DOCTAX], [GRVTOTALEXCL], [GRVTOTALINCL], [GRVTAX], [GRVDISCOUNT], [TAXINDICATOR], [AP] FROM [SYNC_STKGrvHead_1__2344]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->grvdate = $records["GRVDATE"];
				$instance->docno = $records["DOCNO"];
				$instance->doctotalincl = $records["DOCTOTALINCL"];
				$instance->doctotalexcl = $records["DOCTOTALEXCL"];
				$instance->doctax = $records["DOCTAX"];
				$instance->grvtotalexcl = $records["GRVTOTALEXCL"];
				$instance->grvtotalincl = $records["GRVTOTALINCL"];
				$instance->grvtax = $records["GRVTAX"];
				$instance->grvdiscount = $records["GRVDISCOUNT"];
				$instance->taxindicator = $records["TAXINDICATOR"];
				$instance->ap = $records["AP"];
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