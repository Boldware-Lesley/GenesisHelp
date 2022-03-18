<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	SYSAP

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public int AP" of type [int]
	"public nvarchar FROMDATE" of type [nvarchar]
	"public nvarchar TODATE" of type [nvarchar]
	"public nvarchar YEAREND" of type [nvarchar]
	"public nvarchar YEARENDRUN" of type [nvarchar]
	"public nvarchar APACTIVE" of type [nvarchar]
	"public nvarchar APOPEN" of type [nvarchar]
	"public int GLYear" of type [int]
*/
namespace genesis;


use PDO;

class Sysap {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $ap ;	
	public $fromdate ;	
	public $todate ;	
	public $yearend ;	
	public $yearendrun ;	
	public $apactive ;	
	public $apopen ;	
	public $glyear ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($conn,$recid) {
		$instance = new self();
		try {
			$query = " SELECT RECID, [CO], [AP], [FROMDATE], [TODATE], [YEAREND], [YEARENDRUN], [APACTIVE], [APOPEN], [GLYear] FROM [SYSAP]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->ap = $records["AP"];
				$instance->fromdate = $records["FROMDATE"];
				$instance->todate = $records["TODATE"];
				$instance->yearend = $records["YEAREND"];
				$instance->yearendrun = $records["YEARENDRUN"];
				$instance->apactive = $records["APACTIVE"];
				$instance->apopen = $records["APOPEN"];
				$instance->glyear = $records["GLYear"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}

    public static function ini_Code($conn,$co,$ap) {
        $instance = new self();
        try {

            $query = " SELECT RECID, [CO], [AP], [FROMDATE], [TODATE], [YEAREND], [YEARENDRUN], [APACTIVE], [APOPEN], [GLYear] FROM [SYSAP]  WHERE [CO]=:CO AND [AP]=:AP";
            $stmt = $conn->getStatement($query);
            $stmt->bindParam(":CO", $co);
            $stmt->bindParam(":AP", $ap);
            $stmt->execute();
            while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
                $instance->recid = $records["RECID"];
                $instance->co = $records["CO"];
                $instance->ap = $records["AP"];
                $instance->fromdate = $records["FROMDATE"];
                $instance->todate = $records["TODATE"];
                $instance->yearend = $records["YEAREND"];
                $instance->yearendrun = $records["YEARENDRUN"];
                $instance->apactive = $records["APACTIVE"];
                $instance->apopen = $records["APOPEN"];
                $instance->glyear = $records["GLYear"];
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

	/*END <<Override Methods>> */
	

}
?>