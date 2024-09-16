<?php

namespace App;

use PDO;

class News extends Model
{
    protected $table = 'news_posts';

    public function getLatest($limit = 3)
    {
        $res = $this->db->prepare("SELECT * FROM $this->table ORDER BY publish_date DESC LIMIT ?");
        $res->bindValue(1, $limit, PDO::PARAM_INT);
        $res->execute();
     
        return $res->fetchAll(PDO::FETCH_OBJ);
    }
}
