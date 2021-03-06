<?php
	include('./requiert/inc-head.php');

	include('./requiert/php-global.php');
	
	$meta_title = 'Panel d\'administration : Pages | cashbackreduction.com';

    $nomPage = 'pages';
	
	include('./requiert/inc-header-navigation.php');

    include('./requiert/php-form/pages.php');
?>

    <!-- DASHBOARD BODY -->
    <div class="dashboard-body">
        <?php if (!isset($_GET['action'])):?>
        <!-- DASHBOARD CONTENT -->
        <div class="dashboard-content">
            <!-- HEADLINE -->
     
            <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                        <h4 class="text-primary" >
                         Administration des pages
                        </h4>
                         
            </nav>
            <!-- /HEADLINE -->
            <?php
            $messagesParPage = 50;
            $retour_total = $pdo->query("SELECT COUNT(*) AS total FROM pages");
            $donnees_total = $retour_total->fetch();
            $total = $donnees_total['total'];
            $nombreDePages = ceil($total / $messagesParPage);

            if (isset($_GET['page'])) { $pageActuelle = intval($_GET['page']); if ($pageActuelle > $nombreDePages) { $pageActuelle = $nombreDePages; } } else { $pageActuelle = 1; }

            $premiereEntree = ($pageActuelle - 1) * $messagesParPage;

            $offer = $pdo->query("SELECT * FROM pages ORDER BY nom LIMIT ".$premiereEntree.", ".$messagesParPage."");
            $all_offers = $offer->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <!-- /PROFILE NOTIFICATION -->
            <div class="profile-notifications faq">
                <?php foreach ($all_offers as $dones_offers):?>
                    <div class="profile-notification">
                        <div class="profile-notification-body">
                            <p class="text-header">
                                <?= $dones_offers['nom']; ?>
                            </p>

                        </div>
                        <div class="profile-notification-type">
                            <a href="<?= url_panel; ?>/pages.php?action=update&id=<?= $dones_offers['id']; ?>" class="button secondary">Modifier</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- /PROFILE NOTIFICATION -->

        </div>
        <!-- /DASHBOARD CONTENT

        <?php elseif ($_GET['action'] == 'update'): ?>
            <?php //Bloc req SQL pour le formulaire de modification
            $sqlPages = $pdo->query("SELECT * FROM pages WHERE id = '".intval($_GET['id'])."'");
            $resultatPages = $sqlPages->fetch();
            $nomPage = $resultatPages['nom'];
            $contenuPage = $resultatPages['contenu'];
            ?>
        <!-- DASHBOARD CONTENT -->
        <div class="dashboard-content">
                <!-- HEADLINE -->

                <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                        <h4 class="text-primary" >
                         Administration des pages
                        </h4>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="<?= url_panel; ?>/pages.php" class="button btn-primary btn-icon-split">Retour</a>
                            </li>
                </nav>
                <!-- /HEADLINE -->
                <!-- FORM BOX ITEMS -->
                <div class="form-box-items">
                    <!-- FORM BOX ITEM -->
                    <div class="form-box-item full">
                        <h4 class="text-primary">Modifier une page : <?= html_entity_decode($nomPage); ?></h4>
                        <hr class="line-separator">
                        <form id="upload_form" method="post">
                            <!-- INPUT CONTAINER -->
                            <div class="input-container half">
                                <label for="contenu" class="text-primary">Contenu de la page</label>
                                <textarea id="contenu" name="contenu" placeholder="Entrer le contenu de la page..."><?= $contenuPage; ?></textarea>
                            </div>
                            <!-- /INPUT CONTAINER -->
                            <hr class="line-separator">
                            <input type="submit" name="submit_upd" value="Modifier" class="button btn-primary btn-icon-split"/>
                        </form>
                    </div>
                    <!-- /FORM BOX ITEM -->
                </div>
                <!-- /FORM BOX ITEMS -->
            </div>
        <!-- /DASHBOARD CONTENT -->
        <?php endif; ?>
        <div class="clearfix"></div>
    </div>
    <!-- /DASHBOARD BODY -->
		

<?php include('./requiert/inc-footer.php');?>