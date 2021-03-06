<?php
session_start();
if (!isset($_COOKIE['id_user']) || $_COOKIE['id_user'] == 0 && isset($_SESSION['id'])) {
    if (isset($_SESSION['id'])) {
        setcookie('id_user', $_SESSION['id'], time() + 365 * 24 * 3600, null, null, false, true);
    }
} else {
    setcookie('id_user', 0, time() + 365 * 24 * 3600, null, null, false, true);
}
?>
<!DOCTYPE html>
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <?php
    include('./requiert/php-global.php');

    $p = $pdo->query("SELECT * FROM histo_offers WHERE idUser = '" . $mbreHashId . "' AND etat='Valid&eacute;' AND vu_header=0 ORDER BY STR_TO_DATE(date,'%d/%m/%Y à %H:%i:%s') DESC LIMIT 0,10");
    $h = $p->fetchAll(PDO::FETCH_ASSOC);
    if (count($h) > 0) {
        $nbr_io = '<b class="cloche" >' . count($h) . '</b>';
    }
    $fetch_data = $pdo->query("SELECT COUNT(*) AS 'remuneration' FROM messagerie_all WHERE id_recive='" . $_SESSION['id'] . "' AND id_response = 0 AND message_lu = 0 ORDER BY id DESC");
    $totalMissionsAttente = $fetch_data->fetch(PDO::FETCH_ASSOC);
    $totalMissionsAttente = $totalMissionsAttente['remuneration'];
    ?>
    <meta name="author" content=""/>
    <link rel="icon" type="image/png" href="./images/icon.png">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-signin-client_id"
          content="799924690004-3n6l4rkr2j0kg4k4ktkg96fphgtcvocj.apps.googleusercontent.com">
    <?php
    include("./requiert/new-form/meta.php");
    ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icons/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="vendor/select2/css/select2-bootstrap.css" />
    <link href="vendor/select2/css/select2.min.css" rel="stylesheet" />
    <link href="css/oldStyle.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=News+Cycle&display=swap" rel="stylesheet">




    <!---  Leroy-Design modifications start -->
    <link rel="stylesheet" href="css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="css/vendor/tooltipster.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css?v=0.9999996">
    <!---  Leroy-Design modifications end -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="js/sweetalert.min.js"></script>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '3321703071194475',
                cookie: true,                     // Enable cookies to allow the server to access the session.
                xfbml: true,                     // Parse social plugins on this webpage.
                version: 'v3.2'           // Use this Graph API version for this call.
            });

        };

        function testAPI() {
            FB.api('/me?fields=name,email', function (response) {
                insert(response);
            });
        }

        function insert(response) {
            var name = response.name;
            var apt = name.split(' ');

            var data = {
                nom: apt[0],
                prenom: apt[1],
                email: response.email,
                idParrain: document.getElementById('idParrain').value
            }

            $.ajax({
                url: '<?= url_site;?>/loginSocial.php',
                type: 'POST',
                data: data,
                success: function (data) {
                    window.location.replace('<?= url_site;?>/redirectLogin.php?id=' + data + '');
                }
            });
        }

        function onSignIn(googleUser) {

            var profile = googleUser.getBasicProfile();

            var apt = profile.getName().split(' ');

            var data = {
                nom: apt[0],
                prenom: apt[1],
                email: profile.getEmail(),
                idParrain: document.getElementById('idParrain').value
            }

            $.ajax({
                url: '<?= url_site;?>/loginSocial.php',
                type: 'POST',
                data: data,
                success: function (data) {
                    window.location.replace('<?= url_site;?>/redirectLogin.php?id=' + data + '');
                }
            });

        }

        </script>
    <style>
      .g-signin2{
      	width:1%;
      	padding:0
      }



      .clearfix:after,.clearfix:before{
        content:" ";display:table}
        .clearfix:after{
           clear:both
       }
        #wrapper-content{
           background:#fff
           }
        .help-section:after,.help-section:before{content:" ";display:table}.help-section:after{clear:both}.help-section.help-section-title{padding:80px 0}.help-section.help-section-title h1{margin:0;font-size:42px}.help-section.help-section-footer{margin-top:70px;padding:50px 0}.help-section.help-section-footer h1{margin:0;font-size:34px}.help-section.blue{background-color:#08c;color:#fff}.help-section-row{margin-left:-10px;margin-right:-10px;padding-top:30px;padding-bottom:30px}.help-section-row:after,.help-section-row:before{content:" ";display:table}.help-section-row:after{clear:both}.help-section-picture{position:relative;min-height:1px;padding-left:10px;padding-right:10px;padding-top:50px}@media (min-width:992px){.help-section-picture{float:left;width:33.3333333333%}}.help-section-picture.zpt{padding-top:0}.help-section-content{position:relative;min-height:1px;padding-left:10px;padding-right:10px}@media (min-width:992px){.help-section-content{float:left;width:66.6666666667%}}.help-section-content h2{margin:50px 0;padding-left:10px;color:#08c;font-size:34px;font-weight:400}.help-answer{margin-bottom:40px;padding-left:10px;color:#777}.help-answer p{margin:0 0 15px}.help-answer-info{position:relative;margin:20px 0;padding:12px;background:#e1f1f9;color:#08c;line-height:1.5}.help-answer-info i{display:block;position:absolute;top:14px;left:12px;width:24px;color:#08c;text-align:center}.help-question{position:relative;margin:0;padding:20px 30px 20px 10px;font-size:19px;cursor:pointer}.help-question i{display:block;position:absolute;top:50%;right:0;width:30px;height:20px;margin-top:-10px;transition-duration:.5s;color:#777;text-align:center}.help-question.folded{border-bottom:1px solid #ccc;font-weight:500}.help-question.folded i{transform:rotate(180deg)}.help-question.folded:hover{background:#f6f6f6}.help-question.folded+.help-answer{display:none}.help-answer-image{margin:30px 0}.help-actions{margin-top:40px}.help-actions:after,.help-actions:before{content:" ";display:table}.help-actions:after{clear:both}.help-actions a{min-width:250px}.help-actions a:first-child{margin-right:30px}@media (max-width:991px){.help-section.help-section-title{margin-top:30px;padding:40px 0}.help-section.help-section-title:first-child{margin-top:0}.help-section.help-section-title h1{font-size:28px}.help-section.help-section-footer{padding:40px 0;text-align:center}.help-section.help-section-footer h1{font-size:28px}.help-section-row{margin-bottom:30px;padding:0}.help-section-picture{display:none}.help-section-content h2{margin:40px 0 10px;padding:0;font-size:26px}.help-question{margin-right:-15px;margin-left:-15px;padding-left:15px;font-size:18px}.help-question:after{right:5px}.help-question:hover{background:#fff}.help-answer{padding-left:0}.help-actions{margin-top:30px}.help-actions a:first-child{margin-right:auto;margin-bottom:15px}}

        .Ancien_io{
          display:none;
        }

       .code_io{
          display: none;
       }

       *{
          box-sizing: border-box;
        }

        .slider {
            width: 100%;
            margin: 100px auto;
        }


        .slick-slide {
          margin: 10px 20px;
        }

        .slick-slide img {
          width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
          color: black;
        }

        .slick-slide {
          transition: all ease-in-out .3s;
          opacity: .2;
        }

        .slick-active {
          opacity: 1;
        }

        .slick-current {
          opacity: 1;
        }
    </style>

</head>

<body style="margin-top: -25px">
  <input type="hidden" name="idParrain" id='idParrain' value="<?= isset($_SESSION['idParrain']) ? $_SESSION['idParrain'] : ''; ?>"/>

  <?php
        if(explode('/',$_SERVER['PHP_SELF'])[1] != 'connexion.php' && explode('/',$_SERVER['PHP_SELF'])[1] != 'inscription.php' && explode('/',$_SERVER['PHP_SELF'])[1] != 'motdepasseoublier.php'){
  ?>

      <!-- HEADER -->
      <header class="header-fixed h-10 full-width bg-white">
        <div class="container-head container mx-auto px-0 h-100">
          <!-- LOGO -->
          <div class="logo-container">
            <div class="logo-content">
                <a href="index.php" class="link-logo">
                    <span class="logo">
                        <img src="images/logo-svg.svg" alt="">
                    </span>
                    <span class="logo-name">my-qassa</span>
                </a>
              </div>
          </div>
          <!-- /LOGO -->

          <!-- MOBILE MENU HANDLER -->
          <div class="mobile-menu-handler left primary">
              <img src="images/pull-icon.png" alt="pull-icon">
          </div>
          <!-- /MOBILE MENU HANDLER -->

          <!-- LOGO MOBILE -->
          <a href="index.php">
              <figure class="logo-mobile">
                  <img src="images/logo.png" alt="logo-mobile">
              </figure>
          </a>
          <!-- /LOGO MOBILE -->

          <!-- MOBILE ACCOUNT OPTIONS HANDLER -->
          <div class="mobile-account-options-handler right secondary">
              <span class="icon-user"></span>
          </div>
          <!-- /MOBILE ACCOUNT OPTIONS HANDLER -->

          <!-- USER BOARD -->

          <div class="user-board">
              <?php
              if (isset($_SESSION['id'])) {
                  ?>
                  <!-- USER QUICKVIEW -->
                  <div class="user-quickview">
                      <!-- USER AVATAR -->
                      <a href="MonCompte.php">
                          <div class="outer-ring">
                              <div class="inner-ring"></div>
                              <figure class="user-avatar">
                                  <img src="images/avatars/avatar_01.jpg" alt="avatar">
                              </figure>
                          </div>
                      </a>
                      <!-- /USER AVATAR -->

                      <!-- USER INFORMATION -->
                      <p class="user-name"><?= str_split($mbrePrenom, 1)[0] ?>.<?= $mbreNom ?></p>
                      <!-- SVG ARROW -->
                      <svg class="svg-arrow">
                          <use xlink:href="#svg-arrow"></use>
                      </svg>
                      <!-- /SVG ARROW -->
                      <p class="user-money">(<?= displayMontant($mbreEuros, 3, ' €'); ?>)</p>
                      <!-- /USER INFORMATION -->

                      <!-- DROPDOWN -->
                      <ul class="dropdown small hover-effect closed">
                          <li class="dropdown-item">
                              <div class="dropdown-triangle"></div>
                              <a href="./MonCompte.php">Mon Compte</a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./messagerie.php">  Messages <span class="nav-tag messages" style='background-color:orange;padding:0.5vh;color:white;border-radius:1vh'><?= $totalMissionsAttente ; ?></span></a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./chatroom.php">  Chatroom </a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./infos.php"> Gagner de l'argent</a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./parrainage.php"> Parrainage</a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./payement.php" >Paiement</a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./offre_mur.php">  Offre mur</a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./emailing.php">emailing </a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./mes-commandes.php">Mes Commandes</a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./mes-participations.php">Mes  Participations</a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./livredor.php">livredor</a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./extension.php">Extension</a>
                          </li>
                          <li class="dropdown-item">
                              <a href="./index.php?action=logout">
                                  Déconnexion
                              </a>
                          </li>
                      </ul>
                      <!-- /DROPDOWN -->
                  </div>
                  <!-- /USER QUICKVIEW -->

                  <!-- ACCOUNT INFORMATION -->
                  <div class="account-information">
                      <div class="account-email-quickview">
                          <a href="./messagerie.php" class="custom-link">
                              <span class="icon-envelope">

                                      <!-- SVG ARROW -->
                                  <svg class="svg-arrow">
                                      <use xlink:href="#svg-arrow"></use>
                                  </svg>
                                      <!-- /SVG ARROW -->
                              </span>
                          </a>
                      </div>
                  </div>
                  <!-- /ACCOUNT INFORMATION -->

                  <?php
              } else {
                  ?>
                  <!-- ACCOUNT ACTIONS -->
                  <div class="account-actions">
                      <a href="./connexion.php"   class="button primary btn-account-actions rounded"><i class="las la-sign-in-alt"></i> Connexion</a>
                      <a href="./inscription.php" class="button secondary btn-account-actions rounded"><i class="las la-user-plus"></i> Inscription</a>
                  </div>
                  <!-- /ACCOUNT ACTIONS -->

                  <?php
              }
              ?>
          </div>
          <!-- /USER BOARD -->
        </div>

      </header>
          <div class="header-wrap">
          </div>
      <!-- /HEADER -->

      <!-- SIDE MENU -->
      <div id="mobile-menu" class="side-menu left closed">
          <!-- Close Cross -->
          <div class="svg-plus">
              <use xlink:href="#svg-plus"></use>
          </div>
          <!-- /SVG PLUS -->

          <!-- SIDE MENU HEADER -->
          <div class="side-menu-header">
              <figure class="logo small">
                  <img src="images/logo.png" alt="logo">
              </figure>
          </div>
          <!-- /SIDE MENU HEADER -->

          <!-- SIDE MENU TITLE -->
          <p class="side-menu-title">Main Links</p>
          <!-- /SIDE MENU TITLE -->

          <!-- DROPDOWN -->
          <ul class="dropdown dark hover-effect interactive">
              <!-- DROPDOWN ITEM -->
              <li class="dropdown-item">
                  <a href="index.html">Home</a>
              </li>
              <!-- /DROPDOWN ITEM -->

              <!-- DROPDOWN ITEM -->
              <li class="dropdown-item">
                  <a href="how-to-shop.html">How to Shop</a>
              </li>
              <!-- /DROPDOWN ITEM -->

              <!-- DROPDOWN ITEM -->
              <li class="dropdown-item">
                  <a href="products.html">Products</a>
              </li>
              <!-- /DROPDOWN ITEM -->

              <!-- DROPDOWN ITEM -->
              <li class="dropdown-item">
                  <a href="services.html">Services</a>
              </li>
              <!-- /DROPDOWN ITEM -->

              <!-- DROPDOWN ITEM -->
              <li class="dropdown-item">
                  <a href="shop-gridview-v1.html">Online Goods</a>
              </li>
              <!-- /DROPDOWN ITEM -->

              <!-- DROPDOWN ITEM -->
              <li class="dropdown-item interactive">
                  <a href="#">
                      Features
                      <!-- SVG ARROW -->
                      <svg class="svg-arrow">
                          <use xlink:href="#svg-arrow"></use>
                      </svg>
                      <!-- /SVG ARROW -->
                  </a>

                  <!-- INNER DROPDOWN -->
                  <ul class="inner-dropdown">
                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <p>Emerald Dragon</p>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="index.html">Homepage V1</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="home-v2.html">Homepage V2</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="itemview-versions.html">Item View Versions</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="shop-gridview-v1.html">Shop Grid View V1</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="shop-gridview-v2.html">Shop Grid View V2</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="shop-listview-v1.html">Shop List View V1</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="shop-listview-v2.html">Shop List View V2</a>
                          <!-- PIN -->
                          <span class="pin soft-edged primary">hot</span>
                          <!-- /PIN -->
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="MonCompte.php">Profile Page</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="blog-v1.html">Blog Page V1</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="blog-v2.html">Blog Page V2</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="open-post.html">Open Post</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="forum.html">Forum Board</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="subforum.html">Subforum</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="open-topic.html">Open Topic</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="login-register.html">Login and Register</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="menu-dropdowns.html">Menu and Dropdowns</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <p>Product Pages</p>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="item-v1.html">Item Page V1</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="item-v2.html">Item Page V2</a>
                          <!-- PIN -->
                          <span class="pin soft-edged secondary">new</span>
                          <!-- /PIN -->
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="product-page.html">Product Page</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="auction-page.html">Auction Page</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="service-page.html">Service Page</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="favourites.html">Favourite Products Grid View</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="favourites-listview.html">Favourite Products List View</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="alerts-notifications.html">Alerts &amp; Notifications</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <p>Dashboard</p>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="dashboard-settings.html">Account Settings</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="dashboard-statistics.html">Statistics Page</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="dashboard-statement.html">Sales Statement</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="dashboard-inbox.html">Inbox Page</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="dashboard-openmessage.html">Open Message</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="dashboard-uploaditem.html">Upload Page</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <p>Gamification</p>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="community-badges.html">Author Badges Page</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="badges.html">All Badges (Big and Small)</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="flag-badges.html">Flag Badges (Big and Small)</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="badges-boxes.html">Badge Boxes Versions</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->

                      <!-- INNER DROPDOWN ITEM -->
                      <li class="inner-dropdown-item">
                          <a href="author-badges.html">Public Author Badges</a>
                      </li>
                      <!-- /INNER DROPDOWN ITEM -->
                  </ul>
                  <!-- /INNER DROPDOWN -->
              </li>
              <!-- /DROPDOWN ITEM -->
          </ul>
          <!-- /DROPDOWN -->
      </div>
      <!-- /SIDE MENU -->

      <!-- SIDE MENU -->
      <div id="account-options-menu" class="side-menu right closed">
          <!-- Close Cross -->
          <div class="svg-plus">
              <use xlink:href="#svg-plus"></use>
          </div>
          <!-- /SVG PLUS -->
          <?php
          if (isset($_SESSION['id'])) {
              ?>
              <!-- SIDE MENU HEADER -->
              <div class="side-menu-header">
                  <!-- USER QUICKVIEW -->
                  <div class="user-quickview">
                      <!-- USER AVATAR -->
                      <a href="MonCompte.php">
                          <div class="outer-ring">
                              <div class="inner-ring"></div>
                              <figure class="user-avatar">
                                  <img src="images/avatars/avatar_01.jpg" alt="avatar">
                              </figure>
                          </div>
                      </a>
                      <!-- /USER AVATAR -->

                      <!-- USER INFORMATION -->
                      <p class="user-name"><?= str_split($mbrePrenom, 1)[0] ?>.<?= $mbreNom ?></p>
                      <p class="user-money">(<?= displayMontant($mbreEuros, 3, ' €'); ?>)</p>
                      <!-- /USER INFORMATION -->
                  </div>
                  <!-- /USER QUICKVIEW -->
              </div>
              <!-- /SIDE MENU HEADER -->

              <!-- SIDE MENU TITLE -->
              <p class="side-menu-title">Your Account</p>
              <!-- /SIDE MENU TITLE -->

              <!-- DROPDOWN -->
              <ul class="dropdown dark hover-effect">
                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="dashboard-notifications.html">Notifications</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="dashboard-inbox.html">Messages</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="cart.html">Your Cart</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="favourites.html">Favourites</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->
              </ul>
              <!-- /DROPDOWN -->

              <!-- SIDE MENU TITLE -->
              <p class="side-menu-title">Dashboard</p>
              <!-- /SIDE MENU TITLE -->

              <!-- DROPDOWN -->
              <ul class="dropdown dark hover-effect">
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="MonCompte.php"><i style='margin:0 1vh 0 0'
                                                                       class="icofont-ui-user"></i>
                          Profile</a>
                      <a class="dropdown-item" href="messagerie.php"><i style='margin:0 1vh 0 0'
                                                                        class="glyphicon glyphicon-envelope"></i>
                          Messages <span class="nav-tag messages"
                                         style='background-color:orange;padding:0.5vh;color:white;border-radius:1vh'><?= $totalMissionsAttente; ?></span></a>
                      <a class="dropdown-item" href="chatroom.php"><i style='margin:0 1vh 0 0'
                                                                      class="glyphicon glyphicon-comment"></i>
                          Chatroom </a>
                      <a class="dropdown-item" href="infos.php"><i style='margin:0 1vh 0 0'
                                                                   class="glyphicon glyphicon-usd"></i> Gagner
                          de l'argent</a>
                      <a class="dropdown-item" href="parrainage.php"><i style='margin:0 1vh 0 0'
                                                                        class="glyphicon glyphicon-fullscreen"></i>
                          Parrainage</a>
                      <a class="dropdown-item" href="payement.php"><i style='margin:0 1vh 0 0'
                                                                      class="glyphicon glyphicon-piggy-bank"></i>
                          Payement</a>
                      <a class="dropdown-item" href="mes-commandes.php"><i style='margin:0 1vh 0 0'
                                                                           class="glyphicon glyphicon-folder-open"></i>
                          Mes Commandes</a>
                      <a class="dropdown-item" href="offre_mur.php"><i style='margin:0 1vh 0 0'
                                                                       class="glyphicon glyphicon-piggy-bank"></i>
                          offre mur</a>
                      <a class="dropdown-item" href="emailing.php"><i style='margin:0 1vh 0 0'
                                                                      class="glyphicon glyphicon-piggy-bank"></i>
                          emailing </a>
                      <a class="dropdown-item" href="mes-participations.php"><i style='margin:0 1vh 0 0'
                                                                                class="glyphicon glyphicon-list-alt"></i>
                          Mes Participations</a>
                      <a class="dropdown-item" href="livredor.php"><i style='margin:0 1vh 0 0'
                                                                      class="glyphicon glyphicon-star "></i>
                          livredor</a>
                      <a class="dropdown-item" href="extension.php"><i style='margin:0 1vh 0 0'
                                                                       class="icofont-settings-alt"></i>
                          Extension</a>
                      <div class="dropdown-divider"></div>
                  </div>


                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="MonCompte.php">Mon compte</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="messagerie.html">Messages</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->
                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="chatroom.html">Chatroom</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="infos.html">Gagner
                          de l'argent</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="parrainage.php">Parrainage</a>
                  </li>

                  <!-- /DROPDOWN ITEM --><!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="payement.php">Paiement</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="mes-commandes.php">Mes Commandes</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="offre_mur.php">Offre mur<</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="emailing.php">Emailing</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="mes-participations.php">Mes Participations</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->

                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="livredor.php">Livre d'or</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->
                  <!-- DROPDOWN ITEM -->
                  <li class="dropdown-item">
                      <a href="extension.php">Extension</a>
                  </li>
                  <!-- /DROPDOWN ITEM -->
              </ul>
              <!-- /DROPDOWN -->

              <a href="#" class="button medium secondary">Logout</a>
              <?php
          } else {
              ?>
              <!-- ACCOUNT ACTIONS -->
              <div class="account-actions">
                  <a href="./connexion.php" class="button primary">Connexion</a>
                  <a href="./inscription.php" class="button secondary">Inscription</a>
              </div>
              <!-- /ACCOUNT ACTIONS -->
              <?php
          }
          ?>
          <!--    <a href="#" class="button medium primary">Become a Seller</a>-->
      </div>
      <!-- /SIDE MENU -->

      <!-- MAIN MENU -->
      <div class="main-menu-wrap d-none">
          <div class="menu-bar">
              <nav>
                  <ul class="main-menu">
                      <!-- MENU ITEM -->
                      <li class="menu-item">
                          <a href="./index.php">Accueil</a>
                      </li>
                      <!-- /MENU ITEM -->

                      <!-- MENU ITEM -->
                      <li class="menu-item">
                          <a href="./aide.php">Comment ça marche ?</a>
                      </li>
                      <!-- /MENU ITEM -->

                      <!-- MENU ITEM -->
                      <li class="menu-item">
                          <a href="./extension.php">Extensions</a>
                      </li>
                      <!-- /MENU ITEM -->

                      <!-- MENU ITEM -->
                      <li class="menu-item">
                          <a href="./categorie.php">Tous les marchands</a>
                      </li>
                      <!-- /MENU ITEM -->

                      <!-- MENU ITEM -->
                      <li class="menu-item sub" style="position: relative">
                          <a href="#">
                              Catégories
                              <!-- SVG ARROW -->
                              <svg class="svg-arrow">
                                  <use xlink:href="#svg-arrow"></use>
                              </svg>
                              <!-- /SVG ARROW -->
                          </a>
                          <div class="content-dropdown" style="">
                              
                              <!-- /FEATURE LIST BLOCK -->
                          </div>
                      </li>
                      <!-- /MENU ITEM -->
                  </ul>
              </nav>
              
          </div>
      </div>
      <!-- /MAIN MENU -->

    <div id='menuUsers_notification' class='bg-white shadow border-radius d-none'>
        <h2>Les notifications</h2>
        <div id='res_notification'></div>
    </div>
<?php
  }
?>
