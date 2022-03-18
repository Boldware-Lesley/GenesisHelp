<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:29
@Database			:	GENESIS-DEMO
@Table			:	POSVouchCoins

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar VoucherBranch" of type [nvarchar]
	"public nvarchar VoucherNo" of type [nvarchar]
	"public nvarchar VoucherType" of type [nvarchar]
	"public nvarchar CoinCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public float CoinValue" of type [float]
	"public float CoinCount" of type [float]
	"public float CoinTotal" of type [float]
*/
namespace genesis;


use PDO;

class Posvouchcoins {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $voucherbranch ;	
	public $voucherno ;	
	public $vouchertype ;	
	public $coincode ;	
	public $description ;	
	public $coinvalue ;	
	public $coincount ;	
	public $cointotal ;	
	
	
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
			$query = " SELECT RecID, [CO], [VoucherBranch], [VoucherNo], [VoucherType], [CoinCode], [Description], [CoinValue], [CoinCount], [CoinTotal] FROM [POSVouchCoins]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->voucherbranch = $records["VoucherBranch"];
				$instance->voucherno = $records["VoucherNo"];
				$instance->vouchertype = $records["VoucherType"];
				$instance->coincode = $records["CoinCode"];
				$instance->description = $records["Description"];
				$instance->coinvalue = $records["CoinValue"];
				$instance->coincount = $records["CoinCount"];
				$instance->cointotal = $records["CoinTotal"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using CoinCode
	*/
	public static function ini_CoinCode($coincode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [VoucherBranch], [VoucherNo], [VoucherType], [CoinCode], [Description], [CoinValue], [CoinCount], [CoinTotal] FROM [POSVouchCoins]  WHERE [CoinCode]=:coincode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":coincode", $coincode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->voucherbranch = $records["VoucherBranch"];
				$instance->voucherno = $records["VoucherNo"];
				$instance->vouchertype = $records["VoucherType"];
				$instance->coincode = $records["CoinCode"];
				$instance->description = $records["Description"];
				$instance->coinvalue = $records["CoinValue"];
				$instance->coincount = $records["CoinCount"];
				$instance->cointotal = $records["CoinTotal"];
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