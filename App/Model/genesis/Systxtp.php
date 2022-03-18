<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	SYSTxTp

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar MODCODE" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public nvarchar TXTPDESC" of type [nvarchar]
	"public nvarchar DRCR" of type [nvarchar]
	"public nvarchar APPLYTAX" of type [nvarchar]
	"public nvarchar ALLOWDISCOUNT" of type [nvarchar]
	"public nvarchar AllowGL" of type [nvarchar]
	"public nvarchar TxTpType" of type [nvarchar]
	"public int DefSeqNo" of type [int]
*/
namespace genesis;


use PDO;

class Systxtp {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $modcode ="";
	public $txtp ="";
	public $txtpdesc ="";
	public $drcr ="";
	public $applytax ="";
	public $allowdiscount ="";
	public $allowgl ="";
	public $txtptype ="";
	public $defseqno ="";
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($conn,$recid) {
		$instance = new self();
		try {

			$query = " SELECT RECID, [MODCODE], [TXTP], [TXTPDESC], [DRCR], [APPLYTAX], [ALLOWDISCOUNT], [AllowGL], [TxTpType], [DefSeqNo] FROM [SYSTxTp]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->modcode = $records["MODCODE"];
				$instance->txtp = $records["TXTP"];
				$instance->txtpdesc = $records["TXTPDESC"];
				$instance->drcr = $records["DRCR"];
				$instance->applytax = $records["APPLYTAX"];
				$instance->allowdiscount = $records["ALLOWDISCOUNT"];
				$instance->allowgl = $records["AllowGL"];
				$instance->txtptype = $records["TxTpType"];
				$instance->defseqno = $records["DefSeqNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using MODCODE
	*/
	public static function ini_Code($conn,$modcode,$txtp) {
		$instance = new self();
		try {

			$query = " SELECT RECID, [MODCODE], [TXTP], [TXTPDESC], [DRCR], [APPLYTAX], [ALLOWDISCOUNT], [AllowGL], [TxTpType], [DefSeqNo] FROM [SYSTxTp]  WHERE [MODCODE]=:modcode AND [TXTP]=:TXTP  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
            $stmt->bindParam(":TXTP", $txtp);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->modcode = $records["MODCODE"];
				$instance->txtp = $records["TXTP"];
				$instance->txtpdesc = $records["TXTPDESC"];
				$instance->drcr = $records["DRCR"];
				$instance->applytax = $records["APPLYTAX"];
				$instance->allowdiscount = $records["ALLOWDISCOUNT"];
				$instance->allowgl = $records["AllowGL"];
				$instance->txtptype = $records["TxTpType"];
				$instance->defseqno = $records["DefSeqNo"];
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