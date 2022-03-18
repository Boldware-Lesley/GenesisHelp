<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	POSVIPRewardDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar VIPRewardCode" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public float FromQty" of type [float]
	"public float ToQty" of type [float]
	"public int Points" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posviprewarddet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $viprewardcode ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $fromqty ;	
	public $toqty ;	
	public $points ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [VIPRewardCode], [StockCode], [LinkCode], [Description1], [FromQty], [ToQty], [Points], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSVIPRewardDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->viprewardcode = $records["VIPRewardCode"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->fromqty = $records["FromQty"];
				$instance->toqty = $records["ToQty"];
				$instance->points = $records["Points"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using VIPRewardCode
	*/
	public static function ini_VIPRewardCode($viprewardcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [VIPRewardCode], [StockCode], [LinkCode], [Description1], [FromQty], [ToQty], [Points], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSVIPRewardDet]  WHERE [VIPRewardCode]=:viprewardcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":viprewardcode", $viprewardcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->viprewardcode = $records["VIPRewardCode"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->fromqty = $records["FromQty"];
				$instance->toqty = $records["ToQty"];
				$instance->points = $records["Points"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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