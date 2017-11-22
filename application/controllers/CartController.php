<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartController extends CI_Controller {
    function CartController()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('CartModel');

    }
    public function index()
    {
        //购物车推荐产品
        $data['singlerecommend'] = $this->CartModel->getrecommend('item');
        //显示购物车产品
          //1.得到购物车ID
        $data['cartID'] = $this->CartModel->getCartID('shoppingcart');
          //2.得到产品信息
        $data['itemMsg'] = $this->CartModel->getItemMsg('item');
        $this->load->view('cart',$data);

    }
    function insertProduct(){
        $item_id =  $_POST['itemid'];
        $color_id = $_POST['itemid'];
        $size_id = $_POST['itemid'];
        $addtimes = date('Y-m-d H:i:s');
        $ordercount = '1';
        $login_id = '10';
        //插入
        $this->CartModel->insertshoppingcart($item_id,$color_id,$size_id,$addtimes,$login_id,$ordercount);
    }
    function deleteCar(){
        $cartid = $_POST['cartid'];
        $this->CartModel->delMsg('shoppingcart',$cartid);
    }
    function check(){
        $itemid = $_POST['itemid'];

    }

}