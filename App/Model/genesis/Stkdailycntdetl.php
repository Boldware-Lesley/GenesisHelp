<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	STKDailyCntDetl

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar DateCount" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public float CountQty1" of type [float]
	"public float CountQty2" of type [float]
	"public float CountQty3" of type [float]
	"public float Onhand" of type [float]
*/
namespace genesis;


use PDO;

class Stkdailycntdetl {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $datecount ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $countqty1 ;	
	public $countqty2 ;	
	public $countqty3 ;	
	public $onhand ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [DateCount], [StockCode], [LinkCode], [Description1], [CountQty1], [CountQty2], [CountQty3], [Onhand] FROM [STKDailyCntDetl]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->datecount = $records["DateCount"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->countqty1 = $records["CountQty1"];
				$instance->countqty2 = $records["CountQty2"];
				$instance->countqty3 = $records["CountQty3"];
				$instance->onhand = $records["Onhand"];
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
			$query = " SELECT RecID, [CO], [Branch], [DateCount], [StockCode], [LinkCode], [Description1], [CountQty1], [CountQty2], [CountQty3], [Onhand] FROM [STKDailyCntDetl]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->datecount = $records["DateCount"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->countqty1 = $records["CountQty1"];
				$instance->countqty2 = $records["CountQty2"];
				$instance->countqty3 = $records["CountQty3"];
				$instance->onhand = $records["Onhand"];
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