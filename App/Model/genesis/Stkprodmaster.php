<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	STKProdMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int ProdNo" of type [int]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar ProdDate" of type [nvarchar]
	"public nvarchar SlaughterDate" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public int LabelSeqNo" of type [int]
	"public nvarchar PackLoc" of type [nvarchar]
	"public nvarchar PackCat" of type [nvarchar]
	"public nvarchar ProdMethod" of type [nvarchar]
	"public nvarchar StockStatus" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar PrintDate" of type [nvarchar]
	"public nvarchar PrintTime" of type [nvarchar]
	"public nvarchar PrintBBD" of type [nvarchar]
	"public nvarchar PrintCaseLbl" of type [nvarchar]
	"public nvarchar PrintInnerLbl" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Stkprodmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $prodno ;	
	public $trandate ;	
	public $proddate ;	
	public $slaughterdate ;	
	public $description ;	
	public $labelseqno ;	
	public $packloc ;	
	public $packcat ;	
	public $prodmethod ;	
	public $stockstatus ;	
	public $status ;	
	public $printdate ;	
	public $printtime ;	
	public $printbbd ;	
	public $printcaselbl ;	
	public $printinnerlbl ;	
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
			$query = " SELECT RecID, [CO], [Branch], [ProdNo], [TranDate], [ProdDate], [SlaughterDate], [Description], [LabelSeqNo], [PackLoc], [PackCat], [ProdMethod], [StockStatus], [Status], [PrintDate], [PrintTime], [PrintBBD], [PrintCaseLbl], [PrintInnerLbl], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [STKProdMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->prodno = $records["ProdNo"];
				$instance->trandate = $records["TranDate"];
				$instance->proddate = $records["ProdDate"];
				$instance->slaughterdate = $records["SlaughterDate"];
				$instance->description = $records["Description"];
				$instance->labelseqno = $records["LabelSeqNo"];
				$instance->packloc = $records["PackLoc"];
				$instance->packcat = $records["PackCat"];
				$instance->prodmethod = $records["ProdMethod"];
				$instance->stockstatus = $records["StockStatus"];
				$instance->status = $records["Status"];
				$instance->printdate = $records["PrintDate"];
				$instance->printtime = $records["PrintTime"];
				$instance->printbbd = $records["PrintBBD"];
				$instance->printcaselbl = $records["PrintCaseLbl"];
				$instance->printinnerlbl = $records["PrintInnerLbl"];
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