<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	PUROrdHdrClaim

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int OrderNo" of type [int]
	"public nvarchar ClaimCode" of type [nvarchar]
	"public nvarchar ClaimDesc" of type [nvarchar]
	"public nvarchar ApplyToCost" of type [nvarchar]
	"public float AmountExcl" of type [float]
	"public float AmountIncl" of type [float]
	"public int DealNo" of type [int]
*/
namespace genesis;


use PDO;

class Purordhdrclaim {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $orderno ;	
	public $claimcode ;	
	public $claimdesc ;	
	public $applytocost ;	
	public $amountexcl ;	
	public $amountincl ;	
	public $dealno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [OrderNo], [ClaimCode], [ClaimDesc], [ApplyToCost], [AmountExcl], [AmountIncl], [DealNo] FROM [PUROrdHdrClaim]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->orderno = $records["OrderNo"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->claimdesc = $records["ClaimDesc"];
				$instance->applytocost = $records["ApplyToCost"];
				$instance->amountexcl = $records["AmountExcl"];
				$instance->amountincl = $records["AmountIncl"];
				$instance->dealno = $records["DealNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using ClaimCode
	*/
	public static function ini_ClaimCode($claimcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [Account], [OrderNo], [ClaimCode], [ClaimDesc], [ApplyToCost], [AmountExcl], [AmountIncl], [DealNo] FROM [PUROrdHdrClaim]  WHERE [ClaimCode]=:claimcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":claimcode", $claimcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->orderno = $records["OrderNo"];
				$instance->claimcode = $records["ClaimCode"];
				$instance->claimdesc = $records["ClaimDesc"];
				$instance->applytocost = $records["ApplyToCost"];
				$instance->amountexcl = $records["AmountExcl"];
				$instance->amountincl = $records["AmountIncl"];
				$instance->dealno = $records["DealNo"];
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