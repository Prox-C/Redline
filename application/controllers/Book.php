<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'core/MY_Secured.php');

class Book extends MY_Secured {

    public function __construct() {
        $this->restrict = [1, 2]; // Block admins/staff
        $this->allow_guests = false; // Allow non-logged-in users
        parent::__construct();
        $this->load->model('BookingModel');
    }

    public function checkout() {
        // Get the form data
        $pickup = $this->input->post('rentStart');
        $dropoff = $this->input->post('rentEnd');
        $car_id = $this->input->post('book_car_id');

        // Optional: Save to session or use directly
        $this->session->set_userdata('pickup-date', $pickup);
        $this->session->set_userdata('dropoff-date', $dropoff);

        $pickup = new DateTime($this->input->post('rentStart'));
        $dropoff = new DateTime($this->input->post('rentEnd'));
        $days = $pickup->diff($dropoff)->days;
        if ($days == 0) $days = 1;

        
        $data['rent_duration'] = $days;
        $data['car'] = $this->CarModel->getCarByID($car_id);

        $this->load->view('pages/checkout', $data);
    }

}