<?php
	include('./requiert/inc-head.php');

	include('./requiert/php-global.php');
	
    $meta_title = 'Panel d\'administration : Cashback | cashbackreduction.com';
    
	$nomPage = 'cashback';

    include('./requiert/inc-header-navigation.php');
    
    include('./requiert/php-form/avis.php');
    
    function  viewStart($e){
 
        echo "<ul>";
    
          for($i=1;$i <= 6;$i++){
    
            if($i <= $e*1){
    
                echo '<li style="color:yellow;display:inline-block"  >
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                      </li>' ;
    
            }else{
    
                echo '<li style="color:#aaa;display:inline-block">
                        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                      </li>' ;
    
            }
    
          }
    
          echo "</ul>";
      
      }
?>
 
        <!-- DASHBOARD CONTENT -->
            <!-- HEADLINE -->
            <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                        <h4 class="text-primary">Administration des avis</h4>
            </nav>
            <!-- /HEADLINE -->

            <!-- TRANSACTION LIST -->
            <div class="transaction-list">
                <form method="post">
                    
                    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                        <h4 class="text-primary" >
                       
                        </h4>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <input type="submit" name="accepte" class="btn btn-success" value="Comfirme">
                                <input type="submit" name="refuse" class="btn btn-warning" value="Refuse">
                            </li>
                        </ul>
                    </nav>
                        <div class="input-container half">
                    <!-- TRANSACTION LIST HEADER -->
                    <div class="transaction-list-header">

                    <div class="transaction-list-header-date admin-s1" style='width:8vh;text-align:center'> 
                        <p class="text-header small"></p>
                    </div>

                    <div class="transaction-list-header-author admin-s1">
                        <p class="text-header small">Nom</p>
                    </div>

                    <div class="transaction-list-header-item admin-s1"  style='width:12vh;text-align:center'>
                        <p class="text-header small">Nombre de etoile</p>
                    </div>

                    <div class="transaction-list-header-item admin-s1" style='width:12vh;text-align:center'>
                        <p class="text-header small">Message</p>
                    </div>

             
                </div>
                    <!-- /TRANSACTION LIST HEADER -->
                    <?php

                    if(isset($_GET['categorie'])){

                        $messagesParPage = 50;
                        $retour_total = $pdo->query("SELECT COUNT(*) AS total FROM livredor WHERE categorie = ".$_GET['categorie']."");
            
                    }else{
                        $messagesParPage = 50;
                        $retour_total = $pdo->query("SELECT COUNT(*) AS total FROM livredor");
                    }

                $donnees_total = $retour_total->fetch();
                $total = $donnees_total['total'];
                $nombreDePages = ceil($total / $messagesParPage);

                if (isset($_GET['page'])) {
                    $pageActuelle = intval($_GET['page']);
                    if ($pageActuelle > $nombreDePages) {
                        $pageActuelle = $nombreDePages;
                    } } else {
                    $pageActuelle = 1;
                }

                $premiereEntree = ($pageActuelle - 1) * $messagesParPage;

             
                    $offer = $pdo->query("SELECT * FROM livredor WHERE statut=0 ORDER BY date LIMIT ".$premiereEntree.", ".$messagesParPage."");
             
             $all_cashback = $offer->fetchAll(PDO::FETCH_ASSOC);?>
                    <?php foreach ($all_cashback as $dones_cashback):?>
                    <!-- TRANSACTION LIST ITEM -->
                        <div style='padding:1vh;margin:1vh 0;border-bottom:1vh solid #aaa'>
                            <div style='display:inline-table'>
                                <input type="checkbox" style="display:block" name="foo[ ]" value="<?= $dones_cashback['id']; ?>"/>
                            </div>
                            <div style='display:inline-table'>
                                <?= $dones_cashback['nom_user']; ?>                          
                                <?= viewStart($dones_cashback['nbr_start']); ?> 
                                <?= $dones_cashback['message']; ?> 
                            </div>
                        </div>
                    <!-- /TRANSACTION LIST ITEM -->
                <?php endforeach; ?>
                </form>
                <?php if ($pageActuelle != 1) { $page_p = ($pageActuelle - 1); ?><a href="<?= url_panel; ?>/avis.php?page=<?php echo $page_p; ?>"><div class="button secondary cursor-pointer display-inline-block">Page précédente</div></a><?php } else { ?><div class="button secondary-dark cursor-not-allowed display-inline-block">Page précédente</div><?php } ?>
                <?php if (($pageActuelle == 1 AND $nombreDePages > $pageActuelle) OR $nombreDePages > $pageActuelle) { $page_s = ($pageActuelle + 1); ?><a href="<?= url_panel; ?>/avis.php?page=<?php echo $page_s; ?>"><div class="button secondary cursor-pointer display-inline-block" style="float : right;">Page suivante</div></a><?php } else { ?><div class="button secondary-dark cursor-not-allowed display-inline-block" style="float : right;">Page suivante</div><?php } ?><div class="clear"></div>
            </div>
            <!-- /TRANSACTION LIST -->
            </div>
        <!-- DASHBOARD CONT 

<?php
	include('./requiert/inc-footer.php');
?>