<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	POSVIPPackage

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar VIPPackCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar CardType" of type [nvarchar]
	"public float CardCharge" of type [float]
	"public nvarchar RewardMthd" of type [nvarchar]
	"public nvarchar VIPContCode" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posvippackage {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $vippackcode ;	
	public $description ;	
	public $cardtype ;	
	public $cardcharge ;	
	public $rewardmthd ;	
	public $vipcontcode ;	
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
			$query = " SELECT RecID, [CO], [VIPPackCode], [Description], [CardType], [CardCharge], [RewardMthd], [VIPContCode], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSVIPPackage]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->vippackcode = $records["VIPPackCode"];
				$instance->description = $records["Description"];
				$instance->cardtype = $records["CardType"];
				$instance->cardcharge = $records["CardCharge"];
				$instance->rewardmthd = $records["RewardMthd"];
				$instance->vipcontcode = $records["VIPContCode"];
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
	Main Constructor For Declearing Using VIPPackCode
	*/
	public static function ini_VIPPackCode($vippackcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [VIPPackCode], [Description], [CardType], [CardCharge], [RewardMthd], [VIPContCode], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [POSVIPPackage]  WHERE [VIPPackCode]=:vippackcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":vippackcode", $vippackcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->vippackcode = $records["VIPPackCode"];
				$instance->description = $records["Description"];
				$instance->cardtype = $records["CardType"];
				$instance->cardcharge = $records["CardCharge"];
				$instance->rewardmthd = $records["RewardMthd"];
				$instance->vipcontcode = $records["VIPContCode"];
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
			$res = $this->description;
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