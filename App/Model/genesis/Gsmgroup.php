<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	GSMGroup

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar GRPCODE" of type [nvarchar]
	"public nvarchar GRPDESC" of type [nvarchar]
	"public float AVGCOST" of type [float]
	"public float NETAVERAGE" of type [float]
	"public nvarchar CALCDATE" of type [nvarchar]
	"public float TOTALUNITS" of type [float]
	"public float TOTALCOST" of type [float]
	"public float ITEMS" of type [float]
*/
namespace genesis;


use PDO;

class Gsmgroup {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $grpcode ;	
	public $grpdesc ;	
	public $avgcost ;	
	public $netaverage ;	
	public $calcdate ;	
	public $totalunits ;	
	public $totalcost ;	
	public $items ;	
	
	
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
			$query = " SELECT RECID, [CO], [GRPCODE], [GRPDESC], [AVGCOST], [NETAVERAGE], [CALCDATE], [TOTALUNITS], [TOTALCOST], [ITEMS] FROM [GSMGroup]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->grpcode = $records["GRPCODE"];
				$instance->grpdesc = $records["GRPDESC"];
				$instance->avgcost = $records["AVGCOST"];
				$instance->netaverage = $records["NETAVERAGE"];
				$instance->calcdate = $records["CALCDATE"];
				$instance->totalunits = $records["TOTALUNITS"];
				$instance->totalcost = $records["TOTALCOST"];
				$instance->items = $records["ITEMS"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using GRPCODE
	*/
	public static function ini_GRPCODE($grpcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [GRPCODE], [GRPDESC], [AVGCOST], [NETAVERAGE], [CALCDATE], [TOTALUNITS], [TOTALCOST], [ITEMS] FROM [GSMGroup]  WHERE [GRPCODE]=:grpcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":grpcode", $grpcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->grpcode = $records["GRPCODE"];
				$instance->grpdesc = $records["GRPDESC"];
				$instance->avgcost = $records["AVGCOST"];
				$instance->netaverage = $records["NETAVERAGE"];
				$instance->calcdate = $records["CALCDATE"];
				$instance->totalunits = $records["TOTALUNITS"];
				$instance->totalcost = $records["TOTALCOST"];
				$instance->items = $records["ITEMS"];
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