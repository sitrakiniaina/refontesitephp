<?php
include('./requiert/inc-head.php');

include('./requiert/php-global.php');

require_once("./cashback/inc/config.inc.php");

require_once("./cashback/inc/admin_funcs.inc.php");

$query = "SELECT * FROM cashbackengine_categories ORDER BY sort_order, name";

$result = smart_mysql_query($query);

$total = mysqli_num_rows($result);

$cc = 0;
 
$meta_title = 'Panel d\'administration : categorie | cashbackreduction.com';

$nomPage = 'categorie';

include('./requiert/inc-header-navigation.php');

?>

<nav class="navbar navbar-expand navbar-light bg-light mb-4">
                        <h4 class="text-primary" >Categories</h4>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="<?= url_panel; ?>/category_add.php" class="button btn-primary btn-icon-split">Ajouter une catégorie</a>
                            </li>
                        </ul>
</nav>
<?php if ($total > 0) { ?>

    <?php if (isset($_GET['msg']) && $_GET['msg'] != "") { ?>
        <div style="width:100%;" class="alert alert-success">
            <?php

            switch ($_GET['msg'])
            {
                case "added":	echo "La catégorie a été ajoutée avec succès"; break;
                case "exists":	echo "Désolé, une catégorie existe déjà avec ce nom"; break;
                case "updated": echo "La catégorie a été mise à jour"; break;
                case "deleted": echo "La catégorie a été supprimé"; break;
            }

            ?>
        </div>
    <?php } ?>
    <div class="transaction-list">

                <!-- TRANSACTION LIST HEADER -->
                <div class="transaction-list-header">
                    <div  class="transaction-list-item-date admin-s1" style='width:55vh'>
                        <p class="text-header small"> Nom de la catégorie</p>
                    </div>
                    <div  class="transaction-list-item-date admin-s1">
                        <p class="text-header small">Cashback/Revendeur</p>
                    </div>
                    <div  class="transaction-list-item-date admin-s1">
                        <p class="text-header small">Actions</p>
                    </div>
                </div>
 
        <?php $allcategories = array(); $allcategories = CategoriesList(0); foreach ($allcategories as $category_id => $category_name) { $cc++; ?>
            <div class="transaction-list-item" style="overflow: hidden;">
                    <div class="transaction-list-item-date admin-s1" style='width:55vh'>
                    <p>  <a href="category_edit.php?id=<?php echo $category_id; ?>">
                            <?php echo $category_name; ?>
                        </a>
                        </p>
                    </div>

                    <div  class="transaction-list-item-date admin-s1">
                       <p> <?php echo CategoryTotalItems($category_id); ?></p>
                    </div>

                    <div  class="transaction-list-item-date " style='border:1px solid white;padding:1vh;margin:0 1vh'>
                        <a href="<?= url_panel ?>/category_edit.php?id=<?php echo $category_id; ?>" 
                        
                         class="btn btn-warning" >Modifier</a>
                        <a href="#" class="btn btn-danger"    onclick="if (confirm('Êtes-vous sûr de vouloir vraiment supprimer cette catégorie ?') )location.href='<?= url_panel ?>/category_delete.php?id=<?php echo $category_id; ?>'" title="Delete">supprimer</a>
                    </div>
            </div>
        <?php } ?>

<?php }else{ ?>
    <div class="info_box">Aucune catégorie enregistré.</div>
<?php } ?>
</div>
<?php
	include('./requiert/inc-footer.php');
?>