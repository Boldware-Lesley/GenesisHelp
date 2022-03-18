<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	EMPMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar EmplNo" of type [nvarchar]
	"public nvarchar EmplName" of type [nvarchar]
	"public nvarchar BirthDate" of type [nvarchar]
	"public nvarchar IDNo" of type [nvarchar]
	"public nvarchar Gender" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar DateEmployed" of type [nvarchar]
	"public nvarchar DateResigned" of type [nvarchar]
	"public nvarchar Telephone" of type [nvarchar]
	"public nvarchar CellPhone" of type [nvarchar]
	"public float Salary" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Empmaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $emplno ;	
	public $emplname ;	
	public $birthdate ;	
	public $idno ;	
	public $gender ;	
	public $status ;	
	public $dateemployed ;	
	public $dateresigned ;	
	public $telephone ;	
	public $cellphone ;	
	public $salary ;	
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
			$query = " SELECT RecID, [CO], [Branch], [EmplNo], [EmplName], [BirthDate], [IDNo], [Gender], [Status], [DateEmployed], [DateResigned], [Telephone], [CellPhone], [Salary], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [EMPMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->emplno = $records["EmplNo"];
				$instance->emplname = $records["EmplName"];
				$instance->birthdate = $records["BirthDate"];
				$instance->idno = $records["IDNo"];
				$instance->gender = $records["Gender"];
				$instance->status = $records["Status"];
				$instance->dateemployed = $records["DateEmployed"];
				$instance->dateresigned = $records["DateResigned"];
				$instance->telephone = $records["Telephone"];
				$instance->cellphone = $records["CellPhone"];
				$instance->salary = $records["Salary"];
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
			$res = $this->emplname;
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