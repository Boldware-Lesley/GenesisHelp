<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:36
@Database			:	GENESIS-DEMO
@Table			:	syssubscriptions

[@Descriptions]
Class is using the following global variables:
	"public int artid" of type [int]
	"public int srvid" of type [int]
	"public nvarchar dest_db" of type [nvarchar]
	"public tinyint status" of type [tinyint]
	"public tinyint sync_type" of type [tinyint]
	"public nvarchar login_name" of type [nvarchar]
	"public int subscription_type" of type [int]
	"public binary distribution_jobid" of type [binary]
	"public string timestamp" of type [string]
	"public tinyint update_mode" of type [tinyint]
	"public boolean loopback_detection" of type [boolean]
	"public boolean queued_reinit" of type [boolean]
	"public tinyint nosync_type" of type [tinyint]
	"public nvarchar srvname" of type [nvarchar]
*/
namespace genesis;


use PDO;

class Syssubscriptions {
	
	/*BEGIN <<Private Variables>> */
	
	public $artid ;	
	public $srvid ;	
	public $dest_db ;	
	public $status ;	
	public $sync_type ;	
	public $login_name ;	
	public $subscription_type ;	
	public $distribution_jobid ;	
	public $timestamp ;	
	public $update_mode ;	
	public $loopback_detection ;	
	public $queued_reinit ;	
	public $nosync_type ;	
	public $srvname ;	
	
	
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
			$query = " SELECT artid, [srvid], [dest_db], [status], [sync_type], [login_name], [subscription_type], [distribution_jobid], [timestamp], [update_mode], [loopback_detection], [queued_reinit], [nosync_type], [srvname] FROM [syssubscriptions]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->artid = $records["artid"];
				$instance->srvid = $records["srvid"];
				$instance->dest_db = $records["dest_db"];
				$instance->status = $records["status"];
				$instance->sync_type = $records["sync_type"];
				$instance->login_name = $records["login_name"];
				$instance->subscription_type = $records["subscription_type"];
				$instance->distribution_jobid = $records["distribution_jobid"];
				$instance->timestamp = $records["timestamp"];
				$instance->update_mode = $records["update_mode"];
				$instance->loopback_detection = $records["loopback_detection"];
				$instance->queued_reinit = $records["queued_reinit"];
				$instance->nosync_type = $records["nosync_type"];
				$instance->srvname = $records["srvname"];
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
			$res = $this->login_name;
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