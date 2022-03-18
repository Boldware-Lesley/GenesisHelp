<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:34
@Database			:	GENESIS-DEMO
@Table			:	CommandLog

[@Descriptions]
Class is using the following global variables:
	"public int ID" of type [int]
	"public nvarchar DatabaseName" of type [nvarchar]
	"public nvarchar SchemaName" of type [nvarchar]
	"public nvarchar ObjectName" of type [nvarchar]
	"public char ObjectType" of type [char]
	"public nvarchar IndexName" of type [nvarchar]
	"public tinyint IndexType" of type [tinyint]
	"public nvarchar StatisticsName" of type [nvarchar]
	"public int PartitionNumber" of type [int]
	"public xml ExtendedInfo" of type [xml]
	"public nvarchar Command" of type [nvarchar]
	"public nvarchar CommandType" of type [nvarchar]
	"public string StartTime" of type [string]
	"public string EndTime" of type [string]
	"public int ErrorNumber" of type [int]
	"public nvarchar ErrorMessage" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Commandlog {
	
	/*BEGIN <<Private Variables>> */
	
	public $id ;	
	public $databasename ;	
	public $schemaname ;	
	public $objectname ;	
	public $objecttype ;	
	public $indexname ;	
	public $indextype ;	
	public $statisticsname ;	
	public $partitionnumber ;	
	public $extendedinfo ;	
	public $command ;	
	public $commandtype ;	
	public $starttime ;	
	public $endtime ;	
	public $errornumber ;	
	public $errormessage ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_ID($id) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT ID, [DatabaseName], [SchemaName], [ObjectName], [ObjectType], [IndexName], [IndexType], [StatisticsName], [PartitionNumber], [ExtendedInfo], [Command], [CommandType], [StartTime], [EndTime], [ErrorNumber], [ErrorMessage] FROM [CommandLog]  WHERE [ID]=:id  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":id", $id);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->id = $records["ID"];
				$instance->databasename = $records["DatabaseName"];
				$instance->schemaname = $records["SchemaName"];
				$instance->objectname = $records["ObjectName"];
				$instance->objecttype = $records["ObjectType"];
				$instance->indexname = $records["IndexName"];
				$instance->indextype = $records["IndexType"];
				$instance->statisticsname = $records["StatisticsName"];
				$instance->partitionnumber = $records["PartitionNumber"];
				$instance->extendedinfo = $records["ExtendedInfo"];
				$instance->command = $records["Command"];
				$instance->commandtype = $records["CommandType"];
				$instance->starttime = $records["StartTime"];
				$instance->endtime = $records["EndTime"];
				$instance->errornumber = $records["ErrorNumber"];
				$instance->errormessage = $records["ErrorMessage"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using PartitionNumber
	*/
	public static function ini_PartitionNumber($partitionnumber) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT ID, [DatabaseName], [SchemaName], [ObjectName], [ObjectType], [IndexName], [IndexType], [StatisticsName], [PartitionNumber], [ExtendedInfo], [Command], [CommandType], [StartTime], [EndTime], [ErrorNumber], [ErrorMessage] FROM [CommandLog]  WHERE [PartitionNumber]=:partitionnumber  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":partitionnumber", $partitionnumber);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->id = $records["ID"];
				$instance->databasename = $records["DatabaseName"];
				$instance->schemaname = $records["SchemaName"];
				$instance->objectname = $records["ObjectName"];
				$instance->objecttype = $records["ObjectType"];
				$instance->indexname = $records["IndexName"];
				$instance->indextype = $records["IndexType"];
				$instance->statisticsname = $records["StatisticsName"];
				$instance->partitionnumber = $records["PartitionNumber"];
				$instance->extendedinfo = $records["ExtendedInfo"];
				$instance->command = $records["Command"];
				$instance->commandtype = $records["CommandType"];
				$instance->starttime = $records["StartTime"];
				$instance->endtime = $records["EndTime"];
				$instance->errornumber = $records["ErrorNumber"];
				$instance->errormessage = $records["ErrorMessage"];
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
			$res = $this->databasename;
		}catch(Exception $ex){}
		return $res;
	}
	public function __equals($obj) {	
		$res = false ;
		try{
			if($this->id == $obj->id) {
				$res = true;
			}
		}catch(Exception $ex){}
		return $res;
	}
	/*END <<Override Methods>> */
	

}
?>