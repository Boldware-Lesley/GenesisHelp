<?php
class Auth extends Controller{
    public function index($param=array()){
        if (isset ( $param [0] )) {
            switch (strtolower ( $param [0] )) {
                case 'out' :{
                    unset($param [0]);
                    $param= $param? array_values($param) : array();
                    $this->view('Auth/out',$param);
                }break;
                case 'forget' :
                case 'forgot' :{
                    unset($param [0]);
                    $param= $param? array_values($param) : array();
                    $this->view('Auth/forget',$param);
                }break;
                case 'reset' :{
                    unset($param [0]);
                    $param= $param? array_values($param) : array();
                    $this->view('Auth/reset',$param);
                }break;
                case 'reg' :{
                    unset($param [0]);
                    $param= $param? array_values($param) : array();
                    $this->view('Auth/reg',$param);
                }break;
                case 'tech' :{
                    unset($param [0]);
                    $param= $param? array_values($param) : array();
                    $this->view('Auth/tech',$param);
                }break;

                case 'in':
                default:
                    {
                        unset($param [0]);
                        $param= $param? array_values($param) : array();
                        $this->view('Auth/index',$param);
                    }break;

            }
        }else{
            unset($param [0]);
            $param= $param? array_values($param) : array();
            $this->view('Auth/index',$param);
        }

    }
}
