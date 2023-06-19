


<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Growing</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      <?php wp_head(); ?>

    </head>
    <body>
      <!-- header top section start -->
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="call_text"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/map-icon.png"><span class="call_text_left">Locations</span></a></div>
            </div>
            <div class="col-sm-4">
              <div class="call_text"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/call-icon.png"><span class="call_text_left">+01 1234567890</span></a></div>
            </div>
            <div class="col-sm-4">
              <div class="call_text"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mail-icon.png"><span class="call_text_left">Demo@gmail.com</span></a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- header top section end -->
      <!-- header section start -->
      <div class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">


          <!-- path of logo image -->
          <?php
           $logoimg = get_header_image();
          ?>



          <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo $logoimg ;?>"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">SERVICES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customer.html">CUSTOMER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="news.html">NEWS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">CONTACT US</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">LOGIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SIGNUP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png"></a>
              </li>
            </ul>




          </div> -->


            <!-- menu will comes from ul li concept we have to design the menu on our own -->

            <!-- primary menu usthe key that we have defined in functions.php -->
            <?php wp_nav_menu( array("theme_location"=> "primary-menu", "menu_class"=>"navbar-nav") ) ?> 

        </nav>
        </div>
      </div>
      <!-- header section end -->




