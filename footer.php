        
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_text">Contact Us</h1>
          <div class="contact_section_2">
            <div class="row">
              <div class="col-md-6">
                <form action="/action_page.php">
                  <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Name" name="Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Email" name="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Subject" name="Email">
                  </div>
                    <div class="form-group">
                      <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                    </div>
                  </form>
                  <div class="main_bt"><a href="#">Send</a></div>
              </div>
              <div class="col-md-6">
                <div class="map">
                  <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- footer section start -->
        <div class="footer_section layout_padding">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">

              <?php
                   $logoimg = get_header_image();
              ?>

                <div class="footer_logo"><img src="<?php echo $logoimg ;?>"></div>
                <p class="dolor_amet_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
              </div>
              <div class="col-sm-4">
                <h1 class="footer_about">About Us</h1>
                <p class="dolor_amet_text_1">distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has</p>
              </div>
              <div class="col-sm-4">
                <h1 class="footer_about">Newsletter</h1>
                <input type="text" class="mail_text" placeholder="Enter your Email" name="text">
                <button class="subscribe_bt">Send</button>
              </div>
            </div>
          </div>
        </div>
        <!-- footer section end -->
      </div>
      <!-- contact section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
        <div class="container">
          <p class="copyright">2023 All Rights Reserved. <a href="https://html.design">Free html  Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
      <!-- javascript --> 
      <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
   </html>