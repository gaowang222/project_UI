<?php

class SingleModel extends CI_Model
{
    function SingleModel()
    {
        $this->load->database();
    }
    function getSingle($table){
        $sql = "select * from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getSize($table){
        $sql = "select * from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getColor($table){
        $sql = "select * from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getrecommend($table){
        $sql = "select item_id,item_name,imgs,price,discount from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getFirstProject(){
        $sql="select parent_cate_id,cate_name from cate where  parent_cate_id = 2 or  parent_cate_id = 3 or  parent_cate_id = 4";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getFirstProject2($table){
        $sql="select parent_cate_id,cate_name,status from $table where  status = 2 or  status = 3 or  status = 4";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

}
?>