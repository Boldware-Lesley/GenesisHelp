<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	POSCoinageTill

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar TillNo" of type [nvarchar]
	"public float C001" of type [float]
	"public float C002" of type [float]
	"public float C005" of type [float]
	"public float C010" of type [float]
	"public float C020" of type [float]
	"public float C050" of type [float]
	"public float C100" of type [float]
	"public float C200" of type [float]
	"public float C500" of type [float]
	"public float C1000" of type [float]
	"public float Notes" of type [float]
*/
namespace genesis;


use PDO;

class Poscoinagetill {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $tillno ;	
	public $c001 ;	
	public $c002 ;	
	public $c005 ;	
	public $c010 ;	
	public $c020 ;	
	public $c050 ;	
	public $c100 ;	
	public $c200 ;	
	public $c500 ;	
	public $c1000 ;	
	public $notes ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [TillNo], [C001], [C002], [C005], [C010], [C020], [C050], [C100], [C200], [C500], [C1000], [Notes] FROM [POSCoinageTill]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->tillno = $records["TillNo"];
				$instance->c001 = $records["C001"];
				$instance->c002 = $records["C002"];
				$instance->c005 = $records["C005"];
				$instance->c010 = $records["C010"];
				$instance->c020 = $records["C020"];
				$instance->c050 = $records["C050"];
				$instance->c100 = $records["C100"];
				$instance->c200 = $records["C200"];
				$instance->c500 = $records["C500"];
				$instance->c1000 = $records["C1000"];
				$instance->notes = $records["Notes"];
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