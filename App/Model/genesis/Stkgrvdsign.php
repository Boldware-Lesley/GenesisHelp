<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	STKGrvDSign

[@Descriptions]
Class is using the following global variables:
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar CLAIMCODE" of type [nvarchar]
	"public nvarchar DESC" of type [nvarchar]
	"public image SIGNATURE" of type [image]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public string CLAIMDESC" of type [string]
*/
namespace genesis;


use PDO;

class Stkgrvdsign {
	
	/*BEGIN <<Private Variables>> */
	
	public $co ;	
	public $branch ;	
	public $grvno ;	
	public $txtp ;	
	public $claimcode ;	
	public $desc ;	
	public $signature ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $claimdesc ;	
	
	
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
			$query = " SELECT CO, [BRANCH], [GRVNO], [TXTP], [CLAIMCODE], [DESC], [SIGNATURE], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CLAIMDESC] FROM [STKGrvDSign]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->grvno = $records["GRVNO"];
				$instance->txtp = $records["TXTP"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->desc = $records["DESC"];
				$instance->signature = $records["SIGNATURE"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->claimdesc = $records["CLAIMDESC"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CLAIMCODE
	*/
	public static function ini_CLAIMCODE($claimcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT CO, [BRANCH], [GRVNO], [TXTP], [CLAIMCODE], [DESC], [SIGNATURE], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CLAIMDESC] FROM [STKGrvDSign]  WHERE [CLAIMCODE]=:claimcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":claimcode", $claimcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->grvno = $records["GRVNO"];
				$instance->txtp = $records["TXTP"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->desc = $records["DESC"];
				$instance->signature = $records["SIGNATURE"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->claimdesc = $records["CLAIMDESC"];
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