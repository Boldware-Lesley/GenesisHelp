<?php
header("Access-Control-Allow-Origin: *");
class Tickets extends Controller {
    public
    function index( $param = array() ) {
        $this->view( 'Tickets/index', ( array )$param );
    }
}
