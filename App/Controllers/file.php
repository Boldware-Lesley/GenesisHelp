<?php
class File extends Controller{
    public function index($param=array()){
        $this->view('File/index',$param);
    }
}