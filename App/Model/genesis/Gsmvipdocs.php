<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	GSMVIPDocs

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int VIPNo" of type [int]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public float TotCostExcl" of type [float]
	"public float TotCostIncl" of type [float]
	"public float DocTotalExcl" of type [float]
	"public float DocTotalIncl" of type [float]
	"public float Profit" of type [float]
	"public float GP" of type [float]
	"public float HouseExcl" of type [float]
	"public float HouseIncl" of type [float]
	"public float HouseCostExcl" of type [float]
	"public float HouseCostIncl" of type [float]
	"public float HouseProfit" of type [float]
	"public float HouseGP" of type [float]
	"public int Points" of type [int]
*/
namespace genesis;


use PDO;

class Gsmvipdocs {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $vipno ;	
	public $sourcebranch ;	
	public $txtp ;	
	public $docno ;	
	public $trandate ;	
	public $totcostexcl ;	
	public $totcostincl ;	
	public $doctotalexcl ;	
	public $doctotalincl ;	
	public $profit ;	
	public $gp ;	
	public $houseexcl ;	
	public $houseincl ;	
	public $housecostexcl ;	
	public $housecostincl ;	
	public $houseprofit ;	
	public $housegp ;	
	public $points ;	
	
	
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
			$query = " SELECT RecID, [CO], [VIPNo], [SourceBranch], [TxTp], [DocNo], [TranDate], [TotCostExcl], [TotCostIncl], [DocTotalExcl], [DocTotalIncl], [Profit], [GP], [HouseExcl], [HouseIncl], [HouseCostExcl], [HouseCostIncl], [HouseProfit], [HouseGP], [Points] FROM [GSMVIPDocs]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->vipno = $records["VIPNo"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->txtp = $records["TxTp"];
				$instance->docno = $records["DocNo"];
				$instance->trandate = $records["TranDate"];
				$instance->totcostexcl = $records["TotCostExcl"];
				$instance->totcostincl = $records["TotCostIncl"];
				$instance->doctotalexcl = $records["DocTotalExcl"];
				$instance->doctotalincl = $records["DocTotalIncl"];
				$instance->profit = $records["Profit"];
				$instance->gp = $records["GP"];
				$instance->houseexcl = $records["HouseExcl"];
				$instance->houseincl = $records["HouseIncl"];
				$instance->housecostexcl = $records["HouseCostExcl"];
				$instance->housecostincl = $records["HouseCostIncl"];
				$instance->houseprofit = $records["HouseProfit"];
				$instance->housegp = $records["HouseGP"];
				$instance->points = $records["Points"];
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