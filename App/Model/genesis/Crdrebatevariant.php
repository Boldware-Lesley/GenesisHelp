<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	CRDRebateVariant

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int RebateNo" of type [int]
	"public int SeqNo" of type [int]
	"public nvarchar VariantCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public float RebatePerc" of type [float]
	"public float RebateValue" of type [float]
	"public nvarchar ValueType" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdrebatevariant {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $account ;	
	public $rebateno ;	
	public $seqno ;	
	public $variantcode ;	
	public $description ;	
	public $rebateperc ;	
	public $rebatevalue ;	
	public $valuetype ;	
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
			$query = " SELECT RecID, [CO], [Account], [RebateNo], [SeqNo], [VariantCode], [Description], [RebatePerc], [RebateValue], [ValueType], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [CRDRebateVariant]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->account = $records["Account"];
				$instance->rebateno = $records["RebateNo"];
				$instance->seqno = $records["SeqNo"];
				$instance->variantcode = $records["VariantCode"];
				$instance->description = $records["Description"];
				$instance->rebateperc = $records["RebatePerc"];
				$instance->rebatevalue = $records["RebateValue"];
				$instance->valuetype = $records["ValueType"];
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
	Main Constructor For Declearing Using VariantCode
	*/
	public static function ini_VariantCode($variantcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Account], [RebateNo], [SeqNo], [VariantCode], [Description], [RebatePerc], [RebateValue], [ValueType], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [CRDRebateVariant]  WHERE [VariantCode]=:variantcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":variantcode", $variantcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->account = $records["Account"];
				$instance->rebateno = $records["RebateNo"];
				$instance->seqno = $records["SeqNo"];
				$instance->variantcode = $records["VariantCode"];
				$instance->description = $records["Description"];
				$instance->rebateperc = $records["RebatePerc"];
				$instance->rebatevalue = $records["RebateValue"];
				$instance->valuetype = $records["ValueType"];
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