<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	PURSuppDealDis

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int DealNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public int Sequence" of type [int]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar DiscMethod" of type [nvarchar]
	"public nvarchar DiscType" of type [nvarchar]
	"public float DiscValue" of type [float]
	"public float DiscountExcl" of type [float]
	"public float DiscountIncl" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Pursuppdealdis {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $dealno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $sequence ;	
	public $description ;	
	public $discmethod ;	
	public $disctype ;	
	public $discvalue ;	
	public $discountexcl ;	
	public $discountincl ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [DealNo], [StockCode], [LinkCode], [Sequence], [Description], [DiscMethod], [DiscType], [DiscValue], [DiscountExcl], [DiscountIncl], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [PURSuppDealDis]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->dealno = $records["DealNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->sequence = $records["Sequence"];
				$instance->description = $records["Description"];
				$instance->discmethod = $records["DiscMethod"];
				$instance->disctype = $records["DiscType"];
				$instance->discvalue = $records["DiscValue"];
				$instance->discountexcl = $records["DiscountExcl"];
				$instance->discountincl = $records["DiscountIncl"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [DealNo], [StockCode], [LinkCode], [Sequence], [Description], [DiscMethod], [DiscType], [DiscValue], [DiscountExcl], [DiscountIncl], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [PURSuppDealDis]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->dealno = $records["DealNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->sequence = $records["Sequence"];
				$instance->description = $records["Description"];
				$instance->discmethod = $records["DiscMethod"];
				$instance->disctype = $records["DiscType"];
				$instance->discvalue = $records["DiscValue"];
				$instance->discountexcl = $records["DiscountExcl"];
				$instance->discountincl = $records["DiscountIncl"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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