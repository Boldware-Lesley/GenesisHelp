<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	DEBRecureHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Frequency" of type [nvarchar]
	"public int DayNo" of type [int]
	"public nvarchar AutoGenerate" of type [nvarchar]
	"public nvarchar LastGenDate" of type [nvarchar]
	"public nvarchar LastGenTime" of type [nvarchar]
	"public nvarchar LastGenTxTp" of type [nvarchar]
	"public nvarchar LastGenDocNo" of type [nvarchar]
	"public nvarchar VATIndicator" of type [nvarchar]
	"public float TotalVAT" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalTaxable" of type [float]
	"public float TotalExempt" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar SAPDocNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debrecurehdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $docno ;	
	public $account ;	
	public $name ;	
	public $status ;	
	public $frequency ;	
	public $dayno ;	
	public $autogenerate ;	
	public $lastgendate ;	
	public $lastgentime ;	
	public $lastgentxtp ;	
	public $lastgendocno ;	
	public $vatindicator ;	
	public $totalvat ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totaltaxable ;	
	public $totalexempt ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $sapdocno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [DocNo], [Account], [Name], [Status], [Frequency], [DayNo], [AutoGenerate], [LastGenDate], [LastGenTime], [LastGenTxTp], [LastGenDocNo], [VATIndicator], [TotalVAT], [TotalExcl], [TotalIncl], [TotalTaxable], [TotalExempt], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [SAPDocNo] FROM [DEBRecureHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->status = $records["Status"];
				$instance->frequency = $records["Frequency"];
				$instance->dayno = $records["DayNo"];
				$instance->autogenerate = $records["AutoGenerate"];
				$instance->lastgendate = $records["LastGenDate"];
				$instance->lastgentime = $records["LastGenTime"];
				$instance->lastgentxtp = $records["LastGenTxTp"];
				$instance->lastgendocno = $records["LastGenDocNo"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totaltaxable = $records["TotalTaxable"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->sapdocno = $records["SAPDocNo"];
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