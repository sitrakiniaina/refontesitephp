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
 
    include('./MenuUsersInfo.php');

?>
<div class="bg-white rounded p-4 mb-4 shadow-sm" >
 
         
<div class="" style="margin-top: 25px;">
    <div class="row">
        <div class="col-md-12">

            <h2 style='font-family: calibri;color:#66676b;font-weight: 800;text-align:center'>Historique de mes participations</h2>

            <table class="table">
            
                <tr class="bg-primary text-white">
                    <th scope="col" >Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Etat</th>
                </tr>
 
				                <?php

                                $retour_total = $pdo->query("SELECT COUNT(*) AS total FROM histo_offers WHERE idUser = '" . $mbreHashId . "' AND etat != 'Refus&eacute;' AND etat != 'En cours'");
                                $donnees_total = $retour_total->fetch();
                                $total = $donnees_total['total'];
                                $messagesParPage = $total ;
                                $nombreDePages = ceil($total / $messagesParPage);

                                if (isset($_GET['page'])) {
                                            $pageActuelle = intval($_GET['page']);
                                            if($pageActuelle > $nombreDePages){
                                                $pageActuelle = $nombreDePages;
                                            }
                                }else{
                                    $pageActuelle = 1;
                                }

                                $premiereEntree = ($pageActuelle - 1) * $messagesParPage;
                                $histoParticipations = $pdo->query("SELECT offerwall, idt, remuneration, date, etat FROM histo_offers WHERE idUser = '" . $mbreHashId . "' AND etat != 'En cours' ORDER BY STR_TO_DATE(date,'%d/%m/%Y à %H:%i') DESC LIMIT " . $premiereEntree . ", " . $messagesParPage . "");
                                $all_histoParticipations = $histoParticipations->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($all_histoParticipations as $dones_histoParticipations) {
                                    $etat = $dones_histoParticipations['etat'];
                                    if ($etat == 'Valid&eacute;') {
                                        $btn_etat = '<li class="text-success">Valide</li>';
                                    } else if ($etat == 'En attente') {
                                        $btn_etat = '<li class="text-info">En Attente</li>';
                                    } else if ($etat == 'Refus&eacute;') {
                                        $btn_etta = '<li class="text-danger">Refuse</li>';
                                    }
                                    ?>

                                <tr>
                                    <td align="left" valign="top">Le <?php echo $dones_histoParticipations['date']; ?></td>
                                    <td align="left" valign="top"><?= $dones_histoParticipations['idt']; ?></td>
                                    <td align="left" valign="top"><?= displayMontant($dones_histoParticipations['remuneration'], 6, ''); ?> €</td>
                                    <td align="left" valign="top"><?php echo $dones_histoParticipations['etat']; ?></td>
                                </tr>

                <?php } ?>

                            </table>
            <div class="table group-nav">
                <?php if ($pageActuelle != 1) {
                    $page_p = ($pageActuelle - 1); ?><a class="navigation-table" href="<?= url_site; ?>/gagnants.html?page=<?php echo $page_p; ?>"><i class="fa fa-angle-left"></i></a><?php } else { ?><i class="fa fa-angle-left"></i><?php } ?>
                <?php if (($pageActuelle == 1 AND $nombreDePages > $pageActuelle) OR $nombreDePages > $pageActuelle) {
                    $page_s = ($pageActuelle + 1); ?><a class="navigation-table" href="<?= url_site; ?>/gagnants.html?page=<?php echo $page_s; ?>"><i class="fa fa-angle-right"></i></a><?php } else { ?><i class="fa fa-angle-right"></i><?php } ?> 
            </div>
                            <div class="clear"></div> 
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
