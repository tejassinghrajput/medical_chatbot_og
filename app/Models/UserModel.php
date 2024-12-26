<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    
    public function validateUser($email){
        return $this->db->query("SELECT * FROM users WHERE email = '$email'")->getRowArray();
    }
}
