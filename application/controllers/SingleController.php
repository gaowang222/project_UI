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
        $data['singlerecommend'] = $this->SingleModel->getrecommend('item',70,76);
        $this->load->view('single',$data);
    }
}