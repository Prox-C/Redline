<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $this->load->view('index');
    }

    public function login() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('validation-error', 'loginModal');

                if($this->session->userdata('current_view') == 'pages/browse') {
                    $data['cars'] = $this->CarModel->getAvailableCars();
                    $this->load->view('pages/browse', $data);
                } else {
                    $this->load->view('index');
                }
            } else {
                $user_id = $this->UserModel->auth();

                if($user_id){
                    $user_data = array(
                        'fname' => $user_id['fname'],
                        'lname' => $user_id['lname'],
                        'fullname' => $user_id['fname'] . ' ' . $user_id['lname'],
                        'role' => $user_id['role'],
                        'pfp' => $user_id['profile_pic'],
                        'logged_in' => true
                    );
                    $this->session->set_userdata($user_data);

                    if($this->session->userdata('role')==3) {
                        $this->session->set_flashdata('login-success', 'Welcome back, '.$this->session->userdata('fname').'!');
                        redirect(base_url('home'));
                    }
                    if($this->session->userdata('role')==1 || $this->session->userdata('role')==0) {
                        $this->session->set_flashdata('login-success', 'Greetings, Admin '.$this->session->userdata('fname').'!');
                        redirect(base_url('admin/home'));
                    }
                    
                } else {
                    $this->session->set_flashdata('login-failed', 'Account not found');

                    if($this->session->userdata('current_view') == 'pages/browse') {
                        redirect(base_url('home'));
                    } else {
                        redirect(base_url());
                    }
                }

            }
        }
    }

    public function logout() {
        $this->session->sess_destroy(); // wipe all session data
        redirect(base_url());
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
                if($this->session->userdata('current_view') == 'pages/browse') {
                    $data['cars'] = $this->CarModel->getAvailableCars();
                    $this->load->view('pages/browse', $data);
                } else {
                    $this->load->view('index');
                }
            } else {
                $this->UserModel->selfRegister();
            }
        }
    }
}
