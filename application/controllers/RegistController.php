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
        $data['catename']=$this->RegistModel->getFirstProject();
        $data['catename2']=$this->RegistModel->getFirstProject2('cate');

        $this->load->view('regist',$data);
    }
    //注册生成验证码
    function yzm_regist(){
        $this->load->helper('captcha');
        code();
    }
    function getAjax(){
        $login_name = $_POST['login_name'];
        $passwd = md5($_POST['passwd']);
        $tel = $_POST['tel'];
        $loginaddress = $_POST['loginaddress'];
        $userImg = $_POST['userImg'];
        //1.插入新用户信息
        $this->RegistModel->insertUser('login',$login_name,$passwd,$userImg,$tel,$loginaddress);
    }
}