<?php
session_start();

if (date_default_timezone_set('Europe/Stockholm') == 0) {
	print "<!-- Error uknown timezone using UTC as default -->\n";
	date_default_timezone_set('UTC');
}

include './requiert/bddConnect.php';
  
function code($longueur) {
	$chaine_code = '';
	$chaine = "123456789AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn";
	for ($i = 0; $i < $longueur; $i++) {
		$chaine_code .= substr($chaine, (rand() % (strlen($chaine))), 1);
	}
	return $chaine_code;
}

function number($longueur) {
	$chaine_codeNumber = '';
	$chaine_Number = "0123456789";
	for ($i = 0; $i < $longueur; $i++) {
		$chaine_codeNumber .= substr($chaine_Number, (rand() % (strlen($chaine_Number))), 1);
	}
	return $chaine_codeNumber;
}

function displayMontant($montant, $chiffres_apres_virgule = 2, $symbole = "?") {
	return number_format($montant, $chiffres_apres_virgule, ',', ' ') . "" . $symbole;
}

function addLogEvent($event) {
	$event = $event . "\n";

	file_put_contents("session.log", $event, FILE_APPEND);
}

if (isset($_SESSION['adminid'])) {
	addLogEvent($_SESSION['adminid']);
	$sql = $pdo->query("SELECT * FROM users WHERE id = '" . $_SESSION['adminid'] . "'");
	$resultat = $sql->fetch(PDO::FETCH_ASSOC);
	$mbreId = addslashes(htmlentities($resultat['id']));
	$mbreEmail = addslashes(htmlentities($resultat['email']));
	$mbreMdp = addslashes(htmlentities($resultat['mdp']));
	$mbreNom = addslashes(html_entity_decode($resultat['nom']));
	$mbrePrenom = addslashes(html_entity_decode($resultat['prenom']));
	$mbreAdresse = addslashes(html_entity_decode($resultat['adresse']));
	$mbreVille = addslashes(html_entity_decode($resultat['ville']));
	$mbreCodePostal = addslashes(htmlentities($resultat['codePostal']));
	$mbrePays = addslashes(html_entity_decode($resultat['pays']));
	$mbreLevel = htmlentities($resultat['level']);
} 
  
	$meta_title = 'cashbackreduction.com : Connexion';
	$meta_description = '';
	include('./requiert/new-inc-head.php');
	include('./requiert/php-form/admin-register.php');
  $captchaCode = code(5);
  
?>
  
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Pannel admin</h1>
                  </div>
                  <?php
                    if(isset($reponsError)){
                  ?>
                      <div class='alert alert-danger'><?= $reponsError ?></div>
                  <?php
                    }else if(isset($reponsConfirm)){
                  ?>
                      <div class='alert alert-success'><?= $reponsConfirm ?></div>
                  <?php
                    }
                  ?>
                  <form  method="POST" class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user"  
                      id="email" name="email"
                      aria-describedby="emailHelp" 
                      placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  
                      id="mdp" name="mdp" value="" 
                      placeholder="Entrez votre mot de passe"  
                      placeholder="Password">
                    </div>
                    <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LfrY2kaAAAAAKSLeD85hMW7ozZtWp6tt6iyCTj1"></div>
                    <!--
                      <div class="g-recaptcha" data-sitekey="6LepPswZAAAAAM6WyMEpon_N-ozGq0BY0y7PrX_d"></div>
                    -->
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" id="submit_login" name='submit_login' aria-describedby="emailHelp" value="Se connecter">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
	include('./requiert/new-inc-footer.php');
?>