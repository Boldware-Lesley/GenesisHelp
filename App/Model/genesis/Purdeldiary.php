<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	PURDelDiary

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public int ORDERNO" of type [int]
	"public nvarchar ORDERDATE" of type [nvarchar]
	"public nvarchar DELIVERYDATE" of type [nvarchar]
	"public nvarchar DELIVERYTIME" of type [nvarchar]
	"public nvarchar RECEIVEDATE" of type [nvarchar]
	"public nvarchar RECEIVETIME" of type [nvarchar]
	"public float RECEIVECASES" of type [float]
	"public float RECEIVEPALL" of type [float]
	"public nvarchar DRIVERNAME" of type [nvarchar]
	"public nvarchar VEHICLEREGNO" of type [nvarchar]
	"public nvarchar SUPPDOCNO" of type [nvarchar]
	"public nvarchar SUPPDOCDATE" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Comment" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Purdeldiary {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $orderno ;	
	public $orderdate ;	
	public $deliverydate ;	
	public $deliverytime ;	
	public $receivedate ;	
	public $receivetime ;	
	public $receivecases ;	
	public $receivepall ;	
	public $drivername ;	
	public $vehicleregno ;	
	public $suppdocno ;	
	public $suppdocdate ;	
	public $grvno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $status ;	
	public $comment ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [ORDERDATE], [DELIVERYDATE], [DELIVERYTIME], [RECEIVEDATE], [RECEIVETIME], [RECEIVECASES], [RECEIVEPALL], [DRIVERNAME], [VEHICLEREGNO], [SUPPDOCNO], [SUPPDOCDATE], [GRVNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Status], [Comment] FROM [PURDelDiary]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->orderno = $records["ORDERNO"];
				$instance->orderdate = $records["ORDERDATE"];
				$instance->deliverydate = $records["DELIVERYDATE"];
				$instance->deliverytime = $records["DELIVERYTIME"];
				$instance->receivedate = $records["RECEIVEDATE"];
				$instance->receivetime = $records["RECEIVETIME"];
				$instance->receivecases = $records["RECEIVECASES"];
				$instance->receivepall = $records["RECEIVEPALL"];
				$instance->drivername = $records["DRIVERNAME"];
				$instance->vehicleregno = $records["VEHICLEREGNO"];
				$instance->suppdocno = $records["SUPPDOCNO"];
				$instance->suppdocdate = $records["SUPPDOCDATE"];
				$instance->grvno = $records["GRVNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->status = $records["Status"];
				$instance->comment = $records["Comment"];
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
			$res = $this->drivername;
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