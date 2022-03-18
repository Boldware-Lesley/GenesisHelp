<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:40
@Database			:	GENESIS-DEMO
@Table			:	STKTxan

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar RefNo" of type [nvarchar]
	"public float Qty" of type [float]
	"public float LinkQty" of type [float]
	"public float Price" of type [float]
	"public float Amount" of type [float]
	"public nvarchar DrCr" of type [nvarchar]
	"public float TaxAmount" of type [float]
	"public float TaxRate" of type [float]
	"public nvarchar TaxIndicator" of type [nvarchar]
	"public float LastCostExcl" of type [float]
	"public float LastCostIncl" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public nvarchar Adjustment" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public float Onhand" of type [float]
	"public nvarchar WH" of type [nvarchar]
	"public float RebateAmnt" of type [float]
	"public nvarchar Supervisor" of type [nvarchar]
	"public nvarchar BatchNo" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public float KitQty" of type [float]
	"public nvarchar Version" of type [nvarchar]
	"public int Units" of type [int]
	"public float RebateAvgExcl" of type [float]
	"public int lINEnO" of type [int]
	"public int Cases" of type [int]
*/
namespace genesis;


use PDO;

class Stktxan {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $txtp ;	
	public $trandate ;	
	public $ap ;	
	public $docno ;	
	public $refno ;	
	public $qty ;	
	public $linkqty ;	
	public $price ;	
	public $amount ;	
	public $drcr ;	
	public $taxamount ;	
	public $taxrate ;	
	public $taxindicator ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $adjustment ;	
	public $details ;	
	public $onhand ;	
	public $wh ;	
	public $rebateamnt ;	
	public $supervisor ;	
	public $batchno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $kitqty ;	
	public $version ;	
	public $units ;	
	public $rebateavgexcl ;	
	public $lineno ;	
	public $cases ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [TxTp], [TranDate], [AP], [DocNo], [RefNo], [Qty], [LinkQty], [Price], [Amount], [DrCr], [TaxAmount], [TaxRate], [TaxIndicator], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [Adjustment], [Details], [Onhand], [WH], [RebateAmnt], [Supervisor], [BatchNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [KitQty], [Version], [Units], [RebateAvgExcl], [lINEnO], [Cases] FROM [STKTxan]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->txtp = $records["TxTp"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->docno = $records["DocNo"];
				$instance->refno = $records["RefNo"];
				$instance->qty = $records["Qty"];
				$instance->linkqty = $records["LinkQty"];
				$instance->price = $records["Price"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->taxamount = $records["TaxAmount"];
				$instance->taxrate = $records["TaxRate"];
				$instance->taxindicator = $records["TaxIndicator"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->adjustment = $records["Adjustment"];
				$instance->details = $records["Details"];
				$instance->onhand = $records["Onhand"];
				$instance->wh = $records["WH"];
				$instance->rebateamnt = $records["RebateAmnt"];
				$instance->supervisor = $records["Supervisor"];
				$instance->batchno = $records["BatchNo"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->kitqty = $records["KitQty"];
				$instance->version = $records["Version"];
				$instance->units = $records["Units"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
				$instance->lineno = $records["lINEnO"];
				$instance->cases = $records["Cases"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using StockCode
	*/
	public static function ini_StockCode($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [TxTp], [TranDate], [AP], [DocNo], [RefNo], [Qty], [LinkQty], [Price], [Amount], [DrCr], [TaxAmount], [TaxRate], [TaxIndicator], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [Adjustment], [Details], [Onhand], [WH], [RebateAmnt], [Supervisor], [BatchNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [KitQty], [Version], [Units], [RebateAvgExcl], [lINEnO], [Cases] FROM [STKTxan]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->txtp = $records["TxTp"];
				$instance->trandate = $records["TranDate"];
				$instance->ap = $records["AP"];
				$instance->docno = $records["DocNo"];
				$instance->refno = $records["RefNo"];
				$instance->qty = $records["Qty"];
				$instance->linkqty = $records["LinkQty"];
				$instance->price = $records["Price"];
				$instance->amount = $records["Amount"];
				$instance->drcr = $records["DrCr"];
				$instance->taxamount = $records["TaxAmount"];
				$instance->taxrate = $records["TaxRate"];
				$instance->taxindicator = $records["TaxIndicator"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->adjustment = $records["Adjustment"];
				$instance->details = $records["Details"];
				$instance->onhand = $records["Onhand"];
				$instance->wh = $records["WH"];
				$instance->rebateamnt = $records["RebateAmnt"];
				$instance->supervisor = $records["Supervisor"];
				$instance->batchno = $records["BatchNo"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->kitqty = $records["KitQty"];
				$instance->version = $records["Version"];
				$instance->units = $records["Units"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
				$instance->lineno = $records["lINEnO"];
				$instance->cases = $records["Cases"];
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