<?php
class College_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('College_model');
        $this->load->library('form_validation');
}
public function login()
{
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');
    if ($this->form_validation->run() == TRUE) {
        // print_r($_POST);exit;
        $email1 = $_POST['email'];
        $password = ($_POST['password']); //form name value
        $this->db->select('*');
        $this->db->from('shop_table');
        // 
        $this->db->where(array('email' => $email1, 'password' => $password));
        $query = $this->db->get();
        $user = $query->row();
        if ($user) {
            $this->session->set_flashdata('success', 'you are login');
            $_SESSION['user_logged'] = TRUE;
            $_SESSION['email'] = $user->email;
            redirect('Check_login/profile');
            // $this->load->view('dashboard_college');

        } else {
            $this->session->set_flashdata('error', 'no account exist');
            // redirect('display/login');
            $this->load->view('error_login.php');
        }
    }

    $this->load->view('login');
}
    public function add()
{
$this->form_validation->set_rules('name', 'Name', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('phone', 'Contact No', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('address', 'Address', 'required');
    if($this->form_validation->run()==TRUE){
    $formArray = array();
    $formArray['name'] = $this->input->post('name');
    $formArray['email'] = $this->input->post('email');
    $formArray['phone'] = $this->input->post('phone');
    $formArray['password'] = $this->input->post('password');
    $formArray['address'] = $this->input->post('address');
     $this->College_model->insert($formArray);
}
else{
    $this->load->view('homes');
}
}
}
