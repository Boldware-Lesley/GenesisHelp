<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	STKVarPromDet

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int VarPromNo" of type [int]
	"public nvarchar VariantCode" of type [nvarchar]
	"public float FromQty" of type [float]
	"public float ToQty" of type [float]
	"public nvarchar PriceCode" of type [nvarchar]
	"public float Excl" of type [float]
	"public float Incl" of type [float]
	"public nvarchar VATCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkvarpromdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $varpromno ;	
	public $variantcode ;	
	public $fromqty ;	
	public $toqty ;	
	public $pricecode ;	
	public $excl ;	
	public $incl ;	
	public $vatcode ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [VarPromNo], [VariantCode], [FromQty], [ToQty], [PriceCode], [Excl], [Incl], [VATCode] FROM [STKVarPromDet]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->varpromno = $records["VarPromNo"];
				$instance->variantcode = $records["VariantCode"];
				$instance->fromqty = $records["FromQty"];
				$instance->toqty = $records["ToQty"];
				$instance->pricecode = $records["PriceCode"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
				$instance->vatcode = $records["VATCode"];
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
			$query = " SELECT RecID, [CO], [Branch], [VarPromNo], [VariantCode], [FromQty], [ToQty], [PriceCode], [Excl], [Incl], [VATCode] FROM [STKVarPromDet]  WHERE [VariantCode]=:variantcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":variantcode", $variantcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->varpromno = $records["VarPromNo"];
				$instance->variantcode = $records["VariantCode"];
				$instance->fromqty = $records["FromQty"];
				$instance->toqty = $records["ToQty"];
				$instance->pricecode = $records["PriceCode"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
				$instance->vatcode = $records["VATCode"];
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