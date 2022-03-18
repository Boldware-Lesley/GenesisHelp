<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	STKCompDET

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar COMNO" of type [nvarchar]
	"public nvarchar PMCODE" of type [nvarchar]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public float SELLEXCL" of type [float]
	"public float SELLINCL" of type [float]
	"public float LASTCOSTEXCL" of type [float]
	"public float LASTCOSTINCL" of type [float]
	"public float AVGCOSTEXCL" of type [float]
	"public float AVGCOSTINCL" of type [float]
	"public float BUYCOSTEXCL" of type [float]
	"public float BUYCOSTINCL" of type [float]
	"public float FROMQTY" of type [float]
	"public float TOQTY" of type [float]
	"public float REBAMT" of type [float]
	"public nvarchar LINENO" of type [nvarchar]
	"public nvarchar STATUS" of type [nvarchar]
	"public float DEALPRICE" of type [float]
*/
namespace genesis;


use PDO;

class Stkcompdet {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $comno ;	
	public $pmcode ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description ;	
	public $sellexcl ;	
	public $sellincl ;	
	public $lastcostexcl ;	
	public $lastcostincl ;	
	public $avgcostexcl ;	
	public $avgcostincl ;	
	public $buycostexcl ;	
	public $buycostincl ;	
	public $fromqty ;	
	public $toqty ;	
	public $rebamt ;	
	public $lineno ;	
	public $status ;	
	public $dealprice ;	
	
	
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
			$query = " SELECT RecID, [CO], [COMNO], [PMCODE], [STOCKCODE], [LINKCODE], [DESCRIPTION], [SELLEXCL], [SELLINCL], [LASTCOSTEXCL], [LASTCOSTINCL], [AVGCOSTEXCL], [AVGCOSTINCL], [BUYCOSTEXCL], [BUYCOSTINCL], [FROMQTY], [TOQTY], [REBAMT], [LINENO], [STATUS], [DEALPRICE] FROM [STKCompDET]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->comno = $records["COMNO"];
				$instance->pmcode = $records["PMCODE"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->sellexcl = $records["SELLEXCL"];
				$instance->sellincl = $records["SELLINCL"];
				$instance->lastcostexcl = $records["LASTCOSTEXCL"];
				$instance->lastcostincl = $records["LASTCOSTINCL"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->avgcostincl = $records["AVGCOSTINCL"];
				$instance->buycostexcl = $records["BUYCOSTEXCL"];
				$instance->buycostincl = $records["BUYCOSTINCL"];
				$instance->fromqty = $records["FROMQTY"];
				$instance->toqty = $records["TOQTY"];
				$instance->rebamt = $records["REBAMT"];
				$instance->lineno = $records["LINENO"];
				$instance->status = $records["STATUS"];
				$instance->dealprice = $records["DEALPRICE"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using PMCODE
	*/
	public static function ini_PMCODE($pmcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [COMNO], [PMCODE], [STOCKCODE], [LINKCODE], [DESCRIPTION], [SELLEXCL], [SELLINCL], [LASTCOSTEXCL], [LASTCOSTINCL], [AVGCOSTEXCL], [AVGCOSTINCL], [BUYCOSTEXCL], [BUYCOSTINCL], [FROMQTY], [TOQTY], [REBAMT], [LINENO], [STATUS], [DEALPRICE] FROM [STKCompDET]  WHERE [PMCODE]=:pmcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":pmcode", $pmcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->comno = $records["COMNO"];
				$instance->pmcode = $records["PMCODE"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->sellexcl = $records["SELLEXCL"];
				$instance->sellincl = $records["SELLINCL"];
				$instance->lastcostexcl = $records["LASTCOSTEXCL"];
				$instance->lastcostincl = $records["LASTCOSTINCL"];
				$instance->avgcostexcl = $records["AVGCOSTEXCL"];
				$instance->avgcostincl = $records["AVGCOSTINCL"];
				$instance->buycostexcl = $records["BUYCOSTEXCL"];
				$instance->buycostincl = $records["BUYCOSTINCL"];
				$instance->fromqty = $records["FROMQTY"];
				$instance->toqty = $records["TOQTY"];
				$instance->rebamt = $records["REBAMT"];
				$instance->lineno = $records["LINENO"];
				$instance->status = $records["STATUS"];
				$instance->dealprice = $records["DEALPRICE"];
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