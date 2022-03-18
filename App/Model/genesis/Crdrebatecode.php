<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	CRDRebateCode

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar REBATECODE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar SHORTNAME" of type [nvarchar]
	"public nvarchar REBATETYPE" of type [nvarchar]
	"public nvarchar CLAIMCODE" of type [nvarchar]
	"public nvarchar GLACNO" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar SAPGLACC" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdrebatecode {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $rebatecode ;	
	public $description ;	
	public $shortname ;	
	public $rebatetype ;	
	public $claimcode ;	
	public $glacno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $sapglacc ;	
	
	
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
			$query = " SELECT RECID, [CO], [REBATECODE], [DESCRIPTION], [SHORTNAME], [REBATETYPE], [CLAIMCODE], [GLACNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [SAPGLACC] FROM [CRDRebateCode]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->rebatecode = $records["REBATECODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->shortname = $records["SHORTNAME"];
				$instance->rebatetype = $records["REBATETYPE"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->glacno = $records["GLACNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->sapglacc = $records["SAPGLACC"];
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
			$query = " SELECT RECID, [CO], [REBATECODE], [DESCRIPTION], [SHORTNAME], [REBATETYPE], [CLAIMCODE], [GLACNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [SAPGLACC] FROM [CRDRebateCode]  WHERE [REBATECODE]=:rebatecode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":rebatecode", $rebatecode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->rebatecode = $records["REBATECODE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->shortname = $records["SHORTNAME"];
				$instance->rebatetype = $records["REBATETYPE"];
				$instance->claimcode = $records["CLAIMCODE"];
				$instance->glacno = $records["GLACNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->sapglacc = $records["SAPGLACC"];
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