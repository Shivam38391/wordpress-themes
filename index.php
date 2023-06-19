<?php echo get_header(); ?>




<?php  

  // this havepost function only work in index.php
  
  while(have_posts()) {
    
    the_post();

  ?>

<div>

<!-- // the title function get the title of the post  -->

 <!-- <h1> <?php // the_title() ?> </h1>  -->

 <?php the_content() ?> 


</div>


<?php  } ?>


      




<?php get_footer() ?>