<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsController extends CI_Controller {
    function ProductsController()
    {
        parent::__construct();
        $this->load->model('ProductsModel');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['item']=$this->ProductsModel->getItem();
        $data['cate']=$this->ProductsModel->getCate();
        $data['catename']=$this->ProductsModel->getFirstProject();

        //echo  $data['cateid'];
        $data['catename2']=$this->ProductsModel->getFirstProject2('cate');


        $this->load->view('products',$data);
    }
    public function open(){
        $data['cateid']=$_GET['cate_id'];
        $this->load->view('products',$data);
    }
}