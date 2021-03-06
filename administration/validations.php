﻿<?php 
include('./requiert/inc-head.php');

include '../requiert/bddConnect.php';

$meta_title = 'Panel d\'administration : Validations | cashbackreduction.com';

$nomPage = 'validations';

include('./requiert/inc-header-navigation.php');

include('./requiert/php-form/validations.php');

function displayMontant($montant, $chiffres_apres_virgule = 2, $symbole = "?") {
	return number_format($montant, $chiffres_apres_virgule, ',', ' ') . "" . $symbole;
}

?>

    <div class="dashboard-body">
        <div class="dashboard-content">
            <!-- HEADLINE -->
            <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                <h4 class="text-primary" >Administration de validations</h4>
            </nav>
            <!-- /HEADLINE -->
            <section class="bg-light-grey absolute-section-1 margin-base">
                <!-- PACK BOXES -->
                <div class="pack-boxes">
                    <!-- PACK BOX -->
                    <div class="pack-box">
                        <p class="text-header small">Pré-validation</p>
                        <p class="price larger"><?= $totalPrevalidation; ?></p>
                        <p class="credit">Cliquez pour voir les pré-validations</p>
                        <center>
                            <a href="validations.php?action=prevalidation" class="button btn-primary btn-icon-split ">Voir</a>
                        </center>
                  
                    </div>
                    <!-- /PACK BOX -->

                     <!-- PACK BOX -->
                    <div class="pack-box">
                        <p class="text-header small">Pré-validation Cashback</p>
                        <p class="price larger"><?= $totalPrevalidationC; ?></p>
                        <p class="credit">Cliquez pour voir les pré-validations</p>
                        <center>
                            <a href="validations.php?action=prevalidationCashback" class="button btn-primary btn-icon-split">Voir</a>
                        </center>

                    </div>
                    <!-- /PACK BOX -->

                    <!-- PACK BOX -->
                    <div class="pack-box">
                        <p class="text-header small">Validation</p>
                        <p class="price larger"><?= $totalValidation; ?></p>
                        <p class="credit">Cliquez pour voir les validations</p>
                        <center>
                            <a href="validations.php?action=validation" class="button btn-primary btn-icon-split">Voir</a>
                        </center>
                   
                    </div>
                    <!-- /PACK BOX -->
                </div>
                <!-- /PACK BOXES -->
            </section>

            <?php
            if (isset($_GET['action'])) {
	            $sqlAction = '';
	            $get_date = ''; 
                $get_date_sql = '';
	            $get_idt = ''; 
                $get_idt_sql = '';
	            
                if ($_GET['action'] == 'prevalidation' || $_GET['action'] == 'prevalidationCashback') { $sqlAction = "WHERE etat = 'En cours'"; } else if ($_GET['action'] == 'validation') { $sqlAction = "WHERE etat = 'En attente'"; } else { $sqlAction = ''; }
                ?>
                <section class="bg-white absolute-section-1">
                    <div class="m-auto content p-40-20">

                        <?php
                        if ($_GET['action'] == 'validation') {

                            if (!empty($_GET['mois'])) { $get_date = $_GET['mois']; $get_date_sql = " AND date LIKE '%%".$get_date."%%'"; } else { $get_date_sql = ''; }
                            if (!empty($_GET['idt'])) { $get_idt = $_GET['idt']; $get_idt_sql = " AND idt LIKE '%%".$get_idt."%%'"; } else { $get_idt_sql = ''; }
                            ?>
                            <form name="form1" method="POST" action="" class="m-b-10">
                                <select name="date" class="m-r-10" onchange="loadPage(this.value);">
                                    <option value="" selected="selected">Sélectionnez une date</option>
                                    <option value="" disabled="disabled">-----</option>
                                    <?php
                                    $m = array('','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');

                                    for($i=(01-1); $i<=11; $i++)
                                    {
                                        $mois = $m[1+($i%12)];

                                        $i2 = $i+1;
                                        if ($i2 < 10) $i2 = '0'.$i2;
                                        ?>
                                        <option value="&mois=<?= $i2.'/'.date('Y'); ?>"<?php if ($get_date == $i2.'/'.date('Y')) { echo ' selected'; } ?>><?= $mois.' '.date('Y'); ?></option>
                                        <?php
                                    }
                                    ?>
                                    <option value="" disabled="disabled">-----</option>
                                    <?php
                                    for($i=(01-1); $i<=11; $i++)
                                    {
                                        $mois = $m[1+($i%12)];

                                        $i2 = $i+1;
                                        if ($i2 < 10) $i2 = '0'.$i2;
                                        ?>
                                        <option value="&mois=<?= $i2.'/'.(date('Y')-1); ?>"<?php if ($get_date == $i2.'/'.(date('Y')-1)) { echo ' selected'; } ?>><?= $mois.' '.(date('Y')-1); ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <?php
                                if (!empty($_GET['mois']))
                                {
                                    ?>
                                    <select name="date" class="m-r-10" onchange="loadPage(this.value);">
                                        <option value="">Sélectionnez une campagne</option>
                                        <?php
                                        $idt = $pdo->query("SELECT * FROM histo_offers $sqlAction $get_date_sql GROUP BY idt ORDER BY idt");
                                        $all_idt = $idt->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($all_idt as $dones_idt)
                                        {
                                            ?>
                                            <option value="&mois=<?= $get_date; ?>&idt=<?= $dones_idt['idt']; ?>"<?php if ($get_idt == $dones_idt['idt']) { echo ' selected'; } ?>><?= $dones_idt['idt']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <?php
                                }
                                ?>
                            </form>
                            <form method="POST">
                            <table rules="none">
                                <tr>
                                    <th align="left" style='width:5%' ></th>
                                    <th align="left" style='width:30%' >Date</th>
                                    <th align="left" style='width:35%' >Utilisateur / IP</th>
                                    <th align="left" style='width:20%' >Campagne</th>
                                    <th align="left" style='width:20%' >Gains</th>
                                </tr>
                            <?php

                                $offer = $pdo->query("SELECT * FROM histo_offers $sqlAction $get_date_sql $get_idt_sql ORDER BY STR_TO_DATE(date,'%d/%m/%Y à %H:%i:%s') DESC");
                                $all_offers = $offer->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($all_offers as $dones_offers)
                                {
                                    $sql_infoUser = $pdo->query("SELECT * FROM users WHERE hashId = '".$dones_offers['idUser']."'");
                                    $donnees_infoUser = $sql_infoUser->fetch(PDO::FETCH_ASSOC);
                                    $infoUser_nom = $donnees_infoUser['nom'];
                                    $infoUser_prenom = $donnees_infoUser['prenom'];
                                    ?>
                                    <tr>
                                        <td align="left" style='width:5%' class="validation"><input type="checkbox" name="id[ ]" value="<?= $dones_offers['id']; ?>" style="display: block;"/></td>
                                        <td align="left" style='width:30%' >Le <?= $dones_offers['date']; ?></td>
                                        <td align="left" style='width:35%' ><?= $infoUser_prenom.' '.substr($infoUser_nom, 0, 1).'.'; ?> <?= $dones_offers['ip']; ?></td>
                                        <td align="left" style='width:20%' ><?= $dones_offers['idt']; ?> <?php if ($dones_offers['offerwall'] == '') echo 'Mission'; else echo $dones_offers['offerwall']; ?></td>
                                        <td align="left" style='width:20%' ><?= displayMontant($dones_offers['remuneration'], 6, ' €'); ?></td>
                                    </tr>
                            <?php
                                }
                            ?>
                                <tr>
                                    <td align="left" valign="middle" colspan="2">
                                        <input type="button" id="toggle" value="Tout cocher" onClick="do_this()" class="button btn-primary btn-icon-split cursor-pointer"/>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <input type="submit" name="submit_<?= $_GET['action']; ?>_valider" value="Valider" class="button primary cursor-pointer display-inline-block"/>
                                    </td>
                                    <td>
                                        <input type="submit" name="submit_<?= $_GET['action']; ?>_refuser" value="Refuser" class="display-inline-block button tertiary cursor-pointer"/>
                                    </td>
                                </tr>
                            </table>
                            </form>
                            <script>
                              function loadPage(param) {
                                self.location.href="validations.php?action=validation"+param;
                              }
                            </script>
                            <?php
                        }
                        ?>

                        <form method="POST">
                            <table rules="none" cellpadding="10" cellspacing="10" width="100%" bgcolor="#FFF" border="1">
                              
                                <?php
                                if ($_GET['action'] == 'prevalidation'){

                                    ?>

                                <tr>
                                    <th align="left" valign="middle"></th>
                                    <th align="left" valign="middle">Date</th>
                                    <th align="left" valign="middle">Utilisateur / IP</th>
                                    <th align="left" valign="middle">Campagne</th>
                                    <th align="right" valign="middle">Gains</th>
                                </tr>
                                <?php
                                $offer = $pdo->query("SELECT * FROM histo_offers $sqlAction $get_date_sql $get_idt_sql ORDER BY STR_TO_DATE(date,'%d/%m/%Y à %H:%i:%s') DESC");
                                $all_offers = $offer->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($all_offers as $dones_offers)
                                {
                                    $sql_infoUser = $pdo->query("SELECT * FROM users WHERE hashId = '".$dones_offers['idUser']."'");
                                    $donnees_infoUser = $sql_infoUser->fetch(PDO::FETCH_ASSOC);
                                    $infoUser_nom = $donnees_infoUser['nom'];
                                    $infoUser_prenom = $donnees_infoUser['prenom'];
                                    ?>
                                    <tr>
                                        <td align="left" valign="middle" class="validation"><input type="checkbox" name="id[ ]" value="<?= $dones_offers['id']; ?>" style="display: block;"/></td>
                                        <td align="left" valign="middle">Le <?= $dones_offers['date']; ?></td>
                                        <td align="left" valign="middle"><?= $infoUser_prenom.' '.substr($infoUser_nom, 0, 1).'.'; ?> <?= $dones_offers['ip']; ?></td>
                                        <td align="left" valign="middle"><?= $dones_offers['idt']; ?> <?php if ($dones_offers['offerwall'] == '') echo 'Mission'; else echo $dones_offers['offerwall']; ?></td>
                                        <td align="right" valign="middle"><?= displayMontant($dones_offers['remuneration'], 6, ' €'); ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <td align="left" valign="middle" colspan="2"><input type="button" id="toggle" value="Tout cocher" onClick="do_this()" class="button btn-primary btn-icon-split cursor-pointer"/></td>
                                    <td align="right" valign="middle" colspan="3">
                                        <input type="submit" name="submit_<?= $_GET['action']; ?>_valider" value="Valider" class="button primary cursor-pointer display-inline-block"/>
                                        <input type="submit" name="submit_<?= $_GET['action']; ?>_refuser" value="Refuser" class="display-inline-block button tertiary cursor-pointer"/></td>
                                </tr>
                            </table></form>
                            <?php
                            } else if($_GET['action'] == 'prevalidationCashback'){

                            ?>
                                <tr>
                                    <th align="left" valign="middle"></th>
                                    <th align="left" valign="middle">Date</th>
                                    <th align="left" valign="middle">Campagne</th>
                                    <th align="left" valign="middle">Utilisateur / IP</th>
                                    <th align="center" valign="middle">Gains</th>
                                </tr>
                            <?php

                                $cashback = $pdo->query("SELECT * FROM cashbackengine_cashabck WHERE etat = 'En attente' ORDER BY id DESC");
                                $all_cashback = $cashback->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($all_cashback as $dataCashback) {
                                    $sql_infoUser = $pdo->query("SELECT * FROM users WHERE id = '".$dataCashback['histo_retailler_id_user']."'");
                                    $donnees_infoUser = $sql_infoUser->fetch(PDO::FETCH_ASSOC);
                                    $infoUser_nom = $donnees_infoUser['nom'];
                                    $infoUser_prenom = $donnees_infoUser['prenom'];
                                    $sql_infocashback = $pdo->query("SELECT * FROM cashbackengine_retailers WHERE retailer_id = '".$dataCashback['histo_retailler_id']."'");
                                    $donnees_infoaCashback = $sql_infocashback->fetch(PDO::FETCH_ASSOC);
                                    $infocashback_nom = $donnees_infoaCashback['title'];
                                    ?>
                                    <tr>

                                        <td align="left" valign="middle" class="validation">
                                            <input type="checkbox" name="id[ ]" value="<?= $dataCashback['id']; ?>" style="display: block;"/>
                                        </td>

                                        <td align="left" valign="middle">
                                            <?= $dataCashback['date_time']; ?>
                                        </td>

                                        <td align="left" valign="middle">
                                            <?= $infocashback_nom; ?>
                                        </td>

                                        <td align="left" valign="middle"><?= $infoUser_prenom.' '.substr($infoUser_nom, 0, 1).'.'; ?> 
                                            <?= $dataCashback['histo_retailler_ip']; ?>
                                        </td>

                                        <td align="center" valign="middle">
                                            <?= $dataCashback['gains'].'€'; ?>
                                        </td>

                                    </tr>
                                <?php
                                }
                                ?>
                                    <tr>
                                    <td align="left" valign="middle" colspan="2"><input type="button" id="toggle" value="Tout cocher" onClick="do_this()" class="button btn-primary btn-icon-split cursor-pointer"/></td>
                                    <td align="right" valign="middle" colspan="3">
                                        <input type="submit" name="submit_<?= $_GET['action']; ?>_valider" value="Valider" class="button primary cursor-pointer display-inline-block"/>
                                        <input type="submit" name="submit_<?= $_GET['action']; ?>_refuser" value="Refuser" class="display-inline-block button tertiary cursor-pointer"/></td>
                                </tr>
                            </table></form>
                                <?php
                                }
                                ?>
                    </div>
                </section>
                <?php
            }
            ?>
        </div>
    </div>
    <script type="text/javascript">
      function do_this()
      {
        var checkboxes = document.getElementsByName('id[ ]');
        var button = document.getElementById('toggle');

        if(button.value == 'Tout cocher'){
          for (var i in checkboxes){
            checkboxes[i].checked = 'FALSE';
          }
          button.value = 'Tout décocher'
        }else{
          for (var i in checkboxes){
            checkboxes[i].checked = '';
          }
          button.value = 'Tout cocher';
        }
      }
    </script>



<?php
include('./requiert/inc-footer.php');
?>