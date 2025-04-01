<?php
class CarModel extends CI_Model {
    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
    }
    
    public function getAvailableCars() {
        $this->db->where('status', 0);
        $query = $this->db->get('cars');
        return $query->result_array();
    }

    public function getAllCars() {
        $query = $this->db->get('cars');
        return $query->result_array();
    }
    // public function registerClient() {
    //     $email = $this->input->post('email');
    
    //     $this->db->where('email', $email);
    //     $query = $this->db->get('users');

    //     if ($query->num_rows() > 0) { // Terminate if email already registered.
    //         $this->session->set_flashdata('error', 'Email already exists. Please use a different one.');
    //     } else {
    //         // Proceed if not
    //         $data = array(
    //             'role' => 3,
    //             'email' => $email,
    //             'fname' => $this->input->post('fname'),
    //             'lname' => $this->input->post('lname'),
    //             'birthdate' => $this->input->post('bday'),
    //             'sex' => $this->input->post('sex'),
    //             'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //             'profile_pic' => "profile.png"
    //         );
    
    //         // Insert data if email is not duplicate
    //         if ($this->db->insert('users', $data)) {
    //             $this->session->set_flashdata('success', 'Client registered!');
    //         } else {
    //             $this->session->set_flashdata('error', 'Failed to register client.');
    //         }
    //     }
    //     redirect('admin/clients');
    // }
    

    // public function updateClient($id) {
    //     $email = $this->input->post('email');
    
    //     // Check if email already exists for another user (exclude the current user ID)
    //     $this->db->where('email', $email);
    //     $this->db->where('user_id !=', $id);
    //     $query = $this->db->get('users');
    
    //     if ($query->num_rows() > 0) {
    //         $this->session->set_flashdata('error', 'Email already exists. Please use a different one.');
    //     } else {
    //         // Prepare data for update
    //         $data = array(
    //             'role' => 3,
    //             'email' => $email,
    //             'fname' => $this->input->post('fname'),
    //             'lname' => $this->input->post('lname'),
    //             'birthdate' => $this->input->post('bday'),
    //             'sex' => $this->input->post('sex'),
    //             'profile_pic' => "profile.png"
    //         );
    
    //         // Check if a new password is provided
    //         $password = $this->input->post('password');
    //         if (!empty($password)) {
    //             $data['password'] = password_hash($password, PASSWORD_DEFAULT);
    //         }
    
    //         // Update user data
    //         $this->db->where('user_id', $id);
    //         if ($this->db->update('users', $data)) {
    //             $this->session->set_flashdata('success', 'Changes saved!');
    //         } else {
    //             $this->session->set_flashdata('error', 'Failed to update information.');
    //         }
    //     }
    
    //     redirect('admin/clients');
    // }

    // public function deleteClient($id) {
    //     $this->db->where('user_id', $id);

    //     if ($this->db->delete('users')){
    //         $this->session->set_flashdata('success', 'Client unregistered!');
    //     } else {
    //         $this->session->set_flashdata('error', 'Failed to unregister client.');
    //     }

    //     redirect('admin/clients');
    // }
    
    
    
    
}
?>