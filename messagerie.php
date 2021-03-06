<?php
    include('./requiert/new-form/header.php');
    include('./requiert/php-form/messagerie.php');
    $meta_title = 'cashbackreduction.com : Messagerie';
    $meta_description = '';
    $mbre_pseudo = $mbrePrenom . " " . $mbreNom; 
    include('./MenuUsersInfo.php');
?>
    
    <!-- Content================================================== -->
    <div class="p-2 mb-1" style='width:100%;'>
   
    <div class="row"> 
        <div class="menu_messagerie bg-white p-4 mb-4 text-center shadow border-radius">

            <center>
                <ul>
                    <li  class='float-left m-1' >
                        <a href='messagerie.php' class='btn btn-primary' >
                            <span class="glyphicon glyphicon-envelope " style='margin: 0 1vh' aria-hidden="true"></span>
                            Message recu
                        </a>
                    </li>
                    <li  class='float-left m-1'>
                        <a href='messagerie.php?action=sent' class='btn btn-primary'>
                            <span class="glyphicon glyphicon-send" style='margin: 0 1vh' aria-hidden="true"></span>
                            Message envoyer
                        </a>
                    </li>
                    <li  class='float-left m-1'>
                        <a href='messagerie.php?action=send' class='btn btn-primary'>
                            <span class=" glyphicon glyphicon-pencil " style='margin: 0 1vh' aria-hidden="true"></span>
                            ecrire un message
                        </a>
                    </li>
                </ul>
            </center>

        </div>
    </div>
    </div>


    <?php
    
        if(isset($_GET['action'])){
            if($_GET['action'] == 'send'){

                ?>
                    <div class="bg-white rounded p-4 mb-4 shadow-sm" >
                    <form method="POST">
                        <input type='email' class='form-control' style='margin:1.5vh 0'  name="destinataire" placeholder='destinataire'/>
                        <input type='text'   class='form-control' style='margin:1.5vh 0' name="Objet" placeholder='Objet'/>
                        <textarea name="message"  class='form-control' style='margin:1.5vh 0' placeholder='Votre message' id="" cols="30" rows="10">

                        </textarea>
                        <input type='submit' class='btn btn-success'  name="submit_message" value='Envoyer' style='width:100%'/>

                    </form>

                    </div>
                <?php
            }else  if($_GET['action'] == 'sent'){  

                $fetch_data= $pdo->query("SELECT * FROM messagerie_all WHERE id_send='".$_SESSION['id']."' AND id_response = 0  ORDER BY id DESC");
                $result_req = $fetch_data->fetchAll(PDO::FETCH_OBJ);

                if (empty($result_req)) {

                    echo "<h1 style='text-align:center;font-size:2vh'> Vous avez envoyer aucune message pour l'instant</h1>";
                   
                } else{
                     foreach ($result_req as  $p) :  
                
                        $sql_userWin = $pdo->query("SELECT  prenom FROM users WHERE id ='". $p->id_recive."' ");
                        $resultat_userWin = $sql_userWin->fetch(PDO::FETCH_ASSOC);
                        $winPrenom = $resultat_userWin['prenom'];
                
                ?>
                    <div class="bg-white rounded p-4 mb-4 shadow-sm" >
                         
                    <button onclick='OpenMessage(<?=  $p->id; ?>)' 
                         class="btn btn-success float-right">Details
                            <span id='me_io-<?=  $p->id; ?>'
                             class="glyphicon glyphicon-menu-down"
                             aria-hidden="true"
                             >
                             </span>
                        </button>
                        
                         à <b><?=  $winPrenom; ?></b><br/> 
                         <b>Objet : <?= $p->titre_text; ?></b> 
                         <br/> 
                            
                         <b><?=  $p->date_time_publish; ?></b>  <br/>
                      
                            <div id='message-<?=  $p->id; ?>' class='response_io'>
                                <?= urldecode($p->message_text);?>
                            </div>

                        </div>
                <?php
                      endforeach;  
        
                }
            }else  if($_GET['action'] == 'seen'){

                if(isset($reponsConfirm_repose)){
                    $pdo->exec("UPDATE messagerie_all SET message_lu = 0 WHERE id = '".$_GET['m']."'");
                }else{
                    $pdo->exec("UPDATE messagerie_all SET message_lu = 1 WHERE id = '".$_GET['m']."'");
                }

                unset($reponsConfirm_repose);

                $a = $pdo->query("SELECT  * FROM messagerie_all WHERE id ='".$_GET['m']."'");
                $b = $a->fetch(PDO::FETCH_OBJ);

                $t = $pdo->query("SELECT  * FROM messagerie_all WHERE id_response ='".$b->id."' ORDER BY id  ");
                $p = $t->fetchAll(PDO::FETCH_OBJ);

                ?>
                    <div class="bg-white rounded p-4 mb-4 shadow-sm" >
                        <h3>De :  <?=  $b->titre_text;  ?> </h3>
                        <h5>Le :  <?=  $b->date_time_publish;  ?> </h5>
                        <p><?= urldecode($b->message_text);  ?></p>
                    </div>
                        <?php
                            foreach ($p as  $a) :  
                        ?>
                        <p class="bg-white rounded p-4 mb-4 shadow-sm">
                            <?= urldecode($a->message_text);?>
                            <br/>
                            <b style='font-size:1.25vh'> 
                                <?= urldecode($a->date_time_publish);?>
                            </b>
                        </p>
                        <?php
                            endforeach;  
                        ?>

                        <form method="POST">
                            <input 
                                type="text" 
                                id="msg"
                                name="message_reponse"
                                autocomplete="off"
                                class='form-control'
                              placeholder="Entrez votre message ici" 
                              style='width:75%;display:inline-table;'  />
                            <input 
                                type="submit" 
                                name="submit_reponse" 
                                class='btn btn-success'
                                value="Repondre"
                             /> 
                        </form>

                        </div>
               
            <?php

            }
        }else{
                
            $fetch_data= $pdo->query("SELECT * FROM messagerie_all WHERE id_recive='".$_SESSION['id']."' AND id_response = 0 ORDER BY id DESC");
            $result_req = $fetch_data->fetchAll(PDO::FETCH_OBJ);

            if (empty($result_req)) {

                echo "<h1 style='text-align:center;font-size:2vh; color: #0c0c0c'>Vous n'avez pas reçu de message pour le moment</h1>";
               
            } else{
                 foreach ($result_req as  $p) :  
            
                    $sql_userWin = $pdo->query("SELECT  prenom FROM users WHERE id ='". $p->id_recive."' ");
                    $resultat_userWin = $sql_userWin->fetch(PDO::FETCH_ASSOC);
                    $winPrenom = $resultat_userWin['prenom'];
            
            ?>
                    <div style="<?php
                        if($p->message_lu == 0){
                            echo "background-color: rgba(170, 170, 170, 0.2)";
                        }
                    ?>" class="user-panel-sidebar-link shadow-sm mb-4 border-raduis overflow-hidden p-0">
                     <a href="messagerie.php?action=seen&m=<?= $p->id; ?>" class="px-4 py-3">
                     <i class="icofont-arrow-right light-gray float-right m-0 icofont-1x"></i>
                       
                         De <?=  $winPrenom; ?> <br/> 
                         <b>Objet : <?= $p->titre_text; ?></b> 
                         <br/> 
                            
                         <b><?=  $p->date_time_publish; ?></b>  
                    </a>
                    </div>

            <?php
                  endforeach;  
    
            }
        }
    
    ?>
     
    </div>
    </div>
    </div>
    </div>
      
<?php
include('./requiert/new-form/footer.php');
?>
