<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'core/MY_Secured.php');

class User extends MY_Secured {

    public function __construct() {
        $this->restricted = [1,2]; // Block role 3 (e.g. regular clients)
        parent::__construct();   // Make sure this comes AFTER setting restricted
        $this->load->model('CarModel');
        $this->load->model('UserModel');
    }

    public function getCars() {
        $data['cars'] = $this->CarModel->getAvailableCars();
        $this->load->view('pages/browse', $data);
    }

    public function viewCar($id) {
        $data['cars'] = $this->CarModel->getCarByID($id);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->view('pages/view', $data);
    }    
}
