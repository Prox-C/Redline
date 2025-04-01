<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('CarModel'); 
    }

    public function getCars() {
        $data['cars'] = $this->CarModel->getAvailableCars();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->view('pages/browse', $data);
    }

    public function getAllCars() {
        $data['cars'] = $this->UserModel->fetchCars();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        $this->load->view('admin/cars');
    }

    public function newCar() {
        $this->load->view('admin/new-car');
    }

    public function viewCar() {
        $this->load->view('pages/view');
    }
}
