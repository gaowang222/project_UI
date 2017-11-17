<?php

class indexModel extends CI_Model
{

    function indexModel()
    {
        $this->load->database();
    }

    function getProduct($table){
        $sql = "select item_name,imgs from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getProductright($table,$rightNum,$aimg){
        $sql = "select item_id,item_name,imgs,price,discount from $table where rightad = $rightNum and aimg = $aimg";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>