<?php
/**
@Author			:	Lesley
@Date			:	2020/10/24 12:28:08
@Database			:	MRJ
@Table			:	DOCPayments

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar TillNo" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar PayCode" of type [nvarchar]
	"public nvarchar CheqNo" of type [nvarchar]
	"public nvarchar CheqDate" of type [nvarchar]
	"public nvarchar CheqAccNo" of type [nvarchar]
	"public nvarchar CheqName" of type [nvarchar]
	"public nvarchar CheqBank" of type [nvarchar]
	"public nvarchar CardNo" of type [nvarchar]
	"public nvarchar CardType" of type [nvarchar]
	"public nvarchar CardExpDate" of type [nvarchar]
	"public nvarchar CardCVC" of type [nvarchar]
	"public nvarchar CardName" of type [nvarchar]
	"public nvarchar Phone" of type [nvarchar]
	"public nvarchar IDNo" of type [nvarchar]
	"public nvarchar CashUpNumber" of type [nvarchar]
	"public nvarchar CashUpDate" of type [nvarchar]
	"public nvarchar CashUpTime" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public nvarchar CCTerminalID" of type [nvarchar]
	"public nvarchar CCSessionID" of type [nvarchar]
	"public nvarchar CCAcceptorID" of type [nvarchar]
	"public nvarchar CCAuthID" of type [nvarchar]
	"public nvarchar CCRRN" of type [nvarchar]
	"public int CCTxanID" of type [int]
	"public nvarchar CCMerchantID" of type [nvarchar]
	"public nvarchar CCMerchantRef" of type [nvarchar]
	"public nvarchar CCUUID" of type [nvarchar]
	"public nvarchar CCPOSEntry" of type [nvarchar]
	"public nvarchar CCPinStatement" of type [nvarchar]
	"public nvarchar CCEMVAppLabel" of type [nvarchar]
	"public nvarchar CCEMVAID" of type [nvarchar]
	"public nvarchar CCEMVTVR" of type [nvarchar]
	"public nvarchar CCEMVTSI" of type [nvarchar]
	"public nvarchar CCEMVTC" of type [nvarchar]
	"public nvarchar ReconNo" of type [nvarchar]
	"public nvarchar AuthCode" of type [nvarchar]
	"public nvarchar BatchNo" of type [nvarchar]
	"public nvarchar Supervisor" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar VoucherType" of type [nvarchar]
	"public nvarchar VoucherNo" of type [nvarchar]
	"public nvarchar VoucherBranch" of type [nvarchar]
	"public nvarchar VoucherExpDate" of type [nvarchar]
	"public nvarchar VouchDate" of type [nvarchar]
	"public nvarchar VouchName" of type [nvarchar]
	"public int LineNo" of type [int]
	"public int CardBudget" of type [int]
	"public float Amount" of type [float]
	"public float VouchAmount" of type [float]
*/
namespace genesis;


use PDO;

class Docpayments {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $tillno ;	
	public $docno ;	
	public $paycode ;	
	public $cheqno ;	
	public $cheqdate ;	
	public $cheqaccno ;	
	public $cheqname ;	
	public $cheqbank ;	
	public $cardno ;	
	public $cardtype ;	
	public $cardexpdate ;	
	public $cardcvc ;	
	public $cardname ;	
	public $phone ;	
	public $idno ;	
	public $cashupnumber ;	
	public $cashupdate ;	
	public $cashuptime ;	
	public $trandate ;	
	public $account ;	
	public $sourcebranch ;	
	public $ccterminalid ;	
	public $ccsessionid ;	
	public $ccacceptorid ;	
	public $ccauthid ;	
	public $ccrrn ;	
	public $cctxanid ;	
	public $ccmerchantid ;	
	public $ccmerchantref ;	
	public $ccuuid ;	
	public $ccposentry ;	
	public $ccpinstatement ;	
	public $ccemvapplabel ;	
	public $ccemvaid ;	
	public $ccemvtvr ;	
	public $ccemvtsi ;	
	public $ccemvtc ;	
	public $reconno ;	
	public $authcode ;	
	public $batchno ;	
	public $supervisor ;	
	public $status ;	
	public $vouchertype ;	
	public $voucherno ;	
	public $voucherbranch ;	
	public $voucherexpdate ;	
	public $vouchdate ;	
	public $vouchname ;	
	public $lineno ;	
	public $cardbudget ;	
	public $amount ;	
	public $vouchamount ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [TillNo], [DocNo], [PayCode], [CheqNo], [CheqDate], [CheqAccNo], [CheqName], [CheqBank], [CardNo], [CardType], [CardExpDate], [CardCVC], [CardName], [Phone], [IDNo], [CashUpNumber], [CashUpDate], [CashUpTime], [TranDate], [Account], [SourceBranch], [CCTerminalID], [CCSessionID], [CCAcceptorID], [CCAuthID], [CCRRN], [CCTxanID], [CCMerchantID], [CCMerchantRef], [CCUUID], [CCPOSEntry], [CCPinStatement], [CCEMVAppLabel], [CCEMVAID], [CCEMVTVR], [CCEMVTSI], [CCEMVTC], [ReconNo], [AuthCode], [BatchNo], [Supervisor], [Status], [VoucherType], [VoucherNo], [VoucherBranch], [VoucherExpDate], [VouchDate], [VouchName], [LineNo], [CardBudget], [Amount], [VouchAmount] FROM [DOCPayments]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->tillno = $records["TillNo"];
				$instance->docno = $records["DocNo"];
				$instance->paycode = $records["PayCode"];
				$instance->cheqno = $records["CheqNo"];
				$instance->cheqdate = $records["CheqDate"];
				$instance->cheqaccno = $records["CheqAccNo"];
				$instance->cheqname = $records["CheqName"];
				$instance->cheqbank = $records["CheqBank"];
				$instance->cardno = $records["CardNo"];
				$instance->cardtype = $records["CardType"];
				$instance->cardexpdate = $records["CardExpDate"];
				$instance->cardcvc = $records["CardCVC"];
				$instance->cardname = $records["CardName"];
				$instance->phone = $records["Phone"];
				$instance->idno = $records["IDNo"];
				$instance->cashupnumber = $records["CashUpNumber"];
				$instance->cashupdate = $records["CashUpDate"];
				$instance->cashuptime = $records["CashUpTime"];
				$instance->trandate = $records["TranDate"];
				$instance->account = $records["Account"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->ccterminalid = $records["CCTerminalID"];
				$instance->ccsessionid = $records["CCSessionID"];
				$instance->ccacceptorid = $records["CCAcceptorID"];
				$instance->ccauthid = $records["CCAuthID"];
				$instance->ccrrn = $records["CCRRN"];
				$instance->cctxanid = $records["CCTxanID"];
				$instance->ccmerchantid = $records["CCMerchantID"];
				$instance->ccmerchantref = $records["CCMerchantRef"];
				$instance->ccuuid = $records["CCUUID"];
				$instance->ccposentry = $records["CCPOSEntry"];
				$instance->ccpinstatement = $records["CCPinStatement"];
				$instance->ccemvapplabel = $records["CCEMVAppLabel"];
				$instance->ccemvaid = $records["CCEMVAID"];
				$instance->ccemvtvr = $records["CCEMVTVR"];
				$instance->ccemvtsi = $records["CCEMVTSI"];
				$instance->ccemvtc = $records["CCEMVTC"];
				$instance->reconno = $records["ReconNo"];
				$instance->authcode = $records["AuthCode"];
				$instance->batchno = $records["BatchNo"];
				$instance->supervisor = $records["Supervisor"];
				$instance->status = $records["Status"];
				$instance->vouchertype = $records["VoucherType"];
				$instance->voucherno = $records["VoucherNo"];
				$instance->voucherbranch = $records["VoucherBranch"];
				$instance->voucherexpdate = $records["VoucherExpDate"];
				$instance->vouchdate = $records["VouchDate"];
				$instance->vouchname = $records["VouchName"];
				$instance->lineno = $records["LineNo"];
				$instance->cardbudget = $records["CardBudget"];
				$instance->amount = $records["Amount"];
				$instance->vouchamount = $records["VouchAmount"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using PayCode
	*/
	public static function ini_PayCode($paycode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [TillNo], [DocNo], [PayCode], [CheqNo], [CheqDate], [CheqAccNo], [CheqName], [CheqBank], [CardNo], [CardType], [CardExpDate], [CardCVC], [CardName], [Phone], [IDNo], [CashUpNumber], [CashUpDate], [CashUpTime], [TranDate], [Account], [SourceBranch], [CCTerminalID], [CCSessionID], [CCAcceptorID], [CCAuthID], [CCRRN], [CCTxanID], [CCMerchantID], [CCMerchantRef], [CCUUID], [CCPOSEntry], [CCPinStatement], [CCEMVAppLabel], [CCEMVAID], [CCEMVTVR], [CCEMVTSI], [CCEMVTC], [ReconNo], [AuthCode], [BatchNo], [Supervisor], [Status], [VoucherType], [VoucherNo], [VoucherBranch], [VoucherExpDate], [VouchDate], [VouchName], [LineNo], [CardBudget], [Amount], [VouchAmount] FROM [DOCPayments]  WHERE [PayCode]=:paycode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":paycode", $paycode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->tillno = $records["TillNo"];
				$instance->docno = $records["DocNo"];
				$instance->paycode = $records["PayCode"];
				$instance->cheqno = $records["CheqNo"];
				$instance->cheqdate = $records["CheqDate"];
				$instance->cheqaccno = $records["CheqAccNo"];
				$instance->cheqname = $records["CheqName"];
				$instance->cheqbank = $records["CheqBank"];
				$instance->cardno = $records["CardNo"];
				$instance->cardtype = $records["CardType"];
				$instance->cardexpdate = $records["CardExpDate"];
				$instance->cardcvc = $records["CardCVC"];
				$instance->cardname = $records["CardName"];
				$instance->phone = $records["Phone"];
				$instance->idno = $records["IDNo"];
				$instance->cashupnumber = $records["CashUpNumber"];
				$instance->cashupdate = $records["CashUpDate"];
				$instance->cashuptime = $records["CashUpTime"];
				$instance->trandate = $records["TranDate"];
				$instance->account = $records["Account"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->ccterminalid = $records["CCTerminalID"];
				$instance->ccsessionid = $records["CCSessionID"];
				$instance->ccacceptorid = $records["CCAcceptorID"];
				$instance->ccauthid = $records["CCAuthID"];
				$instance->ccrrn = $records["CCRRN"];
				$instance->cctxanid = $records["CCTxanID"];
				$instance->ccmerchantid = $records["CCMerchantID"];
				$instance->ccmerchantref = $records["CCMerchantRef"];
				$instance->ccuuid = $records["CCUUID"];
				$instance->ccposentry = $records["CCPOSEntry"];
				$instance->ccpinstatement = $records["CCPinStatement"];
				$instance->ccemvapplabel = $records["CCEMVAppLabel"];
				$instance->ccemvaid = $records["CCEMVAID"];
				$instance->ccemvtvr = $records["CCEMVTVR"];
				$instance->ccemvtsi = $records["CCEMVTSI"];
				$instance->ccemvtc = $records["CCEMVTC"];
				$instance->reconno = $records["ReconNo"];
				$instance->authcode = $records["AuthCode"];
				$instance->batchno = $records["BatchNo"];
				$instance->supervisor = $records["Supervisor"];
				$instance->status = $records["Status"];
				$instance->vouchertype = $records["VoucherType"];
				$instance->voucherno = $records["VoucherNo"];
				$instance->voucherbranch = $records["VoucherBranch"];
				$instance->voucherexpdate = $records["VoucherExpDate"];
				$instance->vouchdate = $records["VouchDate"];
				$instance->vouchname = $records["VouchName"];
				$instance->lineno = $records["LineNo"];
				$instance->cardbudget = $records["CardBudget"];
				$instance->amount = $records["Amount"];
				$instance->vouchamount = $records["VouchAmount"];
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
			$res = $this->cheqname;
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