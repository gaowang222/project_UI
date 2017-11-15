<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactusController extends CI_Controller {
    function ContactusController()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('contactus');
    }
}