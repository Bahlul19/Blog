<?php

include('Main.php');

class Catagory extends Main
{
    protected $table = 'tbl_catagory';
    
  
    private $cat_id;
    private $name;
    
    /*
    public function readAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    */
 
}

?>
