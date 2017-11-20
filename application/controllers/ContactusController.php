<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactusController extends CI_Controller {
    function ContactusController()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('ContactusModel');
    }
    public function index()
    {
        $data['usermsg'] =$this->ContactusModel->getUserMsg('login');
        $data['catename']=$this->ContactusModel->getFirstProject('cate');
        $data['catename2']=$this->ContactusModel->getFirstProject2('cate');
        $this->load->view('contactus',$data);
    }
}