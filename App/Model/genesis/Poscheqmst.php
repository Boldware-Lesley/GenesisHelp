<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	POSCheqMst

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TRANDATE" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar CHEQDATE" of type [nvarchar]
	"public nvarchar CHEQNO" of type [nvarchar]
	"public nvarchar CHEQACCNO" of type [nvarchar]
	"public nvarchar CHEQNAME" of type [nvarchar]
	"public nvarchar CHEQBANK" of type [nvarchar]
	"public nvarchar PHONE" of type [nvarchar]
	"public nvarchar IDNO" of type [nvarchar]
	"public float AMOUNT" of type [float]
	"public nvarchar SUPERVISOR" of type [nvarchar]
	"public nvarchar DOCTXTP" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public nvarchar TILLNO" of type [nvarchar]
	"public nvarchar DEPOSITDATE" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar RESCHEDULEDATE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar COMMENT" of type [nvarchar]
	"public nvarchar PDCINDICATOR" of type [nvarchar]
	"public nvarchar DepositSlipNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Poscheqmst {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $trandate ;	
	public $account ;	
	public $name ;	
	public $cheqdate ;	
	public $cheqno ;	
	public $cheqaccno ;	
	public $cheqname ;	
	public $cheqbank ;	
	public $phone ;	
	public $idno ;	
	public $amount ;	
	public $supervisor ;	
	public $doctxtp ;	
	public $docno ;	
	public $tillno ;	
	public $depositdate ;	
	public $status ;	
	public $rescheduledate ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $comment ;	
	public $pdcindicator ;	
	public $depositslipno ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [TRANDATE], [ACCOUNT], [NAME], [CHEQDATE], [CHEQNO], [CHEQACCNO], [CHEQNAME], [CHEQBANK], [PHONE], [IDNO], [AMOUNT], [SUPERVISOR], [DOCTXTP], [DOCNO], [TILLNO], [DEPOSITDATE], [STATUS], [RESCHEDULEDATE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [COMMENT], [PDCINDICATOR], [DepositSlipNo] FROM [POSCheqMst]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->trandate = $records["TRANDATE"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->cheqdate = $records["CHEQDATE"];
				$instance->cheqno = $records["CHEQNO"];
				$instance->cheqaccno = $records["CHEQACCNO"];
				$instance->cheqname = $records["CHEQNAME"];
				$instance->cheqbank = $records["CHEQBANK"];
				$instance->phone = $records["PHONE"];
				$instance->idno = $records["IDNO"];
				$instance->amount = $records["AMOUNT"];
				$instance->supervisor = $records["SUPERVISOR"];
				$instance->doctxtp = $records["DOCTXTP"];
				$instance->docno = $records["DOCNO"];
				$instance->tillno = $records["TILLNO"];
				$instance->depositdate = $records["DEPOSITDATE"];
				$instance->status = $records["STATUS"];
				$instance->rescheduledate = $records["RESCHEDULEDATE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->comment = $records["COMMENT"];
				$instance->pdcindicator = $records["PDCINDICATOR"];
				$instance->depositslipno = $records["DepositSlipNo"];
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
			$res = $this->name;
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