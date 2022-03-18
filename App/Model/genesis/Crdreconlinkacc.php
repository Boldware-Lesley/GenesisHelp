<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:40
@Database			:	GENESIS-DEMO
@Table			:	CRDReconLinkAcc

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int ReconNo" of type [int]
	"public nvarchar SubAccount" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar Ext" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdreconlinkacc {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $account ;	
	public $reconno ;	
	public $subaccount ;	
	public $name ;	
	public $ext ;	
	
	
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
			$query = " SELECT RecID, [CO], [Account], [ReconNo], [SubAccount], [Name], [Ext] FROM [CRDReconLinkAcc]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->account = $records["Account"];
				$instance->reconno = $records["ReconNo"];
				$instance->subaccount = $records["SubAccount"];
				$instance->name = $records["Name"];
				$instance->ext = $records["Ext"];
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