<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	DEBBalance

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar DebtorType" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int AP" of type [int]
	"public float DCurr" of type [float]
	"public float D030" of type [float]
	"public float D060" of type [float]
	"public float D090" of type [float]
	"public float D120" of type [float]
	"public float D150" of type [float]
	"public float D180" of type [float]
	"public float Dover" of type [float]
	"public float PDC" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debbalance {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $debtortype ;	
	public $account ;	
	public $ap ;	
	public $dcurr ;	
	public $d030 ;	
	public $d060 ;	
	public $d090 ;	
	public $d120 ;	
	public $d150 ;	
	public $d180 ;	
	public $dover ;	
	public $pdc ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [DebtorType], [Account], [AP], [DCurr], [D030], [D060], [D090], [D120], [D150], [D180], [Dover], [PDC], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [DEBBalance]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->debtortype = $records["DebtorType"];
				$instance->account = $records["Account"];
				$instance->ap = $records["AP"];
				$instance->dcurr = $records["DCurr"];
				$instance->d030 = $records["D030"];
				$instance->d060 = $records["D060"];
				$instance->d090 = $records["D090"];
				$instance->d120 = $records["D120"];
				$instance->d150 = $records["D150"];
				$instance->d180 = $records["D180"];
				$instance->dover = $records["Dover"];
				$instance->pdc = $records["PDC"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
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