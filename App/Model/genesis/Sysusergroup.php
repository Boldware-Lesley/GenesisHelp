<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:40
@Database			:	GENESIS-DEMO
@Table			:	SYSUserGroup

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar USERGROUP" of type [nvarchar]
	"public nvarchar GROUPDESC" of type [nvarchar]
	"public nvarchar GroupType" of type [nvarchar]
	"public nvarchar AllowCash" of type [nvarchar]
	"public nvarchar AllowCheques" of type [nvarchar]
	"public nvarchar AllowCreditCards" of type [nvarchar]
	"public nvarchar AllowVouchers" of type [nvarchar]
	"public nvarchar AllowTransfers" of type [nvarchar]
	"public nvarchar AllowTenderType1" of type [nvarchar]
	"public nvarchar AllowTenderType2" of type [nvarchar]
	"public nvarchar AllowTenderType3" of type [nvarchar]
	"public nvarchar AllowTenderType4" of type [nvarchar]
	"public nvarchar TenderType1" of type [nvarchar]
	"public nvarchar TenderType2" of type [nvarchar]
	"public nvarchar TenderType3" of type [nvarchar]
	"public nvarchar TenderType4" of type [nvarchar]
	"public nvarchar TenderForm1" of type [nvarchar]
	"public nvarchar TenderForm2" of type [nvarchar]
	"public nvarchar TenderForm3" of type [nvarchar]
	"public nvarchar TenderForm4" of type [nvarchar]
	"public float LimitCash" of type [float]
	"public float LimitCheques" of type [float]
	"public float LimitCreditCards" of type [float]
	"public float LimitVouchers" of type [float]
	"public float LimitTransfers" of type [float]
	"public float LimitTenderType1" of type [float]
	"public float LimitTenderType2" of type [float]
	"public float LimitTenderType3" of type [float]
	"public float LimitTenderType4" of type [float]
	"public nvarchar AllowSaleGroup" of type [nvarchar]
	"public nvarchar BlockSaleGroup" of type [nvarchar]
	"public nvarchar AllowViewCost" of type [nvarchar]
	"public nvarchar AllowViewProfit" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Sysusergroup {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $usergroup ;	
	public $groupdesc ;	
	public $grouptype ;	
	public $allowcash ;	
	public $allowcheques ;	
	public $allowcreditcards ;	
	public $allowvouchers ;	
	public $allowtransfers ;	
	public $allowtendertype1 ;	
	public $allowtendertype2 ;	
	public $allowtendertype3 ;	
	public $allowtendertype4 ;	
	public $tendertype1 ;	
	public $tendertype2 ;	
	public $tendertype3 ;	
	public $tendertype4 ;	
	public $tenderform1 ;	
	public $tenderform2 ;	
	public $tenderform3 ;	
	public $tenderform4 ;	
	public $limitcash ;	
	public $limitcheques ;	
	public $limitcreditcards ;	
	public $limitvouchers ;	
	public $limittransfers ;	
	public $limittendertype1 ;	
	public $limittendertype2 ;	
	public $limittendertype3 ;	
	public $limittendertype4 ;	
	public $allowsalegroup ;	
	public $blocksalegroup ;	
	public $allowviewcost ;	
	public $allowviewprofit ;	
	
	
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
			$query = " SELECT RECID, [CO], [USERGROUP], [GROUPDESC], [GroupType], [AllowCash], [AllowCheques], [AllowCreditCards], [AllowVouchers], [AllowTransfers], [AllowTenderType1], [AllowTenderType2], [AllowTenderType3], [AllowTenderType4], [TenderType1], [TenderType2], [TenderType3], [TenderType4], [TenderForm1], [TenderForm2], [TenderForm3], [TenderForm4], [LimitCash], [LimitCheques], [LimitCreditCards], [LimitVouchers], [LimitTransfers], [LimitTenderType1], [LimitTenderType2], [LimitTenderType3], [LimitTenderType4], [AllowSaleGroup], [BlockSaleGroup], [AllowViewCost], [AllowViewProfit] FROM [SYSUserGroup]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->usergroup = $records["USERGROUP"];
				$instance->groupdesc = $records["GROUPDESC"];
				$instance->grouptype = $records["GroupType"];
				$instance->allowcash = $records["AllowCash"];
				$instance->allowcheques = $records["AllowCheques"];
				$instance->allowcreditcards = $records["AllowCreditCards"];
				$instance->allowvouchers = $records["AllowVouchers"];
				$instance->allowtransfers = $records["AllowTransfers"];
				$instance->allowtendertype1 = $records["AllowTenderType1"];
				$instance->allowtendertype2 = $records["AllowTenderType2"];
				$instance->allowtendertype3 = $records["AllowTenderType3"];
				$instance->allowtendertype4 = $records["AllowTenderType4"];
				$instance->tendertype1 = $records["TenderType1"];
				$instance->tendertype2 = $records["TenderType2"];
				$instance->tendertype3 = $records["TenderType3"];
				$instance->tendertype4 = $records["TenderType4"];
				$instance->tenderform1 = $records["TenderForm1"];
				$instance->tenderform2 = $records["TenderForm2"];
				$instance->tenderform3 = $records["TenderForm3"];
				$instance->tenderform4 = $records["TenderForm4"];
				$instance->limitcash = $records["LimitCash"];
				$instance->limitcheques = $records["LimitCheques"];
				$instance->limitcreditcards = $records["LimitCreditCards"];
				$instance->limitvouchers = $records["LimitVouchers"];
				$instance->limittransfers = $records["LimitTransfers"];
				$instance->limittendertype1 = $records["LimitTenderType1"];
				$instance->limittendertype2 = $records["LimitTenderType2"];
				$instance->limittendertype3 = $records["LimitTenderType3"];
				$instance->limittendertype4 = $records["LimitTenderType4"];
				$instance->allowsalegroup = $records["AllowSaleGroup"];
				$instance->blocksalegroup = $records["BlockSaleGroup"];
				$instance->allowviewcost = $records["AllowViewCost"];
				$instance->allowviewprofit = $records["AllowViewProfit"];
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