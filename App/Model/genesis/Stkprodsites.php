<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:30
@Database			:	GENESIS-DEMO
@Table			:	STKProdSites

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar GrowerCode" of type [nvarchar]
	"public nvarchar SiteCode" of type [nvarchar]
	"public nvarchar SiteName" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkprodsites {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $growercode ;	
	public $sitecode ;	
	public $sitename ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [GrowerCode], [SiteCode], [SiteName] FROM [STKProdSites]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->growercode = $records["GrowerCode"];
				$instance->sitecode = $records["SiteCode"];
				$instance->sitename = $records["SiteName"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using GrowerCode
	*/
	public static function ini_GrowerCode($growercode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [GrowerCode], [SiteCode], [SiteName] FROM [STKProdSites]  WHERE [GrowerCode]=:growercode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":growercode", $growercode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->growercode = $records["GrowerCode"];
				$instance->sitecode = $records["SiteCode"];
				$instance->sitename = $records["SiteName"];
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
			$res = $this->sitename;
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