<?php

include('./requiert/new-form/header.php');

if (headers_sent()) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    ?>
    <script>
        window.location=<?= explode('/',$_SERVER['PHP_SELF'])[1]   ?>;
    </script>
    <?php
} 
 
if (!isset($_SESSION['id'])) {
    ?>
    <script>
        window.location="/connexion.php";
    </script>
    <?php
    exit();
}

if (!empty($_GET['id'])): $id = $_GET['id'];
else: $id = null;
endif;

    if($_GET['action'] === 'add'){

        $pdo->exec(
            "INSERT INTO `favoris_mission` 
            (
            `id`, 
            `id_mission`, 
            `id_user`
            ) 
            VALUES 
            (
            '', 
            '".$id."', 
            '".$_SESSION['id']."'
            )
            ");

    }else if($_GET['action'] === 'remove'){

        $pdo->exec("DELETE FROM favoris_mission WHERE id_mission = '".$id."' AND id_user='".$_SESSION['id']."'");
  
    }

    ?>
    <script>
        window.location="/mission.php";
    </script>
    <?php
?>