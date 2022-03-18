<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	GSMDealHdr

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar DEALNO" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar SUBACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar FROMDATE" of type [nvarchar]
	"public nvarchar TODATE" of type [nvarchar]
	"public nvarchar PRCHGNO" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar BCDealCost" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmdealhdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $dealno ;	
	public $description ;	
	public $account ;	
	public $subaccount ;	
	public $name ;	
	public $fromdate ;	
	public $todate ;	
	public $prchgno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $bcdealcost ;	
	
	
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
			$query = " SELECT RECID, [DEALNO], [DESCRIPTION], [ACCOUNT], [SUBACCOUNT], [NAME], [FROMDATE], [TODATE], [PRCHGNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [BCDealCost] FROM [GSMDealHdr]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->dealno = $records["DEALNO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->account = $records["ACCOUNT"];
				$instance->subaccount = $records["SUBACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->prchgno = $records["PRCHGNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->bcdealcost = $records["BCDealCost"];
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