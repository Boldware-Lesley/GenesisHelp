<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	GSMVarPromDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public int VarPromNo" of type [int]
	"public nvarchar VariantCode" of type [nvarchar]
	"public float FromQty" of type [float]
	"public float ToQty" of type [float]
	"public nvarchar PriceCode" of type [nvarchar]
	"public float Excl" of type [float]
	"public float Incl" of type [float]
*/
namespace genesis;


use PDO;

class Gsmvarpromdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $varpromno ;	
	public $variantcode ;	
	public $fromqty ;	
	public $toqty ;	
	public $pricecode ;	
	public $excl ;	
	public $incl ;	
	
	
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
			$query = " SELECT RecID, [VarPromNo], [VariantCode], [FromQty], [ToQty], [PriceCode], [Excl], [Incl] FROM [GSMVarPromDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->varpromno = $records["VarPromNo"];
				$instance->variantcode = $records["VariantCode"];
				$instance->fromqty = $records["FromQty"];
				$instance->toqty = $records["ToQty"];
				$instance->pricecode = $records["PriceCode"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
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
			$query = " SELECT RecID, [VarPromNo], [VariantCode], [FromQty], [ToQty], [PriceCode], [Excl], [Incl] FROM [GSMVarPromDet]  WHERE [VariantCode]=:variantcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":variantcode", $variantcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->varpromno = $records["VarPromNo"];
				$instance->variantcode = $records["VariantCode"];
				$instance->fromqty = $records["FromQty"];
				$instance->toqty = $records["ToQty"];
				$instance->pricecode = $records["PriceCode"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
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