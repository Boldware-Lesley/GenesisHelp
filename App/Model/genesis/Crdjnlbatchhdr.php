<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	CRDJnlBatchHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int BatchNo" of type [int]
	"public nvarchar BatchDate" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public float TotalDebit" of type [float]
	"public float TotalCredit" of type [float]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar PostDate" of type [nvarchar]
	"public nvarchar PostTime" of type [nvarchar]
	"public nvarchar PostUser" of type [nvarchar]
	"public nvarchar PostMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdjnlbatchhdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $batchno ;	
	public $batchdate ;	
	public $description ;	
	public $totaldebit ;	
	public $totalcredit ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $postdate ;	
	public $posttime ;	
	public $postuser ;	
	public $postmacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [BatchNo], [BatchDate], [Description], [TotalDebit], [TotalCredit], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [PostDate], [PostTime], [PostUser], [PostMacID] FROM [CRDJnlBatchHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->batchno = $records["BatchNo"];
				$instance->batchdate = $records["BatchDate"];
				$instance->description = $records["Description"];
				$instance->totaldebit = $records["TotalDebit"];
				$instance->totalcredit = $records["TotalCredit"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->postdate = $records["PostDate"];
				$instance->posttime = $records["PostTime"];
				$instance->postuser = $records["PostUser"];
				$instance->postmacid = $records["PostMacID"];
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