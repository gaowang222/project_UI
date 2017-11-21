<?php

class LoginModel extends CI_Model
{
    function LoginModel()
    {
        $this->load->database();
    }
    function getUser($table){
        $sql = "select 	login_name,passwd from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function updateUser($table,$login_name,$logintimes,$loginnum){
        $sql = "update $table set logintimes=$logintimes,loginnum=$loginnum+1 where login_name=$login_name";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>