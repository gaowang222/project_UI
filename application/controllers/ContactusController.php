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
//        if($data['usermsg']['login_name'] == )
        $this->load->view('contactus',$data);
    }
}