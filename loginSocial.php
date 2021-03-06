<?php

include('./requiert/bddConnect.php');
include('./requiert/php-global.php');
    
// Début : Inscription
if (!empty($_POST['nom'])): $post_reg_nom = ucfirst(addslashes(htmlentities($_POST['nom'])));
else: $post_reg_nom = null;
endif;
if (!empty($_POST['prenom'])): $post_reg_prenom = ucfirst(addslashes(htmlentities($_POST['prenom'])));
else: $post_reg_prenom = null;
endif;
if (!empty($_POST['email'])): $post_reg_email = strtolower(addslashes(htmlentities($_POST['email'])));
else: $post_reg_email = null;
endif;
if (!empty($_POST['idParrain'])): $post_idParrain = addslashes(htmlentities($_POST['idParrain']));
else: $post_idParrain = null; 
endif;

    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"])) {

       if (filter_var($post_reg_email, FILTER_VALIDATE_EMAIL)) {

           $verification = $pdo->query("SELECT * FROM users WHERE email = '" . $post_reg_email . "'");

           if ($verification->rowCount() === 0) {
                   $pdo->exec("INSERT INTO `users` (
                   `id`, 
                   `hashId`,
                   `email`,
                   `mdp`,
                   `nom`,
                   `prenom`,
                   `pays`,
                   `ip`,
                   `actif`,
                   `idParrain`,
                   `news`
                   ) 
                   VALUES 
                   ('',
                    '" . code(25) . "',
                    '" . $post_reg_email . "',
                    '" . sha1(md5($post_reg_email)) . "',
                    '" . $post_reg_nom . "',
                    '" . $post_reg_prenom . "',
                    '" . $country_code . "',
                    '" . ip . "',
                    '1'
                    '".$post_idParrain."',
                    '1'
                  )");

               echo $pdo->lastInsertId() ;

           }else{

                $a= $verification->fetch(PDO::FETCH_OBJ);
                echo  $a->id;
                
           }
            
       }else{

           echo "invalid mail";
            
       }

    } 
?>