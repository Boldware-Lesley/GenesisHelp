<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	SVRHQTrig

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar PriceCode" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar SubAccount" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Text1" of type [nvarchar]
	"public nvarchar Text2" of type [nvarchar]
	"public nvarchar Text3" of type [nvarchar]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar ProcessDate" of type [nvarchar]
	"public nvarchar ProcessTime" of type [nvarchar]
	"public nvarchar ProcessUser" of type [nvarchar]
	"public nvarchar ProcessMacID" of type [nvarchar]
	"public nvarchar ReturnMsg" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Svrhqtrig {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $status ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $pricecode ;	
	public $account ;	
	public $subaccount ;	
	public $docno ;	
	public $text1 ;	
	public $text2 ;	
	public $text3 ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $processdate ;	
	public $processtime ;	
	public $processuser ;	
	public $processmacid ;	
	public $returnmsg ;	
	
	
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
			$query = " SELECT RecID, [Status], [CO], [Branch], [TxTp], [StockCode], [LinkCode], [Description1], [PriceCode], [Account], [SubAccount], [DocNo], [Text1], [Text2], [Text3], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [ProcessDate], [ProcessTime], [ProcessUser], [ProcessMacID], [ReturnMsg] FROM [SVRHQTrig]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->status = $records["Status"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->pricecode = $records["PriceCode"];
				$instance->account = $records["Account"];
				$instance->subaccount = $records["SubAccount"];
				$instance->docno = $records["DocNo"];
				$instance->text1 = $records["Text1"];
				$instance->text2 = $records["Text2"];
				$instance->text3 = $records["Text3"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->processdate = $records["ProcessDate"];
				$instance->processtime = $records["ProcessTime"];
				$instance->processuser = $records["ProcessUser"];
				$instance->processmacid = $records["ProcessMacID"];
				$instance->returnmsg = $records["ReturnMsg"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using StockCode
	*/
	public static function ini_StockCode($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [Status], [CO], [Branch], [TxTp], [StockCode], [LinkCode], [Description1], [PriceCode], [Account], [SubAccount], [DocNo], [Text1], [Text2], [Text3], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [ProcessDate], [ProcessTime], [ProcessUser], [ProcessMacID], [ReturnMsg] FROM [SVRHQTrig]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->status = $records["Status"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->pricecode = $records["PriceCode"];
				$instance->account = $records["Account"];
				$instance->subaccount = $records["SubAccount"];
				$instance->docno = $records["DocNo"];
				$instance->text1 = $records["Text1"];
				$instance->text2 = $records["Text2"];
				$instance->text3 = $records["Text3"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->processdate = $records["ProcessDate"];
				$instance->processtime = $records["ProcessTime"];
				$instance->processuser = $records["ProcessUser"];
				$instance->processmacid = $records["ProcessMacID"];
				$instance->returnmsg = $records["ReturnMsg"];
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
			$res = $this->description1;
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