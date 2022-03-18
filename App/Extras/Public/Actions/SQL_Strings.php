<?php

class SQL_Strings
{
    public function DOCHeader_Creation($Docheader)
    {
        $batch_query = "";

        $batch_query .= "IF NOT EXISTS ( SELECT [DOCHeader].* FROM [DOCHeader] WHERE [CO]=" . QuotedStr($Docheader->co) . " AND [Branch]=" . QuotedStr($Docheader->branch) . " AND [TxTp]=" . QuotedStr($Docheader->txtp) . " AND [DocNo]=" . QuotedStr($Docheader->docno) . " AND [Account]=" . QuotedStr($Docheader->account) . " )";
        //region Insert
        $batch_query .= "INSERT INTO [DOCHeader] ([CO], [Branch], [TxTp], [TillNo], [DocNo], [Account], [TranDate], [TranTime], [Name], [Address1], [Address2], [Address3], [Address4], [Contact], [Telephone], [Fax], [VATNumber], [SalesRep], [Reference], [BaseType], [BaseRef], [VATIndicator], [DocDiscount], [TotalVAT], [TotalExcl], [TotalIncl], [TotalTaxable], [TotalExempt], [TotalCostExcl], [TotalCostIncl], [Profit], [AP], [WH], [PaymentDate], [Details], [Notes], [DeliveryMethod], [DeliveryDate], [Dispatch], [Cash], [Cheques], [CreditCards], [Vouchers], [Transfers], [TenderAmount1], [TenderAmount2], [TenderAmount3], [TenderAmount4], [Tendered], [TenderChange], [RoundingDown], [RoundingUp], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [CashUpnumber], [CashUpdate], [CashUptime], [UField1], [UField2], [UField3], [UField4], [UnAllocated], [ReturnInvoice], [Deposit], [Paid], [Balance], [RefInv], [OrderBy], [PurchaseOrder], [TermDays], [Status], [PrintCount], [SBO_TimeStamp], [DeliveryAddress1], [DeliveryAddress2], [DeliveryAddress3], [DeliveryAddress4], [EODDate], [Supervisor], [SAPDocNo], [ServerStatus], [ServerDate], [ServerTime], [DCurr], [D030], [D060], [D090], [D120], [D150], [D180], [DOver], [TotalLineDisc], [TotalRebAmnt], [Weight], [Cases], [Pallets], [Dimensions], [DrCr], [DetailLines], [TotalDiscount], [FinalTotal], [ManProfit], [ManDiscount], [ManVAT], [ManTotal], [Version], [ScanUser], [ScanDate], [ScanTime], [SourceBranch], [InUse], [CellPhone], [DocDiscVAT], [DropSafe], [DispatchBranch], [OnlineAccount], [Wallets], [LoyaltyPnts]) ";
        $batch_query .= "VALUES ( ";
        $batch_query .= " " . QuotedStr($Docheader->co) . " ";//CO
        $batch_query .= ", " . QuotedStr($Docheader->branch) . " ";//BRANCH
        $batch_query .= ", " . QuotedStr($Docheader->txtp) . " ";//TXTP
        $batch_query .= ", " . QuotedStr($Docheader->tillno) . " ";//TILLNO
        $batch_query .= ", " . QuotedStr($Docheader->docno) . " ";//DOCNO
        $batch_query .= ", " . QuotedStr($Docheader->account) . " ";//ACCOUNT
        $batch_query .= ", " . QuotedStr($Docheader->trandate) . " ";//TRANDATE
        $batch_query .= ", " . QuotedStr($Docheader->trantime) . " ";//TRANTIME
        $batch_query .= ", " . QuotedStr($Docheader->name) . " ";//NAME
        $batch_query .= ", " . QuotedStr($Docheader->address1) . " ";//ADDRESS1
        $batch_query .= ", " . QuotedStr($Docheader->address2) . " ";//ADDRESS2
        $batch_query .= ", " . QuotedStr($Docheader->address3) . " ";//ADDRESS3
        $batch_query .= ", " . QuotedStr($Docheader->address4) . " ";//ADDRESS4
        $batch_query .= ", " . QuotedStr($Docheader->contact) . " ";//CONTACT
        $batch_query .= ", " . QuotedStr($Docheader->telephone) . " ";//TELEPHONE
        $batch_query .= ", " . QuotedStr($Docheader->fax) . " ";//FAX
        $batch_query .= ", " . QuotedStr($Docheader->vatnumber) . " ";//VATNUMBER
        $batch_query .= ", " . QuotedStr($Docheader->salesrep) . " ";//SALESREP
        $batch_query .= ", " . QuotedStr($Docheader->reference) . " ";//REFERENCE
        $batch_query .= ", " . QuotedStr($Docheader->basetype) . " ";//BASETYPE
        $batch_query .= ", " . QuotedStr($Docheader->baseref) . " ";//BASEREF
        $batch_query .= ", " . QuotedStr($Docheader->vatindicator) . " ";//VATINDICATOR
        $batch_query .= ", " . QuotedStr($Docheader->docdiscount) . " ";//DOCDISCOUNT
        $batch_query .= ", " . QuotedStr($Docheader->totalvat) . " ";//TOTALVAT
        $batch_query .= ", " . QuotedStr($Docheader->totalexcl) . " ";//TOTALEXCL
        $batch_query .= ", " . QuotedStr($Docheader->totalincl) . " ";//TOTALINCL
        $batch_query .= ", " . QuotedStr($Docheader->totaltaxable) . " ";//TOTALTAXABLE
        $batch_query .= ", " . QuotedStr($Docheader->totalexempt) . " ";//TOTALEXEMPT
        $batch_query .= ", " . QuotedStr($Docheader->totalcostexcl) . " ";//TOTALCOSTEXCL
        $batch_query .= ", " . QuotedStr($Docheader->totalcostincl) . " ";//TOTALCOSTINCL
        $batch_query .= ", " . QuotedStr($Docheader->profit) . " ";//PROFIT
        $batch_query .= ", " . QuotedStr($Docheader->ap) . " ";//AP
        $batch_query .= ", " . QuotedStr($Docheader->wh) . " ";//WH
        $batch_query .= ", " . QuotedStr($Docheader->paymentdate) . " ";//PAYMENTDATE
        $batch_query .= ", " . QuotedStr($Docheader->details) . " ";//DETAILS
        $batch_query .= ", " . QuotedStr($Docheader->notes) . " ";//NOTES
        $batch_query .= ", " . QuotedStr($Docheader->deliverymethod) . " ";//DELIVERYMETHOD
        $batch_query .= ", " . QuotedStr($Docheader->deliverydate) . " ";//DELIVERYDATE
        $batch_query .= ", " . QuotedStr($Docheader->dispatch) . " ";//DISPATCH
        $batch_query .= ", " . QuotedStr($Docheader->cash) . " ";//CASH
        $batch_query .= ", " . QuotedStr($Docheader->cheques) . " ";//CHEQUES
        $batch_query .= ", " . QuotedStr($Docheader->creditcards) . " ";//CREDITCARDS
        $batch_query .= ", " . QuotedStr($Docheader->vouchers) . " ";//VOUCHERS
        $batch_query .= ", " . QuotedStr($Docheader->transfers) . " ";//TRANSFERS
        $batch_query .= ", " . QuotedStr($Docheader->tenderamount1) . " ";//TENDERAMOUNT1
        $batch_query .= ", " . QuotedStr($Docheader->tenderamount2) . " ";//TENDERAMOUNT2
        $batch_query .= ", " . QuotedStr($Docheader->tenderamount3) . " ";//TENDERAMOUNT3
        $batch_query .= ", " . QuotedStr($Docheader->tenderamount4) . " ";//TENDERAMOUNT4
        $batch_query .= ", " . QuotedStr($Docheader->tendered) . " ";//TENDERED
        $batch_query .= ", " . QuotedStr($Docheader->tenderchange) . " ";//TENDERCHANGE
        $batch_query .= ", " . QuotedStr($Docheader->roundingdown) . " ";//ROUNDINGDOWN
        $batch_query .= ", " . QuotedStr($Docheader->roundingup) . " ";//ROUNDINGUP
        $batch_query .= ", " . QuotedStr($Docheader->dtodate) . " ";//DTODATE
        $batch_query .= ", " . QuotedStr($Docheader->dtotime) . " ";//DTOTIME
        $batch_query .= ", " . QuotedStr($Docheader->dtouser) . " ";//DTOUSER
        $batch_query .= ", " . QuotedStr($Docheader->dtomacid) . " ";//DTOMACID
        $batch_query .= ", " . QuotedStr($Docheader->cashupnumber) . " ";//CASHUPNUMBER
        $batch_query .= ", " . QuotedStr($Docheader->cashupdate) . " ";//CASHUPDATE
        $batch_query .= ", " . QuotedStr($Docheader->cashuptime) . " ";//CASHUPTIME
        $batch_query .= ", " . QuotedStr($Docheader->ufield1) . " ";//UFIELD1
        $batch_query .= ", " . QuotedStr($Docheader->ufield2) . " ";//UFIELD2
        $batch_query .= ", " . QuotedStr($Docheader->ufield3) . " ";//UFIELD3
        $batch_query .= ", " . QuotedStr($Docheader->ufield4) . " ";//UFIELD4
        $batch_query .= ", " . QuotedStr($Docheader->unallocated) . " ";//UNALLOCATED
        $batch_query .= ", " . QuotedStr($Docheader->returninvoice) . " ";//RETURNINVOICE
        $batch_query .= ", " . QuotedStr($Docheader->deposit) . " ";//DEPOSIT
        $batch_query .= ", " . QuotedStr($Docheader->paid) . " ";//PAID
        $batch_query .= ", " . QuotedStr($Docheader->balance) . " ";//BALANCE
        $batch_query .= ", " . QuotedStr($Docheader->refinv) . " ";//REFINV
        $batch_query .= ", " . QuotedStr($Docheader->orderby) . " ";//ORDERBY
        $batch_query .= ", " . QuotedStr($Docheader->purchaseorder) . " ";//PURCHASEORDER
        $batch_query .= ", " . QuotedStr($Docheader->termdays) . " ";//TERMDAYS
        $batch_query .= ", " . QuotedStr($Docheader->status) . " ";//STATUS
        $batch_query .= ", " . QuotedStr($Docheader->printcount) . " ";//PRINTCOUNT
        $batch_query .= ", " . QuotedStr($Docheader->sbo_timestamp) . " ";//SBO_TIMESTAMP
        $batch_query .= ", " . QuotedStr($Docheader->deliveryaddress1) . " ";//DELIVERYADDRESS1
        $batch_query .= ", " . QuotedStr($Docheader->deliveryaddress2) . " ";//DELIVERYADDRESS2
        $batch_query .= ", " . QuotedStr($Docheader->deliveryaddress3) . " ";//DELIVERYADDRESS3
        $batch_query .= ", " . QuotedStr($Docheader->deliveryaddress4) . " ";//DELIVERYADDRESS4
        $batch_query .= ", " . QuotedStr($Docheader->eoddate) . " ";//EODDATE
        $batch_query .= ", " . QuotedStr($Docheader->supervisor) . " ";//SUPERVISOR
        $batch_query .= ", " . QuotedStr($Docheader->sapdocno) . " ";//SAPDOCNO
        $batch_query .= ", " . QuotedStr($Docheader->serverstatus) . " ";//SERVERSTATUS
        $batch_query .= ", " . QuotedStr($Docheader->serverdate) . " ";//SERVERDATE
        $batch_query .= ", " . QuotedStr($Docheader->servertime) . " ";//SERVERTIME
        $batch_query .= ", " . QuotedStr($Docheader->dcurr) . " ";//DCURR
        $batch_query .= ", " . QuotedStr($Docheader->d030) . " ";//D030
        $batch_query .= ", " . QuotedStr($Docheader->d060) . " ";//D060
        $batch_query .= ", " . QuotedStr($Docheader->d090) . " ";//D090
        $batch_query .= ", " . QuotedStr($Docheader->d120) . " ";//D120
        $batch_query .= ", " . QuotedStr($Docheader->d150) . " ";//D150
        $batch_query .= ", " . QuotedStr($Docheader->d180) . " ";//D180
        $batch_query .= ", " . QuotedStr($Docheader->dover) . " ";//DOVER
        $batch_query .= ", " . QuotedStr($Docheader->totallinedisc) . " ";//TOTALLINEDISC
        $batch_query .= ", " . QuotedStr($Docheader->totalrebamnt) . " ";//TOTALREBAMNT
        $batch_query .= ", " . QuotedStr($Docheader->weight) . " ";//WEIGHT
        $batch_query .= ", " . QuotedStr($Docheader->cases) . " ";//CASES
        $batch_query .= ", " . QuotedStr($Docheader->pallets) . " ";//PALLETS
        $batch_query .= ", " . QuotedStr($Docheader->dimensions) . " ";//DIMENSIONS
        $batch_query .= ", " . QuotedStr($Docheader->drcr) . " ";//DRCR
        $batch_query .= ", " . QuotedStr($Docheader->detaillines) . " ";//DETAILLINES
        $batch_query .= ", " . QuotedStr($Docheader->totaldiscount) . " ";//TOTALDISCOUNT
        $batch_query .= ", " . QuotedStr($Docheader->finaltotal) . " ";//FINALTOTAL
        $batch_query .= ", " . QuotedStr($Docheader->manprofit) . " ";//MANPROFIT
        $batch_query .= ", " . QuotedStr($Docheader->mandiscount) . " ";//MANDISCOUNT
        $batch_query .= ", " . QuotedStr($Docheader->manvat) . " ";//MANVAT
        $batch_query .= ", " . QuotedStr($Docheader->mantotal) . " ";//MANTOTAL
        $batch_query .= ", " . QuotedStr($Docheader->version) . " ";//VERSION
        $batch_query .= ", " . QuotedStr($Docheader->scanuser) . " ";//SCANUSER
        $batch_query .= ", " . QuotedStr($Docheader->scandate) . " ";//SCANDATE
        $batch_query .= ", " . QuotedStr($Docheader->scantime) . " ";//SCANTIME
        $batch_query .= ", " . QuotedStr($Docheader->sourcebranch) . " ";//SourceBranch
        $batch_query .= ", " . QuotedStr($Docheader->inuse) . " ";//InUse
        $batch_query .= ", " . QuotedStr($Docheader->cellphone) . " ";//CellPhone
        $batch_query .= ", " . QuotedStr($Docheader->docdiscvat) . " ";//DocDiscVAT
        $batch_query .= ", " . QuotedStr($Docheader->dropsafe) . " ";//DropSafe
        $batch_query .= ", " . QuotedStr($Docheader->dispatchbranch) . " ";//DispatchBranch
        $batch_query .= ", " . QuotedStr($Docheader->onlineaccount) . " ";//OnlineAccount
        $batch_query .= ", " . QuotedStr($Docheader->wallets) . " ";//Wallets
        $batch_query .= ", " . QuotedStr($Docheader->points_acquired) . " ";//Points_acquired
        $batch_query .= ") ";
        //endregion
        $batch_query .= " ELSE ";
        //region Update
        $batch_query .= "UPDATE [DOCHeader] ";
        $batch_query .= "SET ";
        $batch_query .= " [LoyaltyPnts]=N" . QuotedStr($Docheader->loyaltypnts) . ",";
        $batch_query .= " [Name]=N" . QuotedStr($Docheader->name) . ",";
        $batch_query .= " [Address1]=N" . QuotedStr($Docheader->address1) . ",";
        $batch_query .= " [Address2]=N" . QuotedStr($Docheader->address2) . ",";
        $batch_query .= " [Address3]=N" . QuotedStr($Docheader->address3) . ",";
        $batch_query .= " [Address4]=N" . QuotedStr($Docheader->address4) . ",";
        $batch_query .= " [Contact]=N" . QuotedStr($Docheader->contact) . ",";
        $batch_query .= " [Telephone]=N" . QuotedStr($Docheader->telephone) . ",";
        $batch_query .= " [Fax]=N" . QuotedStr($Docheader->fax) . ",";
        $batch_query .= " [VATNumber]=N" . QuotedStr($Docheader->vatnumber) . ",";
        $batch_query .= " [SalesRep]=N" . QuotedStr($Docheader->salesrep) . ",";
        $batch_query .= " [Reference]=N" . QuotedStr($Docheader->reference) . ",";
        $batch_query .= " [BaseType]=N" . QuotedStr($Docheader->basetype) . ",";
        $batch_query .= " [BaseRef]=N" . QuotedStr($Docheader->baseref) . ",";
        $batch_query .= " [VATIndicator]=N" . QuotedStr($Docheader->vatindicator) . ",";
        $batch_query .= " [DocDiscount]=" . QuotedStr($Docheader->docdiscount) . ",";
        $batch_query .= " [TotalVAT]=" . QuotedStr($Docheader->totalvat) . ",";
        $batch_query .= " [TotalExcl]=" . QuotedStr($Docheader->totalexcl) . ",";
        $batch_query .= " [TotalIncl]=" . QuotedStr($Docheader->totalincl) . ",";
        $batch_query .= " [TotalTaxable]=" . QuotedStr($Docheader->totaltaxable) . ",";
        $batch_query .= " [TotalExempt]=" . QuotedStr($Docheader->totalexempt) . ",";
        $batch_query .= " [TotalCostExcl]=" . QuotedStr($Docheader->totalcostexcl) . ",";
        $batch_query .= " [TotalCostIncl]=" . QuotedStr($Docheader->totalcostincl) . ",";
        $batch_query .= " [Profit]=" . QuotedStr($Docheader->profit) . ",";
        $batch_query .= " [AP]=" . QuotedStr($Docheader->ap) . ",";
        $batch_query .= " [WH]=N" . QuotedStr($Docheader->wh) . ",";
        $batch_query .= " [PaymentDate]=N" . QuotedStr($Docheader->paymentdate) . ",";
        $batch_query .= " [Details]=N" . QuotedStr($Docheader->details) . ",";
        $batch_query .= " [Notes]=N" . QuotedStr($Docheader->notes) . ",";
        $batch_query .= " [DeliveryMethod]=N" . QuotedStr($Docheader->deliverymethod) . ",";
        $batch_query .= " [DeliveryDate]=N" . QuotedStr($Docheader->deliverydate) . ",";
        $batch_query .= " [Dispatch]=N" . QuotedStr($Docheader->dispatch) . ",";
        $batch_query .= " [Cash]=" . QuotedStr($Docheader->cash) . ",";
        $batch_query .= " [Cheques]=" . QuotedStr($Docheader->cheques) . ",";
        $batch_query .= " [CreditCards]=" . QuotedStr($Docheader->creditcards) . ",";
        $batch_query .= " [Vouchers]=" . QuotedStr($Docheader->vouchers) . ",";
        $batch_query .= " [Transfers]=" . QuotedStr($Docheader->transfers) . ",";
        $batch_query .= " [TenderAmount1]=" . QuotedStr($Docheader->tenderamount1) . ",";
        $batch_query .= " [TenderAmount2]=" . QuotedStr($Docheader->tenderamount2) . ",";
        $batch_query .= " [TenderAmount3]=" . QuotedStr($Docheader->tenderamount3) . ",";
        $batch_query .= " [TenderAmount4]=" . QuotedStr($Docheader->tenderamount4) . ",";
        $batch_query .= " [Tendered]=" . QuotedStr($Docheader->tendered) . ",";
        $batch_query .= " [TenderChange]=" . QuotedStr($Docheader->tenderchange) . ",";
        $batch_query .= " [RoundingDown]=" . QuotedStr($Docheader->roundingdown) . ",";
        $batch_query .= " [RoundingUp]=" . QuotedStr($Docheader->roundingup) . ",";
        $batch_query .= " [DTODate]=N" . QuotedStr($Docheader->dtodate) . ",";
        $batch_query .= " [DTOTime]=" . QuotedStr($Docheader->dtotime) . ",";
        $batch_query .= " [DTOUser]=N" . QuotedStr($Docheader->dtouser) . ",";
        $batch_query .= " [DTOMacID]=N" . QuotedStr($Docheader->dtomacid) . ",";
        $batch_query .= " [CashUpnumber]=" . QuotedStr($Docheader->cashupnumber) . ",";
        $batch_query .= " [CashUpdate]=N" . QuotedStr($Docheader->cashupdate) . ",";
        $batch_query .= " [CashUptime]=N" . QuotedStr($Docheader->cashuptime) . ",";
        $batch_query .= " [UField1]=N" . QuotedStr($Docheader->ufield1) . ",";
        $batch_query .= " [UField2]=N" . QuotedStr($Docheader->ufield2) . ",";
        $batch_query .= " [UField3]=N" . QuotedStr($Docheader->ufield3) . ",";
        $batch_query .= " [UField4]=N" . QuotedStr($Docheader->ufield4) . ",";
        $batch_query .= " [UnAllocated]=N" . QuotedStr($Docheader->unallocated) . ",";
        $batch_query .= " [ReturnInvoice]=N" . QuotedStr($Docheader->returninvoice) . ",";
        $batch_query .= " [Deposit]=" . QuotedStr($Docheader->deposit) . ",";
        $batch_query .= " [Paid]=" . QuotedStr($Docheader->paid) . ",";
        $batch_query .= " [Balance]=" . QuotedStr($Docheader->balance) . ",";
        $batch_query .= " [RefInv]=N" . QuotedStr($Docheader->refinv) . ",";
        $batch_query .= " [OrderBy]=N" . QuotedStr($Docheader->orderby) . ",";
        $batch_query .= " [PurchaseOrder]=N" . QuotedStr($Docheader->purchaseorder) . ",";
        $batch_query .= " [TermDays]=" . QuotedStr($Docheader->termdays) . ",";
        $batch_query .= " [Status]=N" . QuotedStr($Docheader->status) . ",";
        $batch_query .= " [PrintCount]=" . QuotedStr($Docheader->printcount) . ",";
        $batch_query .= " [SBO_TimeStamp]=N" . QuotedStr($Docheader->sbo_timestamp) . ",";
        $batch_query .= " [DeliveryAddress1]=N" . QuotedStr($Docheader->deliveryaddress1) . ",";
        $batch_query .= " [DeliveryAddress2]=N" . QuotedStr($Docheader->deliveryaddress2) . ",";
        $batch_query .= " [DeliveryAddress3]=N" . QuotedStr($Docheader->deliveryaddress3) . ",";
        $batch_query .= " [DeliveryAddress4]=N" . QuotedStr($Docheader->deliveryaddress4) . ",";
        $batch_query .= " [EODDate]=N" . QuotedStr($Docheader->eodate) . ",";
        $batch_query .= " [Supervisor]=N" . QuotedStr($Docheader->supervisor) . ",";
        $batch_query .= " [SAPDocNo]=N" . QuotedStr($Docheader->sapdocno) . ",";
        $batch_query .= " [ServerStatus]=N" . QuotedStr($Docheader->serverstatus) . ",";
        $batch_query .= " [ServerDate]=N" . QuotedStr($Docheader->serverdate) . ",";
        $batch_query .= " [ServerTime]=N" . QuotedStr($Docheader->servertime) . ",";
        $batch_query .= " [DCurr]=" . QuotedStr($Docheader->dcurr) . ",";
        $batch_query .= " [D030]=" . QuotedStr($Docheader->d030) . ",";
        $batch_query .= " [D060]=" . QuotedStr($Docheader->d060) . ",";
        $batch_query .= " [D090]=" . QuotedStr($Docheader->d090) . ",";
        $batch_query .= " [D120]=" . QuotedStr($Docheader->d120) . ",";
        $batch_query .= " [D150]=" . QuotedStr($Docheader->d150) . ",";
        $batch_query .= " [D180]=" . QuotedStr($Docheader->d180) . ",";
        $batch_query .= " [DOver]=" . QuotedStr($Docheader->dover) . ",";
        $batch_query .= " [TotalLineDisc]=" . QuotedStr($Docheader->totallinedisc) . ",";
        $batch_query .= " [TotalRebAmnt]=" . QuotedStr($Docheader->totalrebamnt) . ",";
        $batch_query .= " [Weight]=" . QuotedStr($Docheader->weight) . ",";
        $batch_query .= " [Cases]=" . QuotedStr($Docheader->cases) . ",";
        $batch_query .= " [Pallets]=" . QuotedStr($Docheader->pallets) . ",";
        $batch_query .= " [Dimensions]=" . QuotedStr($Docheader->dimensions) . ",";
        $batch_query .= " [DrCr]=N" . QuotedStr($Docheader->drcr) . ",";
        $batch_query .= " [DetailLines]=" . QuotedStr($Docheader->detaillines) . ",";
        $batch_query .= " [TotalDiscount]=" . QuotedStr($Docheader->totaldiscount) . ",";
        $batch_query .= " [FinalTotal]=" . QuotedStr($Docheader->finaltotal) . ",";
        $batch_query .= " [ManProfit]=" . QuotedStr($Docheader->manprofit) . ",";
        $batch_query .= " [ManDiscount]=" . QuotedStr($Docheader->mandiscount) . ",";
        $batch_query .= " [ManVAT]=" . QuotedStr($Docheader->manvat) . ",";
        $batch_query .= " [ManTotal]=" . QuotedStr($Docheader->mantotal) . ",";
        $batch_query .= " [Version]=" . QuotedStr($Docheader->version) . ",";
        $batch_query .= " [ScanUser]=N" . QuotedStr($Docheader->scanuser) . ",";
        $batch_query .= " [ScanDate]=N" . QuotedStr($Docheader->scandate) . ",";
        $batch_query .= " [ScanTime]=N" . QuotedStr($Docheader->scantime) . ",";
        $batch_query .= " [SourceBranch]=N" . QuotedStr($Docheader->sourcebranch) . ",";
        $batch_query .= " [InUse]=N" . QuotedStr($Docheader->inuse) . ",";
        $batch_query .= " [CellPhone]=N" . QuotedStr($Docheader->cellphone) . ",";
        $batch_query .= " [DocDiscVAT]=" . QuotedStr($Docheader->docdiscvat) . ",";
        $batch_query .= " [DropSafe]=" . QuotedStr($Docheader->dropsafe) . ",";
        $batch_query .= " [DispatchBranch]=N" . QuotedStr($Docheader->dispatchbranch) . ",";
        $batch_query .= " [OnlineAccount]=N" . QuotedStr($Docheader->onlineaccount) . ",";
        $batch_query .= " [Wallets]=" . QuotedStr($Docheader->wallets) . " ";
        $batch_query .= " WHERE  [CO]=" . QuotedStr($Docheader->co) . " AND [Branch]=" . QuotedStr($Docheader->branch) . " AND [TxTp]=" . QuotedStr($Docheader->txtp) . " AND [DocNo]=" . QuotedStr($Docheader->docno) . " AND [Account]=" . QuotedStr($Docheader->account) . "  ;";

        //endregion

        return $batch_query;
    }

    public function DOCDetails_Creation($det, $gHUnAllocated, $gHReturnInvoice, $gHReturnTxTp)
    {

        if ($det->txtp === "POSASL" || $det->txtp === "POSCSH") {
            $det->qtyinvoice = $det->quantity;
            $det->qtyreturned = 0;
            $det->qtybalance = $det->quantity;
        }
        $batch_query = "";

        if ($det->txtp === "POSART" || $det->txtp === "POSCSR") {
            if (($gHUnAllocated !== "Y") && !empty($gHReturnInvoice)) {
                $batch_query .= "UPDATE DOCDetails SET ";
                $batch_query .= "QTYReturned = QTYReturned + " . QuotedStr($det->quantity) . ", ";
                $batch_query .= "QTYBalance  = QTYBalance - " . QuotedStr($det->quantity) . " ";
                $batch_query .= " WHERE CO = " . QuotedStr($det->co) . " ";
                $batch_query .= " AND Branch = " . QuotedStr($det->branch) . " ";
                $batch_query .= " AND TxTp = " . QuotedStr($gHReturnTxTp) . " ";
                $batch_query .= " AND DocNo = " . QuotedStr($gHReturnInvoice) . " ";
                $batch_query .= " AND StockCode = " . QuotedStr($det->stockcode) . " ";
                $batch_query .= " AND LinkCode = " . QuotedStr($det->linkcode) . " ";
                $batch_query .= ";";
            }

        }


        $batch_query .= 'INSERT INTO DOCDetails ( ';
        $batch_query .= '[CO], [Branch], [TxTp], [Tillno], [DocNo], [Account], [TranDate], [LineNo],  ';
        $batch_query .= '[StockCode], [LinkCode], [Description1], [Description2], [Quantity], [Price],  ';
        $batch_query .= '[PriceExcl], [PriceIncl], [DiscountType], [DiscountValue], [LineDiscount], [LineVAT],  ';
        $batch_query .= '[LineTotal], [LineTotalExcl], [LineTotalIncl], [LinkQty], [VATCode], [VATRate],  ';
        $batch_query .= '[VATIndicator], [CostExcl], [CostIncl], [TotalCostExcl], [TotalCostIncl], [Profit],  ';
        $batch_query .= '[Wh], [Salesrep], [Dept], [Subdept], [Units], [Weight], [StockType], [AP], [Text1],  ';
        $batch_query .= '[Text2], [PriceCode], [Promotion], [PromotionType], [PromotionCode], [AuthoriseCode],  ';
        $batch_query .= '[PackSize], [Serialtrack], [Serialcount], [OldPrice], [Sqmbox], [TileSize],  ';
        $batch_query .= '[Tilegrade], [Noofbox], [Cases], [Palettes], [DispatchQty], [DispatchReturns],  ';
        $batch_query .= '[DispatchBalance], [Status], [BaseType], [Baseref], [Baseline], [RebAmnt], [Freelineind],  ';
        $batch_query .= '[CreditnoteReason], [BarCode], [EodDate], [Supervisor], [SapDocNo], [Qtyinvoice],  ';
        $batch_query .= '[QtyReturned], [QtyBalance], [Basedocamnt], [Basedocbal], [Basepayamnt], [Basepaydisc],  ';
        $batch_query .= '[Dimensions], [DrCr], [TotalDiscount], [FinalTotal], [ManProfit], [ManDiscount],  ';
        $batch_query .= '[ManVAT], [ManTotal], [Onhand], [Avgweeksale], [AvgCostExcl], [AvgCostIncl],  ';
        $batch_query .= '[Supervisor2], [Rebavgamnt], [Variant], [SourceBranch], [BasePrice], [BasePriceCode],  ';
        $batch_query .= '[Pricechange], [Salegroup], [ManQty], [ManPrice], [DispatchBranch], [Dispatchbox],  ';
        $batch_query .= '[SplitCode], [SplitQty], [SplitUnits], [SplitPriceExcl], [SplitPriceIncl], [Loyaltypnts],  ';
        $batch_query .= '[PickQty], [Pickbox]   ';
        $batch_query .= ' ) VALUES ( ';
        $batch_query .= QuotedStr($det->co) . ',';//{CO (nvarchar[5]) }
        $batch_query .= QuotedStr($det->branch) . ','; //{Branch (nvarchar[5]) }
        $batch_query .= QuotedStr($det->txtp) . ','; //{TxTp (nvarchar[6]) }
        $batch_query .= QuotedStr($det->tillno) . ',';//{Tillno (nvarchar[5]) }
        $batch_query .= QuotedStr($det->docno) . ','; //{DocNo (nvarchar[15]) }
        $batch_query .= QuotedStr($det->account) . ',';//{Account (nvarchar[20]) }
        $batch_query .= QuotedStr($det->trandate) . ','; //{TranDate (nvarchar[10]) }
        $batch_query .= QuotedStr($det->lineno) . ',';//{LineNo (int) }
        $batch_query .= QuotedStr($det->stockcode) . ','; //{StockCode (nvarchar[25]) }
        $batch_query .= QuotedStr($det->linkcode) . ',';//{LinkCode (nvarchar[25]) }
        $batch_query .= QuotedStr($det->description1) . ',';//{Description1 (nvarchar[50]) }
        $batch_query .= QuotedStr($det->description2) . ',';//{Description2 (nvarchar[50]) }
        $batch_query .= QuotedStr($det->quantity) . ',';//{Quantity (float) }
        $batch_query .= QuotedStr($det->price) . ',';//{Price (float) }
        $batch_query .= QuotedStr($det->priceexcl) . ',';//{PriceExcl (float) }
        $batch_query .= QuotedStr($det->priceincl) . ','; //{PriceIncl (float) }
        $batch_query .= QuotedStr($det->discounttype) . ',';//{DiscountType (nvarchar[1]) }
        $batch_query .= QuotedStr($det->discountvalue) . ','; //{DiscountValue (float) }
        $batch_query .= QuotedStr($det->linediscount) . ','; //{LineDiscount (float) }
        $batch_query .= QuotedStr($det->linevat) . ','; //{LineVAT (float) }
        $batch_query .= QuotedStr($det->linetotal) . ','; //{LineTotal (float) }
        $batch_query .= QuotedStr($det->linetotalexcl) . ','; //{LineTotalExcl (float) }
        $batch_query .= QuotedStr($det->linetotalincl) . ','; //{LineTotalIncl (float) }
        $batch_query .= QuotedStr($det->linkqty) . ','; //{LinkQty (float) }
        $batch_query .= QuotedStr($det->vatcode) . ','; //{VATCode (nvarchar[2]) }
        $batch_query .= QuotedStr($det->vatrate) . ',';//{VATRate (float) }
        $batch_query .= QuotedStr($det->vatindicator) . ','; //{VATIndicator (nvarchar[1]) }
        $batch_query .= QuotedStr($det->costexcl) . ','; //{CostExcl (float) }
        $batch_query .= QuotedStr($det->costincl) . ','; //{CostIncl (float) }
        $batch_query .= QuotedStr($det->totalcostexcl) . ','; //{TotalCostExcl (float) }
        $batch_query .= QuotedStr($det->totalcostincl) . ','; // {TotalCostIncl (float) }
        $batch_query .= QuotedStr($det->profit) . ','; //{Profit (float) }
        $batch_query .= QuotedStr($det->wh) . ','; //{Wh (nvarchar[5]) }
        $batch_query .= QuotedStr($det->salesrep) . ','; //{Salesrep (nvarchar[10]) }
        $batch_query .= QuotedStr($det->dept) . ',';// {Dept (nvarchar[10]) }
        $batch_query .= QuotedStr($det->subdept) . ','; // {Subdept (nvarchar[10]) }
        $batch_query .= QuotedStr($det->units) . ','; //{Units (int) }
        $batch_query .= QuotedStr($det->weight) . ','; //{Weight (float) }
        $batch_query .= QuotedStr($det->stocktype) . ',';  //{StockType (nvarchar[1]) }
        $batch_query .= QuotedStr($det->ap) . ','; //{AP (int) }
        $batch_query .= QuotedStr($det->text1) . ',';  //{Text1 (nvarchar[40]) }
        $batch_query .= QuotedStr($det->text2) . ',';  //{Text2 (nvarchar[40]) }
        $batch_query .= QuotedStr($det->pricecode) . ',';  //{PriceCode (nvarchar[5]) }
        $batch_query .= QuotedStr($det->promotion) . ','; //{Promotion (nvarchar[1]) }
        $batch_query .= QuotedStr($det->promotiontype) . ','; //{PromotionType (nvarchar[1]) }
        $batch_query .= QuotedStr($det->promotioncode) . ','; //{PromotionCode (nvarchar[5]) }
        $batch_query .= QuotedStr($det->authorisecode) . ','; //{AuthoriseCode (nvarchar[10]) }
        $batch_query .= QuotedStr($det->packsize) . ','; // {PackSize (nvarchar[10]) }
        $batch_query .= QuotedStr($det->serialtrack) . ','; //{Serialtrack (nvarchar[1]) }
        $batch_query .= QuotedStr($det->serialcount) . ','; // {Serialcount (int) }
        $batch_query .= QuotedStr($det->oldprice) . ','; //OldPrice (float) }
        $batch_query .= QuotedStr($det->sqmbox) . ',';//{Sqmbox (float) }
        $batch_query .= QuotedStr($det->tilesize) . ',';//{TileSize (nvarchar[20]) }
        $batch_query .= QuotedStr($det->tilegrade) . ',';  //{Tilegrade (nvarchar[20]) }
        $batch_query .= QuotedStr($det->noofbox) . ',';//{Noofbox (int) }
        $batch_query .= QuotedStr($det->cases) . ',';  // {Cases (float) }
        $batch_query .= QuotedStr($det->palettes) . ','; // {Palettes (float) }
        $batch_query .= QuotedStr($det->dispatchqty) . ','; //{DispatchQty (float) }
        $batch_query .= QuotedStr($det->dispatchreturns) . ',';   //{DispatchReturns (float) }
        $batch_query .= QuotedStr($det->dispatchbalance) . ','; //{DispatchBalance (float) }
        $batch_query .= QuotedStr($det->status) . ','; //  {Status (nvarchar[1]) }
        $batch_query .= QuotedStr($det->basetype) . ',';  //{BaseType (nvarchar[6]) }
        $batch_query .= QuotedStr($det->baseref) . ','; //{Baseref (nvarchar[20]) }
        $batch_query .= QuotedStr($det->baseline) . ','; // {Baseline (int) }
        $batch_query .= QuotedStr($det->rebamnt) . ','; //{RebAmnt (float) }
        $batch_query .= QuotedStr($det->freelineind) . ','; // {Freelineind (nvarchar[1]) }
        $batch_query .= QuotedStr($det->creditnotereason) . ','; //{CreditnoteReason (nvarchar[50]) }
        $batch_query .= QuotedStr($det->barcode) . ',';  // {BarCode (nvarchar[25]) }
        $batch_query .= QuotedStr($det->eoddate) . ','; //{EodDate (nvarchar[10]) }
        $batch_query .= QuotedStr($det->supervisor) . ',';  //{Supervisor (nvarchar[10]) }
        $batch_query .= QuotedStr($det->sapdocno) . ',';  //{SapDocNo (nvarchar[20]) }
        $batch_query .= QuotedStr($det->qtyinvoice) . ',';//{Qtyinvoice (float) }
        $batch_query .= QuotedStr($det->qtyreturned) . ','; //  {QtyReturned (float) }
        $batch_query .= QuotedStr($det->qtybalance) . ','; // {QtyBalance (float) }
        $batch_query .= QuotedStr($det->basedocamnt) . ','; // {Basedocamnt (float) }
        $batch_query .= QuotedStr($det->basedocbal) . ',';  //{Basedocbal (float) }
        $batch_query .= QuotedStr($det->basepayamnt) . ','; //  {Basepayamnt (float) }
        $batch_query .= QuotedStr($det->basepaydisc) . ','; // {Basepaydisc (float) }
        $batch_query .= QuotedStr($det->dimensions) . ',';  //  {Dimensions (float) }
        $batch_query .= QuotedStr($det->drcr) . ',';  // {DrCr (nvarchar[1]) }
        $batch_query .= QuotedStr($det->totaldiscount) . ',';  //{TotalDiscount (float) }
        $batch_query .= QuotedStr($det->finaltotal) . ',';//{FinalTotal (float) }
        $batch_query .= QuotedStr($det->manprofit) . ',';  //{ManProfit (float) }
        $batch_query .= QuotedStr($det->mandiscount) . ','; // {ManDiscount (float) }
        $batch_query .= QuotedStr($det->manvat) . ','; //{ManVAT (float) }
        $batch_query .= QuotedStr($det->mantotal) . ','; // {ManTotal (float) }
        $batch_query .= QuotedStr($det->onhand) . ',';  // {Onhand (float) }
        $batch_query .= QuotedStr($det->avgweeksale) . ',';   //   {Avgweeksale (float) }
        $batch_query .= QuotedStr($det->avgcostexcl) . ',';  //  {AvgCostExcl (float) }
        $batch_query .= QuotedStr($det->avgcostincl) . ',';  //  {AvgCostIncl (float) }
        $batch_query .= QuotedStr($det->supervisor2) . ',';   // {Supervisor2 (nvarchar[10]) }
        $batch_query .= QuotedStr($det->rebavgamnt) . ','; //{Rebavgamnt (float) }
        $batch_query .= QuotedStr($det->variant) . ',';  // {Variant (nvarchar[10]) }
        $batch_query .= QuotedStr($det->sourcebranch) . ','; // {SourceBranch (nvarchar[5]) }
        $batch_query .= QuotedStr($det->baseprice) . ',';// {BasePrice (float) }
        $batch_query .= QuotedStr($det->basepricecode) . ','; // {BasePriceCode (nvarchar[5]) }
        $batch_query .= QuotedStr($det->pricechange) . ',';//  {Pricechange (nvarchar[1]) }
        $batch_query .= QuotedStr($det->salegroup) . ',';  //{Salegroup (nvarchar[1]) }
        $batch_query .= QuotedStr($det->manqty) . ',';  // {ManQty (float) }
        $batch_query .= QuotedStr($det->manprice) . ',';  //{ManPrice (float) }
        $batch_query .= QuotedStr($det->dispatchbranch) . ',';  // {DispatchBranch (nvarchar[5]) }
        $batch_query .= QuotedStr($det->dispatchbox) . ',';  //{Dispatchbox (int) }
        $batch_query .= QuotedStr($det->splitcode) . ',';  // {SplitCode (int) }
        $batch_query .= QuotedStr($det->splitqty) . ',';  // {SplitQty (int) }
        $batch_query .= QuotedStr($det->splitunits) . ',';    // {SplitUnits (int) }
        $batch_query .= QuotedStr($det->splitpriceexcl) . ',';   // {SplitPriceExcl (float) }
        $batch_query .= QuotedStr($det->splitpriceincl) . ',';     //{SplitPriceIncl (float) }
        $batch_query .= QuotedStr($det->loyaltypnts) . ',';    //{Loyaltypnts (int) }
        $batch_query .= QuotedStr($det->pickqty) . ',';  //  {PickQty (float) }
        $batch_query .= QuotedStr($det->pickbox) . ') ;';   // {Pickbox (int) }

        return $batch_query;
    }

    public function DOCPayments_Creation($det)
    {

        $batch_query = "INSERT INTO [DOCPayments] ([CO], [Branch], [TxTp], [TillNo], [DocNo], [PayCode], [LineNo], [CheqNo], [CheqDate], [CheqAccNo], [CheqName], [CheqBank], [CardNo], [CardType], [CardExpDate], [CardCVC], [CardName], [CardBudget], [Phone], [IDNo], [Amount], [AuthCode], [BatchNo], [Supervisor], [Status], [VoucherType], [VoucherNo], [VoucherBranch], [VoucherExpDate], [VouchDate], [VouchName], [VouchAmount], [CashUpNumber], [CashUpDate], [CashUpTime], [TranDate], [Account], [SourceBranch], [CCTerminalID], [CCSessionID], [CCAcceptorID], [CCAuthID], [CCRRN], [CCTxanID], [CCMerchantID], [CCMerchantRef], [CCUUID], [CCPOSEntry], [CCPinStatement], [CCEMVAppLabel], [CCEMVAID], [CCEMVTVR], [CCEMVTSI], [CCEMVTC]) " .
            "VALUES ( " .
            " " . QuotedStr($det->co) . "," .//CO
            QuotedStr($det->branch) . "," .//BRANCH
            QuotedStr($det->txtp) . "," .//TXTP
            QuotedStr($det->tillno) . "," .//TILLNO
            QuotedStr($det->docno) . "," .//DOCNO
            QuotedStr($det->paycode) . "," .//PAYCODE
            QuotedStr($det->lineno) . "," .//LINENO
            QuotedStr($det->cheqno) . "," .//CHEQNO
            QuotedStr($det->cheqdate) . "," .//CHEQDATE
            QuotedStr($det->cheqaccno) . "," .//CHEQACCNO
            QuotedStr($det->cheqname) . "," .//CHEQNAME
            QuotedStr($det->cheqbank) . "," .//CHEQBANK
            QuotedStr($det->cardno) . "," .//CARDNO
            QuotedStr($det->cardtype) . "," .//CARDTYPE
            QuotedStr($det->cardexpdate) . "," .//CARDEXPDATE
            QuotedStr($det->cardcvc) . "," .//CARDCVC
            QuotedStr($det->cardname) . "," .//CARDNAME
            QuotedStr($det->cardbudget) . "," .//CARDBUDGET
            QuotedStr($det->phone) . "," .//PHONE
            QuotedStr($det->idno) . "," .//IDNO
            QuotedStr($det->amount) . "," .//AMOUNT
            QuotedStr($det->authcode) . "," .//AUTHCODE
            QuotedStr($det->batchno) . "," .//BATCHNO
            QuotedStr($det->supervisor) . "," .//SUPERVISOR
            QuotedStr($det->status) . "," .//STATUS
            QuotedStr($det->vouchertype) . "," .//VOUCHERTYPE
            QuotedStr($det->voucherno) . "," .//VOUCHERNO
            QuotedStr($det->voucherbranch) . "," .//VOUCHERBRANCH
            QuotedStr($det->voucherexpdate) . "," .//VOUCHEREXPDATE
            QuotedStr($det->vouchdate) . "," .//VOUCHDATE
            QuotedStr($det->vouchname) . "," .//VOUCHNAME
            QuotedStr($det->vouchamount) . "," .//VOUCHAMOUNT
            QuotedStr($det->cashupnumber) . "," .//CASHUPNUMBER
            QuotedStr($det->cashupdate) . "," .//CASHUPDATE
            QuotedStr($det->cashuptime) . "," .//CASHUPTIME
            QuotedStr($det->trandate) . "," .//TRANDATE
            QuotedStr($det->account) . "," .//ACCOUNT
            QuotedStr($det->sourcebranch) . "," .//SOURCEBRANCH
            QuotedStr($det->ccterminalid) . "," .//CCTerminalID
            QuotedStr($det->ccsessionid) . "," .//CCSessionID
            QuotedStr($det->ccacceptorid) . "," .//CCAcceptorID
            QuotedStr($det->ccauthid) . "," .//CCAuthID
            QuotedStr($det->ccrrn) . "," .//CCRRN
            QuotedStr($det->cctxanid) . "," .//CCTxanID
            QuotedStr($det->ccmerchantid) . "," .//CCMerchantID
            QuotedStr($det->ccmerchantref) . "," .//CCMerchantRef
            QuotedStr($det->ccuuid) . "," .//CCUUID
            QuotedStr($det->ccposentry) . "," .//CCPOSEntry
            QuotedStr($det->ccpinstatement) . "," .//CCPinStatement
            QuotedStr($det->ccemvapplabel) . "," .//CCEMVAppLabel
            QuotedStr($det->ccemvaid) . "," .//CCEMVAID
            QuotedStr($det->ccemvtvr) . "," .//CCEMVTVR
            QuotedStr($det->ccemvtsi) . "," .//CCEMVTSI
            QuotedStr($det->ccemvtc) . " " .//CCEMVTC
            "); ";

        return $batch_query;
    }

    public function Svrtrig_Creation($det)
    {
        $batch_query = "INSERT INTO [SVRTrig] (" .
            " [Status], [CO], [Branch], [TxTp], [StockCode], [LinkCode], [Description1], [PriceCode], " .
            "[Account], [SubAccount], [DocNo], [Text1], [Text2], [Text3], [CreateDate], [CreateTime],  " .
            " [CreateUser], [CreateMacID], [ProcessDate], [ProcessTime], [ProcessUser], [ProcessMacID], " .
            " [ReturnMsg], [SAPRetnCode], [SAPRetnMsg], [SAPKey] " .
            "  " .
            ") " .
            "VALUES ( " .
            " " . QuotedStr($det->status) . "," .//Status
            " " . QuotedStr($det->co) . "," .//CO
            " " . QuotedStr($det->branch) . "," .//Branch
            " " . QuotedStr($det->txtp) . "," .//TxTp
            " " . QuotedStr($det->stockcode) . "," .//StockCode
            " " . QuotedStr($det->linkcode) . "," .//LinkCode
            " " . QuotedStr($det->description1) . "," .//Description1
            " " . QuotedStr($det->pricecode) . "," .//PriceCode
            " " . QuotedStr($det->account) . "," .//Account
            " " . QuotedStr($det->subaccount) . "," .//SubAccount
            " " . QuotedStr($det->docno) . "," .//DocNo
            " " . QuotedStr($det->text1) . "," .//Text1
            " " . QuotedStr($det->text2) . "," .//Text2
            " " . QuotedStr($det->text3) . "," .//Text3
            " " . QuotedStr($det->createdate) . "," .//CreateDate
            " " . QuotedStr($det->createtime) . "," .//CreateTime
            " " . QuotedStr($det->createuser) . "," .//CreateUser
            " " . QuotedStr($det->createmacid) . "," .//CreateMacID
            " " . QuotedStr($det->processdate) . "," .//ProcessDate
            " " . QuotedStr($det->processtime) . "," .//ProcessTime
            " " . QuotedStr($det->processuser) . "," .//ProcessUser
            " " . QuotedStr($det->processmacid) . "," .//ProcessMacID
            " " . QuotedStr($det->returnmsg) . "," .//ReturnMsg
            " " . QuotedStr($det->sapretncode) . "," .//SAPRetnCode
            " " . QuotedStr($det->sapretnmsg) . "," .//SAPRetnMsg
            " " . QuotedStr($det->sapkey) . " " .//SAPKey
            "); ";
        return $batch_query;
    }

    public function GLGAccTxans_Creation($det)
    {

        $batch_query = "INSERT INTO GLGAccTxans (" .
            "[CO], [GLAccNo], [GlsubAccNo], [Gltrace], [AP], [TranDate], [TxTp], [Details],  " .
            " [Debit], [Credit], [Amount], [DrCr], [SourceBranch], [Remarks], [Account], [DocNo],  " .
            " [Ref1], [Ref2], [Ref3], [DTODate], [DTOTime], [DTOUser], [DTOMacID], [DocTxTp],  " .
            " [Costcenter], [Reversal], [Recon], [ReconDate], [PostingDate], [VATCode]    " .
            ") " .
            "VALUES ( " .
            QuotedStr($det->co) . "," .//CO
            QuotedStr($det->glaccno) . "," .//GLAccNo
            QuotedStr($det->glsubaccno) . "," .//GLSubAccNo
            QuotedStr($det->gltrace) . "," .//GLTrace
            QuotedStr($det->ap) . "," .//AP
            QuotedStr($det->trandate) . "," .//TranDate
            QuotedStr($det->txtp) . "," .//TxTp
            QuotedStr($det->details) . "," .//Details
            QuotedStr($det->debit) . "," .//Debit
            QuotedStr($det->credit) . "," .//Credit
            QuotedStr($det->amount) . "," .//Amount
            QuotedStr($det->drcr) . "," .//DrCr
            QuotedStr($det->sourcebranch) . "," .//SourceBranch
            QuotedStr($det->remarks) . "," .//Remarks
            QuotedStr($det->account) . "," .//Account
            QuotedStr($det->docno) . "," .//DocNo
            QuotedStr($det->ref1) . "," .//Ref1
            QuotedStr($det->ref2) . "," .//Ref2
            QuotedStr($det->ref3) . "," .//Ref3
            QuotedStr($det->dtodate) . "," .//DTODate
            QuotedStr($det->dtotime) . "," .//DTOTime
            QuotedStr($det->dtouser) . "," .//DTOUser
            QuotedStr($det->dtomacid) . "," .//DTOMacID
            QuotedStr($det->doctxtp) . "," .//DocTxTp
            QuotedStr($det->costcenter) . "," .//CostCenter
            QuotedStr($det->reversal) . "," .//Reversal
            QuotedStr($det->recon) . "," .//Recon
            QuotedStr($det->recondate) . "," .//ReconDate
            QuotedStr($det->postingdate) . "," .//PostingDate
            QuotedStr($det->vatcode) . " " .//VATCode
            ") ;";

        return $batch_query;
    }

    public function DEBTxan_Creation($det)
    {
        $batch_query = "";
        if ($det->txtp !== ("DEBSOR") && $det->txtp !== ("DEBQOT")
            && $det->txtp !== ("DEBAPI") && $det->txtp !== ("DEBAPC")) {

            $batch_query .= "INSERT INTO [DEBTxan] (";
            $batch_query .= " [CO], [Branch], [DebtorType], [Account], [SubAccount], [SourceBranch], [TxNo],";
            $batch_query .= " [TranDate], [AP], [DocType], [DocNo], [Reference], [TxTp], [Details], [Amount],  ";
            $batch_query .= "  [DrCr], [VATAmount], [VATRate], [VATCode], [Balance], [DCurr], [D030], [D060],  ";
            $batch_query .= " [D090], [D120], [D150], [D180], [Dover], [DTODate], [DTOTime], [DTOUser], [DTOMacID], ";
            $batch_query .= " [BasedocType], [BaseDocNo], [BasedocDate], [Discount], [DiscVATRate], [DiscVATAmount],  ";
            $batch_query .= " [TermCode], [PaymentDue], [PaymentMethod], [PaymentRef], [PaidAmount], [PaymentStatus], ";
            $batch_query .= "  [PreviousPost], [GLTrace], [TargetDocType], [TargetDocNo], [PaymentDate], [Notepad], ";
            $batch_query .= " [PaymentBank], [GLAccNo], [PostingDate], [ProductionDate], [ReasonCode], [DealRangeDays] ";
            $batch_query .= " ) ";

            //Values
            $batch_query .= "VALUES ( ";
            $batch_query .= QuotedStr($det->co) . ",";//CO
            $batch_query .= QuotedStr($det->branch) . ",";//Branch
            $batch_query .= QuotedStr($det->debtortype) . ",";//DebtorType
            $batch_query .= QuotedStr($det->account) . ",";//Account
            $batch_query .= QuotedStr($det->subaccount) . ",";//SubAccount
            $batch_query .= QuotedStr($det->sourcebranch) . ",";//SourceBranch
            $batch_query .= QuotedStr($det->txno) . ",";//TxNo
            $batch_query .= QuotedStr($det->trandate) . ",";//TranDate
            $batch_query .= QuotedStr($det->ap) . ",";//AP
            $batch_query .= QuotedStr($det->doctype) . ",";//DocType
            $batch_query .= QuotedStr($det->docno) . ",";//DocNo
            $batch_query .= QuotedStr($det->reference) . ",";//Reference
            $batch_query .= QuotedStr($det->txtp) . ",";//TxTp
            $batch_query .= QuotedStr($det->details) . ",";//Details
            $batch_query .= QuotedStr($det->amount) . ",";//Amount
            $batch_query .= QuotedStr($det->drcr) . ",";//DrCr
            $batch_query .= QuotedStr($det->vatamount) . ",";//VATAmount
            $batch_query .= QuotedStr($det->vatrate) . ",";//VATRate
            $batch_query .= QuotedStr($det->vatcode) . ",";//VATCode
            $batch_query .= QuotedStr($det->balance) . ",";//Balance
            $batch_query .= QuotedStr($det->dcurr) . ",";//DCurr
            $batch_query .= QuotedStr($det->d030) . ",";//D030
            $batch_query .= QuotedStr($det->d060) . ",";//D060
            $batch_query .= QuotedStr($det->d090) . ",";//D090
            $batch_query .= QuotedStr($det->d120) . ",";//D120
            $batch_query .= QuotedStr($det->d150) . ",";//D150
            $batch_query .= QuotedStr($det->d180) . ",";//D180
            $batch_query .= QuotedStr($det->dover) . ",";//DOver
            $batch_query .= QuotedStr($det->dtodate) . ",";//DTODate
            $batch_query .= QuotedStr($det->dtotime) . ",";//DTOTime
            $batch_query .= QuotedStr($det->dtouser) . ",";//DTOUser
            $batch_query .= QuotedStr($det->dtomacid) . ",";//DTOMacID
            $batch_query .= QuotedStr($det->basedoctype) . ",";//BaseDocType
            $batch_query .= QuotedStr($det->basedocno) . ",";//BaseDocNo
            $batch_query .= QuotedStr($det->basedocdate) . ",";//BaseDocDate
            $batch_query .= QuotedStr($det->discount) . ",";//Discount
            $batch_query .= QuotedStr($det->discvatrate) . ",";//DiscVATRate
            $batch_query .= QuotedStr($det->discvatamount) . ",";//DiscVATAmount
            $batch_query .= QuotedStr($det->termcode) . ",";//TermCode
            $batch_query .= QuotedStr($det->paymentdue) . ",";//PaymentDue
            $batch_query .= QuotedStr($det->paymentmethod) . ",";//PaymentMethod
            $batch_query .= QuotedStr($det->paymentref) . ",";//PaymentRef
            $batch_query .= QuotedStr($det->paidamount) . ",";//PaidAmount
            $batch_query .= QuotedStr($det->paymentstatus) . ",";//PaymentStatus
            $batch_query .= QuotedStr($det->previouspost) . ",";//Previouspost
            $batch_query .= QuotedStr($det->gltrace) . ",";//Gltrace
            $batch_query .= QuotedStr($det->targetdoctype) . ",";//TargetdocType
            $batch_query .= QuotedStr($det->targetdocno) . ",";//TargetDocNo
            $batch_query .= QuotedStr($det->paymentdate) . ",";//PaymentDate
            $batch_query .= QuotedStr($det->notepad) . ",";//Notepad
            $batch_query .= QuotedStr($det->paymentbank) . ",";//PaymentBank
            $batch_query .= QuotedStr($det->glaccno) . ",";//GLAccNo
            $batch_query .= QuotedStr($det->postingdate) . ",";//PostingDate
            $batch_query .= QuotedStr($det->productiondate) . ",";//ProductionDate
            $batch_query .= QuotedStr($det->reasoncode) . ",";//ReasonCode
            $batch_query .= QuotedStr($det->dealrangedays) . "";//DealRangeDays
            $batch_query .= ") ;";

            if ($det->txtp !== ("POSPMC") && $det->txtp !== ("POSASL")
                && $det->txtp !== ("POSART") && $det->txtp !== ("POSPCR")) {
                $det_new = $det;
                if ($det->drcr === ("D")) {
                    $det_new->drcr=("C");
                    $det_new->txtp=("POSPMC");
                }
                if ($det->drcr === ("C")) {
                    $det_new->drcr=("D");
                    $det_new->txtp=("POSPCR");
                }
                $det_new->details = "PAYMENT FOR " . $det->details;
                $batch_query .= $this->DEBTxan_Creation($det_new);
            }


        }
        return $batch_query;
    }

    public function DEBBalance_Creation($det)
    {
        $batch_query = "";


        $batch_query .= "IF NOT EXISTS ( SELECT [DEBBalance].* " .
            " FROM [DEBBalance] WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [DebtorType]=" . QuotedStr($det->debtortype) . " AND [Account]=" . QuotedStr($det->account) . " AND [AP]=" . QuotedStr($det->ap) . " )";
        $batch_query .= " INSERT INTO [DEBBalance] ([CO], [Branch], [DebtorType], [Account], [AP], [DCurr], [D030], [D060], [D090], [D120], [D150], [D180], [Dover], [PDC], [DTODate], [DTOTime], [DTOUser], [DTOMacID]) ";
        $batch_query .= "VALUES ( ";
        $batch_query .= QuotedStr($det->co) . ",";//CO
        $batch_query .= QuotedStr($det->branch) . ",";//Branch
        $batch_query .= QuotedStr($det->debtortype) . ",";//DebtorType
        $batch_query .= QuotedStr($det->account) . ",";//Account
        $batch_query .= QuotedStr($det->ap) . ",";//AP
        $batch_query .= QuotedStr($det->dcurr) . ",";//DCurr
        $batch_query .= QuotedStr($det->d030) . ",";//D030
        $batch_query .= QuotedStr($det->d060) . ",";//D060
        $batch_query .= QuotedStr($det->d090) . ",";//D090
        $batch_query .= QuotedStr($det->d120) . ",";//D120
        $batch_query .= QuotedStr($det->d150) . ",";//D150
        $batch_query .= QuotedStr($det->d180) . ",";//D180
        $batch_query .= QuotedStr($det->dover) . ",";//DOver
        $batch_query .= QuotedStr($det->pdc) . ",";//PDC
        $batch_query .= QuotedStr($det->dtodate) . ",";//DTODate
        $batch_query .= QuotedStr($det->dtotime) . ",";//DTOTime
        $batch_query .= QuotedStr($det->dtouser) . ",";//DTOUser
        $batch_query .= QuotedStr($det->dtomacid) . "";//DTOMacID
        $batch_query .= ") ";

        $batch_query .= " ELSE ";

        $batch_query .= "UPDATE [DEBBalance] ";
        $batch_query .= "SET ";
        $batch_query .= " [DTODate]=N" . QuotedStr($det->dtodate) . ", ";
        $batch_query .= " [DTOTime]=N" . QuotedStr($det->dtotime) . ", ";
        $batch_query .= " [DTOUser]=N" . QuotedStr($det->dtouser) . ", ";
        $batch_query .= " [DTOMacID]=N" . QuotedStr($det->dtomacid) . ", ";
        $batch_query .= " [DCurr]=[DCurr] + " . QuotedStr($det->dcurr) . ", ";
        $batch_query .= " [D030]=[D030]+" . QuotedStr($det->d030) . ", ";
        $batch_query .= " [D060]=[D060]+" . QuotedStr($det->d060) . ", ";
        $batch_query .= " [D090]=[D090]+" . QuotedStr($det->d090) . ", ";
        $batch_query .= " [D120]=[D120]+" . QuotedStr($det->d120) . ", ";
        $batch_query .= " [D150]=[D150]+" . QuotedStr($det->d150) . ", ";
        $batch_query .= " [D180]=[D180]+" . QuotedStr($det->d180) . ", ";
        $batch_query .= " [DOver]= [DOver]+" . QuotedStr($det->dover) . ", ";
        $batch_query .= " [PDC]=[PDC]+ " . QuotedStr($det->pdc) . " ";

        $batch_query .= " WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [DebtorType]=" . QuotedStr($det->debtortype) . " AND [Account]=" . QuotedStr($det->account) . " AND [AP]=" . QuotedStr($det->ap) . " ;";


        return $batch_query;
    }

    public function STKSerialMst_Creation($det, $docheader, $gHReturnInvoice)
    {
        $batch_query = "";

        $batch_query .= "UPDATE [STKSerialMst] ";
        $batch_query .= "SET ";
        $batch_query .= " [DTODate]=N" . QuotedStr($det->dtodate) . ", ";
        if ($docheader->txtp === "POSASL" || $docheader->txtp === "POSCSH" || $docheader->txtp === "DEBSOR") {
            $batch_query .= " [DebAccount]=N" . QuotedStr($det->account) . ", ";
            $batch_query .= " [DebName]=N" . QuotedStr($docheader->name) . ", ";
            $batch_query .= " [DebPhone]=N" . QuotedStr($docheader->telephone) . ",";
            $batch_query .= " [DebDocNo]=N" . QuotedStr($det->docno) . ", ";
            $batch_query .= " [DebdocDate]=" . QuotedStr($det->trandate) . ", ";
            $batch_query .= " [DebDocLineNo]=" . QuotedStr($det->lineno) . "', ";
            $batch_query .= " [Status]='9',";
        }

        if ($docheader->txtp === "POSART" || $docheader->txtp === "POSCSR") {
            $batch_query .= " [RetnDate]=N" . QuotedStr($docheader->trandate) . ",";
            $batch_query .= " [Retntime]=N" . QuotedStr($docheader->trantime) . ",";
            $batch_query .= " [RetnDocNo]=N" . QuotedStr($gHReturnInvoice) . ",";
            $batch_query .= " [RetnAccount]=N" . QuotedStr($det->account) . ",";
            $batch_query .= " [Status]='2',";
        }

        $batch_query .= " [DTODate]=" . QuotedStr($det->dtodate) . ",";
        $batch_query .= " [DTOTime]=" . QuotedStr($det->dtotime) . ",";
        $batch_query .= " [DTOUser]=" . QuotedStr($det->dtouser) . ",";
        $batch_query .= " [DTOMacID]=" . QuotedStr($det->dtomacid) . "";

        $batch_query .= " WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [StockCode]=" . QuotedStr($det->stockcode) . " AND [LinkCode]=" . QuotedStr($det->linkcode) . " AND [SerialNo]=" . QuotedStr($det->serialno) . " ;";


        return $batch_query;
    }

    public function STKBalance_Creation($det)
    {
        $batch_query = "";
        $batch_query .= "IF NOT EXISTS ( SELECT [STKBalance].* FROM [STKBalance] WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [StockCode]=" . QuotedStr($det->stockcode) . " AND [WH]=" . QuotedStr($det->wh) . ") ";
        //Insert
        $batch_query .= "INSERT INTO STKBalance ( ";
        $batch_query .= " [CO], [Branch], [StockCode], [LinkCode], [WH], [Onhand], [SalesOrder], [PurOrder], ";
        $batch_query .= " [Laybye], [Dispatch], [Consignment], [Unpacked], [Intransit], [Cases], [Weight],  ";
        $batch_query .= " [LastSupplier], [LastQuantity], [LastCostExcl], [LastInvoiceNo], [LastGRVNo], ";
        $batch_query .= " [Binloc1], [Binloc2], [Binloc3], [Binloc4], [Binloc5], ";
        $batch_query .= " [DTODate], [DTOTime], [DTOUser], [DTOMacID],  ";
        $batch_query .= " [Onhand01], [Onhand02], [Onhand03], [Onhand04], [Onhand05], [Onhand06], [Onhand07],  ";
        $batch_query .= " [Onhand08], [Onhand09], [Onhand10], [Onhand11], [Onhand12], [Onhand13], [Onhand14],  ";
        $batch_query .= " [Onhand15], [Onhand16], [Onhand17], [Onhand18], [Onhand19], [Onhand20], [Onhand21], ";
        $batch_query .= " [Onhand22], [Onhand23], [Onhand24], [Onhand25], [Onhand26], [Onhand27], [Onhand28], ";
        $batch_query .= " [Onhand29], [Onhand30], [Onhand31], [AP], [Damaged]  ";
        $batch_query .= ") ";
        //Values
        $batch_query .= "VALUES ( ";
        $batch_query .= QuotedStr($det->co) . ",";//co
        $batch_query .= QuotedStr($det->branch) . ",";//branch
        $batch_query .= QuotedStr($det->stockcode) . ",";//stockcode
        $batch_query .= QuotedStr($det->linkcode) . ",";//linkcode
        $batch_query .= QuotedStr($det->wh) . ",";//wh
        $batch_query .= QuotedStr($det->onhand) . ",";//onhand
        $batch_query .= QuotedStr($det->salesorder) . ",";//salesorder
        $batch_query .= QuotedStr($det->purorder) . ",";//purorder
        $batch_query .= QuotedStr($det->laybye) . ",";//Laybye
        $batch_query .= QuotedStr($det->dispatch) . ",";//dispatch
        $batch_query .= QuotedStr($det->consignment) . ",";//Consignment
        $batch_query .= QuotedStr($det->unpacked) . ",";//Unpacked
        $batch_query .= QuotedStr($det->intransit) . ",";//Intransit
        $batch_query .= QuotedStr($det->cases) . ",";//Cases
        $batch_query .= QuotedStr($det->weight) . ",";//Weight
        $batch_query .= QuotedStr($det->lastsupplier) . ",";//LastSupplier
        $batch_query .= QuotedStr($det->lastquantity) . ",";//LastQuantity
        $batch_query .= QuotedStr($det->lastcostexcl) . ",";//LastCostExcl
        $batch_query .= QuotedStr($det->lastinvoiceno) . ",";//LastInvoiceNo
        $batch_query .= QuotedStr($det->lastgrvno) . ",";//LastGRVNo
        $batch_query .= QuotedStr($det->binloc1) . ",";//BinLoc1
        $batch_query .= QuotedStr($det->binloc2) . ",";//BinLoc2
        $batch_query .= QuotedStr($det->binloc3) . ",";//BinLoc3
        $batch_query .= QuotedStr($det->binloc4) . ",";//BinLoc4
        $batch_query .= QuotedStr($det->binloc5) . ",";//BinLoc5
        $batch_query .= QuotedStr($det->dtodate) . ",";//[DTODate],
        $batch_query .= QuotedStr($det->dtotime) . ",";//[DTOTime]
        $batch_query .= QuotedStr($det->dtouser) . ",";//[DTOUser]
        $batch_query .= QuotedStr($det->dtomacid) . ",";// [DTOMacID]
        $batch_query .= QuotedStr($det->onhand01) . ",";//Onhand01
        $batch_query .= QuotedStr($det->onhand02) . ",";//Onhand02
        $batch_query .= QuotedStr($det->onhand03) . ",";//Onhand03
        $batch_query .= QuotedStr($det->onhand04) . ",";//Onhand04
        $batch_query .= QuotedStr($det->onhand05) . ",";//Onhand05
        $batch_query .= QuotedStr($det->onhand06) . ",";//Onhand06
        $batch_query .= QuotedStr($det->onhand07) . ",";//Onhand07
        $batch_query .= QuotedStr($det->onhand08) . ",";//Onhand08
        $batch_query .= QuotedStr($det->onhand09) . ",";//Onhand09
        $batch_query .= QuotedStr($det->onhand10) . ",";//Onhand10
        $batch_query .= QuotedStr($det->onhand11) . ",";//Onhand11
        $batch_query .= QuotedStr($det->onhand12) . ",";//Onhand012
        $batch_query .= QuotedStr($det->onhand13) . ",";//Onhand13
        $batch_query .= QuotedStr($det->onhand14) . ",";//Onhand14
        $batch_query .= QuotedStr($det->onhand15) . ",";//Onhand15
        $batch_query .= QuotedStr($det->onhand16) . ",";//Onhand16
        $batch_query .= QuotedStr($det->onhand17) . ",";//Onhand17
        $batch_query .= QuotedStr($det->onhand18) . ",";//Onhand18
        $batch_query .= QuotedStr($det->onhand19) . ",";//Onhand19
        $batch_query .= QuotedStr($det->onhand20) . ",";//Onhand20
        $batch_query .= QuotedStr($det->onhand21) . ",";//Onhand21
        $batch_query .= QuotedStr($det->onhand22) . ",";//Onhand22
        $batch_query .= QuotedStr($det->onhand23) . ",";//Onhand23
        $batch_query .= QuotedStr($det->onhand24) . ",";//Onhand24
        $batch_query .= QuotedStr($det->onhand25) . ",";//Onhand25
        $batch_query .= QuotedStr($det->onhand26) . ",";//Onhand26
        $batch_query .= QuotedStr($det->onhand27) . ",";//Onhand27
        $batch_query .= QuotedStr($det->onhand28) . ",";//Onhand28
        $batch_query .= QuotedStr($det->onhand29) . ",";//Onhand29
        $batch_query .= QuotedStr($det->onhand30) . ",";//Onhand30
        $batch_query .= QuotedStr($det->onhand31) . ",";//Onhand31
        $batch_query .= QuotedStr($det->ap) . ",";//AP
        $batch_query .= QuotedStr($det->damaged) . "";//Damaged
        $batch_query .= ") ";


        //String Need To Check...
        $batch_query .= " ELSE ";
        //Update
        $batch_query .= "UPDATE [STKBalance] ";
        $batch_query .= "SET ";
        $batch_query .= " [DTODate]=N" . QuotedStr($det->dtodate) . " ";
        $batch_query .= " ,[DTOTime]=N" . QuotedStr($det->dtotime) . " ";
        $batch_query .= " ,[DTOUser]=N" . QuotedStr($det->dtouser) . " ";
        $batch_query .= " ,[DTOMacID]=N" . QuotedStr($det->dtomacid) . "";
        if ($det->onhand !== 0) {
            $batch_query .= " ,[Onhand]=[Onhand]+" . QuotedStr($det->onhand);
        }
        if ($det->salesorder !== 0) {
            $batch_query .= " ,[SalesOrder]=[SalesOrder]+" . QuotedStr($det->salesorder);
        }
        if ($det->purorder !== 0) {
            $batch_query .= " ,[PurOrder]=[PurOrder]+" . QuotedStr($det->purorder);
        }
        if ($det->laybye !== 0) {
            $batch_query .= " ,[Laybye]=[Laybye]+" . QuotedStr($det->laybye);
        }
        if ($det->dispatch !== 0) {
            $batch_query .= " ,[Dispatch]=[Dispatch]+" . QuotedStr($det->dispatch);
        }
        if ($det->consignment !== 0) {
            $batch_query .= " ,[Consignment]=[Consignment]+" . QuotedStr($det->consignment);
        }
        if ($det->unpacked !== 0) {
            $batch_query .= " ,[Unpacked]=[Unpacked]+" . QuotedStr($det->unpacked);
        }
        if ($det->intransit !== 0) {
            $batch_query .= " ,[Intransit]=[Intransit]+" . QuotedStr($det->intransit);
        }
        if (!empty($det->lastsupplier)) {
            $batch_query .= " ,[LastSupplier]=N" . QuotedStr($det->lastsupplier);
        }
        if ($det->lastquantity !== 0) {
            $batch_query .= " ,[LastQuantity]=" . QuotedStr($det->lastquantity);
        }
        if ($det->lastcostexcl !== 0) {
            $batch_query .= " ,[LastCostExcl]=" . QuotedStr($det->lastcostexcl);
        }
        if (!empty($det->lastinvoiceno)) {
            $batch_query .= " ,[LastInvoiceNo]=N" . QuotedStr($det->lastinvoiceno);
        }
        if ($det->lastgrvno !== 0) {
            $batch_query .= " ,[LastGRVNo]=" . QuotedStr($det->lastgrvno);
        }
        if (!empty($det->binloc1)) {
            $batch_query .= " ,[BinLoc1]=N" . QuotedStr($det->binloc1);
        }
        if (!empty($det->binloc2)) {
            $batch_query .= " ,[BinLoc2]=N" . QuotedStr($det->binloc2);
        }
        if (!empty($det->binloc3)) {
            $batch_query .= " ,[BinLoc3]=N" . QuotedStr($det->binloc3);
        }
        if (!empty($det->binloc4)) {
            $batch_query .= " ,[BinLoc4]=N" . QuotedStr($det->binloc4);
        }
        if (!empty($det->binloc5)) {
            $batch_query .= " ,[BinLoc5]=N" . QuotedStr($det->binloc5);
        }

        if ($det->damaged !== 0) {
            $batch_query .= " ,[Damaged]=[Damaged]+" . QuotedStr($det->damaged);
        }
        if ($det->cases !== 0) {
            $batch_query .= " ,[Cases]=[Cases]+" . QuotedStr($det->cases);
        }
        if ($det->weight !== 0) {
            $batch_query .= " ,[Weight]=[Weight]+" . QuotedStr($det->weight);
        }
        if ($det->splitqty !== 0) {
            $batch_query .= " ,[SplitQty]=[SplitQty]+" . QuotedStr($det->splitqty);
        }

        $batch_query .= " WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [StockCode]=" . QuotedStr($det->stockcode) . " AND [WH]=" . QuotedStr($det->wh) . ";";


        return $batch_query;
    }

    public function STKDailyStats_Creation($det)
    {
        $batch_query = "";

        $batch_query .= "IF NOT EXISTS (SELECT [STKDailyStats].* FROM [STKDailyStats] WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [StockCode]=" . QuotedStr($det->stockcode) . " AND [LinkCode]=" . QuotedStr($det->linkcode) . " AND [Period]=" . QuotedStr($det->period) . " AND [DayNo]=" . QuotedStr($det->dayno) . " )";
        //Insert...
        {
            $batch_query .= "INSERT INTO STKDailyStats (";
            $batch_query .= " [CO], [Branch], [StockCode], [LinkCode], [Period], [Dayno], [SaleQty], [SaleCostex],";
            $batch_query .= " [SaleExcl], [RebateExcl], [LinkQty], [Onhand], [GrvQty], [GrvlinkQty], [GrvTotalExcl],  ";
            $batch_query .= " [GrvRebAmnt], [ReturnQty], [ReturnCostex], [ReturnExcl], [PromoQty], [PromolinkQty], ";
            $batch_query .= " [PromoCost], [Promosale], [InterQty], [InterlinkQty], [InterCost], [Intersale], ";
            $batch_query .= " [Units] ";
            $batch_query .= ") ";
            //Values
            $batch_query .= "VALUES ( ";
            $batch_query .= QuotedStr($det->co) . ",";//CO
            $batch_query .= QuotedStr($det->branch) . ",";//Branch
            $batch_query .= QuotedStr($det->stockcode) . ",";//StockCode
            $batch_query .= QuotedStr($det->linkcode) . ",";//LinkCode
            $batch_query .= QuotedStr($det->period) . ",";//Period
            $batch_query .= QuotedStr($det->dayno) . ",";//DayNo
            $batch_query .= QuotedStr($det->saleqty) . ",";//SaleQty
            $batch_query .= QuotedStr($det->salecostex) . ",";//SaleCostex
            $batch_query .= QuotedStr($det->saleexcl) . ",";//SaleExcl
            $batch_query .= QuotedStr($det->rebateexcl) . ",";//RebateExcl
            $batch_query .= QuotedStr($det->linkqty) . ",";//LinkQty
            $batch_query .= QuotedStr($det->onhand) . ","; //Onhand
            $batch_query .= QuotedStr($det->grvqty) . ",";//GrvQty
            $batch_query .= QuotedStr($det->grvlinkqty) . ",";//GrvLinkQty
            $batch_query .= QuotedStr($det->grvtotalexcl) . ",";//GrvTotalExcl
            $batch_query .= QuotedStr($det->grvrebamnt) . ",";//GrvRebAmnt
            $batch_query .= QuotedStr($det->returnqty) . ",";//ReturnQty
            $batch_query .= QuotedStr($det->returncostex) . ",";//ReturnCostex
            $batch_query .= QuotedStr($det->returnexcl) . ",";//ReturnExcl
            $batch_query .= QuotedStr($det->promoqty) . ",";//PromoQty
            $batch_query .= QuotedStr($det->promolinkqty) . ",";//PromoLinkQty
            $batch_query .= QuotedStr($det->promocost) . ",";//PromoCost
            $batch_query .= QuotedStr($det->promosale) . ",";//PromoSale
            $batch_query .= QuotedStr($det->interqty) . ",";//InterQty
            $batch_query .= QuotedStr($det->interlinkqty) . ",";//InterLinkQty
            $batch_query .= QuotedStr($det->intercost) . ",";//InterCost
            $batch_query .= QuotedStr($det->intersale) . ",";//InterSale
            $batch_query .= QuotedStr($det->units) . "";//Units
            $batch_query .= ") ";

        }
        //Update
        $batch_query .= " ELSE ";
        {
            $batch_query .= "UPDATE [STKDailyStats] ";
            $batch_query .= "SET ";
            $batch_query .= " [SaleQty]=[SaleQty]+" . QuotedStr($det->saleqty) . ",";
            $batch_query .= " [SaleCostex]=[SaleCostex]+" . QuotedStr($det->salecostex) . ",";
            $batch_query .= " [SaleExcl]=[SaleExcl]+" . QuotedStr($det->saleexcl) . ",";
            $batch_query .= " [RebateExcl]=[RebateExcl]+" . QuotedStr($det->rebateexcl) . ",";
            $batch_query .= " [LinkQty]=[LinkQty]+" . QuotedStr($det->linkqty) . ",";
            $batch_query .= " [Onhand]=" . QuotedStr($det->onhand) . ",";
            $batch_query .= " [GrvQty]=[GrvQty]+" . QuotedStr($det->grvqty) . ",";
            $batch_query .= " [GrvLinkQty]=[GrvLinkQty]+" . QuotedStr($det->grvlinkqty) . ",";
            $batch_query .= " [GrvTotalExcl]=[GrvTotalExcl]+" . QuotedStr($det->grvtotalexcl) . ",";
            $batch_query .= " [GrvRebAmnt]=[GrvRebAmnt]+" . QuotedStr($det->grvrebamnt) . ",";
            $batch_query .= " [ReturnQty]=[ReturnQty]+" . QuotedStr($det->returnqty) . ",";
            $batch_query .= " [ReturnCostex]=[ReturnCostex]+" . QuotedStr($det->returncostex) . ",";
            $batch_query .= " [ReturnExcl]=[ReturnExcl]+" . QuotedStr($det->returnexcl) . ",";
            $batch_query .= " [PromoQty]=[PromoQty]+" . QuotedStr($det->promoqty) . ",";
            $batch_query .= " [PromoLinkQty]=[PromoLinkQty]+" . QuotedStr($det->promolinkqty) . ",";
            $batch_query .= " [PromoCost]=[PromoCost]+" . QuotedStr($det->promocost) . ",";
            $batch_query .= " [PromoSale]=[PromoSale]+" . QuotedStr($det->promosale) . ",";
            $batch_query .= " [InterQty]=[InterQty]+" . QuotedStr($det->interqty) . ",";
            $batch_query .= " [InterLinkQty]=[InterLinkQty]+" . QuotedStr($det->interlinkqty) . ",";
            $batch_query .= " [InterCost]=[InterCost]+" . QuotedStr($det->intercost) . ",";
            $batch_query .= " [InterSale]=[InterSale]+" . QuotedStr($det->intersale) . ",";
            $batch_query .= " [Units]=" . QuotedStr($det->units) . " ";

            $batch_query .= " WHERE  [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [StockCode]=" . QuotedStr($det->stockcode) . " AND [LinkCode]=" . QuotedStr($det->linkcode) . " AND [Period]=" . QuotedStr($det->period) . " AND [DayNo]=" . QuotedStr($det->dayno) . " ; ";
        }


        return $batch_query;
    }

    public function STKTxan_Creation($det)
    {
        $batch_query = "";

        $batch_query .= "INSERT INTO STKTxan (" .
            "[CO], [Branch], [StockCode], [LinkCode], [TxTp], [TranDate], [AP], [DocNo], " .
            " [RefNo], [Qty], [LinkQty], [Price], [Amount], [DrCr], [TaxAmount], [TaxRate],  " .
            " [TaxIndicator], [LastCostExcl], [LastCostIncl], [AvgCostExcl], [AvgCostIncl], " .
            " [Adjustment], [Details], [Onhand], [WH], [RebateAmnt], [Supervisor], [BatchNo],   " .
            " [DTODate], [DTOTime], [DTOUser], [DTOMacID], [KitQty], [Version], [Units], [RebateAvgExcl], [Cases] " .
            ") " .
            "VALUES ( " .
            QuotedStr($det->co) . "," .//co
            QuotedStr($det->branch) . "," .//Branch
            QuotedStr($det->stockcode) . "," .//StockCode
            QuotedStr($det->linkcode) . "," .//LinkCode
            QuotedStr($det->txtp) . "," .//TxTp
            QuotedStr($det->trandate) . "," .//TranDate
            QuotedStr($det->ap) . "," .//AP
            QuotedStr($det->docno) . "," .//DocNo
            QuotedStr($det->refno) . "," .//RefNo
            QuotedStr($det->qty) . "," .//Qty
            QuotedStr($det->linkqty) . "," .//LinkQty
            QuotedStr($det->price) . "," .//Price
            QuotedStr($det->amount) . "," .//Amount
            QuotedStr($det->drcr) . "," .//DrCr
            QuotedStr($det->taxamount) . "," .//TaxAmount
            QuotedStr($det->taxrate) . "," .//TaxRate
            QuotedStr($det->taxindicator) . "," .//TaxIndicator
            QuotedStr($det->lastcostexcl) . "," .//LastCostExcl
            QuotedStr($det->lastcostincl) . "," .//LastCostIncl
            QuotedStr($det->avgcostexcl) . "," .//AvgCostExcl
            QuotedStr($det->avgcostincl) . "," .//AvgCostIncl
            QuotedStr($det->adjustment) . "," .//Adjustment
            QuotedStr($det->details) . "," .//Details
            QuotedStr($det->onhand) . "," .//Onhand
            QuotedStr($det->wh) . "," .//WH
            QuotedStr($det->rebateamnt) . "," .//RebateAmnt
            QuotedStr($det->supervisor) . "," .//Supervisor
            QuotedStr($det->batchno) . "," .//BatchNo
            QuotedStr($det->dtodate) . "," .//DTODate
            QuotedStr($det->dtotime) . "," .//DTOTime
            QuotedStr($det->dtouser) . "," .//DTOUser
            QuotedStr($det->dtomacid) . "," .//DTOMacID
            QuotedStr($det->kitqty) . "," .//KitQty
            QuotedStr($det->version) . "," .//Version
            QuotedStr($det->units) . "," .//Units
            QuotedStr($det->rebateavgexcl) . "," .//RebateAvgExcl
            QuotedStr($det->cases) . " " .//Cases
            ") ;";


        return $batch_query;
    }

    public function ORDDetails_Creation($det)
    {
        $batch_query = "";
        $batch_query .= "IF NOT EXISTS ( SELECT [ORDDetails].* FROM [ORDDetails] WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [TxTp]=" . QuotedStr($det->txtp) . " AND [TillNo]=" . QuotedStr($det->tillno) . " AND [DocNo]=" . QuotedStr($det->docno) . " AND [Account]=" . QuotedStr($det->account) . " AND [StockCode]=" . QuotedStr($det->stockcode) . " AND [LinkCode]=" . QuotedStr($det->linkcode) . " AND [PROMOTIONCODE]=" . QuotedStr($det->promotioncode) . ") ";
        //INSERT
        $batch_query .= 'INSERT INTO ORDDetails ( ';
        $batch_query .= '[CO], [Branch], [TxTp], [Tillno], [DocNo], [Account], [TranDate], [LineNo],  ';
        $batch_query .= '[StockCode], [LinkCode], [Description1], [Description2], [Quantity], [Price],  ';
        $batch_query .= '[PriceExcl], [PriceIncl], [DiscountType], [DiscountValue], [LineDiscount], [LineVAT],  ';
        $batch_query .= '[LineTotal], [LineTotalExcl], [LineTotalIncl], [LinkQty], [VATCode], [VATRate],  ';
        $batch_query .= '[VATIndicator], [CostExcl], [CostIncl], [TotalCostExcl], [TotalCostIncl], [Profit],  ';
        $batch_query .= '[Wh], [Salesrep], [Dept], [Subdept], [Units], [Weight], [StockType], [AP], [Text1],  ';
        $batch_query .= '[Text2], [PriceCode], [Promotion], [PromotionType], [PromotionCode], [AuthoriseCode],  ';
        $batch_query .= '[PackSize], [Serialtrack], [Serialcount], [OldPrice], [Sqmbox], [TileSize],  ';
        $batch_query .= '[Tilegrade], [Noofbox], [Cases], [Palettes], [DispatchQty], [DispatchReturns],  ';
        $batch_query .= '[DispatchBalance], [Status], [BaseType], [Baseref], [Baseline], [RebAmnt], [Freelineind],  ';
        $batch_query .= '[CreditnoteReason], [BarCode], [EodDate], [Supervisor], [SapDocNo], [Qtyinvoice],  ';
        $batch_query .= '[QtyReturned], [QtyBalance], [Basedocamnt], [Basedocbal], [Basepayamnt], [Basepaydisc],  ';
        $batch_query .= '[Dimensions], [DrCr], [TotalDiscount], [FinalTotal], [ManProfit], [ManDiscount],  ';
        $batch_query .= '[ManVAT], [ManTotal], [Onhand], [Avgweeksale], [AvgCostExcl], [AvgCostIncl],  ';
        $batch_query .= '[Supervisor2], [Rebavgamnt], [Variant], [SourceBranch], [BasePrice], [BasePriceCode],  ';
        $batch_query .= '[Pricechange], [Salegroup], [ManQty], [ManPrice], [DispatchBranch], [Dispatchbox],  ';
        $batch_query .= '[SplitCode], [SplitQty], [SplitUnits], [SplitPriceExcl], [SplitPriceIncl], [Loyaltypnts],  ';
        $batch_query .= '[PickQty], [Pickbox]   ';
        $batch_query .= ' ) VALUES ( ';
        $batch_query .= QuotedStr($det->co) . ',';//{CO (nvarchar[5]) }
        $batch_query .= QuotedStr($det->branch) . ','; //{Branch (nvarchar[5]) }
        $batch_query .= QuotedStr($det->txtp) . ','; //{TxTp (nvarchar[6]) }
        $batch_query .= QuotedStr($det->tillno) . ',';//{Tillno (nvarchar[5]) }
        $batch_query .= QuotedStr($det->docno) . ','; //{DocNo (nvarchar[15]) }
        $batch_query .= QuotedStr($det->account) . ',';//{Account (nvarchar[20]) }
        $batch_query .= QuotedStr($det->trandate) . ','; //{TranDate (nvarchar[10]) }
        $batch_query .= QuotedStr($det->lineno) . ',';//{LineNo (int) }
        $batch_query .= QuotedStr($det->stockcode) . ','; //{StockCode (nvarchar[25]) }
        $batch_query .= QuotedStr($det->linkcode) . ',';//{LinkCode (nvarchar[25]) }
        $batch_query .= QuotedStr($det->description1) . ',';//{Description1 (nvarchar[50]) }
        $batch_query .= QuotedStr($det->description2) . ',';//{Description2 (nvarchar[50]) }
        $batch_query .= QuotedStr($det->quantity) . ',';//{Quantity (float) }
        $batch_query .= QuotedStr($det->price) . ',';//{Price (float) }
        $batch_query .= QuotedStr($det->priceexcl) . ',';//{PriceExcl (float) }
        $batch_query .= QuotedStr($det->priceincl) . ','; //{PriceIncl (float) }
        $batch_query .= QuotedStr($det->discounttype) . ',';//{DiscountType (nvarchar[1]) }
        $batch_query .= QuotedStr($det->discountvalue) . ','; //{DiscountValue (float) }
        $batch_query .= QuotedStr($det->linediscount) . ','; //{LineDiscount (float) }
        $batch_query .= QuotedStr($det->linevat) . ','; //{LineVAT (float) }
        $batch_query .= QuotedStr($det->linetotal) . ','; //{LineTotal (float) }
        $batch_query .= QuotedStr($det->linetotalexcl) . ','; //{LineTotalExcl (float) }
        $batch_query .= QuotedStr($det->linetotalincl) . ','; //{LineTotalIncl (float) }
        $batch_query .= QuotedStr($det->linkqty) . ','; //{LinkQty (float) }
        $batch_query .= QuotedStr($det->vatcode) . ','; //{VATCode (nvarchar[2]) }
        $batch_query .= QuotedStr($det->vatrate) . ',';//{VATRate (float) }
        $batch_query .= QuotedStr($det->vatindicator) . ','; //{VATIndicator (nvarchar[1]) }
        $batch_query .= QuotedStr($det->costexcl) . ','; //{CostExcl (float) }
        $batch_query .= QuotedStr($det->costincl) . ','; //{CostIncl (float) }
        $batch_query .= QuotedStr($det->totalcostexcl) . ','; //{TotalCostExcl (float) }
        $batch_query .= QuotedStr($det->totalcostincl) . ','; // {TotalCostIncl (float) }
        $batch_query .= QuotedStr($det->profit) . ','; //{Profit (float) }
        $batch_query .= QuotedStr($det->wh) . ','; //{Wh (nvarchar[5]) }
        $batch_query .= QuotedStr($det->salesrep) . ','; //{Salesrep (nvarchar[10]) }
        $batch_query .= QuotedStr($det->dept) . ',';// {Dept (nvarchar[10]) }
        $batch_query .= QuotedStr($det->subdept) . ','; // {Subdept (nvarchar[10]) }
        $batch_query .= QuotedStr($det->units) . ','; //{Units (int) }
        $batch_query .= QuotedStr($det->weight) . ','; //{Weight (float) }
        $batch_query .= QuotedStr($det->stocktype) . ',';  //{StockType (nvarchar[1]) }
        $batch_query .= QuotedStr($det->ap) . ','; //{AP (int) }
        $batch_query .= QuotedStr($det->text1) . ',';  //{Text1 (nvarchar[40]) }
        $batch_query .= QuotedStr($det->text2) . ',';  //{Text2 (nvarchar[40]) }
        $batch_query .= QuotedStr($det->pricecode) . ',';  //{PriceCode (nvarchar[5]) }
        $batch_query .= QuotedStr($det->promotion) . ','; //{Promotion (nvarchar[1]) }
        $batch_query .= QuotedStr($det->promotiontype) . ','; //{PromotionType (nvarchar[1]) }
        $batch_query .= QuotedStr($det->promotioncode) . ','; //{PromotionCode (nvarchar[5]) }
        $batch_query .= QuotedStr($det->authorisecode) . ','; //{AuthoriseCode (nvarchar[10]) }
        $batch_query .= QuotedStr($det->packsize) . ','; // {PackSize (nvarchar[10]) }
        $batch_query .= QuotedStr($det->serialtrack) . ','; //{Serialtrack (nvarchar[1]) }
        $batch_query .= QuotedStr($det->serialcount) . ','; // {Serialcount (int) }
        $batch_query .= QuotedStr($det->oldprice) . ','; //OldPrice (float) }
        $batch_query .= QuotedStr($det->sqmbox) . ',';//{Sqmbox (float) }
        $batch_query .= QuotedStr($det->tilesize) . ',';//{TileSize (nvarchar[20]) }
        $batch_query .= QuotedStr($det->tilegrade) . ',';  //{Tilegrade (nvarchar[20]) }
        $batch_query .= QuotedStr($det->noofbox) . ',';//{Noofbox (int) }
        $batch_query .= QuotedStr($det->cases) . ',';  // {Cases (float) }
        $batch_query .= QuotedStr($det->palettes) . ','; // {Palettes (float) }
        $batch_query .= QuotedStr($det->dispatchqty) . ','; //{DispatchQty (float) }
        $batch_query .= QuotedStr($det->dispatchreturns) . ',';   //{DispatchReturns (float) }
        $batch_query .= QuotedStr($det->dispatchbalance) . ','; //{DispatchBalance (float) }
        $batch_query .= QuotedStr($det->status) . ','; //  {Status (nvarchar[1]) }
        $batch_query .= QuotedStr($det->basetype) . ',';  //{BaseType (nvarchar[6]) }
        $batch_query .= QuotedStr($det->baseref) . ','; //{Baseref (nvarchar[20]) }
        $batch_query .= QuotedStr($det->baseline) . ','; // {Baseline (int) }
        $batch_query .= QuotedStr($det->rebamnt) . ','; //{RebAmnt (float) }
        $batch_query .= QuotedStr($det->freelineind) . ','; // {Freelineind (nvarchar[1]) }
        $batch_query .= QuotedStr($det->creditnotereason) . ','; //{CreditnoteReason (nvarchar[50]) }
        $batch_query .= QuotedStr($det->barcode) . ',';  // {BarCode (nvarchar[25]) }
        $batch_query .= QuotedStr($det->eoddate) . ','; //{EodDate (nvarchar[10]) }
        $batch_query .= QuotedStr($det->supervisor) . ',';  //{Supervisor (nvarchar[10]) }
        $batch_query .= QuotedStr($det->sapdocno) . ',';  //{SapDocNo (nvarchar[20]) }
        $batch_query .= QuotedStr($det->qtyinvoice) . ',';//{Qtyinvoice (float) }
        $batch_query .= QuotedStr($det->qtyreturned) . ','; //  {QtyReturned (float) }
        $batch_query .= QuotedStr($det->qtybalance) . ','; // {QtyBalance (float) }
        $batch_query .= QuotedStr($det->basedocamnt) . ','; // {Basedocamnt (float) }
        $batch_query .= QuotedStr($det->basedocbal) . ',';  //{Basedocbal (float) }
        $batch_query .= QuotedStr($det->basepayamnt) . ','; //  {Basepayamnt (float) }
        $batch_query .= QuotedStr($det->basepaydisc) . ','; // {Basepaydisc (float) }
        $batch_query .= QuotedStr($det->dimensions) . ',';  //  {Dimensions (float) }
        $batch_query .= QuotedStr($det->drcr) . ',';  // {DrCr (nvarchar[1]) }
        $batch_query .= QuotedStr($det->totaldiscount) . ',';  //{TotalDiscount (float) }
        $batch_query .= QuotedStr($det->finaltotal) . ',';//{FinalTotal (float) }
        $batch_query .= QuotedStr($det->manprofit) . ',';  //{ManProfit (float) }
        $batch_query .= QuotedStr($det->mandiscount) . ','; // {ManDiscount (float) }
        $batch_query .= QuotedStr($det->manvat) . ','; //{ManVAT (float) }
        $batch_query .= QuotedStr($det->mantotal) . ','; // {ManTotal (float) }
        $batch_query .= QuotedStr($det->onhand) . ',';  // {Onhand (float) }
        $batch_query .= QuotedStr($det->avgweeksale) . ',';   //   {Avgweeksale (float) }
        $batch_query .= QuotedStr($det->avgcostexcl) . ',';  //  {AvgCostExcl (float) }
        $batch_query .= QuotedStr($det->avgcostincl) . ',';  //  {AvgCostIncl (float) }
        $batch_query .= QuotedStr($det->supervisor2) . ',';   // {Supervisor2 (nvarchar[10]) }
        $batch_query .= QuotedStr($det->rebavgamnt) . ','; //{Rebavgamnt (float) }
        $batch_query .= QuotedStr($det->variant) . ',';  // {Variant (nvarchar[10]) }
        $batch_query .= QuotedStr($det->sourcebranch) . ','; // {SourceBranch (nvarchar[5]) }
        $batch_query .= QuotedStr($det->baseprice) . ',';// {BasePrice (float) }
        $batch_query .= QuotedStr($det->basepricecode) . ','; // {BasePriceCode (nvarchar[5]) }
        $batch_query .= QuotedStr($det->pricechange) . ',';//  {Pricechange (nvarchar[1]) }
        $batch_query .= QuotedStr($det->salegroup) . ',';  //{Salegroup (nvarchar[1]) }
        $batch_query .= QuotedStr($det->manqty) . ',';  // {ManQty (float) }
        $batch_query .= QuotedStr($det->manprice) . ',';  //{ManPrice (float) }
        $batch_query .= QuotedStr($det->dispatchbranch) . ',';  // {DispatchBranch (nvarchar[5]) }
        $batch_query .= QuotedStr($det->dispatchbox) . ',';  //{Dispatchbox (int) }
        $batch_query .= QuotedStr($det->splitcode) . ',';  // {SplitCode (int) }
        $batch_query .= QuotedStr($det->splitqty) . ',';  // {SplitQty (int) }
        $batch_query .= QuotedStr($det->splitunits) . ',';    // {SplitUnits (int) }
        $batch_query .= QuotedStr($det->splitpriceexcl) . ',';   // {SplitPriceExcl (float) }
        $batch_query .= QuotedStr($det->splitpriceincl) . ',';     //{SplitPriceIncl (float) }
        $batch_query .= QuotedStr($det->loyaltypnts) . ',';    //{Loyaltypnts (int) }
        $batch_query .= QuotedStr($det->pickqty) . ',';  //  {PickQty (float) }
        $batch_query .= QuotedStr($det->pickbox) . ') ';   // {Pickbox (int) }

        $batch_query .= " ELSE ";
        //Update
        {
            $batch_query .= "UPDATE [ORDDetails] ";
            $batch_query .= " SET ";
            $batch_query .= " [TranDate]=N" . QuotedStr($det->trandate) . ", ";
            $batch_query .= " [LineNo]=" . QuotedStr($det->lineno) . ", ";
            $batch_query .= " [Description1]=N" . QuotedStr($det->description1) . ", ";
            $batch_query .= " [Description2]=N" . QuotedStr($det->description2) . ", ";
            $batch_query .= " [Quantity]=" . QuotedStr($det->quantity) . ", ";
            $batch_query .= " [Price]=" . QuotedStr($det->price) . ", ";
            $batch_query .= " [PriceExcl]=" . QuotedStr($det->priceexcl) . ", ";
            $batch_query .= " [PriceIncl]=" . QuotedStr($det->priceincl) . ", ";
            $batch_query .= " [DiscountType]=N" . QuotedStr($det->discounttype) . ", ";
            $batch_query .= " [DiscountValue]=" . QuotedStr($det->discountvalue) . ", ";
            $batch_query .= " [LineDiscount]=" . QuotedStr($det->linediscount) . ", ";
            $batch_query .= " [LineVAT]=" . QuotedStr($det->linevat) . ", ";
            $batch_query .= " [LineTotal]=" . QuotedStr($det->linetotal) . ", ";
            $batch_query .= " [LineTotalExcl]=" . QuotedStr($det->linetotalexcl) . ", ";
            $batch_query .= " [LineTotalIncl]=" . QuotedStr($det->linetotalincl) . ", ";
            $batch_query .= " [LinkQty]=" . QuotedStr($det->linkqty) . ", ";
            $batch_query .= " [VATCode]=N" . QuotedStr($det->vatcode) . ", ";
            $batch_query .= " [VATRate]=" . QuotedStr($det->vatrate) . ", ";
            $batch_query .= " [VATIndicator]=N" . QuotedStr($det->vatindicator) . ", ";
            $batch_query .= " [CostExcl]=" . QuotedStr($det->costexcl) . ", ";
            $batch_query .= " [CostIncl]=" . QuotedStr($det->costincl) . ", ";
            $batch_query .= " [TotalCostExcl]=" . QuotedStr($det->totalcostexcl) . ", ";
            $batch_query .= " [TotalCostIncl]=" . QuotedStr($det->totalcostincl) . ", ";
            $batch_query .= " [Profit]=" . QuotedStr($det->profit) . ", ";
            $batch_query .= "' [Wh]=N" . QuotedStr($det->wh) . ", ";
            $batch_query .= " [SalesRep]=N" . QuotedStr($det->salesrep) . ", ";
            $batch_query .= " [Dept]=N" . QuotedStr($det->dept) . ", ";
            $batch_query .= " [SubDept]=N" . QuotedStr($det->subdept) . ", ";
            $batch_query .= " [Units]=" . QuotedStr($det->units) . ", ";
            $batch_query .= " [Weight]=" . QuotedStr($det->weight) . ", ";
            $batch_query .= " [StockType]=N" . QuotedStr($det->stocktype) . ", ";
            $batch_query .= " [AP]=" . QuotedStr($det->ap) . ", ";
            $batch_query .= " [Text1]=N" . QuotedStr($det->text1) . ", ";
            $batch_query .= " [Text2]=N" . QuotedStr($det->text2) . ", ";
            $batch_query .= " [PriceCode]=N" . QuotedStr($det->pricecode) . ", ";
            $batch_query .= " [Promotion]=N" . QuotedStr($det->promotion) . ", ";
            $batch_query .= " [PromotionType]=N" . QuotedStr($det->promotiontype) . ", ";
            $batch_query .= " [PromotionCode]=N" . QuotedStr($det->promotioncode) . ", ";
            $batch_query .= " [AuthoriseCode]=N" . QuotedStr($det->authorisecode) . ", ";
            $batch_query .= " [PackSize]=N" . QuotedStr($det->packsize) . ", ";
            $batch_query .= " [SerialTrack]=N" . QuotedStr($det->serialtrack) . ", ";
            $batch_query .= " [SerialCount]=" . QuotedStr($det->serialcount) . ", ";
            $batch_query .= " [OldPrice]=" . QuotedStr($det->oldprice) . ", ";
            $batch_query .= " [SqmBox]=" . QuotedStr($det->sqmbox) . ", ";
            $batch_query .= " [TileSize]=N" . QuotedStr($det->tilesize) . ", ";
            $batch_query .= " [TileGrade]=N" . QuotedStr($det->tilegrade) . ", ";
            $batch_query .= " [NoOfBox]=" . QuotedStr($det->noofbox) . ", ";
            $batch_query .= " [Cases]=" . QuotedStr($det->cases) . ", ";
            $batch_query .= " [Palettes]=" . QuotedStr($det->palettes) . ", ";
            $batch_query .= " [DispatchQty]=" . QuotedStr($det->dispatchqty) . ", ";
            $batch_query .= " [DispatchReturns]=" . QuotedStr($det->dispatchreturns) . ", ";
            $batch_query .= " [DispatchBalance]=" . QuotedStr($det->dispatchbalance) . ", ";
            $batch_query .= " [Status]=N" . QuotedStr($det->status) . ", ";
            $batch_query .= " [BaseType]=N" . QuotedStr($det->basetype) . ", ";
            $batch_query .= " [BaseRef]=N" . QuotedStr($det->baseref) . ", ";
            $batch_query .= " [BaseLine]=" . QuotedStr($det->baseline) . ", ";
            $batch_query .= " [RebAmnt]=" . QuotedStr($det->rebamnt) . ", ";
            $batch_query .= " [FreeLineInd]=N" . QuotedStr($det->freelineind) . ", ";
            $batch_query .= " [CreditNoteReason]=N" . QuotedStr($det->creditnotereason) . ", ";
            $batch_query .= " [BarCode]=N" . QuotedStr($det->barcode) . ", ";
            $batch_query .= " [EODDate]=N" . QuotedStr($det->eoddate) . ", ";
            $batch_query .= " [Supervisor]=N" . QuotedStr($det->supervisor) . ", ";
            $batch_query .= " [SapDocNo]=N" . QuotedStr($det->sapdocno) . ", ";
            $batch_query .= " [QtyInvoice]=" . QuotedStr($det->qtyinvoice) . ", ";
            $batch_query .= " [QtyReturned]=" . QuotedStr($det->qtyreturned) . ", ";
            $batch_query .= " [QtyBalance]=" . QuotedStr($det->qtybalance) . ", ";
            $batch_query .= " [BaseDocAmnt]=" . QuotedStr($det->basedocamnt) . ", ";
            $batch_query .= " [BaseDocBal]=" . QuotedStr($det->basedocbal) . ", ";
            $batch_query .= " [BasePayamnt]=" . QuotedStr($det->basepayamnt) . ", ";
            $batch_query .= " [BasePayDisc]=" . QuotedStr($det->basepaydisc) . ", ";
            $batch_query .= " [Dimensions]=" . QuotedStr($det->dimensions) . ", ";
            $batch_query .= " [DrCr]=N" . QuotedStr($det->drcr) . ", ";
            $batch_query .= " [TotalDiscount]=" . QuotedStr($det->totaldiscount) . ", ";
            $batch_query .= " [FinalTotal]=" . QuotedStr($det->finaltotal) . ", ";
            $batch_query .= " [ManProfit]=" . QuotedStr($det->manprofit) . ", ";
            $batch_query .= " [ManDiscount]=" . QuotedStr($det->mandiscount) . ", ";
            $batch_query .= " [ManVAT]=" . QuotedStr($det->manvat) . ", ";
            $batch_query .= " [ManTotal]=" . QuotedStr($det->mantotal) . ", ";
            $batch_query .= "[Onhand]=" . QuotedStr($det->onhand) . ", ";
            $batch_query .= " [AvgWeekSale]=" . QuotedStr($det->avgweeksale) . ", ";
            $batch_query .= "[AvgCostExcl]=" . QuotedStr($det->avgcostexcl) . ", ";
            $batch_query .= " [AvgCostIncl]=" . QuotedStr($det->avgcostincl) . ", ";
            $batch_query .= " [Supervisor2]=N" . QuotedStr($det->supervisor2) . ", ";
            $batch_query .= " [RebAvgAmnt]=" . QuotedStr($det->rebavgamnt) . ", ";
            $batch_query .= " [Variant]=N" . QuotedStr($det->variant) . ", ";
            $batch_query .= " [SourceBranch]=N" . QuotedStr($det->sourcebranch) . ", ";
            $batch_query .= " [BasePrice]=" . QuotedStr($det->baseprice) . ", ";
            $batch_query .= " [BasePriceCode]=N" . QuotedStr($det->basepricecode) . ", ";
            $batch_query .= " [PriceChange]=N" . QuotedStr($det->pricechange) . ", ";
            $batch_query .= " [SaleGroup]=N" . QuotedStr($det->salegroup) . ", ";
            $batch_query .= " [ManQty]=" . QuotedStr($det->manqty) . ", ";
            $batch_query .= " [ManPrice]=" . QuotedStr($det->manprice) . ", ";
            $batch_query .= " [DispatchBranch]=N" . QuotedStr($det->dispatchbranch) . ", ";
            $batch_query .= " [DispatchBox]=" . QuotedStr($det->dispatchbox) . ", ";
            $batch_query .= " [SplitCode]=" . QuotedStr($det->splitcode) . ", ";
            $batch_query .= " [SplitQty]=" . QuotedStr($det->splitqty) . ", ";
            $batch_query .= " [SplitUnits]=" . QuotedStr($det->splitunits) . ", ";
            $batch_query .= " [SplitPriceExcl]=" . QuotedStr($det->splitpriceexcl) . ", ";
            $batch_query .= " [SplitPriceIncl]=" . QuotedStr($det->splitpriceincl) . ", ";
            $batch_query .= " [LoyaltyPnts]=" . QuotedStr($det->loyaltypnts) . ", ";
            $batch_query .= " [PickQty]=" . QuotedStr($det->pickqty) . ", ";
            $batch_query .= " [PickBox]=" . QuotedStr($det->pickbox);
            $batch_query .= " WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [TxTp]=" . QuotedStr($det->txtp) . " AND [TillNo]=" . QuotedStr($det->tillno) . " AND [DocNo]=" . QuotedStr($det->docno) . " AND [Account]=" . QuotedStr($det->account) . " AND [StockCode]=" . QuotedStr($det->stockcode) . " AND [LinkCode]=" . QuotedStr($det->linkcode) . " AND [PROMOTIONCODE]=" . QuotedStr($det->promotioncode) . " ;";
        }
        return $batch_query;
    }

    public function STKKitSales_Creation($det)
    {

        $batch_query = "";

        $batch_query .= "IF NOT EXISTS ( SELECT [STKKitSales].* FROM [STKKitSales] WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [StockCode]=" . QuotedStr($det->stockcode) . " AND [Period]=" . QuotedStr($det->period) . " AND [DayNo]=" . QuotedStr($det->dayno) . ") ";

        //Insert
        {
            $batch_query .= "INSERT INTO STKKitSales (";
            $batch_query .= " [CO], [Branch], [StockCode], [Period], [Dayno], [SaleQty], [SaleCostex], [SaleExcl], ";
            $batch_query .= " [RebateExcl], [ReturnQty], [ReturnCostex], [ReturnExcl], [ReturnRebate], [DTODate],  ";
            $batch_query .= " [DTOTime], [DTOUser], [DTOMacID] ";
            $batch_query .= ") ";
            //Values
            $batch_query .= "VALUES ( ";

            $batch_query .= QuotedStr($det->co) . ",";//CO
            $batch_query .= QuotedStr($det->branch) . ",";//Branch
            $batch_query .= QuotedStr($det->stockcode) . ",";//StockCode
            $batch_query .= QuotedStr($det->period) . ",";//Period
            $batch_query .= QuotedStr($det->dayno) . ",";//DayNo
            $batch_query .= QuotedStr($det->saleqty) . ",";//SaleQty
            $batch_query .= QuotedStr($det->salecostex) . ",";//SaleCostex
            $batch_query .= QuotedStr($det->saleexcl) . ",";//SaleExcl
            $batch_query .= QuotedStr($det->rebateexcl) . ",";//RebateExcl
            $batch_query .= QuotedStr($det->returnqty) . ",";//ReturnQty
            $batch_query .= QuotedStr($det->returncostex) . ",";//ReturnCostex
            $batch_query .= QuotedStr($det->returnexcl) . ",";//ReturnExcl
            $batch_query .= QuotedStr($det->returnrebate) . ",";//ReturnRebate
            $batch_query .= QuotedStr($det->dtodate) . ",";//DTODate
            $batch_query .= QuotedStr($det->dtotime) . ",";//DTOTime
            $batch_query .= QuotedStr($det->dtouser) . ",";//DTOUser
            $batch_query .= QuotedStr($det->dtomacid) . "";//DTOMacID

            $batch_query .= ") ";

        }
        $batch_query .= " ELSE ";
        {
            $batch_query .= "UPDATE [STKKitSales] ";
            $batch_query .= "SET ";
            $batch_query .= " [SaleQty]=[SaleQty]+'" . QuotedStr($det->saleqty) . ",";
            $batch_query .= " [SaleCostex]=[SaleCostex]+'" . QuotedStr($det->salecostex) . ",";
            $batch_query .= " [SaleExcl]=[SaleExcl]+'" . QuotedStr($det->saleexcl) . ",";
            $batch_query .= " [RebateExcl]=[RebateExcl]+'" . QuotedStr($det->rebateexcl) . ",";
            $batch_query .= " [DTODate]='" . QuotedStr($det->dtodate) . ",";
            $batch_query .= " [DTOTime]='" . QuotedStr($det->dtotime) . ",";
            $batch_query .= " [DTOUser]=" . QuotedStr($det->dtouser) . ",";
            $batch_query .= " [DTOMacID]=" . QuotedStr($det->dtomacid);
            $batch_query .= " WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [StockCode]=" . QuotedStr($det->stockcode) . " AND [Period]=" . QuotedStr($det->period) . " AND [DayNo]=" . QuotedStr($det->dayno) . "; ";
        }

        return $batch_query;
    }

    public function KITProcess_Creation($conn_client, $det, $wTACostEx, $myKits, $ss_Stk_DrCr, $xVersion)
    {
        $batch_query = "";
        $today_DAY = date("d");
        foreach ($myKits as $myKit) {
            $KitQty = (float)$myKit["KitQty"];
            $KitUnits = (float)$myKit["KitUnits"];
            $KitStockCode = $myKit["KitStockCode"];
            $KitLinkCode = $myKit["KitLinkCode"];
            $CO = $myKit["CO"];
            $Branch = $myKit["Branch"];
            $stkKit = \genesis\Stkmaster::ini_Code($conn_client, $CO, $Branch, $KitStockCode, $KitLinkCode);
            if (isset($stkKit->stockcode)) {

                $ss_Kit_VATRate = 0;
                $wACostEx = 0;
                $wACostPerc = 0;
                $ss_Kit_LineTotalEx = $det->linetotalexcl;
                $ss_Kit_LineTotCostEx = $wTACostEx;

                $wVAT = $stkKit->avgcostincl - $stkKit->avgcostexcl;
                if ($wVAT !== 0) {
                    $ss_Kit_VATRate = round((($wVAT / $stkKit->avgcostexcl) * 100), 2);
                }
                if ($stkKit->avgcostexcl !== 0) {
                    $wACostEx = ($stkKit->avgcostexcl * $KitQty);
                    $wACostPerc = (($wACostEx / $wTACostEx) * 100);
                }

                $ss_KitLinkQty = ($KitQty * $KitUnits);
                $ss_KitTotalQty = ($KitQty * $det->quantity);
                $ss_KitTotalLinkQty = ($ss_KitLinkQty * $det->quantity);

                if ($wACostPerc != 0) {
                    $ss_Kit_LineTotalEx = $det->linetotalexcl * ($wACostPerc / 100);
                    $ss_Kit_LineTotCostEx = $wTACostEx * ($wACostPerc / 100);
                }

                $ss_Kit_LineTotRebEx = ($stkKit->rebateavgexcl * $KitQty) * $det->quantity;
                $ss_Kit_LineVAT = round(($ss_Kit_LineTotalEx * ($ss_Kit_VATRate / 100)), 3);
                $ss_Kit_PriceExcl = round(($det->priceexcl * ($wACostPerc / 100)), 3);
                $ss_Kit_PriceIncl = round(($det->priceincl * ($wACostPerc / 100)), 3);

                //region STKBalance
                $wTotalQty = 0;
                if ($det->txtp === "POSCSH" ||
                    $det->txtp === "DEBAPC" ||
                    $det->txtp === "POSASL") {
                    $wTotalQty = $ss_KitTotalLinkQty * -1;
                }
                if ($det->txtp === "POSCSR" ||
                    $det->txtp === "POSART") {
                    $wTotalQty = $ss_KitTotalLinkQty;
                }
                $stkBalance = new  \genesis\Stkbalance();
                $stkBalance->co = $stkKit->co;
                $stkBalance->branch = $stkKit->branch;
                $stkBalance->stockcode = $stkKit->stockcode;
                $stkBalance->linkcode = $stkKit->linkcode;
                $stkBalance->wh = $det->wh;
                $stkBalance->lastinvoiceno = $det->docno;
                if ($det->txtp === "POSCSH" ||
                    $det->txtp === "POSCSR" ||
                    $det->txtp === "POSASL" ||
                    $det->txtp === "POSART") {
                    $stkBalance->onhand = $wTotalQty;
                }
                if ($det->txtp === "DEBAPI" ||
                    $det->txtp === "DEBAPC") {
                    $stkBalance->consignment = $wTotalQty;
                }
                if ($det->txtp === "DEBSOR") {
                    $stkBalance->salesorder = $wTotalQty;
                }
                $stkBalance->dtodate = $det->dtodate;
                $stkBalance->dtotime = $det->dtotime;
                $stkBalance->dtouser = $det->dtouser;
                $stkBalance->dtomacid = $det->dtomacid;
                //STKBalance...
                $batch_query .= $this->STKBalance_Creation($stkBalance);

                //endregion

                //region Stats
                if ($det->txtp !== "DEBSOR" &&
                    $det->txtp !== "DEBQOT" &&
                    $det->txtp !== "DEBAPI" &&
                    $det->txtp !== "DEBAPC") {

                    $stkDailyStats = new  \genesis\Stkdailystats();
                    $stkDailyStats->co = $stkKit->co;
                    $stkDailyStats->branch = $stkKit->branch;
                    $stkDailyStats->stockcode = $stkKit->stockcode;
                    $stkDailyStats->linkcode = $stkKit->linkcode;
                    $stkDailyStats->period = $det->ap;
                    $stkDailyStats->units = $KitUnits;
                    $stkDailyStats->dayno = $today_DAY;
                    if ($det->txtp === "POSCSR" || $det->txtp === "POSART") {
                        $stkDailyStats->saleqty = ($ss_KitTotalQty * -1);
                        $stkDailyStats->linkqty = ($ss_KitTotalLinkQty * -1);
                        $stkDailyStats->salecostex = ($ss_Kit_LineTotCostEx * -1);
                        $stkDailyStats->saleexcl = ($ss_Kit_LineTotalEx * -1);
                        $stkDailyStats->rebateexcl = ($ss_Kit_LineTotRebEx * -1);
                    } else {
                        $stkDailyStats->saleqty = ($ss_KitTotalQty);
                        $stkDailyStats->linkqty = ($ss_KitTotalLinkQty);
                        $stkDailyStats->salecostex = ($ss_Kit_LineTotCostEx);
                        $stkDailyStats->saleexcl = ($ss_Kit_LineTotalEx);
                        $stkDailyStats->rebateexcl = ($ss_Kit_LineTotRebEx);
                    }

                    //STKDailyStats...
                    $batch_query .= $this->STKDailyStats_Creation($stkDailyStats);


                }
                //endregion

                //region STKTxan
                {
                    $stkTxan = new \genesis\Stktxan();

                    $stkTxan->co = $stkKit->co;
                    $stkTxan->branch = $stkKit->branch;
                    $stkTxan->stockcode = $stkKit->stockcode;
                    $stkTxan->linkcode = $stkKit->linkcode;
                    $stkTxan->txtp = $det->txtp;
                    $stkTxan->trandate = $det->trandate;
                    $stkTxan->ap = $det->ap;
                    $stkTxan->docno = $det->docno;
                    $stkTxan->details = "KIT SALE ON CODE : " . $det->stockcode;
                    $stkTxan->wh = $det->wh;
                    $stkTxan->qty = $ss_KitTotalQty;
                    $stkTxan->linkqty = $ss_KitTotalLinkQty;
                    $stkTxan->kitqty = $ss_KitTotalQty;
                    $stkTxan->price = $ss_Kit_PriceExcl;
                    $stkTxan->amount = $ss_Kit_LineTotalEx;
                    $stkTxan->drcr = $ss_Stk_DrCr;
                    $stkTxan->taxamount = $ss_Kit_LineVAT;
                    $stkTxan->taxrate = $ss_Kit_VATRate;
                    $stkTxan->taxindicator = $det->vatindicator;
                    $stkTxan->supervisor = $det->supervisor;
                    $stkTxan->dtodate = $det->dtodate;
                    $stkTxan->dtotime = $det->dtotime;
                    $stkTxan->dtouser = $det->dtouser;
                    $stkTxan->dtomacid = $det->dtomacid;
                    $stkTxan->version = $xVersion;
                    $stkTxan->units = $KitUnits;
                    //STKTxan...
                    $batch_query .= $this->STKTxan_Creation($stkTxan);
                }


                //endregion

                //region Kit Sales
                $stkKitSales = new  \genesis\Stkkitsales();
                $stkKitSales->co = $det->co;
                $stkKitSales->branch = $det->branch;
                $stkKitSales->stockcode = $det->stockcode;
                $stkKitSales->dayno = $today_DAY;
                $stkKitSales->period = $det->ap;

                $ss_LineTotRebAvgAmnt = $det->rebavgamnt * $det->quantity;
                if ($det->txtp === "POSCSR" ||
                    $det->txtp === "POSART") {
                    $stkKitSales->saleqty = $det->quantity * -1;
                    $stkKitSales->salecostex = $det->totalcostexcl * -1;
                    $stkKitSales->saleexcl = $det->linetotalexcl * -1;
                    $stkKitSales->rebateexcl = $ss_LineTotRebAvgAmnt * -1;
                } else {

                    $stkKitSales->saleqty = $det->quantity;
                    $stkKitSales->salecostex = $det->totalcostexcl;
                    $stkKitSales->saleexcl = $det->linetotalexcl;
                    $stkKitSales->rebateexcl = $ss_LineTotRebAvgAmnt;
                }


                $stkKitSales->dtodate = $det->dtodate;
                $stkKitSales->dtotime = $det->dtotime;
                $stkKitSales->dtouser = $det->dtouser;
                $stkKitSales->dtomacid = $det->dtomacid;
                $batch_query .= $this->STKKitSales_Creation($stkKitSales);
                //endregion


            }
        }


        return $batch_query;
    }

    public function STKSTakeCounts_Creation($det)
    {

        $batch_query = "";

        $batch_query .= 'INSERT INTO [STKSTakeCounts] ( ';
        $batch_query .= ' [CO], [Branch], [BatchNo], [StockCode], [LinkCode], [StockType], [Units], ';
        $batch_query .=  '[CountQty], [CountLinkQty], [PageNo], [LineNo], [CountName], [ScannerFile], ';
        $batch_query .= ' [ScannerDTO], [Description1], [BarCode], [PackSize], [CostExcl], [CostIncl],';
        $batch_query .= ' [SecondCountQty], [SecondCountLinkQty],[CounterID] ';
        $batch_query .= ' ) VALUES ( ';
        $batch_query .= QuotedStr($det->co) . ', ';//{CO (nvarchar[5]) }
        $batch_query .= QuotedStr($det->branch) . ', '; //{Branch (nvarchar[5]) }
        $batch_query .= QuotedStr($det->batchno) . ', '; //{BatchNo}
        $batch_query .= QuotedStr($det->stockcode) . ', ';//{StockCode}
        $batch_query .= QuotedStr($det->linkcode) . ', '; //{LinkCode}
        $batch_query .= QuotedStr($det->stocktype) . ', ';//{StockType}
        $batch_query .= QuotedStr($det->units) . ', '; //{Units}
        $batch_query .= QuotedStr($det->countqty) . ', ';//{CountQty}
        $batch_query .= QuotedStr($det->countlinkqty) . ', '; //{CountLinkQty}
        $batch_query .= QuotedStr($det->pageno) . ', ';//{PageNo}
        $batch_query .= QuotedStr($det->lineno) . ', ';//{LineNo}
        $batch_query .= QuotedStr($det->countname) . ', ';//{CountName}
        $batch_query .= QuotedStr($det->scannerfile) . ', ';//{ScannerFile}
        $batch_query .= QuotedStr($det->scannerdto) . ', ';//{ScannerDTO}
        $batch_query .= QuotedStr($det->description1) . ', ';//{Description1}
        $batch_query .= QuotedStr($det->barcode) . ', '; //{BarCode}
        $batch_query .= QuotedStr($det->packsize) . ', ';//{PackSize}
        $batch_query .= QuotedStr($det->costexcl) . ', '; //{CostExcl}
        $batch_query .= QuotedStr($det->costincl) . ', '; //{CostIncl}
        $batch_query .= QuotedStr($det->secondcountqty) . ', '; //{SecondCountQty}
        $batch_query .= QuotedStr($det->secondcountlinkqty) . ',';//secondcountlinkqty
        $batch_query .= QuotedStr($det->counterid) . ');';//CounterID

        return $batch_query;
    }

    public function PURORDDET_Creation($det)
    {

        $batch_query = "";

        $batch_query .= 'INSERT INTO [PURORDDET] ( ';
        $batch_query .= ' [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [STOCKCODE], [LINKCODE], ';
        $batch_query .= ' [DESCRIPTION1], [DESCRIPTION2], [QUANTITY], [FREEQTY], [RECVQTY], [BALQTY],';
        $batch_query .= '  [PRICEINCL], [DISCOUNT], [VAT], [TOTALEXCL], [TOTALINCL], [VATINDICATOR], ';
        $batch_query .= ' [FREESTOCKIND], [SELLEXCL], [SELLINCL], [AVGCOSTEXCL], [AVGCOSTINCL], [GRVQUANTITY], ';
        $batch_query .= ' [GRVCOSTEXCL], [GRVCOSTINCL], [TOTALUNITS], [TOTALCASES], [TOTALPALETTES],';
        $batch_query .= '  [TOTALWEIGHT], [DIMENSION], [SERIALTRACK], [BARCODE], [SUPPCODE], ';
        $batch_query .= ' [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [LINENO], [VATCODE], [VATRATE], ';
        $batch_query .= ' [SUGGEXCL], [SUGGINCL], [BALANCEQTY], [WH], [RECFREEQTY], [BALFREEQTY], ';
        $batch_query .= ' [PRICE], [PRICEEXCL], [Units], [LinkQty], [LinkFreeQty], [LinkRecvQty], [LinkBalQty], ';
        $batch_query .= ' [LinkRecvFreeQty], [LinkBalFreeQty], [DocClaimExcl], [DocClaimIncl], [LineClaimExcl], ';
        $batch_query .= ' [LineClaimIncl], [ScanQty], [ScanLinkQty], [Onhand], [MinQty], [MaxQty], [BackOrders],';
        $batch_query .= '  [BuyCostExcl], [BuyCostIncl], [ListCostExcl], [ListCostIncl], [Supplier], [Periods], ';
        $batch_query .= ' [PeriodDays], [PeriodDays1], [PeriodDays2], [PeriodDays3], [PeriodDays4], [PeriodDays5], ';
        $batch_query .= ' [Period1], [Period2], [Period3], [Period4], [Period5], [PeriodOrder], [PeriodAvgCalcInd]';
        $batch_query .= ' ) VALUES ( ';
        $batch_query .= QuotedStr($det->co) . ', ';//{CO}
        $batch_query .= QuotedStr($det->branch) . ', '; //{Branch}
        $batch_query .= QuotedStr($det->account) . ', '; //{ACCOUNT}
        $batch_query .= QuotedStr($det->subaccount) . ', ';//{SUBACCOUNT}
        $batch_query .= QuotedStr($det->orderno) . ', '; //{ORDERNO}
        $batch_query .= QuotedStr($det->stockcode) . ', ';//{STOCKCODE}
        $batch_query .= QuotedStr($det->linkcode) . ', '; //{LINKCODE}
        $batch_query .= QuotedStr($det->description1) . ', ';//{DESCRIPTION1}
        $batch_query .= QuotedStr($det->description2) . ', '; //{DESCRIPTION2}
        $batch_query .= QuotedStr($det->quantity) . ', ';//{QUANTITY}
        $batch_query .= QuotedStr($det->freeqty) . ', ';//{FREEQTY}
        $batch_query .= QuotedStr($det->recvqty) . ', ';//{RECVQTY}
        $batch_query .= QuotedStr($det->balqty) . ', ';//{BALQTY}
        $batch_query .= QuotedStr($det->priceincl) . ', ';//{PRICEINCL}
        $batch_query .= QuotedStr($det->discount) . ', ';//{DISCOUNT}
        $batch_query .= QuotedStr($det->vat) . ', '; //{VAT}
        $batch_query .= QuotedStr($det->totalexcl) . ', ';//{TOTALEXCL}
        $batch_query .= QuotedStr($det->totalincl) . ', '; //{TOTALINCL}
        $batch_query .= QuotedStr($det->vatindicator) . ', '; //{VATINDICATOR}
        $batch_query .= QuotedStr($det->freestockind) . ', '; //{FREESTOCKIND}
        $batch_query .= QuotedStr($det->sellexcl) . ', '; //{SELLEXCL}
        $batch_query .= QuotedStr($det->sellincl) . ', '; //{SELLINCL}
        $batch_query .= QuotedStr($det->avgcostexcl) . ', '; //{AVGCOSTEXCL}
        $batch_query .= QuotedStr($det->avgcostincl) . ', '; //{AVGCOSTINCL}
        $batch_query .= QuotedStr($det->grvquantity) . ', '; //{GRVQUANTITY}
        $batch_query .= QuotedStr($det->grvcostexcl) . ', '; //{GRVCOSTEXCL}
        $batch_query .= QuotedStr($det->grvcostincl) . ', '; //{GRVCOSTINCL}
        $batch_query .= QuotedStr($det->totalunits) . ', '; //{TOTALUNITS}
        $batch_query .= QuotedStr($det->totalcases) . ', '; //{TOTALCASES}
        $batch_query .= QuotedStr($det->totalpalettes) . ', '; //{TOTALPALETTES}
        $batch_query .= QuotedStr($det->totalweight) . ', '; //{TOTALWEIGHT}
        $batch_query .= QuotedStr($det->dimension) . ', '; //{DIMENSION}
        $batch_query .= QuotedStr($det->serialtrack) . ', '; //{SERIALTRACK}
        $batch_query .= QuotedStr($det->barcode) . ', '; //{BARCODE}
        $batch_query .= QuotedStr($det->suppcode) . ', '; //{SUPPCODE}
        $batch_query .= QuotedStr($det->dtodate) . ', '; //{DTODATE}
        $batch_query .= QuotedStr($det->dtotime) . ', '; //{DTOTIME}
        $batch_query .= QuotedStr($det->dtouser) . ', '; //{DTOUSER}
        $batch_query .= QuotedStr($det->dtomacid) . ', '; //{DTOMACID}
        $batch_query .= QuotedStr($det->lineno) . ', '; //{LINENO}
        $batch_query .= QuotedStr($det->vatcode) . ', '; //{VATCODE}
        $batch_query .= QuotedStr($det->vatrate) . ', '; //{VATRATE}
        $batch_query .= QuotedStr($det->suggexcl) . ', '; //{SUGGEXCL}
        $batch_query .= QuotedStr($det->suggincl) . ', '; //{SUGGINCL}
        $batch_query .= QuotedStr($det->balanceqty) . ', '; //{BALANCEQTY}
        $batch_query .= QuotedStr($det->wh) . ', '; //{WH}
        $batch_query .= QuotedStr($det->recfreeqty) . ', '; //{RECFREEQTY}
        $batch_query .= QuotedStr($det->balfreeqty) . ', '; //{BALFREEQTY}
        $batch_query .= QuotedStr($det->price) . ', '; //{PRICE}
        $batch_query .= QuotedStr($det->priceexcl) . ', '; //{PRICEEXCL}
        $batch_query .= QuotedStr($det->units) . ', '; //{Units}
        $batch_query .= QuotedStr($det->linkqty) . ', '; //{LinkQty}
        $batch_query .= QuotedStr($det->linkfreeqty) . ', '; //{LinkFreeQty}
        $batch_query .= QuotedStr($det->linkrecvqty) . ', '; //{LinkRecvQty}
        $batch_query .= QuotedStr($det->linkbalqty) . ', '; //{LinkBalQty}
        $batch_query .= QuotedStr($det->linkrecvfreeqty) . ', '; //{LinkRecvFreeQty}
        $batch_query .= QuotedStr($det->linkbalfreeqty) . ', '; //{LinkBalFreeQty}
        $batch_query .= QuotedStr($det->docclaimexcl) . ', '; //{DocClaimExcl}
        $batch_query .= QuotedStr($det->docclaimincl) . ', '; //{DocClaimIncl}
        $batch_query .= QuotedStr($det->lineclaimexcl) . ', '; //{LineClaimExcl}
        $batch_query .= QuotedStr($det->lineclaimincl) . ', '; //{LineClaimIncl}
        $batch_query .= QuotedStr($det->scanqty) . ', '; //{ScanQty}
        $batch_query .= QuotedStr($det->scanlinkqty) . ', '; //{ScanLinkQty}
        $batch_query .= QuotedStr($det->onhand) . ', '; //{Onhand}
        $batch_query .= QuotedStr($det->minqty) . ', '; //{MinQty}
        $batch_query .= QuotedStr($det->maxqty) . ', '; //{MaxQty}
        $batch_query .= QuotedStr($det->backorders) . ', '; //{BackOrders}
        $batch_query .= QuotedStr($det->buycostexcl) . ', '; //{BuyCostExcl}
        $batch_query .= QuotedStr($det->buycostincl) . ', '; //{BuyCostIncl}
        $batch_query .= QuotedStr($det->listcostexcl) . ', '; //{ListCostExcl}
        $batch_query .= QuotedStr($det->listcostincl) . ', '; //{ListCostIncl}
        $batch_query .= QuotedStr($det->supplier) . ', '; //{Supplier}
        $batch_query .= QuotedStr($det->periods) . ', '; //{Periods}
        $batch_query .= QuotedStr($det->perioddays) . ', '; //{PeriodDays}
        $batch_query .= QuotedStr($det->perioddays1) . ', '; //{PeriodDays1}
        $batch_query .= QuotedStr($det->perioddays2) . ', '; //{PeriodDays2}
        $batch_query .= QuotedStr($det->perioddays3) . ', '; //{PeriodDays3}
        $batch_query .= QuotedStr($det->perioddays4) . ', '; //{PeriodDays4}
        $batch_query .= QuotedStr($det->perioddays5) . ', '; //{PeriodDays5}
        $batch_query .= QuotedStr($det->periods1) . ', '; //{Periods1}
        $batch_query .= QuotedStr($det->periods2) . ', '; //{Periods2}
        $batch_query .= QuotedStr($det->periods3) . ', '; //{Periods3}
        $batch_query .= QuotedStr($det->periods4) . ', '; //{Periods4}
        $batch_query .= QuotedStr($det->periods5) . ', '; //{Periods5}
        $batch_query .= QuotedStr($det->periodorder) . ', '; //{PeriodOrder}
        $batch_query .= QuotedStr($det->periodavgcalcind) . ');';//PeriodAvgCalcInd

        return $batch_query;
    }

    public function PURORDHDR_Creation($det)
    {

        $batch_query = "";

        $batch_query .= 'INSERT INTO [PURORDHDR] ( ';
        $batch_query .= ' [CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [ORDERNO], [ORDERDATE], [DELIVERYDATE], [DELIVERYTIME],';//1
        $batch_query .= ' [NAME], [ADDRESS1], [ADDRESS2], [ADDRESS3], [ADDRESS4], [POSTALCODE], [TELEPHONE], [FAX], ';//2
        $batch_query .= '[EMAIL], [CONTACT], [BUYER], [TERMCODE], [REFERENCE], [ORDCARDNO], [GRVNO], [STATUS], ';//3
        $batch_query .= '[VATINDICATOR], [TOTALCASES], [TOTALPALLETTES], [TOTALWEIGHT], [TOTALDISCOUNT], [TOTALDIMENSION],';//4
        $batch_query .= ' [TOTALVAT], [TOTALEXCL], [TOTALINCL], [NOTES], ';//5
        $batch_query .= '[DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [SUGGORDEXCL], [SUGGORDINCL], [WH], ';//6
        $batch_query .= '[COMMMETHOD], [APPROVED], [APPROVEDATE], [APPROCEDUSER], [PAYMENTDATE], [DUEOVERRIDE], ';//7
        $batch_query .= '[DETAILLINES], [EXTENDEDTERMS], [EXTENDEDDAYS], [EXTENDEDDATE], [DESTCO], [DESTBRANCH], ';//8
        $batch_query .= '[DEBACCOUNT], [INDICATORS], [BASETYPE], [BASEREF], [SUPPACC], [VERSION], [InUse],';//9
        $batch_query .= ' [ApprovedUser], [DocTallyExcl], [DocTallyIncl], [DEBRefAccount]';//10
        $batch_query .= ' ) VALUES ( ';
        $batch_query .= QuotedStr($det->co) . ', ';//{CO}
        $batch_query .= QuotedStr($det->branch) . ', '; //{Branch}
        $batch_query .= QuotedStr($det->account) . ', '; //{ACCOUNT}
        $batch_query .= QuotedStr($det->subaccount) . ', ';//{SUBACCOUNT}
        $batch_query .= QuotedStr($det->orderno) . ', '; //{ORDERNO}
        $batch_query .= QuotedStr($det->orderdate) . ', ';//{ORDERDATE}
        $batch_query .= QuotedStr($det->deliverydate) . ', '; //{DELIVERYDATE}
        $batch_query .= QuotedStr($det->deliverytime) . ', ';//{DELIVERYTIME}

        $batch_query .= QuotedStr($det->name) . ', '; //{NAME}
        $batch_query .= QuotedStr($det->address1) . ', ';//{ADDRESS1}
        $batch_query .= QuotedStr($det->address2) . ', ';//{ADDRESS2}
        $batch_query .= QuotedStr($det->address3) . ', ';//{ADDRESS3}
        $batch_query .= QuotedStr($det->address4) . ', ';//{ADDRESS4}
        $batch_query .= QuotedStr($det->postalcode) . ', ';//{POSTALCODE}
        $batch_query .= QuotedStr($det->telephone) . ', ';//{TELEPHONE}
        $batch_query .= QuotedStr($det->fax) . ', '; //{FAX}

        $batch_query .= QuotedStr($det->email) . ', ';//{EMAIL}
        $batch_query .= QuotedStr($det->contact) . ', '; //{CONTACT}
        $batch_query .= QuotedStr($det->buyer) . ', '; //{BUYER}
        $batch_query .= QuotedStr($det->termcode) . ', '; //{TERMCODE}
        $batch_query .= QuotedStr($det->reference) . ', '; //{REFERENCE}
        $batch_query .= QuotedStr($det->ordcardno) . ', '; //{ORDCARDNO}
        $batch_query .= QuotedStr($det->grvno) . ', '; //{GRVNO}
        $batch_query .= QuotedStr($det->status) . ', '; //{STATUS}

        $batch_query .= QuotedStr($det->vatindicator) . ', '; //{VATINDICATOR}
        $batch_query .= QuotedStr($det->totalcases) . ', '; //{TOTALCASES}
        $batch_query .= QuotedStr($det->totalpallettes) . ', '; //{TOTALPALLETTES}
        $batch_query .= QuotedStr($det->totalweight) . ', '; //{TOTALWEIGHT}
        $batch_query .= QuotedStr($det->totaldiscount) . ', '; //{TOTALDISCOUNT}
        $batch_query .= QuotedStr($det->totaldimension) . ', '; //{TOTALDIMENSION}

        $batch_query .= QuotedStr($det->totalvat) . ', '; //{TOTALVAT}
        $batch_query .= QuotedStr($det->totalexcl) . ', '; //{TOTALEXCL}
        $batch_query .= QuotedStr($det->totalincl) . ', '; //{TOTALINCL}
        $batch_query .= QuotedStr($det->notes) . ', '; //{NOTES}

        $batch_query .= QuotedStr($det->dtodate) . ', '; //{DTODATE}
        $batch_query .= QuotedStr($det->dtotime) . ', '; //{DTOTIME}
        $batch_query .= QuotedStr($det->dtouser) . ', '; //{DTOUSER}
        $batch_query .= QuotedStr($det->dtomacid) . ', '; //{DTOMACID}
        $batch_query .= QuotedStr($det->suggordexcl) . ', '; //{SUGGORDEXCL}
        $batch_query .= QuotedStr($det->suggordincl) . ', '; //{SUGGORDINCL}
        $batch_query .= QuotedStr($det->wh) . ', '; //{WH}

        $batch_query .= QuotedStr($det->commmethod) . ', '; //{COMMMETHOD}
        $batch_query .= QuotedStr($det->approved) . ', '; //{APPROVED}
        $batch_query .= QuotedStr($det->approvedate) . ', '; //{APPROVEDATE}
        $batch_query .= QuotedStr($det->approveduser) . ', '; //{APPROCEDUSER}
        $batch_query .= QuotedStr($det->paymentdate) . ', '; //{PAYMENTDATE}
        $batch_query .= QuotedStr($det->dueoverride) . ', '; //{DUEOVERRIDE}

        $batch_query .= QuotedStr($det->detaillines) . ', '; //{DETAILLINES}
        $batch_query .= QuotedStr($det->extendedterms) . ', '; //{EXTENDEDTERMS}
        $batch_query .= QuotedStr($det->extendeddays) . ', '; //{EXTENDEDDAYS}
        $batch_query .= QuotedStr($det->extendeddate) . ', '; //{EXTENDEDDATE}
        $batch_query .= QuotedStr($det->destco) . ', '; //{DESTCO}
        $batch_query .= QuotedStr($det->destbranch) . ', '; //{DESTBRANCH}

        $batch_query .= QuotedStr($det->debaccount) . ', '; //{DEBACCOUNT}
        $batch_query .= QuotedStr($det->indicators) . ', '; //{INDICATORS}
        $batch_query .= QuotedStr($det->basetype) . ', '; //{BASETYPE}
        $batch_query .= QuotedStr($det->baseref) . ', '; //{BASEREF}
        $batch_query .= QuotedStr($det->suppacc) . ', '; //{SUPPACC}
        $batch_query .= QuotedStr($det->version) . ', '; //{VERSION}
        $batch_query .= QuotedStr($det->inuse) . ', '; //{InUse}

        $batch_query .= QuotedStr($det->approveduser) . ', '; //{ApprovedUser}
        $batch_query .= QuotedStr($det->doctallyexcl) . ', '; //{DocTallyExcl}
        $batch_query .= QuotedStr($det->doctallyincl) . ', '; //{DocTallyIncl}
        $batch_query .= QuotedStr($det->debrefaccount) . ' );';

        return $batch_query;
    }

    public function STKgrvdetl_Creation($det, $only_recv=false)
    {

        $batch_query = "";


        $batch_query .= "IF NOT EXISTS ( SELECT [STKGrvDetl].* FROM [STKGrvDetl] WHERE [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [TxTp]= " . QuotedStr($det->txtp) . " AND [GRVNO]=" . QuotedStr($det->grvno) . " AND [Account]=" . QuotedStr($det->account) . " AND [STOCKCODE]=" . QuotedStr($det->stockcode) . " AND [LINKCODE]=" . QuotedStr($det->linkcode) . " AND [STOCKTYPE]=" . QuotedStr($det->stocktype) . ")";


        //region INSERT

        $batch_query .= "INSERT INTO [STKGrvDetl] ([CO], [BRANCH], [ACCOUNT], [SUBACCOUNT], [TXTP], [GRVNO], [LINENO], [STOCKCODE], [LINKCODE], [DESCRIPTION1], [DESCRIPTION2], [STOCKTYPE], [WH], [RECVQTY], [RECVFREEQTY], [RECVPRICE], [RECVDISCOUNT], [RECVTOTAL], [RECVTAX], [RECVNETUNIT], [RECVNNET], [TAXRATE], [UNITS], [RECVTAXCODE], [RECVTOTALINCL], [RECVDOCCHARGES], [RECVDOCDISC], [PACKSIZE], [SUPPCODE], [BARCODE], [ORDERQTY], [ORDERFREEQTY], [ORDERPRICE], [INVQTY], [INVFREEQTY], [INVPRICE], [INVTOTAL], [INVDISCOUNT], [INVTAX], [SQMBOX], [CASES], [FOREIGNCCY], [RATE], [REBATECOST], [REBATENCOST], [INPUTRTOTAL], [INPUTITOTAL], [LINKQTY], [LINKCODENETCOST], [DTODATE], [DTOTIME], [DTOUSER], [DTOMACID], [BASETYPE], [BASEREF], [BASELINE], [AP], [GRVDATE], [TAXINDICATOR], [ReturnLine], [INVLinkQty], [RECVFreeLinkQty], [INVFreeLinkQty], [DocCharges], [DocDiscounts], [SerialTrack], [VirtualCard], [DocTallyExcl], [DocTallyIncl], [LineTallyExcl], [LineTallyIncl], [TonnageRebCosted], [TonnageRebNonCosted], [InvWeight], [RecvWeight], [ScaleItem], [ScaleType], [InvCases], [RecvCases], [Status], [ReturnReason],[QtyDecimal],[CostDecimal]) ";

        $batch_query .= "VALUES (";
        $batch_query .= QuotedStr($det->co) . ",";
        $batch_query .= QuotedStr($det->branch) . ",";
        $batch_query .= QuotedStr($det->account) . ",";
        $batch_query .= QuotedStr($det->subaccount) . ",";
        $batch_query .= QuotedStr($det->txtp) . ",";
        $batch_query .= QuotedStr($det->grvno) . ",";
        $batch_query .= QuotedStr($det->lineno) . ","; //'").append(obj.getLINENO()).append("',");
        $batch_query .= QuotedStr($det->stockcode) . ","; //" '").append(Utils.sql_value(obj.getSTOCKCODE())).append("',");
        $batch_query .= QuotedStr($det->linkcode) . ","; //" '").append(Utils.sql_value(obj.getLINKCODE())).append("',");
        $batch_query .= QuotedStr($det->description1) . ","; //" '").append(Utils.sql_value(obj.getDESCRIPTION1())).append("',");
        $batch_query .= QuotedStr($det->description2) . ","; //" '").append(Utils.sql_value(obj.getDESCRIPTION2())).append("',");
        $batch_query .= QuotedStr($det->stocktype) . ","; //" '").append(Utils.sql_value(obj.getSTOCKTYPE())).append("',");
        $batch_query .= QuotedStr($det->wh) . ","; //" '").append(obj.getWH()).append("',");
        $batch_query .= QuotedStr($det->recvqty) . ","; //" '").append(obj.getRECVQTY()).append("',");
        $batch_query .= QuotedStr($det->recvfreeqty) . ","; //" '").append(obj.getRECVFREEQTY()).append("',");
        $batch_query .= QuotedStr($det->recvprice) . ","; //" '").append(obj.getRECVPRICE()).append("',");
        $batch_query .= QuotedStr($det->recvdiscount) . ","; //" '").append(obj.getRECVDISCOUNT()).append("',");
        $batch_query .= QuotedStr($det->recvtotal) . ","; //" '").append(obj.getRECVTOTAL()).append("',");
        $batch_query .= QuotedStr($det->recvtax) . ","; //" '").append(obj.getRECVTAX()).append("',");
        $batch_query .= QuotedStr($det->recvnetunit) . ","; //" '").append(obj.getRECVNETUNIT()).append("',");
        $batch_query .= QuotedStr($det->recvnnet) . ","; //" '").append(obj.getRECVNNET()).append("',");
        $batch_query .= QuotedStr($det->recvtax) . ","; //" '").append(obj.getRECVTAX()).append("',");
        $batch_query .= QuotedStr($det->units) . ","; //" '").append(obj.getUNITS()).append("',");
        $batch_query .= QuotedStr($det->recvtaxcode) . ","; //" '").append(obj.getRECVTAXCODE()).append("',");
        $batch_query .= QuotedStr($det->recvtotalincl) . ","; //" '").append(obj.getRECVTOTALINCL()).append("',");
        $batch_query .= QuotedStr($det->recvdoccharges) . ","; //" '").append(obj.getRECVDOCCHARGES()).append("',");
        $batch_query .= QuotedStr($det->recvdocdisc) . ","; //" '").append(obj.getRECVDOCDISC()).append("',");
        $batch_query .= QuotedStr($det->packsize) . ","; //" '").append(Utils.sql_value(obj.getPACKSIZE())).append("',");
        $batch_query .= QuotedStr($det->suppcode) . ","; //" '").append(Utils.sql_value(obj.getSUPPCODE())).append("',");
        $batch_query .= QuotedStr($det->barcode) . ","; //" '").append(Utils.sql_value(obj.getBARCODE())).append("',");
        $batch_query .= QuotedStr($det->orderqty) . ","; //" '").append(obj.getORDERQTY()).append("',");
        $batch_query .= QuotedStr($det->orderfreeqty) . ","; //" '").append(obj.getORDERFREEQTY()).append("',");
        $batch_query .= QuotedStr($det->orderprice) . ","; //" '").append(obj.getORDERPRICE()).append("',");
        $batch_query .= QuotedStr($det->invqty) . ","; //" '").append(obj.getINVQTY()).append("',");
        $batch_query .= QuotedStr($det->invfreeqty) . ","; //" '").append(obj.getINVFREEQTY()).append("',");
        $batch_query .= QuotedStr($det->invprice) . ","; //" '").append(obj.getINVPRICE()).append("',");
        $batch_query .= QuotedStr($det->invtotal) . ","; //" '").append(obj.getINVTOTAL()).append("',");
        $batch_query .= QuotedStr($det->invdiscount) . ","; //" '").append(obj.getINVDISCOUNT()).append("',");
        $batch_query .= QuotedStr($det->invtax) . ","; //" '").append(obj.getINVTAX()).append("',");
        $batch_query .= QuotedStr($det->sqmbox) . ","; //" '").append(obj.getSQMBOX()).append("',");
        $batch_query .= QuotedStr($det->cases) . ","; //" '").append(obj.getCASES()).append("',");
        $batch_query .= QuotedStr($det->foreignccy) . ","; //" '").append(Utils.sql_value(obj.getFOREIGNCCY())).append("',");
        $batch_query .= QuotedStr($det->rate) . ","; //" '").append(obj.getRATE()).append("',");
        $batch_query .= QuotedStr($det->rebatecost) . ","; //" '").append(obj.getREBATECOST()).append("',");
        $batch_query .= QuotedStr($det->rebatencost) . ","; //" '").append(obj.getREBATENCOST()).append("',");
        $batch_query .= QuotedStr($det->inputrtotal) . ","; //" '").append(obj.getINPUTRTOTAL()).append("',");
        $batch_query .= QuotedStr($det->inputitotal) . ","; //" '").append(obj.getINPUTITOTAL()).append("',");
        $batch_query .= QuotedStr($det->linkqty) . ","; //" '").append(obj.getLINKQTY()).append("',");
        $batch_query .= QuotedStr($det->linkcodenetcost) . ","; //" '").append(obj.getLINKCODENETCOST()).append("',");
        $batch_query .= QuotedStr($det->dtodate) . ","; //" '").append(Utils.sql_value(dateFormat.format(today))).append("',");
        $batch_query .= QuotedStr($det->dtotime) . ","; //" '").append(Utils.sql_value(timeFormat.format(today))).append("',");
        $batch_query .= QuotedStr($det->dtouser) . ","; //" '").append(Utils.sql_value(UserCode)).append("',");
        $batch_query .= QuotedStr($det->dtomacid) . ","; //" '").append(Utils.sql_value(MacID)).append("',");
        $batch_query .= QuotedStr($det->basetype) . ","; //" '").append(Utils.sql_value(obj.getBASETYPE())).append("',");
        $batch_query .= QuotedStr($det->baseref) . ","; //" '").append(Utils.sql_value(obj.getBASEREF())).append("',");
        $batch_query .= QuotedStr($det->baseline) . ","; //" '").append(Utils.sql_value(obj.getBASELINE())).append("',");
        $batch_query .= QuotedStr($det->ap) . ","; //" '").append(obj.getAP()).append("',");
        $batch_query .= QuotedStr($det->grvdate) . ","; //" '").append(Utils.sql_value(obj.getGRVDATE())).append("',");
        $batch_query .= QuotedStr($det->taxindicator) . ","; //" '").append(Utils.sql_value(obj.getTAXINDICATOR())).append("',");
        $batch_query .= QuotedStr($det->returnline) . ","; //" '").append(Utils.sql_value(obj.getReturnLine())).append("', ");
        $batch_query .= QuotedStr($det->invlinkqty) . ","; //"'").append(obj.getINVLinkQty()).append("',");
        $batch_query .= QuotedStr($det->recvfreelinkqty) . ","; //" '").append(obj.getRECVFreeLinkQty()).append("',");
        $batch_query .= QuotedStr($det->invfreelinkqty) . ","; //" '").append(obj.getINVFreeLinkQty()).append("',");
        $batch_query .= QuotedStr($det->doccharges) . ","; //" '").append(obj.getDocCharges()).append("',");
        $batch_query .= QuotedStr($det->docdiscounts) . ","; //" '").append(obj.getDocDiscounts()).append("',");
        $batch_query .= QuotedStr($det->serialtrack) . ","; //" '").append(obj.getSerialTrack()).append("',");
        $batch_query .= QuotedStr($det->virtualcard) . ","; //" '").append(obj.getVirtualCard()).append("',");
        $batch_query .= QuotedStr($det->doctallyexcl) . ","; //" '").append(obj.getDocTallyExcl()).append("',");
        $batch_query .= QuotedStr($det->doctallyincl) . ","; //" '").append(obj.getDocTallyIncl()).append("',");
        $batch_query .= QuotedStr($det->linetallyexcl) . ","; //" '").append(obj.getLineTallyExcl()).append("',");
        $batch_query .= QuotedStr($det->linetallyincl) . ","; //" '").append(obj.getLineTallyIncl()).append("',");
        $batch_query .= QuotedStr($det->tonnagerebcosted) . ","; //" '").append(obj.getTonnageRebCosted()).append("',");
        $batch_query .= QuotedStr($det->tonnagerebnoncosted) . ","; //" '").append(obj.getTonnageRebNonCosted()).append("',");
        $batch_query .= QuotedStr($det->invweight) . ","; //" '").append(obj.getInvWeight()).append("',");
        $batch_query .= QuotedStr($det->recvweight) . ","; //" '").append(obj.getRecvWeight()).append("',");
        $batch_query .= QuotedStr($det->scaleitem) . ","; //" '").append(Utils.sql_value(obj.getScaleItem())).append("',");
        $batch_query .= QuotedStr($det->scaletype) . ","; //" '").append(Utils.sql_value(obj.getScaleType())).append("',");
        $batch_query .= QuotedStr($det->invcases) . ","; //" '").append(obj.getInvCases()).append("',");
        $batch_query .= QuotedStr($det->recvcases) . ","; //" '").append(obj.getRecvCases()).append("',");
        $batch_query .= QuotedStr($det->status) . ","; //" '").append(obj.getStatus()).append("',");
        $batch_query .= QuotedStr($det->returnreason) . ","; //" '").append(Utils.sql_value(obj.getReturnReason())).append("',");
        $batch_query .= QuotedStr($det->qtydecimal) . ","; //" '").append(Utils.sql_value(obj.getQtyDecimal())).append("',");
        $batch_query .= QuotedStr($det->costdecimal) . ""; //" '").append(Utils.sql_value(obj.getCostDecimal())).append("'");


        $batch_query .= ")";

        //endregion

        $batch_query .= " ELSE ";
        //region Update

        $batch_query .= "UPDATE [STKGrvDetl] ";
        $batch_query .= " SET ";
        if (!$only_recv) {

        }

        $batch_query .= " [RECVQTY]=" . QuotedStr($det->recvqty) . ",";
        $batch_query .= " [RECVFREEQTY]=" . QuotedStr($det->recvfreeqty) . ",";
        $batch_query .= " [RECVPRICE]=" . QuotedStr($det->recvprice) . ",";
        $batch_query .= " [RECVDISCOUNT]=" . QuotedStr($det->recvdiscount) . ",";
        $batch_query .= " [RECVTOTAL]=" . QuotedStr($det->recvtotal) . ",";
        $batch_query .= " [RECVTAX]=" . QuotedStr($det->recvtax) . ",";
        $batch_query .= " [RECVNETUNIT]=" . QuotedStr($det->recvnetunit) . ",";
        $batch_query .= " [RECVNNET]=" . QuotedStr($det->recvnnet) . ",";
        $batch_query .= " [TAXRATE]=" . QuotedStr($det->taxrate) . ",";
        $batch_query .= " [UNITS]=" . QuotedStr($det->units) . ",";
        $batch_query .= " [RECVTAXCODE]=" . QuotedStr($det->recvtaxcode) . ",";
        $batch_query .= " [RECVTOTALINCL]=" . QuotedStr($det->recvtotalincl) . ",";
        $batch_query .= " [RECVDOCCHARGES]=" . QuotedStr($det->recvdoccharges) . ",";
        $batch_query .= " [RECVDOCDISC]=" . QuotedStr($det->recvdocdisc) . ",";
        $batch_query .= " [PACKSIZE]=" . QuotedStr($det->packsize) . ",";
        $batch_query .= " [BARCODE]=" . QuotedStr($det->barcode) . ",";

        $batch_query .= " [LINKQTY]=" . QuotedStr($det->linkqty) . ",";
        $batch_query .= " [LINKCODENETCOST]=" . QuotedStr($det->linkcodenetcost) . ",";
        $batch_query .= " [RECVFreeLinkQty]=" . QuotedStr($det->recvfreelinkqty) . ",";
        $batch_query .= " [RecvCases]=" . QuotedStr($det->recvcases) . ",";
        $batch_query .= " [RecvWeight]=" . QuotedStr($det->recvweight) . ",";

        $batch_query .= " [DTODATE]=" . QuotedStr($det->dtodate) . ",";
        $batch_query .= " [DTOTIME]=" . QuotedStr($det->dtotime) . ",";
        $batch_query .= " [DTOUSER]=" . QuotedStr($det->dtouser) . ",";
        $batch_query .= " [DTOMACID]=" . QuotedStr($det->dtomacid) . " ";


        $batch_query .= " WHERE  [CO]=" . QuotedStr($det->co) . " AND [Branch]=" . QuotedStr($det->branch) . " AND [TxTp]= " . QuotedStr($det->txtp) . " AND [GRVNO]=" . QuotedStr($det->grvno) . " AND [Account]=" . QuotedStr($det->account) . " AND [STOCKCODE]=" . QuotedStr($det->stockcode) . " AND [LINKCODE]=" . QuotedStr($det->linkcode) . " AND [STOCKTYPE]=" . QuotedStr($det->stocktype) . ";";

//endregion


        return $batch_query;
    }
}