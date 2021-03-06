<?php

include './requiert/new-form/header.php';
include './requiert/php-form/login-register.php';


$meta_title = 'cashbackreduction.com : Connexion';
$meta_description = '';
$captchaCode = code(5);

if (isset($_SESSION ['id'])) {
    ?>
    <script>
        window.location = '/MonCompte.php';
		
    </script>
    <?php
    exit();
}


?>

<div class="section login_container ">
    <div class="form-popup form-popup-register form-bloc">
        <div class="bloc-head">
          <div class="form-popup-head">
            <div class="form-popup-head-text">
              <h4 class="popup-title">Connexion</h4>
              <p>Connectez-vous à votre compte</p>
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
            if (isset($reponsError)) {
                ?>
                <div class='alert alert-danger'>
                    <?= $reponsError; ?>
                </div>
                <?php
            }
            ?>
            <form id="login-form" method="POST">
                <label for="email" class="rl-label required">Email</label>
                <input type="email"
                       id="email"
                       name="email"
                       value="<?= $post_reg_email; ?>"
                       placeholder="Entrez votre adresse e-mail"
                       class="form-control"
                />
                <label for="mdp" class="rl-label required">Mot de passe</label>
                <input
                        type="password"
                        id="mdp"
                        name="mdp"
                        value=""
                        placeholder="Entrez votre mot de passe"
                        class="form-control"
                />
                <div class="bloc-pwd-lost">
                  <p class="my-2">
                      <a class="primary" href='./motdepasseoublier.php '>Mot de passe oublié ?</a>
                  </p>
                </div>
                <div class="g-recaptcha" data-sitekey="6LcYSToaAAAAANu_R53xO9epDkv5f7fBDY78W1hz"></div>
                <!--                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>-->
                <button
                        type="submit"
                        id="submit"
                        name="submit_login"
                        value=""
                        class="button mid dark "
                >Je me connecte <i class="las la-sign-in-alt"></i></button>

            </form>
            <!-- LINE SEPARATOR -->
            <hr class="line-separator double">
            <!-- /LINE SEPARATOR -->
            <div class="bloc-btn-social">
                <div class="g-signin2 btn-social-login" data-width="100" data-onsuccess="onSignIn" data-height="40"
                     data-longtitle="true">
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
                      data-width="150">
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
        </div>
        <!-- /FORM POPUP CONTENT -->
    </div>
    <div class="form-bloc-link">

      <p class="my-2">
          <a class="primary" href="inscription.php"><i class="las la-user-plus"></i> Vous n'avez pas de compte ?</a>
      </p>
    </div>
</div>

<?php
include './requiert/new-form/footer.php' ;
?>
