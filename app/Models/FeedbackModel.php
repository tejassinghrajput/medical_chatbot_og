<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model{
    
    public function submitFeedback($name, $email, $message){
        return $this->db->query("INSERT INTO user_contact_form (name, email, message) VALUES ('$name', '$email', '$message')");
    }
}
