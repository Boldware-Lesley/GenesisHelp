<?php
header("Access-Control-Allow-Origin: *");
class Home extends Controller {
	public
	function index( $param = array() ) {
        $this->view( 'Home/index', ( array )$param );
	}
}
