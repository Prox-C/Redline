<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
    public function getBookings() {
        $this->load->view('admin/bookings');
    }

    public function checkout() {
        $this->load->view('pages/checkout');
    }
}
