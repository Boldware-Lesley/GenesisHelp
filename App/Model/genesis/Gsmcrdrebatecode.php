<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	GSMCRDRebateCode

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar RebateCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar ShortName" of type [nvarchar]
	"public nvarchar RebateType" of type [nvarchar]
	"public nvarchar ClaimCode" of type [nvarchar]
	"public nvarchar GLAcNo" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmcrdrebatecode {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $rebatecode ;	
	public $description ;	
	public $shortname ;	
	public $rebatetype ;	
	public $claimcode ;	
	public $glacno ;	
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
			$query = " SELECT RecID, [RebateCode], [Description], [ShortName], [RebateType], [ClaimCode], [GLAcNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMCRDRebateCode]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->rebatecode = $records["RebateCode"];
				$instance->description = $records["Description"];
				$instance->shortname = $records["ShortName"];
				$instance->rebatetype = $records["RebateType"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->glacno = $records["GLAcNo"];
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
	Main Constructor For Declearing Using RebateCode
	*/
	public static function ini_RebateCode($rebatecode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [RebateCode], [Description], [ShortName], [RebateType], [ClaimCode], [GLAcNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [GSMCRDRebateCode]  WHERE [RebateCode]=:rebatecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":rebatecode", $rebatecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->rebatecode = $records["RebateCode"];
				$instance->description = $records["Description"];
				$instance->shortname = $records["ShortName"];
				$instance->rebatetype = $records["RebateType"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->glacno = $records["GLAcNo"];
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