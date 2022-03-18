<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:22
@Database			:	GENESIS-DEMO
@Table			:	StkMstImages

[@Descriptions]
Class is using the following global variables:
	"public long RecID" of type [long]
	"public string CO" of type [string]
	"public string StockCode" of type [string]
	"public string LinkCode" of type [string]
	"public varbinary ImageData" of type [varbinary]
	"public string ImageType" of type [string]
	"public int LineNo" of type [int]
*/
namespace genesis;


use PDO;

class Stkmstimages {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $stockcode ;	
	public $linkcode ;	
	public $imagedata ;	
	public $imagetype ;	
	public $lineno ;	
	
	
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
			$query = " SELECT RecID, [CO], [StockCode], [LinkCode], [ImageData], [ImageType], [LineNo] FROM [StkMstImages]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->imagedata = $records["ImageData"];
				$instance->imagetype = $records["ImageType"];
				$instance->lineno = $records["LineNo"];
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
			$query = " SELECT RecID, [CO], [StockCode], [LinkCode], [ImageData], [ImageType], [LineNo] FROM [StkMstImages]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->imagedata = $records["ImageData"];
				$instance->imagetype = $records["ImageType"];
				$instance->lineno = $records["LineNo"];
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