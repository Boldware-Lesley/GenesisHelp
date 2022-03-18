<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	PURSuppDealHdrClm

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int DealNo" of type [int]
	"public nvarchar ClaimCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar FromDate" of type [nvarchar]
	"public nvarchar ToDate" of type [nvarchar]
	"public int PRChgNo" of type [int]
	"public nvarchar ValueType" of type [nvarchar]
	"public float Value" of type [float]
	"public float ClaimAmountExcl" of type [float]
	"public float ClaimAmountIncl" of type [float]
	"public int ClaimNo" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Pursuppdealhdrclm {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $dealno ;	
	public $claimcode ;	
	public $description ;	
	public $fromdate ;	
	public $todate ;	
	public $prchgno ;	
	public $valuetype ;	
	public $value ;	
	public $claimamountexcl ;	
	public $claimamountincl ;	
	public $claimno ;	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [DealNo], [ClaimCode], [Description], [FromDate], [ToDate], [PRChgNo], [ValueType], [Value], [ClaimAmountExcl], [ClaimAmountIncl], [ClaimNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [PURSuppDealHdrClm]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->dealno = $records["DealNo"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->description = $records["Description"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->prchgno = $records["PRChgNo"];
				$instance->valuetype = $records["ValueType"];
				$instance->value = $records["Value"];
				$instance->claimamountexcl = $records["ClaimAmountExcl"];
				$instance->claimamountincl = $records["ClaimAmountIncl"];
				$instance->claimno = $records["ClaimNo"];
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
	Main Constructor For Declearing Using ClaimCode
	*/
	public static function ini_ClaimCode($claimcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [DealNo], [ClaimCode], [Description], [FromDate], [ToDate], [PRChgNo], [ValueType], [Value], [ClaimAmountExcl], [ClaimAmountIncl], [ClaimNo], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [PURSuppDealHdrClm]  WHERE [ClaimCode]=:claimcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":claimcode", $claimcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->dealno = $records["DealNo"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->description = $records["Description"];
				$instance->fromdate = $records["FromDate"];
				$instance->todate = $records["ToDate"];
				$instance->prchgno = $records["PRChgNo"];
				$instance->valuetype = $records["ValueType"];
				$instance->value = $records["Value"];
				$instance->claimamountexcl = $records["ClaimAmountExcl"];
				$instance->claimamountincl = $records["ClaimAmountIncl"];
				$instance->claimno = $records["ClaimNo"];
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