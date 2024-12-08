<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminModel extends Model {
    
    public function getTotalUsers() {
        return $this->db->table('users')
                       ->select_count('id', 'total')
                       ->get()['total'];
    }
    
    public function getTotalDivers() {
        return $this->db->table('divers')
                       ->select_count('id', 'total')
                       ->get()['total'];
    }
    
    public function getRecentDivers($limit = 5) {
        return $this->db->table('divers')
                       ->order_by('id', 'DESC')
                       ->limit($limit)
                       ->get_all();
    }
    
    public function getAllDivers() {
        return $this->db->table('divers')
                       ->order_by('id', 'DESC')
                       ->get_all();
    }
    
    public function getAllUsers() {
        return $this->db->table('users')
                       ->select('id, username, email, user_role, created_at, email_verified_at')
                       ->order_by('id', 'DESC')
                       ->get_all();
    }
    
    public function updateUserRole($user_id, $role) {
        if (!in_array($role, ['user', 'admin'])) {
            return false;
        }
        
        return $this->db->table('users')
                       ->where('id', $user_id)
                       ->update(['user_role' => $role]);
    }
    
    public function deleteDiver($diver_id) {
        return $this->db->table('divers')
                       ->where('id', $diver_id)
                       ->delete();
    }
    
    public function getDiverDetails($diver_id) {
        return $this->db->table('divers')
                       ->where('id', $diver_id)
                       ->get();
    }
}
