<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:37
@Database			:	GENESIS-DEMO
@Table			:	SYSTillReg

[@Descriptions]
Class is using the following global variables:
	"public int RECID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar BRANCH" of type [nvarchar]
	"public nvarchar TILLNO" of type [nvarchar]
	"public nvarchar TILLMACID" of type [nvarchar]
	"public nvarchar AttachScale" of type [nvarchar]
	"public nvarchar PortNo" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Systillreg {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $tillno ;	
	public $tillmacid ;	
	public $attachscale ;	
	public $portno ;	
	
	
	/*END <<Private Variables>> */
	
	/*BEGIN <<Constructors>> */
	
	
	/**
	Main Constructor For Declearing Using ID
	*/
	public static function ini_RECID($conn,$recid) {
		$instance = new self();
		try {

			$query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [TILLMACID], [AttachScale], [PortNo] FROM [SYSTillReg]  WHERE [RECID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RECID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["BRANCH"];
				$instance->tillno = $records["TILLNO"];
				$instance->tillmacid = $records["TILLMACID"];
				$instance->attachscale = $records["AttachScale"];
				$instance->portno = $records["PortNo"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}

    public static function ini_code($conn,$mac,$co,$branch) {
        $instance = new self();
        try {

            $query = " SELECT RECID, [CO], [BRANCH], [TILLNO], [TILLMACID], [AttachScale], [PortNo] FROM [SYSTillReg]  WHERE [CO]=:CO AND [BRANCH]=:BRANCH AND [TILLMACID]=:TILLMACID ";
            $stmt = $conn->getStatement($query);
            $stmt->bindParam(":CO", $co);
            $stmt->bindParam(":BRANCH", $branch);
            $stmt->bindParam(":TILLMACID", $mac);
            $stmt->execute();
            while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
                $instance->recid = $records["RECID"];
                $instance->co = $records["CO"];
                $instance->branch = $records["BRANCH"];
                $instance->tillno = $records["TILLNO"];
                $instance->tillmacid = $records["TILLMACID"];
                $instance->attachscale = $records["AttachScale"];
                $instance->portno = $records["PortNo"];
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