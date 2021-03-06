    <!-- FOOTER -->

    <?php
          if(explode('/',$_SERVER['PHP_SELF'])[1] != 'connexion.php' && explode('/',$_SERVER['PHP_SELF'])[1] != 'inscription.php' && explode('/',$_SERVER['PHP_SELF'])[1] != 'motdepasseoublier.php'){
    ?>
    <footer>
          <div id="subscribe-banner-wrap" class="">
              <div id="subscribe-banner" class="d-none">
                  
                  <div class="subscribe-content">
                      
                      <div class="subscribe-header">
                               
                  </div>
                  
                  </div>
              </div>
             
              <div id="footer-top-wrap" class="d-none">
                  <div id="footer-top">
                      
                      <div class="company-info">
                         
                          
                      </div>
                      
                      <div class="link-info">
                          
                         
                      </div>
                     
                      <div class="link-info">
                         
                         
                      </div>
                     

                      
                      </div>
                    
                  </div>
              </div>
              <!-- /FOOTER TOP -->

              <!-- FOOTER BOTTOM -->
              <div id="footer-bottom-wrap" class="container mx-auto">
                  <div id="footer-bottom">
                      <p><span>&copy;</span><a href="index.html">Cashbackreduction</a> Tous droits réservés - ©<script>document.write(new Date().getFullYear())</script></p>
                  </div>
              </div>
              <!-- /FOOTER BOTTOM -->
      </footer>
    <?php
      }
    ?>
    <!-- /FOOTER -->

    <!-- Back To Top Button -->
    <div id="backtop" onClick=' window.scrollTo({top:0,behavior:"smooth"  })'>
       <span class="icon-arrow-up">
    </div>

    <div id='background' onClick="closeCode()"></div>
    <div class="fb-customerchat"
         page_id="101168218368541">
    </div>
    <?php
    if (!isset($_COOKIE['_cashbackREduction'])) {
        ?>
    
</div>
        <?php
    }
    ?>
    <div id='background_black' onClick='CloseNavbar()'>
	</div>
    <div id='Nav_side' class='border-radius bg-white shadow '></div>
    <!-- Scripts -->
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js?v=0.0001"></script>
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>


    <script type="text/javascript">
        $(document).on('ready', function () {
          $('.to-slick').slick({
              dots: true,
              infinite: true,
              slidesToShow: 4,
              slidesToScroll: 4,
              autoplay: true,
              arrow:true,
              autoplaySpeed: 3000
           });
            if (window.screen.width <= 414) {

                $(".regular").slick({
                    dots: true,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    autoplay: true,
                    autoplaySpeed: 6000
                });

            } else {

                $(".regular").slick({
                    dots: true,
                    infinite: true,
                    slidesToShow: 6,
                    slidesToScroll: 6,
                    autoplay: true,
                    autoplaySpeed: 2000
                });

            }
        });
    </script>
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>

    <script type="text/javascript" src="js/custom.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript" src="https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js "></script>

    <script>
        $(document).ready(function () {
            window.addEventListener('scroll', function (e) {
                if (window.pageYOffset > 200) {
                    $('#backtop').fadeIn().css('display', 'flex');

                } else {
                    $('#backtop').fadeOut();
                }
            });
            <?php
            if(explode('/', $_SERVER['PHP_SELF'])[1] == 'index.php'){
            ?>
            window.addEventListener('scroll', function (e) {
                if (window.pageYOffset > 50) {
                    $('#search').show();
                    $('#header').addClass('class_haeder');
                } else {
                    $('#header').removeClass('class_haeder');
                    $('#search').hide();
                }
            });
            <?php
            }else{
            ?>
            $('#header').addClass('class_haeder');
            <?php
            }
            ?>
            AOS.init({
                duration: 1500
            });


        });


    </script>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        FB.CustomerChat.show(shouldShowDialog
        :
        true
        )
    </script>
    <!-- Google Autocomplete -->
    <script>
        function initAutocomplete() {
            var input = document.getElementById('autocomplete-input');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }
            });

            if ($('.main-search-input-item')[0]) {
                setTimeout(function () {
                    $(".pac-container").prependTo("#autocomplete-container");
                }, 300);
            }
        }
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="vendor/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Leroy-Design start -->
    <!-- Tooltipster -->
    <script src="js/leroy-design/vendor/jquery.tooltipster.min.js"></script>
    <!-- Owl Carousel -->
    <!-- Tweet -->
    <script src="js/leroy-design/vendor/twitter/jquery.tweet.min.js"></script>
    <!-- xmAlerts -->
    <script src="js/leroy-design/vendor/jquery.xmalert.min.js"></script>
    <!-- Side Menu -->
    <script src="js/leroy-design/side-menu.js"></script>
    <!-- Home -->
    <script src="js/leroy-design/home.js"></script>
    <!-- Tooltip -->
    <script src="js/leroy-design/tooltip.js"></script>
    <!-- User Quickview Dropdown -->
    <script src="js/leroy-design/user-board.js"></script>
    <!-- Home Alerts -->
    <script src="js/leroy-design/home-alerts.js"></script>
    <!-- Footer -->
    <script src="js/leroy-design/footer.js"></script>

    <script type="text/javascript" src="js/custom.js"></script>


    <!-- Leroy-Design end -->
  </body>
</html>
