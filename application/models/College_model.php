<?php
class College_model extends CI_Model{
    public function insert($formArray){
       $query= $this->db->insert('shop_table',$formArray);
       if ($query) {
        return true;
    }
else {
    return false;
}
}
// public function updatepass($email,$old_pass){
//      $this->db->select('*');
//     $this->db->from('shop_table');
//     $this->db->where(array('email' => $email, 'password' => $old_pass));
//     $query=$this->db->get()->row_array();
//     print_r($query);exit;
// }
}
