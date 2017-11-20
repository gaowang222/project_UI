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