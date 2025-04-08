<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Secured extends CI_Controller {

    protected $restrict = [];
    protected $allow_guests = false; // Allow access even if not logged in

    public function __construct() {
        parent::__construct();

        $user_logged_in = $this->session->userdata('logged_in');
        $user_role = $this->session->userdata('role');

        if (!$user_logged_in) {
            if ($this->allow_guests) {
                return; // Allow access if guests are permitted
            } else {
                redirect(base_url());
            }
        }

        // If user is logged in and their role is in the restricted list
        if (in_array($user_role, $this->restrict)) {
            show_404();
        }
    }
}
