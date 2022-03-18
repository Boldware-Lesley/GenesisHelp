<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	CRDBudgetHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int BudYear" of type [int]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar CYExtDate" of type [nvarchar]
	"public float BudPerc" of type [float]
	"public float BudValue" of type [float]
	"public float PrftPerc" of type [float]
	"public float PrftValue" of type [float]
	"public float PYSales" of type [float]
	"public float PYCost" of type [float]
	"public float PYProfit" of type [float]
	"public float PYGP" of type [float]
	"public float PYIncome" of type [float]
	"public float PYRebates" of type [float]
	"public float PYNetGP" of type [float]
	"public float BDSales" of type [float]
	"public float BDCost" of type [float]
	"public float BDProfit" of type [float]
	"public float BDGP" of type [float]
	"public float BDIncome" of type [float]
	"public float BDRebates" of type [float]
	"public float BDNetGP" of type [float]
	"public float CYSales" of type [float]
	"public float CYCost" of type [float]
	"public float CYProfit" of type [float]
	"public float CYGP" of type [float]
	"public float CYIncome" of type [float]
	"public float CYRebates" of type [float]
	"public float CYNetGP" of type [float]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar Account01" of type [nvarchar]
	"public nvarchar Account02" of type [nvarchar]
	"public nvarchar Account03" of type [nvarchar]
	"public nvarchar Account04" of type [nvarchar]
	"public nvarchar Account05" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdbudgethdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $account ;	
	public $budyear ;	
	public $status ;	
	public $cyextdate ;	
	public $budperc ;	
	public $budvalue ;	
	public $prftperc ;	
	public $prftvalue ;	
	public $pysales ;	
	public $pycost ;	
	public $pyprofit ;	
	public $pygp ;	
	public $pyincome ;	
	public $pyrebates ;	
	public $pynetgp ;	
	public $bdsales ;	
	public $bdcost ;	
	public $bdprofit ;	
	public $bdgp ;	
	public $bdincome ;	
	public $bdrebates ;	
	public $bdnetgp ;	
	public $cysales ;	
	public $cycost ;	
	public $cyprofit ;	
	public $cygp ;	
	public $cyincome ;	
	public $cyrebates ;	
	public $cynetgp ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $account01 ;	
	public $account02 ;	
	public $account03 ;	
	public $account04 ;	
	public $account05 ;	
	
	
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
			$query = " SELECT RecID, [CO], [Account], [BudYear], [Status], [CYExtDate], [BudPerc], [BudValue], [PrftPerc], [PrftValue], [PYSales], [PYCost], [PYProfit], [PYGP], [PYIncome], [PYRebates], [PYNetGP], [BDSales], [BDCost], [BDProfit], [BDGP], [BDIncome], [BDRebates], [BDNetGP], [CYSales], [CYCost], [CYProfit], [CYGP], [CYIncome], [CYRebates], [CYNetGP], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Account01], [Account02], [Account03], [Account04], [Account05] FROM [CRDBudgetHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->account = $records["Account"];
				$instance->budyear = $records["BudYear"];
				$instance->status = $records["Status"];
				$instance->cyextdate = $records["CYExtDate"];
				$instance->budperc = $records["BudPerc"];
				$instance->budvalue = $records["BudValue"];
				$instance->prftperc = $records["PrftPerc"];
				$instance->prftvalue = $records["PrftValue"];
				$instance->pysales = $records["PYSales"];
				$instance->pycost = $records["PYCost"];
				$instance->pyprofit = $records["PYProfit"];
				$instance->pygp = $records["PYGP"];
				$instance->pyincome = $records["PYIncome"];
				$instance->pyrebates = $records["PYRebates"];
				$instance->pynetgp = $records["PYNetGP"];
				$instance->bdsales = $records["BDSales"];
				$instance->bdcost = $records["BDCost"];
				$instance->bdprofit = $records["BDProfit"];
				$instance->bdgp = $records["BDGP"];
				$instance->bdincome = $records["BDIncome"];
				$instance->bdrebates = $records["BDRebates"];
				$instance->bdnetgp = $records["BDNetGP"];
				$instance->cysales = $records["CYSales"];
				$instance->cycost = $records["CYCost"];
				$instance->cyprofit = $records["CYProfit"];
				$instance->cygp = $records["CYGP"];
				$instance->cyincome = $records["CYIncome"];
				$instance->cyrebates = $records["CYRebates"];
				$instance->cynetgp = $records["CYNetGP"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->account01 = $records["Account01"];
				$instance->account02 = $records["Account02"];
				$instance->account03 = $records["Account03"];
				$instance->account04 = $records["Account04"];
				$instance->account05 = $records["Account05"];
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