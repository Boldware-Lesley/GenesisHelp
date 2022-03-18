<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	CRDBranchInfo

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar Account" of type [nvarchar]
	"public nvarchar Buyer" of type [nvarchar]
	"public int AvgStkBulk" of type [int]
	"public int AvgStkReplenish" of type [int]
	"public int Buffer" of type [int]
	"public int LeadTime" of type [int]
	"public nvarchar OrderCalender" of type [nvarchar]
	"public nvarchar DeliveryCalender" of type [nvarchar]
	"public float MinimumGP" of type [float]
	"public int CountDay" of type [int]
	"public nvarchar DTODate" of type [nvarchar]
	"public nvarchar DTOTime" of type [nvarchar]
	"public nvarchar DTOUser" of type [nvarchar]
	"public nvarchar DTOMacID" of type [nvarchar]
	"public int SalesMonths" of type [int]
	"public int MinimumFactor" of type [int]
	"public int MaximumFactor" of type [int]
	"public nvarchar PurCardRule" of type [nvarchar]
	"public nvarchar BulkFormula" of type [nvarchar]
	"public nvarchar ReplenishFormula" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Crdbranchinfo {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $account ;	
	public $buyer ;	
	public $avgstkbulk ;	
	public $avgstkreplenish ;	
	public $buffer ;	
	public $leadtime ;	
	public $ordercalender ;	
	public $deliverycalender ;	
	public $minimumgp ;	
	public $countday ;	
	public $dtodate ;	
	public $dtotime ;	
	public $dtouser ;	
	public $dtomacid ;	
	public $salesmonths ;	
	public $minimumfactor ;	
	public $maximumfactor ;	
	public $purcardrule ;	
	public $bulkformula ;	
	public $replenishformula ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RecID($conn,$recid) {
		$instance = new self();
		try {

			$query = " SELECT RecID, [CO], [Branch], [Account], [Buyer], [AvgStkBulk], [AvgStkReplenish], [Buffer], [LeadTime], [OrderCalender], [DeliveryCalender], [MinimumGP], [CountDay], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [SalesMonths], [MinimumFactor], [MaximumFactor], [PurCardRule], [BulkFormula], [ReplenishFormula] FROM [CRDBranchInfo]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->account = $records["Account"];
				$instance->buyer = $records["Buyer"];
				$instance->avgstkbulk = $records["AvgStkBulk"];
				$instance->avgstkreplenish = $records["AvgStkReplenish"];
				$instance->buffer = $records["Buffer"];
				$instance->leadtime = $records["LeadTime"];
				$instance->ordercalender = $records["OrderCalender"];
				$instance->deliverycalender = $records["DeliveryCalender"];
				$instance->minimumgp = $records["MinimumGP"];
				$instance->countday = $records["CountDay"];
				$instance->dtodate = $records["DTODate"];
				$instance->dtotime = $records["DTOTime"];
				$instance->dtouser = $records["DTOUser"];
				$instance->dtomacid = $records["DTOMacID"];
				$instance->salesmonths = $records["SalesMonths"];
				$instance->minimumfactor = $records["MinimumFactor"];
				$instance->maximumfactor = $records["MaximumFactor"];
				$instance->purcardrule = $records["PurCardRule"];
				$instance->bulkformula = $records["BulkFormula"];
				$instance->replenishformula = $records["ReplenishFormula"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}


    /**
    Main Constructor For Declearing Using ID
     */
    public static function ini_Code($conn,$co,$branch,$acc) {
        $instance = new self();
        try {

            $query = " SELECT RecID, [CO], [Branch], [Account], [Buyer], [AvgStkBulk], [AvgStkReplenish], [Buffer], [LeadTime], [OrderCalender], [DeliveryCalender], [MinimumGP], [CountDay], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [SalesMonths], [MinimumFactor], [MaximumFactor], [PurCardRule], [BulkFormula], [ReplenishFormula] FROM [CRDBranchInfo] ".
                " WHERE [CO]=:CO AND [Branch]=:Branch AND [Account]=:Account;  ";
            $stmt = $conn->getStatement($query);
            $stmt->bindParam(":Account", $acc);
            $stmt->bindParam(":CO", $co);
            $stmt->bindParam(":Branch", $branch);
            $stmt->execute();
            while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
                $instance->recid = $records["RecID"];
                $instance->co = $records["CO"];
                $instance->branch = $records["Branch"];
                $instance->account = $records["Account"];
                $instance->buyer = $records["Buyer"];
                $instance->avgstkbulk = $records["AvgStkBulk"];
                $instance->avgstkreplenish = $records["AvgStkReplenish"];
                $instance->buffer = $records["Buffer"];
                $instance->leadtime = $records["LeadTime"];
                $instance->ordercalender = $records["OrderCalender"];
                $instance->deliverycalender = $records["DeliveryCalender"];
                $instance->minimumgp = $records["MinimumGP"];
                $instance->countday = $records["CountDay"];
                $instance->dtodate = $records["DTODate"];
                $instance->dtotime = $records["DTOTime"];
                $instance->dtouser = $records["DTOUser"];
                $instance->dtomacid = $records["DTOMacID"];
                $instance->salesmonths = $records["SalesMonths"];
                $instance->minimumfactor = $records["MinimumFactor"];
                $instance->maximumfactor = $records["MaximumFactor"];
                $instance->purcardrule = $records["PurCardRule"];
                $instance->bulkformula = $records["BulkFormula"];
                $instance->replenishformula = $records["ReplenishFormula"];
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