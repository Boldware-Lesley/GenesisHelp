<?php
class ErrorCodes extends Controller{
    public function index($param=array()){
        $this->view('ErrorCodes/index',$param);
    }
}
