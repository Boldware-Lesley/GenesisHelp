<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	STKKitMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar KitStockCode" of type [nvarchar]
	"public nvarchar KitLinkCode" of type [nvarchar]
	"public float KitQty" of type [float]
	"public float KitLinkQty" of type [float]
	"public int KitUnits" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar KitFixedCost" of type [nvarchar]
	"public nvarchar KitWaste" of type [nvarchar]
	"public nvarchar KitProdItem" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkkitmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $kitstockcode ;	
	public $kitlinkcode ;	
	public $kitqty ;	
	public $kitlinkqty ;	
	public $kitunits ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $kitfixedcost ;	
	public $kitwaste ;	
	public $kitproditem ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [KitStockCode], [KitLinkCode], [KitQty], [KitLinkQty], [KitUnits], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [KitFixedCost], [KitWaste], [KitProdItem] FROM [STKKitMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->kitstockcode = $records["KitStockCode"];
				$instance->kitlinkcode = $records["KitLinkCode"];
				$instance->kitqty = $records["KitQty"];
				$instance->kitlinkqty = $records["KitLinkQty"];
				$instance->kitunits = $records["KitUnits"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->kitfixedcost = $records["KitFixedCost"];
				$instance->kitwaste = $records["KitWaste"];
				$instance->kitproditem = $records["KitProdItem"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [KitStockCode], [KitLinkCode], [KitQty], [KitLinkQty], [KitUnits], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [KitFixedCost], [KitWaste], [KitProdItem] FROM [STKKitMaster]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->kitstockcode = $records["KitStockCode"];
				$instance->kitlinkcode = $records["KitLinkCode"];
				$instance->kitqty = $records["KitQty"];
				$instance->kitlinkqty = $records["KitLinkQty"];
				$instance->kitunits = $records["KitUnits"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->kitfixedcost = $records["KitFixedCost"];
				$instance->kitwaste = $records["KitWaste"];
				$instance->kitproditem = $records["KitProdItem"];
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