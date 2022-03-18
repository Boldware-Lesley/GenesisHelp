<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:35
@Database			:	GENESIS-DEMO
@Table			:	SysRepTemplates

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar Suite" of type [nvarchar]
	"public nvarchar ModCode" of type [nvarchar]
	"public nvarchar RepName" of type [nvarchar]
	"public nvarchar Template" of type [nvarchar]
	"public nvarchar Description" of type [nvarchar]
	"public ntext SQL01" of type [ntext]
	"public ntext SQL02" of type [ntext]
	"public ntext SQL03" of type [ntext]
	"public ntext SQL04" of type [ntext]
	"public ntext SQL05" of type [ntext]
	"public nvarchar GroupBy01" of type [nvarchar]
	"public nvarchar GroupBy02" of type [nvarchar]
	"public nvarchar GroupBy03" of type [nvarchar]
	"public nvarchar GroupBy04" of type [nvarchar]
	"public nvarchar GroupBy05" of type [nvarchar]
	"public nvarchar OrderBy01" of type [nvarchar]
	"public nvarchar OrderBy02" of type [nvarchar]
	"public nvarchar OrderBy03" of type [nvarchar]
	"public nvarchar OrderBy04" of type [nvarchar]
	"public nvarchar OrderBy05" of type [nvarchar]
	"public ntext DesignSQL01" of type [ntext]
	"public ntext DesignSQL02" of type [ntext]
	"public ntext DesignSQL03" of type [ntext]
	"public ntext DesignSQL04" of type [ntext]
	"public ntext DesignSQL05" of type [ntext]
	"public nvarchar DesignGroupBy01" of type [nvarchar]
	"public nvarchar DesignGroupBy02" of type [nvarchar]
	"public nvarchar DesignGroupBy03" of type [nvarchar]
	"public nvarchar DesignGroupBy04" of type [nvarchar]
	"public nvarchar DesignGroupBy05" of type [nvarchar]
	"public nvarchar DesignOrderBy01" of type [nvarchar]
	"public nvarchar DesignOrderBy02" of type [nvarchar]
	"public nvarchar DesignOrderBy03" of type [nvarchar]
	"public nvarchar DesignOrderBy04" of type [nvarchar]
	"public nvarchar DesignOrderBy05" of type [nvarchar]
	"public image ReportTemplate" of type [image]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysreptemplates {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $suite ;	
	public $modcode ;	
	public $repname ;	
	public $template ;	
	public $description ;	
	public $sql01 ;	
	public $sql02 ;	
	public $sql03 ;	
	public $sql04 ;	
	public $sql05 ;	
	public $groupby01 ;	
	public $groupby02 ;	
	public $groupby03 ;	
	public $groupby04 ;	
	public $groupby05 ;	
	public $orderby01 ;	
	public $orderby02 ;	
	public $orderby03 ;	
	public $orderby04 ;	
	public $orderby05 ;	
	public $designsql01 ;	
	public $designsql02 ;	
	public $designsql03 ;	
	public $designsql04 ;	
	public $designsql05 ;	
	public $designgroupby01 ;	
	public $designgroupby02 ;	
	public $designgroupby03 ;	
	public $designgroupby04 ;	
	public $designgroupby05 ;	
	public $designorderby01 ;	
	public $designorderby02 ;	
	public $designorderby03 ;	
	public $designorderby04 ;	
	public $designorderby05 ;	
	public $reporttemplate ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	
	
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
			$query = " SELECT RecID, [Suite], [ModCode], [RepName], [Template], [Description], [SQL01], [SQL02], [SQL03], [SQL04], [SQL05], [GroupBy01], [GroupBy02], [GroupBy03], [GroupBy04], [GroupBy05], [OrderBy01], [OrderBy02], [OrderBy03], [OrderBy04], [OrderBy05], [DesignSQL01], [DesignSQL02], [DesignSQL03], [DesignSQL04], [DesignSQL05], [DesignGroupBy01], [DesignGroupBy02], [DesignGroupBy03], [DesignGroupBy04], [DesignGroupBy05], [DesignOrderBy01], [DesignOrderBy02], [DesignOrderBy03], [DesignOrderBy04], [DesignOrderBy05], [ReportTemplate], [DTODate], [DTOTime], [DTOUser] FROM [SysRepTemplates]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->suite = $records["Suite"];
				$instance->modcode = $records["ModCode"];
				$instance->repname = $records["RepName"];
				$instance->template = $records["Template"];
				$instance->description = $records["Description"];
				$instance->sql01 = $records["SQL01"];
				$instance->sql02 = $records["SQL02"];
				$instance->sql03 = $records["SQL03"];
				$instance->sql04 = $records["SQL04"];
				$instance->sql05 = $records["SQL05"];
				$instance->groupby01 = $records["GroupBy01"];
				$instance->groupby02 = $records["GroupBy02"];
				$instance->groupby03 = $records["GroupBy03"];
				$instance->groupby04 = $records["GroupBy04"];
				$instance->groupby05 = $records["GroupBy05"];
				$instance->orderby01 = $records["OrderBy01"];
				$instance->orderby02 = $records["OrderBy02"];
				$instance->orderby03 = $records["OrderBy03"];
				$instance->orderby04 = $records["OrderBy04"];
				$instance->orderby05 = $records["OrderBy05"];
				$instance->designsql01 = $records["DesignSQL01"];
				$instance->designsql02 = $records["DesignSQL02"];
				$instance->designsql03 = $records["DesignSQL03"];
				$instance->designsql04 = $records["DesignSQL04"];
				$instance->designsql05 = $records["DesignSQL05"];
				$instance->designgroupby01 = $records["DesignGroupBy01"];
				$instance->designgroupby02 = $records["DesignGroupBy02"];
				$instance->designgroupby03 = $records["DesignGroupBy03"];
				$instance->designgroupby04 = $records["DesignGroupBy04"];
				$instance->designgroupby05 = $records["DesignGroupBy05"];
				$instance->designorderby01 = $records["DesignOrderBy01"];
				$instance->designorderby02 = $records["DesignOrderBy02"];
				$instance->designorderby03 = $records["DesignOrderBy03"];
				$instance->designorderby04 = $records["DesignOrderBy04"];
				$instance->designorderby05 = $records["DesignOrderBy05"];
				$instance->reporttemplate = $records["ReportTemplate"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
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
			$query = " SELECT RecID, [Suite], [ModCode], [RepName], [Template], [Description], [SQL01], [SQL02], [SQL03], [SQL04], [SQL05], [GroupBy01], [GroupBy02], [GroupBy03], [GroupBy04], [GroupBy05], [OrderBy01], [OrderBy02], [OrderBy03], [OrderBy04], [OrderBy05], [DesignSQL01], [DesignSQL02], [DesignSQL03], [DesignSQL04], [DesignSQL05], [DesignGroupBy01], [DesignGroupBy02], [DesignGroupBy03], [DesignGroupBy04], [DesignGroupBy05], [DesignOrderBy01], [DesignOrderBy02], [DesignOrderBy03], [DesignOrderBy04], [DesignOrderBy05], [ReportTemplate], [DTODate], [DTOTime], [DTOUser] FROM [SysRepTemplates]  WHERE [ModCode]=:modcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":modcode", $modcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->suite = $records["Suite"];
				$instance->modcode = $records["ModCode"];
				$instance->repname = $records["RepName"];
				$instance->template = $records["Template"];
				$instance->description = $records["Description"];
				$instance->sql01 = $records["SQL01"];
				$instance->sql02 = $records["SQL02"];
				$instance->sql03 = $records["SQL03"];
				$instance->sql04 = $records["SQL04"];
				$instance->sql05 = $records["SQL05"];
				$instance->groupby01 = $records["GroupBy01"];
				$instance->groupby02 = $records["GroupBy02"];
				$instance->groupby03 = $records["GroupBy03"];
				$instance->groupby04 = $records["GroupBy04"];
				$instance->groupby05 = $records["GroupBy05"];
				$instance->orderby01 = $records["OrderBy01"];
				$instance->orderby02 = $records["OrderBy02"];
				$instance->orderby03 = $records["OrderBy03"];
				$instance->orderby04 = $records["OrderBy04"];
				$instance->orderby05 = $records["OrderBy05"];
				$instance->designsql01 = $records["DesignSQL01"];
				$instance->designsql02 = $records["DesignSQL02"];
				$instance->designsql03 = $records["DesignSQL03"];
				$instance->designsql04 = $records["DesignSQL04"];
				$instance->designsql05 = $records["DesignSQL05"];
				$instance->designgroupby01 = $records["DesignGroupBy01"];
				$instance->designgroupby02 = $records["DesignGroupBy02"];
				$instance->designgroupby03 = $records["DesignGroupBy03"];
				$instance->designgroupby04 = $records["DesignGroupBy04"];
				$instance->designgroupby05 = $records["DesignGroupBy05"];
				$instance->designorderby01 = $records["DesignOrderBy01"];
				$instance->designorderby02 = $records["DesignOrderBy02"];
				$instance->designorderby03 = $records["DesignOrderBy03"];
				$instance->designorderby04 = $records["DesignOrderBy04"];
				$instance->designorderby05 = $records["DesignOrderBy05"];
				$instance->reporttemplate = $records["ReportTemplate"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
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
			$res = $this->repname;
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