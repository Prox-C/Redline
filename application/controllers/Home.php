<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $this->load->view('index');
    }

    public function browse() {
        $this->load->view('pages/browse');
    }

    public function register() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->library('form_validation');
    
            // Form validation rules
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('bday', 'Birthday', 'required');
            $this->form_validation->set_rules('sex', 'Sex', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'required|min_length[8]');
    
            if ($this->form_validation->run() == FALSE) {
                // Set error flag for the registration form
                $this->session->set_flashdata('validation-error', 'registerModal');
                $this->load->view('index');
            } else {
                $this->UserModel->selfRegister();
            }
        }
    }
}
