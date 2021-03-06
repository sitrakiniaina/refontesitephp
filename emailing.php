<?php

include('./requiert/new-form/header.php');

$meta_title = 'cashbackreduction.com : Les missions';
$meta_description = '';

$boutiqueByPage=20;
$boutiquetotalReq=$e = $pdo->query("SELECT * FROM e_offers");
$boutiquetotal =  $boutiquetotalReq->rowCount();

if(isset($_GET['page']) && !empty($_GET['page'])){
    $_GET['page'] = intval($_GET['page']);
    $pageCourante = $_GET['page'];
}else{
    $pageCourante =1;
}

$depart = ($pageCourante-1)*$boutiqueByPage;

if (!isset($_SESSION['id'])) {
    ?>
    <script>
        window.location='/connexion.php';
    </script>
<?php
    exit();
}

$sql = "SELECT id,email,ip FROM users_infos WHERE idUser = {$_SESSION['id']} AND email = '{$_SESSION['email_offre']}'";
// $datas = ['idUser' => $_SESSION['id']];
$req = $pdo->query($sql);
$result = $req->fetch(PDO::FETCH_ASSOC);  

$a = $pdo->query("SELECT * FROM 
histo_offers 
WHERE 
idUser='".$mbreHashId."' AND
offerwall = 'Mission' AND
etat='Valid&eacute;'
");


$b = $pdo->query("SELECT * FROM 
histo_offers 
WHERE 
idUser='".$mbreHashId."' AND
offerwall = 'Mission' AND
etat='Refus&eacute;'
");

$p = $a->fetchAll();
$c = $b->fetchAll();

 $Limit = ceil(count($p) / 4) - ceil(count($c) / 4) + 4;

 if($Limit <= 0){
    $Limit=1;
 } 
 $details = json_decode(file_get_contents("http://ipinfo.io/".ip.""));
 $country = $details->country;

 if(isset($_GET['s'])){

    $q = " e_nom LIKE '%%".$_GET['s']."%%' AND";
     
 }else{
    $q ="";
 }

  

?>
<?php

include('./MenuUsersInfo.php');

?>

<div class='hero_paraignage '>
    
    <div class="bg-white rounded p-4 mb-4 shadow-sm boder_left" >

                    <h1>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                       EMAILING COMMENT SA FONCTIONNE ?
                    </h1> 
                    <p>
                        Cliquez et <b>Participez aux offres</b> qui vous interesent ci-dessous avec vos <b>vrai information</b>
                        . Attention , certains annonceurs ne recompensent qu'une seule participation par personne  et non toutes les participations .selectionnez les plus interessantes . Cliquer sur les  offres vous rapporte
                        la somme indique par clics effectues (1 fois par ip ) 
                    </p>
    </div>
    <div class='container'>
            <form method="GET">
                <div class='row'>
                            <div class='col-md-11' style='margin:0;padding:0; '>
                                <input
                                    type='text' 
                                    name='s'
                                    class='form-control'
                                    value="<?php if(isset($_GET['s'])){ echo $_GET['s']; } ?>"
                                    placeholder='Chercher une offre' 
                                    style='height:4vh'
                                />  
                            </div>
                            <div class='col-md-1'  style='margin:0;padding:0; '>
                                <button type='submit' class='btn btn-primary  ' style='margin:0;padding:1.05vh;width:100%'>
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </button>
                            </div>
                </div>
            </form>

            </div>
            </div>
            <?php

                            $maxOffersPerAnnonceurPerDay = 5;
                                
                            if($mbrePremium == 1){

                                $offers = $pdo->query("SELECT * FROM e_offers WHERE $q  e_actif=1 LIMIT $depart,$boutiqueByPage");

                            }else{

                                $offers = $pdo->query("SELECT * FROM e_offers WHERE $q e_actif=1 AND e_premium=0 LIMIT $depart,$boutiqueByPage");

                            }

                            $all_offers = $offers->fetchAll(PDO::FETCH_ASSOC);

                            if($offers->rowCount() > 0){

                            $selected_offers = [];

                            foreach ($all_offers as $dones_offers) {

                                $nom = $dones_offers['e_nom'];
                                $idoffre = $dones_offers['e_idoffre'];
                                $description = $dones_offers['e_description'];
                                $remuneration = $dones_offers['e_remuneration'];
                                $quota = $dones_offers['e_quota'];

                                    $a = $pdo->query("SELECT * FROM 
                                    histo_offers 
                                    WHERE idUser='".$mbreHashId."' AND 
                                    data='".$idoffre."' AND
                                    ip='".ip."'");
                                    $p = $a->fetchAll(PDO::FETCH_ASSOC);
                                    
                                    if($quota*1 > count($p) || $quota*1 == 0 ){

                                    ?>
                        <div id='mission-<?= $dones_offers['id'] ?>' class="mission_content bg-white rounded shadow-sm boder_organe">
                        <div class='row'>

                                <div  class='col-xs-2 col-md-2 text-center'>
                                    <img style='width:10vh;height:10vh;'  src="<?= $dones_offers['e_image']?>">
                                </div>

                                <div  class='col-xs-5 col-md-5'>
                                    <?= $dones_offers['e_nom']; ?> 
                                    <p class="text-gray"  > <?= $dones_offers['e_description']; ?></p>
                                </div>

                                <div  class='col-xs-2 col-md-2'>
                                        <div class="btn p-2 mx-auto" style='background-color:orange;color:white;'   >
                                             <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
                                             <?= displayMontant($remuneration, 2, ' €'); ?>
                                        </div>
                                </div>

                                <div class='col-xs-1 col-md-2'>
                                <a 
                                 href='<?=URL_SITE; ?>emailing_send.php?id=<?= $idoffre; ?>'
                                 class="btn btn-warning"
                                 style='width:100%;border-radius:2vh'
                                 target="_blank"
                                 >
                                 Participer
                                </a>
                                 
                                </div>
                                <div  class='col-xs-1 col-md-1'>

                                <i
                                 style='font-size:2vh;cursor: pointer;'
                                 class=" glyphicon glyphicon-eye-close " 
                                 aria-hidden="true"
                                 onclick='document.getElementById("mission-<?= $dones_offers["id"] ?>").style.display="none"'
                                 
                                 ></i>

                                 </div>
                                 </div>
                                 </div>
                                       
                                    <?php
                                    }



                                    
                                }
                                ?>
                                              <center>
<nav  >
  <ul class="pagination">
        <li class="page-item ">
        <a class="page-link" href="
            <?php
            if(isset($_GET['s'])){
                echo 'mission.php?s='.$_GET['s'].'&page='.($_GET['page'] - 1);
            }else if(isset($_GET['categorie'])){
                echo 'mission.php?categorie='.$_GET['categorie'].'&page='.($_GET['page'] - 1);
            }else{
                echo 'mission.php?page='.($_GET['page'] - 1);
            }
        ?>">Previous</a>
        </li>
    <?php
        for($i=1;$i <=  ceil($boutiquetotal/$boutiqueByPage) ;$i++){
    ?>
      <li class="page-item
      <?php
            if(isset($_GET['page']) && $_GET['page'] == $i){
                echo 'active';
            }else if(!isset($_GET['page']) &&  $i == 1){
                echo 'active';
            }

            
      ?>
      
      ">
        <a class="page-link" href="<?php
            if(isset($_GET['s'])){
                echo 'mission.php?s='.$_GET['s'].'&page='.$i;
            }else if(isset($_GET['categorie'])){
                echo 'mission.php?categorie='.$_GET['categorie'].'&page='.$i;
            }else{
                echo 'mission.php?page='.$i;
            }
        ?>"><?= $i; ?></a>
     </li>
    <?php
    
        }
    
    ?>
       <li class="page-item">
                              <a class="page-link" href="
                              <?php
                                 if($_GET['page'] < ceil($boutiquetotal/$boutiqueByPage)  ){
                                    if(!isset($_GET['page'])){
                                        $_GET['page']=1;
                                     }
 
                                    if(isset($_GET['s'])){
                                        echo 'mission.php?s='.$_GET['s'].'&page='.($_GET['page'] + 1);
                                    }else if(isset($_GET['categorie'])){
                                        echo 'mission.php?categorie='.$_GET['categorie'].'&page='.($_GET['page'] + 1);
                                    }else{
                                        echo 'mission.php?page='.($_GET['page'] + 1);
                                    }
                                 }
                              ?>">Next</a>
                           </li>
    
  </ul>
</nav>
    </center>
    <br/>

                                                                    <?php
                            }else{
                                ?>
                                <br/>
                                <center>
                                    <h1>Aucune mission n'est disponible pour le moment !</h2>
                                </center>
                                <?php
                            }
                            ?>
                
            
      </section>
      </div>
      </div>
      </div>

<?php 
    include('./requiert/new-form/footer.php');
?>

 