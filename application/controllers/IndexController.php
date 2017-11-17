<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {
	function IndexController()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('indexModel');
	}
	public function index()
	{
		$data['slide'] = $this->indexModel->getProduct('item');
		$data['slideRight'] = $this->indexModel->getProductright('item','0','1');
		$this->load->view('index',$data);
	}
}
