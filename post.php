<?php include('inc/header.php');

spl_autoload_register(function($class){
   include("classes/".$class.".php");
});

?>

<?php

    $post = new Post();
    $format = new Format();

    if(!isset($_GET['id'])|| $_GET['id'] ==NULL)
    {
        header("Location: 404.php");
    }
    else 
    {
       $id = $_GET['id'];
       $result = $post->readById($id);
    }
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
                    <?php
                    
                    if($post)
                    {
                        foreach($result as $value)
                        {
                    ?>

			<div class="about">
                            
	<h2><?= $value['title']; ?></h2>
<h4> <?= $format->formateDate($value['date']) ?> , By <?= $value['author'] ?></h4>
    
    <img src="admin/upload/<?= $value['image'] ?>" alt="MyImage"/>
    
     <?= $value['body']; ?>
            
                        <?php } ?><!--Ending foreach loop-->
    
	<div class="relatedpost clear">
                         
<h2>Related articles</h2>


        <?php
        
        $catagory = new Catagory();
        
        $cat_id = $value['cat_id'];
        
        $relatedpost = $catagory->readById($id);
        
        if($relatedpost)
        
        ?>  



    <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
    <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
     <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
    <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
    <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
    <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
</div>
    
         <?php  } else {header("Location:404.php"); }?>   
    

	</div>

		</div>
            <!--Sidebar-->
<?php include('inc/sidebar.php'); ?>
             <!--Sidebar-->
<?php include('inc/footer.php'); ?>	