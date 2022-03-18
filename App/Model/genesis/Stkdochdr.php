<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	STKDocHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public int DocNo" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float DocVAT" of type [float]
	"public nvarchar FromBranch" of type [nvarchar]
	"public nvarchar ToBranch" of type [nvarchar]
	"public nvarchar FromWH" of type [nvarchar]
	"public nvarchar ToWH" of type [nvarchar]
	"public nvarchar PrintPrice" of type [nvarchar]
	"public nvarchar PriceCat" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar AuthUser" of type [nvarchar]
	"public nvarchar AuthDate" of type [nvarchar]
	"public nvarchar Authtime" of type [nvarchar]
	"public nvarchar AuthMacID" of type [nvarchar]
	"public nvarchar SapDocNo" of type [nvarchar]
	"public nvarchar StockTake" of type [nvarchar]
	"public nvarchar BaseTxTp" of type [nvarchar]
	"public nvarchar BaseDoc" of type [nvarchar]
	"public nvarchar BaseRef" of type [nvarchar]
	"public int AP" of type [int]
	"public int DetailLines" of type [int]
	"public float IBTRebate" of type [float]
	"public nvarchar Version" of type [nvarchar]
	"public nvarchar AdjReason" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkdochdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $docno ;	
	public $trandate ;	
	public $reference ;	
	public $details ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $docvat ;	
	public $frombranch ;	
	public $tobranch ;	
	public $fromwh ;	
	public $towh ;	
	public $printprice ;	
	public $pricecat ;	
	public $status ;	
	public $createuser ;	
	public $createdate ;	
	public $createtime ;	
	public $createmacid ;	
	public $authuser ;	
	public $authdate ;	
	public $authtime ;	
	public $authmacid ;	
	public $sapdocno ;	
	public $stocktake ;	
	public $basetxtp ;	
	public $basedoc ;	
	public $baseref ;	
	public $ap ;	
	public $detaillines ;	
	public $ibtrebate ;	
	public $version ;	
	public $adjreason ;	
	public $notes ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [DocNo], [TranDate], [Reference], [Details], [TotalExcl], [TotalIncl], [DocVAT], [FromBranch], [ToBranch], [FromWH], [ToWH], [PrintPrice], [PriceCat], [Status], [CreateUser], [CreateDate], [CreateTime], [CreateMacID], [AuthUser], [AuthDate], [Authtime], [AuthMacID], [SapDocNo], [StockTake], [BaseTxTp], [BaseDoc], [BaseRef], [AP], [DetailLines], [IBTRebate], [Version], [AdjReason], [Notes] FROM [STKDocHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->trandate = $records["TranDate"];
				$instance->reference = $records["Reference"];
				$instance->details = $records["Details"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->docvat = $records["DocVAT"];
				$instance->frombranch = $records["FromBranch"];
				$instance->tobranch = $records["ToBranch"];
				$instance->fromwh = $records["FromWH"];
				$instance->towh = $records["ToWH"];
				$instance->printprice = $records["PrintPrice"];
				$instance->pricecat = $records["PriceCat"];
				$instance->status = $records["Status"];
				$instance->createuser = $records["CreateUser"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->authuser = $records["AuthUser"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["Authtime"];
				$instance->authmacid = $records["AuthMacID"];
				$instance->sapdocno = $records["SapDocNo"];
				$instance->stocktake = $records["StockTake"];
				$instance->basetxtp = $records["BaseTxTp"];
				$instance->basedoc = $records["BaseDoc"];
				$instance->baseref = $records["BaseRef"];
				$instance->ap = $records["AP"];
				$instance->detaillines = $records["DetailLines"];
				$instance->ibtrebate = $records["IBTRebate"];
				$instance->version = $records["Version"];
				$instance->adjreason = $records["AdjReason"];
				$instance->notes = $records["Notes"];
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