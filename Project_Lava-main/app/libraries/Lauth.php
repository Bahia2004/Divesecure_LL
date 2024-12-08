<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Lauth {

    private $LAVA;

    public function __construct() {
        $this->LAVA =& lava_instance();
        $this->LAVA->call->database();
        $this->LAVA->call->library('session');
    }

    public function passwordhash($password)
    {
        $options = array(
        'cost' => 4,
        );
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }

    public function register($username, $email, $password, $email_token)
    {
        $this->LAVA->db->transaction();
        $data = array(
            'username' => $username,
            'password' => $this->passwordhash($password),
            'email' => $email,
            'email_token' => $email_token,
            'user_role' => 'user' // Default role for new registrations
        );

        $res = $this->LAVA->db->table('users')->insert($data);
        if($res) {
            $this->LAVA->db->commit();
            return $this->LAVA->db->last_id();
        } else {
            $this->LAVA->db->roll_back();
            return false;
        }
    }

    public function login($email, $password)
    {               
        $row = $this->LAVA->db
                        ->table('users')                     
                        ->where('email', $email)
                        ->get();
        if($row) {
            if(password_verify($password, $row['password'])) {
                // Store complete user data in session
                $user_data = array(
                    'user_id' => $row['id'],
                    'username' => $row['username'],
                    'email' => $row['email'],
                    'user_role' => $row['user_role']
                );
                $this->LAVA->session->set_userdata('user', $user_data);
                return $row['id'];
            }
        }
        return false;
    }

    public function change_password($password) {
        $data = array(
                    'password' => $this->passwordhash($password)
                );
        return  $this->LAVA->db
                    ->table('users')
                    ->where('user_id', $this->get_user_id())
                    ->update($data);
    }

    public function set_logged_in($user_id) {
        $session_data = hash('sha256', md5(time().$user_id));
        
        // Get user data
        $user = $this->LAVA->db
                    ->table('users')
                    ->where('id', $user_id)
                    ->get();
        
        // Store session data
        $data = array(
            'user_id' => $user_id,
            'browser' => $_SERVER['HTTP_USER_AGENT'],
            'ip' => $_SERVER['REMOTE_ADDR'],
            'session_data' => $session_data
        );
        
        $res = $this->LAVA->db->table('sessions')
                ->insert($data);
                
        if($res) {
            // Store user data in session
            $user_data = array(
                'user_id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'user_role' => $user['user_role']
            );
            
            $this->LAVA->session->set_userdata(array(
                'session_data' => $session_data,
                'user_id' => $user_id,
                'logged_in' => 1,
                'user' => $user_data
            ));
        }
    }

    public function is_logged_in()
    {
        $data = array(
            'user_id' => $this->LAVA->session->userdata('user_id'),
            'browser' => $_SERVER['HTTP_USER_AGENT'],
            'session_data' => $this->LAVA->session->userdata('session_data')
        );
        $count = $this->LAVA->db->table('sessions')
                        ->select_count('session_id', 'count')
                        ->where($data)
                        ->get()['count'];
        if($this->LAVA->session->userdata('logged_in') == 1 && $count > 0) {
            return true;
        } else {
            if($this->LAVA->session->has_userdata('user_id')) {
                $this->set_logged_out();
            }
        }
    }

    public function is_admin() {
        $user_data = $this->LAVA->session->userdata('user');
        return isset($user_data['user_role']) && $user_data['user_role'] === 'admin';
    }

    public function get_user_id()
    {
        $user_id = $this->LAVA->session->userdata('user_id');
        return !empty($user_id) ? (int) $user_id : 0;
    }

    public function get_username($user_id)
    {
        $row = $this->LAVA->db
                        ->table('users')
                        ->select('username')                     
                        ->where('id', $user_id)
                        ->limit(1)
                        ->get();
        if($row) {
            return html_escape($row['username']);
        }
    }

    public function set_logged_out() {
        $data = array(
            'user_id' => $this->get_user_id(),
            'browser' => $_SERVER['HTTP_USER_AGENT'],
            'session_data' => $this->LAVA->session->userdata('session_data')
        );
        $res = $this->LAVA->db->table('sessions')
                        ->where($data)
                        ->delete();
        if($res) {
            $this->LAVA->session->unset_userdata(array('user_id', 'user'));
            $this->LAVA->session->sess_destroy();
            return true;
        } else {
            return false;
        }
    }

    // Rest of the methods remain unchanged
    public function verify($token) {
        return $this->LAVA->db
                        ->table('users')
                        ->select('id')
                        ->where('email_token', $token)
                        ->where_null('email_verified_at')
                        ->get();    
    }

    public function verify_now($token) {
        return $this->LAVA->db
                        ->table('users')
                        ->where('email_token' ,$token)
                        ->update(array('email_verified_at' => date("Y-m-d h:i:s", time())));    

    }
    
    public function send_verification_email($email) {
        return $this->LAVA->db
                        ->table('users')
                        ->select('username, email_token')
                        ->where('email', $email)
                        ->where_null('email_verified_at')
                        ->get();    
    }
    
    public function reset_password($email) {
        $row = $this->LAVA->db
                        ->table('users')
                        ->where('email', $email)
                        ->get();
        if($this->LAVA->db->row_count() > 0) {
            $this->LAVA->call->helper('string');
            $data = array(
                'email' => $email,
                'reset_token' => random_string('alnum', 10)
            );
            $this->LAVA->db
                ->table('password_reset')
                ->insert($data)
                ;
            return $data['reset_token'];
        } else {
            return FALSE;
        }
    }

    public function is_user_verified($email) {
        $this->LAVA->db
                ->table('users')
                ->where('email', $email)
                ->where_not_null('email_verified_at')
                ->get();
        return $this->LAVA->db->row_count();
    }

    public function get_reset_password_token($token)
    {
        return $this->LAVA->db
                ->table('password_reset')    
                ->select('email')            
                ->where('reset_token', $token)
                ->get();
    }

    public function reset_password_now($token, $password)
    {
        $email = $this->get_reset_password_token($token)['email'];
        $data = array(
            'password' => $this->passwordhash($password)
        );
        return $this->LAVA->db
                ->table('users')
                ->where('email', $email)
                ->update($data);
    }
}
