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
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->view('admin/cars', $data);
    }

    public function newCar() {
        $this->load->view('admin/new-car');
    }

    public function viewCar() {
        $this->load->view('pages/view');
    }
}
