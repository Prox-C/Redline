<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'core/MY_Secured.php');

class Admin extends MY_Secured {

    public function __construct() {
        $this->restricted = [3]; // Block role 3 (e.g. regular clients)
        parent::__construct();   // Make sure this comes AFTER setting restricted
        $this->load->model('CarModel');
        $this->load->model('UserModel');
    }

    public function dashboard() {
        $this->load->view('admin/dashboard');
    }
    
    // CAR MANAGEMENT
    public function getAllCars() {
        $data['cars'] = $this->CarModel->getAllCars();
        $this->load->view('admin/cars', $data);
    }

    public function addCar() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            // Load form validation library
            $this->load->library('form_validation');
    
            // Set validation rules
            $this->form_validation->set_rules('brand-select', 'Brand', 'required');
            $this->form_validation->set_rules('model', 'Model', 'required|trim|min_length[2]');
            $this->form_validation->set_rules('description', 'Description', 'required|trim');
            $this->form_validation->set_rules('power', 'Power', 'required|integer');
            $this->form_validation->set_rules('speed', 'Top Speed', 'required|integer');
            $this->form_validation->set_rules('capacity', 'Seats', 'required|integer');
            $this->form_validation->set_rules('transmission', 'Transmission', 'required');
            $this->form_validation->set_rules('fuel', 'Fuel Type', 'required');
            $this->form_validation->set_rules('rate', 'Rate per day', 'required|numeric');
    
            // Check validation
            if ($this->form_validation->run() == FALSE) {
                // Reload form with validation errors
                $this->load->view('admin/new-car');
            } else {
                // File upload configuration
                $config['upload_path']   = './assets/images/cars/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']      = 2048; // 2MB
                $config['encrypt_name']  = TRUE; // Secure file name
                
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('image')) {
                    $uploadData = $this->upload->data();
                    $imageFileName = $uploadData['file_name'];
                } else {
                    // If file upload fails, store error message
                    $imageFileName = null;
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    $this->load->view('admin/new-car');
                    return;
                }
                $this->CarModel->addCar($imageFileName);
            }
        }
    }
    
    public function newCar() {
        $this->load->view('admin/new-car');
    }

    // CLIENT MANAGEMENT
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
