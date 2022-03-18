<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:40
@Database			:	GENESIS-DEMO
@Table			:	GSMQuickScan

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public int ButtonSeq" of type [int]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar ShortName" of type [nvarchar]
	"public int ImageIndex" of type [int]
	"public float Quantity" of type [float]
	"public int SplitCode" of type [int]
	"public nvarchar Empties" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmquickscan {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $stockcode ;	
	public $linkcode ;	
	public $buttonseq ;	
	public $description1 ;	
	public $shortname ;	
	public $imageindex ;	
	public $quantity ;	
	public $splitcode ;	
	public $empties ;	
	
	
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
			$query = " SELECT RecID, [StockCode], [LinkCode], [ButtonSeq], [Description1], [ShortName], [ImageIndex], [Quantity], [SplitCode], [Empties] FROM [GSMQuickScan]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->buttonseq = $records["ButtonSeq"];
				$instance->description1 = $records["Description1"];
				$instance->shortname = $records["ShortName"];
				$instance->imageindex = $records["ImageIndex"];
				$instance->quantity = $records["Quantity"];
				$instance->splitcode = $records["SplitCode"];
				$instance->empties = $records["Empties"];
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
			$query = " SELECT RecID, [StockCode], [LinkCode], [ButtonSeq], [Description1], [ShortName], [ImageIndex], [Quantity], [SplitCode], [Empties] FROM [GSMQuickScan]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->buttonseq = $records["ButtonSeq"];
				$instance->description1 = $records["Description1"];
				$instance->shortname = $records["ShortName"];
				$instance->imageindex = $records["ImageIndex"];
				$instance->quantity = $records["Quantity"];
				$instance->splitcode = $records["SplitCode"];
				$instance->empties = $records["Empties"];
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