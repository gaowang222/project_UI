<?php

class CartModel extends CI_Model
{
    function CartModel()
    {
        $this->load->database();
    }
    function insertshoppingcart($item_id,$color_id,$size_id,$addtimes,$login_id,$ordercount){
        $sql = "insert into shoppingcart(item_id,color_id,size_id,addtimes,login_id,ordercount) values('$item_id','$color_id','$size_id','$addtimes','$login_id','$ordercount')";
        $query = $this->db->query($sql);
        return $query;
    }
    function getrecommend($table){
        $sql = "select item_id,item_name,imgs,price,discount from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getCartID($table){
        $sql = "select cart_id,item_id from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getCartordercount($table){
        $sql = "select ordercount from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getItemMsg($table){
        $sql = "select * from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function updateMsg($table,$ordercount,$item_id){
        $sql = "update $table set ordercount = $ordercount where item_id=$item_id";
        $query = $this->db->query($sql);
        echo $query;
    }
    function delMsg($table,$cart_id){
        $sql = "delete from  $table where cart_id=$cart_id";
        $query = $this->db->query($sql);
        echo $query;
    }
}
?>