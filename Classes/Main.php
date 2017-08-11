<?php

include ('DB.php');

abstract class Main
{
     protected $table;
    
    
     public function readAll()
    {
        $sql = "SELECT * FROM $this->table limit 3";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
}
?>