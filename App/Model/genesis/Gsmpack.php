<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	GSMPack

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar PACKSIZE" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public float UNITS" of type [float]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar Prefix" of type [nvarchar]
	"public nvarchar Suffix" of type [nvarchar]
	"public nvarchar DescPrefix" of type [nvarchar]
	"public nvarchar DescSuffix" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmpack {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $packsize ;	
	public $description ;	
	public $units ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $prefix ;	
	public $suffix ;	
	public $descprefix ;	
	public $descsuffix ;	
	
	
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
			$query = " SELECT RECID, [PACKSIZE], [DESCRIPTION], [UNITS], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [Prefix], [Suffix], [DescPrefix], [DescSuffix] FROM [GSMPack]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->packsize = $records["PACKSIZE"];
				$instance->description = $records["DESCRIPTION"];
				$instance->units = $records["UNITS"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->prefix = $records["Prefix"];
				$instance->suffix = $records["Suffix"];
				$instance->descprefix = $records["DescPrefix"];
				$instance->descsuffix = $records["DescSuffix"];
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