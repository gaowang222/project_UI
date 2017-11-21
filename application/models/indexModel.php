<?php

class indexModel extends CI_Model
{

    function indexModel()
    {
        $this->load->database();
    }
    function getUserMsg($table){
        $sql = "select * from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getCartID($table){
        $sql = "select cart_id,item_id from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getItemMsg($table){
        $sql = "select * from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getProductLeft($table,$leftNum,$aimg){
        $sql = "select item_id,item_name,imgs,price,discount from $table where leftad = $leftNum and aimg = $aimg";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getProductright($table,$rightNum,$aimg){
        $sql = "select item_id,item_name,imgs,price,discount from $table where rightad = $rightNum and aimg = $aimg";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getItem(){
        $sql = "select * from item ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getSlider($table,$aimg){
        $sql = "select item_id,item_name,imgs from $table where aimg = $aimg";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getFirstProject(){
        $sql="select parent_cate_id,cate_name from cate where  parent_cate_id = 2 or  parent_cate_id = 3 or  parent_cate_id = 4";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getFirstProject2($table){
        $sql="select parent_cate_id,cate_name,status,cate_id from $table where  status = 2 or  status = 3 or  status = 4";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
?>