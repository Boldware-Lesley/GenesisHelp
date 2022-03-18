<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:27
@Database			:	GENESIS-DEMO
@Table			:	GSMSizeMaster

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public nvarchar WH" of type [nvarchar]
	"public nvarchar S01" of type [nvarchar]
	"public nvarchar S02" of type [nvarchar]
	"public nvarchar S03" of type [nvarchar]
	"public nvarchar S04" of type [nvarchar]
	"public nvarchar S05" of type [nvarchar]
	"public nvarchar S06" of type [nvarchar]
	"public nvarchar S07" of type [nvarchar]
	"public nvarchar S08" of type [nvarchar]
	"public nvarchar S09" of type [nvarchar]
	"public nvarchar S10" of type [nvarchar]
	"public nvarchar S11" of type [nvarchar]
	"public nvarchar S12" of type [nvarchar]
	"public nvarchar S13" of type [nvarchar]
	"public nvarchar S14" of type [nvarchar]
	"public nvarchar S15" of type [nvarchar]
	"public nvarchar S16" of type [nvarchar]
	"public nvarchar S17" of type [nvarchar]
	"public nvarchar S18" of type [nvarchar]
	"public nvarchar S19" of type [nvarchar]
	"public nvarchar S20" of type [nvarchar]
	"public nvarchar S21" of type [nvarchar]
	"public nvarchar S22" of type [nvarchar]
	"public nvarchar S23" of type [nvarchar]
	"public nvarchar S24" of type [nvarchar]
	"public nvarchar S25" of type [nvarchar]
	"public nvarchar S26" of type [nvarchar]
	"public nvarchar S27" of type [nvarchar]
	"public nvarchar S28" of type [nvarchar]
	"public nvarchar S29" of type [nvarchar]
	"public nvarchar S30" of type [nvarchar]
	"public nvarchar S31" of type [nvarchar]
	"public nvarchar S32" of type [nvarchar]
	"public nvarchar S33" of type [nvarchar]
	"public nvarchar S34" of type [nvarchar]
	"public nvarchar S35" of type [nvarchar]
	"public nvarchar S36" of type [nvarchar]
	"public nvarchar S37" of type [nvarchar]
	"public nvarchar S38" of type [nvarchar]
	"public nvarchar S39" of type [nvarchar]
	"public nvarchar S40" of type [nvarchar]
	"public nvarchar S41" of type [nvarchar]
	"public nvarchar S42" of type [nvarchar]
	"public nvarchar S43" of type [nvarchar]
	"public nvarchar S44" of type [nvarchar]
	"public nvarchar S45" of type [nvarchar]
	"public nvarchar S46" of type [nvarchar]
	"public nvarchar S47" of type [nvarchar]
	"public nvarchar S48" of type [nvarchar]
	"public nvarchar S49" of type [nvarchar]
	"public nvarchar S50" of type [nvarchar]
	"public float Q01" of type [float]
	"public float Q02" of type [float]
	"public float Q03" of type [float]
	"public float Q04" of type [float]
	"public float Q05" of type [float]
	"public float Q06" of type [float]
	"public float Q07" of type [float]
	"public float Q08" of type [float]
	"public float Q09" of type [float]
	"public float Q10" of type [float]
	"public float Q11" of type [float]
	"public float Q12" of type [float]
	"public float Q13" of type [float]
	"public float Q14" of type [float]
	"public float Q15" of type [float]
	"public float Q16" of type [float]
	"public float Q17" of type [float]
	"public float Q18" of type [float]
	"public float Q19" of type [float]
	"public float Q20" of type [float]
	"public float Q21" of type [float]
	"public float Q22" of type [float]
	"public float Q23" of type [float]
	"public float Q24" of type [float]
	"public float Q25" of type [float]
	"public float Q26" of type [float]
	"public float Q27" of type [float]
	"public float Q28" of type [float]
	"public float Q29" of type [float]
	"public float Q30" of type [float]
	"public float Q31" of type [float]
	"public float Q32" of type [float]
	"public float Q33" of type [float]
	"public float Q34" of type [float]
	"public float Q35" of type [float]
	"public float Q36" of type [float]
	"public float Q37" of type [float]
	"public float Q38" of type [float]
	"public float Q39" of type [float]
	"public float Q40" of type [float]
	"public float Q41" of type [float]
	"public float Q42" of type [float]
	"public float Q43" of type [float]
	"public float Q44" of type [float]
	"public float Q45" of type [float]
	"public float Q46" of type [float]
	"public float Q47" of type [float]
	"public float Q48" of type [float]
	"public float Q49" of type [float]
	"public float Q50" of type [float]
*/
namespace genesis;


use PDO;

class Gsmsizemaster {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $wh ;	
	public $s01 ;	
	public $s02 ;	
	public $s03 ;	
	public $s04 ;	
	public $s05 ;	
	public $s06 ;	
	public $s07 ;	
	public $s08 ;	
	public $s09 ;	
	public $s10 ;	
	public $s11 ;	
	public $s12 ;	
	public $s13 ;	
	public $s14 ;	
	public $s15 ;	
	public $s16 ;	
	public $s17 ;	
	public $s18 ;	
	public $s19 ;	
	public $s20 ;	
	public $s21 ;	
	public $s22 ;	
	public $s23 ;	
	public $s24 ;	
	public $s25 ;	
	public $s26 ;	
	public $s27 ;	
	public $s28 ;	
	public $s29 ;	
	public $s30 ;	
	public $s31 ;	
	public $s32 ;	
	public $s33 ;	
	public $s34 ;	
	public $s35 ;	
	public $s36 ;	
	public $s37 ;	
	public $s38 ;	
	public $s39 ;	
	public $s40 ;	
	public $s41 ;	
	public $s42 ;	
	public $s43 ;	
	public $s44 ;	
	public $s45 ;	
	public $s46 ;	
	public $s47 ;	
	public $s48 ;	
	public $s49 ;	
	public $s50 ;	
	public $q01 ;	
	public $q02 ;	
	public $q03 ;	
	public $q04 ;	
	public $q05 ;	
	public $q06 ;	
	public $q07 ;	
	public $q08 ;	
	public $q09 ;	
	public $q10 ;	
	public $q11 ;	
	public $q12 ;	
	public $q13 ;	
	public $q14 ;	
	public $q15 ;	
	public $q16 ;	
	public $q17 ;	
	public $q18 ;	
	public $q19 ;	
	public $q20 ;	
	public $q21 ;	
	public $q22 ;	
	public $q23 ;	
	public $q24 ;	
	public $q25 ;	
	public $q26 ;	
	public $q27 ;	
	public $q28 ;	
	public $q29 ;	
	public $q30 ;	
	public $q31 ;	
	public $q32 ;	
	public $q33 ;	
	public $q34 ;	
	public $q35 ;	
	public $q36 ;	
	public $q37 ;	
	public $q38 ;	
	public $q39 ;	
	public $q40 ;	
	public $q41 ;	
	public $q42 ;	
	public $q43 ;	
	public $q44 ;	
	public $q45 ;	
	public $q46 ;	
	public $q47 ;	
	public $q48 ;	
	public $q49 ;	
	public $q50 ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [WH], [S01], [S02], [S03], [S04], [S05], [S06], [S07], [S08], [S09], [S10], [S11], [S12], [S13], [S14], [S15], [S16], [S17], [S18], [S19], [S20], [S21], [S22], [S23], [S24], [S25], [S26], [S27], [S28], [S29], [S30], [S31], [S32], [S33], [S34], [S35], [S36], [S37], [S38], [S39], [S40], [S41], [S42], [S43], [S44], [S45], [S46], [S47], [S48], [S49], [S50], [Q01], [Q02], [Q03], [Q04], [Q05], [Q06], [Q07], [Q08], [Q09], [Q10], [Q11], [Q12], [Q13], [Q14], [Q15], [Q16], [Q17], [Q18], [Q19], [Q20], [Q21], [Q22], [Q23], [Q24], [Q25], [Q26], [Q27], [Q28], [Q29], [Q30], [Q31], [Q32], [Q33], [Q34], [Q35], [Q36], [Q37], [Q38], [Q39], [Q40], [Q41], [Q42], [Q43], [Q44], [Q45], [Q46], [Q47], [Q48], [Q49], [Q50] FROM [GSMSizeMaster]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->wh = $records["WH"];
				$instance->s01 = $records["S01"];
				$instance->s02 = $records["S02"];
				$instance->s03 = $records["S03"];
				$instance->s04 = $records["S04"];
				$instance->s05 = $records["S05"];
				$instance->s06 = $records["S06"];
				$instance->s07 = $records["S07"];
				$instance->s08 = $records["S08"];
				$instance->s09 = $records["S09"];
				$instance->s10 = $records["S10"];
				$instance->s11 = $records["S11"];
				$instance->s12 = $records["S12"];
				$instance->s13 = $records["S13"];
				$instance->s14 = $records["S14"];
				$instance->s15 = $records["S15"];
				$instance->s16 = $records["S16"];
				$instance->s17 = $records["S17"];
				$instance->s18 = $records["S18"];
				$instance->s19 = $records["S19"];
				$instance->s20 = $records["S20"];
				$instance->s21 = $records["S21"];
				$instance->s22 = $records["S22"];
				$instance->s23 = $records["S23"];
				$instance->s24 = $records["S24"];
				$instance->s25 = $records["S25"];
				$instance->s26 = $records["S26"];
				$instance->s27 = $records["S27"];
				$instance->s28 = $records["S28"];
				$instance->s29 = $records["S29"];
				$instance->s30 = $records["S30"];
				$instance->s31 = $records["S31"];
				$instance->s32 = $records["S32"];
				$instance->s33 = $records["S33"];
				$instance->s34 = $records["S34"];
				$instance->s35 = $records["S35"];
				$instance->s36 = $records["S36"];
				$instance->s37 = $records["S37"];
				$instance->s38 = $records["S38"];
				$instance->s39 = $records["S39"];
				$instance->s40 = $records["S40"];
				$instance->s41 = $records["S41"];
				$instance->s42 = $records["S42"];
				$instance->s43 = $records["S43"];
				$instance->s44 = $records["S44"];
				$instance->s45 = $records["S45"];
				$instance->s46 = $records["S46"];
				$instance->s47 = $records["S47"];
				$instance->s48 = $records["S48"];
				$instance->s49 = $records["S49"];
				$instance->s50 = $records["S50"];
				$instance->q01 = $records["Q01"];
				$instance->q02 = $records["Q02"];
				$instance->q03 = $records["Q03"];
				$instance->q04 = $records["Q04"];
				$instance->q05 = $records["Q05"];
				$instance->q06 = $records["Q06"];
				$instance->q07 = $records["Q07"];
				$instance->q08 = $records["Q08"];
				$instance->q09 = $records["Q09"];
				$instance->q10 = $records["Q10"];
				$instance->q11 = $records["Q11"];
				$instance->q12 = $records["Q12"];
				$instance->q13 = $records["Q13"];
				$instance->q14 = $records["Q14"];
				$instance->q15 = $records["Q15"];
				$instance->q16 = $records["Q16"];
				$instance->q17 = $records["Q17"];
				$instance->q18 = $records["Q18"];
				$instance->q19 = $records["Q19"];
				$instance->q20 = $records["Q20"];
				$instance->q21 = $records["Q21"];
				$instance->q22 = $records["Q22"];
				$instance->q23 = $records["Q23"];
				$instance->q24 = $records["Q24"];
				$instance->q25 = $records["Q25"];
				$instance->q26 = $records["Q26"];
				$instance->q27 = $records["Q27"];
				$instance->q28 = $records["Q28"];
				$instance->q29 = $records["Q29"];
				$instance->q30 = $records["Q30"];
				$instance->q31 = $records["Q31"];
				$instance->q32 = $records["Q32"];
				$instance->q33 = $records["Q33"];
				$instance->q34 = $records["Q34"];
				$instance->q35 = $records["Q35"];
				$instance->q36 = $records["Q36"];
				$instance->q37 = $records["Q37"];
				$instance->q38 = $records["Q38"];
				$instance->q39 = $records["Q39"];
				$instance->q40 = $records["Q40"];
				$instance->q41 = $records["Q41"];
				$instance->q42 = $records["Q42"];
				$instance->q43 = $records["Q43"];
				$instance->q44 = $records["Q44"];
				$instance->q45 = $records["Q45"];
				$instance->q46 = $records["Q46"];
				$instance->q47 = $records["Q47"];
				$instance->q48 = $records["Q48"];
				$instance->q49 = $records["Q49"];
				$instance->q50 = $records["Q50"];
			}
		} catch (Exception $ex) {
			echo 'Close: '.$ex->getMessage();
		}
		return $instance;
	}
	/**
	Main Constructor For Declearing Using StockCode
	*/
	public static function ini_StockCode($stockcode) {	
		$instance = new self();
		try {
			$conn = new MyConnection();
			$conn->Open();
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [WH], [S01], [S02], [S03], [S04], [S05], [S06], [S07], [S08], [S09], [S10], [S11], [S12], [S13], [S14], [S15], [S16], [S17], [S18], [S19], [S20], [S21], [S22], [S23], [S24], [S25], [S26], [S27], [S28], [S29], [S30], [S31], [S32], [S33], [S34], [S35], [S36], [S37], [S38], [S39], [S40], [S41], [S42], [S43], [S44], [S45], [S46], [S47], [S48], [S49], [S50], [Q01], [Q02], [Q03], [Q04], [Q05], [Q06], [Q07], [Q08], [Q09], [Q10], [Q11], [Q12], [Q13], [Q14], [Q15], [Q16], [Q17], [Q18], [Q19], [Q20], [Q21], [Q22], [Q23], [Q24], [Q25], [Q26], [Q27], [Q28], [Q29], [Q30], [Q31], [Q32], [Q33], [Q34], [Q35], [Q36], [Q37], [Q38], [Q39], [Q40], [Q41], [Q42], [Q43], [Q44], [Q45], [Q46], [Q47], [Q48], [Q49], [Q50] FROM [GSMSizeMaster]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->wh = $records["WH"];
				$instance->s01 = $records["S01"];
				$instance->s02 = $records["S02"];
				$instance->s03 = $records["S03"];
				$instance->s04 = $records["S04"];
				$instance->s05 = $records["S05"];
				$instance->s06 = $records["S06"];
				$instance->s07 = $records["S07"];
				$instance->s08 = $records["S08"];
				$instance->s09 = $records["S09"];
				$instance->s10 = $records["S10"];
				$instance->s11 = $records["S11"];
				$instance->s12 = $records["S12"];
				$instance->s13 = $records["S13"];
				$instance->s14 = $records["S14"];
				$instance->s15 = $records["S15"];
				$instance->s16 = $records["S16"];
				$instance->s17 = $records["S17"];
				$instance->s18 = $records["S18"];
				$instance->s19 = $records["S19"];
				$instance->s20 = $records["S20"];
				$instance->s21 = $records["S21"];
				$instance->s22 = $records["S22"];
				$instance->s23 = $records["S23"];
				$instance->s24 = $records["S24"];
				$instance->s25 = $records["S25"];
				$instance->s26 = $records["S26"];
				$instance->s27 = $records["S27"];
				$instance->s28 = $records["S28"];
				$instance->s29 = $records["S29"];
				$instance->s30 = $records["S30"];
				$instance->s31 = $records["S31"];
				$instance->s32 = $records["S32"];
				$instance->s33 = $records["S33"];
				$instance->s34 = $records["S34"];
				$instance->s35 = $records["S35"];
				$instance->s36 = $records["S36"];
				$instance->s37 = $records["S37"];
				$instance->s38 = $records["S38"];
				$instance->s39 = $records["S39"];
				$instance->s40 = $records["S40"];
				$instance->s41 = $records["S41"];
				$instance->s42 = $records["S42"];
				$instance->s43 = $records["S43"];
				$instance->s44 = $records["S44"];
				$instance->s45 = $records["S45"];
				$instance->s46 = $records["S46"];
				$instance->s47 = $records["S47"];
				$instance->s48 = $records["S48"];
				$instance->s49 = $records["S49"];
				$instance->s50 = $records["S50"];
				$instance->q01 = $records["Q01"];
				$instance->q02 = $records["Q02"];
				$instance->q03 = $records["Q03"];
				$instance->q04 = $records["Q04"];
				$instance->q05 = $records["Q05"];
				$instance->q06 = $records["Q06"];
				$instance->q07 = $records["Q07"];
				$instance->q08 = $records["Q08"];
				$instance->q09 = $records["Q09"];
				$instance->q10 = $records["Q10"];
				$instance->q11 = $records["Q11"];
				$instance->q12 = $records["Q12"];
				$instance->q13 = $records["Q13"];
				$instance->q14 = $records["Q14"];
				$instance->q15 = $records["Q15"];
				$instance->q16 = $records["Q16"];
				$instance->q17 = $records["Q17"];
				$instance->q18 = $records["Q18"];
				$instance->q19 = $records["Q19"];
				$instance->q20 = $records["Q20"];
				$instance->q21 = $records["Q21"];
				$instance->q22 = $records["Q22"];
				$instance->q23 = $records["Q23"];
				$instance->q24 = $records["Q24"];
				$instance->q25 = $records["Q25"];
				$instance->q26 = $records["Q26"];
				$instance->q27 = $records["Q27"];
				$instance->q28 = $records["Q28"];
				$instance->q29 = $records["Q29"];
				$instance->q30 = $records["Q30"];
				$instance->q31 = $records["Q31"];
				$instance->q32 = $records["Q32"];
				$instance->q33 = $records["Q33"];
				$instance->q34 = $records["Q34"];
				$instance->q35 = $records["Q35"];
				$instance->q36 = $records["Q36"];
				$instance->q37 = $records["Q37"];
				$instance->q38 = $records["Q38"];
				$instance->q39 = $records["Q39"];
				$instance->q40 = $records["Q40"];
				$instance->q41 = $records["Q41"];
				$instance->q42 = $records["Q42"];
				$instance->q43 = $records["Q43"];
				$instance->q44 = $records["Q44"];
				$instance->q45 = $records["Q45"];
				$instance->q46 = $records["Q46"];
				$instance->q47 = $records["Q47"];
				$instance->q48 = $records["Q48"];
				$instance->q49 = $records["Q49"];
				$instance->q50 = $records["Q50"];
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