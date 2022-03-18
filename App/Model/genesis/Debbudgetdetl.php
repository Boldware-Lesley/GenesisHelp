<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	DEBBudgetDetl

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int BudYear" of type [int]
	"public int Period" of type [int]
	"public float PYSales" of type [float]
	"public float PYCost" of type [float]
	"public float PYProfit" of type [float]
	"public float PYGP" of type [float]
	"public float PYRebates" of type [float]
	"public float PYNetGP" of type [float]
	"public float BDSales" of type [float]
	"public float BDCost" of type [float]
	"public float BDProfit" of type [float]
	"public float BDGP" of type [float]
	"public float BDRebates" of type [float]
	"public float BDNetGP" of type [float]
	"public float CYSales" of type [float]
	"public float CYCost" of type [float]
	"public float CYProfit" of type [float]
	"public float CYGP" of type [float]
	"public float CYRebates" of type [float]
	"public float CYNetGP" of type [float]
*/
namespace genesis;


use PDO;

class Debbudgetdetl {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $budyear ;	
	public $period ;	
	public $pysales ;	
	public $pycost ;	
	public $pyprofit ;	
	public $pygp ;	
	public $pyrebates ;	
	public $pynetgp ;	
	public $bdsales ;	
	public $bdcost ;	
	public $bdprofit ;	
	public $bdgp ;	
	public $bdrebates ;	
	public $bdnetgp ;	
	public $cysales ;	
	public $cycost ;	
	public $cyprofit ;	
	public $cygp ;	
	public $cyrebates ;	
	public $cynetgp ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [BudYear], [Period], [PYSales], [PYCost], [PYProfit], [PYGP], [PYRebates], [PYNetGP], [BDSales], [BDCost], [BDProfit], [BDGP], [BDRebates], [BDNetGP], [CYSales], [CYCost], [CYProfit], [CYGP], [CYRebates], [CYNetGP] FROM [DEBBudgetDetl]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->budyear = $records["BudYear"];
				$instance->period = $records["Period"];
				$instance->pysales = $records["PYSales"];
				$instance->pycost = $records["PYCost"];
				$instance->pyprofit = $records["PYProfit"];
				$instance->pygp = $records["PYGP"];
				$instance->pyrebates = $records["PYRebates"];
				$instance->pynetgp = $records["PYNetGP"];
				$instance->bdsales = $records["BDSales"];
				$instance->bdcost = $records["BDCost"];
				$instance->bdprofit = $records["BDProfit"];
				$instance->bdgp = $records["BDGP"];
				$instance->bdrebates = $records["BDRebates"];
				$instance->bdnetgp = $records["BDNetGP"];
				$instance->cysales = $records["CYSales"];
				$instance->cycost = $records["CYCost"];
				$instance->cyprofit = $records["CYProfit"];
				$instance->cygp = $records["CYGP"];
				$instance->cyrebates = $records["CYRebates"];
				$instance->cynetgp = $records["CYNetGP"];
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