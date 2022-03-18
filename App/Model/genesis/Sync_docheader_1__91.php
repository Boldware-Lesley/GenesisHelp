<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	SYNC_DOCHeader_1__91

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TranTime" of type [nvarchar]
	"public float DocDiscount" of type [float]
	"public float TotalVAT" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalIncl" of type [float]
	"public float TotalTaxable" of type [float]
	"public float TotalExempt" of type [float]
	"public float TotalCostExcl" of type [float]
	"public float TotalCostIncl" of type [float]
	"public float Profit" of type [float]
	"public int AP" of type [int]
	"public float TotalLineDisc" of type [float]
	"public float TotalRebAmnt" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public int LoyaltyPnts" of type [int]
	"public nvarchar LicenseNo" of type [nvarchar]
	"public nvarchar LicenseExpDate" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sync_docheader_1__91 {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $docno ;	
	public $account ;	
	public $trandate ;	
	public $trantime ;	
	public $docdiscount ;	
	public $totalvat ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $totaltaxable ;	
	public $totalexempt ;	
	public $totalcostexcl ;	
	public $totalcostincl ;	
	public $profit ;	
	public $ap ;	
	public $totallinedisc ;	
	public $totalrebamnt ;	
	public $drcr ;	
	public $loyaltypnts ;	
	public $licenseno ;	
	public $licenseexpdate ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [DocNo], [Account], [TranDate], [TranTime], [DocDiscount], [TotalVAT], [TotalExcl], [TotalIncl], [TotalTaxable], [TotalExempt], [TotalCostExcl], [TotalCostIncl], [Profit], [AP], [TotalLineDisc], [TotalRebAmnt], [DrCr], [LoyaltyPnts], [LicenseNo], [LicenseExpDate] FROM [SYNC_DOCHeader_1__91]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->trandate = $records["TranDate"];
				$instance->trantime = $records["TranTime"];
				$instance->docdiscount = $records["DocDiscount"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totaltaxable = $records["TotalTaxable"];
				$instance->totalexempt = $records["TotalExempt"];
				$instance->totalcostexcl = $records["TotalCostExcl"];
				$instance->totalcostincl = $records["TotalCostIncl"];
				$instance->profit = $records["Profit"];
				$instance->ap = $records["AP"];
				$instance->totallinedisc = $records["TotalLineDisc"];
				$instance->totalrebamnt = $records["TotalRebAmnt"];
				$instance->drcr = $records["DrCr"];
				$instance->loyaltypnts = $records["LoyaltyPnts"];
				$instance->licenseno = $records["LicenseNo"];
				$instance->licenseexpdate = $records["LicenseExpDate"];
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