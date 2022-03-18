<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	STKCPRSupplier

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar CPRNo" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar PriceCode" of type [nvarchar]
	"public float CostPlus" of type [float]
	"public float CostPlusF" of type [float]
	"public float SellPlus" of type [float]
	"public float SellMinus" of type [float]
	"public nvarchar AllowPromo" of type [nvarchar]
	"public nvarchar ExcludeAcc" of type [nvarchar]
	"public nvarchar ExcludeTender" of type [nvarchar]
	"public nvarchar SellMinusPromo" of type [nvarchar]
	"public nvarchar SellPlusPromo" of type [nvarchar]
	"public float Discount" of type [float]
	"public nvarchar ForcePrice" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkcprsupplier {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $cprno ;	
	public $account ;	
	public $pricecode ;	
	public $costplus ;	
	public $costplusf ;	
	public $sellplus ;	
	public $sellminus ;	
	public $allowpromo ;	
	public $excludeacc ;	
	public $excludetender ;	
	public $sellminuspromo ;	
	public $sellpluspromo ;	
	public $discount ;	
	public $forceprice ;	
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
			$query = " SELECT RecID, [CO], [Branch], [CPRNo], [Account], [PriceCode], [CostPlus], [CostPlusF], [SellPlus], [SellMinus], [AllowPromo], [ExcludeAcc], [ExcludeTender], [SellMinusPromo], [SellPlusPromo], [Discount], [ForcePrice], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [STKCPRSupplier]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->cprno = $records["CPRNo"];
				$instance->account = $records["Account"];
				$instance->pricecode = $records["PriceCode"];
				$instance->costplus = $records["CostPlus"];
				$instance->costplusf = $records["CostPlusF"];
				$instance->sellplus = $records["SellPlus"];
				$instance->sellminus = $records["SellMinus"];
				$instance->allowpromo = $records["AllowPromo"];
				$instance->excludeacc = $records["ExcludeAcc"];
				$instance->excludetender = $records["ExcludeTender"];
				$instance->sellminuspromo = $records["SellMinusPromo"];
				$instance->sellpluspromo = $records["SellPlusPromo"];
				$instance->discount = $records["Discount"];
				$instance->forceprice = $records["ForcePrice"];
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
	Main Constructor For Declearing Using PriceCode
	*/
	public static function ini_PriceCode($pricecode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [CPRNo], [Account], [PriceCode], [CostPlus], [CostPlusF], [SellPlus], [SellMinus], [AllowPromo], [ExcludeAcc], [ExcludeTender], [SellMinusPromo], [SellPlusPromo], [Discount], [ForcePrice], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [STKCPRSupplier]  WHERE [PriceCode]=:pricecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":pricecode", $pricecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->cprno = $records["CPRNo"];
				$instance->account = $records["Account"];
				$instance->pricecode = $records["PriceCode"];
				$instance->costplus = $records["CostPlus"];
				$instance->costplusf = $records["CostPlusF"];
				$instance->sellplus = $records["SellPlus"];
				$instance->sellminus = $records["SellMinus"];
				$instance->allowpromo = $records["AllowPromo"];
				$instance->excludeacc = $records["ExcludeAcc"];
				$instance->excludetender = $records["ExcludeTender"];
				$instance->sellminuspromo = $records["SellMinusPromo"];
				$instance->sellpluspromo = $records["SellPlusPromo"];
				$instance->discount = $records["Discount"];
				$instance->forceprice = $records["ForcePrice"];
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