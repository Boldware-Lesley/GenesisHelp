<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:21
@Database			:	GENESIS-DEMO
@Table			:	SVMJobDetails

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public int JobNo" of type [int]
	"public int LineNumber" of type [int]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar Description1" of type [nvarchar]
	"public nvarchar Description2" of type [nvarchar]
	"public float Quantity" of type [float]
	"public float PriceExcl" of type [float]
	"public float PriceIncl" of type [float]
	"public nvarchar SerialNo" of type [nvarchar]
	"public nvarchar TechCode" of type [nvarchar]
	"public nvarchar BillCode" of type [nvarchar]
	"public nvarchar TranDate" of type [nvarchar]
	"public nvarchar TimeBillable" of type [nvarchar]
	"public nvarchar TimeNonBillable" of type [nvarchar]
	"public nvarchar TimeTotal" of type [nvarchar]
	"public nvarchar TravelTime" of type [nvarchar]
	"public int TravelKM" of type [int]
	"public nvarchar TravelBillable" of type [nvarchar]
	"public nvarchar Notes" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Svmjobdetails {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $jobno ;	
	public $linenumber ;	
	public $stockcode ;	
	public $linkcode ;	
	public $description1 ;	
	public $description2 ;	
	public $quantity ;	
	public $priceexcl ;	
	public $priceincl ;	
	public $serialno ;	
	public $techcode ;	
	public $billcode ;	
	public $trandate ;	
	public $timebillable ;	
	public $timenonbillable ;	
	public $timetotal ;	
	public $traveltime ;	
	public $travelkm ;	
	public $travelbillable ;	
	public $notes ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RecID($conn,$recid) {
		$instance = new self();
		try {

			$query = " SELECT [RecID], [CO], [Branch], [JobNo], [LineNumber], [StockCode], [LinkCode], [Description1], [Description2], [Quantity], [PriceExcl], [PriceIncl], [SerialNo], [TechCode], [BillCode], [TranDate], [TimeBillable], [TimeNonBillable], [TimeTotal], [TravelBillable], [Notes], [LOB], [Category] FROM [SVMJobDetails]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->jobno = $records["JobNo"];
				$instance->linenumber = $records["LineNumber"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->description1 = $records["Description1"];
				$instance->description2 = $records["Description2"];
				$instance->quantity = $records["Quantity"];
				$instance->priceexcl = $records["PriceExcl"];
				$instance->priceincl = $records["PriceIncl"];
				$instance->serialno = $records["SerialNo"];
				$instance->techcode = $records["TechCode"];
				$instance->billcode = $records["BillCode"];
				$instance->trandate = $records["TranDate"];
				$instance->timebillable = $records["TimeBillable"];
				$instance->timenonbillable = $records["TimeNonBillable"];
				$instance->timetotal = $records["TimeTotal"];
				$instance->traveltime = $records["TravelTime"];
				$instance->travelkm = $records["TravelKM"];
				$instance->travelbillable = $records["TravelBillable"];
				$instance->notes = $records["Notes"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}


    public static function ini_Code($conn,$co,$branch,$JobNo,$linenumber) {
        $instance = new self();
        try {

            $query = "SELECT [RecID], [CO], [Branch], [JobNo], [LineNumber], [StockCode], [LinkCode], [Description1], [Description2], [Quantity], [PriceExcl], [PriceIncl], [SerialNo], [TechCode], [BillCode], [TranDate], [TimeBillable], [TimeNonBillable], [TimeTotal], [TravelBillable], [Notes], [LOB], [Category] FROM [SVMJobDetails]    ".
                " WHERE [CO]=:CO AND [Branch]=:Branch AND [JobNo]=:JobNo AND [LineNumber]=:LineNumber  ";
            $stmt = $conn->getStatement($query);
            $stmt->bindParam(":CO", $co);
            $stmt->bindParam(":Branch", $branch);
            $stmt->bindParam(":JobNo", $JobNo);
            $stmt->bindParam(":LineNumber", $linenumber);
            $stmt->execute();
            while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
                $instance->recid = $records["RecID"];
                $instance->co = $records["CO"];
                $instance->branch = $records["Branch"];
                $instance->jobno = $records["JobNo"];
                $instance->linenumber = $records["LineNumber"];
                $instance->stockcode = $records["StockCode"];
                $instance->linkcode = $records["LinkCode"];
                $instance->description1 = $records["Description1"];
                $instance->description2 = $records["Description2"];
                $instance->quantity = $records["Quantity"];
                $instance->priceexcl = $records["PriceExcl"];
                $instance->priceincl = $records["PriceIncl"];
                $instance->serialno = $records["SerialNo"];
                $instance->techcode = $records["TechCode"];
                $instance->billcode = $records["BillCode"];
                $instance->trandate = $records["TranDate"];
                $instance->timebillable = $records["TimeBillable"];
                $instance->timenonbillable = $records["TimeNonBillable"];
                $instance->timetotal = $records["TimeTotal"];
                $instance->traveltime = $records["TravelTime"];
                $instance->travelkm = $records["TravelKM"];
                $instance->travelbillable = $records["TravelBillable"];
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