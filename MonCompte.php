<?php
    include('./requiert/new-form/header.php');
    include('./requiert/php-form/login-register.php');

    function Color($e){
                                             
        if ($e === 'Validé') {
           echo '<div class="text-success">
                    <span style="font-size:2vh;text-align:center" class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                </div>';
        } else if ($e === 'En attente') {
            echo '<div class="text-default" >
                    <span style="font-size:2vh;text-align:center" class="glyphicon glyphicon-time" aria-hidden="true"></span>
                </div>';
        } else if ($e === 'Refusé') {
            echo '<div class="text-danger">
                    <span style="font-size:2vh;text-align:center" class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                  </div>';
        } else if ($e === 'En cours') {
            echo '<div>
                    <span style="font-size:2vh;text-align:center" class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  </div>';
        }

    }
    $post_reg_mdp = addslashes(htmlentities("123"));

    $totalMissions = $pdo->query("SELECT COUNT(id) AS 'id' FROM offers WHERE actif = 1");
    $totalMissions = $totalMissions->fetch(PDO::FETCH_ASSOC);
    $totalMissions = $totalMissions['id'];
    
    $idUSer= $pdo->query("SELECT * FROM  users WHERE id='".$_SESSION['id']."'");
    $idUSer= $idUSer->fetch(PDO::FETCH_ASSOC);
    $idUSer= $idUSer['hashId'];

    $totalMissionsValide = $pdo->query("SELECT SUM(remuneration) AS 'remuneration' FROM histo_offers WHERE idUser = '".$mbreHashId."' AND etat = 'Valid&eacute;'");
    $totalMissionsValide = $totalMissionsValide->fetch(PDO::FETCH_ASSOC);
    $totalMissionsValide = $totalMissionsValide['remuneration'];
 
    $totalMissionsAttente = $pdo->query("SELECT SUM(remuneration) AS 'remuneration' FROM histo_offers WHERE idUser = '".$mbreHashId."' AND etat = 'En attente'");
    $totalMissionsAttente = $totalMissionsAttente->fetch(PDO::FETCH_ASSOC);
    $totalMissionsAttente = $totalMissionsAttente['remuneration'];


    $attente = $totalcashback + $totalMissionsAttente;
    $Valide = $totalcashbackValide + $totalMissionsValide;

 
include('./MenuUsersInfo.php');
?>
    <div class="container">
            <div class="row">
                <div class="bg-white p-5 shadow border-radius" style='width:100%'>
                   
                    <div class='Mom_compte_content_io p-5'>
                    
                        <div class='row'>
                            <div class='col-md-8'>
                                <h2 style='font-family:calibri;font-weight: 300' >Solde sur votre compte</h2>
                                <p>Des 10 € de gains ,vous pourrez demander un payement </p>
                            </div>
                            <div class='col-md-4'>
                                <h1 style='font-family:arial;font-weight: 900;margin:1vh 0;color:green;font-size:3vh;text-align:center'>
                                    <?= displayMontant($mbreEuros, 2, ' €'); ?>
                                </h1>
                                <a  class='btn btn-info' href='payement.php'>Demander un payement</a>
                            </div>
                        </div>
                    </div>
                    <br/>
                        <div class='row'>
                            <div class='col-md-6'>
                                <ul class="list-group">
                                <li class="list-group-item">
                                    <div style='float:left;width:20%'>
                                        <span class="glyphicon glyphicon-ok-sign text-success" style='font-size:3vh'  aria-hidden="true"></span>
                                    </div>
                                    <div style='float:left;width:55%'>
                                    Gains validé
                                    </div>
                                    <div style='float:left;width:20%'>
                                    <?= displayMontant($Valide, 2, ' €'); ?>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div style='float:left;width:20%'>
                                        <span class="glyphicon glyphicon-time text-warning" style='font-size:3vh'  aria-hidden="true"></span>
                                    </div>
                                    <div style='float:left;width:55%'>
                                    Gains en attente
                                    </div>
                                    <div style='float:left;width:20%'>
                                    <?= displayMontant($attente, 2, ' €'); ?>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            <div class='col-md-6'>
                                    <p style='text-align:center;width:80%;margin:0 auto'>
                                        Cummul de vos gains validés depuis le 
                                        <?= $date_Inscription; ?><br/>
                                    </p>
                                    <h1 style='text-align:center'><?= displayMontant($Valide, 2, ' €'); ?></h1>

                            </div>
                        </div>

                    </div>
                </div>
               </div>
               <br/>

               <div class="row">
               <div class="col-md-12 mt-4 mb-4">
                  <div class="page-title-h5 d-flex align-items-center">
                     <h5 class="my-0">

                     
                    <?php

                        if(!isset($_GET['p']) || $_GET['p'] == 'gains'){
                            echo 'Mes gains';
                        }else{
                            echo 'Mes Activites shopping';
                        }
                    ?>
                     </h5>
                        <div class="dropdown ml-auto">
                                <select style='width:20vh' id='redirect' onchange='window.location=document.getElementById("redirect").value'>
                                    <option <?php if(isset($_GET['p']) && $_GET['p'] == 'gains' ) echo 'selected' ?> value="MonCompte.php?p=gains">gains</option>
                                    <option <?php if(isset($_GET['p']) && $_GET['p'] == 'cashback' ) echo 'selected' ?> value="MonCompte.php?p=cashback">cashback</option>
                                </select>
                        </div>
                  </div>
<br/>
<div class="bg-white border-radius p-4 shadow" >

    <?php
                        if(!isset($_GET['p']) || $_GET['p'] == 'gains'){
             
                                        $sql = "SELECT * FROM histo_offers WHERE idUser='".$idUSer."' AND etat != 'En cours'  ORDER BY dateUsTime DESC  ";
                                        $req = $pdo->query($sql);
                                        $total = $req->fetchAll(PDO::FETCH_ASSOC);
                                      
                                    ?>
                                            <div class=' '>

                                                <div style='display:inline-table;width:30%'>
                                                    DATE
                                                </div>
                                                <div style='display:inline-table;width:40%'>
                                                    NOM
                                                </div>
                                                
                                                <div style='display:inline-table;width:15%'>
                                                    GAIN
                                                </div>

                                                <div style='display:inline-table'>
                                                    ETAT
                                                </div>

                                            </div>  

                                            <ul class="list-group">                    
                                    <?php foreach ($total as  $categories) : ?> 
                                        <li class="list-group-item">

                                            <div style='display:inline-table;width:30%'>
                                                <?=  $categories['date']; ?>
                                            </div>

                                            <div style='display:inline-table;width:40%'>
                                                <b style='color:green'><?= $categories['idt'] ?></b>
                                            </div>

                                            <div style='display:inline-table;width:17%'>
                                                <?=  displayMontant($categories['remuneration'],2, ' €') ?>
                                            </div>

                                            <div style='display:inline-table'>
                                                <center>
                                                
                                                    <?= Color(html_entity_decode($categories['etat'])) ?>
                                                </center>
                                            </div>

                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                    <?php
                                    }else if(isset($_GET['p']) && $_GET['p'] == 'cashback' ){
                                    ?>
      <?php
                                            $sql = "SELECT * FROM cashbackengine_cashabck WHERE histo_retailler_id_user='".$_SESSION['id']."' ORDER BY id DESC  ";
                                            $req = $pdo->query($sql);
                                            $total = $req->fetchAll(PDO::FETCH_ASSOC);

                                         
                                        ?>
<div style='display:inline-table;width:30%'>
    DATE
</div>
<div style='display:inline-table;width:40%'>
    NOM
</div>

<div style='display:inline-table;width:15%'>
    GAIN
</div>

<div style='display:inline-table'>
    ETAT
</div>

<ul class="list-group">
<?php foreach ($total as  $categories) : 

$io_p = $categories['histo_retailler_id'];
$did = $pdo->query("SELECT * FROM cashbackengine_retailers WHERE retailer_id = '".$io_p."'");
$dones_idi = $did->fetch(PDO::FETCH_ASSOC);
                                
?> 
<li class="list-group-item">
    <div style='display:inline-table;width:30%'>
        <?=  $categories['date_time']; ?>
    </div>
     
    <div style='display:inline-table;width:40%'>
        <a href='<?= url_site ?>/storeView.php?id=<?= $categories['histo_retailler_id'] ?>'>
            <b style='color:green'><?= $dones_idi['title'] ?></b>
        </a>
    </div>

    <div style='display:inline-table;width:17%'>
       <b> <?=  $categories['gains'].' €'; ?></b>
    </div>

    <div style='display:inline-table'>
        <center>
            <?= Color(html_entity_decode($categories['etat'])) ?>
        </center>
        </div>
        </li>                

<?php endforeach; ?>
</ul>
                                    <?php
                                    }
                                    ?>
                                    </div>
                     
                                    </div>
                                    </div>
                                    </div>
                                    
</div>
                                    </div>
                                    </div>
<?php 
    include('./requiert/new-form/footer.php');
?>
