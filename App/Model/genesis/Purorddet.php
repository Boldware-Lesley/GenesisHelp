<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	PUROrdDet

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public int ORDERNO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION1" of type [nvarchar]
	"public nvarchar DESCRIPTION2" of type [nvarchar]
	"public float QUANTITY" of type [float]
	"public float FREEQTY" of type [float]
	"public float RECVQTY" of type [float]
	"public float BALQTY" of type [float]
	"public float PRICEINCL" of type [float]
	"public float DISCOUNT" of type [float]
	"public float VAT" of type [float]
	"public float TOTALEXCL" of type [float]
	"public float TOTALINCL" of type [float]
	"public nvarchar VATINDICATOR" of type [nvarchar]
	"public nvarchar FREESTOCKIND" of type [nvarchar]
	"public float SELLEXCL" of type [float]
	"public float SELLINCL" of type [float]
	"public float AVGCOSTEXCL" of type [float]
	"public float AVGCOSTINCL" of type [float]
	"public float GRVQUANTITY" of type [float]
	"public float GRVCOSTEXCL" of type [float]
	"public float GRVCOSTINCL" of type [float]
	"public float TOTALUNITS" of type [float]
	"public float TOTALCASES" of type [float]
	"public float TOTALPALETTES" of type [float]
	"public float TOTALWEIGHT" of type [float]
	"public float DIMENSION" of type [float]
	"public nvarchar SERIALTRACK" of type [nvarchar]
	"public nvarchar BARCODE" of type [nvarchar]
	"public nvarchar SUPPCODE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public int LINENO" of type [int]
	"public nvarchar VATCODE" of type [nvarchar]
	"public float VATRATE" of type [float]
	"public float SUGGEXCL" of type [float]
	"public float SUGGINCL" of type [float]
	"public float BALANCEQTY" of type [float]
	"public nvarchar WH" of type [nvarchar]
	"public float RECFREEQTY" of type [float]
	"public float BALFREEQTY" of type [float]
	"public float PRICE" of type [float]
	"public float PRICEEXCL" of type [float]
	"public int Units" of type [int]
	"public float LinkQty" of type [float]
	"public float LinkFreeQty" of type [float]
	"public float LinkRecvQty" of type [float]
	"public float LinkBalQty" of type [float]
	"public float LinkRecvFreeQty" of type [float]
	"public float LinkBalFreeQty" of type [float]
	"public float DocClaimExcl" of type [float]
	"public float DocClaimIncl" of type [float]
	"public float LineClaimExcl" of type [float]
	"public float LineClaimIncl" of type [float]
	"public float ScanQty" of type [float]
	"public float ScanLinkQty" of type [float]
	"public float Onhand" of type [float]
	"public float MinQty" of type [float]
	"public float MaxQty" of type [float]
	"public float BackOrders" of type [float]
*/
namespace genesis;


use PDO;

class Purorddet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $subaccount ;	
	public $orderno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $quantity ;	
	public $freeqty ;	
	public $recvqty ;	
	public $balqty ;	
	public $priceincl ;	
	public $discount ;	
	public $vat ;	
	public $totalexcl ;	
	public $totalincl ;	
	public $vatindicator ;	
	public $freestockind ;	
	public $sellexcl ;	
	public $sellincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $grvquantity ;	
	public $grvcostexcl ;	
	public $grvcostincl ;	
	public $totalunits ;	
	public $totalcases ;	
	public $totalpalettes ;	
	public $totalweight ;	
	public $dimension ;	
	public $serialtrack ;	
	public $barcode ;	
	public $suppcode ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $lineno ;	
	public $vatcode ;	
	public $vatrate ;	
	public $suggexcl ;	
	public $suggincl ;	
	public $balanceqty ;	
	public $wh ;	
	public $recfreeqty ;	
	public $balfreeqty ;	
	public $price ;	
	public $priceexcl ;	
	public $units ;	
	public $linkqty ;	
	public $linkfreeqty ;	
	public $linkrecvqty ;	
	public $linkbalqty ;	
	public $linkrecvfreeqty ;	
	public $linkbalfreeqty ;	
	public $docclaimexcl ;	
	public $docclaimincl ;	
	public $lineclaimexcl ;	
	public $lineclaimincl ;	
	public $scanqty ;	
	public $scanlinkqty ;	
	public $onhand ;	
	public $minqty ;	
	public $maxqty ;	
	public $backorders ;
    public $buycostexcl; //{BuyCostExcl}
public $buycostincl; //{BuyCostIncl}
public $listcostexcl; //{ListCostExcl}
public $listcostincl; //{ListCostIncl}
public $supplier; //{Supplier}
public $periods; //{Periods}
public $perioddays; //{PeriodDays}
public $perioddays1; //{PeriodDays1}
public $perioddays2; //{PeriodDays2}
public $perioddays3; //{PeriodDays3}
public $perioddays4; //{PeriodDays4}
public $perioddays5; //{PeriodDays5}
public $periods1; //{Periods1}
public $periods2; //{Periods2}
public $periods3; //{Periods3}
public $periods4; //{Periods4}
public $periods5; //{Periods5}
public $periodorder; //{PeriodOrder}
public $periodavgcalcind;//PeriodAvgCalcInd
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [QUANTITY], [FREEQTY], [RECVQTY], [BALQTY], [PRICEINCL], [DISCOUNT], [VAT], [TOTALEXCL], [TOTALINCL], [VATINDICATOR], [FREESTOCKIND], [SELLEXCL], [SELLINCL], [AVGCOSTEXCL], [AVGCOSTINCL], [GRVQUANTITY], [GRVCOSTEXCL], [GRVCOSTINCL], [TOTALUNITS], [TOTALCASES], [TOTALPALETTES], [TOTALWEIGHT], [DIMENSION], [SERIALTRACK], [BARCODE], [SUPPCODE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [LINENO], [VATCODE], [VATRATE], [SUGGEXCL], [SUGGINCL], [BALANCEQTY], [WH], [RECFREEQTY], [BALFREEQTY], [PRICE], [PRICEEXCL], [Units], [LinkQty], [LinkFreeQty], [LinkRecvQty], [LinkBalQty], [LinkRecvFreeQty], [LinkBalFreeQty], [DocClaimExcl], [DocClaimIncl], [LineClaimExcl], [LineClaimIncl], [ScanQty], [ScanLinkQty], [Onhand], [MinQty], [MaxQty], [BackOrders] FROM [PUROrdDet]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->orderno = $records["ORDERNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->quantity = $records["QUANTITY"];
				$instance->freeqty = $records["FREEQTY"];
				$instance->recvqty = $records["RECVQTY"];
				$instance->balqty = $records["BALQTY"];
				$instance->priceincl = $records["PRICEINCL"];
				$instance->discount = $records["DISCOUNT"];
				$instance->vat = $records["VAT"];
				$instance->totalexcl = $records["TOTALEXCL"];
				$instance->totalincl = $records["TOTALINCL"];
				$instance->vatindicator = $records["VATINDICATOR"];
				$instance->freestockind = $records["FREESTOCKIND"];
				$instance->sellexcl = $records["SELLEXCL"];
				$instance->sellincl = $records["SELLINCL"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->avgcostincl = $records["AVGCOSTINCL"];
				$instance->grvquantity = $records["GRVQUANTITY"];
				$instance->grvcostexcl = $records["GRVCOSTEXCL"];
				$instance->grvcostincl = $records["GRVCOSTINCL"];
				$instance->totalunits = $records["TOTALUNITS"];
				$instance->totalcases = $records["TOTALCASES"];
				$instance->totalpalettes = $records["TOTALPALETTES"];
				$instance->totalweight = $records["TOTALWEIGHT"];
				$instance->dimension = $records["DIMENSION"];
				$instance->serialtrack = $records["SERIALTRACK"];
				$instance->barcode = $records["BARCODE"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->lineno = $records["LINENO"];
				$instance->vatcode = $records["VATCODE"];
				$instance->vatrate = $records["VATRATE"];
				$instance->suggexcl = $records["SUGGEXCL"];
				$instance->suggincl = $records["SUGGINCL"];
				$instance->balanceqty = $records["BALANCEQTY"];
				$instance->wh = $records["WH"];
				$instance->recfreeqty = $records["RECFREEQTY"];
				$instance->balfreeqty = $records["BALFREEQTY"];
				$instance->price = $records["PRICE"];
				$instance->priceexcl = $records["PRICEEXCL"];
				$instance->units = $records["Units"];
				$instance->linkqty = $records["LinkQty"];
				$instance->linkfreeqty = $records["LinkFreeQty"];
				$instance->linkrecvqty = $records["LinkRecvQty"];
				$instance->linkbalqty = $records["LinkBalQty"];
				$instance->linkrecvfreeqty = $records["LinkRecvFreeQty"];
				$instance->linkbalfreeqty = $records["LinkBalFreeQty"];
				$instance->docclaimexcl = $records["DocClaimExcl"];
				$instance->docclaimincl = $records["DocClaimIncl"];
				$instance->lineclaimexcl = $records["LineClaimExcl"];
				$instance->lineclaimincl = $records["LineClaimIncl"];
				$instance->scanqty = $records["ScanQty"];
				$instance->scanlinkqty = $records["ScanLinkQty"];
				$instance->onhand = $records["Onhand"];
				$instance->minqty = $records["MinQty"];
				$instance->maxqty = $records["MaxQty"];
				$instance->backorders = $records["BackOrders"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using STOCKCODE
	*/
	public static function ini_STOCKCODE($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [QUANTITY], [FREEQTY], [RECVQTY], [BALQTY], [PRICEINCL], [DISCOUNT], [VAT], [TOTALEXCL], [TOTALINCL], [VATINDICATOR], [FREESTOCKIND], [SELLEXCL], [SELLINCL], [AVGCOSTEXCL], [AVGCOSTINCL], [GRVQUANTITY], [GRVCOSTEXCL], [GRVCOSTINCL], [TOTALUNITS], [TOTALCASES], [TOTALPALETTES], [TOTALWEIGHT], [DIMENSION], [SERIALTRACK], [BARCODE], [SUPPCODE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [LINENO], [VATCODE], [VATRATE], [SUGGEXCL], [SUGGINCL], [BALANCEQTY], [WH], [RECFREEQTY], [BALFREEQTY], [PRICE], [PRICEEXCL], [Units], [LinkQty], [LinkFreeQty], [LinkRecvQty], [LinkBalQty], [LinkRecvFreeQty], [LinkBalFreeQty], [DocClaimExcl], [DocClaimIncl], [LineClaimExcl], [LineClaimIncl], [ScanQty], [ScanLinkQty], [Onhand], [MinQty], [MaxQty], [BackOrders] FROM [PUROrdDet]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->orderno = $records["ORDERNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description1 = $records["DESCRIPTION1"];
				$instance->description2 = $records["DESCRIPTION2"];
				$instance->quantity = $records["QUANTITY"];
				$instance->freeqty = $records["FREEQTY"];
				$instance->recvqty = $records["RECVQTY"];
				$instance->balqty = $records["BALQTY"];
				$instance->priceincl = $records["PRICEINCL"];
				$instance->discount = $records["DISCOUNT"];
				$instance->vat = $records["VAT"];
				$instance->totalexcl = $records["TOTALEXCL"];
				$instance->totalincl = $records["TOTALINCL"];
				$instance->vatindicator = $records["VATINDICATOR"];
				$instance->freestockind = $records["FREESTOCKIND"];
				$instance->sellexcl = $records["SELLEXCL"];
				$instance->sellincl = $records["SELLINCL"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->avgcostincl = $records["AVGCOSTINCL"];
				$instance->grvquantity = $records["GRVQUANTITY"];
				$instance->grvcostexcl = $records["GRVCOSTEXCL"];
				$instance->grvcostincl = $records["GRVCOSTINCL"];
				$instance->totalunits = $records["TOTALUNITS"];
				$instance->totalcases = $records["TOTALCASES"];
				$instance->totalpalettes = $records["TOTALPALETTES"];
				$instance->totalweight = $records["TOTALWEIGHT"];
				$instance->dimension = $records["DIMENSION"];
				$instance->serialtrack = $records["SERIALTRACK"];
				$instance->barcode = $records["BARCODE"];
				$instance->suppcode = $records["SUPPCODE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->lineno = $records["LINENO"];
				$instance->vatcode = $records["VATCODE"];
				$instance->vatrate = $records["VATRATE"];
				$instance->suggexcl = $records["SUGGEXCL"];
				$instance->suggincl = $records["SUGGINCL"];
				$instance->balanceqty = $records["BALANCEQTY"];
				$instance->wh = $records["WH"];
				$instance->recfreeqty = $records["RECFREEQTY"];
				$instance->balfreeqty = $records["BALFREEQTY"];
				$instance->price = $records["PRICE"];
				$instance->priceexcl = $records["PRICEEXCL"];
				$instance->units = $records["Units"];
				$instance->linkqty = $records["LinkQty"];
				$instance->linkfreeqty = $records["LinkFreeQty"];
				$instance->linkrecvqty = $records["LinkRecvQty"];
				$instance->linkbalqty = $records["LinkBalQty"];
				$instance->linkrecvfreeqty = $records["LinkRecvFreeQty"];
				$instance->linkbalfreeqty = $records["LinkBalFreeQty"];
				$instance->docclaimexcl = $records["DocClaimExcl"];
				$instance->docclaimincl = $records["DocClaimIncl"];
				$instance->lineclaimexcl = $records["LineClaimExcl"];
				$instance->lineclaimincl = $records["LineClaimIncl"];
				$instance->scanqty = $records["ScanQty"];
				$instance->scanlinkqty = $records["ScanLinkQty"];
				$instance->onhand = $records["Onhand"];
				$instance->minqty = $records["MinQty"];
				$instance->maxqty = $records["MaxQty"];
				$instance->backorders = $records["BackOrders"];
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