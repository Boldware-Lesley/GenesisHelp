<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	DEBTxan

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar DebtorType" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar SubAccount" of type [nvarchar]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public int TxNo" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar DocType" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public float Amount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public float VATAmount" of type [float]
	"public float VATRate" of type [float]
	"public nvarchar VATCode" of type [nvarchar]
	"public float Balance" of type [float]
	"public float DCurr" of type [float]
	"public float D030" of type [float]
	"public float D060" of type [float]
	"public float D090" of type [float]
	"public float D120" of type [float]
	"public float D150" of type [float]
	"public float D180" of type [float]
	"public float DOver" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar BaseDocType" of type [nvarchar]
	"public nvarchar BaseDocNo" of type [nvarchar]
	"public nvarchar BaseDocDate" of type [nvarchar]
	"public float Discount" of type [float]
	"public float DiscVATRate" of type [float]
	"public float DiscVATAmount" of type [float]
	"public nvarchar TermCode" of type [nvarchar]
	"public nvarchar PaymentDue" of type [nvarchar]
	"public nvarchar PaymentMethod" of type [nvarchar]
	"public nvarchar PaymentRef" of type [nvarchar]
	"public float PaidAmount" of type [float]
	"public nvarchar PaymentStatus" of type [nvarchar]
	"public nvarchar Previouspost" of type [nvarchar]
	"public int Gltrace" of type [int]
	"public nvarchar TargetdocType" of type [nvarchar]
	"public nvarchar TargetDocNo" of type [nvarchar]
	"public nvarchar PaymentDate" of type [nvarchar]
	"public ntext Notepad" of type [ntext]
	"public nvarchar PaymentBank" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public nvarchar PostingDate" of type [nvarchar]
	"public nvarchar ProductionDate" of type [nvarchar]
	"public nvarchar ReasonCode" of type [nvarchar]
	"public int DealRangeDays" of type [int]
	"public int GLSubAccNo" of type [int]
*/
namespace genesis;


use PDO;

class Debtxan {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $debtortype ;	
	public $account ;	
	public $subaccount ;	
	public $sourcebranch ;	
	public $txno ;	
	public $trandate ;	
	public $ap ;	
	public $doctype ;	
	public $docno ;	
	public $reference ;	
	public $txtp ;	
	public $details ;	
	public $amount ;	
	public $drcr ;	
	public $vatamount ;	
	public $vatrate ;	
	public $vatcode ;	
	public $balance ;	
	public $dcurr ;	
	public $d030 ;	
	public $d060 ;	
	public $d090 ;	
	public $d120 ;	
	public $d150 ;	
	public $d180 ;	
	public $dover ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $basedoctype ;	
	public $basedocno ;	
	public $basedocdate ;	
	public $discount ;	
	public $discvatrate ;	
	public $discvatamount ;	
	public $termcode ;	
	public $paymentdue ;	
	public $paymentmethod ;	
	public $paymentref ;	
	public $paidamount ;	
	public $paymentstatus ;	
	public $previouspost ;	
	public $gltrace ;	
	public $targetdoctype ;	
	public $targetdocno ;	
	public $paymentdate ;	
	public $notepad ;	
	public $paymentbank ;	
	public $glaccno ;	
	public $postingdate ;	
	public $productiondate ;	
	public $reasoncode ;	
	public $dealrangedays ;	
	public $glsubaccno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [DebtorType], [Account], [SubAccount], [SourceBranch], [TxNo], [TranDate], [AP], [DocType], [DocNo], [Reference], [TxTp], [Details], [Amount], [DrCr], [VATAmount], [VATRate], [VATCode], [Balance], [DCurr], [D030], [D060], [D090], [D120], [D150], [D180], [DOver], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [BaseDocType], [BaseDocNo], [BaseDocDate], [Discount], [DiscVATRate], [DiscVATAmount], [TermCode], [PaymentDue], [PaymentMethod], [PaymentRef], [PaidAmount], [PaymentStatus], [Previouspost], [Gltrace], [TargetdocType], [TargetDocNo], [PaymentDate], [Notepad], [PaymentBank], [GLAccNo], [PostingDate], [ProductionDate], [ReasonCode], [DealRangeDays], [GLSubAccNo] FROM [DEBTxan]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->debtortype = $records["DebtorType"];
				$instance->account = $records["Account"];
				$instance->subaccount = $records["SubAccount"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->txno = $records["TxNo"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->doctype = $records["DocType"];
				$instance->docno = $records["DocNo"];
				$instance->reference = $records["Reference"];
				$instance->txtp = $records["TxTp"];
				$instance->details = $records["Details"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->vatamount = $records["VATAmount"];
				$instance->vatrate = $records["VATRate"];
				$instance->vatcode = $records["VATCode"];
				$instance->balance = $records["Balance"];
				$instance->dcurr = $records["DCurr"];
				$instance->d030 = $records["D030"];
				$instance->d060 = $records["D060"];
				$instance->d090 = $records["D090"];
				$instance->d120 = $records["D120"];
				$instance->d150 = $records["D150"];
				$instance->d180 = $records["D180"];
				$instance->dover = $records["DOver"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->basedoctype = $records["BaseDocType"];
				$instance->basedocno = $records["BaseDocNo"];
				$instance->basedocdate = $records["BaseDocDate"];
				$instance->discount = $records["Discount"];
				$instance->discvatrate = $records["DiscVATRate"];
				$instance->discvatamount = $records["DiscVATAmount"];
				$instance->termcode = $records["TermCode"];
				$instance->paymentdue = $records["PaymentDue"];
				$instance->paymentmethod = $records["PaymentMethod"];
				$instance->paymentref = $records["PaymentRef"];
				$instance->paidamount = $records["PaidAmount"];
				$instance->paymentstatus = $records["PaymentStatus"];
				$instance->previouspost = $records["Previouspost"];
				$instance->gltrace = $records["Gltrace"];
				$instance->targetdoctype = $records["TargetdocType"];
				$instance->targetdocno = $records["TargetDocNo"];
				$instance->paymentdate = $records["PaymentDate"];
				$instance->notepad = $records["Notepad"];
				$instance->paymentbank = $records["PaymentBank"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->postingdate = $records["PostingDate"];
				$instance->productiondate = $records["ProductionDate"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->dealrangedays = $records["DealRangeDays"];
				$instance->glsubaccno = $records["GLSubAccNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using VATCode
	*/
	public static function ini_VATCode($vatcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [DebtorType], [Account], [SubAccount], [SourceBranch], [TxNo], [TranDate], [AP], [DocType], [DocNo], [Reference], [TxTp], [Details], [Amount], [DrCr], [VATAmount], [VATRate], [VATCode], [Balance], [DCurr], [D030], [D060], [D090], [D120], [D150], [D180], [DOver], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [BaseDocType], [BaseDocNo], [BaseDocDate], [Discount], [DiscVATRate], [DiscVATAmount], [TermCode], [PaymentDue], [PaymentMethod], [PaymentRef], [PaidAmount], [PaymentStatus], [Previouspost], [Gltrace], [TargetdocType], [TargetDocNo], [PaymentDate], [Notepad], [PaymentBank], [GLAccNo], [PostingDate], [ProductionDate], [ReasonCode], [DealRangeDays], [GLSubAccNo] FROM [DEBTxan]  WHERE [VATCode]=:vatcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":vatcode", $vatcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->debtortype = $records["DebtorType"];
				$instance->account = $records["Account"];
				$instance->subaccount = $records["SubAccount"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->txno = $records["TxNo"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->doctype = $records["DocType"];
				$instance->docno = $records["DocNo"];
				$instance->reference = $records["Reference"];
				$instance->txtp = $records["TxTp"];
				$instance->details = $records["Details"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->vatamount = $records["VATAmount"];
				$instance->vatrate = $records["VATRate"];
				$instance->vatcode = $records["VATCode"];
				$instance->balance = $records["Balance"];
				$instance->dcurr = $records["DCurr"];
				$instance->d030 = $records["D030"];
				$instance->d060 = $records["D060"];
				$instance->d090 = $records["D090"];
				$instance->d120 = $records["D120"];
				$instance->d150 = $records["D150"];
				$instance->d180 = $records["D180"];
				$instance->dover = $records["DOver"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->basedoctype = $records["BaseDocType"];
				$instance->basedocno = $records["BaseDocNo"];
				$instance->basedocdate = $records["BaseDocDate"];
				$instance->discount = $records["Discount"];
				$instance->discvatrate = $records["DiscVATRate"];
				$instance->discvatamount = $records["DiscVATAmount"];
				$instance->termcode = $records["TermCode"];
				$instance->paymentdue = $records["PaymentDue"];
				$instance->paymentmethod = $records["PaymentMethod"];
				$instance->paymentref = $records["PaymentRef"];
				$instance->paidamount = $records["PaidAmount"];
				$instance->paymentstatus = $records["PaymentStatus"];
				$instance->previouspost = $records["Previouspost"];
				$instance->gltrace = $records["Gltrace"];
				$instance->targetdoctype = $records["TargetdocType"];
				$instance->targetdocno = $records["TargetDocNo"];
				$instance->paymentdate = $records["PaymentDate"];
				$instance->notepad = $records["Notepad"];
				$instance->paymentbank = $records["PaymentBank"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->postingdate = $records["PostingDate"];
				$instance->productiondate = $records["ProductionDate"];
				$instance->reasoncode = $records["ReasonCode"];
				$instance->dealrangedays = $records["DealRangeDays"];
				$instance->glsubaccno = $records["GLSubAccNo"];
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