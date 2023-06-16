<?php echo get_header(); ?>




<?php  

  // this havepost function only work in index.php
  while(have_posts()) {
    
    the_post();

  ?>

  <h2> <?php the_title() ?> </h2>

  <p> <?php the_content() ?> </p>


<?php  } ?>


      




<?php get_footer() ?>