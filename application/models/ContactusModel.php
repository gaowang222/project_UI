<?php
class ContactusModel extends CI_Model
{
    function ContactusModel()
    {
        $this->load->database();
    }
    function getUserMsg($table){
        $sql = "select login_name,userImg,tel,loginaddress	from $table";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>