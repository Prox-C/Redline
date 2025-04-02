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
            // Handle file upload
            $config['upload_path'] = './assets/images/cars/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // 2MB
            $config['file_name'] = $_FILES['image']['name']; // Keep original file name
            // $config['encrypt_name'] = TRUE; // Uncomment this line if you want to encrypt the file name
            
            $this->load->library('upload', $config);
            
            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $imageFileName = $uploadData['file_name'];
            } else {
                $imageFileName = null;
            }
            
            $this->CarModel->addCar($imageFileName);
        }
    }
    

    public function newCar() {
        $this->load->view('admin/new-car');
    }
}
