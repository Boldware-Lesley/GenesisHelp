<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:40
@Database			:	GENESIS-DEMO
@Table			:	GLGBudgetMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public int GLSubAccNo" of type [int]
	"public nvarchar SourceBranch" of type [nvarchar]
	"public int AP" of type [int]
	"public float Debit" of type [float]
	"public float Credit" of type [float]
	"public float Balance" of type [float]
*/
namespace genesis;


use PDO;

class Glgbudgetmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $glaccno ;	
	public $glsubaccno ;	
	public $sourcebranch ;	
	public $ap ;	
	public $debit ;	
	public $credit ;	
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
			$query = " SELECT RecID, [CO], [GLAccNo], [GLSubAccNo], [SourceBranch], [AP], [Debit], [Credit], [Balance] FROM [GLGBudgetMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->sourcebranch = $records["SourceBranch"];
				$instance->ap = $records["AP"];
				$instance->debit = $records["Debit"];
				$instance->credit = $records["Credit"];
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