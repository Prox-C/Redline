<?php
class BookingModel extends CI_Model {
    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
    }

    public function searchAvailableCars($search = '', $start = '', $end = '') {
        $this->db->select('*');
        $this->db->from('cars');
    
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