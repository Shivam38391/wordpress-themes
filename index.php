<?php echo get_header(); ?>




<?php  

  // this havepost function only work in index.php
  while(have_posts()) {
    
    the_post();

  ?>

<div>

  <?php the_title() ?>

 <?php the_content() ?> 


</div>


<?php  } ?>


      




<?php get_footer() ?>