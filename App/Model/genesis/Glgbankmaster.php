<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:40
@Database			:	GENESIS-DEMO
@Table			:	GLGBankMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BankCode" of type [nvarchar]
	"public nvarchar BankName" of type [nvarchar]
	"public nvarchar BankAccNo" of type [nvarchar]
	"public nvarchar BranchCode" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public int GLSubAccNo" of type [int]
	"public int LastCheqNo" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar PayFileFormat" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Glgbankmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $bankcode ;	
	public $bankname ;	
	public $bankaccno ;	
	public $branchcode ;	
	public $glaccno ;	
	public $glsubaccno ;	
	public $lastcheqno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $payfileformat ;	
	
	
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
			$query = " SELECT RecID, [CO], [BankCode], [BankName], [BankAccNo], [BranchCode], [GLAccNo], [GLSubAccNo], [LastCheqNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [PayFileFormat] FROM [GLGBankMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->bankcode = $records["BankCode"];
				$instance->bankname = $records["BankName"];
				$instance->bankaccno = $records["BankAccNo"];
				$instance->branchcode = $records["BranchCode"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->lastcheqno = $records["LastCheqNo"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->payfileformat = $records["PayFileFormat"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using BankCode
	*/
	public static function ini_BankCode($bankcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [BankCode], [BankName], [BankAccNo], [BranchCode], [GLAccNo], [GLSubAccNo], [LastCheqNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [PayFileFormat] FROM [GLGBankMaster]  WHERE [BankCode]=:bankcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":bankcode", $bankcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->bankcode = $records["BankCode"];
				$instance->bankname = $records["BankName"];
				$instance->bankaccno = $records["BankAccNo"];
				$instance->branchcode = $records["BranchCode"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->glsubaccno = $records["GLSubAccNo"];
				$instance->lastcheqno = $records["LastCheqNo"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->payfileformat = $records["PayFileFormat"];
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
			$res = $this->bankname;
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