<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	STKDocPreAuth

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public float Amount" of type [float]
	"public nvarchar Reason" of type [nvarchar]
	"public int GRVNo" of type [int]
	"public nvarchar GRVDate" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public float GRVTotal" of type [float]
*/
namespace genesis;


use PDO;

class Stkdocpreauth {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $status ;	
	public $account ;	
	public $name ;	
	public $trandate ;	
	public $amount ;	
	public $reason ;	
	public $grvno ;	
	public $grvdate ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $grvtotal ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [Status], [Account], [Name], [TranDate], [Amount], [Reason], [GRVNo], [GRVDate], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [GRVTotal] FROM [STKDocPreAuth]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->status = $records["Status"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->trandate = $records["TranDate"];
				$instance->amount = $records["Amount"];
				$instance->reason = $records["Reason"];
				$instance->grvno = $records["GRVNo"];
				$instance->grvdate = $records["GRVDate"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->grvtotal = $records["GRVTotal"];
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