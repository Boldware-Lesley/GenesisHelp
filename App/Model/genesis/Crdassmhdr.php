<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	CRDAssmHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int OrderNo" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar AssmCode" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public float TotalIncl" of type [float]
	"public nvarchar DateCompleted" of type [nvarchar]
	"public nvarchar PayDate" of type [nvarchar]
	"public nvarchar PayMethod" of type [nvarchar]
	"public float PayAmount" of type [float]
*/
namespace genesis;


use PDO;

class Crdassmhdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $orderno ;	
	public $trandate ;	
	public $assmcode ;	
	public $txtp ;	
	public $docno ;	
	public $status ;	
	public $totalincl ;	
	public $datecompleted ;	
	public $paydate ;	
	public $paymethod ;	
	public $payamount ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RecID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [OrderNo], [TranDate], [AssmCode], [TxTp], [DocNo], [Status], [TotalIncl], [DateCompleted], [PayDate], [PayMethod], [PayAmount] FROM [CRDAssmHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->orderno = $records["OrderNo"];
				$instance->trandate = $records["TranDate"];
				$instance->assmcode = $records["AssmCode"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->status = $records["Status"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->datecompleted = $records["DateCompleted"];
				$instance->paydate = $records["PayDate"];
				$instance->paymethod = $records["PayMethod"];
				$instance->payamount = $records["PayAmount"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using AssmCode
	*/
	public static function ini_AssmCode($assmcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [OrderNo], [TranDate], [AssmCode], [TxTp], [DocNo], [Status], [TotalIncl], [DateCompleted], [PayDate], [PayMethod], [PayAmount] FROM [CRDAssmHdr]  WHERE [AssmCode]=:assmcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":assmcode", $assmcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->orderno = $records["OrderNo"];
				$instance->trandate = $records["TranDate"];
				$instance->assmcode = $records["AssmCode"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->status = $records["Status"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->datecompleted = $records["DateCompleted"];
				$instance->paydate = $records["PayDate"];
				$instance->paymethod = $records["PayMethod"];
				$instance->payamount = $records["PayAmount"];
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