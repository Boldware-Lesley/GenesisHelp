<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	STKGrvHead

[@Descriptions]
Class is using the following global variables:
"public int RECID" of type [int]
"public nvarchar CO" of type [nvarchar]
"public nvarchar BRANCH" of type [nvarchar]
"public nvarchar ACCOUNT" of type [nvarchar]
"public nvarchar SUBACCOUNT" of type [nvarchar]
"public nvarchar TXTP" of type [nvarchar]
"public int GRVNO" of type [int]
"public nvarchar GRVDATE" of type [nvarchar]
"public nvarchar DOCNO" of type [nvarchar]
"public nvarchar DOCDATE" of type [nvarchar]
"public nvarchar DOCTYPE" of type [nvarchar]
"public nvarchar DOCREFERENCE" of type [nvarchar]
"public float DOCTOTALINCL" of type [float]
"public float DOCTOTALEXCL" of type [float]
"public float DOCTAX" of type [float]
"public float GRVTOTALEXCL" of type [float]
"public float GRVTOTALINCL" of type [float]
"public float GRVTAX" of type [float]
"public float GRVDISCOUNT" of type [float]
"public nvarchar CREDITORPOST" of type [nvarchar]
"public nvarchar TAXINDICATOR" of type [nvarchar]
"public nvarchar CURRENCY" of type [nvarchar]
"public float RATE" of type [float]
"public int ORDERNO" of type [int]
"public nvarchar WH" of type [nvarchar]
"public nvarchar DRIVER" of type [nvarchar]
"public nvarchar TRUCKREGNO" of type [nvarchar]
"public nvarchar GRVSTATUS" of type [nvarchar]
"public nvarchar CREATEDATE" of type [nvarchar]
"public nvarchar CREATETIME" of type [nvarchar]
"public nvarchar CREATEUSER" of type [nvarchar]
"public nvarchar CREATEMACID" of type [nvarchar]
"public nvarchar AUTHUSER" of type [nvarchar]
"public nvarchar AUTHDATE" of type [nvarchar]
"public nvarchar AUTHTIME" of type [nvarchar]
"public nvarchar AUTHMACID" of type [nvarchar]
"public float INVTOTAL" of type [float]
"public float INVTAX" of type [float]
"public nvarchar SAPDOCNO" of type [nvarchar]
"public nvarchar POSTDATE" of type [nvarchar]
"public nvarchar DUEDATE" of type [nvarchar]
"public nvarchar INVDATE" of type [nvarchar]
"public int AP" of type [int]
"public int DETAILLINES" of type [int]
"public nvarchar VERSION" of type [nvarchar]
"public nvarchar InUse" of type [nvarchar]
"public nvarchar FreeStockGRV" of type [nvarchar]
"public float GRVTallyExcl" of type [float]
"public float GRVTallyIncl" of type [float]
"public float GRVReturnsExcl" of type [float]
"public float GRVReturnsVAT" of type [float]
"public float Tonnage" of type [float]
"public float TonnageRebExcl" of type [float]
"public float TonnageRebIncl" of type [float]
"public nvarchar InterCO" of type [nvarchar]
 */
namespace genesis;


use PDO;

class Stkgrvhead {

    /*BEGIN <<Private Variables>> */

    public $recid ;
    public $co ;
    public $branch ;
    public $account ;
    public $subaccount ;
    public $txtp ;
    public $grvno ;
    public $grvdate ;
    public $docno ;
    public $docdate ;
    public $doctype ;
    public $docreference ;
    public $doctotalincl ;
    public $doctotalexcl ;
    public $doctax ;
    public $grvtotalexcl ;
    public $grvtotalincl ;
    public $grvtax ;
    public $grvdiscount ;
    public $creditorpost ;
    public $taxindicator ;
    public $currency ;
    public $rate ;
    public $orderno ;
    public $wh ;
    public $driver ;
    public $truckregno ;
    public $grvstatus ;
    public $createdate ;
    public $createtime ;
    public $createuser ;
    public $createmacid ;
    public $authuser ;
    public $authdate ;
    public $authtime ;
    public $authmacid ;
    public $invtotal ;
    public $invtax ;
    public $sapdocno ;
    public $postdate ;
    public $duedate ;
    public $invdate ;
    public $ap ;
    public $detaillines ;
    public $version ;
    public $inuse ;
    public $freestockgrv ;
    public $grvtallyexcl ;
    public $grvtallyincl ;
    public $grvreturnsexcl ;
    public $grvreturnsvat ;
    public $tonnage ;
    public $tonnagerebexcl ;
    public $tonnagerebincl ;
    public $interco ;


    /*END <<Private Variables>> */

    /*BEGIN <<Constructors>> */


    /**
    Main Constructor For Declearing Using ID
     */
    public static function ini_RECID($conn,$recid) {
        $instance = new self();
        try {

            $query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [TXTP], [GRVNO], [GRVDATE], [DOCNO], [DOCDATE], [DOCTYPE], [DOCREFERENCE], [DOCTOTALINCL], [DOCTOTALEXCL], [DOCTAX], [GRVTOTALEXCL], [GRVTOTALINCL], [GRVTAX], [GRVDISCOUNT], [CREDITORPOST], [TAXINDICATOR], [CURRENCY], [RATE], [ORDERNO], [WH], [DRIVER], [TRUCKREGNO], [GRVSTATUS], [CREATEDATE], [CREATETIME], [CREATEUSER], [CREATEMACID], [AUTHUSER], [AUTHDATE], [AUTHTIME], [AUTHMACID], [INVTOTAL], [INVTAX], [SAPDOCNO], [POSTDATE], [DUEDATE], [INVDATE], [AP], [DETAILLINES], [VERSION], [InUse], [FreeStockGRV], [GRVTallyExcl], [GRVTallyIncl], [GRVReturnsExcl], [GRVReturnsVAT], [Tonnage], [TonnageRebExcl], [TonnageRebIncl], [InterCO] FROM [STKGrvHead]  WHERE [RECID]=:recid  ";
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
                $instance->grvdate = $records["GRVDATE"];
                $instance->docno = $records["DOCNO"];
                $instance->docdate = $records["DOCDATE"];
                $instance->doctype = $records["DOCTYPE"];
                $instance->docreference = $records["DOCREFERENCE"];
                $instance->doctotalincl = $records["DOCTOTALINCL"];
                $instance->doctotalexcl = $records["DOCTOTALEXCL"];
                $instance->doctax = $records["DOCTAX"];
                $instance->grvtotalexcl = $records["GRVTOTALEXCL"];
                $instance->grvtotalincl = $records["GRVTOTALINCL"];
                $instance->grvtax = $records["GRVTAX"];
                $instance->grvdiscount = $records["GRVDISCOUNT"];
                $instance->creditorpost = $records["CREDITORPOST"];
                $instance->taxindicator = $records["TAXINDICATOR"];
                $instance->currency = $records["CURRENCY"];
                $instance->rate = $records["RATE"];
                $instance->orderno = $records["ORDERNO"];
                $instance->wh = $records["WH"];
                $instance->driver = $records["DRIVER"];
                $instance->truckregno = $records["TRUCKREGNO"];
                $instance->grvstatus = $records["GRVSTATUS"];
                $instance->createdate = $records["CREATEDATE"];
                $instance->createtime = $records["CREATETIME"];
                $instance->createuser = $records["CREATEUSER"];
                $instance->createmacid = $records["CREATEMACID"];
                $instance->authuser = $records["AUTHUSER"];
                $instance->authdate = $records["AUTHDATE"];
                $instance->authtime = $records["AUTHTIME"];
                $instance->authmacid = $records["AUTHMACID"];
                $instance->invtotal = $records["INVTOTAL"];
                $instance->invtax = $records["INVTAX"];
                $instance->sapdocno = $records["SAPDOCNO"];
                $instance->postdate = $records["POSTDATE"];
                $instance->duedate = $records["DUEDATE"];
                $instance->invdate = $records["INVDATE"];
                $instance->ap = $records["AP"];
                $instance->detaillines = $records["DETAILLINES"];
                $instance->version = $records["VERSION"];
                $instance->inuse = $records["InUse"];
                $instance->freestockgrv = $records["FreeStockGRV"];
                $instance->grvtallyexcl = $records["GRVTallyExcl"];
                $instance->grvtallyincl = $records["GRVTallyIncl"];
                $instance->grvreturnsexcl = $records["GRVReturnsExcl"];
                $instance->grvreturnsvat = $records["GRVReturnsVAT"];
                $instance->tonnage = $records["Tonnage"];
                $instance->tonnagerebexcl = $records["TonnageRebExcl"];
                $instance->tonnagerebincl = $records["TonnageRebIncl"];
                $instance->interco = $records["InterCO"];
            }
        } catch (Exception $ex) {
            echo 'Close: '.$ex->getMessage();
        }
        return $instance;
    }

    public static function ini_Code($conn,$co,$branch,$txtp,$grvno) {
        $instance = new self();
        try {

            $query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [TXTP], [GRVNO], [GRVDATE], [DOCNO], [DOCDATE], [DOCTYPE], [DOCREFERENCE], [DOCTOTALINCL], [DOCTOTALEXCL], [DOCTAX], [GRVTOTALEXCL], [GRVTOTALINCL], [GRVTAX], [GRVDISCOUNT], [CREDITORPOST], [TAXINDICATOR], [CURRENCY], [RATE], [ORDERNO], [WH], [DRIVER], [TRUCKREGNO], [GRVSTATUS], [CREATEDATE], [CREATETIME], [CREATEUSER], [CREATEMACID], [AUTHUSER], [AUTHDATE], [AUTHTIME], [AUTHMACID], [INVTOTAL], [INVTAX], [SAPDOCNO], [POSTDATE], [DUEDATE], [INVDATE], [AP], [DETAILLINES], [VERSION], [InUse], [FreeStockGRV], [GRVTallyExcl], [GRVTallyIncl], [GRVReturnsExcl], [GRVReturnsVAT], [Tonnage], [TonnageRebExcl], [TonnageRebIncl], [InterCO] FROM [STKGrvHead] ";
            $query .= " WHERE [CO]=:CO AND [BRANCH]=:BRANCH AND [TXTP]=:TXTP  AND [GRVNO]=:GRVNO  ";

            $stmt = $conn->getStatement($query);
            $stmt->bindParam(":CO", $co);
            $stmt->bindParam(":BRANCH", $branch);
            $stmt->bindParam(":TXTP", $txtp);
            $stmt->bindParam(":GRVNO", $grvno);
            $stmt->execute();
            while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
                $instance->recid = $records["RECID"];
                $instance->co = $records["CO"];
                $instance->branch = $records["BRANCH"];
                $instance->account = $records["ACCOUNT"];
                $instance->subaccount = $records["SUBACCOUNT"];
                $instance->txtp = $records["TXTP"];
                $instance->grvno = $records["GRVNO"];
                $instance->grvdate = $records["GRVDATE"];
                $instance->docno = $records["DOCNO"];
                $instance->docdate = $records["DOCDATE"];
                $instance->doctype = $records["DOCTYPE"];
                $instance->docreference = $records["DOCREFERENCE"];
                $instance->doctotalincl = $records["DOCTOTALINCL"];
                $instance->doctotalexcl = $records["DOCTOTALEXCL"];
                $instance->doctax = $records["DOCTAX"];
                $instance->grvtotalexcl = $records["GRVTOTALEXCL"];
                $instance->grvtotalincl = $records["GRVTOTALINCL"];
                $instance->grvtax = $records["GRVTAX"];
                $instance->grvdiscount = $records["GRVDISCOUNT"];
                $instance->creditorpost = $records["CREDITORPOST"];
                $instance->taxindicator = $records["TAXINDICATOR"];
                $instance->currency = $records["CURRENCY"];
                $instance->rate = $records["RATE"];
                $instance->orderno = $records["ORDERNO"];
                $instance->wh = $records["WH"];
                $instance->driver = $records["DRIVER"];
                $instance->truckregno = $records["TRUCKREGNO"];
                $instance->grvstatus = $records["GRVSTATUS"];
                $instance->createdate = $records["CREATEDATE"];
                $instance->createtime = $records["CREATETIME"];
                $instance->createuser = $records["CREATEUSER"];
                $instance->createmacid = $records["CREATEMACID"];
                $instance->authuser = $records["AUTHUSER"];
                $instance->authdate = $records["AUTHDATE"];
                $instance->authtime = $records["AUTHTIME"];
                $instance->authmacid = $records["AUTHMACID"];
                $instance->invtotal = $records["INVTOTAL"];
                $instance->invtax = $records["INVTAX"];
                $instance->sapdocno = $records["SAPDOCNO"];
                $instance->postdate = $records["POSTDATE"];
                $instance->duedate = $records["DUEDATE"];
                $instance->invdate = $records["INVDATE"];
                $instance->ap = $records["AP"];
                $instance->detaillines = $records["DETAILLINES"];
                $instance->version = $records["VERSION"];
                $instance->inuse = $records["InUse"];
                $instance->freestockgrv = $records["FreeStockGRV"];
                $instance->grvtallyexcl = $records["GRVTallyExcl"];
                $instance->grvtallyincl = $records["GRVTallyIncl"];
                $instance->grvreturnsexcl = $records["GRVReturnsExcl"];
                $instance->grvreturnsvat = $records["GRVReturnsVAT"];
                $instance->tonnage = $records["Tonnage"];
                $instance->tonnagerebexcl = $records["TonnageRebExcl"];
                $instance->tonnagerebincl = $records["TonnageRebIncl"];
                $instance->interco = $records["InterCO"];
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
