<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {
    
    private $alert = null;
    
    public function __construct() {
        parent::__construct();
        
        // Load required libraries
        $this->call->library('session');
        $this->call->library('lauth');
        
        // Check if user is logged in
        if (!$this->lauth->is_logged_in()) {
            $this->alert = ['type' => 'danger', 'message' => 'Please login first.'];
            redirect('auth/login');
        }
        
        // Check if user is admin
        if (!$this->lauth->is_admin()) {
            $this->alert = ['type' => 'danger', 'message' => 'Access denied. Admin privileges required.'];
            redirect('home');
        }
        
        $this->call->model('AdminModel');
    }
    
    private function loadView($view, $data = []) {
        // Add alert to data if exists
        if ($this->alert) {
            $data['alert'] = $this->alert;
        }
        
        // Load views with correct paths
        $this->call->view('templates/admin_header', $data);
        $this->call->view('templates/admin_nav', $data);
        $this->call->view('admin/' . $view, $data);
    }
    
    public function dashboard() {
        $data = [
            'user' => $this->session->userdata('user'),
            'total_users' => $this->AdminModel->getTotalUsers(),
            'total_divers' => $this->AdminModel->getTotalDivers(),
            'recent_divers' => $this->AdminModel->getRecentDivers()
        ];
        
        $this->loadView('dashboard', $data);
    }
    
    public function divers() {
        $data = [
            'user' => $this->session->userdata('user'),
            'divers' => $this->AdminModel->getAllDivers()
        ];
        
        $this->loadView('divers', $data);
    }
    
    public function users() {
        $data = [
            'user' => $this->session->userdata('user'),
            'users' => $this->AdminModel->getAllUsers()
        ];
        
        $this->loadView('users', $data);
    }
    
    public function updateUserRole() {
        if (!$this->form_validation->submitted()) {
            redirect('admin/users');
        }

        $user_id = $this->io->post('user_id');
        $role = $this->io->post('role');
        
        if ($this->AdminModel->updateUserRole($user_id, $role)) {
            $this->alert = ['type' => 'success', 'message' => 'User role updated successfully'];
        } else {
            $this->alert = ['type' => 'danger', 'message' => 'Failed to update user role'];
        }
        redirect('admin/users');
    }
    
    public function deleteDiver() {
        if (!$this->form_validation->submitted()) {
            redirect('admin/divers');
        }

        $diver_id = $this->io->post('diver_id');
        
        if ($this->AdminModel->deleteDiver($diver_id)) {
            $this->alert = ['type' => 'success', 'message' => 'Diver deleted successfully'];
        } else {
            $this->alert = ['type' => 'danger', 'message' => 'Failed to delete diver'];
        }
        redirect('admin/divers');
    }
}
