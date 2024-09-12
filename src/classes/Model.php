<?php

namespace App;

use Exception;
use PDO;

abstract class Model
{
    /**
     * @var string
     */
    protected $table;
    
    /**
     * @var Connection
     */
    protected $db;


    public function __construct(Connection $db)
    {
        if (empty($this->table)) {
            throw new Exception('$table must be set in: ' . get_class($this) . PHP_EOL);
        }
        $this->db = $db;
    }

    public function all()
    {
        $res = $this->db->query("SELECT * FROM $this->table");
        
        return $res->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function find($value, $field = 'id')
    {
        $res = $this->db->prepare("SELECT * FROM $this->table WHERE $field = ?");
        $res->bindValue(1, $value);
        $res->execute();
     
        return $res->fetchAll(PDO::FETCH_OBJ);
    }
}
