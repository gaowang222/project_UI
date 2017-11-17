<?php

class indexModel extends CI_Model
{

    function indexModel()
    {
        $this->load->database();
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
}
?>