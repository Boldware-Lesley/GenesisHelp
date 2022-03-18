<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	STKPrChgHdr

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar PRCHGNO" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar DATECOSTUPD" of type [nvarchar]
	"public nvarchar DATESELLUPD" of type [nvarchar]
	"public nvarchar COSTSTATUS" of type [nvarchar]
	"public nvarchar SELLSTATUS" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar DEBCOMPANY" of type [nvarchar]
	"public nvarchar DEBBRANCH" of type [nvarchar]
	"public nvarchar AuthStatus" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkprchghdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $prchgno ;	
	public $description ;	
	public $account ;	
	public $name ;	
	public $datecostupd ;	
	public $datesellupd ;	
	public $coststatus ;	
	public $sellstatus ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $debcompany ;	
	public $debbranch ;	
	public $authstatus ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [PRCHGNO], [DESCRIPTION], [ACCOUNT], [NAME], [DATECOSTUPD], [DATESELLUPD], [COSTSTATUS], [SELLSTATUS], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [DEBCOMPANY], [DEBBRANCH], [AuthStatus] FROM [STKPrChgHdr]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->prchgno = $records["PRCHGNO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->account = $records["ACCOUNT"];
				$instance->name = $records["NAME"];
				$instance->datecostupd = $records["DATECOSTUPD"];
				$instance->datesellupd = $records["DATESELLUPD"];
				$instance->coststatus = $records["COSTSTATUS"];
				$instance->sellstatus = $records["SELLSTATUS"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->debcompany = $records["DEBCOMPANY"];
				$instance->debbranch = $records["DEBBRANCH"];
				$instance->authstatus = $records["AuthStatus"];
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