<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SingleController extends CI_Controller {
    function SingleController()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('single');
    }
}