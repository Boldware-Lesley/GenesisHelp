<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	STKSerialMst

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar SerialNo" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar GRVAccount" of type [nvarchar]
	"public nvarchar GRVDate" of type [nvarchar]
	"public nvarchar GRVSuppDocNo" of type [nvarchar]
	"public int GRVNo" of type [int]
	"public int GRVLineNo" of type [int]
	"public int GRVWarrantyDays" of type [int]
	"public nvarchar GRVWarrantyExpDate" of type [nvarchar]
	"public nvarchar DEBAccount" of type [nvarchar]
	"public nvarchar DEBName" of type [nvarchar]
	"public nvarchar DEBPhone" of type [nvarchar]
	"public nvarchar DEBDocNo" of type [nvarchar]
	"public nvarchar DEBDocDate" of type [nvarchar]
	"public int DEBDocLineNo" of type [int]
	"public int DEBWarrantyDays" of type [int]
	"public nvarchar DEBWarrantyExpDate" of type [nvarchar]
	"public nvarchar OrderNo" of type [nvarchar]
	"public nvarchar OrderDate" of type [nvarchar]
	"public nvarchar PickSlipNo" of type [nvarchar]
	"public nvarchar PickSlipDate" of type [nvarchar]
	"public nvarchar LinkedSerialNo" of type [nvarchar]
	"public nvarchar SwopSerialNo" of type [nvarchar]
	"public nvarchar SwopDate" of type [nvarchar]
	"public float Mass" of type [float]
	"public float Tare" of type [float]
	"public int Pieces" of type [int]
	"public nvarchar Fridge" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public int ProdOrdNo" of type [int]
	"public nvarchar PackLocation" of type [nvarchar]
	"public nvarchar PickDate" of type [nvarchar]
	"public nvarchar PickTime" of type [nvarchar]
	"public nvarchar SwopTime" of type [nvarchar]
	"public nvarchar RetnDate" of type [nvarchar]
	"public nvarchar RetnTime" of type [nvarchar]
	"public nvarchar RetnDocNo" of type [nvarchar]
	"public nvarchar RetnAccount" of type [nvarchar]
	"public int PalletNo" of type [int]
	"public nvarchar PickUser" of type [nvarchar]
	"public nvarchar PickMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkserialmst {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $serialno ;	
	public $status ;	
	public $grvaccount ;	
	public $grvdate ;	
	public $grvsuppdocno ;	
	public $grvno ;	
	public $grvlineno ;	
	public $grvwarrantydays ;	
	public $grvwarrantyexpdate ;	
	public $debaccount ;	
	public $debname ;	
	public $debphone ;	
	public $debdocno ;	
	public $debdocdate ;	
	public $debdoclineno ;	
	public $debwarrantydays ;	
	public $debwarrantyexpdate ;	
	public $orderno ;	
	public $orderdate ;	
	public $pickslipno ;	
	public $pickslipdate ;	
	public $linkedserialno ;	
	public $swopserialno ;	
	public $swopdate ;	
	public $mass ;	
	public $tare ;	
	public $pieces ;	
	public $fridge ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $prodordno ;	
	public $packlocation ;	
	public $pickdate ;	
	public $picktime ;	
	public $swoptime ;	
	public $retndate ;	
	public $retntime ;	
	public $retndocno ;	
	public $retnaccount ;	
	public $palletno ;	
	public $pickuser ;	
	public $pickmacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [SerialNo], [Status], [GRVAccount], [GRVDate], [GRVSuppDocNo], [GRVNo], [GRVLineNo], [GRVWarrantyDays], [GRVWarrantyExpDate], [DEBAccount], [DEBName], [DEBPhone], [DEBDocNo], [DEBDocDate], [DEBDocLineNo], [DEBWarrantyDays], [DEBWarrantyExpDate], [OrderNo], [OrderDate], [PickSlipNo], [PickSlipDate], [LinkedSerialNo], [SwopSerialNo], [SwopDate], [Mass], [Tare], [Pieces], [Fridge], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [ProdOrdNo], [PackLocation], [PickDate], [PickTime], [SwopTime], [RetnDate], [RetnTime], [RetnDocNo], [RetnAccount], [PalletNo], [PickUser], [PickMacID] FROM [STKSerialMst]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->serialno = $records["SerialNo"];
				$instance->status = $records["Status"];
				$instance->grvaccount = $records["GRVAccount"];
				$instance->grvdate = $records["GRVDate"];
				$instance->grvsuppdocno = $records["GRVSuppDocNo"];
				$instance->grvno = $records["GRVNo"];
				$instance->grvlineno = $records["GRVLineNo"];
				$instance->grvwarrantydays = $records["GRVWarrantyDays"];
				$instance->grvwarrantyexpdate = $records["GRVWarrantyExpDate"];
				$instance->debaccount = $records["DEBAccount"];
				$instance->debname = $records["DEBName"];
				$instance->debphone = $records["DEBPhone"];
				$instance->debdocno = $records["DEBDocNo"];
				$instance->debdocdate = $records["DEBDocDate"];
				$instance->debdoclineno = $records["DEBDocLineNo"];
				$instance->debwarrantydays = $records["DEBWarrantyDays"];
				$instance->debwarrantyexpdate = $records["DEBWarrantyExpDate"];
				$instance->orderno = $records["OrderNo"];
				$instance->orderdate = $records["OrderDate"];
				$instance->pickslipno = $records["PickSlipNo"];
				$instance->pickslipdate = $records["PickSlipDate"];
				$instance->linkedserialno = $records["LinkedSerialNo"];
				$instance->swopserialno = $records["SwopSerialNo"];
				$instance->swopdate = $records["SwopDate"];
				$instance->mass = $records["Mass"];
				$instance->tare = $records["Tare"];
				$instance->pieces = $records["Pieces"];
				$instance->fridge = $records["Fridge"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->prodordno = $records["ProdOrdNo"];
				$instance->packlocation = $records["PackLocation"];
				$instance->pickdate = $records["PickDate"];
				$instance->picktime = $records["PickTime"];
				$instance->swoptime = $records["SwopTime"];
				$instance->retndate = $records["RetnDate"];
				$instance->retntime = $records["RetnTime"];
				$instance->retndocno = $records["RetnDocNo"];
				$instance->retnaccount = $records["RetnAccount"];
				$instance->palletno = $records["PalletNo"];
				$instance->pickuser = $records["PickUser"];
				$instance->pickmacid = $records["PickMacID"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [SerialNo], [Status], [GRVAccount], [GRVDate], [GRVSuppDocNo], [GRVNo], [GRVLineNo], [GRVWarrantyDays], [GRVWarrantyExpDate], [DEBAccount], [DEBName], [DEBPhone], [DEBDocNo], [DEBDocDate], [DEBDocLineNo], [DEBWarrantyDays], [DEBWarrantyExpDate], [OrderNo], [OrderDate], [PickSlipNo], [PickSlipDate], [LinkedSerialNo], [SwopSerialNo], [SwopDate], [Mass], [Tare], [Pieces], [Fridge], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [ProdOrdNo], [PackLocation], [PickDate], [PickTime], [SwopTime], [RetnDate], [RetnTime], [RetnDocNo], [RetnAccount], [PalletNo], [PickUser], [PickMacID] FROM [STKSerialMst]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->serialno = $records["SerialNo"];
				$instance->status = $records["Status"];
				$instance->grvaccount = $records["GRVAccount"];
				$instance->grvdate = $records["GRVDate"];
				$instance->grvsuppdocno = $records["GRVSuppDocNo"];
				$instance->grvno = $records["GRVNo"];
				$instance->grvlineno = $records["GRVLineNo"];
				$instance->grvwarrantydays = $records["GRVWarrantyDays"];
				$instance->grvwarrantyexpdate = $records["GRVWarrantyExpDate"];
				$instance->debaccount = $records["DEBAccount"];
				$instance->debname = $records["DEBName"];
				$instance->debphone = $records["DEBPhone"];
				$instance->debdocno = $records["DEBDocNo"];
				$instance->debdocdate = $records["DEBDocDate"];
				$instance->debdoclineno = $records["DEBDocLineNo"];
				$instance->debwarrantydays = $records["DEBWarrantyDays"];
				$instance->debwarrantyexpdate = $records["DEBWarrantyExpDate"];
				$instance->orderno = $records["OrderNo"];
				$instance->orderdate = $records["OrderDate"];
				$instance->pickslipno = $records["PickSlipNo"];
				$instance->pickslipdate = $records["PickSlipDate"];
				$instance->linkedserialno = $records["LinkedSerialNo"];
				$instance->swopserialno = $records["SwopSerialNo"];
				$instance->swopdate = $records["SwopDate"];
				$instance->mass = $records["Mass"];
				$instance->tare = $records["Tare"];
				$instance->pieces = $records["Pieces"];
				$instance->fridge = $records["Fridge"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->prodordno = $records["ProdOrdNo"];
				$instance->packlocation = $records["PackLocation"];
				$instance->pickdate = $records["PickDate"];
				$instance->picktime = $records["PickTime"];
				$instance->swoptime = $records["SwopTime"];
				$instance->retndate = $records["RetnDate"];
				$instance->retntime = $records["RetnTime"];
				$instance->retndocno = $records["RetnDocNo"];
				$instance->retnaccount = $records["RetnAccount"];
				$instance->palletno = $records["PalletNo"];
				$instance->pickuser = $records["PickUser"];
				$instance->pickmacid = $records["PickMacID"];
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
			$res = $this->debname;
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