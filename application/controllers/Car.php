<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('CarModel'); 
    }

    public function getCars() {
        $data['cars'] = $this->CarModel->getAvailableCars();
        $this->load->view('pages/browse', $data);
    }

    public function getAllCars() {
        $data['cars'] = $this->CarModel->getAllCars();
        $this->load->view('admin/cars', $data);
    }

    public function viewCar($id) {
        $data['cars'] = $this->CarModel->getCarByID($id);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->view('pages/view', $data);
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
}
