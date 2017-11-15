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
        $login_name = $_GET['$login_name'];
        $passwd = $_GET['$passwd'];
        $tel = $_GET['$tel'];
        $usercode = $_GET['$usercode'];
        $loginaddress = $_GET['$loginaddress'];
        //1.插入新用户信息
        $this->RegistModel->insertUser('login',$login_name,$passwd,$tel,$usercode,$loginaddress);
    }
}