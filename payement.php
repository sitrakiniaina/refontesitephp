<?php 
    include('./requiert/new-form/header.php');
    include('./requiert/php-form/boutique.php');
    include('./MenuUsersInfo.php');

?>

<!-- Navigation / End -->

<!-- Content

================================================== -->

    
            <div class="">
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
            <?php
            if($mbreEuros >= "10"){ 
            
            ?>
<div class="bg-white rounded p-4 mb-4 shadow-sm" >

                                <h1 class='title_h1 violet'>
                                    <span style='margin:0 1vh' class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
                                    LE PAYEMENT .
                                </h1>
            <form method="POST">
                    <label for="exampleFormControlSelect1">Votre Montant</label>
                    <div class="input-group mb-2">
                                 <div class="input-group-prepend">
                                    <div class="input-group-text">€</div>
                                 </div>
                                 <input 
                                    type='number' 
                                    min='10'  
                                    name="idBoutiqueMontant" 
                                    placeholder="Montant" 
                                    max="<?= $mbreEuros ?>"  
                                    step='0.05' 
                                    value='10' 
                                    class="form-control" 
                                    id="inlineFormInputGroup"
                                  >
                              </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Type  versement</label>
                    <select name="idBoutique"  class="form-control" id="exampleFormControlSelect1"  style='height:6vh'>
                        <option>---type de versement---</option>
                            <?php
                                $boutique = $pdo->query("SELECT * FROM boutique WHERE actif = 1 ORDER BY id");
                                $all_boutique = $boutique->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <?php foreach ($all_boutique as $dones_boutique): //Boucle données boutique?>
                                <option value="<?= $dones_boutique->id; ?>"><?= $dones_boutique->nom; ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                    <input type="submit" name="commander" value='commander' class='btn btn-primary' style='width:100%'/>
            </form>
            </div>

            <?php
            }else{
            ?>
                <div class="alert alert-danger">
                    <h3> Avertissement </h3>
                        <p>Vous devez avoir minimun 10 € Pour effectuez un virement </p>
                </div>
            <?php
            }
            ?>

</div>

</div>
</div>
</div>

<?php 

    include('./requiert/new-form/footer.php');

?>

