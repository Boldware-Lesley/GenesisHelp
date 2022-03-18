<?php

use genesis\MyConnection;

class System
{
    public $sys_co;
    public $sys_branch;
    public $sys_user;
    public $sys_mod;
    public $sys_app;
    public $sys_client_id;
    public $sys_device;
    public $todayAP;
    public $today;
    public $todayDate;
    public $todayTime;
    public $EmptyString;
    public $EmptyNumber;
    public $MODaccess = array();
    public $TILaccess = array();
    public $COparam= array();
    public $BRparam= array();
    public $USERparam= array();
    public $SYSparam= array();
    public $MODparam= array();
    public $DEBparam= array();
    public $GLGparam= array();

    //region Access And Parameters
    public function LoadParameters( $co, $branch,$mod, $user="")
    {
        try {
            $this->sys_co=$co;
            $this->sys_branch=$branch;
            $this->sys_user=$user;
            $this->sys_mod=$mod;
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
            if (isset($conn)) {

                //region Get  User Param
                if (!empty($user)) {
                    try {
                        $query = "SELECT T2.[CO] ,  T2.[USERGROUP] , T2.[MODCODE] ,T2.[PARAMNO],T2.[PARAMVALUE] AS 'G_OPTION',T0.[PARAMVALUE] AS 'U_OPTION' ";
                        $query .= " FROM [SYSUser] T1";
                        $query .= " LEFT JOIN [SysUserParam] T0 ON T1.[USERCODE] = T0.[USERCODE]";
                        $query .= " LEFT JOIN [SysGrpParam] T2 ON T1.[USERGROUP] = T2.[USERGROUP]";
                        $query .= " WHERE ";
                        $query .= " T2.[CO] =:CO AND T2.[MODCODE] =:MODCODE AND T1.[USERCODE] =:USERCODE ";
                        $query .= " GROUP BY T2.[CO] ,  T2.[USERGROUP] , T2.[MODCODE] ,T2.[PARAMNO],T2.[PARAMVALUE],T0.[PARAMVALUE]";
                        $query .= " ORDER BY [CO] ASC, [USERGROUP] ASC, [MODCODE] ASC, [PARAMNO] ASC; ";
                        $stmt = $conn->getStatement($query);
                        if ($stmt !== null) {
                            $stmt->bindParam(":CO", $co);
                            $stmt->bindParam(":MODCODE", $mod);
                            $stmt->bindParam(":USERCODE", $user);
                            $stmt->execute();
                            $accVar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            $this->USERparam = array();
                            if (isset($accVar)) {
                                foreach ($accVar as $row) {
                                    $PARAMNO = $row["PARAMNO"];
                                    $G_OPTION = $row["G_OPTION"];
                                    $U_OPTION = $row["U_OPTION"];
                                    if (!empty($U_OPTION)) {
                                        $this->USERparam[$PARAMNO] = $U_OPTION;
                                    } else {
                                        $this->USERparam[$PARAMNO] = $G_OPTION;
                                    }
                                }
                            }
                        }
                    } catch (Exception $ex) {
                    }
                }
                //endregion

                //region Get  All Param
                try {
                    $query = "SELECT  [PARAMNO],[BRANCH],[MODCODE],[USERCODE],[PARAMVALUE] FROM [SysParameter] ";
                    $query .= " WHERE [CO]=:CO AND ISNULL([MODCODE] , '') IN ('SYS','DEB','GLG','" . $mod . "','')";
                    $query .= "ORDER BY [ParamType] ASC, [CO] ASC, [BRANCH] ASC, [MODCODE] ASC, [USERCODE] ASC ";


                    $stmt = $conn->getStatement($query);
                    if ($stmt !== null) {
                        $stmt->bindParam(":CO", $co);

                        $stmt->execute();
                        $accVar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $this->COparam = array();
                        $this->BRparam = array();
                        $this->SYSparam = array();
                        $this->MODparam = array();
                        $this->DEBparam = array();
                        $this->GLGparam = array();

                        if (isset($accVar)) {
                            foreach ($accVar as $row) {
                                $PARAMNO = $row["PARAMNO"];
                                $PARAMBRANCH = $row["BRANCH"];
                                $PARAMMODCODE = $row["MODCODE"];
                                $PARAMUSERCODE = $row["USERCODE"];
                                $PARAMVALUE = $row["PARAMVALUE"];

                                if (empty($PARAMBRANCH) && empty($PARAMUSERCODE) && empty($PARAMMODCODE)) {
                                    $this->COparam[$PARAMNO] = $PARAMVALUE;
                                } else if (empty($PARAMUSERCODE) && empty($PARAMMODCODE)) {
                                    $this->BRparam[$PARAMNO] = $PARAMVALUE;
                                } else {
                                    switch ($PARAMMODCODE) {
                                        case "SYS":
                                            {
                                                $this->SYSparam[$PARAMNO] = $PARAMVALUE;
                                            }
                                            break;
                                        case "DEB":
                                            {
                                                $this->DEBparam[$PARAMNO] = $PARAMVALUE;
                                            }
                                            break;
                                        case "GLG":
                                            {
                                                $this->GLGparam[$PARAMNO] = $PARAMVALUE;
                                            }
                                            break;
                                        case $mod:
                                            {
                                                $this->MODparam[$PARAMNO] = $PARAMVALUE;
                                            }
                                            break;
                                    }
                                }
                            }
                        }
                    }

                } catch (Exception $ex) {
                }
                //endregion

            }
        } catch (Exception $ex) {
            $msgErr = $ex->getMessage();
        }
    }

    public function LoadAccess($co, $branch, $mod, $user="")
    {
        try {
            $this->sys_co=$co;
            $this->sys_branch=$branch;
            $this->sys_user=$user;
            $this->sys_mod=$mod;
            $this->TILaccess = array();
            $this->MODaccess = array();
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
            if (isset($conn) && !empty($user)) {
                try {
                    $query = "SELECT T2.[CO] , T2.[USERGROUP] , T2.[MODCODE] ,T2.[ACCESSNO],T2.[OPTIONS] AS 'G_OPTION',T0.[OPTIONS] AS 'U_OPTION' ";
                    $query .= " FROM [SYSUser] T1 ";
                    $query .= " LEFT JOIN [SYSUserAccess] T0 ON T1.[USERCODE] = T0.[USERCODE] ";
                    $query .= " LEFT JOIN [SYSGrpAccess] T2 ON T1.[USERGROUP] = T2.[USERGROUP] ";
                    $query .= " WHERE ";
                    $query .= " T2.[CO] =:CO AND T1.[USERCODE] =:USERCODE AND ISNULL(T2.[MODCODE]  , '') IN ('TIL','" . $mod . "','') ";
                    $query .= " GROUP BY T2.[CO],T2.[USERGROUP] ,T2.[MODCODE],T2.[ACCESSNO],T2.[OPTIONS],T0.[OPTIONS]";
                    $query .= " ORDER BY T2.[CO] ASC, T2.[USERGROUP] ASC, T2.[MODCODE] ASC, T2.[ACCESSNO] ASC; ";



                    $stmt = $conn->getStatement($query);
                    if ($stmt !== null) {
                        $stmt->bindParam(":CO", $co);
                        $stmt->bindParam(":USERCODE", $user);
                        $stmt->execute();
                        $accVar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        if (isset($accVar)) {
                            foreach ($accVar as $row) {
                                $ACCESSNO = $row["ACCESSNO"];
                                $G_OPTION = $row["G_OPTION"];
                                $U_OPTION = $row["U_OPTION"];
                                $MODCODE = $row["MODCODE"];


                                switch ($MODCODE) {
                                    case "TIL":
                                        {
                                            if (!empty($U_OPTION)) {
                                                $this->TILaccess[$ACCESSNO] = $U_OPTION;
                                            } else {
                                                $this->TILaccess[$ACCESSNO] = $G_OPTION;
                                            }
                                        }
                                        break;
                                    case $mod:
                                        {
                                            if (!empty($U_OPTION)) {
                                                $this->MODaccess[$ACCESSNO] = $U_OPTION;
                                            } else {
                                                $this->MODaccess[$ACCESSNO] = $G_OPTION;
                                            }
                                        }
                                        break;
                                }


                            }
                        }
                    }
                } catch (Exception $ex) {
                    echo $ex->getMessage();
                }


            }
        } catch (Exception $ex) {
        }
    }

    public function CheckUserModuleAccess($ACCESSNO)
    {
        try {

            return isset($this->MODaccess[$ACCESSNO]) && $this->MODaccess[$ACCESSNO] === "Y";
        } catch (Exception $ex) {

            return false;
        }
    }
    //endregion

    //region Numbers
    public function GenerateDocNo($co, $branch, $DocTXTP, $TillNo, $PreFixTill, $Surfix)
    {
        try {


            $ModCode = substr($DocTXTP, 0, 3);
            $docNo =$this->GetDocNo($co,$branch,$DocTXTP, $ModCode);

            if(!empty($docNo)) {

                if ($PreFixTill === "Y") {
                    $docNo = $TillNo . $docNo;
                }
                switch ($Surfix) {
                    case "T":
                        {
                            $docNo = $docNo . $TillNo;
                        }
                        break;
                    case "Y":
                        {
                            $docNo = $docNo .date("Y");
                        }
                        break;
                    case "A":
                        {
                            $docNo = $docNo . date("Ym");
                        }
                        break;
                }
            }
            return $docNo;
        } catch (Exception $ex) {
            return "";
        }
    }
    public function GetDocNo( $co, $branch, $DocTXTP, $MOD, $tempnum=10000)
    {
        try {
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
            if (isset($conn)) {
                $query = "EXEC GENESIS_GENERATE_NUMBER ";
                $query .= " @CO='$co',@BRANCH='$branch', @MODCODE='$MOD',@TXTP='$DocTXTP' ";

                $stmt = $conn->getStatement($query);
                if ($stmt !== null) {
                    $stmt->execute();
                    $accVar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $num = "";
                    if (isset($accVar)) {
                        foreach ($accVar as $row) {
                            $num = $row["NUMBER"];
                        }
                    }
                    return $num;
                }else{
                    return "";
                }

                if(empty($num)){
                    $num='';
                    $query = "INSERT INTO [SYSNUMBERS]([CO], [BRANCH], [MODCODE], [TXTP], [FIELDCODE], [NUMBER]) ";
                    $query .= " VALUES('$co', '$branch', '$MOD', '$DocTXTP', '', '$tempnum') ";
                    $stmt = $conn->getStatement($query);
                    if ($stmt !== null) {
                        $stmt->execute();
                        $affected_rows = $stmt->rowCount();
                        if ($affected_rows > 0) {
                            $num=$tempnum;
                        }

                        return $num;
                    }

                    return "";
                }


            }else{
                return "";
            }
        } catch (Exception $ex) {
            return "";
        }
    }
    //endregion

    //region AP
    public function CheckAP($co)
    {
        try {
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
            if (isset($conn)) {
                $query = "SELECT  [SysAP].[APActive] FROM [SysAP] ";
                $query .= " WHERE [CO]=:CO AND [AP]=:AP ";
                $stmt = $conn->getStatement($query);
                if ($stmt !== null) {
                    $stmt->bindParam(":CO", $co);
                    $stmt->bindParam(":AP", $this->todayAP);
                    $stmt->execute();
                    $accVar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    if (isset($accVar)) {
                        foreach ($accVar as $row) {
                            $APActive = $row["APActive"];
                            if ($APActive === "Y") {
                                return true;
                            }
                        }
                    }
                }
            }
            return false;
        } catch (Exception $ex) {
                  return false;
        }
    }
    //endregion

    //region Debtors
    public function DEB_Calc_Balance( $co, $branch, $account, $from_ap)
    {
        try {
            $bal=0;
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
            if (isset($conn)) {
                $query = "EXEC [DEB_Get_OpeningBalance] ";
                $query .= "@wCO='$co',@wBranch='$branch',@wAccount='$account',@wAP='$from_ap'; ";
                $stmt = $conn->getStatement($query);
                if ($stmt !== null) {
                    $stmt->execute();
                    $accVar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    if (isset($accVar)) {
                        foreach ($accVar as $row) {
                            $bal = (float)$row["OpeningBalance"];
                        }
                    }
                }
            }
            return $bal;
        } catch (Exception $ex) {
            return 0;
        }
    }
    public function GetOpeningBalance( $co, $branch, $account, $from_ap)
    {
        try {
            $bal=0;
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
            if (isset($conn)) {
                $query = "SELECT  [DCURR],[D030],[D060],[D090],[D120],[D150],[D180],[DOVER] FROM [DEBBalance] ";
                $query .= " WHERE [CO]=:CO AND [Branch]=:Branch AND [Account]=:Account AND [AP]=:AP ";
                $stmt = $conn->getStatement($query);
                if ($stmt !== null) {
                    $stmt->bindParam(":CO", $co);
                    $stmt->bindParam(":Branch", $branch);
                    $stmt->bindParam(":Account", $account);
                    $stmt->bindParam(":AP", $from_ap);
                    $stmt->execute();
                    $accVar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    if (isset($accVar)) {
                        foreach ($accVar as $row) {
                            $DCURR = (float)$row["DCURR"];
                            $D030 = (float)$row["D030"];
                            $D060 = (float)$row["D060"];
                            $D090 = (float)$row["D090"];
                            $D120 = (float)$row["D120"];
                            $D150 = (float)$row["D150"];
                            $D180 = (float)$row["D180"];
                            $DOVER = (float)$row["DOVER"];
                            $bal = $DCURR + $D030 + $D060 + $D090 + $D120 + $D150 + $D180 + $DOVER;
                        }
                    }
                }
            }
            return $bal;
        } catch (Exception $ex) {
            return 0;
        }
    }
    public function GetPayDueDate($co, $branch, $account, $todayDate)
    {
        $newDate=$todayDate;
        try {
            if (isset($GLOBALS['conn'])) {
                $conn = $GLOBALS['conn'];
            }else{
                $conn = new  MyConnection();
                $GLOBALS[ 'conn' ] = $conn;
            }
            if (isset($conn)) {
                $TermFromValue = 0;
                $TermFromType= "";
                $TermFrom ="";
                $MonthEnd = "";

                $query = "SELECT TermFromValue, TermFromType, TermFrom, MonthEnd " .
                    "FROM [DEBMaster] ";
                $query .= " WHERE [CO]=:CO AND [Branch]=:Branch AND [Account]=:Account";

                $stmt = $conn->getStatement($query);
                if ($stmt !== null) {
                    $stmt->bindParam(":CO", $co);
                    $stmt->bindParam(":Branch", $branch);
                    $stmt->bindParam(":Account", $account);

                    $stmt->execute();
                    $accVar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    if (isset($accVar)) {
                        foreach ($accVar as $row) {
                            $TermFromValue = $row["TermFromValue"];
                            $TermFromType = $row["TermFromType"];
                            $TermFrom = $row["TermFrom"];
                            $MonthEnd = $row["MonthEnd"];

                        }
                    }

                    if ($TermFromType === ("S")) {
                        $newDate = date("Y/m/t", strtotime($newDate));
                    }

                    $newDate = date('Y/m/d', strtotime($newDate . ' + ' . $TermFromValue . ' days'));
                }
            }

        } catch (Exception $ex) {
        }
        return $newDate;
    }

    public function cpd_CalcWeek($timestamp, $crdmaster)
    {

        $res = $timestamp;
        $wDocDay = date("w", $timestamp);
        $wStmDay = (int)floor($crdmaster->monthend);
        $wCnt = 0;
        if ($wDocDay == $wStmDay) {
            $wCnt = 0;
        }
        if ($wDocDay < $wStmDay) {
            $wCnt = $wStmDay - $wDocDay;
        }

        if ($wDocDay > $wStmDay) {
            $wCnt = (7 + $wStmDay) - $wDocDay;
        }

        $res = strtotime(date('Y/m/d', $timestamp) . ' + ' . $wCnt . ' days');

        return $res;
    }

    public function GetPayDay($conn_client, $transdate, $cpd_ExtendMonths, $cpd_ExtendDays, $crdmaster)
    {
        $timestamp = strtotime($transdate);
        $newDate = $transdate;
        try {

            if (isset($conn_client)) {
                $wExtend = 0;
                $cpd_AddMonthExTerms = 0;
                $wMonth = date("m", $timestamp);
                $dayOfMonth = date("d", $timestamp);
                $cpd_TermFrom = $crdmaster->termfrom;
                $cpd_CalMonth = $crdmaster->calmonth;
                $cpd_TermDays = $crdmaster->termfromvalue;
                if ($wMonth === 1) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm01;
                }
                if ($wMonth === 2) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm02;
                }
                if ($wMonth === 3) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm03;
                }
                if ($wMonth === 4) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm04;
                }
                if ($wMonth === 5) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm05;
                }
                if ($wMonth === 6) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm06;
                }
                if ($wMonth === 7) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm07;
                }
                if ($wMonth === 8) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm08;
                }
                if ($wMonth === 9) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm09;
                }
                if ($wMonth === 10) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm10;
                }
                if ($wMonth === 11) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm11;
                }
                if ($wMonth === 12) {
                    $cpd_AddMonthExTerms = $crdmaster->exterm12;
                }
                $cpd_MEDate = $timestamp;
                if ($crdmaster->calmonth === "W") {
                    $cpd_MEDate = $this->cpd_CalcWeek($timestamp, $crdmaster);
                }
                $cpd_CalcDue = $timestamp;
                if ($crdmaster->calmonth === "I") {
                    $cpd_CalcDue = strtotime(date('Y/m/d', $timestamp) . ' + ' . $cpd_TermDays . ' days');
                }

                if ($cpd_TermFrom === "S") {
                    if ($cpd_CalMonth === "W") {
                        $cpd_CalcDue = strtotime(date('Y/m/d', $cpd_MEDate) . ' + ' . $cpd_TermDays . ' days');

                    } else {
                        $cpd_CalcDue = strtotime(date('Y/m/d', $cpd_MEDate) . ' + ' . $cpd_TermDays . ' days');
                        if ($cpd_CalMonth === "P") {
                            if ($dayOfMonth > 24) {
                                $wExtend = 1;
                            }
                        }
                    }
                }
                if ($wExtend > 0) {
                    $cpd_CalcDue = strtotime(date('Y/m/d', $cpd_CalcDue) . ' + ' . $wExtend . ' days');
                }
                if ($cpd_ExtendMonths > 0) {
                    $cpd_CalcDue = strtotime(date('Y/m/d', $cpd_CalcDue) . ' + ' . $cpd_ExtendMonths . ' days');
                }
                if ($cpd_AddMonthExTerms > 0) {
                    $cpd_CalcDue = strtotime(date('Y/m/d', $cpd_CalcDue) . ' + ' . $cpd_AddMonthExTerms . ' days');
                }
                if ($cpd_ExtendDays > 0) {
                    $cpd_CalcDue = strtotime(date('Y/m/d', $cpd_CalcDue) . ' + ' . $cpd_ExtendDays . ' days');
                }


                $newDate = date('Y/m/d', $cpd_CalcDue);

            }

        } catch (Exception $ex) {
        }
        return $newDate;
    }
    //endregion

    //region Vouchers
    public function GenerateVoucher($conn_client, $docHeader, $xType, $xAmount, $xVATAmount)
    {
        $arrRes=array();
        try {

            $wNewVoucherNo = $this->GetDocNo($conn_client,$docHeader->co,$docHeader->branch,"POSVNO","POS");
            if(!empty($wNewVoucherNo)) {
                $wVoucherKey = $wNewVoucherNo;
                if (isset($this->COparam[22]) && $this->COparam[22] === "Y") {
                    $wVoucherKey = Number_Generator(8);
                }
                $wVoucherExpDate = date("Y/m/d");
                //{ Company [4] VOUCHERS : Valid Days - Returns Voucher }
                $wVoucherDays = 1;
                if (isset($this->COparam[4])) {
                    $wVoucherDays = (int)$this->COparam[4];
                    if ($wVoucherDays === 0) {
                        $wVoucherDays = 1;
                    }
                }
                if ($wVoucherDays > 0) {
                    $wVoucherExpDate = date('Y/m/d', strtotime($wVoucherExpDate . ' + ' . $wVoucherDays . ' days'));
                }

                $gPNewVouchNo = "";
                $gPNewVouchType = "";
                $gPChgVouchNo = "";
                $gPChgVouchType = "";
                if ($xType === "R") {
                    $gPNewVouchNo = $wNewVoucherNo;
                    $gPNewVouchType = $xType;
                }
                if ($xType === "C") {
                    $gPChgVouchNo = $wNewVoucherNo;
                    $gPChgVouchType = $xType;
                }

                $quBuilder = "INSERT INTO POSVouchers (";
                $quBuilder .= " [CO], [VoucherBranch], [VoucherNo], [VoucherType], [DateCreated], [VoucherExpDate], ";
                $quBuilder .= " [Amount], [VAT], [VoucherTxTp], [Status], [DocTxTp], [DocNo], [TillNo], [Account],   ";
                $quBuilder .= " [Name], [Address1], [Address2], [Address3], [Address4], [Phone], [IDNo], [Description],  ";
                $quBuilder .= " [PaidDate], [PaidTillNo], [PaidTxTp], [PaidDocNo], [Cashed], [BaseBranch], [BaseVoucherNo],  ";
                $quBuilder .= " [BaseVoucherAmnt], [TargetBranch], [TargetVoucherNo], [TargetVoucherAmnt], [DTODate],  ";
                $quBuilder .= "[DTOTime], [DTOUser], [DTOMacID], [VoucherKey], [PensionNo], [ExternalNo], [HandlingFee],  ";
                $quBuilder .= "[RetnCounterNo], [OrigInvoiceNo]  ";
                $quBuilder .= ") ";
                //Values
                $quBuilder .= "VALUES ( ";

                $quBuilder .= QuotedStr($docHeader->co) . ", ";//CO
                $quBuilder .= QuotedStr($docHeader->branch) . ", ";//VoucherBranch
                $quBuilder .= QuotedStr($wNewVoucherNo) . ", ";//VoucherNo
                if ($docHeader->txtp === "POSCSR" && isset($this->USERparam[46]) && $this->USERparam[46] === ("Y")) {
                    $quBuilder .= " 'E', ";//VoucherType
                } else {
                    $quBuilder .= QuotedStr($xType) . ", ";//VoucherType
                }
                $quBuilder .= QuotedStr($docHeader->trandate) . ", ";//DateCreated
                $quBuilder .= QuotedStr($wVoucherExpDate) . ", ";//VoucherExpDate
                $quBuilder .= QuotedStr($xAmount) . ", ";//Amount
                $quBuilder .= QuotedStr($xVATAmount) . ", ";//VAT
                $quBuilder .= QuotedStr($docHeader->txtp) . ", ";//VoucherTxTp
                $quBuilder .= " 'U', ";//Status
                $quBuilder .= QuotedStr($docHeader->txtp) . ", ";//DocTxTp
                $quBuilder .= QuotedStr($docHeader->docno) . ", ";//DocNo
                $quBuilder .= QuotedStr($docHeader->tillno) . ", ";//TillNo
                $quBuilder .= QuotedStr($docHeader->account) . ", ";//Account
                $quBuilder .= QuotedStr($docHeader->name) . ", ";//Name
                $quBuilder .= QuotedStr($docHeader->address1) . ", ";//Address1
                $quBuilder .= QuotedStr($docHeader->address2) . ", ";//Address2
                $quBuilder .= QuotedStr($docHeader->address3) . ", ";//Address3
                $quBuilder .= QuotedStr($docHeader->address4) . ", ";//Address4
                $quBuilder .= QuotedStr($docHeader->telephone) . ", ";//Phone
                $quBuilder .= " '',";//IDNo
                $quBuilder .= QuotedStr($docHeader->details) . ", ";//Description
                $quBuilder .= " '',";//[PaidDate]
                $quBuilder .= " '',";//[PaidTillNo],
                $quBuilder .= " '',";//[PaidTxTp],
                $quBuilder .= " '',";//[PaidDocNo],
                $quBuilder .= " 'N',";//[Cashed]
                $quBuilder .= " '',";//[BaseBranch]
                $quBuilder .= " '',  ";//[BaseVoucherNo],
                $quBuilder .= " '0', ";//[BaseVoucherAmnt]
                $quBuilder .= "'',";//[TargetBranch]
                $quBuilder .= " '',";//[TargetVoucherNo]
                $quBuilder .= " '0',";//[TargetVoucherAmnt]
                $quBuilder .= QuotedStr($docHeader->dtodate) . ", ";//[DTODate]
                $quBuilder .= QuotedStr($docHeader->dtotime) . ", "; //[DTOTime]
                $quBuilder .= QuotedStr($docHeader->dtouser) . ", ";//[DTOUser]
                $quBuilder .= QuotedStr($docHeader->dtomacid) . ", "; //[DTOMacID]
                $quBuilder .= QuotedStr($wVoucherKey) . ", ";//[VoucherKey]
                $quBuilder .= " '',";//[PensionNo]
                $quBuilder .= " '', ";//[ExternalNo]
                $quBuilder .= "'0',  ";//[HandlingFee],
                $quBuilder .= QuotedStr($docHeader->returninvoice) . ", ";//[RetnCounterNo]
                $quBuilder .= QuotedStr($docHeader->refinv) . " ";//[OrigInvoiceNo]

                $quBuilder .= ") ";


                $stmt = $conn_client->getStatement($quBuilder);
                if ($stmt !== null) {
                    $stmt->execute();
                    $affected_rows = $stmt->rowCount();
                    if ($affected_rows > 0) {
                        $query = "SELECT   ";
                        $query .= "[CO], [VOUCHERBRANCH], [VOUCHERNO], [VOUCHERTYPE], [DATECREATED], [VOUCHEREXPDATE]," .
                            " [AMOUNT], [VAT], [VOUCHERTXTP], [STATUS], [DOCTXTP], [DOCNO], [TILLNO], [ACCOUNT], [NAME]," .
                            " [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [PHONE], [IDNO], [DESCRIPTION], " .
                            "[PAIDDATE], [PAIDTILLNO], [PAIDTXTP], [PAIDDOCNO], [CASHED], [BASEBRANCH], [BASEVOUCHERNO]," .
                            " [BASEVOUCHERAMNT], [TARGETBRANCH], [TARGETVOUCHERNO], [TARGETVOUCHERAMNT], " .
                            "[DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [VOUCHERKEY], [PENSIONNO], [EXTERNALNO], " .
                            "[HANDLINGFEE], [RetnCounterNo] AS 'RETNCOUNTERNO', [OrigInvoiceNo] AS 'ORIGINVOICENO', [PickupDate] AS 'PICKUPDATE', [PickupTime] AS 'PICKUPTIME', [CashUpNo] AS 'CASHUPNO', " .
                            "[PickupTill] AS 'PICKUPTILL' , [EmptiesVerified] AS 'EMPTIESVERIFIED' , [ReferenceNo] AS 'REFERENCENO', [EMail] AS 'EMAIL', [OrderNo] AS 'ORDERNO', [BufferPeriod] AS 'BUFFERPERIOD' ";
                        $query .= " FROM [POSVouchers]   ";
                        $query .= "  WHERE [CO]=:CO AND [VoucherBranch]=:Branch AND [VoucherNo]=:VoucherNo ";

                        $stmt = $conn_client->getStatement($query);
                        if ($stmt !== null) {
                            $stmt->bindParam(":CO", $docHeader->co);
                            $stmt->bindParam(":Branch", $docHeader->branch);
                            $stmt->bindParam(":VoucherNo", $wNewVoucherNo);
                            $stmt->execute();
                            $arrRes = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        }
                    }
                }
            }
        } catch (Exception $ex) {

            echo $ex->getMessage();
        }
        return $arrRes;
    }
    //endregion

    //region Stock
    public function GetSTKKitMaster($conn_client, $co, $branch, $stockcode)
    {
        try {

            if (isset($conn_client)) {
                $query = "SELECT T0.*,T1.[StockType] FROM [STKKitMaster] T0  JOIN [STKMaster] T1 ON T0.[CO]=T1.[CO] AND T0.[Branch]=T1.[Branch] AND T0.[KitStockCode]=T1.[StockCode] AND T0.[KitLinkCode]=T1.[LinkCode] ";
                $query .="  WHERE [CO]=:CO AND [Branch]=:Branch AND T0.[StockCode]=:StockCode ";
                $query .= " ORDER BY T0.[KitStockCode] ASC";
                $stmt = $conn_client->getStatement($query);
                $stmt->bindParam(":CO", $co);
                $stmt->bindParam(":Branch", $branch);
                $stmt->bindParam(":StockCode", $stockcode);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            return array();
        } catch (Exception $ex) {
            return array();
        }
    }
    //endregion

    //region Messages
    public function SendMessage($msg, $phone)
    {
        try {


            if (isset($this->SYSparam[103], $this->SYSparam[104], $this->SYSparam[105], $this->SYSparam[106])) {
                $Host_Name = $this->SYSparam[103]?? "";
                $URLAddress = $this->SYSparam[104]?? "";
                $UserCode_ = $this->SYSparam[105]?? "";
                $Password_ = $this->SYSparam[106]?? "";

                if (!empty($Host_Name) && !empty($URLAddress) && !empty($UserCode_) && !empty($Password_) && !empty($phone)) {

                    switch (strtoupper($Host_Name)){
                        case "API.PANACEAMOBILE.COM":{

                            $portal = new PanaceaApi();
                            $portal->setUsername($UserCode_);
                            $portal->setPassword($Password_);

                            $result= $portal->message_send($phone, $msg);

                            if($portal->ok($result)) {
                                return true;
                            }

                            return false;

                        }break;
                    }
                }
            }
            return false;
        } catch (Exception $ex) {

            return false;
        }
    }
    //endregion

    //region Errors
    public function RegisterError($conn_global, $co, $branch, $client, $device, $app, $usercode, $code, $title, $msg)
    {
        try {
            if($conn_global!==null) {
                $todayDate = date("Y/m/d");
                $todayTime = date("H:i:s");

                $query = "INSERT INTO [vcAppStoreErrorLog] ";
                $query .= " ([AppID], [CustID], [DeviceID], [CO], [Branch], [UserCode], [TranDate], [TranTime], [ErrorCode], [ErrorTitle], [ErrorText], [Status])";
                //Values
                $query .= "VALUES ( ";
                $query .= "'" . escapeSql($app) . "',";//AppID
                $query .= "'" . escapeSql($client) . "',";//CustID
                $query .= "'" . escapeSql($device) . "',";//DeviceID
                $query .= "'" . escapeSql($co) . "',";//CO
                $query .= "'" . escapeSql($branch) . "',";//Branch
                $query .= "'" . escapeSql($usercode) . "',";//UserCode
                $query .= "'" . escapeSql($todayDate) . "',";//TranDate
                $query .= "'" . escapeSql($todayTime) . "',";//TranTime
                $query .= "'" . escapeSql($code) . "',";//ErrorCode
                $query .= "'" . escapeSql($title) . "',";//ErrorTitle
                $query .= "'" . escapeSql($msg) . "',";//ErrorText
                $query .= "'0'";//Status
                $query .= ") ";
                $affected_devices = $conn_global->Execute($query);
                if ($affected_devices > 0) {
                    return true;
                }
            }
            return false;
        } catch (Exception $ex) {
            return false;
        }
    }
    //endregion

    public function __construct() {
        $this->today = date( "Y/m/d H:i:s" );
        $this->todayDate = date( "Y/m/d" );
        $this->todayAP = date( "Ym" );
        $this->todayTime = date( "H:i:s" );
        $this->EmptyString = "";
        $this->EmptyNumber = 0;

    }

}
