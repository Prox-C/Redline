<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function getClients() {
        $this->load->view('admin/clients');
    }
}
