<?php
error_reporting(E_ALL);
ini_set('display_error', 1);

include('./requiert/new-form/header.php');
include './requiert/php-form/login-register.php' ;


if (!isset($_SESSION['id'])) {

?>

<div id="carousel-home" class="carousel slide carousel-fade carousel-home mth-10" data-ride="carousel">
  <ol class="carousel-indicators d-none">
		<?php
			 $req = $pdo->query("SELECT * FROM bannier ORDER BY id DESC ");
			 $categories = $req->fetchAll(PDO::FETCH_ASSOC);
			 $ind = 0;
			foreach ($categories as $categories) :
		?>
    <li data-target="#carousel-home" class="<?php if(!$ind){echo "active";}?>" data-slide-to="<?=$ind++?>" ></li>
		<?php
			endforeach;
		?>
  </ol>

  <div class="carousel-inner container">
		<?php
			$ind = 0;
		 	foreach ($categories as $categories) :
		?>
			<div class="carousel-item <?php if(!$ind++){echo "active";}?>">
	      <div class="carousel-caption d-none d-md-block">
	        <h1 class="carousel-h mb-5">Bienvenue sur <span class="carousel-super-title">Cashbackreduction.com</span></h1>
	        <p class="carousel-p mb-5 mt-3">Simple et 100% gratuit, Cashbackreduction vous rembourse une partie de vos achats dans + de 1800 boutiques partenaires. C'est ça le cashback !</p>
					<div class="action-container mt-4">
	            <a href="inscription.php" class="button "><i class="las la-user-plus"> </i> Je m'inscrit + 3€ Offers </a>
	            <a href="aide.php" class="button "><i class="las la-info-circle"> </i> Comment ça marche ?</a>
	        </div>
				</div>
				<div class="carousel-img">
					<img src="http://my-qassa.com/images/working-on-business-project.png" data="<?= $categories['img_src']?>" class="d-block" style="" alt="...">
				</div>
	    </div>
		<?php
			endforeach;
		?>

  </div>

  
</div>



 
 <div id="services-wrap" >
		 <section id="services" class="container px-4" >
				 
				 <h2 class="section-title">Comment ça marche le Cashback ?</h2>
				 <div class="service-list column2-wrap row" >
						 
						 <div class="service-item column col-6 col-xs-12">
							 	<div class="service-ico">
							 		<i class="las la-pencil-alt"></i>
							 	</div>

								 <h3 class="section-item-title">Inscrivez-vous sur My-qassa.com</h3>
								 <p class="section-itemp-text">Simple, Rapide et 100% Gratuit</p>
						 </div>
						 

						 
						 <div class="service-item column col-6 col-xs-12">
							 <div class="service-ico">
								 <i class="las la-shopping-bag"></i>
							 </div>

							 	<h3 class="section-item-title">Sélectionnez votre marchand</h3>
								 <p class="section-itemp-text">Puis cliquez sur Activer le Cashback</p>
						 </div>
					

						 
						 <div class="service-item column col-6 col-xs-12">
							 <div class="service-ico">
								 <i class="las la-sign-in-alt"></i>
							 </div>


								 <h3 class="section-item-title">Vous recevrez alors votre Cashback</h3>
								 <p class="section-itemp-text">Une fois que le marchand l'aura validé</p>
						 </div>
						

			 
						 <div class="service-item column col-6 col-xs-12">
							 <div class="service-ico">
									<i class="las la-gift"></i>
							 </div>

								 <h3 class="section-item-title">Inscrivez-vous sur cashbackreduction.fr</h3>
								 <p class="section-itemp-text">Simple, Rapide et 100% Gratuit</p>
						 </div>
						 
				 </div>
				 
				 <div class="clearfix"></div>
		 </section>
 </div>
 



  
  <div  class="one-section-wrap" >
 		 <section  class="container one-section-container px-4" >
 				 
 				 <h2 class="section-title">Prix disponibles</h2>
				 <p class="section-p">Some of the available prizes, register to see more</p>
 				 <div class="service-list column2-wrap row to-slick" >

					 
					 <div class="one-element">
						 <div class="one-element-container">
							<div class="one-element-content">
								<span class="one-element-img-content">
									<img src="http://my-qassa.com/images/prizes/avcJy7qxPE2prlcF3L5Xt8YlO02JT8KKPW7oFnmP.png" alt="" class="one-element-img">
								</span>
								<span class="one-element-span py-4 px-4">
									<span class="one-element-span-text">Call of Duty</span>
								</span>
							</div>
						 </div>
					 </div>
					

					
					<div class="one-element">
						<div class="one-element-container">
						 <div class="one-element-content">
							 <span class="one-element-img-content">
								 <img src="http://my-qassa.com/images/prizes/8lqVliq80sMXCYcBnweVPZkj3GhaVII5sBnjIbuo.png" alt="" class="one-element-img">
							 </span>
							 <span class="one-element-span py-4 px-4">
								 <span class="one-element-span-text">Call of Duty</span>
							 </span>
						 </div>
						</div>
					</div>
					

					 
					 <div class="one-element">
						 <div class="one-element-container">
							<div class="one-element-content">
								<span class="one-element-img-content">
									<img src="http://my-qassa.com/images/prizes/25HcoJCJNIatmvVtt013scaVDFXsNlN8PhdeVjZ0.png" alt="" class="one-element-img">
								</span>
								<span class="one-element-span py-4 px-4">
									<span class="one-element-span-text">Call of Duty</span>
								</span>
							</div>
						 </div>
					 </div>
					 

					 
					 <div class="one-element">
						 <div class="one-element-container">
							<div class="one-element-content">
								<span class="one-element-img-content">
									<img src="http://my-qassa.com/images/prizes/yttL9yrJ7yWUH4Cd93j6gDartXQ0wVxJBnC5ayZx.png" alt="" class="one-element-img">
								</span>
								<span class="one-element-span py-4 px-4">
									<span class="one-element-span-text">Call of Duty</span>
								</span>
							</div>
						 </div>
					 </div>
					 

					 
					 <div class="one-element">
						 <div class="one-element-container">
							<div class="one-element-content">
								<span class="one-element-img-content">
									<img src="http://my-qassa.com/images/prizes/8lqVliq80sMXCYcBnweVPZkj3GhaVII5sBnjIbuo.png" alt="" class="one-element-img">
								</span>
								<span class="one-element-span py-4 px-4">
									<span class="one-element-span-text">Call of Duty</span>
								</span>
							</div>
						 </div>
					 </div>
					 

					 
					 <div class="one-element">
						 <div class="one-element-container">
							<div class="one-element-content">
								<span class="one-element-img-content">
									<img src="http://my-qassa.com/images/prizes/8lqVliq80sMXCYcBnweVPZkj3GhaVII5sBnjIbuo.png" alt="" class="one-element-img">
								</span>
								<span class="one-element-span py-4 px-4">
									<span class="one-element-span-text">Call of Duty</span>
								</span>
							</div>
						 </div>
					 </div>
					 






 				 </div>
 				 
 				 <div class="clearfix"></div>
 		 </section>
  </div>
  



	
	<div class="ht-banner-wrap offers-list d-none">
	    
	    <div class="ht-banner void blue">
	        <figure class="ht-banner-img1" style="">
	            <img src="images/happy.svg" alt="happy animation svg">
	        </figure>
	    </div>
	    

	    
	    <div class="ht-banner">
	        
	        <div class="ht-banner-content">
	            <p class="text-header">Simplicité et transparence</p>
	            <p>cashbackreduction c’est simple, gratuit, et transparent. Le monde de cashbackreduction, c’est un réseau tentaculaire de boutiques partenaires pour un tsunami de bons plans. Ces boutiques nous reversent une commission pour vous proposer les meilleurs remboursements du marché. Des questions ? Ne buvez pas la tasse ! Notre service client s'engage à vous répondre dans les meilleurs délais.</p>
	            <a href="#" class="button mid dark">Je Suis Intéressé</a>
	        </div>
	        
	    </div>
	    
	    
	    <div class="ht-banner void pink">
	        <figure class="ht-banner-img1" style="">
	            <img src="images/paraigne.svg" alt="parainage animation svg">
	        </figure>
	    </div>
	    

	    
	    <div class="ht-banner">
	       
	        <div class="ht-banner-content">
	            <p class="text-header">Gagnez de l'argent avec le parrainage </p>
	            <p>Poulpeo offre 5€ à votre filleul-e à son inscription (au lieu de 3€). Récupérez 10% du montant du cashback de vos filleuls, à vie. Une pêche miraculeuse…</p>
	            <a href="aide.php" class="button mid dark">Comment Ça Marche ?</a>
	        </div>
	        
	    </div>
	    
	</div>
	


  <?php
    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['passe']);
        ?>
        <script type="text/javascript">
            swal({
                text: "Déconnexion en cours, veuillez patienter...",
                button: false,
                icon: "success",
                closeOnClickOutside: false,
                closeOnEsc: false,
            })
            setTimeout("window.location='<?= url_site; ?>'", 3000);
        </script>
        <?php
    }
}
?>
<script src="javascript/js/home-v2.js"></script>


<?php
	include './requiert/new-form/footer.php';
?>
