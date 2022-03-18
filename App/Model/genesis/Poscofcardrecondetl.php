<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	POSCOFCardReconDetl

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar ReconNo" of type [nvarchar]
	"public nvarchar DeviceID" of type [nvarchar]
	"public int SysLines" of type [int]
	"public float SysAmount" of type [float]
	"public int IssDLines" of type [int]
	"public int IssCLines" of type [int]
	"public float IssDAmount" of type [float]
	"public float IssCAmount" of type [float]
	"public float IssDSettled" of type [float]
	"public float IssCSettled" of type [float]
	"public int IssDFaillines" of type [int]
	"public int IssCFaillines" of type [int]
	"public float IssDFailAmount" of type [float]
	"public float IssCFailAmount" of type [float]
*/
namespace genesis;


use PDO;

class Poscofcardrecondetl {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $reconno ;	
	public $deviceid ;	
	public $syslines ;	
	public $sysamount ;	
	public $issdlines ;	
	public $issclines ;	
	public $issdamount ;	
	public $isscamount ;	
	public $issdsettled ;	
	public $isscsettled ;	
	public $issdfaillines ;	
	public $isscfaillines ;	
	public $issdfailamount ;	
	public $isscfailamount ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [ReconNo], [DeviceID], [SysLines], [SysAmount], [IssDLines], [IssCLines], [IssDAmount], [IssCAmount], [IssDSettled], [IssCSettled], [IssDFaillines], [IssCFaillines], [IssDFailAmount], [IssCFailAmount] FROM [POSCOFCardReconDetl]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->reconno = $records["ReconNo"];
				$instance->deviceid = $records["DeviceID"];
				$instance->syslines = $records["SysLines"];
				$instance->sysamount = $records["SysAmount"];
				$instance->issdlines = $records["IssDLines"];
				$instance->issclines = $records["IssCLines"];
				$instance->issdamount = $records["IssDAmount"];
				$instance->isscamount = $records["IssCAmount"];
				$instance->issdsettled = $records["IssDSettled"];
				$instance->isscsettled = $records["IssCSettled"];
				$instance->issdfaillines = $records["IssDFaillines"];
				$instance->isscfaillines = $records["IssCFaillines"];
				$instance->issdfailamount = $records["IssDFailAmount"];
				$instance->isscfailamount = $records["IssCFailAmount"];
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