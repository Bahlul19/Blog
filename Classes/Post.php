<?php

include('Main.php');

class Post extends Main
{
    protected $table = 'tbl_post';
    
    private $id;
    private $cat_id;
    private $title;
    private $body;
    private $image;
    private $author;
    private $tags;
    private $date;
    
    
    
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
