<?php
$app_icon=MAIN_URL.'file/App?h=32';
$app_logo=MAIN_URL.'file/App?h=50';
if (isset($MainTheme,$ACCOUNT_OPTIONS_AVAILABLE)) {
    $MainTheme->assign('theme_url', TEMPLATES_URL);
    $MainTheme->assign('main_url', MAIN_URL);
    $MainTheme->assign('appname', AppName);
    $MainTheme->assign('app_icon', $app_icon);
    $MainTheme->assign('app_logo', $app_logo);
    $MainTheme->assign('ACCOUNT_OPTIONS', $ACCOUNT_OPTIONS_AVAILABLE);
    if (isset($ref)) {
        $MainTheme->assign('REF', $ref);//??
    }
    if (isset($MEMBER->account)) {
        $userimage_list = MAIN_URL . 'file/DEBONLINE/' . $MEMBER->account . '/LOGO?h=70';
        $userimage_grid = MAIN_URL . 'file/DEBONLINE/' . $MEMBER->account . '/LOGO?h=120';
        $userimage_avatar = MAIN_URL . 'file/DEBONLINE/' . $MEMBER->account . '/LOGO?h=40';
        $userimage = MAIN_URL . 'file/DEBONLINE/' . $MEMBER->account . '/LOGO';
        $MainTheme->assign('USERID', $MEMBER->recid);
        $MainTheme->assign('USERACCOUNT', $MEMBER->account);
        $MainTheme->assign('USERGENESIS', $MEMBER->genesisaccount);
        $MainTheme->assign('USERPHONE', $MEMBER->cellphone);
        $MainTheme->assign('USEREMAIL', $MEMBER->email);
        $MainTheme->assign('username', $MEMBER->name);

        $MainTheme->assign('ADDRESS1', $MEMBER->deladdress1);
        $MainTheme->assign('ADDRESS2', $MEMBER->deladdress2);
        $MainTheme->assign('ADDRESS3', $MEMBER->deladdress3);
        $MainTheme->assign('ADDRESS4', $MEMBER->deladdress4);
        $MainTheme->assign('ADDRESS_POSTAL_CODE', $MEMBER->delpostcode);

        $line_address="";
        if(!empty($MEMBER->deladdress1)){
            if(!empty($line_address)){
                $line_address.=", ";
            }
            $line_address.=$MEMBER->deladdress1;
        }
        if(!empty($MEMBER->deladdress2)){
            if(!empty($line_address)){
                $line_address.=", ";
            }
            $line_address.=$MEMBER->deladdress2;
        }
        if(!empty($MEMBER->deladdress3)){
            if(!empty($line_address)){
                $line_address.=", ";
            }
            $line_address.=$MEMBER->deladdress3;
        }
        if(!empty($MEMBER->deladdress4)){
            if(!empty($line_address)){
                $line_address.=", ";
            }
            $line_address.=$MEMBER->deladdress4;
        }
        $MainTheme->assign('USERADDRESS', $line_address);
        $MainTheme->assign('USERAVATAR', $userimage_avatar);
        $MainTheme->assign('userimage', $userimage);
        $MainTheme->assign('userlist', $userimage_list);
        $MainTheme->assign('usergrid', $userimage_grid);
    }
}