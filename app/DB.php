<?php

namespace App\App;

use \PDO;

class DB
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function select($table, $where = '', $fetchClass = null)
    {
        $query = $this->db->prepare("select * from {$table} where {$where};");
        $query->execute();

        if ($fetchClass) {
            return $query->fetchAll(PDO::FETCH_CLASS, $fetchClass);
        }

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        $query = $this->db->prepare($sql);

        return $query->execute($parameters);
    }

    public function update($table, $id, $parameters)
    {
        $set = '';
        $i=0;
        foreach ($parameters as $key => $value) {
            $i++;
            if($i!=count($parameters)){
                $set .= $key.'=:'.$key.', ';
            }else{
                $set .= $key.'=:'.$key;
            }
        }
            
        $sql = 'UPDATE ' . $table . ' SET '.$set.' WHERE id=' . $id;
        $query = $this->db->prepare($sql);

        return $query->execute($parameters);
    }

    public function delete($table, $id)
    {
        $sql = 'DELETE FROM ' . $table . ' WHERE id=' . $id;
        $query = $this->db->prepare($sql);

        return $query->execute();
    }
}
