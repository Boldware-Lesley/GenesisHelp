<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	STKMstSplitCodes

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public int SplitCode" of type [int]
	"public nvarchar Description1" of type [nvarchar]
	"public int Units" of type [int]
	"public float PriceExcl" of type [float]
	"public float PriceIncl" of type [float]
	"public nvarchar PromFDate" of type [nvarchar]
	"public nvarchar PromTDate" of type [nvarchar]
	"public nvarchar PromFTime" of type [nvarchar]
	"public nvarchar PromTTime" of type [nvarchar]
	"public float PromMaxQty" of type [float]
	"public float PromQtySold" of type [float]
	"public float PromMCust" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkmstsplitcodes {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $splitcode ;	
	public $description1 ;	
	public $units ;	
	public $priceexcl ;	
	public $priceincl ;	
	public $promfdate ;	
	public $promtdate ;	
	public $promftime ;	
	public $promttime ;	
	public $prommaxqty ;	
	public $promqtysold ;	
	public $prommcust ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $linkcode ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [SplitCode], [Description1], [Units], [PriceExcl], [PriceIncl], [PromFDate], [PromTDate], [PromFTime], [PromTTime], [PromMaxQty], [PromQtySold], [PromMCust], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [LinkCode] FROM [STKMstSplitCodes]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->splitcode = $records["SplitCode"];
				$instance->description1 = $records["Description1"];
				$instance->units = $records["Units"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->promfdate = $records["PromFDate"];
				$instance->promtdate = $records["PromTDate"];
				$instance->promftime = $records["PromFTime"];
				$instance->promttime = $records["PromTTime"];
				$instance->prommaxqty = $records["PromMaxQty"];
				$instance->promqtysold = $records["PromQtySold"];
				$instance->prommcust = $records["PromMCust"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->linkcode = $records["LinkCode"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [SplitCode], [Description1], [Units], [PriceExcl], [PriceIncl], [PromFDate], [PromTDate], [PromFTime], [PromTTime], [PromMaxQty], [PromQtySold], [PromMCust], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [LinkCode] FROM [STKMstSplitCodes]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->splitcode = $records["SplitCode"];
				$instance->description1 = $records["Description1"];
				$instance->units = $records["Units"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->promfdate = $records["PromFDate"];
				$instance->promtdate = $records["PromTDate"];
				$instance->promftime = $records["PromFTime"];
				$instance->promttime = $records["PromTTime"];
				$instance->prommaxqty = $records["PromMaxQty"];
				$instance->promqtysold = $records["PromQtySold"];
				$instance->prommcust = $records["PromMCust"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->linkcode = $records["LinkCode"];
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