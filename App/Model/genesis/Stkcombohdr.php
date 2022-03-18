<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	STKComboHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int ComboNo" of type [int]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public float SellExcl" of type [float]
	"public float SellIncl" of type [float]
	"public float CostExcl" of type [float]
	"public float CostIncl" of type [float]
	"public float DefSellExcl" of type [float]
	"public float DefSellIncl" of type [float]
	"public int MaxCust" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkcombohdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $combono ;	
	public $description ;	
	public $fromdate ;	
	public $todate ;	
	public $sellexcl ;	
	public $sellincl ;	
	public $costexcl ;	
	public $costincl ;	
	public $defsellexcl ;	
	public $defsellincl ;	
	public $maxcust ;	
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
			$query = " SELECT RecID, [CO], [Branch], [ComboNo], [Description], [FromDate], [ToDate], [SellExcl], [SellIncl], [CostExcl], [CostIncl], [DefSellExcl], [DefSellIncl], [MaxCust], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [STKComboHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->combono = $records["ComboNo"];
				$instance->description = $records["Description"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->sellexcl = $records["SellExcl"];
				$instance->sellincl = $records["SellIncl"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
				$instance->defsellexcl = $records["DefSellExcl"];
				$instance->defsellincl = $records["DefSellIncl"];
				$instance->maxcust = $records["MaxCust"];
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