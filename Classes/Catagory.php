<?php

include('Main.php');

class Catagory extends Main
{
    protected $table = 'tbl_catagory';
    
  
//    private $cat_id;
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
    /*
    public function readById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id=:id";
        $stmt = DB::prepare($sql);
        $stmt = bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }
     */
 
}

?>
