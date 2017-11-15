<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RegistController extends CI_Controller {
    function RegistController()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('RegistModel');
    }
    public function index()
    {
        $this->load->view('regist');
    }
    function getAjax(){
        $login_name = $_POST['login_name'];
        $passwd = $_POST['passwd'];
        $tel = $_POST['tel'];
        $usercode = $_POST['usercode'];
        $loginaddress = $_POST['loginaddress'];
        $userImg = $_POST['userImg'];
        //1.插入新用户信息
        $this->RegistModel->insertUser('login',$login_name,$passwd,$userImg,$tel,$loginaddress,$usercode);
    }
}