<?php
header("Access-Control-Allow-Origin: *");
class Me extends Controller {
    public
    function index( $param = array() ) {
        $this->view( 'Me/index', ( array )$param );
    }
}