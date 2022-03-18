<?php
if (isset($MainTheme)) {
    $menu = '';
//Dashboard
    $menu .= "<li class='nav-item {DASHSELECT}'><a href='{MAIN_URL}'  class='nav-link'><i class=' menu-icon fa fa-desktop'></i><span class='nav-link-text'>Dashboard</span></a></li>";

    if (!empty($Accounts)) {
        //region Tickets
        $menu .= "<li class='nav-item {HELPSELECT}'><a href='{MAIN_URL}Tickets'  class='nav-link'><i class=' menu-icon fa fa-ticket'></i><span class='nav-link-text'>Tickets</span></a></li>";
        $menu .= "<li class='nav-item {TASKSELECT}'><a href='{MAIN_URL}Tasks'  class='nav-link'><i class=' menu-icon fa fa-tasks'></i><span class='nav-link-text'>Tasks</span></a></li>";

        //endregion
       /*
       //region Orders
        $menu .= "<li class='nav-item {POSSELECT}'> <a class='nav-link collapsed' href='javascript:void(0);'' data-toggle='collapse' data-target='#pos_drp' aria-expanded='false'><i class='menu-icon fa fa-shopping-cart'></i> <span class='nav-link-text'>Invoicing</span></a>";
        $menu .= "<ul id='pos_drp' class='nav flex-column collapse-level-1 collapse'>";
        $menu .= "<li class='nav-item {SALESSELECT}'><a href='{MAIN_URL}Orders' class='nav-link'><span class=''> Orders</span></a> </li>";
        $menu .= "<li class='nav-item {QUOTATIONSSELECT}'><a href='{MAIN_URL}Quotations' class='nav-link'><span class=''> Quotations</span></a> </li>";
        $menu .= "</ul>";
        $menu .= "</li>";
        //endregions
       */
    }




    $MainTheme->assign('menu_bar', $menu);
}