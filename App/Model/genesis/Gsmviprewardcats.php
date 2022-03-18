<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	GSMVIPRewardCats

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar VIPRewardCode" of type [nvarchar]
	"public nvarchar VIPCatCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmviprewardcats {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $viprewardcode ;	
	public $vipcatcode ;	
	public $description ;	
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
			$query = " SELECT RecID, [VIPRewardCode], [VIPCatCode], [Description], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMVIPRewardCats]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->viprewardcode = $records["VIPRewardCode"];
				$instance->vipcatcode = $records["VIPCatCode"];
				$instance->description = $records["Description"];
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
			$query = " SELECT RecID, [VIPRewardCode], [VIPCatCode], [Description], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMVIPRewardCats]  WHERE [VIPRewardCode]=:viprewardcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":viprewardcode", $viprewardcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->viprewardcode = $records["VIPRewardCode"];
				$instance->vipcatcode = $records["VIPCatCode"];
				$instance->description = $records["Description"];
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