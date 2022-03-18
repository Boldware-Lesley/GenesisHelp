<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	FLTMstTxans

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar RegisterNo" of type [nvarchar]
	"public nvarchar RegNo" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TranTime" of type [nvarchar]
	"public float PrevReading" of type [float]
	"public float CurrReading" of type [float]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar RefNo" of type [nvarchar]
	"public nvarchar DocTxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar DrCr" of type [nvarchar]
	"public float Quantity" of type [float]
	"public float Amount" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Fltmsttxans {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $registerno ;	
	public $regno ;	
	public $txtp ;	
	public $trandate ;	
	public $trantime ;	
	public $prevreading ;	
	public $currreading ;	
	public $details ;	
	public $refno ;	
	public $doctxtp ;	
	public $docno ;	
	public $drcr ;	
	public $quantity ;	
	public $amount ;	
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
			$query = " SELECT RecID, [CO], [RegisterNo], [RegNo], [TxTp], [TranDate], [TranTime], [PrevReading], [CurrReading], [Details], [RefNo], [DocTxTp], [DocNo], [DrCr], [Quantity], [Amount], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [FLTMstTxans]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->registerno = $records["RegisterNo"];
				$instance->regno = $records["RegNo"];
				$instance->txtp = $records["TxTp"];
				$instance->trandate = $records["TranDate"];
				$instance->trantime = $records["TranTime"];
				$instance->prevreading = $records["PrevReading"];
				$instance->currreading = $records["CurrReading"];
				$instance->details = $records["Details"];
				$instance->refno = $records["RefNo"];
				$instance->doctxtp = $records["DocTxTp"];
				$instance->docno = $records["DocNo"];
				$instance->drcr = $records["DrCr"];
				$instance->quantity = $records["Quantity"];
				$instance->amount = $records["Amount"];
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