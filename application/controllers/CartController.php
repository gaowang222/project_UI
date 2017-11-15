<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartController extends CI_Controller {
    function CartController()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('cart');
    }
}