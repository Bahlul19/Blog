<?php

class Pagination
{
   protected $table = "tbl_post";
   private $start_form;
   private $per_page;
    
   public function paginate()
   {
    
    $per_page = 3;  
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }
    $start_form = ($page-1)*$per_page;
    $sql = "SELECT * FROM $this->table";
    $stmt = DB::prepare($sql);
    $total_rows = mysqli_num_rows($stmt);
    $total_pages= ceil($total_rows/$per_page);
    return $total_pages->execute();
    
       
   }
}



?>