<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:33
@Database			:	GENESIS-DEMO
@Table			:	syspublications

[@Descriptions]
Class is using the following global variables:
	"public nvarchar description" of type [nvarchar]
	"public nvarchar name" of type [nvarchar]
	"public int pubid" of type [int]
	"public tinyint repl_freq" of type [tinyint]
	"public tinyint status" of type [tinyint]
	"public tinyint sync_method" of type [tinyint]
	"public binary snapshot_jobid" of type [binary]
	"public boolean independent_agent" of type [boolean]
	"public boolean immediate_sync" of type [boolean]
	"public boolean enabled_for_internet" of type [boolean]
	"public boolean allow_push" of type [boolean]
	"public boolean allow_pull" of type [boolean]
	"public boolean allow_anonymous" of type [boolean]
	"public boolean immediate_sync_ready" of type [boolean]
	"public boolean allow_sync_tran" of type [boolean]
	"public boolean autogen_sync_procs" of type [boolean]
	"public int retention" of type [int]
	"public boolean allow_queued_tran" of type [boolean]
	"public boolean snapshot_in_defaultfolder" of type [boolean]
	"public nvarchar alt_snapshot_folder" of type [nvarchar]
	"public nvarchar pre_snapshot_script" of type [nvarchar]
	"public nvarchar post_snapshot_script" of type [nvarchar]
	"public boolean compress_snapshot" of type [boolean]
	"public nvarchar ftp_address" of type [nvarchar]
	"public int ftp_port" of type [int]
	"public nvarchar ftp_subdirectory" of type [nvarchar]
	"public nvarchar ftp_login" of type [nvarchar]
	"public nvarchar ftp_password" of type [nvarchar]
	"public boolean allow_dts" of type [boolean]
	"public boolean allow_subscription_copy" of type [boolean]
	"public boolean centralized_conflicts" of type [boolean]
	"public int conflict_retention" of type [int]
	"public int conflict_policy" of type [int]
	"public int queue_type" of type [int]
	"public nvarchar ad_guidname" of type [nvarchar]
	"public int backward_comp_level" of type [int]
	"public boolean allow_initialize_from_backup" of type [boolean]
	"public binary min_autonosync_lsn" of type [binary]
	"public int replicate_ddl" of type [int]
	"public int options" of type [int]
	"public int originator_id" of type [int]
*/
namespace genesis;


use PDO;

class Syspublications {
	
	/*BEGIN <<Private Variables>> */
	
	public $description ;	
	public $name ;	
	public $pubid ;	
	public $repl_freq ;	
	public $status ;	
	public $sync_method ;	
	public $snapshot_jobid ;	
	public $independent_agent ;	
	public $immediate_sync ;	
	public $enabled_for_internet ;	
	public $allow_push ;	
	public $allow_pull ;	
	public $allow_anonymous ;	
	public $immediate_sync_ready ;	
	public $allow_sync_tran ;	
	public $autogen_sync_procs ;	
	public $retention ;	
	public $allow_queued_tran ;	
	public $snapshot_in_defaultfolder ;	
	public $alt_snapshot_folder ;	
	public $pre_snapshot_script ;	
	public $post_snapshot_script ;	
	public $compress_snapshot ;	
	public $ftp_address ;	
	public $ftp_port ;	
	public $ftp_subdirectory ;	
	public $ftp_login ;	
	public $ftp_password ;	
	public $allow_dts ;	
	public $allow_subscription_copy ;	
	public $centralized_conflicts ;	
	public $conflict_retention ;	
	public $conflict_policy ;	
	public $queue_type ;	
	public $ad_guidname ;	
	public $backward_comp_level ;	
	public $allow_initialize_from_backup ;	
	public $min_autonosync_lsn ;	
	public $replicate_ddl ;	
	public $options ;	
	public $originator_id ;	
	
	
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
			$query = " SELECT description, [name], [pubid], [repl_freq], [status], [sync_method], [snapshot_jobid], [independent_agent], [immediate_sync], [enabled_for_internet], [allow_push], [allow_pull], [allow_anonymous], [immediate_sync_ready], [allow_sync_tran], [autogen_sync_procs], [retention], [allow_queued_tran], [snapshot_in_defaultfolder], [alt_snapshot_folder], [pre_snapshot_script], [post_snapshot_script], [compress_snapshot], [ftp_address], [ftp_port], [ftp_subdirectory], [ftp_login], [ftp_password], [allow_dts], [allow_subscription_copy], [centralized_conflicts], [conflict_retention], [conflict_policy], [queue_type], [ad_guidname], [backward_comp_level], [allow_initialize_from_backup], [min_autonosync_lsn], [replicate_ddl], [options], [originator_id] FROM [syspublications]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->description = $records["description"];
				$instance->name = $records["name"];
				$instance->pubid = $records["pubid"];
				$instance->repl_freq = $records["repl_freq"];
				$instance->status = $records["status"];
				$instance->sync_method = $records["sync_method"];
				$instance->snapshot_jobid = $records["snapshot_jobid"];
				$instance->independent_agent = $records["independent_agent"];
				$instance->immediate_sync = $records["immediate_sync"];
				$instance->enabled_for_internet = $records["enabled_for_internet"];
				$instance->allow_push = $records["allow_push"];
				$instance->allow_pull = $records["allow_pull"];
				$instance->allow_anonymous = $records["allow_anonymous"];
				$instance->immediate_sync_ready = $records["immediate_sync_ready"];
				$instance->allow_sync_tran = $records["allow_sync_tran"];
				$instance->autogen_sync_procs = $records["autogen_sync_procs"];
				$instance->retention = $records["retention"];
				$instance->allow_queued_tran = $records["allow_queued_tran"];
				$instance->snapshot_in_defaultfolder = $records["snapshot_in_defaultfolder"];
				$instance->alt_snapshot_folder = $records["alt_snapshot_folder"];
				$instance->pre_snapshot_script = $records["pre_snapshot_script"];
				$instance->post_snapshot_script = $records["post_snapshot_script"];
				$instance->compress_snapshot = $records["compress_snapshot"];
				$instance->ftp_address = $records["ftp_address"];
				$instance->ftp_port = $records["ftp_port"];
				$instance->ftp_subdirectory = $records["ftp_subdirectory"];
				$instance->ftp_login = $records["ftp_login"];
				$instance->ftp_password = $records["ftp_password"];
				$instance->allow_dts = $records["allow_dts"];
				$instance->allow_subscription_copy = $records["allow_subscription_copy"];
				$instance->centralized_conflicts = $records["centralized_conflicts"];
				$instance->conflict_retention = $records["conflict_retention"];
				$instance->conflict_policy = $records["conflict_policy"];
				$instance->queue_type = $records["queue_type"];
				$instance->ad_guidname = $records["ad_guidname"];
				$instance->backward_comp_level = $records["backward_comp_level"];
				$instance->allow_initialize_from_backup = $records["allow_initialize_from_backup"];
				$instance->min_autonosync_lsn = $records["min_autonosync_lsn"];
				$instance->replicate_ddl = $records["replicate_ddl"];
				$instance->options = $records["options"];
				$instance->originator_id = $records["originator_id"];
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
			$res = $this->description;
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