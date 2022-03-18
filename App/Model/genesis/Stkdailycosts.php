<?php
/**
@Author			:	Lesley
@Date			:	2020/10/09 15:13:25
@Database			:	GENESIS-DEMO
@Table			:	STKDailyCosts

[@Descriptions]
Class is using the following global variables:
	"public int RecID" of type [int]
	"public nvarchar CO" of type [nvarchar]
	"public nvarchar Branch" of type [nvarchar]
	"public nvarchar StockCode" of type [nvarchar]
	"public nvarchar LinkCode" of type [nvarchar]
	"public int Period" of type [int]
	"public nvarchar Description2" of type [nvarchar]
	"public float LastCost01" of type [float]
	"public float BaseCost01" of type [float]
	"public float AvgCost01" of type [float]
	"public float BuyCost01" of type [float]
	"public float RebLast01" of type [float]
	"public float RebAvg01" of type [float]
	"public float LastCost02" of type [float]
	"public float BaseCost02" of type [float]
	"public float AvgCost02" of type [float]
	"public float BuyCost02" of type [float]
	"public float RebLast02" of type [float]
	"public float RebAvg02" of type [float]
	"public float LastCost03" of type [float]
	"public float BaseCost03" of type [float]
	"public float AvgCost03" of type [float]
	"public float BuyCost03" of type [float]
	"public float RebLast03" of type [float]
	"public float RebAvg03" of type [float]
	"public float LastCost04" of type [float]
	"public float BaseCost04" of type [float]
	"public float AvgCost04" of type [float]
	"public float BuyCost04" of type [float]
	"public float RebLast04" of type [float]
	"public float RebAvg04" of type [float]
	"public float LastCost05" of type [float]
	"public float BaseCost05" of type [float]
	"public float AvgCost05" of type [float]
	"public float BuyCost05" of type [float]
	"public float RebLast05" of type [float]
	"public float RebAvg05" of type [float]
	"public float LastCost06" of type [float]
	"public float BaseCost06" of type [float]
	"public float AvgCost06" of type [float]
	"public float BuyCost06" of type [float]
	"public float RebLast06" of type [float]
	"public float RebAvg06" of type [float]
	"public float LastCost07" of type [float]
	"public float BaseCost07" of type [float]
	"public float AvgCost07" of type [float]
	"public float BuyCost07" of type [float]
	"public float RebLast07" of type [float]
	"public float RebAvg07" of type [float]
	"public float LastCost08" of type [float]
	"public float BaseCost08" of type [float]
	"public float AvgCost08" of type [float]
	"public float BuyCost08" of type [float]
	"public float RebLast08" of type [float]
	"public float RebAvg08" of type [float]
	"public float LastCost09" of type [float]
	"public float BaseCost09" of type [float]
	"public float AvgCost09" of type [float]
	"public float BuyCost09" of type [float]
	"public float RebLast09" of type [float]
	"public float RebAvg09" of type [float]
	"public float LastCost10" of type [float]
	"public float BaseCost10" of type [float]
	"public float AvgCost10" of type [float]
	"public float BuyCost10" of type [float]
	"public float RebLast10" of type [float]
	"public float RebAvg10" of type [float]
	"public float LastCost11" of type [float]
	"public float BaseCost11" of type [float]
	"public float AvgCost11" of type [float]
	"public float BuyCost11" of type [float]
	"public float RebLast11" of type [float]
	"public float RebAvg11" of type [float]
	"public float LastCost12" of type [float]
	"public float BaseCost12" of type [float]
	"public float AvgCost12" of type [float]
	"public float BuyCost12" of type [float]
	"public float RebLast12" of type [float]
	"public float RebAvg12" of type [float]
	"public float LastCost13" of type [float]
	"public float BaseCost13" of type [float]
	"public float AvgCost13" of type [float]
	"public float BuyCost13" of type [float]
	"public float RebLast13" of type [float]
	"public float RebAvg13" of type [float]
	"public float LastCost14" of type [float]
	"public float BaseCost14" of type [float]
	"public float AvgCost14" of type [float]
	"public float BuyCost14" of type [float]
	"public float RebLast14" of type [float]
	"public float RebAvg14" of type [float]
	"public float LastCost15" of type [float]
	"public float BaseCost15" of type [float]
	"public float AvgCost15" of type [float]
	"public float BuyCost15" of type [float]
	"public float RebLast15" of type [float]
	"public float RebAvg15" of type [float]
	"public float LastCost16" of type [float]
	"public float BaseCost16" of type [float]
	"public float AvgCost16" of type [float]
	"public float BuyCost16" of type [float]
	"public float RebLast16" of type [float]
	"public float RebAvg16" of type [float]
	"public float LastCost17" of type [float]
	"public float BaseCost17" of type [float]
	"public float AvgCost17" of type [float]
	"public float BuyCost17" of type [float]
	"public float RebLast17" of type [float]
	"public float RebAvg17" of type [float]
	"public float LastCost18" of type [float]
	"public float BaseCost18" of type [float]
	"public float AvgCost18" of type [float]
	"public float BuyCost18" of type [float]
	"public float RebLast18" of type [float]
	"public float RebAvg18" of type [float]
	"public float LastCost19" of type [float]
	"public float BaseCost19" of type [float]
	"public float AvgCost19" of type [float]
	"public float BuyCost19" of type [float]
	"public float RebLast19" of type [float]
	"public float RebAvg19" of type [float]
	"public float LastCost20" of type [float]
	"public float BaseCost20" of type [float]
	"public float AvgCost20" of type [float]
	"public float BuyCost20" of type [float]
	"public float RebLast20" of type [float]
	"public float RebAvg20" of type [float]
	"public float LastCost21" of type [float]
	"public float BaseCost21" of type [float]
	"public float AvgCost21" of type [float]
	"public float BuyCost21" of type [float]
	"public float RebLast21" of type [float]
	"public float RebAvg21" of type [float]
	"public float LastCost22" of type [float]
	"public float BaseCost22" of type [float]
	"public float AvgCost22" of type [float]
	"public float BuyCost22" of type [float]
	"public float RebLast22" of type [float]
	"public float RebAvg22" of type [float]
	"public float LastCost23" of type [float]
	"public float BaseCost23" of type [float]
	"public float AvgCost23" of type [float]
	"public float BuyCost23" of type [float]
	"public float RebLast23" of type [float]
	"public float RebAvg23" of type [float]
	"public float LastCost24" of type [float]
	"public float BaseCost24" of type [float]
	"public float AvgCost24" of type [float]
	"public float BuyCost24" of type [float]
	"public float RebLast24" of type [float]
	"public float RebAvg24" of type [float]
	"public float LastCost25" of type [float]
	"public float BaseCost25" of type [float]
	"public float AvgCost25" of type [float]
	"public float BuyCost25" of type [float]
	"public float RebLast25" of type [float]
	"public float RebAvg25" of type [float]
	"public float LastCost26" of type [float]
	"public float BaseCost26" of type [float]
	"public float AvgCost26" of type [float]
	"public float BuyCost26" of type [float]
	"public float RebLast26" of type [float]
	"public float RebAvg26" of type [float]
	"public float LastCost27" of type [float]
	"public float BaseCost27" of type [float]
	"public float AvgCost27" of type [float]
	"public float BuyCost27" of type [float]
	"public float RebLast27" of type [float]
	"public float RebAvg27" of type [float]
	"public float LastCost28" of type [float]
	"public float BaseCost28" of type [float]
	"public float AvgCost28" of type [float]
	"public float BuyCost28" of type [float]
	"public float RebLast28" of type [float]
	"public float RebAvg28" of type [float]
	"public float LastCost29" of type [float]
	"public float BaseCost29" of type [float]
	"public float AvgCost29" of type [float]
	"public float BuyCost29" of type [float]
	"public float RebLast29" of type [float]
	"public float RebAvg29" of type [float]
	"public float LastCost30" of type [float]
	"public float BaseCost30" of type [float]
	"public float AvgCost30" of type [float]
	"public float BuyCost30" of type [float]
	"public float RebLast30" of type [float]
	"public float RebAvg30" of type [float]
	"public float LastCost31" of type [float]
	"public float BaseCost31" of type [float]
	"public float AvgCost31" of type [float]
	"public float BuyCost31" of type [float]
	"public float RebLast31" of type [float]
	"public float RebAvg31" of type [float]
*/
namespace genesis;


use PDO;

class Stkdailycosts {
	
	/*BEGIN <<Private Variables>> */
	
	public $recid ;	
	public $co ;	
	public $branch ;	
	public $stockcode ;	
	public $linkcode ;	
	public $period ;	
	public $description2 ;	
	public $lastcost01 ;	
	public $basecost01 ;	
	public $avgcost01 ;	
	public $buycost01 ;	
	public $reblast01 ;	
	public $rebavg01 ;	
	public $lastcost02 ;	
	public $basecost02 ;	
	public $avgcost02 ;	
	public $buycost02 ;	
	public $reblast02 ;	
	public $rebavg02 ;	
	public $lastcost03 ;	
	public $basecost03 ;	
	public $avgcost03 ;	
	public $buycost03 ;	
	public $reblast03 ;	
	public $rebavg03 ;	
	public $lastcost04 ;	
	public $basecost04 ;	
	public $avgcost04 ;	
	public $buycost04 ;	
	public $reblast04 ;	
	public $rebavg04 ;	
	public $lastcost05 ;	
	public $basecost05 ;	
	public $avgcost05 ;	
	public $buycost05 ;	
	public $reblast05 ;	
	public $rebavg05 ;	
	public $lastcost06 ;	
	public $basecost06 ;	
	public $avgcost06 ;	
	public $buycost06 ;	
	public $reblast06 ;	
	public $rebavg06 ;	
	public $lastcost07 ;	
	public $basecost07 ;	
	public $avgcost07 ;	
	public $buycost07 ;	
	public $reblast07 ;	
	public $rebavg07 ;	
	public $lastcost08 ;	
	public $basecost08 ;	
	public $avgcost08 ;	
	public $buycost08 ;	
	public $reblast08 ;	
	public $rebavg08 ;	
	public $lastcost09 ;	
	public $basecost09 ;	
	public $avgcost09 ;	
	public $buycost09 ;	
	public $reblast09 ;	
	public $rebavg09 ;	
	public $lastcost10 ;	
	public $basecost10 ;	
	public $avgcost10 ;	
	public $buycost10 ;	
	public $reblast10 ;	
	public $rebavg10 ;	
	public $lastcost11 ;	
	public $basecost11 ;	
	public $avgcost11 ;	
	public $buycost11 ;	
	public $reblast11 ;	
	public $rebavg11 ;	
	public $lastcost12 ;	
	public $basecost12 ;	
	public $avgcost12 ;	
	public $buycost12 ;	
	public $reblast12 ;	
	public $rebavg12 ;	
	public $lastcost13 ;	
	public $basecost13 ;	
	public $avgcost13 ;	
	public $buycost13 ;	
	public $reblast13 ;	
	public $rebavg13 ;	
	public $lastcost14 ;	
	public $basecost14 ;	
	public $avgcost14 ;	
	public $buycost14 ;	
	public $reblast14 ;	
	public $rebavg14 ;	
	public $lastcost15 ;	
	public $basecost15 ;	
	public $avgcost15 ;	
	public $buycost15 ;	
	public $reblast15 ;	
	public $rebavg15 ;	
	public $lastcost16 ;	
	public $basecost16 ;	
	public $avgcost16 ;	
	public $buycost16 ;	
	public $reblast16 ;	
	public $rebavg16 ;	
	public $lastcost17 ;	
	public $basecost17 ;	
	public $avgcost17 ;	
	public $buycost17 ;	
	public $reblast17 ;	
	public $rebavg17 ;	
	public $lastcost18 ;	
	public $basecost18 ;	
	public $avgcost18 ;	
	public $buycost18 ;	
	public $reblast18 ;	
	public $rebavg18 ;	
	public $lastcost19 ;	
	public $basecost19 ;	
	public $avgcost19 ;	
	public $buycost19 ;	
	public $reblast19 ;	
	public $rebavg19 ;	
	public $lastcost20 ;	
	public $basecost20 ;	
	public $avgcost20 ;	
	public $buycost20 ;	
	public $reblast20 ;	
	public $rebavg20 ;	
	public $lastcost21 ;	
	public $basecost21 ;	
	public $avgcost21 ;	
	public $buycost21 ;	
	public $reblast21 ;	
	public $rebavg21 ;	
	public $lastcost22 ;	
	public $basecost22 ;	
	public $avgcost22 ;	
	public $buycost22 ;	
	public $reblast22 ;	
	public $rebavg22 ;	
	public $lastcost23 ;	
	public $basecost23 ;	
	public $avgcost23 ;	
	public $buycost23 ;	
	public $reblast23 ;	
	public $rebavg23 ;	
	public $lastcost24 ;	
	public $basecost24 ;	
	public $avgcost24 ;	
	public $buycost24 ;	
	public $reblast24 ;	
	public $rebavg24 ;	
	public $lastcost25 ;	
	public $basecost25 ;	
	public $avgcost25 ;	
	public $buycost25 ;	
	public $reblast25 ;	
	public $rebavg25 ;	
	public $lastcost26 ;	
	public $basecost26 ;	
	public $avgcost26 ;	
	public $buycost26 ;	
	public $reblast26 ;	
	public $rebavg26 ;	
	public $lastcost27 ;	
	public $basecost27 ;	
	public $avgcost27 ;	
	public $buycost27 ;	
	public $reblast27 ;	
	public $rebavg27 ;	
	public $lastcost28 ;	
	public $basecost28 ;	
	public $avgcost28 ;	
	public $buycost28 ;	
	public $reblast28 ;	
	public $rebavg28 ;	
	public $lastcost29 ;	
	public $basecost29 ;	
	public $avgcost29 ;	
	public $buycost29 ;	
	public $reblast29 ;	
	public $rebavg29 ;	
	public $lastcost30 ;	
	public $basecost30 ;	
	public $avgcost30 ;	
	public $buycost30 ;	
	public $reblast30 ;	
	public $rebavg30 ;	
	public $lastcost31 ;	
	public $basecost31 ;	
	public $avgcost31 ;	
	public $buycost31 ;	
	public $reblast31 ;	
	public $rebavg31 ;	
	
	
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [Period], [Description2], [LastCost01], [BaseCost01], [AvgCost01], [BuyCost01], [RebLast01], [RebAvg01], [LastCost02], [BaseCost02], [AvgCost02], [BuyCost02], [RebLast02], [RebAvg02], [LastCost03], [BaseCost03], [AvgCost03], [BuyCost03], [RebLast03], [RebAvg03], [LastCost04], [BaseCost04], [AvgCost04], [BuyCost04], [RebLast04], [RebAvg04], [LastCost05], [BaseCost05], [AvgCost05], [BuyCost05], [RebLast05], [RebAvg05], [LastCost06], [BaseCost06], [AvgCost06], [BuyCost06], [RebLast06], [RebAvg06], [LastCost07], [BaseCost07], [AvgCost07], [BuyCost07], [RebLast07], [RebAvg07], [LastCost08], [BaseCost08], [AvgCost08], [BuyCost08], [RebLast08], [RebAvg08], [LastCost09], [BaseCost09], [AvgCost09], [BuyCost09], [RebLast09], [RebAvg09], [LastCost10], [BaseCost10], [AvgCost10], [BuyCost10], [RebLast10], [RebAvg10], [LastCost11], [BaseCost11], [AvgCost11], [BuyCost11], [RebLast11], [RebAvg11], [LastCost12], [BaseCost12], [AvgCost12], [BuyCost12], [RebLast12], [RebAvg12], [LastCost13], [BaseCost13], [AvgCost13], [BuyCost13], [RebLast13], [RebAvg13], [LastCost14], [BaseCost14], [AvgCost14], [BuyCost14], [RebLast14], [RebAvg14], [LastCost15], [BaseCost15], [AvgCost15], [BuyCost15], [RebLast15], [RebAvg15], [LastCost16], [BaseCost16], [AvgCost16], [BuyCost16], [RebLast16], [RebAvg16], [LastCost17], [BaseCost17], [AvgCost17], [BuyCost17], [RebLast17], [RebAvg17], [LastCost18], [BaseCost18], [AvgCost18], [BuyCost18], [RebLast18], [RebAvg18], [LastCost19], [BaseCost19], [AvgCost19], [BuyCost19], [RebLast19], [RebAvg19], [LastCost20], [BaseCost20], [AvgCost20], [BuyCost20], [RebLast20], [RebAvg20], [LastCost21], [BaseCost21], [AvgCost21], [BuyCost21], [RebLast21], [RebAvg21], [LastCost22], [BaseCost22], [AvgCost22], [BuyCost22], [RebLast22], [RebAvg22], [LastCost23], [BaseCost23], [AvgCost23], [BuyCost23], [RebLast23], [RebAvg23], [LastCost24], [BaseCost24], [AvgCost24], [BuyCost24], [RebLast24], [RebAvg24], [LastCost25], [BaseCost25], [AvgCost25], [BuyCost25], [RebLast25], [RebAvg25], [LastCost26], [BaseCost26], [AvgCost26], [BuyCost26], [RebLast26], [RebAvg26], [LastCost27], [BaseCost27], [AvgCost27], [BuyCost27], [RebLast27], [RebAvg27], [LastCost28], [BaseCost28], [AvgCost28], [BuyCost28], [RebLast28], [RebAvg28], [LastCost29], [BaseCost29], [AvgCost29], [BuyCost29], [RebLast29], [RebAvg29], [LastCost30], [BaseCost30], [AvgCost30], [BuyCost30], [RebLast30], [RebAvg30], [LastCost31], [BaseCost31], [AvgCost31], [BuyCost31], [RebLast31], [RebAvg31] FROM [STKDailyCosts]  WHERE [RecID]=:recid  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":recid", $recid);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->period = $records["Period"];
				$instance->description2 = $records["Description2"];
				$instance->lastcost01 = $records["LastCost01"];
				$instance->basecost01 = $records["BaseCost01"];
				$instance->avgcost01 = $records["AvgCost01"];
				$instance->buycost01 = $records["BuyCost01"];
				$instance->reblast01 = $records["RebLast01"];
				$instance->rebavg01 = $records["RebAvg01"];
				$instance->lastcost02 = $records["LastCost02"];
				$instance->basecost02 = $records["BaseCost02"];
				$instance->avgcost02 = $records["AvgCost02"];
				$instance->buycost02 = $records["BuyCost02"];
				$instance->reblast02 = $records["RebLast02"];
				$instance->rebavg02 = $records["RebAvg02"];
				$instance->lastcost03 = $records["LastCost03"];
				$instance->basecost03 = $records["BaseCost03"];
				$instance->avgcost03 = $records["AvgCost03"];
				$instance->buycost03 = $records["BuyCost03"];
				$instance->reblast03 = $records["RebLast03"];
				$instance->rebavg03 = $records["RebAvg03"];
				$instance->lastcost04 = $records["LastCost04"];
				$instance->basecost04 = $records["BaseCost04"];
				$instance->avgcost04 = $records["AvgCost04"];
				$instance->buycost04 = $records["BuyCost04"];
				$instance->reblast04 = $records["RebLast04"];
				$instance->rebavg04 = $records["RebAvg04"];
				$instance->lastcost05 = $records["LastCost05"];
				$instance->basecost05 = $records["BaseCost05"];
				$instance->avgcost05 = $records["AvgCost05"];
				$instance->buycost05 = $records["BuyCost05"];
				$instance->reblast05 = $records["RebLast05"];
				$instance->rebavg05 = $records["RebAvg05"];
				$instance->lastcost06 = $records["LastCost06"];
				$instance->basecost06 = $records["BaseCost06"];
				$instance->avgcost06 = $records["AvgCost06"];
				$instance->buycost06 = $records["BuyCost06"];
				$instance->reblast06 = $records["RebLast06"];
				$instance->rebavg06 = $records["RebAvg06"];
				$instance->lastcost07 = $records["LastCost07"];
				$instance->basecost07 = $records["BaseCost07"];
				$instance->avgcost07 = $records["AvgCost07"];
				$instance->buycost07 = $records["BuyCost07"];
				$instance->reblast07 = $records["RebLast07"];
				$instance->rebavg07 = $records["RebAvg07"];
				$instance->lastcost08 = $records["LastCost08"];
				$instance->basecost08 = $records["BaseCost08"];
				$instance->avgcost08 = $records["AvgCost08"];
				$instance->buycost08 = $records["BuyCost08"];
				$instance->reblast08 = $records["RebLast08"];
				$instance->rebavg08 = $records["RebAvg08"];
				$instance->lastcost09 = $records["LastCost09"];
				$instance->basecost09 = $records["BaseCost09"];
				$instance->avgcost09 = $records["AvgCost09"];
				$instance->buycost09 = $records["BuyCost09"];
				$instance->reblast09 = $records["RebLast09"];
				$instance->rebavg09 = $records["RebAvg09"];
				$instance->lastcost10 = $records["LastCost10"];
				$instance->basecost10 = $records["BaseCost10"];
				$instance->avgcost10 = $records["AvgCost10"];
				$instance->buycost10 = $records["BuyCost10"];
				$instance->reblast10 = $records["RebLast10"];
				$instance->rebavg10 = $records["RebAvg10"];
				$instance->lastcost11 = $records["LastCost11"];
				$instance->basecost11 = $records["BaseCost11"];
				$instance->avgcost11 = $records["AvgCost11"];
				$instance->buycost11 = $records["BuyCost11"];
				$instance->reblast11 = $records["RebLast11"];
				$instance->rebavg11 = $records["RebAvg11"];
				$instance->lastcost12 = $records["LastCost12"];
				$instance->basecost12 = $records["BaseCost12"];
				$instance->avgcost12 = $records["AvgCost12"];
				$instance->buycost12 = $records["BuyCost12"];
				$instance->reblast12 = $records["RebLast12"];
				$instance->rebavg12 = $records["RebAvg12"];
				$instance->lastcost13 = $records["LastCost13"];
				$instance->basecost13 = $records["BaseCost13"];
				$instance->avgcost13 = $records["AvgCost13"];
				$instance->buycost13 = $records["BuyCost13"];
				$instance->reblast13 = $records["RebLast13"];
				$instance->rebavg13 = $records["RebAvg13"];
				$instance->lastcost14 = $records["LastCost14"];
				$instance->basecost14 = $records["BaseCost14"];
				$instance->avgcost14 = $records["AvgCost14"];
				$instance->buycost14 = $records["BuyCost14"];
				$instance->reblast14 = $records["RebLast14"];
				$instance->rebavg14 = $records["RebAvg14"];
				$instance->lastcost15 = $records["LastCost15"];
				$instance->basecost15 = $records["BaseCost15"];
				$instance->avgcost15 = $records["AvgCost15"];
				$instance->buycost15 = $records["BuyCost15"];
				$instance->reblast15 = $records["RebLast15"];
				$instance->rebavg15 = $records["RebAvg15"];
				$instance->lastcost16 = $records["LastCost16"];
				$instance->basecost16 = $records["BaseCost16"];
				$instance->avgcost16 = $records["AvgCost16"];
				$instance->buycost16 = $records["BuyCost16"];
				$instance->reblast16 = $records["RebLast16"];
				$instance->rebavg16 = $records["RebAvg16"];
				$instance->lastcost17 = $records["LastCost17"];
				$instance->basecost17 = $records["BaseCost17"];
				$instance->avgcost17 = $records["AvgCost17"];
				$instance->buycost17 = $records["BuyCost17"];
				$instance->reblast17 = $records["RebLast17"];
				$instance->rebavg17 = $records["RebAvg17"];
				$instance->lastcost18 = $records["LastCost18"];
				$instance->basecost18 = $records["BaseCost18"];
				$instance->avgcost18 = $records["AvgCost18"];
				$instance->buycost18 = $records["BuyCost18"];
				$instance->reblast18 = $records["RebLast18"];
				$instance->rebavg18 = $records["RebAvg18"];
				$instance->lastcost19 = $records["LastCost19"];
				$instance->basecost19 = $records["BaseCost19"];
				$instance->avgcost19 = $records["AvgCost19"];
				$instance->buycost19 = $records["BuyCost19"];
				$instance->reblast19 = $records["RebLast19"];
				$instance->rebavg19 = $records["RebAvg19"];
				$instance->lastcost20 = $records["LastCost20"];
				$instance->basecost20 = $records["BaseCost20"];
				$instance->avgcost20 = $records["AvgCost20"];
				$instance->buycost20 = $records["BuyCost20"];
				$instance->reblast20 = $records["RebLast20"];
				$instance->rebavg20 = $records["RebAvg20"];
				$instance->lastcost21 = $records["LastCost21"];
				$instance->basecost21 = $records["BaseCost21"];
				$instance->avgcost21 = $records["AvgCost21"];
				$instance->buycost21 = $records["BuyCost21"];
				$instance->reblast21 = $records["RebLast21"];
				$instance->rebavg21 = $records["RebAvg21"];
				$instance->lastcost22 = $records["LastCost22"];
				$instance->basecost22 = $records["BaseCost22"];
				$instance->avgcost22 = $records["AvgCost22"];
				$instance->buycost22 = $records["BuyCost22"];
				$instance->reblast22 = $records["RebLast22"];
				$instance->rebavg22 = $records["RebAvg22"];
				$instance->lastcost23 = $records["LastCost23"];
				$instance->basecost23 = $records["BaseCost23"];
				$instance->avgcost23 = $records["AvgCost23"];
				$instance->buycost23 = $records["BuyCost23"];
				$instance->reblast23 = $records["RebLast23"];
				$instance->rebavg23 = $records["RebAvg23"];
				$instance->lastcost24 = $records["LastCost24"];
				$instance->basecost24 = $records["BaseCost24"];
				$instance->avgcost24 = $records["AvgCost24"];
				$instance->buycost24 = $records["BuyCost24"];
				$instance->reblast24 = $records["RebLast24"];
				$instance->rebavg24 = $records["RebAvg24"];
				$instance->lastcost25 = $records["LastCost25"];
				$instance->basecost25 = $records["BaseCost25"];
				$instance->avgcost25 = $records["AvgCost25"];
				$instance->buycost25 = $records["BuyCost25"];
				$instance->reblast25 = $records["RebLast25"];
				$instance->rebavg25 = $records["RebAvg25"];
				$instance->lastcost26 = $records["LastCost26"];
				$instance->basecost26 = $records["BaseCost26"];
				$instance->avgcost26 = $records["AvgCost26"];
				$instance->buycost26 = $records["BuyCost26"];
				$instance->reblast26 = $records["RebLast26"];
				$instance->rebavg26 = $records["RebAvg26"];
				$instance->lastcost27 = $records["LastCost27"];
				$instance->basecost27 = $records["BaseCost27"];
				$instance->avgcost27 = $records["AvgCost27"];
				$instance->buycost27 = $records["BuyCost27"];
				$instance->reblast27 = $records["RebLast27"];
				$instance->rebavg27 = $records["RebAvg27"];
				$instance->lastcost28 = $records["LastCost28"];
				$instance->basecost28 = $records["BaseCost28"];
				$instance->avgcost28 = $records["AvgCost28"];
				$instance->buycost28 = $records["BuyCost28"];
				$instance->reblast28 = $records["RebLast28"];
				$instance->rebavg28 = $records["RebAvg28"];
				$instance->lastcost29 = $records["LastCost29"];
				$instance->basecost29 = $records["BaseCost29"];
				$instance->avgcost29 = $records["AvgCost29"];
				$instance->buycost29 = $records["BuyCost29"];
				$instance->reblast29 = $records["RebLast29"];
				$instance->rebavg29 = $records["RebAvg29"];
				$instance->lastcost30 = $records["LastCost30"];
				$instance->basecost30 = $records["BaseCost30"];
				$instance->avgcost30 = $records["AvgCost30"];
				$instance->buycost30 = $records["BuyCost30"];
				$instance->reblast30 = $records["RebLast30"];
				$instance->rebavg30 = $records["RebAvg30"];
				$instance->lastcost31 = $records["LastCost31"];
				$instance->basecost31 = $records["BaseCost31"];
				$instance->avgcost31 = $records["AvgCost31"];
				$instance->buycost31 = $records["BuyCost31"];
				$instance->reblast31 = $records["RebLast31"];
				$instance->rebavg31 = $records["RebAvg31"];
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
			$query = " SELECT RecID, [CO], [Branch], [StockCode], [LinkCode], [Period], [Description2], [LastCost01], [BaseCost01], [AvgCost01], [BuyCost01], [RebLast01], [RebAvg01], [LastCost02], [BaseCost02], [AvgCost02], [BuyCost02], [RebLast02], [RebAvg02], [LastCost03], [BaseCost03], [AvgCost03], [BuyCost03], [RebLast03], [RebAvg03], [LastCost04], [BaseCost04], [AvgCost04], [BuyCost04], [RebLast04], [RebAvg04], [LastCost05], [BaseCost05], [AvgCost05], [BuyCost05], [RebLast05], [RebAvg05], [LastCost06], [BaseCost06], [AvgCost06], [BuyCost06], [RebLast06], [RebAvg06], [LastCost07], [BaseCost07], [AvgCost07], [BuyCost07], [RebLast07], [RebAvg07], [LastCost08], [BaseCost08], [AvgCost08], [BuyCost08], [RebLast08], [RebAvg08], [LastCost09], [BaseCost09], [AvgCost09], [BuyCost09], [RebLast09], [RebAvg09], [LastCost10], [BaseCost10], [AvgCost10], [BuyCost10], [RebLast10], [RebAvg10], [LastCost11], [BaseCost11], [AvgCost11], [BuyCost11], [RebLast11], [RebAvg11], [LastCost12], [BaseCost12], [AvgCost12], [BuyCost12], [RebLast12], [RebAvg12], [LastCost13], [BaseCost13], [AvgCost13], [BuyCost13], [RebLast13], [RebAvg13], [LastCost14], [BaseCost14], [AvgCost14], [BuyCost14], [RebLast14], [RebAvg14], [LastCost15], [BaseCost15], [AvgCost15], [BuyCost15], [RebLast15], [RebAvg15], [LastCost16], [BaseCost16], [AvgCost16], [BuyCost16], [RebLast16], [RebAvg16], [LastCost17], [BaseCost17], [AvgCost17], [BuyCost17], [RebLast17], [RebAvg17], [LastCost18], [BaseCost18], [AvgCost18], [BuyCost18], [RebLast18], [RebAvg18], [LastCost19], [BaseCost19], [AvgCost19], [BuyCost19], [RebLast19], [RebAvg19], [LastCost20], [BaseCost20], [AvgCost20], [BuyCost20], [RebLast20], [RebAvg20], [LastCost21], [BaseCost21], [AvgCost21], [BuyCost21], [RebLast21], [RebAvg21], [LastCost22], [BaseCost22], [AvgCost22], [BuyCost22], [RebLast22], [RebAvg22], [LastCost23], [BaseCost23], [AvgCost23], [BuyCost23], [RebLast23], [RebAvg23], [LastCost24], [BaseCost24], [AvgCost24], [BuyCost24], [RebLast24], [RebAvg24], [LastCost25], [BaseCost25], [AvgCost25], [BuyCost25], [RebLast25], [RebAvg25], [LastCost26], [BaseCost26], [AvgCost26], [BuyCost26], [RebLast26], [RebAvg26], [LastCost27], [BaseCost27], [AvgCost27], [BuyCost27], [RebLast27], [RebAvg27], [LastCost28], [BaseCost28], [AvgCost28], [BuyCost28], [RebLast28], [RebAvg28], [LastCost29], [BaseCost29], [AvgCost29], [BuyCost29], [RebLast29], [RebAvg29], [LastCost30], [BaseCost30], [AvgCost30], [BuyCost30], [RebLast30], [RebAvg30], [LastCost31], [BaseCost31], [AvgCost31], [BuyCost31], [RebLast31], [RebAvg31] FROM [STKDailyCosts]  WHERE [StockCode]=:stockcode  ";
			$stmt = $conn->getStatement($query);
			$stmt->bindParam(":stockcode", $stockcode);
			$stmt->execute();
			while($records  = $stmt->fetch( PDO::FETCH_ASSOC )) {
				$instance->recid = $records["RecID"];
				$instance->co = $records["CO"];
				$instance->branch = $records["Branch"];
				$instance->stockcode = $records["StockCode"];
				$instance->linkcode = $records["LinkCode"];
				$instance->period = $records["Period"];
				$instance->description2 = $records["Description2"];
				$instance->lastcost01 = $records["LastCost01"];
				$instance->basecost01 = $records["BaseCost01"];
				$instance->avgcost01 = $records["AvgCost01"];
				$instance->buycost01 = $records["BuyCost01"];
				$instance->reblast01 = $records["RebLast01"];
				$instance->rebavg01 = $records["RebAvg01"];
				$instance->lastcost02 = $records["LastCost02"];
				$instance->basecost02 = $records["BaseCost02"];
				$instance->avgcost02 = $records["AvgCost02"];
				$instance->buycost02 = $records["BuyCost02"];
				$instance->reblast02 = $records["RebLast02"];
				$instance->rebavg02 = $records["RebAvg02"];
				$instance->lastcost03 = $records["LastCost03"];
				$instance->basecost03 = $records["BaseCost03"];
				$instance->avgcost03 = $records["AvgCost03"];
				$instance->buycost03 = $records["BuyCost03"];
				$instance->reblast03 = $records["RebLast03"];
				$instance->rebavg03 = $records["RebAvg03"];
				$instance->lastcost04 = $records["LastCost04"];
				$instance->basecost04 = $records["BaseCost04"];
				$instance->avgcost04 = $records["AvgCost04"];
				$instance->buycost04 = $records["BuyCost04"];
				$instance->reblast04 = $records["RebLast04"];
				$instance->rebavg04 = $records["RebAvg04"];
				$instance->lastcost05 = $records["LastCost05"];
				$instance->basecost05 = $records["BaseCost05"];
				$instance->avgcost05 = $records["AvgCost05"];
				$instance->buycost05 = $records["BuyCost05"];
				$instance->reblast05 = $records["RebLast05"];
				$instance->rebavg05 = $records["RebAvg05"];
				$instance->lastcost06 = $records["LastCost06"];
				$instance->basecost06 = $records["BaseCost06"];
				$instance->avgcost06 = $records["AvgCost06"];
				$instance->buycost06 = $records["BuyCost06"];
				$instance->reblast06 = $records["RebLast06"];
				$instance->rebavg06 = $records["RebAvg06"];
				$instance->lastcost07 = $records["LastCost07"];
				$instance->basecost07 = $records["BaseCost07"];
				$instance->avgcost07 = $records["AvgCost07"];
				$instance->buycost07 = $records["BuyCost07"];
				$instance->reblast07 = $records["RebLast07"];
				$instance->rebavg07 = $records["RebAvg07"];
				$instance->lastcost08 = $records["LastCost08"];
				$instance->basecost08 = $records["BaseCost08"];
				$instance->avgcost08 = $records["AvgCost08"];
				$instance->buycost08 = $records["BuyCost08"];
				$instance->reblast08 = $records["RebLast08"];
				$instance->rebavg08 = $records["RebAvg08"];
				$instance->lastcost09 = $records["LastCost09"];
				$instance->basecost09 = $records["BaseCost09"];
				$instance->avgcost09 = $records["AvgCost09"];
				$instance->buycost09 = $records["BuyCost09"];
				$instance->reblast09 = $records["RebLast09"];
				$instance->rebavg09 = $records["RebAvg09"];
				$instance->lastcost10 = $records["LastCost10"];
				$instance->basecost10 = $records["BaseCost10"];
				$instance->avgcost10 = $records["AvgCost10"];
				$instance->buycost10 = $records["BuyCost10"];
				$instance->reblast10 = $records["RebLast10"];
				$instance->rebavg10 = $records["RebAvg10"];
				$instance->lastcost11 = $records["LastCost11"];
				$instance->basecost11 = $records["BaseCost11"];
				$instance->avgcost11 = $records["AvgCost11"];
				$instance->buycost11 = $records["BuyCost11"];
				$instance->reblast11 = $records["RebLast11"];
				$instance->rebavg11 = $records["RebAvg11"];
				$instance->lastcost12 = $records["LastCost12"];
				$instance->basecost12 = $records["BaseCost12"];
				$instance->avgcost12 = $records["AvgCost12"];
				$instance->buycost12 = $records["BuyCost12"];
				$instance->reblast12 = $records["RebLast12"];
				$instance->rebavg12 = $records["RebAvg12"];
				$instance->lastcost13 = $records["LastCost13"];
				$instance->basecost13 = $records["BaseCost13"];
				$instance->avgcost13 = $records["AvgCost13"];
				$instance->buycost13 = $records["BuyCost13"];
				$instance->reblast13 = $records["RebLast13"];
				$instance->rebavg13 = $records["RebAvg13"];
				$instance->lastcost14 = $records["LastCost14"];
				$instance->basecost14 = $records["BaseCost14"];
				$instance->avgcost14 = $records["AvgCost14"];
				$instance->buycost14 = $records["BuyCost14"];
				$instance->reblast14 = $records["RebLast14"];
				$instance->rebavg14 = $records["RebAvg14"];
				$instance->lastcost15 = $records["LastCost15"];
				$instance->basecost15 = $records["BaseCost15"];
				$instance->avgcost15 = $records["AvgCost15"];
				$instance->buycost15 = $records["BuyCost15"];
				$instance->reblast15 = $records["RebLast15"];
				$instance->rebavg15 = $records["RebAvg15"];
				$instance->lastcost16 = $records["LastCost16"];
				$instance->basecost16 = $records["BaseCost16"];
				$instance->avgcost16 = $records["AvgCost16"];
				$instance->buycost16 = $records["BuyCost16"];
				$instance->reblast16 = $records["RebLast16"];
				$instance->rebavg16 = $records["RebAvg16"];
				$instance->lastcost17 = $records["LastCost17"];
				$instance->basecost17 = $records["BaseCost17"];
				$instance->avgcost17 = $records["AvgCost17"];
				$instance->buycost17 = $records["BuyCost17"];
				$instance->reblast17 = $records["RebLast17"];
				$instance->rebavg17 = $records["RebAvg17"];
				$instance->lastcost18 = $records["LastCost18"];
				$instance->basecost18 = $records["BaseCost18"];
				$instance->avgcost18 = $records["AvgCost18"];
				$instance->buycost18 = $records["BuyCost18"];
				$instance->reblast18 = $records["RebLast18"];
				$instance->rebavg18 = $records["RebAvg18"];
				$instance->lastcost19 = $records["LastCost19"];
				$instance->basecost19 = $records["BaseCost19"];
				$instance->avgcost19 = $records["AvgCost19"];
				$instance->buycost19 = $records["BuyCost19"];
				$instance->reblast19 = $records["RebLast19"];
				$instance->rebavg19 = $records["RebAvg19"];
				$instance->lastcost20 = $records["LastCost20"];
				$instance->basecost20 = $records["BaseCost20"];
				$instance->avgcost20 = $records["AvgCost20"];
				$instance->buycost20 = $records["BuyCost20"];
				$instance->reblast20 = $records["RebLast20"];
				$instance->rebavg20 = $records["RebAvg20"];
				$instance->lastcost21 = $records["LastCost21"];
				$instance->basecost21 = $records["BaseCost21"];
				$instance->avgcost21 = $records["AvgCost21"];
				$instance->buycost21 = $records["BuyCost21"];
				$instance->reblast21 = $records["RebLast21"];
				$instance->rebavg21 = $records["RebAvg21"];
				$instance->lastcost22 = $records["LastCost22"];
				$instance->basecost22 = $records["BaseCost22"];
				$instance->avgcost22 = $records["AvgCost22"];
				$instance->buycost22 = $records["BuyCost22"];
				$instance->reblast22 = $records["RebLast22"];
				$instance->rebavg22 = $records["RebAvg22"];
				$instance->lastcost23 = $records["LastCost23"];
				$instance->basecost23 = $records["BaseCost23"];
				$instance->avgcost23 = $records["AvgCost23"];
				$instance->buycost23 = $records["BuyCost23"];
				$instance->reblast23 = $records["RebLast23"];
				$instance->rebavg23 = $records["RebAvg23"];
				$instance->lastcost24 = $records["LastCost24"];
				$instance->basecost24 = $records["BaseCost24"];
				$instance->avgcost24 = $records["AvgCost24"];
				$instance->buycost24 = $records["BuyCost24"];
				$instance->reblast24 = $records["RebLast24"];
				$instance->rebavg24 = $records["RebAvg24"];
				$instance->lastcost25 = $records["LastCost25"];
				$instance->basecost25 = $records["BaseCost25"];
				$instance->avgcost25 = $records["AvgCost25"];
				$instance->buycost25 = $records["BuyCost25"];
				$instance->reblast25 = $records["RebLast25"];
				$instance->rebavg25 = $records["RebAvg25"];
				$instance->lastcost26 = $records["LastCost26"];
				$instance->basecost26 = $records["BaseCost26"];
				$instance->avgcost26 = $records["AvgCost26"];
				$instance->buycost26 = $records["BuyCost26"];
				$instance->reblast26 = $records["RebLast26"];
				$instance->rebavg26 = $records["RebAvg26"];
				$instance->lastcost27 = $records["LastCost27"];
				$instance->basecost27 = $records["BaseCost27"];
				$instance->avgcost27 = $records["AvgCost27"];
				$instance->buycost27 = $records["BuyCost27"];
				$instance->reblast27 = $records["RebLast27"];
				$instance->rebavg27 = $records["RebAvg27"];
				$instance->lastcost28 = $records["LastCost28"];
				$instance->basecost28 = $records["BaseCost28"];
				$instance->avgcost28 = $records["AvgCost28"];
				$instance->buycost28 = $records["BuyCost28"];
				$instance->reblast28 = $records["RebLast28"];
				$instance->rebavg28 = $records["RebAvg28"];
				$instance->lastcost29 = $records["LastCost29"];
				$instance->basecost29 = $records["BaseCost29"];
				$instance->avgcost29 = $records["AvgCost29"];
				$instance->buycost29 = $records["BuyCost29"];
				$instance->reblast29 = $records["RebLast29"];
				$instance->rebavg29 = $records["RebAvg29"];
				$instance->lastcost30 = $records["LastCost30"];
				$instance->basecost30 = $records["BaseCost30"];
				$instance->avgcost30 = $records["AvgCost30"];
				$instance->buycost30 = $records["BuyCost30"];
				$instance->reblast30 = $records["RebLast30"];
				$instance->rebavg30 = $records["RebAvg30"];
				$instance->lastcost31 = $records["LastCost31"];
				$instance->basecost31 = $records["BaseCost31"];
				$instance->avgcost31 = $records["AvgCost31"];
				$instance->buycost31 = $records["BuyCost31"];
				$instance->reblast31 = $records["RebLast31"];
				$instance->rebavg31 = $records["RebAvg31"];
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
			$res = $this->description2;
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