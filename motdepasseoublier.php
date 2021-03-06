<?php
include('./requiert/new-form/header.php');

if(isset($_SESSION['id'])){

	if(isset($_SESSION['cashaback_redirect'])){
		header("Location:cashbackView.php?name=".$_SESSION['cashaback_redirect']);
		unset($_SESSION['cashaback_redirect']);
	}else{
		header("Location: accueil.php");
	}

    exit();
}


$meta_title = 'cashbackreduction.com : Connexion';
	$meta_description = '';

	include('./requiert/php-form/login-register.php');

	$captchaCode = code(5);

?>
<div class="section login_container">
    <div class="form-popup form-popup-register">
				<div class="bloc-head">
					<div class="form-popup-head">
						<div class="form-popup-head-text">
							<h4 class="popup-title">Renitialiser votre mot de passe</h4>
						</div>
						<div class="form-popup-head-img">
							<img src="https://earnator.com/images/work-image.png" alt="">
						</div>
					</div>
					<div class="btn-bloc-float">
						<div class="btn-bloc-float-content">
							<a href="index.php" class="btn-float"><i class="las la-home"></i></a>
						</div>
					</div>
				</div>
        <!-- FORM POPUP CONTENT -->
        <div class="form-popup-content">
            <!-- LINE SEPARATOR -->
            <hr class="line-separator d-none">
            <!-- /LINE SEPARATOR -->
            <form id="login-form">
                <label for="email" class="rl-label required">Email</label>
                <input type="email" id="email" name="email"
                       value="<?= $post_reg_email; ?>" placeholder="Entrez votre adresse e-mail"
                       class="form-control" />

                <div class="g-recaptcha" data-sitekey="6LepPswZAAAAAM6WyMEpon_N-ozGq0BY0y7PrX_d"></div>
                <input type="hidden" id="captcha" name="captcha" placeholder="Entrez ici le Captcha" required="required" class="input-md m-b-10 b-r-5"/>

                <button class="button mid dark" name="submit_reset_mdp"  type="submit" id="submit" >Renitialiser mon mot de passe</button>
                <input type="hidden" name="captchaVerif"  value="<?= $captchaCode; ?>"/>
            </form>
        </div>
    </div>

		<div class="form-bloc-link">

      <p class="my-2">
          <a class="primary" href="inscription.php"><i class="las la-sign-in-alt"></i> Connectez-vous à votre compte</a>
      </p>
    </div>
</div>

<?php
	include('./requiert/new-form/footer.php');
?>
