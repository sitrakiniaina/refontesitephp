<?php //Requete pour compter le nombre de membre
$sql = $pdo->query('SELECT COUNT(id) AS membreTotal FROM users');
$donnees = $sql->fetchAll();
$membreTotal = $donnees[0]['membreTotal'];
?>
<?php //Requete pour compter le nombre de profil a vérifier
  $user = $pdo->query("SELECT * FROM users WHERE nom != '' && prenom != '' && adresse != '' && ville != '' && codePostal != '' && code_verif != 1 && code_verif_date = '' ORDER BY id DESC");
  $all_users_profil = $user->fetchAll(PDO::FETCH_ASSOC);
?>

<?php //Requete pour compter le nombre d'identité a vérifier
  $user = $pdo->query("SELECT * FROM users WHERE ident_verso != '' && ident_recto != '' && ident_verif = 0 ORDER BY id DESC");
  $all_users_idt = $user->fetchAll(PDO::FETCH_ASSOC);
?>

<?php //Requete pour compter le nombre d'identité a vérifier
  $user = $pdo->query("SELECT * FROM users WHERE banni = 2 ORDER BY id DESC");
  $double = $user->fetchAll(PDO::FETCH_ASSOC);
?>

<?php //Requete pour compter le nombre de membre
  $io = $pdo->query('SELECT COUNT(id) AS membreTotal FROM livredor WHERE statut=0');
  $ioo = $io->fetchAll();
  $avis = $ioo[0]['membreTotal'];
?>

  <!-- Page Wrapper -->
  <div id="wrapper" style='margin:-1.95% 0 0 0;padding:0' >

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Administration</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a href="<?= url_panel; ?>/index.php" class="collapse-item"> Accueil</a>
            <a href="membres.php" class="collapse-item"> Membres</a>
            <a href="gagnants.php" class="collapse-item" > Gagnants</a>
            <a href="messagerie.php" class="collapse-item">Messagerie</a>
            <a href="users.php" class="collapse-item">Users</a>
            <a href="boutique.php" class="collapse-item">boutique</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Les validations</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                <a href="<?= url_panel; ?>/clicks.php"  class="collapse-item" ><span class="glyphicon  glyphicon-tag"></span>historique click</a>
                <a href="validations.php" class="collapse-item"><span class="sl-icon icon-check"></span>Validations</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Newcashback" aria-expanded="true" aria-controls="Newcashback">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Boutique</span>
        </a>
        <div id="Newcashback" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                <a href="<?= url_panel; ?>/retailers.php"  class="collapse-item" ><span class="glyphicon glyphicon-piggy-bank"></span>Cashback</a>
                <a href="<?= url_panel; ?>/coupons.php"  class="collapse-item" ><span class="glyphicon  glyphicon-tag"></span>Coupons</a>
            </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Accecibiliter</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
                <a href="emailing.php" class="collapse-item"><span class="sl-icon icon-layers"></span>e-mailing</a>
                <a href="missions.php" class="collapse-item"><span class="sl-icon icon-layers"></span>Missions</a>
                <a href="<?= url_panel; ?>/categories.php"  class="collapse-item" ><span class="glyphicon glyphicon-list-alt"></span>Categorie</a>
                <a href="<?= url_panel; ?>/marque.php"  class="collapse-item" ><span class="glyphicon  glyphicon-tag"></span>Marque Produit</a>
                <a href="avis.php" class="collapse-item"><span class="glyphicon glyphicon-comment"></span>Validation des avis<span class="pin soft-edged big primary"><?= $avis; ?></span></a>
                <a href="newsletter.php" class="collapse-item"><span class="sl-icon icon-envelope"></span>Newsletter</a>
          </div>
        </div>
      </li>
        <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#parametre" aria-expanded="true" aria-controls="parametre">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Parametre</span>
        </a>
        <div id="parametre" class="collapse" aria-labelledby="headingUtilities" data-parent="#parametre">
          <div class="bg-white py-2 collapse-inner rounded">
            <a href="<?= url_panel; ?>/afftnetwork.php"  class="collapse-item" ><span class="glyphicon glyphicon-signal"></span>Reseau d'affiliation</a>
            <a href="bannier.php"  class="collapse-item"><span class="glyphicon glyphicon-comment"></span>image de bannier </a>
            <a href="faq.php"  class="collapse-item"><span class="sl-icon icon-star"></span>F.A.Q</a>
            <a href="<?= url_panel; ?>/csv_import.php"  class="collapse-item" ><span class="glyphicon  glyphicon-tag"></span>csv import</a>
            <a href="parrainage.php" class="collapse-item" >Parrainage</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item"><a href="index.php?action=logout"  class="nav-link">Logout</a></li>

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

     
        </nav>
        <!-- End of Topbar -->

	<div class="container">
