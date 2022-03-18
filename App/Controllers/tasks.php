<?php
header("Access-Control-Allow-Origin: *");
class Tasks extends Controller {
    public
    function index( $param = array() ) {
        $this->view( 'Tasks/index', ( array )$param );
    }
}
