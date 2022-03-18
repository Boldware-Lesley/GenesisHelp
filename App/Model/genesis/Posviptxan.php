<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	POSVIPTxan

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int VIPNo" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar Details" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar DrCr" of type [nvarchar]
	"public int Points" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar SourceBranch" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Posviptxan {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $vipno ;	
	public $trandate ;	
	public $txtp ;	
	public $details ;	
	public $docno ;	
	public $reference ;	
	public $drcr ;	
	public $points ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $sourcebranch ;	
	
	
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
			$query = " SELECT RecID, [CO], [VIPNo], [TranDate], [TxTp], [Details], [DocNo], [Reference], [DrCr], [Points], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [SourceBranch] FROM [POSVIPTxan]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->vipno = $records["VIPNo"];
				$instance->trandate = $records["TranDate"];
				$instance->txtp = $records["TxTp"];
				$instance->details = $records["Details"];
				$instance->docno = $records["DocNo"];
				$instance->reference = $records["Reference"];
				$instance->drcr = $records["DrCr"];
				$instance->points = $records["Points"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->sourcebranch = $records["SourceBranch"];
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