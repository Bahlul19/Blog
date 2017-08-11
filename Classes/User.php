<?php

include('Main.php');

class User extends Main
{
    protected $table = 'tbl_user';
    
    /*
    public function readAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }*/
}

?>
