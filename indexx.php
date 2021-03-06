<?php




include('./requiert/new-form/header.php');

		if (isset($_GET['action']) && $_GET['action'] == 'logout') {
			session_destroy();
			unset($_SESSION['id']);
			unset($_SESSION['email']);
			unset($_SESSION['passe']);
			unset($_COOKIE['id_user']);
			setcookie('id_user','',$_SERVER['REQUEST_TIME'] - 86400*60,'/');
			?>
			<script>
				window.location='connexion.php';
			</script>
			<?php
		}

			include('./requiert/php-form/login-register.php');
			require_once("./administration/cashback/inc/config.inc.php");

?>
<!-- BANNER -->
<div class="banner-wrap">
    <section class="banner">
        <h5>Bienvenue sur</h5>
        <h1><span>Cashbackreduction.com</span></h1>
        <p>Simple et 100% gratuit, Cashbackreduction vous rembourse une partie de vos achats dans + de 1800 boutiques partenaires. C'est ça le cashback !</p>
        <div class="action-container">
            <a href="inscription.php" class="button primary">Je m'inscrit + 3€ Offers </a>
            <a href="aide.php" class="button secondary">Comment ça marche ?</a>
        </div>
    </section>
</div>
<!-- /BANNER -->
<!-- SERVICES -->
<div id="services-wrap">
    <section id="services" style="padding-bottom: 134px;">
        <!-- SERVICE LIST -->
        <h1 style="color: #000; margin-bottom: 2em;">Comment ça marche le Cashback ?</h1>
        <div class="service-list column4-wrap" style="display: flex; justify-content: center">
            <!-- SERVICE ITEM -->
            <div class="service-item column">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-pencil"></span>
                </div>
                <h3>Inscrivez-vous sur My-qassa.com</h3>
                <p>Simple, Rapide et 100% Gratuit</p>
            </div>
            <!-- /SERVICE ITEM -->

            <!-- SERVICE ITEM -->
            <div class="service-item column" style="margin-bottom: 4em">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-bag"></span>
                </div>
                <h3>Sélectionnez votre marchand</h3>
                <p>Puis cliquez sur Activer le Cashback</p>
            </div>
            <!-- /SERVICE ITEM -->

            <!-- SERVICE ITEM -->
            <div class="service-item column" style="margin-bottom: 4em">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-sign-in"></span>
                </div>
                <h3>Vous recevrez alors votre Cashback</h3>
                <p>Une fois que le marchand l'aura validé</p>
            </div>
            <!-- /SERVICE ITEM -->

			<!-- SERVICE ITEM -->
            <div class="service-item column">
                <div class="circle medium gradient"></div>
                <div class="circle white-cover"></div>
                <div class="circle dark">
                    <span class="icon-present"></span>
                </div>
                <h3>Inscrivez-vous sur cashbackreduction.fr</h3>
                <p>Simple, Rapide et 100% Gratuit</p>
            </div>
            <!-- /SERVICE ITEM -->
        </div>
        <!-- /SERVICE LIST -->
        <div class="clearfix"></div>
    </section>
</div>
<!-- /SERVICES -->

<!-- HT BANNER WRAP -->
<div class="ht-banner-wrap">
    <!-- HT BANNER -->
    <div class="ht-banner void blue">
        <figure class="ht-banner-img1" style="display: flex; height: 80%; top: 10%">
            <img src="images/happy.svg" alt="happy animation svg">
        </figure>
    </div>
    <!-- /HT BANNER -->

    <!-- HT BANNER -->
    <div class="ht-banner">
        <!-- HT BANNER CONTENT -->
        <div class="ht-banner-content">
            <p class="text-header">Simplicité et transparence</p>
            <p>cashbackreduction c’est simple, gratuit, et transparent. Le monde de cashbackreduction, c’est un réseau tentaculaire de boutiques partenaires pour un tsunami de bons plans. Ces boutiques nous reversent une commission pour vous proposer les meilleurs remboursements du marché. Des questions ? Ne buvez pas la tasse ! Notre service client s'engage à vous répondre dans les meilleurs délais.</p>
            <a href="#" class="button mid dark">Je <span class="primary"> Suis Intéressé</span></a>
        </div>
        <!-- /HT BANNER CONTENT -->
    </div>
    <!-- /HT BANNER -->
    <!-- HT BANNER -->
    <div class="ht-banner void pink">
        <figure class="ht-banner-img1" style="display: flex; height: 80%; top: 10%">
            <img src="images/paraigne.svg" alt="parainage animation svg">
        </figure>
    </div>
    <!-- /HT BANNER -->

    <!-- HT BANNER -->
    <div class="ht-banner">
        <!-- HT BANNER CONTENT -->
        <div class="ht-banner-content">
            <p class="text-header">Gagnez de l'argent avec le parrainage </p>
            <p>Poulpeo offre 5€ à votre filleul-e à son inscription (au lieu de 3€). Récupérez 10% du montant du cashback de vos filleuls, à vie. Une pêche miraculeuse…</p>
            <a href="aide.php" class="button mid dark">Comment<span class="primary"> Ça Marche ?</span></a>
        </div>
        <!-- /HT BANNER CONTENT -->
    </div>
    <!-- /HT BANNER -->
</div>
<!-- /HT BANNER WRAP -->

<div class="section">
    <div>
        <div style="display: flex; justify-content: space-between">
            <h2 id="title" style="color: #000; margin-bottom: 2em">Boutique de la semaine</h2>
            <div style="display: flex">
                <button id="b" class="button primary" onclick='
					document.getElementById("Code_promo").classList.add("display-none");
					document.getElementById("boutique").classList.remove("display-none");
					document.getElementById("c").classList.add("not-selected");
					document.getElementById("b").classList.remove("not-selected");
					document.getElementById("title").innerHTML="Boutique de la semaine";

				' style="margin-right: 2em">
                    Boutique
                </button>
                <button id="c" class="button primary not-selected"
                        onclick='
					document.getElementById("Code_promo").classList.remove("display-none");
					document.getElementById("boutique").classList.add("display-none");
					document.getElementById("c").classList.remove("not-selected");
					document.getElementById("b").classList.add("not-selected");
					document.getElementById("title").innerHTML="Meilleur Code Promo";
				'
                >
                    Code Promo
                </button>
            </div>
        </div>

        <div id="boutique" >
            <?php
            $tops_query = "SELECT * FROM cashbackengine_retailers WHERE deal_of_week= 1 ORDER BY visits  DESC LIMIT 15";
            $tops_result = smart_mysql_query($tops_query);
            $tops_total = mysqli_num_rows($tops_result);
            ?>

            <?php while ($tops_row = mysqli_fetch_array($tops_result)) { ?>
                <div class='col-6- col-md-3- one-box' data-aos='fade-in'>
                    <div class="border-radius- bg-white- shadow- text-center boutique " onClick="OpenLink('<?= $tops_row['retailer_id']; ?>')">

                        <img src='<?= $tops_row['image']; ?>'/><br/>
												<div class="one-box-btn">
										        <span class="one-box-rate">
															<?php
	                            if ($tops_row['cashback'] != '') {
	                                echo 'Jusqu\'à';
	                            }
	                            ?>
	                            <?php
	                            if ($tops_row['old_cashback'] != '') {
	                                echo '<strike>' . $tops_row['old_cashback'] . '</strike>';
	                            }
	                            ?>
														</span>
										    </div>

												<p class="d-none">
                            <?php
                            if ($tops_row['cashback'] != '') {
                                echo 'Jusqu\'à';
                            }
                            ?>
                            <?php
                            if ($tops_row['old_cashback'] != '') {
                                echo '<strike>' . $tops_row['old_cashback'] . '</strike>';
                            }
                            ?>
                        </p>

                        <h2 class="d-none">
                            <?php
                            if ($tops_row['cashback'] != '') {
                                echo $tops_row['cashback'];
                            }
                            ?>
                        </h2>

                    </div>
                </div>

            <?php } ?>
        </div>

        <div id="Code_promo" class="display-none">
            <?php
            $a = "SELECT * FROM cashbackengine_coupons WHERE exclusive = 1 AND end_date < DATE(NOW()) LIMIT 8 ";
            $b = $pdo->query($a);
            $c = $b->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <?php foreach ($c as $p) :
                $sqlMissions = $pdo->query('SELECT * FROM cashbackengine_retailers WHERE retailer_id = "' . urldecode($p['retailer_id']) . '"');
                $resultatMissions = $sqlMissions->fetch();
                ?>

                <div class='col-6- col-md-3- one-box' data-aos='fade-in'>
                    <div class="border-radius- bg-white- shadow-  text-center boutique ">
                        <a href="<?= $p['link']; ?>" target="_blank">
                            <img src='<?= $resultatMissions['image']; ?>'/><br/>

														<div class="one-box-btn">
																<h4 class="mt-1"><?= htmlspecialchars_decode($p['gains_coupons']) ?></h4>
												        <span class="one-box-rate">
																	<h6 class="text-secondary"><?= htmlspecialchars_decode($p['title']) ?></h6>
																</span>
												    </div>


                        </a>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

    <div class="partner-slider" data-aos='fade-in' style="margin-bottom: 5em">
        <h2 id="title" style="color: #000; margin-bottom: 2em">Boutique partenaire</h2>
        <div class="regular slider" style="margin: 0 !important;">
                <?php
                $req = $pdo->query("SELECT * FROM bannier ORDER BY id DESC ");
                $categories = $req->fetchAll(PDO::FETCH_ASSOC);
                ?>

                <?php foreach ($categories as $categories) : ?>

                    <div style='margin: 2vh'>
                        <img
                                src='<?= $categories['img_src']?>'
                                style='width:100%;height:15vh'/>
                    </div>

                <?php endforeach; ?>
        </div>
    </div>

    <div class="testimonials-slider" style="margin-bottom: 5em">
        <h2 id="title" style="color: #000; margin-bottom: 3em">Les membres nous font confiance</h2>
        <div class="container ">

            <div class="owl-carousel owl-theme owl-carousel-three homepage-coupon-carousel">
                <?php
                $t = "SELECT * FROM livredor WHERE statut=1 ORDER BY  rand() LIMIT 10 ";
                $y = $pdo->query($t);
                $l = $y->fetchAll(PDO::FETCH_OBJ);
                ?>
                <?php foreach ($l as  $p) : ?>
                    <div class="border-radius border-radius h-100 stor-card avis testimonials-item">
                        <img src='./images/apostroph.png'/>
                        <p class="message"><?= $p->message; ?></p>

                        <br/>
                        <b class="userName"><?= $p->nom_user ?> </b>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

    <div class="post-content">
        <!-- POST PARAGRAPH -->
        <div class="post-paragraph" style="margin-bottom: 2em">
            <h3 class="post-title text-left">Obtenez les remboursements les plus élevés des sites de Cashback français !</h3>
            <p>Avec cashbackreduction, vous allez pouvoir gagner de l'argent lors de vos achats en ligne. En vous proposant des taux de cashback aussi élevés, notre mission est de vous apporter du pouvoir d'achat.
                En plus de recevoir un remboursement sur votre commande, vous pouvez obtenir une réduction supplémentaire grâce aux codes promo que nous répertorions pour chaque marchand.
                faites attention à bien lire les conditions du cashback et des codes promo pour chaque marchand.
                Après avoir rejoint cashbackreduction, vous ne dépenserez plus pareil en ligne et vous retournerez sur cashbackreduction avant chacun de vos achats en ligne. Nous faisons au mieux pour augmenter le nombre de marchands proposant du Cashback et de vous proposer des taux de cashback les plus élevés de France.
                En plus des remboursements que vous recevrez sur votre compte, vous cumulez des points à chacun de vos achats qui vous permettent d'augmenter votre statut. Plus vous achetez, plus vous serez récompensé.</p>
        </div>
        <!-- /POST PARAGRAPH -->

        <!-- POST PARAGRAPH -->
        <div class="post-paragraph">
            <h3 class="post-title text-left">Cumulez vos cashback avec nos codes promo</h3>
            <p>cashbackreduction est le seul site de Cashback en France mettant à votre disposition un nombre aussi important de codes promo valides chez + de 2,000 marchands. Ces codes promo comme le Cashback vont vous permettre d'obtenir une réduction immédiate sur tous vos achats.</p>
        </div>
        <!-- /POST PARAGRAPH -->
    </div>
</div>

<?php
	include('./requiert/new-form/footer.php');
?>
