<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	DEBOpenItem

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar DebtorType" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar Refno" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar Details" of type [nvarchar]
	"public float Amount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public float VATAmount" of type [float]
	"public float VATRate" of type [float]
	"public float Discperc" of type [float]
	"public float DiscAmount" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debopenitem {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $debtortype ;	
	public $account ;	
	public $docno ;	
	public $txtp ;	
	public $refno ;	
	public $trandate ;	
	public $ap ;	
	public $details ;	
	public $amount ;	
	public $drcr ;	
	public $vatamount ;	
	public $vatrate ;	
	public $discperc ;	
	public $discamount ;	
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
			$query = " SELECT RecID, [CO], [Branch], [DebtorType], [Account], [DocNo], [TxTp], [Refno], [TranDate], [AP], [Details], [Amount], [DrCr], [VATAmount], [VATRate], [Discperc], [DiscAmount], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [DEBOpenItem]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->debtortype = $records["DebtorType"];
				$instance->account = $records["Account"];
				$instance->docno = $records["DocNo"];
				$instance->txtp = $records["TxTp"];
				$instance->refno = $records["Refno"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->details = $records["Details"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->vatamount = $records["VATAmount"];
				$instance->vatrate = $records["VATRate"];
				$instance->discperc = $records["Discperc"];
				$instance->discamount = $records["DiscAmount"];
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