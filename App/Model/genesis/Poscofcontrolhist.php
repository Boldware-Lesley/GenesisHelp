<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	POSCOFControlHist

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public float OpenFloat" of type [float]
	"public float CloseFloat" of type [float]
	"public float Cash" of type [float]
	"public float Cheques" of type [float]
	"public float Creditcards" of type [float]
	"public float Vouchers" of type [float]
	"public float Transfers" of type [float]
	"public float Tender1Amount" of type [float]
	"public float Tender2Amount" of type [float]
	"public float Tender3Amount" of type [float]
	"public float Tender4Amount" of type [float]
	"public float Payouts" of type [float]
	"public float Deposits" of type [float]
	"public float PDCheques" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public float Wallets" of type [float]
*/
namespace genesis;


use PDO;

class Poscofcontrolhist {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $trandate ;	
	public $openfloat ;	
	public $closefloat ;	
	public $cash ;	
	public $cheques ;	
	public $creditcards ;	
	public $vouchers ;	
	public $transfers ;	
	public $tender1amount ;	
	public $tender2amount ;	
	public $tender3amount ;	
	public $tender4amount ;	
	public $payouts ;	
	public $deposits ;	
	public $pdcheques ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $wallets ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TranDate], [OpenFloat], [CloseFloat], [Cash], [Cheques], [Creditcards], [Vouchers], [Transfers], [Tender1Amount], [Tender2Amount], [Tender3Amount], [Tender4Amount], [Payouts], [Deposits], [PDCheques], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Wallets] FROM [POSCOFControlHist]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->trandate = $records["TranDate"];
				$instance->openfloat = $records["OpenFloat"];
				$instance->closefloat = $records["CloseFloat"];
				$instance->cash = $records["Cash"];
				$instance->cheques = $records["Cheques"];
				$instance->creditcards = $records["Creditcards"];
				$instance->vouchers = $records["Vouchers"];
				$instance->transfers = $records["Transfers"];
				$instance->tender1amount = $records["Tender1Amount"];
				$instance->tender2amount = $records["Tender2Amount"];
				$instance->tender3amount = $records["Tender3Amount"];
				$instance->tender4amount = $records["Tender4Amount"];
				$instance->payouts = $records["Payouts"];
				$instance->deposits = $records["Deposits"];
				$instance->pdcheques = $records["PDCheques"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->wallets = $records["Wallets"];
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