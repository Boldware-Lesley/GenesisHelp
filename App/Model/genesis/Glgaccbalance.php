<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	GLGAccBalance

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public int AP" of type [int]
	"public float Debit" of type [float]
	"public float Credit" of type [float]
	"public float Balance" of type [float]
	"public float MonthToDate" of type [float]
	"public int GLSubAccNo" of type [int]
	"public nvarchar SourceBranch" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Glgaccbalance {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $glaccno ;	
	public $ap ;	
	public $debit ;	
	public $credit ;	
	public $balance ;	
	public $monthtodate ;	
	public $glsubaccno ;	
	public $sourcebranch ;	
	
	
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
			$query = " SELECT RecID, [CO], [GLAccNo], [AP], [Debit], [Credit], [Balance], [MonthToDate], [GLSubAccNo], [SourceBranch] FROM [GLGAccBalance]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->ap = $records["AP"];
				$instance->debit = $records["Debit"];
				$instance->credit = $records["Credit"];
				$instance->balance = $records["Balance"];
				$instance->monthtodate = $records["MonthToDate"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->sourcebranch = $records["SourceBranch"];
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