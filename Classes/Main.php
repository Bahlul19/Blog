<?php

include ('DB.php');

abstract class Main
{
//    abstract public function readById($id);
    protected $table;

    public function readAll()
    {
        $sql = "SELECT * FROM $this->table limit 3";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function readById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id=:id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }
   
    
}
?>