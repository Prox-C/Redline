<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function clients() {
        $this->load->view('admin/clients');
    }
}
