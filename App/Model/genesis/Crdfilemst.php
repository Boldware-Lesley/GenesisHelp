<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	CRDFileMst

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar FileNo" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public nvarchar CatCode" of type [nvarchar]
	"public nvarchar AccType" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar FileType" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar VisionAccNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdfilemst {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $fileno ;	
	public $description ;	
	public $catcode ;	
	public $acctype ;	
	public $account ;	
	public $name ;	
	public $filetype ;	
	public $status ;	
	public $visionaccno ;	
	
	
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
			$query = " SELECT RecID, [CO], [FileNo], [Description], [CatCode], [AccType], [Account], [Name], [FileType], [Status], [VisionAccNo] FROM [CRDFileMst]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->fileno = $records["FileNo"];
				$instance->description = $records["Description"];
				$instance->catcode = $records["CatCode"];
				$instance->acctype = $records["AccType"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->filetype = $records["FileType"];
				$instance->status = $records["Status"];
				$instance->visionaccno = $records["VisionAccNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CatCode
	*/
	public static function ini_CatCode($catcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [FileNo], [Description], [CatCode], [AccType], [Account], [Name], [FileType], [Status], [VisionAccNo] FROM [CRDFileMst]  WHERE [CatCode]=:catcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":catcode", $catcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->fileno = $records["FileNo"];
				$instance->description = $records["Description"];
				$instance->catcode = $records["CatCode"];
				$instance->acctype = $records["AccType"];
				$instance->account = $records["Account"];
				$instance->name = $records["Name"];
				$instance->filetype = $records["FileType"];
				$instance->status = $records["Status"];
				$instance->visionaccno = $records["VisionAccNo"];
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