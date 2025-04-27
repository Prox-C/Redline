<?php
class CarModel extends CI_Model {
    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
    }
    
    public function getAvailableCars() {
        $this->db->order_by('id', 'DESC');
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

    function updateCar($imageFileName, $id) {
        // First, get the requested new status
        $newStatus = $this->input->post('status');
    
        // If user tries to set status to 'maintenance', check for active bookings
        if ($newStatus === 'Maintenance') {
            $this->db->where('car_id', $id);
            $this->db->where_in('status', ['pending', 'confirmed']);
            $activeBooking = $this->db->get('bookings')->row();
    
            if ($activeBooking) {
                // Active booking found — can't set to maintenance
                $this->session->set_flashdata('error', 'This car has active bookings and cannot be set to maintenance.');
                redirect('admin/view/'.$id);
                return; // Stop execution
            }
        }
    
        // Proceed with the update
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
            'status'       => $newStatus
        );
    
        $this->db->where('id', $id);
        if ($this->db->update('cars', $data)) {
            $this->session->set_flashdata('success', 'Car updated successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to update car.');
        }
    
        redirect('admin/view/'.$id);
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