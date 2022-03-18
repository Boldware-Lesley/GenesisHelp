<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:24
@Database			:	GENESIS-DEMO
@Table			:	ORDSerials

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TxTp" of type [nvarchar]
	"public nvarchar TillNo" of type [nvarchar]
	"public nvarchar DocNo" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public int LineNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar SerialNo" of type [nvarchar]
	"public nvarchar LinkedSerialNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Ordserials {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $txtp ;	
	public $tillno ;	
	public $docno ;	
	public $account ;	
	public $trandate ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $serialno ;	
	public $linkedserialno ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [TillNo], [DocNo], [Account], [TranDate], [LineNo], [StockCode], [LinkCode], [SerialNo], [LinkedSerialNo] FROM [ORDSerials]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->tillno = $records["TillNo"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->trandate = $records["TranDate"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->serialno = $records["SerialNo"];
				$instance->linkedserialno = $records["LinkedSerialNo"];
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
			$query = " SELECT RecID, [CO], [Branch], [TxTp], [TillNo], [DocNo], [Account], [TranDate], [LineNo], [StockCode], [LinkCode], [SerialNo], [LinkedSerialNo] FROM [ORDSerials]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->txtp = $records["TxTp"];
				$instance->tillno = $records["TillNo"];
				$instance->docno = $records["DocNo"];
				$instance->account = $records["Account"];
				$instance->trandate = $records["TranDate"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->serialno = $records["SerialNo"];
				$instance->linkedserialno = $records["LinkedSerialNo"];
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