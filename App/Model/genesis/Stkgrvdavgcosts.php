<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	STKGrvDAvgCosts

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar SubAccount" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public int GRVNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public int Units" of type [int]
	"public int CostDecimal" of type [int]
	"public float Onhand" of type [float]
	"public float LastCostExcl" of type [float]
	"public float LastCostIncl" of type [float]
	"public float AvgCostExcl" of type [float]
	"public float AvgCostIncl" of type [float]
	"public float BuyCostExcl" of type [float]
	"public float BuyCostIncl" of type [float]
	"public float RebateAvgExcl" of type [float]
	"public float RebateLastExcl" of type [float]
	"public float RecvQty" of type [float]
	"public float RecvFreeQty" of type [float]
	"public float RecvUnitQty" of type [float]
	"public float RecvUnitFreeQty" of type [float]
	"public float RecvCostExcl" of type [float]
	"public float RecvRebAmnt" of type [float]
	"public float RecvUnitCostEx" of type [float]
	"public float RecvUnitRebAmnt" of type [float]
	"public float RecvTotalExcl" of type [float]
	"public float CurrStkValue" of type [float]
	"public float CurrRebValue" of type [float]
	"public float NewOnhand" of type [float]
	"public float NewValue" of type [float]
	"public float NewRebValue" of type [float]
	"public float NewUnitAvgCost" of type [float]
	"public float NewUnitRebAmnt" of type [float]
	"public float CostedRebate" of type [float]
	"public float AvgCostAdjValue" of type [float]
*/
namespace genesis;


use PDO;

class Stkgrvdavgcosts {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $txtp ;	
	public $grvno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $units ;	
	public $costdecimal ;	
	public $onhand ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $buycostexcl ;	
	public $buycostincl ;	
	public $rebateavgexcl ;	
	public $rebatelastexcl ;	
	public $recvqty ;	
	public $recvfreeqty ;	
	public $recvunitqty ;	
	public $recvunitfreeqty ;	
	public $recvcostexcl ;	
	public $recvrebamnt ;	
	public $recvunitcostex ;	
	public $recvunitrebamnt ;	
	public $recvtotalexcl ;	
	public $currstkvalue ;	
	public $currrebvalue ;	
	public $newonhand ;	
	public $newvalue ;	
	public $newrebvalue ;	
	public $newunitavgcost ;	
	public $newunitrebamnt ;	
	public $costedrebate ;	
	public $avgcostadjvalue ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [SubAccount], [TxTp], [GRVNo], [StockCode], [LinkCode], [Description1], [Units], [CostDecimal], [Onhand], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [RebateAvgExcl], [RebateLastExcl], [RecvQty], [RecvFreeQty], [RecvUnitQty], [RecvUnitFreeQty], [RecvCostExcl], [RecvRebAmnt], [RecvUnitCostEx], [RecvUnitRebAmnt], [RecvTotalExcl], [CurrStkValue], [CurrRebValue], [NewOnhand], [NewValue], [NewRebValue], [NewUnitAvgCost], [NewUnitRebAmnt], [CostedRebate], [AvgCostAdjValue] FROM [STKGrvDAvgCosts]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->subaccount = $records["SubAccount"];
				$instance->txtp = $records["TxTp"];
				$instance->grvno = $records["GRVNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->units = $records["Units"];
				$instance->costdecimal = $records["CostDecimal"];
				$instance->onhand = $records["Onhand"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
				$instance->rebatelastexcl = $records["RebateLastExcl"];
				$instance->recvqty = $records["RecvQty"];
				$instance->recvfreeqty = $records["RecvFreeQty"];
				$instance->recvunitqty = $records["RecvUnitQty"];
				$instance->recvunitfreeqty = $records["RecvUnitFreeQty"];
				$instance->recvcostexcl = $records["RecvCostExcl"];
				$instance->recvrebamnt = $records["RecvRebAmnt"];
				$instance->recvunitcostex = $records["RecvUnitCostEx"];
				$instance->recvunitrebamnt = $records["RecvUnitRebAmnt"];
				$instance->recvtotalexcl = $records["RecvTotalExcl"];
				$instance->currstkvalue = $records["CurrStkValue"];
				$instance->currrebvalue = $records["CurrRebValue"];
				$instance->newonhand = $records["NewOnhand"];
				$instance->newvalue = $records["NewValue"];
				$instance->newrebvalue = $records["NewRebValue"];
				$instance->newunitavgcost = $records["NewUnitAvgCost"];
				$instance->newunitrebamnt = $records["NewUnitRebAmnt"];
				$instance->costedrebate = $records["CostedRebate"];
				$instance->avgcostadjvalue = $records["AvgCostAdjValue"];
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [SubAccount], [TxTp], [GRVNo], [StockCode], [LinkCode], [Description1], [Units], [CostDecimal], [Onhand], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], [BuyCostExcl], [BuyCostIncl], [RebateAvgExcl], [RebateLastExcl], [RecvQty], [RecvFreeQty], [RecvUnitQty], [RecvUnitFreeQty], [RecvCostExcl], [RecvRebAmnt], [RecvUnitCostEx], [RecvUnitRebAmnt], [RecvTotalExcl], [CurrStkValue], [CurrRebValue], [NewOnhand], [NewValue], [NewRebValue], [NewUnitAvgCost], [NewUnitRebAmnt], [CostedRebate], [AvgCostAdjValue] FROM [STKGrvDAvgCosts]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->subaccount = $records["SubAccount"];
				$instance->txtp = $records["TxTp"];
				$instance->grvno = $records["GRVNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->units = $records["Units"];
				$instance->costdecimal = $records["CostDecimal"];
				$instance->onhand = $records["Onhand"];
				$instance->lastcostexcl = $records["LastCostExcl"];
				$instance->lastcostincl = $records["LastCostIncl"];
				$instance->avgcostexcl = $records["AvgCostExcl"];
				$instance->avgcostincl = $records["AvgCostIncl"];
				$instance->buycostexcl = $records["BuyCostExcl"];
				$instance->buycostincl = $records["BuyCostIncl"];
				$instance->rebateavgexcl = $records["RebateAvgExcl"];
				$instance->rebatelastexcl = $records["RebateLastExcl"];
				$instance->recvqty = $records["RecvQty"];
				$instance->recvfreeqty = $records["RecvFreeQty"];
				$instance->recvunitqty = $records["RecvUnitQty"];
				$instance->recvunitfreeqty = $records["RecvUnitFreeQty"];
				$instance->recvcostexcl = $records["RecvCostExcl"];
				$instance->recvrebamnt = $records["RecvRebAmnt"];
				$instance->recvunitcostex = $records["RecvUnitCostEx"];
				$instance->recvunitrebamnt = $records["RecvUnitRebAmnt"];
				$instance->recvtotalexcl = $records["RecvTotalExcl"];
				$instance->currstkvalue = $records["CurrStkValue"];
				$instance->currrebvalue = $records["CurrRebValue"];
				$instance->newonhand = $records["NewOnhand"];
				$instance->newvalue = $records["NewValue"];
				$instance->newrebvalue = $records["NewRebValue"];
				$instance->newunitavgcost = $records["NewUnitAvgCost"];
				$instance->newunitrebamnt = $records["NewUnitRebAmnt"];
				$instance->costedrebate = $records["CostedRebate"];
				$instance->avgcostadjvalue = $records["AvgCostAdjValue"];
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
			$res = $this->description1;
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