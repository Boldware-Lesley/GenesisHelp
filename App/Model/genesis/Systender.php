<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	SYSTender

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar TENDERTYPE" of type [nvarchar]
	"public nvarchar TENDERDESC" of type [nvarchar]
	"public nvarchar ALLOWSUBTYPES" of type [nvarchar]
	"public nvarchar GLACNO" of type [nvarchar]
	"public nvarchar CodeType" of type [nvarchar]
	"public int DisplaySeq" of type [int]
	"public nvarchar TenderForm" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Systender {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $tendertype ;	
	public $tenderdesc ;	
	public $allowsubtypes ;	
	public $glacno ;	
	public $codetype ;	
	public $displayseq ;	
	public $tenderform ;	
	
	
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
			$query = " SELECT RECID, [CO], [TENDERTYPE], [TENDERDESC], [ALLOWSUBTYPES], [GLACNO], [CodeType], [DisplaySeq], [TenderForm] FROM [SYSTender]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->tendertype = $records["TENDERTYPE"];
				$instance->tenderdesc = $records["TENDERDESC"];
				$instance->allowsubtypes = $records["ALLOWSUBTYPES"];
				$instance->glacno = $records["GLACNO"];
				$instance->codetype = $records["CodeType"];
				$instance->displayseq = $records["DisplaySeq"];
				$instance->tenderform = $records["TenderForm"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CodeType
	*/
	public static function ini_CodeType($codetype) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [TENDERTYPE], [TENDERDESC], [ALLOWSUBTYPES], [GLACNO], [CodeType], [DisplaySeq], [TenderForm] FROM [SYSTender]  WHERE [CodeType]=:codetype  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":codetype", $codetype);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->tendertype = $records["TENDERTYPE"];
				$instance->tenderdesc = $records["TENDERDESC"];
				$instance->allowsubtypes = $records["ALLOWSUBTYPES"];
				$instance->glacno = $records["GLACNO"];
				$instance->codetype = $records["CodeType"];
				$instance->displayseq = $records["DisplaySeq"];
				$instance->tenderform = $records["TenderForm"];
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