<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	CRDRebateBrch

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int REBATENO" of type [int]
	"public int SEQNO" of type [int]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar REBATECODE" of type [nvarchar]
	"public nvarchar INTERCOMPEX" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdrebatebrch {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $rebateno ;	
	public $seqno ;	
	public $branch ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $rebatecode ;	
	public $intercompex ;	
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
			$query = " SELECT RECID, [CO], [REBATENO], [SEQNO], [BRANCH], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [REBATECODE], [INTERCOMPEX], [Account] FROM [CRDRebateBrch]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->rebateno = $records["REBATENO"];
				$instance->seqno = $records["SEQNO"];
				$instance->branch = $records["BRANCH"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->rebatecode = $records["REBATECODE"];
				$instance->intercompex = $records["INTERCOMPEX"];
				$instance->account = $records["Account"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using REBATECODE
	*/
	public static function ini_REBATECODE($rebatecode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [REBATENO], [SEQNO], [BRANCH], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [REBATECODE], [INTERCOMPEX], [Account] FROM [CRDRebateBrch]  WHERE [REBATECODE]=:rebatecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":rebatecode", $rebatecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->rebateno = $records["REBATENO"];
				$instance->seqno = $records["SEQNO"];
				$instance->branch = $records["BRANCH"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->rebatecode = $records["REBATECODE"];
				$instance->intercompex = $records["INTERCOMPEX"];
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