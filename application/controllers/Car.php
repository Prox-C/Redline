<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {
    public function getCars() {
        $this->load->view('admin/cars');
    }

    public function newCar() {
        $this->load->view('admin/new-car');
    }
}
