<?php
class CarModel extends CI_Model {
    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
    }
    
    public function getAvailableCars() {
        $this->db->where('status', 'Available');
        $query = $this->db->get('cars');
        return $query->result_array();
    }

    public function getAllCars() {
        $query = $this->db->get('cars');
        return $query->result_array();
    }

    public function getCarByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('cars');
        return $query->row_array();
    }

    function addCar($imageFileName) {
        $data = array(
            'thumbnail'    => $imageFileName,
            'brand'        => $this->input->post('brand-select'),
            'model'        => $this->input->post('model'),
            'description'  => $this->input->post('description'),
            'power'        => $this->input->post('power'),
            'speed'        => $this->input->post('speed'),
            'capacity'     => $this->input->post('capacity'),
            'transmission' => $this->input->post('transmission'),
            'fuel'         => $this->input->post('fuel'),
            'rate'         => $this->input->post('rate'),
            'rating'       => 5.0,
            'status'       => 0
        );
        
        if ($this->db->insert('cars', $data)) {
            $this->session->set_flashdata('success', 'Car added successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to add car.');
        }
        redirect('admin/cars');
    }

    public function searchAvailableCars($search = '', $start = '', $end = '') {
        $this->db->select('*');
        $this->db->from('cars');
        $this->db->where('status', 'Available');
    
        if (!empty($search)) {
            $this->db->group_start();
            $this->db->like('brand', $search);
            $this->db->or_like('model', $search);
            $this->db->group_end();
        }
    
        if (!empty($start) && !empty($end)) {
            $this->db->where("id NOT IN (
                SELECT car_id FROM bookings 
                WHERE status IN ('pending', 'confirmed') 
                AND (
                    (pickup_date <= '$end' AND dropoff_date >= '$start')
                )
            )");
        }
    
        return $this->db->get()->result_array();
    }
    
    
    
}
?>