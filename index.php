<!--Header Section-->
<?php include('inc/header.php'); ?>
 
  <!--Slider Section-->
<?php include('inc/slider.php'); ?>
 
<?php include('helpers/Format.php'); ?>  
  
<?php

spl_autoload_register(function($class){
   include("classes/".$class.".php");
});

?>
  
  <?php

  $post = new Post();
  $format = new Format();
  
  ?>
  
    <div class="contentsection contemplete clear">
		<div class="maincontent clear">
                    
                      <?php
                    //check it ok or not 
                    if($post)
                    {
                      
                    foreach($post->readAll() as $value)
                    {
                    ?> 

			<div class="samepost clear">
                    <h2><a href="post.php?id=<?= $value['id']; ?>">
                    <?= $value['title']; ?></a></h2>
                            
                            
                            
<h4> <?= $format->formateDate($value['date']); ?> By <a href="#"><?= $value['author'];?></a></h4>
<a href="#"><img src="admin/upload/<?= $value['image'] ?>" alt="post image"/></a>

				
                <?= $format->textShorten($value['body']); ?>
				
	<div class="readmore clear">
	<a href="post.php?id=<?= $value['id']; ?>">Read More</a>
	</div>

			</div>
                    
                    <?php } ?>
                    <?php } else{ header("Location:404.php"); } ?>
		</div>
            
            
            <!--Side bar-->
		<?php include('inc/sidebar.php'); ?>
            
            
             <!--Footer Section-->
	<?php include('inc/footer.php'); ?>