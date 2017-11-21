<?php

class ProductsModel extends CI_Model
{

    function ProductsModel()
    {
        $this->load->database();
    }

    function getItem(){
        $sql = "select * from item";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getCate(){
        $sql = "select * from cate ";
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