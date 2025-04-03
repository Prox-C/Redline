<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel'); 
    }

    public function getClients() { //this function returns client management pafe along with the addinf fom
        $data['cl'] = $this->UserModel->getClients();
        $this->load->view('admin/clients', $data); 
    } 

    public function registerClient() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->UserModel->registerClient();
        }
    }

    public function updateClient($id) {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->UserModel->updateClient($id);
        }
    }

    public function deleteClient($id) {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->UserModel->deleteClient($id);
        }
    }
    
}
