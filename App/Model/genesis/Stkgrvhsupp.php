<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	STKGrvHSupp

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar ACCOUNT" of type [nvarchar]
	"public nvarchar TXTP" of type [nvarchar]
	"public int GRVNO" of type [int]
	"public nvarchar SUPPLIER" of type [nvarchar]
	"public nvarchar NAME" of type [nvarchar]
	"public nvarchar DOCNO" of type [nvarchar]
	"public float DOCTOTALINCL" of type [float]
	"public float DOCTOTALEXCL" of type [float]
	"public float DOCTAX" of type [float]
	"public nvarchar CLAIMREASON" of type [nvarchar]
	"public float CLAIMTOTAL" of type [float]
	"public nvarchar Transporter" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkgrvhsupp {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $txtp ;	
	public $grvno ;	
	public $supplier ;	
	public $name ;	
	public $docno ;	
	public $doctotalincl ;	
	public $doctotalexcl ;	
	public $doctax ;	
	public $claimreason ;	
	public $claimtotal ;	
	public $transporter ;	
	
	
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
			$query = " SELECT RECID, [CO], [BRANCH], [ACCOUNT], [TXTP], [GRVNO], [SUPPLIER], [NAME], [DOCNO], [DOCTOTALINCL], [DOCTOTALEXCL], [DOCTAX], [CLAIMREASON], [CLAIMTOTAL], [Transporter] FROM [STKGrvHSupp]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->account = $records["ACCOUNT"];
				$instance->txtp = $records["TXTP"];
				$instance->grvno = $records["GRVNO"];
				$instance->supplier = $records["SUPPLIER"];
				$instance->name = $records["NAME"];
				$instance->docno = $records["DOCNO"];
				$instance->doctotalincl = $records["DOCTOTALINCL"];
				$instance->doctotalexcl = $records["DOCTOTALEXCL"];
				$instance->doctax = $records["DOCTAX"];
				$instance->claimreason = $records["CLAIMREASON"];
				$instance->claimtotal = $records["CLAIMTOTAL"];
				$instance->transporter = $records["Transporter"];
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