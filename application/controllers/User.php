<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel'); 
    }

    public function getClients() { //this function returns client management pafe along with the addinf fom
        $data['cl'] = $this->UserModel->getClients();
        $this->load->view('admin/clients', $data); 
    } 

    public function registerClient() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->library('form_validation');
    
            // Form validation rules
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('bday', 'Birthday', 'required');
            $this->form_validation->set_rules('sex', 'Sex', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
    
            if ($this->form_validation->run() == FALSE) {
                // Set error flag for the registration form
                $this->session->set_flashdata('validation-error', 'addClientModal');
                $data['cl'] = $this->UserModel->getClients();
                $this->load->view('admin/clients', $data);
            } else {
                $this->UserModel->registerClient();
            }
        }
    }
    
    public function updateClient($id) {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->library('form_validation');
    
            // Form validation rules
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('bday', 'Birthday', 'required');
            $this->form_validation->set_rules('sex', 'Sex', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
    
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('validation-error', 'updateClientModal_' . $id);
                $data['cl'] = $this->UserModel->getClients();
                $this->load->view('admin/clients', $data);
            } else {
                $this->UserModel->updateClient($id);
            }
            // $this->UserModel->updateClient($id);
        }
    }
    

    public function deleteClient($id) {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->UserModel->deleteClient($id);
        }
    }
    
}
