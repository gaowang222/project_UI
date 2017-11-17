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
    //生成验证码
    function yzm_login(){
        $this->load->helper('captcha');
        code();
    }
    function getAjax(){
        $login_name = $_POST['login_name'];
        $passwd = md5($_POST['passwd']);
        //1.获取新用户信息
        $row= $this->LoginModel->getUser('login');
       foreach($row as $user){
            if($login_name == $user['login_name']){
                if($passwd ==$user['passwd']){
                  echo '1';
                }
            }

       }
    }
}