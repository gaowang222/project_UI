<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StorelocatorController extends CI_Controller {
    function StorelocatorController()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('ContactusModel');
    }
    public function index()
    {

        $this->load->view('storelocator');
    }
}