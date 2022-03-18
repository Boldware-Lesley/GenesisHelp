<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:23
@Database			:	GENESIS-DEMO
@Table			:	DEBOnlineCust

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Title" of type [nvarchar]
	"public nvarchar Name" of type [nvarchar]
	"public nvarchar DelAddress1" of type [nvarchar]
	"public nvarchar DelAddress2" of type [nvarchar]
	"public nvarchar DelAddress3" of type [nvarchar]
	"public nvarchar DelAddress4" of type [nvarchar]
	"public nvarchar DelPostCode" of type [nvarchar]
	"public nvarchar Telephone" of type [nvarchar]
	"public nvarchar Fax" of type [nvarchar]
	"public nvarchar Email" of type [nvarchar]
	"public nvarchar CellPhone" of type [nvarchar]
	"public nvarchar IDNo" of type [nvarchar]
	"public nvarchar Status" of type [nvarchar]
	"public nvarchar Area" of type [nvarchar]
	"public nvarchar Region" of type [nvarchar]
	"public nvarchar Route" of type [nvarchar]
	"public nvarchar Salesrep" of type [nvarchar]
	"public nvarchar GenesisAccount" of type [nvarchar]
	"public nvarchar CreateDate" of type [nvarchar]
	"public nvarchar CreateTime" of type [nvarchar]
	"public nvarchar CreateUser" of type [nvarchar]
	"public nvarchar CreateMacID" of type [nvarchar]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public nvarchar Version" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Debonlinecust {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $title ;	
	public $name ;	
	public $deladdress1 ;	
	public $deladdress2 ;	
	public $deladdress3 ;	
	public $deladdress4 ;	
	public $delpostcode ;	
	public $telephone ;	
	public $fax ;	
	public $email ;	
	public $cellphone ;	
	public $idno ;	
	public $status ;	
	public $area ;	
	public $region ;	
	public $route ;	
	public $salesrep ;	
	public $genesisaccount ;	
	public $createdate ;	
	public $createtime ;	
	public $createuser ;	
	public $createmacid ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $version ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RecID($recid) {	
		$instance = new self();
		try {
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
			$query = " SELECT RecID, [CO], [Branch], [Account], [Title], [Name], [DelAddress1], [DelAddress2], [DelAddress3], [DelAddress4], [DelPostCode], [Telephone], [Fax], [Email], [CellPhone], [IDNo], [Status], [Area], [Region], [Route], [Salesrep], [GenesisAccount], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Version] FROM [DEBOnlineCustMst]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->title = $records["Title"];
				$instance->name = $records["Name"];
				$instance->deladdress1 = $records["DelAddress1"];
				$instance->deladdress2 = $records["DelAddress2"];
				$instance->deladdress3 = $records["DelAddress3"];
				$instance->deladdress4 = $records["DelAddress4"];
				$instance->delpostcode = $records["DelPostCode"];
				$instance->telephone = $records["Telephone"];
				$instance->fax = $records["Fax"];
				$instance->email = $records["Email"];
				$instance->cellphone = $records["CellPhone"];
				$instance->idno = $records["IDNo"];
				$instance->status = $records["Status"];
				$instance->area = $records["Area"];
				$instance->region = $records["Region"];
				$instance->route = $records["Route"];
				$instance->salesrep = $records["Salesrep"];
				$instance->genesisaccount = $records["GenesisAccount"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->version = $records["Version"];
			}
            $conn->Close();
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using DelPostCode
	*/
	public static function ini_code($co,$branch,$account) {
		$instance = new self();
		try {
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
			$query = " SELECT RecID, [CO], [Branch], [Account], [Title], [Name], [DelAddress1], [DelAddress2], [DelAddress3], [DelAddress4], [DelPostCode], [Telephone], [Fax], [Email], [CellPhone], [IDNo], [Status], [Area], [Region], [Route], [Salesrep], [GenesisAccount], [CreateDate], [CreateTime], [CreateUser], [CreateMacID], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [Version] FROM [DEBOnlineCustMst]  ".
                " WHERE [CO]=:CO AND [Branch]=:BRANCH AND [Account]=:ACCOUNT ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":CO", $co);
            $stmt->bindParam(":BRANCH", $branch);
            $stmt->bindParam(":ACCOUNT", $account);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->title = $records["Title"];
				$instance->name = $records["Name"];
				$instance->deladdress1 = $records["DelAddress1"];
				$instance->deladdress2 = $records["DelAddress2"];
				$instance->deladdress3 = $records["DelAddress3"];
				$instance->deladdress4 = $records["DelAddress4"];
				$instance->delpostcode = $records["DelPostCode"];
				$instance->telephone = $records["Telephone"];
				$instance->fax = $records["Fax"];
				$instance->email = $records["Email"];
				$instance->cellphone = $records["CellPhone"];
				$instance->idno = $records["IDNo"];
				$instance->status = $records["Status"];
				$instance->area = $records["Area"];
				$instance->region = $records["Region"];
				$instance->route = $records["Route"];
				$instance->salesrep = $records["Salesrep"];
				$instance->genesisaccount = $records["GenesisAccount"];
				$instance->createdate = $records["CreateDate"];
				$instance->createtime = $records["CreateTime"];
				$instance->createuser = $records["CreateUser"];
				$instance->createmacid = $records["CreateMacID"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->version = $records["Version"];
			}
            $conn->Close();
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
			$res = $this->title;
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