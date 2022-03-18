<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	STKPrice_new

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar PriceCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public float Excl" of type [float]
	"public float Incl" of type [float]
	"public float MUP" of type [float]
	"public float GP" of type [float]
	"public float DiscP" of type [float]
	"public float DiscV" of type [float]
	"public float MaxDiscP" of type [float]
	"public float MaxDiscV" of type [float]
	"public float MinGP" of type [float]
	"public nvarchar PriceRule" of type [nvarchar]
	"public nvarchar Rounding" of type [nvarchar]
	"public float DefaultMUP" of type [float]
	"public float DefaultGP" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar Version" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkprice_new {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $pricecode ;	
	public $description ;	
	public $fromdate ;	
	public $todate ;	
	public $excl ;	
	public $incl ;	
	public $mup ;	
	public $gp ;	
	public $discp ;	
	public $discv ;	
	public $maxdiscp ;	
	public $maxdiscv ;	
	public $mingp ;	
	public $pricerule ;	
	public $rounding ;	
	public $defaultmup ;	
	public $defaultgp ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $version ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [PriceCode], [Description], [FromDate], [ToDate], [Excl], [Incl], [MUP], [GP], [DiscP], [DiscV], [MaxDiscP], [MaxDiscV], [MinGP], [PriceRule], [Rounding], [DefaultMUP], [DefaultGP], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Version] FROM [STKPrice_new]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->pricecode = $records["PriceCode"];
				$instance->description = $records["Description"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
				$instance->mup = $records["MUP"];
				$instance->gp = $records["GP"];
				$instance->discp = $records["DiscP"];
				$instance->discv = $records["DiscV"];
				$instance->maxdiscp = $records["MaxDiscP"];
				$instance->maxdiscv = $records["MaxDiscV"];
				$instance->mingp = $records["MinGP"];
				$instance->pricerule = $records["PriceRule"];
				$instance->rounding = $records["Rounding"];
				$instance->defaultmup = $records["DefaultMUP"];
				$instance->defaultgp = $records["DefaultGP"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->version = $records["Version"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [PriceCode], [Description], [FromDate], [ToDate], [Excl], [Incl], [MUP], [GP], [DiscP], [DiscV], [MaxDiscP], [MaxDiscV], [MinGP], [PriceRule], [Rounding], [DefaultMUP], [DefaultGP], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Version] FROM [STKPrice_new]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->pricecode = $records["PriceCode"];
				$instance->description = $records["Description"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
				$instance->mup = $records["MUP"];
				$instance->gp = $records["GP"];
				$instance->discp = $records["DiscP"];
				$instance->discv = $records["DiscV"];
				$instance->maxdiscp = $records["MaxDiscP"];
				$instance->maxdiscv = $records["MaxDiscV"];
				$instance->mingp = $records["MinGP"];
				$instance->pricerule = $records["PriceRule"];
				$instance->rounding = $records["Rounding"];
				$instance->defaultmup = $records["DefaultMUP"];
				$instance->defaultgp = $records["DefaultGP"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->version = $records["Version"];
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
			$res = $this->description;
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