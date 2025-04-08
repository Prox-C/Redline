<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Secured extends CI_Controller {

    protected $restricted = [];

    public function __construct() {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }

        $user_role = $this->session->userdata('role');

        if (in_array($user_role, $this->restricted) || empty($user_role)) {
            show_404(); 
        }
    }
}

?>
