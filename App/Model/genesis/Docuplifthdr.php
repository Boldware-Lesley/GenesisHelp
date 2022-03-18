<?php
/**
@Author			:	Lesley
@Date			:	2020/10/24 12:28:11
@Database			:	MRJ
@Table			:	DOCUpliftHdr

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar RetnDate" of type [nvarchar]
	"public nvarchar InterCO" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar AuthUser" of type [nvarchar]
	"public nvarchar AuthDate" of type [nvarchar]
	"public nvarchar AuthTime" of type [nvarchar]
	"public nvarchar AuthMacID" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar VATIndicator" of type [nvarchar]
	"public float TotalIncl" of type [float]
	"public float TotalExcl" of type [float]
	"public float TotalVAT" of type [float]
	"public int AP" of type [int]
	"public int RetnNo" of type [int]
*/
namespace genesis;


use PDO;

class Docuplifthdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $docno ;	
	public $trandate ;	
	public $retndate ;	
	public $interco ;	
	public $notes ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $authuser ;	
	public $authdate ;	
	public $authtime ;	
	public $authmacid ;	
	public $status ;	
	public $vatindicator ;	
	public $totalincl ;	
	public $totalexcl ;	
	public $totalvat ;	
	public $ap ;	
	public $retnno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [DocNo], [TranDate], [RetnDate], [InterCO], [Notes], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [AuthUser], [AuthDate], [AuthTime], [AuthMacID], [Status], [VATIndicator], [TotalIncl], [TotalExcl], [TotalVAT], [AP], [RetnNo] FROM [DOCUpliftHdr]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->docno = $records["DocNo"];
				$instance->trandate = $records["TranDate"];
				$instance->retndate = $records["RetnDate"];
				$instance->interco = $records["InterCO"];
				$instance->notes = $records["Notes"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->authuser = $records["AuthUser"];
				$instance->authdate = $records["AuthDate"];
				$instance->authtime = $records["AuthTime"];
				$instance->authmacid = $records["AuthMacID"];
				$instance->status = $records["Status"];
				$instance->vatindicator = $records["VATIndicator"];
				$instance->totalincl = $records["TotalIncl"];
				$instance->totalexcl = $records["TotalExcl"];
				$instance->totalvat = $records["TotalVAT"];
				$instance->ap = $records["AP"];
				$instance->retnno = $records["RetnNo"];
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
			$res = $this->recid;
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