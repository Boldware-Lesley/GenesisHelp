<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:28
@Database			:	GENESIS-DEMO
@Table			:	CRDBuyers

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BuyerCode" of type [nvarchar]
	"public nvarchar BuyerName" of type [nvarchar]
	"public nvarchar BuyerType" of type [nvarchar]
	"public nvarchar HeadBuyerCode" of type [nvarchar]
	"public nvarchar EMail" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdbuyers {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $buyercode ;	
	public $buyername ;	
	public $buyertype ;	
	public $headbuyercode ;	
	public $email ;	
	
	
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
			$query = " SELECT RecID, [CO], [BuyerCode], [BuyerName], [BuyerType], [HeadBuyerCode], [EMail] FROM [CRDBuyers]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->buyercode = $records["BuyerCode"];
				$instance->buyername = $records["BuyerName"];
				$instance->buyertype = $records["BuyerType"];
				$instance->headbuyercode = $records["HeadBuyerCode"];
				$instance->email = $records["EMail"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using BuyerCode
	*/
	public static function ini_BuyerCode($buyercode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [BuyerCode], [BuyerName], [BuyerType], [HeadBuyerCode], [EMail] FROM [CRDBuyers]  WHERE [BuyerCode]=:buyercode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":buyercode", $buyercode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->buyercode = $records["BuyerCode"];
				$instance->buyername = $records["BuyerName"];
				$instance->buyertype = $records["BuyerType"];
				$instance->headbuyercode = $records["HeadBuyerCode"];
				$instance->email = $records["EMail"];
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
			$res = $this->buyername;
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