<?php

class LoginModel extends CI_Model
{
    function LoginModel()
    {
        $this->load->database();
    }
    function getUser($table){
        $sql = "select login_name,passwd from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>