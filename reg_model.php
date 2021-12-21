<?php
class Reg_model extends CI_Model{
    public function__construct(){
        parent::construct();
    }
    public function add_data($data)
    {
        $this->load->database();
        if($this->db->insert('users',$data))
        {
            return true;
        }
        
    }
}
?>