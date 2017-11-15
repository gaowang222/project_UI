<?php

class RegistModel extends CI_Model
{

    function RegistModel()
    {
        $this->load->database();
    }

    function insertUser($table,$login_name	,$passwd,$tel,$loginaddress){
        $sql = "insert into $table(login_name,passwd,tel,loginaddress) values('$login_name','$passwd','$tel','$loginaddress')";
        $query = $this->db->query($sql);
        echo $query;
    }
}
?>