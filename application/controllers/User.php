<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'core/MY_Secured.php');

class User extends MY_Secured {

    public function __construct() {
        $this->restrict = [1, 2]; // Block admins/staff
        $this->allow_guests = true; // Allow non-logged-in users
        parent::__construct();
        $this->load->model('CarModel');
        $this->load->model('UserModel');
        $this->load->model('BookingModel');
    }

    public function getCars() {  
        $this->session->unset_userdata('pickup-date');
        $this->session->unset_userdata('dropoff-date');
        $this->session->unset_userdata('search-car');
   
        $data['cars'] = $this->CarModel->getAvailableCars();
        $this->load->view('pages/browse', $data);
    }

    public function viewCar($id) {
        $data['car'] = $this->CarModel->getCarByID($id);
        $data['unavailable_dates'] = $this->BookingModel->getUnavailableDates($id);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->view('pages/view', $data);
    }    
}
