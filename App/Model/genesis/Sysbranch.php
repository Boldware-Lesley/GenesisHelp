<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	SYSBranch

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar BRName" of type [nvarchar]
	"public nvarchar ShortName" of type [nvarchar]
	"public nvarchar BRBusAddress1" of type [nvarchar]
	"public nvarchar BRBusAddress2" of type [nvarchar]
	"public nvarchar BRBusAddress3" of type [nvarchar]
	"public nvarchar BRBusAddress4" of type [nvarchar]
	"public nvarchar BRPostAddress1" of type [nvarchar]
	"public nvarchar BRPostAddress2" of type [nvarchar]
	"public nvarchar BRPostAddress3" of type [nvarchar]
	"public nvarchar BRPostAddress4" of type [nvarchar]
	"public nvarchar BRTel" of type [nvarchar]
	"public nvarchar BRFax" of type [nvarchar]
	"public nvarchar BREmail" of type [nvarchar]
	"public nvarchar TradingBranch" of type [nvarchar]
	"public nvarchar BranchCategory" of type [nvarchar]
	"public nvarchar BranchType" of type [nvarchar]
	"public nvarchar Online" of type [nvarchar]
	"public nvarchar Licence" of type [nvarchar]
	"public nvarchar BRWebSite" of type [nvarchar]
	"public nvarchar Loyalty" of type [nvarchar]
	"public nvarchar BRBankName" of type [nvarchar]
	"public nvarchar BRBranchName" of type [nvarchar]
	"public nvarchar BRBranchCode" of type [nvarchar]
	"public nvarchar BRAccNo" of type [nvarchar]
	"public nvarchar BRAccName" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysbranch {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $brname ;	
	public $shortname ;	
	public $brbusaddress1 ;	
	public $brbusaddress2 ;	
	public $brbusaddress3 ;	
	public $brbusaddress4 ;	
	public $brpostaddress1 ;	
	public $brpostaddress2 ;	
	public $brpostaddress3 ;	
	public $brpostaddress4 ;	
	public $brtel ;	
	public $brfax ;	
	public $bremail ;	
	public $tradingbranch ;	
	public $branchcategory ;	
	public $branchtype ;	
	public $online ;	
	public $licence ;	
	public $brwebsite ;	
	public $loyalty ;	
	public $brbankname ;	
	public $brbranchname ;	
	public $brbranchcode ;	
	public $braccno ;	
	public $braccname ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($recid) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [Branch], [BRName], [ShortName], [BRBusAddress1], [BRBusAddress2], [BRBusAddress3], [BRBusAddress4], [BRPostAddress1], [BRPostAddress2], [BRPostAddress3], [BRPostAddress4], [BRTel], [BRFax], [BREmail], [TradingBranch], [BranchCategory], [BranchType], [Online], [Licence], [BRWebSite], [Loyalty], [BRBankName], [BRBranchName], [BRBranchCode], [BRAccNo], [BRAccName] FROM [SYSBranch]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->brname = $records["BRName"];
				$instance->shortname = $records["ShortName"];
				$instance->brbusaddress1 = $records["BRBusAddress1"];
				$instance->brbusaddress2 = $records["BRBusAddress2"];
				$instance->brbusaddress3 = $records["BRBusAddress3"];
				$instance->brbusaddress4 = $records["BRBusAddress4"];
				$instance->brpostaddress1 = $records["BRPostAddress1"];
				$instance->brpostaddress2 = $records["BRPostAddress2"];
				$instance->brpostaddress3 = $records["BRPostAddress3"];
				$instance->brpostaddress4 = $records["BRPostAddress4"];
				$instance->brtel = $records["BRTel"];
				$instance->brfax = $records["BRFax"];
				$instance->bremail = $records["BREmail"];
				$instance->tradingbranch = $records["TradingBranch"];
				$instance->branchcategory = $records["BranchCategory"];
				$instance->branchtype = $records["BranchType"];
				$instance->online = $records["Online"];
				$instance->licence = $records["Licence"];
				$instance->brwebsite = $records["BRWebSite"];
				$instance->loyalty = $records["Loyalty"];
				$instance->brbankname = $records["BRBankName"];
				$instance->brbranchname = $records["BRBranchName"];
				$instance->brbranchcode = $records["BRBranchCode"];
				$instance->braccno = $records["BRAccNo"];
				$instance->braccname = $records["BRAccName"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using BRBranchCode
	*/
	public static function ini_BRBranchCode($brbranchcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RECID, [CO], [Branch], [BRName], [ShortName], [BRBusAddress1], [BRBusAddress2], [BRBusAddress3], [BRBusAddress4], [BRPostAddress1], [BRPostAddress2], [BRPostAddress3], [BRPostAddress4], [BRTel], [BRFax], [BREmail], [TradingBranch], [BranchCategory], [BranchType], [Online], [Licence], [BRWebSite], [Loyalty], [BRBankName], [BRBranchName], [BRBranchCode], [BRAccNo], [BRAccName] FROM [SYSBranch]  WHERE [BRBranchCode]=:brbranchcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":brbranchcode", $brbranchcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->brname = $records["BRName"];
				$instance->shortname = $records["ShortName"];
				$instance->brbusaddress1 = $records["BRBusAddress1"];
				$instance->brbusaddress2 = $records["BRBusAddress2"];
				$instance->brbusaddress3 = $records["BRBusAddress3"];
				$instance->brbusaddress4 = $records["BRBusAddress4"];
				$instance->brpostaddress1 = $records["BRPostAddress1"];
				$instance->brpostaddress2 = $records["BRPostAddress2"];
				$instance->brpostaddress3 = $records["BRPostAddress3"];
				$instance->brpostaddress4 = $records["BRPostAddress4"];
				$instance->brtel = $records["BRTel"];
				$instance->brfax = $records["BRFax"];
				$instance->bremail = $records["BREmail"];
				$instance->tradingbranch = $records["TradingBranch"];
				$instance->branchcategory = $records["BranchCategory"];
				$instance->branchtype = $records["BranchType"];
				$instance->online = $records["Online"];
				$instance->licence = $records["Licence"];
				$instance->brwebsite = $records["BRWebSite"];
				$instance->loyalty = $records["Loyalty"];
				$instance->brbankname = $records["BRBankName"];
				$instance->brbranchname = $records["BRBranchName"];
				$instance->brbranchcode = $records["BRBranchCode"];
				$instance->braccno = $records["BRAccNo"];
				$instance->braccname = $records["BRAccName"];
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
			$res = $this->brname;
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