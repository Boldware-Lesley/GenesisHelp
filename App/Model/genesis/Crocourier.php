<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	CROCourier

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar CRONo" of type [nvarchar]
	"public nvarchar CourierCode" of type [nvarchar]
	"public nvarchar WaybillNo" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar CollectDate" of type [nvarchar]
	"public nvarchar CollectTime" of type [nvarchar]
	"public nvarchar Reference" of type [nvarchar]
	"public nvarchar Comments" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crocourier {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $crono ;	
	public $couriercode ;	
	public $waybillno ;	
	public $status ;	
	public $trandate ;	
	public $collectdate ;	
	public $collecttime ;	
	public $reference ;	
	public $comments ;	
	public $notes ;	
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
			$query = " SELECT RecID, [CO], [Branch], [CRONo], [CourierCode], [WaybillNo], [Status], [TranDate], [CollectDate], [CollectTime], [Reference], [Comments], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [CROCourier]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->crono = $records["CRONo"];
				$instance->couriercode = $records["CourierCode"];
				$instance->waybillno = $records["WaybillNo"];
				$instance->status = $records["Status"];
				$instance->trandate = $records["TranDate"];
				$instance->collectdate = $records["CollectDate"];
				$instance->collecttime = $records["CollectTime"];
				$instance->reference = $records["Reference"];
				$instance->comments = $records["Comments"];
				$instance->notes = $records["Notes"];
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
	/**
	Main Constructor For Declearing Using CourierCode
	*/
	public static function ini_CourierCode($couriercode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [CRONo], [CourierCode], [WaybillNo], [Status], [TranDate], [CollectDate], [CollectTime], [Reference], [Comments], [Notes], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [CROCourier]  WHERE [CourierCode]=:couriercode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":couriercode", $couriercode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->crono = $records["CRONo"];
				$instance->couriercode = $records["CourierCode"];
				$instance->waybillno = $records["WaybillNo"];
				$instance->status = $records["Status"];
				$instance->trandate = $records["TranDate"];
				$instance->collectdate = $records["CollectDate"];
				$instance->collecttime = $records["CollectTime"];
				$instance->reference = $records["Reference"];
				$instance->comments = $records["Comments"];
				$instance->notes = $records["Notes"];
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