<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller {
    function LoginController()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('LoginModel');
    }
    public function index()
    {
        $this->load->view('login');
    }

    //**********生成验证码
    function yzm_login(){
        $this->load->helper('captcha');
        code();
    }
    function getAjax(){
        $login_name = $_POST['login_name'];
        $passwd = md5($_POST['passwd']);
        $logintimes = date('Y-m-d H-i-s');
        $loginnum = '0';
        //1.获取新用户信息
        $row= $this->LoginModel->getUser('login');
        //  1:用户名 密码正确
        //  2.用户名正确 密码错误
        //  3.用户名错误
       foreach($row as $user){
            if($login_name == $user['login_name']){
                if($passwd ==$user['passwd']){
                    echo '1';
                    //修改用户表
                   // $this->LoginModel->updateUser('login',$user['login_name'],$logintimes,$loginnum);
                    exit;
                }else{
                    echo '2';
                    exit;
                }
            }else{
                echo '3';
            }

       }
    }
}