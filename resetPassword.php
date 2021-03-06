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

	include './requiert/php-form/login-register.php';

	$captchaCode = code(5);


?>

 <section class="login-main-wrapper">
   <div class="container-fluid pl-0 pr-0">
    <div class="row no-gutters">
     <div class="col-md-12 p-5 bg-white full-height vertical-center">
      <div class="login-main-left">
       <div class="text-center mb-5 login-main-left-header pt-0 mr-0">
                      <img src="image/logo.svg" class="img-fluid w-40" alt="LOGO">
        <h1 class="title-page"> Renitialise votre mot de passe</h1>

				<div class="login_regsiter" >
					<div id="status"> </div>
					<form method="POST" class="f-s-13 f-w-light">
            <input type="password" id="mdp1" 	name="mdp1" value="" placeholder="Entrez votre mot de passe" class="form-control" style='margin:1vh 0' />
            <input type="password" id="mdp2" name="mdp2" value="" placeholder="comfirme votre mot de passe" class="form-control" style='margin:1vh 0' />
            <input type="hidden" id="token" name="token_use" value="<?php $_GET['token'] ?>" />
						<div class="g-recaptcha" data-sitekey="6LepPswZAAAAAM6WyMEpon_N-ozGq0BY0y7PrX_d"></div>
							<div class="txt-align-center">
								<input
								type="submit"
								id="submit"
								name="submit_reset_pass"
								style='width:100%'
								value="Je me connecte"
								class="btn btn-primary">
							</div>
						</form>
				</div>
			</div>
		</div>

</section>

<?php
	include('./requiert/new-form/footer.php');
?>
