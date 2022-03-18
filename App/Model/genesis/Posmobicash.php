<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	POSMobiCash

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar OrderNo" of type [nvarchar]
	"public nvarchar TxanID" of type [nvarchar]
	"public nvarchar TagNo" of type [nvarchar]
	"public nvarchar CellNo" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar DrCr" of type [nvarchar]
	"public int AP" of type [int]
	"public float Total" of type [float]
	"public float NewBalance" of type [float]
	"public nvarchar TradeCompany" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Message" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar TillNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posmobicash {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $trandate ;	
	public $txtp ;	
	public $docno ;	
	public $orderno ;	
	public $txanid ;	
	public $tagno ;	
	public $cellno ;	
	public $reference ;	
	public $drcr ;	
	public $ap ;	
	public $total ;	
	public $newbalance ;	
	public $tradecompany ;	
	public $status ;	
	public $message ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $tillno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TranDate], [TxTp], [DocNo], [OrderNo], [TxanID], [TagNo], [CellNo], [Reference], [DrCr], [AP], [Total], [NewBalance], [TradeCompany], [Status], [Message], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [TillNo] FROM [POSMobiCash]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->trandate = $records["TranDate"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->orderno = $records["OrderNo"];
				$instance->txanid = $records["TxanID"];
				$instance->tagno = $records["TagNo"];
				$instance->cellno = $records["CellNo"];
				$instance->reference = $records["Reference"];
				$instance->drcr = $records["DrCr"];
				$instance->ap = $records["AP"];
				$instance->total = $records["Total"];
				$instance->newbalance = $records["NewBalance"];
				$instance->tradecompany = $records["TradeCompany"];
				$instance->status = $records["Status"];
				$instance->message = $records["Message"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->tillno = $records["TillNo"];
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