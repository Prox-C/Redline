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
        $this->load->view('pages/view', $data);
    }    

    public function searchCars() {
        $search = $this->input->get('searchCar');
        $start = $this->input->get('rentStart');
        $end = $this->input->get('rentEnd');
    
        $this->session->set_userdata('pickup-date', $start);
        $this->session->set_userdata('dropoff-date', $end);
        $this->session->set_userdata('search-car', $search);
    
        $this->load->model('CarModel');
        $cars = $this->CarModel->searchAvailableCars($search, $start, $end);
    
        $data['cars'] = $cars;
        $data['results'] = count($cars); // count the number of results
    
        $this->load->view('pages/search', $data);
    }
}
