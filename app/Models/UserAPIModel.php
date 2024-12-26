<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAPIModel extends Model{

    public function verifyApi($apiKey){
        $res = $this->db->query("SELECT * FROM user_apis WHERE api_key = '$apiKey'")->getRowArray();
        if($res){
            return $this->db->query("SELECT name, email, api_key FROM `user_apis` INNER JOIN users ON user_apis.user_id = users.id WHERE api_key = '$apiKey'")->getRowArray();
        }
        return false;
    }
}
