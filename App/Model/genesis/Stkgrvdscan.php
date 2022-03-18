<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	STKGRVDScan

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public int GRVNo" of type [int]
	"public int LineNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public int Units" of type [int]
	"public nvarchar PackSize" of type [nvarchar]
	"public nvarchar ScanCode" of type [nvarchar]
	"public float ScanQty" of type [float]
	"public float OrdQty" of type [float]
	"public float InvQty" of type [float]
	"public float RecvQty" of type [float]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar RetnClaim" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkgrvdscan {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $grvno ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $units ;	
	public $packsize ;	
	public $scancode ;	
	public $scanqty ;	
	public $ordqty ;	
	public $invqty ;	
	public $recvqty ;	
	public $status ;	
	public $retnclaim ;	
	public $notes ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [TxTp], [GRVNo], [LineNo], [StockCode], [LinkCode], [Description1], [Units], [PackSize], [ScanCode], [ScanQty], [OrdQty], [InvQty], [RecvQty], [Status], [RetnClaim], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [STKGRVDScan]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->txtp = $records["TxTp"];
				$instance->grvno = $records["GRVNo"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->units = $records["Units"];
				$instance->packsize = $records["PackSize"];
				$instance->scancode = $records["ScanCode"];
				$instance->scanqty = $records["ScanQty"];
				$instance->ordqty = $records["OrdQty"];
				$instance->invqty = $records["InvQty"];
				$instance->recvqty = $records["RecvQty"];
				$instance->status = $records["Status"];
				$instance->retnclaim = $records["RetnClaim"];
				$instance->notes = $records["Notes"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using StockCode
	*/
	public static function ini_StockCode($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [TxTp], [GRVNo], [LineNo], [StockCode], [LinkCode], [Description1], [Units], [PackSize], [ScanCode], [ScanQty], [OrdQty], [InvQty], [RecvQty], [Status], [RetnClaim], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [STKGRVDScan]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->txtp = $records["TxTp"];
				$instance->grvno = $records["GRVNo"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->units = $records["Units"];
				$instance->packsize = $records["PackSize"];
				$instance->scancode = $records["ScanCode"];
				$instance->scanqty = $records["ScanQty"];
				$instance->ordqty = $records["OrdQty"];
				$instance->invqty = $records["InvQty"];
				$instance->recvqty = $records["RecvQty"];
				$instance->status = $records["Status"];
				$instance->retnclaim = $records["RetnClaim"];
				$instance->notes = $records["Notes"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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