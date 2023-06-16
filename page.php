



<?php get_header(); ?>

<!-- the title function getting the tittle name dynamically -->
<h1> <?php the_title() ?></h1>

<!-- displaying image with imag tag -->
<?php the_post_thumbnail(array(100,100)); ?>



<!-- function to get the path of the image thumbnails -->

<?php 

$imagepath= wp_get_attachment_image_src(get_post_thumbnail_id());

print_r($imagepath);
?>


      <!-- money section start -->
      <div class="money_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-lg-4">
              <div class="money_taital">
                <h3 class="advanced_text">ADVANCED SERVICE</h3>
                <h1 class="data_text">Data Analytics</h1>

               <?php the_content() ?>                
                
                <div class="read_bt_1"><a href="#">Read More</a></div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-8 padding_0">
              <div class="image_2"><img src="<?php echo get_template_directory_uri(); ?>/images/img-2.png"></div>
              <h1 class="your_text">Your<br> Money<br> Grow</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- money section end -->


<?php get_footer(); ?>