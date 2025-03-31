<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel'); 
    }

    public function getClients() {
        $data['cl'] = $this->UserModel->getClients();
        $this->load->view('admin/clients', $data); 
    } 

    public function registerClient() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            // Call the model function
            if ($this->UserModel->registerClient()) {
                $this->session->set_flashdata('success', 'Client registered successfully!');
            } else {
                $this->session->set_flashdata('error', 'Failed to register client.');
            }
            
            // Redirect back to admin/clients
            redirect('admin/clients');
        }
    }
    
}
