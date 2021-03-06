
<?php 
    include('./requiert/php-form/login-register.php');

    $fetch_data= $pdo->query("SELECT COUNT(*) AS 'remuneration' FROM messagerie_all WHERE id_recive='".$_SESSION['id']."' AND id_response = 0 AND message_lu = 0 ORDER BY id DESC");
     $totalMissionsAttente = $fetch_data->fetch(PDO::FETCH_ASSOC);
    $totalMissionsAttente = $totalMissionsAttente['remuneration'];
 ?>
           
 <?php
    if(!isset($_SESSION['id'])){
?>
    <script>
        window.location='connexion.php';
    </script>
<?php
    }

?>
    <div class='cashback_view'>
    <div class='height-30-wave'>
    </div>
    </div>
    <br/>
      <div class="user-panel-body menu-user-info py-5">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-sm-4">
                  <div class="user-panel-body-left">
                     <div class="bg-white p-4 mb-4 text-center shadow border-radius">
                        <h6 class="text-black mb-3"><?= $mbreNom ?> <?= $mbrePrenom ?></h6>
                        <p class="m-0"> <?= $mbreEmail ?></p>
                        <p class="mb-3"><?= displayMontant($mbreEuros, 3, ' €'); ?> </p>
                        <a href="index.php?action=logout"  class="btn btn-primary btn-block">
                            <i class="icofont-logout"></i>  Deconnexion
                        </a>
                        <p class="mb-0 mt-3"><a   href="profil_edit.php" >Edit Profile</a></p>
                     </div>
                     <div class="user-panel-sidebar-link mb-4 bg-white   shadow border-radius overflow-hidden">
                        <a href="messagerie.php"><i class="glyphicon glyphicon-envelope"></i>  Messages <span class="nav-tag messages" style='background-color:orange;padding:0.5vh;color:white;border-radius:1vh'><?= $totalMissionsAttente ; ?></span></a>
                        <a href="chatroom.php"><i class="glyphicon glyphicon-comment"></i>  Chatroom </a>
                        <a href="infos.php"><i class="glyphicon glyphicon-usd"></i> Gagner de l'argent</a>
                        <a href="parrainage.php"><i class="glyphicon glyphicon-fullscreen"></i> Parrainage</a>
                        <a href="payement.php" ><i class="glyphicon glyphicon-piggy-bank"></i> Payement</a>
                        <a href="offre_mur.php" ><i class="glyphicon glyphicon-piggy-bank"></i> offre mur</a>
                        <a href="emailing.php" ><i class="glyphicon glyphicon-piggy-bank"></i> emailing </a>
                        <a href="mes-commandes.php" ><i class="icofont-food-cart"></i> Mes Commandes</a>
                        <a href="mes-participations.php"><i class="icofont-settings-alt"></i> Mes  Participations</a>
                        <a href="livredor.php"><i class="icofont-settings-alt"></i> livredor</a>
                        <a href="extension.php"><i class="icofont-settings-alt"></i> Extension</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-sm-8">
