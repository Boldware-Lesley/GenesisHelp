<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	SVMTechMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TechCode" of type [nvarchar]
	"public nvarchar TechName" of type [nvarchar]
	"public nvarchar ShortName" of type [nvarchar]
	"public nvarchar CellPhone" of type [nvarchar]
	"public nvarchar EMailAddy" of type [nvarchar]
	"public nvarchar GenesisUserCode" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Svmtechmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $techcode ;	
	public $techname ;	
	public $shortname ;	
	public $cellphone ;	
	public $emailaddy ;	
	public $genesisusercode ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TechCode], [TechName], [ShortName], [CellPhone], [EMailAddy], [GenesisUserCode] FROM [SVMTechMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->techcode = $records["TechCode"];
				$instance->techname = $records["TechName"];
				$instance->shortname = $records["ShortName"];
				$instance->cellphone = $records["CellPhone"];
				$instance->emailaddy = $records["EMailAddy"];
				$instance->genesisusercode = $records["GenesisUserCode"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using TechCode
	*/
	public static function ini_TechCode($techcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [TechCode], [TechName], [ShortName], [CellPhone], [EMailAddy], [GenesisUserCode] FROM [SVMTechMaster]  WHERE [TechCode]=:techcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":techcode", $techcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->techcode = $records["TechCode"];
				$instance->techname = $records["TechName"];
				$instance->shortname = $records["ShortName"];
				$instance->cellphone = $records["CellPhone"];
				$instance->emailaddy = $records["EMailAddy"];
				$instance->genesisusercode = $records["GenesisUserCode"];
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
			$res = $this->techname;
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