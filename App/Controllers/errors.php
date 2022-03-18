<?php
class Errors extends Controller{
    public function index($param=array()){
        $this->view('Errors/index',$param);
    }
}