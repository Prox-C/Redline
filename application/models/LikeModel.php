<?php 

class LikeModel extends CI_Model {

    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
    }
    
    public function isLiked($userId, $carId) {
        return $this->db
                    ->where('user_id', $userId)
                    ->where('car_id', $carId)
                    ->get('likes')
                    ->num_rows() > 0;
    }

    public function addLike($userId, $carId) {
        $this->db->insert('likes', [
            'user_id' => $userId,
            'car_id' => $carId
        ]);
    }

    public function removeLike($userId, $carId) {
        $this->db
             ->where('user_id', $userId)
             ->where('car_id', $carId)
             ->delete('likes');
    }

    public function getLikedCars($userId) {
        $this->db->select('cars.*');
        $this->db->from('likes');
        $this->db->join('cars', 'likes.car_id = cars.id');
        $this->db->where('likes.user_id', $userId);
        return $this->db->get()->result_array();
    }
    
}
