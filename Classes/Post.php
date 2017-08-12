<?php

include('Main.php');

class Post extends Main
{
    protected $table = 'tbl_post';
    
//    private $id;
//    private $cat_id;
    private $title;
    private $body;
    private $image;
    private $author;
    private $tags;
    private $date;
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function setBody($body)
    {
        $this->body = $body;
    }
    
    public function setImage($image)
    {
        $this->image = $image;
    }
    
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
    }
    
    /*
    public function readAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }*/
  
    /*
    public function readById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id= :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
//        return $stmt->fetch_assoc();
    }
     
     */
     
}

?>
