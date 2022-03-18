<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	STKMstRolls

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public int RollNo" of type [int]
	"public float RollQty" of type [float]
	"public float RollOnhand" of type [float]
	"public nvarchar RollStatus" of type [nvarchar]
	"public nvarchar GRVAccount" of type [nvarchar]
	"public int GRVNo" of type [int]
	"public nvarchar GRVDate" of type [nvarchar]
	"public nvarchar SaleTxTp" of type [nvarchar]
	"public nvarchar SaleDocNo" of type [nvarchar]
	"public nvarchar SaleDate" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkmstrolls {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $rollno ;	
	public $rollqty ;	
	public $rollonhand ;	
	public $rollstatus ;	
	public $grvaccount ;	
	public $grvno ;	
	public $grvdate ;	
	public $saletxtp ;	
	public $saledocno ;	
	public $saledate ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [RollNo], [RollQty], [RollOnhand], [RollStatus], [GRVAccount], [GRVNo], [GRVDate], [SaleTxTp], [SaleDocNo], [SaleDate] FROM [STKMstRolls]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->rollno = $records["RollNo"];
				$instance->rollqty = $records["RollQty"];
				$instance->rollonhand = $records["RollOnhand"];
				$instance->rollstatus = $records["RollStatus"];
				$instance->grvaccount = $records["GRVAccount"];
				$instance->grvno = $records["GRVNo"];
				$instance->grvdate = $records["GRVDate"];
				$instance->saletxtp = $records["SaleTxTp"];
				$instance->saledocno = $records["SaleDocNo"];
				$instance->saledate = $records["SaleDate"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [RollNo], [RollQty], [RollOnhand], [RollStatus], [GRVAccount], [GRVNo], [GRVDate], [SaleTxTp], [SaleDocNo], [SaleDate] FROM [STKMstRolls]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->rollno = $records["RollNo"];
				$instance->rollqty = $records["RollQty"];
				$instance->rollonhand = $records["RollOnhand"];
				$instance->rollstatus = $records["RollStatus"];
				$instance->grvaccount = $records["GRVAccount"];
				$instance->grvno = $records["GRVNo"];
				$instance->grvdate = $records["GRVDate"];
				$instance->saletxtp = $records["SaleTxTp"];
				$instance->saledocno = $records["SaleDocNo"];
				$instance->saledate = $records["SaleDate"];
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