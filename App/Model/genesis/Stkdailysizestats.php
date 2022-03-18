<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	STKDailySizeStats

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Size" of type [nvarchar]
	"public int Period" of type [int]
	"public int DayNo" of type [int]
	"public int Units" of type [int]
	"public float SaleQty" of type [float]
	"public float SaleCostex" of type [float]
	"public float SaleExcl" of type [float]
	"public float RebateExcl" of type [float]
	"public float LinkQty" of type [float]
	"public float Onhand" of type [float]
	"public float GRVQty" of type [float]
	"public float GRVLinkQty" of type [float]
	"public float GRVTotalExcl" of type [float]
	"public float GRVRebAmnt " of type [float]
	"public float ReturnQty" of type [float]
	"public float ReturnCostex" of type [float]
	"public float ReturnExcl" of type [float]
	"public float PromoQty" of type [float]
	"public float PromoLinkQty" of type [float]
	"public float PromoCost" of type [float]
	"public float PromoSale" of type [float]
	"public float InterQty" of type [float]
	"public float InterLinkQty" of type [float]
	"public float InterCost" of type [float]
	"public float InterSale" of type [float]
*/
namespace genesis;


use PDO;

class Stkdailysizestats {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $size ;	
	public $period ;	
	public $dayno ;	
	public $units ;	
	public $saleqty ;	
	public $salecostex ;	
	public $saleexcl ;	
	public $rebateexcl ;	
	public $linkqty ;	
	public $onhand ;	
	public $grvqty ;	
	public $grvlinkqty ;	
	public $grvtotalexcl ;	
	public $grvrebamnt  ;	
	public $returnqty ;	
	public $returncostex ;	
	public $returnexcl ;	
	public $promoqty ;	
	public $promolinkqty ;	
	public $promocost ;	
	public $promosale ;	
	public $interqty ;	
	public $interlinkqty ;	
	public $intercost ;	
	public $intersale ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [Size], [Period], [DayNo], [Units], [SaleQty], [SaleCostex], [SaleExcl], [RebateExcl], [LinkQty], [Onhand], [GRVQty], [GRVLinkQty], [GRVTotalExcl], [GRVRebAmnt ], [ReturnQty], [ReturnCostex], [ReturnExcl], [PromoQty], [PromoLinkQty], [PromoCost], [PromoSale], [InterQty], [InterLinkQty], [InterCost], [InterSale] FROM [STKDailySizeStats]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->size = $records["Size"];
				$instance->period = $records["Period"];
				$instance->dayno = $records["DayNo"];
				$instance->units = $records["Units"];
				$instance->saleqty = $records["SaleQty"];
				$instance->salecostex = $records["SaleCostex"];
				$instance->saleexcl = $records["SaleExcl"];
				$instance->rebateexcl = $records["RebateExcl"];
				$instance->linkqty = $records["LinkQty"];
				$instance->onhand = $records["Onhand"];
				$instance->grvqty = $records["GRVQty"];
				$instance->grvlinkqty = $records["GRVLinkQty"];
				$instance->grvtotalexcl = $records["GRVTotalExcl"];
				$instance->grvrebamnt  = $records["GRVRebAmnt "];
				$instance->returnqty = $records["ReturnQty"];
				$instance->returncostex = $records["ReturnCostex"];
				$instance->returnexcl = $records["ReturnExcl"];
				$instance->promoqty = $records["PromoQty"];
				$instance->promolinkqty = $records["PromoLinkQty"];
				$instance->promocost = $records["PromoCost"];
				$instance->promosale = $records["PromoSale"];
				$instance->interqty = $records["InterQty"];
				$instance->interlinkqty = $records["InterLinkQty"];
				$instance->intercost = $records["InterCost"];
				$instance->intersale = $records["InterSale"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [Size], [Period], [DayNo], [Units], [SaleQty], [SaleCostex], [SaleExcl], [RebateExcl], [LinkQty], [Onhand], [GRVQty], [GRVLinkQty], [GRVTotalExcl], [GRVRebAmnt ], [ReturnQty], [ReturnCostex], [ReturnExcl], [PromoQty], [PromoLinkQty], [PromoCost], [PromoSale], [InterQty], [InterLinkQty], [InterCost], [InterSale] FROM [STKDailySizeStats]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->size = $records["Size"];
				$instance->period = $records["Period"];
				$instance->dayno = $records["DayNo"];
				$instance->units = $records["Units"];
				$instance->saleqty = $records["SaleQty"];
				$instance->salecostex = $records["SaleCostex"];
				$instance->saleexcl = $records["SaleExcl"];
				$instance->rebateexcl = $records["RebateExcl"];
				$instance->linkqty = $records["LinkQty"];
				$instance->onhand = $records["Onhand"];
				$instance->grvqty = $records["GRVQty"];
				$instance->grvlinkqty = $records["GRVLinkQty"];
				$instance->grvtotalexcl = $records["GRVTotalExcl"];
				$instance->grvrebamnt  = $records["GRVRebAmnt "];
				$instance->returnqty = $records["ReturnQty"];
				$instance->returncostex = $records["ReturnCostex"];
				$instance->returnexcl = $records["ReturnExcl"];
				$instance->promoqty = $records["PromoQty"];
				$instance->promolinkqty = $records["PromoLinkQty"];
				$instance->promocost = $records["PromoCost"];
				$instance->promosale = $records["PromoSale"];
				$instance->interqty = $records["InterQty"];
				$instance->interlinkqty = $records["InterLinkQty"];
				$instance->intercost = $records["InterCost"];
				$instance->intersale = $records["InterSale"];
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