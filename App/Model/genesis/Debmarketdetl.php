<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	DEBMarketDetl

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int MktNo" of type [int]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public float SalesExcl" of type [float]
	"public float CostExcl" of type [float]
	"public float Profit" of type [float]
	"public float GP" of type [float]
	"public float Balance" of type [float]
*/
namespace genesis;


use PDO;

class Debmarketdetl {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $mktno ;	
	public $account ;	
	public $name ;	
	public $sourcebranch ;	
	public $salesexcl ;	
	public $costexcl ;	
	public $profit ;	
	public $gp ;	
	public $balance ;	
	
	
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
			$query = " SELECT RecID, [CO], [MktNo], [Account], [Name], [SourceBranch], [SalesExcl], [CostExcl], [Profit], [GP], [Balance] FROM [DEBMarketDetl]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->mktno = $records["MktNo"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->salesexcl = $records["SalesExcl"];
				$instance->costexcl = $records["CostExcl"];
				$instance->profit = $records["Profit"];
				$instance->gp = $records["GP"];
				$instance->balance = $records["Balance"];
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
			$res = $this->name;
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