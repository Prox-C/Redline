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

    public function index() {
        // Load form helper and validation library
        $this->load->library('form_validation');
    
        // Set form validation rules
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('paymentMethod', 'Payment Method', 'required');
        $this->form_validation->set_rules('card_name', 'Name on Card');
        $this->form_validation->set_rules('card_no', 'Card Number', 'max_length[20]');
        $this->form_validation->set_rules('card_expiration', 'Expiration Date');
        $this->form_validation->set_rules('card_cvv', 'CVV', 'numeric|exact_length[3]');
        
    
        if ($this->form_validation->run() == FALSE) {
            // Form has errors - reload booking page
            $pickup = new DateTime($this->input->post('rentStart'));
            $dropoff = new DateTime($this->input->post('rentEnd'));
            $days = $pickup->diff($dropoff)->days;
            if ($days == 0) $days = 1;
    
            $data['rent_duration'] = $days;
            $car_id = $this->input->post('car_id');
            $data['car'] = $this->CarModel->getCarByID($car_id);
            $this->session->flashdata('validation-error', 'Please fill out all required fields.');
            $this->load->view('pages/checkout', $data);
        } else {
            // Call model method to insert booking
            $this->load->model('BookingModel');
            $this->BookingModel->addBooking();
        }
    }
    
}