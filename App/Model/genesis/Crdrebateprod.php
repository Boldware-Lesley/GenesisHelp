<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:38
@Database			:	GENESIS-DEMO
@Table			:	CRDRebateProd

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int REBATENO" of type [int]
	"public int SEQNO" of type [int]
	"public nvarchar STOCKCODE" of type [nvarchar]
	"public nvarchar LINKCODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public float REBATEPERC" of type [float]
	"public float REBATEVALUE" of type [float]
	"public nvarchar VALUETYPE" of type [nvarchar]
	"public float MINIMUMQTY" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public int Units" of type [int]
	"public nvarchar Account" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdrebateprod {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $rebateno ;	
	public $seqno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description ;	
	public $rebateperc ;	
	public $rebatevalue ;	
	public $valuetype ;	
	public $minimumqty ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $units ;	
	public $account ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [REBATENO], [SEQNO], [STOCKCODE], [LINKCODE], [DESCRIPTION], [REBATEPERC], [REBATEVALUE], [VALUETYPE], [MINIMUMQTY], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Units], [Account] FROM [CRDRebateProd]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->rebateno = $records["REBATENO"];
				$instance->seqno = $records["SEQNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->rebateperc = $records["REBATEPERC"];
				$instance->rebatevalue = $records["REBATEVALUE"];
				$instance->valuetype = $records["VALUETYPE"];
				$instance->minimumqty = $records["MINIMUMQTY"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->units = $records["Units"];
				$instance->account = $records["Account"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using STOCKCODE
	*/
	public static function ini_STOCKCODE($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [REBATENO], [SEQNO], [STOCKCODE], [LINKCODE], [DESCRIPTION], [REBATEPERC], [REBATEVALUE], [VALUETYPE], [MINIMUMQTY], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Units], [Account] FROM [CRDRebateProd]  WHERE [STOCKCODE]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->rebateno = $records["REBATENO"];
				$instance->seqno = $records["SEQNO"];
				$instance->stockcode = $records["STOCKCODE"];
				$instance->linkcode = $records["LINKCODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->rebateperc = $records["REBATEPERC"];
				$instance->rebatevalue = $records["REBATEVALUE"];
				$instance->valuetype = $records["VALUETYPE"];
				$instance->minimumqty = $records["MINIMUMQTY"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->units = $records["Units"];
				$instance->account = $records["Account"];
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