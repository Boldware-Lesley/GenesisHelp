<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:31
@Database			:	GENESIS-DEMO
@Table			:	SYSLocation

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar ISO" of type [nvarchar]
	"public nvarchar Country" of type [nvarchar]
	"public nvarchar Language" of type [nvarchar]
	"public nvarchar ISO2" of type [nvarchar]
	"public nvarchar Province" of type [nvarchar]
	"public nvarchar District" of type [nvarchar]
	"public nvarchar Municipality" of type [nvarchar]
	"public nvarchar Town" of type [nvarchar]
	"public nvarchar Suburb" of type [nvarchar]
	"public nvarchar PostCode" of type [nvarchar]
	"public float Latitude" of type [float]
	"public float Longitude" of type [float]
	"public nvarchar Timezone" of type [nvarchar]
	"public nvarchar UTC" of type [nvarchar]
	"public float GeoCost" of type [float]
*/
namespace genesis;


use PDO;

class Syslocation {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $iso ;	
	public $country ;	
	public $language ;	
	public $iso2 ;	
	public $province ;	
	public $district ;	
	public $municipality ;	
	public $town ;	
	public $suburb ;	
	public $postcode ;	
	public $latitude ;	
	public $longitude ;	
	public $timezone ;	
	public $utc ;	
	public $geocost ;	
	
	
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
			$query = " SELECT RecID, [ISO], [Country], [Language], [ISO2], [Province], [District], [Municipality], [Town], [Suburb], [PostCode], [Latitude], [Longitude], [Timezone], [UTC], [GeoCost] FROM [SYSLocation]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->iso = $records["ISO"];
				$instance->country = $records["Country"];
				$instance->language = $records["Language"];
				$instance->iso2 = $records["ISO2"];
				$instance->province = $records["Province"];
				$instance->district = $records["District"];
				$instance->municipality = $records["Municipality"];
				$instance->town = $records["Town"];
				$instance->suburb = $records["Suburb"];
				$instance->postcode = $records["PostCode"];
				$instance->latitude = $records["Latitude"];
				$instance->longitude = $records["Longitude"];
				$instance->timezone = $records["Timezone"];
				$instance->utc = $records["UTC"];
				$instance->geocost = $records["GeoCost"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using PostCode
	*/
	public static function ini_PostCode($postcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [ISO], [Country], [Language], [ISO2], [Province], [District], [Municipality], [Town], [Suburb], [PostCode], [Latitude], [Longitude], [Timezone], [UTC], [GeoCost] FROM [SYSLocation]  WHERE [PostCode]=:postcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":postcode", $postcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->iso = $records["ISO"];
				$instance->country = $records["Country"];
				$instance->language = $records["Language"];
				$instance->iso2 = $records["ISO2"];
				$instance->province = $records["Province"];
				$instance->district = $records["District"];
				$instance->municipality = $records["Municipality"];
				$instance->town = $records["Town"];
				$instance->suburb = $records["Suburb"];
				$instance->postcode = $records["PostCode"];
				$instance->latitude = $records["Latitude"];
				$instance->longitude = $records["Longitude"];
				$instance->timezone = $records["Timezone"];
				$instance->utc = $records["UTC"];
				$instance->geocost = $records["GeoCost"];
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