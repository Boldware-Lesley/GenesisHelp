<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	GSMCprHdr

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CPRNO" of type [nvarchar]
	"public nvarchar DESCRIPTION" of type [nvarchar]
	"public nvarchar FROMDATE" of type [nvarchar]
	"public nvarchar TODATE" of type [nvarchar]
	"public nvarchar CPRTYPE" of type [nvarchar]
	"public nvarchar DTODATE" of type [nvarchar]
	"public nvarchar DTOTIME" of type [nvarchar]
	"public nvarchar DTOUSER" of type [nvarchar]
	"public nvarchar DTOMACID" of type [nvarchar]
	"public nvarchar DEBCOMPANY" of type [nvarchar]
	"public nvarchar DEBBRANCH" of type [nvarchar]
	"public nvarchar PriceRule" of type [nvarchar]
	"public nvarchar Scale" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Gsmcprhdr {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $cprno ;	
	public $description ;	
	public $fromdate ;	
	public $todate ;	
	public $cprtype ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $debcompany ;	
	public $debbranch ;	
	public $pricerule ;	
	public $scale ;	
	
	
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
			$query = " SELECT RECID, [CPRNO], [DESCRIPTION], [FROMDATE], [TODATE], [CPRTYPE], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [DEBCOMPANY], [DEBBRANCH], [PriceRule], [Scale] FROM [GSMCprHdr]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->cprno = $records["CPRNO"];
				$instance->description = $records["DESCRIPTION"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->cprtype = $records["CPRTYPE"];
				$instance->dtodate = $records["DTODATE"];
				$instance->dtotime = $records["DTOTIME"];
				$instance->dtouser = $records["DTOUSER"];
				$instance->dtomacid = $records["DTOMACID"];
				$instance->debcompany = $records["DEBCOMPANY"];
				$instance->debbranch = $records["DEBBRANCH"];
				$instance->pricerule = $records["PriceRule"];
				$instance->scale = $records["Scale"];
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