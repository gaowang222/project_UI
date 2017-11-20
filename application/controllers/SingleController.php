<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SingleController extends CI_Controller {
    function SingleController()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('SingleModel');
    }
    public function index()
    {
        $data['single'] = $this->SingleModel->getSingle('item');
        $data['singlerecommend'] = $this->SingleModel->getrecommend('item');
        $data['catename']=$this->SingleModel->getFirstProject();
        $data['catename2']=$this->SingleModel->getFirstProject2('cate');
        $this->load->view('single',$data);
    }
}