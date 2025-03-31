<?php
class UserModel extends CI_Model {
    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
    }
    

    public function getClients() {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function registerClient() {
        $data = array(
            'role' => 3,
            'email' => $this->input->post('email'),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'birthdate' => $this->input->post('bday'),
            'sex' => $this->input->post('sex'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'profile_pic' => "profile.png"
        );
    
        if ($this->db->insert('users', $data)) {
            $this->session->set_flashdata('success', 'Client registered successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to register client.');
        }
    
        redirect('admin/clients');
    }
    
    
}
?>