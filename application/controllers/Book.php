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

        $this->load->library('form_validation');

        $this->form_validation->set_rules('rentStart', 'Pickup Date', 'required');
        $this->form_validation->set_rules('rentEnd', 'Dropoff Date', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->session->set_flashdata('validation-error', 'bookModal');
            redirect($_SERVER['HTTP_REFERER']); // redirect back to form page
            exit; // <-- Force it to stop executing and ensure session saves

        }
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