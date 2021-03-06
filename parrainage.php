<?php 
    include('./requiert/new-form/header.php');
    include('./requiert/php-form/login-register.php');
    
    
        $sql = "SELECT * FROM parrainage WHERE id = 1";
        $req = $pdo->query($sql);
        $par = $req->fetch(PDO::FETCH_ASSOC);
    ?>
 
<?php

include('./MenuUsersInfo.php');

?>
	 

    <div class="bg-white  border-radius bg-white shadow p-4" >
          
    <div class='parrainage_io'>
                        <h3 class='text-center m-2 title_h1'>
                        Le parrainage facilideal vous offre : 
                        </h3>

                        <div class='row'>
                            <div class='col-md-4'>
                                    <img src='images/p_1.png'/> 
                                    <p class='text-center'><b><?= $par['inscription']  ?> € </b> <span>Bonus Inscription</span> </p>
                            </div>
                            <div class='col-md-4'>
                                    <img src='images/p_2.png'/> 
                                    <p class='text-center'><b><?= $par['ami']?> € </b><span>Bonus Parrainage Ami</span> </p>
                            </div>
                            <div class='col-md-4'>
                                    <img src='images/p_3.png'/> 
                                    <p class='text-center'><b><?= $par['commission'] ?> € </b> <span>Commission de renvoi</span> </p>
                            </div>
                        </div>

                    <br/>
                    <h3 style='color: #aaa;'><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                     à vie chaque gain realisé par vos filleules!
                    </h3> 
                    <br/>
                    <p>
                        Vous souhaitez inviter vos ami(e)s sur Multi-cadeaux et 
                        gagner plus d'argent ? Récupérez votre lien de parrainage 
                        ci-dessous et partagez-le un maximum. Chaque personne qui 
                        s'inscrit via votre lien devient automatiquement votre filleul
                        et vous devenez son parrain. A chaque commande effectuée, vous
                        toucherez 15% du montant de leur commande.
                    </p> 
                    </div>

        <div class='row paraignage_link'>
            <div class='col-md-10' style='margin:0;padding:0'>
                <input 
                    id="input-code-paraignage" 
                    value="<?= url_site.'?parrain='.$mbreId ?>" 
                    type="text" 
                    readonly 
                    style='font-size:1.75vh;margin:0 ;width:100%;padding:0.5vh'/>
            </div>
            
            <div class='col-md-2'>
                <div id="copy-paraignage" class='btn_paraignage' onClick="copy('paraignage')">
                    <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>
                </div>
            </div>
        </div>
        </div>
<br/>
<div class="bg-white  border-radius bg-white shadow p-4" >
    <table>

                              <tr>
                                    <th align="center"  style='width:15%'>Date </th>
                                    <th align="center"  style='width:20%'>Nom</th>
                                    <th align="center"  style='width:15%' >Prenom </th>
                                    <th align="center"  style='width:20%' >Address mail</th>
                                    <th align="center"  style='width:20% ;text-align:center' >Montant Percu</th>
                            </tr>

                
                           <?php
                                $messagesParPage = 50;
                                $retour_total = $pdo->query("SELECT COUNT(*) AS total FROM users WHERE idParrain = '" . $mbreId . "'");
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

                                $commandes = $pdo->query("SELECT * FROM users WHERE idParrain = '" . $mbreId . "' ORDER BY eurosParrain DESC LIMIT " . $premiereEntree . ", " . $messagesParPage . "");
                                $all_commandes = $commandes->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($all_commandes as $dones_commandes) {
                                    ?>

                                <tr>
                                    <td >
                                        <b><?= $dones_commandes['date_Inscription'] ; ?></b>
                                    </td>
                                    <td style='color:#aaa'><?= $dones_commandes['nom']; ?> </td>
                                    <td style='color:#aaa'>  <?= $dones_commandes['prenom']; ?> </td>
                                    <td style='color:#aaa'><?= $dones_commandes['email']; ?> </td>
                                    <td style='color:#aaa;text-align:center'><?= $dones_commandes['euros']; ?> </td>
                                </tr>

                <?php } ?>

                            </table>
         
                            <div class="clear"></div> 
        </div>
    </div>
    </div>
    </div>
    </div>

</div>
<?php 
    include('./requiert/new-form/footer.php');
?>
