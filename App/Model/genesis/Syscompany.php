<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	SYSCompany

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar CONAME" of type [nvarchar]
	"public nvarchar COBUSADDRESS1" of type [nvarchar]
	"public nvarchar COBUSADDRESS2" of type [nvarchar]
	"public nvarchar COBUSADDRESS3" of type [nvarchar]
	"public nvarchar COBUSADDRESS4" of type [nvarchar]
	"public nvarchar COPOSTADDRESS1" of type [nvarchar]
	"public nvarchar COPOSTADDRESS2" of type [nvarchar]
	"public nvarchar COPOSTADDRESS3" of type [nvarchar]
	"public nvarchar COPOSTADDRESS4" of type [nvarchar]
	"public nvarchar COPHONE" of type [nvarchar]
	"public nvarchar COFAX" of type [nvarchar]
	"public nvarchar COEMAIL" of type [nvarchar]
	"public nvarchar COREGNO" of type [nvarchar]
	"public nvarchar COVATNO" of type [nvarchar]
	"public nvarchar SERIALNO" of type [nvarchar]
	"public int BRANCHES" of type [int]
	"public nvarchar ShortName" of type [nvarchar]
	"public nvarchar COGroup" of type [nvarchar]
	"public nvarchar COWebSite" of type [nvarchar]
	"public nvarchar COBankName" of type [nvarchar]
	"public nvarchar COBranchName" of type [nvarchar]
	"public nvarchar COBranchCode" of type [nvarchar]
	"public nvarchar COAccNo" of type [nvarchar]
	"public nvarchar COAccName" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Syscompany {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $coname ;	
	public $cobusaddress1 ;	
	public $cobusaddress2 ;	
	public $cobusaddress3 ;	
	public $cobusaddress4 ;	
	public $copostaddress1 ;	
	public $copostaddress2 ;	
	public $copostaddress3 ;	
	public $copostaddress4 ;	
	public $cophone ;	
	public $cofax ;	
	public $coemail ;	
	public $coregno ;	
	public $covatno ;	
	public $serialno ;	
	public $branches ;	
	public $shortname ;	
	public $cogroup ;	
	public $cowebsite ;	
	public $cobankname ;	
	public $cobranchname ;	
	public $cobranchcode ;	
	public $coaccno ;	
	public $coaccname ;	
	
	
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
			$query = " SELECT RECID, [CO], [CONAME], [COBUSADDRESS1], [COBUSADDRESS2], [COBUSADDRESS3], [COBUSADDRESS4], [COPOSTADDRESS1], [COPOSTADDRESS2], [COPOSTADDRESS3], [COPOSTADDRESS4], [COPHONE], [COFAX], [COEMAIL], [COREGNO], [COVATNO], [SERIALNO], [BRANCHES], [ShortName], [COGroup], [COWebSite], [COBankName], [COBranchName], [COBranchCode], [COAccNo], [COAccName] FROM [SYSCompany]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->coname = $records["CONAME"];
				$instance->cobusaddress1 = $records["COBUSADDRESS1"];
				$instance->cobusaddress2 = $records["COBUSADDRESS2"];
				$instance->cobusaddress3 = $records["COBUSADDRESS3"];
				$instance->cobusaddress4 = $records["COBUSADDRESS4"];
				$instance->copostaddress1 = $records["COPOSTADDRESS1"];
				$instance->copostaddress2 = $records["COPOSTADDRESS2"];
				$instance->copostaddress3 = $records["COPOSTADDRESS3"];
				$instance->copostaddress4 = $records["COPOSTADDRESS4"];
				$instance->cophone = $records["COPHONE"];
				$instance->cofax = $records["COFAX"];
				$instance->coemail = $records["COEMAIL"];
				$instance->coregno = $records["COREGNO"];
				$instance->covatno = $records["COVATNO"];
				$instance->serialno = $records["SERIALNO"];
				$instance->branches = $records["BRANCHES"];
				$instance->shortname = $records["ShortName"];
				$instance->cogroup = $records["COGroup"];
				$instance->cowebsite = $records["COWebSite"];
				$instance->cobankname = $records["COBankName"];
				$instance->cobranchname = $records["COBranchName"];
				$instance->cobranchcode = $records["COBranchCode"];
				$instance->coaccno = $records["COAccNo"];
				$instance->coaccname = $records["COAccName"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using COBranchCode
	*/
	public static function ini_COBranchCode($cobranchcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [CONAME], [COBUSADDRESS1], [COBUSADDRESS2], [COBUSADDRESS3], [COBUSADDRESS4], [COPOSTADDRESS1], [COPOSTADDRESS2], [COPOSTADDRESS3], [COPOSTADDRESS4], [COPHONE], [COFAX], [COEMAIL], [COREGNO], [COVATNO], [SERIALNO], [BRANCHES], [ShortName], [COGroup], [COWebSite], [COBankName], [COBranchName], [COBranchCode], [COAccNo], [COAccName] FROM [SYSCompany]  WHERE [COBranchCode]=:cobranchcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":cobranchcode", $cobranchcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->coname = $records["CONAME"];
				$instance->cobusaddress1 = $records["COBUSADDRESS1"];
				$instance->cobusaddress2 = $records["COBUSADDRESS2"];
				$instance->cobusaddress3 = $records["COBUSADDRESS3"];
				$instance->cobusaddress4 = $records["COBUSADDRESS4"];
				$instance->copostaddress1 = $records["COPOSTADDRESS1"];
				$instance->copostaddress2 = $records["COPOSTADDRESS2"];
				$instance->copostaddress3 = $records["COPOSTADDRESS3"];
				$instance->copostaddress4 = $records["COPOSTADDRESS4"];
				$instance->cophone = $records["COPHONE"];
				$instance->cofax = $records["COFAX"];
				$instance->coemail = $records["COEMAIL"];
				$instance->coregno = $records["COREGNO"];
				$instance->covatno = $records["COVATNO"];
				$instance->serialno = $records["SERIALNO"];
				$instance->branches = $records["BRANCHES"];
				$instance->shortname = $records["ShortName"];
				$instance->cogroup = $records["COGroup"];
				$instance->cowebsite = $records["COWebSite"];
				$instance->cobankname = $records["COBankName"];
				$instance->cobranchname = $records["COBranchName"];
				$instance->cobranchcode = $records["COBranchCode"];
				$instance->coaccno = $records["COAccNo"];
				$instance->coaccname = $records["COAccName"];
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
			$res = $this->coname;
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