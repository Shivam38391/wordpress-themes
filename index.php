<?php echo get_header(); ?>




<?php  

  // this havepost function only work in index.php
  
  while(have_posts()) {
    
    the_post();

  ?>


<article <?php post_class(); ?> >

  <!-- // the title function get the title of the post  -->

  <h1> <?php the_title() ?> </h1> 

  <?php the_content() ?> 

  <footer>
    <p class="byline">
      Author: <a href="<?php echo  get_author_posts_url( $post->post_author ); ?>"> <?php  the_author(); ?></a> | Date: <?php the_date(); ?>| Time: <?php the_time(); ?> | Categories: <?php the_category( ',' ); ?> | Tags: <?php the_tag( ',' ); ?> 
    </p>
  
  </footer>


 </article>


<?php  } ?>


      




<?php get_footer() ?>