<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:32
@Database			:	GENESIS-DEMO
@Table			:	SYSAudit

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar ModCode" of type [nvarchar]
	"public nvarchar FormCode" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar FieldName" of type [nvarchar]
	"public nvarchar FieldDesc" of type [nvarchar]
	"public nvarchar OldText" of type [nvarchar]
	"public nvarchar NewText" of type [nvarchar]
	"public float OldValue" of type [float]
	"public float NewValue" of type [float]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysaudit {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $modcode ;	
	public $formcode ;	
	public $account ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $fieldname ;	
	public $fielddesc ;	
	public $oldtext ;	
	public $newtext ;	
	public $oldvalue ;	
	public $newvalue ;	
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
			$query = " SELECT RecID, [CO], [Branch], [ModCode], [FormCode], [Account], [StockCode], [LinkCode], [Description1], [FieldName], [FieldDesc], [OldText], [NewText], [OldValue], [NewValue], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [SYSAudit]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->modcode = $records["ModCode"];
				$instance->formcode = $records["FormCode"];
				$instance->account = $records["Account"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->fieldname = $records["FieldName"];
				$instance->fielddesc = $records["FieldDesc"];
				$instance->oldtext = $records["OldText"];
				$instance->newtext = $records["NewText"];
				$instance->oldvalue = $records["OldValue"];
				$instance->newvalue = $records["NewValue"];
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
	Main Constructor For Declearing Using ModCode
	*/
	public static function ini_ModCode($modcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [ModCode], [FormCode], [Account], [StockCode], [LinkCode], [Description1], [FieldName], [FieldDesc], [OldText], [NewText], [OldValue], [NewValue], [DTODate], [DTOTime], [DTOUser], [DTOMacID] FROM [SYSAudit]  WHERE [ModCode]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->modcode = $records["ModCode"];
				$instance->formcode = $records["FormCode"];
				$instance->account = $records["Account"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->fieldname = $records["FieldName"];
				$instance->fielddesc = $records["FieldDesc"];
				$instance->oldtext = $records["OldText"];
				$instance->newtext = $records["NewText"];
				$instance->oldvalue = $records["OldValue"];
				$instance->newvalue = $records["NewValue"];
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