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
        
        $res->bindValue(':name', $input['name'], PDO::PARAM_STR);
        $res->bindValue(':company', $input['company'], PDO::PARAM_STR);
        $res->bindValue(':email', $input['email'], PDO::PARAM_STR);
        $res->bindValue(':phone', $input['phone'], PDO::PARAM_STR);
        $res->bindValue(':message', $input['message'], PDO::PARAM_STR);
        $res->bindValue(':marketing_preferences', $input['marketing_preferences'], PDO::PARAM_BOOL);

        $res->execute();
    }
}
