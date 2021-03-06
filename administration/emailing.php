<?php
    include('./requiert/inc-head.php');
    
    include('./requiert/php-global.php');
	
	$meta_title = 'Panel d\'administration : emailing | cashbackreduction.com';
    
    $nomPage = 'emailing';

    include('./requiert/inc-header-navigation.php');
    
    include('./requiert/php-form/emailing.php');
     
?>
    <!-- DASHBOARD BODY -->
    <?php if (!isset($_GET['action'])):?>
        <!-- DASHBOARD CONTENT -->
            <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                        <h4 class="text-primary" >Administration des emailings</h4>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="<?= url_panel; ?>/emailing.php?action=add" class="button btn-primary btn-icon-split">Ajouter un emailing</a>
                            </li>
                        </ul>
            </nav>
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

            <!-- TRANSACTION LIST -->
            <div class="transaction-list">
                <form method="post">
                    <!-- TRANSACTION LIST HEADER -->
                    <div class="transaction-list-header">
               
                    <div class="transaction-list-header-author admin-s1" style='width:40vh'>
                        <p class="text-header small" style='padding:0 1vh'>Nom de l'offre</p>
                    </div>
        
                    <div class="transaction-list-header-item admin-s1" style='width:20vh'>
                        <p class="text-header small">Rémunération</p>
                    </div>
                    <div class="transaction-list-header-detail admin-s1" style='width:10vh'>
                        <p class="text-header small">Etat</p>
                    </div>
                    <div class="transaction-list-header-code">
                        <p class="text-header small">Action</p>
                    </div>
                </div>
                    <!-- /TRANSACTION LIST HEADER -->
                    <?php
                $messagesParPage = 50;
                $retour_total = $pdo->query("SELECT COUNT(*) AS total FROM e_offers");
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

                $offer = $pdo->query("SELECT * FROM e_offers ORDER BY e_nom LIMIT ".$premiereEntree.", ".$messagesParPage."");
                $all_offers = $offer->fetchAll(PDO::FETCH_ASSOC);?>
                    <?php foreach ($all_offers as $dones_offers):?>
                    <?php
                    //if ($dones_offers['actif'] == 1) { $dones_offers['actif'] = 'Actif'; $boutonActif = '<a href="" class="m-r-5"><div class="display-inline-block button bg-red bg-red-hover color-white p-5-10 b-r-50 uppercase">Mettre en pause</div></a>'; } else if ($dones_offers['actif'] == 0) { $dones_offers['actif'] = 'Inactif'; $boutonActif = '<a href="" class="m-r-5"><div class="display-inline-block button bg-green bg-green-hover color-white p-5-10 b-r-50 uppercase">Activer</div></a>'; }
                    if ($dones_offers['e_actif'] == 1) {
                        $dones_offers['e_actif'] = 'Actif';
                        $boutonActif = '<button name="desactive" value="'.$dones_offers['id'].'" style="margin:0.75vh 0.5vh" class="btn btn-warning ">Pause</button>';
                    } else if ($dones_offers['e_actif'] == 0) {
                        $dones_offers['e_actif'] = 'Inactif';
                        $boutonActif = '<button name="active" value="'.$dones_offers['id'].'" style="margin:0.75vh 0.5vh" class="btn btn-success">Activer</button>';
                    }
                    ?>
                <!-- TRANSACTION LIST ITEM -->
                <div class="transaction-list-item" style="overflow: hidden;">
              
                    <div class="transaction-list-item-author admin-s1" style='width:40vh'>
                        <p class="category primary" style='padding:0 1vh'>
                            <?= $dones_offers['e_nom']; ?>
                            <?php
                                if($dones_offers['e_premium'] == 1){
                                    echo '<span class="tertiary">PREMIUM</span>';
                                }
                            ?> 
                        </p>
                    </div>
 
                    <div class="transaction-list-item-detail admin-s1" style='width:20vh'>
                        <p><?= displayMontant($dones_offers['e_remuneration'], 2, ' €'); ?></p>
                    </div>
                    <div class="transaction-list-item-code" style='width:10vh'>
                        <p><?= $dones_offers['e_actif']; ?></p>
                    </div>
                    <div class="transaction-list-item-price flexy">
                        <?= $boutonActif; ?>
                        <a href="<?= url_panel; ?>/emailing.php?action=update&id=<?= $dones_offers['id']; ?>" style="margin:0.75vh 0.5vh"  class="btn btn-primary">Modifier</a>
                    </div>
                </div>
                <!-- /TRANSACTION LIST ITEM -->
                <?php endforeach; ?>
                </form>
                <?php if ($pageActuelle != 1) 
                {
                    $page_p = ($pageActuelle - 1); 
                ?>
                <a href="<?= url_panel; ?>/emailing.php?page=<?php echo $page_p; ?>">
                    <div class="btn btn-primary float-left">Page précédente</div>
                </a>
                <?php
                } 
                ?>
                <?php if (($pageActuelle == 1 AND $nombreDePages > $pageActuelle) OR $nombreDePages > $pageActuelle) 
                {
                     $page_s = ($pageActuelle + 1); 
                ?>
                     <a href="<?= url_panel; ?>/emailing.php?page=<?php echo $page_s; ?>">
                     <div class="btn btn-primary" style="float : right;">Page suivante</div></a>
                <?php 
                } 
                ?>
                </div>
        
        <!-- DASHBOARD CONTENT -->
    <?php elseif ($_GET['action'] == 'add'):?>
        <!-- DASHBOARD CONTENT -->
            <!-- HEADLINE -->
            <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                        <h4 class="text-primary" > Ajouter une emailing</h4>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="<?= url_panel; ?>/emailing.php" class="button btn-primary btn-icon-split">Retour</a>
                            </li>
                        </ul>
            </nav>

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

                    <form id="profile-info-form" method="post" enctype="multipart/form-data">
                           
                            <label for="nom" class="text-primary">Nom de l'offre</label>
                            <input type="text" id="nom" name="nom" value="<?= $post_nom; ?>" placeholder="Entrez le nom de l'offre..." required>
                            
                            <label for="url" class="text-primary">Url de l'offre</label>
                            <input type="text" id="url" name="url" value="<?= $post_url; ?>" placeholder="Entrez l'url de l'offre..." required>

                            <label for="description1" class="text-primary">Description de l'offre</label>
                            <input type="text" id="description1" name="description" placeholder="Entrez une courte description (optionel)" value="<?= $post_description; ?>">
              
                            <label for="remuneration" class="text-primary">Rémunération aux membres</label>
                            <input type="number" step="0.01" min="0.01" id="remuneration" name="remuneration" placeholder="0,01" value="<?= $post_remuneration; ?>" required>

                            <label for="premium" class="text-primary">Premium</label>
                            <label for="premium" class="select-block">
                                <select name="premium" id="premium">
                                    <option value="0">Non</option>
                                    <option value="1">Oui</option>
                                </select>
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
                                    <use xlink:href="#svg-arrow"></use>
                                </svg>
                                <!-- /SVG ARROW -->
                            </label>

                            <label for="valid" class="text-primary">Validation directe (0 = non | 1 = oui)</label>
                            <input type="number" min="0" max="1" id="valid" name="valid" placeholder="0" value="<?= $post_valid; ?>" required>

                            <label for="quota" class="text-primary">Quota quotidien (0 = illimité)</label>
                            <input type="number" min="0" id="quota" name="quota" placeholder="0" value="<?= $post_quota; ?>">

                            <label for="imageMission" class="text-primary">Image de la mission</label>
                            <input id="image" name="imageMission" type="file" placeholder="Uploader une image" required style="width: 100%;padding: 10px;border: 1px solid #ebebeb;">

                            <input type="hidden" name="idoffre" value="new"/>
                            <input type="submit" name="submit_add" class="button  btn-primary btn-icon-split" value="Ajouter la mission">
                    </form>

        <!-- DASHBOARD CONTENT -->
    <?php elseif ($_GET['action'] == 'update'):?>
        <?php //Bloc req SQL pour le formulaire de modification
            $sqlMissions = $pdo->query("SELECT * FROM e_offers WHERE id = '".intval($_GET['id'])."'");
            $resultatMissions = $sqlMissions->fetch();
            $nomOffre = $resultatMissions['e_nom'];
            $urlOffre = $resultatMissions['e_url'];
            $descriptionOffre = $resultatMissions['e_description'];
            $descriptionOffre2 = $resultatMissions['e_description2'];
            $paysOffre = $resultatMissions['e_pays'];
            $remunerationOffre = $resultatMissions['e_remuneration'];
            $montantOffre = $resultatMissions['e_montant'];
            $validOffre = $resultatMissions['e_valid'];
            $regieOffre = $resultatMissions['e_regie'];
            $annonceurOffre = $resultatMissions['e_annonceur'];
            $quotaOffre = $resultatMissions['e_quota'];
            $premiumOffre = $resultatMissions['e_premium'];
            $imageMission = $resultatMissions['e_image'];
        ?>
        <!-- DASHBOARD CONTENT -->
        <div class="dashboard-content">
            <!-- HEADLINE -->
            <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                        <h4 class="text-primary" > Modifier une emailing</h4>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="<?= url_panel; ?>/emailing.php" class="button btn-primary btn-icon-split">Retour</a>
                            </li>
                        </ul>
            </nav>
            <!-- /HEADLINE -->
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
            <!-- FORM BOX ITEMS -->
            <div class="form-box-items">
                <!-- FORM BOX ITEM -->
                <div class="form-box-item"> 
                <div class="input-container">
                            <center>
                                <img class="img_cashback" style='width:30vh' src="<?= $imageMission; ?>">
                            </center>
                        </div>
                    <form id="profile-info-form" method="post" enctype="multipart/form-data">
                        <!-- INPUT CONTAINER -->
                            <label for="nom" class="text-primary">Nom de l'offre</label>
                            <input type="text" id="nom" name="nom" value="<?= $nomOffre; ?>" placeholder="Entrez le nom de l'offre..." required>

                            <label for="url" class="text-primary">Url de l'offre</label>
                            <input type="text" id="url" name="url" value="<?= $urlOffre; ?>" placeholder="Entrez l'url de l'offre..." required>

                            <label for="description1" class="text-primary">Description de l'offre</label>
                            <input type="text" id="description1" name="description" placeholder="Entrez une courte description (optionel)" value="<?= $descriptionOffre; ?>">

                            <label for="remuneration" class="text-primary">Rémunération aux membres</label>
                            <input type="number" step="0.01" min="0.01" id="remuneration" name="remuneration" placeholder="0,01" value="<?= $remunerationOffre; ?>" required>

                            <label for="premium" class="text-primary">Premium</label>
                            <label for="premium" class="select-block">
                                <select name="premium" id="premium">
                                    <option value="0"<?php if ($premiumOffre == 0) echo ' selected'; ?>>Non</option>
                                    <option value="1"<?php if ($premiumOffre == 1) echo ' selected'; ?>>Oui</option>
                                </select>
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
                                    <use xlink:href="#svg-arrow"></use>
                                </svg>
                                <!-- /SVG ARROW -->
                            </label>

                            <label for="valid" class="text-primary">Validation directe (0 = non | 1 = oui)</label>
                            <input type="number" min="0" max="1" id="valid" name="valid" placeholder="0" value="<?= $validOffre; ?>" required>

                            <label for="quota" class="text-primary">Quota quotidien (0 = illimité)</label>
                            <input type="number" min="0" id="quota" name="quota" placeholder="0" value="<?= $quotaOffre; ?>">

                            <div class="input-container">
                            <label for="imageMission" class="text-primary">Image de la mission</label>
                                <div 
                                    class='button btn-success' 
                                    id='button_ancien' 
                                    style='cursor: pointer;' 
                                    onclick='document.getElementById("image").style.display="block";document.getElementById("button_ancien").style.display="none";'
                                    >
                                    Modifier l'image
                                </div>
                   
                                <input 
                                    id="image"   
                                    class='code_io'  
                                    name="imageMission" 
                                    type="file" 
                                    placeholder="Uploader une image" 
                                    style="width: 100%;padding: 10px;border: 1px solid #ebebeb;"
                                >
                        </div>
                    

                        <input type="submit" name="submit_upd" class="button btn-primary btn-icon-split" value="Modifier la mission">
                    </form>
        </div>
    <?php endif; ?>
    <!-- /DASHBOARD BODY -->

<?php
	include('./requiert/inc-footer.php');
?>