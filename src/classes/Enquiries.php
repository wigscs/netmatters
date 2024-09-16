<?php

namespace App;

use PDO;

class Enquiries extends Model
{
    protected $table = 'enquiries';

    public function createEnquiry(array $input)
    {
        $sql = "INSERT INTO $this->table 
            (name, company, email, phone, message, marketing_preferences)
            VALUES (:name, :company, :email, :phone, :message, :marketing_preferences)";
        $res = $this->db->prepare($sql);

        $res->execute([
            ':name' => $input['name'],
            ':company' => $input['company'],
            ':email' => $input['email'],
            ':phone' => $input['phone'],
            ':message' => $input['message'],
            ':marketing_preferences' => $input['marketing_preferences']
        ]);
    }
}
