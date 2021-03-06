<!-- FOOTER -->
<footer>
    <div id="subscribe-banner-wrap">
        <div id="subscribe-banner">
            <!-- SUBSCRIBE CONTENT -->
            <div class="subscribe-content">
                <!-- SUBSCRIBE HEADER -->
                <div class="subscribe-header">
                    <figure>
                        <img src="images/news_icon.png" alt="subscribe-icon">
                    </figure>
                    <p class="subscribe-title">Abbonez-vous à notre newsletter</p>
                    <p>Et recevez les offres plus vite</p>
                </div>
                <!-- /SUBSCRIBE HEADER -->

                <!-- SUBSCRIBE FORM -->
                <form class="subscribe-form" method="post">
                    <input type="text" name="email" id="subscribe_email" placeholder="Entrez votre email ici...">
                    <button name="add_new_letter" class="button medium dark" type="submit">Je m'abonne !</button>
                </form>
                <!-- /SUBSCRIBE FORM --
            </div>
            <!-- /SUBSCRIBE CONTENT -->
            </div>
        </div>
        <!-- FOOTER TOP -->
        <div id="footer-top-wrap">
            <div id="footer-top">
                <!-- COMPANY INFO -->
                <div class="company-info">
                    <figure class="logo small">
                        <img src="images/logo.png" alt="logo-small">
                    </figure>
                    <p>Retouvez les meilleurs réductions chez vos vendeurs favoris.</p>
                    <ul class="company-info-list">
                        <li class="company-info-item">
                            <span class="icon-present"></span>
                            <p><span>150</span> Offres</p>
                        </li>
                        <li class="company-info-item">
                            <span class="icon-energy"></span>
                            <p><span>3200</span> Membres</p>
                        </li>
                        <li class="company-info-item">
                            <span class="icon-user"></span>
                            <p><span>550</span> Partenaires</p>
                        </li>
                    </ul>
                    <!-- SOCIAL LINKS -->
                    <ul class="social-links">
                        <li class="social-link fb">
                            <a href="#"></a>
                        </li>
                        <li class="social-link twt">
                            <a href="#"></a>
                        </li>
                        <li class="social-link db">
                            <a href="#"></a>
                        </li>
                        <li class="social-link rss">
                            <a href="#"></a>
                        </li>
                    </ul>
                    <!-- /SOCIAL LINKS -->
                </div>
                <!-- /COMPANY INFO -->

                <!-- LINK INFO -->
                <div class="link-info">
                    <p class="footer-title">Nos Pages</p>
                    <!-- LINK LIST -->
                    <ul class="link-list">
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="index.php" title="">Accueil</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="gagnants.php" title="">Les gagnants</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="aide.php">Comment ça marche ?</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="extension.php">Extensions</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="categorie.php">Tous les marchants</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="connexion.php" title="">Se connecter</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="inscription.php" title="">S'inscire</a>
                        </li>
                    </ul>
                    <!-- /LINK LIST -->
                </div>
                <!-- /LINK INFO -->

                <!-- LINK INFO -->
                <div class="link-info">
                    <p class="footer-title">Besoin d'aide ?</p>
                    <!-- LINK LIST -->
                    <ul class="link-list">
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="contact.php">Contact</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="faq.php">FAQ</a>
                        </li>
                    </ul>
                    <!-- /LINK LIST -->
                </div>
                <!-- /LINK INFO -->

                <!-- LINK INFO -->
                <div class="link-info">
                    <p class="footer-title">Information légales</p>
                    <!-- LINK LIST -->
                    <ul class="link-list">
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="cgu.php">CGU</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="mentions-legales.php">Mentions légales</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="faq.php">Question fréquentes</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="Charte-de-confidentialite.php">Charte de confidentialite</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="politique-de-cookies.php">Politique de cookies</a>
                        </li>
                    </ul>
                    <!-- /LINK LIST -->
                </div>
                <!-- /LINK INFO -->
            </div>
        </div>
        <!-- /FOOTER TOP -->

        <!-- FOOTER BOTTOM -->
        <div id="footer-bottom-wrap">
            <div id="footer-bottom">
                <p><span>&copy;</span><a href="index.html">Cashbackreduction</a> Tous droits réservés - ©2021</p>
            </div>
        </div>
        <!-- /FOOTER BOTTOM -->
</footer>
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
    <div class="survey xmalert alert-box" style="visibility: visible; opacity: 1; position: fixed; z-index: 100000; transition: all 0.3s ease-in-out 0s; inset: auto 30px 30px auto;">
  <figure class="survey-img">
  <img src="images/dashboard/alert-logo.png" alt="survey-img">
  </figure>							<p class="text-header">Alerts &amp; Notifications</p>
  <p class="info">We added alerts &amp; notifications to the template!.<br>Try our previewer and code generator and use them in your page!</p>
  <p class="timestamp"></p>
  <a href="alerts-notifications.html" class="button mid dark">je <span class="primary">l'ai!</span></a>
  <img class="close-btn" src="images/dashboard/notif-close-icon.png" alt="close-icon">
  </div>
    <?php
}
?>
<div id='background_black' onClick='CloseNavbar()'></div>
<div id='Nav_side' class='border-radius bg-white shadow '></div>
<!-- Scripts -->
<script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js?v=0.0001"></script>
<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript">
    $(document).on('ready', function () {

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
