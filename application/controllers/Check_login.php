<?php
class Check_login extends CI_Controller{   
public function __construct()
{
    parent::__construct();
        if(!isset($_SESSION['user_logged'])){
            $this->session->set_flashdata('error','please login in first');
            redirect("College_Controller/login");
        }
    }
        
           public function profile() {
           $this->load->view('dashboard_college');
       }
    
}
?>