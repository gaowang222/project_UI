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
    function getrecommend($table,$start,$end){
        $sql = "select item_id,item_name,imgs,price,discount from $table where item_id BETWEEN $start AND $end";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>