<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	CRDPDC

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TRANDATE" of type [nvarchar]
	"public nvarchar CHEQNO" of type [nvarchar]
	"public float AMOUNT" of type [float]
	"public nvarchar DUEDATE" of type [nvarchar]
	"public nvarchar BANKCODE" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public nvarchar POSTDATE" of type [nvarchar]
	"public int PAYMENTNO" of type [int]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdpdc {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $trandate ;	
	public $cheqno ;	
	public $amount ;	
	public $duedate ;	
	public $bankcode ;	
	public $status ;	
	public $postdate ;	
	public $paymentno ;	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TRANDATE], [CHEQNO], [AMOUNT], [DUEDATE], [BANKCODE], [STATUS], [POSTDATE], [PAYMENTNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [CRDPDC]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->trandate = $records["TRANDATE"];
				$instance->cheqno = $records["CHEQNO"];
				$instance->amount = $records["AMOUNT"];
				$instance->duedate = $records["DUEDATE"];
				$instance->bankcode = $records["BANKCODE"];
				$instance->status = $records["STATUS"];
				$instance->postdate = $records["POSTDATE"];
				$instance->paymentno = $records["PAYMENTNO"];
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
	Main Constructor For Declearing Using BANKCODE
	*/
	public static function ini_BANKCODE($bankcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TRANDATE], [CHEQNO], [AMOUNT], [DUEDATE], [BANKCODE], [STATUS], [POSTDATE], [PAYMENTNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [CRDPDC]  WHERE [BANKCODE]=:bankcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":bankcode", $bankcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->trandate = $records["TRANDATE"];
				$instance->cheqno = $records["CHEQNO"];
				$instance->amount = $records["AMOUNT"];
				$instance->duedate = $records["DUEDATE"];
				$instance->bankcode = $records["BANKCODE"];
				$instance->status = $records["STATUS"];
				$instance->postdate = $records["POSTDATE"];
				$instance->paymentno = $records["PAYMENTNO"];
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