<?php
class UserModel extends CI_Model {
    public function __construct() {
        parent::__construct(); 
        $this->load->database(); 
    }
    
    /* Home */

    public function auth() {
        // Get the user by email
        $this->db->where('email', $this->input->post('email'));
        $result = $this->db->get('users');
    
        // Check if a user is found
        if ($result->num_rows() == 1) {
            $user = $result->row_array();
    
            // Verify if the password matches the hashed password in the database
            if (password_verify($this->input->post('password'), $user['password'])) {
                return $user;  // Return user data if password matches
            } else {
                return false;  // Return false if password doesn't match
            }
        } else {
            return false;  // Return false if no user is found
        }
    }

    /* Client */

    public function getClients() {
        $this->db->where('role', 3);
        $query = $this->db->get('users');
        return $query->result_array();
    }
    
    public function registerClient() {
        $email = $this->input->post('email');
    
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0) { // Terminate if email already registered.
            $this->session->set_flashdata('error', 'Email already exists. Please use a different one.');
        } else {
            // Proceed if not
            $data = array(
                'role' => 3,
                'email' => $email,
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'birthdate' => $this->input->post('bday'),
                'sex' => $this->input->post('sex'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'profile_pic' => "profile.png"
            );
    
            // Insert data if email is not duplicate
            if ($this->db->insert('users', $data)) {
                $this->session->set_flashdata('success', 'Client registered!');
            } else {
                $this->session->set_flashdata('error', 'Failed to register client.');
            }
        }
        redirect(base_url('admin/clients'));
    }
    
    public function updateClient($id) {
        $email = $this->input->post('email');
    
        // Check if email already exists for another user (exclude the current user ID)
        $this->db->where('email', $email);
        $this->db->where('user_id !=', $id);
        $query = $this->db->get('users');
    
        if ($query->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Email already exists. Please use a different one.');
        } else {
            // Prepare data for update
            $data = array(
                'role' => 3,
                'email' => $email,
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'birthdate' => $this->input->post('bday'),
                'sex' => $this->input->post('sex'),
                'profile_pic' => "profile.png"
            );
    
            // Check if a new password is provided
            $password = $this->input->post('password');
            if (!empty($password)) {
                $data['password'] = password_hash($password, PASSWORD_DEFAULT);
            }
    
            // Update user data
            $this->db->where('user_id', $id);
            if ($this->db->update('users', $data)) {
                $this->session->set_flashdata('success', 'Changes saved!');
            } else {
                $this->session->set_flashdata('error', 'Failed to update information.');
            }
        }
    
        redirect(base_url('admin/clients'));
    }

    public function deleteClient($id) {
        $this->db->where('user_id', $id);

        if ($this->db->delete('users')){
            $this->session->set_flashdata('success', 'Client unregistered!');
        } else {
            $this->session->set_flashdata('error', 'Failed to unregister client.');
        }

        redirect('admin/clients');
    }
    
    public function selfRegister() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirmPassword = $this->input->post('password2');
    
        // Check if passwords match
        if ($password !== $confirmPassword) {
            $this->session->set_flashdata('password-mismatch', 'registerModal');
            if($this->session->userdata('current_view') == 'pages/browse') {
                $data['cars'] = $this->CarModel->getAvailableCars();
                $this->load->view('pages/browse', $data);
            } else {
                $this->load->view('index');
            }
            return;
        }
    
        // Check for duplicate email
        $this->db->where('email', $email);
        $query = $this->db->get('users');
    
        if ($query->num_rows() > 0) {
            $this->session->set_flashdata('email-error', 'emailErrorModal');
            if($this->session->userdata('current_view') == 'pages/browse') {
                redirect(base_url('home'));
            } else {
                redirect(base_url());
            }
            return;
        }
    
        // Proceed to register
        $data = array(
            'role' => 3,
            'email' => $email,
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'birthdate' => $this->input->post('bday'),
            'sex' => $this->input->post('sex'),
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'profile_pic' => "profile.png"
        );
    
        if ($this->db->insert('users', $data)) {
            // Get the last inserted user ID
            $user_id = $this->db->insert_id();
            // Fetch user data from the database using the last inserted ID
            $this->db->where('user_id', $user_id);  // Assuming 'id' is the primary key for 'users' table
            $query = $this->db->get('users');
            $user = $query->row_array();
            // Prepare session data
            $user_data = array(
                'fname' => $user['fname'],
                'lname' => $user['lname'],
                'fullname' => $user['fname'] . ' ' . $user['lname'],
                'role' => $user['role'],
                'pfp' => $user['profile_pic'],
                'logged_in' => true
            );
            // Set session data
            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('registration-success', 'Account registered!');
            redirect(base_url('home'));
        } else {
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
            if($this->session->userdata('current_view') == 'pages/browse') {
                $data['cars'] = $this->CarModel->getAvailableCars();
                $this->load->view('pages/browse', $data);
            } else {
                $this->load->view('index');
            }
        }
    }

    /* Managers */
    public function getManagers() {
        $this->db->where('role', 2);
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function registerManager() {
        $email = $this->input->post('email');
    
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0) { // Terminate if email already registered.
            $this->session->set_flashdata('error', 'Email already exists. Please use a different one.');
        } else {
            // Proceed if not
            $data = array(
                'role' => 2,
                'email' => $email,
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'birthdate' => $this->input->post('bday'),
                'sex' => $this->input->post('sex'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'profile_pic' => "profile.png"
            );
    
            // Insert data if email is not duplicate
            if ($this->db->insert('users', $data)) {
                $this->session->set_flashdata('success', 'Manager registered!');
            } else {
                $this->session->set_flashdata('error', 'Failed to register manager.');
            }
        }
        redirect(base_url('admin/managers'));
    }

    
    
}
?>