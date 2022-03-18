<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:39
@Database			:	GENESIS-DEMO
@Table			:	PUROrdDetPrice

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public int OrderNo" of type [int]
	"public int LineNo" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar PriceCode" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public int Units" of type [int]
	"public float Excl" of type [float]
	"public float Incl" of type [float]
	"public float MUP" of type [float]
	"public float GP" of type [float]
	"public float OldExcl" of type [float]
	"public float OldIncl" of type [float]
	"public float OldMUP" of type [float]
	"public float OldGP" of type [float]
*/
namespace genesis;


use PDO;

class Purorddetprice {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $orderno ;	
	public $lineno ;	
	public $stockcode ;	
	public $linkcode ;	
	public $pricecode ;	
	public $description ;	
	public $units ;	
	public $excl ;	
	public $incl ;	
	public $mup ;	
	public $gp ;	
	public $oldexcl ;	
	public $oldincl ;	
	public $oldmup ;	
	public $oldgp ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [OrderNo], [LineNo], [StockCode], [LinkCode], [PriceCode], [Description], [Units], [Excl], [Incl], [MUP], [GP], [OldExcl], [OldIncl], [OldMUP], [OldGP] FROM [PUROrdDetPrice]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->orderno = $records["OrderNo"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->pricecode = $records["PriceCode"];
				$instance->description = $records["Description"];
				$instance->units = $records["Units"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
				$instance->mup = $records["MUP"];
				$instance->gp = $records["GP"];
				$instance->oldexcl = $records["OldExcl"];
				$instance->oldincl = $records["OldIncl"];
				$instance->oldmup = $records["OldMUP"];
				$instance->oldgp = $records["OldGP"];
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
			$query = " SELECT RecID, [CO], [Branch], [Account], [OrderNo], [LineNo], [StockCode], [LinkCode], [PriceCode], [Description], [Units], [Excl], [Incl], [MUP], [GP], [OldExcl], [OldIncl], [OldMUP], [OldGP] FROM [PUROrdDetPrice]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->orderno = $records["OrderNo"];
				$instance->lineno = $records["LineNo"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->pricecode = $records["PriceCode"];
				$instance->description = $records["Description"];
				$instance->units = $records["Units"];
				$instance->excl = $records["Excl"];
				$instance->incl = $records["Incl"];
				$instance->mup = $records["MUP"];
				$instance->gp = $records["GP"];
				$instance->oldexcl = $records["OldExcl"];
				$instance->oldincl = $records["OldIncl"];
				$instance->oldmup = $records["OldMUP"];
				$instance->oldgp = $records["OldGP"];
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