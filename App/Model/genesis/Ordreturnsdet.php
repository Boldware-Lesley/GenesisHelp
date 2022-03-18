<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	ORDReturnsDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int ReturnNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public float Qty" of type [float]
	"public float Weight" of type [float]
	"public nvarchar ProdDate" of type [nvarchar]
	"public nvarchar ExpDate" of type [nvarchar]
	"public nvarchar SerialNo" of type [nvarchar]
	"public float Temp" of type [float]
	"public nvarchar Condition" of type [nvarchar]
	"public nvarchar Outcome" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Ordreturnsdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $returnno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $qty ;	
	public $weight ;	
	public $proddate ;	
	public $expdate ;	
	public $serialno ;	
	public $temp ;	
	public $condition ;	
	public $outcome ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [ReturnNo], [StockCode], [LinkCode], [Description1], [Qty], [Weight], [ProdDate], [ExpDate], [SerialNo], [Temp], [Condition], [Outcome] FROM [ORDReturnsDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->returnno = $records["ReturnNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->qty = $records["Qty"];
				$instance->weight = $records["Weight"];
				$instance->proddate = $records["ProdDate"];
				$instance->expdate = $records["ExpDate"];
				$instance->serialno = $records["SerialNo"];
				$instance->temp = $records["Temp"];
				$instance->condition = $records["Condition"];
				$instance->outcome = $records["Outcome"];
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
			$query = " SELECT RecID, [CO], [Branch], [ReturnNo], [StockCode], [LinkCode], [Description1], [Qty], [Weight], [ProdDate], [ExpDate], [SerialNo], [Temp], [Condition], [Outcome] FROM [ORDReturnsDet]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->returnno = $records["ReturnNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->qty = $records["Qty"];
				$instance->weight = $records["Weight"];
				$instance->proddate = $records["ProdDate"];
				$instance->expdate = $records["ExpDate"];
				$instance->serialno = $records["SerialNo"];
				$instance->temp = $records["Temp"];
				$instance->condition = $records["Condition"];
				$instance->outcome = $records["Outcome"];
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
			$res = $this->description1;
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