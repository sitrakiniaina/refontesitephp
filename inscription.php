<?php
include('./requiert/new-form/header.php');


if (isset($_SESSION['id'])) {
	?>
	<script>
		window.location='/MonCompte.php';
	</script>
<?php
	exit();
}

	include('./requiert/php-form/login-register.php');

	$captchaCode = code(5);


if(isset($reponsConfirm)){

?>
     <div class="row no-gutters mth-10">
        <div class="login-main-left">
            <div class="text-center p-5">
				<div class='alert alert-success'>
					<?= $reponsConfirm; ?>
				</div>
			</div>
		</div>
    </div>
<?php
} else {
?>
    <div class="section login_container">
        <div class="form-popup form-popup-register form-bloc">
						<div class="bloc-head">
							<div class="form-popup-head">
								<div class="form-popup-head-text">
									<h4 class="popup-title">Inscription</h4>
									<p>Créez un compte gratuitement.</p>
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
            <div class="form-popup-content ">
                <!-- LINE SEPARATOR -->
                <hr class="line-separator d-none">
                <!-- /LINE SEPARATOR -->
                <?php
                if(isset($reponsError)){
                    ?>
                    <div class='alert alert-danger'>
                        <?= $reponsError; ?>
                    </div>
                    <?php
                }
                ?>
                <form id="FormRegister" method="POST">
                    <label for="votreprénomRegister" class="rl-label required">Prénom</label>
                    <input id="votreprénomRegister" type="text" name="prenom" class="form-control" value="<?php echo $post_reg_prenom; ?>" required placeholder="Votre prénom" />
                    <label for="votrenomRegister" class="rl-label required">Nom</label>
                    <input id="votrenomRegister" type="text" name="nom" class="form-control" value="<?php echo $post_reg_nom; ?>" required placeholder="Votre nom" />
                    <label for="votreemailRegister" class="rl-label required">Email</label>
                    <input id="votreemailRegister" type="email" name="email" class="form-control" value="<?php echo $post_reg_email; ?>" required placeholder="Votre email" />
                    <label for="votrepwdRegister" class="rl-label required">Mot de passe</label>
                    <input id="votrepwdRegister" type="password" name="password" class="form-control" style='margin: 1.5vh 0' value="" required placeholder="Votre mot de passe" />
                    <label for="news" class="rl-label required">Souhaitez-vous recevoir la newsletter ?</label>
                    <select id="news" name="news" class="form-control">
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                    </select>
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="remember" name="remember" required>
                    <label for="remember" class="label-check" style="margin-top: 1em">
                        <span class="checkbox primary primary"><span></span></span>
                        J'autorise cashbackreduction à conserver mes données personnelles transmises via ce formulaire. Aucune exploitation commerciale ne sera faite des données conservées.
                    </label>
                    <!-- /CHECKBOX -->

                <div class="g-recaptcha" data-sitekey="6LcsC3EaAAAAAA0W7heBzpUPgKdvpuPNR9xQmGzf"></div>
									<!--                    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>-->
                    <input type="hidden" name="idParrain" value="<?= isset($_SESSION['idParrain']) ? $_SESSION['idParrain'] : ''; ?>" />
                    <button
                            type="submit"
                            id="submit"
                            name="submit_register"
                            value="Inscription"
                            class="button mid dark"
                    >Inscription <i class="las la-user-plus"></i></button>
                </form>

                <!-- LINE SEPARATOR -->
                <hr class="line-separator double">
                <!-- /LINE SEPARATOR -->
                <div class="bloc-btn-social">
                    <div class="g-signin2 btn-social-login" data-width="100" data-onsuccess="onSignIn" data-height="40" data-longtitle="true">
                        <div class="g-signin2 btn-social-login" data-onsuccess="onSignIn"></div>
                    </div>
                    <div
                            class="fb-login-button btn-social-login"
                            onlogin="testAPI();"
                            data-size="large"
                            data-button-type="continue_with"
                            data-layout="default"
                            data-auto-logout-link="false"
                            data-use-continue-as="false"
                            data-width="150"></div>
                </div>
<?php
							if(isset($reponsError)){
							?>
							<div class='alert alert-danger'>
								<?= $reponsError; ?>
							</div>
							<?php
							}
							?>
            </div>
            <!-- /FORM POPUP CONTENT -->
        </div>
				<div class="form-bloc-link">
					<p class="my-2"><a href="./connexion.php" class="primary"><i class="las la-sign-in-alt"></i> Vous avez déjà un compte ?</a></p>
		    </div>
    </div>
    <?php
}
?>
<?php
include('./requiert/new-form/footer.php');
?>
