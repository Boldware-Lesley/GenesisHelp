<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	STKSTakeHead

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int BatchNo" of type [int]
	"public nvarchar BatchDate" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar WH" of type [nvarchar]
	"public nvarchar ExtractMthd" of type [nvarchar]
	"public int ItemCount" of type [int]
	"public float StockValue" of type [float]
	"public float CountValue" of type [float]
	"public float AdjustValue" of type [float]
	"public int AdjustNo" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar CountMthd" of type [nvarchar]
	"public nvarchar RefreshOH" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkstakehead {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $batchno ;	
	public $batchdate ;	
	public $details ;	
	public $status ;	
	public $ap ;	
	public $wh ;	
	public $extractmthd ;	
	public $itemcount ;	
	public $stockvalue ;	
	public $countvalue ;	
	public $adjustvalue ;	
	public $adjustno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $countmthd ;	
	public $refreshoh ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [BatchNo], [BatchDate], [Details], [Status], [AP], [WH], [ExtractMthd], [ItemCount], [StockValue], [CountValue], [AdjustValue], [AdjustNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CountMthd], [RefreshOH] FROM [STKSTakeHead]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->batchno = $records["BatchNo"];
				$instance->batchdate = $records["BatchDate"];
				$instance->details = $records["Details"];
				$instance->status = $records["Status"];
				$instance->ap = $records["AP"];
				$instance->wh = $records["WH"];
				$instance->extractmthd = $records["ExtractMthd"];
				$instance->itemcount = $records["ItemCount"];
				$instance->stockvalue = $records["StockValue"];
				$instance->countvalue = $records["CountValue"];
				$instance->adjustvalue = $records["AdjustValue"];
				$instance->adjustno = $records["AdjustNo"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->countmthd = $records["CountMthd"];
				$instance->refreshoh = $records["RefreshOH"];
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