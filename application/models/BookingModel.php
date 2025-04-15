<?php
class BookingModel extends CI_Model {
    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
    }

    public function getUnavailableDates($carId) {
        $this->db->where('car_id', $carId);
        $query = $this->db->get('bookings');
    
        $unavailable = [];
        foreach ($query->result() as $booking) {
            $start = new DateTime($booking->pickup_date);
            $end = new DateTime($booking->dropoff_date);
            $interval = new DateInterval('P1D');
            $range = new DatePeriod($start, $interval, $end->modify('+1 day'));
    
            foreach ($range as $date) {
                $unavailable[] = $date->format('Y-m-d');
            }
        }
    
        return $unavailable;
    }
}
?>