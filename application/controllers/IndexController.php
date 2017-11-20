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
		$data['slideLeft'] = $this->indexModel->getProductLeft('item','0','1');
		$data['slideRight'] = $this->indexModel->getProductright('item','0','1');
		$data['indexslide'] = $this->indexModel->getSlider('item','2');
		$data['catename']=$this->indexModel->getFirstProject('cate');
		$data['catename2']=$this->indexModel->getFirstProject2('cate');
		$this->load->view('index',$data);
		//$this->load->view('header',$data);
	}
}
