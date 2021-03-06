<?php 
    include('./requiert/new-form/header.php');

    $meta_title = 'cashbackreduction.com : Les derniers gagnants';
    $meta_description = '';
?> 
 
 
<div class='cashback_view' style="padding-top: 3em">
    <div class='height-30-wave'>
        <h1 class="text-center text-black title_h1">Les gagnants</h1>
    </div>
</div>
<div class="row container-top" style="min-height: 70vh">
    <div class="col-md-8 mx-auto">
        <table class="table" style="margin: 3em 0">
            <thead class="thead-dark" style="color: white">
                <tr>
                    <th valign="middle" style='font-size:3vh;font-weight: 600;width:35%'>Date</th>
                    <th valign="middle" style='font-size:3vh;font-weight: 600;width:35%'>Utilisateur</th>
                    <th valign="middle" style='font-size:3vh;font-weight: 600;width:35%'>libellé</th>
                    <th valign="middle" style='font-size:3vh;font-weight: 600;width:35%'>Montant</th>
                </tr>
            </thead>
                <?php
                    $messagesParPage = 50;
                    $retour_total = $pdo->query("SELECT COUNT(*) AS total FROM gagnants WHERE etat != 'Refus&eacute;'");
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

                    $debits = $pdo->query("SELECT * FROM gagnants WHERE etat != 'Refus&eacute;' ORDER BY STR_TO_DATE(date,'%d/%m/%Y à %H:%i') DESC LIMIT " . $premiereEntree . ", " . $messagesParPage . "");
                    $all_debits = $debits->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($all_debits as $dones_debits)
                    {
                        $sql_userWin = $pdo->query("SELECT nom, prenom FROM users WHERE id = '" . $dones_debits['idUser'] . "' ");
                        $resultat_userWin = $sql_userWin->fetch(PDO::FETCH_ASSOC);
                        $winNom = $resultat_userWin['nom'];
                        $winPrenom = $resultat_userWin['prenom'];
                    ?>
                                <tr>
                                    <td align="left" valign="top">Le <?php echo $dones_debits['date']; ?></td>
                                    <td align="left" valign="top"><b style='color:dodgerblue'><?= $winPrenom; ?> <?= substr($winNom, 0, 2); ?>.</b></td>
                                    <td align="left" valign="top"><?php echo $dones_debits['type']; ?></td>
                                    <td align="right" valign="top"><b style='color:dodgerblue'><?php echo displayMontant($dones_debits['montant'], 2, ''); ?> €</b></td>
                                </tr>
                <?php } ?>

        </table>
    </div>
    <center>
        <?php if ($pageActuelle != 1) {
            $page_p = ($pageActuelle - 1); ?>
            <a class="button btn-default" href="<?= url_site; ?>/gagnants.php?page=<?php echo $page_p; ?>">
                <i class="glyphicon glyphicon-menu-left"></i>
            </a>
        <?php }   ?>
        <?php if (($pageActuelle == 1 AND $nombreDePages > $pageActuelle) OR $nombreDePages > $pageActuelle)
        {
         $page_s = ($pageActuelle + 1); ?>
         <a class="button btn-default" href="<?= url_site; ?>/gagnants.php?page=<?php echo $page_s; ?>">
            <i class="glyphicon glyphicon-menu-right"></i>
        </a>
        <?php } ?>
    </center>
</div>


<?php 
    include('./requiert/new-form/footer.php');
?>
<script type="text/javascript">
    $('#navigation .gagnant').addClass('current');
</script>
