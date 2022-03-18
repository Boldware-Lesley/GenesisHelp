<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	DEBCRMMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar CRMCode" of type [nvarchar]
	"public nvarchar CRMName" of type [nvarchar]
	"public nvarchar DefBranch" of type [nvarchar]
	"public int CustCnt" of type [int]
*/
namespace genesis;


use PDO;

class Debcrmmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $crmcode ;	
	public $crmname ;	
	public $defbranch ;	
	public $custcnt ;	
	
	
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
			$query = " SELECT RecID, [CO], [CRMCode], [CRMName], [DefBranch], [CustCnt] FROM [DEBCRMMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->crmcode = $records["CRMCode"];
				$instance->crmname = $records["CRMName"];
				$instance->defbranch = $records["DefBranch"];
				$instance->custcnt = $records["CustCnt"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CRMCode
	*/
	public static function ini_CRMCode($crmcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [CRMCode], [CRMName], [DefBranch], [CustCnt] FROM [DEBCRMMaster]  WHERE [CRMCode]=:crmcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":crmcode", $crmcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->crmcode = $records["CRMCode"];
				$instance->crmname = $records["CRMName"];
				$instance->defbranch = $records["DefBranch"];
				$instance->custcnt = $records["CustCnt"];
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
			$res = $this->crmname;
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