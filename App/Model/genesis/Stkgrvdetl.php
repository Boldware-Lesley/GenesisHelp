<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	STKGrvDetl

[@Descriptions]
Class is using the following global variables:
"public int RECID" of type [int]
"public nvarchar CO" of type [nvarchar]
"public nvarchar BRANCH" of type [nvarchar]
"public nvarchar ACCOUNT" of type [nvarchar]
"public nvarchar SUBACCOUNT" of type [nvarchar]
"public nvarchar TXTP" of type [nvarchar]
"public int GRVNO" of type [int]
"public int LINENO" of type [int]
"public nvarchar STOCKCODE" of type [nvarchar]
"public nvarchar LINKCODE" of type [nvarchar]
"public nvarchar DESCRIPTION1" of type [nvarchar]
"public nvarchar DESCRIPTION2" of type [nvarchar]
"public nvarchar STOCKTYPE" of type [nvarchar]
"public nvarchar WH" of type [nvarchar]
"public float RECVQTY" of type [float]
"public float RECVFREEQTY" of type [float]
"public float RECVPRICE" of type [float]
"public float RECVDISCOUNT" of type [float]
"public float RECVTOTAL" of type [float]
"public float RECVTAX" of type [float]
"public float RECVNETUNIT" of type [float]
"public float RECVNNET" of type [float]
"public float TAXRATE" of type [float]
"public float UNITS" of type [float]
"public nvarchar RECVTAXCODE" of type [nvarchar]
"public float RECVTOTALINCL" of type [float]
"public float RECVDOCCHARGES" of type [float]
"public float RECVDOCDISC" of type [float]
"public nvarchar PACKSIZE" of type [nvarchar]
"public nvarchar SUPPCODE" of type [nvarchar]
"public nvarchar BARCODE" of type [nvarchar]
"public float ORDERQTY" of type [float]
"public float ORDERFREEQTY" of type [float]
"public float ORDERPRICE" of type [float]
"public float INVQTY" of type [float]
"public float INVFREEQTY" of type [float]
"public float INVPRICE" of type [float]
"public float INVTOTAL" of type [float]
"public float INVDISCOUNT" of type [float]
"public float INVTAX" of type [float]
"public float SQMBOX" of type [float]
"public float CASES" of type [float]
"public nvarchar FOREIGNCCY" of type [nvarchar]
"public float RATE" of type [float]
"public float REBATECOST" of type [float]
"public float REBATENCOST" of type [float]
"public nvarchar INPUTRTOTAL" of type [nvarchar]
"public nvarchar INPUTITOTAL" of type [nvarchar]
"public float LINKQTY" of type [float]
"public float LINKCODENETCOST" of type [float]
"public nvarchar DTODATE" of type [nvarchar]
"public nvarchar DTOTIME" of type [nvarchar]
"public nvarchar DTOUSER" of type [nvarchar]
"public nvarchar DTOMACID" of type [nvarchar]
"public nvarchar BASETYPE" of type [nvarchar]
"public nvarchar BASEREF" of type [nvarchar]
"public int BASELINE" of type [int]
"public int AP" of type [int]
"public nvarchar GRVDATE" of type [nvarchar]
"public nvarchar TAXINDICATOR" of type [nvarchar]
"public nvarchar ReturnLine" of type [nvarchar]
"public float INVLinkQty" of type [float]
"public float RECVFreeLinkQty" of type [float]
"public float INVFreeLinkQty" of type [float]
"public float DocCharges" of type [float]
"public float DocDiscounts" of type [float]
"public nvarchar SerialTrack" of type [nvarchar]
"public nvarchar VirtualCard" of type [nvarchar]
"public float DocTallyExcl" of type [float]
"public float DocTallyIncl" of type [float]
"public float LineTallyExcl" of type [float]
"public float LineTallyIncl" of type [float]
"public float TonnageRebCosted" of type [float]
"public float TonnageRebNonCosted" of type [float]
"public float InvWeight" of type [float]
"public float RecvWeight" of type [float]
"public nvarchar ScaleItem" of type [nvarchar]
"public nvarchar ScaleType" of type [nvarchar]
"public int InvCases" of type [int]
"public int RecvCases" of type [int]
"public nvarchar Status" of type [nvarchar]
"public nvarchar ReturnReason" of type [nvarchar]
"public int QtyDecimal" of type [int]
"public int CostDecimal" of type [int]
 */
namespace genesis;


use Exception;
use PDO;

class Stkgrvdetl {

    /*BEGIN <<Private Variables>> */

    public $recid ;
    public $co ;
    public $branch ;
    public $account ;
    public $subaccount ;
    public $txtp ;
    public $grvno ;
    public $lineno ;
    public $stockcode ;
    public $linkcode ;
    public $description1 ;
    public $description2 ;
    public $stocktype ;
    public $wh ;
    public $recvqty ;
    public $recvfreeqty ;
    public $recvprice ;
    public $recvdiscount ;
    public $recvtotal ;
    public $recvtax ;
    public $recvnetunit ;
    public $recvnnet ;
    public $taxrate ;
    public $units ;
    public $recvtaxcode ;
    public $recvtotalincl ;
    public $recvdoccharges ;
    public $recvdocdisc ;
    public $packsize ;
    public $suppcode ;
    public $barcode ;
    public $orderqty ;
    public $orderfreeqty ;
    public $orderprice ;
    public $invqty ;
    public $invfreeqty ;
    public $invprice ;
    public $invtotal ;
    public $invdiscount ;
    public $invtax ;
    public $sqmbox ;
    public $cases ;
    public $foreignccy ;
    public $rate ;
    public $rebatecost ;
    public $rebatencost ;
    public $inputrtotal ;
    public $inputitotal ;
    public $linkqty ;
    public $linkcodenetcost ;
    public $dtodate ;
    public $dtotime ;
    public $dtouser ;
    public $dtomacid ;
    public $basetype ;
    public $baseref ;
    public $baseline ;
    public $ap ;
    public $grvdate ;
    public $taxindicator ;
    public $returnline ;
    public $invlinkqty ;
    public $recvfreelinkqty ;
    public $invfreelinkqty ;
    public $doccharges ;
    public $docdiscounts ;
    public $serialtrack ;
    public $virtualcard ;
    public $doctallyexcl ;
    public $doctallyincl ;
    public $linetallyexcl ;
    public $linetallyincl ;
    public $tonnagerebcosted ;
    public $tonnagerebnoncosted ;
    public $invweight ;
    public $recvweight ;
    public $scaleitem ;
    public $scaletype ;
    public $invcases ;
    public $recvcases ;
    public $status ;
    public $returnreason ;
    public $qtydecimal ;
    public $costdecimal ;


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
            $query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [STOCKTYPE], [WH], [RECVQTY], [RECVFREEQTY], [RECVPRICE], [RECVDISCOUNT], [RECVTOTAL], [RECVTAX], [RECVNETUNIT], [RECVNNET], [TAXRATE], [UNITS], [RECVTAXCODE], [RECVTOTALINCL], [RECVDOCCHARGES], [RECVDOCDISC], [PACKSIZE], [SUPPCODE], [BARCODE], [ORDERQTY], [ORDERFREEQTY], [ORDERPRICE], [INVQTY], [INVFREEQTY], [INVPRICE], [INVTOTAL], [INVDISCOUNT], [INVTAX], [SQMBOX], [CASES], [FOREIGNCCY], [RATE], [REBATECOST], [REBATENCOST], [INPUTRTOTAL], [INPUTITOTAL], [LINKQTY], [LINKCODENETCOST], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [BASETYPE], [BASEREF], [BASELINE], [AP], [GRVDATE], [TAXINDICATOR], [ReturnLine], [INVLinkQty], [RECVFreeLinkQty], [INVFreeLinkQty], [DocCharges], [DocDiscounts], [SerialTrack], [VirtualCard], [DocTallyExcl], [DocTallyIncl], [LineTallyExcl], [LineTallyIncl], [TonnageRebCosted], [TonnageRebNonCosted], [InvWeight], [RecvWeight], [ScaleItem], [ScaleType], [InvCases], [RecvCases], [Status], [ReturnReason], [QtyDecimal], [CostDecimal] FROM [STKGrvDetl]  WHERE [RECID]=:recid  ";
            $stmt = $conn->getStatement($query);
            $stmt->bindParam(":recid", $recid);
            $stmt->execute();
            while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
                $instance->recid = $records["RECID"];
                $instance->co = $records["CO"];
                $instance->branch = $records["BRANCH"];
                $instance->account = $records["ACCOUNT"];
                $instance->subaccount = $records["SUBACCOUNT"];
                $instance->txtp = $records["TXTP"];
                $instance->grvno = $records["GRVNO"];
                $instance->lineno = $records["LINENO"];
                $instance->stockcode = $records["STOCKCODE"];
                $instance->linkcode = $records["LINKCODE"];
                $instance->description1 = $records["DESCRIPTION1"];
                $instance->description2 = $records["DESCRIPTION2"];
                $instance->stocktype = $records["STOCKTYPE"];
                $instance->wh = $records["WH"];
                $instance->recvqty = $records["RECVQTY"];
                $instance->recvfreeqty = $records["RECVFREEQTY"];
                $instance->recvprice = $records["RECVPRICE"];
                $instance->recvdiscount = $records["RECVDISCOUNT"];
                $instance->recvtotal = $records["RECVTOTAL"];
                $instance->recvtax = $records["RECVTAX"];
                $instance->recvnetunit = $records["RECVNETUNIT"];
                $instance->recvnnet = $records["RECVNNET"];
                $instance->taxrate = $records["TAXRATE"];
                $instance->units = $records["UNITS"];
                $instance->recvtaxcode = $records["RECVTAXCODE"];
                $instance->recvtotalincl = $records["RECVTOTALINCL"];
                $instance->recvdoccharges = $records["RECVDOCCHARGES"];
                $instance->recvdocdisc = $records["RECVDOCDISC"];
                $instance->packsize = $records["PACKSIZE"];
                $instance->suppcode = $records["SUPPCODE"];
                $instance->barcode = $records["BARCODE"];
                $instance->orderqty = $records["ORDERQTY"];
                $instance->orderfreeqty = $records["ORDERFREEQTY"];
                $instance->orderprice = $records["ORDERPRICE"];
                $instance->invqty = $records["INVQTY"];
                $instance->invfreeqty = $records["INVFREEQTY"];
                $instance->invprice = $records["INVPRICE"];
                $instance->invtotal = $records["INVTOTAL"];
                $instance->invdiscount = $records["INVDISCOUNT"];
                $instance->invtax = $records["INVTAX"];
                $instance->sqmbox = $records["SQMBOX"];
                $instance->cases = $records["CASES"];
                $instance->foreignccy = $records["FOREIGNCCY"];
                $instance->rate = $records["RATE"];
                $instance->rebatecost = $records["REBATECOST"];
                $instance->rebatencost = $records["REBATENCOST"];
                $instance->inputrtotal = $records["INPUTRTOTAL"];
                $instance->inputitotal = $records["INPUTITOTAL"];
                $instance->linkqty = $records["LINKQTY"];
                $instance->linkcodenetcost = $records["LINKCODENETCOST"];
                $instance->dtodate = $records["DTODATE"];
                $instance->dtotime = $records["DTOTIME"];
                $instance->dtouser = $records["DTOUSER"];
                $instance->dtomacid = $records["DTOMACID"];
                $instance->basetype = $records["BASETYPE"];
                $instance->baseref = $records["BASEREF"];
                $instance->baseline = $records["BASELINE"];
                $instance->ap = $records["AP"];
                $instance->grvdate = $records["GRVDATE"];
                $instance->taxindicator = $records["TAXINDICATOR"];
                $instance->returnline = $records["ReturnLine"];
                $instance->invlinkqty = $records["INVLinkQty"];
                $instance->recvfreelinkqty = $records["RECVFreeLinkQty"];
                $instance->invfreelinkqty = $records["INVFreeLinkQty"];
                $instance->doccharges = $records["DocCharges"];
                $instance->docdiscounts = $records["DocDiscounts"];
                $instance->serialtrack = $records["SerialTrack"];
                $instance->virtualcard = $records["VirtualCard"];
                $instance->doctallyexcl = $records["DocTallyExcl"];
                $instance->doctallyincl = $records["DocTallyIncl"];
                $instance->linetallyexcl = $records["LineTallyExcl"];
                $instance->linetallyincl = $records["LineTallyIncl"];
                $instance->tonnagerebcosted = $records["TonnageRebCosted"];
                $instance->tonnagerebnoncosted = $records["TonnageRebNonCosted"];
                $instance->invweight = $records["InvWeight"];
                $instance->recvweight = $records["RecvWeight"];
                $instance->scaleitem = $records["ScaleItem"];
                $instance->scaletype = $records["ScaleType"];
                $instance->invcases = $records["InvCases"];
                $instance->recvcases = $records["RecvCases"];
                $instance->status = $records["Status"];
                $instance->returnreason = $records["ReturnReason"];
                $instance->qtydecimal = $records["QtyDecimal"];
                $instance->costdecimal = $records["CostDecimal"];
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
            $query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [STOCKTYPE], [WH], [RECVQTY], [RECVFREEQTY], [RECVPRICE], [RECVDISCOUNT], [RECVTOTAL], [RECVTAX], [RECVNETUNIT], [RECVNNET], [TAXRATE], [UNITS], [RECVTAXCODE], [RECVTOTALINCL], [RECVDOCCHARGES], [RECVDOCDISC], [PACKSIZE], [SUPPCODE], [BARCODE], [ORDERQTY], [ORDERFREEQTY], [ORDERPRICE], [INVQTY], [INVFREEQTY], [INVPRICE], [INVTOTAL], [INVDISCOUNT], [INVTAX], [SQMBOX], [CASES], [FOREIGNCCY], [RATE], [REBATECOST], [REBATENCOST], [INPUTRTOTAL], [INPUTITOTAL], [LINKQTY], [LINKCODENETCOST], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [BASETYPE], [BASEREF], [BASELINE], [AP], [GRVDATE], [TAXINDICATOR], [ReturnLine], [INVLinkQty], [RECVFreeLinkQty], [INVFreeLinkQty], [DocCharges], [DocDiscounts], [SerialTrack], [VirtualCard], [DocTallyExcl], [DocTallyIncl], [LineTallyExcl], [LineTallyIncl], [TonnageRebCosted], [TonnageRebNonCosted], [InvWeight], [RecvWeight], [ScaleItem], [ScaleType], [InvCases], [RecvCases], [Status], [ReturnReason], [QtyDecimal], [CostDecimal] FROM [STKGrvDetl]  WHERE [STOCKCODE]=:stockcode  ";
            $stmt = $conn->getStatement($query);
            $stmt->bindParam(":stockcode", $stockcode);
            $stmt->execute();
            while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
                $instance->recid = $records["RECID"];
                $instance->co = $records["CO"];
                $instance->branch = $records["BRANCH"];
                $instance->account = $records["ACCOUNT"];
                $instance->subaccount = $records["SUBACCOUNT"];
                $instance->txtp = $records["TXTP"];
                $instance->grvno = $records["GRVNO"];
                $instance->lineno = $records["LINENO"];
                $instance->stockcode = $records["STOCKCODE"];
                $instance->linkcode = $records["LINKCODE"];
                $instance->description1 = $records["DESCRIPTION1"];
                $instance->description2 = $records["DESCRIPTION2"];
                $instance->stocktype = $records["STOCKTYPE"];
                $instance->wh = $records["WH"];
                $instance->recvqty = $records["RECVQTY"];
                $instance->recvfreeqty = $records["RECVFREEQTY"];
                $instance->recvprice = $records["RECVPRICE"];
                $instance->recvdiscount = $records["RECVDISCOUNT"];
                $instance->recvtotal = $records["RECVTOTAL"];
                $instance->recvtax = $records["RECVTAX"];
                $instance->recvnetunit = $records["RECVNETUNIT"];
                $instance->recvnnet = $records["RECVNNET"];
                $instance->taxrate = $records["TAXRATE"];
                $instance->units = $records["UNITS"];
                $instance->recvtaxcode = $records["RECVTAXCODE"];
                $instance->recvtotalincl = $records["RECVTOTALINCL"];
                $instance->recvdoccharges = $records["RECVDOCCHARGES"];
                $instance->recvdocdisc = $records["RECVDOCDISC"];
                $instance->packsize = $records["PACKSIZE"];
                $instance->suppcode = $records["SUPPCODE"];
                $instance->barcode = $records["BARCODE"];
                $instance->orderqty = $records["ORDERQTY"];
                $instance->orderfreeqty = $records["ORDERFREEQTY"];
                $instance->orderprice = $records["ORDERPRICE"];
                $instance->invqty = $records["INVQTY"];
                $instance->invfreeqty = $records["INVFREEQTY"];
                $instance->invprice = $records["INVPRICE"];
                $instance->invtotal = $records["INVTOTAL"];
                $instance->invdiscount = $records["INVDISCOUNT"];
                $instance->invtax = $records["INVTAX"];
                $instance->sqmbox = $records["SQMBOX"];
                $instance->cases = $records["CASES"];
                $instance->foreignccy = $records["FOREIGNCCY"];
                $instance->rate = $records["RATE"];
                $instance->rebatecost = $records["REBATECOST"];
                $instance->rebatencost = $records["REBATENCOST"];
                $instance->inputrtotal = $records["INPUTRTOTAL"];
                $instance->inputitotal = $records["INPUTITOTAL"];
                $instance->linkqty = $records["LINKQTY"];
                $instance->linkcodenetcost = $records["LINKCODENETCOST"];
                $instance->dtodate = $records["DTODATE"];
                $instance->dtotime = $records["DTOTIME"];
                $instance->dtouser = $records["DTOUSER"];
                $instance->dtomacid = $records["DTOMACID"];
                $instance->basetype = $records["BASETYPE"];
                $instance->baseref = $records["BASEREF"];
                $instance->baseline = $records["BASELINE"];
                $instance->ap = $records["AP"];
                $instance->grvdate = $records["GRVDATE"];
                $instance->taxindicator = $records["TAXINDICATOR"];
                $instance->returnline = $records["ReturnLine"];
                $instance->invlinkqty = $records["INVLinkQty"];
                $instance->recvfreelinkqty = $records["RECVFreeLinkQty"];
                $instance->invfreelinkqty = $records["INVFreeLinkQty"];
                $instance->doccharges = $records["DocCharges"];
                $instance->docdiscounts = $records["DocDiscounts"];
                $instance->serialtrack = $records["SerialTrack"];
                $instance->virtualcard = $records["VirtualCard"];
                $instance->doctallyexcl = $records["DocTallyExcl"];
                $instance->doctallyincl = $records["DocTallyIncl"];
                $instance->linetallyexcl = $records["LineTallyExcl"];
                $instance->linetallyincl = $records["LineTallyIncl"];
                $instance->tonnagerebcosted = $records["TonnageRebCosted"];
                $instance->tonnagerebnoncosted = $records["TonnageRebNonCosted"];
                $instance->invweight = $records["InvWeight"];
                $instance->recvweight = $records["RecvWeight"];
                $instance->scaleitem = $records["ScaleItem"];
                $instance->scaletype = $records["ScaleType"];
                $instance->invcases = $records["InvCases"];
                $instance->recvcases = $records["RecvCases"];
                $instance->status = $records["Status"];
                $instance->returnreason = $records["ReturnReason"];
                $instance->qtydecimal = $records["QtyDecimal"];
                $instance->costdecimal = $records["CostDecimal"];
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