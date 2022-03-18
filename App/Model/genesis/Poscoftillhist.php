<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	POSCOFTillHist

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar COFTillNo" of type [nvarchar]
	"public nvarchar VisUser" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public float OpenFloat" of type [float]
	"public float CloseFloat" of type [float]
	"public float Cash" of type [float]
	"public float Cheques" of type [float]
	"public float CreditCards" of type [float]
	"public float Vouchers" of type [float]
	"public float Transfers" of type [float]
	"public float TenderAmount1" of type [float]
	"public float TenderAmount2" of type [float]
	"public float TenderAmount3" of type [float]
	"public float TenderAmount4" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public int CashUpNo" of type [int]
	"public float Wallets" of type [float]
*/
namespace genesis;


use PDO;

class Poscoftillhist {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $coftillno ;	
	public $visuser ;	
	public $trandate ;	
	public $name ;	
	public $status ;	
	public $openfloat ;	
	public $closefloat ;	
	public $cash ;	
	public $cheques ;	
	public $creditcards ;	
	public $vouchers ;	
	public $transfers ;	
	public $tenderamount1 ;	
	public $tenderamount2 ;	
	public $tenderamount3 ;	
	public $tenderamount4 ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $cashupno ;	
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
			$query = " SELECT RecID, [CO], [Branch], [COFTillNo], [VisUser], [TranDate], [Name], [Status], [OpenFloat], [CloseFloat], [Cash], [Cheques], [CreditCards], [Vouchers], [Transfers], [TenderAmount1], [TenderAmount2], [TenderAmount3], [TenderAmount4], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CashUpNo], [Wallets] FROM [POSCOFTillHist]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->coftillno = $records["COFTillNo"];
				$instance->visuser = $records["VisUser"];
				$instance->trandate = $records["TranDate"];
				$instance->name = $records["Name"];
				$instance->status = $records["Status"];
				$instance->openfloat = $records["OpenFloat"];
				$instance->closefloat = $records["CloseFloat"];
				$instance->cash = $records["Cash"];
				$instance->cheques = $records["Cheques"];
				$instance->creditcards = $records["CreditCards"];
				$instance->vouchers = $records["Vouchers"];
				$instance->transfers = $records["Transfers"];
				$instance->tenderamount1 = $records["TenderAmount1"];
				$instance->tenderamount2 = $records["TenderAmount2"];
				$instance->tenderamount3 = $records["TenderAmount3"];
				$instance->tenderamount4 = $records["TenderAmount4"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->cashupno = $records["CashUpNo"];
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