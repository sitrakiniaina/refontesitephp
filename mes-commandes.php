<?php 
    include('./requiert/new-form/header.php');
    include('./requiert/php-form/login-register.php');
    
    $post_reg_mdp = addslashes(htmlentities("123"));


    $totalMissions = $pdo->query("SELECT COUNT(id) AS 'id' FROM offers WHERE actif = 1");
    $totalMissions = $totalMissions->fetch(PDO::FETCH_ASSOC);
    $totalMissions = $totalMissions['id'];

    $totalMissionsAttente = $pdo->query("SELECT COUNT(id) AS 'id' FROM histo_offers WHERE idUser = $mbreId AND etat = 'En cours'");
    $totalMissionsAttente = $totalMissionsAttente->fetch(PDO::FETCH_ASSOC);
    $totalMissionsAttente = $totalMissionsAttente['id'];

    $totalFilleuls = $pdo->query("SELECT COUNT(id) AS 'id' FROM users WHERE idParrain = $mbreId AND actif = 1");
    $totalFilleuls = $totalFilleuls->fetch(PDO::FETCH_ASSOC);
    $totalFilleuls = $totalFilleuls['id'];

    $totalCommandes = $pdo->query("SELECT COUNT(id) AS 'id' FROM gagnants WHERE idUser = $mbreId AND etat != 'Annulé'");
    $totalCommandes = $totalCommandes->fetch(PDO::FETCH_ASSOC);
    $totalCommandes = $totalCommandes['id'];
    
    ?>
             
<?php

include('./MenuUsersInfo.php');

?>
<div class="bg-white rounded p-4 mb-4 shadow-sm" >
<div class="" style="margin-top: 25px;">
    <div class="row">
        <div class="col-md-12">
        <h2 style='font-family: calibri;color:#66676b;font-weight: 800;text-align:center'>Historique de mes Commandes</h2>
            <table class="table">

                        <tr  class="bg-primary text-white">
                            <th scope="col" >Date</th>
                            <th scope="col">Libellé</th>
                            <th scope="col">Montant</th>
                            <th scope="col">Code</th>
                            <th scope="col">Etat</th>
                        </tr>
                      
                            <?php
                            $messagesParPage = 50;
                            $retour_total = $pdo->query("SELECT COUNT(*) AS total FROM gagnants WHERE idUser = '" . $mbreId . "'");
                            $donnees_total = $retour_total->fetch();
                            $total = $donnees_total['total'];
                            $nombreDePages = ceil($total / $messagesParPage);

                            if (isset($_GET['page'])) {
                                $pageActuelle = intval($_GET['page']);
                                if ($pageActuelle > $nombreDePages) {
                                    $pageActuelle = $nombreDePages;
                                }
                            } else {
                                $pageActuelle = 1;
                            }
                            $premiereEntree = ($pageActuelle - 1) * $messagesParPage;
                            $commandes = $pdo->query("SELECT date, type, montant, etat, code FROM gagnants WHERE idUser = '" . $mbreId . "' ORDER BY STR_TO_DATE(date,'%d/%m/%Y à %H:%i') DESC LIMIT " . $premiereEntree . ", " . $messagesParPage . "");
                            $all_commandes = $commandes->fetchAll(PDO::FETCH_ASSOC);

                            function Color($e){
                                             
                                if ($e === 'Validé') {
                                   echo '<div class="paid"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></div>';
                                } else if ($e === 'En attente') {
                                    echo '<div  ><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div>';
                                } else if ($e === 'Refusé') {
                                    echo '<div class="unpaid"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span></div>';
                                } else if ($e === 'En cours') {
                                    echo '<div  ><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div>';
                                }
                    
                            }
                            
                            foreach ($all_commandes as $dones_commandes) {
                            
                                ?>

                                <tr>
                                    <td align="left">Le <?php echo $dones_commandes['date']; ?></td>
                                    <td align="left"><?php echo $dones_commandes['type']; ?><?php if ($dones_commandes['code'] != '') echo ' | <strong>' . $dones_commandes['code'] . '</strong>'; ?></td>
                                    <td align="left"><?= displayMontant($dones_commandes['montant'], 2, ''); ?> €</td>
                                    <td align="left"><?=  $dones_commandes['code'] ?></td>
                                    <td><?= Color(html_entity_decode($dones_commandes['etat'])) ?></td>
                                </tr>

                <?php } ?>

                            </table>
            <div class="table group-nav">
                <?php if ($pageActuelle != 1) {
                    $page_p = ($pageActuelle - 1); ?><a class="navigation-table" href="<?= url_site; ?>/gagnants.html?page=<?php echo $page_p; ?>"><i class="fa fa-angle-left"></i></a><?php } else { ?><i class="fa fa-angle-left"></i><?php } ?>
                <?php if (($pageActuelle == 1 AND $nombreDePages > $pageActuelle) OR $nombreDePages > $pageActuelle) {
                    $page_s = ($pageActuelle + 1); ?><a class="navigation-table" href="<?= url_site; ?>/gagnants.html?page=<?php echo $page_s; ?>"><i class="fa fa-angle-right"></i></a><?php } else { ?><i class="fa fa-angle-right"></i><?php } ?> 
            </div>
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
