<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:26
@Database			:	GENESIS-DEMO
@Table			:	PURDealDept

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int DealNo" of type [int]
	"public int SeqNo" of type [int]
	"public nvarchar DeptCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public float DiscountPerc" of type [float]
	"public float DiscountValue" of type [float]
	"public nvarchar ValueType" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public float CostExcl" of type [float]
	"public float CostIncl" of type [float]
*/
namespace genesis;


use PDO;

class Purdealdept {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $dealno ;	
	public $seqno ;	
	public $deptcode ;	
	public $description ;	
	public $discountperc ;	
	public $discountvalue ;	
	public $valuetype ;	
	public $notes ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $costexcl ;	
	public $costincl ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [DealNo], [SeqNo], [DeptCode], [Description], [DiscountPerc], [DiscountValue], [ValueType], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CostExcl], [CostIncl] FROM [PURDealDept]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->dealno = $records["DealNo"];
				$instance->seqno = $records["SeqNo"];
				$instance->deptcode = $records["DeptCode"];
				$instance->description = $records["Description"];
				$instance->discountperc = $records["DiscountPerc"];
				$instance->discountvalue = $records["DiscountValue"];
				$instance->valuetype = $records["ValueType"];
				$instance->notes = $records["Notes"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using DeptCode
	*/
	public static function ini_DeptCode($deptcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [DealNo], [SeqNo], [DeptCode], [Description], [DiscountPerc], [DiscountValue], [ValueType], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CostExcl], [CostIncl] FROM [PURDealDept]  WHERE [DeptCode]=:deptcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":deptcode", $deptcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->dealno = $records["DealNo"];
				$instance->seqno = $records["SeqNo"];
				$instance->deptcode = $records["DeptCode"];
				$instance->description = $records["Description"];
				$instance->discountperc = $records["DiscountPerc"];
				$instance->discountvalue = $records["DiscountValue"];
				$instance->valuetype = $records["ValueType"];
				$instance->notes = $records["Notes"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->costexcl = $records["CostExcl"];
				$instance->costincl = $records["CostIncl"];
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