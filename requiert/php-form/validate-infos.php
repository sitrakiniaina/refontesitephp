<?php

if (!empty($_POST['name'])): $name = ucfirst(addslashes(htmlentities($_POST['name'])));

else: $name = null;

endif;

if (!empty($_POST['first_name'])): $first_name = ucfirst(addslashes(htmlentities($_POST['first_name'])));

else: $first_name = null;

endif;

if (!empty($_POST['postal'])): $postal = addslashes(htmlentities($_POST['postal']));

else: $postal = null; 

endif;

if (!empty($_POST['email'])): $email = addslashes(htmlentities($_POST['email']));

else: $email = null;

endif;

if (!empty($_POST['sexe'])): $sexe = addslashes(htmlentities($_POST['sexe']));

else: $sexe = null;

endif;

$confirm = "";

$idUser = $_SESSION['id'];

$ip = $_SERVER['REMOTE_ADDR'];

if(!empty($_POST['submit_infos'])){

    if(
            
        !empty($_POST['first_name']) && 
        !empty($_POST['name']) && 
        !empty($_POST['birth']) && 
        !empty($_POST['postal']) && 
        !empty($_POST['email']) && 
        !empty($_POST['sexe']) && 
        !empty($_POST["g-recaptcha-response"])) 
    
    {

			if(preg_match('!^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$!', $email)){

                if(preg_match('#^[0-9]+$#', $postal)){
                 
                            $stmt = $pdo->query("SELECT COUNT(id) as 'total' FROM users_infos WHERE email = '" . $email . "'");

                            $res = $stmt->fetch(PDO::FETCH_ASSOC);

                            if($res != 0){

                                $datas = [
                                    $idUser,
                                    $sexe,
                                    $name,
                                    $first_name,
                                    $postal,
                                    $email,
                                    $ip
                                ];

                                $sql = "INSERT INTO 
                                            users_infos 
                                            (
                                                    iduser, 
                                                    sexe, 
                                                    name, 
                                                    first_name, 
                                                    postal, 
                                                    email, 
                                                    ip
                                            ) 
                                            VALUES 
                                            (
                                                    $idUser, 
                                                    '".$sexe."',
                                                    '".$name."', 
                                                    '".$first_name."', 
                                                    '".$postal."', 
                                                    '".$email."', 
                                                    '".$ip."'
                                            )
                                      ";

                                $req = $pdo->exec($sql);

                                if($req){

                                    $_SESSION['email_offre'] = $datas['email'];

                                    $_SESSION['ip'] = $datas['ip'];

                                    $confirm = 'Vous pouvez maintenant acceder aux offres';

                                    $button = '"Fermer"';

                                    $redirection = url_site . 'mission.php';

                                }

                        

                        }else{

                            $error = ' L\'email  entrée est deja utilisé . ';
                            $button = ' "Fermer" ';

                        }

                }else{

                    $error = 'Le code postal entrée est incorrecte.';

                    $button = '"Fermer"';

                }

			}else{

				$error = 'L\'adresse e-mail entrée est incorrecte.';

                $button = '"Fermer"';

            }
            
	}else{

		$error = 'Tout les champs sont requis pour votre inscription.';

        $button = '"Fermer"';
	}

}

if (isset($confirm)) {

?>

    <script type="text/javascript">

        swal({

        text: "<?= $confirm; ?>",

                button: <?= $button; ?>,

                icon: "success",

                closeOnClickOutside: false,

                closeOnEsc: false,

        })<?php if (isset($redirection)) { ?>,

            setTimeout("window.location='<?= $redirection; ?>'", 3000);<?php } ?>

    </script>

    <?php

}

if (isset($reponsBanni)) {

    ?>

    <script type="text/javascript">

        swal({

        text: "<?= $reponsBanni; ?>",

                button: <?= $button; ?>,

                icon: "warning",

                closeOnClickOutside: false,

                closeOnEsc: false,

        })<?php if (isset($redirectionLogin)) { ?>,

            setTimeout("window.location='<?= $redirectionLogin; ?>'", 3000);<?php } ?>

    </script>

    <?php

}

if (isset($error)) {

    ?>

    <script type="text/javascript">

        swal({

            text: "<?= $error; ?>",

            button: <?= $button; ?>,

            icon: "error",

            closeOnClickOutside: false,

            closeOnEsc: false,

        });

        <?php if (isset($redirection)) { ?>,

            setTimeout("window.location='<?= $redirection; ?>'", 3000);

        <?php } ?>

    </script>

    <?php

}



?>