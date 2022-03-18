<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	POSLBCust

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar LBCUSTNO" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar ADDRESS1" of type [nvarchar]
	"public nvarchar ADDRESS2" of type [nvarchar]
	"public nvarchar ADDRESS3" of type [nvarchar]
	"public nvarchar ADDRESS4" of type [nvarchar]
	"public nvarchar HOMEPHONE" of type [nvarchar]
	"public nvarchar WORKPHONE" of type [nvarchar]
	"public nvarchar CELLPHONE" of type [nvarchar]
	"public nvarchar IDNO" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Poslbcust {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $lbcustno ;	
	public $name ;	
	public $address1 ;	
	public $address2 ;	
	public $address3 ;	
	public $address4 ;	
	public $homephone ;	
	public $workphone ;	
	public $cellphone ;	
	public $idno ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [LBCUSTNO], [NAME], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [HOMEPHONE], [WORKPHONE], [CELLPHONE], [IDNO], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID] FROM [POSLBCust]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->lbcustno = $records["LBCUSTNO"];
				$instance->name = $records["NAME"];
				$instance->address1 = $records["ADDRESS1"];
				$instance->address2 = $records["ADDRESS2"];
				$instance->address3 = $records["ADDRESS3"];
				$instance->address4 = $records["ADDRESS4"];
				$instance->homephone = $records["HOMEPHONE"];
				$instance->workphone = $records["WORKPHONE"];
				$instance->cellphone = $records["CELLPHONE"];
				$instance->idno = $records["IDNO"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
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
			$res = $this->name;
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