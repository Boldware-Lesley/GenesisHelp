<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	GLGAccMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int GLAccNo" of type [int]
	"public nvarchar AccType" of type [nvarchar]
	"public nvarchar GLCategory" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar AllowJnls" of type [nvarchar]
	"public nvarchar AllowVAT" of type [nvarchar]
	"public nvarchar VATCode" of type [nvarchar]
	"public nvarchar ControlAcc" of type [nvarchar]
	"public nvarchar GroupDescription" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Glgaccmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ="";
    public $glaccno ="";
    public $acctype ="";
    public $glcategory ="";
    public $description ="";
    public $allowjnls ="";
    public $allowvat ="";
    public $vatcode ="";
    public $controlacc ="";
    public $groupdescription ="";


    /*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RecID($conn,$recid) {
		$instance = new self();
		try {

			$query = " SELECT RecID, [CO], [GLAccNo], [AccType], [GLCategory], [Description], [AllowJnls], [AllowVAT], [VATCode], [ControlAcc], [GroupDescription] FROM [GLGAccMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->acctype = $records["AccType"];
				$instance->glcategory = $records["GLCategory"];
				$instance->description = $records["Description"];
				$instance->allowjnls = $records["AllowJnls"];
				$instance->allowvat = $records["AllowVAT"];
				$instance->vatcode = $records["VATCode"];
				$instance->controlacc = $records["ControlAcc"];
				$instance->groupdescription = $records["GroupDescription"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using VATCode
	*/
	public static function ini_Code($conn,$co,$AccNo) {
		$instance = new self();
		try {
			$query = " SELECT RecID, [CO], [GLAccNo], [AccType], [GLCategory], [Description], [AllowJnls], [AllowVAT], [VATCode], [ControlAcc], [GroupDescription] FROM [GLGAccMaster]  WHERE [CO]=:CO AND [GLAccNo]=:GLAccNo  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":CO", $co);
            $stmt->bindParam(":GLAccNo", $AccNo);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->glaccno = $records["GLAccNo"];
				$instance->acctype = $records["AccType"];
				$instance->glcategory = $records["GLCategory"];
				$instance->description = $records["Description"];
				$instance->allowjnls = $records["AllowJnls"];
				$instance->allowvat = $records["AllowVAT"];
				$instance->vatcode = $records["VATCode"];
				$instance->controlacc = $records["ControlAcc"];
				$instance->groupdescription = $records["GroupDescription"];
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