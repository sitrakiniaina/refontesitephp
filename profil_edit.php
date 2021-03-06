<?php  
    include('./requiert/new-form/header.php');
    include('./requiert/php-form/login-register.php');
    
        $sql = "SELECT * FROM parrainage WHERE id = 1";
        $req = $pdo->query($sql);
        $par = $req->fetch(PDO::FETCH_ASSOC);
        include('./requiert/php-form/profil.php');
 
        include('./MenuUsersInfo.php');

?>
    <div class="bg-white rounded p-4 mb-4 text-center shadow-sm">
    <?php
                        if(isset($reponsError) && !empty($reponsError)){
                        ?>
                                <div class='alert alert-danger'>
                                        <?= $reponsError; ?>
                                </div>
                            <?php
                        }else if(isset($reponsConfirm ) && !empty($reponsConfirm)){
                            ?>
                            <div class='alert alert-success'>
                                    <?= $reponsConfirm; ?>
                            </div>
                        <?php
                        }
                        ?>
        <div class="row">
        
        <h4 style='width:100%;font-size:3vh;font-weight:600'> Mon profil</h4>
        <br/>
            <br/>
            <!-- Profile -->
                <div class="col-md-6">
                            <!-- Details -->
                            <form method="POST" enctype="multipart/form-data">
                                <label>Nom</label>
                                <input type="text"
                                 id="nom" 
                                 class='form-control' 
                                 name="nom" 
                                 placeholder="Entrez le nom de famille" 
                                 value="<?= $mbreNom; ?> " 
                                 <?php
                                  if($mbreCodeVerif == 1){
                                        echo 'readonly="readonly"';
                                  }
                                 ?> 
                                 >

                                <label>Prenom</label>
                                <input
                                 type="text" 
                                 id="prenom"  
                                 class='form-control'   
                                 name="prenom" 
                                 placeholder="Entrez le prénom" 
                                 value="<?= $mbrePrenom; ?> "  
                                 <?php
                                  if($mbreCodeVerif == 1){
                                        echo 'readonly="readonly"';
                                  }
                                 ?> 
                                   >

                                <label>Email</label>
                                <input 
                                 type="email"
                                 id="email" 
                                 name="email" 
                                 class='form-control' 
                                 placeholder="Entrez l'adresse e-mail" 
                                 value="<?= $mbreEmail; ?>"
                                 required="required"
                                  <?php
                                  if($mbreCodeVerif == 1){
                                        echo 'readonly="readonly"';
                                  }
                                 ?> 
                                  
                                  >

                                <label>Adresse</label>
                                <input 
                                type="text" 
                                id="adresse" 
                                name="adresse" 
                                class='form-control'
                                placeholder="Entrez l'adresse complète (Rue + nr.)" 
                                value="<?= $mbreAdresse; ?>" 
                                <?php
                                  if($mbreCodeVerif == 1){
                                        echo 'readonly="readonly"';
                                  }
                                 ?> 
                                >
                </div>

                <div class="col-md-6">
                                <label>Code Postal</label>
                                <input 
                                type="text" 
                                id="codePostal" 
                                class='form-control'
                                name="codePostal"
                                placeholder="Entrez le code postal" 
                                value="<?= $mbreCodePostal; ?>"  
                                <?php
                                  if($mbreCodeVerif == 1){
                                        echo 'readonly="readonly"';
                                  }
                                ?>
                                >

                                <label>Ville</label>
                                <input  

                                type="text" 
                                id="ville" 
                                name="ville" 
                                class='form-control' 
                                placeholder="Entrez la ville" 
                                value="<?= $mbreVille; ?>"
                                <?php
                                  if($mbreCodeVerif == 1){
                                        echo 'readonly="readonly"';
                                  }
                                 ?>
                                  >

                                <label>Parrain</label>
                                <input 

                                type="text"
                                id="parrain" 
                                name="parrain" 
                                class='form-control'
                                placeholder="ID du Parrain" 
                                value="<?= $mbreParrain; ?>"  
                                disabled="disabled" />

                                <label>Pays</label>
                                <input

                                type="text" 
                                id="pays" 
                                name="pays" 
                                value="<?= $mbrePays; ?>" 
                                class='form-control' 
                                class="input-md-readonly b-r-5 f-s-12 m-b-20"
                                <?php
                                  if($mbreCodeVerif == 1){
                                        echo 'readonly="readonly"';
                                  }
                                 ?>
                                
                                 />
                                <br/>
                                </div>
                           
                                 <div class="col-md-12">

                                <select name="news"  style='margin:3vh 0;width:100%'>
                                    <option value="0" <?php if ($mbreNewsletter == 0) echo "selected"; ?>>Je ne m'inscris pas à la newsletter</option>
                                    <option value="1" <?php if ($mbreNewsletter == 1) echo "selected"; ?>>Je m'inscris à la newsletter</option>
                                </select>
                                </div>
                                <br/>
                                <div class="col-md-12">
                                <br/>
                                <?php
                                  if($mbreCodeVerif == 1){
                                      
                                        echo '<div class="alert alert-info">
                                                    <p>
                                                        Demander à Administrateur pour  faire des modifications
                                                    </p>
                                              </div>';
                                  }else{
                                 ?>
                                
                                <input 
                                    type="submit"
                                    style='margin:2vh 0;width:100%'
                                    name="submit_update"  
                                    value="Appliquer les modifications" 
                                    id="submit"  
                                    class="btn btn-primary">
                                <?php
                                  }
                                  ?>
                                </div>
                                </div>
                                </div>

                                </form>

            <br/>
    <div class="bg-white rounded p-4 mb-4 text-center shadow-sm">
    <form method="POST" enctype="multipart/form-data">

            <div class="row">
            <h4 style='width:100%;font-size:3vh;font-weight:600'>Mes informations de paiement</h4>

                    <div class='col-md-6'>
                                <label class="margin-top-0">Paypal</label>
                                <input type="text" id="paypal" name="paypal" class='form-control' placeholder="Entrez votre adresse Paypal" value="<?= $mbrePaypal; ?>" />

                                <label class="margin-top-0">Skrill</label>
                                <input type="text" id="skrill" name="skrill" class='form-control' placeholder="Entrez votre adresse Skrill" value="<?= $mbreSkrill; ?>" />
                    </div>

                    <div class='col-md-6'>
                                <label class="margin-top-0">IBAN</label>
                                <input type="text" id="iban" name="iban" class='form-control' placeholder="Entrez votre IBAN" value="<?= $mbreIban; ?>"/>

                                <label class="margin-top-0">SWIFT</label>
                                <input type="text" id="swift" name="swift" class='form-control' placeholder="Entrez votre code Swift/BIC" value="<?= $mbreSwift; ?>" />
                    </div>
                
                    </div>

                    <input 
                        type="submit"
                        style='margin:2vh 0;width:100%'
                        name="submit_update_bank"  
                        value="Appliquer les modifications" 
                        id="submit"  
                        class="btn btn-primary"
                    >
                    </form>
      
            </div>
            
            <?php
                if ($mbreNom != '' && $mbrePrenom != '' && $mbreAdresse != '' && $mbreVille != '' && $mbreCodePostal != '') {
                    if ($mbreCodeVerif != 0 && $mbreCodeVerif != 1) {
            ?>
            <div class="bg-white rounded p-4 mb-4 text-center shadow-sm">
                <center>
                    <div>Vérification du profil |  En attente</div> 
                </center>
                                <form method="POST" ><div class="col-md-12 col-sm-12 txt-align-center">
                                        <div class="m-b-10"><label for="code_verif" class="m-l-5 p-5 f-s-11 bg-grey color-dark-grey b-r-5">Entrez votre code ci-dessous :</label></div>
                                        <input type="text" id="code_verif" name="code_verif" 
                                        placeholder="Entrez votre code reçu ici" value=""
                                        class="form-control" required="required"/><br/>
                                        <center>
                                            <input 
                                            type="submit" 
                                            style='width:100%' 
                                            name="valid_profil"
                                            value="Valider mon profil"
                                            class="btn btn-primary"/>
                                        </center>
                                    </div>
                                </form>
            </div>
            <?php
                } else if ($mbreCodeVerif == 1) {
            ?>
            <div class="bg-white rounded p-4 mb-4 text-center shadow-sm">
                <center>    
                    <div>Vérification du profil |  Validé</div> 
                </center>
            </div>
            <?php
                }
            }
            ?>
            <div class="bg-white rounded p-4 mb-4 text-center shadow-sm">

            <h4 style='width:100%;font-size:3vh;font-weight:600'> Vérification d'identité A faire</h4>
            <br/>
            <br/>
                <?php
                        if ($mbreIdentRecto == '' && $mbreIdentVerso == '' && $mbreIdentVerif == 0) {
                ?>
                            <form method="POST" enctype="multipart/form-data">
            <div class="row">

                            <div class='col-md-6'>
                                <label class="margin-top-0">Copie Recto de votre Carte d'identité :</label>
                                <input type="file" style='width:100%' class='form-control' id="fileToUpload" name="fileToUpload" />
                            </div>
                            <div class='col-md-6'>
                                <label class="margin-top-0">Copie Verso de votre Carte d'identité :</label>
                                <input type="file" style='width:100%' class='form-control' id="fileToUpload2" name="fileToUpload2" /><br/>
                                </div>
                                </div>
                                <center>
                                    <button 
                                    type="submit" 
                                    name="valid_ident" 
                                    style='width:100%' 
                                    value="Envoyer mes documents"
                                    class="btn btn-primary">Modifier</button>
                                </center>
                            </form>
                            <?php
                             } else if ($mbreIdentRecto != '' && $mbreIdentVerso != '' && $mbreIdentVerif == 0) {
                            ?>
                            <label class="margin-top-0">Vérification d'identité En attente</label>
                            <?php
                             } else {
                            ?>
                            <label class="margin-top-0">Vérification d'identité  Validé</label>
                            <?php
                            }
                            ?>
            </div>

            </div>
            </div>
            </div>
            </div>
     
<br>
<?php 
    include('./requiert/new-form/footer.php');
?>
