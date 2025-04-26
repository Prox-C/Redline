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

    public function getAllBookings() {
        $this->db->select('bookings.*, cars.brand, cars.model, cars.thumbnail');
        $this->db->from('bookings');
        $this->db->join('cars', 'cars.id = bookings.car_id');
        $this->db->order_by('bookings.status', 'ASC'); // or 'DESC'
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getClientBookings($user_id) {
        $this->db->select('bookings.*, cars.brand, cars.model, cars.thumbnail');
        $this->db->from('bookings');
        $this->db->join('cars', 'cars.id = bookings.car_id');
        $this->db->order_by('bookings.status', 'ASC'); // or 'DESC'
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getBookingDetails($booking_id) {
        $this->db->select('bookings.*, cars.brand, cars.model, cars.thumbnail, cars.rate');
        $this->db->from('bookings');
        $this->db->join('cars', 'cars.id = bookings.car_id');
        $this->db->where('bookings.booking_id', $booking_id); // filter by booking ID
        $query = $this->db->get();
        return $query->row_array(); // since you're expecting one booking
    }
    
    public function addBooking(){
         // Gather booking data
         $data = [
            'car_id' => $this->input->post('car_id'),
            'user_id' => $this->input->post('user_id'),
            'renter_fname' => $this->input->post('fname'),
            'renter_lname' => $this->input->post('lname'),
            'renter_email' => $this->input->post('email'),
            'contact_number' => $this->input->post('number'),
            'address' => $this->input->post('address'),
            'total_amount' => $this->input->post('total_amount'),
            'payment_method' => $this->input->post('paymentMethod'),
            'card_name' => $this->input->post('card_name'),
            'card_no' => $this->input->post('card_no'),
            'card_expiry' => $this->input->post('card_expiration'),
            'card_cvv' => $this->input->post('card_cvv'),

            'total_days' => $this->input->post('duration'),
            'pickup_date' => $this->input->post('pickup'),
            'dropoff_date' => $this->input->post('dropoff'),
        ];
        // return $this->db->insert('bookings', $data);
        if ($this->db->insert('bookings', $data)) {
            $this->session->set_flashdata('booking-success', 'Booking is being processed!');
        } else {
            $this->session->set_flashdata('booking-error', 'Booking failed');
        }
        redirect('home');
    }

    public function updateStatus($id) {
        $status = $this->input->post('status');
        $this->db->where('booking_id', $id);
        return $this->db->update('bookings', ['status' => $status]);
    }

    public function cancelBooking($id) {
        $this->db->where('booking_id', $id);
        return $this->db->update('bookings', ['status' => 'cancelled']);
    }
    
}
?>