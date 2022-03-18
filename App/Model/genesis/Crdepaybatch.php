<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	CRDEPayBatch

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BATCHNO" of type [nvarchar]
	"public nvarchar FROMDATE" of type [nvarchar]
	"public nvarchar TODATE" of type [nvarchar]
	"public nvarchar PAYDATE" of type [nvarchar]
	"public float BATCHTOTAL" of type [float]
	"public int BATCHLINES" of type [int]
	"public nvarchar PAYMTHD" of type [nvarchar]
	"public nvarchar PAYDETAILS" of type [nvarchar]
	"public nvarchar BANKCODE" of type [nvarchar]
	"public nvarchar CREATEDATE" of type [nvarchar]
	"public nvarchar CREATETIME" of type [nvarchar]
	"public nvarchar CREATEUSER" of type [nvarchar]
	"public nvarchar CREATEMACID" of type [nvarchar]
	"public nvarchar GENDATE" of type [nvarchar]
	"public nvarchar GENTIME" of type [nvarchar]
	"public nvarchar GENUSER" of type [nvarchar]
	"public nvarchar GENMACID" of type [nvarchar]
	"public nvarchar POSTDATE" of type [nvarchar]
	"public nvarchar POSTTIME" of type [nvarchar]
	"public nvarchar POSTUSER" of type [nvarchar]
	"public nvarchar POSTMACID" of type [nvarchar]
	"public int TxNo" of type [int]
*/
namespace genesis;


use PDO;

class Crdepaybatch {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $batchno ;	
	public $fromdate ;	
	public $todate ;	
	public $paydate ;	
	public $batchtotal ;	
	public $batchlines ;	
	public $paymthd ;	
	public $paydetails ;	
	public $bankcode ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $gendate ;	
	public $gentime ;	
	public $genuser ;	
	public $genmacid ;	
	public $postdate ;	
	public $posttime ;	
	public $postuser ;	
	public $postmacid ;	
	public $txno ;	
	
	
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
			$query = " SELECT RECID, [CO], [BATCHNO], [FROMDATE], [TODATE], [PAYDATE], [BATCHTOTAL], [BATCHLINES], [PAYMTHD], [PAYDETAILS], [BANKCODE], [CREATEDATE], [CREATETIME], [CREATEUSER], [CREATEMACID], [GENDATE], [GENTIME], [GENUSER], [GENMACID], [POSTDATE], [POSTTIME], [POSTUSER], [POSTMACID], [TxNo] FROM [CRDEPayBatch]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->batchno = $records["BATCHNO"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->paydate = $records["PAYDATE"];
				$instance->batchtotal = $records["BATCHTOTAL"];
				$instance->batchlines = $records["BATCHLINES"];
				$instance->paymthd = $records["PAYMTHD"];
				$instance->paydetails = $records["PAYDETAILS"];
				$instance->bankcode = $records["BANKCODE"];
				$instance->createdate = $records["CREATEDATE"];
				$instance->createtime = $records["CREATETIME"];
				$instance->createuser = $records["CREATEUSER"];
				$instance->createmacid = $records["CREATEMACID"];
				$instance->gendate = $records["GENDATE"];
				$instance->gentime = $records["GENTIME"];
				$instance->genuser = $records["GENUSER"];
				$instance->genmacid = $records["GENMACID"];
				$instance->postdate = $records["POSTDATE"];
				$instance->posttime = $records["POSTTIME"];
				$instance->postuser = $records["POSTUSER"];
				$instance->postmacid = $records["POSTMACID"];
				$instance->txno = $records["TxNo"];
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
			$query = " SELECT RECID, [CO], [BATCHNO], [FROMDATE], [TODATE], [PAYDATE], [BATCHTOTAL], [BATCHLINES], [PAYMTHD], [PAYDETAILS], [BANKCODE], [CREATEDATE], [CREATETIME], [CREATEUSER], [CREATEMACID], [GENDATE], [GENTIME], [GENUSER], [GENMACID], [POSTDATE], [POSTTIME], [POSTUSER], [POSTMACID], [TxNo] FROM [CRDEPayBatch]  WHERE [BANKCODE]=:bankcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":bankcode", $bankcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->batchno = $records["BATCHNO"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->paydate = $records["PAYDATE"];
				$instance->batchtotal = $records["BATCHTOTAL"];
				$instance->batchlines = $records["BATCHLINES"];
				$instance->paymthd = $records["PAYMTHD"];
				$instance->paydetails = $records["PAYDETAILS"];
				$instance->bankcode = $records["BANKCODE"];
				$instance->createdate = $records["CREATEDATE"];
				$instance->createtime = $records["CREATETIME"];
				$instance->createuser = $records["CREATEUSER"];
				$instance->createmacid = $records["CREATEMACID"];
				$instance->gendate = $records["GENDATE"];
				$instance->gentime = $records["GENTIME"];
				$instance->genuser = $records["GENUSER"];
				$instance->genmacid = $records["GENMACID"];
				$instance->postdate = $records["POSTDATE"];
				$instance->posttime = $records["POSTTIME"];
				$instance->postuser = $records["POSTUSER"];
				$instance->postmacid = $records["POSTMACID"];
				$instance->txno = $records["TxNo"];
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