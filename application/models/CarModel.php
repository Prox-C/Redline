<?php
class CarModel extends CI_Model {
    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
    }
    
    public function getAvailableCars() {
        $this->db->where('status', 0);
        $query = $this->db->get('cars');
        return $query->result_array();
    }

    public function getAllCars() {
        $query = $this->db->get('cars');
        return $query->result_array();
    }

    function addCar($imageFileName) {
        $data = array(
            'thumbnail' => $imageFileName,
            'brand' => $this->input->post('brand-select'),
            'model' => $this->input->post('model'),
            'description' => $this->input->post('description'),
            'power' => $this->input->post('power'),
            'speed' => $this->input->post('speed'),
            'capacity' => $this->input->post('capacity'),
            'transmission' => $this->input->post('transmission'),
            'fuel' => $this->input->post('fuel'),
            'rate' => $this->input->post('rate'),
            'rating' => 5.0,
            'status' => 0
        );
        
        if ($this->db->insert('cars', $data)) {
            $this->session->set_flashdata('success', 'Car added!');
        } else {
            $this->session->set_flashdata('error', 'Failed to add car.');
        }
        redirect('admin/cars');
    }
    
    
}
?>