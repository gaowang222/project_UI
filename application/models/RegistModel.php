<?php

class RegistModel extends CI_Model
{

    function RegistModel()
    {
        $this->load->database();
    }

    function insertUser($table,$login_name,$passwd,$userImg,$tel,$loginaddress){
        $sql = "insert into $table(login_name,passwd,userImg,tel,loginaddress) values('$login_name','$passwd','$userImg','$tel','$loginaddress')";
        $query = $this->db->query($sql);
        echo $query;
    }
}
?>